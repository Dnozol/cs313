<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Sign in</title>
</head>
<body>
	<?php include 'banners.php';?>
	<form action="main.php" method="post">
		User Name: <input type="text" name="username">
		Password: <input type = "text" name="password">
		<button type="submit">Sign in</button>
	</form>
</body>
</html>