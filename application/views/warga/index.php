<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>

	<section class="pt-6 pt-md-10">
		<div class="container-lg">
			<div class="row align-items-center">
				<div class="text-center text-md-start mt-md-n8" data-aos="fade-up">

					<?= $this->session->flashdata('message'); ?>
					<!-- alert  -->

					<!-- Heading -->
					<h1 class="display-3">
						BANSOS UMA || <span class="text-primary-light text-underline-primary-light d-none d-lg-inline">

							<span data-typed='{"strings": ["SILAHKAN LENGKAPI BERKAS ANDA", "JIKA ANDA SUDAH MELENGKAPI BERKAS, DATA ANDA AKAN DIPROSES"]}'></span></span>
				</div>

			</div>
			<br><br><br>
			<div class="row align-items-center">
				<div class="col-md-6 col-xl-5 text-center text-md-start mt-md-n8" data-aos="fade-up">
					<!-- Buttons -->
					<div class="mb-8 mb-md-0">
						<a class="btn btn-info lift" href="<?php echo base_url(''); ?>warga/Pelengkapan_berkas">
							LENGKAPI BERKAS ANDA
						</a>

					</div>

				</div>

			</div>

			<div class="col-md-5">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player style="position:absolute; left:70%; top:-295px; width: 900px; height: 900px;" src="https://assets4.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
			</div>

		</div>


	</section>


</div>
</div>
