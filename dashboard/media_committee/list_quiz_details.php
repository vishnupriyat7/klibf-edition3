<?php
include "../z_db.php";
$zone_id = $_POST['zone_id'];
$category_id = $_POST['category_id'];
$district_id = $_POST['district_id'];
$query = "SELECT a.*, b.category as category, c.name as zone, d.dt_name as dist_name FROM reg_quiz a join quiz_category b on a.category_id = b.id join quiz_zone c on a.zone_id = c.id join district d on a.district_id = d.id where a.category_id = $category_id and a.zone_id = $zone_id and a.district_id = $district_id ORDER BY id DESC";
$reg_quiz_zone = mysqli_query($con, $query);
$counter = 0;
$quizHtmlData = "";
$quizDatas = $reg_quiz_zone->fetch_all();
foreach ($quizDatas as $quiz_zone) {
    if(!$quiz_zone[26]) {
        $quiz_zone[28] = '';
    }
    if(!$quiz_zone[21]) {
        $quiz_zone[23] = '';
    }
    $quizHtmlData = $quizHtmlData . '<tr><td>' . ++$counter . '</td><td>KLIBF03-Q' . $quiz_zone[0] . '</td><td>' . $quiz_zone[32] . '</td><td>' . $quiz_zone[33] . '</td><td>' . $quiz_zone[34] . '</td><td>' . $quiz_zone[4] . '</td><td>' . $quiz_zone[5] . '</td><td>' . $quiz_zone[6] . '</td><td>' . $quiz_zone[7] . '</td><td>' . $quiz_zone[8] . '</td><td>' . $quiz_zone[9] . '</td><td>' . $quiz_zone[10] . '</td><td>' . $quiz_zone[11] . '</td><td>' . $quiz_zone[13] . '</td><td>' . $quiz_zone[12] . '</td><td>' . $quiz_zone[15] . '</td><td>' . $quiz_zone[16] . '</td><td>' . $quiz_zone[17] . '</td><td>' . $quiz_zone[19] . '</td><td>' . $quiz_zone[18] . '</td><td>' . $quiz_zone[21] . '</td><td>' . $quiz_zone[22] . '</td><td>' . $quiz_zone[23] . '</td><td>' . $quiz_zone[25] . '</td><td>' . $quiz_zone[24] . '</td><td>' . $quiz_zone[26] . '</td><td>' . $quiz_zone[27] . '</td><td>' . $quiz_zone[28] . '</td><td>' . $quiz_zone[30] . '</td><td>' . $quiz_zone[29] . '</td><td>' . $quiz_zone[31] . '</td><td></td></tr>';
}
echo json_encode($quizHtmlData);

