<?php
	function password_encrypt($password)
	{
		$hash_format = "$2y$10$"; //Blowfissh hashing algo, computed 10 times
		$salt_length = 22; //salt length is 22 or more, can NOT be less.
		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format . $salt;
		$hash = crypt($password, $format_and_salt);
		return $hash;
	}
	function generate_salt($length)
	{
		$unique_random_string = md5(uniqid(mt_rand(), true));
		$base64_string = base64_encode($unique_random_string);
		$modified_base64_string = str_replace('+', '.', $base64_string);
		$salt = substr($modified_base64_string, 0, $length);
		return $salt;
	}
	function password_check($password, $existing_hash)
	{
		$password_hash = crypt($password,$existing_hash);
		if($password_hash==$existing_hash)
			return true;
		else
			return false;
	}
	function activation_check($activation, $existing_activation)
	{
		$activation_hash = crypt($activation,$existing_activation);
		if($activation_hash==$existing_activation)
			return true;
		else
			return false;
	}
?>
