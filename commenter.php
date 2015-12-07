<?php 
	require 'functions.php';
	$conn = connect($config);
	$body = $_POST["body"];
	$post_id = $_POST["post_id"];

	$row = insertquery("INSERT INTO comments (id,post_id,body) VALUES (NULL,:post_id,:body);" , 
	 				array('post_id' => $post_id, 'body' => $body), 
	 				$conn);

	$pastpage = $_SERVER['HTTP_REFERER'];

	header('Location: ' . $pastpage);    
?>