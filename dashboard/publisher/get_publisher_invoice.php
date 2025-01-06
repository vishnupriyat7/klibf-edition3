<?php
include "../z_db.php";
$invoiceNo = $_POST['invoiceNo'];
$userId = $_POST['userId'];
$query_dup_pub_billno = "SELECT id FROM coupon_publisher_invoice WHERE user_id = $userId AND invoice_no = $invoiceNo;";
$result_dup_pub_billno = mysqli_query($con, $query_dup_pub_billno);
$dup_pub_billno = $result_dup_pub_billno->fetch_assoc();
echo json_encode($dup_pub_billno);