<?php 
 
class M_header extends CI_Model{

    function get_kategori_all(){
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }
}