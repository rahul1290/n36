<?php

class News_model extends CI_model { 

    function menus(){
        $this->db->select('*');
        $this->db->order_by('display_order','asc');
        $result = $this->db->get_where('menu',array('status'=>1))->result_array();
        return $result; 
    }

    function rendom_news(){
        $this->db->select('n.*,m.type,m.media_name');
        $this->db->join('news_media m','m.news_id = n.id AND m.status = 1','left');
        $this->db->order_by('rand()');
        $this->db->limit(7);
        $result = $this->db->get_where('news n',array('n.publish'=>1,'n.status'=>1))->result_array();
        return $result;
    }
    
    function latest_news(){
        $this->db->select('n.*,(SELECT GROUP_CONCAT(nm.media_name) from news_media nm WHERE nm.news_id = n.id) media_files');
        $this->db->order_by('n.published_at,n.created_at','desc');
        $this->db->limit(7);
        $result = $this->db->get_where('news n',array('n.publish' => 1,'n.status' => 1))->result_array();
        return $result;
    }
}