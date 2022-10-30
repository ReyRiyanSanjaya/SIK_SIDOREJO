<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>


	<form enctype="multipart/form-data" action="<?php echo base_url('admin/edit_data') ?>" method="post" class="overflow-auto">
		<div class="form-floating mb-3" mt-3>
			<input name="id" class="form-control" placeholder="Password" type="hidden" value="<?php echo $editdatawarga->id_warga; ?>">
		</div>
		<label>Masukan Nik</label>
		<div class="form-floating mb-3" mt-3>
			<input name="nik" class="form-control" placeholder="name@example.com">
			<label for="floatingInput"><?php echo $editdatawarga->nik; ?></label>
		</div>
		<label>Masukan Nama</label>
		<div class="form-floating mb-3" mt-3>
			<input name="nama" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->nama; ?></label>
		</div>
		<button class="btn btn-primary center" type="submit">
			Edit Data
		</button>
	</form>

</div>

</div>
</div>
