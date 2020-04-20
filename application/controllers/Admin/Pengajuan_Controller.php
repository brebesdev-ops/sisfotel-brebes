<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_Controller extends CI_Controller
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
			$data['pengajuan'] = $this->db->query("SELECT * FROM tb_pengajuan")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/pengajuan/index', $data);
			$this->load->view('layout/backend/footer');
		} else {
			redirect('');
		}
	}

	public function pending()
	{
		if ($this->session->userdata('role') === '2') {
			$data['pengajuan'] = $this->db->query("SELECT * FROM tb_user WHERE is_approved = '0'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/akun/pending', $data);
			$this->load->view('layout/backend/footer');
		} else {
			redirect('');
		}
	}
	 
	public function allow($id)
	{
		$result				= $this->M_Akun->check_user($id);
		if($result->num_rows() > 0)
		{
			$data			= $result->row_array();
			$status			= $data['status'];
			$is_approved	= $data['is_approved'];
		} 

		if ($is_approved == '0') {
			$data = array(
				'status'			=> '1',
				'is_approved'		=> '1'
			);
		} else {
			$data = array(
				'status'			=> '0',
				'is_approved'		=> '0'
			);
		}

		$where = array('id' => $id);
		$this->db->update('tb_user', $data, $where);

		redirect('a/akun/pending');     
	}

	public function detail($id)
	{	
		if ($this->session->userdata('role') === '2') {
			$this->load->helper('date');

			$where = array('id' => $id);
			$data['akun'] = $this->db->query("SELECT * FROM tb_user  WHERE id='$id'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/akun/detail', $data);
			$this->load->view('layout/backend/footer');
		} else {
			redirect('');
		}	
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '2') {
			$where = array('id' => $id);
			$data['pengajuan'] = $this->db->query("SELECT * FROM tb_user WHERE id='$id'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/berita/edit', $data);
			$this->load->view('layout/backend/footer');
		} else {
			redirect('');
		}	
	}

	// public function update()
	// {
	// 	$id					= $this->input->post('id');
	// 	$title              = $this->input->post('username');
	// 	$slug				= slug($this->input->post('title',TRUE));
	// 	$type 				= $this->input->post('type');
	// 	$body          		= $this->input->post('body');
	// 	$result				= $this->M_Artikel->check_img($id);
	// 	if($result->num_rows() > 0)
	// 	{
	// 		$data	= $result->row_array();
	// 		$foto	= $data['image'];
	// 		$date	= $data['date'];
	// 	} 
		
	// 	$img 				= $_FILES['foto'];
	// 	if ($img){
	// 		$config['upload_path']		= './assets/backend/img/artikel';
	// 		$config['allowed_types']	= 'jpg|png|jpeg';
	// 		$config['max_size']			= 2048;
	// 		$this->load->library('upload',$config);
	// 		if($this->upload->do_upload('foto')){
	// 			$img=$this->upload->data('file_name');
	// 			$this->db->set('image', $img);
	// 			if($foto != 'default.png')
	// 			{
	// 				$target_file	= './assets/backend/img/artikel/'.$foto;
	// 				unlink($target_file);
	// 			}
	// 		} else {
	// 			$img = $foto;
	// 		}
	// 	}
	   
	// 	$data = array(
	// 		'title'				=> $title,
	// 		'type'				=> $type,
	// 		'slug'				=> $slug,
	// 		'body'				=> $body,
	// 		'image'				=> $img,
	// 		'date'				=> $date
	// 	);
		
	// 	$where = array('id' => $id);
	// 	$this->M_Artikel->update_data('artikel', $data, $where);
	// 	redirect('a/berita/pending');     
	// }	

	public function delete($id)
    {
		$this->M_Akun->check_user($id);
		$where = array('id' => $id);
		$this->M_Akun->delete_data($where, 'tb_user');
		redirect('a/akun/pending');     
    }
}


/* End of file Berita_Controller.php */
/* Location: ./application/controllers/Berita_Controller.php */
