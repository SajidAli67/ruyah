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
      border: 0.5pt solid #000;
      border-collapse: collapse;

    }

    th,
    td {
      /*padding: 5px;*/
      text-align: left;
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

  ?>

  <table autosize="1" style="overflow: wrap" id='mytable' align="center" width="100%" cellpadding="0" cellspacing="0">
    <!-- <table align="center" width="100%" height='100%'   > -->

    <thead>

      <tr>
        <th colspan="16">
          <table width="100%" height='100%' class="style_hidden fixed_table">
            <tr>
              <!-- First Half -->
              <td colspan="4">
                <img src="<?= base_url($store_logo); ?>" width='200px' height='150px'>
              </td>

              <td colspan="4">
                <b><?php echo $store_name; ?></b><br />
                <span style="font-size: 10px;">
                  <?php echo $company_address; ?><br />
                  <?php echo $this->lang->line('mob.') . ":" . $company_mobile; ?><br />


                  <?php echo (!empty(trim($company_email))) ? $this->lang->line('email') . ": " . $company_email . "<br>" : ''; ?>
                  <?php echo (!empty(trim($company_gst_no))) ? $this->lang->line('gst_number') . ": " . $company_gst_no . "<br>" : ''; ?>
                  <?php echo (!empty(trim($company_vat_no))) ? $this->lang->line('tax_number') . ": " . $company_vat_no . "<br>" : ''; ?>
                </span>
              </td>

              <!-- Second Half -->
              <td colspan="8" rowspan="1">
                <span>
                  <table style="width: 100%;" class="style_hidden fixed_table">

                    <tr>
                      <td colspan="8">
                        Invoice No.<br>
                        <span style="font-size: 11px;">
                          <b><?php echo  $expense->expense_code; ?></b>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="8">
                        Print Date<br>
                        <span style="font-size: 10px;">
                          <b><?php echo  date('m-d-Y');
                              ?></b>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="8">
                        Reference No.<br>
                        <span style="font-size: 10px;">
                          <b><?php echo $expense->reference_no; ?></b>
                        </span>
                      </td>

                    </tr>
                  </table>
                </span>
              </td>
            </tr>

            <tr>

            </tr>





          </table>
        </th>
      </tr>

    </thead>

  </table>

  <div style="width: 80%;  margin: 15px auto; border: 0.5pt solid #000;">
         <center>
            <h3> <strong>سند صرف<br> expense voucher </strong></h3>
          </center>
  </div>

  <div style="width: 80%;  margin: 15px auto; border:0px;">

    <div>
      <table width="100%">
        <tr>
          <td style="padding: 10px">
            <center><?= $expense->expense_amt ?> </center>
          </td>
          <td style="padding: 10px">
            <center> <?= show_date($expense->created_date) ?> </center>
          </td>
        </tr>
      </table>

    </div>

    <div style="border: 0.5pt solid #000; margin-top: 15px; ">
      <div style=" padding: 10px">
        <span style="width: 2%;"> Paid for </span> <span style="border-bottom: 1px solid #000; text-align:center"> <strong> <?= $expense->category_name;  ?> </strong> </span> <span style="float:right; ">نصرف الي</span>
      </div>
    </div>

    <div style="border: 0.5pt solid #000;">
      <div style=" padding: 10px">
        <span style="width: 2%;"> Amount in word </span>
        <span style="border-bottom: 1px solid #000; text-align:center">
          <strong>
            <?php
            $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
            echo  strtoupper($f->format($expense->expense_amt));

            ?>
          </strong>
        </span>
        <span style="float:right; ">مبلغ وقدرة</span>
      </div>
    </div>

    <div style="border: 0.5pt solid #000;">
      <div style=" padding: 10px">
        <center>
          <h5><strong> <?= $expense->payment_type ?></strong></h5>
        </center>
      </div>
    </div>

    <div style="border: 0.5pt solid #000;">
      <div style=" padding: 10px">
        <span style="width: 2%;"> Being</span> <span style="border-bottom: 1px solid #000; text-align:center"> <strong> <?= $expense->note ?> </strong> </span> <span style="float:right; ">وذلك مقابل</span>
      </div>
    </div>


  </div>





  <table style="position: absolute; bottom:15px">
    <tfoot>

      <!-- T&C & Bank Details & signatories-->
      <tr>
        <td colspan="16">
          <table width="100%" class="style_hidden fixed_table">

            <tr>
              <td colspan="16">
                <span>
                  <table style="width: 100%;" class="style_hidden fixed_table">

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

</body>

</html>