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
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php $this->load->view('menu'); ?>			
		</div>
		<div class="col-lg-4">
			<p>Welcome back <?php echo $this->session->userdata('ses_nama'); ?> </p>
		</div>
	</div>
</div>

</body>
</html>