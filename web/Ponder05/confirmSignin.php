<?php
	require_once('db.php'); 

	$trainer_name = $_POST['trainer_name'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	

	$echo = "ready<br>";
	$echo = "show this!";
	for ($i = 0; $i < 10; i++) {
		echo "$i<br>";
	}

	$db = get_db();
	$query = 'SELECT trainer_name FROM trainer WHERE trainer_name = $trainer_name';

	// $echo "$query";
	
	// $stmt = $db->prepare($query);
	// $stmt->bindValue(':trainer_name', $trainer_name, PDO::PARAM_STR);
	// $stmt->bindValue(':password', $password, PDO::PARAM_STR);
	// $stmt->execute();
	// header('Location: main.php');
	// die();
?>