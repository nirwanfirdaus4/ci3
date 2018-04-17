<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2><?php echo $data['judul'] ?></h2>
			<hr>
			<p><i>Posted on <?php echo $data['tanggal'] ?> </i></p>
			<hr>

			<center><img class="joker" src="<?php echo base_url('assets/img/') ?><?php echo $data['gambar']; ?>"></center>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<center><p><?php echo $data['isi'] ?></p></center>			
		</div>		
	</div>
</div>	

</body>