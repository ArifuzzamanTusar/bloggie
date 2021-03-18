<?php
    session_start();

    if(isset($_SESSION['21d6f40cfb511982e4424e0e250a9557']))
    {

        $logged_user=  $_SESSION['21d6f40cfb511982e4424e0e250a9557'];
        

        include "connection.php";
        $admin_query = " SELECT * FROM `author` WHERE email LIKE '$logged_user' ";
        // echo $admin_query;
        $result= mysqli_query($con,$admin_query);
        if (mysqli_num_rows($result) > 0) {
           
            while($row = mysqli_fetch_assoc($result)) {

                
                $email = $row["email"];
                $userid= $row["id"];
                // $username = $row["username"];
                $fname = $row["firstname"];
                $lname = $row["lastname"];
                
                $phone= $row["phone"];
                $bio = $row["bio"];
                $city= $row["city"];
                $nid = $row["nid"];
                $gender = $row["gender"];
            
                $password = $row["password"];
                $user_status = $row["status"];

                $company = $row["company"];
                $position = $row["position"];

                $profile_picture = $row["avater_image"];

                // creating backup profile pic
                if (strlen($profile_picture) < 5) {
                    $profile_picture = "avater.png";
                }
                
                
                
                
                
            }
        }
        
        // if ($user_status=="pending") {
        //     header("location:pending.php?user=$username");
           
        // }
        // if ($user_status=="banned") {
        //     header("location:banned.php?user=$username");
           
        // }
   
        
    }

    
    else
    {
        header("location:login.php");
    }

?>

