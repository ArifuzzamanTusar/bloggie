<?php
//PAGE SETTINGS
$page_id = 1002;
$page_tittle = "BLOGGIE HOME";
?>
<!-- including header files  -->
<?php include 'header.php' ?>

<div class="container-fluid">
    <div class="p-3"></div>
    <div class="row">

        <!-- Left Side  -->
        <div class="col-xl-8">

            <!-- hero sections contents  -->
            <hero-section>


                <div class="row">

                    <?php
                    $topic_query = " SELECT * FROM `posts`  ORDER BY id DESC LIMIT 10";
                    $result = mysqli_query($con, $topic_query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $post_id = $row["id"];
                            $topic_id = $row["category_id"];
                            $topic_name = $row["category"];
                            $post_tittle = $row["tittle"];
                            $post_dsc = $row["disc"];


                            $author_name = $row["author_user"];

                            $post_date = date_create($row["date"]);
                            $post_image = $row["image"];
                            $commments = $row["comment"];
                    ?>
                            <div class="col-xl-6  mb-3">
                                <div class="widget">
                                    <div class="overlay p-3 ">
                                        <div class="front_content">
                                            <span class="cat_name"><?php echo $topic_name?></span><span class="cat_popular">Popular</span>
                                            <h4><?php echo $post_tittle?></h4>
                                            <span class="top_meta"><img src="uploads/authors/avater.png" alt=""> <?php echo $author_name?> &nbsp;&nbsp;</span> <span class="top_meta"> <i class="fa fa-calendar"></i> <?php echo date_format($post_date, "d F");   ?></span>
                                            <p><?php echo strip_tags(substr($post_dsc, 0, 200)) ; ?> </p>
                                            <a class="read_more" href="post.php?id=<?php echo $post_id ?>">Read More <i class="fas fa-arrow-right"></i></a>

                                        </div>
                                    </div>
                                    <img class="post_image" src="uploads/post__image/<?php echo $post_image?>" alt="">

                                </div>

                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>

            </hero-section>

            <!-- blog sections   -->

            <blog-section>
                <div class="widget p-2 mb-3"> Recent Blogs</div>
                <?php
                $topic_query = " SELECT * FROM `posts`  ORDER BY id DESC LIMIT 10";
                $result = mysqli_query($con, $topic_query);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $post_id = $row["id"];
                        $topic_id = $row["category_id"];
                        $topic_name = $row["category"];
                        $post_tittle = $row["tittle"];
                        $post_dsc = $row["disc"];


                        $author_name = $row["author_user"];

                        $post_date = date_create($row["date"]);
                        $post_image = $row["image"];
                        $commments = $row["comment"];
                ?>
                        <div class=" mb-3">
                            <div class="row ">
                                <div class="col-xl-6">
                                    <a href="">
                                        <div class="row_category"><?php echo $topic_name ?></div>
                                    </a>
                                    <img class="row-image" src="uploads/post__image/<?php echo $post_image ?>" alt="">


                                </div>
                                <div class="col-xl-6">
                                    <div class="content_widget widget">
                                        <div class="content">

                                            <a href="#">
                                                <div class="row-post-author"><img src="uploads/authors/avater.png" alt=""> <?php echo $author_name ?> </div>
                                            </a>

                                            <a class="blog-tittle" href="">
                                                <div>
                                                    <?php echo $post_tittle ?>
                                                </div>
                                            </a>
                                            <span class="sidebar_meta"><i class="fa fa-calendar"></i> <?php echo date_format($post_date, "d F");   ?> &nbsp; <i class="fa fa-comments"></i> <?php echo $commments ?> </span>

                                            <p class="post_exc"><?php echo strip_tags(substr($post_dsc, 0, 200)) ;?> </p>

                                            <a class="read_more" href="post.php?id=<?php echo $post_id ?>">Read More <i class="fas fa-arrow-right"></i></a>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                <?php
                    }
                }
                ?>

            </blog-section>
            <All-blog-btn-section>
                <div class="container">
                    <div class="text-center p-5">
                        <a name="" id="" class="btn btn-primary" href="blogs.php" role="button">Read All Blogs</a>
                    </div>
                </div>
            </All-blog-btn-section>
        </div>
        <div class="col-xl-4">
            <div class="widget pt-2 pl-2 pr-2 ">
                <form action="search.php" method="GET">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <input style="display: none;" name="search" type="submit" value="">
                </form>
            </div>


            <!-- Recent Blogs -->
            <div class="widget mt-3 p-2"> Recent Blogs</div>

            <?php
            $topic_query = " SELECT * FROM `posts`  ORDER BY id DESC";
            $result = mysqli_query($con, $topic_query);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $post_id = $row["id"];
                    $post_tittle = $row["tittle"];
                    $author_name = $row["author_user"];

                    $post_date = date_create($row["date"]);
                    $post_image = $row["image"];
            ?>

                    <div class="mt-2 p-2 widget">
                        <div class="row">
                            <div class="col-4">
                                <img height="120px" width="100%" class="image_fit image_scroll" src="uploads/post__image/<?php echo $post_image ?>" alt="">
                            </div>
                            <div class="col-8">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><a class="sidebar__heading" href="post.php?id=<?php echo $post_id ?>"><?php echo $post_tittle ?></a> </td>

                                        </tr>

                                        <tr class="sidebar_meta">
                                            <td style="width: 50%;"><i class="fas fa-user"></i> <?php echo $author_name ?> &nbsp;</td>
                                            <td style="width: 50%;"> <i class="fa fa-calendar"></i> <?php echo date_format($post_date, "d F g:i a");   ?></td>
                                            <!-- date_format($topic_date,"d F g:i a"); -->
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
            <div class="sticky-sidebar">


                <!-- Top Author  -->
                <div class="widget mt-3 p-2">Top Authors </div>

                <?php
                for ($i = 0; $i < 6; $i++) {

                ?>

                    <div class="mt-2 p-2 widget">
                        <div class="row">
                            <div class="col-2">
                                <img max-height="50px" width="50px" class="image_fit image_scroll" src="uploads/authors/avater.png" alt="">
                            </div>
                            <div class="col-8">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><a class="sidebar__heading" href="">Mr. John Doe</a> </td>

                                        </tr>

                                        <tr class="sidebar_meta">
                                            <td style="width: 50%;"><i class="fas fa-pen-square"></i> Total writes: 25 &nbsp;</td>
                                            <td style="width: 50%;"> <i class="fa fa-comments"></i> Comments: 20</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="col-2">
                                <a class="sidebar_social" href=""><i class="fab fa-linkedin"></i></a>

                            </div>
                        </div>
                    </div>

                <?php
                }


                ?>


                <!-- Top Categories  -->
                <div class="widget mt-3 p-2">Top Categories </div>



                <div class="mt-2  widget transparent">

                    <?php
                    $topic_query = " SELECT * FROM `categories`  ORDER BY id DESC LIMIT 6";
                    $result = mysqli_query($con, $topic_query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $topic_id = $row["id"];
                            $topic_name = $row["name"];
                    ?>
                            <a href="categories.php?id=<?php echo $topic_id ?>">
                                <div class="sidebar__heading d-flex  justify-content-between sidebar_box">



                                    <div> <?php echo $topic_name ?></div>
                                    <div><i class="fas fa-pen-square"></i> <?php
                                                                            $query2 = mysqli_query($con, "select * from `posts` where category_id='$topic_id'");
                                                                            echo "  " . mysqli_num_rows($query2) . "";

                                                                            ?></div>



                                </div>
                            </a>

                    <?php
                        }
                    }

                    ?>
                    </tbody>
                    </table>
                </div>

                <div class="p-5"></div>
            </div>




        </div>
    </div>



</div>








<!-- including footers -->
<?php include 'footer.php'; ?>