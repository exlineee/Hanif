<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Laporan2 extends CI_Controller{
 	

	public function index(){
		$this->load->model('MLaporan2');
		$data['main_menu'] = "laporan2";
		$data['laporan'] = $this->MLaporan2->tampil_data()->result();
		$this->load->view('moveon/laporan/laporan_sm2', $data);
	}
}
?>