<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Load custom css and js scripts to overwrite bootstrap -->

	<!-- Load Bootstrap and Jquery scripts -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


</head>
<body>

	<div class="container">
		<div class="col-xs-3">
			<!-- Need to load user form login -->
			<?php $this->load->view('users/login_view')?>
		</div>

		<div class="col-xs-9">
			<!-- Need to load the main view passed from main controller "$main_view" -->
			<?php $this->load->view($main_view);?>
		</div>
	</div>
	
</body>
</html>