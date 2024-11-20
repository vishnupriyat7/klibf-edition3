<?php
include "../z_db.php";
$eventDt_id = $_POST['eventDt_id'];
if ($eventDt_id == 1)
    $query = "SELECT * FROM time_slot WHERE id NOT IN (1, 2, 3)";
else if ($eventDt_id == 7)
    $query = "SELECT * FROM time_slot WHERE id NOT IN (6, 7, 8)";
else
    $query = "SELECT * FROM time_slot";
$time_slots = mysqli_query($con, $query);
echo json_encode($time_slots->fetch_all());
