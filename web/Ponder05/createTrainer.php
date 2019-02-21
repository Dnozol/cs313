<?php
	require_once('db.php'); 


	if (!isset($_POST['trainer_name']) || strlen($_POST['trainer_name']) == 0) {
		header('Location: register.php');
		die();
	} else if (!isset($_POST['password']) || strlen($_POST['password']) == 0) {
		header('Location: register.php');
		die();
	} else if ($_POST['password'] != $_POST['confirm']) {
		header('Location: register.php');
		die();
	} 

	// $trainer_name = $_POST['trainer_name'];
	// $password = password_hash($_POST['password']);
	
	// $db = get_db();
	// $query = 'INSERT INTO trainer (trainer_name, password) VALUES (:trainer_name, :password);';

	// $stmt = $db->prepare($query);
	// $stmt->bindValue(':trainer_name', $trainer_name, PDO::PARAM_STR);
	// $stmt->bindValue(':password', $password, PDO::PARAM_STR);
	// $stmt->execute();

	// header('Location: signin.php');
	// die();
?>