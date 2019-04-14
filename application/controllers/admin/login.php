<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{    
    function __construct(){
        parent::__construct();
		$this->load->model('MUser');
    }
    
    public function index($msg=NULL,$username=NULL){
		// Load our view to be displayed
		// to the user
		$data['msg'] = $msg;
		$data['username'] = $username;	
        $this->load->view('moveon/login-form', $data);
    }
	
    public function process(){
		$result = $this->MUser->validate();
        if(!$result){
            // If user did not validate, then show them login page again
			$msg = true;
			$username = $this->input->post('username');
            $this->index($msg,$username);
        }else{
            // If user did validate, send them to members area
            redirect('admin/home');
        }        
    }	
}
?>