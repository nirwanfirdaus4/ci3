<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2><?= $data['judul']; ?></h2>
			<hr>
			<p><i>Posted on <?= $data['tanggal']; ?> </i></p>
			<hr>

			<center><img class="joker" src="<?php echo base_url('assets/img/uploads/'. $data['gambar']) ?>"></center>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<center><p><?= $data['isi'] ?></p></center>			
		</div>		
	</div>
</div>	

</body>