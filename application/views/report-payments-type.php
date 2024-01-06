<!DOCTYPE html>
<html>


<head>
   <!-- TABLES CSS CODE -->
   <?php $this->load->view('comman/code_css.php'); ?>
   <title>(<?= $account_name ?>)</title>
</head>

<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">


      <!-- Left side column. contains the logo and sidebar -->

      <?php $this->load->view('sidebar'); ?>
      <?php $CI = &get_instance(); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <h1>
               <?= ('Payment Type Report'); ?>
            </h1>
            <ol class="breadcrumb">
               <li><a href="<?php echo $base_url; ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
               <li class="active"><?= $this->lang->line('accounts_list'); ?></li>
            </ol>
         </section>

         <!-- Main content -->
         <?= form_open('#', array('class' => '', 'id' => 'table_form')); ?>
         <input type="hidden" id='base_url' value="<?= $base_url; ?>">
         <section class="content">
            <div class="row">
               <!-- ********** ALERT MESSAGE START******* -->
               <?php $this->load->view('comman/code_flashdata'); ?>
               <!-- ********** ALERT MESSAGE END******* -->
               <div class="col-md-12 mt-5">
                  <!-- Horizontal Form -->
                  <div class="box box-primary ">
                     <div class="row">

                        <div class="col-md-12">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="from_date"><?= $this->lang->line('from_date'); ?> </label></label>
                                 <div class="input-group date">
                                    <div class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="from_date" name="from_date" value="<?php echo show_date(date('d-m-Y')); ?>">
                                 </div>
                                 <span id="transfer_date_msg" style="display:none" class="text-danger"></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="to_date"><?= $this->lang->line('to_date'); ?> </label></label>
                                 <div class="input-group date">
                                    <div class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="to_date" name="to_date" value="<?php echo show_date(date('d-m-Y')); ?>">
                                 </div>
                                 <span id="transfer_date_msg" style="display:none" class="text-danger"></span>
                              </div>
                           </div>
<<<<<<< HEAD
                           <div class="col-md-6">
                              <div class="form-group">
                                  <label for="to_date"><?= "Account"; ?> </label></label>
                                 
                                 <div class="input-group date">
                                   <div class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                    <select class="form-control select2" id="debit_account_id" name="debit_account_id" style="width: 100%;">
                                       <?php
                                       echo '<option value="">Select</option>';
                                       echo get_accounts_select_list(1);
                                       ?>
                                    </select>
                                    <span id="debit_account_id_msg" style="display:none" class="text-danger">
                                    </span>
                                 </div>
=======

                           <div class="form-group">
                              
                              <label for="debit_account_id" class="col-sm-2 control-label">
                                 <?= $this->lang->line('debit_account'); ?>
                              </label>
                              <div class="col-sm-3">
                                 <select class="form-control select2" id="debit_account_id" name="debit_account_id" style="width: 100%;">
                                    <?php
                                    echo '<option value="">Select</option>';
                                    echo get_accounts_select_list(1);
                                    ?>
                                 </select>
                                 <span id="debit_account_id_msg" style="display:none" class="text-danger">
                                 </span>
>>>>>>> e7da4d5d19f2cf3212d3df1755dc28a288d45ba7
                              </div>
                           </div>
                        </div>

                     </div>
                     <!-- /.box -->
                  </div>

                  <div class="col-xs-12">
                     <div class="box box-primary">
                        <div class="box-header ">
                           <h3 class="box-title"><?= $this->lang->line('transactions_list'); ?></h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                           <table id="example2" class="table table-bordered custom_hover" width="100%">
                              <caption style="text-align:center;">
                                 <h4><label id="from_date_label"></label> & <label id="to_date_label"></label></h4>
                              </caption>
                              <thead>
                                 <tr class="bg-blue">
                                    <th style="">#</th>
                                    <?php if (store_module() && is_admin()) { ?>
                                       <th><?= $this->lang->line('store_name'); ?></th>
                                    <?php } ?>
                                    <th>Date</th>
                                    <th>Payment Code</th>
                                    <th>Description</th>
                                    <th colspan="2">Receipt amount</th>

                                    <th colspan="2">Payment amount</th>

                                    <th>balance</th>
                                    <th>note</th>
                                 </tr>
                                 <tr class="bg-gray">
                                    <th></th>
                                    <?php if (store_module() && is_admin()) { ?>
                                       <th><?= $this->lang->line('store_name'); ?></th>
                                    <?php } ?>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>نقدي</th>
                                    <th>مدي / تحويلة بنك</th>
                                    <th>نقدي</th>
                                    <th>مدي / تحويلة بنك</th>
                                    <th></th>
                                    <th></th>
                                 </tr>
                                 </tr>
                              </thead>
                              <tbody>

                              </tbody>

                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
         </section>
         <!-- /.content -->
         <?= form_close(); ?>
      </div>
      <!-- /.content-wrapper -->
      <?php $this->load->view('footer.php'); ?>
      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
   </div>
   <!-- ./wrapper -->

   <!-- SOUND CODE -->
   <?php $this->load->view('comman/code_js_sound.php'); ?>
   <!-- TABLES CODE -->
   <?php $this->load->view('comman/code_js.php'); ?>

   <script type="text/javascript">
      function load_datatable() {
         var from_date1 = $("#from_date").val();
         $("#from_date_label").text("Start Date: " + from_date1);
         var to_date1 = $("#to_date").val();
         $("#to_date_label").text("End Date: " + to_date1);
         //datatables
         var table = $('#example2').DataTable({

            /* FOR EXPORT BUTTONS START*/
            dom: '<"row margin-bottom-12"<"col-sm-12"<"pull-left"l><"pull-right"fr><"pull-right margin-left-10 "B>>>tip',

            buttons: {
               buttons: [{
                     className: 'btn bg-red color-palette btn-flat hidden delete_btn pull-left',
                     text: 'Delete',
                     action: function(e, dt, node, config) {
                        multi_delete();
                     }
                  },
                  {
                     extend: 'copy',
                     className: 'btn bg-teal color-palette btn-flat',
                     exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                     }
                  },
                  {
                     extend: 'excel',
                     className: 'btn bg-teal color-palette btn-flat',
                     exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                     }
                  },
                  {
                     extend: 'pdf',
                     className: 'btn bg-teal color-palette btn-flat',
                     exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                     }
                  },
                  {
                     extend: 'print',
                     className: 'btn bg-teal color-palette btn-flat',
                     exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                     }
                  },
                  {
                     extend: 'csv',
                     className: 'btn bg-teal color-palette btn-flat',
                     exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                     }
                  },
                  {
                     extend: 'colvis',
                     className: 'btn bg-teal color-palette btn-flat',
                     text: 'Columns'
                  },

               ]
            },
            /* FOR EXPORT BUTTONS END */

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "responsive": true,
            "searching": false,
            "lengthMenu": [
               [100, 50, 25, 200, 500],
               [100, 50, 25, 200, 500]
            ],
            language: {
               processing: '<div class="text-primary bg-primary" style="position: relative;z-index:100;overflow: visible;">Processing...</div>'
            },
            // Load data for the table's content from an Ajax source
            "ajax": {
               "url": "<?php echo site_url('account_transactions/show_payments_type_report') ?>",
               "type": "POST",
               "data": {
<<<<<<< HEAD
                  account_id: $("#debit_account_id").val(),
=======
                  account_id: $("#debit_account_id").val(),//'<?= $account_id ?>',
>>>>>>> e7da4d5d19f2cf3212d3df1755dc28a288d45ba7
                  from_date: $("#from_date").val(),
                  to_date: $("#to_date").val(),
                  users: $("#users").val(),
               },
               complete: function(data) {
                  $('.column_checkbox').iCheck({
                     checkboxClass: 'icheckbox_square-orange',
                     /*uncheckedClass: 'bg-white',*/
                     radioClass: 'iradio_square-orange',
                     increaseArea: '10%' // optional
                  });
                  call_code();
                  //$(".delete_btn").hide();
               },

            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                  "targets": [0, 1, 2, 3, 4], //first column / numbering column
                  "orderable": false, //set not orderable

               },
               {
                  "targets": [0],
                  "className": "text-center",
               },
               {
                  "targets": [2, 3, 4],
                  "className": "text-right",
               },

            ],
         });
         new $.fn.dataTable.FixedHeader(table);
      }

      $(document).ready(function() {
         load_datatable();
      });
      $("#from_date,#to_date,#debit_account_id").on("change", function() {
         $('#example2').DataTable().destroy();
         load_datatable();
      });
   </script>

   <!-- Make sidebar menu hughlighter/selector -->
   <script>
      $(".accounts_list-active-li").addClass("active");
   </script>
</body>

</html>