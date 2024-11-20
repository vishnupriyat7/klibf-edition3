<?php
include "../z_db.php";
$quiz_id = $_POST['quiz_id'];
$query = "DELETE FROM reg_quiz WHERE id = $quiz_id;";
$reg_quiz_delete = mysqli_query($con, $query);
if ($reg_quiz_delete) {
    echo "1";
} else {
    echo "0";
}