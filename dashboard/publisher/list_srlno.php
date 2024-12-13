<?php
include "config.php";
$couponDenom_id = $_POST['couponDenom_id'];
$query_slno = "select * from coupon_distribution where couponDenom_id = '$couponDenom_id'";
$result_slno = mysqli_query($conn, $query_slno);
$district_list = $result_district->fetch_all();
echo json_encode($district_list);
?>
