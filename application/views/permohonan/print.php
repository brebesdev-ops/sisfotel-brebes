<style>
	hr.set1 {
		border: 2px solid black;
	}
	hr.set2 {
		border: 1px solid black;
	}

</style>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data permohonan</h1>
		</div>
		<div class="section-body">

			<?php
			$id_perusahaan = $this->session->userdata('id_perusahaan');
			$test = $this->db->query("SELECT * FROM tb_perusahaan WHERE id='$id_perusahaan'")->result();

			// var_dump($test); die();
									$no=1;
									foreach($permohonan as $wrg) : ?>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<div class="row">
									<div class="col-1">
										<img src="<?php echo base_url().'assets/brebes.png';  ?>"
											class="img-responsive text-center" width="100px">
									</div>
									<div class="col-11">
										<h3 class="text-center">DINAS KOMUNIKASI INFORMATIKA DAN STATISTIK</h3>
										<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
											Delectus quidem nulla repellat nobis a. Minima, temporibus nemo id corrupti
											voluptatum dolores molestiae quidem corporis, quisquam ea dignissimos, fuga
											enim odit.q</p>
									</div>
									
								</div>
								<hr class="set1">
									<hr class="set2">
								<div class="row mt-5">
									<div class="col-8">
										<table class="table-responsive">
											<tr>
												<td>Nomor</td>
												<td>:</td>
												<td>555</td>
											</tr>
											<tr>
												<td>Sifat</td>
												<td>: </td>
												<td>Penting</td>
											</tr>
											<tr>
												<td>Lampiran</td>
												<td>: </td>
												<td>-</td>
											</tr>
											<tr>
												<td>Perihal</td>
												<td>: </td>
												<td><u>Surat Keterangan</u></td>
											</tr>
										</table>
									</div>
									<div class="col-4">
										<div class="row">
											<p>Brebes, 16 November 2017</p>
										</div>
										<div class="row">
											<p>Kepada <br>
												<?php foreach($test as $perusahaan){
													echo $perusahaan->nama;
									}
												?> <br>
												Di <br>
												<u>Jakarta</u>
											</p>
										</div>
									</div>

								</div>
								<div class="row mt-5">
									<div class="col-12">
										<p>Memperhatikan surat Permohonan dari <?php 
										
										$pendaftar = $this->db->query("SELECT * FROM tb_pendaftar WHERE id='$wrg->id_pendaftar'")->result();
										foreach ($pendaftar as $pendaftars){
											echo $pendaftars->nama;
										}
										?>  atas nama <?php foreach($test as $perusahaan){
											echo $perusahaan->nama. ', alamat ';
											echo $perusahaan->alamat;

							}
										?> <br> nomot ,
											010/CM.112017 tanggal 06 Noperaber 2017. perihal Permobonan Surat
											Rekomendasi
											Menara Telckornunthasi di wilayah Kabupaten Brebes, berdasarkan : </p>
										<ol>
											<li>Unthmg• undang nomor . Tahun 1499 tentan,g Telekomunikas,</li>
											<li>Undang-Undang Nomor 23 Tahun 2014 tennutg Pemerintahan Daer. (Lembaran
												Negara Republik Incthnesia Tahun 2014 Nomor 244, Tambahan Perubahan
												Kodua
												Aths Undang-Undang Nomor 23 Tah. 2014 tenthrth Pemerinthhan Daerah
												(Lembaran
												Negara Republik Indonesia Tahun 2U15 Nomor 58, Tambahan Lembaran Negara
												Republik Indonesia Nomor 5679);</li>
											<li>Peraturan Pemerintah Nomor . Tahun 2016 tentang Perangkat Daerah
												ILembaran
												Negara Repubtik Indonesia Tahun 2016 Nomor 114, Tambahan Lembaran Negara
												Republik Indonesia Nomor 5887, </li>
											<li> Peraturan Bersama Menten etalam Negeri Menteri Pekerthan Umum, Menteri
												Komunikasi dan Informatika dan Kepath Badan Koordinasi Penananurn Modal
												Nomor 18 Tahun 2009, Nomor 19/Per.M.KOMINFO/032009, Nomor 3/P/2009
												tentang
												pedoman pembangunan dan penggunaan Bersarna Menant Telekomunikasi;</li>
											<li>Peraturan Daerah Kabupathn Brebes Nomor 2 Tahun 2014 tentang Penataan.
												Pcmbangunan dan Pengoperasian Menata Bersama Telekomunthas, Di .bupaten
												Brebes;</li>
											<li> Peraturan Daemh iCabupaten Brebes Nomor 5 Tahun 2016 tentang Pembentuk.
												Susttnan Perangakat Daerah Kabupaten Brebes: </li>
											<li>Peraturan Daerah Kabupaten Brebes Nomor 1 Tahun 2017 tertmng Perubahan
												Ked.
												Atas Retribusi Daerah Kabupaten Brebes; </li>
										</ol>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p>Setelah dilakukan Pemeriksaan Lapangan yang dilak.nnkan <br></p>
										<p>Hari/ tanggal Kamis, 16 Nopember 2017 </p> <br>
										<p>Dengan ini menerangkan bahwa :</p> <br>
										<table class="table-responsive">
											<tr>
												<td>a.</td>
												<td>Lokasi Pendirian Menara</td>
												<td>:</td>
												<td>Jalan Jend. Sudirman Gg Cernpaka No. 22 RT 0RW 02 Desa Ketanggungan
													Keeamaum Ketanggungan Kabupaten Brehes.</td>
											</tr>
											<tr>
												<td>b.</td>
												<td>Titik Koordinat</td>
												<td>:</td>
												<td>
													Latittude : -74267462 <br>
													Longitude : 3246764
												</td>
											</tr>
											<tr>
												<td>c.</td>
												<td>Tinggi Menara </td>
												<td>:</td>
												<td>42 Meter</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p>Pada dasarnya dilokasi tersebut sudah sesuai dengan peraturan
											perundang-undangan,
											sehingga dapat ditindaklanjuti dan diteruskan proses perijinannya. </p>
										<p>Terhadap pelaksanaan kegiatan sebagairnana tersebut di atas, rnaka Pemegang
											Izin
											Wajib membayar Retribusi Pengendalian Menera Telekomunikasi berdasarkan
											Surat
											Ketetapan Retribusi Daerah (SKRD), sesuai dengan ketentuan perundangan —
											undangan yang berlaku. </p>
										<p class="text-right">Demikian surat ini dibuat untuk dipergunakan sebagaimana
											mestinya. </p>

									</div>
								</div>
								<div class="row">
									<div class="col-10"></div>
									<div class="col-2">
										<img src="<?php echo base_url().'assets/ttd.png';  ?>"
											class="img-responsive text-center" width="100px"></div>
								</div>
								<div class="row">
									<div class="col-12">
										<p>Tembusan : <br>
											1. Kepala Dinas <br>
											2. Arsip
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<a href="<?php echo base_url('pendaftar/permohonan/printpdf/');?>"
							class="btn btn-success">CETAK</a>
					</div>
				</div>
			</div>
		</div>
</div>
<?php endforeach;?>

</div>
</div>
</section>
</div>
