<?php
	session_start();

	$product=$_POST['item'];
	array_push($_SESSION['cart'], $product);
	//header("Location: inventory.php");
?>