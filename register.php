<?php
//PAGE SETTINGS
$page_id = 1002;
$page_tittle = "Become an Auuthor";
?>
<?php include 'header.php' ?>


<div class="container-fluid">

    <!-- Page Content      -->
    <div class="container">
        <div class="pt-3 pb-3">
            <p>Already an Author? <a href="login.php">Log in</a></p>

            <div class="php-works text-danger">

                <!-- validation -->
                <!-- |||||||||||||||||||||||||||||| -->



                <?php
                if (isset($_POST['request_for_user'])) {

                    $new_gender = $_REQUEST['gender'];

                    $new_fname = $_REQUEST['first_name'];
                    $new_lname = $_REQUEST['last_name'];

                    $new_email = $_REQUEST['email'];
                    $new_phone = $_REQUEST['phone'];

                    $new_address = $_REQUEST['address'];
                    $new_city = $_REQUEST['city'];
                    $new_country = $_REQUEST['country'];
                    $new_full_address = $new_address . ", " . $new_city . ", " . $new_country;

                    $new_jobtitle = $_REQUEST['job_title'];
                    $new_jobcompany = $_REQUEST['job_company'];

                    $new_nid = $_REQUEST['nid'];

                    $new_1pass = $_REQUEST['password1'];
                    $new_2pass = $_REQUEST['password2'];

                    if ($new_1pass == $new_2pass) {
                        $new_password = $new_1pass;
                        $md5_new_password = md5($new_password);
                    } else {
                        $pass_error = "password didnt matched";
                    }

                    $new_status = "pending";

                    // post__images

                    #file name with a "random number" so that similar dont get replaced
                    $post_image = rand(1000, 10000) . "-" . $_FILES["post-img"]["name"];

                    #temporary file name to store file
                    $tname = $_FILES["post-img"]["tmp_name"];

                    #upload directory path
                    $uploads_dir = 'uploads/author__image';

                    #TO move the uploaded file to specific location
                    move_uploaded_file($tname, $uploads_dir . '/' . $post_image);





                    if (!isset($new_password)) {
                        $primary_error = "Check Errors";
                        $no_pass = "Password arent matching";
                    } else {
                        // inserting 
                        //INSERT INTO `author` (`id`, `firstname`, `lastname`, `gender`, `email`, `phone`, `avater_image`, `bio`, `city`, `nid`, `company`, `position`, `password`, `status`, `date`) 
                        //VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', current_timestamp());
                        $new_user_query = "INSERT INTO `author` (`firstname`, `lastname`, `gender`, `email`, `phone`, `avater_image`,`city`, `nid`, `company`, `position`, `password`, `status`) 
                                                                     VALUES ('$new_fname','$new_lname','$new_gender', '$new_email', '$new_phone','$post_image','$new_full_address','$new_nid','$new_jobcompany', '$new_jobtitle', '$md5_new_password','$new_status');";
                        if (mysqli_query($con, $new_user_query)) {


                            $product_up_ok = "Successfull!" . "<br>" . "Your account is now under review";
                            echo '<div class="alert-light text-success text-center py-3">' . $product_up_ok . '</div>';
                            // header("location:manage-topic.php");
                ?>
                            <!-- suuccess -->
                            <div class="toast_mgs done">
                                <div>

                                    <lottie-player src="https://assets5.lottiefiles.com/datafiles/8UjWgBkqvEF5jNoFcXV4sdJ6PXpS6DwF7cK4tzpi/Check Mark Success/Check Mark Success Data.json" background="transparent" speed="1" style="height: 45px; " loop autoplay></lottie-player>
                                </div>
                                <div>Apply Successfull! </div>
                            </div>

                <?php



                        } else {
                            $product_up_failed = "Failed";
                            echo '<div class="alert-light text-danger text-center py-3">' . $product_up_failed . '</div>';
                            echo mysqli_error($con);
                        }
                    }
                }

                ?>

                <!-- end -->

                <!-- header error  -->
                <?php
                if (isset($primary_error)) {

                ?>
                    <div class="text-light p-2 bg-danger">

                        <?php echo $primary_error; ?>

                    </div>
                <?php
                }
                ?>

                <!-- header error ends -->


                <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-12">
                        <label class="form-check-label"> Gender </label> <br>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="" value="Male" checked>Mr. &nbsp;
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="" value="Female"> Ms.
                            </label>
                        </div>

                    </div>
                    <div class="col-xl-6">


                        <label for="">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id="" aria-describedby="helpId" placeholder="">


                    </div>
                    <div class="col-xl-6">

                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="" aria-describedby="helpId" placeholder="">


                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">Email *</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" required>


                    </div>
                    <div class="col-xl-6">

                        <label for="">Phone Number</label>
                        <input type="number" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" required>


                    </div>
                </div>

                <label for="">Address</label>
                <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="">

                <div class="row">
                    <div class="col-xl-6">

                        <label for="">City</label>
                        <input type="text" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="">


                    </div>
                    <div class="col-xl-6">

                        <label for="">State/Country</label>
                        <input type="text" class="form-control" name="country" id="" aria-describedby="helpId" placeholder="">


                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">Job Tittle</label>
                        <input type="text" class="form-control" name="job_title" id="" aria-describedby="helpId" placeholder="">


                    </div>
                    <div class="col-xl-6">

                        <label for="">Company/Institute</label>
                        <input type="text" class="form-control" name="job_company" id="" aria-describedby="helpId" placeholder="">


                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">National ID card number *</label>
                        <input type="text" class="form-control" name="nid" id="" aria-describedby="helpId" placeholder="" required>


                    </div>
                    <div class="col-xl-6">

                        <label for="">Profile Picture *</label>
                        <label for=""></label>
                        <input type="file" class="form-control-file" name="post-img" id="" placeholder="" aria-describedby="fileHelpId" required>



                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <div class="form-group">
                            <label for="">Password *</label>
                            <input type="password" class="form-control" name="password1" id="" placeholder="" required>
                        </div>


                    </div>
                    <div class="col-xl-6">

                        <div class="form-group">
                            <label for="">Re-type Password *</label>
                            <input type="password" class="form-control" name="password2" id="" placeholder="" required>
                        </div>



                    </div>
                </div>
                <div class="text-danger"> <?php if (isset($no_pass)) {
                                                echo $no_pass;
                                            } ?></div>
                <div class="p-3"></div>
                <button name="request_for_user" type="submit" class="btn btn-primary">APPLY FOR AUTHOR</button>
                <div class="p-3"></div>
            </form>
        </div>

    </div>
</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<?php

if (isset($primary_error)) {
?>
    <!-- failed  -->
    <div class="toast_mgs failed">
        <div>

            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_f1cFsO.json" background="transparent" speed="1" style="height: 45px; width: 45px; margin-right: 10px; " loop autoplay></lottie-player>
        </div>
        <div>Something Wrong! </div>
    </div>
<?php
}
?>






<!-- including footers -->
<?php include 'footer.php'; ?>