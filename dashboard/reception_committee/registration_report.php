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
                            <h5 class="card-title mb-0">Virtual Queue Registration Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <button onclick="exportTableToExcel('example', 'virtual_queue_registration_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <div class="card" style="width:200vw;">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                    style="font-style:normal; font-size: 12px;">
                                    <thead class="text-center">
                                        <tr>
                                            <th data-ordering="false" rowspan="2">Sl.No</th>
                                            <th data-ordering="false" rowspan="2">District</th>
                                            <th data-ordering="false" rowspan="2">Institution Name</th>
                                            <th data-ordering="false" rowspan="2">Head of Institution</th>
                                            <th data-ordering="false" rowspan="2">Designation</th>
                                            <th data-ordering="false" rowspan="2">Contact Number1</th>
                                            <th data-ordering="false" rowspan="2">Contact Number2</th>
                                            <th data-ordering="false" rowspan="2">Email</th>
                                            <th data-ordering="false" rowspan="2">Institution Type</th>
                                            <th data-ordering="false" rowspan="2">Count Upto STD 7</th>
                                            <th data-ordering="false" rowspan="2">Count STD 8 Onwards</th>
                                            <th data-ordering="false" rowspan="2">Total Count</th>
                                            <th data-ordering="false" rowspan="2">Event Day</th>
                                            <th data-ordering="false" rowspan="2">Date</th>
                                            <th data-ordering="false" rowspan="2">Slot Name</th>
                                            <th data-ordering="false" rowspan="2">Slot Time</th>
                                            <th data-ordering="false" rowspan="2">Booked Date</th>
                                            <!-- <th data-ordering="false" rowspan="2">Date Registered</th>
                                            <th data-ordering="false" rowspan="2">Action</th> -->

                                    </thead>
                                    <tbody id="quiz-data-list">
                                        <?php
                                        $virtualq_reg_query = "SELECT q.*, d.dt_name, ed.event_date, ed.event_day, qs.slot_time, qs.slot_name FROM queue q JOIN district d ON q.dist_id = d.id JOIN event_date ed ON q.date_id = ed.id JOIN queue_slot qs ON q.slot_id = qs.id ORDER BY id DESC";
                                        $virtualq_registrations = mysqli_query($con, $virtualq_reg_query);
                                        $counter = 0;
                                        while ($virtualq_reg = mysqli_fetch_array($virtualq_registrations)) {
                                            // if (!$virtualq_reg['team2_mem1_name']) {
                                            //     $virtualq_reg['team2_mem1_gndr'] = '';
                                            // }
                                            // if (!$virtualq_reg['team2_mem2_name']) {
                                            //     $virtualq_reg['team2_mem2_gndr'] = '';
                                            // }
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
                                                <td><?= $virtualq_reg['inst_type'] ?></td>
                                                <td><?= $virtualq_reg['count_lp'] ?></td>
                                                <td><?= $virtualq_reg['count_hs'] ?></td>
                                                <td><?= $virtualq_reg['count_tot'] ?></td>
                                                <td><?= $virtualq_reg['event_day'] ?></td>
                                                <td><?= $virtualq_reg['event_date'] ?></td>
                                                <td><?= $virtualq_reg['slot_name'] ?></td>
                                                <td><?= $virtualq_reg['slot_time'] ?></td>



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

        function delete_virtualq_reg(quiz_id) {
            $.ajax({
                url: "delete_virtualq_registration.php",
                type: "POST",
                data: {
                    quiz_id: quiz_id
                },
                dataType: "json",
                success: function(data) {
                    if (data === 1) {
                        swal("Quiz registration deleted successsfully").then(() => {
                            location.reload();
                        });
                    }
                }
            });
        }
    </script>