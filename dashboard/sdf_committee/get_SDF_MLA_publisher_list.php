<?php
include "../z_db.php";
$mlaId = $_POST['mlaId'];
$listSDF = "";
$total_sdf_query = "SELECT s.*, u.org_name, u.head_org_mobile FROM sdf s JOIN users_profile u ON u.user_id = s.user_id WHERE s.mla_id=$mlaId ORDER BY updated_date DESC;";
$result = mysqli_query($con, $total_sdf_query);
if (mysqli_num_rows($result)) {
    $slno = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $invc_no = $row['invc_no'];
        $invc_date = $row['invc_date'];
        $name = $row['org_name'];
        $cntct_no = $row['head_org_mobile'];
        $inst_name = $row['inst_name'];
        $amount = $row['amount'];
        $updated_date = $row['updated_date'];
        $inst_no = $row['inst_cntct_no'];
        $listSDF = $listSDF . "<tr class='text-center'>
            <td>$slno</td>
            <td>$name</td>
            <td>$cntct_no</td>
            <td>$invc_no</td>
            <td>$invc_date</td>            
            <td>$inst_name</td>
            <td>$inst_no</td>
            <td>₹ $amount</td>
            <td>$updated_date</td>
        </tr>";
        $slno++;
    }
} else {
    $listSDF = $listSDF . '<tr>
        <td colspan="7" class="text-center">No SDF Entries present, please Save details.
        </td>
    </tr>';
}
echo json_encode($listSDF);
