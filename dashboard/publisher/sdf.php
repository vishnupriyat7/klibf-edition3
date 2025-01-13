<?php
// var_dump("hiii");
ini_set('display_errors', '1');
include "../header.php";
include "sidebar.php";
$user_id = $user['id'];

?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                        <h4 class="mb-sm-0">SDF</h4>
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

                        if (isset($_POST['save_sdf'])) {
                            $invc_no = mysqli_real_escape_string($con, $_POST['invc_no']);
                            $invc_dt = mysqli_real_escape_string($con, $_POST['invc_dt']);
                            $mla = mysqli_real_escape_string($con, $_POST['mla']);
                            $tot_amt = mysqli_real_escape_string($con, $_POST['tot_amt']);
                            $inst_name = mysqli_real_escape_string($con, $_POST['inst_name']);
                            $inst_cntct_no = mysqli_real_escape_string($con, $_POST['inst_cntct_no']);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d");
                            $errormsg = "";
                            $status = "";
                            // Check if invoice number already exists
                            $check_invc_query = "SELECT * FROM sdf WHERE invc_no = ?";
                            $stmt = $con->prepare($check_invc_query);
                            $stmt->bind_param("s", $invc_no);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                $status = "NOTOK";
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                                Invoice number already exists. Please use a different number.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($status != "NOTOK") {
                                $query_pub_sdf = "INSERT INTO sdf (user_id, invc_no, invc_date, mla_id, amount, updated_date, inst_name, inst_cntct_no) 
                                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

                                $stmt = $con->prepare($query_pub_sdf);
                                $stmt->bind_param("ssssssss", $user_id, $invc_no, $invc_dt, $mla, $tot_amt, $date, $inst_name, $inst_cntct_no);
                                if ($stmt->execute()) {
                                    $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                            SDF details saved successfully!
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                          </div>";
                                } else {
                                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                            Error saving SDF details. Please try again.
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                          </div>";
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
                                                <label>
                                                    <b>SDF Details</b>
                                                </label><br><br>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                    <label for="">Invoice Number</label>
                                                    <input type="text" class="form-control" name="invc_no" id="invc_no"
                                                        placeholder="Invoice Number" required="required">
                                                </div>
                                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                    <label for=""> Invoice Date</label>
                                                    <input type="date" class="form-control" name="invc_dt" id="invc_dt"
                                                        placeholder="*Invoice Date" required="required">
                                                </div>
                                                <div class="form-group col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                                    <br>
                                                    <label for="">Institution Name</label>
                                                    <input type="text" class="form-control" name="inst_name"
                                                        id="inst_name" placeholder="Institution Name">
                                                </div>
                                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                    <br>
                                                    <label for="">Contact No.</label>
                                                    <input type="text" class="form-control" name="inst_cntct_no"
                                                        id="inst_cntct_no" placeholder="Contact No.">
                                                </div>
                                                <?php
                                                $mla_query = "SELECT * FROM mla_15";
                                                $mla_stmt = $con->prepare($mla_query);
                                                $mla_stmt->execute();
                                                $mla_result = $mla_stmt->get_result();
                                                $mlas = $mla_result->fetch_all();
                                                ?>
                                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                    <br>
                                                    <label>MLA</label>
                                                    <select class="form-control form-group " name="mla" id="mla"
                                                        style="height:45px;" required>
                                                        <option value="">Select MLA</option>
                                                        <?php
                                                        foreach ($mlas as $mla) {
                                                            ?>
                                                            <option value="<?= $mla[0] ?>"><?= $mla[1]; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                    <br>
                                                    <label for="">Amount (in ₹)</label>
                                                    <input type="text" class="form-control" name="tot_amt" id="tot_amt"
                                                        placeholder="Total Invoice Amount" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-12"><br>
                                                <button type="submit" name="save_sdf" class="btn btn-success"
                                                    id="save_sdf">Save SDF</button>
                                            </div>
                                    </form>

                                </div>
                            </div>
                        </div>


                        <!-- Display Last 10 Entries -->
                        <hr>
                        <div class="card p-1" style="width:60vw;">
                            <h3 class="mt-4 text-center">SDF Entries</h3>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <!--  -->
                                    <!-- <table class="table table-bordered"> -->
                                    <!-- <thead> -->
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Invoice Number</th>
                                        <th>Invoice Date</th>
                                        <th>MLA</th>
                                        <th>Institution</th>
                                        <th>Amount (in ₹)</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $last_entries_query = "SELECT invc_no, invc_date, mla_id, amount, updated_date FROM sdf ORDER BY updated_date DESC";
                                    $last_entries_query = "SELECT s.*, mla.* FROM sdf s JOIN mla_15 mla ON s.mla_id = mla.id WHERE user_id=$user_id ORDER BY updated_date DESC LIMIT 5";
                                    $result = mysqli_query($con, $last_entries_query);

                                    if (mysqli_num_rows($result)) {

                                        $slno = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <tr class="text-center">
                                                <td><?php echo $slno; ?></td>
                                                <td><?php echo $row['invc_no']; ?></td>
                                                <td><?php echo $row['invc_date']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['inst_name']; ?></td>
                                                <td>₹ <?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['updated_date']; ?></td>
                                            </tr>
                                            <?php
                                            $slno++;
                                        }
                                    } else { ?>

                                        <tr>
                                            <td colspan="7" class="text-center">No SDF Entries present, please Save details.</td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <iframe id="print-frame" style="display: none;"></iframe>
    <!-- End Page-content -->
</div>

<?php include "../footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function () {
        $('#mla').select2({
            placeholder: 'Select MLA',
            allowClear: true
        });
    });
</script>