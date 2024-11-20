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
                            <h5 class="card-title mb-0">Zone Wise Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <button onclick="exportTableToExcel('example', 'quiz_zone_wise_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button>
                            <div class="card-body">
                                <div class="row align-items-center justify-content-center">
                                    <div class="form-group col-xxl-4 col-xl-4 col-lg-4 col-sm-12 d-flex flex-row">
                                        <label class="me-3">*Select Category:</label>
                                        <?php
                                        $quiz_cat_qry = "SELECT * FROM quiz_category where id != 3;";
                                        $quiz_cat_stmt = $con->prepare($quiz_cat_qry);
                                        $quiz_cat_stmt->execute();
                                        $quiz_cat_res = $quiz_cat_stmt->get_result();
                                        $quiz_categories = $quiz_cat_res->fetch_all();
                                        $first = true; // Variable to check if it's the first radio button
                                        foreach ($quiz_categories as $quiz_category) { ?>
                                            <div class="form-check me-3">
                                                <input type="radio" class="form-check-input" name="quiz_admin_category"
                                                    id="quiz_admin_category_<?= $quiz_category[0] ?>"
                                                    value="<?= $quiz_category[0] ?>" onchange="loadQuizData();">
                                                <label class="form-check-label"
                                                    for="quiz_admin_category_<?= $quiz_category[0] ?>">
                                                    <?= $quiz_category[1] ?>
                                                </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group col-xxl-4 co-xl-4 col-lg-4 col-sm-12">
                                        <?php
                                        $quiz_zone_qry = "SELECT * FROM quiz_zone where id != 6;";
                                        $quiz_zone_stmt = $con->prepare($quiz_zone_qry);
                                        $quiz_zone_stmt->execute();
                                        $quiz_zone_res = $quiz_zone_stmt->get_result();
                                        $quiz_zones = $quiz_zone_res->fetch_all();
                                        ?>
                                        <select class="form-control form-group" name="quiz_admin_zone"
                                            id="quiz_admin_zone" style="height:35px;" require="required"
                                            onchange="loadQuizData();">
                                            <option value="0">*Select Zone</option>
                                            <?php foreach ($quiz_zones as $quiz_zone) { ?>
                                                <option value="<?= $quiz_zone[0] ?>">
                                                    <?= $quiz_zone[2] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width:150vw;">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                    style="font-style:normal; font-size: 12px;">
                                    <thead class="text-center">
                                        <tr>
                                            <th data-ordering="false" rowspan="2">Sl.No</th>
                                            <th data-ordering="false" rowspan="2">Attendance</th>
                                            <th data-ordering="false" rowspan="2">Team Count</th>
                                            <th data-ordering="false" rowspan="2">Reg.No</th>
                                            <th data-ordering="false" rowspan="2">Category</th>
                                            <th data-ordering="false" rowspan="2">Zone</th>
                                            <th data-ordering="false" rowspan="2">District</th>
                                            <th data-ordering="false" rowspan="2">Institute Name</th>
                                            <th data-ordering="false" rowspan="2">Institute Address</th>
                                            <th data-ordering="false" rowspan="2">Principal Contact</th>
                                            <th data-ordering="false" rowspan="2">In-Charge Name</th>
                                            <th data-ordering="false" rowspan="2">In-Charge Contact</th>
                                            <th data-ordering="false" colspan="5">Team1 Member1 Details</th>
                                            <th data-ordering="false" colspan="5">Team1 Member2 Details</th>
                                            <th data-ordering="false" colspan="5">Team2 Member1 Details</th>
                                            <th data-ordering="false" colspan="5">Team2 Member2 Details</th>
                                            <th data-ordering="false" rowspan="2">Date Registered</th>
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
                                    <tbody id="quiz-data-list">
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

    function loadQuizData() {
        var admin_zone = document.getElementById("quiz_admin_zone").value;
        var admin_category = document.querySelector('input[name="quiz_admin_category"]:checked').value;
        $.ajax({
            dataType: "json",
            url: "list_quiz_details.php",
            type: "POST",
            data: {
                zone_id: admin_zone,
                category_id: admin_category,
            },
            dataType: "json",
            success: function (data) {
                $('#quiz-data-list').empty();
                $('#quiz-data-list').append(data);
            }
        });
    }

    function saveQuizAttendance(quizId) {
        var attendance = $('#quiz_prsnt' + quizId + ':checked').val();
        $.ajax({
            dataType: "json",
            url: "save_quiz_attendance.php",
            type: "POST",
            data: {
                quiz_id: quizId,
                quiz_atndnc: attendance
            },
            dataType: "json",
            success: function (data) {
                if(!data) {
                    swal("Unable to mark attendance");
                    document.getElementById("quiz_prsnt" + quizId).checked = false;
                }
            }
        });
    }
</script>