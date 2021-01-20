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
                    for ($i = 0; $i < 4; $i++) {

                    ?>
                        <div class="col-xl-6  mb-3">
                            <div class="widget">
                                <div class="overlay p-2 ">
                                    <div class="front_content">
                                        <span class="cat_name">category name</span><span class="cat_popular">Popular</span>
                                        <h4>Lorem eligendi consectetur ullam perspiciatis officia quos.</h4>
                                        <span class="top_meta"><img src="uploads/authors/avater.png" alt=""> Author Name &nbsp;&nbsp;</span> <span class="top_meta"> <i class="fa fa-calendar"></i> 29th May </span>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam ducimus quaerat magnam optio laboriosam fuga. Eius, provident? Fugit, voluptatibus!</p>
                                        <a class="read_more" href="">Read More <i class="fas fa-arrow-right"></i></a>

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

            <!-- blog sections   -->

            <blog-section>
                <div class="widget p-2 mb-3"> Recent Blogs</div>
                <?php
                for ($i = 0; $i < 10; $i++) {

                ?>
                    <div class=" mb-3">
                        <div class="row ">
                            <div class="col-xl-6">
                                <a href="">
                                    <div class="row_category">Category</div>
                                </a>
                                <img class="row-image" src="uploads/post_images/mountain.jpg" alt="">


                            </div>
                            <div class="col-xl-6">
                                <div class="content_widget widget">
                                    <div class="content">
                                        
                                        <a href="#">
                                            <div class="row-post-author"><img src="uploads/authors/avater.png" alt=""> Author Name </div>
                                        </a>

                                        <a class="blog-tittle" href="">
                                            <div>
                                                Lorem eligendi consectetur ullam perspiciatis officia quos.
                                            </div>
                                        </a>
                                        <span class="sidebar_meta"><i class="fa fa-calendar"></i> 29th May &nbsp; <i class="fa fa-comments"></i> 20 </span>

                                        <p class="post_exc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam ducimus quaerat magnam optio laboriosam fuga. Eius, provident? Fugit, voluptatibus!</p>
                                        <a class="read_more" href="">Read More <i class="fas fa-arrow-right"></i></a>

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


            <!-- Recent Blogs -->
            <div class="widget mt-3 p-2"> Recent Blogs</div>

            <?php
            for ($i = 0; $i < 6; $i++) {

            ?>

                <div class="mt-2 p-2 widget">
                    <div class="row">
                        <div class="col-4">
                            <img height="100%" width="100%" class="image_fit image_scroll" src="uploads/post_images/food.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><a class="sidebar__heading" href="">Lorem eligendi consectetur ullam perspiciatis officia quos.</a> </td>

                                    </tr>

                                    <tr class="sidebar_meta">
                                        <td style="width: 50%;"><i class="fas fa-user"></i> John Doee &nbsp;</td>
                                        <td style="width: 50%;"> <i class="fa fa-calendar"></i> 29th May</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <?php
            }


            ?>

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
                for ($i = 0; $i < 6; $i++) {

                ?>
                    <div class="sidebar__heading d-flex  justify-content-between sidebar_box">



                        <div> Category</div>
                        <div><i class="fas fa-pen-square"></i> <?php echo $i ?> </div>



                    </div>

                <?php
                }


                ?>
                </tbody>
                </table>
            </div>




        </div>
    </div>



</div>








<!-- including footers -->
<?php include 'footer.php'; ?>