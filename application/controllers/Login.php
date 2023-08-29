<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model("ModelUser");
	  $this->load->model("Core");
	}

	public function index()
	{
		$this->load->view('Auth/login');
	}

	public function prosesLogin($user = null, $pass = null) {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->ModelUser->cek_username($username)->num_rows();
		if ($cek > 0) {
			$data_login = $this->ModelUser->cek_username($username)->row_array();
			if ($data_login['admin_id'] == null) {
				$this->Core->setMessage("Gagal", "Password atau Username salah", "danger");
				// redirect('Login');
				echo "u";
			} else {
				$pw_valid = $data_login['password'];
				if ($password == $pw_valid) {
					$id_login = $data_login['admin_id'];
					$get_data_karyawan = $this->ModelUser->get_data_login($id_login)->row_array();

					$data_session = array(
						'admin_id' 	=> $id_login,
						'email' 	=> $data_login['email'],
						'address'	=> $data_login['address'],
						'phone'	   	=> $data_login['phone'],
					);
					$this->session->set_userdata($data_session);
					// echo json_encode($data_session);
					redirect(base_url("Home"));
				} else {
					$this->Core->setMessage("Gagal", "Password atau Username salah", "danger");
					redirect(base_url("Login"));
					// die("password salah");
				}
			}
		} else {
			$this->Core->setMessage("Gagal", "Password atau Username salah", "danger");
			redirect(base_url("Login"));
			// die("username tidak terdaftar");
		}
	}

}
