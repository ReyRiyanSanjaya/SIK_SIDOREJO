<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-in" data-aos-delay="150">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner" data-aos="fade-in" data-aos-delay="350">
		<div class="carousel-item active">
			<img src="<?php echo base_url('asset/gambar/p1.png') ?>" class="d-block w-100" alt="..." style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
			<div class="carousel-caption d-none d-md-block" style="bottom: 6rem !important;">
				<div id="intro-caro">
					<h2 class="badge bg-black h6 text-uppercase">ASIK SIDOREJO</h2>
					<p class="badge bg-primary h6 text-uppercase">Sistem Informasi Kependudukan Kelurahan Sidorejo Kecamatan Medan Tembung</p>
				</div>
			</div>

		</div>
		<div class="carousel-item">
			<img src="<?php echo base_url('asset/gambar/p2.png') ?>" class="d-block w-100" alt="..." style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%); ">
			<div class="carousel-caption d-none d-md-block" style="bottom: 6rem !important;">
				<h1 class="badge bg-black h6 text-uppercase">Pelayanan ASIK Instant</h1>
				<p class="badge bg-primary h6 text-uppercase">Dapatkan pelayanan kelurahan secara instant lewat website ASIK SIDOREJO</p>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
<div class="custom-pencarian" data-aos="fade-in" data-aos-delay="250">
	<div class="container-fluid ">
		<h2>Cek Data Anda disini</h2>
		<p>Silahkan masukan NIK KTP dan No KK anda untuk melihat detail data anda
		</p>
		<hr>
	</div>
	<div class="container-fluid">
		<form class="row g-3" method="post" action="<?php echo base_url('home/cek_data'); ?>">
			<div class="col">
				<div class="form-floating mb-3">
					<input type="text" name="nik" class="form-control" id="floatingInput" placeholder="1271140102990003">
					<label for="floatingInput">Masukan NIK anda</label>
				</div>
			</div>
			<div class="col">
				<div class="form-floating mb-3">
					<input type="text" name="no_kk" class="form-control" id="floatingInput" placeholder="Harya Syafneldi">
					<label for="floatingInput">Masukan No KK anda</label>
				</div>
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary" data-aos="fade-in" data-aos-delay="350">Cek
					Pendaftaran</button>
			</div>
		</form>
	</div>

</div>
<hr>
