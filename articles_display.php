<?php 
	require 'functions.php';
	$conn = connect($config);
	$a = get('posts', $conn);
	$articles = [];

	foreach ($a as $article) {
		array_unshift($articles, $article);
	}
	
	$articles = array_chunk($articles, 10);


	//at what point do i decide "this is big enough for its own file"
	//but for now...
	if (isset($_COOKIE['user'])) {
		$cookie = $_COOKIE['user_catagorys'];
		$cookie = stripcslashes($cookie);
		$user_catagorys = json_decode($cookie, true);
		$current_page = $_GET['page'];
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header">
	  			<h1>Example Blog<small><a href="about.php">about</a></small><a href="settings.php"><span class = "glyphicon glyphicon-cog pull-right"></span></a> </h1>
			</div>
		</div>
	</div>
	<div class= "container" style = "padding:20px">
		<div class="text-center">
  			<a href="write_post.php"><button type="button" class="btn btn-default">Write Post</button></a>
		</div>
	</div>

	<div class="container">
		<?php 

			if (empty($user_catagorys)) {

					echo    "<h1>
								<div class = 'text-center'>
									Your not following any boards 
								</div>
							</h1>";

					die();
			}

		?>
	</div>


	<div class="container">
		<?php
			foreach ($articles[ $_GET['page'] ] as $article ) {  ?>
				<?php if ( in_array($article['catagory'],$user_catagorys)): ?>
					<div  class="panel panel-default">	  			
			  			<div class="panel-heading">
			    			<a href= <?php echo "http://localhost:8888/Blog/article.php?id=" . $article['id'];?>> <h3 class="panel-title"> <?php echo $article['title'];?></h3></a>
			    			<span><?php echo $article['catagory']; ?></span>
			  			</div>
			  			<div class="panel-body">
			    			<?php echo $article['exerpt'];?>
			  			</div>
					</div>
				<?php endif ?>
		<?php } ?>
	</div>
	<div class="container">
		<div class="text-center">
			<nav>
				<ul class="pagination">
			    	<li>
			     		<a href=<?php echo "index.php?page=" . (string)($current_page - 1); ?> aria-label="Previous">
			        		<span aria-hidden="true">&laquo;</span>
			      		</a>
			    	</li>
						<?php $counter = 0; ?>
					    <?php foreach ($articles as $article): ?>
					    	<li> <a href=<?php echo "index.php?page=$counter"; ?>> <?php echo $counter; ?></a> </li>
					    	<?php $counter = $counter + 1?>
					    <?php endforeach ?>
			   		<li>
						<a href="index.php" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
					      </a>
			   		</li>
			 	</ul>
			</nav>
		</div>
	</div>
</body>
</html>


