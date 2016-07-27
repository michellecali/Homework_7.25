<?php
	
	
	$string = "Blue,White,Brown";

	// $string = $_GET['string'];
	$array = explode(",", $string);
	// print_r($array);

	$q1Result = "incorrect";
	if ($array[0] == "Blue") {
		$q1Result = "correct";
	}
	// echo $q1Result;

	$q2Result = "incorrect";
	if ($array[1] == "White") {
		$q2Result = "correct";
	}
	// echo $q2Result;

	$q3Result = "incorrect";
	if ($array[2] == "Brown") {
		$q3Result = "correct";
	}
	// echo $q3Result;

	
	$post_data = array(
    'q1' => $q1Result,
    'q2' => $q2Result,
    'q3' => $q3Result
  	);

// echo $post_data;

echo json_encode($post_data);
	 
?>
