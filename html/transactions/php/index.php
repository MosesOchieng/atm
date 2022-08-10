<!DOCTYPE html>
<html>
<head>

<style>
  body{
    text-align: center;
  }
</style>
</head>

<body>
You details are being Process with the Database if True You will be redirected to the Main Page


<?php
include'signup.php';
?>
<?php
// defining variables and setting to empty values 
$Username = $Password  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = test_input($_POST["Username"]);
  $Password = test_input($_POST["Password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $Username;
echo $Password;

?>
<?php

header( "refresh:5;url=../signin/list/index.html" );
exit();

?>




</body>
</html>


