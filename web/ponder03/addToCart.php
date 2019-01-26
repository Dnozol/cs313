<?php
	$product=$_POST['item'];
	array_push($_SESSION['cart'], $product);
	header("inventory.php");
?>