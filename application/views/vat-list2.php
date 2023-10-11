<!DOCTYPE html>
<html>

<head>
<!-- TABLES CSS CODE -->
<?php include"comman/code_css.php"; ?>
<link rel="stylesheet" href="<?php echo $theme_link; ?>css/subscription.css">
<style type="text/css">
  
</style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include"sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$page_title;?>
        <small>View/Import backup</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active"><?=$page_title;?></li>
      </ol>
    </section>
    <div class="pay_now_modal">
    </div>
    <div class="pay_return_due_modal">
    </div>
    <!-- Main content -->
    
    <?php echo form_open_multipart('ImportController/importdatabase'); ?>
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <!-- ********** ALERT MESSAGE START******* -->
        <?php include"comman/code_flashdata.php"; ?>
        <!-- ********** ALERT MESSAGE END******* -->

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-lg-3 col-xs-6">
                <?= $this->lang->line('vat-list2'); ?>
                </div>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="container mt-5">
    <h2>Import Backup</h2>
    <div class="row">
      
      <div class="col-md-12">
        <?php if($this->session->flashdata('success_import') ) {?>
                    <div class="alert alert-success alert-dismissible" style="background-color:#cdf1f8;">
                        <?= $this->session->flashdata('success_import'); ?>
                    </div>
                <?php } ?>
       <div class="col-md-2">
        
        <input type="file" name="zip_file" accept=".zip" class="btn btn-info">
      </div>
      <div class="col-md-3" style="margin-left:8%">
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
        </div>
    <?php echo form_close(); ?>
    </div>
  </div>
  
  </div>

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
  
  </div>
  <!-- /.content-wrapper -->
  <?php include"footer.php"; ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- SOUND CODE -->
<?php include"comman/code_js_sound.php"; ?>
<!-- TABLES CODE -->
<?php include"comman/code_js.php"; ?>
<!-- bootstrap datepicker -->
<script src="<?php echo $theme_link; ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  //Date picker
    $('.datepicker').datepicker({
      autoclose: true,
    format: 'dd-mm-yyyy',
     todayHighlight: true
    });
</script>
<script type="text/javascript">
function load_datatable(){
    //datatables
   var table = $('#example2').DataTable({ 

      /* FOR EXPORT BUTTONS START*/
  dom:'<"row margin-bottom-12"<"col-sm-12"<"pull-left"l><"pull-right"fr><"pull-right margin-left-10 "B>>>tip',
 /* dom:'<"row"<"col-sm-12"<"pull-left"B><"pull-right">>> <"row margin-bottom-12"<"col-sm-12"<"pull-left"l><"pull-right"fr>>>tip',*/
      buttons: {
        buttons: [
            {
                className: 'btn bg-red color-palette btn-flat hidden delete_btn pull-left',
                text: 'Delete',
                action: function ( e, dt, node, config ) {
                    multi_delete();
                }
            },
            { extend: 'copy', className: 'btn bg-teal color-palette btn-flat',footer: true, exportOptions: { columns: [1,2,3,4,5,6,7]} },
            { extend: 'excel', className: 'btn bg-teal color-palette btn-flat',footer: true, exportOptions: { columns: [1,2,3,4,5,6,7]} },
            { extend: 'pdf', className: 'btn bg-teal color-palette btn-flat',footer: true, exportOptions: { columns: [1,2,3,4,5,6,7]} },
            { extend: 'print', className: 'btn bg-teal color-palette btn-flat',footer: true, exportOptions: { columns: [1,2,3,4,5,6,7]} },
            { extend: 'csv', className: 'btn bg-teal color-palette btn-flat',footer: true, exportOptions: { columns: [1,2,3,4,5,6,7]} },
            { extend: 'colvis', className: 'btn bg-teal color-palette btn-flat',footer: true, text:'Columns' },  

            ]
        },
        /* FOR EXPORT BUTTONS END */

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "responsive": true,
        language: {
            processing: '<div class="text-primary bg-primary" style="position: relative;z-index:100;overflow: visible;">Processing...</div>'
        },
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('subscription/ajax_list')?>",
            "type": "POST",
            "data": {
                      
                    },
            complete: function (data) {
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
        "columnDefs": [
        { 
            "targets": [ 0,9   ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        {
            "targets" :[0],
            "className": "text-center",
        },
        
        ],
    });
    new $.fn.dataTable.FixedHeader( table );
}

$(document).ready(function() {
    //datatables
   load_datatable();

   ajax_package_list('monthly');
});


$("#monthly_plan").on('click', function() {
  $("#monthly_plan").addClass("btn-success");
  $("#annually_plan").removeClass("btn-success").addClass("btn-default");

  ajax_package_list('monthly');
});
$("#annually_plan").on('click', function() {
  $("#annually_plan").addClass("btn-success");
  $("#monthly_plan").removeClass("btn-success").addClass("btn-default");

  ajax_package_list('annually');
});


function ajax_package_list(plan_type) {
  $(".planContainer").html("Loading..!!");

  var base_url=$("#base_url").val();
    $(".box").append('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
   $.post(base_url+"subscription/ajax_package_list",{plan_type:plan_type},function(result){
   //alert(result);return;

   console.log(result);
   result=result;
     /*if(result=="success")
        { 
          toastr["success"]("Record Deleted Successfully!");
          $("#payment_row_"+payment_id).remove();
          success.currentTime = 0; 
          success.play();
        }
        else if(result=="failed"){
          toastr["error"]("Failed to Delete .Try again!");
          failed.currentTime = 0; 
          failed.play();
        }
        else{
          toastr["error"](result);
          failed.currentTime = 0; 
          failed.play();
        }*/
      $(".planContainer").html(result);

        $(".overlay").remove();
        update_paid_payment_total();
        restore_customer_list();
   });
}

</script>

<script src="<?php echo $theme_link; ?>js/subscription.js"></script>

<!-- Make sidebar menu hughlighter/selector -->
<script>$(".<?php echo basename(__FILE__,'.php');?>-active-li").addClass("active");</script>
    
</body>
</html>
