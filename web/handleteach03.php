<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>

<?php 
		$majors = array("CS" => "Computer Science",
						"WDD" => "Web Design and Development",
						"CIT" => "Computer Information Technology",
						"CE" => "Computer Engineering");
		$continents = array("NA" => "North America",
							"SA" => "South America",
							"EU" => "Europe",
							"AS" => "Asia",
							"AU" => "Australia",
							"AF" => "Africa",
							"AN" => "Antarctica");

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

	 foreach($_POST['c1'] as $results) {
	 	echo $results;
	 	echo "<br>";
	 }
?>
</body>
</html>