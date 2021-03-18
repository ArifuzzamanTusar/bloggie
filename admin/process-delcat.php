<?php
include '../connection.php';
if (isset($_GET['id'])) {
    $del_id = $_GET['id'];
    $sql = "DELETE FROM `categories` WHERE `categories`.`id` = $del_id";

    if (mysqli_query($con, $sql)) {
        header("location:manage-category.php");
    } else {
        echo mysqli_error($con);
    }
}
