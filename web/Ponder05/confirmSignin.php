<?php
	require_once('db.php'); 


	$trainer_name = $_POST['trainer_name'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	

	$db = get_db();
	$query = 'SELECT trainer_name FROM trainer WHERE trainer_name = :trainer_name';
	$selectresult = mysql_query($query);


	$stmt = $db->prepare($query);
	$stmt->bindValue(':trainer_name', $trainer_name, PDO::PARAM_STR);
	//$stmt->bindValue(':password', $password, PDO::PARAM_STR);
	$stmt->execute();

	if(mysql_num_rows($selectresult) > 0) {
		echo "found";
	}
	else {
		echo "not found";
	}
	
	//header('Location: main.php');
	die();
?>