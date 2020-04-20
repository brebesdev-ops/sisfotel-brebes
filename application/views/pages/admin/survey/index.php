<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Survey</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('a/survey/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Tanggal Survey</th>
										<th>Petugas</th>
										<th>Nomor</th>
										<th>Tanggal</th>
										<th>Hasil</th>
										<th>Validasi</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($survey as $wrg) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $wrg->tanggal_survey?></td>
										<td><?= $wrg->petugas?></td>
										<td><?= $wrg->nomor?></td>
										<td><?=$wrg->tanggal?></td>
										<td><?= $wrg->hasil?></td>
										<td><?= $wrg->validasi?></td>
										<td>
											<a href="<?php echo base_url('a/survey/edit/').$wrg->id ?>" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true" title="Edit"></i></a>
											<a href="<?php echo base_url('a/survey/delete/').$wrg->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
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
		Copyright &copy; 2020 <div class="bullet"></div> Sistem Informasi Pendaftaran Menara Telekomunikasi
	</div>
</footer>
