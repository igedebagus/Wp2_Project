<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_login');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->input->post('login_name');
		$password = $this->input->post('login_pass');
		$where = array(
			'nama' => $username,
			'password' => $password
		);
		$cek = $this->auth_login->cek_login("user", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect('/Dashboard');
		} else {
			echo "Username dan password salah !";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('/login');
	}
}
