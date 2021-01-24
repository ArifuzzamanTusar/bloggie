<?php
$page_id = 101;
$page_tittle = "author";
include 'admin-header.php';
?>

<div class="container-fluid">
    <div class="page_tittle p-1 pl-3 mt-4">
        <h4><?php echo $page_tittle ?></h4>
    </div>
</div>

<!-- content starts here  -->
<div class="pt-3 pb-3 container-fluid">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>TIME</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 50; $i++) {
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td><a name="" id="" class="btn btn-primary" data-toggle="modal"  href="#auid<?php echo $i ?>" role="button"><i class="fas fa-wrench"></i></a></td>
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
                                <?php echo $i?>
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
            ?>
        </tbody>

    </table>


</div>















<?php include 'admin-footer.php'; ?>