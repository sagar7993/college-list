<?php
	session_start();
	$login="false";
	function logged_in()
	{
		if(isset($_SESSION["username"]))
		{
			$login="true";
			return $_SESSION["username"];
		}
	}
	
	function confirm_logged_in()
	{
		if ($login=="false") 
		{
			header( 'Location: localhost/noverify/index2.php' ) ;
		}
	}
?>
