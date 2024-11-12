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
                            <h5 class="card-title mb-0">Quiz Registration Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <button onclick="exportTableToExcel('example', 'quiz_report_all')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <div class="card" style="width:200vw;">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                    style="font-style:normal; font-size: 12px;">
                                    <thead class="text-center">
                                        <tr>
                                            <th data-ordering="false" rowspan="2">Sl.No</th>
                                            <th data-ordering="false" rowspan="2">Reg.No</th>
                                            <th data-ordering="false" rowspan="2">Category</th>
                                            <th data-ordering="false" rowspan="2">Zone</th>
                                            <th data-ordering="false" rowspan="2">District</th>
                                            <th data-ordering="false" rowspan="2">Institute Name</th>
                                            <th data-ordering="false" rowspan="2">Institute Address</th>
                                            <th data-ordering="false" rowspan="2">Principal Contact</th>
                                            <th data-ordering="false" rowspan="2">In-Charge Name</th>
                                            <th data-ordering="false" rowspan="2">In-Charge Contact</th>
                                            <th data-ordering="false" colspan="6">Team1 Member1 Details</th>
                                            <th data-ordering="false" colspan="6">Team1 Member2 Details</th>
                                            <th data-ordering="false" colspan="5">Team2 Member1 Details</th>
                                            <th data-ordering="false" colspan="5">Team2 Member2 Details</th>
                                            <th data-ordering="false" rowspan="2">Date Registered</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Class / Course</th>
                                            <th data-ordering="false">Gender</th>
                                            <th data-ordering="false">Phone</th>
                                            <th data-ordering="false">Email</th>
                                            <th data-ordering="false">Address</th>
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Class / Course</th>
                                            <th data-ordering="false">Gender</th>
                                            <th data-ordering="false">Phone</th>
                                            <th data-ordering="false">Email</th>
                                            <th data-ordering="false">Address</th>
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Class / Course</th>
                                            <th data-ordering="false">Gender</th>
                                            <th data-ordering="false">Phone</th>
                                            <th data-ordering="false">Email</th>
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Class / Course</th>
                                            <th data-ordering="false">Gender</th>
                                            <th data-ordering="false">Phone</th>
                                            <th data-ordering="false">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody id="quiz-data-list">
                                        <?php
                                        $quiz_reg_query = "SELECT a.*, b.category as category, c.name as zone, d.dt_name as dist_name FROM reg_quiz a join quiz_category b on a.category_id = b.id join quiz_zone c on a.zone_id = c.id join district d on a.district_id = d.id ORDER BY id DESC";
                                        $quiz_registrations = mysqli_query($con, $quiz_reg_query);
                                        $counter = 0;
                                        while ($quiz_reg = mysqli_fetch_array($quiz_registrations)) {
                                            if (!$quiz_reg['team2_mem1_name']) {
                                                $quiz_reg['team2_mem2_gndr'] = '';
                                            }
                                            if (!$quiz_reg['team2_mem2_name']) {
                                                $quiz_reg['team2_mem2_gndr'] = '';
                                            }
                                            ?>
                                            <tr>
                                                <td><?= ++$counter ?></td>
                                                <td>KLIBF03-Q<?= $quiz_reg['id'] ?></td>
                                                <td><?= $quiz_reg['category'] ?></td>
                                                <td><?= $quiz_reg['zone'] ?></td>
                                                <td><?= $quiz_reg['dist_name'] ?></td>
                                                <td><?= $quiz_reg['inst_name'] ?></td>
                                                <td><?= $quiz_reg['inst_addr'] ?></td>
                                                <td><?= $quiz_reg['inst_prnci_cntct'] ?></td>
                                                <td><?= $quiz_reg['inst_faclt_name'] ?></td>
                                                <td><?= $quiz_reg['inst_faclt_cntct'] ?></td>
                                                <td><?= $quiz_reg['team1_mem1_name'] ?></td>
                                                <td><?= $quiz_reg['team1_mem1_class'] ?></td>
                                                <td><?= $quiz_reg['team1_mem1_gndr'] ?></td>
                                                <td><?= $quiz_reg['team1_mem1_cntct'] ?></td>
                                                <td><?= $quiz_reg['team1_mem1_email'] ?></td>
                                                <td><?= $quiz_reg['team1_mem1_addr'] ?></td>
                                                <td><?= $quiz_reg['team1_mem2_name'] ?></td>
                                                <td><?= $quiz_reg['team1_mem2_class'] ?></td>
                                                <td><?= $quiz_reg['team1_mem2_gndr'] ?></td>
                                                <td><?= $quiz_reg['team1_mem2_cntct'] ?></td>
                                                <td><?= $quiz_reg['team1_mem2_email'] ?></td>
                                                <td><?= $quiz_reg['team1_mem2_addr'] ?></td>
                                                <td><?= $quiz_reg['team2_mem1_name'] ?></td>
                                                <td><?= $quiz_reg['team2_mem1_class'] ?></td>
                                                <td><?= $quiz_reg['team2_mem1_gndr'] ?></td>
                                                <td><?= $quiz_reg['team2_mem1_cntct'] ?></td>
                                                <td><?= $quiz_reg['team2_mem1_email'] ?></td>
                                                <td><?= $quiz_reg['team2_mem2_name'] ?></td>
                                                <td><?= $quiz_reg['team2_mem2_class'] ?></td>
                                                <td><?= $quiz_reg['team2_mem2_gndr'] ?></td>
                                                <td><?= $quiz_reg['team2_mem2_cntct'] ?></td>
                                                <td><?= $quiz_reg['team2_mem2_email'] ?></td>
                                                <td><?= $quiz_reg['updated_date'] ?></td>
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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script> -->
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