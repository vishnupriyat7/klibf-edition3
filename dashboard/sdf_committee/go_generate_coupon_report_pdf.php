<?php
include "../z_db.php";
function convertNumberToWordsForIndia($number)
{
    //A function to convert numbers into Indian readable words with Cores, Lakhs and Thousands.
    $words = array(
        '0' => '',
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
        '4' => 'four',
        '5' => 'five',
        '6' => 'six',
        '7' => 'seven',
        '8' => 'eight',
        '9' => 'nine',
        '10' => 'ten',
        '11' => 'eleven',
        '12' => 'twelve',
        '13' => 'thirteen',
        '14' => 'fouteen',
        '15' => 'fifteen',
        '16' => 'sixteen',
        '17' => 'seventeen',
        '18' => 'eighteen',
        '19' => 'nineteen',
        '20' => 'twenty',
        '30' => 'thirty',
        '40' => 'fourty',
        '50' => 'fifty',
        '60' => 'sixty',
        '70' => 'seventy',
        '80' => 'eighty',
        '90' => 'ninty'
    );

    //First find the length of the number
    $number_length = strlen($number);
    //Initialize an empty array
    $number_array = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
    $received_number_array = array();

    //Store all received numbers into an array
    for ($i = 0; $i < $number_length; $i++) {
        $received_number_array[$i] = substr($number, $i, 1);
    }

    //Populate the empty array with the numbers received - most critical operation
    for ($i = 9 - $number_length, $j = 0; $i < 9; $i++, $j++) {
        $number_array[$i] = $received_number_array[$j];
    }

    $number_to_words_string = "";
    //Finding out whether it is teen ? and then multiply by 10, example 17 is seventeen, so if 1 is preceeded with 7 multiply 1 by 10 and add 7 to it.
    for ($i = 0, $j = 1; $i < 9; $i++, $j++) {
        //"01,23,45,6,78"
        //"00,10,06,7,42"
        //"00,01,90,0,00"
        if ($i == 0 || $i == 2 || $i == 4 || $i == 7) {
            if ($number_array[$j] == 0 || $number_array[$i] == "1") {
                $number_array[$j] = intval($number_array[$i]) * 10 + $number_array[$j];
                $number_array[$i] = 0;
            }
        }
    }

    $value = "";
    for ($i = 0; $i < 9; $i++) {
        if ($i == 0 || $i == 2 || $i == 4 || $i == 7) {
            $value = $number_array[$i] * 10;
        } else {
            $value = $number_array[$i];
        }
        if ($value != 0) {
            $number_to_words_string .= $words["$value"] . " ";
        }
        if ($i == 1 && $value != 0) {
            $number_to_words_string .= "Crores ";
        }
        if ($i == 3 && $value != 0) {
            $number_to_words_string .= "Lakhs ";
        }
        if ($i == 5 && $value != 0) {
            $number_to_words_string .= "Thousand ";
        }
        if ($i == 6 && $value != 0) {
            $number_to_words_string .= "Hundred ";
        }
    }
    if ($number_length > 9) {
        $number_to_words_string = "Sorry This does not support more than 99 Crores";
    }
    return ucwords(strtolower("Rupees " . $number_to_words_string) . "");
}
// Fetch data
$user_id = $_POST['user_id']; // Retrieve user_id from AJAX POST request
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];



$publisher_query = "SELECT cpi.user_id, SUM(cpi.tot_cpn_amt) as tot_coupon_amt, up.org_name, up.head_org_addr, pcb.acc_holder_name, pcb.bank_name, pcb.account_no, pcb.bank_ifsc, pcb.bank_branch, up.head_org_mobile, cpr.id as receipt_id, cpr.remarks FROM coupon_publisher_invoice cpi JOIN coupon_publisher_receipt cpr ON cpi.user_id = cpr.user_id JOIN users_profile up ON cpi.user_id = up.user_id JOIN pub_coupon_bankdtls pcb ON pcb.user_id = up.user_id WHERE cpi.updated_date >= '$from_date' AND cpi.updated_date <= '$to_date' GROUP BY cpi.user_id, up.org_name, pcb.acc_holder_name, pcb.bank_name, pcb.account_no, pcb.bank_ifsc, pcb.bank_branch, up.head_org_mobile, up.head_org_addr, cpr.id, cpr.remarks;";
$result_publisher = mysqli_query($con, $publisher_query);


// $total_coupon_invoice_query = "SELECT * FROM coupon_publisher_invoice WHERE user_id = '$user_id' AND updated_date >= '$updated_date';";
// $total_bills = mysqli_query($con, $total_coupon_invoice_query);

// $publisher_dtls_query = "SELECT org_name, head_org_mobile FROM users_profile WHERE user_id = '$user_id';";
// $publisher_dtls = mysqli_query($con, $publisher_dtls_query);
// $publisher_dtls_row = mysqli_fetch_array($publisher_dtls);




// Generate HTML content
$html = '<html><head><title>Summary</title></head><body><br>';

$html .= '<table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">';
$html .= '<thead>
            <tr><th colspan="9">KLIBF THIRD EDITION</th></tr>
            <tr> <th colspan="9">Book Coupon GO Report</th></tr>
            <tr> <th>Sl No</th>
                <th>Publisher</th>
                <th>Address & Contact No.</th>
                <th>Bank Name & Branch</th>
                <th>Account Holder Name</th>
                <th>IFSC</th>
                <th>Account No.</th>
                <th>Amount (in ₹)</th>
               
            </tr>
          </thead><tbody>';
$counter = 1;
$grand_total = 0;

if ($result_publisher->num_rows > 0) {
    while ($publisher = mysqli_fetch_assoc($result_publisher)) {
        $tot_coupon_amt = $publisher['tot_coupon_amt'];

        $html .= "<tr>
        <td>" . $counter++ . "</td>
        <td>" . $publisher['org_name'] . "</td>
        <td>" . $publisher['head_org_addr'] . " <br> Ph. " . $publisher['head_org_mobile'] . "</td>
        <td>" . $publisher['bank_name'] . " , " . $publisher['bank_branch'] . "</td>
        <td>" . $publisher['acc_holder_name'] . "</td>
        <td>" . $publisher['bank_ifsc'] . "</td>
        <td>" . $publisher['account_no'] . "</td>
        <td>" . $publisher['tot_coupon_amt'] . "</td></tr>";
        $grand_total +=  $tot_coupon_amt;
    }

    $html .= "<tr><td colspan='7'><strong>Grand Total</strong></td>
                    <td><strong>" . $grand_total . "</strong></td>
            </tr>";
    $html .= '</tbody></table><br><br>';

    $grandtotal_words = convertNumberToWordsForIndia($grand_total);
    // $html .= '<p>I here by submitting Coupons worth <strong>' . $grand_total . '/- </strong> (Grand Total)  <strong>' . ($grandtotal_words) . '</strong> only in the below mentioned denominations. </p>';
} else {
    $html .= "<tr><td colspan='9' style='color: red;'>Please Select Date Range to See Coupon Report Details</td></tr>";
}

$html .= '<table style="width: 100%; border: none; margin-top: 20px;">
            <tr>
                <td style="text-align: left; width: 50%;">Date: ' . date("d-m-Y") . '</td>
                <td style="text-align: right; width: 50%;">Authorised Signatory <br>(Seal)</td>
            </tr>
          </table>';
$html .= '</body></html>';
echo $html;
