<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model','api');
		
  	}

  	public function menara()
 	{
		 $method = $_SERVER['REQUEST_METHOD'];

		 $response = [];

		 if($method == "GET"){
			 $id = $this->input->get('id');

		 }
	
	}

	
	
}
