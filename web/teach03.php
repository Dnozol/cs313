<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="handleteach03.php" method="post" >
		Name<input type="text" name="name"><br>
		Email<input type="text" name="email"><br>
		<input type="radio" name="major" value="Computer Science">Computer Science<br>
		<input type="radio" name="major" value="Web Design and Development">Web Design and Development<br>
		<input type="radio" name="major" value="Computer Information Technology">Computer Information Technology<br>
		<input type="radio" name="major" value="Computer Engineering">Computer Engineering<br>
		<textarea name="comments" rows="4" cols="50"></textarea><br>
		<br>
		Which continents have you visited:
		<br>
		<input type="checkbox" name="c1" value="North America">NA<br>
		<input type="checkbox" name="c1" value="South America">SA<br>
		<input type="checkbox" name="c1" value="Europe">Eu<br>
		<input type="checkbox" name="c4" value="Asia">As<br>
		<input type="checkbox" name="c5" value="Australia">Au<br>
		<input type="checkbox" name="c6" value="Africa">Af<br>
		<input type="checkbox" name="c7" value="Antarctica">Ant<br>

		<button type="submit">Submit</button>
	</form>
</body>
</html>