<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand col-xl-12">
			<a href="<?= base_url('') ?>">
				<img src="<?php echo base_url('assets/frontend/img/2logokominfo.png');?>" width="90%" max alt="">
			</a>
			<!-- <img alt="image" class="col-md-8 rounded-circle mr-1" src="<?= base_url('assets/backend/img/avatar/').$this->session->userdata('img')?>">	 -->
		</div>
		<div class="sidebar-brand sidebar-brand-sm col-md-13">
			<a href="<?= base_url('') ?>">
				<img src="<?= base_url('assets/frontend/img/logokominfo.png');?>" width="100%" alt="">
			</a>
		</div> <br><br><br><br>
		<?php if ($this->session->userdata('role') === '1') {  ?>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li><a class="nav-link" href="<?= base_url('sa/dashboard') ?>"><i class="fas fa-home"></i>
					<span>Dashboard</span></a></li>

			<li class="menu-header">Master Data</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-user-tie"></i> <span>Petugas</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?= base_url('a/petugas')?>"></i> <span>Data Petugas</span></a></li>
					<li><a class="nav-link" href="<?= base_url('a/berita')?>"></i> <span>Data Pemohon</span></a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-check"></i> <span>Survey</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?= base_url('a/keuangan')?>"><span>Data Survei</span></a></li>
					<li><a class="nav-link" href="<?= base_url('a/pengajuan')?>"><span>Data Rekomendasi </span></a></li>
				</ul>
			</li>


			<li class="menu-header">Setting</li>
			<li><a class="nav-link" href="<?= base_url('sa/profile/edit') ?>"><i class="fas fa-user-edit"></i>
					<span>Edit Profil</span></a></li>
			<li><a class="nav-link" href="<?= base_url('sa/profile/changepassword') ?>"><i class="fas fa-lock"></i>
					<span>Ubah Password</span></a></li>
			<li><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i>
					<span>Logout</span></a></li>


			<?php } elseif ($this->session->userdata('role') === '2') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('petugas/dashboard') ?>"><i class="fas fa-home"></i>
						<span>Dashboard</span></a></li>
				<li><a class="nav-link" href="<?= base_url('petugas/survey') ?>"><i class="fas fa-envelope"></i>
						<span>Survey</span></a></li>
			</ul>
			<?php } elseif ($this->session->userdata('role') === '3') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('kepala/dashboard') ?>"><i class="fas fa-home"></i>
						<span>Dashboard</span></a></li>

				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?= base_url('kepala/permohonan') ?>"><i
							class="fas fa-file-signature"></i>
						<span>Data Permohonan</span></a></li>

				<li class="menu-header">Setting</li>
				<!-- <li><a class="nav-link" href="<?= base_url('j/profile/edit') ?>"><i class="fas fa-user-edit"></i> <span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('j/profile/changepassword') ?>"><i class="fas fa-lock"></i> <span>Ubah Password</span></a></li> -->
				<li><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i>
						<span>Logout</span></a></li>
			</ul>
			<?php } elseif ($this->session->userdata('role') === '4') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('kabid/dashboard') ?>"><i class="fas fa-home"></i>
						<span>Dashboard</span></a></li>

				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?= base_url('kabid/permohonan') ?>"><i class="fas fa-file-signature"></i>
						<span>Data Permohonan</span></a></li>

				<li class="menu-header">Setting</li>
				<li><a class="nav-link" href="<?= base_url('rt/profile/edit') ?>"><i class="fas fa-user-edit"></i>
						<span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('rt/profile/changepassword') ?>"><i class="fas fa-lock"></i>
						<span>Ubah Password</span></a></li>
				<li><a class="nav-link" href="<?= base_url('auth/logout_rt')?>"><i class="fas fa-sign-out-alt"></i>
						<span>Logout</span></a></li>
			</ul>
			<?php } elseif ($this->session->userdata('role') === '5') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('kasi/dashboard') ?>"><i class="fas fa-home"></i>
						<span>Dashboard</span></a></li>

				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?= base_url('kasi/permohonan') ?>"><i class="fas fa-file-signature"></i>
						<span>Data Permohonan</span></a></li>
				<li><a class="nav-link" href="<?= base_url('kasi/petugas') ?>"><i class="fas fa-file-signature"></i>
						<span>Data Petugas</span></a></li>
				<li><a class="nav-link" href="<?= base_url('kasi/survey') ?>"><i class="fas fa-envelope"></i>
						<span>Survey</span></a></li>
				<li><a class="nav-link" href="<?= base_url('kasi/perusahaan') ?>"><i class="fas fa-file-signature"></i>
						<span>Data Perusahaan</span></a></li>

				<li class="menu-header">Setting</li>
				<li><a class="nav-link" href="<?= base_url('kasi/profile/edit') ?>"><i class="fas fa-user-edit"></i>
						<span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('kasi/profile/changepassword') ?>"><i
							class="fas fa-lock"></i>
						<span>Ubah Password</span></a></li>
				<li><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i>
						<span>Logout</span></a></li>
			</ul>
			<?php } else { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('pendaftar/dashboard') ?>"><i class="fas fa-home"></i>
						<span>Dashboard</span></a></li>

				<li class="menu-header">Master Data</li>

				<li class="nav-item dropdown">
					<a href="#" class="nav-link has-dropdown"><i class="fas fa-file-upload"></i>
						<span>Permohonan</span></a>
					<ul class="dropdown-menu">

						<li><a class="nav-link" href="<?= base_url('pendaftar/permohonan')?>"><span>Data
									Permohonan</span></a>
						</li>
						<li><a class="nav-link" href="<?= base_url('a/pengajuan')?>"><span>Data Pernohonan
									(Pending)</span></a></li>

					</ul>
				</li>

				<li class="menu-header">Setting</li>
				<!-- <li><a class="nav-link" href="<?= base_url('j/profile/edit') ?>"><i class="fas fa-user-edit"></i> <span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('j/profile/changepassword') ?>"><i class="fas fa-lock"></i> <span>Ubah Password</span></a></li> -->
				<li><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i>
						<span>Logout</span></a></li>
			</ul>
			<?php } ?>
	</aside>
</div>
