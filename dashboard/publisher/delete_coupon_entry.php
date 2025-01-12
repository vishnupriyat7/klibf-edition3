<?php
include "../z_db.php";
$invoiceId = $_POST['invoiceId'];
$delete_coupn_query = "DELETE FROM coupon_publisher_serialno WHERE cpn_pub_inv = $invoiceId";
$result_delete_cupon = mysqli_query($con, $delete_coupn_query);
if ($result_delete_cupon) {
    $delete_coupn_invoice_query = "DELETE FROM coupon_publisher_invoice WHERE id = $invoiceId";
    $result_delete_cupon_invoice = mysqli_query($con, $delete_coupn_invoice_query);
}
if ($result_delete_cupon && $result_delete_cupon_invoice) {
    echo json_encode(true);
}