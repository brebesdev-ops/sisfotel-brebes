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
			<?php }?> <div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>No Surat Permohonan</th>
										<th>Site ID</th>
										<th>Site Name</th>
										<th>STATUS KASI</th>
										<th>STATUS KABID</th>
										<th>STATUS KEPALA</th>
										<th>Aksi</th>
									</tr>
									<?php
									$no=1;
									foreach($permohonan as $wrg) : ?>
									<?php if ($this->session->userdata('id') === $wrg->id_pendaftar ) {  ?>
									<td><?= $no++?></td>
									<td><?= $wrg->no_surat_pmhn?></td>
									<td><?= $wrg->site_id?></td>
									<td><?= $wrg->site_name?></td>
									<td><?php if($wrg->is_approve_kasi === "MENUNGGU"){ echo "<p class='btn btn-warning'>MENUNGGU</p>";} else if($wrg->is_approve_kasi === "SETUJU"){ echo "<p class='btn btn-success'>SETUJU</p>";}else if($wrg->is_approve_kasi === "TOLAK"){ echo "<p class='btn btn-danger'>TOLAK</p>";}?>
									</td>
									<td><?php if($wrg->is_approve_kabid === "MENUNGGU"){ echo "<p class='btn btn-warning'>MENUNGGU</p>";} else if($wrg->is_approve_kabid === "SETUJU"){ echo "<p class='btn btn-success'>SETUJU</p>";}else if($wrg->is_approve_kabid === "TOLAK"){ echo "<p class='btn btn-danger'>TOLAK</p>";}?>
									</td>
									<td><?php if($wrg->is_approve_kepala === "MENUNGGU"){ echo "<p class='btn btn-warning'>MENUNGGU</p>";} else if($wrg->is_approve_kepala === "SETUJU"){ echo "<p class='btn btn-success'>SETUJU</p>";}else if($wrg->is_approve_kepala === "TOLAK"){ echo "<p class='btn btn-danger'>TOLAK</p>";}?>
									</td>

									<?php if($wrg->is_approve_kasi === "SETUJU" && $wrg->is_approve_kabid === "SETUJU" && $wrg->is_approve_kepala === "SETUJU"){?>
									<td><?php ?> <a href="<?php echo base_url('pendaftar/permohonan/print/').$wrg->id ?>" class="btn btn-info">Cetak</a> </td>
									<?php } else{ ?>
									<td><?php ?> <a href="" class="btn btn-info disabled">Cetak</a> </td>

									<?php
									} ?>
									<?php } else if($this->session->userdata('role')) { ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $wrg->no_surat_pmhn?></td>
										<td><?= $wrg->site_id?></td>
										<td><?= $wrg->site_name?></td>
										<td><?=$wrg->tinggi_tower?></td>
										<td><?=$wrg->alamat_tower?></td>
										<td><?=$wrg->dibangun_tanggal?></td>

										<?php } ?>
										<?php if ($this->session->userdata('role') === null) {  ?>

										<?php } else if($this->session->userdata('role') === '3'){?>
										<td><a href="<?php echo base_url('kepala/permohonan/detail/').$wrg->id ?>"
												class="btn btn-success"><i class="fas fa-book" aria-hidden="true"
													title="Detail"></i></a>
											<a href="<?php echo base_url('pendaftar/permohonan/delete/').$wrg->id ?>"
												class="btn btn-danger"
												onclick="javascript: return confirm('Anda yakin hapus ?')"><i
													class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a> </td>
										</td>
										<?php } else if($this->session->userdata('role') === '4'){?>
										<td> <a href="<?php echo base_url('kabid/permohonan/detail/').$wrg->id ?>"
												class="btn btn-success"><i class="fas fa-book" aria-hidden="true"
													title="Detail"></i></a>
											<a href="<?php echo base_url('pendaftar/permohonan/delete/').$wrg->id ?>"
												class="btn btn-danger"
												onclick="javascript: return confirm('Anda yakin hapus ?')"><i
													class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a></td>
										<?php } else if($this->session->userdata('role') === '5'){?>
										<td> <a href="<?php echo base_url('kasi/permohonan/detail/').$wrg->id ?>"
												class="btn btn-success"><i class="fas fa-book" aria-hidden="true"
													title="Detail"></i></a>
											<a href="<?php echo base_url('pendaftar/permohonan/delete/').$wrg->id ?>"
												class="btn btn-danger"
												onclick="javascript: return confirm('Anda yakin hapus ?')"><i
													class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a></td>
										<?php }?>



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
