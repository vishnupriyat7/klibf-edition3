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
                        <h4 class="mb-sm-0">Book Release Proposal</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li> -->
                                <!-- <li class="breadcrumb-item active">Add</li> -->
                                <a class="dropdown-item" href="book_coverut.php"><i class="mdi mdi-book_coverut text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-book_coverut">Logout</span></a>
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
                        if (isset($_POST['save'])) {
                            $book_title =
                                mysqli_real_escape_string($con, $_POST['book_title']);
                            $author =
                                mysqli_real_escape_string($con, $_POST['author']);
                            $book_genere =
                                mysqli_real_escape_string($con, $_POST['book_genere']);
                            $brief_descrptn =
                                mysqli_real_escape_string($con, $_POST['brief_descrptn']);
                            $release_by =
                                mysqli_real_escape_string($con, $_POST['release_by']);
                            $recvd_by =
                                mysqli_real_escape_string($con, $_POST['recvd_by']);
                            $guest1 =
                                mysqli_real_escape_string($con, $_POST['guest1']);
                            $guest2 =
                                mysqli_real_escape_string($con, $_POST['guest2']);
                            $guest3 =
                                mysqli_real_escape_string($con, $_POST['guest3']);
                            $bkrls_contact =
                                mysqli_real_escape_string($con, $_POST['bkrls_contact']);
                            $bkrls_mobile =
                                mysqli_real_escape_string($con, $_POST['mobile']);
                            $bkrls_email =
                                mysqli_real_escape_string($con, $_POST['bkrls_email']);
                            $date_preffer =
                                mysqli_real_escape_string($con, $_POST['date_prefering']);
                            $time_preffer =
                                mysqli_real_escape_string($con, $_POST['time_prefer']);
                            $remark =
                                mysqli_real_escape_string($con, $_POST['remark']);
                            $current_date = new DateTime();
                            $date = date_format($current_date, "Y-m-d H:i:s");
                            if (!empty($_FILES["book_cover"]["name"])) {
                                // Get file info 
                                $fileName = basename($_FILES["book_cover"]["name"]);
                                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                                // Allow certain file formats 
                                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                                if (in_array($fileType, $allowTypes)) {
                                    $image = $_FILES['book_cover']['tmp_name'];
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
                                // }
                            }
                            if (strlen($comp_name) < 3) {
                                $msg = $msg . "Organisation name must be more than 3 characters length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($head_name) < 3) {
                                $msg = $msg . "Name must be more than 3 characters length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($head_mobile) < 10) {
                                $msg = $msg . "Phone No. should be 10 digits.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($head_email) < 3) {
                                $msg = $msg . "Email must be more than 3 characters length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($head_site) < 5) {
                                $msg = $msg . "Website address should be more than 5 characters length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($prsn_name) < 3) {
                                $msg = $msg . "Contact person name must be more than 3 char length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($prsn_mobile) < 10) {
                                $msg = $msg . "Contact person phone No. should 10 digits.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($prsn_email) < 3) {
                                $msg = $msg . "Contact person email must be more than 3 characters length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($whatsapp) < 10) {
                                $msg = $msg . "WhatsApp No. should be 10 digits.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($book_lang) < 3) {
                                $msg = $msg . "Please mention language(s) in which books are published.<BR>";
                                $status = "NOTOK";
                            }
                            $errormsg = "";
                            if ($status == "NOTOK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                    $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                            } else {
                                if ($user_id && $user_profile['id']) {
                                    if ((!$imgContent) && $logo) {
                                        $query = "UPDATE users_profile SET org_name = '$comp_name', estb_year = '$estb_year', reg_no = '$reg_no', gst_no = '$gst_no', book_lang = '$book_lang', title_no = '$title_no', org_nature = '$org_nature', mgr_house_name = '$mgr_pub_hse', head_org_name = '$head_name', head_org_addr = '$head_addr', head_org_mobile = '$head_mobile', head_org_email = '$head_email', head_org_website = '$head_site', cntct_prsn_name = '$prsn_name', cntct_prsn_addr = '$prsn_addr', cntct_prsn_mobile = '$prsn_mobile', cntct_prsn_email = '$prsn_email', cntct_prsn_watsapp = '$whatsapp', status = 'E', updated_at = '$date', fascia = '$fascia', remarks = '$remark' WHERE user_id = '$user_id'";
                                    } else {
                                        $query = "UPDATE users_profile SET org_name = '$comp_name', estb_year = '$estb_year', reg_no = '$reg_no', gst_no = '$gst_no', book_lang = '$book_lang', title_no = '$title_no', org_nature = '$org_nature', mgr_house_name = '$mgr_pub_hse', head_org_name = '$head_name', head_org_addr = '$head_addr', head_org_mobile = '$head_mobile', head_org_email = '$head_email', head_org_website = '$head_site', cntct_prsn_name = '$prsn_name', cntct_prsn_addr = '$prsn_addr', cntct_prsn_mobile = '$prsn_mobile', cntct_prsn_email = '$prsn_email', cntct_prsn_watsapp = '$whatsapp', status = 'E', updated_at = '$date', fascia = '$fascia', remarks = '$remark', logo = '$imgContent' WHERE user_id = '$user_id'";
                                    }
                                } else {
                                    $query = "INSERT INTO users_profile (org_name, estb_year, reg_no, gst_no, book_lang, title_no, org_nature, mgr_house_name, head_org_name, head_org_addr, head_org_mobile, head_org_email, head_org_website, cntct_prsn_name, cntct_prsn_addr, cntct_prsn_mobile, cntct_prsn_email, cntct_prsn_watsapp, status, updated_at, fascia, remarks, user_id, logo) VALUES ('$comp_name', '$estb_year', '$reg_no', '$gst_no', '$book_lang', '$title_no', '$org_nature', '$mgr_pub_hse', '$head_name', '$head_addr', '$head_mobile', '$head_email', '$head_site', '$prsn_name', '$prsn_addr', '$prsn_mobile', '$prsn_email', '$whatsapp', 'E', '$date', '$fascia', '$remark', '$user_id', '$imgContent')";
                                }
                                $result = mysqli_query($con, $query);
                                if ($result) {
                                    $errormsg = "
                              <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your Profile Details is Successfully Saved. Proceed with stall(s) booking.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                              
                               ";
                                    $sql1 = "SELECT * FROM users_profile WHERE user_id = ?;";
                                    $stmt1 = $con->prepare($sql1);
                                    $stmt1->bind_param("s", $user_id);
                                    $stmt1->execute();
                                    $result1 = $stmt1->get_result();
                                    $user_profile = $result1->fetch_assoc();
                                    $comp_name = $user_profile['org_name'];
                                    $estb_year = $user_profile['estb_year'];
                                    $reg_no = $user_profile['reg_no'];
                                    $gst_no = $user_profile['gst_no'];
                                    $book_lang = $user_profile['book_lang'];
                                    $title_no = $user_profile['title_no'];
                                    $org_nature = $user_profile['org_nature'];
                                    $mgr_pub_hse = $user_profile['mgr_house_name'];
                                    $head_name = $user_profile['head_org_name'];
                                    $head_addr = $user_profile['head_org_addr'];
                                    $head_mobile = $user_profile['head_org_mobile'];
                                    $head_email = $user_profile['head_org_email'];
                                    $head_site = $user_profile['head_org_website'];
                                    $prsn_name = $user_profile['cntct_prsn_name'];
                                    $prsn_addr = $user_profile['cntct_prsn_addr'];
                                    $prsn_mobile = $user_profile['cntct_prsn_mobile'];
                                    $prsn_email = $user_profile['cntct_prsn_email'];
                                    $whatsapp = $user_profile['cntct_prsn_watsapp'];
                                    $fascia = $user_profile['fascia'];
                                    $remark = $user_profile['remarks'];
                                    $logo = base64_encode($user_profile['logo']);
                                    if ($org_nature == 'A') {
                                        $select0 = '';
                                        $selecta = 'selected';
                                        $selectp = '';
                                    } else if ($org_nature == 'P') {
                                        $select0 = '';
                                        $selecta = '';
                                        $selectp = 'selected';
                                    } else {
                                        $select0 = 'selected';
                                        $selecta = '';
                                        $selectp = '';
                                    }
                                    if (!$logo) {
                                        $hide = "";
                                    } else {
                                        $hide = "hidden";
                                    }
                                } else {
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
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    print $errormsg;
                                }
                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row bg-grey">

                                        <div class="col-6">

                                            <label> *Book Title</label>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="book_title" id="book_title" placeholder="*Book Title" required="required" value="<?= $book_title; ?>" <?= $edit; ?>>
                                            </div>
                                            <br>
                                            <label>Book Genere</label>
                                            <div class="form-group">
                                                <select class="form-control form-group" name="book_genere" id="book_genere" required="required" onchange="enterPublisher();" style="height:35px;" <?= $edit; ?>>
                                                    <option value="0" <?= $select0; ?>>Select</option>
                                                    <option value="P" <?= $selectp; ?>>Novel</option>
                                                    <option value="A" <?= $selecta; ?>>Drama</option>
                                                    <option value="P" <?= $selectp; ?>>Short Story</option>
                                                    <option value="A" <?= $selecta; ?>>Poetry</option>
                                                    <option value="P" <?= $selectp; ?>>Non-Fiction</option>
                                                    <option value="A" <?= $selecta; ?>>Essay</option>
                                                    <option value="P" <?= $selectp; ?>>History</option>
                                                    <option value="A" <?= $selecta; ?>>Childrens Literature</option>
                                                    <option value="P" <?= $selectp; ?>>Biography</option>
                                                    <option value="A" <?= $selecta; ?>>Auto Biography</option>
                                                    <option value="P" <?= $selectp; ?>>Others</option>
                                                </select>
                                            </div><br><br>
                                            <label>*Releasing by</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="release_by" id="release_by" placeholder="*Releasing by" required="required" value="<?= $head_email; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label>*Guest 1</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="guest1" id="guest1" placeholder="*Guest 1" required="required" value="<?= $head_email; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label>*Guest 3</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="guest3" id="guest3" placeholder="*Guest 3" required="required" value="<?= $head_email; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label> *Mobile</label>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="*Mobile" required="required" value="<?= $head_site; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label>*Date Preferring</label>
                                            <div class="form-group">
                                                <?php
                                                $day_query = "SELECT * FROM event_date";
                                                $day_stmt = $con->prepare($day_query);
                                                $day_stmt->execute();
                                                $day_result = $day_stmt->get_result();
                                                $event_days = $day_result->fetch_all();
                                                ?>
                                                <select class="form-control form-group" name="date_prefering" id="date_prefering" required="required" style="height:35px;">
                                                    <option value="0" <?= $select0; ?>>Select Date Preferring</option>
                                                    <?php foreach ($event_days as $event_day) { ?>
                                                        <option value="<?= $event_day[0] ?>"><?= $event_day[1]; ?> - <?= $event_day[2]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>*Author</label>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="author" id="author" placeholder="*Author" required="required" value="<?= $prsn_name; ?>" <?= $edit; ?>>
                                            </div>
                                            <br><label> *Brief Description</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="brief_descrptn" id="brief_descrptn" placeholder="*Description" required="required" <?= $edit; ?>><?= $brief_descrptn; ?></textarea>
                                            </div><br>
                                            <label>*Received by</label>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="recvd_by" id="recvd_by" placeholder="*Received by" required="required" value="<?= $head_email; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label>*Guest 2</label>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="guest2" id="guest2" placeholder="*Guest 2" required="required" value="<?= $head_email; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label> *Contact Person</label>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="bkrls_contact" id="bkrls_contact" placeholder="*Contact Person" required="required" value="<?= $prsn_email; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <label>*Email</label>
                                            <div class="form-group">

                                                <input type="email" class="form-control" name="bkrls_email" id="bkrls_email" placeholder="*Email" required="required" min="0" value="<?= $prsn_mobile; ?>" <?= $edit; ?>>
                                            </div><br>
                                            <div class="row">
                                                <label> *Time Preferring</label>
                                                <div class="form-group">
                                                    <?php
                                                    $slot_query = "SELECT * FROM time_slot";
                                                    $slot_stmt = $con->prepare($slot_query);
                                                    $slot_stmt->execute();
                                                    $slot_result = $slot_stmt->get_result();
                                                    $event_slots = $slot_result->fetch_all();
                                                    ?>

                                                    <select class="form-control form-group" name="time_prefer" id="time_prefer" required="required" style="height:35px;">
                                                        <option value="0" <?= $select0; ?>>Select Proposed Event Day</option>
                                                        <?php foreach ($event_slots as $event_slot) { ?>
                                                            <option value="<?= $event_slot[0] ?>"><?= $event_slot[1]; ?> - <?= $event_slot[2]; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            </br>
                                            <label>*Please upload Book Cover<br>
                                                (Only JPG, JPEG, PNG files are allowed for uploads.)</label>
                                        </div>
                                        <div class="form-group col-6">
                                            </br>
                                            <input type="file" class="form-control" name="book_cover" id="book_cover" placeholder="*Upload Logo" <?= $hide; ?> <?= $edit; ?>><br>
                                            <label id="book_cover_lab">
                                                <img src="data:image/jpg;charset=utf8;base64,<?= $book_cover; ?>" height="70vh" id="book_cover_img" <?= $edit; ?>>
                                            </label>

                                            <span id="changebook_cover" onclick="changeLogo();" <?= $edit; ?>><u>Change Book Cover</u></span>

                                            <!-- <input type="file" class="form-control" name="book_cover" id="book_cover" placeholder="*Upload Logo"> -->
                                        </div>
                                        <label>Remarks / Other information</label>
                                        <div class="form-group col-8">

                                            <input class="form-control" name="remark" id="remark" placeholder="Remarks / Other information" value="<?= $remark; ?>" <?= $edit; ?>>
                                        </div>
                                    </div><br>

                                    <div class="col-lg-12">

                                        <button type="submit" name="save" class="btn btn-primary" id="save">Save</button>
                                        <?php if ($user_profile) { ?>
                                            <button type="submit" class="btn btn-success" name="submit-form" id="submit-form">Submit</button>
                                        <?php } ?>
                                        <span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _URL = window.URL || window.webkitURL;
    // document.getElementById("book_cover").addEventListener("change", function(event) {
    //     var file;
    //     const fsize = this.files[0].size;
    //     if (fsize > 1048576) {
    //         alert("File size too big, please select a file less than 2MB");
    //         return false;
    //     }

    // });

    function changeLogo() {
        $("#book_cover").removeAttr('hidden');
        $("#book_cover_img").remove();
    }

    function sameCheck() {
        var sameval = document.getElementById("same-check").checked;
        if (sameval === true) {
            $("#prsn_name").val($("#book_title").val());
            $("#brief_descrptn").val($("#head_addr").val());
            $("#prsn_mobile").val($("#head_mobile").val());
            $("#prsn_email").val($("#head_email").val());
        } else {
            $("#prsn_name").val("");
            $("#brief_descrptn").val("");
            $("#prsn_mobile").val("");
            $("#prsn_email").val("");
        }
    }

    function sameCheckMob() {
        var samemob = document.getElementById("same-mobile").checked;
        if (samemob === true) {
            $("#whatsapp").val($("#prsn_mobile").val());
        } else {
            $("#whatsapp").val("");
        }
    }

    function enterPublisher() {
        var orgNature = $("#book_genere").val();
        if (orgNature !== 'P') {
            $("#mjr_pub_hse").show();
        } else {
            $("#mjr_pub_hse").hide();
        }
    }

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
    }

    // function checkTerm() {
    //     document.getElementById("terms").checked = false;
    //     document.getElementById("org_name_lab").innerHTML = $("#comp_name").val();
    //     document.getElementById("yers_lab").innerHTML = $("#estb_year").val();
    //     document.getElementById("reg_lab").innerHTML = $("#reg_no").val();
    //     document.getElementById("gst_lab").innerHTML = $("#gst_no").val();
    //     document.getElementById("lang_lab").innerHTML = $("#book_lang").val();
    //     document.getElementById("titl_lab").innerHTML = $("#title_no").val();
    //     document.getElementById("nature_new").innerHTML = "";
    //     var orgnature = $("#book_genere").val();
    //     if (orgnature === "P") {
    //         document.getElementById("natr_lab").innerHTML = "Publisher";
    //     } else if (orgnature === "A") {
    //         document.getElementById("natr_lab").innerHTML = "Publisher & Distributer";
    //         $('#preview-tab').find('#nature_new').append("<td><label>Major Publishing House(s) which are distributed</label></td><td colspan='2'><label>" + $('#mjr_pub_val').val() + "</label></td>");
    //     }
    //     document.getElementById("head_nam_lab").innerHTML = $("#book_title").val();
    //     document.getElementById("head_addr_lab").innerHTML = $("#head_addr").val();
    //     document.getElementById("head_mob_lab").innerHTML = $("#head_mobile").val();
    //     document.getElementById("head_email_lab").innerHTML = $("#head_email").val();
    //     document.getElementById("head_site_lab").innerHTML = $("#head_site").val();
    //     document.getElementById("prsn_nam_lab").innerHTML = $("#prsn_name").val();
    //     document.getElementById("brief_descrptn_lab").innerHTML = $("#brief_descrptn").val();
    //     document.getElementById("prsn_email_lab").innerHTML = $("#prsn_email").val();
    //     document.getElementById("prsn_mob_lab").innerHTML = $("#prsn_mobile").val();
    //     document.getElementById("prsn_wp_lab").innerHTML = $("#whatsapp").val();
    //     var stall3x3 = $("#stall3x3").val();
    //     var stall3x2 = $("#stall3x2").val();
    //     document.getElementById("3x3_lab").innerHTML = $("#stall3x3").val();
    //     document.getElementById("3x2_lab").innerHTML = $("#stall3x2").val();
    //     document.getElementById("3x2amt_lab").innerHTML = $("#amt3x2").val();
    //     document.getElementById("3x3amt_lab").innerHTML = $("#amt3x3").val();
    //     document.getElementById("fascia_lab").innerHTML = $("#fascia").val();
    //     document.getElementById("rmrk_lab").innerHTML = $("#remark").val();
    //     document.getElementById("book_cover_lab").innerHTML = $("#book_cover").val();
    //     $("#preview").modal({
    //         show: true
    //     });
    // }

    // document.getElementById("previewok").addEventListener("click", function(event) {
    //     event.preventDefault()
    //     var terms = document.getElementById("terms").checked;
    //     if (terms !== true) {
    //         alert("Please accept terms and conditions");
    //     } else {
    //         $("#preview-modal").modal('hide');
    //         $("#register").click();
    //     }
    // });

    $("#download").live("click", function() {
        var printWindow = window.open('', '', 'height=800,width=600');
        printWindow.document.write('<html><head><title>');
        printWindow.document.write('</title></head><body align="center">');
        printWindow.document.write('<img src="');
        printWindow.document.write('./assets/img/book_cover/header2.jpg');
        printWindow.document.write('" height="150" width="100%">');
        printWindow.document.write("<br><br><br><div align='center'>");
        printWindow.document.write("<table border='3'>");
        printWindow.document.write('<thead></thead><tbody><tr><th colspan="2">House / Organization</th></tr><tr><td>Name  <td>');
        printWindow.document.write($("#comp_name").val());
        printWindow.document.write('</td></tr><tr><td>Year of Establishment  </td><td>');
        printWindow.document.write($("#estb_year").val());
        printWindow.document.write('</td></tr><tr><td>Registration Number  </td><td>');
        printWindow.document.write($("#reg_no").val());
        printWindow.document.write('</td></tr><tr><td>GST Number  </td><td>');
        printWindow.document.write($("#gst_no").val());
        printWindow.document.write('</td></tr><tr><td>Language(s) in which books are published  </td><td>');
        printWindow.document.write($("#book_lang").val());
        printWindow.document.write('</td></tr><tr><td>Number of Titles Published  </td><td>');
        printWindow.document.write($("#title_no").val());
        printWindow.document.write('</td></tr><tr><td>Nature of Organization  </td><td>');
        var book_genere = $("#book_genere").val();
        if (book_genere == 'P') {
            printWindow.document.write('Publisher');
        } else {
            printWindow.document.write('Publisher & Distributer</td></tr><tr><td>Major Publishing House(s) which are distributed  </td><td>');
            printWindow.document.write($("#mjr_pub_val").val());
        }
        printWindow.document.write('</td></tr><tr><th colspan="2">Head of the Publishing House / Organization</th></tr><tr><td>Name  </td><td>');
        printWindow.document.write($("#book_title").val());
        printWindow.document.write('</td></tr><tr><td>Address  </td><td>');
        printWindow.document.write($("#head_addr").val());
        printWindow.document.write('</td></tr><tr><td>Email ID  </td><td>');
        printWindow.document.write($("#head_email").val());
        printWindow.document.write('</td></tr><tr><td>Website  </td><td>');
        printWindow.document.write($("#head_site").val());
        printWindow.document.write('</td></tr><tr><td>Mobile Number  </td><td>');
        printWindow.document.write($("#head_mobile").val());
        printWindow.document.write('</td></tr><tr><th colspan="2">Contact (In-charge) Person for the Fair</th></tr><tr><td>Name  </td><td>');
        printWindow.document.write($("#prsn_name").val());
        printWindow.document.write('</td></tr><tr><td>Address  </td><td>');
        printWindow.document.write($("#brief_descrptn").val());
        printWindow.document.write('</td></tr><tr><td>Email ID  </td><td>');
        printWindow.document.write($("#prsn_email").val());
        printWindow.document.write('</td></tr><tr><td>Mobile Number  </td><td>');
        printWindow.document.write($("#prsn_mobile").val());
        printWindow.document.write('</td></tr><tr><td>WhatsApp Number  </td><td>');
        printWindow.document.write($("#whatsapp").val());
        printWindow.document.write('</td></tr><tr><td>Estimated amount to remit (including GST)</td><td>');
        printWindow.document.write('₹.');
        printWindow.document.write($("#totamt").val());
        printWindow.document.write('/-</td></tr><tr><td>FASCIA Text  </td><td>');
        printWindow.document.write($("#fascia").val());
        printWindow.document.write('</td></tr><tr><td>Remarks  </td><td>');
        printWindow.document.write($("#remark").val());
        printWindow.document.write('</td></tr><tr><td>Logo  </td><td>');
        const [file] = book_cover.files
        if (file) {
            printWindow.document.write('<img id = "blah" height="50px" width="100px" src = "');
            printWindow.document.write(URL.createObjectURL(file));
            printWindow.document.write('" alt = "your image " />');
        }
        printWindow.document.write('<img src="');
        printWindow.document.write('">');
        printWindow.document.write('</tr></tr></tbody></table>');
        printWindow.document.write("</div>");
        printWindow.document.write('</body></html>');
        printWindow.document.close();
    });
</script>