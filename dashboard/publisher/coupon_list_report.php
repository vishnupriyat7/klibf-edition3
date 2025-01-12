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
                            <div class="row">
                                <?php
                                $cpn_bnk_dtls_qry = "SELECT * FROM pub_coupon_bankdtls WHERE user_id = $user_id;";
                                $result_bnk_dtls = mysqli_query($con, $cpn_bnk_dtls_qry);
                                $cpn_bnk_dtls = $result_bnk_dtls->fetch_assoc();
                                ?>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Bank Name</label>
                                        <input type="text" class="form-control"
                                            value="<?= $cpn_bnk_dtls['bank_name'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="">Bank Branck</label>
                                        <input type="text" class="form-control"
                                            value="<?= $cpn_bnk_dtls['bank_branch'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <br>
                                        <label for="">Account Holder Name</label>
                                        <input type="text" class="form-control"
                                            value="<?= $cpn_bnk_dtls['acc_holder_name'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control"
                                            value="<?= $cpn_bnk_dtls['account_no'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <br>
                                        <label for="">IFSC</label>
                                        <input type="text" class="form-control"
                                            value="<?= $cpn_bnk_dtls['bank_ifsc'] ?>" readonly>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'publisher-coupon-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false" rowspan="2">Action</th>
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
                                            <td class="text-center">
                                                <a href='#' class='dropdown-item remove-item-btn'
                                                    onclick="deleteCouponEntry(<?= $invoice_no; ?>);">
                                                    <i class='ri-delete-bin-fill align-bottom me-2 text-danger'></i> Delete
                                                </a>
                                            </td>
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

        function deleteCouponEntry(invId) {
            swal.fire({
                title: "Are you sure?",
                text: "Do you want to delete?",
                icon: "warning", // Use "icon" instead of "type" for SweetAlert2
                showCancelButton: true, // Ensure this is set to show the cancel button
                confirmButtonColor: "#DD6B55",
                cancelButtonColor: "#d33", // Optional: set a color for the cancel button
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!", // Optional: customize the cancel button text
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform the delete operation via AJAX
                    $.ajax({
                        url: "<?= $base_url; ?>/dashboard/publisher/delete_coupon_entry.php",
                        type: "POST",
                        data: {
                            invoiceId: invId
                        },
                        dataType: "json",
                        success: function (response) {
                            swal.fire("Deleted!", "", "success").then(() => {
                                window.location.reload();
                            });
                        },
                        error: function () {
                            swal.fire("Error", "Failed to delete. Please try again.", "error");
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal.fire("Cancelled", "Your data is safe.", "info");
                }
            });
        }
    </script>