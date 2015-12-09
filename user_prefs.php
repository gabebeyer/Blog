<?php 
	
	$user_catagorys = [];	

	foreach ($_POST as $key => $value) {
		array_push($user_catagorys, $value);
	};

	setcookie('user_catagorys' , json_encode($user_catagorys));

	header('Location: index.php');    
?>