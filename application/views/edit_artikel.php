<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				
			</div>
			<div class="col-lg-6">
				<?php foreach ($artikel as $key){ ?>
				<form enctype="multipart/form-data" method="post" action="<?php echo base_url('Panel/update'); ?>">
				<legend class="addPegawai">Edit Your Articel</legend>
				<?php echo validation_errors(); ?>
				<div class="form-group">

					<label for="">Title</label>
					<input type="hidden" name="id" value="<?php echo $key->id ?>">
					<input type="text" name="judul" id="judul" class="form-control" value="<?php echo $key->judul ?>" placeholder="title">

					<label for="">Content</label>
					<input type="text" name="isi" id="isi" class="form-control" value="<?php echo $key->isi ?>" placeholder="content">

					<label for="">Creator</label>
					<input type="text" name="crtr" id="crtr" class="form-control" value="<?php echo $key->creator ?>" placeholder="creator">
				</div>
		<!-- 		<div class="form-group">
					<label>Pictures</label><br>
					<input type="file" name="userfile" size="20">
				</div> -->
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-lg-3">
				<?php } ?>
			</div>			
		</div>
	</div>
</body>