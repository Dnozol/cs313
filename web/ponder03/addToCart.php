<?php
session_start();
header("inventory.php");
	$product=$_POST['item'];
	array_push($_SESSION['cart'], $product);

?>