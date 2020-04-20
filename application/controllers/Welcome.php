<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
				if ($this->session->userdata('role') === '1') {
					redirect('sa/dashboard');
				} elseif ($this->session->userdata('role') === '2') {
					redirect('a/dashboard');
				} elseif ($this->session->userdata('role') === '3') {
					redirect('j/dashboard');
				} elseif ($this->session->userdata('role') === '4') {
					redirect('redirect(pendaftar/dashboard');
				} else {
					redirect('pendaftaran');
				}
	}

}
