<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p align="center" class="dom">Here's an example of a project<br> we've ever made</p>
		</div>
	</div>
</div>
 <div class="container">
 	<div class="row thems">
 		<div class="col-lg-3">
<!--  			<i><p>Show in Categories</p></i> -->
 			<form method="post" enctype="multipart/form-data" action="<?php echo base_url('Blog/show_category/') ?>">
 				<div class="form-group">
					<select  name="kategori" id="kategori" class="form-control space8" placeholder="category">
						<?php foreach ($kategori as $key): ?>
							<option  value="<?php echo $key->id_kategori ?>"><?php echo $key->nama_kategori; ?></option>
						<?php endforeach ?>
					</select>
 				</div>
 		</div>
 		<div class="col-lg-3">
 					<button type="submit" class="btn btnr">Show</button>
 			</form>
 		</div>
 	</div>
 </div>
<div class="container">
	<?php foreach($query as $data_row) { ?>
		<div class="row them">
			<div class="col-lg-6">
				<a class="cbof" href="Blog/detail/<?php echo $data_row->id; ?> "> 
					<img class="hes" src=" <?php echo base_url().'assets/img/uploads/'?><?php echo $data_row->gambar; ?>">
				</a>
			</div>
			<div class="col-lg-6">
				<h3> <a class="cbof" href="Blog/detail/<?php echo $data_row->id; ?> "><?php echo $data_row->judul; ?></a></h3>
				<p align="right"><i><?php echo $data_row->tanggal ?></i></p>
				<p class="jk" align="justify"><?php echo $data_row->isi ?></p>
				<p align="right"><i> designer : <?php echo $data_row->creator ?></i></p>
			</div>
		</div>
	<?php } ?>	
</div>
