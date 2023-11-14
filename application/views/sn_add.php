<!DOCTYPE html>
<html>

<head>
   <!-- TABLES CSS CODE -->
   <?php include "comman/code_css.php"; ?>
   <!-- </copy> -->
</head>

<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
      <?php include "sidebar.php"; ?>
      <?php
      if (!isset($brand_name)) {
         $brand_code = $brand_name = $description = $store_id = "";
      }
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <h1>
               <?= $page_title; ?>
               <small>Add/Update Brand</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="<?php echo $base_url; ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="<?php echo $base_url; ?>item/sn"><?= 'sn view' ?></a></li>
               <li class="active"><?= $page_title; ?></li>
            </ol>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <!-- right column -->
               <div class="col-md-12">
                  <!-- Horizontal Form -->
                  <div class="box box-primary ">
                     <div class="box-header with-border">
                        <h3 class="box-title">Please Enter Valid Data</h3>
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     <form class="form-horizontal" id="sn-form" onkeypress="return event.keyCode != 13;">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" id="base_url" value="<?php echo $base_url;; ?>">
                        <div class="box-body">
                           <!-- Store Code -->
                           <?php /*if(store_module() && is_admin()) {$this->load->view('store/store_code',array('show_store_select_box'=>true,'store_id'=>$store_id)); }else{*/
                           echo "<input type='hidden' name='store_id' id='store_id' value='" . get_current_store_id() . "'>";
                           /*}*/ ?>
                           <!-- Store Code end -->
                           <div class="form-group">
                              <label for="brand" class="col-sm-2 control-label"><?= $this->lang->line('item'); ?><label class="text-danger">*</label></label>
                              <div class="col-sm-6">
                                 <select name="item" id="item" class="form-control select2">
                                    <option value=""> Select Item</option>
                                    <?php
                                    foreach ($items as $item) : ?>
                                       <option value="<?= $item->id ?>"> <?= $item->item_code . ' - ' . $item->item_name ?> </option>

                                    <?php endforeach  ?>
                                 </select>
                                 <span id="sn_number_msg" style="display:none" class="text-danger"></span>
                              </div>
                           </div>
                         
                           <div class="form-group">
                              <label for="description" class="col-sm-2 control-label"><?= "SN Numbers"; ?></label>
                              <div class="col-sm-6">
                              <textarea type="text" style="display:none;" class="form-control" id="sn_number" name="sn_number" placeholder=""></textarea>
                                 <input type="text" class="form-control" id="sn_input" placeholder="Enter sn number">
                                 
                                 <div class="sn_number_area" style="width: 100%; border:1px solid #d2d6de; padding:20px; margin-top:20px  ;">
                                       
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.box-footer -->
                        <div class="box-footer">
                           <div class="col-sm-8 col-sm-offset-2 text-center">
                              <!-- <div class="col-sm-4"></div> -->
                              <?php
                              if (isset($q_id)) {
                                 $btn_name = "Update";
                                 $btn_id = "update";
                              ?>
                                 <input type="hidden" name="q_id" id="q_id" value="<?php echo $q_id; ?>" />
                              <?php
                              } else {
                                 $btn_name = "Save";
                                 $btn_id = "save";
                              }

                              ?>
                              <div class="col-md-3 col-md-offset-3">
                                 <button type="button" id="<?php echo $btn_id; ?>" class=" btn btn-block btn-success" title="Save Data"><?php echo $btn_name; ?></button>
                              </div>
                              <div class="col-sm-3">
                                 <a href="<?= base_url('dashboard'); ?>">
                                    <button type="button" class="col-sm-3 btn btn-block btn-warning close_btn" title="Go Dashboard">Close</button>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- /.box-footer -->
                     </form>
                  </div>
                  <!-- /.box -->
               </div>
               <!--/.col (right) -->
            </div>
            <!-- /.row -->
         </section>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include "footer.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
   </div>
   <!-- ./wrapper -->
   <!-- SOUND CODE -->
   <?php include "comman/code_js_sound.php"; ?>
   <!-- TABLES CODE -->
   <?php include "comman/code_js.php"; ?>
   <script src="<?php echo $theme_link; ?>js/sn-number.js"></script>
   <script type="text/javascript">
      <?php if (isset($q_id)) { ?>
         $("#store_id").attr('readonly', true);
      <?php } ?>
   </script>
   <!-- Make sidebar menu hughlighter/selector -->
   <script>
      $(".<?php echo basename(__FILE__, '.php'); ?>-active-li").addClass("active");
   </script>
   <script>
      $(document).ready(function() {
         $('.js-example-basic-multiple').select2();

         $('#sn_input').keyup(delay(function(e) {
           
               var sn_number_value =  $('#sn_number').val();
               var sn_number =$.trim($(this).val());
              
               
               $('.sn_number_area').append("<span class='badge badge-secondary'> "+sn_number+"</span>")
               
               if(sn_number_value.length > 0){
                  $('#sn_number').val(sn_number_value+','+sn_number)
               }
               else{
                  $('#sn_number').val(sn_number)
               }
              
               var sn_number = $(this).val(''); 
            // $('#sn_number').val(sn_number)
           
         },500))
      });


      function delay(callback, ms) {
         var timer = 0;
         return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
               callback.apply(context, args);
            }, ms || 0);
         };
         }

     
   </script>
</body>

</html>