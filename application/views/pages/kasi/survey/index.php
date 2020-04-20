<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Survey</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('kasi/survey/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
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
										<th>Action</th>
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
										?></td>										<td><?= $wrg->nomor?></td>
										<td><?= $wrg->hasil?></td>
										<td>
											<a href="<?php echo base_url('kasi/survey/edit/').$wrg->id ?>" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true" title="Edit"></i></a>
											<a href="<?php echo base_url('kasi/survey/delete/').$wrg->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
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
