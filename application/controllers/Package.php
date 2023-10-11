<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load_global();
		$this->load->model('package_model','package');
	}
	
	public function index()
	{
		$this->permission_check('package_view');
		$data=$this->data;
		$data['page_title']=$this->lang->line('package_list');
		$this->load->view('package-list',$data);
	}
	public function add()
	{
		$this->permission_check('package_add');
		$data=$this->data;
		$data['page_title']=$this->lang->line('package');
		$this->load->view('package',$data);
	}

	public function save_update_package(){
		$this->form_validation->set_rules('package_name', 'Package Name', 'trim|required');
		$this->form_validation->set_rules('monthly_price', 'Monthly Price', 'trim|required');
		$this->form_validation->set_rules('annual_price', 'Annual Price', 'trim|required');
		$this->form_validation->set_rules('trial_days', 'Trial Days', 'trim|required');
		$this->form_validation->set_rules('max_warehouses', 'Max Warehouses', 'trim|required');
		$this->form_validation->set_rules('max_users', 'Max Users', 'trim|required');
		$this->form_validation->set_rules('max_items', 'Max Items', 'trim|required');
		$this->form_validation->set_rules('max_invoices', 'Max Invoices', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {
			$result=$this->package->save_and_update();
			echo $result;
		} else {
			echo "Please Fill Compulsory(* marked) Fields.";
		}
	}
	public function update($id){
		$this->belong_to('db_package',$id);
		$this->permission_check('package_edit');
		$data=$this->data;
		$result=$this->package->get_details($id,$data);
		$data=array_merge($data,$result);
		$data['page_title']=$this->lang->line('package');
		$this->load->view('package', $data);
	}

	public function ajax_list()
	{
		$list = $this->package->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $package) {
			
			$no++;
			$row = array();
			$row[] = '<input type="checkbox" name="checkbox[]" value='.$package->id.' class="checkbox column_checkbox" >';
			if($package->package_type == 'Free'){
				$str ="<br><span class='label label-default'>Limited</span>";
			}
			elseif($package->plan_type=='Monthly'){ 
	 			$str= "<br><span class='label label-success'>Monthly Plan</span>";}
			else{ 
				$str ="<br><span class='label label-primary'>Annual Plan</span>";
			}

			$row[] = $package->package_type.$str;
			$row[] = $package->package_name;
			$row[] = store_number_format($package->monthly_price);
			$row[] = store_number_format($package->annual_price);
			$row[] = $package->trial_days;
			$row[] = ($package->max_warehouses=='-1') ? '∞' : $package->max_warehouses;
			$row[] = ($package->max_users=='-1') ? '∞' : $package->max_users;
			$row[] = ($package->max_items=='-1') ? '∞' : $package->max_items;
			$row[] = ($package->max_invoices=='-1') ? '∞' : $package->max_invoices;
			$row[] = (!empty($package->expire_date)) ? show_date($package->expire_date) : '';

			 		if($package->status==1){ 
			 			$str= "<span onclick='update_status(".$package->id.",0)' id='span_".$package->id."'  class='label label-success' style='cursor:pointer'>Active </span>";}
					else{ 
						$str = "<span onclick='update_status(".$package->id.",1)' id='span_".$package->id."'  class='label label-danger' style='cursor:pointer'> Inactive </span>";
					}
			$row[] = $str;			
					$str2 = '<div class="btn-group" title="View Account">
										<a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
											Action <span class="caret"></span>
										</a>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">';

											if($this->permissions('package_edit'))
											$str2.='<li>
												<a title="Edit Record ?" href="'.base_url().'package/update/'.$package->id.'">
													<i class="fa fa-fw fa-edit text-blue"></i>Edit
												</a>
											</li>';
											
											if($this->permissions('package_delete'))
											$str2.='<li>
												<a style="cursor:pointer" title="Delete Record ?" onclick="delete_package('.$package->id.')">
													<i class="fa fa-fw fa-trash text-red"></i>Delete
												</a>
											</li>
											
										</ul>
									</div>';			

			$row[] = $str2;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->package->count_all(),
						"recordsFiltered" => $this->package->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	public function update_status(){
		$this->permission_check_with_msg('package_edit');
		$id=$this->input->post('id');
		$status=$this->input->post('status');

		$result=$this->package->update_status($id,$status);
		return $result;
	}
	
	public function delete_package(){
		$this->permission_check_with_msg('package_delete');
		$id=$this->input->post('q_id');
		return $this->package->delete_package_from_table($id);
	}
	public function multi_delete(){
		$this->permission_check_with_msg('package_delete');
		$ids=implode (",",$_POST['checkbox']);
		return $this->package->delete_package_from_table($ids);
	}
	
	public function show_pay_now_modal(){
	    $this->permission_check_with_msg('purchase_payment_add');
	    $package_id=$this->input->post('package_id');
	    echo $this->package->show_pay_now_modal($package_id);
	}
	public function save_payment(){
	    $this->permission_check_with_msg('purchase_payment_add');
	    echo $this->package->save_payment();
	}
	public function show_pay_return_due_modal(){
	    $this->permission_check_with_msg('purchase_return_payment_add');
	    $package_id=$this->input->post('package_id');
	    echo $this->package->show_pay_return_due_modal($package_id);
	}
	public function save_return_due_payment(){
	    $this->permission_check_with_msg('purchase_payment_add');
	    echo $this->package->save_return_due_payment();
	}
	public function delete_opening_balance_entry(){
		$this->permission_check_with_msg('sales_payment_delete');
		$entry_id = $this->input->post('entry_id');
		echo $this->package->delete_opening_balance_entry($entry_id);
	}
	
}
