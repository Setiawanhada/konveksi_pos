<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model("master/M_jenis");
        $this->load->model("master/M_bahan");
		$this->load->helper('tgl_indo');
		
	}

	public function index()
	{
        // load view 
        $data["rs_data"] = $this->M_jenis->get_all();
        // $get_last_update = $this->M_informasi->get_all();
        // if(!empty($get_last_update)){
		// 	$data['last_update'] = $get_last_update[0]['tanggal'];
		// }else{
		// 	$data['last_update'] = 'Tidak Ada';

		// }
        // echo"<pre>";print_r($data);die();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/jenis/index',$data);
		$this->load->view('template/footer');
        
    }
    
    public function add()
	{
        //load data
        $data["rs_bahan"] = $this->M_bahan->get_all();
        // load view
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/jenis/add', $data);
		$this->load->view('template/footer');
    }
	
    public function add_process()
	{
        $nama_jenis = $this->input->post('nama_jenis', true);
        $harga_jual = $this->input->post('harga_jual', true);
		
		$this->form_validation->set_rules('nama_jenis','Nama jenis','required');
		$this->form_validation->set_rules('harga_jual','Harga jual','required');

		if($this->form_validation->run() == false){
			redirect('master/jenis/add');
		}else{
			//set params
			$params = array(
				'nama_jenis' 	=> $nama_jenis,
				'harga_jual' 	=> $harga_jual,
				'create_by'		=> $this->session->userdata("id_user"),
				'create_date'   => date('Y-m-d H:i:s')
            );
            $this->M_jenis->insert('mst_jenis',$params);

            //get id terakhir
            $id_jenis = $this->M_jenis->get_last_id();
			// print_r($id_jenis);die;

            $id_bahan = $this->input->post('id_bahan', true);
            $dibutuhkan = $this->input->post('dibutuhkan', true);
            $params_detail = array(
                'id_jenis'      => $id_jenis['id_jenis'],
                'id_bahan'      => $id_bahan,
                'dibutuhkan'    => $dibutuhkan,
                'create_by'		=> $this->session->userdata("id_user"),
				'create_date'   => date('Y-m-d H:i:s')
            );
            $this->M_jenis->insert('mst_detail_jenis',$params_detail);
			// print_r($params);die;
		
		
		$this->notif_msg('master/jenis/add', 'Sukses', 'Data berhasil ditambahkan');
		}
	}
	
	public function delete_process()
	{
		$id_jenis = $this->input->post('id_jenis', true);
		// var_dump($id_jenis);die;
		$where = array(
			'id_jenis'	=> $id_jenis
		);
		$this->M_jenis->delete('mst_jenis',$where);
		
		$this->notif_msg('master/jenis', 'Sukses', 'Data berhasil dihapus');
		
    }
	
	public function edit($id)
	{
		//delete session notif
		// $this->session->unset_userdata('sess_notif');
		//load data
		$data["rs_edit"] = $this->M_jenis->get_data_byid($id);
		// load view
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('master/jenis/edit', $data);
		$this->load->view('template/footer');
        
	}

	public function edit_process()
	{
		$id_jenis   = $this->input->post('id_jenis', true);
		$nama_jenis = $this->input->post('nama_jenis', true);
		$harga_beli = $this->input->post('harga_beli', true);
		
		$this->form_validation->set_rules('nama_jenis','Nama jenis','required');
		$this->form_validation->set_rules('harga_beli','Harga Beli','required');

		if($this->form_validation->run() == false){
			redirect('master/jenis/edit'.$id_jenis);
		}else{
			//set params
			$params = array(
				'nama_jenis' 	=> $nama_jenis,
				'harga_beli' 	=> $harga_beli,
				'mdb'			=> $this->session->userdata("id_user"),
				'mdd'   		=> date('Y-m-d H:i:s')
			);
			$where = array(
				'id_jenis'	=> $id_jenis
			);
			$this->M_jenis->update('mst_jenis',$params,$where);
			
			$this->notif_msg('master/jenis', 'Sukses', 'Data berhasil diedit');
		}
	}

	
}