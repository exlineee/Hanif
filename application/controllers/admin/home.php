<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		} 
	}
	
	public function index(){
		$data['main_menu'] = "dash";
		$this->load->view('moveon/home', $data);
	}
	 public function countsuratmasuk(){

	$a['agenda']	= $this->db->query("SELECT COUNT(*) FROM agenda")->row();	
		$this->load->view('moveon/home', $a);
		
		}

	public function do_logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
 }
 ?>