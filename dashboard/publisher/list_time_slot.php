<?php
include "../z_db.php";
$eventDt_id = $_POST['eventDt_id'];
if ($eventDt_id == 1) {
    $query = "SELECT * FROM time_slot WHERE id IN (1, 2, 3)";
}
if ($eventDt_id == 7)
    $query = "SELECT * FROM time_slot WHERE id IN (4,5,6)";
$reg_quiz_zone = mysqli_query($con, $query);
$counter = 0;
$quizHtmlData = "";
$quizDatas = $reg_quiz_zone->fetch_all();
foreach ($quizDatas as $quiz_zone) {
    if (!$quiz_zone[26]) {
        $quiz_zone[28] = '';
    }
    if (!$quiz_zone[21]) {
        $quiz_zone[23] = '';
    }
    $quiz_check = ($quiz_zone[31] == '1') ? "checked" : "";
    $quizHtmlData = $quizHtmlData . '<tr><td>' . ++$counter . '</td><td><input type="checkbox" class="form-control form-check-input" id="quiz_prsnt' . $quiz_zone[0] . '" onclick="saveQuizAttendance(' . $quiz_zone[0] . ');"' . $quiz_check . '></td><td>KLIBF03-Q' . $quiz_zone[0] . '</td><td>' . $quiz_zone[33] . '</td><td>' . $quiz_zone[34] . '</td><td>' . $quiz_zone[35] . '</td><td>' . $quiz_zone[4] . '</td><td>' . $quiz_zone[5] . '</td><td>' . $quiz_zone[6] . '</td><td>' . $quiz_zone[7] . '</td><td>' . $quiz_zone[8] . '</td><td>' . $quiz_zone[9] . '</td><td>' . $quiz_zone[10] . '</td><td>' . $quiz_zone[11] . '</td><td>' . $quiz_zone[13] . '</td><td>' . $quiz_zone[12] . '</td><td>' . $quiz_zone[15] . '</td><td>' . $quiz_zone[16] . '</td><td>' . $quiz_zone[17] . '</td><td>' . $quiz_zone[19] . '</td><td>' . $quiz_zone[18] . '</td><td>' . $quiz_zone[21] . '</td><td>' . $quiz_zone[22] . '</td><td>' . $quiz_zone[23] . '</td><td>' . $quiz_zone[25] . '</td><td>' . $quiz_zone[24] . '</td><td>' . $quiz_zone[26] . '</td><td>' . $quiz_zone[27] . '</td><td>' . $quiz_zone[28] . '</td><td>' . $quiz_zone[30] . '</td><td>' . $quiz_zone[29] . '</td><td>' . $quiz_zone[32] . '</td></tr>';
}
echo json_encode($quizHtmlData);