<?php
ini_set('display_errors', '0');
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
                        <h4 class="mb-sm-0">Stall Booking</h4>
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
                        if ($user_id) {
                            $sql_profile = "SELECT id, org_name FROM users_profile WHERE user_id = ?";
                            $stmt_prof = $con->prepare($sql_profile);
                            $stmt_prof->bind_param("s", $user_id);
                            $stmt_prof->execute();
                            $res_prof = $stmt_prof->get_result();
                            // var_dump( $res_prof);
                            $user_prof = $res_prof->fetch_assoc();
                            // var_dump( $user_prof);
                            $sql1 = "SELECT * FROM stall_booking WHERE user_id = ?";
                            $stmt1 = $con->prepare($sql1);
                            $stmt1->bind_param("s", $user_id);
                            $stmt1->execute();
                            $result1 = $stmt1->get_result();
                            $user_stall = $result1->fetch_assoc();
                            $stall3x3 = $user_stall['stalls_3x3'];
                            $stall3x2 = $user_stall['stalls_3x2'];
                            $amt3x3 = 10000;
                            $tot_amt3x3 = ($stall3x3 * $amt3x3) + ($amt3x3 * $stall3x3 * 18) / 100;
                            $amt3x2 = 7500;
                            $tot_amt3x2 = ($stall3x2 * $amt3x2) + ($amt3x2 * $stall3x2 * 18) / 100;
                            $stall_status = $user_stall['status'];
                            if ($stall_status != 'S') {
                                $edit_count = '';
                            } else {
                                $edit_count = 'disabled';
                            }
                            $total_amt = $tot_amt3x3 + $tot_amt3x2;
                        } else {
                            $tot_amt3x3 = $tot_amt3x2 = $total_amt = 0;
                            $stall3x3 = 0;
                            $stall3x2 = 0;
                        }
                        if (!$user_prof) {
                            $errormsg = "
                                <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                Kindly update your profile and proceed with stall(s) booking.
                                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                           </div>";
                        } else {
                            // if (isset($_POST['submit-stall'])) {

                            //     $term =
                            //         mysqli_real_escape_string($con, $_POST['terms']);
                            //     if ($term == "on") {
                            //         if ($user_id && $user_stall) {
                            //             $query = "UPDATE stall_booking SET stalls_3x3 = '$stall3x3', stalls_3x2 = '$stall3x2', status = 'S', updated_date = '$date' WHERE user_id = '$user_id'";
                            //             // var_dump($query);die;
                            //         } else {
                            //             $query = "INSERT INTO stall_booking (stalls_3x3, stalls_3x2, status, updated_date, user_id) VALUES ('$stall3x3', '$stall3x2', 'S', '$date', '$user_id')";
                            //             // var_dump($query);die;
                            //         }
                            //         $resultSub = mysqli_query($con, $query);
                            //         // var_dump($resultSub);die;
                            //         if ($resultSub) {
                            //             $profile_sub = "UPDATE users_profile SET submitted = 1 WHERE user_id = '$user_id'";
                            //             $profSubres = mysqli_query($con, $profile_sub);
                            //             if ($profSubres) {
                            //                 $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                            //                 Your Stall Booking is Successfully Submitted. Further edit is not possible.
                            //                 <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                            //                 </div>";
                            //             } else {
                            //                 $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                            //                    Save your stall booking initially then submit.
                            //                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            //                    </div>";
                            //             }
                            //         } else {
                            //             $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                            //                    Save your stall booking initially then submit.
                            //                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            //                    </div>";
                            //         }
                            //     }
                            // }
                            if (isset($_POST['save_stall'])) {
                                $term =
                                    mysqli_real_escape_string($con, $_POST['terms']);
                                if ($term == "on") {
                                    $stall3x3 =
                                        mysqli_real_escape_string($con, $_POST['stall3x3']);
                                    $stall3x2 =
                                        mysqli_real_escape_string($con, $_POST['stall3x2']);
                                    if ($stall3x3 == "") {
                                        $stall3x3 = 0;
                                    }
                                    if ($stall3x2 == "") {
                                        $stall3x2 = 0;
                                    }
                                    $errormsg = "";
                                    if ($stall3x3 == 0 && $stall3x2 == 0) {
                                        $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                        You should select atleast one stall before submit.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>";
                                        $status = "NOTOK";
                                    }
                                    if ($status == "OK") {
                                        if ($user_id && $user_stall) {
                                            $query = "UPDATE stall_booking SET stalls_3x3 = '$stall3x3', stalls_3x2 = '$stall3x2', status = 'E', updated_date = '$date' WHERE user_id = '$user_id'";
                                        } else {
                                            $query = "INSERT INTO stall_booking (stalls_3x3, stalls_3x2, status, updated_date, user_id) VALUES ('$stall3x3', '$stall3x2', 'E', '$date', '$user_id')";
                                        }
                                        $result = mysqli_query($con, $query);
                                        if ($result) {
                                            $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your booking is Successfully Saved.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>";
                                        } else {
                                            $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                               Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help test.
                                               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>";
                                        }
                                    }
                                }
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
                                        <div class="row bg-grey">
                                            <div class="form-group col-12">
                                                <label><b>Choose your Stall</b></label>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="form-control font-weight-bold text-center"
                                                            value="Size of Stall" disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control font-weight-bold text-center"
                                                            value="Fare / Unit + 18% GST Extra (in ₹  )" disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control font-weight-bold text-center"
                                                            value="No. Required " disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control font-weight-bold text-center"
                                                            value="Total (in ₹  )" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="form-control" value="3m X 3m" disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control text-right" value="10000" id="amt3x3"
                                                            disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" class="form-control text-right"
                                                            name="stall3x3" placeholder="00" id="stall3x3"
                                                            onchange="amount();" value="<?= $stall3x3; ?>" max="5"
                                                            min="0" <?= $edit_count; ?>>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control text-right"
                                                            name="rate_amt" placeholder="00" id="rate_amt" disabled
                                                            value="<?= $tot_amt3x3; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="form-control" value="3m X 2m" disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control text-right" value="7500" id="amt3x2"
                                                            disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" class="form-control text-right"
                                                            name="stall3x2" id="stall3x2" placeholder="00"
                                                            onchange="amount();" value="<?= $stall3x2; ?>" max="5"
                                                            <?= $edit_count; ?>>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control text-right"
                                                            name="rate_amt3x2" id="rate_amt3x2" placeholder="00"
                                                            disabled value="<?= $tot_amt3x2; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">
                                                        <input class="form-control font-weight-bold text-right"
                                                            value="Total amount payable (in ₹  )." disabled>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control text-right" name="totamt"
                                                            id="totamt" placeholder="00" disabled
                                                            value="<?= $total_amt; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        <?php if ($stall_status != 'S') { ?>
                                            <div class="col-md-12">
                                                <br>
                                                <input type="checkbox" name="terms" required="required" class="text-justify"
                                                    id="terms">&emsp;I/We, <?= $user_prof['org_name'] ?>, hereby agree to
                                                abide by the <a href="stall_rules_regulation.php" target="_blank">
                                                    &nbsp;Terms & Conditions</a> of the Kerala Legislature International
                                                Book Festival 2025 3rd Edition given in the Terms and Conditions and as
                                                decided by the Kerala Legislature Secretariat from time to time.
                                                <br><br>
                                                <medium class="text-danger">**Disclaimer: Once you submitted, further
                                                    editing is not possible.</medium><br>
                                                <br>
                                            </div>
                                            <div class="col-lg-12">

                                                <button type="submit" name="save_stall" class="btn btn-primary"
                                                    id="save_stall">Save</button>
                                                <!-- </div> -->
                                                <!-- <button type="submit" class="btn btn-success" name="submit-stall"
                                                    id="submit-stall">Submit</button> -->

                                            </div>
                                        <?php } ?>

                                    </form>
                                </div>
                                <!--end tab-pane-->

                                <!--end tab-pane-->

                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "../footer.php"; ?>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
        integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        var _URL = window.URL || window.webkitURL;
        function amount() {
            var amt3x3 = 10000;
            var stall_count3x3 = $("#stall3x3").val();
            tot_amt3x3 = (stall_count3x3 * amt3x3) + (amt3x3 * stall_count3x3 * 18) / 100;
            $("#rate_amt").val(tot_amt3x3);
            var amt3x2 = 7500;
            var stall_count3x2 = $("#stall3x2").val();
            tot_amt3x2 = (stall_count3x2 * amt3x2) + (amt3x2 * stall_count3x2 * 18) / 100;
            $("#rate_amt3x2").val(tot_amt3x2);
            var total_amt = tot_amt3x3 + tot_amt3x2;
            $("#totamt").val(total_amt);
            var tot_stall = (stall_count3x3 * 1) + (stall_count3x2 * 1);
            if (stall_count3x3 > 5) {
                alert("You can't choose more than 5 stalls");
                $("#stall3x3").val("");
            }
            if (stall_count3x2 > 5) {
                alert("You can't choose more than 5 stalls");
                $("#stall3x2").val("");
            }
            if (tot_stall > 5) {
                alert("You can select only 5 stalls altogether");
                $("#stall3x3").val("");
                $("#stall3x2").val("");
                $("#rate_amt").val("");
                $("#rate_amt3x2").val("");
                $("#totamt").val("");
            }
        }

    </script>