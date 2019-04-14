<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ui extends CI_Controller{
	 
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MUser');
	}
	
	public function index(){
		$data['menu'] = "ui-pesan";
		$data['main_menu'] = "ui";
		$this->load->view('backend/ui/pesan', $data);
	}

	public function tombol(){
		$data['menu'] = "ui-tombol";
		$data['main_menu'] = "ui";
		$this->load->view('backend/ui/tombol', $data);
	}

	public function icon(){
		$data['menu'] = "ui-icon";
		$data['main_menu'] = "ui";
		$this->load->view('backend/ui/icon', $data);
	}
		
 }