<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Petugas</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Edit Data Petugas</h2>
					<p class="section-lead">
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<?php foreach ($petugas as $wrg) : ?>
									<form method="post" action="<?php echo site_url('kasi/petugas/update') ?>" enctype="multipart/form-data">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
										<div class="col-sm-12 col-md-7">
											<input type="hidden" class="form-control" name="id" value="<?= $wrg->id?>">
											<input type="text" class="form-control" name="nip" placeholder="Masukkan NIP" value="<?= $wrg->nip?>"  required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required value="<?= $wrg->nama?>" >
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="gol" placeholder="Masukkan Tempat Lahir" required value="<?= $wrg->gol?>">
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="jabatan" placeholder="Masukkan Nama Lengkap" required value="<?= $wrg->jabatan?>" >
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan Survey</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="jab_survey" placeholder="Masukkan Tempat Lahir" required value="<?= $wrg->jab_survey?>">
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
