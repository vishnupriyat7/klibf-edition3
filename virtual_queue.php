<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'assets/vendor/autoload.php';
include 'config.php';
include "head-style.php"; ?>
<!DOCTYPE html>
<html lang="en">

<body>
    <!-- ======= Header ======= -->
    <?php include "header-inner.php"; ?>
    <!-- End Header -->
    <main id="queue-inner-main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Virtual Queue</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Virtual Queue</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->
        <section>
            <div class="container">
                <div class="justify-content-between align-items-center">
                    <!-- <div class="col-12 col-lg-3 col-md-2 col-sm-12"></div> -->
                    <div class="col-12 col-lg-8 col-md-12 col-sm-12 contact-info color-1 bg-hover active hover-bottom"
                        style="margin: 0 auto;">
                        <!-- Register Box -->
                        <div class="contact-box col-lg-12 col-md-12 col-sm-12 text-center">
                            <?php
                            $status = "OK";
                            $msg = "";
                            if (isset($_POST['register_queue'])) {
                                $queue_district =
                                    mysqli_real_escape_string($conn, $_POST['queue_district']);
                                $queue_inst_name =
                                    mysqli_real_escape_string($conn, $_POST['queue_inst_name']);
                                $queue_head_name =
                                    mysqli_real_escape_string($conn, $_POST['queue_head_name']);
                                $queue_head_desig =
                                    mysqli_real_escape_string($conn, $_POST['queue_head_desig']);
                                $queue_inst_email =
                                    mysqli_real_escape_string($conn, $_POST['queue_inst_email']);
                                $queue_inst_type =
                                    mysqli_real_escape_string($conn, $_POST['queue_inst_type']);
                                $queue_cntct_no1 =
                                    mysqli_real_escape_string($conn, $_POST['queue_cntct_no1']);
                                $prsn_lp_count =
                                    mysqli_real_escape_string($conn, $_POST['prsn_lp_count']);
                                $prsn_hs_count =
                                    mysqli_real_escape_string($conn, $_POST['prsn_hs_count']);
                                $queue_prsn_count =
                                    mysqli_real_escape_string($conn, $_POST['queue_prsn_count']);
                                $date_select =
                                    mysqli_real_escape_string($conn, $_POST['date_select']);
                                $slot_select =
                                    mysqli_real_escape_string($conn, $_POST['slot_select']);
                                $current_date = (new \DateTime())->format('Y-m-d H:i:s');
                                $prsn_lp_count = $prsn_lp_count == '' ? 0 : $prsn_lp_count;
                                $prsn_hs_count = $prsn_hs_count == '' ? 0 : $prsn_hs_count;
                                $errormsg = "";
                                if ($slot_select == '') {
                                    $status = "NOTOK";
                                    $msg = "Your selected Slot can't accomodate ".$queue_prsn_count." members. Please select other.";
                                } else if ((int) $queue_prsn_count > 500) {
                                    $status = "NOTOK";
                                    $msg = "A Slot can accomodate only 500 members.";
                                } else {
                                    $query_slot_count = "select sum(count_tot) as tot_count from queue where date_id=$date_select and slot_id=$slot_select";
                                    $result_slot_count = mysqli_query($conn, $query_slot_count);
                                    $tot_count = $result_slot_count->fetch_all();
                                    if ($tot_count[0][0]) {
                                        $new_tot_count = $tot_count[0][0] + (int) $queue_prsn_count;
                                        if ($new_tot_count > 500) {
                                            $status = "NOTOK";
                                            $msg = "Your selected Slot is Exceeded. Please select another.";
                                        }
                                    }
                                    $queue_duplicate_query = "SELECT id FROM queue WHERE cntct_no1 = '$queue_cntct_no1' AND date_id  = $date_select AND slot_id = $slot_select AND count_tot = $queue_prsn_count;";
                                    $queue_duplicate_result = mysqli_query($conn, $queue_duplicate_query);
                                    if (mysqli_num_rows($queue_duplicate_result) > 0) {
                                        $status = "NOTOK";
                                        $msg = "You have already registered with same details.";
                                    }
                                }
                                if ($status == "NOTOK") {
                                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                        $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                                } else {

                                    $query = "INSERT INTO queue (dist_id, inst_name, head_of_inst_name, designation, cntct_no1, email, inst_type, count_lp, count_hs, count_tot, date_id, slot_id, booked_date, status) VALUES ('$queue_district', '$queue_inst_name', '$queue_head_name','$queue_head_desig', '$queue_cntct_no1', '$queue_inst_email', '$queue_inst_type', '$prsn_lp_count', '$prsn_hs_count', '$queue_prsn_count', '$date_select', '$slot_select', '$current_date', 'E')";
                                    $result = mysqli_query($conn, $query);
                                    $query_date = "SELECT * FROM event_date WHERE id = $date_select";
                                    $result_date = mysqli_query($conn, $query_date);
                                    $query_slot = "SELECT * FROM queue_slot WHERE id = $slot_select";
                                    $result_slot = mysqli_query($conn, $query_slot);
                                    $book_date = $result_date->fetch_all();
                                    $book_slot = $result_slot->fetch_all();
                                    if ($result) {
                                        echo "<div style='display: none;'>";
                                        //Create an instance; passing `true` enables exceptions
                                        $mail = new PHPMailer(true);
                                        try {
                                            //Server settings
                                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                            $mail->isSMTP();                                            //Send using SMTP
                                            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                                            $mail->Username = 'klibf.kla@gmail.com';                     //SMTP username
                                            $mail->Password = 'xbmeccqvahrxxdbm';
                                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                                            $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                                            //Recipients
                                            $mail->setFrom('klibf.kla@gmail.com');
                                            $mail->addAddress($queue_inst_email);
                                            //Content
                                            $mail->isHTML(true);                                  //Set email format to HTML
                                            $mail->Subject = 'no reply';
                                            $mail->Body = 'You have successfully booked ' . $book_date[0][2] . " (" . $book_date[0][1] . ") at " . $book_slot[0][2] . " (" . $book_slot[0][1] . ') KLIBF 3rd Edition.</b>';
                                            $mail->send();
                                            echo 'Message has been sent';
                                        } catch (Exception $e) {
                                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                        }
                                        echo "</div>";
                                        $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                        <b>Registered Successfully. <br>Your booking has been confirmed for " . $book_date[0][2] . " (" . $book_date[0][1] . ") at " . $book_slot[0][2] . " (" . $book_slot[0][1] . "). A confirmation mail also sent to your registered mail id.</b></div>";
                                    } else {
                                        $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
                                        $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                               Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>";
                                    }
                                }
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    print $errormsg;
                                }
                            }
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row bg-grey col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group col-12 col-lg-3 col-md-3 col-sm-12">
                                        <?php
                                        $districtQuery = "SELECT * FROM district";
                                        $districtStmt = $conn->prepare($districtQuery);
                                        $districtStmt->execute();
                                        $districtResult = $districtStmt->get_result();
                                        $districts = $districtResult->fetch_all();
                                        ?>
                                        <br><select class="form-control form-group" name="queue_district"
                                            id="queue_district" style="height:35px;" required>
                                            <option value="">Select District</option>
                                            <?php foreach ($districts as $district) { ?>
                                                <option value="<?= $district[0] ?>"><?= $district[2]; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-lg-9 col-md-9 col-sm-12">
                                        <br> <input type="text" class="form-control col-sm-12" name="queue_inst_name"
                                            placeholder="*Name of Institution" id="inst_name" required>
                                    </div>
                                    <div class="form-group col-12 col-lg-6 col-md-6 col-sm-12">
                                        <br>
                                        <input type="text" class="form-control col-sm-12" name="queue_head_name"
                                            id="queue_head_name" placeholder="*Name of Institution Head" required>
                                    </div>
                                    <div class="form-group col-12 col-lg-6 col-md-6 col-sm-12">
                                        <br>
                                        <input type="text" class="form-control col-sm-12" name="queue_head_desig"
                                            id="queue_head_desig" placeholder="*Designation" required>
                                    </div>
                                    <div class="form-group col-12 col-lg-9 col-md-9 col-sm-12">
                                        <br>
                                        <input type="text" class="form-control col-sm-12" name="queue_inst_email"
                                            id="queue_inst_email" placeholder="*Institution Mail Id" required>
                                    </div>
                                    <div class="form-group col-12 col-lg-3 col-md-3 col-sm-12">
                                        <br>
                                        <select class="form-control form-group" name="queue_inst_type"
                                            id="queue_inst_type" style="height:35px;" onchange="studentCount();"
                                            required>
                                            <option value="">Institution Type</option>
                                            <option value="S">School</option>
                                            <option value="C">College</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-lg-6 col-md-6 col-sm-12" hidden
                                        id="prsn_lp_count_div">
                                        <br>
                                        <input type="number" class="form-control col-sm-12" name="prsn_lp_count"
                                            id="prsn_lp_count" placeholder="*No.of Pupils upto Class 7" min="0"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, ''); getTotalStudents();">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 col-md-6 col-sm-12" hidden
                                        id="prsn_hs_count_div">
                                        <br>
                                        <input type="number" class="form-control col-sm-12" name="prsn_hs_count"
                                            id="prsn_hs_count" placeholder="*No.of Pupils from Class 8 Onwards" min="0"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, ''); getTotalStudents();">
                                    </div>
                                    <div class="form-group col-12 col-lg-3 col-md-3 col-sm-12">
                                        <br>
                                        <input type="text" class="form-control col-sm-12" name="queue_cntct_no1"
                                            id="queue_cntct_no1" placeholder="*Contact No. 1" required
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group col-12 col-lg-3 col-md-3 col-sm-12">
                                        <br>
                                        <input type="text" class="form-control col-sm-12" name="queue_cntct_no2"
                                            id="queue_cntct_no2" placeholder="*Contact No. 2" required
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group col-12 col-lg-3 col-md-3 col-sm-12">
                                        <br>
                                        <input type="number" class="form-control col-sm-12" name="queue_prsn_count"
                                            id="queue_prsn_count" placeholder="*Total No.of Students" required min="0"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <?php
                                    $day_query = "SELECT * FROM event_date WHERE id !='8'";
                                    $day_stmt = $conn->prepare($day_query);
                                    $day_stmt->execute();
                                    $day_result = $day_stmt->get_result();
                                    $event_days = $day_result->fetch_all();
                                    $slot_query = "SELECT * FROM queue_slot";
                                    $slot_stmt = $conn->prepare($slot_query);
                                    $slot_stmt->execute();
                                    $slot_result = $slot_stmt->get_result();
                                    $event_slots = $slot_result->fetch_all();
                                    ?>
                                    <div class="form-group col-12 col-lg-3 col-md-3 col-sm-12">
                                        <br>
                                        <select class="form-control form-group" name="date_select" id="date_select"
                                            style="height:35px;" onchange="loadSlot();">
                                            <option value="0">Select Visit Day</option>
                                            <?php foreach ($event_days as $days) { ?>
                                                <option value="<?= $days[0] ?>" <?= $evnt_day1_selected ?>><?= $days[1]; ?> -
                                                    <?= $days[2]; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="hidden" id="slot_select" name="slot_select">
                                    <div class="form-group col-12" id="avail_slot"></div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-bordered btn-success btn-block mt-3"
                                            name="register_queue" id="register_queue"><span class="text-white pr-3"><i
                                                    class="fas fa-paper-plane"></i></span>Book Queue</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <br>
                                    <p><b>For any queries, please contact:</b><br>
                                        Shaji R, Deputy Secretary - 9497015937<br>
                                        Sheeja P K, Under Secretary- 9446334859 <br>
                                        <!-- Jayasree V L, Under Secretary- 9207196761 <br> -->
                                        Remya H R, Section Officer- 9446284522 <br>
                                        Asha S Kumar, Assistant - 9447427609 <br>
                                        Lekshmi C K, Assistant - 9497454054 <br></p>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>
</body>

</html>

<script type="text/javascript">
    function loadSlot() {
        var date_id = $("#date_select").val();
        if (date_id === 0) {
            $("#avail_slot").empty();
        } else {
            $.ajax({
                dataType: "json",
                url: "list_slot.php",
                type: "POST",
                data: {
                    date: date_id
                },
                dataType: "json",
                success: function (data) {
                    $("#avail_slot").empty();
                    var add_slot = "<br><b>Choose your Slot</b><div class='row'>";
                    for (var i = 0; i < data.length; i++) {
                        var avail = data[i].count === null ? 500 : 500 - data[i].count;

                        // Determine button class based on availability
                        var btnClass = avail <= 0 ? "btn-danger" : "btn-info";
                        var isDisabled = avail <= 0 ? "disabled" : "";

                        add_slot += `
                        <div class='form-group col-12 col-lg-3 col-md-4 col-sm-12'>
                            <button 
                                class='col-12 btn ${btnClass} mt-3' 
                                data-slot-id='${data[i].id}' 
                                onclick='highlightSlot(this, ${data[i].id});' 
                                style='margin:0;' ${isDisabled}>
                                ${data[i].slot}<br>Availability: ${avail}
                            </button>
                        </div>`;
                    }
                    add_slot = add_slot + "</div>";
                    document.getElementById("avail_slot").innerHTML = add_slot;
                }
            });
        }
    }

    function highlightSlot(button, slot_id) {
        // Highlight the selected slot
        document.querySelectorAll('#avail_slot button').forEach(btn => {
            btn.classList.remove('btn-primary');
            if (!btn.disabled) {
                btn.classList.add('btn-info'); // Reset available buttons to green
            }
        });
        button.classList.remove('btn-info', 'btn-danger');
        button.classList.add('btn-primary');

        // Perform slot validation
        checkSlot(slot_id);
    }


    function checkSlot(slot_id) {
        event.preventDefault();
        var date_id = $("#date_select").val();
        var prsn_count = $("#queue_prsn_count").val();
        $.ajax({
            dataType: "json",
            url: "check_slot.php",
            type: "POST",
            data: {
                date: date_id,
                slot: slot_id
            },
            dataType: "json",
            success: function (data) {
                if (data !== null) {
                    var avail_count = 500 - data;
                    if (avail_count <= 0) {
                        alert("This slot is fully occupied. Please choose another.");
                    } else {
                        var avail_count_now = 500 - (parseInt(data) + parseInt(prsn_count));
                        if (avail_count_now < 0) {
                            alert("Limit exceeded. Please choose another.");
                        } else {
                            $("#slot_select").val(slot_id);
                        }
                    }
                } else {
                    var avail_count_check = 500 - prsn_count;
                    if (avail_count_check < 0) {
                        alert("Limit exceeded. Please provide count upto 500.");
                    } else {
                        $("#slot_select").val(slot_id);
                    }
                }
            }

        });
    }

    function studentCount() {
        var instType = document.getElementById("queue_inst_type").value;
        if (instType === 'S') {
            document.getElementById("prsn_lp_count_div").removeAttribute("hidden", "")
            document.getElementById("prsn_hs_count_div").removeAttribute("hidden", "");
        } else {
            document.getElementById("prsn_lp_count_div").setAttribute("hidden", "")
            document.getElementById("prsn_hs_count_div").setAttribute("hidden", "");
        }
    }

    function getTotalStudents() {
        var lpCount = document.getElementById("prsn_lp_count").value;
        var hsCount = document.getElementById("prsn_hs_count").value;
        lpCount = lpCount === "" ? 0 : Number(lpCount);
        hsCount = hsCount === "" ? 0 : Number(hsCount);
        var totalCount = lpCount + hsCount;
        document.getElementById("queue_prsn_count").value = totalCount;
    }
</script>