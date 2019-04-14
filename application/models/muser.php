<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MUser extends CI_Model{
	var $tuser = "user";
	
	function __construct(){
		parent::__construct();
		//åsession_start();
	}

	function tampil_data(){
	return $this->db->get('user');
	}
	function input_data($data,$table){
	$this->db->insert($table,$data);
	} 
	function edit_data($where,$table){  
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	function get_user($where,$table){
		$this->db->where($where);
		return $this->db->get($table)->result();
	}
	
	public function validate(){
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);
		$query = $this->db->get($this->tuser);
		// Let's check if there are any results		
		if($query->num_rows() == 1){
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'id_user'=>$row->id_user,
					'username'=>$row->username,
					'nama'=>$row->nama,
					'email'=>$row->email,
					'isLogin'=>true
					);
			$this->session->set_userdata($data);
			$this->db->where('username', $username);

			return true;
		}
		// If the previous process did not validate, then return false.
		return false;
	}
	
	public function edit($username,$email){
		$this->db->where('username', $username);
		$result = $this->db->update($this->tuser, array('email'=>$email));
		return $result;		
	}
	
	public function getDetail(){
		$condition = array("username"=>$this->session->userdata('username'));
		$query = $this->db->get_where($this->tuser,$condition);
		return $query->result();
	}
	
	public function changePassword($password){
		$this->db->where('username', $this->session->userdata('username'));
		$result = $this->db->update($this->tuser, array('password'=>md5($password)));
		return $result;
	}
	
	// checking password for change password identification
	public function checkPassword($password){
		$condition = array("password"=>md5($password));
		$query = $this->db->get_where($this->tuser,$condition);
		if ($query->result()){
			return true;
		} else {
			return false;
		}
	}
	
	public function getIpAdress(){
		if (!empty($_SERVER["HTTP_CLIENT_IP"])){
			//check for ip from share internet
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		} elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
			// Check for the Proxy User
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		} else {
			$ip = $_SERVER["REMOTE_ADDR"];
		}
		// This will print user's real IP Address
		// does't matter if user using proxy or not.
		return $ip;
	}
	
	public function getNameById($id_user){
		$condition = array("id_user"=>$id_user);
		$query = $this->db->get_where($this->tuser,$condition);
		$row = $query->result();
		//print_r($row); exit;
		return $row[0]->name;	
	}
}
?>