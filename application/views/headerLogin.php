<!-- SELECT MENU -->
<div class="amazing">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<div class="tose">
					<img class="avatar1" src="assets/img/img_avatar.png">
					<p class="trator">Administrator</p>
					<p class="gmail">admin4@gmail.com</p>						
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<nav>
					<ul>
					<?php if($this->session->userdata('akses')=='1') : ?> 
					<p class="navig">MAIN NAVIGATION</p>
					<li> <a class="bbof" href="<?php echo base_url().'Page' ?>">
					<span class="glyphicon glyphicon-home"></span> Dashboard</a></li> 
					<li> <a class="bbof" href="<?php echo base_url().'ViewUpAdmin' ?>">
					<span class="glyphicon glyphicon-send"></span>	View Uploads</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'AddMemberAdmin' ?>">
					<span class="glyphicon glyphicon-user"></span> View member</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'AddCategory' ?>">
					<span class="glyphicon glyphicon-th-list"></span> Add category</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Login/logout' ?>">
					<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

					<hr><p class="urgent">© Incridible - 2018</p>				

					<?php elseif($this->session->userdata('akses')=='2') : ?>
					
					<p class="navig">MAIN NAVIGATION</p>	
					<li> <a class="bbof" href="<?php echo base_url().'Page' ?>">
					<span class="glyphicon glyphicon-home"></span>Dashboard</a></li> 
					<li> <a class="bbof" href="<?php echo base_url().'viewUpOwner' ?>">
					<span class="glyphicon glyphicon-send"></span>View articels</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'viewMemberOwner' ?>">
					<span class="glyphicon glyphicon-user"></span>View members</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Login/logout' ?>">
					<span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
					<hr><p class="urgent">© Incridible - 2018</p>	

					<?php else :?>

					<p class="navig">MAIN NAVIGATION</p>	
					<li> <a class="bbof" href="<?php echo base_url().'Page' ?>">
					<span class="glyphicon glyphicon-home"></span>Dashboard</a></li> 
					<li> <a class="bbof" href="<?php echo base_url().'UploadArticelMember' ?>">
					<span class="glyphicon glyphicon-send"></span>Upload articel</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'UploadsMember' ?>">
					<span class="glyphicon glyphicon-home"></span>View uploads</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Profile' ?>">
					<span class="glyphicon glyphicon-home"></span>Profile</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Login/logout' ?>">
					<span class="glyphicon glyphicon-home"></span>Logout</a></li>
					<hr><p class="urgent">© Incridible - 2018</p>	

					<?php endif ?>							
					</ul>
				</nav>
			</div>		
		</div>
	</div>
</div>