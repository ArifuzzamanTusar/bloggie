<?php
require_once('connection.php');


if (isset($_POST['login'])) {
    $login_email = $_POST['username'];
    $login_pass = $_POST['password'];
    $login_pass_md = md5($login_pass);
    

    // Empty Validation
    if (empty($login_email) || empty($login_pass)) {

        header("location:login.php?Empty= Fields cannot be empty");
    }


    // check
    else {
        $query = "select `email` , `password` from `author` where 	`email` ='" . $login_email . "' and `password` ='" . $login_pass_md . "'";

        $result = mysqli_query($con, $query);

        if (mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['21d6f40cfb511982e4424e0e250a9557'] = $login_email;
            echo $_SESSION['21d6f40cfb511982e4424e0e250a9557'];
            header("location:dashboard.php");
        } else {
            header("location:login.php?Invalid= Username or password wrong");
            echo $query. "<br>";
            echo $login_email. "<br>";
            echo  $login_pass. "<br>". $login_pass_md;
        }
    }
} else {
    echo 'No login inputs';
}
