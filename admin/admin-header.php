<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_tittle ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
    <!-- -- Datatable--- -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <!-- fa library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    
  

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="css/admin_main.css">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="list_bg_colors border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="../uploads/theme/logo-light.png" width="150px" alt=""> </div>
            <div class="list-group list-group-flush ">
                <a href="index.php" class="list-group-item list-group-item-action list_bg_colors">Dashboard</a>
                <a href="manage-category.php" class="list-group-item list-group-item-action list_bg_colors">Categories</a>
                <a href="all_author.php" class="list-group-item list-group-item-action list_bg_colors">All Authors</a>
                <a href="pending_author.php" class="list-group-item list-group-item-action list_bg_colors">Pending Authors</a>
                <a href="admins.php" class="list-group-item list-group-item-action list_bg_colors">Admins</a>
                <a href="settings.php" class="list-group-item list-group-item-action list_bg_colors">Settings</a>
                <a href="../index.php" class="list-group-item list-group-item-action list_bg_colors">Visit Website</a>
            </div>
        </div>
        <!-- sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom  d-flex justify-content-between">
                <div class="side_toggle_bar" id="menu-toggle">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img height="25px" src="../uploads/authors/avater.png" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
            </nav>