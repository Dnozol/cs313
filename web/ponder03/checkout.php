<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" type="text/css" href="ponder03.css">
</head>
<body>
<p>Please enter your address information:</p>
	<form action="purchase.php" method="post">
		<textarea rows="4" cols="40" name="address"></textarea><br>
		<button type="submit">Complete Purchase</button><br>
		<a href="viewcart.php">Return to cart</a>
	</form>
</body>
</html>