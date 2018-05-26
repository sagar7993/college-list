<?php require_once("session.php") ?>
<?php require_once("hashing.php") ?>
<html>
<head><title>Mastertionary</title></head>
<body>

<!-- DATABASE = mastertionary && TABLE = Users && Columns = Username, Password, hash, class, activation -->

<?php

if (isset($_GET["activation"])) 
{
	echo "Email Verification: ";
	$activation=isset($_GET["activation"]) ? htmlspecialchars($_GET["activation"]) : "";
	echo "Activation link generated is " . "<br/>" . "http://www.mastertionary.com/verify.php?activation=" . $activation;
	echo "<br/>";
	echo "<br/>";

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DATABASE", "mastertionary");
			
	$con = mysqli_connect(HOST,USER,PASS,DATABASE);

	$activation=mysqli_real_escape_string($con,$activation);

	// Check connection
	if (mysqli_connect_errno())
	{
	  die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

	$activation=mysqli_real_escape_string($con,$activation);
	$sql = "SELECT activation FROM Users ORDER BY Username";

	echo "<br/>";
	echo "THE QUERY USED IS :" . "<br/>" . $sql;
	echo "<br/>";

	$success="false";
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{
		if(activation_check($activation, $row["activation"]))
		{	
			echo "<br/>";
			echo "SUCCESS" . "<br/>" . "<br/>";
			$row["class"] = "active";
			$success="true";
			echo "GO TO THE HOMEPAGE AND LOGIN WITH THE USERNAME AND PASSWORD YOU JUST CREATED";
		}
	}
	if($success=="false")
	{
		die("Wrong activation Code");
	}

	mysqli_free_result($result);
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

</body>
</html>