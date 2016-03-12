<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * 
	 */

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('home_model');
	}


	public function index()
	{
		$this->load->view('home_view');
	}

	public function signUp()
	{
		$this->load->view('signup_view');
	}

	public function signIn()
	{
		$this->load->view('signin_view');
	}

	function registration()
	{
		$registration_array = array(
								'business_name' => $this->input->post('business_name'),
								'business_pin'  => $this->input->post('business_pin'),
								'email_address' => $this->input->post('email_address'),
								'password'		=> $this->hash->password($this->input->post('password'))
							);
		$register = $this->home_model->register($registration_array);

	}

	function login_services()
	{
		$login_array = array(
							 'email_address' => $this->input->post('email_address'),
							 'password' => $this->hash->password($this->input->post('password'))
						);
		$login = $this->home_model->login_service($login_array);

		if (!$login) {
			redirect(base_url().'home/signIn');
		} else {
			redirect(base_url().'home');
		}
	}

	public function validate_email($email)
	{
		// Remove all illegal characters from email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		// Validate e-mail
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$text = $email." is a valid email address";
		} else {
			$text = $email." is not a valid email address";
		}
		echo json_encode($text);
	}
}
