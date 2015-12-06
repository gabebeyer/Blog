<?php 
	require 'functions.php';
	$conn = connect($config);
	$article_id = $_GET['id'];
	$post = query("SELECT * FROM posts WHERE id = :id", array('id' =>  $article_id ),$conn);	
?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		
		<div class="jumbotron">
		  <h1><?php echo $post[0]['title']; ?></h1>
		  <p><?php echo $post[0]['full']; ?></p>
		</div>

	</div>

</body>
</html>