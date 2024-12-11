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
$total_quiz_qry = "SELECT count(id) FROM reg_quiz;";
$total_quiz_stmt = $con->prepare($total_quiz_qry);
$total_quiz_stmt->execute();
$total_quiz_res = $total_quiz_stmt->get_result();
$tot_quiz_reg_count = $total_quiz_res->fetch_assoc();

$total_quiz_school_qry = "SELECT count(id) FROM reg_quiz where category_id = 1;";
$total_quiz_school_stmt = $con->prepare($total_quiz_school_qry);
$total_quiz_school_stmt->execute();
$total_quiz_school_res = $total_quiz_school_stmt->get_result();
$tot_quiz_school_count = $total_quiz_school_res->fetch_assoc();

$total_quiz_college_qry = "SELECT count(id) FROM reg_quiz where category_id = 2;";
$total_quiz_college_stmt = $con->prepare($total_quiz_college_qry);
$total_quiz_college_stmt->execute();
$total_quiz_college_res = $total_quiz_college_stmt->get_result();
$total_quiz_college_count = $total_quiz_college_res->fetch_assoc();

$total_quiz_public_qry = "SELECT count(id) FROM reg_quiz where category_id = 3;";
$total_quiz_public_stmt = $con->prepare($total_quiz_public_qry);
$total_quiz_public_stmt->execute();
$total_quiz_public_res = $total_quiz_public_stmt->get_result();
$total_quiz_public_count = $total_quiz_public_res->fetch_assoc();
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
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of
                                    Sponser's</p>
                                    <!-- <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $tot_quiz_reg_count['count(id)']; ?>"></span></h4> -->
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <!-- <div class="col-lg-4 col-md-6">
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
                                            data-target="<?= $tot_quiz_school_count['count(id)']; ?>"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-6">
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
                                            data-target="<?= $total_quiz_college_count['count(id)']; ?>"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                        <i class="ri-git-merge-fill"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Public
                                        Registered</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_quiz_public_count['count(id)']; ?>"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div> <!-- end .h-100-->
    </div> <!-- end col -->
</div>