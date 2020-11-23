<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Videos_ctrl extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	function index(){
		$data = array();		$this->db->select('*');
		$this->db->order_by('orderby,created_at','desc');
		$data['videos'] = $this->db->get_where('videos',array('status'=>1))->result_array();				
		$data['header'] = $this->load->view('admin/common/header','',true);
		$data['topnav'] = $this->load->view('admin/common/topnav','',true);
		$data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
		$data['body'] = $this->load->view('admin/video',$data,true);
		$this->load->view('admin/common/layout',$data);
	}			function video_create(){		$data['video_id'] = trim($this->input->post('vId'));		$data['video_title'] = trim($this->input->post('title'));		$data['is_published'] = $this->input->post('publish');		$data['orderby'] = $this->input->post('order');		$data['created_at'] = date('Y-m-d H:i:s');		$data['created_by'] = $this->session->userdata('userid');				if($this->db->insert('videos',$data)){			echo json_encode(array('msg'=>'Video created.','status'=>200));		} else {			echo json_encode(array('msg'=>'Video not created.','status'=>500));		}	}		function video_edit(){		$vid = $this->input->post('v_id');		$data['video_id'] = trim($this->input->post('vId'));		$data['video_title'] = trim($this->input->post('title'));		$data['is_published'] = $this->input->post('publish');		$data['orderby'] = $this->input->post('order');				$this->db->where('id',$vid);		if($this->db->update('videos',$data)){			echo json_encode(array('msg'=>'Video updated.','status'=>200));		} else {			echo json_encode(array('msg'=>'Video not updated.','status'=>500));		}	}
}