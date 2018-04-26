<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p align="center" class="dom">Here's an example of a project<br> we've ever made</p>
		</div>
	</div>
</div>

<div class="container">
	<?php foreach($query as $data_row) { ?>
		<div class="row them">
			<div class="col-lg-6">
				<img class="hes" src=" <?php echo base_url().'assets/img/uploads/'?><?php echo $data_row->gambar; ?>">
			</div>
			<div class="col-lg-6">
				<h3> <a href="Blog/detail/<?php echo $data_row->id; ?> "><?php echo $data_row->judul; ?></a></h3>
				<p align="right"><i><?php echo $data_row->tanggal ?></i></p>
				<p class="jk" align="justify"><?php echo $data_row->isi ?></p>
				<p align="right"><i> designer : <?php echo $data_row->creator ?></i></p>
			</div>
		</div>
	<?php } ?>	
</div>
