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
	Confirm address:
	<?php
		echo htmlspecialchars($_POST["address"]);
	?>
		<?php
		$product = $_SESSION['cart'];
		foreach($product as $key => $results) {
		echo "$results<br>";
	}

	?>
</body>
</html>