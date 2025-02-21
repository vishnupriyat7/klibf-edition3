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
                            <h5 class="card-title mb-0">Publisher SDF Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <?php
                            $publisher_query = "SELECT cpi.user_id, SUM(cpi.tot_cpn_amt) as tot_coupon_amt, up.org_name, pcb.acc_holder_name, pcb.bank_name, pcb.account_no, pcb.bank_ifsc, pcb.bank_branch, up.head_org_mobile, cpr.id as receipt_id, cpr.remarks FROM coupon_publisher_invoice cpi JOIN coupon_publisher_receipt cpr ON cpi.user_id = cpr.user_id JOIN users_profile up ON cpi.user_id = up.user_id JOIN pub_coupon_bankdtls pcb ON pcb.user_id = up.user_id GROUP BY cpi.user_id, up.org_name, pcb.acc_holder_name, pcb.bank_name, pcb.account_no, pcb.bank_ifsc, pcb.bank_branch, up.head_org_mobile, cpr.id, cpr.remarks ORDER BY cpr.updated_date DESC;";
                            $result_publisher = mysqli_query($con, $publisher_query);
                            // $coupon_publishers = $result_publisher->fetch_all();
                            ?>
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'coupon-receipt-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Publisher</th>
                                        <th>Contact No.</th>
                                        <th>Bank Name & Branch</th>
                                        <th>Account Holder Name</th>
                                        <th>IFSC</th>
                                        <th>Account No.</th>
                                        <th>Amount (in ₹)</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="pub-sdf-list">
                                    <?php
                                    $counter = 1;
                                    while ($publisher = mysqli_fetch_assoc($result_publisher)) {
                                        $invc_no = $row['invc_no'];
                                        $invc_date = $row['invc_date'];
                                        $name = $row['org_name'];
                                        $cntct_no = $row['head_org_mobile'];
                                        $inst_name = $row['inst_name'];
                                        $amount = $row['amount'];
                                        $updated_date = $row['updated_date'];
                                        $inst_no = $row['inst_cntct_no']; ?>
                                        <tr>
                                            <td><?= $counter++; ?></td>
                                            <td><?= $publisher['org_name'] ?></td>
                                            <td><?= $publisher['head_org_mobile'] ?></td>
                                            <td><?= $publisher['bank_name'] ?>, <?= $publisher['bank_branch'] ?></td>
                                            <td><?= $publisher['acc_holder_name'] ?></td>
                                            <td><?= $publisher['bank_ifsc'] ?></td>
                                            <td><?= $publisher['account_no'] ?></td>
                                            <td><?= $publisher['tot_coupon_amt'] ?></td>
                                            <td><?= $publisher['remarks'] ?></td>
                                            <td>
                                                <a href='publisher_coupon_receipt.php?receiptId=<?= $publisher['receipt_id'] ?>'
                                                    class='dropdown-item remove-item-btn'>
                                                    <i class='mdi mdi-book-edit'></i>
                                                </a>
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

    <div id="editReceiptModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-bs-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title"><b>13.01.2025 ലെ കൂപ്പൺ വിജയികൾ</b></h4>
                </div>
                <div class="modal-body" id="receipt-data">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- End Page-content -->
    <?php include "../footer.php"; ?>

    <script>
        function exportTableToExcel(example, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';

            // Clone the table to avoid modifying the original
            var tableSelect = document.getElementById(example);
            var tableClone = tableSelect.cloneNode(true);

            // Remove all buttons and other non-data elements
            var buttons = tableClone.querySelectorAll('button, a, input');
            buttons.forEach(button => button.remove());

            // Prepare the HTML for export
            var tableHTML = tableClone.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");
            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], { type: dataType });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                // Setting the file name
                downloadLink.download = filename;
                // Triggering the download
                downloadLink.click();
            }
        }

        // function editReceipt(receiptId) {
        //     $.ajax({
        //         url: "<?= $base_url; ?>/dashboard/sdf_committee/publisher_coupon_receipt.php",
        //         type: "POST",
        //         data: {
        //             receiptId: receiptId
        //         },
        //         dataType: "json",
        //         success: function (data) {
        //             document.getElementById("receipt-data").html(data);
        //             document.getElementById("editReceiptModal").modal('show');
        //             // $('#disc_time_slot2').empty();
        //             // var add_slot = "";
        //             // $("#disc_time_slot2").append('<option value="">Select Proposed Event Time</option>');
        //             // $.each(data, function (key, value) {
        //             //     $("#disc_time_slot2").append('<option value=' + value[0] + '>' + value[1] + ' ' + value[2] + '</option>');
        //             // });
        //         }
        //     });
        // }
    </script>