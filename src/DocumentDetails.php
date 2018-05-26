<?php


use helper\DatabaseHelper;
require_once  $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/helper/DatabaseHelper.php';


class Document{

	public function getDepartmentDocuments($departmentId){

		$con=DatabaseHelper::open();
		$query="SELECT * FROM DOCUMENTS WHERE DOID='$departmentId'";
		$result = mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	

	public function getCodes($departmentId){
		$con=DatabaseHelper::open();
		$query="SELECT GRE_D,GRE_I,TOEFL_D,TOEFL_I FROM DOCUMENTS WHERE DOID='$departmentId'";
		$result = mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	public function getTranscript($departmentId){	
		$con=DatabaseHelper::open();
		$query="SELECT TRANSCRIPT FROM DOCUMENTS WHERE UID='$departmentId'";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close();
		return $result;
	}

	public function getLORDetails($departmentId){	
		$con=DatabaseHelper::open();
		$query="SELECT LOR FROM DOCUMENTS WHERE UID='$departmentId'";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close();
		return $result;
	}

	public function getSOPDetails($departmentId){	
		$con=DatabaseHelper::open();
		$query="SELECT SOP FROM DOCUMENTS WHERE UID='$departmentId'";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

	public function getContactDetails($departmentId){	
		$con=DatabaseHelper::open();
		$query="SELECT CONTACT FROM DOCUMENTS WHERE UID='$departmentId'";
		$result=mysqli_query($con,$query);
		DatabaseHelper::close($con);
		return $result;
	}

}


?>