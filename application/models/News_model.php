<?php

class News_model extends CI_model { 

    function menus(){
        $this->db->select('*');
        $this->db->order_by('display_order','asc');
        $result = $this->db->get_where('menu',array('status'=>1))->result_array();
        return $result; 
    }
    
    function latest_news(){
        $this->db->select('n.*,(SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files');
        $this->db->order_by('n.published_at,n.created_at','desc');
        $this->db->limit(6);
        $result = $this->db->get_where('news n',array('n.publish' => 1,'n.status' => 1))->result_array();
        return $result;
    }
    
    
    function today_story(){
        $this->db->select('n.*,(SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files');
        $this->db->join('news n','n.id = nt.news_id AND n.status = 1');
        $this->db->limit(1);
        $this->db->order_by('n.published_at,n.created_at','desc');
        $result = $this->db->get_where('news_type nt',array('nt.type'=>3,'n.publish'=>1,'nt.status'=>1))->result_array();
        return $result;
    }
    
    function trending_news(){
        $this->db->select('n.*,(SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files');
        $this->db->join('news n','n.id = nt.news_id AND n.status = 1');
        $this->db->limit(7);
        $this->db->order_by('n.published_at,n.created_at','desc');
        $result = $this->db->get_where('news_type nt',array('nt.type'=>2,'n.publish'=>1,'nt.status'=>1))->result_array();
        return $result;   
    }
    
    function feature_news(){
        $this->db->select('n.*,(SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files');
        $this->db->join('news n','n.id = nt.news_id AND n.status = 1');
        $this->db->limit(7);
        $this->db->order_by('n.published_at,n.created_at','desc');
        $result = $this->db->get_where('news_type nt',array('nt.type'=>4,'n.publish'=>1,'nt.status'=>1))->result_array();
        return $result;
    }
    
    function news_detail($newsId){
        $this->db->select('n.*,(SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files,u.*');
		$this->db->join('users u','u.id = n.created_by');
        $this->db->order_by('n.published_at,n.created_at','desc');
        $result = $this->db->get_where('news n',array('n.slug'=>$newsId,'n.publish'=>1,'n.status'=>1))->result_array();
        return $result;
    }
}