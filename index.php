<?php 
	if (!isset($_GET['page'])) {
		header('Location: index.php?page=0');    
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	     <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <!-- Latest compiled and minified JavaScript -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
		<body>

			<?php require 'articles_display.php'; ?>
		</body>
</html>