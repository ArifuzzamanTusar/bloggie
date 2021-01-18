<!-- including header files  -->
<?php include 'header.php' ?>

<div class="container-fluid">
    <div class="p-3"></div>
    <div class="row">
        <div class="col-xl-8">
            <hero-section>


                <div class="row">

                    <?php
                    for ($i = 0; $i < 4; $i++) {

                    ?>
                        <div class="col-xl-6  mb-3">
                            <div class="widget">
                                <div class="overlay p-2 ">
                                    <div class="front_content">
                                        <span class="cat_name">category name</span><span class="cat_popular">Popular</span>
                                        <h4>Lorem eligendi consectetur ullam perspiciatis officia quos.</h4>
                                        <span class="top_meta"><img src="uploads/authors/avater.png" alt=""> Author Name</span> <span class="top_meta"> | 12 /11 /2020</span>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam ducimus quaerat magnam optio laboriosam fuga. Eius, provident? Fugit, voluptatibus!</p>
                                        <a href="">Read More</a>

                                    </div>
                                </div>
                                <img class="post_image" src="uploads/post_images/green.jpg" alt="">

                            </div>

                        </div>

                    <?php
                    }
                    ?>

                </div>

            </hero-section>

            <blog-section>
                <div class="widget p-2 mb-3"> Recent Blogs</div>
                <?php
                for ($i = 0; $i < 10; $i++) {

                ?>
                    <div class=" mb-3">
                        <div class="row ">
                            <div class="col-xl-6">
                                <a href="">
                                    <div class="row_category">Unknown</div>
                                </a>
                                <img class="row-image" src="uploads/post_images/green.jpg" alt="">


                            </div>
                            <div class="col-xl-6">
                                <div class="content_widget widget">
                                    <div class="content">
                                        <span class="top_meta">12 /11 /2020</span>

                                        <a class="blog-tittle" href="">
                                            <div>
                                                Lorem eligendi consectetur ullam perspiciatis officia quos.
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="row-post-author"><img src="uploads/authors/avater.png" alt=""> Author Name </div>
                                        </a>
                                        <p class="post_exc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam ducimus quaerat magnam optio laboriosam fuga. Eius, provident? Fugit, voluptatibus!</p>
                                        <a href="">Read More</a>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                <?php
                }
                ?>

            </blog-section>
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
        </div>
    </div>



</div>








<!-- including footers -->
<?php include 'footer.php'; ?>