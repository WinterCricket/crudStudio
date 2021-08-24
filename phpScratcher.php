<?php 

	//$message = date("m/d/y");

	$message = scandir("C:mamp");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>PHP Scratcher: PHP Scratch Pad</title>
 </head>
 <body>
 	<h1>PHP Scratcher</h1>

 	<?php 

echo print_r($message);

 ?>


 </body>
 </html>