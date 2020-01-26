<?php 

	//Data grabbed from the browse.php form and stored in variables on the right side.
	$xbox      = htmlspecialchars$_GET['xbox'];
	$ps4       = htmlspecialchars$_GET['ps4'];
	$nintendo  = htmlspecialchars$_GET['nintendo'];
	$pc        = htmlspecialchars$_GET['pc'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>

	<h1>Your Cart</h1>
	
	<p><?php echo $xbox; ?> </p>
	<p><?php echo $ps4; ?> </p>
	<p><?php echo $nintendo; ?> </p>
	<p><?php echo $pc; ?> </p>


</body>
</html>
