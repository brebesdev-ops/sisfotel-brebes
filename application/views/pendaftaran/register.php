<div id="app">
	<div id="app">
		<section class="section">
			<div class="container mt-4">
				<div class="row">
					<div
						class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<a href="<?php echo site_url('');?>">
							<center><img src="<?php echo base_url('assets/frontend/img/2logokominfo.png');?>"
									width="90%" max alt=""></center>
						</a>
						<div class="card card-primary mt-4">
							<div class="card-header">
								<h4>SILAHKAN REGISTER</h4>
							</div>
							<div class="card-body">
								<?php if($this->session->flashdata('failed')) { ?>
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"
										aria-hidden="true">&times;</button>
									<?php echo $this->session->flashdata('failed'); ?>
								</div>
								<?php } ?>
								<form method="POST" action="<?= site_url('pendaftaran/proses')?>"
									class="needs-validation" novalidate="">

									<div class="form-group">
										<label>Perusahaan</label>
										<select name="id_perusahaan" id="" class="form-control">
											<?php
													// var_dump($petugas); die();
													foreach($perusahaan as $ptg){ ?>
											<option value="<?= $ptg->id?>"><?= $ptg->nama?></option>
											<?php }?>
										</select>
										<div class="invalid-feedback">
											Please fill in your Company
										</div>
									</div>
									<div class="form-group">
										<label for="nama">Nama</label>
										<input id="nama" type="text" class="form-control" name="nama" tabindex="1"
											required autofocus>
										<div class="invalid-feedback">
											Please fill in your Name
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="email" tabindex="1"
											required autofocus>
										<div class="invalid-feedback">
											Please fill in your email
										</div>
									</div>
									<div class="form-group">
										<label for="no_telp">No Telp</label>
										<input id="no_telp" type="text" class="form-control" name="no_telp" tabindex="1"
											required autofocus>
										<div class="invalid-feedback">
											Please fill in your No Telp
										</div>
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input id="alamat" type="text" class="form-control" name="alamat" tabindex="1"
											required autofocus>
										<div class="invalid-feedback">
											Please fill in your No Telp
										</div>
									</div>
									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
										</div>
										<input id="password" type="password" class="form-control" name="password"
											tabindex="2" required>
										<div class="invalid-feedback">
											please fill in your password
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block"
											tabindex="4">
											Register
										</button>
									</div>
									<p>Sudah Punya Akun? <a href="<?= base_url()?>pendaftar/masuk">Login</a> </p>
								</form>
							</div>
						</div>

						<div class="simple-footer">
							Copyright &copy; DINKOMINFOTIK 2020
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
