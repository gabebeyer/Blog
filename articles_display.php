<?php 
	require 'functions.php';
	$conn = connect($config);
	$articles = get('posts', $conn);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="container">
		<div class="page-header">
  			<h1>Example Blog</h1>
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


