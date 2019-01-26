<?php
	session_start();

	$product=$_POST['item'];
	array_push($_SESSION['cart'], $product);
	print_r($_SESSION['cart']);
	?>
	<?php
	header("Location: inventory.php");
?>