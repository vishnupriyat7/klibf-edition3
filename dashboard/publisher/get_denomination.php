<?php
include "../z_db.php";
$slno = $_POST['slno'];
$invoiceNo = $_POST['invoiceNo'];
// var_dump($invoiceNo);die;
$query_deno = "SELECT cpdn.denomination FROM coupon_distribution cpdist JOIN coupon_denomination cpdn ON cpdist.denom_id = cpdn.id  WHERE cpdist.serial_no = '$slno';";
$result_deno = mysqli_query($con, $query_deno);
$slno_deno = $result_deno->fetch_assoc();
// var_dump($slno_deno);
$query_slno_dup = "SELECT cps.id FROM coupon_publisher_serialno cps JOIN coupon_distribution cd ON cps.cpn_slno = cd.id WHERE cd.serial_no = '$slno'";
$result_slno_dup = mysqli_query($con, $query_slno_dup);
$slno_dup = $result_slno_dup->fetch_assoc();
// var_dump($slno_dup);
echo json_encode([$slno_deno, $slno_dup]);
// echo json_encode($slno_dup);

