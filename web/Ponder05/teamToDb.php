<?php
	session_start();
	require_once('db.php'); 
	$db = get_db();
	$_SESSION['team'] = array();

	$pokemon = $_POST['pokemon'];
	// foreach ($pokemon as $key => $value) {
	// 	array_push($_SESSION['team'], $value);
	// 	echo "$value<br>";
	// }

	$team_name = htmlspecialchars($_POST['team_name']);
	$team_pokemon = $_POST['pokemon_name'];

	$query = 'INSERT INTO team_name FROM team VALUES (:team_name);'; 
	$stmt = $db->prepare($query);
	$stmt->bindValue(":team_name", $team_name, PDO::PARAM_STR);
	$stmt->execute();
	$pokemon_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>