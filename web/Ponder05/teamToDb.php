<?php
	session_start();
	require_once('db.php'); 
	$db = get_db();
	$_SESSION['team'] = array();

	$pokemon = $_POST['pokemon'];
	foreach ($pokemon as $key => $value) {
		array_push($_SESSION['team'], $value);
		echo "$value<br>";
	}

	$team_name = htmlspecialchars($_POST['team_name']);
	$team_pokemon = $_POST['pokemon_name']

	$queryName = 'INSERT INTO team (team_name) VALUES ("$team_name");'; 
	$stmt = $db->prepare($queryName);
	$stmt->execute();
	$pokemon_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

INSERT INTO team_pokemon
VALUES
( DEFAULT
, (SELECT team_id FROM team WHERE team_name = 'EXAMPLE2')
, (SELECT pokemon_id FROM pokemon WHERE pokemon_name = 'Bulbasaur')
);

INSERT INTO team 
(team_name) VALUES ('EXAMPLE2');
