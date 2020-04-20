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

class Perusahaan_Controller extends CI_Controller
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
			$data['perusahaan'] = $this->db->query("SELECT * FROM tb_perusahaan")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/perusahaan/index', $data);
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
			$this->load->view('pages/kasi/perusahaan/add');
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

		$this->load->model('M_Perusahaan');
		$perusahaan_data							= array();
		$perusahaan_data['nama']					= $this->input->post('nama');
		$perusahaan_data['alamat']					= $this->input->post('alamat');
		$perusahaan_data['kota']					= $this->input->post('kota');
		$perusahaan_data['no_telp']				= $this->input->post('no_telp');




		// var_dump($perusahaan_data); die();

		$this->M_Perusahaan->insert_data($perusahaan_data, 'tb_perusahaan');
		
		redirect('kasi/perusahaan');	
		
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '5') {
			$where = array('id' => $id);
			$data['perusahaan'] = $this->db->query("SELECT * FROM tb_perusahaan WHERE id='$id'")->result();
			$x['kasi'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/kasi/perusahaan/edit', $data);
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
		$nama               = $this->input->post('nama');
		$alamat          	= $this->input->post('alamat');
		$kota                = $this->input->post('kota');
		$no_telp      = $this->input->post('no_telp');

	   
		$data = array(

			'nama'				=> $nama,
			'alamat'		=> $alamat,
			'kota'			=> $kota,
			'no_telp'				=> $no_telp
		
		);

		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_Perusahaan');
		// print_r($where); die();

		$this->M_Perusahaan->update_data('tb_perusahaan',$data, $where);
		redirect('kasi/perusahaan');     
	}

	public function delete($id)
    {
	$this->load->model('M_Perusahaan');

	$where = array('id' => $id);
	$this->M_Perusahaan->delete_data($where,'tb_perusahaan');
	redirect('kasi/perusahaan');  
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
