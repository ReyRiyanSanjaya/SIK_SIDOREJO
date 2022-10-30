<style>
	.form-group {
		margin-bottom: 0rem !important;
		text-align: left !important;
	}

	.form-label {
		margin-bottom: 0rem !important;
		font-weight: 800 !important;
		font-size: 14px !important;
	}

	#datatable>tbody>tr>td {
		font-size: 14px !important;
		padding: 0px 6px 0px 0px !important;
	}

	#datatable>tbody>tr>td.poto {
		padding: 9px !important;
	}
</style>

<!-- MODALS -->
<div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="modalSignInHeading" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body bg-light text-center">

				<!-- Close -->
				<button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>

				<!-- Heading -->
				<h1 class="mb-4" id="modalSignInHeading">
					Masukan Data
				</h1>

				<!-- Form -->
				<form class="row g-lg-3" enctype="multipart/form-data" action="<?php echo base_url('admin/tambah_data_penduduk') ?>" method="post">
					<!-- Email -->
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan NIK</label>
							<input class="form-control bg-white" name="nik" type="text" placeholder="Nik" require>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan No KK</label>
							<input class="form-control bg-white" name="no_kk" type="text" placeholder="No KK" require>
						</div>
					</div>


					<div class="col-md-12">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan Nama</label>
							<input class="form-control bg-white" name="nama" type="text" placeholder="Nama" require>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan TTL</label>
							<input class="form-control bg-white" name="ttl" type="text" placeholder="Tempat, Tanggal Lahir" require>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan Kelamin</label>
							<input class="form-control bg-white" name="kelamin" type="text" placeholder="Jenis Kelamin" require>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan Agama</label>
							<input class="form-control bg-white" name="agama" type="text" placeholder="Agama" require>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan Alamat</label>
							<input class="form-control bg-white" name="alamat" type="text" placeholder="Alamat" require>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan Status Nikah</label>
							<input class="form-control bg-white" name="status_nikah" type="text" placeholder="Status" require>
						</div>
					</div>



					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Masukan Pekerjaan</label>
							<input class="form-control bg-white" name="pekerjaan" type="text" placeholder="Pekerjaan" require>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="formFile" class="form-label">Masukan Photo</label>
							<input class="form-control bg-white" name="photo" type="file" placeholder="photo" require>
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
				<span class="status-number"><span data-countup='{"startVal": 1000000}' data-to="<?php echo $this->db->count_all_results('data_penduduk'); ?>"></span></span>
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
											<th>No KK</th>
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
												<td><a href="<?php echo base_url('/admin/tampil_data_warga') ?>/<?php echo $row->nik ?>" rel="noopener noreferrer">
														<?php echo $row->nik ?>
													</a></td>
												<td><?php echo $row->no_kk ?></td>
												<td><?php echo $row->nama ?></td>
												<td><?php echo $row->ttl ?></td>
												<td><?php echo $row->kelamin ?></td>
												<td><?php echo $row->alamat ?></td>
												<td><?php echo $row->agama ?></td>
												<td><?php echo $row->status_nikah ?></td>
												<td><?php echo $row->pekerjaan ?></td>
												<td class="poto"> <img class="rounded" style="width: 70px; height:70px; margin-top:-30%;" data-jarallax-element="-30" src="<?php echo base_url('berkas/penduduk/') . $row->photo ?>" alt="..."></td>


												<!-- tombol aksi  -->
												<td> <a class='btn btn-info btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ubah Data Warga" href="<?php echo base_url('/admin/edit_data_penduduk') ?>/<?php echo $row->nik ?>">
														<i class="fas fa-user-edit"></i></i>
													</a>
													<a class='btn btn-danger btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Data" href="<?php echo base_url('/admin/delete_data_penduduk') ?>/<?php echo $row->nik ?>">
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
