<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class Home_model extends MY_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function register($data)
		{
			$email 	  = $data['email_address'];
			$password = $data['password'];

			$query = $this->db->query("INSERT INTO `login` (`email`, `password`) VALUES ('$email','$password')");
			$result_id = $this->db->insert_id();
			
			$user_array = array(
								'business_name' 	=> $data['business_name'],
								'business_number' 	=> $data['business_pin'],
								'usertype' => 2,
								'login_ID' => $result_id,
							);
			$this->db->insert('users', $user_array);

			return TRUE;
		}

		function login_service($data)
		{
			$login = FALSE;
			
			$email = $data['email_address'];
			$password = $data['password'];

			$sql = "SELECT * FROM `login` WHERE `email` = '$email' AND `password` = '$password' AND `status` = 1";
			$result = $this->db->query($sql)->result_array();

			if ($result) {
				$login = TRUE;
			}
			
			return $login;
		}
	}
?>