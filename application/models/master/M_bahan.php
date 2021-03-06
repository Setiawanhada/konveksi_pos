<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_bahan extends CI_Model {

    public function get_all(){
        $sql = "SELECT *
        FROM mst_bahan 
        ";
        //execute query
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        $result = $query->result_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }
    
    public function get_data_byid($id){
        $sql = "SELECT *
        FROM mst_bahan WHERE id_bahan = ?
        ";
        //execute query
        $query = $this->db->query($sql,$id);
        if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }

}