<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="form.css">
	<title>HTML Form</title>
	<style>



</style>
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
	<h1>PHP Form Processing</h1>

<div>
	<form method="POST" action="form-response.php" >
		
		Name: <input type="text" name="name">
		
		Password: <input type="password" name="password">
		
		<input type="submit">

	</form>
		
</div>
</body>
</html>
