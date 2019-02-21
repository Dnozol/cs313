<?php
	require_once('db.php'); 

	$trainer_name = $_POST['trainer_name'];
	$password = password_hash($_POST['password']);
	
	echo "$trainer_name";

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

	$db = get_db();
	$query = 'INSERT INTO trainer (trainer_name, password) VALUES (:trainer_name, :password);';
	echo "Part2";

	$stmt = $db->prepare($query);
	// echo "stop1";
	// $stmt->bindValue(':trainer_name', $trainer_name, PDO::PARAM_STR);
	// echo "stop2";
	// $stmt->bindValue(':password', $password, PDO::PARAM_STR);
	// echo "stop3";
	$stmt->execute();
	echo "stop4";
	header('Location: signin.php');
	die();
?>