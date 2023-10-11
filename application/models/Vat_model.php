<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vat_model extends CI_Model {

	//Datatable start
	var $table = 'db_vat as a';
	var $column_order = array(
								'a.id',
								'a.package_name',
								'a.vat_date',
								'a.trial_days',
								'a.expire_date',
								'a.max_warehouses',
								'a.max_users',
								'a.max_items',
								'a.max_invoices',
								'a.payment_status',
								'a.package_status',
								'a.store_id'); //set column field database for datatable orderable
	var $column_search = array('a.id',
								'a.package_name',
								'a.vat_date',
								'a.trial_days',
								'a.expire_date',
								'a.max_warehouses',
								'a.max_users',
								'a.max_items',
								'a.max_invoices',
								'a.payment_status',
								'a.package_status',
								'a.store_id' ); //set column field database for datatable searchable 
	var $order = array('a.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
	}
	public function get_vat_status_list()
	{
	
          $this->db->order_by('id', 'desc');
       
        return $this->db->get('db_vat_status_list')->row_array();
	}
	public function ajax_vat_status_list(){
            $plan_type = $this->input->post('plan_type');

            $CI =& get_instance();
            $this->db->select("*");
            $this->db->from("db_vat_status_list a");

            // $this->db->where('upper(plan_type) = upper("'.$plan_type.'") or upper(package_type) = upper("free")');
            

            $this->db->order_by("id",'asc');
           
            $q3=$this->db->get();
            $package_list=array();
            $i=0;
           // echo "<pre>"; print_r($q3);exit();
            if($q3->num_rows() >0){
              foreach($q3->result() as $res3){
                  	++$i;
                  	//$res3->package_type;
                   //$res3->package_name;
                  	// $res3->description;
                  	//$res3->monthly_price;
                  	//$res3->annual_price;
                  	//$package_list['package_list'][$i]['trial_days'] = $res3->trial_days;
                  	$max_warehouses =  ($res3->max_warehouses=='-1') ? '∞' : $res3->max_warehouses;
                    $max_users = ($res3->max_users=='-1') ? '∞' : $res3->max_users;
                    $max_items =  ($res3->max_items=='-1') ? '∞' : $res3->max_items;
                    $max_invoices =  ($res3->max_invoices=='-1') ? '∞' : $res3->max_invoices;
                    //$package_list['package_list'][$i]['expire_date'] =  ($res3->expire_date=='-1') ? '∞' : $res3->expire_date;
                    $id = $res3->id;
                    //$plan_type = $res3->plan_type;



                    ?>
                    <div class="plan">
                          <div class="titleContainer">
                            <div class="title"><?= $res3->package_name ?></div>
                          </div>
                          <div class="infoContainer">

                            <?php if(strtoupper($res3->package_type) == strtoupper('free')){ ?>
                              <div class="price">
                              <p><?= $CI->currency($res3->monthly_price) ?> </p><span>/ <?= $res3->trial_days ?> <?= $this->lang->line('days'); ?></span>
                            </div>
                            <?php } elseif(strtoupper($plan_type) == strtoupper('monthly')){ ?>
                            <div class="price">
                              <p><?= $CI->currency($res3->monthly_price) ?> </p><span>/<?= $this->lang->line('month'); ?></span>
                            </div>
                          <?php } else{ ?>
                            <div class="price">
                              <p><?= $CI->currency($res3->annual_price) ?> </p><span>/<?= $this->lang->line('annual'); ?></span>
                            </div>
                          <?php } ?>

                            <div class="p desc"><em><?= $res3->description ?></em></div>
                            <ul class="features">
                              <li><strong><?= ($max_warehouses) ?></strong> <?= $this->lang->line('warehouses'); ?></li>
                              <li><strong><?= ($max_users) ?></strong> <?= $this->lang->line('users'); ?></li>
                              <li><strong><?= ($max_items) ?></strong> <?= $this->lang->line('items'); ?></li>
                              <li><strong><?= ($max_invoices) ?></strong> <?= $this->lang->line('invoices'); ?></li>
                              
                              
                            </ul>


                            <a class="selectPlan" href="<?=base_url('subscription/add/'.$id)?>">Select Plan</a>
                          </div>
                        </div>
                    <?php



              }
            }
            else{
            	?>
            	<div class="plan">
                    <div class="titleContainer">
                      <div class="title">No Packages</div>
                    </div>
                    <div class="infoContainer">
                      <div class="price">
                        
                      </div>
                      <div class="p desc"><em>Please contact Admin</em></div>
                      <a class="selectPlan">No Plan</a>
                    </div>
                  </div>
            	<?php
            }
           // $package_list['package_list']['tot_rec'] = $i;
           // return $package_list;
	}



	

}
