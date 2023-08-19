<?php
ini_set('display_errors', '0');
include "header.php";
include "sidebar_publisher.php";
$user_id = $user['id'];
// var_dump($user_id);die;
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
                        <h4 class="mb-sm-0">Book Discussion Proposal</h4>
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
                        <!-- <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> New Blog
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                        <?php
                        $status = "OK";
                        $msg = "";
                        if (isset($_POST['disc_save'])) {
                            $disc_sub =
                                mysqli_real_escape_string($con, $_POST['disc_sub']);
                            $disc_book =
                                mysqli_real_escape_string($con, $_POST['disc_book']);
                            $modrtr =
                                mysqli_real_escape_string($con, $_POST['modrtr']);
                            $prtcpnt1 =
                                mysqli_real_escape_string($con, $_POST['prtcpnt1']);
                            $prtcpnt2 =
                                mysqli_real_escape_string($con, $_POST['prtcpnt2']);
                            $prtcpnt3 =
                                mysqli_real_escape_string($con, $_POST['prtcpnt3']);
                            $prtcpnt4 =
                                mysqli_real_escape_string($con, $_POST['prtcpnt4']);
                            $evnt_day =
                                mysqli_real_escape_string($con, $_POST['evnt_day']);
                            $time_slot =
                                mysqli_real_escape_string($con, $_POST['time_slot']);
                            $cntct_name =
                                mysqli_real_escape_string($con, $_POST['cntct_name']);
                            $cntct_phno =
                                mysqli_real_escape_string($con, $_POST['cntct_phno']);
                            $cntct_mail =
                                mysqli_real_escape_string($con, $_POST['cntct_mail']);
                            $disc_remark =
                                mysqli_real_escape_string($con, $_POST['disc_remark']);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d H:i:s");
                            if (!empty($_FILES["disc_book_cover"]["name"])) {
                                // Get file info 
                                $fileName = basename($_FILES["disc_book_cover"]["name"]);
                                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                                // Allow certain file formats 
                                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                                if (in_array($fileType, $allowTypes)) {
                                    $image = $_FILES['disc_book_cover']['tmp_name'];
                                    $imgContent = addslashes(file_get_contents($image));
                                } else {
                                    $msg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                                    $status = "NOTOK";
                                }
                            } else {
                                if (!$logo) {
                                    $msg = 'Please select an image file to upload.';
                                    $status = "NOTOK";
                                }                                
                            }
                            if($time_slot == '0') {
                                $msg = $msg . "Please select proposed time slot.<BR>";
                                $status = "NOTOK";
                            } if($evnt_day == '0') {
                                $msg = $msg . "Please select proposed date.<BR>";
                                $status = "NOTOK";
                            }
                            $errormsg = "";
                            if ($status == "NOTOK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                    $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                            } else {
                                // if ($user_id) {
                                   
                                    // $query = "UPDATE users_profile SET org_name = '$comp_name', estb_year = '$estb_year', reg_no = '$reg_no', gst_no = '$gst_no', book_lang = '$book_lang', title_no = '$title_no', org_nature = '$org_nature', mgr_house_name = '$mgr_pub_hse', head_org_name = '$head_name', head_org_addr = '$head_addr', head_org_mobile = '$head_mobile', head_org_email = '$head_email', head_org_website = '$head_site', cntct_prsn_name = '$prsn_name', cntct_prsn_addr = '$prsn_addr', cntct_prsn_mobile = '$prsn_mobile', cntct_prsn_email = '$prsn_email', cntct_prsn_watsapp = '$whatsapp', status = 'E', updated_at = '$date', fascia = '$fascia', remarks = '$remark', logo = '$imgContent' WHERE user_id = '$user_id'";
                                    
                                // } else {
                                    $query = "INSERT INTO evnt_propsl_bkdscn (user_id, subject, moderator, participant1, participant2, participant3, participant4, date_prefering, time_prefering, cntct_name, cntct_phno, cntct_mail, updated_at, remarks, submitted) VALUES ('$user_id', '$disc_sub', '$modrtr', '$prtcpnt1', '$prtcpnt2', '$prtcpnt3', '$prtcpnt4', '$evnt_day', '$time_slot', '$cntct_name', '$cntct_phno', '$cntct_mail', '$date', '$disc_remark', '0')";
                                // }
                                $result = mysqli_query($con, $query);
                                if ($result) {
                                    $errormsg = "
                              <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your Profile Details is Successfully Saved. Proceed with stall(s) booking.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                              
                               ";
                                    // $sql1 = "SELECT * FROM users_profile WHERE user_id = ?;";
                                    // $stmt1 = $con->prepare($sql1);
                                    // $stmt1->bind_param("s", $user_id);
                                    // $stmt1->execute();
                                    // $result1 = $stmt1->get_result();
                                    // $user_profile = $result1->fetch_assoc();
                                    // $comp_name = $user_profile['org_name'];
                                    // $estb_year = $user_profile['estb_year'];
                                    // $reg_no = $user_profile['reg_no'];
                                    // $gst_no = $user_profile['gst_no'];
                                    // $book_lang = $user_profile['book_lang'];
                                    // $title_no = $user_profile['title_no'];
                                    // $org_nature = $user_profile['org_nature'];
                                    // $mgr_pub_hse = $user_profile['mgr_house_name'];
                                    // $head_name = $user_profile['head_org_name'];
                                    // $head_addr = $user_profile['head_org_addr'];
                                    // $head_mobile = $user_profile['head_org_mobile'];
                                    // $head_email = $user_profile['head_org_email'];
                                    // $head_site = $user_profile['head_org_website'];
                                    // $prsn_name = $user_profile['cntct_prsn_name'];
                                    // $prsn_addr = $user_profile['cntct_prsn_addr'];
                                    // $prsn_mobile = $user_profile['cntct_prsn_mobile'];
                                    // $prsn_email = $user_profile['cntct_prsn_email'];
                                    // $whatsapp = $user_profile['cntct_prsn_watsapp'];
                                    // $fascia = $user_profile['fascia'];
                                    // $remark = $user_profile['remarks'];
                                    // $logo = base64_encode($user_profile['logo']);
                                    // if ($org_nature == 'A') {
                                    //     $select0 = '';
                                    //     $selecta = 'selected';
                                    //     $selectp = '';
                                    // } else if ($org_nature == 'P') {
                                    //     $select0 = '';
                                    //     $selecta = '';
                                    //     $selectp = 'selected';
                                    // } else {
                                    //     $select0 = 'selected';
                                    //     $selecta = '';
                                    //     $selectp = '';
                                    // }
                                    // if (!$logo) {
                                    //     $hide = "";
                                    // } else {
                                    //     $hide = "hidden";
                                    // }
                                }  else {
                                    $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                               Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
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
                                            <div class="form-group col-12"></div>
                                            <!-- <div class="form-group col-12">
                                                <label><b>Publishing House / Organization</b></label>
                                            </div> -->
                                            <div class="form-group col-6">
                                                Subject
                                                <input type="text" class="form-control" name="disc_sub" placeholder="Subject" id="disc_sub" value="">
                                            </div>
                                            <div class="form-group col-6">
                                                Name of Book
                                                <input type="text" class="form-control" name="disc_book" id="disc_book" placeholder="Name of Book">
                                            </div>
                                            <div class="form-group col-12">
                                                <br>
                                                Moderator
                                                <input type="text" class="form-control" name="modrtr" id="modrtr" placeholder="Moderator">
                                            </div>
                                            <div class="form-group col-6">
                                                <br>
                                                Particiapant 1
                                                <input type="text" class="form-control" name="prtcpnt1" id="prtcpnt1" placeholder="Particiapant 1">
                                            </div>
                                            <div class="form-group col-6">
                                                <br>
                                                Particiapant 2
                                                <input type="text" class="form-control" name="prtcpnt2" id="prtcpnt2" placeholder="Particiapant 2">
                                            </div>
                                            <div class="form-group col-6">
                                                <br>
                                                Particiapant 3
                                                <input type="text" class="form-control" name="prtcpnt3" id="prtcpnt3" placeholder="Particiapant 3">
                                            </div>
                                            <div class="form-group col-6">
                                                <br>
                                                Particiapant 4
                                                <input type="text" class="form-control" name="prtcpnt4" id="prtcpnt4" placeholder="Particiapant 4">
                                            </div>
                                            <div class="form-group col-6">
                                                <br>
                                                <?php
                                                $day_query = "SELECT * FROM event_date";
                                                $day_stmt = $con->prepare($day_query);
                                                $day_stmt->execute();
                                                $day_result = $day_stmt->get_result();
                                                $event_days = $day_result->fetch_all();
                                                ?>
                                                Proposed Event Date
                                                <select class="form-control form-group" name="evnt_day" id="evnt_day" style="height:35px;" required="required">
                                                    <option value="0">Select Proposed Event Day</option>
                                                    <?php foreach ($event_days as $event_day) { ?>
                                                        <option value="<?= $event_day[0] ?>"><?= $event_day[1]; ?> - <?= $event_day[2]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <br>
                                                <?php
                                                $slot_query = "SELECT * FROM time_slot";
                                                $slot_stmt = $con->prepare($slot_query);
                                                $slot_stmt->execute();
                                                $slot_result = $slot_stmt->get_result();
                                                $event_slots = $slot_result->fetch_all();
                                                ?>
                                                Proposed Time Slot
                                                <select class="form-control form-group" name="time_slot" id="time_slot" style="height:35px;" required="required">
                                                    <option value="0">Select Proposed Event Day</option>
                                                    <?php foreach ($event_slots as $event_slot) { ?>
                                                        <option value="<?= $event_slot[0] ?>"><?= $event_slot[1]; ?> - <?= $event_slot[2]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>


                                            <!-- <div class="col-6">
                                                </br>
                                                <label>Book Cover (Only JPG, JPEG, PNG files are allowed for uploads.)</label>
                                            </div> -->
                                            <div class="form-group col-6">
                                                </br>
                                                Book Cover (Only JPG, JPEG, PNG files are allowed for uploads.)
                                                <input type="file" class="form-control" name="disc_book_cover" id="disc_book_cover" placeholder="Upload Book Cover">
                                                <!-- <label id="logo_lab">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?= $logo; ?>" height="70vh" id="logo_img" <?= $edit; ?>>
                                                </label>
                                                <span id="changelogo" onclick="changeLogo();" <?= $edit; ?>><u>Change Logo</u></span> -->

                                                <!-- <input type="file" class="form-control" name="logo" id="logo" placeholder="*Upload Logo"> -->
                                            </div>
                                            <div class="form-group col-6"></div>
                                            <div class="form-group col-6">
                                                </br>
                                                Contact Person Name
                                                <input type="text" class="form-control" name="cntct_name" id="cntct_name" placeholder="Contact Person Name">
                                            </div>
                                            <div class="form-group col-6">
                                                </br>
                                                Contact Phone No.
                                                <input type="text" class="form-control" name="cntct_phno" id="cntct_phno" placeholder="Contact Phone No.">
                                            </div>
                                            <div class="form-group col-6">
                                                </br>
                                                Contact Email Id.
                                                <input type="email" class="form-control" name="cntct_mail" id="cntct_mail" placeholder="Contact Email Id.">
                                            </div>
                                            <div class="form-group col-6">
                                                </br>
                                                Remarks
                                                <input type="text" class="form-control" name="disc_remark" id="disc_remark" placeholder="Remarks">
                                            </div>
                                        </div><br>
                                        <!-- <div class="col-12">
                                            <button class="btn btn-bordered active btn-block mt-3" id="preview_btn" onclick="checkTerm();"><span class="text-white pr-3"><i class="fa fa-eye"></i></span>Preview</button>
                                            <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save" id="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Save</button>
                                        </div> -->
                                        <div class="col-lg-12">

                                            <button type="submit" name="disc_save" class="btn btn-primary" id="disc_save">Save</button>
                                            <!-- <?php if ($user_profile) { ?>
                                                <button type="submit" class="btn btn-success" name="submit-form" id="submit-form">Submit</button>
                                            <?php } ?> -->
                                            <!-- <span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span> -->
                                        </div>
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

    <?php include "footer.php"; ?>