<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_to_supplier extends MY_Controller {
    public function __construct(){
		parent::__construct();
		$this->load_global();
		$this->load->model('Money_transfer_model_suppler','money_transfer');
	}
    public function index()
	{
		$this->permission_check('money_transfer_view');
		$data=$this->data;
		$data['page_title']=$this->lang->line('money_transfer_list');
		$this->load->view('accounts/suppler_transfer_list.php',$data);
	}
	public function add()
	{
		$this->permission_check('money_transfer_add');
		$data=$this->data;
		$data['page_title']=$this->lang->line('money_transfer');
		$this->load->view('accounts/money_transfer_suppler',$data);
	}


	public function new_money_transfer(){
		
		$this->permission_check('money_transfer_add');
		$this->form_validation->set_rules('transfer_date', 'Transfer date', 'trim|required');
		$this->form_validation->set_rules('transfer_code', 'Transfer Code', 'trim|required');
		$this->form_validation->set_rules('debit_account_id', 'From Account', 'trim|required');
		$this->form_validation->set_rules('credit_account_id', 'To Account', 'trim|required');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {
			$result=$this->money_transfer->verify_and_save();
			echo $result;
		} else {
			echo "Please Fill Compulsory(* marked) Fields.";
		}
	}


	public function ajax_list()
	{
		$list = $this->money_transfer->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $money_transfer) {
			$no++;
			$row = array();
			$row[] = '<input type="checkbox" name="checkbox[]" value='.$money_transfer->id.' class="checkbox column_checkbox" >';
			
			$row[] = $money_transfer->transfer_code;
			$row[] = show_date($money_transfer->transfer_date);
			$row[] = $money_transfer->reference_no;

			$row[] = get_account_name($money_transfer->debit_account_id);
			
			$supplier_detaild =  get_supplier_details($money_transfer->credit_account_id);
			$row[] = $supplier_detaild->supplier_name.'-'.$supplier_detaild->supplier_code;

			$row[] = store_number_format($money_transfer->amount);

			$row[] = ($money_transfer->created_by);			
				     $str2 = '<div class="btn-group" title="View Money Transfer">
										<a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
											Action <span class="caret"></span>
										</a>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">';

											if($this->permissions('money_transfer_edit'))
											// $str2.='<li>
											// 	<a title="Edit Record ?" href="'.base_url().'money_transfer/update/'.$money_transfer->id.'">
											// 		<i class="fa fa-fw fa-edit text-blue"></i>Edit
											// 	</a>
											// </li>';
											
											$str2.='<li>
												<a  title="Take Print" target="_blank" href="'.base_url().'money_transfer/print_money_transfer/'.$money_transfer->id.'">
													<i class="fa fa-fw fa-print text-blue"></i>Print
												</a>
											</li>';

											if($this->permissions('money_transfer_delete'))
											// $str2.='<li>
											// 	<a style="cursor:pointer" title="Delete Record ?" onclick="delete_money_transfer('.$money_transfer->id.')">
											// 		<i class="fa fa-fw fa-trash text-red"></i>Delete
											// 	</a>
											// </li>
											
									$str2.='</ul>
									</div>';			
			$row[] = $str2;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->money_transfer->count_all(),
						"recordsFiltered" => $this->money_transfer->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function multi_delete_money_transfer(){
		$this->permission_check_with_msg('money_transfer_delete');
		$ids = implode (",",$_POST['checkbox']);
		
		echo $this->money_transfer->delete_money_transfer_from_table($ids);
	}
    
}