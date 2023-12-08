<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="bg-secondary rounded h-100 p-4">
	<form action="<?= base_url('admin/caraousel/simpan/') ?>" method="post" enctype='multipart/form-data'>
		<h6 class="card-header">File Input</h6>
		<div class="col mb-3">
			<label class="form-label">Judul</label>
			<input type="text" class="form-control" placeholder="judul foto" name="judul" required />
		</div>
		<div class="mb-3">
			<label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:3)</label>
			<input class="form-control bg-dark" type="file" name="foto">
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>
<?php foreach ($caraousel as $aa){ ?>
<div class="col-md-6 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>">
		<div class="card-body">
			<h5 style="color:black;" class="card-title"><?= $aa['judul'] ?></h5>
			<a href="<?php echo base_url('admin/caraousel/delete_data/'.$aa['foto']); ?>" class="btn btn-sm btn-danger"
				onClick="return confirm('Apakah anda yakin menghapus data ini wong?')"><span
					class="fa fa-trash-alt"></span>
			</a>
		</div>
	</div>
</div>
<?php } ?>