<?php 
session_start();

if(isset($_session['isLoggedin'])){

	} else {
		header('Location: login.php?isBlock=true');
	}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>Protected Page PHP</title>
</head>
<body>
	<nav>
		<ul>
			<li class="active"><a href="login.php">Home</a></li>
			<li><a href="protected_page.php">Protected page</a></li>
			<li><a href="login.php">Contact</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</nav>
	<h1>You are now in the Swiss Money Zone.</h1>
</body>
</html>