<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<a href="signin.php">Return to Sign In</a>
	<form action="createTrainer.php" method="POST">
		Username<input type="text" name="trainer_name"><br>
		Password<input type="password" name="password"><br>
		Confirm Password<input type="password" name="confirm"><br>
		<input type="submit" name="submit" value="Create Trainer">
	</form>
</body>
</html>