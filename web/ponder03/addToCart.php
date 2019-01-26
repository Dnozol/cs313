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
	print_r($_SESSION['cart']);

	//header("Location: inventory.php");

?>
<a href="inventory.php">Inventory</a>
</body>
</html>