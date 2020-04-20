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
		
		$this->load->library('upload');
	}
	
	public function index()
	{
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan")->result();
			$x['pendaftar'] = $this->db->get_where('tb_pendaftar', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/index', $data);
			$this->load->view('layout/backend/footer');

	}

	public function add()
	{
        // var_dump ($this->session->userdata('id')) ; die();

			$x['pendaftar'] = $this->db->get_where('tb_pendaftar', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/add');
			$this->load->view('layout/backend/footer');
	}

	public function insert()
    {
		// print_r($_FILES); die();

		$this->load->model('M_Permohonan');

        $permohonan_data							= array();
        $permohonan_data['id_pendaftar']					= $this->session->userdata('id');
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
		$permohonan_data['is_approve_kasi']					= 'MENUNGGU';
		$permohonan_data['is_approve_kabid']					= 'MENUNGGU';
		$permohonan_data['is_approve_kepala']					=  'MENUNGGU';
	
		$config['upload_path'] = './assets/backend/berkas_pendaftar'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
		
		$this->upload->initialize($config);
		 
            $this->upload->do_upload('srt_mhn_pendirian');
                $srt_mhn_pendirian = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$srt_mhn_pendirian['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$srt_mhn_pendirian['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['srt_mhn_pendirian']	=   $srt_mhn_pendirian['file_name'];

				$this->upload->do_upload('ktp_pmhn');
                $ktp_pmhn = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$ktp_pmhn['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$ktp_pmhn['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['ktp_pmhn']	=   $ktp_pmhn['file_name'];
		
                $this->upload->do_upload('srt_kuasa');
                $srt_kuasa = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$srt_kuasa['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$srt_kuasa['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['srt_kuasa']	=   $srt_kuasa['file_name'];

				$this->upload->do_upload('p_sosialisi');
                $p_sosialisi = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$p_sosialisi['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$p_sosialisi['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['p_sosialisi']	=   $p_sosialisi['file_name'];

				$this->upload->do_upload('sp_sewa_lahan');
                $sp_sewa_lahan = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$sp_sewa_lahan['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$sp_sewa_lahan['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['sp_sewa_lahan']	=   $sp_sewa_lahan['file_name'];

				$this->upload->do_upload('sp_tanah_tdk_sengketa');
                $sp_tanah_tdk_sengketa = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$sp_tanah_tdk_sengketa['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$sp_tanah_tdk_sengketa['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['sp_tanah_tdk_sengketa']	=   $sp_tanah_tdk_sengketa['file_name'];
				
				$this->upload->do_upload('izin_usaha');
                $izin_usaha = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$izin_usaha['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$izin_usaha['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['izin_usaha']	=   $izin_usaha['file_name'];
				
				$this->upload->do_upload('r_kades');
                $r_kades = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$r_kades['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$r_kades['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['r_kades']	=   $r_kades['file_name'];
				
				$this->upload->do_upload('r_camat');
                $r_camat = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$r_camat['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$r_camat['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['r_camat']	=   $r_camat['file_name'];
				
				$this->upload->do_upload('sjk_tower');
                $sjk_tower = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$sjk_tower['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$sjk_tower['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['sjk_tower']	=   $sjk_tower['file_name'];
				
				$this->upload->do_upload('bak');
                $bak = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$bak['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$bak['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['bak']	=   $bak['file_name'];
				
				$this->upload->do_upload('sptk');
                $sptk = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$sptk['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$sptk['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['sptk']	=   $sptk['file_name'];
				
				$this->upload->do_upload('spk');
                $spk = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$spk['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$spk['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['spk']	=   $spk['file_name'];
				
				$this->upload->do_upload('spaj');
                $spaj = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$spaj['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$spaj['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['spaj']	=   $spaj['file_name'];
				
				$this->upload->do_upload('spbb');
                $spbb = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$spbb['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$spbb['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['spbb']	=   $spbb['file_name'];
				
				$this->upload->do_upload('spptb');
                $spptb = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$spptb['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$spptb['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['spptb']	=   $spptb['file_name'];
				
				$this->upload->do_upload('spps');
                $spps = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$spps['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$spps['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['spps']	=   $spps['file_name'];
				
				$this->upload->do_upload('kk');
                $kk = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$kk['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$kk['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['kk']	=   $kk['file_name'];
				
				$this->upload->do_upload('stfc');
                $stfc = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$stfc['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$stfc['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['stfc']	=   $stfc['file_name'];
				
				$this->upload->do_upload('ppbb');
                $ppbb = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/backend/berkas_pendaftar'.$ppbb['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/backend/berkas_pendaftar'.$ppbb['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                
				$permohonan_data['ppbb']	=   $ppbb['file_name'];
				
			
		// var_dump($permohonan_data); die();

		$reslut = $this->M_Permohonan->insert_data($permohonan_data, 'tb_permohonan');
		
		// if($reslut){
            redirect('pendaftar/permohonan');
       
	}

	public function edit($id)
	{	
			$where = array('id' => $id);
			$data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan WHERE id='$id'")->result();
			$x['pendaftar'] = $this->db->get_where('tb_pendaftar', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/pendaftar/permohonan/edit', $data);
			$this->load->view('layout/backend/footer');
    }
    
    public function print($id)
	{	
        $where = array('id' => $id);
            $data['permohonan'] = $this->db->query("SELECT * FROM tb_permohonan WHERE id='$id'")->result();
			$x['pendaftar'] = $this->db->get_where('tb_pendaftar', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('permohonan/print', $data);
			$this->load->view('layout/backend/footer');
    }
    
    // public function printpdf()
	// {
	// 	$mpdf = new \Mpdf\Mpdf();
	// 	$data = $this->load->view('permohonan/print', [], TRUE);
	// 	$mpdf->WriteHTML($data);
	// 	$mpdf->Output();
	// }

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
		$this->load->model('M_Permohonan');
		// print_r($where); die();

		$this->M_Permohonan->update_data('tb_permohonan',$data, $where);
		redirect('pendaftar/permohonan');     
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
