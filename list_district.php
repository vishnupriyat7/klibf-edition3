<?php
include "config.php";
$zone_id = $_POST['zone_id'];
$query_district = "select * from district join zone_district on district.id=zone_district.district_id where zone_id = '$zone_id'";
$result_district = mysqli_query($conn, $query_district);
$district_list = $result_district->fetch_all();
echo json_encode($district_list);
