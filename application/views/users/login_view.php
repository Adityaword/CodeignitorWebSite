<!-- Display form based off userdata attribute of logged -->
<!-- ****TODO: Refactor code break it up, go off session_id instead-->

<?php if($this->session->userdata('logged_in')): ?>

<!-- Create logout option -->
<!-- ****TODO: move username, to div tag, make it look nice --> 

<h2>Logout</h2>

	<!-- send to users/logout method form login_view.php -->
	<?php echo form_open('users/logout'); ?>

	<p>
	<?php if($this->session->userdata('username')):  ?>

	<?php echo "You are logged in as " . $this->session->userdata('username'); ?>

	<?php endif; ?>

	</p>

	<?php
	
	$data = array(

		'class' => 'btn btn-primary',
		'name' => 'submit',
		'value' => 'Logout'

		);

	?>

	<?php echo form_submit($data); ?>

	<?php echo form_close(); ?>

	<?php else: ?>	

<!-- End of logout option -->

<!-- Start of error code -->
<h2>Login form</h2>

<?php $attributes = array('id'=> 'login_form', 'class'=> 'form-horizontal'); ?>

	<!-- If an error is returned from the user.php controller display error message -->
	<?php if($this->session->flashdata('errors')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('errors'); ?>
		</div>
	<?php endif; ?>

	<!-- If login_success is returned from the user.php flashdata(login_success) controller display error message -->
	<?php if($this->session->flashdata('login_success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('login_success'); ?>
		</div>
	<?php endif; ?>

	<!-- If an login_faile is returned from the user.php flashdata(login_success) controller display error message -->
	<!-- ****TODO: change from green to red if it has failed -->

	<?php if($this->session->flashdata('login_failed')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('login_failed'); ?>
		</div>
	<?php endif; ?>

	<!--Open a html form action, url to where info is being sent to
		// form_open(controller/method)
  		// CSS = id=login_form class=form_horizontal
  		// form_action = base_url/users/login_view
  	-->
	<!-- **Note did not like 'users/test_login'
		   Maybe Look into changing routes or how it looks at URL's
	-->

	<!-- End of error code -->

	<!-- Start of login for creation -->
	<?php echo form_open('users/testlogin', $attributes); ?>



	<!-- login form UserName Field -->
	<div class="form-group">
		<?php echo form_label('Username'); ?>
		<?php 
			$data = array(
				'class' => 'form-control',
				'name' => 'username',
				'placeholder' => 'Enter Username'

			);
		?>

	<?php echo form_input($data); ?>

	</div>

	<!-- login form Password Field -->
	<div class="form-group">
		<?php echo form_label('Password'); ?>
		<?php 
			$data = array(
				'class' => 'form-control',
				'name' => 'password',
				'placeholder' => 'Enter Password'

			);
		?>
	<?php echo form_password($data); ?>
	</div>

	<!-- login form Confirm Password Field -->
	<div class="form-group">
		<?php echo form_label('Confirm Password'); ?>
		<?php 
			$data = array(
				'class' => 'form-control',
				'name' => 'confirm_password',
				'placeholder' => 'Confirm Password'

			);
		?>
	<?php echo form_password($data); ?>
	</div>

	<!-- login formSubmit Button -->
	<div class="form-group">
		<?php 
			$data = array(
				'class' => 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Login'

			);
		?>
	<?php echo form_submit($data); ?>
	</div>

<!-- Close the form -->
<?php echo form_close(); ?>
<!-- End of login form -->


<?php endif; ?>
