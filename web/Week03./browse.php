<!DOCTYPE html>
<html>
<head>
	<title>Browse Items</title>
</head>
<body>

	<form action ="cart.php" method = "GET">

			<h1>Items For Purchase</h1>
	<!--e. CECKKBOXES-->
        <div id="checkBoxes">
    		<table border="1">
			<thead>
			<tr>
				<th>Items to Buy</th>
				<th>Price</th>
			</tr>
    		</thead>
    	<tbody>
    		<tr>
    			<td>
    				<input type="checkbox" id="xbox">
    				Xbox One
    			</td>
    			<td>Price: $300</td>
    		</tr>
    		<tr>
    			<td>
    				<input type="checkbox" id="ps4">
    				PS4    				
    			</td>  
    			<td>Price: $350</td>  				
    		</tr>
    		<tr>
    			<td>
    				<input type="checkbox" id="nintendo">
    				Nintendo Switch   				
    			</td> 
    			<td>Price: $300</td>   			
    		</tr>
    		<tr>
    			<td>
     				<input type="checkbox" id="pc">
    				PC   				
    			</td> 
    			<td>Price: $500</td>   			
    		</tr>
    	</tbody>
    </table>

    <input type="submit">
    </div>
	</form>
	
</body>
</html>
