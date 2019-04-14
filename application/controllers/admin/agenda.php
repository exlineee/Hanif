<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/
 class Agenda extends CI_Controller{
 	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MAgenda');
	}
	
	
	public function index(){
		$data['active'] = "home";
		$data['profile'] = $this->MAgenda->getDetail();
		$this->load->view('moveon/agenda/agenda', $data);
	}
	
	public function agenda()
	{
		$this->load->model('MAgenda'); // ini fungsi untuk me-load model user
		$data['agenda'] = $this->MAgenda->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "agenda"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "agenda"; // ini mah yang menu
		$this->load->view('moveon/agenda/agenda', $data);

	}

	public function tambah_agenda()
	 {
	  $data['menu'] = "agenda";
	  $this->load->view('moveon/agenda/tambah_agenda',$data); 
	 }
	 public function entry_agenda()
	{
	  $this->load->model('MAgenda');
	  $nomor_urut = $this->input->post('nomor_urut');
	  $tanggal_surat_masuk = $this->input->post('tanggal_surat_masuk');
	  $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
	  $nama_pengirim = $this->input->post('nama_pengirim');
	  $pekerjaan_pengirim = $this->input->post('pekerjaan_pengirim');
	  $alamat_pengirim = $this->input->post('alamat_pengirim');
	  $perihal_surat = $this->input->post('perihal_surat');
	  $tgl_diselenggarakan = $this->input->post('tgl_diselenggarakan');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  $tujuan_surat = $this->input->post('tujuan_surat');
	  $keterangan_surat = $this->input->post('keterangan_surat');
	  $dokumen_surat = $this->input->post('dokumen_surat');
	  
	   		  $config['upload_path']          = './letter/';
			  $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|docx|pdf';
			  $config['max_size']             = '100000';
			  $config['max_width']            = '200000';
			  $config['max_height']           = '200000';
			 
			  $this->load->library('upload', $config);
			 
			  if ( ! $this->upload->do_upload('dokumen_surat')){
			   $error = array('error' => $this->upload->display_errors());
			   $this->load->view('admin/agenda/tambah_agenda', $error);
			  }else{
			   $file= $this->upload->data();

	  
	   //if ($nomor_urut != '') {
	     $data = array(
	     	'nomor_urut' => $nomor_urut,
	     'tanggal_surat_masuk' => $tanggal_surat_masuk,
	     'nomor_surat_masuk' => $nomor_surat_masuk,
	     'nama_pengirim' => $nama_pengirim,
	     'pekerjaan_pengirim' => $pekerjaan_pengirim,
	     'alamat_pengirim' => $alamat_pengirim,
	     'perihal_surat' => $perihal_surat,
	     'tgl_diselenggarakan' => $tgl_diselenggarakan,
	     'waktu' => $waktu,
	     'tempat' => $tempat,
	     'tujuan_surat' => $tujuan_surat,
	     'keterangan_surat' => $keterangan_surat,
	     'dokumen_surat' => $file['file_name']
	     
	    	    
	    );
	    $this->MAgenda->input_data($data,'agenda');
	    echo "<script>alert('Data berhasil di input !');window.location.assign('agenda');</script>";
	    // redirect('admin/user');
	    }
	    $this->load->model('MAgenda');
	 }
	 public function edit_agenda($nomor_urut)
	 {
	  $this->load->model('MAgenda');
	  $where = array('nomor_urut' => $nomor_urut);
	  $data['agenda'] = $this->MAgenda->edit_data($where,'agenda')->result();

	  $data['menu'] = "agenda";
	  $this->load->view('moveon/agenda/edit_agenda',$data);
	 }
	 public function update_agenda()
	 {
	  $this->load->model('MAgenda');
	  $nomor_urut = $this->input->post('nomor_urut');
	  $tanggal_surat_masuk = $this->input->post('tanggal_surat_masuk');
	  $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
	  $nama_pengirim = $this->input->post('nama_pengirim');
	  $pekerjaan_pengirim = $this->input->post('pekerjaan_pengirim');
	  $alamat_pengirim = $this->input->post('alamat_pengirim');
	  $perihal_surat = $this->input->post('perihal_surat');
	  $tgl_diselenggarakan = $this->input->post('tgl_diselenggarakan');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  $tujuan_surat = $this->input->post('tujuan_surat');
	  $tujuan_surat1 = $this->input->post('tujuan_surat1');
	  $tujuan_surat2 = $this->input->post('tujuan_surat2');
	  $tujuan_surat3 = $this->input->post('tujuan_surat3');
	  $keterangan_surat = $this->input->post('keterangan_surat');
	  $dokumen_surat = $this->input->post('dokumen_surat');

	   		  

	  if ($nomor_urut != '') {
	     $data = array(
	     	'nomor_urut' => $nomor_urut,
	     'tanggal_surat_masuk' => $tanggal_surat_masuk,
	     'nomor_surat_masuk' => $nomor_surat_masuk,
	     'nama_pengirim' => $nama_pengirim,
	     'pekerjaan_pengirim' => $pekerjaan_pengirim,
	     'alamat_pengirim' => $alamat_pengirim,
	     'perihal_surat' => $perihal_surat,
	     'tgl_diselenggarakan' => $tgl_diselenggarakan,
	     'waktu' => $waktu,
	     'tempat' => $tempat,
	     'tujuan_surat' => $tujuan_surat,
	     'tujuan_surat1'=> $tujuan_surat1,
	     'tujuan_surat2'=> $tujuan_surat2,
	     'tujuan_surat3' => $tujuan_surat3,
	     'keterangan_surat' => $keterangan_surat,
	     'dokumen_surat' => $dokumen_surat,
	   );

	   $where = array(
	    'nomor_urut' => $nomor_urut
	   );

	   $this->MAgenda->update_data($where,$data,'agenda');
	   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
	   }else{
	    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	   }
	 }
	 public function detail_agenda($nomor_urut){
		$data['menu'] = "detail_agenda";
		$data['main_menu'] = "detail_agenda";
		$data['detail_agenda'] = $this->MAgenda->detail_agenda($nomor_urut);
        $this->load->view('moveon/agenda/detail_agenda', $data);
	}
	public function get_agenda($nomor){
		$this->load->model('MAgenda');
		$where = array('nomor_urut' => $nomor );
		// $this->MAgenda->get_agenda($where,'agenda');
		echo json_encode($this->MAgenda->get_agenda($where,'agenda'));
	}
	
	 function hapus_agenda($nomor_urut){
	  $this->load->model('MAgenda');
	  $where = array('nomor_urut' => $nomor_urut);
	  $this->MAgenda->hapus_data($where,'agenda');
	  redirect('admin/agenda/agenda');
	 }
}
 ?>