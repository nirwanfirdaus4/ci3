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

<div class="header1 blocked">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
					<!-- <p class="welback">Logged in - <?php echo $this->session->userdata('ses_nama');?> </p> -->
					<p class="welback">Admin Dashboard</p>
			</div>
		</div>
	</div>
</div>

<!-- SELECT CONTENT -->
<?php
	if($this->session->userdata('akses')=='1'){
		$this->load->view('a_dashboard');
	}elseif ($this->session->userdata('akses')=='2'){
		$this->load->view('o_dashboard');
	}else{
		$this->load->view('m_dashboard');
	}
?>


</body>
</html>