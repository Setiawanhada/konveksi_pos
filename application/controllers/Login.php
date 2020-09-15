<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');

	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$where = array(
			'username' => $username,
			'password' => $password
            );
        // echo"<pre>";print_r($where);die();
		$cek = $this->M_login->cek_login("admin",$where)->num_rows();
		
		if($cek > 0){
		    $data = $this->M_login->get_data_admin($where);
            // $where_admin = array(
			//     'id_admin'   => $data['id_admin']
            //     );
            // $params = array(
            //     'log'   => date("Y-m-d h:i:sa")
            // );
			// $this->M_login->update('admin',$params,$where_admin);
			$data_session = array(
				'nama' => $data['nama'],
				// 'log'  => $data['log'],
				'id_user' => $data['id_user'],
				'status' => "login"
				);
                // echo"<pre>";print_r($data_session);die();
			
			$this->session->set_userdata($data_session);

			redirect(site_url("welcome"));

		}else{
			
			redirect(site_url("login"));
			
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}