<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class pelaporan extends CI_Controller{
 	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MPelaporan');
	}
	
	
	public function index(){
		$data['active'] = "home";
		$data['profile'] = $this->MPelaporan->getDetail();
		$this->load->view('moveon/user/profile', $data);
	}
	

	public function pelaporan()
	{
		$this->load->model('MPelaporan'); // ini fungsi untuk me-load model user
		$data['pelaporan'] = $this->MPelaporan->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "kelola_data"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "pelaporan"; // ini mah yang menu
		$this->load->view('moveon/pelaporan/pelaporan', $data);

	}

	public function tambah_pelaporan()
	 {
	  $data['menu'] = "pelaporan";
	  $this->load->view('moveon/pelaporan/tambah_pelaporan',$data); 
	 }
	 public function entry_pelaporan()
	 {
	  $this->load->model('MPelaporan');
	  $id_pel = $this->input->post('id_pel');
	  $pelaporan = $this->input->post('pelaporan');
	  $bukti = $this->input->post('bukti');
	  $catatan = $this->input->post('catatan');
	  
	  		  
	  
	   if ($id_pel != '') {
	     $data = array(
	     	'id_pel' => $id_pel,
	     'pelaporan' => $pelaporan,
	     'bukti' => $bukti,
	     'catatan' => $catatan,
	    	    
	    );
	    $this->MPelaporan->input_data($data,'pelaporan');
	    echo "<script>alert('Data berhasil di input !');window.location.assign('pelaporan');</script>";
	    // redirect('admin/user');
	    }else{
	     echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	    }
	 
	 }
	 public function edit_pelaporan($id_pel)
	 {
	  $this->load->model('MPelaporan');
	  $where = array('id_pel' => $id_pel);
	  $data['pelaporan'] = $this->MPelaporan->edit_data($where,'pelaporan')->result();

	  $data['menu'] = "id_pel";
	  $this->load->view('moveon/pelaporan/edit_pelaporan',$data);
	 }
	 public function update_pelaporan()
	 {
	  $this->load->model('MPelaporan');
	  $id_pel = $this->input->post('id_pel');
	  $pelaporan = $this->input->post('pelaporan');
	  $bukti = $this->input->post('bukti');
	  $catatan = $this->input->post('catatan');
	  
	  

	  if ($id_pel != '') {
	     $data = array(
	     	'id_pel' => $id_pel,
	     'pelaporan' => $pelaporan,
	     'bukti' => $bukti,
	     'catatan' => $catatan,
	   );

	   $where = array(
	    'id_pel' => $id_pel,
	   );

	   $this->MPelaporan->update_data($where,$data,'pelaporan');
	   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
	   }else{
	    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	   }
	 }
	 function hapus_pelaporan($id_pel){
	  $this->load->model('MPelaporan');
	  $where = array('id_pel' => $id_pel);
	  $this->MPelaporan->hapus_data($where,'pelaporan');
	  redirect('admin/pelaporan/pelaporan');
	 }


			
	 }
 ?>