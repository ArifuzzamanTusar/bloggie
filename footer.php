    <footer-section>
        <div class="footer-area pt-5 pb-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="footer-content">
                            <img width="70%" src="uploads/theme/logo-dark.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum nemo impedit vero qui quidem at ab debitis ex voluptas, commodi, id neque unde quas, eveniet minus perspiciatis praesentium voluptatibus.</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="footer-content">
                            <h5>Quick Links</h5>
                            
                                <li><a href="">Home</a></li>
                                <li><a href="">All Blogs</a></li>
                                <li><a href="">About Bloggie</a></li>
                                <li><a href="">All authors</a></li>
                                <li><a href="">Contact Bloggie</a></li>
                            
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="footer-content">
                            <h5>Categories</h5>
                            
                                <?php
                                $topic_query = " SELECT * FROM `categories`  ORDER BY id DESC LIMIT 6";
                                $result = mysqli_query($con, $topic_query);
                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $topic_id = $row["id"];
                                        $topic_name = $row["name"];
                                ?>
                                        
                                        <li><a href="categories.php?id=<?php echo $topic_id?>"><?php echo $topic_name ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="footer-content">
                            <h5>Contact</h5>
                            <div class="social-icon">

                            </div>
                            <div class="subscribe">
                                <div class="">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-9">

                                                <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Email Address" required>

                                            </div>
                                            <div class="col-3">
                                                <button type="submit" class="btn btn-success">Subscribe</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="p-2 text-white  m-0 text-center">
                &copy; <?php echo date("Y"); ?> All right reserved - Bloggie
            </div>
        </div>
    </footer-section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- addictional script  -->
    <!-- menu bar  -->

    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>


    </body>

    </html>