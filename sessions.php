<?php 
session_start();

$_SESSION["username"] = "Flying Ice Cream";
$_SESSION["email"] = "flyingicecream@example.com";

//retrieve session data

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Sessions</title>
</head>
<body>
	<h1>PHP Sessions: maintaining state</h1>
	<h2>Sessions allows your application to track users.</h2>
	<?php 

echo "Session variables are set.";

	?>
	<br>
<a href="phpoutput.php">View Session</a>
</body>
</html>