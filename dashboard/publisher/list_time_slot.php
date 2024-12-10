<?php
include "../z_db.php";
$eventDt_id = $_POST['eventDt_id'];
$querySlotFull = "SELECT
time_slot
FROM (
SELECT
    CASE
        WHEN day_prfr1 = '$eventDt_id' THEN time_prfr1
        WHEN day_prfr2 = '$eventDt_id' THEN time_prfr2
        WHEN day_prfr3 = '$eventDt_id' THEN time_prfr3
    END AS time_slot
FROM day_time_prefer
) AS filtered_slots
WHERE time_slot IS NOT NULL
GROUP BY time_slot
HAVING COUNT(*) >=20;";
$time_slots_full = mysqli_query($con, $querySlotFull);
$timeSlotsFullResult = $time_slots_full->fetch_all();
$slotFullArray = [];
foreach ($timeSlotsFullResult as $timeSlotFull) {
    array_push($slotFullArray, $timeSlotFull['0']);
}
$slotFullArrayString = implode(',', $slotFullArray);

if ($eventDt_id == 1)
    $query = "SELECT * FROM time_slot WHERE id NOT IN (1, 2, 3) AND id NOT IN ($slotFullArrayString)";
else if ($eventDt_id == 7)
    $query = "SELECT * FROM time_slot WHERE id NOT IN (6, 7, 8) AND id NOT IN ($slotFullArrayString)";
else
    $query = "SELECT * FROM time_slot WHERE id NOT IN ($slotFullArrayString)";

$time_slots = mysqli_query($con, $query);
echo json_encode($time_slots->fetch_all());
