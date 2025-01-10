<?php
include "../z_db.php";
$pubId = $_POST['pubId'];
$listSDF = "";
$total_sdf_query = "SELECT s.*, mla.* FROM sdf s JOIN mla_15 mla ON s.mla_id = mla.id WHERE user_id=$pubId ORDER BY updated_date DESC;";
$result = mysqli_query($con, $total_sdf_query);
if (mysqli_num_rows($result)) {
    $slno = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $invc_no = $row['invc_no'];
        $invc_date = $row['invc_date'];
        $name = $row['name'];
        $inst_name = $row['inst_name'];
        $amount = $row['amount'];
        $updated_date = $row['updated_date'];
        $listSDF = $listSDF . "<tr class='text-center'>
            <td>$slno</td>
            <td>$invc_no</td>
            <td>$invc_date</td>
            <td>$name</td>
            <td>$inst_name</td>
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
echo $listSDF;
