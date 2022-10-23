

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
					<span class="status-type">Data Masyarakat yang telah mengisi berkas</span>
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
												<th>Nik</th>
												<th>Nama</th>
												<th>Status Berkas</th>
												<th style="width: 6%">Photo</th>
												<th style="width: 13%">Berkas</th>
										</thead>
										<tbody>
												
											<?php
											foreach($berkas as $item):
												?>
											<tr>
													<td><?php echo $item['nik'] ?></td>
													<td><?php echo $item['nama'] ?></td>
													<td><span class="badge bg-success"><?php echo $item['status_berkas'] ?></span></td>
													<td> <img style="width: 70px; height:70px; margin-top:-30%;" data-jarallax-element="-30" src="<?php echo base_url('berkas/') . $item['poto'] ?>" alt="..."></td>
													</td>
													<!-- tombol aksi  -->
													<td style="width: 20%" style="width: 30%"> <a class='btn btn-primary btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Lihat Berkas" href="<?php echo base_url('/admin/acc') ?>/<?php echo  $item['id_data'] ?>">
															<i class="fas fa-file-export"></i>
														</a>
													</td>

												<?php
										 	endforeach;
											?>

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
