<?php
$servername = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "bloggie";
// Creating connection 
$con = mysqli_connect($servername, $db_username, $db_pass, $db_name);
// Check Connction
if (!$con) {
    header("location:404.php");
}


$query = "SELECT * FROM `categories`LIMIT 1";
$result = mysqli_query($con, $query);



if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]."<br>";
       
    }
}

