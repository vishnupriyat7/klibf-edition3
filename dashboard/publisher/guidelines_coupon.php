<style>
    .card {
        max-width: 100%;
    }
</style>

<?php
include "../header.php";
include "sidebar.php";
$user_id = $user['id'];
?>

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
                        <h4 class="mb-sm-0">Guidelines for Coupon Entry</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li> -->
                                <!-- <li class="breadcrumb-item active">Add</li> -->
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
                <div class="col-xxl-12 mt-0">
                    <!-- Terms-Condition Start-->
                    <div class="card">
                    <iframe src="<?= $base_url ?>/dashboard/publisher/Book coupon guidelines 3.0.pdf" height="800"></iframe>
                       
                    </div>
                </div>
                <!-- Terms-Condition End-->
            </div>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "../footer.php"; ?>