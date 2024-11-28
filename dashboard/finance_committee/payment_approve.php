<?php
include "../z_db.php";
$chellanId = $_POST['chellanId'];
// Inialize session
// session_start();
// Check, if username session is NOT set then this page will jump to login page

// $toupdate = mysqli_real_escape_string($con, $_GET["id"]);
// var_dump($toupdate);die;
$current_date = new DateTime();
$date = date_format($current_date, "Y-m-d H:i:s");


$max_value = "SELECT MAX(invoice_no) as invoice_no FROM challan";
$max_value_dtls = mysqli_query($con, $max_value);

$res_max_value = mysqli_fetch_row($max_value_dtls);

$invoice_maxval = $res_max_value[0];
$next_invoice_val = (int) $invoice_maxval + 1;
// if (strlen((string) $next_invoice_val) == 1) {
//     $invoice_no = 'KLIBF III-01-2025-000' . (string) $next_invoice_val;
// } else if (strlen((string) $next_invoice_val) == 2) {
//     $invoice_no = 'KLIBF III-01-2025-00' . (string) $next_invoice_val;
// } else {
//     $invoice_no = 'KLIBF III-01-2025-0' . (string) $next_invoice_val;
// }
$updateQuery = "UPDATE challan SET status = 'A', approved_date = '$date', invoice_no = '$next_invoice_val' WHERE id='$chellanId'";
// var_dump($updateQuery);die;
$result = mysqli_query($con, $updateQuery);
// var_dump($result);
echo json_encode($result);
// if ($result) {
//     print "<center> Stall Allotment Successfully Approved</center>";
// } else {
//     print "<center>Action could not be performed, check back again</center>";
// }
