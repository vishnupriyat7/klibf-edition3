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
                        if (isset($_POST['save_sponser'])) {
                            $spnsr_org_name = mysqli_real_escape_string($con, $_POST['spnsr_org_name']);
                            $spnsr_tot_amt = mysqli_real_escape_string($con, $_POST['spnsr_tot_amt']);
                            $spnsr_trnctn_type = mysqli_real_escape_string($con, $_POST['spnsr_trnctn_type']);
                            $spnsr_pay_other = mysqli_real_escape_string($con, $_POST['spnsr_pay_other']);
                            $spnsr_trnctn_no = mysqli_real_escape_string($con, $_POST['spnsr_trnctn_no']);
                            $spnsr_bnk_ref_no = mysqli_real_escape_string($con, $_POST['spnsr_bnk_ref_no']);
                            $spnsr_trnctn_dt = mysqli_real_escape_string($con, $_POST['spnsr_trnctn_dt']);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d H:i:s");
                            $con->begin_transaction();
                            try {
                                if ($spnsr_trnctn_type != '7') {
                                    $query_sponser = "INSERT INTO coupon_sponsers (spnsr_org_name, spnsr_amt, pay_mode_id, other_remark, trnctn_no, bnk_ref_no, trnct_dt, updated_date) VALUES ('$spnsr_org_name', '$spnsr_tot_amt', '$spnsr_trnctn_type', '$spnsr_pay_other', '$spnsr_trnctn_no', '$spnsr_bnk_ref_no', '$spnsr_trnctn_dt', '$date');";
                                } else {
                                    $query_sponser = "INSERT INTO coupon_sponsers (spnsr_org_name, spnsr_amt, pay_mode_id, other_remark, trnctn_no, bnk_ref_no, updated_date) VALUES ('$spnsr_org_name', '$spnsr_tot_amt', '$spnsr_trnctn_type', '$spnsr_pay_other', '$spnsr_trnctn_no', '$spnsr_bnk_ref_no', '$date');";
                                }
                                $result_sponser = mysqli_query($con, $query_sponser);
                                if ($result_sponser) {
                                    $last_id = mysqli_insert_id($con);
                                    $denominations = $_POST['spnsr_cpn_deno'];
                                    $serials_from = $_POST['spnsr_cpn_slno_frm'];
                                    $serials_to = $_POST['spnsr_cpn_slno_to'];
                                    $amounts = $_POST['spnsr_cpn_deno_amt'];
                                    $tot_deno_amt = 0;
                                    // Loop through and insert into the database
                                    for ($i = 0; $i < count($denominations); $i++) {
                                        $denomination_id = mysqli_real_escape_string($con, $denominations[$i]);
                                        $serial_no_from = mysqli_real_escape_string($con, $serials_from[$i]);
                                        $serial_no_to = mysqli_real_escape_string($con, $serials_to[$i]);
                                        $deno_amt = mysqli_real_escape_string($con, $amounts[$i]);
                                        $tot_deno_amt = $tot_deno_amt + (int) $deno_amt;
                                        $total_coupons = ($serial_no_to - $serial_no_from) + 1;
                                        for ($j = 0; $j < $total_coupons; $j++) {
                                            $coupon_serial_no = $serial_no_from + $j;
                                            $duplicate_serial_query = "SELECT id FROM coupon_distribution WHERE serial_no='$coupon_serial_no';";
                                            $duplicate_serial_result = mysqli_query($con, $duplicate_serial_query);
                                            if ($duplicate_serial_result->num_rows > 0) {
                                                $status = "NOTOK";
                                                $msg = "Serial Number already exists";
                                                throw new Exception("Serial Number already exists" . $con->error);
                                            } else {
                                                $query_sponser_coupon = "INSERT INTO coupon_distribution (sponser_id, denom_id, serial_no, updated_date) VALUES ('$last_id', '$denomination_id', '$coupon_serial_no', '$date');";
                                                $result_sponser_coupon = mysqli_query($con, $query_sponser_coupon);
                                                if (!$result_sponser_coupon) {
                                                    $status = "NOTOK";
                                                    $msg = "Query Failed. Coupon data not able to save.";
                                                    throw new Exception("Query Failed. Coupon data not able to save." . $con->error);
                                                }
                                            }
                                        }
                                    }
                                    if ($tot_deno_amt != (int) $spnsr_tot_amt) {
                                        $status = "NOTOK";
                                        $msg = "Missmatch in total amount and denomination total. Please verify.";
                                        throw new Exception("Missmatch in total amount and denomination total. Please verify." . $con->error);
                                    }
                                    $errormsg = "";
                                    if ($status == "NOTOK") {
                                        throw new Exception($msg . $con->error);
                                    } else {
                                        $con->commit();
                                        $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                            Your Coupon Sponser details is Successfully Saved.
                                            <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                            </div>";
                                    }
                                } else {
                                    throw new Exception("Query Failed. Sponser data not able to save." . $con->error);
                                }
                            } catch (Exception $e) {
                                $con->rollback();
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" . $e->getMessage() . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
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

                                        <!-- <div class="form-group col-12">
                                            <label>
                                                <b>Coupon Details</b>
                                            </label>
                                        </div> -->

                                        <div id="dynamic-form-container">
                                            <div class="row dynamic-form">
                                                <div class="form-group col-12 col-md-2">
                                                    <?php
                                                    $publisher_query = "SELECT DISTINCT up.user_id, up.org_name FROM users_profile up JOIN
                                                    coupon_publisher_invoice cpi ON cpi.user_id = up.user_id;";
                                                    $result_publisher = mysqli_query($con, $publisher_query);
                                                    $coupon_publishers = $result_publisher->fetch_all();
                                                    ?>
                                                    <b>Select Publisher</b>
                                                    <select class="form-control form-group col-md-6" id="coupon_pub"
                                                        style="height:37px;" onchange="getCouponList()">
                                                        <option value="">Select</option>
                                                        <?php foreach ($coupon_publishers as $publisher) { ?>
                                                            <option value="<?= $publisher[0]; ?>">
                                                                <?= $publisher[1]; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-12 col-md-2">
                                                    Serial No. From
                                                    <input type="text" class="form-control spnsr_cpn_slno_frm"
                                                        name="spnsr_cpn_slno_frm[]" placeholder="Coupon Serial No. From"
                                                        value="0">
                                                </div>
                                                <div class="form-group col-12 col-md-2">
                                                    Serial No. To
                                                    <input type="text" class="form-control spnsr_cpn_slno_to"
                                                        name="spnsr_cpn_slno_to[]" placeholder="Coupon Serial No. To"
                                                        value="0">
                                                </div>
                                                <div class="form-group col-12 col-md-2">
                                                    Amount
                                                    <input type="text" class="form-control spnsr_cpn_deno_amt"
                                                        name="spnsr_cpn_deno_amt[]" placeholder="Amount" value="0"
                                                        readonly><br>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group col-12 col-md-3">
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <option>Car</option>
                                                    <option>Bike</option>
                                                    <option>Scooter</option>
                                                    <option>Cycle</option>
                                                    <option>Horse</option>
                                                </select>
                                            </div> -->
                                        </div>



                                        <div class="col-12">
                                            <button type="button" id="add_cpn_row_btn" class="btn btn-info">Add
                                                More</button>
                                        </div>

                                        <div class="col-lg-12"><br>
                                            <button type="submit" name="save_sponser" class="btn btn-primary"
                                                id="save_sponser">Save Sponser</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
        var _URL = window.URL || window.webkitURL;
        document.addEventListener("DOMContentLoaded", function () {
            spnsrPaymentMode();
        });

        function spnsrPaymentMode() {
            var mode = $("#spnsr_trnctn_type").val();
            if (mode == 7) {
                document.getElementById("spnsr_pay_other_div").removeAttribute("hidden", "")
            } else {
                document.getElementById("spnsr_pay_other_div").setAttribute("hidden", "");
            }
        }

        // Store denomination data
        const denominationData = <?= json_encode($denominationData); ?>;

        // Function to update amount dynamically
        function updateAmount(row) {
            const dropdown = row.querySelector('.spnsr_cpn_deno');
            const serialFrom = row.querySelector('.spnsr_cpn_slno_frm');
            const serialTo = row.querySelector('.spnsr_cpn_slno_to');
            const amountField = row.querySelector('.spnsr_cpn_deno_amt');

            dropdown.addEventListener('change', () => {
                const denominationId = dropdown.value;
                const denominationValue = denominationData[denominationId] || 0;

                // Calculate amount dynamically
                const from = parseInt(serialFrom.value) || 0;
                const to = parseInt(serialTo.value) || 0;
                const count = to - from + 1;

                const totalAmount = denominationValue * count;
                amountField.value = totalAmount > 0 ? totalAmount : 0;
            });

            // Add event listeners for serial number inputs
            [serialFrom, serialTo].forEach(input => {
                input.addEventListener('input', () => {
                    const denominationId = dropdown.value;
                    const denominationValue = denominationData[denominationId] || 0;

                    const from = parseInt(serialFrom.value) || 0;
                    const to = parseInt(serialTo.value) || 0;
                    const count = to - from + 1;

                    const totalAmount = denominationValue * count;
                    amountField.value = totalAmount > 0 ? totalAmount : 0;
                });
            });
        }

        // Attach event listeners to all current rows
        document.querySelectorAll('.dynamic-form').forEach(row => updateAmount(row));

        // Add more rows dynamically
        document.getElementById('add_cpn_row_btn').addEventListener('click', () => {
            const container = document.getElementById('dynamic-form-container');
            const newRow = container.querySelector('.dynamic-form').cloneNode(true);

            // Reset input values in the new row
            newRow.querySelectorAll('input, select').forEach(field => field.value = '');
            newRow.querySelector('.spnsr_cpn_deno_amt').value = 0;

            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.type = 'button';
            removeButton.className = 'btn btn-danger dismiss-row-btn';
            removeButton.addEventListener('click', () => {
                newRow.remove();
            });

            // Create a container for the button and add the button
            const brContainer = document.createElement("br");
            const buttonContainer = document.createElement('div');
            buttonContainer.className = 'form-group col-12 col-md-2';
            buttonContainer.appendChild(brContainer);
            buttonContainer.appendChild(removeButton);

            // Append the button container to the new row
            newRow.appendChild(buttonContainer);
            container.appendChild(newRow);
            updateAmount(newRow); // Attach event listener to new row
        });
        $('.select2').select2();
    </script>