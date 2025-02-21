<?php
include "../z_db.php";
$mlaId = $_POST['mlaId'];
$listSDF_publisher = "";
$sdf_publisher_query = "SELECT DISTINCT (sdf.user_id), pcb.account_no, pcb.bank_ifsc, up.org_name, up.head_org_mobile, pcb.bank_name, pcb.bank_branch FROM sdf sdf LEFT JOIN pub_coupon_bankdtls pcb ON sdf.user_id = pcb.user_id JOIN users_profile up ON up.user_id = sdf.user_id WHERE sdf.mla_id = $mlaId;";
$result = mysqli_query($con, $sdf_publisher_query);
if (mysqli_num_rows($result)) {
    $slno = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['org_name'];
        $cntct_no = $row['head_org_mobile'];
        $accno = $row['account_no'];
        $ifsc = $row['bank_ifsc'];
        $bnk_name = $row['bank_name'];
        $bnk_brnh = $row['bank_branch'];
        $listSDF_publisher = $listSDF_publisher . "<tr class='text-center'>
            <td>$slno</td>
            <td>$name</td>
            <td>$cntct_no</td>
            <td>$bnk_name</td>
            <td>$bnk_brnh</td>
            <td>$accno</td>
            <td>$ifsc</td>      
        </tr>";
        $slno++;
    }
} else {
    $listSDF_publisher = $listSDF_publisher . '<tr>
        <td colspan="6" class="text-center">No SDF Entries present, please Save details.
        </td>
    </tr>';
}
echo json_encode($listSDF_publisher);
