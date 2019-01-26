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
	?>
	<h1 class="center">Welcome to the Pokemon Center</h1>
	<hr>
		<form method="post" action="">
		<table><th><b>Item</b></th><th><b>Price</b></th><th>Add to cart?</th>
			<!-- <tr><td>Item 1</td><td>$32.99</td><td><button type="submit" name="item[]" value="ball_collection">Add to cart</button></td></tr>
			<tr><td>Item 2</td><td>$20.00</td><td><button type="submit" name="item[]" value="Giant_plush_snorlax">Add to cart</button></td></tr>
			<tr><td>Item 3</td><td>$14.98</td><td><button onclick="addToSession(3, 14.98)">Add to cart</button></td></tr>
			<tr><td>Item 4</td><td>$9.99</td><td><button onclick="addToSession(4, 9.99)">Add to cart</button></td></tr>
			<tr><td>Item 5</td><td>$6.00</td><td><button onclick="addToSession(5, 6.00)">Add to cart</button></td></tr> -->
			
			<tr><td>Item 1</td><td>$32.99</td><td><input type="checkbox" name="item[]" value="ball_collection">Add to cart</td></tr>
			<tr><td>Item 2</td><td>$20.00</td><td><input type="checkbox" name="item[]" value="Giant_plush_snorlax">Add to cart</td></tr>
			<tr><td>Item 3</td><td>$14.98</td><td><input type="checkbox" name="item[]" value="Badge_collecion">Add to cart</td></tr>
			<tr><td>Item 4</td><td>$9.99</td><td><input type="checkbox" name="item[]" value="Large_pikachu_plush">Add to cart</td></tr>
			<tr><td>Item 5</td><td>$6.00</td><td><input type="checkbox" name="item[]" value="small_eevee_plush">Add to cart</td></tr>

		</table>
		<br><br>
		<button type="submit">ViewCart</button>
	</form>
	<?php
			$product=$_POST['item'];
			array_push($_SESSION['cart'], $product);
			echo "<br>The number of items= " . sizeof($_SESSION['cart']); 
		?>
		<a href="viewcart.php">View Your Cart</a>
</body>
</html>