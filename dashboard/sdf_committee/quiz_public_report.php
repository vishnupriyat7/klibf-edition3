<?php include "../header.php"; ?>
<?php include "sidebar.php"; ?>

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
                        <h4 class="mb-sm-0">Quiz Registration Report</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a class="dropdown-item" href="../logout.php"><i
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
                            <h5 class="card-title mb-0">Public Category Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'quiz_public_category_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false" rowspan="2">Sl.No</th>
                                        <th data-ordering="false" rowspan="2">Reg.No</th>
                                        <th data-ordering="false" colspan="5">Participant1 Details</th>
                                        <th data-ordering="false" colspan="5">Participant2 Details</th>
                                        <th data-ordering="false" rowspan="2">Date Registered</th>
                                        <th data-ordering="false" rowspan="2">Action</th>
                                    </tr>
                                    <tr>
                                        <th data-ordering="false">Name</th>
                                        <th data-ordering="false">Gender</th>
                                        <th data-ordering="false">Address</th>
                                        <th data-ordering="false">Phone</th>
                                        <th data-ordering="false">Email</th>
                                        <th data-ordering="false">Name</th>
                                        <th data-ordering="false">Gender</th>
                                        <th data-ordering="false">Address</th>
                                        <th data-ordering="false">Phone</th>
                                        <th data-ordering="false">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $quiz_public_query = "SELECT * FROM reg_quiz where category_id=3";
                                    $quiz_public_registrations = mysqli_query($con, $quiz_public_query);
                                    $counter = 0;
                                    while ($quiz_public_reg = mysqli_fetch_array($quiz_public_registrations)) { ?>
                                        <tr>
                                            <td><?= ++$counter ?></td>
                                            <td>KLIBF03-Q<?= $quiz_public_reg['id'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_name'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_gndr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_addr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_cntct'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_email'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_name'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_gndr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_addr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_cntct'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_email'] ?></td>
                                            <td><?= $quiz_public_reg['updated_date'] ?></td>
                                            <td> </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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

<script type="text/javascript">
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