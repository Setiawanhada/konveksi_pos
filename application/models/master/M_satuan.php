<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_satuan extends CI_Model {

    public function get_all(){
        $sql = "SELECT *
        FROM mst_satuan 
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
    
    // public function get_foto_byid($kode_foto){
    //     $sql = "SELECT *
    //     FROM foto WHERE kode_foto = ?
    //     ";
    //     //execute query
    //     $query = $this->db->query($sql,$kode_foto);
    //     if ($query->num_rows() > 0) {
    //     $result = $query->row_array();
    //     $query->free_result();
    //     return $result;
    //     }else{
    //     return array();
    //     }
    // }

}