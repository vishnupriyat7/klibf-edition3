<section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-5">
                <!-- Terms-Condition Start-->
                <?php include "terms_condition_page.php"; ?>
                <!-- Terms-Condition End -->
            </div>
            <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                <div class="section-heading text-center mb-3">
                    <h2>Register Here!</h2>
                    <!-- <p class="d-none d-sm-block mt-4"><?php print $contact_text ?></p> -->
                </div>
                <!-- Contact Box -->
                <div class="contact-box text-center">
                    <!-- Contact Form -->
                    <?php
                    $status = "OK";
                    $msg = "";
                    if (isset($_POST['save'])) {
                        $comp_name =
                            mysqli_real_escape_string($con, $_POST['comp_name']);
                        $estb_year =
                            mysqli_real_escape_string($con, $_POST['estb_year']);
                        $reg_no =
                            mysqli_real_escape_string($con, $_POST['reg_no']);
                        $gst_no =
                            mysqli_real_escape_string($con, $_POST['gst_no']);
                        $book_lang =
                            mysqli_real_escape_string($con, $_POST['book_lang']);
                        $title_no =
                            mysqli_real_escape_string($con, $_POST['title_no']);
                        $org_nature =
                            mysqli_real_escape_string($con, $_POST['org_nature']);
                        $mgr_pub_hse =
                            mysqli_real_escape_string($con, $_POST['mgr_pub_hse']);
                        $head_name =
                            mysqli_real_escape_string($con, $_POST['head_name']);
                        $head_addr =
                            mysqli_real_escape_string($con, $_POST['head_addr']);
                        $head_mobile =
                            mysqli_real_escape_string($con, $_POST['head_mobile']);
                        $head_email =
                            mysqli_real_escape_string($con, $_POST['head_email']);
                        $head_site =
                            mysqli_real_escape_string($con, $_POST['head_site']);
                        $prsn_name =
                            mysqli_real_escape_string($con, $_POST['prsn_name']);
                        $prsn_addr =
                            mysqli_real_escape_string($con, $_POST['prsn_addr']);
                        $prsn_mobile =
                            mysqli_real_escape_string($con, $_POST['prsn_mobile']);
                        $prsn_email =
                            mysqli_real_escape_string($con, $_POST['prsn_email']);
                        $whatsapp =
                            mysqli_real_escape_string($con, $_POST['whatsapp']);
                        $stall3x3 =
                            mysqli_real_escape_string($con, $_POST['stall3x3']);
                        $stall3x2 =
                            mysqli_real_escape_string($con, $_POST['stall3x2']);
                        $fascia =
                            mysqli_real_escape_string($con, $_POST['fascia']);
                        $remark =
                            mysqli_real_escape_string($con, $_POST['remark']);
                        $current_date =
                            date("d-m-y");
                        $uploads_dir = 'logo-upload';
                        $tmp_name = $_FILES["logo"]["tmp_name"];
                        // basename() may prevent filesystem traversal attacks;
                        // further validation/sanitation of the filename may be appropriate
                        $name = basename($_FILES["logo"]["name"]);
                        $random_digit = rand(0000, 9999);
                        $new_file_name = "";
                        $new_file_name = $random_digit . $name;
                        move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");
                        if (strlen($comp_name) < 5) {
                            $msg = $msg . "Organisation Name Must Be More Than 5 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($head_name) < 5) {
                            $msg = $msg . "Name Must Be More Than 5 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($head_mobile) < 8) {
                            $msg = $msg . "Phone Must Be More Than 8 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($head_email) < 9) {
                            $msg = $msg . "Email Must Be More Than 10 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($head_site) < 9) {
                            $msg = $msg . "Email Must Be More Than 10 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($prsn_name) < 5) {
                            $msg = $msg . "Name Must Be More Than 5 Char Length.<BR>";
                        }
                        if (strlen($prsn_mobile) < 8) {
                            $msg = $msg . "Phone Must Be More Than 8 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($prsn_email) < 9) {
                            $msg = $msg . "Email Must Be More Than 10 Char Length.<BR>";
                            $status = "NOTOK";
                        }
                        if (strlen($whatsapp) < 8) {
                            $msg = $msg . "WhatsApp Number Must Be More Than 8 Char Length.<BR>";
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
                            $query = "INSERT INTO book_stall (org_name, estb_year, reg_no, gst_no, book_lang, title_no, org_nature, mgr_house_name, head_org_name, head_org_addr, head_org_mobile, head_org_email, head_org_website, cntct_prsn_name, cntct_prsn_addr, cntct_prsn_mobile, cntct_prsn_email, cntct_prsn_watsapp, stalls_3x3, stalls_3x2, status, date, logo, fascia, remarks) VALUES ('$comp_name', '$estb_year', '$reg_no', '$gst_no', '$book_lang', '$title_no', '$org_nature', '$mgr_pub_hse', '$head_name', '$head_addr', '$head_mobile', '$head_email', '$head_site', '$prsn_name', '$prsn_addr', '$prsn_mobile', '$prsn_email', '$whatsapp', '$stall3x2', '$stall3x3', 'E', '$current_date', '$new_file_name', '$fascia', '$remark')";
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
                        <div class=" row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label><b>House / Organization</b></label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="comp_name" placeholder="*Name" id="comp_name" onchange="termName();">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="estb_year" id="estb_year" placeholder="*Year of Establishment" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Register No.">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="GST No.">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="book_lang" id="book_lang" placeholder="*Language(s) in which books are published" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title_no" id="title_no" placeholder="*No.of Titles Published" required="required">
                                </div>
                                <div class="form-group">
                                    <label><b>Nature of Organization</b></label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="org_nature" id="org_nature" placeholder="*Nature of Organization" required="required" onchange="enterPublisher();">
                                        <option value="0">Select</option>
                                        <option value="P">Publisher</option>
                                        <!-- <option value="D">Distributor</option> -->
                                        <option value="A">Publisher & Distributor</option>
                                    </select>
                                </div>
                                <div class="form-group" id="mjr_pub_hse" style="display: none">
                                    <textarea id="mjr_pub_val" class="form-control" name="mgr_hse_nme" placeholder="Mention the name of the major Publishing House(s) which are distributed"></textarea>
                                </div>
                                <div class="form-group">
                                    <label><b>Head of the Publishing House / Organization</b></label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="head_name" id="head_name" placeholder="*Name" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="head_addr" id="head_addr" placeholder="*Address" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="head_mobile" id="head_mobile" placeholder="*Mobile" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="head_email" id="head_email" placeholder="*Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="head_site" id="head_site" placeholder="*Website" required="required">
                                </div>
                                <div class="form-group">
                                    <label><b>Contact (In-charge) person for the fair</b></label>
                                </div>
                                <input type="checkbox" name="same-check" id="same-check" onclick="sameCheck();">
                                <label for="same-check"> Same as above</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="prsn_name" id="prsn_name" placeholder="*Name" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="prsn_addr" id="prsn_addr" placeholder="*Address" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="prsn_email" id="prsn_email" placeholder="*Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="prsn_mobile" id="prsn_mobile" placeholder="*Mobile" required="required">
                                </div>
                                <input type="checkbox" name="same-mobile" id="same-mobile" onclick="sameCheckMob();">
                                <label for="same-mobile">Same as mobile</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="*Whatsapp No." required="required">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <input class="form-control font-weight-bold" value="Size of Stall" disabled>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control font-weight-bold" value="Fee (18% GST Extra)" disabled>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control font-weight-bold" value="No. Required *" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <input class="form-control" value="3m X 3m" disabled>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" value="00" id="amt3x3" disabled>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="stall3x3" placeholder="00" required="required" id="stall3x3" onchange="amount3x3();">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <input class="form-control" value="3m X 2m" disabled>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" value="00" id="amt3x2" disabled>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="stall3x2" id="stall3x2" placeholder="00" required="required" onchange="amount3x2();">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Logo of Publishing House / Organization (Upload)</label>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="logo" id="logo" placeholder="*Upload Logo" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fascia" id="fascia" placeholder="*FASCIA" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="remark" id="remark" placeholder="Remarks / Other information"></textarea>
                                </div>
                                <input type="checkbox" name="terms" required="required" class="text-justify" id="terms"> I/We, <span id="org_name_term"></span>, hereby agree to abide by the <a href="terms&condition.php" target="_blank"><span style="color:blue">Rules & Regulations</span> </a> of the Kerala Legislature International Book Festival 2022 (KLIBF 2022) given in the Terms and Conditions and as decided by the Kerala Legislature Secretariat from time to time.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-bordered active btn-block mt-3" onclick="checkTerm();"><span class="text-white pr-3"><i class="fa fa-eye"></i></span>Preview</button>
                            <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save" id="register" hidden><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Register</button>
                        </div>
                </div>
                </form>
                <p class="form-message"></p>
            </div>
        </div>
    </div>
    </div>
</section>

<div id="preview" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title float-left">Preview</h4>
                <button type="button" class="close" data-dismiss="modal"><span style="font-size:48px;color:red">&times;</span></button>&nbsp;

            </div>
            <div class="modal-body">
                <?php include "preview.php"; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function sameCheck() {
        var sameval = document.getElementById("same-check").checked;
        if (sameval === true) {
            $("#prsn_name").val($("#head_name").val());
            $("#prsn_addr").val($("#head_addr").val());
            $("#prsn_mobile").val($("#head_mobile").val());
            $("#prsn_email").val($("#head_email").val());
        } else {
            $("#prsn_name").val("");
            $("#prsn_addr").val("");
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
        var orgNature = $("#org_nature").val();
        if (orgNature !== 'P') {
            $("#mjr_pub_hse").show();
        } else {
            $("#mjr_pub_hse").hide();
        }
    }

    function amount3x2() {
        var amt3x2 = 1000;
        var stall_count3x2 = $("#stall3x2").val();
        var tot_amt3x2 = amt3x2 * stall_count3x2;
        $("#amt3x2").val(stall_count3x2 + ' X 1000 = ' + tot_amt3x2);
    }

    function amount3x3() {
        var amt3x3 = 2000;
        var stall_count3x3 = $("#stall3x3").val();
        var tot_amt3x3 = amt3x3 * stall_count3x3;
        $("#amt3x3").val(stall_count3x3 + ' X 2000 = ' + tot_amt3x3);
    }

    function termName() {
        document.getElementById("org_name_term").innerHTML = $("#comp_name").val();
    }

    function checkTerm() {
        document.getElementById("terms").checked = false;
        document.getElementById("org_name_lab").innerHTML = $("#comp_name").val();
        document.getElementById("yers_lab").innerHTML = $("#estb_year").val();
        document.getElementById("reg_lab").innerHTML = $("#reg_no").val();
        document.getElementById("gst_lab").innerHTML = $("#gst_no").val();
        document.getElementById("lang_lab").innerHTML = $("#book_lang").val();
        document.getElementById("titl_lab").innerHTML = $("#title_no").val();
        document.getElementById("nature_new").innerHTML = "";
        var orgnature = $("#org_nature").val();
        if (orgnature === "P") {
            document.getElementById("natr_lab").innerHTML = "Publisher";
        } else if (orgnature === "A") {
            document.getElementById("natr_lab").innerHTML = "Publisher & Distributer";
            $('#preview-tab').find('#nature_new').append("<td><label>Major Publishing House(s) which are distributed</label></td><td colspan='2'><label>" + $('#mjr_pub_val').val() + "</label></td>");
        }
        document.getElementById("head_nam_lab").innerHTML = $("#head_name").val();
        document.getElementById("head_addr_lab").innerHTML = $("#head_addr").val();
        document.getElementById("head_mob_lab").innerHTML = $("#head_mobile").val();
        document.getElementById("head_email_lab").innerHTML = $("#head_email").val();
        document.getElementById("head_site_lab").innerHTML = $("#head_site").val();
        document.getElementById("prsn_nam_lab").innerHTML = $("#prsn_name").val();
        document.getElementById("prsn_addr_lab").innerHTML = $("#prsn_addr").val();
        document.getElementById("prsn_email_lab").innerHTML = $("#prsn_email").val();
        document.getElementById("prsn_mob_lab").innerHTML = $("#prsn_mobile").val();
        document.getElementById("prsn_wp_lab").innerHTML = $("#whatsapp").val();
        var stall3x3 = $("#stall3x3").val();
        var stall3x2 = $("#stall3x2").val();
        document.getElementById("3x3_lab").innerHTML = $("#stall3x3").val();
        document.getElementById("3x2_lab").innerHTML = $("#stall3x2").val();
        document.getElementById("3x2amt_lab").innerHTML = $("#amt3x2").val();
        document.getElementById("3x3amt_lab").innerHTML = $("#amt3x3").val();
        document.getElementById("fascia_lab").innerHTML = $("#fascia").val();
        document.getElementById("rmrk_lab").innerHTML = $("#remark").val();
        document.getElementById("logo_lab").innerHTML = $("#logo").val();
        $("#preview").modal({
            show: true
        });
    }
</script>