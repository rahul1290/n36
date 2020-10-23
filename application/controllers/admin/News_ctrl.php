<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_ctrl extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model(array('News_model'));
    }

	function index(){
		$data = array();
		$data['header'] = $this->load->view('admin/common/header','',true);
		$data['topnav'] = $this->load->view('admin/common/topnav','',true);
		$data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
		$data['body'] = $this->load->view('admin/news','',true);
		$this->load->view('admin/common/layout',$data);
	}
	
	function create(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('heading_hindi', 'Heading Hindi', 'required');
			$this->form_validation->set_rules('heading_english', 'Heading English', 'required');
			$this->form_validation->set_rules('content', 'News Content', 'required');
			$this->form_validation->set_rules('related_news', 'Related News', 'required');
			$this->form_validation->set_rules('meta_title', 'Meta Title', 'required');
			$this->form_validation->set_rules('meta_keyword', 'Meta Keyword', 'required');
			$this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
			$this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');
			if ($this->form_validation->run() == FALSE) {
				
			}else{
				echo "valid"; die;
			}
		}
		$data = array(); 
		$data['news_categories'] = $this->News_model->menus();
	    $data['header'] = $this->load->view('admin/common/header','',true);
	    $data['topnav'] = $this->load->view('admin/common/topnav','',true);
	    $data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
	    $data['body'] = $this->load->view('admin/news_create',$data,true);
	    $this->load->view('admin/common/layout',$data);
	}

	
}
