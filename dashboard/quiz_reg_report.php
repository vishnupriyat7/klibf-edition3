<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row" style="width: 250%;">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Report</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Quiz Contest </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="width: 250%;">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Quiz Contest Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <button onclick="exportTableToExcel('example', 'quizregistrationreport-data')" class="btn btn-primary">Export Table Data To Excel File</button>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped" style="width:100%; font-style:normal; font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th data-ordering="false">Sl.No</th>
                                        <th data-ordering="false">Category</th>
                                        <th data-ordering="false">Institute Name</th>
                                        <th data-ordering="false">Institute Address</th>
                                        <th data-ordering="false">First Participant Name </th>
                                        <th data-ordering="false">First Participant Address</th>
                                        <th data-ordering="false">First Participant Date of Birth</th>
                                        <th data-ordering="false">First Participant Gender</th>
                                        <th data-ordering="false">First Participant Email</th>
                                        <th data-ordering="false">First Participant Phone</th>
                                        <th data-ordering="false">Second Participant Name </th>
                                        <th data-ordering="false">Second Participant Address</th>
                                        <th data-ordering="false">Second Participant Date of Birth</th>
                                        <th data-ordering="false">Second Participant Gender</th>
                                        <th data-ordering="false">Second Participant Email</th>
                                        <th data-ordering="false">Second Participant Phone</th>
                                        <th data-ordering="false">Date Registered</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM  reg_quiz ORDER BY id DESC";
                                    $reg_quiz = mysqli_query($con, $query);
                                    $counter = 0;
                                    while ($quiz = mysqli_fetch_array($reg_quiz)) {
                                        $id = "$quiz[id]";
                                        $category = "$quiz[category]";
                                        if ($category == 'S') {
                                            $category_type = "School";
                                        } else if ($category == 'P') {
                                            $category_type = "Public";
                                        } else {
                                            $category_type = "College";
                                        }
                                        $institute_name = "$quiz[institute_name]";
                                        $institute_addr = "$quiz[institute_addr]";
                                        $first_part_name = "$quiz[first_part_name]";
                                        $first_part_addr = "$quiz[first_part_addr]";
                                        $first_part_dob = "$quiz[first_part_dob]";
                                        $first_part_gndr = "$quiz[first_part_gndr]";
                                        $first_part_email = "$quiz[first_part_email]";
                                        $first_part_phone = "$quiz[first_part_phone]";
                                        $second_part_name = "$quiz[second_part_name]";
                                        $second_part_addr = "$quiz[second_part_addr]";
                                        $second_part_dob = "$quiz[second_part_dob]";
                                        $second_part_gndr = "$quiz[second_part_gndr]";
                                        $secon_part_email = "$quiz[secon_part_email]";
                                        $second_part_phone = "$quiz[second_part_phone]";
                                        $reg_date = "$quiz[reg_date]";
                                    ?>
                                        <tr>
                                            <td>
                                                <?= ++$counter; ?>
                                            </td>
                                            <td>
                                                <?= $category_type; ?>
                                            </td>
                                            <td>
                                                <?= $institute_name; ?>
                                            </td>
                                            <td>
                                                <?= $institute_addr; ?>
                                            </td>
                                            <td>
                                                <?= $first_part_name; ?>
                                            </td>
                                            <td>
                                                <?= $first_part_addr; ?>
                                            </td>
                                            <td>
                                                <?= $first_part_dob; ?>
                                            </td>
                                            <td>
                                                <?= $first_part_gndr; ?>
                                            </td>
                                            <td>
                                                <?= $first_part_email; ?>
                                            </td>
                                            <td>
                                                <?= $first_part_phone; ?>
                                            </td>
                                            <td>
                                                <?= $second_part_name; ?>
                                            </td>
                                            <td>
                                                <?= $second_part_addr; ?>
                                            </td>
                                            <td>
                                                <?= $second_part_dob; ?>
                                            </td>
                                            <td>
                                                <?= $second_part_gndr; ?>
                                            </td>
                                            <td>
                                                <?= $secon_part_email; ?>
                                            </td>
                                            <td>
                                                <?= $second_part_phone; ?>
                                            </td>
                                            <td>
                                                <?= $reg_date; ?>
                                            </td>


                                            <td>
                                                <div class='dropdown d-inline-block'>
                                                    <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
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
                                                            <a href='deletestall_registration.php?id=<?= $id ?>' class='dropdown-item remove-item-btn'>
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