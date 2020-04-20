<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data permohonan</h1>
		</div>

		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data permohonan</h2>
					<p class="section-lead">
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('pendaftar/permohonan/insert') ?>"
										enctype="multipart/form-data">

										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Surat Permohonan</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="no_surat_pmhn"
													placeholder="Masukkan Nomor Surat Permohonan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Site ID</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="site_id"
													placeholder="Masukkan Site ID" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Site Name</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="site_name"
													placeholder="Masukkan Site Name" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tinggi Tower</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="tinggi_tower"
													placeholder="Masukkan Tinggi Tower" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat Tower</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="alamat_tower"
													placeholder="Masukkan Alamat Tower" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Di Bangunn Tanggal</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="dibangun_tanggal"
													placeholder="Masukkan Di Bangunn Tanggal" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Koordinat Longitude</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="koordinat_longitude"
													placeholder="Masukkan Koordinat Longitude" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Koordinat Latitude</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="koordinat_latitude"
													placeholder="Masukkan Koordinat Latitude" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pemilik Tanah</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="pemilik_tanah"
													placeholder="Masukkan Pemilik Tanah" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Batas Utara</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="batas_utara"
													placeholder="Masukkan Batas Utara" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Batas Timur</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="batas_timur"
													placeholder="Masukkan Batas Timur" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Batas Selatan</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="batas_selatan"
													placeholder="Masukkan Batas Selatan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Batas Barat</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="batas_barat"
													placeholder="Masukkan Batas Barat" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lama Sewa</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="lama_sewa"
													placeholder="Masukkan Lama Sewa" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Operator Pengguna Menara</label>
											<div class="col-sm-12 col-md-7">
												<input type="text" class="form-control" name="operator_pengguna"
													placeholder="Masukkan Operator Pengguna Menara" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Permohonan Pendirioan Menara Telekomunikasi</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="srt_mhn_pendirian"
													placeholder="Surat Permohonan Pendirioan Menara Telekomunikasi" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">KTP Pemohon</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="ktp_pmhn"
													placeholder="Masukan KTP Pemohon" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Kuasa Perwakilan</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="srt_kuasa"
													placeholder="Masukan Surat Kuasa Perwakilan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pernyataan Telah Diadakan Sosialisi</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="p_sosialisi"
													placeholder="Masukan Pernyataan Telah Diadakan Sosialisi" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Perjanjian Sewa Menyewa Lahan</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="sp_sewa_lahan"
													placeholder="Masukan Surat Perjanjian Sewa Menyewa Lahan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Pernyataan Tanah Tidak Dalam Sengketa</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="sp_tanah_tdk_sengketa"
													placeholder="Masukan Surat Pernyataan Tanah Tidak Dalam Sengketa" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Permohonan Izin Tempat Usaha</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="izin_usaha"
													placeholder="Masukan Permohonan Izin Tempat Usaha" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rekomendasi Kades</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="r_kades"
													placeholder="Masukan Rekomendasi Kades" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rekomendasi Camat</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="r_camat"
													placeholder="Masukan Rekomendasi Camat" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Jaminan Keamanan Tower</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="sjk_tower"
													placeholder="Masukan Surat Jaminan Keamanan Tower" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berita Acara Kesepakatan</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="bak"
													placeholder="Masukan Berita Acara Kesepakatan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Pernyataan Tidak Keberatan</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="sptk"
													placeholder="Masukan Surat Pernyataan Tidak Keberatan" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Persetujuan Keluarga</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="spk"
													placeholder="Masukan Surat Persetujuan Keluarga" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Pernyataan Akses Jalan</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="spaj"
													placeholder="Masukan Surat Pernyataan Akses Jalan" required>
											</div>
										</div>

										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Pernyataan Boleh Bangun</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="spbb"
													placeholder="Masukan Surat Pernyataan Boleh Bangun" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Pernytaan Pemilik Tanah</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="spptb "
													placeholder="Masukan Surat Pernytaan Pemilik Tanah" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Pernyataan Pengembalian</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="spps"
													placeholder="Masukan Surat Pernyataan Pengembalian" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kartu Keluarga</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="kk"
													placeholder="Masukan Kartu Keluarga" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sertifikat Tanah FC</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="stfc"
													placeholder="Masukan Sertifikat Tanah FC" required>
											</div>
										</div>
										<div class="form-group row mb-4">
											<label
												class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pajak PBB</label>
											<div class="col-sm-12 col-md-7">
												<input type="file" class="form-control" name="ppbb"
													placeholder="Masukan Pajak PBB" required>
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
