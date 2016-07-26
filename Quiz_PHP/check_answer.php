<?php
	
	$string = $_GET['string'];
	$array = explode(",", $string);
	$q1Result = "incorrect";
	$q2Result = "incorrect";
	$q3Result = "incorrect";
	if ($array[0] == "Blue") {
		$q1Result = "correct";
		return $q1Result;
	}
	if ($array[1] == "White") {
		$q2Result = "correct";
		return $q2Result;
	}
	if ($array[2] == "Brown") {
		$q3Result = "correct";
		return $q3Result;
	}


	
	$post_data = array(
    'q1' => $q1Result,
    'q2' => $q2Result,
    'q3' => $q3Result
  	);


echo json_encode($post_data);
	 
?>
