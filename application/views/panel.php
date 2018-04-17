<body>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				   <table class="table table-hover tabTop" >
      <tr align="center">
        <th class="col-md-0">Numb.</th>
        <th class="col-md-0">ID</th>
        <th class="col-md-0">Title</th>
        <!-- <th class="col-md-0">Picture</th> -->
        <th class="col-md-0">Posted on</th>
        <th class="col-md-0">Option</th>
      </tr>
      <?php 
        $no=1;
        foreach($query as $b){
      ?>
        <tr align="center">
          <td><?php echo $no++ ?></td>
          <td><?php echo $b->id; ?></td>
          <td><?php echo $b->judul; ?></td>
          <!-- <td><?php echo substr($b->isi, 0, 20) . '...'; ?></td> -->
<!--           <td><img style='width:100px;height:150px' src="<?php echo base_url().'assets/img/'?><?php echo $b->gambar; ?>"></td> -->
          <td><?php echo $b->tanggal; ?></td>

          <td>
            <a href="Panel/edit/<?php echo $b->id; ?>"  class="btn btn-primary">
              <span class="fa fa-edit">  Edit</span>
            </a>
            <a href="<?php echo base_url()."Panel/hapus/".$b->id ?> " onClick="return confirm('Delete this articel?')"  class="btn btn-danger">
              <span class="fa fa-trash">  Delete</span>
            </a>
          </td>
        </tr>   
        <?php 
      }
      ?>
    </table>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a style=" margin-bottom:20px" href="Panel/tambah" class="btn btn-info col-md-2 test"><span class="fa fa-plus"> Tambah Artikel</span></a>
			</div>
		</div>
	</div>

</body>