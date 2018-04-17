	<?php echo form_open_multipart(base_url('Panel/edit_aksi')); ?> 
	<div class="container" style="padding-right: 500px; padding-top: 20px; ">
		<div class="modal-content">
			<div class="modal-header">
				<h3><span class="fa fa-edit"></span> Edit Articel</h3>
					<a  class="btn" href="#"><span class="fa fa-arrow-left"></span>  Back</a>
			</div>
			<div class="modal-body">
			   		<input type="hidden" class="form-control" placeholder="Group ID" name="id_blog" value="<?php echo $data['id']; ?>">
					<div class="form-group">
						<label>Judul</label>
						<input name="judul" required="required" type="text" class="form-control" value="<?php echo $data['judul']; ?>">
					</div>
					<div class="form-group">
						<label>Isi artikel</label>
						<input name="isi" required="required"  class="form-control" value="<?php echo $data['isi']; ?>">
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input name="images" required="required" type="file" class="form-control" >
					</div>
					<div class="form-group">
					<i>	<td>Tanggal Posting  &nbsp :  &nbsp </td>
          				<td><?php echo $data['tanggal'] ?></td> </i>
					</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" name="simpan" value="Save">
					</div>
				<!-- </form> -->
			</div>
		</div>
	</div>