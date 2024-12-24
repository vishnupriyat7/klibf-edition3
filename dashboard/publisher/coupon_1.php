<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<style>
    .dynamic-form {
        display: flex;
        align-items: center;
        gap: 10px;
        /* Space between elements */
    }

    .dynamic-form select,
    .dynamic-form input {
        flex: 1;
        /* Allow inputs and selects to grow */
    }

    .remove-row-btn {
        background-color: #dc3545;
        /* Bootstrap danger color */
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 0 5px;
        font-size: 0.7rem;
        line-height: 1.2;
        cursor: pointer;
    }

    .remove-row-btn:hover {
        background-color: #c82333;
        /* Slightly darker for hover effect */
    }
</style>
<?php
// var_dump("hiii");
ini_set('display_errors', '1');
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
    $alphaCode = array(
        "1" => "A",
        "2" => "B",
        "3" => "C",
        "4" => "D",
        "5" => "E",
        "6" => "F",
        "7" => "G",
        "8" => "H",
        "9" => "I",
        "0" => "J"
    );
    $currentDate = new DateTime();
    $year = $currentDate->format("y");
    $arr1 = str_split($year);
    $generatedNo = $alphaCode[$arr1[0]] . $alphaCode[$arr1[1]] . $invoiceNo;
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
                        <h4 class="mb-sm-0">Coupon Upload</h4>
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
                        <?php
                        $status = "OK";
                        $msg = "";
                        $current_date = new DateTime();
                        $date = date_format($current_date, "Y-m-d H:i:s");
                        $select_pub_bank_query = "SELECT * FROM pub_coupon_bankdtls WHERE user_id = ?";
                        $stmt_pub_cpn_bank = $con->prepare($select_pub_bank_query);
                        $stmt_pub_cpn_bank->bind_param("s", $user_id);
                        $stmt_pub_cpn_bank->execute();
                        $res_pub_cpn_bank = $stmt_pub_cpn_bank->get_result();
                        $cpn_bank_det = $res_pub_cpn_bank->fetch_assoc();
                        $cpn_bank_name = '';
                        $cpn_bank_branch = '';
                        $cpn_acc_no = '';
                        $cpn_ifsc = '';
                        $edit_bank = '';
                        if ($cpn_bank_det) {
                            $cpn_bank_name = $cpn_bank_det['bank_name'];
                            $cpn_bank_branch = $cpn_bank_det['account_no'];
                            $cpn_acc_no = $cpn_bank_det['bank_branch'];
                            $cpn_ifsc = $cpn_bank_det['bank_ifsc'];
                            $edit_bank = "disabled";
                        }
                        if (isset($_POST['save_cpn'])) {
                            $cpn_bank_name = mysqli_real_escape_string($con, $_POST['cpn_bank_name']);
                            $cpn_bank_branch = mysqli_real_escape_string($con, $_POST['cpn_bank_branch']);
                            $cpn_acc_no = mysqli_real_escape_string($con, $_POST['cpn_acc_no']);
                            $cpn_ifsc = mysqli_real_escape_string($con, $_POST['cpn_ifsc']);
                            $count50 = mysqli_real_escape_string($con, $_POST['count50']);
                            $cpn_serial_50 = mysqli_real_escape_string($con, $_POST['cpn_serial_50']);
                            $count100 = mysqli_real_escape_string($con, $_POST['count100']);
                            $cpn_serial_100 = mysqli_real_escape_string($con, $_POST['cpn_serial_100']);
                            $count200 = mysqli_real_escape_string($con, $_POST['count200']);
                            $cpn_serial_200 = mysqli_real_escape_string($con, $_POST['cpn_serial_200']);
                            $cpn_invoice = mysqli_real_escape_string($con, $_POST['cpn_invoice']);
                            $cpn_bill_qry = "SELECT * FROM coupon_publisher WHERE cpn_bill_no = '$cpn_invoice'";
                            $cpn_bill = mysqli_query($con, $cpn_bill_qry);
                            if ($cpn_bill->num_rows > 0) {
                                $status = "NOTOK";
                                $msg = "Duplicate Invoice number. Please enetr a different one.";
                            }
                            $total_cpn_amt = ($count100 * 100) + ($count200 * 200) + ($count50 * 50);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d H:i:s");
                            $select_pub_bank_query = "SELECT * FROM pub_coupon_bankdtls WHERE users_id = ?";
                            $stmt_pub_cpn_bank = $con->prepare($select_pub_bank_query);
                            $stmt_pub_cpn_bank->bind_param("s", $user_id);
                            $stmt_pub_cpn_bank->execute();
                            $res_pub_cpn_bank = $stmt_pub_cpn_bank->get_result();
                            $cpn_bank_det = $res_pub_cpn_bank->fetch_assoc();
                            // if (!$cpn_bank_det) {
                            //     $query_cpn_pub_bank = "INSERT INTO pub_coupon_bankdtls (users_id, bank_name, account_no, bank_ifsc, bank_branch, updated_date) values ('$user_id', '$cpn_bank_name', '$cpn_acc_no', '$cpn_ifsc', '$cpn_bank_branch', '$date')";
                            //     $res_cpn_pub_bank = mysqli_query($con, $query_cpn_pub_bank);
                            //     if (!$res_cpn_pub_bank) {
                            //         $status = "NOTOK";
                            //         $msg = "Some issues in insertion of bank details.";
                            //     }
                            // }
                            $errormsg = "";
                            if ($status == "NOTOK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                    $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                            } else {
                                $query_cpn_pub = "INSERT INTO coupon_publisher (users_id, cpn_200_count, cpn_100_count, cpn_50_count, cpn_50_srlno, cpn_100_srlno, cpn_200_srlno, cpn_bill_no, total_amount, updated_date, status) values ('$user_id', '$count200', '$count100', '$count50', '$cpn_serial_50', '$cpn_serial_100', '$cpn_serial_200', '$cpn_invoice', '$total_cpn_amt', '$date', 'E')";
                                $res_cpn_pub = mysqli_query($con, $query_cpn_pub);
                                if ($res_cpn_pub) {
                                    $errormsg = "
                              <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your payment details is Successfully Saved.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>
                               ";
                                    $cpn_bank_name = $cpn_bank_det['bank_name'];
                                    $cpn_bank_branch = $cpn_bank_det['account_no'];
                                    $cpn_acc_no = $cpn_bank_det['bank_branch'];
                                    $cpn_ifsc = $cpn_bank_det['bank_ifsc'];
                                } else {
                                    $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                               Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help test.
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
                                            <div class="form-group col-12"><br>
                                                <label><b>Coupon Details</b></label>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12 col-md-2">
                                                    <br>
                                                    *Enter Invoice Number
                                                </div>
                                                <div class="form-group col-12 col-md-2">
                                                    <br>
                                                    <input type="text" class="form-control" name="cpn_invoice" id="cpn_invoice" placeholder="Invoice Number" required="required">
                                                </div>
                                            </div><br>

                                            <div id="dynamic-form-container" class="mt-5">
                                                <div class="row dynamic-form">
                                                    <div class="form-group col-12 col-md-3">
                                                        <?php

                                                        $denominationQry = "SELECT * FROM coupon_denomination";
                                                        $denominations_stmt = $con->prepare($denominationQry);
                                                        $denominations_stmt->execute();
                                                        $denominations_result = $denominations_stmt->get_result();
                                                        $denominations = $denominations_result->fetch_all();

                                                        $couponSlnos_Qry = "SELECT * FROM coupon_distribution";
                                                        $couponSlnos_stmt = $con->prepare($couponSlnos_Qry);
                                                        $couponSlnos_stmt->execute();
                                                        $couponSlnos_result =  $couponSlnos_stmt->get_result();
                                                        $couponSlnos = $couponSlnos_result->fetch_all();

                                                        $counter = 0;
                                                        ?>
                                                        *Coupon Denomination
                                                        <select class="form-control form-group" name="cpn_denom[]"
                                                            id="cpn_denom" onchange="listCouponsrlNo();" style="height:37px;" required>
                                                            <option value="">Select Denomination</option>

                                                            <?php
                                                            foreach ($denominations as  $denomination) {
                                                                $denomination_selected = $denomination[0] ==  $denomination ? 'selected' : "";
                                                            ?>
                                                                <option value="<?= $denomination[0] ?>" <?= $denomination_selected ?>>
                                                                    <?= $denomination[1] ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>

                                                    </div>
                                                    <!-- <div class="form-group col-12 col-md-3">

                                                        Serial No.

                                                        <select class="form-control form-group" name="cpn_slno[]"
                                                            id="cpn_slno" style="height:37px;" required>
                                                            <option value="">Select Serial No.</option>
                                                        </select>

                                                    </div> -->

                                                    <div class="form-group col-12 col-md-3">
                                                        Serial No.
                                                        <select class="form-control form-group" name="cpn_slno[]" id="cpn_slno" style="width: 100%;" required>
                                                            <option value="">Select or Type Serial No.</option>
                                                        </select>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="button" id="add_cpn_row_btn" class="btn btn-info">Add
                                                    More</button>
                                            </div>

                                            <hr class="mt-3">
                                            <div class="form-group col-12 col-md-6">
                                                <label>Total Coupon Value (in ₹)</label>
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <input type="text" class="form-control" name="total_claim" id="total_claim" placeholder="0" required="required" disabled>
                                                <br>
                                            </div>

                                            <div class="col-lg-12">
                                                <br>
                                                <button type="submit" name="save_cpn" class="btn btn-primary" id="save_cpn">Save</button>
                                            </div>




                                        </div>
                                    </form>
                                    <hr class="mt-3">
                                    <div class="row bg-grey">
                                        <div class="form-group col-12"><br>
                                            <label><b>Bank Details</b></label>
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <br>
                                            Bank Name
                                            <input type="text" class="form-control" name="cpn_bank_name" placeholder="Bank Name" id="cpn_bank_name" value="<?= $cpn_bank_name; ?>" <?= $edit_bank; ?>>
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <br>
                                            Branch
                                            <input type="text" class="form-control" name="cpn_bank_branch" placeholder="Branch" id="cpn_bank_branch" value="<?= $cpn_bank_branch; ?>" <?= $edit_bank; ?>>
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <br>
                                            Account No
                                            <input type="text" class="form-control" name="cpn_acc_no" id="cpn_acc_no" placeholder="Account No" value="<?= $cpn_acc_no; ?>" <?= $edit_bank; ?>>
                                        </div>
                                        <div class="form-group col-12 col-md-6" id="ifsc-div">
                                            <br>
                                            IFSC
                                            <input type="text" class="form-control" name="cpn_ifsc" id="cpn_ifsc" placeholder="IFSC" value="<?= $cpn_ifsc; ?>" maxlength="11" minlength="11" <?= $edit_bank; ?>>
                                        </div>
                                    </div>
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
</div>

<?php include "../footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script type="text/javascript">
    function claim_amount() {
        // var amt50 = 10000;
        var count50 = $("#count50").val();
        amt50 = 50 * count50;
        var count100 = $("#count100").val();
        amt100 = 100 * count100;
        var count200 = $("#count200").val();
        amt200 = 200 * count200;
        total_amt = amt50 + amt100 + amt200;
        $("#total50").val(amt50);
        $("#total100").val(amt100);
        $("#total200").val(amt200);
        $("#total_claim").val(total_amt);
    }
    document.getElementById("add_cpn_row_btn").addEventListener("click", function() {
        // Select the first dynamic form block
        const original = document.querySelector(".dynamic-form");

        // Clone the original block
        const clone = original.cloneNode(true);

        // Generate a unique identifier for the cloned block
        const uniqueIdSuffix = Date.now();

        // Reset input values in the cloned block
        const inputs = clone.querySelectorAll("input");
        inputs.forEach(input => (input.value = ""));

        const selects = clone.querySelectorAll("select");
        selects.forEach(select => {
            select.selectedIndex = 0;

            // Remove existing IDs and events to prevent duplication
            if (select.id.includes("cpn_denom")) {
                select.id = `cpn_denom_${uniqueIdSuffix}`;
                select.setAttribute("onchange", `listCouponsrlNo('${uniqueIdSuffix}')`);
            }
            if (select.id.includes("cpn_slno")) {
                select.id = `cpn_slno_${uniqueIdSuffix}`;
                select.innerHTML = '<option value="">Select or Type Serial No.</option>'; // Clear options
            }
        });

        // Remove any extra dropdowns or fields accidentally appended
        clone.querySelectorAll(".select2-container").forEach(select2Element => select2Element.remove());

        // Create a small "Remove" button to remove the row
        const removeButton = document.createElement("button");
        removeButton.type = "button";
        removeButton.className = "remove-row-btn btn btn-sm btn-danger";
        removeButton.textContent = "X";
        removeButton.style.cssText = `
        font-size: 0.7rem;
        padding: 0 5px;
        cursor: pointer;
        line-height: 1.2;
        margin-left: 10px;
    `;
        removeButton.addEventListener("click", function() {
            clone.remove();
        });

        // Add the button inline to the right of the "Coupon Serial Number" dropdown
        const serialNumberContainer = clone.querySelector("select[id*='cpn_slno']");
        if (serialNumberContainer) {
            serialNumberContainer.parentNode.appendChild(removeButton);
        }

        // Append the cloned block to the container
        document.getElementById("dynamic-form-container").appendChild(clone);

        // Reinitialize Select2 for the new select element
        $(`#cpn_slno_${uniqueIdSuffix}`).select2({
            placeholder: "Select or Type Serial No.",
            allowClear: true
        });
    });


    function listCouponsrlNo(uniqueIdSuffix) {
        const couponDenom = document.getElementById(`cpn_denom_${uniqueIdSuffix}`).value;

        // Clear the serial number dropdown if no denomination is selected
        const serialNoSelect = $(`#cpn_slno_${uniqueIdSuffix}`);
        serialNoSelect.empty();
        serialNoSelect.append('<option value="">Select or Type Serial No.</option>');

        if (!couponDenom) return; // Exit if no denomination is selected

        $.ajax({
            url: "<?= $base_url; ?>/dashboard/publisher/list_srlno.php",
            type: "POST",
            data: {
                couponDenom_id: couponDenom,
            },
            dataType: "json",
            success: function(data) {
                data.forEach(item => {
                    serialNoSelect.append(`<option value="${item[3]}">${item[3]}</option>`);
                });

                // Reinitialize Select2 for dynamic content
                serialNoSelect.select2({
                    placeholder: "Select or Type Serial No.",
                    allowClear: true
                });
            }
        });
    }

    $(document).ready(function() {
        // Initialize Select2 for the first row's serial number select box
        $('#cpn_slno').select2({
            placeholder: "Select or Type Serial No.",
            allowClear: true
        });

        // Bind onchange event to the first row's coupon denomination dropdown
        $('#cpn_denom').on('change', function() {
            const couponDenom = $(this).val();
            const serialNoSelect = $('#cpn_slno');

            // Clear the serial number dropdown if no denomination is selected
            serialNoSelect.empty();
            serialNoSelect.append('<option value="">Select or Type Serial No.</option>');

            if (!couponDenom) return; // Exit if no denomination is selected

            $.ajax({
                url: "<?= $base_url; ?>/dashboard/publisher/list_srlno.php",
                type: "POST",
                data: {
                    couponDenom_id: couponDenom,
                },
                dataType: "json",
                success: function(data) {
                    data.forEach(item => {
                        serialNoSelect.append(`<option value="${item[3]}">${item[3]}</option>`);
                    });

                    // Reinitialize Select2 for dynamic content
                    serialNoSelect.select2({
                        placeholder: "Select or Type Serial No.",
                        allowClear: true
                    });
                }
            });
        });
    });
</script>