<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE)) 
		{
			redirect('auth');	
		}
  	}

  	public function index()	
 	{
		if ($this->session->userdata('role') === '3') {
			$data['kepala'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			// var_dump($data); die();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $data);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kepala/dashboard');
			$this->load->view('layout/backend/footer');
		 } else {
			redirect('');
		}
	}


	
}

