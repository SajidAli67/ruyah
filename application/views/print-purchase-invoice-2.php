<!DOCTYPE html>
<html>
<title><?= $page_title; ?></title>

<head>
  <?php include "comman/code_css.php"; ?>
  <link rel='shortcut icon' href='<?php echo $theme_link; ?>images/favicon.ico' />

  <style>
    @page {
      margin: 10px 20px 10px 20px;
    }

    table,
    th,
    td {
      /* border: 0.5pt solid #0070C0; */
      border-collapse: collapse;

    }

    th,
    td {
      /*padding: 5px;*/
      /* text-align: left; */
      vertical-align: top
    }

    body {
      word-wrap: break-word;
      font-family: 'sans-serif', 'Arial';
      font-size: 11px;
      /*height: 210mm;*/
    }

    .style_hidden {
      border-style: hidden;
    }

    .fixed_table {
      table-layout: fixed;
    }

    .text-center {
      text-align: center;
    }

    .text-left {
      text-align: left;
    }

    .text-right {
      text-align: right;
    }

    .text-bold {
      font-weight: bold;
    }

    .bg-sky {
      background-color: #E8F3FD;
    }

    @page {
      size: A5 margin: 5px;
    }

    body {
      margin: 5px;
    }

    #clockwise {
      rotate: 90;
    }

    #counterclockwise {
      rotate: -90;
    }
  </style>
</head>

<body onload="window.print();"><!-- window.print() -->
  <?php


  use Salla\ZATCA\GenerateQrCode;
  use Salla\ZATCA\Tags\InvoiceDate;
  use Salla\ZATCA\Tags\InvoiceTaxAmount;
  use Salla\ZATCA\Tags\InvoiceTotalAmount;
  use Salla\ZATCA\Tags\Seller;
  use Salla\ZATCA\Tags\TaxNumber;


  $q1 = $this->db->query("select * from db_store where status=1 and id=" . get_current_store_id());
  $res1 = $q1->row();
  $store_name = $res1->store_name;
  $company_mobile = $res1->mobile;
  $company_phone = $res1->phone;
  $company_email = $res1->email;
  //$company_country=$res1->country;
  //$company_state=$res1->state;
  $company_city = $res1->city;
  $company_address = $res1->address;
  $company_gst_no = $res1->gst_no;
  $company_vat_no = $res1->vat_no;
  $store_logo = (!empty($res1->store_logo)) ? $res1->store_logo : store_demo_logo();
  $store_website = $res1->store_website;
  $bank_details = $res1->bank_details;
  $terms_and_conditions = ""; //$res1->purchase_terms_and_conditions;



  $q3 = $this->db->query("SELECT a.supplier_name,a.mobile,a.phone,a.gstin,a.tax_number,a.email,
                           a.opening_balance,a.country_id,a.state_id,a.created_by,
                           a.postcode,a.address,b.purchase_date,b.created_time,b.reference_no,
                           b.purchase_code,b.purchase_note,b.purchase_status,
                           coalesce(b.grand_total,0) as grand_total,
                           coalesce(b.subtotal,0) as subtotal,
                           coalesce(b.paid_amount,0) as paid_amount,
                           coalesce(b.other_charges_input,0) as other_charges_input,
                           other_charges_tax_id,
                           coalesce(b.other_charges_amt,0) as other_charges_amt,
                           discount_to_all_input,
                           b.discount_to_all_type,
                           coalesce(b.tot_discount_to_all_amt,0) as tot_discount_to_all_amt,
                           coalesce(b.round_off,0) as round_off,
                           b.payment_status

                           FROM db_suppliers a,
                           db_purchase b 
                           WHERE 
                           a.`id`=b.`supplier_id` AND 
                           b.`id`='$purchase_id' 
                           ");


  $res3 = $q3->row();
  $supplier_name = $res3->supplier_name;
  $supplier_mobile = $res3->mobile;
  $supplier_phone = $res3->phone;
  $supplier_email = $res3->email;
  $supplier_country = get_country($res3->country_id);
  $supplier_state = get_state($res3->state_id);
  $supplier_address = $res3->address;
  $supplier_postcode = $res3->postcode;
  $supplier_gst_no = $res3->gstin;
  $supplier_tax_number = $res3->tax_number;
  $supplier_opening_balance = $res3->opening_balance;
  $purchase_date = $res3->purchase_date;
  $created_time = $res3->created_time;
  $reference_no = $res3->reference_no;
  $purchase_code = $res3->purchase_code;
  $purchase_note = $res3->purchase_note;
  $purchase_status = $res3->purchase_status;
  $created_by = $res3->created_by;


  $subtotal = $res3->subtotal;
  $grand_total = $res3->grand_total;
  $other_charges_input = $res3->other_charges_input;
  $other_charges_tax_id = $res3->other_charges_tax_id;
  $other_charges_amt = $res3->other_charges_amt;
  $paid_amount = $res3->paid_amount;
  $discount_to_all_input = $res3->discount_to_all_input;
  $discount_to_all_type = $res3->discount_to_all_type;
  $discount_to_all_type = ($discount_to_all_type == 'in_percentage') ? '%' : 'Fixed';
  $tot_discount_to_all_amt = $res3->tot_discount_to_all_amt;
  $round_off = $res3->round_off;
  $payment_status = $res3->payment_status;



  $displayQRCodeAsBase64 = GenerateQrCode::fromArray([
  	new Seller($store_name), // seller name        
  	new TaxNumber($company_vat_no), // seller tax number
  	new InvoiceDate($purchase_date .' ' . $created_time), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
  	new InvoiceTotalAmount(number_format($grand_total, 2, '.', '')), // invoice total amount
  	// new InvoiceTaxAmount(number_format(($tax_amt), 2, '.', '')) // invoice tax amount
  	// TODO :: Support others tags
  ])->render();


  ?>

  <caption>
    <center>
      <span style="font-size: 18px;text-transform: uppercase;">
        <?= $this->lang->line('purchase_invoice') ?>
      </span>
    </center>
  </caption>

  <table autosize="1" id='mytable' align="center" width="100%" cellpadding="0" cellspacing="0">
    <!-- <table align="center" width="100%" height='100%'   > -->

    <thead>

      <tr>
        <th colspan="16">
          <table width="100%" height='100%' class="style_hidden fixed_table">
             
         
          <tr>
              <td align="center">

                <span>

                  <strong style="font-size:24px"><?= $store_name; ?></strong><br>

                  <?php echo (!empty(trim($company_address))) ? $this->lang->line('company_address') . "" . html_entity_decode($company_address) . "<br>" : ''; ?>


                  <?php echo (!empty(trim($company_gst_no)) && gst_number()) ? $this->lang->line('gst_number') . ": " . $company_gst_no . "<br>" : ''; ?>

                  <?php echo (!empty(trim($company_vat_no)) && vat_number()) ? $this->lang->line('vat_number') . ": " . $company_vat_no . "<br>" : ''; ?>

                  <!-- <?php if (!empty(trim($company_mobile))) {

                          echo $this->lang->line('phone') . ": " . $company_mobile;

                          if (!empty($company_phone)) {

                            echo "," . $company_phone;
                          }

                          echo "<br>";
                        }

                        echo (!empty($company_email)) ? $company_email . "," : '';

                        echo (!empty($store_website)) ? $store_website . "<br>" : '';



                        ?>  -->

                </span>

              </td>

            </tr>

            <tr>
        
              <td align="center"><strong style="font-size:24px">فاتورة ضريبية مبسطة</strong><br>

              </td>

            </tr>

            <tr align="center">
              <td>
              <?php echo "<img src='" . $displayQRCodeAsBase64 . "' alt='QR Code' style='width:130px; height:130px;' />" ?>

              </td> 
            </tr>
            <tr>

              <table width="100%">
                <tr>
                  <td width="50%">
                    <table>
                      <tr>
                        <td> <?= $this->lang->line('name') ?></td>
                        <td><?= $supplier_name ?></td>
                      </tr>

                      <tr>
                        <td><?= $this->lang->line('email') ?></td>
                        <td><?= $supplier_email ?></td>
                      </tr>

                      <tr>
                        <td><?= $this->lang->line('mobile') ?></td>
                        <td><?= $supplier_mobile ?></td>
                      </tr>

                      <tr>
                        <td><?= 'VAT' ?></td>
                        <td><?= $supplier_tax_number ?></td>
                      </tr>

                      <tr>
                        <td><?= $this->lang->line('address') ?></td>
                        <td><?= $supplier_address ?></td>
                      </tr>
                    </table>

                 
                  </td>

                  <!-- Second Half -->
                  <td width="50%" align="right">
      
                      <table style="width: 100%;">

                        <tr align="right">
                          <td colspan="4">
                            Invoice No.

                          </td>
                          <td align="right">
                            <?php echo "$purchase_code"; ?></b>

                          </td>
                        </tr>
                        <tr align="right">
                          <td colspan="4">
                            Dated
                          </td>

                          <td align="right">
                            <?php echo show_date($purchase_date); ?>
                          </td>
                        </tr>
                        <tr align="right">
                          <td colspan="4">
                            Reference No.


                          </td>
                          <td align="right">
                            <?php echo "$reference_no"; ?>
                          </td>

                        </tr>
                      </table>
                  </td>
                </tr>
              </table>


            </tr>
      
        </th>
      </tr>

      <tr>
        <td colspan="16">&nbsp; </td>
      </tr>
      <tr class="bg-sky"><!-- Colspan 10 -->
        <th colspan='2' class="text-center"><?= $this->lang->line('sl_no'); ?></th>
        <th colspan='4' class="text-center"><?= $this->lang->line('description_of_goods'); ?></th>
        <th colspan='2' class="text-center"><?= $this->lang->line('hsn'); ?></th>
        <th colspan='2' class="text-center"><?= $this->lang->line('unit_cost'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('qty'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('tax'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('tax_amt'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('disc.'); ?></th>
        <!-- <th colspan='2' class="text-center"><?= $this->lang->line('rate'); ?></th> -->
        <th colspan='2' class="text-center"><?= $this->lang->line('amount'); ?></th>
      </tr>
    </thead>



    <tbody>
      <tr>
        <td colspan='16'>
          <?php
          $i = 1;
          $tot_qty = 0;
          $tot_purchase_price = 0;
          $tot_tax_amt = 0;
          $tot_discount_amt = 0;
          $tot_unit_total_cost = 0;
          $tot_total_cost = 0;
          $tot_before_tax = 0;


          $this->db->select(" a.description,c.item_name, a.purchase_qty,a.tax_type,
                                  a.price_per_unit, b.tax,b.tax_name,a.tax_amt,
                                  a.discount_input,a.discount_amt, a.unit_total_cost,
                                  a.total_cost , d.unit_name,c.sku,c.hsn
                              ");
          $this->db->where("a.purchase_id", $purchase_id);
          $this->db->from("db_purchaseitems a");
          $this->db->join("db_tax b", "b.id=a.tax_id", "left");
          $this->db->join("db_items c", "c.id=a.item_id", "left");
          $this->db->join("db_units d", "d.id = c.unit_id", "left");
          $q2 = $this->db->get();


          foreach ($q2->result() as $res2) {
            $discount = (empty($res2->discount_input) || $res2->discount_input == 0) ? '0' : $res2->discount_input . "%";
            $discount_amt = (empty($res2->discount_amt) || $res2->discount_input == 0) ? '0' : $res2->discount_amt . "";
            $before_tax = $res2->unit_total_cost; // * $res2->purchase_qty;
            $tot_cost_before_tax = $before_tax * $res2->purchase_qty;


            echo "<tr>";
            echo "<td colspan='2' class='text-center'>" . $i++ . "</td>";
            echo "<td colspan='4'>";
            echo $res2->item_name;
            echo (!empty($res2->description)) ? "<br><i>[" . nl2br($res2->description) . "]</i>" : '';
            echo "</td>";
            echo "<td colspan='2' class='text-left'>" . $res2->hsn . "</td>";
            echo "<td colspan='2' class='text-right'>" . store_number_format($res2->price_per_unit) . "</td>";

            echo "<td class='text-center'>" . format_qty($res2->purchase_qty) . "</td>";
            echo "<td colspan='1' class='text-right'>" . store_number_format($res2->tax) . "%</td>";
            echo "<td style='text-align: right;'>" . store_number_format($res2->tax_amt) . "</td>";
            //echo "<td style='text-align: right;'>".$discount."</td>";
            echo "<td style='text-align: right;'>" . store_number_format($discount_amt) . "</td>";

            //echo "<td colspan='2' class='text-right'>".number_format($before_tax,2)."</td>";
            //echo "<td class='text-right'>".$res2->price_per_unit."</td>";

            echo "<td colspan='2' class='text-right'>" . store_number_format($res2->total_cost) . "</td>";
            echo "</tr>";
            $tot_qty += $res2->purchase_qty;
            $tot_purchase_price += $res2->price_per_unit;
            $tot_tax_amt += $res2->tax_amt;
            $tot_discount_amt += $res2->discount_amt;
            $tot_unit_total_cost += $res2->unit_total_cost;
            $tot_before_tax += $before_tax;
            $tot_total_cost += $res2->total_cost;
          }
          ?>
        </td>
      </tr>
    </tbody>


    <tfoot>


      <tr class="bg-sky">
        <td colspan="8" class='text-center text-bold'><?= $this->lang->line('total'); ?></td>
        <td colspan="2" class='text-right'><b><?php echo store_number_format($tot_purchase_price); ?></b></td>
        <td colspan="1" class='text-bold text-center'><?= format_qty($tot_qty); ?></td>
        <td colspan="1" class='text-bold text-center'></td>
        <td colspan="1" class='text-right'><b><?php echo store_number_format($tot_tax_amt); ?></b></td>
        <td colspan="1" class='text-right'><b><?php echo store_number_format($tot_discount_amt); ?></b></td>
        <td colspan="2" class='text-right'><b><?php echo store_number_format($tot_total_cost); ?></b></td>
      </tr>
      <tr>
        <td colspan="14" class='text-right'><b><?= $this->lang->line('subtotal'); ?></b></td>
        <td colspan="2" class='text-right'><b><?php echo store_number_format($tot_total_cost); ?></b></td>
      </tr>


      <tr>
        <td colspan="14" class='text-right'><b><?= $this->lang->line('other_charges'); ?></b></td>
        <td colspan="2" class='text-right'><b><?php echo store_number_format($other_charges_amt); ?></b></td>
      </tr>

      <tr>
        <td colspan="14" class='text-right'><b><?= $this->lang->line('discount_on_all'); ?>(<?= store_number_format($discount_to_all_input) . " " . $discount_to_all_type; ?>)</b></td>
        <td colspan="2" class='text-right'><b><?php echo store_number_format($tot_discount_to_all_amt); ?></b></td>
      </tr>

      <tr>
        <td colspan="14" class='text-right'><b><?= $this->lang->line('grand_total'); ?></b></td>
        <td colspan="2" class='text-right'><b><?php echo store_number_format($grand_total); ?></b></td>
      </tr>
      <tr>
        <td colspan="16">
          <span class='amt-in-word'>Amount in words:
            <i style='font-weight:bold;'><?= $this->session->userdata('currency_code') . " " . no_to_words($grand_total) ?>
            </i>
          </span>
        </td>
      </tr>
      <tr>
        <td colspan="16">
          <span class='amt-in-word'>
            <?= $this->lang->line('note') . ":<b>" . nl2br($purchase_note) . "</b>"; ?>
          </span>
        </td>
      </tr>



      <!-- T&C & Bank Details & signatories-->
      <tr>
        <td colspan="16">
          <table width="100%" class="style_hidden fixed_table">

            <tr>
              <td colspan="16">
                <span>
                  <table style="width: 100%;" class="style_hidden fixed_table">

                    <!-- T&C & Bank Details -->
                    <!-- <tr>
                          <td colspan="16">
                            <span><b> <?= $this->lang->line('terms_and_conditions'); ?></b></span><br>
                            <span style='font-size: 8px;'><?= nl2br($terms_and_conditions);  ?></span>
                          </td>
                        </tr>
 -->
                    <tr>
                      <td colspan='8' style="height:80px;">
                        <span><b> <?= $this->lang->line('supplier_signature'); ?></b></span>
                      </td>
                      <td colspan='8'>
                        <span><b> <?= $this->lang->line('authorised_signatory'); ?></b></span>
                      </td>
                    </tr>

                  </table>
                </span>
              </td>
            </tr>

          </table>
        </td>
      </tr>
      <!-- T&C & Bank Details & signatories End -->


    </tfoot>

  </table>
  <!-- <caption>
      <center>
        <span style="font-size: 11px;text-transform: uppercase;">
          This is Computer Generated Invoice
        </span>
      </center>
</caption> -->
</body>

</html>