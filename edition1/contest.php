<section id="contact" class="contact-area ptb_50">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class=" section-heading text-center mb-3">
                    <h2>Register Now!</h2>
                </div>
                <!-- Register Box -->
                <div class="contact-box text-center">
                    <p> Read the <a href="terms&condition.php" target="_blank"><span style="color:blue"> &nbsp;Rules & Regulations</span> </a> before submitting.
                    </p>
                    <!-- Register Form -->
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
                            mysqli_real_escape_string($con, $_POST['mjr_pub_hse']);
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
                        $current_date = (new \DateTime())->format('Y-m-d H:i:s');
                        $uploads_dir = 'logo-upload';
                        $tmp_name = $_FILES["logo"]["tmp_name"];
                        // basename() may prevent filesystem traversal attacks;
                        // further validation/sanitation of the filename may be appropriate
                        $name = basename($_FILES["logo"]["name"]);
                        $ext = end((explode(".", $name)));
                        $size = $_FILES['logo']['size'];
                        $ext_array = array("png", "jpeg", "jpg");
                        if (!in_array($ext, $ext_array)) {
                            $msg = $msg . "Logo format doesnot match.<BR>";
                            $status = "NOTOK";
                        }
                        if ($size > 1048576) {
                            $msg = $msg . "File size too big. Please select another file to upload.<BR>";
                            $status = "NOTOK";
                        }
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
                            $query = "INSERT INTO book_stall (org_name, estb_year, reg_no, gst_no, book_lang, title_no, org_nature, mgr_house_name, head_org_name, head_org_addr, head_org_mobile, head_org_email, head_org_website, cntct_prsn_name, cntct_prsn_addr, cntct_prsn_mobile, cntct_prsn_email, cntct_prsn_watsapp, stalls_3x3, status, date, logo, fascia, remarks) VALUES ('$comp_name', '$estb_year', '$reg_no', '$gst_no', '$book_lang', '$title_no', '$org_nature', '$mgr_pub_hse', '$head_name', '$head_addr', '$head_mobile', '$head_email', '$head_site', '$prsn_name', '$prsn_addr', '$prsn_mobile', '$prsn_email', '$whatsapp', '$stall3x3', 'E', '$current_date', '$new_file_name', '$fascia', '$remark')";
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
                            <div class="form-group col-12">
                                <label><b>House / Organization</b></label>
                            </div>
                            <div class="form-group col-8">
                                <input type="text" class="form-control" name="comp_name" placeholder="*Name" id="comp_name" onchange="termName();">
                            </div>
                            <div class="form-group col-4">
                                <input type="text" class="form-control" name="estb_year" id="estb_year" placeholder="*Year of Establishment" required="required">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Register No.">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="GST No.">
                            </div>
                            <div class="form-group col-4">
                                <input type="text" class="form-control" name="title_no" id="title_no" placeholder="*No.of Titles Published" required="required">
                            </div>
                            <div class="form-group col-8">
                                <input type="text" class="form-control" name="book_lang" id="book_lang" placeholder="*Language(s) in which books are published" required="required">
                            </div>
                            <div class="form-group col-12">
                                <label><b>Nature of Organization</b></label>
                            </div>
                            <div class="row col-12">
                                <div class="form-group col-4">
                                    <select class="form-control form-group" name="org_nature" id="org_nature" required="required" onchange="enterPublisher();" style="height:35px;">
                                        <option value="0">Select</option>
                                        <option value="P">Publisher</option>
                                        <option value="A">Publisher & Distributor</option>
                                    </select>
                                </div>
                                <div class="form-group col-8" id="mjr_pub_hse" style="display: none">
                                    <input id="mjr_pub_val" class="form-control" name="mgr_hse_nme" placeholder="Mention the name of the major Publishing House(s) which are distributed">
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label><b>Head of the Publishing House / Organization</b></label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="head_name" id="head_name" placeholder="*Name" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="head_addr" id="head_addr" placeholder="*Address" required="required"></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="head_email" id="head_email" placeholder="*Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="head_site" id="head_site" placeholder="*Website" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="head_mobile" id="head_mobile" placeholder="*Mobile" required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label><b>Contact (In-charge) person for the fair </b></label>
                                    <input type="checkbox" name="same-check" id="same-check" onclick="sameCheck();">
                                    <label for="same-check"> Same as above</label>
                                </div>
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
                                <div class="row">
                                    <div class="form-group col-8">
                                        <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="*WhatsApp No." required="required">
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="same-mobile" id="same-mobile" onclick="sameCheckMob();">
                                        <label for="same-mobile">Same as mobile</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label>Cubicle size availabe is 3m X 3m. Rate per unit is ₹.1000/- + 18% GST.</label>
                            </div>
                            <div class="form-group col-2">
                                <input type="text" class="form-control" name="stall3x3" placeholder="No. of stalls required" required="required" id="stall3x3" onchange="amount3x3();">
                            </div>
                            <div class="form-group col-8 text-left">
                                <label id="rateamt"></label>
                                <input type="text" id="rate_amt" value="" hidden>
                            </div>
                            <div class="col-6">
                                <label>Please upload Logo of Publishing House / Organization</label>
                            </div>
                            <div class="form-group col-6">
                                <input type="file" class="form-control" name="logo" id="logo" placeholder="*Upload Logo" required="required">
                            </div>
                            <div class="form-group col-4">
                                <input type="text" class="form-control" name="fascia" id="fascia" placeholder="*FASCIA" required="required">
                            </div>
                            <div class="form-group col-8">
                                <input class="form-control" name="remark" id="remark" placeholder="Remarks / Other information">
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-bordered active btn-block mt-3" id="preview_btn" onclick="checkTerm();"><span class="text-white pr-3"><i class="fa fa-eye"></i></span>Preview</button>
                            <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save" id="register" hidden><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Register</button>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
</section>

<div id="preview-modal" class="modal fade" role="dialog">
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
                <button type="button" class="btn btn-success" onclick="previewok();" id="previewok">Register</button>
                <button type=" button" class="btn btn-default" data-dismiss="modal">Edit</button>
            </div>
        </div>

    </div>
</div>

<div id="term-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title float-left">Rules & Regulations</h4>
                <button type="button" class="close" data-dismiss="modal"><span style="font-size:48px;color:red">&times;</span></button>&nbsp;
            </div>
            <div class="modal-body">
                <?php include "terms&condition.php"; ?>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-success" onclick="previewok();" id="previewok">Register</button> -->
                <button type=" button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _URL = window.URL || window.webkitURL;
    document.getElementById("logo").addEventListener("change", function(event) {
        var file;
        const fsize = this.files[0].size;
        if (fsize > 1048576) {
            alert("File size too big, please select a file less than 2MB");
            return false;
        }

    });

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

    function amount3x3() {
        var amt3x3 = 1000;
        var stall_count3x3 = $("#stall3x3").val();
        var tot_amt3x3 = (stall_count3x3 * amt3x3) + (amt3x3 * stall_count3x3 * 18) / 100;
        $("#rate_amt").val(tot_amt3x3);
        document.getElementById("rateamt").innerHTML = "Your estimated amount for <b>" + stall_count3x3 + "</b> stall is <b>₹." + tot_amt3x3 + "/-</b> only.";
    }

    document.getElementById("preview_btn").addEventListener("click", function(event) {
        event.preventDefault()
        document.getElementById("org_name_lab").innerHTML = $("#comp_name").val();
        $("#org_name_prv").val($("#comp_name").val());
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
        document.getElementById("3x3_lab").innerHTML = $("#stall3x3").val();
        document.getElementById("3x3amt_lab").innerHTML = $("#rate_amt").val();
        document.getElementById("fascia_lab").innerHTML = $("#fascia").val();
        document.getElementById("rmrk_lab").innerHTML = $("#remark").val();
        var logo_file = $("#logo").val();
        var pathname = new URL(logo_file).pathname;
        document.getElementById("logo_lab").innerHTML = logo_file.split("fakepath");
        document.getElementById("org_name_term").innerHTML = $("#comp_name").val();
        $("#preview-modal").modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    });

    document.getElementById("previewok").addEventListener("click", function(event) {
        event.preventDefault()
        var terms = document.getElementById("terms").checked;
        if (terms !== true) {
            alert("Please accept terms and conditions");
        } else {
            $("#preview-modal").modal('hide');
            $("#register").click();
        }
    });

    $("#download").live("click", function() {
        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head><title>Kerala Legislature International Book Festival - 2022</title>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<table class="table table-striped"><thead>Stall Booking Preview</thead><tbody><tr><th colspan="2">House / Organization</th></tr><tr><td>Name : <td>');
        printWindow.document.write($("#comp_name").val());
        printWindow.document.write('</td></tr><tr><td>Year of Establishment : </td><td>');
        printWindow.document.write($("#estb_year").val());
        printWindow.document.write('</td></tr><tr><td>Registration Number : </td><td>');
        printWindow.document.write($("#reg_no").val());
        printWindow.document.write('</td></tr><tr><td>GST Number : </td><td>');
        printWindow.document.write($("#gst_no").val());
        printWindow.document.write('</td></tr><tr><td>Language(s) in which books are published : </td><td>');
        printWindow.document.write($("#book_lang").val());
        printWindow.document.write('</td></tr><tr><td>Number of Titles Published : </td><td>');
        printWindow.document.write($("#title_no").val());
        printWindow.document.write('</td></tr><tr><td>Nature of Organization : </td><td>');
        var org_nature = $("#org_nature").val();
        if (org_nature == 'P') {
            printWindow.document.write('Publisher');
        } else {
            printWindow.document.write('Publisher & Distributer</td></tr><tr><td>Major Publishing House(s) which are distributed : </td><td>');
            printWindow.document.write($("#mjr_pub_hse").val());
        }
        printWindow.document.write('</td></tr><tr><th colspan="2">Head of the Publishing House / Organization</th></tr><tr><td>Name : </td>');
        printWindow.document.write($("#head_name").val());
        printWindow.document.write('</td></tr><tr><td>Address : </td><td>');
        printWindow.document.write($("#head_addr").val());
        printWindow.document.write('</td></tr><tr><td>Email ID : </td><td>');
        printWindow.document.write($("#head_email").val());
        printWindow.document.write('</td></tr><tr><td>Website : </td><td>');
        printWindow.document.write($("#head_site").val());
        printWindow.document.write('</td></tr><tr><td>Mobile Number : </td><td>');
        printWindow.document.write($("#head_mobile").val());
        printWindow.document.write('</td></tr><tr><th colspan="2">Contact (In-charge) Person for the Fair</th></tr><tr><td>Name : </td>');
        printWindow.document.write($("#prsn_name").val());
        printWindow.document.write('</td></tr><tr><td>Address : </td><td>');
        printWindow.document.write($("#prsn_addr").val());
        printWindow.document.write('</td></tr><tr><td>Email ID : </td><td>');
        printWindow.document.write($("#prsn_email").val());
        printWindow.document.write('</td></tr><tr><td>Mobile Number : </td><td>');
        printWindow.document.write($("#prsn_mobile").val());
        printWindow.document.write('</td></tr><tr><td>WhatsApp Number : </td><td>');
        printWindow.document.write($("#whatsapp").val());
        printWindow.document.write('</td></tr><tr><th colspan="2">Other Informations</th></tr><tr><td>Number of Stalls Required : </td><td>');
        printWindow.document.write($("#stall3x3").val());
        printWindow.document.write('</td></tr><tr><td>Estimated amount to remit (including GST): ₹.</td><td>');
        printWindow.document.write($("#rate_amt").val());
        printWindow.document.write('/-</td></tr><tr><td>FASCIA Text : </td><td>');
        printWindow.document.write($("#fascia").val());
        printWindow.document.write('</td></tr><td>Remarks : </td><td>');
        printWindow.document.write($("#remark").val());
        printWindow.document.write('</td></tr><tr><td>jgkjgk')
        printWindow.document.write('</td></tr></tbody></table>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    });
</script>