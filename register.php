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
            <form action="" method="post">
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                    <div class="col-xl-6">

                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">Email</label>
                        <input type="email" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                    <div class="col-xl-6">

                        <label for="">Phone Number</label>
                        <input type="number" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                </div>

                <label for="">Address</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Help text</small>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">City</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                    <div class="col-xl-6">

                        <label for="">State/Country</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">Job Tittle</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                    <div class="col-xl-6">

                        <label for="">Company/Institute</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">

                        <label for="">National ID card number</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>

                    </div>
                    <div class="col-xl-6">

                        <label for="">Profile Picture</label>
                        <label for=""></label>
                        <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Help text</small>


                    </div>
                </div>
                <div class="p-3"></div>
                <button type="submit" class="btn btn-primary">APPLY FOR AUTHOR</button>
                <div class="p-3"></div>
            </form>
        </div>

    </div>
</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<?php
$a = 1;
if ($a ==2 ) {
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