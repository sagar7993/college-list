<?php


use helper\DatabaseHelper;
require_once  $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/helper/DatabaseHelper.php';


class University{


	public function getUniversityDetails($universityName){	//can also use university name 
		$con=DatabaseHelper::open();
		$query="SELECT * FROM UNIVERSITY WHERE Name='$universityName'";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	public function getUniversityIdByName($universityName){	//can also use university name 
		$con=DatabaseHelper::open();
		$query="SELECT UID FROM UNIVERSITY WHERE Name='$universityName'";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	public function getIdList(){	//get university id 
		$con=DatabaseHelper::open();
		$query="SELECT UID FROM UNIVERSITY";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	public function getUniversityByState($state){
		$con=DatabaseHelper::open();
		$query="select Name,UID from UNIVERSITY where State = '$state'";  
		$result = mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	public function getUniversityByAlpha($alpha){
		$con=DatabaseHelper::open();
		$query="select Name,UID from UNIVERSITY where Name LIKE '";
		$query .= $alpha;
		$query .= "%'";  
		$result = mysqli_query($con,$query);
		if (!$result) {
    		printf("Error: %s\n", mysqli_error($con));
    		exit();
    	}
		DatabaseHelper::close($con);
		return $result;
	}

	

}


?>