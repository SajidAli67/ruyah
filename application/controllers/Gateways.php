<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gateways extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load_global();
		$this->load->helper('gateway');
		$this->load->model('gateways_model','gateways');
	}

	public function index()
	{
		$this->permission_check('gateways_view');
		$data=$this->data;
		$data['page_title']=$this->lang->line('gateways');
		$this->load->view('gateways',$data);
	}
	

	public function newgateways(){
		$this->form_validation->set_rules('gateway_name', 'Gateway Name', 'trim|required');
		
		
		if ($this->form_validation->run() == TRUE) {
			$result=$this->gateways->verify_and_save();
			echo $result;
		} else {
			echo "Please Fill Compulsory(* marked) Fields.";
		}
	}
	public function update($id){
		$this->belong_to('db_gateways',$id);
		$this->permission_check('gateways_edit');
		$data=$this->data;
		$result=$this->gateways->get_details($id,$data);
		$data=array_merge($data,$result);
		$data['page_title']=$this->lang->line('gateways');
		$this->load->view('gateways', $data);
	}
	public function update_gateways(){
		/*$this->form_validation->set_rules('gateway_name', 'Gateway Name', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {	*/		
			$result=$this->gateways->update_gateways();
			echo $result;
		/*} else {
			echo "Please Fill Compulsory(* marked) Fields.";
		}*/
	}


	public function ajax_list()
	{
		$list = $this->gateways->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $gateways) {

			$opening_balance =(!empty($gateways->opening_balance)) ? $gateways->opening_balance : 0;
			$opening_balance -=get_paid_cob($gateways->id);
			$sales_due =(!empty($gateways->sales_due)) ? $gateways->sales_due : 0;
			$sales_return_due =(!empty($gateways->sales_return_due)) ? $gateways->sales_return_due : 0;
			$total = ($opening_balance)+$sales_due-$sales_return_due;
			
			$no++;
			$row = array();
			$disable = ($gateways->delete_bit==1) ? 'disabled' : '';
			
			$row[] = ($gateways->delete_bit==1) ? '<span data-toggle="tooltip" title="Resticted" class="text-danger fa fa-fw fa-ban"></span>' : '<input type="checkbox" name="checkbox[]" '.$disable.' value='.$gateways->id.' class="checkbox column_checkbox" >';
			
			
			$row[] = $gateways->gateway_code;
			$row[] = $gateways->gateway_name;
			$row[] = $gateways->mobile;
			$row[] = $gateways->email;
			$row[] = (!empty($gateways->location_link)) ? '<a target="_blank" title="Click to View Location!" href="'.$gateways->location_link.'"><i class="fa fa-fw fa-map-marker"></i> Link</a>' : '';
			$row[] = store_number_format($opening_balance+$sales_due);
			
			$row[] = store_number_format($sales_return_due);
			

			 		if($gateways->status==1){ 
			 			$str= "<span onclick='update_status(".$gateways->id.",0)' id='span_".$gateways->id."'  class='label label-success' style='cursor:pointer'>Active </span>";}
					else{ 
						$str = "<span onclick='update_status(".$gateways->id.",1)' id='span_".$gateways->id."'  class='label label-danger' style='cursor:pointer'> Inactive </span>";
					}
			$row[] = $str;			
					$str2 = '<div class="btn-group" title="View Account">
										<a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
											Action <span class="caret"></span>
										</a>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">';

											if($this->permissions('gateways_edit')&& $gateways->delete_bit!=1)
											$str2.='<li>
												<a title="Edit Record ?" href="'.base_url().'gateways/update/'.$gateways->id.'">
													<i class="fa fa-fw fa-edit text-blue"></i>Edit
												</a>
											</li>';

											if($this->permissions('sales_payment_view'))
											$str2.='<li>
												<a title="Pay" class="pointer" onclick="view_payments('.$gateways->id.')" >
													<i class="fa fa-fw fa-money text-blue"></i>View Payments
												</a>
											</li>';

											if($this->permissions('sales_payment_add'))
											$str2.='<li>
												<a title="Receive Previous Balance & Sales Due Payments" class="pointer" onclick="pay_now('.$gateways->id.')" >
													<i class="fa fa-fw fa-money text-blue"></i>Receive Due Payments
												</a>
											</li>';
											if($this->permissions('sales_return_payment_add'))
											$str2.='<li>
												<a title="Pay Return Due" class="pointer" onclick="pay_return_due('.$gateways->id.')" >
													<i class="fa fa-fw fa-money text-blue"></i>Pay Return Due
												</a>
											</li>';
											if($this->permissions('gateways_delete') && $gateways->delete_bit!=1)
											$str2.='<li>
												<a style="cursor:pointer" title="Delete Record ?" onclick="delete_gateways('.$gateways->id.')">
													<i class="fa fa-fw fa-trash text-red"></i>Delete
												</a>
											</li>
											
										</ul>
									</div>';			
			$row[] =  $str2;
			

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->gateways->count_all(),
						"recordsFiltered" => $this->gateways->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	public function update_status(){
		$this->permission_check_with_msg('gateways_edit');
		$id=$this->input->post('id');
		$status=$this->input->post('status');

		$result=$this->gateways->update_status($id,$status);
		return $result;
	}
	
	public function delete_gateways(){
		$this->permission_check_with_msg('gateways_delete');
		$id=$this->input->post('q_id');
		return $this->gateways->delete_gateways_from_table($id);
	}
	public function multi_delete(){
		$this->permission_check_with_msg('gateways_delete');
		$ids=implode (",",$_POST['checkbox']);
		return $this->gateways->delete_gateways_from_table($ids);
	}
	public function show_pay_now_modal(){
		$this->permission_check_with_msg('sales_payment_add');
		$gateway_id=$this->input->post('gateway_id');
		echo $this->gateways->show_pay_now_modal($gateway_id);
	}
	public function save_payment(){
		$this->permission_check_with_msg('sales_payment_add');
		echo $this->gateways->save_payment();
	}
	public function show_pay_return_due_modal(){
		$this->permission_check_with_msg('sales_return_payment_add');
		$gateway_id=$this->input->post('gateway_id');
		echo $this->gateways->show_pay_return_due_modal($gateway_id);
	}
	public function save_return_due_payment(){
		$this->permission_check_with_msg('sales_payment_add');
		echo $this->gateways->save_return_due_payment();
	}
	public function delete_opening_balance_entry(){
		$this->permission_check_with_msg('sales_payment_delete');
		$entry_id = $this->input->post('entry_id');
		echo $this->gateways->delete_opening_balance_entry($entry_id);
	}
	/*27-06-2020*/
	public function view_payment_list_modal(){
		$this->permission_check_with_msg('sales_payment_add');
		$gateway_id=$this->input->post('gateway_id');
		echo $this->gateways->view_payment_list_modal($gateway_id);
	}
	/*28-06-2020*/
	//Print Gateway Bulk Payment Receipt
	public function print_show_receipt($payment_id){
		if(!$this->permissions('sales_add') && !$this->permissions('sales_edit')){
			$this->show_access_denied_page();
		}
		$data=$this->data;
		$data['page_title']=$this->lang->line('payment_receipt');
		$data=array_merge($data,array('payment_id'=>$payment_id));
		$this->load->view('print-cust-bulk-payment-receipt',$data);
	}

}
