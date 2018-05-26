<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/documentdatabase/DocumentDetails.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/departmentdatabase/DepartmentDetails.php';
	
	
	$dept = new Department();
	$docu = new Document();
	$deptid = $_REQUEST['deptid'];
	$departmentDetails = $dept->getDepartmentDetails($deptid);
	$documentDetails = $docu->getDepartmentDocuments($deptid);

	
	while($row1=mysqli_fetch_array($departmentDetails))    //converts object to array
	{ 
		$row2=mysqli_fetch_array($documentDetails);
		
		$stud_arr["dept_name"] = $row1["NAME"];
		$stud_arr["dept_rank"] = $row1["RANK"];
		$stud_arr["fall_deadline"] = $row1["FALL_DEADLINE"];
		$stud_arr["spring_deadline"] = $row1["SPRING_DEADLINE"];
		$stud_arr["courses"] = $row1["COURSES"];
		$stud_arr["faq"] = $row1["FAQ"];
		$stud_arr["apply_now"] = $row1["APPLYNOW"];	
		$stud_arr["transcript"] = $row2["TRANSCRIPT"];
		$stud_arr["greicode"] = $row2["GRE_I"];
		$stud_arr["gredcode"] = $row2["GRE_D"];
		$stud_arr["toeflicode"] = $row2["TOEFL_I"];			
		$stud_arr["toefldcode"] = $row2["TOEFL_D"];
		$stud_arr["sop"] = $row2["SOP"];
		$stud_arr["lor"] = $row2["LOR"];
		$stud_arr["contact"] = $row2["CONTACT"];
	}	
	header('Content-type: text/json ');
  echo json_encode($stud_arr) ;
?>