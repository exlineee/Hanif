<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Laporan extends CI_Controller{
	var $bln = array(
											'01' => 'Januari',
											'02' => 'Februari',
											'03' => 'maret',
											'04' => 'April',
											'05' => 'Mei',
											'06' => 'Juni',
											'07' => 'Juli',
											'08' => 'Agustus',
											'09' => 'September',
											'10' => 'Oktober',
											'11' => 'November',
											'12' => 'Desember',
										);
	 function __construct(){ 
        parent::__construct(); 
		  $this->load->model('muser');
  $this->load->model('MLaporan');
  $this->load->helper(array('url','form'));
    }
 	

	public function index(){
		$this->load->model('MLaporan');
		$data['main_menu'] = "laporan";
		$data['laporan'] = $this->MLaporan->tampil_data()->result();
		$this->load->view('moveon/laporan/laporan_sm', $data);
	}

	public function getData($tahun=""){
		$agenda = array(
			'1' => 'nomor_urut',
		);
		
		
		
		$data = array();
		foreach($this->bln as $key=>$val){
			$sql = $this->db->query("select count(nomor_urut) as jumlah from agenda where YEAR(tanggal_surat_masuk) = '$tahun' and MONTH(tanggal_surat_masuk) = '$key' ")->result_array();
			$datax = $val;
			$datay = (@$sql[0]['jumlah']?$sql[0]['jumlah']:0);
			
			$data[] = array('datax' => $datax, 'datay' => $datay);
		}
		
		
		echo json_encode($data);
	}
			function cariagenda() {
       $data['laporan']=$this->mlaporan->cariagenda();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['laporan']==null) {
          echo 'maaf data yang anda cari tidak ada atau keywordnya salah';
          echo anchor('laporan','kembali');
          }
          else {
             $this->load->view('moveon/laporan/laporan_sm',$data); 

}
}
	function carilaporan(){
		$submit = $this->input->post('submit');
				//$data['usermandor'] = $this->mlaporan->usermandor();
				//print_r($data['usermandor']);exit;
		if($submit){
			//$user = $this->input->post('mandor');
			$thn = $this->input->post('thn');
			
			$data['laporan'] = $this->MLaporan->displayAgendaCari($thn);
			//$data['mandor'] = $user;
			$data['tahun'] = $thn;
			//echo $user; exit;
			$this->load->view('moveon/laporan/laporan_sm', $data);
		}
		
	}
}
?>