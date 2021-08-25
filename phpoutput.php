<?php 

function greeting($name = "Jay Doe"){
   return "Well, hello $name!";
}
function insideScoop($secretname = "shhhh!"){
    return "The secret name is $secretname <br>";
}
session_start();

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
  echo greeting(insideScoop());
  echo $_SESSION["username"];
  echo "<br>";
  echo $_SESSION["email"];
  ?>


</body>
</html>