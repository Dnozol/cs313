<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>

<?php 
	$name = $_POST["name"];
	$email = $_POST["email"];
	$major = $_POST["major"];
	$comments = $_POST["comments"];

	echo "name: $name";
	echo "<a href='mailto:" . $email . "?comments: " .  $comments ."'>";
	
?>
</body>
</html>