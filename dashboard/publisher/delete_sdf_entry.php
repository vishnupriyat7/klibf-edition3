<?php
include "../z_db.php";
$sdfId = $_POST['sdfId'];
$delete_sdf_query = "DELETE FROM sdf WHERE id = $sdfId";
$result_delete_sdf = mysqli_query($con, $delete_sdf_query);
if ($result_delete_sdf) {
    echo json_encode(true);
}