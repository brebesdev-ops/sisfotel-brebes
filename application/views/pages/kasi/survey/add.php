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
									<form method="post" action="<?php echo site_url('kasi/survey/insert') ?>"
										enctype="multipart/form-data">
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pemohon</label>
											<div class="col-sm-12 col-md-7">
												<select name="id_permohonan" id="" class="form-control">
													<?php
													// var_dump($petugas); die();
													foreach($permohonan as $ptg){ ?>
													<option value="<?= $ptg->id?>"><?= $ptg->no_surat_pmhn?></option>
													<?php }?>
												</select>
											</div>
										</div>
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
												<select name="id_petugas" id="" class="form-control">
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
										<input type="text"  name="hasil" vaalue="MENUNGGU"
													placeholder="">
									
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
