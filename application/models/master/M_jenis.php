<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jenis extends CI_Model {

    public function get_all(){
        $sql = "SELECT *
        FROM mst_jenis 
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

    public function get_last_id(){
        $sql = "SELECT id_jenis
        FROM mst_jenis ORDER BY id_jenis DESC
        ";
        //execute query
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }

    public function get_data_byid($id){
        $sql = "SELECT *
        FROM mst_jenis WHERE id_jenis = ?
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

    public function get_data_detail($id){
        $sql = "SELECT a.*,b.nama_bahan
        FROM mst_detail_jenis a 
        JOIN mst_bahan b ON a.id_bahan = b.id_bahan
        WHERE a.id_jenis = ?
        ";
        //execute query
        $query = $this->db->query($sql,$id);
        if ($query->num_rows() > 0) {
        $result = $query->result_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }
}