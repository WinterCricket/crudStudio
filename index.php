

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

		// echo "<h2>Here is your PHP service!</h2><br>";

		$foodCart = array("spinach"=>"5","beans"=>"3","avocadoes"=>"6", "blueberries"=>"8","mackerel"=>"4","oatmeal"=>"3");
		$flength = count($foodCart);
		
		// echo "Here is what is in my food box: <br>";
		// for ($x = 0; $x < $flength; $x++){

		// 	echo $foodCart[$x];
		// 	echo "<br>";
		// }

		echo $foodCart["mackerel"];
	 	
	 ?>
	
</body>
</html>