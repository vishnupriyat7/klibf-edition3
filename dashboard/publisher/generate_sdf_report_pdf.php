<?php
ini_set('display_errors', '1');
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


// $total_coupon_invoice_query = "SELECT * FROM coupon_publisher_invoice WHERE user_id = '$user_id';";
// $total_bills = mysqli_query($con, $total_coupon_invoice_query);

$total_sdf_query = "SELECT s.*, mla.name FROM sdf s JOIN mla_15 mla ON s.mla_id = mla.id WHERE user_id=$user_id ORDER BY updated_date DESC;";
$result = mysqli_query($con, $total_sdf_query);

$publisher_dtls_query = "SELECT org_name, head_org_mobile FROM users_profile WHERE user_id = '$user_id';";
$publisher_dtls = mysqli_query($con, $publisher_dtls_query);
$row = mysqli_fetch_array($publisher_dtls);


// Generate HTML content
$html = '<html><head><title>Summary</title></head><body><br>';
$html = '<p>Publisher Name :'.$publisher_dtls['org_name'].' <p><br>';
$html = '<p>Contact Number:'.$publisher_dtls['head_org_mobile'].' <p><br>';

$html .= '<table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">';
$html .= '<thead>
            <tr>
                <th colspan="6">KLIBF THIRD EDITION</th></tr>
               <tr> <th colspan="6">SDF Details</th></tr>
               <tr> 
               <th>Sl No</th>
                <th>Bill No </th>
                 <th>Date</th>
                <th>MLA</th>
                <th>Institution</th>
                <th>Amount</th>
                
                        </tr>
          </thead><tbody>';

$counter = 0;
$grand_total = 0;


while ($row = mysqli_fetch_array($result)) {
    $coupon200_count = $coupon100_count = $coupon50_count = 0;
    $invoice_no = $row['id'];

  
    $html .= "<tr>
                <td>" . (++$counter) . "</td>
               
                <td>{$row['invoice_no']} </td>
                <td>" . date('d-m-Y', strtotime($row['invoice_dt'])) . "</td>

                <td>{$row['name']}</td>
                <td>{$row['inst_name']}</td>
                <td>{$row['amount']}</td>
              
              </tr>";
   
}
// var_dump($grand_total);
$html .= "<tr>
<td colspan='5'><strong>Grand Total</strong></td>
<td><strong>" . $grand_total . "</strong></td></tr>";

$html .= '</tbody></table><br><br>';
$html .= '<table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">';
$html .= '<thead>
<tr><th colspan="4">Bank Details</th></tr>
            <tr>
                
                <th>Bank Name</th>
                <th>Branch</th>
                <th>IFSC</th>
                <th>Account Number</th>
                            
            </tr>
          </thead><tbody>';
$cpn_bnk_dtls_qry = "SELECT * FROM pub_coupon_bankdtls WHERE user_id = $user_id;";
$result_bnk_dtls = mysqli_query($con, $cpn_bnk_dtls_qry);
$cpn_bnk_dtls = $result_bnk_dtls->fetch_assoc();
// var_dump($cpn_bnk_dtls);

$html .= '<tr>
          <td>' . ($cpn_bnk_dtls["bank_name"]) . '</td>
            <td>' . ($cpn_bnk_dtls["bank_branch"]) . '</td>
              <td>' . ($cpn_bnk_dtls["bank_ifsc"]) . '</td>
                <td>' . ($cpn_bnk_dtls["account_no"]) . '</td>
          </tr> ';
$html .= '</tbody></table><br><br>';


$grandtotal_words = convertNumberToWordsForIndia($grand_total);
$html .= '<p>I here by submitting Coupons worth <strong>' . $grand_total . '/- </strong> (Grand Total)  <strong>' . ($grandtotal_words) . '</strong> only in the below mentioned denominations. </p>';
$html .= '</tbody></table><br><br><br>';



$html .= '<table border="0" style="width: 100%; text-align: center;">';
$html .= '<thead></thead>
            <tbody>

            <tr>
                                <td>50</td>
                <td>' . $coupon50_total_count . '</td>
                <td>' . $coupon50_total_amount . '</td>
                                           
            </tr>
            <tr>
                                <td>100</td>
                <td>' . $coupon100_total_count . '</td>
                <td>' . $coupon100_total_amount . '</td>
                                           
            </tr>
            <tr>
                                <td>200</td>
                <td>' . $coupon200_total_count . '</td>
                <td>' . $coupon200_total_amount . '</td>
                                           
            </tr>
            <tr>
            <td colspan="2" style="text-align: right;"><strong>Total</strong></td>
           <td><strong>' . $grand_total . '</strong></td>
            </tr>
            </tbody></table><br><br><br><br><br>';
$html .= '<table style="width: 100%; border: none; margin-top: 20px;">
            <tr>
                <td style="text-align: left; width: 50%;">Date: ' . date("d-m-Y") . '</td>
                <td style="text-align: right; width: 50%;">Authorised Signatory <br>(Seal)</td>
            </tr>
          </table>';


$html .= '</body></html>';
echo $html;
