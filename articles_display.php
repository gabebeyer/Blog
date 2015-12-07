<?php 
	require 'functions.php';
	$conn = connect($config);
	$a = get('posts', $conn);
	$articles = [];
	foreach ($a as $article) {
		array_unshift($articles, $article);
	}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="container">
		<div class="page-header">
  			<h1>Example Blog   <small><a href="about.php">about</a></small> </h1>
		</div>
	</div>
	<div class= "container" style = "padding:20px">
		<div class="text-center">
  			<a href="write_post.php"><button type="button" class="btn btn-default">Write Post</button></a>
		</div>
	</div>
	<div class="container">
		<?php
			foreach ($articles as $article ) {  ?>
			<div  class="panel panel-default">	  			
	  			<div class="panel-heading">
	    			<a href= <?php echo "http://localhost:8888/Blog/article.php?id=" . $article['id'];?>> <h3 class="panel-title"> <?php echo $article['title'];?></h3></a>
	  			</div>
	  			<div class="panel-body">
	    			<?php echo $article['exerpt'];?>
	  			</div>
			</div>
		<?php }?>
	</div>
</body>
</html>


