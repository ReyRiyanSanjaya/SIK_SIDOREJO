	<!-- MODALS -->
	<div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="modalSignInHeading" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body text-center">

					<!-- Close -->
					<button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>

					<!-- Heading -->
					<h1 class="mb-4" id="modalSignInHeading">
						Tambah Data
					</h1>

					<!-- Form -->
					<form class="mb-6" action="<?php echo base_url('admin/tambah_data_warga'); ?>" method="post">
						<!-- Email -->
						<div class="form-group">
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>

						<div class="form-group">
							<input class="form-control" name="nama" type="text" placeholder="Nama" require>
						</div>

						<div class="form-group">
							<input class="form-control" name="alamat" type="text" placeholder="Alamat" require>
						</div>

						<div class="form-group">
							<input class="form-control" name="photo" type="text" placeholder="Photo" require>
						</div>

						<div class="form-group visually-hidden">
							<input class="form-control" name="status_berkas" type="text" value="belum" placeholder="Photo" require>
						</div>

						<!-- Button -->
						<button class="btn w-100 btn-success" type="submit">
							Tambah Data
						</button>

					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- modal  -->


	<div class="projects-section">
		<div class="projects-section-header">
			<p><?= $title ?></p>

			<?php
			date_default_timezone_set('Asia/Jakarta');
			?>
			<p class="time"><?php echo date('l, d-m-Y'); ?></p>
		</div>

		<div class="projects-section-line">
			<div class="projects-status">
				<div class="item-status">
					<?= $this->session->flashdata('message'); ?>
					<!-- alert  -->
					<span class="status-number"><span data-countup='{"startVal": 1000000}' data-to="<?php echo $this->db->count_all_results('warga'); ?>"></span></span>
					<span class="status-type">Data Masyarakat yang terdaftar</span>
				</div>

			</div>

			<div class="view-actions">
				<a class='btn btn-primary' href="#modalTambahData" data-bs-toggle="modal">Tambah Data Warga</a>
			</div>
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

								<div class="table-responsive">
									<table id="datatable" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<style type="text/css">
												table {
													table-layout: fixed;
													word-wrap: break-word;
												}

												table th,
												table td {
													overflow: hidden;
												}
											</style>
											<tr>
												<th>Nik</th>
												<th>Nama</th>
												<th style="width: 14%">Keterangan</th>
												<th style="width: 10%">Status</th>
												<th style="width: 6%">Photo</th>
												<th style="width: 13%">action</th>
										</thead>
										<tbody>

											<?php
											foreach ($warga as $row) {
											?>

												<tr>
													<td><?php echo $row->nik ?></td>
													<td><?php echo $row->nama ?></td>
													<td style="width: 10%">
														<?php

														$belum = "belum dilengkapi";
														$ditolak = "Ditolak";
														$status = $row->status_berkas;

														if ($status == $belum) {
															echo '<span class="badge bg-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="belum di lengkapi berkasnya">' . $row->status_berkas . '</span>';
														} else if ($status == $ditolak) {
															echo '<span class="badge bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="belum di lengkapi berkasnya">' . $row->status_berkas . '</span>';
														} else {
															echo '<span class="badge bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="sudah di lengkapi berkasnya">' . $row->status_berkas . '</span>';
														}

														?>
													</td>
													<td> <img style="width: 70px; height:70px; margin-top:-30%;" data-jarallax-element="-30" src="<?php echo base_url('asset/gambar/') . $row->poto ?>" alt="..."></td>


													<td style="width: 20%" style="width: 30%"> <a class='btn btn-info btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ubah Data Warga" href="<?php echo base_url('/admin/edit_data_warga') ?>/<?php echo $row->nik ?>">
															<i class="fas fa-user-edit"></i></i>
														</a>
														<a class='btn btn-danger btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Data" href="<?php echo base_url('/admin/delete_data_warga') ?>/<?php echo $row->nik ?>">
															<i class="fas fa-user-slash"></i>
														</a>

														<?php

														$belum = "belum";
														$status = $row->status_berkas;

														if ($status == $belum) {
															echo '<a class="btn btn-primary btn-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Berkas Warga" href="' . base_url('/admin/berkas_warga/') . $row->nik . '"> <i class="fas fa-calendar-check"></i>
															</a>';
														} else {
															echo '<a class="btn btn-success btn-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit data berkas Warga" href="' . base_url('/admin/edit_berkas_warga/') . $row->nik . '"> <i class="fas fa-calendar-check"></i>
															</a>';
														}

														?>
													</td>
												</tr>
											<?php } ?>


										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>




			<script type="text/javascript">
				$(function() {
					$("#datatable").dataTable();
				});
			</script>
		</div>

	</div>
	</div>
