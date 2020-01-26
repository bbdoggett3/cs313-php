<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>

	<h1>Checkout</h1>
	<h4>Address</h4>
	
	<form action ="confirmation.php" method= "GET">
		Name: <br>
		First: <input type="text" name="firstName">
		Last: <input type ="text" name="lastName"> <br>
		Street:  <input type="text" name="street"> <br>
		City: <input type="text" name="city"> <br>
		State: <input type="text" name="state" placeholder= "EX: ID, UT, WA"><br>
		Zip Code: <input type="number" name="zip"> <br>
		<input type="submit">
	</form>

</body>
</html>
