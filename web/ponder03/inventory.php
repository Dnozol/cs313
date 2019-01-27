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
		include 'product.php';
	?>
	<h1 class="center">Welcome to the Pokemon Center</h1>
	<hr>
		<form method="post" action="">
		<table><th><b>Item</b></th><th><b>Price</b></th><th>Add to cart?</th>

			<tr><td><img src="pokeballs.jpg" alt="pokeballs"><p>Pokeball Collection</p>
			</td><td>$32.99</td><td><input type="checkbox" name="item[]" value="ball_collection">Add to cart</td></tr>
			<tr><td><img src="plushSnorlax.jpg" alt="snorlax"><p>Giant Plush Snorlax</p>
			</td><td>$20.00</td><td><input type="checkbox" name="item[]" value="giant_plush_snorlax">Add to cart</td></tr>
			<tr><td><img src="gymbadges.jpg" alt="badges"><p>Kanto Gym Badges</p>
			</td><td>$14.98</td><td><input type="checkbox" name="item[]" value="badge_collecion">Add to cart</td></tr>
			<tr><td><img src="plushPikachu.jpg" alt="pikachu"><p>Large Plush Pikachu</p>
			</td><td>$9.99</td><td><input type="checkbox" name="item[]" value="large_pikachu_plush">Add to cart</td></tr>
			<tr><td><img src="plushEevee.jpg" alt="eevee"><p>Small Eevee Plush</p>
			</td><td>$6.00</td><td><input type="checkbox" name="item[]" value="small_eevee_plush">Add to cart</td></tr>

		</table>
		<br><br>
		<button type="submit">Add to Cart</button>
	</form>
	<?php
			$item=$_POST['item'];
			foreach ($item as $key => $value) {
			
				array_push($_SESSION['cart'], $value);
			}
			
			echo "<br>The number of items= " . sizeof($_SESSION['cart']); 
		?>
		<a href="viewcart.php">View Your Cart</a>
</body>
</html>