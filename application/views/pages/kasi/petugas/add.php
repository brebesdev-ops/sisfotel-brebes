<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Petugas</h1>
		</div>

		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data Petugas</h2>
					<p class="section-lead">
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('kasi/petugas/insert') ?>"
										enctype="multipart/form-data">
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIP</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="nip"
													placeholder="Masukkan NIP" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="nama"
													placeholder="Masukkan Nama Petugas" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="gol"
													placeholder="Masukkan Golongan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="jabatan"
													placeholder="Masukkan Jabatan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan Survey</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="jab_survey"
													placeholder="Masukkan Jabatan Survey" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
											<div class="col-sm-12 col-md-7">
												<button type="submit" class="btn btn-primary">Tambah Data</button>
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
