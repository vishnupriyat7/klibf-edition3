<?php
ini_set('display_errors', '1');
include "../header.php";
include "sidebar.php";


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
                        <h4 class="mb-sm-0">Coupon Denomination</h4>
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

            <br><br>
            <div class="row">

                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">

                        <div class="card-body p-4">
                            <?php
                            $status = "OK";
                            $msg = "";
                            $newFileName = ""; // Initialize to avoid undefined variable error
                            $query = ""; // Initialize to avoid undefined variable error
                            $errormsg = ""; // Initialize to avoid undefined variable error


                            if (isset($_POST['save_cpn_denom'])) {
                                // var_dump("jkbkjb");die;
                                $coupon_denom =
                                    mysqli_real_escape_string($con, $_POST['cpn_denom']);

                                $current_date = new DateTime();
                                $date = date_format($current_date, "Y-m-d");


                                $select_cpn_denom = "SELECT * FROM coupon_denomination where denomination = '$coupon_denom'";
                                $result = mysqli_query($con, $select_cpn_denom);

                                if (mysqli_num_rows($result) > 0) {
                                    // Duplicate entry found
                                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                                    Duplicate entry found. The record already exists.
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                 </div>";
                                } else {

                                    $query = "INSERT INTO coupon_denomination (denomination, updated_date) VALUES ('$coupon_denom', '$date')";
                                    // var_dump($query);
                                    // die;
                                }
                                if (!empty($query)) {
                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your Image is Successfully Uploaded.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>";
                                    }
                                }
                            }

                            ?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row bg-grey">
                                            <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xxl-6"><br>
                                                <label><b>Coupon Denomination Details</b></label>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xxl-6">
                                                    <br>
                                                    *Enter Coupon Denomination
                                                </div>
                                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xxl-6">
                                                    <br>
                                                    <input type="number" class="form-control" name="cpn_denom" id="cpn_denom" placeholder="Coupon Denomination" required="required">
                                                </div>
                                            </div>
                                            <div></div>
                                            <br>

                                            <hr>

                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xxl-6">
                                                <br>
                                                <button type="submit" name="save_cpn_denom" class="btn btn-primary" id="save_cpn_denom">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <iframe id="print-frame" style="display: none;"></iframe>
    <!-- End Page-content -->

    <?php include "../footer.php"; ?>