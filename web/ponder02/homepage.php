<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
  	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
	<h1>Welcome to my page!</h1>
	<br>
	<ul>
		<li><a href="assignments.php">Web II Assignments</a></li>
		<li><a href="https://www.pokemon.com/us/">Pokemon Official Page</a></li>
		<li><a href="https://www.byui.edu">BYU-Idaho Home Page</a></li>
	</ul>
	<table><tr><td>
	<img src="me.jpg" alt="Me"></td>
	<td>My name is Dean. One of my favorite things is Pokemon! I've been playing pokemon
		since I was 5. My favorite Pokemon is <a href="https://www.pokemon.com/us/pokedex/flygon">Flygon.</a> I'm currently trying to catch as many shiny Pokemon as I can. I currently
		have 97 shiny Pokemon.</td>
		<td id="flygon"><i class="caption">Hover over me to see Flygon's shiny form</i></td></tr></table>
<?php 
	date_default_timezone_set('America/Denver');
	$info = getdate();
	$time = $info['hours'] . " : " . $info['minutes'] . " : " . $info['seconds'];
	echo "The current time is: $time";
?>
</body>
</html>