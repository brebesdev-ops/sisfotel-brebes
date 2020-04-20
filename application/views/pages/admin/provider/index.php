<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Provider</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('a/provider/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Operator</th>
										<th>Nama PT</th>
										<th>Alamat PT</th>
										<th>No Telp</th>
										<th>Nama PJ</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($provider as $wrg) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $wrg->operator?></td>
										<td><?= $wrg->nama_pt?></td>
										<td><?= $wrg->alamat_pt?></td>
										<td><?=$wrg->no_telp?></td>
										<td><?= $wrg->nama_pj?></td>
										<td>
											<a href="<?php echo base_url('a/provider/edit/').$wrg->id ?>" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true" title="Edit"></i></a>
											<a href="<?php echo base_url('a/provider/delete/').$wrg->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
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
