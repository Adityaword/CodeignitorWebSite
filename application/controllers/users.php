<?php 

class Users extends CI_Controller
{
	// Test function passed to view/login_view.php form_open(user/testlogin)
	public function testlogin() 
	{
		// Test html elements

		// echo $this->input->post('username');
		// echo $this->input->post('password');

		// Test check rules
		// set_rules('form_field', 'human name for field', 'validation rules seperated by |', 'custom')

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'ConfirmPassword', 'trim|required|min_length[3]|matches[password]');

		// Display form errors if there are any

		if($this->form_validation->run() == FALSE) {

			$data = array(

				'errors' => validation_errors()
				
				);

			$this->session->set_flashdata($data);

			// Redirect to home controller

			redirect('home/index');

		} else{

			// 
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Check user_model for user_id if found store in $user_id variable

			$user_id = $this->user_model->login_user($username, $password);

			// If user_id returns something set session data and redirect to home/index

			if($user_id){

				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
					);

			$this->session->set_userdata($user_data);

			$this->session->set_flashdata('login_success', 'You have succesfully logged in!!!');

			redirect('home/index');
			
			} else {

				$this->session->set_flashdata('login_failed', 'You have not succesfully logged in!!!');

				redirect('home/index');
			}


		}
	}

	// ***TODO: change function passed to view/login_view.php form_open(user/login)
	public function login()
	{
		// Test html elements

		echo $this->input->post('username');
		echo $this->input->post('password');
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('home/index');
	}

}








?>