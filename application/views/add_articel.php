<body>
	<div class="container">
		<div class="row">
	<div class="col-lg-3">
		
	</div>
	<div class="col-lg-6">
		<form enctype="multipart/form-data" method="post" action="<?php echo base_url('Panel/tambah_aksi'); ?>">
		<legend class="addPegawai">Add New Articel</legend>
		 
		<div class="form-group">
			<input type="text" name="judul" id="judul" class="form-control space8" placeholder="title">
			<select  name="kategori" id="kategori" class="form-control space8" placeholder="category">
				<?php foreach ($kategori as $key): ?>
					<option value="<?php echo $key->id_kategori ?>"><?php echo $key->nama_kategori; ?></option>
				<?php endforeach ?>
			</select>
			<textarea rows="4" name="isi" id="isi" class="form-control space8" placeholder="content"></textarea>			
			<input type="text" name="crtr" id="crtr" class="form-control space8" placeholder="creator">
			<input type="file" name="userfile" size="20" class="space8">			
		</div>
		<i><?php echo validation_errors(); ?></i>
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-lg-3">
		
	</div>			
		</div>
	</div>

</body>