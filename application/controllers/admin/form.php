<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller{
	 
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MUser');
	}
	
	public function index(){
		$data['menu'] = "form-componen";
		$data['main_menu'] = "form";
		$this->load->view('moveon/form/componen', $data);
	}

	public function adv(){
		$data['menu'] = "form-adv";
		$data['main_menu'] = "form";
		$this->load->view('moveon/form/adv', $data);
	}
		
 }