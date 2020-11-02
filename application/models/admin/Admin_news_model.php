<?php

class Admin_news_model extends CI_model { 

    function news_create($data){
        if($this->db->insert('news',$data)){
            $news_id = $this->db->insert_id();
            return $news_id;
        } else {
            return false;
        }
    }

    function news_slug($newsId,$slug){
        $this->db->where('id',$newsId);
        $this->db->update('news',array(
            'slug' => $slug.'-'.$newsId
        ));
        return true;
    }
    
    
    function all_news_types(){
        $this->db->select('*');
        $result = $this->db->get_where('types',array('status'=>1))->result_array();
        return $result;
    }
    
    function news_list(){
        $this->db->select('n.*');
        $result = $this->db->get_where('news n',array('n.status'=>1))->result_array();
        return $result;
    }
}