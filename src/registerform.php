<?php require_once("session.php") ?>

<!-- DATABASE = mastertionary && TABLE = Users && Columns = Username, Password, hash, class, activation -->

<?php require_once 'hashing.php'; ?>

<?php

if (isset($_POST["r_submit"])) 
{
	echo "form submitted";
	echo ("<br/>");
	$r_username=isset($_POST["r_username"]) ? htmlspecialchars($_POST["r_username"]) : "";
	$r_password=isset($_POST["r_password"]) ? htmlspecialchars($_POST["r_password"]) : "";
	$c_password=isset($_POST["c_password"]) ? htmlspecialchars($_POST["c_password"]) : "";
	if($r_password!=$c_password)
	{
		die("Passwords Do Not Match. Try Again");
		header('Location: index2.php');
	}

	$activation = password_encrypt($r_username);
	$hashed_password = password_encrypt($r_password);

	echo "<br/>";
	echo "Username entered is " . $r_username . "<br/>" . "Password entered is " . $r_password;
	echo "<br/>";
	echo "<br/>";
	echo "Hashed password is " . $hashed_password;
	echo "<br/>";
	echo "<br/>";
	//echo "Activation link is " . "<br/>" . "http://www.mastertionary.com/verify.php?activation=" . $activation;
	//echo "<br/>";
	//echo "<br/>";

	define("HOST", "216.150.76.75");
	define("USER", "master");
	define("PASS", "kreepri");
	define("DATABASE", "master");
			
	$con = mysqli_connect(HOST,USER,PASS,DATABASE);

	$r_username=mysqli_real_escape_string($con,$r_username);
	$r_password=mysqli_real_escape_string($con,$r_password);
	$c_password=mysqli_real_escape_string($con,$c_password); 

	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql1 = "SELECT Username FROM Users ORDER BY Username";
	$result1 = mysqli_query($con,$sql1);
	while($row1 = mysqli_fetch_array($result1))
	{	
		if($row1["Username"]==$r_username)
		{
			die("An Account Already Exists With That Username. Please Choose Another Username.");
		}
	}

	$sql = "INSERT INTO Users (";
	$sql = $sql . "Username, hash, class, activation";
	$sql = $sql . ") VALUES (";
	$sql = $sql . "\"{$r_username}\", \"{$hashed_password}\", \"inactive\", \"{$activation}\"";
	$sql = $sql . ")";

	echo "<br/>";
	echo "THE QUERY USED IS :" . "<br/>" . $sql;
	echo "<br/>";

	$result = mysqli_query($con,$sql);

	die("Account Registered Successfilly. Please Login.");

	/*if($result)
	{	
		echo "<br/>";
		echo "SUCCESS" . "<br/>" . "<br/>";

		$to      = $r_username; // Send email to user
		$subject = "Signup | Verification"; // Give the email a subject 
		$message = 
		"Thanks for signing up! <br/>" .
		"Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. <br/>" .
		"Please click this link to activate your account: <br/><br/>" .
		"http://www.yourwebsite.com/verify.php?activation=" . $activation;

		// Our message above including the link
		
		$headers = "From: noreply@mastertionary.com" . "\r\n" .
		"CC: web@mastertionary.com" . "\r\n" .
		"MIME-Version: 1.0" . "\r\n" .
		"Content-type:text/html;charset=UTF-8" . "\r\n";

		$message = wordwrap($message,70);

		mail($to,$subject,$message,$headers);

		echo "CHECK YOUR EMAIL FOR VERIFICATION LINK";
	}

	else
	{
		die("DATABASE QUERY FAILED " . mysqli_error($con));
	}*/

	//mysqli_free_result($result);
	mysqli_close($con);

}

else
{
	$r_username="";
	$r_password="";
	$c_password="";
	die("PLEASE LOGIN OR REGISTER.");
}

?>