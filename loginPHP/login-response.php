
<?php 
session_start();
		
		
		$userName = $_POST["userName"];

		if(trim($userName) == "Monty"){

			$_SESSION['isLoggedIn'] = true;
			header('Location: protected_page.php');

		} else {

			header('Location: login.php?badUserCredentials=true');
		}

		


	?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Response</title>
</head>
<body>
	<h1>PHP Form Processing</h1>
	


</body>
</html> -->