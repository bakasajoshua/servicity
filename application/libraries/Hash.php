<?php
/*
*
*
*
*
*/
class Hash
{

	
	public function password($password)
	{	
		return $this->hash($password);
	}

	public function passwordCheck($password, $hash)
	{
		if($this->hash($password) == $hash)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function hash($input=NULL)
	{
		return hash('sha256', $input);
	}

	public function hashCheck($known, $user)
	{
		if ($known == $user) {
			return true;
		}
		else{
			return false;
		}
	}
}