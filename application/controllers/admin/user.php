<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
			redirect('admin/login');
		}
		$this->load->model('MUser');
	}
	
	public function index(){
		$data['active'] = "home";
		$data['profile'] = $this->MUser->getDetail();
		$this->load->view('moveon/user/profile', $data);
	}
	
	public function edit(){
		$data['active'] = "edit";
		$data['profile'] = $this->MUser->getDetail();
		$this->load->view('moveon/user/edit', $data);
	}
	
	public function do_edit(){
		$email = $this->security->xss_clean($this->input->post('email'));
		$result = $this->MUser->edit($this->session->userdata('username'),  $email);
		if ($result){
			$this->session->set_flashdata('update_profile', true);
			redirect('admin/user');
		} else {
			redirect('admin/user/edit');
		}
	}
	
	public function password(){
		$data['active'] = "passwd";
		$this->load->view('moveon/user/password', $data);
	}
	
	public function do_password(){
		$old_password = $this->security->xss_clean($this->input->post('old_password'));
		$check_passwd = $this->MUser->checkPassword($old_password);
		if ($check_passwd){
			$new_password = $this->security->xss_clean($this->input->post('repassword'));
			$this->MUser->changePassword($new_password);
			$this->session->set_flashdata('pwd_true', true);
		} else {
			$this->session->set_flashdata('pwd_failed', true);
		}
		redirect('admin/user/password');
	}
	public function kelola_user()
	{
		$this->load->model('MUser'); // ini fungsi untuk me-load model user
		$data['user'] = $this->MUser->tampil_data()->result(); // ini adalah fungsi untuk menampilkan data user
		
		$data['main_menu'] = "kelola_data";
		$data['menu'] = "kelola_user"; // ini mah yang menu
		$this->load->view('moveon/user/kelola_user', $data);

	}

	public function tambah_user()
 {
  $data['menu'] = "user";
  $this->load->view('moveon/user/tambah_user',$data); 
 }
 public function entry_user()
 {
  $this->load->model('MUser');
  $id_user = $this->input->post('id_user');
  $username = $this->input->post('username');
  $nama = $this->input->post('nama');
  $password = $this->input->post('password');
  $email = $this->input->post('email');
  

  
   if ($id_user != '') {
     $data = array(
     'id_user' => $id_user,
    'username' => $username,
    'nama' => $nama,
    'password' => md5($password),
    'email' => $email,
    
    );
    $this->MUser->input_data($data,'user');
    echo "<script>alert('Data berhasil di input !');window.location.assign('kelola_user');</script>";
    // redirect('admin/user');
    }else{
     echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
    }
 
 }
 public function edit_user($id_user)
 {
  $this->load->model('MUser');
  $where = array('id_user' => $id_user);
  $data['user'] = $this->MUser->edit_data($where,'user')->result();

  $data['menu'] = "user";
  $this->load->view('moveon/user/edit_user',$data);
 }
 public function update_user()
 {
  $this->load->model('MUser');
  $id_user = $this->input->post('id_user');
  $username = $this->input->post('username');
  $nama = $this->input->post('nama');
  $password = $this->input->post('password');
  $email = $this->input->post('email');
  

  if ($id_user != '') {
    $data = array(
    'id_user' => $id_user,
    'username' => $username,
    'nama' => $nama,
    'password' => md5($password),
    'email' => $email,
    
   );

   $where = array(
    'id_user' => $id_user
   );

   $this->MUser->update_data($where,$data,'user');
   echo "<script>alert('Data telah berhasil di rubah!');history.go(-2);</script>";
   }else{
    echo "<script>alert('Mohon isi data dengan lengkap!');history.go(-1);</script>";
   }
 }
 function hapus_user($id_user){
  $this->load->model('MUser');
  $where = array('id_user' => $id_user);
  $this->MUser->hapus_data($where,'user');
  redirect('admin/user/kelola_user');
 }


		
 }
 ?>