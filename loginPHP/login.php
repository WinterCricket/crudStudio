<?php 
session_start();



 error_reporting (E_ALL ^ E_NOTICE);
  
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="form.css">
	<title>HTML Form</title>

</head>
<body>
	<nav>
		<ul>
			<li class="active"><a href="login.php">Home</a></li>
			<li><a href="protected_page.php">Protected page</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</nav>
<h1>PHP Form Processing</h1>
	
<main>
<!-- avoid form if already logged in -->
<?php

	if($_SESSION['isLoggedIn']){

		echo "<p>You're already logged in.</p>";

} else {
// Heredoc
$theForm = <<<THEFORM

	
<p>Welcome to Swiss Accounts!</p>

<h2>Please enter your SA username and password to login: </h2>
<div>
	<form method="POST" action="login-response.php" >
		
		Name: <input type="text" name="userName" id="username">
		
		Password: <input type="password" name="password">
		
		<input type="submit">

	</form>
THEFORM;
echo $theForm;
}
?>


<?php 

$isBlock = $_GET["isBlock"];
$badUserCredentials = $_GET["badUserCredentials"];

if(isset($isBlock)){
	echo "<h2>Stop! You need the proper login.</h2>";
           	
	echo "<script>document.getElementById('username').focus();</script>";
} else if($badUserCredentials){
	echo "<h2>Username or password is wrong.</h2>";
	echo "<script>document.getElementById('username').focus();</script>";
}

 ?>

</main>

</body>
</html>
