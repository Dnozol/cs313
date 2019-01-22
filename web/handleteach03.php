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

	echo "name: $name<br>";
	echo "major: $major<br>";
	echo "<a href='mailto:" . $email . "?comments: " .  $comments ."'>$email</a><br>";
	echo "$comments<br>";
	echo "You have visited:<br>";
	if (isset($_POST['c1'])) {
		$cont= $_POST['c1'];
	}

	foreach($results in $cont) {
		echo "$results<br>"
	}
?>
</body>
</html>