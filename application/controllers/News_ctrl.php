<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_ctrl extends CI_Controller {

	function index(){
		$data = array();
		$data['header'] = $this->load->view('common/header','',true);
		$data['footer'] = $this->load->view('common/footer','',true);
		$data['tranding_news'] = $this->load->view('common/tranding_news','',true);
		$data['topmenu'] = $this->load->view('common/topmenu','',true);
		$data['top_sliding_news'] = $this->load->view('pages/home/top_sliding_news','',true);
		$data['feature_news'] = $this->load->view('pages/home/feature_news','',true);
		$data['trandings_news'] = $this->load->view('pages/home/tranding_news','',true);
		//$data['video_news'] = $this->load->view('pages/home/video_news','',true);
		$data['rightnav_news'] = $this->load->view('common/rightnav_news','',true);
		$data['body'] = $this->load->view('pages/home/home',$data,true);
		$this->load->view('common/layout',$data);
	}

	function category(){
		$data = array();
		$data['header'] = $this->load->view('common/header','',true);
		$data['footer'] = $this->load->view('common/footer','',true);
		$data['body'] = $this->load->view('pages/category',$data,true);
		$this->load->view('common/layout',$data);
	}

	function newsDetailPage(){
		$data = array();
		$data['header'] = $this->load->view('common/header','',true);
		$data['footer'] = $this->load->view('common/footer','',true);
		$data['body'] = $this->load->view('pages/news_detail',$data,true);
		$this->load->view('common/layout',$data);
	}

}
