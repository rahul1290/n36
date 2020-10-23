<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_ctrl extends CI_Controller {

	function index(){
		$data = array();
		$data['header'] = $this->load->view('admin/common/header','',true);
		$data['topnav'] = $this->load->view('admin/common/topnav','',true);
		$data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
		$data['body'] = $this->load->view('admin/news','',true);
		$this->load->view('admin/common/layout',$data);
	}
	
	function create(){
	    $data = array();
	    $data['header'] = $this->load->view('admin/common/header','',true);
	    $data['topnav'] = $this->load->view('admin/common/topnav','',true);
	    $data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
	    $data['body'] = $this->load->view('admin/news_create','',true);
	    $this->load->view('admin/common/layout',$data);
	}
}
