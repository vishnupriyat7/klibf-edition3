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
                                <a class="dropdown-item" href="logout.php"><i
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
                        if (isset($_POST['save_pub_cpn'])) {
                            $pub_cpn_invc_no = mysqli_real_escape_string($con, $_POST['pub_cpn_invc_no']);
                            $pub_cpn_invc_dt = mysqli_real_escape_string($con, $_POST['pub_cpn_invc_dt']);
                            $pub_cpn_invc_tot_amt = mysqli_real_escape_string($con, $_POST['pub_cpn_invc_tot_amt']);
                            $pub_cpn_invc_cpn_amt = mysqli_real_escape_string($con, $_POST['pub_cpn_invc_cpn_amt']);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d H:i:s");
                            $errormsg = "";
                            $con->begin_transaction();
                            try {
                                $query_pub_invoice = "INSERT INTO coupon_publisher_invoice (user_id, invoice_no, invoice_dt, tot_inv_amt, tot_cpn_amt, updated_date) VALUES ('$user_id', '$pub_cpn_invc_no', '$pub_cpn_invc_dt', '$pub_cpn_invc_tot_amt', '$pub_cpn_invc_cpn_amt', '$date');";
                                $result_pub_invoice = mysqli_query($con, $query_pub_invoice);
                                if ($result_pub_invoice) {
                                    // $last_id = mysqli_insert_id($con);
                                    $pub_cpn_slnos = $_POST['pub_cpn_slno'];
                                    $tot_deno_amt = 0;
                                    // Loop through and insert into the database
                                    for ($i = 0; $i < count($pub_cpn_slnos); $i++) {
                                        $pub_cpn_slno = mysqli_real_escape_string($con, $pub_cpn_slnos[$i]);
                                        $slno_range = explode("-", $pub_cpn_slno);
                                        $slnoFrom = (int) trim($slno_range[0]);
                                        if (count($slno_range) > 1) {
                                            $slnoTo = (int) trim($slno_range[1]);
                                            for ($j = $slnoFrom; $j <= $slnoTo; $j++) {
                                                $query_pub_cpn_slno = "INSERT INTO coupon_publisher_serialno (cpn_pub_inv, cpn_slno, updated_date) VALUES ((SELECT id FROM coupon_publisher_invoice WHERE invoice_no = $pub_cpn_invc_no AND user_id = $user_id), (SELECT id FROM coupon_distribution WHERE serial_no = $j), '2024-12-31');";
                                                $result_pub_cpn_slno = mysqli_query($con, $query_pub_cpn_slno);
                                                if (!$result_pub_cpn_slno) {
                                                    $status = "NOTOK";
                                                    $msg = "Query Failed. Coupon data not able to save.";
                                                    throw new Exception("Query Failed. Coupon data not able to save." . $con->error);
                                                }
                                            }
                                        } else {
                                            $query_pub_cpn_slno = "INSERT INTO coupon_publisher_serialno (cpn_pub_inv, cpn_slno, updated_date) VALUES ((SELECT id FROM coupon_publisher_invoice WHERE invoice_no = $pub_cpn_invc_no AND user_id = $user_id), (SELECT id FROM coupon_distribution WHERE serial_no = $slnoFrom), '2024-12-31');";
                                            $result_pub_cpn_slno = mysqli_query($con, $query_pub_cpn_slno);
                                            if (!$result_pub_cpn_slno) {
                                                $status = "NOTOK";
                                                $msg = "Query Failed. Coupon data not able to save.";
                                                throw new Exception("Query Failed. Coupon data not able to save." . $con->error);
                                            }
                                        }

                                    }
                                    // if ($tot_deno_amt != (int) $spnsr_tot_amt) {
                                    //     $status = "NOTOK";
                                    //     $msg = "Missmatch in total amount and denomination total. Please verify.";
                                    //     throw new Exception("Missmatch in total amount and denomination total. Please verify." . $con->error);
                                    // }
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
                                        <div class="row bg-grey">
                                            <div class="form-group col-12">
                                                <label>
                                                    <b>Invoice Details</b>
                                                </label><br><br>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12 col-md-2">
                                                    Bill Number
                                                    <input type="text" class="form-control" name="pub_cpn_invc_no"
                                                        id="pub_cpn_invc_no" placeholder="Bill Number"
                                                        required="required">
                                                </div>
                                                <div class="form-group col-12 col-md-2">
                                                    Bill Date
                                                    <input type="date" class="form-control" name="pub_cpn_invc_dt"
                                                        id="pub_cpn_invc_dt" placeholder="*Bill Date"
                                                        required="required">
                                                </div>
                                                <div class="form-group col-12 col-md-3">
                                                    Total Bill Amount (in ₹)
                                                    <input type="text" class="form-control" name="pub_cpn_invc_tot_amt"
                                                        id="pub_cpn_invc_tot_amt" placeholder="Total Invoice Amount"
                                                        required="required">
                                                </div>
                                                <div class="form-group col-12 col-md-3">
                                                    Total Coupon Amount (in ₹)
                                                    <input type="text" class="form-control" name="pub_cpn_invc_cpn_amt"
                                                        id="pub_cpn_invc_cpn_amt" placeholder="Total Cupon Amount"
                                                        required="required"><br>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group col-12">
                                                <br><label>
                                                    <b>Coupon Details</b>
                                                </label><br><br>
                                            </div>
                                            <div id="dynamic-form-container">
                                                <div class="row dynamic-form">
                                                    <div class="form-group col-12 col-md-2">
                                                        Serial No.
                                                        <input type="text" class="form-control pub_cpn_slno"
                                                            name="pub_cpn_slno[]" id="pub_cpn_slno"
                                                            placeholder="Enter Serial No." required="required">
                                                        <small><label>For range: eg. (10-18)</label></small>
                                                    </div>

                                                    <!-- <div class="form-group col-12 col-md-2">
                                                        Serial No. To
                                                        <input type="text" class="form-control pub_cpn_slno"
                                                            name="pub_cpn_slno_to[]" id="pub_cpn_slno_to"
                                                            placeholder="Enter Serial No. To" required="required">
                                                    </div> -->
                                                    <div class="form-group col-12 col-md-2">
                                                        Denomination
                                                        <input type="text" class="form-control pub_cpn_deno"
                                                            name="pub_cpn_deno[]" id="pub_cpn_deno" disabled>
                                                    </div>
                                                    <div class="form-group col-12 col-md-2">
                                                        Total
                                                        <input type="text" class="form-control pub_cpn_deno"
                                                            name="pub_cpn_deno_total[]" id="pub_cpn_deno_total"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="button" id="add_pub_cpn_row_btn" class="btn btn-info"
                                                    disabled>Add
                                                    More</button>
                                            </div>
                                            <div class="col-12 mt-4 col-md-2">
                                                <h5>Grand Total:</h5>
                                            </div>
                                            <div class="col-12 mt-4 col-md-2">
                                                <input type="text" class="form-control" name="total-denomination"
                                                    id="total-denomination" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12"><br>
                                            <button type="submit" name="save_pub_cpn" class="btn btn-success"
                                                id="save_pub_cpn" disabled>Save Coupon</button>
                                        </div>
                                    </form>
                                    <!-- <hr class="mt-3">
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
                                    </div> -->
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

<script type="text/javascript">

    document.getElementById("add_pub_cpn_row_btn").addEventListener("click", function () {
        const container = document.getElementById("dynamic-form-container");
        const firstRow = container.querySelector(".dynamic-form");
        const newRow = firstRow.cloneNode(true);

        // Clear input values in the new row
        newRow.querySelectorAll("input").forEach(input => {
            input.value = "";
            if (input.disabled) input.disabled = true; // Keep Denomination field disabled
        });
        let dismissButton = newRow.querySelector(".dismiss-row-btn");
        if (!dismissButton) {
            dismissButton = document.createElement("button");
            dismissButton.type = "button";
            dismissButton.className = "btn btn-danger dismiss-row-btn";
            dismissButton.textContent = "Remove";

            // Append the button to the new row
            const brContainer = document.createElement("br");
            const buttonContainer = document.createElement("div");
            buttonContainer.className = "form-group col-12 col-md-2";
            buttonContainer.appendChild(brContainer);
            buttonContainer.appendChild(dismissButton);

            newRow.appendChild(buttonContainer);
        }
        // Append the new row
        container.appendChild(newRow);
    });

    // Delegate input event to the container for dynamic rows
    document.getElementById("dynamic-form-container").addEventListener("input", function (event) {
        if (event.target.classList.contains("pub_cpn_slno")) {
            const serialNoInput = event.target;
            const serialNo = serialNoInput.value.trim();
            const invoiceNo = document.getElementById("pub_cpn_invc_no").value;
            const denominationInput = serialNoInput.closest(".dynamic-form").querySelector(".pub_cpn_deno");
            if (serialNo) {
                // Make an AJAX request to fetch denomination
                denominationInput.value = "";
                $.ajax({
                    url: "<?= $base_url; ?>/dashboard/publisher/get_denomination.php",
                    type: "POST",
                    data: {
                        slno: encodeURIComponent(serialNo),
                        invoiceNo: invoiceNo
                    },
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response[2] != null) {
                            denominationInput.style.color = 'red';
                            denominationInput.value = 'Already exists.';
                            document.getElementById("save_pub_cpn").setAttribute("disabled", true);
                            document.getElementById("add_pub_cpn_row_btn").setAttribute("disabled", true);
                            calculateTotal();
                        } else {
                            denominationInput.style.color = '';
                            document.getElementById("save_pub_cpn").removeAttribute("disabled", true);
                            document.getElementById("add_pub_cpn_row_btn").removeAttribute("disabled", true);
                            if (response[0] != null && response[1] === null) {
                                denominationInput.value = response[0].denomination;
                                document.getElementById("save_pub_cpn").removeAttribute("disabled", true);
                                document.getElementById("add_pub_cpn_row_btn").removeAttribute("disabled", true);
                                calculateTotal();
                            } else {
                                denominationInput.style.color = 'red';
                                denominationInput.value = 'Invalid Copuon.';
                                document.getElementById("save_pub_cpn").setAttribute("disabled", true);
                                document.getElementById("add_pub_cpn_row_btn").setAttribute("disabled", true);
                                calculateTotal();
                            }
                            if (response[0] != null && response[1] != null) {
                                if (response[0].denomination === response[1].denomination) {
                                    denominationInput.style.color = '';
                                    denominationInput.value = response[0].denomination;
                                    document.getElementById("save_pub_cpn").removeAttribute("disabled", true);
                                    document.getElementById("add_pub_cpn_row_btn").removeAttribute("disabled", true);
                                    calculateTotal();
                                } else {
                                    denominationInput.style.color = 'red';
                                    denominationInput.value = 'Invalid Copuon.';
                                    document.getElementById("save_pub_cpn").setAttribute("disabled", true);
                                    document.getElementById("add_pub_cpn_row_btn").setAttribute("disabled", true);
                                    calculateTotal();
                                }
                            }

                        }

                    }
                });
            } else {
                denominationInput.value = ""; // Clear Denomination if Serial No. is empty
                calculateTotal();
            }
        }
    });

    document.getElementById("dynamic-form-container").addEventListener("click", function (event) {
        if (event.target.classList.contains("dismiss-row-btn")) {
            const row = event.target.closest(".dynamic-form");
            if (row) {
                row.remove();
                calculateTotal(); // Update total after row is removed
            }
        }
    });

    function calculateTotal() {
        let total = 0;
        // Iterate through each dynamic-form row
        document.querySelectorAll(".dynamic-form").forEach(row => {
            const slnoInput = row.querySelector(".pub_cpn_slno[name='pub_cpn_slno[]']");
            const denoInput = row.querySelector(".pub_cpn_deno[name='pub_cpn_deno[]']");
            const denoTotInput = row.querySelector(".pub_cpn_deno[name='pub_cpn_deno_total[]']");
            const slnoValue = slnoInput.value;
            const slnoRange = slnoValue.split("-");
            var slnoTo = 0;
            if (slnoRange.length > 1) {
                var slnoTo = parseInt(slnoRange[1]);
            }
            const slnoFrom = parseInt(slnoRange[0]);
            const denoValue = parseFloat(denoInput.value);
            if (slnoTo !== 0) {
                const rangeTotal = (slnoTo - slnoFrom + 1) * denoValue; // Add 1 to include the range endpoint
                denoTotInput.value = rangeTotal;
                if (rangeTotal > 0) {
                    total += rangeTotal;
                }
            } else {
                const rangeTotal = denoValue; // Add 1 to include the range endpoint
                denoTotInput.value = rangeTotal;
                if (rangeTotal > 0) {
                    total += rangeTotal;
                }
            }
        });

        // Display the total in the "total-denomination" field
        document.getElementById("total-denomination").value = total;
    }
</script>