<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
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
	 ?>

	<form action="handleteach03.php" method="post" >
		Name<input type="text" name="name"><br>
		Email<input type="text" name="email"><br>

		<?php

			foreach($majors as $key => $results) {
				echo "<input type='radio' name='major' value='" . 
				$key . "'>" . $results . "<br>";
			}
		?>
		
		<textarea name="comments" rows="4" cols="50"></textarea><br>
		<br>
		Which continents have you visited:
		<br>
		<?php
			foreach($continents as $key => $results) {
				echo "<input type='checkbox' name='c1[]' value='" .
				$key . "'>" . $results . "<br>";
			}
		?>
		<button type="submit">Submit</button>
	</form>
</body>
</html>