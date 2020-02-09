<?php
	require "internshipProgram.php";
	$db = get_db();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Internship Resources</title>
</head>
<body>
	<h1> Internship Resources </h1>
	<?PHP
$statement = $db->query('SELECT username FROM user_intern');
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$username = $row['username'];
	
	echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
}
?>
</body>
</html> 
