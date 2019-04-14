<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MBackrest extends CI_Model{
	var $tbackrest = "backrest";
	
	function __construct(){
		parent::__construct();
		//åsession_start();
	}

public function tampiltabel()
    {
       return $this->db->query("show tables")->result();
    }
}
?>