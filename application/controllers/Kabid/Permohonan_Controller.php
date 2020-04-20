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

class Permohonan_Controller extends CI_Controller
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
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan")->result();
			$x['kabid'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/index', $data);
			$this->load->view('layout/backend/footer');

	}

	public function add()
	{
			$x['kabid'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/add');
			$this->load->view('layout/backend/footer');
	}

	public function insert()
    {

		print_r($_POST); die();

		$this->load->model('M_Permohonan');

		$permohonan_data							= array();
		$permohonan_data['no_surat_pmhn']					= $this->input->post('no_surat_pmhn');
		$permohonan_data['site_id']					= $this->input->post('site_id');
		$permohonan_data['site_name']					= $this->input->post('site_name');
		$permohonan_data['tinggi_tower']					= $this->input->post('tinggi_tower');
		$permohonan_data['alamat_tower']					= $this->input->post('alamat_tower');
		$permohonan_data['dibangun_tanggal']					= $this->input->post('dibangun_tanggal');
		$permohonan_data['koordinat_longitude']					= $this->input->post('koordinat_longitude');
		$permohonan_data['koordinat_latitude']					= $this->input->post('koordinat_latitude');
		$permohonan_data['pemilik_tanah']					= $this->input->post('pemilik_tanah');
		$permohonan_data['batas_utara']					= $this->input->post('batas_utara');
		$permohonan_data['batas_timur']					= $this->input->post('batas_timur');
		$permohonan_data['batas_selatan']					= $this->input->post('batas_selatan');
		$permohonan_data['batas_barat']					= $this->input->post('batas_barat');
		$permohonan_data['lama_sewa']					= $this->input->post('lama_sewa');
		$permohonan_data['operator_pengguna']					= $this->input->post('operator_pengguna');
		$permohonan_data['is_approve_kabid']					= 'MENUNGGU';
		$permohonan_data['is_approve_kabid']					= 'MENUNGGU';
		$permohonan_data['is_approve_kepala']					=  'MENUNGGU';
		$warga_data['srt_mhn_pendirian']			    	=$_FILES['srt_mhn_pendirian'];

		$config['upload_path']		= './assets/backend/img/foto_warga';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				$warga_data['srt_mhn_pendirian'] = 'default.png';
			} else {
				$warga_data['srt_mhn_pendirian'] =$this->upload->data('file_name');
			}


		// var_dump($permohonan_data); die();

		$this->M_Permohonan->insert_data($permohonan_data, 'tb_permohonan');
		
		redirect('pendaftar/permohonan');	
		
	}

	public function edit($id)
	{	
			$where = array('id' => $id);
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan WHERE id='$id'")->result();
			$x['kabid'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/edit', $data);
			$this->load->view('layout/backend/footer');
	}

	public function detail_permohonan($id)
	{	
			$where = array('id' => $id);
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan WHERE id='$id'")->result();
			$x['kabid'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/detail', $data);
			$this->load->view('layout/backend/footer');
	}

	public function edit_kabid($id)
	{	

				// print_r($_POST); die();

		$id					= $this->input->post('id');
		$is_approve_kabid               = $this->input->post('nama');
	   
		$data = array(

			'nama'				=> $nama,
			'alamat'		=> $alamat,
			'kota'			=> $kota,
			'no_telp'				=> $no_telp
		
		);

		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_Permohonan');
		// print_r($where); die();

		$this->M_Permohonan->update_data('tb_permohonan',$data, $where);
		redirect('pendaftar/permohonan');    
	}


	public function update_kabid()
	{

				// print_r($_POST); die();

		$id					= $this->input->post('id');
		$is_approve_kabid      = $this->input->post('is_approve_kabid');

	   
		$data = array(
			'is_approve_kabid'				=> $is_approve_kabid
		);

		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_Permohonan');
		// print_r($where); die();

		$this->M_Permohonan->update_data('tb_permohonan',$data, $where);
		redirect('kabid/permohonan/detail/'.$id);     
	}
	public function update_kabid_tolak()
	{

				// print_r($_POST); die();

		$id					= $this->input->post('id');
		$is_approve_kabid      = $this->input->post('is_approve_kabid');

	   
		$data = array(
			'is_approve_kabid'				=> $is_approve_kabid
		);

		// print_r($data); die();

		$where = array('id' => $id);
		$this->load->model('M_Permohonan');
		// print_r($where); die();

		$this->M_Permohonan->update_data('tb_permohonan',$data, $where);
		redirect('kabid/permohonan/detail/'.$id);     
	}


	public function delete($id)
    {
	$this->load->model('M_Permohonan');

	$where = array('id' => $id);
	$this->M_Permohonan->delete_data($where,'tb_permohonan');
	redirect('pendaftar/permohonan');  
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
