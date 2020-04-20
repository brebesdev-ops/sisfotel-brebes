<div id="app">
	<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<ul class="navbar-nav mr-3">
					<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
				</ul>
				<ul class="navbar-nav navbar-right ml-auto mr-1">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
						<?php if ($this->session->userdata('role') === '1') {  ?>	
							<img alt="image" src="<?= base_url('assets/backend/img/avatar/').$superadmin['img']?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '2') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/foto_user/default.png')?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '3') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/foto_user/default.png')?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '4') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/foto_user/default.png')?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '5') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/foto_user/default.png')?>" class="rounded-circle mr-1">
						<?php } else { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/foto_user/default.png')?>" class="rounded-circle mr-1">
						<?php } ?>
						

						<div class="d-sm-none d-lg-inline-block">
							<?php if ($this->session->userdata('role') === '1') {  ?>	
								<?= $superadmin['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '2') { ?>
								<?= $petugas['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '3') { ?>
								<?= $kepala['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '4') { ?>
								<?= $kabid['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '5') { ?>
								<?= $kasi['name'] ?>
							<?php } else { ?>
								<?= $pendaftar['nama'] ?>
							<?php } ?>
						</div>
						<div class="dropdown-menu dropdown-menu-right">
							<?php if ($this->session->userdata('role') === '1') {  ?>	
								<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							<?php } elseif ($this->session->userdata('role') === '2') { ?>
								<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							<?php } elseif ($this->session->userdata('role') === '3') { ?>
								<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							<?php } elseif ($this->session->userdata('role') === '4') { ?>
								<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							<?php } elseif ($this->session->userdata('role') === '5') { ?>
								<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							<?php } else{ ?>
								<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							<?php } ?>
						</div>
					</li>
				</ul>
			</nav>
