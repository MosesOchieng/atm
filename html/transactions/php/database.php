<?php

// index.php
header("Location:");
exit();

include 'signup.html';

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ATM";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }

 if(isset($_POST['submit'])){
    $Username = $_POST['Username'];
    $First = $_POST['firstname'];
    $Last = $_POST['lastname'];
    $email = $_POST['email'];
    $Password = $_POST['pass'];
    $rptPass = $_POST['rptpass'];
 }

 $sql = "INSERT INTO transact(username,email,pass,confirm,name1,name2) VALUES('$Username','$email','$Password','$rptPass','$First','$Last')";

 if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$gender\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>