<?php
	require_once('dbConnect.php');
	$db = get_db(); //connect to the database

	$query ='SELECT id, name, course_code FROM course';
	$stmt->prepare($query);
	$stmt->execute();
	$courses = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Notes App</h1>
	<h2>Courses</h2>
	<ul>
		<?php
			foreach ($courses as $course) {
				$id = $course['id'];
				$name = $course['name'];
				$course_code = $course['course_code'];

				echo "<li>$course_code - $name</li><br>";
			}
		?>
	</ul>

</body>
</html>