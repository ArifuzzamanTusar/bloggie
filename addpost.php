<?php
//PAGE SETTINGS
$page_id = 1002;
$page_tittle = "Dashboard";
?>
<?php

include 'dashboard-head.php';



?>



<div class="container-fluid center dash_body p-2">
    <!-- Page Content      -->



    <div class="container widget ">
        <div class="add-post p-3">
            <div class="">
                <!-- inserting  -->
                <?php
                // sessions $userid ,  $username


                if (isset($_POST['add_post'])) {



                    
                    $post_title = $_REQUEST['post_tittle'];
                    $post_slug = $_REQUEST['post_slug'];     
                    $post_disc = $_REQUEST['post__discription'];              
                    $post_topic = $_REQUEST['post__topic'];

                    // getting post topic id 

                    if ($result = mysqli_query($con, "SELECT id  FROM `categories` WHERE `name` LIKE '$post_topic'")) {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                $post_topic_id = $row["id"];
                            }
                        }
                    }

                   
                    $post_author  = $fname . " " . $lname;
                    $post_author_id = $userid;
                    $post_status = "approved";


                    // post__images

                    #file name with a "random number" so that similar dont get replaced
                    $post_image = rand(1000, 10000) . "-" . $_FILES["post-img"]["name"];

                    #temporary file name to store file
                    $tname = $_FILES["post-img"]["tmp_name"];

                    #upload directory path
                    $uploads_dir = 'uploads/post__image';

                    #TO move the uploaded file to specific location
                    move_uploaded_file($tname, $uploads_dir . '/' . $post_image);




                    // ..................................
                    //Uplaoading to database


                    $sql = "INSERT INTO `posts` (`slug`, `tittle`, `disc`, `image`, `category`, `category_id`,`author_user`, `author_id`, `post_status`) 
             VALUES ('$post_slug','$post_title', '$post_disc', '$post_image', '$post_topic', '$post_topic_id', '$post_author', '$post_author_id', '$post_status');";


                    if (empty($post_disc)) {
                        $post_error = "Sorry, Post Disc is empty, Please discribe your post";
                    } else {
                        if (mysqli_query($con, $sql)) {

                            

                            $post_up_ok = "Post Sucessfully Added";
                            echo '<div class="alert-light text-success text-center py-3">' . $post_up_ok . '</div>';
                        } else {
                            $post_up_failed = "Failed";
                            echo mysqli_error($con);
                            echo '<div class="alert-light text-danger text-center py-3">' . $post_up_failed . '</div>';
                        }
                    }
                }




                ?>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="p-3"></div>
                    <div class="widget p-3">
                        <div class="row">
                            <div class="col-3">
                                <a href="dashboard.php" class="btn btn-warning float-left">Back</a>
                            </div>
                            <div class="col-6">
                                <h4 class="text-center">Create Post</h4>
                            </div>
                            <div class="col-3">
                                <button name="add_post" type="submit" class="btn btn-primary float-right">Publish</button>
                            </div>
                        </div>

                    </div>
                    <div class="p-3"></div>

                    <!-- =======ALL postS======== -->
                    <?php
                    if (isset($post_error)) {
                    ?>
                        <div class="bg-danger p-2">
                            <div class="text-light"><?php echo $post_error ?></div>
                        </div>
                        <div class="p-3"></div>

                    <?php
                    }

                    ?>

                    <div class="row">

                        <!-- ---post design starts -->
                        <div class="col-12 pb-3">
                            <div class="widget p-2">




                                <div class="form-group">

                                    <label for="">Tittle</label>
                                    <input type="text" class="form-control" name="post_tittle" id="tittle" aria-describedby="emailHelpId" placeholder="">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://blogie.com/</span>
                                        </div>
                                        <input name="post_slug" type="text" class="form-control" id="slug" aria-describedby="basic-addon3" readonly>
                                    </div>
                                    <label for="">Discription</label>
                                    <!-- ck editor -->
                                    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

                                    <textarea class="form-control" name="post__discription" id="editor2"></textarea>
                                    <!-- <textarea name="news_descrip" id="editor2" rows="10"> </textarea> -->
                                    <script>
                                        CKEDITOR.replace('editor2');
                                    </script>
                                </div>

                                <label for="">Upload post Feature Images </label> <br>

                                <input type="file" name="post-img" required>
                                <pre> Choose jpg,jpeg,png 3:2 Ratio </pre>

                                <div class="form-group">
                                    <label for="">Select Topic</label>
                                    <select class="form-control" name="post__topic" id="">
                                        <!-- |||||||||||||||||||||||||||||||| Getting Options From Database ||||||||||||||||||| -->
                                        <?php
                                        $topic_query = " SELECT * FROM `categories`  ORDER BY id DESC";
                                        $result = mysqli_query($con, $topic_query);
                                        if (mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $topic_id = $row["id"];
                                                $topic_name = $row["name"];
                                        ?>
                                                <option value="<?php echo $topic_name ?>"><?php echo $topic_name ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

                                    </select>
                                </div>



                            </div>

                        </div>
                        <!-- topic design ends -->

                    </div>

                </form>


            </div>

        </div>
    </div>






</div>




<!-- including footers -->
<?php include 'footer.php'; ?>

<script>
    $("#tittle").keyup(function() {
        var str = $(this).val();
        var trim = $.trim(str)
        var slug = trim.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
        $("#slug").val(slug.toLocaleLowerCase())




    })
</script>