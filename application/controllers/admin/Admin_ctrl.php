<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
	function admin_login(){
	    if($_SERVER['REQUEST_METHOD'] === 'POST'){
	        $data['identity'] = trim($this->input->post('identity'));
	        $data['password'] = trim($this->input->post('password'));
	        
	        $this->db->select('*');
	        $result = $this->db->get_where('users',array('identity'=>$data['identity'],'password'=>$data['password'],'status'=>1))->result_array();
	        if(count($result)>0){
	            $newdata = array(
	                 'userid'=> $result[0]['id'],
	                 'username_e'  => $result[0]['name_e'],
	                 'username_h'  => $result[0]['name_h'],
	            );
	            $this->session->set_userdata($newdata);
	            redirect('admin/news');
	        } else {
	            redirect('admin');
	        }
	        
	    }
		$data = array();
		$this->load->view('admin/login');
	}
    
	function logout(){
	    session_destroy();
	    redirect('admin');
	}
	
	function dashboard(){
		$data = array();
		$data['header'] = $this->load->view('admin/common/header','',true);
		$data['topnav'] = $this->load->view('admin/common/topnav','',true);
		$data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
		$data['body'] = $this->load->view('admin/dashboard','',true);
		$this->load->view('admin/common/layout',$data);
	}
}
