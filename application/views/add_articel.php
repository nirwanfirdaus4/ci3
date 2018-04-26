<body>
	<div class="container">
		<div class="row">
	<div class="col-lg-3">
		
	</div>
	<div class="col-lg-6">
		<form enctype="multipart/form-data" method="post" action="<?php echo base_url('Panel/tambah_aksi'); ?>">
		<legend class="addPegawai">Add New Articel</legend>
		
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="judul" id="judul" class="form-control" placeholder="title">
			<label for="">Content</label>
			<input type="text" name="isi" id="isi" class="form-control" placeholder="content">
			<label for="">Creator</label>
			<input type="text" name="crtr" id="crtr" class="form-control" placeholder="creator">
			<label>Pictures</label><br>
			<input type="file" name="userfile" size="20">			
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