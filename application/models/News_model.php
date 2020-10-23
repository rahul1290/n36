<?php

class News_model extends CI_model { 

    function menus(){
        $this->db->select('*');
        $this->db->order_by('display_order','asc');
        $result = $this->db->get_where('menu',array('status'=>1))->result_array();
        return $result; 
    }
}