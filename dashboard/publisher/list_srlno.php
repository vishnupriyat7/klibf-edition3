<?php
include "../z_db.php";
$couponDenom_id = $_POST['couponDenom_id'];
$query_slno = "SELECT * from coupon_distribution WHERE denom_id = '$couponDenom_id';";
// var_dump($query_slno);die;
$result_slno = mysqli_query($con, $query_slno);
// var_dump($result_slno);die;
$slno_list = $result_slno->fetch_all();
// var_dump($slno_list);
echo json_encode($slno_list);
// var_dump()

