<?php
include "../z_db.php";
$quiz_id = $_POST['quiz_id'];
$quiz_atndnc = $_POST['quiz_atndnc'];
$mark_quiz_atnds_qry = ($quiz_atndnc == 'on') ? "UPDATE reg_quiz SET is_present = 1 WHERE id = $quiz_id;" : "UPDATE reg_quiz SET is_present = 0 WHERE id = $quiz_id;";
$mark_quiz_atnds = mysqli_query($con, $mark_quiz_atnds_qry);
echo $mark_quiz_atnds;