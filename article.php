<?php 
	require 'functions.php';
	$conn = connect($config);
	$article_id = $_GET['id'];
	$post = query("SELECT * FROM posts WHERE id = :id", array('id' =>  $article_id ),$conn);	
	$comments = query("SELECT * FROM comments where post_id = :id", array('id' => intval($article_id)),$conn);
	

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

	<?php foreach ($comments as $comment): ?>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<span><?php echo $comment['id']; ?></span>
					<?php echo $comment['body']; ?>
		 		</div>
			</div>
		</div>
	<?php endforeach ?>

	<div class="container">
		<form class="form-horizontal" role="form" method="post" action="commenter.php">
	   		<div class="form-group">
	       	<label for="body" class="col-sm-2 control-label">Write Comment</label>
	        	<div class="col-sm-10">
	           		<textarea type="textbox" class="form-control" id="body" name="body" value=""></textarea>
	        	</div>
	   		</div>

	   		<input type="hidden" name="post_id" value=<?php echo $article_id; ?>>
	   		
	   		<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
            		<input id="submit" name="submit" type="submit" value="Post" class="btn btn-primary">
        		</div>
    		</div>
    	
    	</form>
	</div>

</body>
</html>