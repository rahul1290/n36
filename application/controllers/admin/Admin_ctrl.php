<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller {

	function admin_login(){
		$data = array();
		$this->load->view('admin/login');
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
