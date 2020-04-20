<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data perusahaan</h1>
		</div>

		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data perusahaan</h2>
					<p class="section-lead">
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('kasi/perusahaan/insert') ?>"
										enctype="multipart/form-data">
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
												Perusahaan</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="nama"
													placeholder="Masukkan Nama Perusahaan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="alamat"
													placeholder="Masukkan Alamat Perusahaan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kota</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="kota"
													placeholder="Masukkan Kota" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No
												Telp</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="no_telp"
													placeholder="Masukkan No Telepon" required>
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
