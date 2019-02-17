<?php 
	require_once('db.php'); 
	$db = get_db();

	$query = 'SELECT team_name, pokemon_name FROM team_pokemon tp JOIN team t ON t.team_id = tp.team_id JOIN pokemon p on p.pokemon_id = tp.pokemon_id;';
	$stmt = $db->prepare($query);
	$stmt->execute();
	$teams = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Editor</title>
	<link rel="stylesheet" type="text/css" href="ponder05.css">
	<meta charset="utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<?php include('banners.php'); ?>
	<div class="flex-container">
		<div class="sidebar">
			<a href="main.php">Return to HomePage</a>
			<br><br>

			<a href="removeTeam.php">Remove Team(s)</a><br>
			<a href="addTeam.php">Add Team</a><br>
			<a href="editTeam.php">Edit Team</a><br>
		</div> <!--end of sidebar flexbox-->
		<div class="main">
			<h1>Team Editor</h1>
				<?php
					foreach($teams as $team) {
					$team_name = $team['team_name'];
					$pokemon_name = $team['pokemon_name'];

					echo "<p>$team_name</p>";
					echo "<p>$pokemon_name</p>";
				}
				?>
		</div><!--end of main flexbox-->
	</div>

</body>
</html>