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
// $total_sponsers_qry = "SELECT count(id) FROM reg_quiz;";
// $total_quiz_stmt = $con->prepare($total_sponsers_qry);
// $total_quiz_stmt->execute();
// $total_quiz_res = $total_quiz_stmt->get_result();
// $tot_quiz_reg_count = $total_quiz_res->fetch_assoc();
$total_sponsers_qry = "SELECT count(id) AS tot_count_sponser FROM coupon_sponsers;";
$total_sponsers_stmt = $con->prepare($total_sponsers_qry);
$total_sponsers_stmt->execute();
$total_sponsers_res = $total_sponsers_stmt->get_result();
$total_sponsers_count = $total_sponsers_res->fetch_assoc();

$total_count_coupons_qry = "SELECT count(denom_id) AS tot_coupon_count FROM coupon_distribution;";
$total_count_coupons_stmt = $con->prepare($total_count_coupons_qry);
$total_count_coupons_stmt->execute();
$total_count_coupons_res = $total_count_coupons_stmt->get_result();
$total_coupons_count = $total_count_coupons_res->fetch_assoc();

$total_count_50coupons_qry = "SELECT count(denom_id) AS tot_50coupon_count FROM coupon_distribution WHERE denom_id='1'";
$total_count_50coupons_stmt = $con->prepare($total_count_50coupons_qry);
$total_count_50coupons_stmt->execute();
$total_count_50coupons_res = $total_count_50coupons_stmt->get_result();
$total_50coupons_count = $total_count_50coupons_res->fetch_assoc();

$total_count_100coupons_qry = "SELECT count(denom_id) AS tot_100coupon_count FROM coupon_distribution WHERE denom_id='2'";
$total_count_100coupons_stmt = $con->prepare($total_count_100coupons_qry);
$total_count_100coupons_stmt->execute();
$total_count_100coupons_res = $total_count_100coupons_stmt->get_result();
$total_100coupons_count = $total_count_100coupons_res->fetch_assoc();


$total_count_200coupons_qry = "SELECT count(denom_id) AS tot_200coupon_count FROM coupon_distribution WHERE denom_id='3'";
$total_count_200coupons_stmt = $con->prepare($total_count_200coupons_qry);
$total_count_200coupons_stmt->execute();
$total_count_200coupons_res = $total_count_200coupons_stmt->get_result();
$total_200coupons_count = $total_count_200coupons_res->fetch_assoc();
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
                                        Coupons</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_coupons_count['tot_coupon_count']; ?>"></span></h4>
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
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of
                                        Coupons 50</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_50coupons_count['tot_50coupon_count']; ?>"></span></h4>
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
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of
                                        Coupons 100</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_100coupons_count['tot_100coupon_count']; ?>"></span></h4>
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
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of
                                        Coupon 200</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_200coupons_count['tot_200coupon_count']; ?>"></span></h4>
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
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Number of
                                        Sponser's</p>
                                    <h4 class=" mb-0"><span class="counter-value"
                                            data-target="<?= $total_sponsers_count['tot_count_sponser']; ?>"></span></h4>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
        </div> <!-- end .h-100-->
    </div> <!-- end col -->
</div>