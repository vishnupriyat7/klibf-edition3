<?php include "../header.php";
include "sidebar.php";
$user_id = $user['id'];

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
                                <a class="dropdown-item" href="../logout.php"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- <?php
                    $cpn_bnk_dtls_qry = "SELECT * FROM pub_coupon_bankdtls WHERE user_id = $user_id;";
                    $result_bnk_dtls = mysqli_query($con, $cpn_bnk_dtls_qry);
                    $cpn_bnk_dtls = $result_bnk_dtls->fetch_assoc();
                    ?> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Coupon Receipt GO Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <div class="row align-items-center justify-content-center text-center">
                                <!-- Date Inputs with Labels -->
                                <div class="col-lg-4">
                                    <label for="from_date" class="form-label">Date From</label>
                                    <input type="date" name="from_date" id="from_date" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="to_date" class="form-label">Date To</label>
                                    <input type="date" name="to_date" id="to_date" class="form-control">
                                </div>
                            </div>
                            <!-- Button on Next Line -->
                            <div class="row align-items-center text-center mt-3">
                                <div class="col-lg-12">
                                    <button type="button" id="cpn_report" class="btn btn-success" onclick="generateGoCouponPdfReport()">
                                        Generate Coupon GO Report
                                    </button>
                                </div>
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

    <iframe id="print-invoice-frame" style="display: none;"></iframe>
</div>
<!-- End Page-content -->
<?php include "../footer.php"; ?>
<script>
    function generateGoCouponPdfReport() {
        const userId = "<?= $user['id'] ?>"; // Pass the user_id dynamically
        // const updated_date = document.getElementById('updated_date').value;
        const fromDate = document.getElementById('from_date').value;
        const toDate = document.getElementById('to_date').value;
        // AJAX Request
        $.ajax({
            url: "go_generate_coupon_report_pdf.php", // PHP file that generates HTML content
            type: "POST",
            data: {
                user_id: userId,
                from_date: fromDate,
                to_date: toDate
            },
            success: function(response) {
                var iframe = document.getElementById("print-invoice-frame");
                iframe.contentDocument.write(response);
                iframe.contentDocument.close();
                iframe.focus(); // Optional: focus on the iframe
                iframe.contentWindow.print();
            },
            error: function() {
                alert("Error while generating the report.");
            }
        });
    }
</script>