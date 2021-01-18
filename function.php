

<?php
function count_table($con, $type)
{
    echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM `$type`"));
}

function count_cat_post($con, $type)
{
    echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM `$type`"));
}

?>