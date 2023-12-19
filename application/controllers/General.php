<?php
// Controller file (e.g., ExportController.php)
class General extends MY_Controller {
    public function __construct(){
		parent::__construct();
        $this->load_global();
		// $this->verify_store_and_user_status();

        //     $this->load_info();
		$this->load->model('pos_model','pos_model');
		$this->load->helper('sms_template_helper');
		$this->load->model('Vat_model','vat');
	}

    public function index(){
        print_r('ok');
        exit();
    
    }

    public function print_invoice_pos($sales_id){
		
		//$data=$this->data;
		$data['page_title']=$this->lang->line('sales_invoice');
		$data=array_merge($data,array('sales_id'=>$sales_id));
		
		$invoice_id = 4;//get_pos_invoice_format_id();
		if($invoice_id==1){
			$this->load->view('sal-invoice-pos',$data);
		}
		elseif($invoice_id==3){
			$this->load->view('sal-invoice-pos-t2',$data);
		}
		elseif($invoice_id==4){
			$this->load->view('sal-invoice-pos-t3',$data);
		}
		else{
			$this->load->view('sal-invoice-pos-t3',$data);
		}
		
	}
}