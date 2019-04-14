<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class jadwal extends CI_Controller{
 	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MJadwal');
	}
	
	
	public function index(){
		$data['active'] = "home";
		$data['profile'] = $this->MJadwal->getDetail();
		$this->load->view('moveon/user/profile', $data);
	}
	

	public function jadwal()
	{
		$this->load->model('MJadwal'); // ini fungsi untuk me-load model user
		$data['jadwal'] = $this->MJadwal->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "kelola_data"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "jadwal"; // ini mah yang menu
		$this->load->view('moveon/jadwal/jadwal', $data);

	}
	public function jadwalu()
	{
		$this->load->model('MJadwal'); // ini fungsi untuk me-load model user
		$data['jadwal'] = $this->MJadwal->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "kelola_data"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "jadwal"; // ini mah yang menu
		$this->load->view('moveon/jadwal/jadwalu', $data);

	}


	public function tambah_jadwal()
	 {
	  $disposisi ['disposisi']=$this->MJadwal->get_disposisi()->result();
	  $this->load->view('moveon/jadwal/tambah_jadwal',$disposisi);
	 }
	 public function entry_jadwal()
	 {
	  $this->load->model('MJadwal');
	  $id_jadwal = $this->input->post('id_jadwal');
	  $id_disposisi = $this->input->post('id_disposisi');
	  $acara = $this->input->post('acara');
	  $hari = $this->input->post('hari');
	  $tanggal = $this->input->post('tanggal');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  $nama_yang_hadir = $this->input->post('nama_yang_hadir');
	  $nama_yang_hadir1 = $this->input->post('nama_yang_hadir1');
	  $nama_yang_hadir2 = $this->input->post('nama_yang_hadir2');
	  $nama_yang_hadir3 = $this->input->post('nama_yang_hadir3');
	  $keterangan = $this->input->post('keterangan');

	  
	   if ($id_jadwal != '') {
	     $data = array(
	     	'id_jadwal' => $id_jadwal,
	     	'id_disposisi' => $id_disposisi,
	     'acara' => $acara,
	    'hari' => $hari,
	    'tanggal' => $tanggal,
	    'waktu' => $waktu,
		'tempat' => $tempat,
		'nama_yang_hadir' => $nama_yang_hadir,
		'nama_yang_hadir1' => $nama_yang_hadir1,
		'nama_yang_hadir2' => $nama_yang_hadir2,
		'nama_yang_hadir3' => $nama_yang_hadir3,
		'keterangan' => $keterangan,
		
		
	    );
	    $this->MJadwal->input_data($data,'jadwal');
	    echo "<script>alert('Data berhasil di input !');window.location.assign('jadwal');</script>";
	    // redirect('admin/user');
	    }else{
	     echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	    }
	 
	 }
	 public function edit_jadwal($id_jadwal)
	 {
	  $this->load->model('MJadwal');
	  $where = array('id_jadwal' => $id_jadwal);
	  $data['jadwal'] = $this->MJadwal->edit_data($where,'jadwal')->result();

	  $data ['agenda']=$this->MJadwal->get_agenda()->result();
	  $data['menu'] = "jadwal";
	  $this->load->view('moveon/jadwal/edit_jadwal',$data);
	 }
	 public function update_jadwal()
	 {
	 $this->load->model('MJadwal');
	  $id_jadwal = $this->input->post('id_jadwal');
	  $id_disposisi = $this->input->post('id_disposisi');
	  $acara = $this->input->post('acara');
	  $hari = $this->input->post('hari');
	  $tanggal = $this->input->post('tanggal');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  $nama_yang_hadir = $this->input->post('nama_yang_hadir');
	  $nama_yang_hadir1 = $this->input->post('nama_yang_hadir1');
	  $nama_yang_hadir2 = $this->input->post('nama_yang_hadir2');
	  $nama_yang_hadir3 = $this->input->post('nama_yang_hadir3');
	  $keterangan = $this->input->post('keterangan');
	  

	if ($id_jadwal != '') {
	     $data = array(
	     	'id_jadwal' => $id_jadwal,
	     	'id_disposisi' => $id_disposisi,
	     'acara' => $acara,
	    'hari' => $hari,
	    'tanggal' => $tanggal,
	    'waktu' => $waktu,
		'tempat' => $tempat,
		'nama_yang_hadir' => $nama_yang_hadir,
		'nama_yang_hadir1' => $nama_yang_hadir1,
		'nama_yang_hadir2' => $nama_yang_hadir2,
		'nama_yang_hadir3' => $nama_yang_hadir3,
		'keterangan' => $keterangan,
	   );

	   $where = array(
	    'id_jadwal' => $id_jadwal
	   );

	   $this->MJadwal->update_data($where,$data,'jadwal');
	   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
	   }else{
	    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	   }
	 }

	  public function edit_jadwaladm($id_jadwal)
	 {
	  $this->load->model('MJadwal');
	  $where = array('id_jadwal' => $id_jadwal);
	  $data['jadwal'] = $this->MJadwal->edit_data($where,'jadwal')->result();
	  //$agenda ['agenda']=$this->MJadwal->get_agenda()->result();
	  $data ['disposisi']=$this->MJadwal->get_disposisi()->result();
	  $data['menu'] = "jadwal";
	  $this->load->view('moveon/jadwal/edit_jadwaladm',$data);
	 }
	 public function update_jadwaladm()
	 {
	 $this->load->model('MJadwal');
	  $id_jadwal = $this->input->post('id_jadwal');
	  $id_disposisi = $this->input->post('id_disposisi');
	  $acara = $this->input->post('acara');
	  $hari = $this->input->post('hari');
	  $tanggal = $this->input->post('tanggal');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  $nama_yang_hadir = $this->input->post('nama_yang_hadir');
	  $nama_yang_hadir1 = $this->input->post('nama_yang_hadir1');
	  $nama_yang_hadir2 = $this->input->post('nama_yang_hadir2');
	  $nama_yang_hadir3 = $this->input->post('nama_yang_hadir3');
	  $keterangan = $this->input->post('keterangan');
	  

	if ($id_jadwal != '') {
	     $data = array(
	     	'id_jadwal' => $id_jadwal,
	     	'id_disposisi' => $id_disposisi,
	     'acara' => $acara,
	    'hari' => $hari,
	    'tanggal' => $tanggal,
	    'waktu' => $waktu,
		'tempat' => $tempat,
		'nama_yang_hadir' => $nama_yang_hadir,
		'nama_yang_hadir1' => $nama_yang_hadir1,
		'nama_yang_hadir2' => $nama_yang_hadir2,
		'nama_yang_hadir3' => $nama_yang_hadir3,
		'keterangan' => $keterangan,
	   );

	   $where = array(
	    'id_jadwal' => $id_jadwal
	   );

	   $this->MJadwal->update_data($where,$data,'jadwal');
	   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
	   }else{
	    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	   }
	 }


	 public function jadwal1() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasi Pemerintah' OR nama_yang_hadir1 = 'Kasi Pemerintah' OR nama_yang_hadir2 = 'Kasi Pemerintah' OR nama_yang_hadir3 ='Kasi Pemerintah'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal2() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasubag Umum & Kepegawaian' OR nama_yang_hadir1 = 'Kasubag Umum & Kepegawaian' OR nama_yang_hadir2 = 'Kasubag Umum & Kepegawaian' OR nama_yang_hadir3 ='Kasubag Umum & Kepegawaian'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal3() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasi Ekbang-LH' OR nama_yang_hadir1 = 'Kasi Ekbang-LH' OR nama_yang_hadir2 = 'Kasi Ekbang-LH' OR nama_yang_hadir3 ='Kasi Ekbang-LH'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal4() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasi Kesos' OR nama_yang_hadir1 = 'Kasi Kesos' OR nama_yang_hadir2 = 'Kasi Kesos' OR nama_yang_hadir3 ='Kasi Kesos'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal5() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasi Pemberdayaan' OR nama_yang_hadir1 = 'Kasi Pemberdayaan' OR nama_yang_hadir2 = 'Kasi Pemberdayaan' OR nama_yang_hadir3 ='Kasi Pemberdayaan'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal6() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasi Trantib' OR nama_yang_hadir1 = 'Kasi Trantib' OR nama_yang_hadir2 = 'Kasi Trantib' OR nama_yang_hadir3 ='Kasi Trantib'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal7() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Pertanahan' OR nama_yang_hadir1 = 'Pertanahan' OR nama_yang_hadir2 = 'Pertanahan' OR nama_yang_hadir3 ='Pertanahan'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal8() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Kasubag Keuangan & Program' OR nama_yang_hadir1 = 'Kasubag Keuangan & Program' OR nama_yang_hadir2 = 'Kasubag Keuangan & Program' OR nama_yang_hadir3 ='Kasubag Keuangan & Program'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}
	public function jadwal9() {
		//$id_disposisi = $this->uri->segment(3);
		$a['jadwal']	= $this->db->query("SELECT * FROM jadwal WHERE nama_yang_hadir = 'Sekcam' OR nama_yang_hadir1 = 'Sekcam' OR nama_yang_hadir2 = 'Sekcam' OR nama_yang_hadir3 ='Sekcam'")->result();
			
		$this->load->view('moveon/jadwal/jadwalu', $a);
	}

	 function hapus_jadwal($id_jadwal){
	  $this->load->model('MJadwal');
	  $where = array('id_jadwal' => $id_jadwal);
	  $this->MJadwal->hapus_data($where,'jadwal');
	  redirect('admin/jadwal/jadwal');
	 }


			
	 }
 ?>