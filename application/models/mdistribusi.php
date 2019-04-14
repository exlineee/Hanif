<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MDistribusi extends CI_Model{
	var $tdistribusi = "distribusi";
	
	function __construct(){
		parent::__construct();
		//åsession_start();
	}

	function tampil_data(){
	$this->db->select('*');
		$this->db->from('distribusi');
		$this->db->order_by('id_distribusi', 'DESC');
		return $this->db->get();
	}
	
	
	public function getDetail(){
		$condition = array("id_distribusi"=>$this->session->userdata('id_distribusi'));
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
		$condition = array("id_user"=>$id_user);
		$query = $this->db->get_where($this->tuser,$condition);
		$row = $query->result();
		//print_r($row); exit;
		return $row[0]->name;	
	}
}
?>