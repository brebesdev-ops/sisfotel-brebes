<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Survey</h1>
		</div>

		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data Survey</h2>
					<p class="section-lead">
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('a/survey/insert') ?>"
										enctype="multipart/form-data">
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Survey</label>
											<div class="col-sm-12 col-md-7">
												<input type="date" class="form-control" name="tanggal_survey"
													placeholder="Masukkan Tanggal Survey" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Petugas</label>
											<div class="col-sm-12 col-md-7">
												<select name="petugas" id="" class="form-control">
													<?php
													// var_dump($petugas); die();
													foreach($petugas as $ptg){ ?>
													<option value="<?= $ptg->id?>"><?= $ptg->nama?></option>
													<?php }?>
												</select>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="nomor"
													placeholder="Masukkan Nomor" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
											<div class="col-sm-12 col-md-7">
												<input type="date" class="form-control" name="tanggal"
													placeholder="Masukkan Tanggal" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Hasil</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="hasil"
													placeholder="Masukkan Hasil" required>
											</div>
										</div>1
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Validasi</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="validasi"
													placeholder="Masukkan Validasi" required>
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
