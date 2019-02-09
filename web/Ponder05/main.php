<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo htmlspecialchars($_POST["username"]); ?> </title>
	<link rel="stylesheet" type="text/css" href="ponder05.css">
</head>
<body>
	<?php include 'banners.php';?>
	<div class="flex-container">
		<div class="sidebar">
			This is a sidebar
		</div><!--end of sidebar flexbox-->
		<div class="main">
			Welcome. Main bar
		</div><!--end of main flexbox-->
	</div><!--end of flex container
</body>
</html>