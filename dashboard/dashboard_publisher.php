<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Dashboard</li> -->
                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>

                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->




<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Hai, <?php print $user['name']; ?>!</h4>
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
                                <?php
                                    $sql ="SELECT stalls_3x3, stalls_3x2 FROM users_profile WHERE user_id='{$user['id']}'";
                                     $result = mysqli_query($con, $sql);
                                     $stall = mysqli_fetch_assoc($result);
                                    //  var_dump($stall);
                                    // $row = mysqli_fetch_row($result);
                                    // $numrows = $row[0];

                                    ?>

                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Stalls Approved</p>
                                    <h4 class=" mb-0">0</h4>
                                    <!-- <h4 class=" mb-0"><span class="counter-value" data-target="<?php print 0; ?>"></span></h4> -->
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
                                    <!-- <?php
                                    // $sql
                                    //  $result = mysqli_query($conn, $sql);
                                    // $result = mysqli_query($con, "SELECT stalls_3x3, stalls_3x2 FROM users_profile WHERE user_id='{$user['id']}'");
                                    // $row = mysqli_fetch_row($result);
                                    // $numrows = $row[0];

                                    ?> -->

                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Stalls Booked</p>
                                    <!-- <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $numrows; ?>"></span></h4> -->
                                    <h4 class=" mb-0">3X3: <?php print $stall['stalls_3x3']; ?>&emsp;3X2: <?php print $stall['stalls_3x2']; ?></h4>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->









            </div>

        </div> <!-- end .h-100-->

    </div> <!-- end col -->


</div>