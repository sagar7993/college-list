<?php require_once("session.php") ?>
<!-- DATABASE = mastertionary && TABLE = Users & Columns = Username, Password, hash, class, activation -->
<?php require_once 'hashing.php'; ?>

<?php

if (isset($_POST["submit"])) 
{
	echo "Form Submitted";
	echo ("<br/>");
	$username=isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "";
	$password=isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";
	
	$hashed_password = password_encrypt($password);
	echo "<br/>";
	echo "Username entered is " . $username . "<br/>" . " Password entered is " . $password;
	echo "<br/>";
	echo "<br/>";
	echo "Hashed password is " . $hashed_password;
	echo "<br/>";
	echo "<br/>";
	//header( 'Location: http://www.mastertionary.com/index.html' ) ;

	define("HOST", "216.150.76.75");
	define("USER", "master");
	define("PASS", "kreepri");
	define("DATABASE", "master");
	$con = mysqli_connect(HOST,USER,PASS,DATABASE);
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);
	// Check connection
	if (mysqli_connect_errno())
	{
	  die("Failed to connect to MySQL. Error " . mysqli_connect_error() . "Occured.");
	}
	$login="false";
	$sql = "SELECT Username, class, hash FROM Users ORDER BY Username";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{	
		if($row["Username"]==$username)
		{
			//if($row["class"]=="inactive")
			//{
			//	die("Account Not Activated. Please Check Your Mail, And Click On The Verification Link.");
			//}
			//else
			//{
			if(password_check($password,$row["hash"]))
			{
				echo "LOGIN SUCCESSFULL";
				//session starts now
				$_SESSION["username"] = $username;
				header('Location: index2.php');
			}
		}
	}
	if($login=="false")
	{
		die("Login Failed. Invalid Username Or Password.");
	}


	mysqli_free_result($result);
	mysqli_close($con);
}

else
{
	$username="";
	$password="";
	die("PLEASE LOGIN OR REGISTER.");
}

?>
