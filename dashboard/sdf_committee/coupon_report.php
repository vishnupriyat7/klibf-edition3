<?php
include "../header.php";
include "sidebar.php";
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Report</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li> -->
                                <!-- <li class="breadcrumb-item active">Add</li> -->
                                <a class="dropdown-item" href="../logout.php">
                                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle" data-key="t-logout">Logout</span>
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Coupon Distributed Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'sdf-coupon-distributed-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false">Sl No</th>
                                        <th data-ordering="false">Coupon Serial No (Range) <br>From-To</th>
                                        <th data-ordering="false">Denomination</th>
                                        <th data-ordering="false">Amount</th>
                                        <th data-ordering="false">Sponser</th>
                                        <!-- <th data-ordering="false">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    // $coupon_query = "SELECT * FROM coupon_distribution cd JOIN coupon_sponsers cs ON cd.sponser_id = cs.id JOIN coupon_denomination cdn ON cd.denom_id = cdn.id ORDER BY cd.serial_no ASC";
                                    $coupon_query = "SELECT 
    MIN(grouped_cd.serial_no) AS serial_no_from,
    MAX(grouped_cd.serial_no) AS serial_no_to,
    cdn.denomination,
    cs.spnsr_org_name,
    cs.id AS sponsor_id
FROM (
    SELECT 
        cd.*,
        @grp := IF(cd.serial_no = @prev_serial_no + 1 AND cd.sponser_id = @prev_sponser_id AND cd.denom_id = @prev_denom_id, @grp, @grp + 1) AS grp,
        @prev_serial_no := cd.serial_no AS prev_serial_no,
        @prev_sponser_id := cd.sponser_id AS prev_sponser_id,
        @prev_denom_id := cd.denom_id AS prev_denom_id
    FROM 
        coupon_distribution cd
    CROSS JOIN 
        (SELECT @grp := 0, @prev_serial_no := NULL, @prev_sponser_id := NULL, @prev_denom_id := NULL) AS vars
    ORDER BY 
        cd.sponser_id, cd.denom_id, cd.serial_no
) AS grouped_cd
JOIN 
    coupon_sponsers cs ON grouped_cd.sponser_id = cs.id
JOIN 
    coupon_denomination cdn ON grouped_cd.denom_id = cdn.id
GROUP BY 
    grp, cdn.denomination, cs.spnsr_org_name, sponsor_id
ORDER BY 
    cs.spnsr_org_name, cdn.denomination, serial_no_from;";
                                    $coupons = mysqli_query($con, $coupon_query);
                                    $counter = 0;
                                    while ($coupon = mysqli_fetch_array($coupons)) {
                                        $count = ($coupon['serial_no_to'] - $coupon['serial_no_from']) + 1;
                                        $deno_amt = $coupon['denomination'] * $count;
                                        ?>
                                        <tr>
                                            <td>
                                                <?= ++$counter; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['serial_no_from'] . ' - ' . $coupon['serial_no_to'] ?>
                                            </td>
                                            <td>
                                                <?= $coupon['denomination']; ?>
                                            </td>
                                            <td>
                                                <?= $deno_amt; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['spnsr_org_name']; ?>
                                            </td>
                                            <!-- <td>
                                                
                                                    <i class='mdi mdi-book-edit'></i>
                                            </td> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include "../footer.php"; ?>

    <script>
        function exportTableToExcel(example, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(example);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';
            // Create download link element
            downloadLink = document.createElement("a");
            document.body.appendChild(downloadLink);
            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                // Setting the file name
                downloadLink.download = filename;
                //triggering the function
                downloadLink.click();
            }
        }
    </script>