<style>
	.modal {}
</style>

<!-- MODALS -->
<div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="modalSignInHeading" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">

				<!-- Close -->
				<button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>

				<!-- Heading -->
				<h1 class="mb-4" id="modalSignInHeading">
					Masukan Data
				</h1>

				<!-- Form -->
				<form class="row g-lg-3" action="<?php echo base_url('admin/tambah_data_warga'); ?>" method="post">
					<!-- Email -->
					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input class="form-control" name="nik" type="text" placeholder="Nik" require>
						</div>
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
				<span class="status-type">Data Penduduk Kelurahan Sidorejo</span>
			</div>

		</div>

		<div class="view-actions">
			<a class='btn btn-primary' href="#modalTambahData" data-bs-toggle="modal">Tambah Data Penduduk</a>
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

											table.dataTable thead>tr>th.sorting_asc,
											table.dataTable thead>tr>th.sorting_desc,
											table.dataTable thead>tr>th.sorting,
											table.dataTable thead>tr>td.sorting_asc,
											table.dataTable thead>tr>td.sorting_desc,
											table.dataTable thead>tr>td.sorting {
												padding-right: 0px !important;
											}

											.table thead th {
												color: #5546e8;
												font-family: DM Sans, sans-serif;
												font-size: .600rem;
												font-weight: 700;
												letter-spacing: .18em;
												text-transform: uppercase;
											}

											.table th {
												padding: 1rem !important;
											}

											.table tr td {
												font-weight: 1px !important;
											}

											#datatable>tbody>tr>td {
												font-weight: 1px !important;
											}
										</style>
										<tr>
											<th>Nik</th>
											<th>Nama</th>
											<th>TTL</th>
											<th>Jenis Kelamin</th>
											<th>Alamat</th>
											<th>Agama</th>
											<th>Status Nikah</th>
											<th>Pekerjaan</th>
											<th style="width: 6%">Photo</th>
											<th style="width: 13%">action</th>
									</thead>
									<tbody>

										<?php
										foreach ($data_penduduk as $row) {
										?>

											<tr>
												<td><?php echo $row->nik ?></td>
												<td><?php echo $row->nama ?></td>
												<td><?php echo $row->ttl ?></td>
												<td><?php echo $row->kelamin ?></td>
												<td><?php echo $row->alamat ?></td>
												<td><?php echo $row->agama ?></td>
												<td><?php echo $row->status_nikah ?></td>
												<td><?php echo $row->pekerjaan ?></td>
												<td> <img style="width: 70px; height:70px; margin-top:-30%;" data-jarallax-element="-30" src="<?php echo base_url('asset/gambar/') . $row->photo ?>" alt="..."></td>

												<!-- tombol aksi  -->
												<td> <a class='btn btn-info btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ubah Data Warga" href="<?php echo base_url('/admin/edit_data_warga') ?>/<?php echo $row->nik ?>">
														<i class="fas fa-user-edit"></i></i>
													</a>
													<a class='btn btn-danger btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Data" href="<?php echo base_url('/admin/delete_data_warga') ?>/<?php echo $row->nik ?>">
														<i class="fas fa-user-slash"></i>
													</a>

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
