<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Response</title>
</head>
<body>
	<h1>PHP Form Processing</h1>
	<?php 

		$name = $_POST['name'];
		$password = $_POST['password'];

           if($password != "flavinoid") {
           	echo "Password failure. Try again at a later date.";
           } else {
           	echo "Success, $name! The secret Swiss Bank account number it 75G6743H";
           }

	?>


</body>
</html>