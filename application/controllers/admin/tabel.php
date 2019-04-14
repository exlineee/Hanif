<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabel extends CI_Controller{
	 
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MUser');
	}
	
	public function index(){
		$data['menu'] = "tabel-basic";
		$data['main_menu'] = "tabel";
		$this->load->view('backend/tabel/basic', $data);
	}

	public function responsive(){
		$data['menu'] = "tabel-responsive";
		$data['main_menu'] = "tabel";
		$this->load->view('backend/tabel/responsive', $data);
	}

	public function dynamic(){
		$data['menu'] = "tabel-dynamic";
		$data['main_menu'] = "tabel";
		$this->load->view('backend/tabel/dynamic', $data);
	}
		
 }