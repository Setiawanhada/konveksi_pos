<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Satuan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model("master/M_satuan");
		$this->load->helper('tgl_indo');
		
	}

	public function index()
	{
        // load view 
        $data["rs_data"] = $this->M_satuan->get_all();
        // $get_last_update = $this->M_informasi->get_all();
        // if(!empty($get_last_update)){
		// 	$data['last_update'] = $get_last_update[0]['tanggal'];
		// }else{
		// 	$data['last_update'] = 'Tidak Ada';

		// }
        // echo"<pre>";print_r($data);die();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/satuan/index',$data);
		$this->load->view('template/footer');
        
    }
    
    public function add()
	{
        // load view
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/satuan/add');
		$this->load->view('template/footer');
    }
	
    public function add_process()
	{
        $nama_satuan = $this->input->post('nama_satuan', true);
		
		$this->form_validation->set_rules('nama_satuan','Nama Satuan','required');

		if($this->form_validation->run() == false){
			// redirect('master/satuan/add');
		}else{
			//set params
			$params = array(
				'nama_satuan' 	=> $nama_satuan,
				'create_by'		=> $this->session->userdata("id_user"),
				'create_date'   => date('Y-m-d H:i:s')
			);
			// print_r($params);die;
		
        $this->M_satuan->insert('mst_satuan',$params);
		
		$this->notif_msg('master/satuan/add', 'Sukses', 'Data berhasil ditambahkan');
		}
	}
	
	public function delete_process()
	{
		$id_satuan = $this->input->post('id_satuan', true);
		// var_dump($id_satuan);die;
		$where = array(
			'id_satuan'	=> $id_satuan
		);
		$this->M_satuan->delete('mst_satuan',$where);
		
		$this->notif_msg('master/satuan', 'Sukses', 'Data berhasil dihapus');
		
    }
	
	public function edit($id)
	{
		//delete session notif
		// $this->session->unset_userdata('sess_notif');
		//load data
		$data["rs_edit"] = $this->M_satuan->get_data_byid($id);
		// load view
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/satuan/edit', $data);
		$this->load->view('template/footer');
        
	}

	public function edit_process()
	{
		$id_satuan = $this->input->post('id_satuan', true);
		$nama_satuan = $this->input->post('nama_satuan', true);
		
		$this->form_validation->set_rules('nama_satuan','Nama Satuan','required');

		if($this->form_validation->run() == false){
			redirect('master/satuan/edit'.$id_satuan);
		}else{
			//set params
			$params = array(
				'nama_satuan' 	=> $nama_satuan,
				'mdb'			=> $this->session->userdata("id_user"),
				'mdd'   		=> date('Y-m-d H:i:s')
			);
			$where = array(
				'id_satuan'	=> $id_satuan
			);
			$this->M_satuan->update('mst_satuan',$params,$where);
			
			$this->notif_msg('master/satuan', 'Sukses', 'Data berhasil diedit');
		}
	}

	
}