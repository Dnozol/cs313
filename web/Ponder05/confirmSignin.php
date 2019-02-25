<?php
	require_once('db.php'); 


	$trainer_name = $_POST['trainer_name'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	

	$db = get_db();
	$query = 'SELECT trainer_name FROM trainer WHERE trainer_name = :trainer_name';

	$row_count = sqlsrv_num_row($)

	$stmt = $db->prepare($query);
	$stmt->bindValue(':trainer_name', $trainer_name, PDO::PARAM_STR);
	//$stmt->bindValue(':password', $password, PDO::PARAM_STR);
	$stmt->execute();

	$status = available($trainer_name);
	if ($status === 1) {
		echo "this worked";
	}
	
	//header('Location: main.php');
	die();
?>