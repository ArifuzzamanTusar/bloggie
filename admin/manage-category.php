<?php
$page_id = 101;
$page_tittle = "manage Categories";
include 'admin-header.php';
?>

<div class="container-fluid">
    <div class="page_tittle p-1 pl-3 mt-4 mb-4  ">
        <h4><?php echo $page_tittle ?></h4>
    </div>
</div>

<!-- content starts here  -->



<div class="container-fluid pb-5">

    <div class="row">
        <div class="col-lg-4">
            <div class="pb-5">
                <form action="process-addcat.php" method="post">
                    <label for="">Category Name</label>
                    <input id="tittle" name="cat-name" type="text" class="form-control" required>
                    <label for="">Category Slug</label>
                    <input id="slug" name="cat_slug" type="text" class="form-control" readonly>
                    <button name="add_cat" type="submit" class="btn btn-primary mt-3">Add to Category</button>
                </form>
            </div>

        </div>
        <div class="col-lg-8">
            <div class="">

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $topic_query = " SELECT * FROM `categories`  ORDER BY id DESC";
                        $result = mysqli_query($con, $topic_query);
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                $topic_id = $row["id"];
                                $topic_name = $row["name"];
                                $topic_slug = $row["slug"];
                        ?>



                                <!-- ============= -->

                                <tr>
                                    <td><?php echo $topic_id ?></td>
                                    <td><?php echo $topic_name ?></td>
                                    <td><?php echo $topic_slug ?></td>
                                    <td><a name="" id="" class="btn btn-primary" data-toggle="modal" href="#auid<?php echo $topic_id ?>" role="button"><i class="fas fa-wrench"></i></a></td>
                                </tr>

                                <!-- =========  MODAL  ================ -->
                                <div class="modal fade" id="auid<?php echo $topic_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <form action="process-updatecat.php" method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $topic_name ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <label for="">Category Name</label>
                                                    <input id="tittle" name="cat-name" type="text" class="form-control" required value="<?php echo $topic_name?>">
                                                    <label for="">Category Slug</label>
                                                    <input id="slug" name="cat_slug" type="text" class="form-control" readonly value="<?php echo $topic_slug?>">
                                                    


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button  name="update_cat" type="submit" class="btn btn-primary">Update</button>
                                                    <a href="process-delcat.php?id=<?php echo $topic_id ?>" type="button" class="btn btn-danger">Delete</a>
                                                </div>
                                            </form>
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
    </div>

</div>













<?php include 'admin-footer.php'; ?>