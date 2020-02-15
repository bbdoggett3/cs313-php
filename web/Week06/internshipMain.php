<?php
	require "internshipProgram.php";
	$db = get_db();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Internship Resources</title>
	<style>

		img {
			width: 200px; 
			height: 200px;

		}

	</style>
</head>
<body>
	<h1> Internship Resources </h1>
	<?PHP
$statement = $db->query('SELECT username FROM user_intern');
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$username = $row['username'];
	
	echo "<p>Username:<strong>$username</strong><p>";
}
?>

<table border="1">
	<thead>
	<tr>
		<th>Company</th>
		<th>Job</th>
		<th>Major</th>
		<th>Location</th>
	</tr>
    </thead>
	<!-- ICCU -->
	<tbody>
	<tr>
		<!--Company -->
		<td> <img src="https://cdn.glitch.com/875fcc3a-ee91-4d48-806c-d5b121d9c21c%2FIccu%20logo.jpg?v=1581799606057"></td>
		<!-- Job -->
		<td>Software Engineer</td>
		<!-- Major -->
		<td>Computer Science or equivalent</td>
		<!-- Location -->
		<td>Pocatello, Idaho</td>
	</tr>

	<!-- ROUTE -->
	<tr>
		<!--Company -->
		<td> <img src="https://cdn.glitch.com/875fcc3a-ee91-4d48-806c-d5b121d9c21c%2Froute%20logo.jpg?v=1581799640227"></td>
		<!-- Job -->
		<td>Web Developer</td>
		<!-- Major -->
		<td>Computer Science or equivalent</td>
		<!-- Location -->
		<td>Lehi, Utah</td>
	</tr>

	<!--THE CHURCH OF JESUS CHRIST OF LATTER DAY SAINTS-->
	<tr>
		<!--Company -->
		<td> <img src="https://cdn.glitch.com/875fcc3a-ee91-4d48-806c-d5b121d9c21c%2Fchruch%20logo.png?v=1581799433851"></td>
		<!-- Job -->
		<td>Software Engineer</td>
		<!-- Major -->
		<td>Computer Science or equivalent</td>
		<!-- Location -->
		<td>Salt Lake City, Utah</td>
	</tr>
    </tbody>

</table>
</body>
</html>
