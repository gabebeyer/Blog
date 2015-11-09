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

	<?php foreach ($articles as $article ) { ?>
		<div class="panel panel-default">
  			<div class="panel-heading">
    			<h3 class="panel-title"> <?php echo $article['title'];?></h3>
  			</div>
  			<div class="panel-body">
    			<?php echo $article['body'];?>
  			</div>
	</div>
	<?php }?>




</body>
</html>


