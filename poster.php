<?php 
	
	require 'functions.php';
	$conn = connect($config);

	$title = $_POST["title"];
	$body = $_POST["body"];

	//found on stackoverflow
	//returns first 10 words 
	
	$exerpt = implode(' ', array_slice(str_word_count($body, 2), 0, 10));


	$row = insertquery("INSERT INTO posts (id,title,exerpt,full) VALUES (NULL,:title,:exerpt, :full);" , 
				array('title' => $title, 'exerpt' => $exerpt, 'full' => $body), 
				$conn);

	header('Location: index.php');    
?>