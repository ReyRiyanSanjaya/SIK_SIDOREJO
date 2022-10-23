<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>

	<div class="projects-section-line">

	</div>


	<div class="page-wrapper overflow-auto">
		<!-- ============================================================== -->
		<!-- Container fluid  -->
		<!-- ============================================================== -->
		<div class="container-fluid">
			<!-- ============================================================== -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-block">

							<section class="section about-section gray-bg" id="about">
								<div class="container">
									<div class="row align-items-center flex-row-reverse">
										<div class="col-lg-6">
											<div class="about-text go-to">
												<h3 class="alert alert-primary sticky-top">Data Berkas Warga</h3>

												<div class=" row about-list">
													<div class="col">
														<div class="media">
															<label>Nama :</label>
															<p><?php echo $berkas->nama ?></p>
														</div>
														<div class="media">
															<label>NIK KTP</label>
															<p><?php echo $berkas->nik ?></p>
														</div>
														<div class="media">
															<label>Alamat Domisili :</label>
															<p><?php echo $berkas->alamat ?></p>
														</div>
														<div class="media">
															<label>Status Berkas :</label>
															<p><?php echo $berkas->status_berkas ?></p>
														</div>
														<div class="media">
															<label>Pekerjaan :</label>
															<p><?php echo $berkas->pekerjaan ?></p>
														</div>
														<div class="media">
															<label>Pendapatan :</label>
															<p><?php
																$pendapatan = $berkas->pendapatan;

																switch ($pendapatan) {
																	case "1":
																		echo "Dibawah Rp.500.000";
																		break;
																	case "2":
																		echo "Dibawah Rp.1.000.000";
																		break;
																	case "3":
																		echo "Dibawah Rp.2.000.000";
																		break;
																	default:
																		echo "Dibawah Rp.3.000.000";
																}
																?></p>
														</div>
														<div class="media">
															<label>Jumlah Tanggungan :</label>
															<p><?php echo $berkas->jumlah_anak ?></p>
														</div>
														<div class="media">
															<label>Jumlah Pengeluaran :</label>
															<p><?php
																$pendapatan = $berkas->pengeluaran;

																switch ($pendapatan) {
																	case "1":
																		echo "Dibawah Rp.500.000";
																		break;
																	case "2":
																		echo "Dibawah Rp.1.000.000";
																		break;
																	case "3":
																		echo "Dibawah Rp.2.000.000";
																		break;
																	default:
																		echo "Dibawah Rp.3.000.000";
																}
																?></p>
														</div>
													</div>

												</div>
											</div>
										</div>
										<div class="col-lg-6 sticky-top">
											<div class="about-avatar ">
												<img class="avatar-img rounded" style="width: 500px; height:500px; margin-top: -70%;" data-jarallax-element="-30" src="<?php echo base_url('berkas/') . $berkas->poto ?>" alt="...">
											</div>
										</div>
									</div>
									<div class="counter mt-6">
										<div class="row">
										<a class="col" href="<?php echo base_url('/admin/data_berkas') ?>">
												<div class="col">
													<div class="count-data text-center alert-info rounded">
														<h2 class="">Kembali <i class="fas fa-back"></i></h2>
													</div>
												</div>
											</a>

											<a class="col" href="<?php echo base_url('/admin/penerima') ?>/<?php echo  $pendapatan = $berkas->id_data ?>/Ditolak/Anda Tidak Berhak Mendapatkan Bansos">
												<div class="col">
													<div class="count-data text-center alert-danger rounded">
														<h2 class="">Ditolak <i class="fas fa-back"></i></h2>
													</div>
												</div>
											</a>

											<a class="col" href="<?php echo base_url('/admin/penerima') ?>/<?php echo  $pendapatan = $berkas->id_data ?>/berhak/Anda Berhak Mendapatkan Bansos">
												<div class="col">
													<div class="count-data text-center alert-primary rounded">
														<h2 class="">Berhak <i class="fas fa-back"></i></h2>
													</div>
												</div>
											</a>	
										</div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
