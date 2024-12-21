<?php
include "../z_db.php";
$chellanId = $_POST['chellanId'];
$current_date = new DateTime();
$date = date_format($current_date, "Y-m-d H:i:s");
$max_value = "SELECT MAX(invoice_no) as invoice_no FROM challan";
$max_value_dtls = mysqli_query($con, $max_value);
$res_max_value = mysqli_fetch_row($max_value_dtls);
$invoice_maxval = $res_max_value[0];
$next_invoice_val = (int) $invoice_maxval + 1;
$get_invoice_query = "SELECT invoice_no FROM challan WHERE id = '$chellanId'";
$cehllan_invoice_result = mysqli_query($con, $get_invoice_query);
$chellan_invoice_no = $cehllan_invoice_result->fetch_assoc();
if ($chellan_invoice_no['invoice_no']) {
    $updateQuery = "UPDATE challan SET status = 'A', approved_date = '$date' WHERE id='$chellanId'";
} else {
    $updateQuery = "UPDATE challan SET status = 'A', approved_date = '$date', invoice_no = '$next_invoice_val' WHERE id='$chellanId'";
}
$result = mysqli_query($con, $updateQuery);
echo json_encode($result);
