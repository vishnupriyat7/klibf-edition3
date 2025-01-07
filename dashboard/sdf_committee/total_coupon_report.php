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
                            <button onclick="exportTableToExcel('example', 'sdf-total-coupon-collect-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false">Sl No</th>
                                        <th data-ordering="false">Publisher</th>
                                        <th data-ordering="false">Bill No</th>
                                        <th data-ordering="false">Bill Date</th>
                                        <th data-ordering="false">Net Bill Amount</th>
                                        <th data-ordering="false">Coupon Amount</th>
                                        <th data-ordering="false">Coupon Sl No</th>
                                        <th data-ordering="false">Denomination</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    $total_coupon_query = "SELECT 
    COUNT(cd.serial_no) AS serial_no_count, 
    cpi.invoice_no, 
    cpi.invoice_dt, 
    cpi.tot_inv_amt, 
    cpi.tot_cpn_amt, 
    cdn.denomination, 
    up.org_name
FROM 
    coupon_publisher_serialno cps 
JOIN 
    coupon_publisher_invoice cpi ON cps.cpn_pub_inv = cpi.id 
JOIN 
    coupon_distribution cd ON cd.id = cps.cpn_slno 
JOIN 
    coupon_denomination cdn ON cd.denom_id = cdn.id 
JOIN 
    users_profile up ON cpi.user_id = up.user_id 
GROUP BY 
    cpi.invoice_no, 
    cpi.invoice_dt, 
    cpi.tot_inv_amt, 
    cpi.tot_cpn_amt, 
    cdn.denomination, 
    up.org_name
    ORDER BY up.org_name, cpi.invoice_no  ASC;";
                                    $total_coupons = mysqli_query($con, $total_coupon_query);
                                    $counter = 0;
                                    while ($coupon = mysqli_fetch_array($total_coupons)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= ++$counter; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['org_name'] ?>
                                            </td>
                                            <td>
                                                <?= $coupon['invoice_no']; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['invoice_dt']; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['tot_inv_amt']; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['tot_cpn_amt']; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['serial_no_count']; ?>
                                            </td>
                                            <td>
                                                <?= $coupon['denomination']; ?>
                                            </td>
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