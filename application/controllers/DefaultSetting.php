<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultSetting extends MY_Controller {
    public function __construct(){
		parent::__construct();
		$this->load_global();
		$this->load->model('store_model','store');
	}
    public function index(){
      $this->permission_check('store_add');
      $data=array_merge($this->data,$this->store->store_making_codes());
      $data['page_title']=$this->lang->line('store');
      $this->load->view('default/index', $data);
      
    }
}