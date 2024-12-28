<?php
include "../z_db.php";
$slno = $_POST['slno'];
$invoiceNo = $_POST['invoiceNo'];
$query_deno = "SELECT cpdn.denomination FROM coupon_distribution cpdist JOIN coupon_denomination cpdn ON cpdist.denom_id = cpdn.id  WHERE cpdist.serial_no = '$slno';";
$result_deno = mysqli_query($con, $query_deno);
$slno_deno = $result_deno->fetch_assoc();
$query_slno_dup = "SELECT * FROM coupon_publisher_serialno cps JOIN coupon_publisher_invoice cpi on cps.cpn_pub_inv = cpi.id JOIN coupon_distribution cd ON cps.cpn_slno = cd.id WHERE cd.serial_no = '$slno' AND cpi.invoice_no = '$invoiceNo'";
$result_slno_dup = mysqli_query($con, $query_slno_dup);
$slno_dup = $result_slno_dup->fetch_assoc();
echo json_encode($slno_deno);

