<?php $this->load->view('templates/header');?>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
	<label>
		NAMA :
	</label>
	<input type="text" name="nama" class="form-control" placeholder="Inputkan nama" required value="<?php echo $nama; ?>"> 

		</div>
<div class="form-group">
<label>
	JURUSAN
</label>
	<input type="text" name="jurusan" class="form-control" placeholder="Inputkan Jurusan" required value="<?php echo $jurusan; ?>"" >

	</div>
	<div class="form-group">
	<label>
		AKREDITASI
	</label>
	<input type="text" name="akreditasi" class="form-control" placeholder="Inputkan Akreditasi" required value="<?php echo $akreditasi; ?>"> 

		</div>
		<input type="hidden" name="id_prodi" value="<?php echo $id_prodi ?>">
		<button class="btn btn-primary" type="submit"><?php echo $button; ?> </button>
</form>
<?php $this->load->view('templates/footer');?>
