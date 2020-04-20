<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data permohonan</h1>
		</div>
		<div class="section-body">
			<?php if ($this->session->userdata('role') === null) {  ?>
			<a href="<?= base_url('pendaftar/permohonan/add') ?>" class="btn btn-primary"><i class="fa fa-plus"
					aria-hidden="true"></i> Permohonan Baru</a><br><br>
			<?php }?>
			<?php
									$no=1;
									foreach($permohonan as $wrg) : ?>
			<div class="row">
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">

								<h3 class="text-center">Data Pemohon</h3>
								<table class="table table-md">

									<tr>
										<th>No Surat Permohonan</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->no_surat_pmhn?></td>
									</tr>
									<tr>
										<th>Site ID</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->site_id?></td>
									</tr>
									<tr>
										<th>Site Name</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->site_name?></td>
									</tr>
									<tr>
										<th>Tinggi Tower</th>
										<td>:</td>
										<td class="col-2"><?=$wrg->tinggi_tower?></td>
									</tr>
									<tr>
										<th>Alamat Tower</th>
										<td>:</td>
										<td class="col-2"><?=$wrg->alamat_tower?></td>
									</tr>
									<tr>
										<th>Di Bangun Tanggal</th>
										<td>:</td>
										<td class="col-2"><?=$wrg->dibangun_tanggal?></td>
									</tr>
									<tr>
										<th>Koordinat Longitude</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->koordinat_longitude?></td>
									</tr>
									<tr>
										<th>Koordinat Latitude</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->koordinat_latitude?></td>
									</tr>
									<tr>
										<th>Pemilik Tanah</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->pemilik_tanah	?></td>
									</tr>
									<tr>
										<th>Batas Utara</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->batas_utara?></td>
									</tr>
									<tr>
										<th>Batas Timur</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->batas_timur?></td>
									</tr>
									<tr>
										<th>Batas Selatan</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->batas_selatan?></td>
									</tr>
									<tr>
										<th>batas Barat</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->batas_barat?></td>
									</tr>
									<tr>
										<th>Lama Sewa</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->lama_sewa?></td>
									</tr>
									<tr>
										<th>Operator Pengguna Menar</th>
										<td>:</td>
										<td class="col-2"><?= $wrg->operator_pengguna ?></td>
									</tr>
									<tr>
										<th>Status Persetujuan Kasi</th>
										<td>:</td>
										<td class="col-2"> <b><?= $wrg->is_approve_kasi ?></b> </td>
									</tr>
									<tr>
										<th>Status Persetujuan Kabid</th>
										<td>:</td>
										<td class="col-2"> <b><?= $wrg->is_approve_kabid ?></b> </td>
									</tr>
									<tr>
										<th>Status Persetujuan Kepala</th>
										<td>:</td>
										<td class="col-2"> <b><?= $wrg->is_approve_kepala ?></b> </td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">

								<h3 class="text-center">Berkas Pemohon</h3>
								<table class="table table-md">

									<tr>
										<th>Surat Permohonan Pendirian Menara Telekomunikasi</th>
										<td>:</td>
										<td> <a class="thumbnail" href="#">
												<img id="myImg" class="img-responsive"
													src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->srt_mhn_pendirian ?>"
													alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>KTP Pemohon</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->ktp_pmhn ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Kuasa Perwakilan</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->srt_kuasa ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Pernyataan Telah Diadakan Sosialisasi</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->p_sosialisi ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Perjanjian Sewa Menyewa Lahan</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->sp_sewa_lahan ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Pernyataan Tanah Tidak Dalam Sengketa</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->sp_tanah_tdk_sengketa ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Permohonan Izin Tempat Usaha</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->izin_usaha ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Rekomendasi Kade</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->r_kades ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Rekomendasi Camat</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->r_camat ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Suarat Jaminan Keamanan Tower</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->sjk_tower ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Berita Acara Kesepakatan</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->bak ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Pernyataan Tidak Keberatan</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->sptk ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Persetujuan Keluarga</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->spk ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Pernuyataan Akses Jalan</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->spaj ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Pernyataan Boleh Bangun</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->spbb ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Pernyataan Pemilik Tanah</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->spptb ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Surat Pernaytaan pengembalian</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->spps ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Kartu Keluarga</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->kk ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Sertifkat Keluarga FC</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->stfc ?>"
												alt="" width="50px"></a></td>
									</tr>
									<tr>
										<th>Pajak PBB</th>
										<td>:</td>
										<td><a href="#" class="thumbnail"><img class="img-responsive" src="<?php  echo base_url('assets/backend/berkas_pendaftar/'); echo $wrg->ppbb ?>"
												alt="" width="50px"></a></td>
									</tr>
									<?php endforeach;?>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row ml-1 text-center">
				<div class="col-12">
					<div class="card ">
						<div class="card-body">
							<div class="table-responsive">
								<?php if ($this->session->userdata('role') === null) {  ?>

								<?php } else if($this->session->userdata('role') === '3'){?>
								<table>
									<tr>
										<td>
											<form method="post"
												action="<?php echo site_url('kepala/permohonan/update_kepala') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-success" name="is_approve_kepala"
													value="SETUJU">
											</form>
										</td>
										<!-- </tr>
									<tr> -->
										<td>
											<form method="post"
												action="<?php echo site_url('kepala/permohonan/update_kepala_tolak') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-danger" name="is_approve_kepala"
													value="TOLAK">
											</form>
										</td>
									</tr>
								</table>
								<?php } else if($this->session->userdata('role') === '4'){?>
								<table>
									<tr>
										<td>
											<form method="post"
												action="<?php echo site_url('kabid/permohonan/update_kabid') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-success" name="is_approve_kabid"
													value="SETUJU">
											</form>
										</td>
										<!-- </tr>
									<tr> -->
										<td>
											<form method="post"
												action="<?php echo site_url('kabid/permohonan/update_kabid_tolak') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-danger" name="is_approve_kabid"
													value="TOLAK">
											</form>
										</td>
									</tr>
								</table>
								<?php } else if($this->session->userdata('role') === '5'){?>
								<table>
									<tr>
										<td>
											<form method="post"
												action="<?php echo site_url('kasi/permohonan/update_kasi') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-success" name="is_approve_kasi"
													value="SETUJU">
											</form>
										</td>
										<!-- </tr>
									<tr> -->
										<td>
											<form method="post"
												action="<?php echo site_url('kasi/permohonan/update_kasi_tolak') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-danger" name="is_approve_kasi"
													value="TOLAK">
											</form>
										</td>
									</tr>
								</table>
								<?php }?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>
<div class="modal fade" role="dialog" id="imgmodal">
	<span class="close">&times;</span>
	<div class="modal-dialog">
		<div class="modal-content"></div>
		<img class="img-responsive" src="" id="show-img">
	</div>
</div>
<script>
	$(document).ready(function () {
		$("img").click(function () {
			var img = $(this).attr('src');
			$("#show-img").attr('src', img);
			$("#imgmodal").modal('show');
		});
	});


</script>
