<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>	

	<div class="container">	
		<div class="text-center">
			<form action="user_prefs.php" method="post">
				<label class="checkbox-inline">
		  			<input type="checkbox" checked data-toggle="toggle" name="mu" value="mu"> mu
				</label>
				
				<label class="checkbox-inline">
				  <input type="checkbox" data-toggle="toggle" name="b" value="b"> b
				</label>
				
				<label class="checkbox-inline">
				  <input type="checkbox" data-toggle="toggle" name="tech" value="tech"> tech
				</label>

				<label class="checkbox-inline">
				  <input type="checkbox" data-toggle="toggle" name="fa" value="fa"> fa
				</label>

				<label class="checkbox-inline">
				  <input type="submit">
				</label>
			</form>
		</div>
	</div>

</body>
</html>