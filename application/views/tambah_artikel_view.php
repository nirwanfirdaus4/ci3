<!DOCTYPE html>
<html>
<head>
	<title>--Mine--</title>
</head>
<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php echo form_open_multipart('artikel/create');?>
		<legend>Tambah Data Artikel</legend>
		<?php echo validation_errors(); ?>
		<div class="form_group">
			<label for=""> Nama </label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Input Filed">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div>
</body>
</html>