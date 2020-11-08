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
    
    function news_update($data,$newsId){
        $this->db->where('id',$newsId);
        $this->db->update('news',$data);
        return true;
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
        $this->db->select('n.*,(select group_concat(t.display_name) from news_type nt join types t on t.id = nt.type  where nt.news_id = n.id and nt.status = 1 order by t.id desc) as news_types');
        $this->db->order_by('published_at','desc');
        $result = $this->db->get_where('news n',array('n.status'=>1))->result_array();
        return $result;
    }
    
    function news_detail($newsId){
        $this->db->select('n.*,
                (SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files,
                (select group_concat(nt.type) from news_type nt where nt.news_id = n.id and nt.status = 1) as news_types');
        $result = $this->db->get_where('news n',array('n.id'=>$newsId,'n.status'=>1))->result_array();
        return $result;
    }
}