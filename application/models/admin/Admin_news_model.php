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
}