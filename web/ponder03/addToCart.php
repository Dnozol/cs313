<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$product=$_POST['item'];
	array_push($_SESSION['cart'], $product);

	//header("Location: inventory.php");
	foreach($product as $key => $results) {
		echo "$results<br>";
	}

?>
<a href="inventory.php">Inventory</a>
</body>
</html>