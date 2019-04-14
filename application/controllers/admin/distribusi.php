<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Distribusi extends CI_Controller{
 	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MDistribusi');
	}
	
	
	public function index(){
		$data['active'] = "home";
		$data['profile'] = $this->MDistribusi->getDetail();
		$this->load->view('moveon/distribusi/distribusi', $data);
	}
	
	public function distribusi()
	{
		$this->load->model('MDistribusi'); // ini fungsi untuk me-load model user
		$data['distribusi'] = $this->MDistribusi->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user

		$data['main_menu'] = "distribusi"; // ini mah yang menu biar kebuka si dropdown menu nya xD o
		$data['menu'] = "distribusi"; // ini mah yang menu
		$this->load->view('moveon/distribusi/distribusi', $data);

	}

	public function lembar_dis($id_distribusi) {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE  id_distribusi = '$id_distribusi'")->row();	
		$this->load->view('moveon/distribusi/lembar_dis', $a);
	}
	public function distribusi1() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasi Pemerintah' OR diteruskan_kepada1 = 'Kasi Pemerintah' OR diteruskan_kepada2 = 'Kasi Pemerintah' OR diteruskan_kepada3 ='Kasi Pemerintah'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi2() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasubag Umum & Kepegawaian' OR diteruskan_kepada1 = 'Kasubag Umum & Kepegawaian' OR diteruskan_kepada2 = 'Kasubag Umum & Kepegawaian' OR diteruskan_kepada3 ='Kasubag Umum & Kepegawaian'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi3() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasi Ekbang-LH' OR diteruskan_kepada1 = 'Kasi Ekbang-LH' OR diteruskan_kepada2 = 'Kasi Ekbang-LH' OR diteruskan_kepada3 ='Kasi Ekbang-LH'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi4() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasi Kesos' OR diteruskan_kepada1 = 'Kasi Kesos' OR diteruskan_kepada2 = 'Kasi Kesos' OR diteruskan_kepada3 ='Kasi Kesos'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi5() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasi Pemberdayaan' OR diteruskan_kepada1 = 'Kasi Pemberdayaan' OR diteruskan_kepada2 = 'Kasi Pemberdayaan' OR diteruskan_kepada3 ='Kasi Pemberdayaan'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi6() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasi Trantib' OR diteruskan_kepada1 = 'Kasi Trantib' OR diteruskan_kepada2 = 'Kasi Trantib' OR diteruskan_kepada3 ='Kasi Trantib'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi7() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Pertanahan' OR diteruskan_kepada1 = 'Pertanahan' OR diteruskan_kepada2 = 'Pertanahan' OR diteruskan_kepada3 ='Pertanahan'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi8() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Kasubag Keuangan & Program' OR diteruskan_kepada1 = 'Kasubag Keuangan & Program' OR diteruskan_kepada2 = 'Kasubag Keuangan & Program' OR diteruskan_kepada3 ='Kasubag Keuangan & Program'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}
	public function distribusi9() {
		//$id_disposisi = $this->uri->segment(3);
		$a['distribusi']	= $this->db->query("SELECT * FROM distribusi WHERE diteruskan_kepada = 'Sekcam' OR diteruskan_kepada1 = 'Sekcam' OR diteruskan_kepada2 = 'Sekcam' OR diteruskan_kepada3 ='Sekcam'")->result();
			
		$this->load->view('moveon/distribusi/distribusi', $a);
	}


		 }
 ?>