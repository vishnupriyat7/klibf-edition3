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
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <button type="submit" name="cpn_report" id="cpn_report" class="btn btn-success" onclick="generateSdfReport()"
                                        disabled>Generate Coupon Report</button>
                                </div>
                            </div>
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container-fluid -->
        <!-- <iframe id="print-frame" style="display: none;"></iframe> -->
        <iframe id="print-invoice-frame" style="display: none;"></iframe>
    </div>
    <!-- End Page-content -->
    <?php include "../footer.php"; ?>
    <script>
        function generateSdfReport() {
            // alert("hii");
            var stall3x3 = <?= json_encode($stall3x3) ?>;
            // alert(stall3x3);
            var stall3x2 = <?= json_encode($stall3x2) ?>;
            // alert(stall3x2);
            var slno = 0;
            var desc3x3 = "";
            var desc3x2 = "";
            // var divToPrint = document.getElementById("pay-slip");

            var htmlContent = '<html>';
            var htmlContent = htmlContent + '<head>';
            var htmlContent = htmlContent + '<link href="<?= $base_url; ?>/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />';
            var htmlContent = htmlContent + '<link href="<?= $base_url; ?>/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />';
            var htmlContent = htmlContent + '<link href="<?= $base_url; ?>/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" />';
            var htmlContent = htmlContent + '<link href="<?= $base_url; ?>/dashboard/assets/css/custom.min.css" rel="stylesheet" type="text/css" />';
            var htmlContent = htmlContent + '</head>';
            var htmlContent = htmlContent + '<body>';
            var htmlContent = htmlContent + '<style>td, th {font-size:12;} .center {display: block; margin-left: auto; margin-right: auto;width: auto; }</style>';
            var htmlContent = htmlContent + '<br><div class="text-center"><img src="<?= $base_url; ?>/dashboard/assets/images/Govt_Logo.png" height="70vh" class="center"><br></div>';
            var htmlContent = htmlContent + '<table class="table table-striped table-bordered">';
            var htmlContent = htmlContent + '<tr><th colspan="11" class="text-center">SECRETARIAT OF THE KERALA LEGISLATURE<br></th></tr>';
            var htmlContent = htmlContent + '<tr><td>PB No:</td><td>5430</td><td colspan="6"></td><td>GSTN: </td><td><b>32AAAGK0786J1ZD</b></td></tr>';
            var htmlContent = htmlContent + '<tr><td>PIN:</td><td>695 033</td></tr><tr><td>Email:</td><td>secretary@niyamasabha.nic.in</td></tr>';
            var htmlContent = htmlContent + '<tr><th class="text-center" colspan="11">INVOICE<br></th></tr>';
            var htmlContent = htmlContent + '<tr><td>Bill To</td><td><?= $user_prof['org_name']; ?><br><?= $user_prof['head_org_email']; ?></td><td colspan="3"></td><td colspan="3" style="text-align: right;">Invoice No:</td><td colspan="2"><?= $invoice; ?></td></tr>';
            var htmlContent = htmlContent + '<tr><td>GSTIN:</td><td><?= $user_prof['gst_no']; ?></td><td colspan="3"></td><td colspan="3" style="text-align: right;">Invoice Date:</td><td colspan="2"><?= $chellan['approved_date']; ?></td></tr>';
            var htmlContent = htmlContent + '<tr><td colspan="11"></td></tr>';
            var htmlContent = htmlContent + '<tr><td rowspan="2" style="text-align: center;">No</td><td rowspan="2" style="text-align: center;">Item Description</td><td rowspan="2" style="text-align: center;">HSN/SAC</td><td rowspan="2" style="text-align: center;">Qty</td><td rowspan="2" style="text-align: center;">Unit Price</td><td rowspan="2" style="text-align: right;">Taxable Amount</td><td colspan="3" style="text-align: center;">GST</td><td rowspan="2" style="text-align: right;">Total</td></tr>';
            var htmlContent = htmlContent + '<tr><td style="text-align: center;">%</td><td style="text-align: center;">SGST</td><td style="text-align: center;">CGST</td></tr><tr><td style="text-align: center;">';

            if (stall3x3 > 0) {
                var htmlContent = htmlContent + (++slno) + '</td><td>Rent for Stall 3x3m 01/11/2023-07/11/2023</td><td>997222</td><td style="text-align: right;">&emsp;' + stall3x3 + '</td><td style="text-align: right;">10000</td><td style="text-align: right;"><?= $rate3x3; ?></td><td style="text-align: right;">18</td><td style="text-align: right;"><?= ($gst3x3 / 2); ?></td><td style="text-align: right;"><?= ($gst3x3 / 2); ?></td><td style="text-align: right;"><?= $tot_amt3x3; ?>';
            }

            if (stall3x2 > 0) {
                var htmlContent = htmlContent + (++slno) + '</td><td>Rent for Stall 3x2m 01/11/2023-07/11/2023</td><td>997222</td><td style="text-align: right;">' + stall3x2 + '</td><td style="text-align: right;">8500</td><td style="text-align: right;"><?= $rate3x2; ?></td><td style="text-align: right;">18</td><td style="text-align: right;"><?= ($gst3x2 / 2); ?></td><td style="text-align: right;"><?= ($gst3x2 / 2); ?></td><td style="text-align: right;"><?= $tot_amt3x2; ?>';
            }
            var htmlContent = htmlContent + '</td></tr><tr><td colspan="11"></td></tr><tr><td colspan="3" style="text-align: right;">Total</td><td style="text-align: right;">' + (stall3x3 + stall3x2) + '</td><td></td><td style="text-align: right;"><?= ($rate3x3 + $rate3x2); ?></td><td></td><td style="text-align: right;"><?= (($gst3x3 + $gst3x2) / 2); ?></td><td style="text-align: right;"><?= (($gst3x3 + $gst3x2) / 2); ?></td><td style="text-align: right;"><?= $total_amt; ?></td></tr><tr><td colspan="11"></td></tr><tr><td colspan="4" style="text-align: right;">Total Taxable Amount</td><td colspan="7" style="text-align: right;"><?= ($rate3x3 + $rate3x2); ?></td></tr><tr><td colspan="4" style="text-align: right;">Total Tax Amount</td><td colspan="7" style="text-align: right;"><?= ($gst3x3 + $gst3x2); ?></td></tr><tr><td colspan="4" style="text-align: right;">Total Amount</td><td colspan="7" style="text-align: right;"><?= $total_amt; ?></td></tr><tr><td colspan="4" style="text-align: right;">Amount Due</td><td colspan="7" style="text-align: right;"><?= $total_amt; ?></td></tr><tr><td colspan="4" style="text-align: right;">Total (in words)</td><td colspan="7" style="text-align: right;"><?= $totalinword; ?></td></tr><tr><td colspan="11" style="text-align: right;"><br><br><br>Authorized Signatory</td></tr></table></body></html>';

            var iframe = document.getElementById("print-invoice-frame");
            iframe.contentDocument.write(htmlContent);
            iframe.contentDocument.close();
            iframe.focus(); // Optional: focus on the iframe
            iframe.contentWindow.print();
        }
    </script>