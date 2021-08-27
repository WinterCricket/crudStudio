<?php 
session_start();

function greeting($name = "Jay Doe"){
   return "Well, hello $name!";
}
function insideScoop($secretname = "shhhh!"){
    return "The secret name is $secretname <br>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Output: PHP Output Page</title>
</head>
<body>
  <h1>PHP Output</h1>

  <?php 
  //echo greeting(insideScoop());

  echo greeting($_SESSION["username"]);
 echo print_r($_SESSION);
  echo "<br>";
  echo $_SESSION["email"];
  ?>


</body>
</html>