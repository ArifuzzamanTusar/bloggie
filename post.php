<!-- getting post contents  -->
<?php
if (isset($_GET["id"])) {
    $post_id = $_GET["id"];
} else {
    header('location:404.php');
}
include 'connection.php';
$topic_query = "SELECT *  FROM `posts` WHERE  `id` = $post_id";
$result = mysqli_query($con, $topic_query);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {



        $post_id = $row["id"];
        $post_name = $row["tittle"];
        $post_slug = $row["slug"];
        $post_disc = $row["disc"];
        $post_image = $row["image"];
        $post_topic = $row["category"];
        $post_topic_id = $row["category_id"];
        $post_author_user = $row["author_user"];
        $post_author_id = $row["author_id"];
        $post_date = date_create($row["date"]) ;
        $topic_id = $row["category_id"];
    }
}
?>

<?php

//PAGE SETTINGS
$page_id = 1002;
$page_tittle = $post_name;
?>
<!-- including header files  -->
<?php include 'header.php' ?>

<style>
    body {
        background-image: url('uploads/post__image/<?php echo $post_image ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* filter:blur(5px); */
        backdrop-filter: blur(90px);

    }
</style>
<image-section>
    <div style="background-image: url('uploads/post__image/<?php echo $post_image ?>');" class="image-wrapper">



    </div>
    <div class="image-overlay">
        <div class="text-center">


            <div class="breadcrumb-area">
                <div class="heading">
                    <h2><?php echo $post_name ?></h2>
                </div>
                <div class="breadcrub-text">
                    <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a> / <a href="blogs.php">posts</a> / <span><?php echo $post_slug ?></span> <br> <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i>  <?php echo date_format($post_date, "l , d F Y - g:i a");   ?>
                </div>

            </div>

        </div>

    </div>

</image-section>

<content-section>
    <div class="container">
        <div class="post-body">
            <div class="text-center">
                <img class="post_author" src="uploads/author__image/avater.png" alt="">
            </div>
            <div class="author text-center p-2">
                <h5>Author: <a href=""> <?php echo $post_author_user ?></a></h5>
            </div>

            <div class="post-content p-4">
                <?php echo $post_disc ?>
               

            </div>
            <div class="p-3">
            <hr>
                <h6>Share With Love</h6>

                <div class="social-share">
                    <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=https://<?php echo $site_url?>/post/<?php echo $post_slug?>"><i class="fab fa-facebook"></i></a>
                    
                    <a target="blank" href="http://twitter.com/intent/tweet?text=<?php echo $post_slug?>&url=<?php echo $site_url?>/post/<?php echo $post_slug?>"><i class="fab fa-twitter"></i></a>
                    <a target="blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $site_url?>/post/<?php echo $post_slug?>"><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab  fa-instagram"></i></a>
                    <a href=""><i class="fab fa-pinterest"></i></a>
                    
                </div>
                <hr>
            </div>
        </div>
    </div>

</content-section>

<div class="p-5"></div>










<!-- including footers -->
<?php include 'footer.php'; ?>