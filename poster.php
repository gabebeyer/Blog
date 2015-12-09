<?php 
	
	require 'functions.php';
	$conn = connect($config);

	$title = $_POST["title"];
	$body = $_POST["body"];
	$catagory = $_POST["catagory"];

	//found on stackoverflow
	//returns first 10 words

	
	$exerpt = implode(' ', array_slice(str_word_count($body, 2), 0, 10));


	$row = insertquery("INSERT INTO posts (id,title,exerpt,full,catagory) VALUES (NULL,:title,:exerpt, :full, :catagory);" , 
				array('title' => $title, 'exerpt' => $exerpt, 'full' => $body, 'catagory' => $catagory), 
				$conn);

	header('Location: index.php');    
?>