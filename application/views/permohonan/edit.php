<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data permohonan</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Edit Data permohonan</h2>
					<p class="section-lead">
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<?php foreach ($permohonan as $wrg) : ?>
									<form method="post" action="<?php echo site_url('kasi/permohonan/update') ?>" enctype="multipart/form-data">

									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama permohonan</label>
										<div class="col-sm-12 col-md-7">
										<input type="hidden" class="form-control" name="id" value="<?= $wrg->id?>">
											<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama permohonan" required value="<?= $wrg->nama?>" >
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat permohonan</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat permohonan" required value="<?= $wrg->alamat?>">
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kota permohonan</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="kota" placeholder="Masukan Kota permohonan" required value="<?= $wrg->kota?>">
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Telepon</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telepon" required value="<?= $wrg->no_telp?>" >
										</div>
									</div>

									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
										<div class="col-sm-12 col-md-7">
											<button type="submit" class="btn btn-primary">Update Data</button>
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									</div>
								</form>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
