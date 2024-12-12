<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <a class="dropdown-item" href="../logout.php"><i
                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                            data-key="t-logout">Logout</span></a>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<?php

$total_count_inst_qry = "SELECT count(id) AS total_count_inst FROM queue;";
$total_count_inst_stmt = $con->prepare($total_count_inst_qry);
$total_count_inst_stmt->execute();
$total_count_inst_res = $total_count_inst_stmt->get_result();
$total_count_inst = $total_count_inst_res->fetch_assoc();



$total_virtual_qu_qry = "SELECT sum(count_tot) AS total_qu_reg_count FROM queue;";
$total_virtual_qu_stmt = $con->prepare($total_virtual_qu_qry);
$total_virtual_qu_stmt->execute();
$total_virtual_qu_res = $total_virtual_qu_stmt->get_result();
$tot_virtual_qu_count = $total_virtual_qu_res->fetch_assoc();


$total_school_qry = "SELECT COUNT(*) AS school_count FROM queue WHERE inst_type = 's';";
$total_school_stmt = $con->prepare($total_school_qry);
$total_school_stmt->execute();
$total_school_res = $total_school_stmt->get_result();
$total_school_count = $total_school_res->fetch_assoc();


$total_college_qry = "SELECT COUNT(*) AS college_count FROM queue WHERE inst_type = 'c';";
$total_college_stmt = $con->prepare($total_college_qry);
$total_college_stmt->execute();
$total_college_res = $total_college_stmt->get_result();
$total_college_count = $total_college_res->fetch_assoc();



$total_count_7_qry = "SELECT SUM(count_lp) AS count_7 FROM queue WHERE inst_type = 's';";
$total_count_7_stmt = $con->prepare($total_count_7_qry);
$total_count_7_stmt->execute();
$total_count_7_res = $total_count_7_stmt->get_result();
$total_count_7 = $total_count_7_res->fetch_assoc();


$total_count_8_qry = "SELECT SUM(count_hs) AS count_8_onwards FROM queue WHERE inst_type = 's';";
$total_count_8_stmt = $con->prepare($total_count_8_qry);
$total_count_8_stmt->execute();
$total_count_8_res = $total_count_8_stmt->get_result();
$total_count_8 = $total_count_8_res->fetch_assoc();

$total_count_college_students_qry = "SELECT sum(count_tot) AS total_college_student FROM queue WHERE inst_type = 'c';";
$total_count_college_students_stmt = $con->prepare($total_count_college_students_qry);
$total_count_college_students_stmt->execute();
$total_count_college_students_res = $total_count_college_students_stmt->get_result();
$total_count_college_students = $total_count_college_students_res->fetch_assoc();

?>


<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Hi, <?php print $user['name']; ?>!</h4>
                            <p class="text-muted mb-0">Welcome back to your dashboard.</p>
                        </div>
                        <div class="mt-3 mt-lg-0">
                            <form action="javascript:void(0);">

                            </form>
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->



            <div class="row h-100">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of Institutions </p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_count_inst['total_count_inst']; ?>"></span></h4>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Schools
                                        Registered</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_school_count['school_count']; ?>"></span></h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Colleges
                                        Registered</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_college_count['college_count']; ?>"></span></h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of Students </p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $tot_virtual_qu_count['total_qu_reg_count']; ?>"></span></h4>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->



                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of Students Upto STD 7
                                    </p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_count_7['count_7']; ?>"></span></h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of Students STD 8 Onwards
                                    </p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_count_8['count_8_onwards']; ?>"></span></h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of Students from College
                                    </p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_count_college_students['total_college_student']; ?>"></span></h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->


            </div>
        </div> <!-- end .h-100-->
    </div> <!-- end col -->
</div>