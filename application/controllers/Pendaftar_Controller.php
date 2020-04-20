<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE)) {
			redirect('auth');	
		}
		$this->load->model('M_Auth');
		$this->load->model('M_Perusahaan');
		$this->load->model('M_Pendaftar');

  	}

  	public function index()
 	{
			$data['perusahaan'] = $this->db->query("SELECT * FROM tb_perusahaan")->result();

			$this->load->view('layout/backend/auth/header');
	 	 	$this->load->view('pendaftaran/register', $data);
			$this->load->view('layout/backend/auth/footer');	
		
	}

	public function pendaftaran_proses(){

		// print_r($_POST); die();

		$pendaftar_data							= array();
		$pendaftar_data['id_perusahaan']					= $this->input->post('id_perusahaan');
		$pendaftar_data['nama']					= $this->input->post('nama');
		$pendaftar_data['email']					= $this->input->post('email');
		$pendaftar_data['no_telp']					= $this->input->post('no_telp');
		$pendaftar_data['alamat']					= $this->input->post('alamat');
		$pendaftar_data['password']					= sha1($this->input->post('password'));


		// var_dump($pendaftar_data); die();

		$this->M_Pendaftar->insert_data($pendaftar_data, 'tb_pendaftar');
		
		redirect('/pendaftaran');
	}
	
	public function login()
 	{

			$this->load->view('layout/backend/auth/header');
	 	 	$this->load->view('pendaftaran/login');
			$this->load->view('layout/backend/auth/footer');	
		
	}

	public function login_proses()	
	{
		// print_r($_POST); die();

		$email 		= $this->input->post('email', TRUE);
		$password	= $this->input->post('password', TRUE);
		$result		= $this->M_Pendaftar->check_pendaftar($email, $password);

		// var_dump($result); die();
		if($result->num_rows() > 0)
		{
			$data		= $result->row_array();
			$id			= $data['id'];
			$id_perusahaan		= $data['id_perusahaan'];
			$nama		= $data['nama'];
			$password	= $data['password'];
			$email		= $data['email'];
			$no_telp		= $data['no_telp'];
			$sesdata	= array(
				'id'		=> $id,
				'id_perusahaan'		=> $id_perusahaan,
				'nama'		=> $nama,
				'email'		=> $email,
				'role'		=> $role,
				'logged_in'	=> TRUE
			);
			$this->session->set_userdata($sesdata);
			redirect('pendaftar/dashboard');

		} else {
			$this->session->set_flashdata('failed', 'Email atau Password Salah');
			redirect('/pendaftar/masuk');	
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/pendaftar/masuk');
	}
	
	public function dashboard()	
	{
		   $data['pendaftar'] = $this->db->get_where('tb_pendaftar', ['id' => $this->session->userdata('id')])->row_array();
		   // var_dump($data); die();
		   $this->load->view('layout/backend/header');
		   $this->load->view('layout/backend/topbar', $data);
		   $this->load->view('layout/backend/sidebar');
		   $this->load->view('pendaftaran/dashboard');
		   $this->load->view('layout/backend/footer');
   }
}
