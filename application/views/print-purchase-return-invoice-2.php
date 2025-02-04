<!DOCTYPE html>
<html>
<title><?= $page_title;?></title>
<head>
  <?php include"comman/code_css.php"; ?>
<link rel='shortcut icon' href='<?php echo $theme_link; ?>images/favicon.ico' />

<style>
@page {
                margin: 10px 20px 10px 20px;
            }
table, th, td {
    border-collapse: collapse;   

}
th, td {
 
    vertical-align:top 
}
body{
  word-wrap: break-word;
  font-family:  'sans-serif','Arial';
  font-size: 11px;
  /*height: 210mm;*/
}
.style_hidden{
  border-style: hidden;
}
.fixed_table{
  table-layout:fixed;
}
.text-center{
  text-align: center;
}
.text-left{
  text-align: left;
}
.text-right{
  text-align: right;
}
.text-bold{
  font-weight: bold;
}
.bg-sky{
  background-color: #E8F3FD;
}
@page { size: A5 margin: 5px; }
body { margin: 5px; }

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
    $q1=$this->db->query("select * from db_store where status=1 and id=".get_current_store_id());
    $res1=$q1->row();
    $store_name=$res1->store_name;
    $company_mobile=$res1->mobile;
    $company_phone=$res1->phone;
    $company_email=$res1->email;
    //$company_country=$res1->country;
    //$company_state=$res1->state;
    $company_city=$res1->city;
    $company_address=$res1->address;
    $company_gst_no=$res1->gst_no;
    $company_vat_no=$res1->vat_no;
    $store_logo=(!empty($res1->store_logo)) ? $res1->store_logo : store_demo_logo();
    $store_website=$res1->store_website;
    $bank_details=$res1->bank_details;
    $terms_and_conditions="";//$res1->purchase_terms_and_conditions;

    $upi_code=$res1->upi_code;
    $upi_id=$res1->upi_id;
    if(!empty($upi_code)){
      //if(file_exists(base_url('uploads/upi/'.$upi_code))){
        $upi_code = base_url('uploads/upi/'.$upi_code);
     // }
    }
    else{
      $upi_code='';
    }

    
    $currency_id="1";//$res4->currency_id;
    
    $q3=$this->db->query("SELECT a.supplier_name,a.mobile,a.phone,a.gstin,a.tax_number,a.email,
                           a.opening_balance,a.country_id,a.state_id,a.created_by,
                           a.postcode,a.address,b.return_date,b.created_time,b.reference_no,
                           b.return_code,b.return_note,b.return_status,b.purchase_id,
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
                           db_purchasereturn b 
                           WHERE 
                           a.`id`=b.`supplier_id` AND 
                           b.`id`='$return_id' 
                           ");
                         
    
    $res3=$q3->row();
    $supplier_name=$res3->supplier_name;
    $supplier_mobile=$res3->mobile;
    $supplier_phone=$res3->phone;
    $supplier_email=$res3->email;
    $supplier_country=get_country($res3->country_id);
    $supplier_state=get_state($res3->state_id);
    $supplier_address=$res3->address;
    $supplier_postcode=$res3->postcode;
    $supplier_gst_no=$res3->gstin;
    $supplier_tax_number=$res3->tax_number;
    $supplier_opening_balance=$res3->opening_balance;
    $return_date=$res3->return_date;
    $created_time=$res3->created_time;
    $reference_no=$res3->reference_no;
    $return_code=$res3->return_code;
    $return_note=$res3->return_note;
    $return_status=$res3->return_status;
    $created_by=$res3->created_by;
    $purchase_id = $res3->purchase_id;
    
    $subtotal=$res3->subtotal;
    $grand_total=$res3->grand_total;
    $other_charges_input=$res3->other_charges_input;
    $other_charges_tax_id=$res3->other_charges_tax_id;
    $other_charges_amt=$res3->other_charges_amt;
    $paid_amount=$res3->paid_amount;
    $discount_to_all_input=$res3->discount_to_all_input;
    $discount_to_all_type=$res3->discount_to_all_type;
    $discount_to_all_type = ($discount_to_all_type=='in_percentage') ? '%' : 'Fixed';
    $tot_discount_to_all_amt=$res3->tot_discount_to_all_amt;
    $round_off=$res3->round_off;
    $payment_status=$res3->payment_status;
    
    

    

    ?>

<table id='mytable' align="center" width="100%">
<!-- <table align="center" width="100%" height='100%'   > -->
  
    <thead>

      <tr>
        <th colspan="16">
          <table width="100%" height='100%' class="style_hidden fixed_table">
              <tr>
                <!-- First Half -->
                <td colspan="16" class="text-center">
                  <img src="<?= base_url($store_logo);?>" width='100px' height='auto'>
                </td>
              </tr>

              <tr>
              <td align="center" colspan="16">

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

            <tr>
        
              <td align="center" colspan="16">
                <strong style="font-size:24px"><?= 'Purchase Debit Note'?></strong><br>

              </td>

            </tr>

            <tr>
              <td colspan="8">
                        <table width="100%">

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

              <td colspan="8">
                <table width="100%">
                        <tr align="right">
                          <td colspan="4">
                            Purchase Debit note.

                          </td>
                          <td align="right">
                            <?php echo "$return_code"; ?></b>

                          </td>
                        </tr>

                        <tr align="right">
                          <td colspan="4">
                            Return Status 
                          </td>

                          <td align="right">
                            <?php echo $return_status=='Return' ? "Purchase Debit Note" : $return_status; ?>
                          </td>
                        </tr>

                        <tr align="right">
                          <td colspan="4">
                            Dated
                          </td>

                          <td align="right">
                            <?php echo show_date($return_date); ?>
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

                        <tr align="right">
                          <td colspan="4">
                            Return Agains Purchase Invoice.
                          </td>
                          <td align="right">
                            <?php echo  get_purchase_details($purchase_id)->purchase_code; ?>
                          </td>

                        </tr>
                        <tr align="right">
                          <td colspan="4">
                            Purchase Date.
                          </td>
                          <td align="right">
                            <?php echo  show_date(get_purchase_details($purchase_id)->purchase_date); ?>
                          </td>

                        </tr>
                </table>
                  
              </td>
            </tr>
            
          </table>
      </th>
      </tr>

      <tr>
        <td colspan="16">&nbsp; </td>
      </tr>
      <tr class="bg-sky"><!-- Colspan 10 -->
        <th colspan='2' class="text-center"><?= $this->lang->line('sl_no'); ?></th>
        <th colspan='4' class="text-center" ><?= $this->lang->line('description_of_goods'); ?></th>
        
        <th colspan='2' class="text-center"><?= $this->lang->line('unit_cost'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('qty'); ?></th>
        <th colspan='2' class="text-center"><?= 'Price'; ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('disc.'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('tax'); ?></th>
        <th colspan='1' class="text-center"><?= $this->lang->line('tax_amt'); ?></th>
        
        <th colspan='2' class="text-center"><?= $this->lang->line('amount'); ?></th>
      </tr>
  </thead>



<tbody>
  <tr>
    <td colspan='16'>
 <?php
              $i=1;
              $tot_qty=0;
              $tot_return_price=0;
              $tot_tax_amt=0;
              $tot_discount_amt=0;
              $tot_unit_total_cost=0;
              $tot_total_cost=0;
              $tot_before_tax=0;
              
              $this->db->select(" a.description,c.item_name, a.return_qty,a.tax_type,
                                  a.price_per_unit, b.tax,b.tax_name,a.tax_amt,
                                  a.discount_input,a.discount_amt, a.unit_total_cost,
                                  a.total_cost , d.unit_name,c.sku,c.hsn
                              ");
              $this->db->where("a.return_id",$return_id);
              $this->db->from("db_purchaseitemsreturn a");
              $this->db->join("db_tax b","b.id=a.tax_id","left");
              $this->db->join("db_items c","c.id=a.item_id","left");
              $this->db->join("db_units d","d.id = c.unit_id","left");
              $q2=$this->db->get();


              foreach ($q2->result() as $res2) {
                  $discount = (empty($res2->discount_input)||$res2->discount_input==0)? '0':$res2->discount_input."%";
                  $discount_amt = (empty($res2->discount_amt)||$res2->discount_input==0)? '0':$res2->discount_amt."";
                  $before_tax=$res2->unit_total_cost;// * $res2->return_qty;
                  $tot_cost_before_tax=$before_tax * $res2->return_qty;

                  
                  echo "<tr>";  
                  echo "<td colspan='2' class='text-center'>".$i++."</td>";
                  echo "<td colspan='4'>";
                  echo $res2->item_name;
                  echo (!empty($res2->description)) ? "<br><i>[".nl2br($res2->description)."]</i>" : '';
                  echo "</td>";
                  
                  echo "<td colspan='2' class='text-right'>".store_number_format($res2->price_per_unit)."</td>";
                  
                  echo "<td class='text-center'>".format_qty($res2->return_qty)."</td>";
                  echo "<td colspan='2' class='text-left'>".store_number_format($res2->price_per_unit * $res2->return_qty)."</td>";
                  echo "<td colspan='1' class='text-right'>".store_number_format($res2->tax)."%</td>";
                  echo "<td style='text-align: right;'>".store_number_format($res2->tax_amt)."</td>";
                  
                  echo "<td style='text-align: right;'>".store_number_format($discount_amt)."</td>";
 
                  //echo "<td colspan='2' class='text-right'>".number_format($before_tax,2)."</td>";
                  //echo "<td class='text-right'>".$res2->price_per_unit."</td>";
                  
                  echo "<td colspan='2' class='text-right'>".store_number_format($res2->total_cost)."</td>";
                  echo "</tr>";  
                  $tot_qty +=$res2->return_qty;
                  $tot_return_price +=$res2->price_per_unit;
                  $tot_tax_amt +=$res2->tax_amt;
                  $tot_discount_amt +=$res2->discount_amt;
                  $tot_unit_total_cost +=$res2->unit_total_cost;
                  $tot_before_tax +=$before_tax;
                  $tot_total_cost +=$res2->total_cost;

              }
              ?>
      </td>
  </tr>

  
  </tbody>


<tfoot>
 

  <tr class="bg-sky">
    <td colspan="8" class='text-center text-bold'><?= $this->lang->line('total'); ?></td>
    <td colspan="2" class='text-right' ><b><?php echo store_number_format($tot_return_price); ?></b></td>
    <td colspan="1" class='text-bold text-center'><?=format_qty($tot_qty); ?></td>
    <td colspan="1" class='text-bold text-center'></td>
    <td colspan="1" class='text-right' ><b><?php echo store_number_format($tot_tax_amt); ?></b></td>
    <td colspan="1" class='text-right' ><b><?php echo store_number_format($tot_discount_amt); ?></b></td>
    <td colspan="2" class='text-right' ><b><?php echo store_number_format($tot_total_cost); ?></b></td>
  </tr>

  <tr>
    <td colspan="16">&nbsp; </td>
  </tr>
  <tr>
    <td colspan="14" class='text-right'><b><?= $this->lang->line('subtotal'); ?></b></td>
    <td colspan="2" class='text-right' ><b><?php echo store_number_format($tot_total_cost); ?></b></td>
  </tr>


 
  
  <tr>
    <td colspan="14" class='text-right'><b><?= $this->lang->line('discount_on_all'); ?>(<?= store_number_format($discount_to_all_input)." ".$discount_to_all_type; ?>)</b></td>
    <td colspan="2" class='text-right' ><b><?php echo store_number_format($tot_discount_to_all_amt); ?></b></td>
  </tr>

  <tr>
    <td colspan="14" class='text-right'><b><?= "Tax Amount"; ?></b></td>
    <td colspan="2" class='text-right' ><b><?php echo store_number_format($tot_tax_amt); ?></b></td>
  </tr>
  
  <tr>
    <td colspan="14" class='text-right'><b><?= $this->lang->line('grand_total'); ?></b></td>
    <td colspan="2" class='text-right' ><b><?php echo store_number_format($grand_total); ?></b></td>
  </tr>




  <tr>
    <td colspan="16">
      <span class='amt-in-word'>
        <?= $this->lang->line('note') .":<b>". nl2br($return_note)."</b>";?>
    </span>  
    </td>
  </tr>


      
</tfoot>

</table>

</body>
</html>
