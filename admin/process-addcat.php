<?php 
include '../connection.php';


if (isset($_POST['add_cat'])) {
    $cat_name = $_REQUEST["cat-name"];
    $cat_slug = $_REQUEST["cat_slug"];

   



    $add_sql = "INSERT INTO `categories` (`slug`, `name`, `status`) VALUES ('$cat_slug', '$cat_name', 'true');";

    

    if (mysqli_query($con, $add_sql)) {
        header("location:manage-category.php");
        
        
        
    }
    else{
        mysqli_error($con);
    }
}


?>