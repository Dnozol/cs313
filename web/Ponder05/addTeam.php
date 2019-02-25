<?php 
	require_once('db.php'); 
	$db = get_db();

	$query = 'SELECT pokemon_name FROM pokemon;';
	$stmt = $db->prepare($query);
	$stmt->execute();
	$pokemon_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Team</title>
	<link rel="stylesheet" type="text/css" href="ponder05.css">
	<meta charset="utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<script type="text/javascript">
 		function repeatList(repeat) {
 			for(var i = 0; i < repeat; i++){

	 			<?php
	 				echo "<select id='pokemon_select'>";
					echo "<option value='empty'>Empty Slot</option>";

					foreach($pokemon_list as $pokemon) {
						$pokemon_name = $pokemon['pokemon_name'];

						echo "<option value='" . $pokemon_name . "'>" . $pokemon_name . "</option>";
						echo "<option value='" . $pokemon_name . "'>" . $pokemon_name . "</option>";
						echo "<option value='" . $pokemon_name . "'>" . $pokemon_name . "</option>";
						echo "<option value='" . $pokemon_name . "'>" . $pokemon_name . "</option>";
						echo "<option value='" . $pokemon_name . "'>" . $pokemon_name . "</option>";
						echo "<option value='" . $pokemon_name . "'>" . $pokemon_name . "</option>";
						
						echo "</select>";	
					}
				
		
				?>// end php
			} // end for loop
		}
 	</script>
</head>
<body>
	<?php include('banners.php'); ?>
	<div class="flex-container">
		<div class="sidebar">
		<a href="main.php">Return to HomePage</a>


		</div> <!--end of sidebar flexbox-->
		<div class="main">
		<h1>Add New team</h1>
		<script type="text/javascript">repeatList(6);</script>
		<br>
		<input type="submit" value="Add Team">
		</div><!--end of main flexbox-->
	</div>

</body>
</html>