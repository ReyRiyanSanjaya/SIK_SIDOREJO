<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>

	<section class="overflow-auto">
		<div class="container-lg">
			<div class="row align-items-center">
				<div class="col" data-aos="fade-up">

					<form enctype="multipart/form-data" action="<?php echo base_url('warga/berkas') ?>" method="post">
						<div class="form-floating mb-3">
							<input name="nik" class="form-control" value="<?php echo $user['nik']; ?>" readonly>
							<label for="floatingInput">Nomor Induk Kependudukan :</label>
						</div>
						<div class="form-floating mb-3">
							<input name="nama" class="form-control" value="<?php echo $user['nama']; ?>" readonly>
							<label for="floatingPassword">Nama :</label>
						</div>
						<div class="form-floating mb-3">
							<input name="alamat" class="form-control">
							<label for="floatingPassword">Alamat :</label>
						</div>
						<div class="form-floating mb-3">
							<input name="pekerjaan" class="form-control">
							<label for="floatingPassword">Pekerjaan :</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="pendapatan">
								<option selected disabled>Masukan Pendapatan Anda</option>
								<option value="1">Dibawah Rp.500.000</option>
								<option value="2">Dibawah Rp.1.000.000</option>
								<option value="3">Dibawah Rp.2.000.000</option>
								<option value="3">Dibawah Rp.3.000.000</option>
							</select>
							<label for="floatingPassword">Pendapatan :</label>
						</div>
						<div class="form-floating mb-3">
							<input name="jumlah_anak" class="form-control">
							<label for="floatingPassword">Jumlah anak :</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="pengeluaran" aria-label=".form-select-lg example">
								<option selected disabled>Masukan Pengeluaran Anda</option>
								<option value="1">Dibawah Rp.500.000</option>
								<option value="2">Dibawah Rp.1.000.000</option>
								<option value="3">Dibawah Rp.2.000.000</option>
								<option value="3">Dibawah Rp.3.000.000</option>
							</select>
							<label for="floatingPassword">Pengeluaran :</label>
						</div>

						<div class="form-floating mb-3">
						<select class="form-select" name="status_rumah">
								<option selected disabled>Beritahu Status Rumah Anda</option>
								<option value="1">Rumah Kontrakan</option>
								<option value="2">Rumah Pribadi</option>
								<option value="3">Tidak Punya Tempat Tinggal</option>
							</select>
							<label for="floatingPassword">Status Rumah :</label>
						</div>

						<div class="form-floating mb-3">
							<input type="file" id="formFile" name="poto" class="form-control" value="<?php echo $user['poto']; ?>">
						</div>

						<button class="btn btn-primary-light lift mt-4" type="submit">
							DAFTAR
						</button>
					</form>

				</div>
				<div class="col-md-5 offset-md-1 offset-xl-2 align-self-start d-none d-md-block">

					<a data-bigpicture='{"imgSrc": "<?php echo base_url('berkas/') . $user['poto'] ?>"}' href="#"
						class="d-block mb-3 mb-md-0">
						<img class="img-fluid rounded-top-start-3 rounded-top-end-3 shadow-lg"
							src="<?php echo base_url('berkas/') . $user['poto'] ?>" alt="..." data-aos="fade-up"
							data-aos-delay="100">
					</a>

				</div>
				<div class="col-md-4 offset-md-n4">

					<!-- Image -->
					<div class="position-relative">

						<!-- Decoration -->
						<div class="position-absolute bottom-end text-primary-light me-n8 mb-n6" data-aos="fade-up"
							data-aos-delay="150">
							<svg width="185" height="186" viewBox="0 0 185 186" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle cx="2" cy="2" r="2" fill="currentColor" />
								<circle cx="22" cy="2" r="2" fill="currentColor" />
								<circle cx="42" cy="2" r="2" fill="currentColor" />
								<circle cx="62" cy="2" r="2" fill="currentColor" />
								<circle cx="82" cy="2" r="2" fill="currentColor" />
								<circle cx="102" cy="2" r="2" fill="currentColor" />
								<circle cx="122" cy="2" r="2" fill="currentColor" />
								<circle cx="142" cy="2" r="2" fill="currentColor" />
								<circle cx="162" cy="2" r="2" fill="currentColor" />
								<circle cx="182" cy="2" r="2" fill="currentColor" />
								<circle cx="2" cy="22" r="2" fill="currentColor" />
								<circle cx="22" cy="22" r="2" fill="currentColor" />
								<circle cx="42" cy="22" r="2" fill="currentColor" />
								<circle cx="62" cy="22" r="2" fill="currentColor" />
								<circle cx="82" cy="22" r="2" fill="currentColor" />
								<circle cx="102" cy="22" r="2" fill="currentColor" />
								<circle cx="122" cy="22" r="2" fill="currentColor" />
								<circle cx="142" cy="22" r="2" fill="currentColor" />
								<circle cx="162" cy="22" r="2" fill="currentColor" />
								<circle cx="182" cy="22" r="2" fill="currentColor" />
								<circle cx="2" cy="42" r="2" fill="currentColor" />
								<circle cx="22" cy="42" r="2" fill="currentColor" />
								<circle cx="42" cy="42" r="2" fill="currentColor" />
								<circle cx="62" cy="42" r="2" fill="currentColor" />
								<circle cx="82" cy="42" r="2" fill="currentColor" />
								<circle cx="102" cy="42" r="2" fill="currentColor" />
								<circle cx="122" cy="42" r="2" fill="currentColor" />
								<circle cx="142" cy="42" r="2" fill="currentColor" />
								<circle cx="162" cy="42" r="2" fill="currentColor" />
								<circle cx="182" cy="42" r="2" fill="currentColor" />
								<circle cx="2" cy="62" r="2" fill="currentColor" />
								<circle cx="22" cy="62" r="2" fill="currentColor" />
								<circle cx="42" cy="62" r="2" fill="currentColor" />
								<circle cx="62" cy="62" r="2" fill="currentColor" />
								<circle cx="82" cy="62" r="2" fill="currentColor" />
								<circle cx="102" cy="62" r="2" fill="currentColor" />
								<circle cx="122" cy="62" r="2" fill="currentColor" />
								<circle cx="142" cy="62" r="2" fill="currentColor" />
								<circle cx="162" cy="62" r="2" fill="currentColor" />
								<circle cx="182" cy="62" r="2" fill="currentColor" />
								<circle cx="2" cy="82" r="2" fill="currentColor" />
								<circle cx="22" cy="82" r="2" fill="currentColor" />
								<circle cx="42" cy="82" r="2" fill="currentColor" />
								<circle cx="62" cy="82" r="2" fill="currentColor" />
								<circle cx="82" cy="82" r="2" fill="currentColor" />
								<circle cx="102" cy="82" r="2" fill="currentColor" />
								<circle cx="122" cy="82" r="2" fill="currentColor" />
								<circle cx="142" cy="82" r="2" fill="currentColor" />
								<circle cx="162" cy="82" r="2" fill="currentColor" />
								<circle cx="182" cy="82" r="2" fill="currentColor" />
								<circle cx="2" cy="102" r="2" fill="currentColor" />
								<circle cx="22" cy="102" r="2" fill="currentColor" />
								<circle cx="42" cy="102" r="2" fill="currentColor" />
								<circle cx="62" cy="102" r="2" fill="currentColor" />
								<circle cx="82" cy="102" r="2" fill="currentColor" />
								<circle cx="102" cy="102" r="2" fill="currentColor" />
								<circle cx="122" cy="102" r="2" fill="currentColor" />
								<circle cx="142" cy="102" r="2" fill="currentColor" />
								<circle cx="162" cy="102" r="2" fill="currentColor" />
								<circle cx="182" cy="102" r="2" fill="currentColor" />
								<circle cx="2" cy="122" r="2" fill="currentColor" />
								<circle cx="22" cy="122" r="2" fill="currentColor" />
								<circle cx="42" cy="122" r="2" fill="currentColor" />
								<circle cx="62" cy="122" r="2" fill="currentColor" />
								<circle cx="82" cy="122" r="2" fill="currentColor" />
								<circle cx="102" cy="122" r="2" fill="currentColor" />
								<circle cx="122" cy="122" r="2" fill="currentColor" />
								<circle cx="142" cy="122" r="2" fill="currentColor" />
								<circle cx="162" cy="122" r="2" fill="currentColor" />
								<circle cx="182" cy="122" r="2" fill="currentColor" />
								<circle cx="2" cy="142" r="2" fill="currentColor" />
								<circle cx="22" cy="142" r="2" fill="currentColor" />
								<circle cx="42" cy="142" r="2" fill="currentColor" />
								<circle cx="62" cy="142" r="2" fill="currentColor" />
								<circle cx="82" cy="142" r="2" fill="currentColor" />
								<circle cx="102" cy="142" r="2" fill="currentColor" />
								<circle cx="122" cy="142" r="2" fill="currentColor" />
								<circle cx="142" cy="142" r="2" fill="currentColor" />
								<circle cx="162" cy="142" r="2" fill="currentColor" />
								<circle cx="182" cy="142" r="2" fill="currentColor" />
								<circle cx="2" cy="162" r="2" fill="currentColor" />
								<circle cx="22" cy="162" r="2" fill="currentColor" />
								<circle cx="42" cy="162" r="2" fill="currentColor" />
								<circle cx="62" cy="162" r="2" fill="currentColor" />
								<circle cx="82" cy="162" r="2" fill="currentColor" />
								<circle cx="102" cy="162" r="2" fill="currentColor" />
								<circle cx="122" cy="162" r="2" fill="currentColor" />
								<circle cx="142" cy="162" r="2" fill="currentColor" />
								<circle cx="162" cy="162" r="2" fill="currentColor" />
								<circle cx="182" cy="162" r="2" fill="currentColor" />
								<circle cx="2" cy="182" r="2" fill="currentColor" />
								<circle cx="22" cy="182" r="2" fill="currentColor" />
								<circle cx="42" cy="182" r="2" fill="currentColor" />
								<circle cx="62" cy="182" r="2" fill="currentColor" />
								<circle cx="82" cy="182" r="2" fill="currentColor" />
								<circle cx="102" cy="182" r="2" fill="currentColor" />
								<circle cx="122" cy="182" r="2" fill="currentColor" />
								<circle cx="142" cy="182" r="2" fill="currentColor" />
								<circle cx="162" cy="182" r="2" fill="currentColor" />
								<circle cx="182" cy="182" r="2" fill="currentColor" />
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>


</div>
</div>
