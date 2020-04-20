<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Warga_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class Provider_Controller extends CI_Controller
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
		if ($this->session->userdata('role') === '2') {
			$data['provider'] = $this->db->query("SELECT * FROM tb_provider")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/provider/index', $data);
			$this->load->view('layout/backend/footer');
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";
		}
	}

	public function add()
	{
		if ($this->session->userdata('role') === '2') {
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/provider/add');
			$this->load->view('layout/backend/footer');
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";
		}
	}

	public function insert()
    {

		// print_r($_POST); die();

		$this->load->model('M_Provider');
		$provider_data							= array();
		$provider_data['operator']					= $this->input->post('operator');
		$provider_data['nama_pt']					= $this->input->post('nama_pt');
		$provider_data['alamat_pt']					= $this->input->post('alamat_pt');
		$provider_data['no_telp']				= $this->input->post('no_telp');
		$provider_data['nama_pj']			= $this->input->post('nama_pj');




		// var_dump($provider_data); die();

		$this->M_Provider->insert_data($provider_data, 'tb_provider');
		
		redirect('a/provider');	
		
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '2') {
			$where = array('id' => $id);
			$data['provider'] = $this->db->query("SELECT * FROM tb_provider WHERE id='$id'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/provider/edit', $data);
			$this->load->view('layout/backend/footer');
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";
		}	
	}

	public function update()
	{
		$id					= $this->input->post('id');
		$operator           		= $this->input->post('operator');
		$nama_pt               = $this->input->post('nama_pt');
		$alamat_pt          	= $this->input->post('alamat_pt');
		$no_telp                = $this->input->post('no_telp');
		$nama_pj      = $this->input->post('nama_pj');

	   
		$data = array(

			'operator'				=> $operator,
			'nama_pt'				=> $nama_pt,
			'alamat_pt'		=> $alamat_pt,
			'no_telp'			=> $no_telp,
			'nama_pj'				=> $nama_pj
		
		);

		$where = array('id' => $id);
		$this->load->model('M_provider');

		$this->M_provider->update_data('tb_provider',$data, $where);
		redirect('a/provider');     
	}

	public function delete($id)
    {
	$this->load->model('M_provider');

	$where = array('id' => $id);
	$this->M_provider->delete_data($where,'tb_provider');
	redirect('a/provider');  
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
