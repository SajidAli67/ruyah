<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VAT extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load_global();
		$this->load->model('Vat_model','vat');
	}
	
	public function index()
	{
		// echo"<pre>";	print_r("Pakistan");exit();
		$this->load->model('package_model');
		$this->permission_check('subscription');
		$data=$this->data;
		$data['vat_status_list']=array_merge($this->data,$this->vat->get_vat_status_list());
		// echo "<pre>"; print_r($data); exit();
		$data['page_title']=$this->lang->line('vat');
		$this->load->view('vat-list',$data);
	}
	public function update_status_VAT_list()
    {
    	// print_r("update_status");exit();
        if ($this->input->post('status')) {
            // Get the selected status from the AJAX request
            $status = $this->input->post('status');

            // Perform any validation or sanitization of the input as needed

            // Update the database table 'db_vat_status_list' with the new status
            // Replace 'db_vat_status_list' with your actual table name and 'id' with your desired row identifier
            $data = array('status' => $status);
            $this->db->where('id', 1); // Replace 'id' with your desired row identifier
            $this->db->update('db_vat_status_list', $data);

            // Optionally, you can send a response back to the client
            echo "Status updated successfully!";
redirect('index');

        } else {
            // Handle the case when 'status' parameter is not provided in the POST data
            echo "Invalid request.";
        }
    }
	
	public function ajax_package_list($value=''){
		$this->load->model('package_model');
		$this->package_model->ajax_package_list();
	}

	public function add($pid='')
	{
		$this->permission_check('subscription');

		if(empty($pid)){
			echo "Something went wrong";exit;
		}
		//Find package exist or not
		$q1 = $this->db->select("*")->where("id",$pid)->get("db_package");
		if($q1->num_rows()==0){
			echo "There is no package available";exit;
		}

		$this->load->model('package_model');
		$data=array_merge($this->data,$this->package_model->get_package_list($pid));
		
		$data['page_title']=$this->lang->line('vat');
		$this->load->view('vat',$data);
	}

	public function save_update_vat(){
		$this->form_validation->set_rules('vat_name', 'vat Name', 'trim|required');
		$this->form_validation->set_rules('monthly_price', 'Monthly Price', 'trim|required');
		$this->form_validation->set_rules('annual_price', 'Annual Price', 'trim|required');
		$this->form_validation->set_rules('trial_days', 'Trial Days', 'trim|required');
		$this->form_validation->set_rules('max_warehouses', 'Max Warehouses', 'trim|required');
		$this->form_validation->set_rules('max_users', 'Max Users', 'trim|required');
		$this->form_validation->set_rules('max_items', 'Max Items', 'trim|required');
		$this->form_validation->set_rules('max_invoices', 'Max Invoices', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {
			$result=$this->vat->save_and_update();
			echo $result;
		} else {
			echo "Please Fill Compulsory(* marked) Fields.";
		}
	}
	public function update($id){
		$this->belong_to('db_vat',$id);
		$this->permission_check('subscription');
		$data=$this->data;
		$result=$this->vat->get_details($id,$data);
		$data=array_merge($data,$result);
		$data['page_title']=$this->lang->line('vat');
		$this->load->view('vat', $data);
	}

	public function ajax_list()
	{
		$list = $this->vat->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		$current_vat = get_current_subcription_id();
		foreach ($list as $vat) {
			
			$no++;
			$row = array();
			//$row[] = '<input type="checkbox" name="checkbox[]" value='.$vat->id.' class="checkbox column_checkbox" >';

			$activated = ($vat->id==$current_vat) ? "<span class='label label-success' style='cursor:pointer'>Active </span>" : '';

			$expiration = ($vat->expire_date < date("Y-m-d")) ? "<br><span class='label label-danger' style='cursor:pointer'>Expired </span>" : '';
			

			$row[] = $vat->package_name."\n".$activated;
			$row[] = show_date($vat->vat_date);
			$row[] = $vat->trial_days;
			$row[] = ((!empty($vat->expire_date)) ? show_date($vat->expire_date) : '').$expiration;
			$row[] = $vat->max_warehouses;
			$row[] = $vat->max_users;
			$row[] = $vat->max_items;
			$row[] = $vat->max_invoices;
			$row[] = $vat->payment_status;

			 		/*if($vat->package_status==1){ 
			 			$str= "<span onclick='update_status(".$vat->id.",0)' id='span_".$vat->id."'  class='label label-success' style='cursor:pointer'>Active </span>";}
					else{ 
						$str = "<span onclick='update_status(".$vat->id.",1)' id='span_".$vat->id."'  class='label label-danger' style='cursor:pointer'> Inactive </span>";
					}

			$row[] = is_admin() ? $str : 'NA';*/			
					$str2 = '<div class="btn-group" title="View Account">
										<a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
											Action <span class="caret"></span>
										</a>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">';

											
											
											if($this->permissions('vat_delete'))
											$str2.='<li>
												<a style="cursor:pointer" title="Delete Record ?" onclick="delete_vat('.$vat->id.')">
													<i class="fa fa-fw fa-trash text-red"></i>Delete
												</a>
											</li>
											
										</ul>
									</div>';			

			$row[] = (is_admin()) ? $str2 : 'NA';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->vat->count_all(),
						"recordsFiltered" => $this->vat->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	public function update_status(){
		$this->permission_check_with_msg('vat');
		$id=$this->input->post('id');
		$status=$this->input->post('status');

		$result=$this->vat->update_status($id,$status);
		return $result;
	}
	
	public function delete_vat(){
		$this->permission_check_with_msg('vat');
		$id=$this->input->post('q_id');
		return $this->vat->delete_vat_from_table($id);
	}
	public function multi_delete(){
		$this->permission_check_with_msg('vat');
		$ids=implode (",",$_POST['checkbox']);
		return $this->vat->delete_vat_from_table($ids);
	}
	
	
}
