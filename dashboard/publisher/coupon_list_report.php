<?php include "../header.php";
include "sidebar.php";
$user_id = $user['id']; ?>

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
                                <a class="dropdown-item" href="logout.php"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
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
                            <h5 class="card-title mb-0">Publisher Coupon List</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'publisher_book_discussion_report-data')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false" rowspan="2">Sl No</th>
                                        <th data-ordering="false" rowspan="2">Bill No</th>
                                        <th data-ordering="false" rowspan="2">Bill Date</th>
                                        <th data-ordering="false" rowspan="2">Net Bill Amount</th>
                                        <th data-ordering="false" rowspan="2">Coupon Amount</th>
                                        <th data-ordering="false" colspan="6">Denominations</th>
                                    </tr>
                                    <tr>
                                        <th data-ordering="false">50 Count</th>
                                        <th data-ordering="false">Amount</th>
                                        <th data-ordering="false">100 Count</th>
                                        <th data-ordering="false">Amount</th>
                                        <th data-ordering="false">200 Count</th>
                                        <th data-ordering="false">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total_coupon_invoice_query = "SELECT * FROM coupon_publisher_invoice WHERE user_id = '$user_id';";
                                    $total_bills = mysqli_query($con, $total_coupon_invoice_query);
                                    $counter = 0;
                                    while ($bill = mysqli_fetch_array($total_bills)) {
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
                                        ?>
                                        <tr>
                                            <td>
                                                <?= ++$counter; ?>
                                            </td>
                                            <td>
                                                <?= $bill['invoice_no']; ?>
                                            </td>
                                            <td>
                                                <?= $bill['invoice_dt']; ?>
                                            </td>
                                            <td>
                                                <?= $bill['tot_inv_amt']; ?>
                                            </td>
                                            <td>
                                                <?= $bill['tot_cpn_amt']; ?>
                                            </td>
                                            <td>
                                                <?= $coupon50_count; ?>
                                            </td>
                                            <td>
                                                <?= 50 * $coupon50_count; ?>
                                            </td>
                                            <td>
                                                <?= $coupon100_count; ?>
                                            </td>
                                            <td>
                                                <?= 100 * $coupon100_count; ?>
                                            </td>
                                            <td>
                                                <?= $coupon200_count; ?>
                                            </td>
                                            <td>
                                                <?= 200 * $coupon200_count; ?>
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