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

					<input type="hidden" name="id" value="<?php echo $key->id ?>">
					<input type="text" name="judul" id="judul" class="form-control space8" value="<?php echo $key->judul ?>" placeholder="title">

					<select  name="kategori" id="kategori" class="form-control space8">
						<?php
							$data['kategori'] = $this->data_crud->getKategori();
						 foreach ($kategori as $key): ?>
							<option value="<?php echo $key->id_kategori ?>"><?php echo $key->nama_kategori; ?></option>
						<?php endforeach ?>
					</select>

					<textarea rows="4" name="isi" id="isi" class="form-control space8" placeholder="content"><?php echo $key->isi ?></textarea>

					<input type="text" name="crtr" id="crtr" class="form-control space8" value="<?php echo $key->creator ?>" placeholder="creator">
				</div>
				<div class="form-group">
					<input type="file" name="userfile" size="20">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-lg-3">
				<?php } ?>
			</div>			
		</div>
	</div>
</body>