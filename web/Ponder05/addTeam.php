<?php 
	require_once('db.php'); 
	session_start();
	$db = get_db();
	$_SESSION['team'] = array();

	$query = 'SELECT pokemon_name FROM pokemon;';
	$stmt = $db->prepare($query);
	$stmt->execute();
	$pokemon_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$pokemon_team=$_POST['pokemon'];
	foreach ($item as $key => $value) {
	
		array_push($_SESSION['team'], $value);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Team</title>
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
		</div> <!--end of sidebar flexbox-->
		<div class="main">
		<h1>Add New team</h1>
		<form action="teamToDb.php" method="POST">
		<input type="text" name="team_name" placeholder="Team Name"><br>
			<?php
				for ($i = 0; $i < 6; $i++){

					echo "<select id='pokemon_select'>";
					echo "<option value='empty'>Empty Slot</option>";
					print_r($pokemon);
					print_r($pokemon_list);
					foreach($pokemon_list as $pokemon) {
						$pokemon_name = $pokemon['pokemon_name'];

						echo "<option value='" . $pokemon_name . "' name=pokemon[]" . "</option>";						

					}
					echo "</select>";
				}

			?>
		<br>
		<input type="submit" value="Add Team">
		</form>
		</div><!--end of main flexbox-->
	</div>

</body>
</html>