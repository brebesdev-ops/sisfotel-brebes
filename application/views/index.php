<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Pendaftaran Menara Telekomunikasi</title>
<?php $this->load->view('layout/frontend/style'); ?>  
</head>
<body>
<?php $this->load->view('layout/frontend/header');
	
	//	  ISI KONTEN DINAMIS

	  $this->load->view($isi);

	  
	//	  ISI KONTEN DINAMIS
	

	  $this->load->view('layout/frontend/footer');
      $this->load->view('layout/frontend/script');?>
</body>
</html>
