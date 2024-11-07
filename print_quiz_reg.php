<?php
include "config.php";
$quiz_reg_id = $_POST['quiz_id'];
$query_quiz_reg = "select a.*, b.name as zone, c.dt_name as district, d.category as category from reg_quiz a join quiz_zone b on a.zone_id=b.id join district c on a.district_id=c.id join quiz_category d on a.category_id=d.id where a.id = '$quiz_reg_id'";
$result_quiz_reg = mysqli_query($conn, $query_quiz_reg);
$quiz_reg_det = $result_quiz_reg->fetch_all();
echo json_encode($quiz_reg_det);