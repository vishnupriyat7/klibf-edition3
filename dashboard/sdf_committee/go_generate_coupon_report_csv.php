<?php
include "../z_db.php";

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fetch POST data
$from_date = $_POST['from_date'] ?? null;
$to_date = $_POST['to_date'] ?? null;

if (!$from_date || !$to_date) {
    http_response_code(400);
    echo "Invalid request: Missing 'from_date' or 'to_date'.";
    exit;
}

// SQL Query
$query = "SELECT cpi.user_id, SUM(cpi.tot_cpn_amt) as tot_coupon_amt, 
          up.org_name, up.head_org_addr, pcb.acc_holder_name, pcb.bank_name, 
          pcb.account_no, pcb.bank_ifsc, pcb.bank_branch, up.head_org_mobile
          FROM coupon_publisher_invoice cpi
          JOIN coupon_publisher_receipt cpr ON cpi.user_id = cpr.user_id
          JOIN users_profile up ON cpi.user_id = up.user_id
          JOIN pub_coupon_bankdtls pcb ON pcb.user_id = up.user_id
          WHERE cpi.updated_date >= '$from_date' AND cpi.updated_date <= '$to_date'
          GROUP BY cpi.user_id, up.org_name, up.head_org_addr, pcb.acc_holder_name, pcb.bank_name, 
          pcb.account_no, pcb.bank_ifsc, pcb.bank_branch, up.head_org_mobile";

$result = mysqli_query($con, $query);

if (!$result) {
    http_response_code(500);
    echo "SQL Error: " . mysqli_error($con);
    exit;
}

// Set headers for download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="coupon_report.csv"');

// Open the output stream
$output = fopen('php://output', 'w');

// Write the CSV headers
fputcsv($output, [
    'Sl No',
    'Publisher',
    'Address & Contact No.',
    'Bank Name & Branch',
    'Account Holder Name',
    'IFSC',
    'Account No.',
    'Amount (in ₹)'
]);

$counter = 1;
$grand_total = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tot_coupon_amt = $row['tot_coupon_amt'];
        $grand_total += $tot_coupon_amt;

        fputcsv($output, [
            $counter++,
            $row['org_name'],
            $row['head_org_addr'] . " | Ph. " . $row['head_org_mobile'],
            $row['bank_name'] . " | " . $row['bank_branch'],
            $row['acc_holder_name'],
            $row['bank_ifsc'],
            $row['account_no'],
            $tot_coupon_amt
        ]);
    }

    fputcsv($output, ['', '', '', '', '', '', 'Grand Total', $grand_total]);
} else {
    fputcsv($output, ['No data available for the selected date range.']);
}

// Close the output stream
fclose($output);
exit;
