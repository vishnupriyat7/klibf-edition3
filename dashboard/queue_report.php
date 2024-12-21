<?php include "header.php"; ?>
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Virtual Queue</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="width: 150%;">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Virtual Queue Booking</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'virtualqueuereport-data')" class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive table-striped" style="width:100%; font-style:normal; font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th data-ordering="false">Sl.No</th>
                                        <th data-ordering="false">Requested Date</th>
                                        <th data-ordering="false">Requested Time Slot</th>
                                        <th data-ordering="false">No.of Persons</th>
                                        <th data-ordering="false">Organization Name</th>
                                        <th data-ordering="false">Organization Address</th>
                                        <th data-ordering="false">First Contact Person</th>
                                        <th data-ordering="false">Contact No.</th>
                                        <th data-ordering="false">Second Contact Person</th>
                                        <th data-ordering="false">Contact No.</th>
                                        <th data-ordering="false">E-Mail ID</th>
                                        <th data-ordering="false">Booked Date</th>
                                        <th>Action</th>
                                        <!-- <th></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT c.*, a.queue_date, b.slot FROM ((queue c JOIN queue_date a ON c.date_id = a.id) JOIN queue_slot b ON c.slot_id = b.id)";
                                    $book_queue = mysqli_query($con, $query);
                                    $counter = 0;
                                    while ($queue = mysqli_fetch_array($book_queue)) {
                                        $id = "$queue[id]";
                                        $org_name = "$queue[inst_name]";
                                        $inst_addr = "$queue[inst_addr]";
                                        $cntct_name1 = "$queue[cntct_name1]";
                                        $cntct_no1 = "$queue[cntct_no1]";
                                        $cntct_name2 = "$queue[cntct_name2]";
                                        $cntct_no2 = "$queue[cntct_no2]";
                                        $email = "$queue[email]";
                                        $count = "$queue[count]";
                                        $booked_date = "$queue[booked_date]";
                                        // $status = "$queue[status]";
                                        $queue_date = "$queue[queue_date]";
                                        $slot = "$queue[slot]";
                                    ?>
                                        <tr>
                                            <td>
                                                <?= ++$counter; ?>
                                            </td>
                                            <td>
                                                <?= $queue_date; ?>
                                            </td>
                                            <td>
                                                <?= $slot; ?>
                                            </td>
                                            <td>
                                                <?= $count; ?>
                                            </td>
                                            <td>
                                                <?= $org_name; ?>
                                            </td>
                                            <td>
                                                <?= $inst_addr; ?>
                                            </td>
                                            <td>
                                                <?= $cntct_name1; ?>
                                            </td>
                                            <td>
                                                <?= $cntct_no1; ?>
                                            </td>
                                            <td>
                                                <?= $cntct_name2; ?>
                                            </td>
                                            <td>
                                                <?= $cntct_no2; ?>
                                            </td>
                                            <td>
                                                <?= $email; ?>
                                            </td>
                                            <td>
                                                <?= $booked_date; ?>
                                            </td>
                                            <!-- <td>
                                                <?= $status; ?>
                                            </td> -->
                                            <td>
                                                <div class='dropdown d-inline-block'>
                                                    <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                        <i class='ri-more-fill align-middle'></i>
                                                    </button>
                                                    <ul class='dropdown-menu dropdown-menu-end'>
                                                        <!-- <li>
                                                            <a href='edit_queue.php?id=$id' class='dropdown-item edit-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Edit
                                                            </a>
                                                        </li> -->
                                                        <!-- <li>
                                                            <a href='deletesocial.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Approve
                                                            </a>
                                                        </li> -->
                                                        <li>
                                                            <a href='deletevirtual_queue.php?id=<?= $id ?>' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php  }
                                    ?>
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
    <?php include "footer.php"; ?>

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