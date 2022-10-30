<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>


	<form class="overflow-auto" enctype="multipart/form-data" action="<?php echo base_url('admin/edit_data_p') ?>" method="post">
	<label>Masukan No KK</label>
		<div class="form-floating mb-3" mt-3>
			<input name="no_kk" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->no_kk; ?></label>
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

		<label>Masukan Alamat</label>
		<div class="form-floating mb-3" mt-3>
			<input name="alamat" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->alamat; ?></label>
		</div>

		<label>Masukan Tempat, Tanggal Lahir</label>
		<div class="form-floating mb-3" mt-3>
			<input name="ttl" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->ttl; ?></label>
		</div>

		<label>Masukan Kelamin</label>
		<div class="form-floating mb-3" mt-3>
			<input name="kelamin" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->kelamin; ?></label>
		</div>

		<label>Masukan Agama</label>
		<div class="form-floating mb-3" mt-3>
			<input name="agama" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->agama; ?></label>
		</div>
		
		<label>Masukan Status Nnikah</label>
		<div class="form-floating mb-3" mt-3>
			<input name="status_nikah" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->status_nikah; ?></label>
		</div>

		<label>Masukan Pekerjaan</label>
		<div class="form-floating mb-3" mt-3>
			<input name="pekerjaan" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->pekerjaan; ?></label>
		</div>

		<div class="form-floating mb-3" mt-3>
			<input name="photo" class="form-control" placeholder="Password" type="hidden" value="<?php echo $editdatawarga->photo; ?>">
		</div>

		<div class="form-floating mb-3" mt-3>
			<input name="id" class="form-control" placeholder="Password" type="hidden" value="<?php echo $editdatawarga->id; ?>">
		</div>
		
		<button class="btn btn-primary center" type="submit">
			Edit Data
		</button>
	</form>

</div>

</div>
</div>
