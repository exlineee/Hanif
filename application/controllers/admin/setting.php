<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Setting extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		} 
	}
	
	public function index(){
		$data['main_menu'] = "setting";
		$this->load->view('moveon/setting/setting', $data);
	}
		
 }
 ?>