<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo htmlspecialchars($_POST["username"]); ?> </title>
	<link rel="stylesheet" type="text/css" href="ponder05.css">
</head>
<body>
	<div class="flex-container">
		<div class="main">
			<?php include 'banners.php';?>
		</div>
	</div>
</body>
</html>