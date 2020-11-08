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
		$data['menus'] = $this->News_model->menus(); 
		
		$data['trending_news'] = $this->News_model->trending_news();
		$data['latest_news'] = $this->News_model->latest_news();
		$data['today_story'] = $this->News_model->today_story();
		$data['feature_news'] = $this->News_model->feature_news();
		
		$data['header'] = $this->load->view('common/header',$data,true);
		$data['footer'] = $this->load->view('common/footer','',true);
		//$data['brand_logo'] = $this->load->view('common/brand_logo','',true);
		$data['tranding_news'] = $this->load->view('common/tranding_news',$data,true);
		$data['topmenu'] = $this->load->view('common/topmenu',$data,true);
		$data['top_sliding_news'] = $this->load->view('pages/home/top_sliding_news',$data,true);
		$data['rightnav_news'] = $this->load->view('common/rightnav_news',$data,true);
		$data['feature_news'] = $this->load->view('pages/home/feature_news',$data,true);
		
		$inner = array();
		$inner['most_view_news'] = $this->load->view('pages/home/most_view_news','',true);
		//$data['trandings_news'] = $this->load->view('pages/home/tranding_news',$inner,true);
		$data['video_news'] = $this->load->view('pages/home/video_news','',true);
		
		
		$inner = array();
		//$inner['sports_news'] = $this->load->view('pages/home/sports_news','',true);
		//$inner['business_news'] = $this->load->view('pages/home/business_news','',true);
		//$data['entertainment_news'] = $this->load->view('pages/home/entertainment_news',$inner,true);
		
		//$data['most_share_news'] = $this->load->view('pages/home/most_share_news','',true);
		//$data['upcoming_match'] = $this->load->view('pages/home/upcoming_match','',true);
		//$data['news_letter'] = $this->load->view('pages/home/news_letter','',true);
		$data['body'] = $this->load->view('pages/home/home',$data,true);
		$this->load->view('common/layout',$data);     
	}

	function category(){
		$data = array();
		$data['menus'] = $this->News_model->menus();
		
		$data['header'] = $this->load->view('common/header','',true);
		$data['footer'] = $this->load->view('common/footer','',true);
		$data['brand_logo'] = $this->load->view('common/brand_logo','',true);
		$data['tranding_news'] = $this->load->view('common/tranding_news','',true);
		$data['topmenu'] = $this->load->view('common/topmenu',$data,true);
		$data['rightnav_news'] = $this->load->view('common/rightnav_news','',true);
		$data['news_letter'] = $this->load->view('pages/home/news_letter','',true);
		$data['body'] = $this->load->view('pages/category',$data,true);
		$this->load->view('common/layout',$data);
	}

	function newsDetailPage($newsId){
	    $data = array();
	    $data['newsDetail'] = $this->News_model->news_detail($newsId);
	    
	    $data['latest_news'] = $this->News_model->latest_news();
		$data['menus'] = $this->News_model->menus();
		$data['trending_news'] = $this->News_model->trending_news();
		$data['tranding_news'] = $this->load->view('common/tranding_news',$data,true);
		//$data['brand_logo'] = $this->load->view('common/brand_logo','',true);
		$data['topmenu'] = $this->load->view('common/topmenu',$data,true);
		$data['header'] = $this->load->view('common/header',$data,true);
		$data['footer'] = $this->load->view('common/footer','',true);
		$data['body'] = $this->load->view('pages/news_detail',$data,true);
		$this->load->view('common/layout',$data);
	}
	
	
	function about_us(){
	    $data['menus'] = $this->News_model->menus();
	    $data['latest_news'] = $this->News_model->latest_news();
	    $data['trending_news'] = $this->News_model->trending_news();
	    $data['tranding_news'] = $this->load->view('common/tranding_news',$data,true);
	    $data['header'] = $this->load->view('common/header','',true);
	    $data['footer'] = $this->load->view('common/footer','',true);
	    $data['topmenu'] = $this->load->view('common/topmenu',$data,true);
	    $data['brand_logo'] = $this->load->view('common/brand_logo','',true);
	    $data['body'] = $this->load->view('pages/aboutus',$data,true);
	    $this->load->view('common/layout',$data);
	}

}
