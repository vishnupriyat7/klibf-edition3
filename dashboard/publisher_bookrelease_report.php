<?php include "header.php"; ?>
<?php include "sidebar_publisher.php"; ?>

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
                                <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
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
                            <h5 class="card-title mb-0">Book Discussion Release Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'publisher_book_discussion_report-data')" class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped" style="font-style:normal; font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th data-ordering="false">Sl.No</th>
                                        <th data-ordering="false">Book Title</th>
                                        <th data-ordering="false">Book Cover</th>
                                        <th data-ordering="false">Book Genere</th>
                                        <th data-ordering="false">Brief Description</th>
                                        <th data-ordering="false">Author</th>
                                        <th data-ordering="false">Releasing by</th>
                                        <th data-ordering="false">Releasing by Contact No</th>
                                        <th data-ordering="false">Receiving by </th>
                                        <th data-ordering="false">Receiving by Contact No</th>
                                        <th data-ordering="false">Guest 1</th>
                                        <th data-ordering="false">Guest 1 Contact No</th>
                                        <th data-ordering="false">Guest 2</th>
                                        <th data-ordering="false">Guest 2 Contact No</th>
                                        <th data-ordering="false">Guest 3</th>
                                        <th data-ordering="false">Guest 3 Contact No</th>
                                        <th data-ordering="false">Event Date Proposed 1</th>
                                        <th data-ordering="false">Time Proposed 1</th>
                                        <th data-ordering="false">Event Date Proposed 2</th>
                                        <th data-ordering="false">Time Proposed 2</th>
                                        <th data-ordering="false">Event Date Proposed 3</th>
                                        <th data-ordering="false">Time Proposed 3</th>
                                        <th data-ordering="false">Contact Person Name</th>
                                        <th data-ordering="false">Contact Person Mobile</th>
                                        <th data-ordering="false">Contact Person Email</th>
                                        
                                        <th data-ordering="false">Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $userId = $user['id'];
                                    $query = "SELECT * FROM evnt_propsl_bkdscn epb join day_time_prefer dtb on epb.id = dtp.book_dscn_id where epb.user_id = '$userId' ORDER BY id DESC";
                                    $discProps = mysqli_query($con, $query);
                                    $counter = 0;
                                    while ($discProp = mysqli_fetch_array($discProps)) {
                                        $id = "$discProp[id]";
                                        $subject = "$discProp[subject]";
                                        // $email = "$bookuser[email]";
                                        // $contactno = "$bookuser[contact_no]";
                                    ?>
                                        <tr>
                                            <td>
                                                <?= ++$counter; ?>
                                            </td>
                                            <td>
                                                <?= $subject; ?>
                                            </td>
                                            <td>
                                                <?= $email; ?>
                                            </td>
                                            <td>
                                                <?= $contactno; ?>
                                            </td>
                                            <td>
                                                <div class='dropdown d-inline-block'>
                                                    <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                        <i class='ri-more-fill align-middle'></i>
                                                    </button>
                                                    <ul class='dropdown-menu dropdown-menu-end'>
                                                        <li>
                                                            <a href='publisher_bookdiscussion.php?discid=<?= $id; ?>' class='dropdown-item edit-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Edit
                                                            </a>
                                                        </li>
                                                        <!-- <li>
                                                            <a href='deletesocial.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                            </a>
                                                        </li> -->
                                                        <li>
                                                            <?php
                                                            // $query = "SELECT * FROM users_profile where user_id='$id'";
                                                            // $profileusers = mysqli_query($con, $query);
                                                            // $user_profile_row = mysqli_fetch_row($profileusers);
                                                            // if ($user_profile_row) {
                                                            //     $btnenbl = "hidden";
                                                            // } else {
                                                            //     $btnenbl = "";
                                                            // }
                                                            ?>
                                                            <a href='' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-danger'></i>Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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