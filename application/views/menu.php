<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet" type="text/css">
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<p class="inc"><b>Incridible</b></p>	
			</div>
			<div class="col-lg-6">
				<ul class="ul">

					<?php if($this->session->userdata('akses')=='1') : ?>

					<li> <a class="bbof" href="<?php echo base_url().'Home' ?>">Dashboard</a></li> 
					<li> <a class="bbof" href="<?php echo base_url().'About' ?>">View Uploads</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Blog/shoul' ?>">Add member</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Blog/shoul' ?>">Add category</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Login/logout' ?>">Logout</a></li>
				
					<?php elseif($this->session->userdata('akses')=='2') : ?>
					<li> <a class="bbof" href="<?php echo base_url().'Home' ?>">Dashboard</a></li> 
					<li> <a class="bbof" href="<?php echo base_url().'About' ?>">View articels</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'About' ?>">View members</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Login/logout' ?>">Logout</a></li> 

					<?php else :?>

					<li> <a class="bbof" href="<?php echo base_url().'Home' ?>">Dashboard</a></li> 
					<li> <a class="bbof" href="<?php echo base_url().'About' ?>">Upload articel</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'About' ?>">View uploads</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Blog/shoul' ?>">Profile</a></li>
					<li> <a class="bbof" href="<?php echo base_url().'Login/logout' ?>">Logout</a></li>
					<?php endif ?>						
				</ul>
			</div>
		</div>
	</div>
</header>	