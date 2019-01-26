<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Pokemon Center!</title>
  	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" type="text/css" href="ponder03.css">

</head>
<body>
	<?php
		$_SESSION['cart']=array();
		array_push($_SESSION['cart'],'apple');
	?>
	<h1 class="center">Welcome to the Pokemon Center</h1>
	<hr>
		<form method="get" action="addToCart.php">
		<table><th><b>Item</b></th><th><b>Price</b></th><th>Add to cart?</th>
			<tr><td>Item 1</td><td>$32.99</td><td><button type="submit" name="item" value="ball_collection">Add to cart</button></td></tr>
			<tr><td>Item 2</td><td>$20.00</td><td><button onclick="addToSession(2, 20.00)">Add to cart</button></td></tr>
			<tr><td>Item 3</td><td>$14.98</td><td><button onclick="addToSession(3, 14.98)">Add to cart</button></td></tr>
			<tr><td>Item 4</td><td>$9.99</td><td><button onclick="addToSession(4, 9.99)">Add to cart</button></td></tr>
			<tr><td>Item 5</td><td>$6.00</td><td><button onclick="addToSession(5, 6.00)">Add to cart</button></td></tr>
			
		</table>
		<br><br>
		
		<a href="viewcart.php">View Your Cart</a>
	</form>
</body>
</html>