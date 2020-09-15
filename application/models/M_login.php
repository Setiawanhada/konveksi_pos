<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function get_data_anggota($params){
        $sql = "SELECT *
        FROM anggota WHERE username = ? AND password = ?
        ";
        //execute query
        $query = $this->db->query($sql,$params);
        if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }
    
    public function get_data_admin($params){
        $sql = "SELECT *
        FROM admin WHERE username = ? AND password = ?
        ";
        //execute query
        $query = $this->db->query($sql,$params);
        if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
    }
}