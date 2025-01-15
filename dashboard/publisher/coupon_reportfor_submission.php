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
            <?php
            $cpn_bnk_dtls_qry = "SELECT * FROM pub_coupon_bankdtls WHERE user_id = $user_id;";
            $result_bnk_dtls = mysqli_query($con, $cpn_bnk_dtls_qry);
            $cpn_bnk_dtls = $result_bnk_dtls->fetch_assoc();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Coupon Report For Submission</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-6">
                                    <!-- Date Input -->
                                    <input type="date" name="updated_date" id="updated_date" class="form-control d-inline-block" style="width: auto;">
                                </div>

                                <?php if ($cpn_bnk_dtls) { ?>
                                    <div class="col-lg-6">
                                        <!-- Generate Report Button -->
                                        <button type="button" id="cpn_report" class="btn btn-success" onclick="generatePdfReport()">
                                            Generate Coupon Report
                                        </button>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-lg-6">
                                        <!-- Alert for Missing Bank Details -->
                                        <div class="alert alert-danger d-inline-block mb-0" role="alert" style="display: inline-block; padding: 5px 10px;">
                                            <strong>Please Provide Bank Details First!.. Then Generate Report</strong>
                                        </div>
                                    </div>
                                <?php } ?>
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
    function generatePdfReport() {
        const userId = "<?= $user['id'] ?>"; // Pass the user_id dynamically
        const updated_date = document.getElementById('updated_date').value;
        // AJAX Request
        $.ajax({
            url: "generate_coupon_report_pdf.php", // PHP file that generates HTML content
            type: "POST",
            data: {
                user_id: userId,
                date: updated_date
            },
            success: function(response) {
                // Set the iframe content dynamically
                // const iframe = document.getElementById("print-invoice-frame");
                // iframe.style.display = "block";
                // const iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                // iframeDocument.open();
                // iframeDocument.write(response);
                // iframeDocument.close();





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