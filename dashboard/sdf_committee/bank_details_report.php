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
                            <h5 class="card-title mb-0">Publisher Bank Details Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php
                                    $sdf_mla_query = "SELECT DISTINCT m.id, m.name FROM mla_15 m JOIN sdf s ON s.mla_id = m.id;";
                                    $result_sdf_mla = mysqli_query($con, $sdf_mla_query);
                                    $sdf_mlas = $result_sdf_mla->fetch_all();
                                    ?>
                                    <b>Select MLA</b>
                                    <select class="form-control form-group col-md-6" id="sdf_mla" style="height:37px;"
                                        onchange="getSDFMLAPublisher()">
                                        <option value="">Select</option>
                                        <?php foreach ($sdf_mlas as $mla) { ?>
                                            <option value="<?= $mla[0]; ?>">
                                                <?= $mla[1]; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                </div>
                            </div>

                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'sdf-publisher-bank-report')"
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
                                </thead>
                                <tbody class="text-center" id="pub-sdf-mla-bank-list">
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

        function getSDFMLAPublisher() {
            var mlaID = document.getElementById("sdf_mla").value;
            $.ajax({
                url: "<?= $base_url; ?>/dashboard/sdf_committee/get_SDF_publisher_bank_details.php",
                type: "POST",
                data: {
                    mlaId: mlaID
                },
                dataType: "json",
                success: function (data) {
                    $('#pub-sdf-mla-bank-list').empty().append(data);
                }
            });
        }
    </script>