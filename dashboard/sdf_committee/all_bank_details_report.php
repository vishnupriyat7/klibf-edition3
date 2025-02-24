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
                            <h5 class="card-title mb-0">All Bank Details Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <button onclick="exportTableToExcel('example', 'sdf-publisher-bank-all-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Publisher</th>
                                        <th>Contact No.</th>
                                        <th>Bank</th>
                                        <th>Branch</th>
                                        <th>Account Number</th>
                                        <th>IFSC</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="pub-sdf-mla-bank-list">
                                    <?php
                                    $sdf_publisher_query = "SELECT DISTINCT (sdf.user_id), pcb.account_no, pcb.bank_ifsc, up.org_name, up.head_org_mobile, pcb.bank_name, pcb.bank_branch FROM sdf sdf LEFT JOIN pub_coupon_bankdtls pcb ON sdf.user_id = pcb.user_id JOIN users_profile up ON up.user_id = sdf.user_id";
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
                                            ?>
                                            <tr class='text-center'>
                                                <td><?= $slno ?></td>
                                                <td><?= $name ?></td>
                                                <td><?= $cntct_no ?></td>
                                                <td><?= $bnk_name ?></td>
                                                <td><?= $bnk_brnh ?></td>
                                                <td><?= $accno ?></td>
                                                <td><?= $ifsc ?></td>
                                            </tr>
                                            <?php $slno++;
                                        }
                                    } else { ?>
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No SDF Entries present, please Save details.
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