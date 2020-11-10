<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_ctrl extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model(array('News_model','admin/Admin_news_model'));
        
        if($this->session->userdata('userid') == ''){
            redirect('admin');
        }
    }

	function newslist(){
		$data = array();
		$data['newsList'] = $this->Admin_news_model->news_list();
		//print_r($data['newsList']); die;
		$data['header'] = $this->load->view('admin/common/header','',true);
		$data['topnav'] = $this->load->view('admin/common/topnav','',true);
		$data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
		$data['body'] = $this->load->view('admin/news',$data,true);
		$this->load->view('admin/common/layout',$data);
	}
	

	function create(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$this->form_validation->set_rules('type[]', 'News Type', 'required');
			$this->form_validation->set_rules('heading_hindi', 'Heading Hindi', 'required|trim');
			$this->form_validation->set_rules('heading_english', 'Heading English', 'required|trim');
			$this->form_validation->set_rules('content', 'News Content', 'required|trim');
			$this->form_validation->set_rules('meta_title', 'Meta Title', 'required');
			$this->form_validation->set_rules('meta_keyword', 'Meta Keyword', 'required');
			$this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
			$this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');
			if ($this->form_validation->run() == FALSE) {
				
			}else{
				$data['title_hindi'] = $this->input->post('heading_hindi');
				$data['title_english']  = $this->input->post('heading_english');	
				$data['content'] = $this->input->post('content');
				$data['meta_title'] = $this->input->post('meta_title');
				$data['meta_keyword'] = $this->input->post('meta_keyword');
				$data['meta_desc'] = $this->input->post('meta_desc');
				$publish = $this->input->post('published');
				
				if($publish == 'ON'){
					$data['publish'] = 1;
				} else {
					$data['publish'] = 0;
				}
				$data['created_at'] = date('Y-m-d H:i:s');
				$data['created_by'] = '1';
				$newsId = $this->Admin_news_model->news_create($data);
				if($newsId){
					$this->Admin_news_model->news_slug($newsId,str_replace(str_split(' \\/:*?"<>()|'),'-',$data['title_english']));
					
					$news_type = array();
					foreach($this->input->post('type[]') as $type){
						$temp = array();
						$temp['news_id'] = $newsId;
						$temp['type'] = $type;
						$news_type[] = $temp;
					}
					if(count($news_type)>0){
						$this->db->insert_batch('news_type',$news_type);
					}
					
					if(count($_FILES['file']['name'])>0){
						$this->load->library('upload');
						$configVideo['upload_path'] = './news_images';
						$configVideo['allowed_types'] = 'jpeg|jpg|PNG|png';
						$configVideo['overwrite'] = TRUE;
						$configVideo['remove_spaces'] = TRUE;
	
						$messages = array();
						foreach($_FILES['file']['name'] as $key => $v_files){
							$_FILES['userfile']['name']= $_FILES['file']['name'][$key];
							$_FILES['userfile']['type']= $_FILES['file']['type'][$key];
							$_FILES['userfile']['tmp_name']= $_FILES['file']['tmp_name'][$key];
							$_FILES['userfile']['error']= $_FILES['file']['error'][$key];
							$_FILES['userfile']['size']= $_FILES['file']['size'][$key];


							$fileName = str_replace(str_split(' \\/:*?"<>()|'),"_",$_FILES['file']['name'][$key]);
							$fileName = date('U').'_'.$fileName;
							$images[] = $fileName;
				
							$configVideo['file_name'] = $fileName;
							$this->upload->initialize($configVideo);
				
							if (!$this->upload->do_upload()){
								echo $_FILES['file']['type'][$key];
								print_r($this->upload->display_errors());
								die;
								$messages[] = '';
							}
							else{
								$client_name = $this->upload->data('client_name');
								$Path = $this->upload->data('file_path');
								$fullPath = $this->upload->data('full_path');
								
								$fileName = pathinfo($this->upload->data('file_name'), PATHINFO_FILENAME);
								$filePath = $Path.$fileName;
								
								$temp['image'] = $fileName.'.jpg';
								$temp['client_name'] = $client_name;
								$temp['file_name'] = $this->upload->data('file_name');
								$temp['fullPath'] = $fullPath;
								$temp['msg'] = 'File uploaded';
								$temp['status'] =  true;
								
								//convertImageToWebP()
								
								$data = array();
								$data['news_id '] = $newsId;
								$data['type'] = 'image';
								$data['media_name'] = $this->upload->data('file_name');
								$this->db->insert('news_media',$data);
							}
						}
					}  //image upload
				} //news submit
			}
			$this->session->set_flashdata('msg', '<h3 class="bg-success p-2 text-center">News submitted successfully.</h3>');
			redirect('admin/news/create','refresh');
		}
		$data = array(); 
		$data['news_types'] = $this->Admin_news_model->all_news_types();
	    $data['header'] = $this->load->view('admin/common/header','',true);
	    $data['topnav'] = $this->load->view('admin/common/topnav','',true);
	    $data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
	    $data['body'] = $this->load->view('admin/news_create',$data,true);
	    $this->load->view('admin/common/layout',$data);
	}

	
	function news_edit($newsId){
	    if($_SERVER['REQUEST_METHOD'] === 'POST'){
	        $this->form_validation->set_rules('type[]', 'News Type', 'required');
	        $this->form_validation->set_rules('heading_hindi', 'Heading Hindi', 'required|trim');
	        $this->form_validation->set_rules('heading_english', 'Heading English', 'required|trim');
	        $this->form_validation->set_rules('content', 'News Content', 'required|trim');
	        $this->form_validation->set_rules('meta_title', 'Meta Title', 'required');
	        $this->form_validation->set_rules('meta_keyword', 'Meta Keyword', 'required');
	        $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
	        $this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');
	        if ($this->form_validation->run() == FALSE) {
	               
	        }else{
	            $data['title_hindi'] = $this->input->post('heading_hindi');
	            $data['title_english']  = $this->input->post('heading_english');
	            $data['content'] = $this->input->post('content');
	            $data['meta_title'] = $this->input->post('meta_title');
	            $data['meta_keyword'] = $this->input->post('meta_keyword');
	            $data['meta_desc'] = $this->input->post('meta_desc');
	            $publish = $this->input->post('published');
	            
	            if($publish == 'ON'){
	                $data['publish'] = 1;
	            } else {
	                $data['publish'] = 0;
	            }
	            $data['created_at'] = date('Y-m-d H:i:s');
	            $data['created_by'] = '1';
	            $newsUpdate = $this->Admin_news_model->news_update($data,$newsId);
	            if($newsUpdate){
	                $this->Admin_news_model->news_slug($newsId,str_replace(str_split(' \\/:*?"<>()|'),'-',$data['title_english']));
	                
	                $news_type = array();
	                foreach($this->input->post('type[]') as $type){
	                    $temp = array();
	                    $temp['news_id'] = $newsId;
	                    $temp['type'] = $type;
	                    $news_type[] = $temp;
	                }
	                if(count($news_type)>0){
	                    $this->db->where('news_id',$newsId);
	                    $this->db->delete('news_type');
	                    
	                    $this->db->insert_batch('news_type',$news_type);
	                }
	                
	                if($_FILES['file']['name'][0] !== ''){
    	                if(count($_FILES['file']['name'])>0){
    	                    $this->load->library('upload');
    	                    $configVideo['upload_path'] = './news_images';
    	                    $configVideo['allowed_types'] = 'jpeg|jpg|PNG|png';
    	                    $configVideo['overwrite'] = TRUE;
    	                    $configVideo['remove_spaces'] = TRUE;
    	                    
    	                    $messages = array();
    	                    foreach($_FILES['file']['name'] as $key => $v_files){
    	                        $_FILES['userfile']['name']= $_FILES['file']['name'][$key];
    	                        $_FILES['userfile']['type']= $_FILES['file']['type'][$key];
    	                        $_FILES['userfile']['tmp_name']= $_FILES['file']['tmp_name'][$key];
    	                        $_FILES['userfile']['error']= $_FILES['file']['error'][$key];
    	                        $_FILES['userfile']['size']= $_FILES['file']['size'][$key];
    	                        
    	                        
    	                        $fileName = str_replace(str_split(' \\/:*?"<>()|'),"_",$_FILES['file']['name'][$key]);
    	                        $fileName = date('U').'_'.$fileName;
    	                        $images[] = $fileName;
    	                        
    	                        $configVideo['file_name'] = $fileName;
    	                        $this->upload->initialize($configVideo);
    	                        
    	                        if (!$this->upload->do_upload()){
    	                            echo $_FILES['file']['type'][$key];
    	                            print_r($this->upload->display_errors());
    	                            die;
    	                            $messages[] = '';
    	                        }
    	                        else{
    	                            $client_name = $this->upload->data('client_name');
    	                            $Path = $this->upload->data('file_path');
    	                            $fullPath = $this->upload->data('full_path');
    	                            $fileName = pathinfo($this->upload->data('file_name'), PATHINFO_FILENAME);
    	                            $resizefilename = $fileName;
    	                            $filePath = $Path.$fileName;
    	                            
    	                            $temp['image'] = $fileName.'.jpg';
    	                            $temp['client_name'] = $client_name;
    	                            $temp['file_name'] = $this->upload->data('file_name');
    	                            $temp['fullPath'] = $fullPath;
    	                            $temp['msg'] = 'File uploaded';
    	                            $temp['status'] =  true;
    	                            
    	                            
    	                            $FileNameTokens = explode('.', $this->upload->data('file_name'));
    	                            array_pop($FileNameTokens);
    	                            $baseName = implode(".", $FileNameTokens);
    	                            
    	                            $this->convertImageToWebP(APPPATH.'../news_images/'.$this->upload->data('file_name'),'./news_images/'.$baseName.'.webp');
    	                            unlink(APPPATH.'../news_images/'.$this->upload->data('file_name'));
    	                            
    	                            $data = array();
    	                            $data['news_id '] = $newsId;
    	                            $data['type'] = 'image';
    	                            $data['media_name'] = $baseName.'.webp';
    	                            $this->db->insert('news_media',$data);
    	                            
    	                        }
    	                    }
    	                }  //image upload
	                }
	            } //news submit
	        }
	        $this->session->set_flashdata('msg', '<h3 class="bg-success p-2 text-center">News Update successfully.</h3>');
	        redirect('admin/news/','refresh');
	    }
	    
	    $data['newsDetail'] = $this->Admin_news_model->news_detail($newsId);
	    $data['news_types'] = $this->Admin_news_model->all_news_types();
	    $data['header'] = $this->load->view('admin/common/header','',true);
	    $data['topnav'] = $this->load->view('admin/common/topnav','',true);
	    $data['sidenav'] = $this->load->view('admin/common/sidenav','',true);
	    $data['body'] = $this->load->view('admin/news_edit',$data,true);
	    $this->load->view('admin/common/layout',$data);
	}
	
	
	function convertImageToWebP($source, $destination, $quality=80) {
	    $extension = pathinfo($source, PATHINFO_EXTENSION);
	    if ($extension == 'jpeg' || $extension == 'jpg'){
	        $image = imagecreatefromjpeg($source);
	    } elseif ($extension == 'gif') {
	        $image = imagecreatefromgif($source);
	    } elseif ($extension == 'png' || $extension == 'PNG') {
	        $image = imagecreatefrompng($source);
	    }
	    return imagewebp($image, $destination, $quality);
	}
	
	function image_del(){
	    $news_id = $this->input->post('newsid');
	    $image = $this->input->post('image');
	    $this->db->where(array('news_id'=>$news_id,'media_name'=>$image));
	    $this->db->delete('news_media');
	    
	    unlink('news_images/'.$image);
	    return true;
	}
	
}
