<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
		<?php foreach ($akun as $brt) : ?>
			<h1>Data Akun <?= $brt->nama_sub ?></h1>
		</div>
		<div class="section-body">
			
			<div class="row">
				<div class="col-12">
					<article class="article article-style-c">
						<div class="container">
							<div class="article-header">
								<div class="article-image" data-background="<?= base_url('assets/backend/img/artikel/').$brt->username?>">
							</div>
						</div>
					</div>
					<div class="article-details">
						<div class="article-category"><a href="#"><?= $brt->provider ?></a> <div class="bullet"></div> 
							<a href="#">
								<?php
									$date 	= $brt->date_register;
									$last	= new DateTime($date);
									$now 	= new DateTime(date('Y-m-d h:i:s', time()));
									$interval = $last->diff($now);

									$years	= (int)$interval->format('%Y');
									$months	= (int)$interval->format('%m');
									$days	= (int)$interval->format('%d');
									$hours	= (int)$interval->format('%H');
									$minutes= (int)$interval->format('%i');

									if ($years > 0) {
										echo $years.' tahun '.$months.' bulan '.$days.' hari '.$hours.' jam '.$minutes.' menit yang lalu.';
									} elseif ($months > 0) {
										echo $months.' bulan '.$days.' hari '.$hours.' jam '.$minutes.' menit yang lalu.';
									} elseif ($days > 0) {
										echo $days.' hari '.$hours.' jam '.$minutes.' menit yang lalu.';
									} elseif ($hours > 0) {
										echo $hours.' jam '.$minutes.' menit yang lalu.';
									} else {
										echo $minutes.' menit yang lalu.';
									}
								?>
							</a>
							</div>
						<div class="article-title">
							<h5><?= $brt->email ?></h5>
						</div>
					</article>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</section>
</div>
