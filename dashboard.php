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



    <div class="container dashboard-card widget ">
        <div class="row">
            <div class="col-xl-4 dashboard-mmenu-bg">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    <!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-addpost" role="tab" aria-controls="v-pills-manage" aria-selected="false">Add Post</a> -->

                    <a class="nav-link" href="addpost.php">Add Post</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-manage" aria-selected="false">Manage Posts</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    <a class="nav-link" href="#exampleModalCenter" data-toggle="modal">Logout </a>
                </div>

            </div>
            <div class="col-xl-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\HOME\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <div class="container-fluid">
                            <div class="text-center">
                                <div class="pt-5">
                                    <img height="100px" width="100px" class="dash_image" src="uploads/author__image/<?php echo $profile_picture; ?>" alt="">
                                </div>
                                <br>
                                <div class="welcome p-2">
                                    Welcome, <?php echo $fname . " " . $lname ?>
                                </div>
                                <a href="addpost.php" type="button" name="" id="" class="btn btn-primary "> Create Your New Post</a>
                            </div>
                        </div>

                    </div>
                    <!-- \\\\\\\\\\\\\\\\\\\\\\PROFILE\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="container-fluid">
                            <div class="text-center">
                                <div class="pt-3">
                                    <a href=""><img height="70px" width="70px" class="dash_image" src="uploads/authors/avater.png" alt=""></a>
                                </div>
                                <div class="row text-left  pt-3">
                                    <div class="col-xl-6">
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>

                                    </div>
                                    <div class="col-xl-12">
                                        <div class=""><i class="fas fa-arrow-right"></i> Jonathon Doe </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\Add Post\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                    <div class="tab-pane fade" id="v-pills-addpost" role="tabpanel" aria-labelledby="v-pills-manage-tab">

                        <div class="pt-3 pb-3 container-fluid das_pans " style="overflow-y: scroll;">
                            kjhaskhdkashk


                        </div>
                    </div>

                    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\MANAGE POSTS \\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-manage-tab">

                        <div class="pt-3 pb-3 container-fluid das_pans " style="overflow-y: scroll;">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Post Title</th>
                                        <th>TIME</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $topic_query = " SELECT * FROM `posts`  ORDER BY id DESC";
                                    $result = mysqli_query($con, $topic_query);
                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $topic_id = $row["id"];
                                            $topic_tittle = $row["tittle"];
                                            $topic_date= $row["date"];
                                    ?>
                                            <tr>
                                                <td><?php echo $topic_id ?></td>
                                                <td> <?php echo $topic_tittle?></td>
                                                <td> <?php echo $topic_date?></td>
                                                <td><a name="" id="" class="btn btn-primary" data-toggle="modal" href="#auid<?php echo $i ?>" role="button"><i class="fas fa-wrench"></i></a></td>
                                            </tr>

                                            <!-- =========  MODAL  ================ -->
                                            <div class="modal fade" id="auid<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                            <?php echo $i ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ======================== MODAL ===================== -->
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>


                        </div>
                    </div>

                    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\  SETTINGS \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="das_pans center">
                            <div class="p-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#up_profile">
                                    Update Profile
                                </button>

                            </div>
                            <div class="p-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#password">
                                    Change Password
                                </button>

                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>






</div>

<!-- Log Out  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are You Sure To Log out
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="logout.php?logout" type="button" class="btn btn-danger text-white">Log Out</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal- Profile Update  -->
<!-- Modal -->
<div class="modal fade" id="up_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Change Password  -->
<!-- Modal -->
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<!-- including footers -->
<?php include 'footer.php'; ?>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#example').dataTable({
        "ordering": false
    });
</script>