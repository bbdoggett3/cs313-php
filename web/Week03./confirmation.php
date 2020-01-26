<?php 

	//Data grabbed from the checkout.php form and stored in variables on the right side.
	$firstName = htmlspecialchars$_GET['firstName'];
	$lastName  = htmlspecialchars$_GET['lastName'];
	$sreet     = htmlspecialchars$_GET['street'];
	$city      = htmlspecialchars$_GET['city'];
	$zip       = htmlspecialchars$_GET['zip'];

?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Confirmation Page</title>
</head>
<body>
	<!--Confirmation page-->
	<h1>Order Confirmation</h1>
	<p>Dear <?php echo $firstName; ?> <?php echo $lastName; ?> </p> <br> 
	<p>Your order has been confirmed and will be sent to the following address:</p><br>

	<!--This will display the address-->
	<div id=confirmAddress>
		<p><?php echo $street; ?></p>
		<p><?php echo $city; ?></p><br>
		<p><?php echo $zip; ?></p><br>
	</div>


</body>
</html>
