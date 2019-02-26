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
print_r($_SESSION);
print_r($pokemon);
	$team_name = htmlspecialchars($_POST['team_name']);
	$team_pokemon = $_POST['pokemon_name'];

	$query = 'INSERT INTO team (team_name) VALUES ("' . $team_name . '");'; 
	$stmt = $db->prepare($query);
	$stmt->execute();
	$pokemon_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>