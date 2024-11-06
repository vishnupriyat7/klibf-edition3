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
            <div class="container d-flex justify-content-between align-items-center">
                <div class="row">
                    <div class="col-xxl-12 col-12 col-md-12 col-lg-12 col-sm-12">
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
                                        // var_dump("here");die;
                                        $category = mysqli_real_escape_string($conn, $_POST['quiz_category']);
                                        $zone = mysqli_real_escape_string($conn, $_POST['quiz_zone']);
                                        $district = mysqli_real_escape_string($conn, $_POST['quiz_district']);
                                        $inst_name = mysqli_real_escape_string($conn, $_POST['inst_name']);
                                        $addr_inst = mysqli_real_escape_string($conn, $_POST['addr_inst']);
                                        $principal_cntct = mysqli_real_escape_string($conn, $_POST['principal_cntct']);
                                        $team_cntct_persn = mysqli_real_escape_string($conn, $_POST['team_cntct_persn']);
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
                                        $sel_reg_quiz_qry = "SELECT id from reg_quiz where inst_prnci_cntct = '$principal_cntct'";
                                        $sel_reg_quiz_res = mysqli_query($conn, $sel_reg_quiz_qry);
                                        var_dump($sel_reg_quiz_res);
                                        if ($sel_reg_quiz_res->num_rows > 0) {
                                            $msg .= "You have already registered with this contact number.<BR>";
                                            $status = "NOTOK";
                                        }
                                        $errormsg = "";
                                        if ($status == "NOTOK") {
                                            $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                                $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                                        } else {
                                            $query = "INSERT INTO reg_quiz (category_id, zone_id, district_id, inst_name, inst_addr, inst_prnci_cntct, inst_faclt_name, inst_faclt_cntct, team1_mem1_name, team1_mem1_class, team1_mem1_gndr, team1_mem1_email, team1_mem1_cntct, team1_mem1_addr, team1_mem2_name, team1_mem2_class, team1_mem2_gndr, team1_mem2_email, team1_mem2_cntct, team1_mem2_addr, team2_mem1_name, team2_mem1_class, team2_mem1_gndr, team2_mem1_email, team2_mem1_cntct, team2_mem2_name, team2_mem2_class, team2_mem2_gndr, team2_mem2_email, team2_mem2_cntct, updated_date) VALUES ('$category', '$inst_name', '$addr_inst', '$part1_name', '$part1_addr', '$part1_dob', '$part1_mail', '$part1_mob', '$part2_name', '$part2_addr', '$part2_dob', '$part2_mail', '$part2_mob', '$current_date', '$part1_gndr', '$part2_gndr')";
                                            $result = mysqli_query($con, $query);
                                            if ($result) {
                                                $errormsg = "
                              <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Registered Successfully. We shall get back to you ASAP.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>
                               ";
                                            } else {
                                                $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
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
                                                    <div class="row">
                                                        <div class="form-group col-xxl-12 co-xl-12 col-lg-12 col-sm-12 ">
                                                            <?php
                                                            $quiz_cat_qry = "SELECT * FROM quiz_category;";
                                                            $quiz_cat_stmt = $conn->prepare($quiz_cat_qry);
                                                            $quiz_cat_stmt->execute();
                                                            $quiz_cat_res = $quiz_cat_stmt->get_result();
                                                            $quiz_categories = $quiz_cat_res->fetch_all();
                                                            ?>
                                                            <select class="form-control form-group" name="quiz_category" id="quiz_category"
                                                                style="height:35px;" require="required" onchange="hideZoneDistInst()">
                                                                <option value="0">*Select Category</option>
                                                                <?php foreach ($quiz_categories as $quiz_category) { ?>
                                                                    <option value="<?= $quiz_category[0] ?>">
                                                                        <?= $quiz_category[1] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">


                                                        <div class="form-group col-xxl-6 co-xl-6 col-lg-6 col-sm-12">
                                                            <?php
                                                            $quiz_zone_qry = "SELECT * FROM quiz_zone;";
                                                            $quiz_zone_stmt = $conn->prepare($quiz_zone_qry);
                                                            $quiz_zone_stmt->execute();
                                                            $quiz_zone_res = $quiz_zone_stmt->get_result();
                                                            $quiz_zones = $quiz_zone_res->fetch_all();
                                                            ?>
                                                            <select class="form-control form-group" name="quiz_zone" id="quiz_zone"
                                                                style="height:35px;" require="required">
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
                                                            $district_qry = "SELECT * FROM district;";
                                                            $district_stmt = $conn->prepare($district_qry);
                                                            $district_stmt->execute();
                                                            $district_res = $district_stmt->get_result();
                                                            $districts = $district_res->fetch_all();
                                                            ?>
                                                            <select class="form-control form-group" name="quiz_district" id="quiz_district"
                                                                style="height:35px;" require="required">
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
                                                            <textarea class="form-control" ame="addr_inst" id="addr_inst"
                                                                id="team1_memb1_addr" placeholder="*Address of Institution"></textarea>
                                                        </div>

                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="email" class="form-control" name="inst_email"
                                                                placeholder="*Email of Institution" id="inst_email">
                                                        </div>

                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="number" class="form-control" name="principal_cntct" id="principal_cntct"
                                                                placeholder="*Principal's Contact Number">
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="text" class="form-control" name="faclty_name"
                                                                placeholder="*Name of Faculty In Charge" id="faclty_name">
                                                        </div>
                                                    
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <input type="number" class="form-control" name="faclty_cntct" id="faclty_cntct"
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
                                                                <input type="text" class="form-control" name="team1_memb1_name"
                                                                    placeholder="*Name of first participant" id="team1_memb1_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb1_gndr"
                                                                        class="gender_team1_memb1" value="M" checked> Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb1_gndr"
                                                                        class="gender_team1_memb1" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb1_gndr"
                                                                        class="gender_team1_memb1" value="T"> Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12" id="team1_memb1_class_course">
                                                                <input type="text" class="form-control" name="team1_memb1_class"
                                                                    placeholder="*Class/Course" id="team1_memb1_class">
                                                            </div>

                                                            <div class="form-group col-12" style="display: none;" id="tm1_meb1_addr">
                                                                <textarea class="form-control" name="team1_memb1_addr"
                                                                    id="team1_memb1_addr" placeholder="* Address"></textarea>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control" name="team1_memb1_cntct"
                                                                    placeholder="*Contact Number" id="team1_memb1_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control" name="team1_memb1_mail"
                                                                    placeholder="* E-mail" id="team1_memb1_mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control" name="team1_memb2_name"
                                                                    placeholder="*Name of second participant" id="team1_memb2_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb2_gndr"
                                                                        class="gender_team1_memb2" value="M" checked> Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb2_gndr"
                                                                        class="gender_team1_memb2" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team1_memb2_gndr"
                                                                        class="gender_team1_memb2" value="T"> Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12" id="team1_memb2_class_course">
                                                                <input type="text" class="form-control" name="team1_memb2_class"
                                                                    placeholder="*Class/Course" id="team1_memb2_class">
                                                            </div>

                                                            <div class="form-group col-12" style="display: none;" id="tm1_meb2_addr">
                                                                <textarea class="form-control" name="team1_memb2_addr"
                                                                    id="team1_memb1_addr" placeholder="* Address"></textarea>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control" name="team1_memb2_cntct"
                                                                    placeholder="*Contact Number" id="team1_memb2_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control" name="team1_memb2_mail"
                                                                    placeholder="* E-mail" id="team1_memb2_mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card mt-2" id="team2">
                                                <div class="card-header text-center fw-bold">
                                                    Team 2
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <!-- <button class="btn btn-bordered active btn-block mt-3">Team 2</button> -->
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control" name="team2_memb1_name"
                                                                    placeholder="*Name of first participant" id="team2_memb1_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb1_gndr"
                                                                        class="gender_team2_memb1" value="M" checked> Male
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
                                                                <input type="text" class="form-control" name="team2_memb1_class"
                                                                    placeholder="*Class/Course" id="team2_memb1_class">
                                                            </div>

                                                            <!-- <div class="form-group col-12">
                                                                <textarea class="form-control" name="team2_memb1_addr"
                                                                    id="team2_memb1_addr" placeholder="* Address"></textarea>
                                                            </div> -->
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control" name="team2_memb1_cntct"
                                                                    placeholder="*Contact Number" id="team2_memb1_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control" name="team2_memb1_mail"
                                                                    placeholder="* E-mail" id="team2_memb1_mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xxl-6 col-lg-12 col-sm-12">
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control" name="team2_memb2_name"
                                                                    placeholder="*Name of second participant" id="team2_memb2_name">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb2_gndr"
                                                                        class="gender_team2_memb2" value="M" checked> Male
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb2_gndr"
                                                                        class="gender_team2_memb2" value="F"> Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="team2_memb2_gndr"
                                                                        class="gender_team2_memb2" value="T"> Trans-Person
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="text" class="form-control" name="team2_memb2_class"
                                                                    placeholder="*Class/Course" id="team2_memb2_class">
                                                            </div>

                                                            <!-- <div class="form-group col-12">
                                                                <textarea class="form-control" name="team2_memb2_addr"
                                                                    id="team2_memb2_addr" placeholder="* Address"></textarea>
                                                            </div> -->
                                                            <div class="form-group col-12">
                                                                <input type="number" class="form-control" name="team2_memb2_cntct"
                                                                    placeholder="*Contact Number" id="team2_memb2_cntct">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <input type="email" class="form-control" name="team2_memb2_mail"
                                                                    placeholder="* E-mail" id="team2_memb2_mail">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <!-- <button class="btn btn-bordered active btn-block mt-3" id="preview_quiz_btn"
                                                    onclick="checkTerm();"><span class="text-white pr-3"><i
                                                            class="fa fa-eye"></i></span>Preview</button> -->
                                                <button type="submit" class="btn btn-bordered active btn-block mt-3"
                                                    name="save-quiz" id="register-quiz"><span class="text-white pr-3"><i
                                                            class="fas fa-paper-plane"></i></span>Register</button>
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
<?php include "attention.php" ?>
<!--====== Call To Action Area End ======-->

<?php include "footer.php"; ?>



<script type="text/javascript">
    function hideZoneDistInst() {
        var catgry = document.getElementById("quiz_category").value;
        const addressDiv1 = document.getElementById('tm1_meb1_addr');
        const addressDiv2 = document.getElementById('tm1_meb2_addr');
        // alert(catgry);
        if (catgry == '3') {
            // alert("here");
            document.getElementById("quiz_zone").style.display = "none";
            document.getElementById("quiz_district").style.display = "none";
            document.getElementById("inst_details").style.display = "none";
            document.getElementById("team1_memb1_class_course").style.display = "none";
            document.getElementById("team1_memb2_class_course").style.display = "none";
            document.getElementById("team2").style.display = "none";
            addressDiv1.style.display = "block";
            addressDiv2.style.display = "block"
        } else {
            document.getElementById("quiz_zone").style.display = "block";
            document.getElementById("quiz_district").style.display = "block";
            document.getElementById("inst_details").style.display = "";
            document.getElementById("team1_memb1_class_course").style.display = "";
            document.getElementById("team1_memb2_class_course").style.display = "";
            document.getElementById("team2").style.display = "";
            addressDiv1.style.display = "none";
            addressDiv2.style.display = "none"
        }
        // if (catgry !== 3) {
        // document.getElementById("inst_name").removeAttr('hidden');
        // $("#inst_name").removeAttr('hidden');
        // $("#addr_inst").removeAttr('hidden');
        // $("#addr_inst").show();
        // $("#inst_name").show();
        // } else {
        //     $("#inst_name").hide();
        //     $("#addr_inst").hide();
        // }
    }

    // document.getElementById("preview_quiz_btn").addEventListener("click", function(event) {
    //     event.preventDefault()
    //     var catgry = $("#category").val();
    //     if (catgry === 'C') {
    //         var cat_text = 'College';
    //     } else if (catgry === 'S') {
    //         var cat_text = 'School';
    //     } else if (catgry === 'P') {
    //         var cat_text = 'Public';
    //     } else {
    //         var cat_text = 'Category not selected';
    //     }
    //     document.getElementById("category_lab").innerHTML = cat_text;
    //     document.getElementById("inst_name_lab").innerHTML = $("#inst_name").val();
    //     document.getElementById("addr_inst_lab").innerHTML = $("#addr_inst").val();
    //     document.getElementById("part1_nme_lab").innerHTML = $("#part1_name").val();
    //     document.getElementById("part1_dob_lab").innerHTML = $("#part1_dob").val();
    //     document.getElementById("part1_gndr_lab").innerHTML = document.querySelector('input[name = gender_part1]:checked').value;
    //     document.getElementById("part1_addr_lab").innerHTML = $("#part1_addr").val();
    //     document.getElementById("part1_cntct_lab").innerHTML = $("#part1_mob").val();
    //     document.getElementById("part1_email_lab").innerHTML = $("#part1_mail").val();
    //     document.getElementById("part2_nme_lab").innerHTML = $("#part2_name").val();
    //     document.getElementById("part2_dob_lab").innerHTML = $("#part2_dob").val();
    //     document.getElementById("part2_gndr_lab").innerHTML = document.querySelector('input[name = gender_part2]:checked').value;
    //     document.getElementById("part2_addr_lab").innerHTML = $("#part2_addr").val();
    //     document.getElementById("part2_cntct_lab").innerHTML = $("#part2_mob").val();
    //     document.getElementById("part2_email_lab").innerHTML = $("#part2_mail").val();
    //     $("#preview-quiz-modal").modal({
    //         show: true,
    //         backdrop: 'static',
    //         keyboard: false
    //     });
    // });

    // document.getElementById("quiz-previewok").addEventListener("click", function(event) {
    //     event.preventDefault()
    //     $("#preview-quiz-modal").modal('hide');
    //     $("#register-quiz").click();

    // });
</script>