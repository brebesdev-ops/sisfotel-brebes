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

class Petugas_Controller extends CI_Controller
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
		if ($this->session->userdata('role') === '5') {
			$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/petugas/index', $data);
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
		if ($this->session->userdata('role') === '5') {
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/petugas/add');
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

		$this->load->model('M_Multiple');
		$warga_data							= array();
		$user_data							= array();
		$warga_data['nip']					= $this->input->post('nip');
		$warga_data['nama']					= $this->input->post('nama');
		$warga_data['gol']					= $this->input->post('gol');
		$warga_data['jabatan']				= $this->input->post('jabatan');
		$warga_data['jab_survey']			= $this->input->post('jab_survey');



		$user_data['role']    				= 2;
		$user_data['email']    				= $this->input->post('nip');
		$user_data['name']    				= $this->input->post('nama');
		$user_data['password']        		= sha1($this->input->post("nip"));

		// var_dump($user_data); die();

		$checking	=$this->M_Multiple->multiple($warga_data, $user_data);
		
		if ($checking) {
			redirect('kasi/petugas');	
		} else {
			echo "Error";
		}
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '5') {
			$where = array('id' => $id);
			$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas WHERE id='$id'")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/petugas/edit', $data);
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
		$nip           		= $this->input->post('nip');
		$nama               = $this->input->post('nama');
		$gol          	= $this->input->post('gol');
		$jabatan                = $this->input->post('jabatan');
		$jab_survey      = $this->input->post('jab_survey');

	   
		$data = array(

			'nip'				=> $nip,
			'nama'				=> $nama,
			'gol'		=> $gol,
			'jabatan'			=> $jabatan,
			'jab_survey'				=> $jab_survey
		
		);

		$where = array('id' => $id);
		$this->load->model('M_petugas');

		$this->M_petugas->update_data('tb_petugas',$data, $where);
		redirect('kasi/petugas');     
	}

	public function delete($id)
    {
	$this->load->model('M_petugas');

	$where = array('id' => $id);
	$this->M_petugas->delete_data($where,'tb_petugas');
	redirect('kasi/petugas');  
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
