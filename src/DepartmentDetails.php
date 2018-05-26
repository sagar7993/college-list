<?php


use helper\DatabaseHelper;
require_once  $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/helper/DatabaseHelper.php';

class Department
{
//get department name
	public function getDepartmentDetails($departmentId){
		$con=DatabaseHelper::open();
		$query="SELECT * FROM department WHERE DID='$departmentId'";
		$result = mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}


//get department details
	public function getDepartmentNames($universityId){
		$con=DatabaseHelper::open();
		$query="Select * from department where UID='$universityId'";
		$result= mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;

	}
//get falldeadline
	public function getIdList(){
		$con=DatabaseHelper::open();
		$query="SELECT DID FROM department";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;

	}


}

?>
