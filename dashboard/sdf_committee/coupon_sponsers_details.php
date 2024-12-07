<?php
ini_set('display_errors', '0');
include "../header.php";
include "sidebar.php";
$user_id = $user['id'];
function convertNumberToWordsForIndia($number)
{
    //A function to convert numbers into Indian readable words with Cores, Lakhs and Thousands.
    $words = array(
        '0' => '',
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
        '4' => 'four',
        '5' => 'five',
        '6' => 'six',
        '7' => 'seven',
        '8' => 'eight',
        '9' => 'nine',
        '10' => 'ten',
        '11' => 'eleven',
        '12' => 'twelve',
        '13' => 'thirteen',
        '14' => 'fouteen',
        '15' => 'fifteen',
        '16' => 'sixteen',
        '17' => 'seventeen',
        '18' => 'eighteen',
        '19' => 'nineteen',
        '20' => 'twenty',
        '30' => 'thirty',
        '40' => 'fourty',
        '50' => 'fifty',
        '60' => 'sixty',
        '70' => 'seventy',
        '80' => 'eighty',
        '90' => 'ninty'
    );

    //First find the length of the number
    $number_length = strlen($number);
    //Initialize an empty array
    $number_array = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
    $received_number_array = array();

    //Store all received numbers into an array
    for ($i = 0; $i < $number_length; $i++) {
        $received_number_array[$i] = substr($number, $i, 1);
    }

    //Populate the empty array with the numbers received - most critical operation
    for ($i = 9 - $number_length, $j = 0; $i < 9; $i++, $j++) {
        $number_array[$i] = $received_number_array[$j];
    }

    $number_to_words_string = "";
    //Finding out whether it is teen ? and then multiply by 10, example 17 is seventeen, so if 1 is preceeded with 7 multiply 1 by 10 and add 7 to it.
    for ($i = 0, $j = 1; $i < 9; $i++, $j++) {
        //"01,23,45,6,78"
        //"00,10,06,7,42"
        //"00,01,90,0,00"
        if ($i == 0 || $i == 2 || $i == 4 || $i == 7) {
            if ($number_array[$j] == 0 || $number_array[$i] == "1") {
                $number_array[$j] = intval($number_array[$i]) * 10 + $number_array[$j];
                $number_array[$i] = 0;
            }
        }
    }

    $value = "";
    for ($i = 0; $i < 9; $i++) {
        if ($i == 0 || $i == 2 || $i == 4 || $i == 7) {
            $value = $number_array[$i] * 10;
        } else {
            $value = $number_array[$i];
        }
        if ($value != 0) {
            $number_to_words_string .= $words["$value"] . " ";
        }
        if ($i == 1 && $value != 0) {
            $number_to_words_string .= "Crores ";
        }
        if ($i == 3 && $value != 0) {
            $number_to_words_string .= "Lakhs ";
        }
        if ($i == 5 && $value != 0) {
            $number_to_words_string .= "Thousand ";
        }
        if ($i == 6 && $value != 0) {
            $number_to_words_string .= "Hundred ";
        }
    }
    if ($number_length > 9) {
        $number_to_words_string = "Sorry This does not support more than 99 Crores";
    }
    return ucwords(strtolower("Rupees " . $number_to_words_string) . " Only.");
}
function generateInvoice($invoiceNo)
{
    // $alphaCode = array(
    //     "1" => "A",
    //     "2" => "B",
    //     "3" => "C",
    //     "4" => "D",
    //     "5" => "E",
    //     "6" => "F",
    //     "7" => "G",
    //     "8" => "H",
    //     "9" => "I",
    //     "0" => "J"
    // );
    // $currentDate = new DateTime();
    // $year = $currentDate->format("y");
    // $arr1 = str_split($year);
    // $generatedNo = $alphaCode[$arr1[0]] . $alphaCode[$arr1[1]] . $invoiceNo;
    // return $generatedNo;
    if (strlen((string) $invoiceNo) == 1) {
        $generatedNo = 'KLIBF III-01-2025-000' . (string) $invoiceNo;
    } else if (strlen((string) $invoiceNo) == 2) {
        $generatedNo = 'KLIBF III-01-2025-00' . (string) $invoiceNo;
    } else {
        $generatedNo = 'KLIBF III-01-2025-0' . (string) $invoiceNo;
    }
    return $generatedNo;
}
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
                        <h4 class="mb-sm-0">Coupon Sponser</h4>
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
                            if ($total_amt != $paid_amt) {
                                $msg = 'Transaction amount mismatch. Please enter total amount.';
                                $status = "NOTOK";
                            }
                            if ($trnctn_type == '0') {
                                $msg = 'Please select mode of transaction.';
                                $status = "NOTOK";
                            }

                            if ($status == "NOTOK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                    $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                            } else {
                                $query = "INSERT INTO challan (user_id, bank_name, paid_amt, trnctn_no, trnctn_type, trnctn_date, challan_img, status, updated_date, paye_name, ifsc) VALUES ('$user_id', '$bank_name', '$paid_amt', '$trnctn_no', '$trnctn_type', '$trnctn_dt', '$newFileName', 'E', '$date',  '$payee', '$ifsc');";
                            }
                            $result = mysqli_query($con, $query);
                            if ($result) {
                                $errormsg = "
                          <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                            Your payment details is Successfully Saved.
                                            <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                            </div>
                           ";

                            } else {
                                $errormsg = "
                                <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                           Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help test.
                                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                           </div>";
                            }
                            $denominations = $_POST['spnsr_cpn_deno'];
                            $serials_from = $_POST['spnsr_cpn_slno_frm'];
                            $serials_to = $_POST['spnsr_cpn_slno_to'];
                            $amounts = $_POST['spnsr_cpn_deno_amt'];
                            // Loop through and insert into the database
                            for ($i = 0; $i < count($denominations); $i++) {
                                $denomination_id = mysqli_real_escape_string($con, $denominations[$i]);
                                $serial_no_from = mysqli_real_escape_string($con, $serials_from[$i]);
                                $serial_no_to = mysqli_real_escape_string($con, $serials_to[$i]);
                                var_dump($serial_no_from);
                                var_dump($serial_no_to);
                                // $amount = mysqli_real_escape_string($con, $amounts[$i]);
                            }
                            $errormsg = "";
                            if ($status == "NOTOK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                    $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                            } else {


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
                                                <label><b>Sponser's Bank Details</b></label>
                                            </div>
                                            <div class="form-group col-12 col-md-9">
                                                *Organisation name
                                                <input type="text" class="form-control" name="spnsr_org_name"
                                                    placeholder="Organisation Name" id="spnsr_org_name" value="">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                *Total Sponsership Amount (in ₹)
                                                <input type="text" class="form-control" name="spnsr_tot_amt"
                                                    id="spnsr_tot_amt" placeholder="*Total Sponsership Amount (in  ₹)"
                                                    required="required"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    <?= $edit; ?> value="<?= $total_amt; ?>">
                                                <!-- <input type="text" class="form-control" name="spnsr_tot_amt"
                                                    placeholder="Total Sponsership Amount" id="spnsr_tot_amt" value=""> -->
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <?php
                                                $payModeQry = "SELECT * FROM payment_mode";
                                                $paymentModes = mysqli_query($con, $payModeQry);
                                                $counter = 0;
                                                ?>
                                                <br>*Mode of Payment
                                                <select class="form-control form-group" name="spnsr_trnctn_type"
                                                    id="spnsr_trnctn_type" required="required" style="height:37px;"
                                                    onchange="spnsrPaymentMode()">
                                                    <option value="" <?= $select0; ?>>Select</option>
                                                    <?php while ($paymentMode = mysqli_fetch_array($paymentModes)) { ?>
                                                        <option value="<?= $paymentMode['id']; ?>" <?= $selectd; ?>>
                                                            <?= $paymentMode['payment_type']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-9" id="spnsr_pay_other_div" hidden>
                                                <br>Others Description
                                                <input type="text" class="form-control" name="spnsr_pay_other"
                                                    placeholder="Description" id="spnsr_pay_other" value="">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <br>
                                                Transaction No
                                                <input type="text" class="form-control" name="spnsr_trnctn_no"
                                                    id="spnsr_trnctn_no" placeholder="*Transaction No"
                                                    value="<?= $trnctn_no; ?>" <?= $edit; ?> required>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <br>
                                                Bank Reference No
                                                <input type="text" class="form-control" name="spnsr_bnk_ref_no"
                                                    id="spnsr_bnk_ref_no" placeholder="Bank Reference No"
                                                    value="<?= $ifsc; ?>" <?= $edit; ?>>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <br>
                                                *Transaction Date
                                                <input type="date" class="form-control" name="spnsr_trnctn_dt"
                                                    id="spnsr_trnctn_dt" placeholder="*Transaction Date"
                                                    required="required" value="<?= $trnctn_dt; ?>" <?= $edit; ?>>
                                            </div>
                                        </div><br>
                                        <!-- <div class="col-lg-12">
                                            <button type="submit" name="save_spnsr_bnk" class="btn btn-primary"
                                                id="save_spnsr_bnk">Save Sponser</button>
                                        </div>
                                    </form><br> -->
                                        <hr><br>
                                        <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                                        <!-- <div class="row bg-grey"> -->
                                        <div class="form-group col-12">
                                            <label><b>Sponser's Coupon Details</b></label>
                                        </div>
                                        <div id="dynamic-form-container">
                                            <div class="row dynamic-form">
                                                <div class="form-group col-12 col-md-3">
                                                    <?php
                                                    $denominationQry = "SELECT * FROM coupon_denomination";
                                                    $denominations = mysqli_query($con, $denominationQry);
                                                    $counter = 0;
                                                    ?>
                                                    *Coupon Denomination
                                                    <select class="form-control form-group" name="spnsr_cpn_deno[]"
                                                        id="spnsr_cpn_deno" required="required" style="height:37px;">
                                                        <option value="">Select Denomination</option>
                                                        <?php while ($denomination = mysqli_fetch_array($denominations)) { ?>
                                                            <option value="<?= $denomination['id']; ?>">
                                                                <?= $denomination['denomination']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-12 col-md-3">
                                                    Serial No. From
                                                    <input type="text" class="form-control" name="spnsr_cpn_slno_frm[]"
                                                        placeholder="Coupon Serial No. From" id="spnsr_cpn_slno_frm"
                                                        value="0">
                                                </div>
                                                <div class="form-group col-12 col-md-3">
                                                    Serial No. To
                                                    <input type="text" class="form-control" name="spnsr_cpn_slno_to[]"
                                                        placeholder="Coupon Serial No. To" id="spnsr_cpn_slno_to"
                                                        value="0">
                                                </div>
                                                <div class="form-group col-12 col-md-3">
                                                    Amount
                                                    <input type="text" class="form-control" name="spnsr_cpn_deno_amt[]"
                                                        placeholder="Coupon Serial No. To" id="spnsr_cpn_deno_amt"
                                                        value="0"><br>
                                                </div>
                                            </div>
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

        document.getElementById("add_cpn_row_btn").addEventListener("click", function () {
            // Select the first dynamic form block
            const original = document.querySelector(".dynamic-form");

            // Clone the original block
            const clone = original.cloneNode(true);

            // Reset input values in the cloned block
            const inputs = clone.querySelectorAll("input");
            inputs.forEach(input => input.value = "0");

            const selects = clone.querySelectorAll("select");
            selects.forEach(select => select.selectedIndex = 0);

            // Append the cloned block to the container
            document.getElementById("dynamic-form-container").appendChild(clone);
        });

    </script>