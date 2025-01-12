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
                            <div class="col-md-6">
                                <?php
                                $publisher_query = "SELECT DISTINCT u.id, u.name FROM users u JOIN coupon_publisher_invoice cpi ON cpi.user_id = u.id;";
                                $result_publisher = mysqli_query($con, $publisher_query);
                                $coupon_publishers = $result_publisher->fetch_all();
                                ?>
                                <b>Select Publisher</b>
                                <select class="form-control form-group col-md-6" id="coupon_pub" style="height:37px;"
                                    onchange="getCouponList()">
                                    <option value="">Select</option>
                                    <?php foreach ($coupon_publishers as $publisher) { ?>
                                        <option value="<?= $publisher[0]; ?>">
                                            <?= $publisher[1]; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <br>
                            </div>
                            <div class="row" id="pub-coupon-bnk-dtls" hidden>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>Bank Name</label>
                                    <input type="text" class="form-control" id="cpn-bnk-name" readonly>
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label for="">Bank Branck</label>
                                    <input type="text" class="form-control" id="cpn-bnk-branch" readonly>
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <br>
                                    <label for="">Account Holder Name</label>
                                    <input type="text" class="form-control" id="cpn-bnk-acc-name" readonly>
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <br>
                                    <label for="">Account Number</label>
                                    <input type="text" class="form-control" id="cpn-bnk-accno" readonly>
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <br>
                                    <label for="">IFSC</label>
                                    <input type="text" class="form-control" id="cpn-bnk-ifsc" readonly>
                                    <br>
                                </div>
                            </div>
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'coupon-publisher-wise-report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false" rowspan="2">Sl No</th>
                                        <th data-ordering="false" rowspan="2">Publisher</th>
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
                                <tbody class="text-center" id="pub-coupon-list">
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

        function getCouponList() {
            var pubId = document.getElementById("coupon_pub").value;
            $.ajax({
                url: "<?= $base_url; ?>/dashboard/sdf_committee/get_coupon_publisher_list.php",
                type: "POST",
                data: {
                    pubId: pubId
                },
                dataType: "json",
                success: function (data) {
                    $('#pub-coupon-list').empty().append(data[0]);
                    if (data[1] !== null) {
                        document.getElementById("cpn-bnk-name").value = data[1]['bank_name'];
                        document.getElementById("cpn-bnk-branch").value = data[1]['bank_branch'];
                        document.getElementById("cpn-bnk-acc-name").value = data[1]['acc_holder_name'];
                        document.getElementById("cpn-bnk-accno").value = data[1]['account_no'];
                        document.getElementById("cpn-bnk-ifsc").value = data[1]['bank_ifsc'];
                        document.getElementById("pub-coupon-bnk-dtls").removeAttribute('hidden');
                    } else {
                        document.getElementById("cpn-bnk-name").value = "";
                        document.getElementById("cpn-bnk-branch").value = "";
                        document.getElementById("cpn-bnk-acc-name").value = "";
                        document.getElementById("cpn-bnk-accno").value = "";
                        document.getElementById("cpn-bnk-ifsc").value = "";
                        document.getElementById("pub-coupon-bnk-dtls").setAttribute('hidden', "");
                    }
                }
            });
        }
    </script>