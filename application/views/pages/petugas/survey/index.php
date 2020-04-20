<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Survey</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('petugas/survey/add') ?>" class="btn btn-primary"><i class="fa fa-plus"
					aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>No Surat Permohoanan</th>
										<th>Tanggal Survey</th>
										<th>Petugas</th>
										<th>Nomor</th>
										<th>Hasil</th>
										<th colspan="2" class="text-center">Action</th>
									</tr>
									<?php	
									$no=1;
									foreach($survey as $wrg) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?php $permohonan = $this->db->query("SELECT * FROM tb_permohonan WHERE id='$wrg->id_permohonan'")->result();
										foreach($permohonan as $permohonans){
											echo $permohonans->no_surat_pmhn;
										}
										?></td>
										<td><?= $wrg->tanggal_survey?></td>
										<td><?php $petugas = $this->db->query("SELECT * FROM tb_petugas WHERE id='$wrg->id_petugas'")->result();
										foreach($petugas as $petugass){
											echo $petugass->nama;
										}
										?></td>
										<td><?= $wrg->nomor?></td>
										<td><?= $wrg->hasil?></td>
										<td>
											<form method="post"
												action="<?php echo site_url('petugas/survey/update_petugas') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-success" name="hasil"
													value="SETUJU">
											</form>
										</td>

										<td>
											<form method="post"
												action="<?php echo site_url('petugas/survey/update_petugas_tolak') ?>"
												enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="id"
													value="<?= $wrg->id?>">
												<input type="submit" class="btn btn-danger" name="hasil"
													value="TOLAK">
											</form>
										</td>
									</tr>
									<?php endforeach;?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; 2020 <div class="bullet"></div> Sistem Informasi Pendaftaran Menara Telekomunipetugas
	</div>
</footer>
