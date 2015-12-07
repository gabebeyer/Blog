<?php 
	require 'functions.php';
	$conn = connect($config);
	
	$result = $conn->query("SELECT MAX(id) FROM comments");

	$result = $result->fetchAll();
	
	$cur_auto_id = $result[0]['MAX(id)'] + 1;

	$body = $_POST["body"];
	$post_id = $_POST["post_id"];

	$row = insertquery("INSERT INTO comments (id,post_id,body) VALUES (NULL,:post_id,:body);" , 
	 				array('post_id' => $post_id, 'body' => $body), 
	 				$conn);

	$pastpage = $_SERVER['HTTP_REFERER'];

	if (isset($_POST['upload'])) {



		$image_name = $cur_auto_id;
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp_name = $_FILES['image']['tmp_name'];

		move_uploaded_file($image_tmp_name, "photos/$image_name");

	}

	header('Location: ' . $pastpage);    
?>