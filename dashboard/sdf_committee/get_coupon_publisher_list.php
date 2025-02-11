<?php
include "../z_db.php";
$pubId = $_POST['pubId'];
$listCoupon = "";
$coupon_invoice_query = "SELECT cpi.*, up.head_org_mobile FROM coupon_publisher_invoice cpi JOIN users_profile up ON cpi.user_id = up.user_id WHERE cpi.user_id = $pubId;";
$coupon_bills = mysqli_query($con, $coupon_invoice_query);
$counter = 0;
$total_cpn_amt = 0;
while ($bill = mysqli_fetch_array($coupon_bills)) {
    $coupon200_count = $coupon100_count = $coupon50_count = 0;
    $invoice_no = $bill['id'];
    $pub_inv_cpn_count_qry = "SELECT COUNT(cd.serial_no) AS serial_no_count, cd.denom_id FROM coupon_publisher_serialno cps JOIN coupon_distribution cd ON cps.cpn_slno=cd.id WHERE cps.cpn_pub_inv = '$invoice_no' GROUP BY cd.denom_id;";
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
    $pub_cntct = $bill['head_org_mobile'];
    $invoice_no = $bill['invoice_no'];
    $invoice_dt = $bill['invoice_dt'];
    $tot_inv_amt = $bill['tot_inv_amt'];
    $tot_cpn_amt = $bill['tot_cpn_amt'];
    $updated_dt = $bill['updated_date'];
    $cpn50_amt = 50 * $coupon50_count;
    $cpn100_amt = 100 * $coupon100_count;
    $cpn200_amt = 200 * $coupon200_count;
    $total_cpn_amt += $cpn50_amt + $cpn100_amt + $cpn200_amt;
    $newcount = ++$counter;
    $listCoupon .= "<tr>
        <td>$newcount</td>
        <td>$invoice_no</td>
        <td>$invoice_dt</td>
        <td>$tot_inv_amt</td>
        <td>$tot_cpn_amt</td>
        <td>$coupon50_count</td>
        <td>$cpn50_amt</td>
        <td>$coupon100_count</td>
        <td>$cpn100_amt</td>
        <td>$coupon200_count</td>
        <td>$cpn200_amt</td>
        <td>$updated_dt</td>
    </tr>";
}
$cpn_bnk_dtls_qry = "SELECT * FROM pub_coupon_bankdtls WHERE user_id = $pubId;";
$result_bnk_dtls = mysqli_query($con, $cpn_bnk_dtls_qry);
$cpn_bnk_dtls = $result_bnk_dtls->fetch_assoc();
echo json_encode([$listCoupon, $cpn_bnk_dtls, $pub_cntct, $total_cpn_amt]);