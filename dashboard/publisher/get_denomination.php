<?php
include "../z_db.php";
$slno = $_POST['slno'];
$invoiceNo = $_POST['invoiceNo'];
$userId = $_POST['userId'];
$slno_range = explode("-", $slno);
$slnoFrom = (int) trim($slno_range[0]);
if (count($slno_range) > 1) {
    $slnoTo = (int) trim($slno_range[1]);
    $query_deno_to = "SELECT cpdn.denomination FROM coupon_distribution cpdist JOIN coupon_denomination cpdn ON cpdist.denom_id = cpdn.id  WHERE cpdist.serial_no = '$slnoTo';";
    $result_deno_to = mysqli_query($con, $query_deno_to);
    $slno_deno_to = $result_deno_to->fetch_assoc();
    for ($i = $slnoFrom; $i <= $slnoTo; $i++) {
        $query_slno_dup = "SELECT cps.id FROM coupon_publisher_serialno cps JOIN coupon_distribution cd ON cps.cpn_slno = cd.id WHERE cd.serial_no = '$i'";
        $result_slno_dup = mysqli_query($con, $query_slno_dup);
        $slno_dup = $result_slno_dup->fetch_assoc();
    }
}
$query_deno_from = "SELECT cpdn.denomination FROM coupon_distribution cpdist JOIN coupon_denomination cpdn ON cpdist.denom_id = cpdn.id  WHERE cpdist.serial_no = '$slnoFrom';";
$result_deno_from = mysqli_query($con, $query_deno_from);
$slno_deno_from = $result_deno_from->fetch_assoc();
$query_slno_dup = "SELECT cps.id FROM coupon_publisher_serialno cps JOIN coupon_distribution cd ON cps.cpn_slno = cd.id WHERE cd.serial_no = '$slnoFrom'";
$result_slno_dup = mysqli_query($con, $query_slno_dup);
$slno_dup = $result_slno_dup->fetch_assoc();
if ($slno_dup) {
    $slno_dup_status = 1;
}
$query_dup_pub_billno = "SELECT id FROM coupon_publisher_invoice WHERE user_id = $userId AND invoice_no = $invoiceNo;";
$result_dup_pub_billno = mysqli_query($con, $query_dup_pub_billno);
$dup_pub_billno = $result_dup_pub_billno->fetch_assoc();
echo json_encode([$slno_deno_from, $slno_deno_to, $slno_dup_status, $dup_pub_billno]);