<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>DATA PERMOHONAN AKUN</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Judul</th>
										<th>Status</th>
										<th>Persetujuan</th>
										<th>Tanggal</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($akun as $brt) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $brt->nama_sub?></td>
										<td>
										<?php if ($brt->status === '0') { ?>
											<div class="badges">
												<span class="badge badge-warning">Verfifikasi</span>
											</div>
										<?php } else { ?>
											<div class="badges">
												<span class="badge badge-primary">Terdaftar</span>
											</div>
										<?php } ?>	
										</td>
										<td>
										<?php if ($brt->is_approved === '0') { ?>
											<a href="<?= base_url('a/akun/allow/').$brt->id ?>" class="btn btn-success">Approve</a>
										<?php } else { ?>
											<a href="<?= base_url('a/akun/allow/').$brt->id ?>" class="btn btn-danger">Block</a>
										<?php } ?>	
										</td>
										<td><?= $brt->date_register?></td>
										<td>
											<a href="<?= base_url('a/akun/detail/').$brt->id ?>" class="btn btn-info"><i class="fas fa-eye" aria-hidden="true"></i></a>
											<a href="<?= base_url('a/akun/delete/').$brt->id ?>" title="Hapus" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true"></i></a>
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
