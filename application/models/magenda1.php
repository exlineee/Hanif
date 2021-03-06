<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MAgenda extends CI_Model{
	var $tagenda = "agenda";
	
	function __construct(){
		parent::__construct();
		//åsession_start();
	}

	function tampil_data(){
	return $this->db->get('agenda');
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
	
	
	public function edit($username,$email){
		$this->db->where('username', $username);
		$result = $this->db->update($this->tuser, array('email'=>$email));
		return $result;		
	}
	
	public function getDetail(){
		$condition = array("nomor_urut"=>$this->session->userdata('nomor_urut'));
		$query = $this->db->get_where($this->tagenda,$condition);
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
		$condition = array("id"=>$id_user);
		$query = $this->db->get_where($this->tuser,$condition);
		$row = $query->result();
		//print_r($row); exit;
		return $row[0]->name;	
	}
}
?>