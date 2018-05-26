<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/universitydatabase/UniversityDetails.php';
	
	$alphabet =$_REQUEST['alphabet'];
	$university = new University();
	$universityByAlphabet = $university -> getUniversityByAlpha($alphabet);
	


	while($row=mysqli_fetch_array($universityByAlphabet))    //converts object to array
	{
		$userinput = $row['Name'];
		$ajaxoutput = '<li><a href="university_info.php?uname=';
		$ajaxoutput .= urlencode(trim($userinput," "));
		$ajaxoutput .= '">';
		$ajaxoutput .=  $userinput;
		$ajaxoutput .= '</a></li>';	
		echo $ajaxoutput;
	}	
?>
