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
            <p>Not Registered? <a href="register.php">Apply for author now</a></p>
            <form action="login-process.php" method="post">


                <label for="">Email</label>
                <input name="username" type="email" class="form-control" id="" aria-describedby="helpId" placeholder="" value="user@bloggie.com">
                <small id="helpId" class="form-text text-muted">
                    <!-- validation  -->

                </small>


                <label for="">Password</label>
                <input name="password" type="password" class="form-control" id="" aria-describedby="helpId" placeholder="">




                <div class="p-3"></div>
                <button name="login" type="submit" class="btn btn-primary">Login</button>
                <small id="helpId" class="form-text text-muted">
                    <!-- validation  -->

                    <?php
                    if (@$_GET['Empty'] == true) {
                    ?>
                        <div class="alert-danger text-danger text-center"><?php echo $_GET['Empty'] ?></div>
                    <?php
                    }
                    ?>

                    <?php
                    if (@$_GET['Invalid'] == true) {
                    ?>
                        <div class="alert-danger text-danger text-center"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                    }
                    ?>

                </small>
                <div class="p-3"></div>
                <p>
                    demo user: user@bloggie.com <br>
                    demo Pass: pass
                </p>
            </form>
        </div>

    </div>
</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>



<!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->



<?php
if (@$_GET['Invalid'] == true) {
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
<!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->








<!-- including footers -->
<?php include 'footer.php'; ?>