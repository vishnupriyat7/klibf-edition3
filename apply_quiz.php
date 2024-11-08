<!DOCTYPE html>
<html lang="en">
<?php
include "config.php";
include "head-style.php";
?>

<body>
    <!-- ======= Header ======= -->
    <?php include "header-inner.php"; ?>
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Quiz Competition</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contest</li>
                        <li>Quiz</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs Section -->
        <section id="contact" class="contact-area ptb_50">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-xxl-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <!-- Register Box -->
                            <div class="contact-box text-center">
                                <!-- <p> Read the <a href="terms&condition.php" target="_blank"><span style="color:blue"> &nbsp;Rules & Regulations</span> </a> before submitting.
                                 </p> -->
                                <!-- Register Form -->
                                <div class="card-body p-5">
                                    <?php
                                    $status = "OK";
                                    $msg = "";
                                    if (isset($_POST['save-quiz'])) {
                                        $category = mysqli_real_escape_string($conn, $_POST['quiz_category']);
                                        $zone = mysqli_real_escape_string($conn, $_POST['quiz_zone']);
                                        $district = mysqli_real_escape_string($conn, $_POST['quiz_district']);
                                        $inst_name = mysqli_real_escape_string($conn, $_POST['inst_name']);
                                        $addr_inst = mysqli_real_escape_string($conn, $_POST['addr_inst']);
                                        $principal_cntct = mysqli_real_escape_string($conn, $_POST['principal_cntct']);
                                        $faclty_cntct = mysqli_real_escape_string($conn, $_POST['faclty_cntct']);
                                        $faclty_name = mysqli_real_escape_string($conn, $_POST['faclty_name']);
                                        $team1_memb1_name = mysqli_real_escape_string($conn, $_POST['team1_memb1_name']);
                                        $team1_memb1_class = mysqli_real_escape_string($conn, $_POST['team1_memb1_class']);
                                        $team1_memb1_gndr = mysqli_real_escape_string($conn, $_POST['team1_memb1_gndr']);
                                        $team1_memb1_addr = mysqli_real_escape_string($conn, $_POST['team1_memb1_addr']);
                                        $team1_memb1_mail = mysqli_real_escape_string($conn, $_POST['team1_memb1_mail']);
                                        $team1_memb1_cntct = mysqli_real_escape_string($conn, $_POST['team1_memb1_cntct']);
                                        $team1_memb2_name = mysqli_real_escape_string($conn, $_POST['team1_memb2_name']);
                                        $team1_memb2_class = mysqli_real_escape_string($conn, $_POST['team1_memb2_class']);
                                        $team1_memb2_gndr = mysqli_real_escape_string($conn, $_POST['team1_memb2_gndr']);
                                        $team1_memb2_addr = mysqli_real_escape_string($conn, $_POST['team1_memb2_addr']);
                                        $team1_memb2_mail = mysqli_real_escape_string($conn, $_POST['team1_memb2_mail']);
                                        $team1_memb2_cntct = mysqli_real_escape_string($conn, $_POST['team1_memb2_cntct']);
                                        $team2_memb1_name = mysqli_real_escape_string($conn, $_POST['team2_memb1_name']);
                                        $team2_memb1_class = mysqli_real_escape_string($conn, $_POST['team2_memb1_class']);
                                        $team2_memb1_gndr = mysqli_real_escape_string($conn, $_POST['team2_memb1_gndr']);
                                        $team2_memb1_mail = mysqli_real_escape_string($conn, $_POST['team2_memb1_mail']);
                                        $team2_memb1_cntct = mysqli_real_escape_string($conn, $_POST['team2_memb1_cntct']);
                                        $team2_memb2_name = mysqli_real_escape_string($conn, $_POST['team2_memb2_name']);
                                        $team2_memb2_class = mysqli_real_escape_string($conn, $_POST['team2_memb2_class']);
                                        $team2_memb2_gndr = mysqli_real_escape_string($conn, $_POST['team2_memb2_gndr']);
                                        $team2_memb2_mail = mysqli_real_escape_string($conn, $_POST['team2_memb2_mail']);
                                        $team2_memb2_cntct = mysqli_real_escape_string($conn, $_POST['team2_memb2_cntct']);
                                        $current_date = (new \DateTime())->format('Y-m-d H:i:s');
                                        if(strlen($team1_memb1_cntct) < 10 || strlen($team1_memb1_cntct) > 11 || strlen($team1_memb2_cntct) < 10 || strlen($team1_memb2_cntct) > 11) {
                                            $msg .= "Partcipants contact number should contain 10 digits.<BR>";
                                                $status = "NOTOK";
                                        }
                                        if ($category == 3) {
                                            $zone = 6;
                                            $district = 15;
                                            $team2_memb1_gndr = $team2_memb2_gndr = null;
                                            if ($team1_memb1_name == '') {
                                                $msg .= "Please enter first participant's name.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb2_name == '') {
                                                $msg .= "Please enter second participant's name.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb1_addr == '') {
                                                $msg .= "Please enter first participant's address.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb2_addr == '') {
                                                $msg .= "Please enter second participant's address.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb1_cntct == '') {
                                                $msg .= "Please enter first participant's contact no.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb2_cntct == '') {
                                                $msg .= "Please enter second participant's contact no.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb1_mail == '') {
                                                $msg .= "Please enter first participant's mail id.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb2_mail == '') {
                                                $msg .= "Please enter second participant's mail id.<BR>";
                                                $status = "NOTOK";
                                            }                                            
                                            $sel_reg_quiz_qry = "SELECT id from reg_quiz where team1_mem1_cntct = '$team1_memb1_cntct' or team1_mem2_cntct = '$team1_memb1_cntct' or team1_mem1_cntct = '$team1_memb2_cntct' or team1_mem1_cntct = '$team1_memb2_cntct'";
                                            $sel_reg_quiz_res = mysqli_query($conn, $sel_reg_quiz_qry);
                                            if ($sel_reg_quiz_res->num_rows > 0) {
                                                $msg .= "You have already registered with this contact number.<BR>";
                                                $status = "NOTOK";
                                            }
                                        } else {
                                            if ($team1_memb1_name == '') {
                                                $msg .= "Please enter first participant's name.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb2_name == '') {
                                                $msg .= "Please enter second participant's name.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb1_class == '') {
                                                $msg .= "Please enter first participant's class / course.<BR>";
                                                $status = "NOTOK";
                                            } elseif ($team1_memb2_class == '') {
                                                $msg .= "Please enter second participant's class / course.<BR>";
                                                $status = "NOTOK";
                                            }
                                            if(strlen($team2_memb1_cntct) < 10 || strlen($team2_memb1_cntct) > 11 || strlen($team2_memb2_cntct) < 10 || strlen($team2_memb2_cntct) > 11) {
                                                $msg .= "Partcipants contact number should contain 10 digits.<BR>";
                                                    $status = "NOTOK";
                                            }
                                            if(strlen($principal_cntct) < 10 || strlen($principal_cntct) > 11 || strlen($faclty_cntct) < 10 || strlen($faclty_cntct) > 11) {
                                                $msg .= "Contact number should contain 10 digits.<BR>";
                                                    $status = "NOTOK";
                                            }
                                            $sel_reg_quiz_qry = "SELECT id from reg_quiz where inst_prnci_cntct = '$principal_cntct'";
                                            $sel_reg_quiz_res = mysqli_query($conn, $sel_reg_quiz_qry);
                                            if ($sel_reg_quiz_res->num_rows > 0) {
                                                $msg .= "You have already registered with this contact number.<BR>";
                                                $status = "NOTOK";
                                            }
                                        }
                                        $errormsg = "";
                                        if ($status == "NOTOK") {
                                            $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                                $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                                        } else {
                                            $insrt_reg_quiz_query = "INSERT INTO reg_quiz (category_id, zone_id, district_id, inst_name, inst_addr, inst_prnci_cntct, inst_faclt_name, inst_faclt_cntct, team1_mem1_name, team1_mem1_class, team1_mem1_gndr, team1_mem1_email, team1_mem1_cntct, team1_mem1_addr, team1_mem2_name, team1_mem2_class, team1_mem2_gndr, team1_mem2_email, team1_mem2_cntct, team1_mem2_addr, team2_mem1_name, team2_mem1_class, team2_mem1_gndr, team2_mem1_email, team2_mem1_cntct, team2_mem2_name, team2_mem2_class, team2_mem2_gndr, team2_mem2_email, team2_mem2_cntct, updated_date) VALUES ('$category', '$zone', '$district', '$inst_name', '$addr_inst', '$principal_cntct', '$faclty_name', '$faclty_cntct', '$team1_memb1_name', '$team1_memb1_class', '$team1_memb1_gndr', '$team1_memb1_mail', '$team1_memb1_cntct', '$team1_memb1_addr', '$team1_memb2_name', '$team1_memb2_class', '$team1_memb2_gndr', '$team1_memb2_mail', '$team1_memb2_cntct', '$team1_memb2_addr', '$team2_memb1_name', '$team2_memb1_class', '$team2_memb1_gndr', '$team2_memb1_mail', '$team2_memb1_cntct', '$team2_memb2_name', '$team2_memb2_class', '$team2_memb2_gndr', '$team2_memb2_mail', '$team2_memb2_cntct', '$current_date')";
                                            // <button type='button' class='btn-info' onclick='printQuiz(" . $quiz_reg_id['id'] . ")'>Print</button>
                                            $result = mysqli_query($conn, $insrt_reg_quiz_query);
                                            if ($result) {
                                                if ($category != 3) {
                                                    $sel_registered_query = "SELECT id from reg_quiz where inst_prnci_cntct = '$principal_cntct';";
                                                } else {
                                                    $sel_registered_query = "SELECT id from reg_quiz where team1_mem1_cntct = '$team1_memb1_cntct';";
                                                }
                                                $sel_registered_res = mysqli_query($conn, $sel_registered_query);
                                                $quiz_reg_id = $sel_registered_res->fetch_assoc();
                                                $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                You have been registered successfully. Your Registration Number is KLIBF03-Q" . $quiz_reg_id['id'] . ". 
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>";
                                            } else {
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
                                        <div class="row bg-grey">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="section-heading text-center mb-3">
                                                        <h2>Apply Now!</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="form-group col-xxl-12 col-xl-12 col-lg-12 col-sm-12 d-flex flex-row">
                                                            <label class="me-3">*Select Category:</label>
                                                            <?php
                                                            $quiz_cat_qry = "SELECT * FROM quiz_category;";
                                                            $quiz_cat_stmt = $conn->prepare($quiz_cat_qry);
                                                            $quiz_cat_stmt->execute();
                                                            $quiz_cat_res = $quiz_cat_stmt->get_result();
                                                            $quiz_categories = $quiz_cat_res->fetch_all();
                                                            $first = true; // Variable to check if it's the first radio button
                                                            foreach ($quiz_categories as $quiz_category) { ?>
                                                                <div class="form-check me-3">
                                                                    <input type="radio"
                                                                        class="form-check-input"
                                                                        name="quiz_category"
                                                                        id="quiz_category_<?= $quiz_category[0] ?>"
                                                                        value="<?= $quiz_category[0] ?>"
                                                                        onchange="hideZoneDistInst()"
                                                                        <?php if ($first) echo 'checked'; // Set checked attribute for the first radio button 
                                                                        ?>
                                                                        required>
                                                                    <label class="form-check-label" for="quiz_category_<?= $quiz_category[0] ?>">
                                                                        <?= $quiz_category[1] ?>
                                                                    </label>
                                                                </div>
                                                            <?php
                                                                $first = false; // After the first item, set $first to false
                                                            } ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xxl-6 co-xl-6 col-lg-6 col-sm-12">
                                                            <?php
                                                            $quiz_zone_qry = "SELECT * FROM quiz_zone where id != 6;";
                                                            $quiz_zone_stmt = $conn->prepare($quiz_zone_qry);
                                                            $quiz_zone_stmt->execute();
                                                            $quiz_zone_res = $quiz_zone_stmt->get_result();
                                                            $quiz_zones = $quiz_zone_res->fetch_all();
                                                            ?>
                                                            <select class="form-control form-group" name="quiz_zone"
                                                                id="quiz_zone" style="height:35px;" require="required"
                                                                onclick="selectDistrict();">
                                                                <option value="0">*Select Zone</option>
                                                                <?php foreach ($quiz_zones as $quiz_zone) { ?>
                                                                    <option value="<?= $quiz_zone[0] ?>">
                                                                        <?= $quiz_zone[2] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-xxl-6 co-xl-6 col-lg-6 col-sm-12">
                                                            <?php
                                                            $district_qry = "SELECT * FROM district where id != 15;";
                                                            $district_stmt = $conn->prepare($district_qry);
                                                            $district_stmt->execute();
                                                            $district_res = $district_stmt->get_result();
                                                            $districts = $district_res->fetch_all();
                                                            ?>
                                                            <select class="form-control form-group" name="quiz_district"
                                                                id="quiz_district" style="height:35px;"
                                                                require="required">
                                                                <option value="0">*Select District</option>
                                                                <?php foreach ($districts as $district) { ?>
                                                                    <option value="<?= $district[0] ?>">
                                                                        <?= $district[2] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-2" id="inst_details" class="inst_details">
                                                <div class="card-header text-center fw-bold">
                                                    Institution Details
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="text" class="form-control" name="inst_name"
                                                                placeholder="*Name of Institution" id="inst_name">
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <textarea class="form-control" name="addr_inst"
                                                                id="addr_inst"
                                                                placeholder="*Address of Institution"></textarea>
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="email" class="form-control" name="inst_email"
                                                                placeholder="*Email of Institution" id="inst_email">
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="number" class="form-control"
                                                                name="principal_cntct" id="principal_cntct"
                                                                placeholder="*Principal's Contact Number">
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="text" class="form-control" name="faclty_name"
                                                                placeholder="*Name of Faculty In Charge"
                                                                id="faclty_name">
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="number" class="form-control"
                                                                name="faclty_cntct" id="faclty_cntct"
                                                                placeholder="*Contact Number of Faculty In Charge">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-2" id="team1">
                                                <div class="card-header text-center fw-bold">
                                                    Team 1
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control"
                                                                    name="team1_memb1_name"
                                                                    placeholder="*Name of first participant"
                                                                    id="team1_memb1_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb1_gndr"
                                                                        class="gender_team1_memb1" value="M" checked>
                                                                    Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb1_gndr"
                                                                        class="gender_team1_memb1" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb1_gndr"
                                                                        class="gender_team1_memb1" value="T">
                                                                    Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12"
                                                                id="team1_memb1_class_course">
                                                                <input type="text" class="form-control"
                                                                    name="team1_memb1_class" placeholder="*Class/Course"
                                                                    id="team1_memb1_class">
                                                            </div>
                                                            <div class="form-group col-12" style="display: none;"
                                                                id="tm1_meb1_addr">
                                                                <textarea class="form-control" name="team1_memb1_addr"
                                                                    id="team1_memb1_addr"
                                                                    placeholder="* Address"></textarea>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control"
                                                                    name="team1_memb1_cntct" placeholder="*Contact Number"
                                                                    id="team1_memb1_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control"
                                                                    name="team1_memb1_mail" placeholder="* E-mail"
                                                                    id="team1_memb1_mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control"
                                                                    name="team1_memb2_name"
                                                                    placeholder="*Name of second participant"
                                                                    id="team1_memb2_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb2_gndr"
                                                                        class="gender_team1_memb2" value="M" checked>
                                                                    Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb2_gndr"
                                                                        class="gender_team1_memb2" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb2_gndr"
                                                                        class="gender_team1_memb2" value="T">
                                                                    Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12"
                                                                id="team1_memb2_class_course">
                                                                <input type="text" class="form-control"
                                                                    name="team1_memb2_class" placeholder="*Class/Course"
                                                                    id="team1_memb2_class">
                                                            </div>
                                                            <div class="form-group col-12" style="display: none;"
                                                                id="tm1_meb2_addr">
                                                                <textarea class="form-control" name="team1_memb2_addr"
                                                                    id="team1_memb1_addr"
                                                                    placeholder="* Address"></textarea>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control"
                                                                    name="team1_memb2_cntct"
                                                                    placeholder="*Contact Number"
                                                                    id="team1_memb2_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control"
                                                                    name="team1_memb2_mail" placeholder="* E-mail"
                                                                    id="team1_memb2_mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-4">
                                                <a class="mr-2 btn btn-primary" id="team2_dtls" onclick="displayTeam2()">Team 2 Details</a>
                                            </div>
                                            <div class="card mt-2" id="team2">
                                                <div class="card-header text-center fw-bold">
                                                    Team 2
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control"
                                                                    name="team2_memb1_name"
                                                                    placeholder="*Name of first participant"
                                                                    id="team2_memb1_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb1_gndr"
                                                                        class="gender_team2_memb1" value="M" checked>
                                                                    Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb1_gndr"
                                                                        class="gender_team2_memb1" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" class="gender_team2_memb1"
                                                                        name="team2_memb1_gndr" value="T"> Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control"
                                                                    name="team2_memb1_class" placeholder="*Class/Course"
                                                                    id="team2_memb1_class">
                                                            </div>
                                                            <!-- <div class="form-group col-12">
                                                                <textarea class="form-control" name="team2_memb1_addr"
                                                                    id="team2_memb1_addr" placeholder="* Address"></textarea>
                                                            </div> -->
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control"
                                                                    name="team2_memb1_cntct"
                                                                    placeholder="*Contact Number"
                                                                    id="team2_memb1_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control"
                                                                    name="team2_memb1_mail" placeholder="* E-mail"
                                                                    id="team2_memb1_mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control"
                                                                    name="team2_memb2_name"
                                                                    placeholder="*Name of second participant"
                                                                    id="team2_memb2_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb2_gndr"
                                                                        class="gender_team2_memb2" value="M" checked>
                                                                    Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb2_gndr"
                                                                        class="gender_team2_memb2" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb2_gndr"
                                                                        class="gender_team2_memb2" value="T">
                                                                    Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control"
                                                                    name="team2_memb2_class" placeholder="*Class/Course"
                                                                    id="team2_memb2_class">
                                                            </div>
                                                            <!-- <div class="form-group col-12">
                                                                <textarea class="form-control" name="team2_memb2_addr"
                                                                    id="team2_memb2_addr" placeholder="* Address"></textarea>
                                                            </div> -->
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control"
                                                                    name="team2_memb2_cntct"
                                                                    placeholder="*Contact Number"
                                                                    id="team2_memb2_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control"
                                                                    name="team2_memb2_mail" placeholder="* E-mail"
                                                                    id="team2_memb2_mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <!-- <button class="btn btn-bordered active btn-block mt-3" id="preview_quiz_btn"
                                                    target="#preview-quiz-modal"><span class="text-white pr-3"><i
                                                            class="fa fa-eye"></i></span>Preview</button> -->
                                                <button type="submit" class="btn btn-bordered btn-success btn-block mt-3"
                                                    name="save-quiz" id="register-quiz">
                                                    <span class="text-white pr-3">
                                                        <i class="fas fa-paper-plane"></i>
                                                    </span>Register</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</body>
<br>

<?php include "attention.php" ?>
<!--====== Call To Action Area End ======-->

<div id="preview-quiz-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title float-left">Preview</h4>
                <button type="button" class="close" data-dismiss="modal"><span
                        style="font-size:48px;color:red">&times;</span></button>&nbsp;
            </div>
            <div class="modal-body">
                <?php include "quiz_preview.php"; ?>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default float-left" id="download">Print</button> -->
                <button type=" button" class="btn btn-default" data-dismiss="modal">Edit</button>
                <button type="button" class="btn btn-success" onclick="previewok();"
                    id="quiz-previewok">Register</button>
            </div>
        </div>

    </div>
</div>
<br>
<?php include "footer.php"; ?>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const defaultCategory = '1';
        document.querySelector(`input[name="quiz_category"][value="${defaultCategory}"]`).checked = true;
        hideZoneDistInst();
    });

    function hideZoneDistInst() {
        // Get the selected radio button value for category
        const catgry = document.querySelector('input[name="quiz_category"]:checked').value;
        const addressDiv1 = document.getElementById('tm1_meb1_addr');
        const addressDiv2 = document.getElementById('tm1_meb2_addr');
        const team2_details = document.getElementById("team2_dtls");

        if (catgry === '3') {
            document.getElementById("quiz_zone").style.display = "none";
            document.getElementById("quiz_district").style.display = "none";
            document.getElementById("inst_details").style.display = "none";
            document.getElementById("team1_memb1_class_course").style.display = "none";
            document.getElementById("team1_memb2_class_course").style.display = "none";
            team2_details.style.display = "none";
            // console.log("Display property of team2_dtls:", document.getElementById("team2_dtls").style.display);

            document.getElementById("team2").style.display = "none";
            addressDiv1.style.display = "block";
            addressDiv2.style.display = "block";
        } else if (catgry === '1' || catgry === '2') {
            document.getElementById("quiz_zone").style.display = "block";
            document.getElementById("quiz_district").style.display = "block";
            document.getElementById("inst_details").style.display = "";
            document.getElementById("team1_memb1_class_course").style.display = "";
            document.getElementById("team1_memb2_class_course").style.display = "";
            document.getElementById("team2").style.display = "none";
            team2_details.style.display = "block";
            addressDiv1.style.display = "none";
            addressDiv2.style.display = "none";
        }
    }

    function displayTeam2() {

        const catgry = document.querySelector('input[name="quiz_category"]:checked').value;
        if (catgry === '1' || catgry === '2') {
            document.getElementById("team2").style.display = "block";
        }
    }



    function selectDistrict() {
        var zone = document.getElementById("quiz_zone").value;
        $.ajax({
            dataType: "json",
            url: "list_district.php",
            type: "POST",
            data: {
                zone_id: zone
            },
            dataType: "json",
            success: function(data) {
                $('#quiz_district').empty();
                var add_slot = "";
                $("#quiz_district").append('<option value="">Select District</option>');
                $.each(data, function(key, value) {
                    $("#quiz_district").append('<option value=' + value[0] + '>' + value[2] + '</option>');
                });
            }
        });
    }

    function printQuiz(quiz_id) {
        alert("mhkj");
        $.ajax({
            dataType: "json",
            url: "print_quiz_reg.php",
            type: "POST",
            data: {
                quiz_id: quiz_id
            },
            dataType: "json",
            success: function(data) {
                var printWindow = window.open('', '', 'height=800,width=600');
                printWindow.document.write('<html><head><title>');
                printWindow.document.write('</title></head><body align="center">');
                // printWindow.document.write('<img src="');
                // printWindow.document.write('./assets/img/logo/header2.jpg');
                // printWindow.document.write('" height="150" width="100%">');
                printWindow.document.write("<div align='center'>");
                printWindow.document.write("<table border='3'>");
                printWindow.document.write('<thead></thead><tbody><tr><th colspan="2">House / Organization</th></tr><tr><td>Name  <td>');
                // printWindow.document.write($("#comp_name").val());
                printWindow.document.write('</td></tr><tr><td>Year of Establishment  </td><td>');
                // printWindow.document.write($("#estb_year").val());
                printWindow.document.write('</td></tr><tr><td>Registration Number  </td><td>');
                // printWindow.document.write($("#reg_no").val());
                printWindow.document.write('</td></tr><tr><td>GST Number  </td><td>');
                // printWindow.document.write($("#gst_no").val());
                printWindow.document.write('</td></tr><tr><td>Language(s) in which books are published  </td><td>');
                // printWindow.document.write($("#book_lang").val());
                printWindow.document.write('</td></tr><tr><td>Number of Titles Published  </td><td>');
                // printWindow.document.write($("#title_no").val());
                printWindow.document.write('</td></tr><tr><td>Nature of Organization  </td><td>');
                // var org_nature = $("#org_nature").val();
                // if (org_nature == 'P') {
                //     printWindow.document.write('Publisher');
                // } else {
                //     printWindow.document.write('Publisher & Distributer</td></tr><tr><td>Major Publishing House(s) which are distributed  </td><td>');
                //     printWindow.document.write($("#mjr_pub_val").val());
                // }
                printWindow.document.write('</td></tr><tr><th colspan="2">Head of the Publishing House / Organization</th></tr><tr><td>Name  </td><td>');
                // printWindow.document.write($("#head_name").val());
                printWindow.document.write('</td></tr><tr><td>Address  </td><td>');
                // printWindow.document.write($("#head_addr").val());
                printWindow.document.write('</td></tr><tr><td>Email ID  </td><td>');
                // printWindow.document.write($("#head_email").val());
                printWindow.document.write('</td></tr><tr><td>Website  </td><td>');
                // printWindow.document.write($("#head_site").val());
                printWindow.document.write('</td></tr><tr><td>Mobile Number  </td><td>');
                // printWindow.document.write($("#head_mobile").val());
                printWindow.document.write('</td></tr><tr><th colspan="2">Contact (In-charge) Person for the Fair</th></tr><tr><td>Name  </td><td>');
                // printWindow.document.write($("#prsn_name").val());
                printWindow.document.write('</td></tr><tr><td>Address  </td><td>');
                // printWindow.document.write($("#prsn_addr").val());
                printWindow.document.write('</td></tr><tr><td>Email ID  </td><td>');
                // printWindow.document.write($("#prsn_email").val());
                printWindow.document.write('</td></tr><tr><td>Mobile Number  </td><td>');
                // printWindow.document.write($("#prsn_mobile").val());
                printWindow.document.write('</td></tr><tr><td>WhatsApp Number  </td><td>');
                // printWindow.document.write($("#whatsapp").val());
                printWindow.document.write('</td></tr><tr><td>Estimated amount to remit (including GST)</td><td>');
                printWindow.document.write('₹.');
                // printWindow.document.write($("#totamt").val());
                printWindow.document.write('/-</td></tr><tr><td>FASCIA Text  </td><td>');
                // printWindow.document.write($("#fascia").val());
                printWindow.document.write('</td></tr><tr><td>Remarks  </td><td>');
                // printWindow.document.write($("#remark").val());
                printWindow.document.write('</td></tr><tr><td>Logo  </td><td>');
                // const [file] = logo.files
                // if (file) {
                //     printWindow.document.write('<img id = "blah" height="50px" width="100px" src = "');
                //     printWindow.document.write(URL.createObjectURL(file));
                //     printWindow.document.write('" alt = "your image " />');
                // }
                printWindow.document.write('<img src="');
                printWindow.document.write('">');
                printWindow.document.write('</tr></tr></tbody></table>');
                printWindow.document.write("</div>");
                printWindow.document.write('</body></html>');
                printWindow.document.close();
            }
        });
    }
</script>