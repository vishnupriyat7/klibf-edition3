<?php
ini_set('display_errors', '0');
include "../header.php";
include "sidebar.php";
$user_id = $user['id'];
?>
<style>
    #pay-slip td {
        text-align: right !important;
        width: 20%;
    }
</style>
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
                        <h4 class="mb-sm-0">Coupon Receipt</h4>
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
            <br><br>
            <div class="row">
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <?php
                        $status = "OK";
                        $msg = "";
                        $current_date = new DateTime();
                        $date = date_format($current_date, "Y-m-d H:i:s");
                        if (isset($_POST['save_receipt'])) {
                            $receipt_pub = mysqli_real_escape_string($con, $_POST['receipt_pub']);
                            $receipt_received_dt = mysqli_real_escape_string($con, $_POST['receipt_received_dt']);
                            $receipt_status = mysqli_real_escape_string($con, $_POST['receipt_status']);
                            $receipt_remarks = mysqli_real_escape_string($con, $_POST['receipt_remarks']);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d H:i:s");
                            $con->begin_transaction();
                            $query_publisher_receipt = "INSERT INTO coupon_publisher_receipt (user_id, received_dt, status, remarks, updated_date) VALUES ('$receipt_pub', '$receipt_received_dt', '$receipt_status', '$receipt_remarks', '$date');";
                            // var_dump($query_publisher_receipt);die;
                            $result_publisher_receipt = mysqli_query($con, $query_publisher_receipt);
                            if ($result_publisher_receipt) {
                                $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                            Your Publisher Coupon Receipt details is Successfully Saved.
                                            <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                            </div>";
                            } else {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>Something went wrong.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                       </div>";
                            }
                        }
                        ?>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div id="dynamic-form-container">
                                            <div class="row dynamic-form">
                                                <div class="form-group col-12 col-md-6">
                                                    <?php
                                                    $publisher_query = "SELECT DISTINCT up.user_id, up.org_name FROM users_profile up JOIN
                                                    coupon_publisher_invoice cpi ON cpi.user_id = up.user_id;";
                                                    $result_publisher = mysqli_query($con, $publisher_query);
                                                    $coupon_publishers = $result_publisher->fetch_all();
                                                    ?>
                                                    Select Publisher
                                                    <select class="form-control form-group col-md-6" id="receipt_pub"
                                                        style="height:37px;" onchange="getCouponList()"
                                                        name="receipt_pub">
                                                        <option value="">Select</option>
                                                        <?php foreach ($coupon_publishers as $publisher) { ?>
                                                            <option value="<?= $publisher[0]; ?>">
                                                                <?= $publisher[1]; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-12 col-md-2">
                                                    Received Date
                                                    <input type="date" class="form-control" name="receipt_received_dt"
                                                        id="receipt_received_dt" placeholder="*Received Date">
                                                </div>
                                                <div class="form-group col-12 col-md-2">
                                                    Status
                                                    <select class="form-control form-group col-md-6" id="receipt_status"
                                                        name="receipt_status" style="height:37px;"
                                                        onchange="getCouponList()">
                                                        <option value="">Select</option>
                                                        <option value="A">Accepted</option>
                                                        <option value="R">Rejected</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-12 col-md-2">
                                                    Remarks
                                                    <input type="text" class="form-control" id="receipt_remarks"
                                                        name="receipt_remarks" placeholder="Remarks"><br>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12"><br>
                                            <button type="submit" name="save_receipt" class="btn btn-primary"
                                                id="save_receipt">Save Receipt</button>
                                        </div>
                                        <!-- </div> -->
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
    <iframe id="print-invoice-frame" style="display: none;"></iframe>
    <!-- End Page-content -->

    <?php include "../footer.php"; ?>

    <script type="text/javascript"></script>