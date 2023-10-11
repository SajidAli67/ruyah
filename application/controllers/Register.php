<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load_info();
	}

	public function index(){
		if($this->session->userdata('logged_in')==1){ redirect(base_url().'dashboard','refresh');	}
		$data=$this->data;
		$this->load->view('register', $data);
	}

	function register_store(){
		$this->form_validation->set_rules(
									        'email', 'Email',
									        'trim|required|valid_email|is_unique[db_users.email]',
									        array(
									                'required'      => 'You have not provided %s.',
									                'valid_email'      => 'You have not provided %s.',
									                'is_unique'     => 'This %s already exists.'
									        )
									);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('store_name', 'Store Name', 'trim|required');
		$this->form_validation->set_rules('country', 'Country Name', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('timezone', 'Timezone', 'trim|required');
		$this->form_validation->set_rules('date_format', 'Date Format', 'trim|required');
		$this->form_validation->set_rules('time_format', 'Time Format', 'trim|required');
		$this->form_validation->set_rules('currency', 'Currency', 'trim|required');
		$this->form_validation->set_rules('currency_placement', 'Currency Placement', 'trim|required');
		$this->form_validation->set_rules('decimals', 'Decimals', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('store_model');
			$result=$this->store_model->save_registration();
			echo $result;
		} else {
			$this->form_validation->set_error_delimiters('*', '');
			echo validation_errors();
		}
	}
	
}

