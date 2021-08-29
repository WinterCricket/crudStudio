<?php 
session_start();

if( $_SESSION['isLoggedIn'] ){
	
	} 
	else {
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
	<main>
		<div>
		<h1>You are now in the Swiss Money Zone.</h1>
        <p>You have found significant wealth.</p><p> 7,670,530 USD as been transferred via onetime automated Swiss Access code 75G6743H</p> <p>into the account of the subject. </p><p>All subsequent taxes you now owe your home country</p><p> is your responsibility.</p>
        </div>
	</main>
	
</body>
</html>