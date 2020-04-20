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
		if ($this->session->userdata('role') === '5') {
			
			$data['survey'] = $this->db->query("SELECT * FROM tb_survey")->result();
			$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas")->result();
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/survey/index', $data);
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

			$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas")->result();
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/survey/add', $data);
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
	$survey_data['id_permohonan']					= $this->input->post('id_permohonan');
	$survey_data['tanggal_survey']					= $this->input->post('tanggal_survey');
	$survey_data['id_petugas']					= $this->input->post('id_petugas');
	$survey_data['nomor']					= $this->input->post('nomor');
	$survey_data['hasil']			= $this->input->post('hasil');


	// var_dump($survey_data); die();

	$this->M_Survey->insert_data($survey_data, 'tb_survey');
	
	redirect('kasi/survey');	
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '5') {
			$where = array('id' => $id);
			$data['survey'] = $this->db->query("SELECT * FROM tb_survey WHERE id='$id'")->result();
			$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas")->result();
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/survey/edit', $data);
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
		
	// print_r($_POST); die();

		$id					= $this->input->post('id');
		$id_permohonan           		= $this->input->post('id_permohonan');
		$tanggal_survey               = $this->input->post('tanggal_survey');
		$id_petugas          	= $this->input->post('id_petugas');
		$nomor                = $this->input->post('nomor');
		$hasil      = $this->input->post('hasil');

	   
		$data = array(

			'id_permohonan'				=> $id_permohonan,
			'tanggal_survey'				=> $tanggal_survey,
			'id_petugas'		=> $id_petugas,
			'nomor'			=> $nomor,
			'hasil'				=> $hasil
		
		);
		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_survey');

		$this->M_survey->update_data('tb_survey',$data, $where);
		redirect('kasi/survey');     
	}

	public function delete($id)
    {
	$this->load->model('M_survey');

	$where = array('id' => $id);
	$this->M_survey->delete_data($where,'tb_survey');
	redirect('kasi/survey');  
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
