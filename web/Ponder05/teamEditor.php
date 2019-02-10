<?php require('db.php'); ?>
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

			<button>Remove Team(s)</button>
			<button>Add Team</button>
			<button>Edit Team</button>
		</div> <!--end of sidebar flexbox-->
		<div class="main">
			<h1>Team Editor</h1>
				<?php
				// Create and execute prepared statement
			$stmt = $db->prepare('SELECT team_name, pokemon_1, pokemon_2, pokemon_3, pokemon_4,
								  pokemon_5, pokemon_6 FROM team WHERE id = :id');
			$stmt->bindValue(':id', $id, PDO::PARAM_INT);
			$stmt->execute();

			$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

			if (sizeof($rows) < 1) {
				echo '<h1>You have no team</h1>';
			} else {
				$row = $rows[0];

				$name = $rows['team_name'];
				$p1 = $rows['pokemon_1'];
				$p2 = $rows['pokemon_2'];
				$p3 = $rows['pokemon_3'];
				$p4 = $rows['pokemon_4'];
				$p5 = $rows['pokemon_5'];
				$p6 = $rows['pokemon_6'];
				
				echo '<table><th><td>' . $name . '</td></th/><tr><td>' . $p1 . '</td><td>' . $p2 . '</td><td>' . $p3 .
					 '</td></tr><tr><td>' . $p4 . '</td><td>' . $p5 . '</td><td>' . $p6 . '</td></tr></table>';
			}
		</div><!--end of main flexbox-->
	</div>

</body>
</html>