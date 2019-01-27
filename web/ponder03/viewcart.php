<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" type="text/css" href="ponder03.css">
</head>
<body>
	<h1 class="center">Your Cart</h1>
	<a href="inventory.php">Continue Shopping</a>
	<a href="checkout.php">Proceed to checkout</a><br>
	<?php
		include 'product.php';
		
		// $item = $_SESSION['cart'];
		// for($i = 0; $i < 5; $i++) {
		// 	if ($product[$i][3] == )
		
		// }
		echo $_SESSION['cart'][0];

	?>
</body>
</html>