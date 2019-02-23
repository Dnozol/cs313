<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<link rel="stylesheet" type="text/css" href="ponder05.css">
	<title>Sign in</title>

	<script type="text/javascript">
		function validateUser() {
			//check username
			//if found check password
			//else return false;
		}
	</script>

</head>
<body>
	<?php include 'banners.php';?>
	<div class="flex-container">

		<div class="sidebar">

			<a href="register.php">Create New User</a>

		</div><!--end of sidebar flexbox-->

		<div class="main">
			<form action="confirmSignin.php" onsubmit="return validateUser()" method="post">

				Username: <input type="text" name="username" required><br>
				Password:  <input type = "password" name="password" required><br>
				<button type="submit">Sign in</button>
				<button type="reset">Clear</button>

			</form>
		</div> <!--end of main flexbox-->
	</div><!--end of flex container-->
</body>
</html>