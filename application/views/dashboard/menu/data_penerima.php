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
				<span class="status-type">Data Penerima BANSOS UMA</span>
			</div>

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
											<th style="width: 20%">Nik</th>
											<th>Nama</th>
											<th style="width: 10%">Status</th>
											<th style="width: 6%">Photo</th>
									</thead>
									<tbody>

										<?php
										foreach ($penerima as $row) {
										?>

											<tr>
												<td><?php echo $row->nik ?></td>
												<td><?php echo $row->nama ?></td>
												<td>
												<?php echo '
													<span class="badge bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Permohanan diterima dan berhak menerima Bansos">' . $row->status_berkas . '</span>'; ?>
												</td>
												<td> <img style="width: 70px; height:70px; margin-top:-30%;" data-jarallax-element="-30" src="<?php echo base_url('asset/gambar/') . $row->poto ?>" alt="..."></td>
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
