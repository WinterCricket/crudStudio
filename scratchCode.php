

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
	<h1>This is PHP</h1>



	<?php

		

		$foodCart = array("spinach","beans","avocadoes", "blueberries","mackerel","oatmeal");
		$flength = count($foodCart);
		
		echo "Here is what is in my food box: <br>";
		for ($x = 0; $x < $flength; $x++){

			echo $foodCart[$x];
			echo "<br>";
		}

		
		
	?>
	
</body>
</html>