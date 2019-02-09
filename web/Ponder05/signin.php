<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" type="text/css" href="ponder05.css">
	<title>Sign in</title>
</head>
<body>
	<?php include 'banners.php';?>
	<div class="flex-container">
		<div class="sidebar">
			This is a side bar
		</div><!--end of sidebar flexbox-->
		<div class="main"></div>	
			<form action="main.php" method="post">
				User Name: <input type="text" name="username">
				Password: <input type = "text" name="password">
				<button type="submit">Sign in</button>
			</form>
		</div> <!--end of main flexbox-->
	</div><!--end of flex container-->
</body>
</html>