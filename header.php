<!-- includes -->

<!-- functions starts  -->

<?php



// login menu
$author_image = "avater.png";
$login_status = "false";

if ($login_status == "true") {
    $false_class = "hide";
} else {
    $true_class = "hide";
}


?>


<!-- function ends  -->
<!doctype html>
<html lang="en">

<head>

    <link rel="icon" type="image/png" href="uploads/theme/favicon.png" />
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fa library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <!-- ----- -->

    <!-- include theme style  -->
    <link rel="stylesheet" href="css/theme.css">


    <!-- respnsive  -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>


    <!-- header Navbar Starts  -->
    <nav class="navbar navbar-expand-lg nav-colors">

        <a class="navbar-brand" href="index.php">
            <img src="uploads/theme/logo-light.png" width="" height="30" class="d-inline-block align-top" alt="">

        </a>

        <div class="mobile_search">
            <a data-toggle="modal" type="button" href="#exampleModal"><i class="fas fa-search"></i></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <div class="menubar" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">

                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <!-- category  -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        for ($i = 0; $i < 5; $i++) {

                        ?>
                            <a class="dropdown-item" href="#">Category <?php echo $i ?></a>
                            <div class="dropdown-divider"></div>
                        <?php
                        }
                        ?>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <div class="">

                <!-- <a class="desktop_search" data-toggle="modal" type="button" href="#exampleModal"><i class="fas fa-search"></i></a> -->

                <a class="<?php echo $false_class ?> become_an_author_btn" href=""> Become an Author</a>
                <a class="<?php echo $true_class ?>" href="profile.php">
                    <img height="30px" src="uploads/authors/<?php echo $author_image ?>" alt="">
                </a>
            </div>
        </div>
    </nav>


    <!-- SEARCH MODAL FOR MOBILE & TAB -->
    <div class="modal fade search_modal_overlay" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content search_modal">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Search</h5> -->
                    <form action="search.php" method="GET">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <input style="display: none;" name="search" type="submit" value="">
                    </form>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    ...
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>




    <!-- Header Navbar Ends  -->