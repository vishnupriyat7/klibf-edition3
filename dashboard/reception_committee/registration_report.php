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
                        <h4 class="mb-sm-0">Virtual Queue Registration Report</h4>
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
                            <h5 class="card-title mb-0">Virtual Queue Registration Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'virtual_queue_registration_report')" class="btn btn-primary">Export Table Data To Excel File</button>

                            <div class="card" style="width:200vw;">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th data-ordering="false">Sl.No</th>
                                            <th data-ordering="false">District</th>
                                            <th data-ordering="false">Institution Name</th>
                                            <th data-ordering="false">Head of Institution</th>
                                            <th data-ordering="false">Designation</th>
                                            <th data-ordering="false">Contact Number1</th>
                                            <th data-ordering="false">Contact Number2</th>
                                            <th data-ordering="false">Email</th>
                                            <th data-ordering="false">Institution Type</th>
                                            <th data-ordering="false">Count Upto STD 7</th>
                                            <th data-ordering="false">Count STD 8 Onwards</th>
                                            <th data-ordering="false">Total Count</th>
                                            <th data-ordering="false">Event Day</th>
                                            <th data-ordering="false">Date</th>
                                            <th data-ordering="false">Slot Name</th>
                                            <th data-ordering="false">Slot Time</th>
                                            <th data-ordering="false">Booked Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $virtualq_reg_query = "SELECT q.*, d.dt_name, ed.event_date, ed.event_day, qs.slot_time, qs.slot_name FROM queue q JOIN district d ON q.dist_id = d.id JOIN event_date ed ON q.date_id = ed.id JOIN queue_slot qs ON q.slot_id = qs.id ORDER BY id DESC";
                                        $virtualq_registrations = mysqli_query($con, $virtualq_reg_query);
                                        $counter = 0;
                                        while ($virtualq_reg = mysqli_fetch_array($virtualq_registrations)) {

                                            if ($virtualq_reg['inst_type'] == 'C') {
                                                $inst_type = 'College';
                                            } else {
                                                $inst_type = 'School';
                                            }
                                        ?>
                                            <tr class="text-center">
                                                <td><?= ++$counter ?></td>
                                                <td><?= $virtualq_reg['dt_name'] ?></td>
                                                <td><?= $virtualq_reg['inst_name'] ?></td>
                                                <td><?= $virtualq_reg['head_of_inst_name'] ?></td>
                                                <td><?= $virtualq_reg['designation'] ?></td>
                                                <td><?= $virtualq_reg['cntct_no1'] ?></td>
                                                <td><?= $virtualq_reg['cntct_no2'] ?></td>
                                                <td><?= $virtualq_reg['email'] ?></td>
                                                <td><?= $inst_type ?></td>
                                                <td><?= $virtualq_reg['count_lp'] ?></td>
                                                <td><?= $virtualq_reg['count_hs'] ?></td>
                                                <td><?= $virtualq_reg['count_tot'] ?></td>
                                                <td><?= $virtualq_reg['event_day'] ?></td>
                                                <td><?= $virtualq_reg['event_date'] ?></td>
                                                <td><?= $virtualq_reg['slot_name'] ?></td>
                                                <td><?= $virtualq_reg['slot_time'] ?></td>
                                                <td><?= $virtualq_reg['booked_date'] ?></td>
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