<?php
//PAGE SETTINGS
$page_id = 1002;
$page_tittle = "Contact";
?>
<?php 
include 'header.php';
include 'connection.php';

?>



<div class="body">
    <div class="container-fluid">


        <div class="row ">
            <div class="col-md-12 col-sm-12 col-xl-6">
                <div class="col_1">
                    <div class="container">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_bp1bwvhv.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xl-6">
                <div class="col_1">
                    <div class="container">
                        <div class="row pt-5 d-flex justify-content-between align-items-center">
                            <div class="col-md-12 col-sm-12 col-xl-6">
                                <h3 class=" ">Contact/Support

                                </h3>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-6">
                                <!-- inserting -->
                                <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                                <?php

                                if (isset($_POST['contact_submit'])) {
                                   
                                    $name= $_REQUEST["fname"]." ".$_REQUEST["lname"];
                                    $ct_email = $_REQUEST["email"];
                                    $ct_subject = $_REQUEST["subject"];
                                    $ct_mgs = $_REQUEST["mgs__discription"];
                                   





                                    $ct_sql = "INSERT INTO `contact` (`name`, `subject`,`email`,`message`) VALUES ('$name', '$ct_subject','$ct_email','$ct_mgs');";

                                    if (mysqli_query($con, $ct_sql)) {

                                ?>
                                        <!-- html -->
                                        <div class="p-1 text-right text-white bg-success d-flex justify-content-between align-items-center">
                                            <lottie-player src="https://assets8.lottiefiles.com/datafiles/8UjWgBkqvEF5jNoFcXV4sdJ6PXpS6DwF7cK4tzpi/Check Mark Success/Check Mark Success Data.json" background="transparent" speed="1" style="width: 35px; height: 35px;" loop autoplay>
                                            </lottie-player>Message sent sccessfully
                                            &nbsp;
                                        </div>
                                        <!-- html -->
                                <?php
                                    }
                                    else{
                                        echo mysqli_error($con);
                                        echo"hoyni";
                                    }
                                }

                                ?>





                            </div>


                        </div>
                        <hr>


                        <form action="" method="post">

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xl-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input name="fname" type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" value="">
                                    </div>

                                </div>
                                <div class="col-md-12 col-sm-12 col-xl-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input name="lname" type="text" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1" value="">
                                    </div>

                                </div>

                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input required name="email" type="email" class="form-control" placeholder="Email " aria-label="Username" aria-describedby="basic-addon1" value="">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input required name="subject" type="text" class="form-control" placeholder="Subject " aria-label="Username" aria-describedby="basic-addon1" value="">
                            </div>

                            <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

                            <textarea class="form-control" name="mgs__discription" id="editor2"></textarea>
                            <!-- <textarea name="news_descrip" id="editor2" rows="10"> </textarea> -->
                            <script>
                                CKEDITOR.replace('editor2');
                            </script>
                            <div class="text-right pt-2">
                                <button name="contact_submit" type="submit" class="btn btn-primary "><i class="fas fa-paper-plane"></i> Send</button>

                            </div>


                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<!-- including footers -->
<?php include 'footer.php'; ?>