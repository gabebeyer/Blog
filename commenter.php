<?php 
	
	require 'functions.php';
	$conn = connect($config);

	$body = $_POST["body"];

	$post_id = $_POST["post_id"];


	echo $body;
	echo $post_id;

	$row = insertquery("INSERT INTO comments (id,post_id,body) VALUES (NULL,:post_id,:body);" , 
	 				array('post_id' => $post_id, 'body' => $body), 
	 				$conn);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script type="text/javascript">
	
	//found this magic online
	//ads random param to url forcing the browser to refresh
	var backLocation = document.referrer;
	if (backLocation) {
	    if (backLocation.indexOf("?") > -1) {
	        backLocation += "&randomParam=" + new Date().getTime();
	    } else {
	        backLocation += "?randomParam=" + new Date().getTime();
	    }
	    window.location.assign(backLocation);
	}
</script>
</html>