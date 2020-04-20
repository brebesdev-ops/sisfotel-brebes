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

class Survey_Controller extends CI_Controller
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
			
			$data['survey'] = $this->db->query("SELECT * FROM tb_survey")->result();
			$x['petugas'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/petugas/survey/index', $data);
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

			$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas")->result();
			$x['petugas'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/petugas/survey/add', $data);
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

	$this->load->model('M_Survey');
	$survey_data							= array();
	$survey_data['tanggal_survey']					= $this->input->post('tanggal_survey');
	$survey_data['petugas']					= $this->input->post('petugas');
	$survey_data['nomor']					= $this->input->post('nomor');
	$survey_data['tanggal']				= $this->input->post('tanggal');
	$survey_data['hasil']			= $this->input->post('hasil');
	$survey_data['validasi']			= $this->input->post('validasi');


	// var_dump($survey_data); die();

	$this->M_Survey->insert_data($survey_data, 'tb_survey');
	
	redirect('a/survey');	
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '2') {
			$where = array('id' => $id);
			$data['survey'] = $this->db->query("SELECT * FROM tb_survey WHERE id='$id'")->result();
			$x['petugas'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/petugas/survey/edit', $data);
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
		$this->load->model('M_survey');

		$this->M_survey->update_data('tb_survey',$data, $where);
		redirect('a/survey');     
	}

	public function update_petugas()
	{

				// print_r($_POST); die();

		$id					= $this->input->post('id');
		$hasil      = $this->input->post('hasil');

	   
		$data = array(
			'hasil'				=> $hasil
		);

		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_survey');

		$this->M_survey->update_data('tb_survey',$data, $where);
		redirect('petugas/survey');     
	}
	public function update_petugas_tolak()
	{

				// print_r($_POST); die(); 

		$id					= $this->input->post('id');
		$hasil      = $this->input->post('hasil');

	   
		$data = array(
			'hasil'				=> $hasil
		);

		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_survey');

		$this->M_survey->update_data('tb_survey',$data, $where);
		redirect('petugas/survey');     
	}
	public function delete($id)
    {
	$this->load->model('M_survey');

	$where = array('id' => $id);
	$this->M_survey->delete_data($where,'tb_survey');
	redirect('a/survey');  
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
