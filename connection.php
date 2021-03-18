<?php
$servername = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "bloggie";
// Creating connection 
$con = mysqli_connect($servername, $db_username, $db_pass, $db_name);
// Check Connction
if (!$con) {
    // header("location:404.php");
}


