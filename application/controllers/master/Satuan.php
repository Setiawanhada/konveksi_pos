<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Satuan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("admin/M_informasi");
		// $this->load->helper('tgl_indo');
		
	}

	public function index()
	{
        // load view 
        // $data["rs_data"] = $this->M_informasi->get_all();
        // $get_last_update = $this->M_informasi->get_all();
        // if(!empty($get_last_update)){
		// 	$data['last_update'] = $get_last_update[0]['tanggal'];
		// }else{
		// 	$data['last_update'] = 'Tidak Ada';

		// }
        // echo"<pre>";print_r($data);die();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/satuan/index');
		$this->load->view('template/footer');
        
    }
    
    // public function add()
	// {
    //     // load view
	// 	$this->load->view('admin/dashboard/head');
	// 	$this->load->view('admin/dashboard/sidebar');
	// 	$this->load->view('admin/informasi/add');
	// 	$this->load->view('admin/dashboard/footer');
    // }
	
    // public function add_process()
	// {
	// 	$judul = $this->input->post('judul', true);
    //     $isi = $this->input->post('isi', true);
        
	// 	$number = mt_rand(100, 999);
	// 	$prefix = 'IF';
	// 	$generateId = $prefix.$number.date('Ymd');
	// 	$fileExt = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);
	// 	$gambar = $generateId.'.'.$fileExt;
	// 	if(!empty($_FILES["gambar"]["name"])){
	// 		//set params
	// 		$params = array(
	// 			'kode_info' => $generateId,
	// 			'judul' => $judul,
	// 			'gambar'	=> $gambar,
	// 			'isi'   => $isi,
	// 			'tanggal'   => date('Y-m-d')
	// 		);
	// 	}
	// 	else{
	// 		//set params
	// 		$params = array(
	// 			'kode_info' => $generateId,
	// 			'judul' => $judul,
	// 			'isi'   => $isi,
	// 			'tanggal'   => date('Y-m-d')
	// 		);
	// 	}
		
	// 	$this->_uploadImage($generateId);
    //     $this->M_informasi->insert_informasi($params);
		
	// 	$this->notif_msg('admin/informasi/add', 'Sukses', 'Data berhasil ditambahkan');
        
	// }
	
	// public function delete($kode_info)
	// {
    //     // load view
	// 	$this->load->view('admin/dashboard/head');
	// 	$this->load->view('admin/dashboard/sidebar');
    //     $data["rs_delete"] = $this->M_informasi->get_info_byid($kode_info);
	// 	$this->load->view('admin/informasi/delete', $data);
	// 	$this->load->view('admin/dashboard/footer');
        
	// }
	
	// public function delete_process()
	// {
	// 	$kode_info = $this->input->post('kode_info', true);
	// 	$this->_deleteImage($kode_info);
    //     $this->M_informasi->delete_informasi($kode_info);
		
	// 	$this->notif_msg('admin/informasi/view', 'Sukses', 'Data berhasil dihapus');
		
    // }
	
	// public function edit($kode_info)
	// {
	// 	//delete session notif
	// 	$this->session->unset_userdata('sess_notif');
    //     // load view
	// 	$this->load->view('admin/dashboard/head');
	// 	$this->load->view('admin/dashboard/sidebar');
    //     $data["rs_edit"] = $this->M_informasi->get_info_byid($kode_info);
	// 	$this->load->view('admin/informasi/edit', $data);
	// 	$this->load->view('admin/dashboard/footer');
        
	// }

	// public function edit_process()
	// {
	// 	$kode_info = $this->input->post('kode_info', true);
	// 	$judul = $this->input->post('judul', true);
    //     $isi = $this->input->post('isi', true);
        
		
	// 	if(!empty($_FILES["gambar"]["name"])){
	// 		//delete old image
	// 		$this->_deleteImage($kode_info);
	// 		//insert new image
	// 		$this->_uploadImage($kode_info);
	// 		$fileExt = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);
	// 		$gambar = $kode_info.'.'.$fileExt;
	// 		//set params
	// 		$params = array(
	// 			'judul' => $judul,
	// 			'gambar'	=> $gambar,
	// 			'isi'   => $isi,
	// 			'tanggal'   => date('Y-m-d'),
	// 			'kode_info' => $kode_info
	// 		);
	// 		$this->M_informasi->update_informasi_image($params);
	// 	}
	// 	else{
	// 		//set params
	// 		$params = array(
	// 			'judul' 	=> $judul,
	// 			'isi'   	=> $isi,
	// 			'tanggal'   => date('Y-m-d'),
	// 			'kode_info' => $kode_info
	// 		);
	// 		$this->M_informasi->update_informasi($params);
	// 	}
		
        
		
	// 	$this->notif_msg('admin/informasi/view', 'Sukses', 'Data berhasil diedit');
        
	// }

	
}