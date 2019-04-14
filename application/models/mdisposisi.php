<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MDisposisi extends CI_Model{
	var $tdisposisi = "disposisi";
	
	function __construct(){
		parent::__construct();
		//åsession_start();
	}

	function tampil_data(){
	$this->db->select('*');
		$this->db->from('disposisi');
		$this->db->order_by('id_disposisi', 'DESC');
		return $this->db->get();
	}
	function tampil_agenda(){
	return $this->db->get('agenda');
	}
	function input_data($data,$table){
	$this->db->insert($table,$data);
	} 
	function input_data_distribusi($data,$table){
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
	function get_disposisi($where,$table){
		$this->db->where($where);
		return $this->db->get($table)->result();
	}
	
	public function edit($username,$email){
		$this->db->where('username', $username);
		$result = $this->db->update($this->tuser, array('email'=>$email));
		return $result;		
	}
	
	public function getDetail(){
		$condition = array("id_disposisi"=>$this->session->userdata('id_disposisi'));
		$query = $this->db->get_where($this->tdisposisi,$condition);
		return $query->result();
	}
		public function detail_disposisi($id_disposisi){
		$condition = array("id_disposisi"=>$id_disposisi);
		$query = $this->db->get_where($this->tdisposisi,$condition);	
		if($query->num_rows() > 0){
			return $query->row();
		} else {
			return false;
		}
	}
	public function get_agenda()
	{
		$this->db->select('*');
		$this->db->from('agenda');
		return $this->db->get();
	}
	public function get_user()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}
	public function disposisicamat(){
		$q = $this->db->query("SELECT *
									FROM disposisi
								WHERE tindakan = 'Tunggu verifikasi camat'");
	}


	public function get_data_byid($table,$where){
		return $this->db->query("SELECT * from $table $where;");
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
	
	public function getNameById($id){
		$condition = array("id"=>$id);
		$query = $this->db->get_where($this->tuser,$condition);
		$row = $query->result();
		//print_r($row); exit;
		return $row[0]->name;	
	}
}
?>