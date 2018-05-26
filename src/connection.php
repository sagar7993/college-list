<?php


$database ='master';
$localhost = '216.150.76.75'; //name of server. Usually localhost
$username = 'master'; //database username.
$password = 'kreepri'; //database password.

// connect to db  
$conn = mysql_connect($localhost, $username, $password) or die('Error connecting to mysql');   
$db = mysql_select_db($database,$conn) or die('Unable to select database!');    



?>