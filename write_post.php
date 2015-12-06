<?php 
	require 'functions.php';
	$conn = connect($config);
	$articles = get('posts', $conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header">
  			<h1>Example Blog </h1>
		</div>
	</div>

	<div class="container">
		<form class="form-horizontal" role="form" method="post" action="poster.php">
	    	
	    	<div class="form-group">
	       	<label for="title" class="col-sm-2 control-label">title</label>
	        	<div class="col-sm-10">
	           		<input type="text" class="form-control" id="title" name="title" value="">
	        	</div>
	   		</div>

	   		<div class="form-group">
	       	<label for="body" class="col-sm-2 control-label">body</label>
	        	<div class="col-sm-10">
	           		<textarea type="textbo" class="form-control" id="body" name="body" value=""></textarea>
	        	</div>
	   		</div>

	   		<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
            		<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        		</div>
    		</div>
    	
    	</form>
	</div>


</body>
</html>
