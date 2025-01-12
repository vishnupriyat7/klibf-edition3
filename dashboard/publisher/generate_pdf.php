<?php
include "../z_db.php";

// Fetch data
$user_id = $_POST['user_id']; // Retrieve user_id from AJAX POST request
$total_coupon_invoice_query = "SELECT * FROM coupon_publisher_invoice WHERE user_id = '$user_id';";
$total_bills = mysqli_query($con, $total_coupon_invoice_query);

// Generate HTML content
$html = '<html><head><title>Coupon Report</title></head><body>';
$html .= '<h2 style="text-align: center;">KLIBF THIRD EDITION</h2>';
$html .= '<h3 style="text-align: center;">Book Coupon Details</h3>';
$html .= '<table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">';
$html .= '<thead>
            <tr>
                <tr>
                <th>Sl No</th>
                <th>Bill No & Date</th>
                <th>Denomination</th>
                <th>Count</th>
                <th>Amount</th>
                <th>Sub Total</th>
            
            </tr>
          </thead><tbody>';

$counter = 0;
while ($bill = mysqli_fetch_array($total_bills)) {
    $coupon200_count = $coupon100_count = $coupon50_count = 0;
    $invoice_no = $bill['id'];

    $pub_inv_cpn_count_qry = "SELECT COUNT(cd.serial_no) AS serial_no_count, cd.denom_id 
                              FROM coupon_publisher_serialno cps 
                              JOIN coupon_distribution cd ON cps.cpn_slno=cd.id 
                              WHERE cps.cpn_pub_inv = '$invoice_no' GROUP BY cd.denom_id;";
    $invoice_coupons = mysqli_query($con, $pub_inv_cpn_count_qry);
    while ($coupon_denom_count = mysqli_fetch_array($invoice_coupons)) {
        if ($coupon_denom_count['denom_id'] == 1) {
            $coupon50_count = $coupon_denom_count['serial_no_count'];
        } elseif ($coupon_denom_count['denom_id'] == 2) {
            $coupon100_count = $coupon_denom_count['serial_no_count'];
        } elseif ($coupon_denom_count['denom_id'] == 3) {
            $coupon200_count = $coupon_denom_count['serial_no_count'];
        }
    }

    $total_amount = (50 * $coupon50_count) + (100 * $coupon100_count) + (200 * $coupon200_count);

    // Add row to table
    // $html .= "<tr>
    //             <td>" . (++$counter) . "</td>
    //             <td>" . $bill['invoice_no'] . "</td>
    //             <td>" . $bill['invoice_dt'] . "</td>
    //             <td>50, 100, 200</td>
    //             <td>{$coupon50_count}, {$coupon100_count}, {$coupon200_count}</td>
    //             <td>{$total_amount}</td>
    //             <td>{$bill['tot_inv_amt']}</td>
    //           </tr>";
    $html .= "<tr>
                <td rowspan='3'>" . (++$counter) . "</td>
                <td rowspan='3'>{$bill['invoice_no']}<br>{$bill['invoice_dt']}</td>
                <td>50</td>
                <td>{$coupon50_count}</td>
                <td>" . (50 * $coupon50_count) . "</td>
              </tr>";
    $html .= "<tr>
                <td>100</td>
                <td>{$coupon100_count}</td>
                <td>" . (100 * $coupon100_count) . "</td>
              </tr>";
    $html .= "<tr>
                <td>200</td>
                <td>{$coupon200_count}</td>
                <td>" . (200 * $coupon200_count) . "</td>
              </tr>";
}

$html .= '</tbody></table></body></html>';
echo $html;
