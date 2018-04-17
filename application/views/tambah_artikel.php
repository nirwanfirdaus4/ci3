	<?php echo form_open_multipart(base_url('Panel/tambah_aksi')); ?> 
	
	<div class="container" style="padding-right: 500px; padding-top: 20px; ">
		<div class="modal-content">
			<div class="modal-header">
				<h3><span class="fa fa-plus"></span> Add Artikel</h3>
					<a  class="btn" href="#"><span class="fa fa-arrow-left"></span>  Back</a>
			</div>
			<div class="modal-body">
			   		<input type="hidden" class="form-control" placeholder="Group ID" name="id">
					<div class="form-group">
						<label>Title</label>
						<input name="judul" required="required" type="text" class="form-control" placeholder="title...">
					</div>
					<div class="form-group">
						<label>Content</label>
						<input name="isi" required="required"  class="form-control" placeholder="content...">
					</div>
					<div class="form-group">
						<label>Creator</label>
						<input name="isi" required="required"  class="form-control" placeholder="creator...">
					</div>
					<div class="form-group">
						<label>Picture</label>
						<input name="gambar" required="required" type="file" class="form-control">
					</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" name="simpan" value="Save">
					</div>
				<!-- </form> -->
			</div>
		</div>
	</div>