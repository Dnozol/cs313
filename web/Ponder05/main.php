<?php 
	require_once('db.php'); 
	$db = get_db();
	start_session();

	$query = 'SELECT team_name, pokemon_name FROM team_pokemon tp JOIN team t ON t.team_id = tp.team_id JOIN pokemon p on p.pokemon_id = tp.pokemon_id;';
	$stmt = $db->prepare($query);
	$stmt->execute();
	$teams = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$_SESSION['trainer'] = $_POST['trainer'];
	//echo "<p>$_POST['trainer']</p>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo htmlspecialchars($_POST["username"]); ?> </title>
	<link rel="stylesheet" type="text/css" href="ponder05.css">
	<meta charset="utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<?php include 'banners.php';?>
	<div class="flex-container">
		<div class="sidebar">
			<a href="teamEditor.php">Team Editor</a>
		</div><!--end of sidebar flexbox-->
		<div class="main">
			<h1>Current Teams</h1>
			<?php
				foreach($teams as $team) {
					$team_name = $team['team_name'];
					$pokemon_name = $team['pokemon_name'];


					echo "<p>$team_name</p>";
					echo "<p>$pokemon_name</p><br>";
				}
			?>
		</div><!--end of main flexbox-->
	</div><!--end of flex container-->
</body>
</html>