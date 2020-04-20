<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE)) {
			redirect('auth');	
		}
		$this->load->model('M_Auth');
  	}

  	public function index()
 	{
		if ($this->session->userdata('role') === '1') {
			redirect('sa/dashboard');
		} elseif ($this->session->userdata('role') === '2') {
			redirect('a/dashboard');
		} elseif ($this->session->userdata('role') === '3') {
			redirect('j/dashboard');
		} elseif ($this->session->userdata('role') === '4') {
			redirect('rt/dashboard');
		} else {
			$this->load->view('layout/backend/auth/header');
	 	 	$this->load->view('auth/login');
			$this->load->view('layout/backend/auth/footer');
		}
	}

	public function login()	
	{
		$email 		= $this->input->post('email', TRUE);
		$password	= $this->input->post('password', TRUE);
		$result		= $this->M_Auth->check_admin($email, $password);
		if($result->num_rows() > 0)
		{
			$data		= $result->row_array();
			$id			= $data['id'];
			$email		= $data['email'];
			$name		= $data['name'];
			$password	= $data['password'];
			$img		= $data['img'];
			$role		= $data['role'];
			$sesdata	= array(
				'id'		=> $id,
				'email'		=> $email,
				'name'		=> $name,
				'img'		=> $img,
				'role'		=> $role,
				'logged_in'	=> TRUE
			);
			$this->session->set_userdata($sesdata);
			if ($role === '1') {
				redirect('sa/dashboard');
			} elseif ($role === '2') {
				redirect('petugas/dashboard');
			} elseif ($role === '3') {
				redirect('kepala/dashboard');
			} elseif ($role === '4') {
				redirect('kabid/dashboard');
			}  elseif ($role === '5') {
				redirect('kasi/dashboard');
			}

			print_r($_POST); die();
		} else {
			$this->session->set_flashdata('failed', 'Email atau Password Salah');
			redirect('auth');	
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

	
	
}
