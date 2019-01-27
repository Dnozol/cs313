<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" type="text/css" href="ponder03.css">
</head>
<body>
	<h1>Your purchase has been confirmed</h1>
	Confirm address:
	<?php
		echo htmlspecialchars($_POST["address"]);
	?>

</body>
</html>