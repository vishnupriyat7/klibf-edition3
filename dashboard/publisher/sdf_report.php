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
                            <button onclick="exportTableToExcel('example', 'publisher-sdf-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Invoice Number</th>
                                        <th>Invoice Date</th>
                                        <th>MLA</th>
                                        <th>Institution</th>
                                        <th>Amount (in ₹)</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total_sdf_query = "SELECT s.*, mla.* FROM sdf s JOIN mla_15 mla ON s.mla_id = mla.id WHERE user_id=$user_id ORDER BY updated_date DESC;";
                                    $result = mysqli_query($con, $total_sdf_query);
                                    if (mysqli_num_rows($result)) {
                                        $slno = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr class="text-center">
                                                <td><?php echo $slno; ?></td>
                                                <td><?php echo $row['invc_no']; ?></td>
                                                <td><?php echo $row['invc_date']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['inst_name']; ?></td>
                                                <td>₹ <?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['updated_date']; ?></td>
                                            </tr>
                                            <?php
                                            $slno++;
                                        }
                                    } else { ?>
                                        <tr>
                                            <td colspan="7" class="text-center">No SDF Entries present, please Save details.
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