<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Disposisi extends CI_Controller{
 	function __construct(){
		parent::__construct();
		$this->load->model('MDisposisi');
	}
	
	
	public function index(){
		$data['active'] = "home";
		$data['profile'] = $this->MDisposisi->getDetail();
		$this->load->view('moveon/user/profile', $data);
	}
	

	public function disposisi()
	{
		$this->load->model('MDisposisi'); // ini fungsi untuk me-load model user
		$data['disposisi'] = $this->MDisposisi->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "kelola_data"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "disposisi"; // ini mah yang menu
		$this->load->view('moveon/disposisi/disposisi', $data);

	}

	public function disposisi_adm()
	{
		$this->load->model('MDisposisi'); // ini fungsi untuk me-load model user
		$data['disposisi'] = $this->MDisposisi->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "kelola_data"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "disposisi_adm"; // ini mah yang menu
		$this->load->view('moveon/disposisi/disposisi_adm', $data);

	}


	public function tambah_disposisi()
	 {
	  $agenda ['agenda']=$this->MDisposisi->get_agenda()->result();
	  $this->load->view('moveon/disposisi/tambah_disposisi',$agenda);
	  
	  // $this->load->view('moveon/disposisi/tambah_disposisi',$user); 
	 }

	 public function entry_disposisi()
	 {
	  $this->load->model('MDisposisi');
	  $id_disposisi = $this->input->post('id_disposisi');
	  $nomor_agenda = $this->input->post('nomor_agenda');
	  $surat_dari = $this->input->post('surat_dari');
	  $nomor_surat = $this->input->post('nomor_surat');
	  $diterima_tgl = $this->input->post('diterima_tgl');
	  $perihal = $this->input->post('perihal');
	  $surat_masuk = $this->input->post('surat_masuk');
	  $diteruskan_kepada = $this->input->post('diteruskan_kepada');
	  $diteruskan_kepada1 = $this->input->post('diteruskan_kepada1');
	  $diteruskan_kepada2 = $this->input->post('diteruskan_kepada2');
	  $diteruskan_kepada3 = $this->input->post('diteruskan_kepada3');
	  $tanggal_surat = $this->input->post('tanggal_surat');  
	  $sifat = $this->input->post('sifat');	  
	  $keterangan = $this->input->post('keterangan');
	  $catatan = $this->input->post('catatan');
	  $tindakan = $this->input->post('tindakan');
	  $tanggal = $this->input->post('tanggal');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  
	  
	   if ($id_disposisi != '') {
	     $data = array(
	     	'id_disposisi' => $id_disposisi,
	     	'nomor_agenda' => $nomor_agenda,
	      	'surat_dari' => $surat_dari,
	    	'nomor_surat' => $nomor_surat,
	    	'diterima_tgl' => $diterima_tgl,
	    	'perihal' =>  $perihal,
	    	'surat_masuk' => $surat_masuk,
	   		'diteruskan_kepada' => $diteruskan_kepada,
	   		'diteruskan_kepada1' => $diteruskan_kepada1,
	   		'diteruskan_kepada2' => $diteruskan_kepada2,
	   		'diteruskan_kepada3' => $diteruskan_kepada3,
	   		'tanggal_surat' =>  $tanggal_surat,
	    	'sifat' => $sifat,
	     	'keterangan' => $keterangan,
	    	'catatan' => $catatan,
	    	'tindakan' => 'Tunggu Verifikasi Camat',
	    	'tanggal' => $tanggal,
	    	'waktu' => $waktu,
	    	'tempat' => $tempat,
	  		
	    );
	    $this->MDisposisi->input_data($data,'disposisi');
	    echo "<script>alert('Data berhasil di input !');window.location.assign('disposisi_adm');</script>";
	    // redirect('admin/user');
	    }else{
	     echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	    }
	 
	 }
	 public function edit_disposisi($id_disposisi)
	 {
	  $this->load->model('MDisposisi');
	  $where = array('id_disposisi' => $id_disposisi);
	  $data['disposisi'] = $this->MDisposisi->edit_data($where,'disposisi')->result();
	  $data ['agenda']=$this->MDisposisi->get_agenda()->result();
	  $data['menu'] = "disposisi";
	  $this->load->view('moveon/disposisi/edit_disposisi',$data);
	 }
	 public function update_disposisi()
	 {
	  $this->load->model('MDisposisi');
	  $id_disposisi = $this->input->post('id_disposisi');
	  $surat_dari = $this->input->post('surat_dari');
	  $nomor_surat = $this->input->post('nomor_surat');
	  $tanggal_surat = $this->input->post('tanggal_surat');
	  $diterima_tgl = $this->input->post('diterima_tgl');
	  $nomor_agenda = $this->input->post('nomor_agenda');
	  $sifat = $this->input->post('sifat');
	  $perihal = $this->input->post('perihal');
	  $surat_masuk = $this->input->post('surat_masuk');
	  $diteruskan_kepada = $this->input->post('diteruskan_kepada');
	  $diteruskan_kepada1 = $this->input->post('diteruskan_kepada1');
	  $diteruskan_kepada2 = $this->input->post('diteruskan_kepada2');
	  $diteruskan_kepada3 = $this->input->post('diteruskan_kepada3');
	  $keterangan = $this->input->post('keterangan');
	  $catatan = $this->input->post('catatan');
	  $tindakan = $this->input->post('tindakan');
	  $tanggal = $this->input->post('tanggal');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');

	  

	  if ($id_disposisi != '') {
	     $data = array(
	     	'id_disposisi' => $id_disposisi,
	     'surat_dari' => $surat_dari,
	    'nomor_surat' => $nomor_surat,
	   'tanggal_surat' =>  $tanggal_surat,
	   'diterima_tgl' => $diterima_tgl,
	     'nomor_agenda' => $nomor_agenda,
	    'sifat' => $sifat,
	   'perihal' =>  $perihal,
	   'surat_masuk' => $surat_masuk,
	   'diteruskan_kepada' => $diteruskan_kepada,
	   'diteruskan_kepada1' => $diteruskan_kepada1,
	   'diteruskan_kepada2' => $diteruskan_kepada2,
	   'diteruskan_kepada3' => $diteruskan_kepada3,
	     'keterangan' => $keterangan,
	    'catatan' => $catatan,
	    'tindakan' => 'Telah Di Disposisikan',
	    'tanggal' => $tanggal,
	    	'waktu' => $waktu,
	    	'tempat' => $tempat,
	   
	   );

	   $where = array(
	    'id_disposisi' => $id_disposisi
	   );

	   $this->MDisposisi->update_data($where,$data,'disposisi');
	   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
	   }else{
	    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	   }
	 }

	  public function edit_disposisiadm($id_disposisi)
	 {
	  $this->load->model('MDisposisi');
	  $where = array('id_disposisi' => $id_disposisi);
	  $data['disposisi'] = $this->MDisposisi->edit_data($where,'disposisi')->result();
	  $data ['agenda']=$this->MDisposisi->get_agenda()->result();
	  $data['menu'] = "disposisi";
	  $this->load->view('moveon/disposisi/edit_disposisiadm',$data);
	 }
	 public function update_disposisiadm()
	 {
	  $this->load->model('MDisposisi');
	  $id_disposisi = $this->input->post('id_disposisi');
	  $surat_dari = $this->input->post('surat_dari');
	  $nomor_surat = $this->input->post('nomor_surat');
	  $tanggal_surat = $this->input->post('tanggal_surat');
	  $diterima_tgl = $this->input->post('diterima_tgl');
	  $nomor_agenda = $this->input->post('nomor_agenda');
	  $sifat = $this->input->post('sifat');
	  $perihal = $this->input->post('perihal');
	  $surat_masuk = $this->input->post('surat_masuk');
	  $diteruskan_kepada = $this->input->post('diteruskan_kepada');
	  $diteruskan_kepada1 = $this->input->post('diteruskan_kepada1');
	  $diteruskan_kepada2 = $this->input->post('diteruskan_kepada2');
	  $diteruskan_kepada3 = $this->input->post('diteruskan_kepada3');
	  $keterangan = $this->input->post('keterangan');
	  $catatan = $this->input->post('catatan');
	  $tindakan = $this->input->post('tindakan');
	  $tanggal = $this->input->post('tanggal');
	  $waktu = $this->input->post('waktu');
	  $tempat = $this->input->post('tempat');
	  

	  if ($id_disposisi != '') {
	     $data = array(
	     	'id_disposisi' => $id_disposisi,
	     'surat_dari' => $surat_dari,
	    'nomor_surat' => $nomor_surat,
	   'tanggal_surat' =>  $tanggal_surat,
	   'diterima_tgl' => $diterima_tgl,
	     'nomor_agenda' => $nomor_agenda,
	    'sifat' => $sifat,
	   'perihal' =>  $perihal,
	   'surat_masuk' => $surat_masuk,
	   'diteruskan_kepada' => $diteruskan_kepada,
	   'diteruskan_kepada1' => $diteruskan_kepada1,
	   'diteruskan_kepada2' => $diteruskan_kepada2,
	   'diteruskan_kepada3' => $diteruskan_kepada3,
	     'keterangan' => $keterangan,
	    'catatan' => $catatan,
	    'tindakan' => 'Tunggu Verifikasi Camat',
	    'tanggal' => $tanggal,
	    	'waktu' => $waktu,
	    	'tempat' => $tempat,
	   
	   );

	   $where = array(
	    'id_disposisi' => $id_disposisi
	   );

	   $this->MDisposisi->update_data($where,$data,'disposisi');
	   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
	   }else{
	    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
	   }
	 }



	 	public function detail_disposisi($id_disposisi){
		$data['menu'] = "detail_disposisi";
		$data['main_menu'] = "detail_disposisi";
		$data['detail_disposisi'] = $this->MDisposisi->detail_disposisi($id_disposisi);
        $this->load->view('moveon/disposisi/detail_disposisi', $data);
	}

	 function hapus_disposisi($id_disposisi){
	  $this->load->model('MDisposisi');
	  $where = array('id_disposisi' => $id_disposisi);
	  $this->MDisposisi->hapus_data($where,'disposisi');
	  redirect('admin/disposisi/disposisi');
	 }
	 function hapus_disposisi1($id_disposisi){
	  $this->load->model('MDisposisi');
	  $where = array('id_disposisi' => $id_disposisi);
	  $this->MDisposisi->hapus_data($where,'disposisi');
	  redirect('admin/disposisi/disposisi_adm');
	 }
	 //public function cetak_disposisi($id_disposisi){
		//$data['menu'] = "cetak_disposisi";
		//$data['main_menu'] = "cetak_disposisi";
		//$data['cetak_disposisi'] = $this->MDisposisi->cetak_disposisi($id_disposisi);
        //$this->load->view('moveon/disposisi/cetak_disposis', $data);
	//}
	public function cetak_disposisi($id_disposisi) {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE id_disposisi = '$id_disposisi'")->row();	
		$this->load->view('moveon/disposisi/cetak_disposisi', $a);
	}
	public function get_disposisi($id){
		$this->load->model('MDisposisi');
		$where = array('id_disposisi' => $id );
		// $this->MAgenda->get_agenda($where,'agenda');
		echo json_encode($this->MDisposisi->get_disposisi($where,'disposisi'));
	}


	public function disposisi1() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasi Pemerintah' OR diteruskan_kepada1 = 'Kasi Pemerintah' OR diteruskan_kepada2 = 'Kasi Pemerintah' OR diteruskan_kepada3 ='Kasi Pemerintah'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi2() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasubag Umum & Kepegawaian' OR diteruskan_kepada1 = 'Kasubag Umum & Kepegawaian' OR diteruskan_kepada2 = 'Kasubag Umum & Kepegawaian' OR diteruskan_kepada3 ='Kasubag Umum & Kepegawaian'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi3() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasi Ekbang-LH' OR diteruskan_kepada1 = 'Kasi Ekbang-LH' OR diteruskan_kepada2 = 'Kasi Ekbang-LH' OR diteruskan_kepada3 ='Kasi Ekbang-LH'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi4() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasi Kesos' OR diteruskan_kepada1 = 'Kasi Kesos' OR diteruskan_kepada2 = 'Kasi Kesos' OR diteruskan_kepada3 ='Kasi Kesos'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi5() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasi Pemberdayaan' OR diteruskan_kepada1 = 'Kasi Pemberdayaan' OR diteruskan_kepada2 = 'Kasi Pemberdayaan' OR diteruskan_kepada3 ='Kasi Pemberdayaan'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi6() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasi Trantib' OR diteruskan_kepada1 = 'Kasi Trantib' OR diteruskan_kepada2 = 'Kasi Trantib' OR diteruskan_kepada3 ='Kasi Trantib'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi7() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Pertanahan' OR diteruskan_kepada1 = 'Pertanahan' OR diteruskan_kepada2 = 'Pertanahan' OR diteruskan_kepada3 ='Pertanahan'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi8() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Kasubag Keuangan & Program' OR diteruskan_kepada1 = 'Kasubag Keuangan & Program' OR diteruskan_kepada2 = 'Kasubag Keuangan & Program' OR diteruskan_kepada3 ='Kasubag Keuangan & Program'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}
	public function disposisi9() {
		//$id_disposisi = $this->uri->segment(3);
		$a['disposisi']	= $this->db->query("SELECT * FROM disposisi WHERE diteruskan_kepada = 'Sekcam' OR diteruskan_kepada1 = 'Sekcam' OR diteruskan_kepada2 = 'Sekcam' OR diteruskan_kepada3 ='Sekcam'")->result();
			
		$this->load->view('moveon/disposisi/disposisi_user', $a);
	}



	public function distribusi(){
		$this->load->model('MDisposisi');
		 $data = array(
	     	'nomor_agenda' => $this->input->post("nomor_agenda"),
	     	'surat_dari' => $this->input->post("surat_dari"),
	     	'nomor_surat' => $this->input->post("nomor_surat"),
	     	'tanggal_surat' => $this->input->post("tanggal_surat"),
	     	'diterima_tgl' => $this->input->post("diterima_tgl"),
	     	'diteruskan_kepada' => $this->input->post("diteruskan_kepada"),
	     	'diteruskan_kepada1' => $this->input->post("diteruskan_kepada1"),
	     	'diteruskan_kepada2' => $this->input->post("diteruskan_kepada2"),
	     	'diteruskan_kepada3' => $this->input->post("diteruskan_kepada3"),
	     	'perihal' => $this->input->post("perihal"),
	     	'catatan' => $this->input->post("catatan"),
	     	'surat_masuk' => $this->input->post("surat_masuk"),
	     	'sifat' => $this->input->post("sifat"),
	     	'keterangan' => $this->input->post("keterangan"),


	    );
	    
		$this->MDisposisi->input_data_distribusi($data,"distribusi");
		header('Location: '.site_url().'admin/disposisi/disposisi_adm');
	}

			
	 }

 ?>