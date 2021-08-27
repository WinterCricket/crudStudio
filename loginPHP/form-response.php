
<?php 

		$name = $_POST['name'];
		$password = $_POST['password'];
		$message;

           if($password != "flavinoid") {

           	echo "<script> alert('Password failure. Try again at a later date.')</script>";
           	$message = "You have avoided significant wealth.";
           	echo "<script>window.history.back()</script>";
           } else {
           	echo "<script> alert('Success, $name! The secret automated Swiss Bank account number is 75G6743H')</script>";
           	$message ="<p>You have found significant wealth.</p><p> 7,670,530 USD as been transferred via onetime automated Swiss Access code 75G6743H</p> <p>into the account of $name. </p><p>All subsequent taxes you now owe your home country</p><p> is your responsibility.</p>";
           }

	?>

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

	echo $message;

 ?>

</body>
</html>