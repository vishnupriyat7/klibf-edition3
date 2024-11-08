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
                        <h4 class="mb-sm-0">Report</h4>
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
                            <h5 class="card-title mb-0">Stall Booking Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <button onclick="exportTableToExcel('example', 'quiz_zone_wise_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <div class="card" style="width:150vw;">
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
                                            <th data-ordering="false" rowspan="2">Principal's Contact</th>
                                            <th data-ordering="false" rowspan="2">In-Charge Name</th>
                                            <th data-ordering="false" rowspan="2">In-Charge Contact</th>                                        
                                            <th data-ordering="false" colspan="5">Team1 Member1 Details</th>
                                            <th data-ordering="false" colspan="5">Team1 Member2 Details</th>
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
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Class / Course</th>
                                            <th data-ordering="false">Gender</th>
                                            <th data-ordering="false">Phone</th>
                                            <th data-ordering="false">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT a.*, b.category as category, c.name as zone, d.dt_name as dist_name FROM reg_quiz a join quiz_category b on a.category_id = b.id join quiz_zone c on a.zone_id = c.id join district d on a.district_id = d.id where a.category_id != 3 ORDER BY id DESC";
                                        $reg_quiz_zone = mysqli_query($con, $query);
                                        $counter = 0;
                                        while ($quiz_zone = mysqli_fetch_array($reg_quiz_zone)) {
                                        ?>
                                            <tr>
                                                <td><?= ++$counter; ?></td>
                                                <td>KLIBF03-Q<?= $quiz_zone['id']; ?></td>
                                                <td><?= $quiz_zone['category']; ?></td>
                                                <td><?= $quiz_zone['zone']; ?></td>
                                                <td><?= $quiz_zone['dist_name']; ?></td>
                                                <td><?= $quiz_zone['inst_name']; ?></td>
                                                <td><?= $quiz_zone['inst_addr']; ?></td>
                                                <td><?= $quiz_zone['inst_prnci_cntct']; ?></td>
                                                <td><?= $quiz_zone['inst_faclt_name']; ?></td>
                                                <td><?= $quiz_zone['inst_faclt_cntct']; ?></td>
                                                <td><?= $quiz_zone['team1_mem1_name']; ?></td>
                                                <td><?= $quiz_zone['team1_mem1_class']; ?></td>
                                                <td><?= $quiz_zone['team1_mem1_gndr']; ?></td>
                                                <td><?= $quiz_zone['team1_mem1_cntct']; ?></td>
                                                <td><?= $quiz_zone['team1_mem1_email']; ?></td>
                                                <td><?= $quiz_zone['team1_mem2_name']; ?></td>
                                                <td><?= $quiz_zone['team1_mem2_class']; ?></td>
                                                <td><?= $quiz_zone['team1_mem2_gndr']; ?></td>
                                                <td><?= $quiz_zone['team1_mem2_cntct']; ?></td>
                                                <td><?= $quiz_zone['team1_mem2_email']; ?></td>
                                                <td><?= $quiz_zone['team2_mem1_name']; ?></td>
                                                <td><?= $quiz_zone['team2_mem1_class']; ?></td>
                                                <td><?= $quiz_zone['team2_mem1_gndr']; ?></td>
                                                <td><?= $quiz_zone['team2_mem1_cntct']; ?></td>
                                                <td><?= $quiz_zone['team2_mem1_email']; ?></td>
                                                <td><?= $quiz_zone['team2_mem2_name']; ?></td>
                                                <td><?= $quiz_zone['team2_mem2_class']; ?></td>
                                                <td><?= $quiz_zone['team2_mem2_gndr']; ?></td>
                                                <td><?= $quiz_zone['team2_mem2_cntct']; ?></td>
                                                <td><?= $quiz_zone['team2_mem2_email']; ?></td>
                                                <td><?= $quiz_zone['updated_date']; ?></td>
                                                <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button'
                                                            data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                            <!-- <li>
                                                            <a href='editstall_registration.php?id=$id' class='dropdown-item edit-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href='deletesocial.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Approve
                                                            </a>
                                                        </li> -->
                                                            <li>
                                                                <a href='deletestall_registration.php?id=<?= $id ?>'
                                                                    class='dropdown-item remove-item-btn'>
                                                                    <i
                                                                        class='ri-delete-bin-fill align-bottom me-2 text-muted'></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
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