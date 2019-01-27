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
		$items = 0;
		$total = 0.0;
		echo "$_SESSION['cart'][$items]";
		// for($i = 0; $i < 5; $i++) {
		
		// 	if (isset($_SESSION['cart'][$items])) {
		// 	 	if ($product[$i][3] == $_SESSION['cart'][$items] ) {
		// 			echo "<table><tr><td>" . $product[$i][0] . "</td><td>" . $product[$i][1] .
		// 	 			 "</td><td>" . $product[$i][2] . "</td></tr>";
		// 	 		$items++;

		// 	 	}
		// 	}

		// }
		echo "</table>"
	?>
</body>
</html>