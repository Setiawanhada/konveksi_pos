<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bahan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model("master/M_bahan");
		$this->load->helper('tgl_indo');
		
	}

	public function index()
	{
        // load view 
        $data["rs_data"] = $this->M_bahan->get_all();
        // $get_last_update = $this->M_informasi->get_all();
        // if(!empty($get_last_update)){
		// 	$data['last_update'] = $get_last_update[0]['tanggal'];
		// }else{
		// 	$data['last_update'] = 'Tidak Ada';

		// }
        // echo"<pre>";print_r($data);die();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/bahan/index',$data);
		$this->load->view('template/footer');
        
    }
    
    public function add()
	{
        // load view
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/bahan/add');
		$this->load->view('template/footer');
    }
	
    public function add_process()
	{
        $nama_bahan = $this->input->post('nama_bahan', true);
        $harga_beli = $this->input->post('harga_beli', true);
		
		$this->form_validation->set_rules('nama_bahan','Nama bahan','required');
		$this->form_validation->set_rules('harga_beli','Harga Beli','required');

		if($this->form_validation->run() == false){
			redirect('master/bahan/add');
		}else{
			//set params
			$params = array(
				'nama_bahan' 	=> $nama_bahan,
				'harga_beli' 	=> $harga_beli,
				'create_by'		=> $this->session->userdata("id_user"),
				'create_date'   => date('Y-m-d H:i:s')
			);
			// print_r($params);die;
		
        $this->M_bahan->insert('mst_bahan',$params);
		
		$this->notif_msg('master/bahan/add', 'Sukses', 'Data berhasil ditambahkan');
		}
	}
	
	public function delete_process()
	{
		$id_bahan = $this->input->post('id_bahan', true);
		// var_dump($id_bahan);die;
		$where = array(
			'id_bahan'	=> $id_bahan
		);
		$this->M_bahan->delete('mst_bahan',$where);
		
		$this->notif_msg('master/bahan', 'Sukses', 'Data berhasil dihapus');
		
    }
	
	public function edit($id)
	{
		//delete session notif
		// $this->session->unset_userdata('sess_notif');
		//load data
		$data["rs_edit"] = $this->M_bahan->get_data_byid($id);
		// load view
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/bahan/edit', $data);
		$this->load->view('template/footer');
        
	}

	public function edit_process()
	{
		$id_bahan   = $this->input->post('id_bahan', true);
		$nama_bahan = $this->input->post('nama_bahan', true);
		$harga_beli = $this->input->post('harga_beli', true);
		
		$this->form_validation->set_rules('nama_bahan','Nama bahan','required');
		$this->form_validation->set_rules('harga_beli','Harga Beli','required');

		if($this->form_validation->run() == false){
			redirect('master/bahan/edit'.$id_bahan);
		}else{
			//set params
			$params = array(
				'nama_bahan' 	=> $nama_bahan,
				'harga_beli' 	=> $harga_beli,
				'mdb'			=> $this->session->userdata("id_user"),
				'mdd'   		=> date('Y-m-d H:i:s')
			);
			$where = array(
				'id_bahan'	=> $id_bahan
			);
			$this->M_bahan->update('mst_bahan',$params,$where);
			
			$this->notif_msg('master/bahan', 'Sukses', 'Data berhasil diedit');
		}
	}

	
}