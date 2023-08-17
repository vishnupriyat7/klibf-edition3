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

                                            <h2 class="text-center">Sample Form</h2>
                                            <form class="form-horizontal">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Partner Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Partner Legal Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Partner Email ID</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">Partner Mobile</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">Partner Address</label>
                                                        <div class="col-sm-10">
                                                            <textarea type="text" class="form-control" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div> -->


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Contract Start Date</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="date-start ml-5 form-control datepicker" placeholder="Date Start">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Contract Expiry Date</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="date-end ml-5 form-control datepicker col-sm-8" placeholder="Date End">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Minimum Loan Amount</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Maximum Loan Amount</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Interest Rate</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Deposit Amount</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="text-center">
                                                    <button class="btn btn-primary waves-effect waves-light " id="btn-submit">Save</button>
                                                </div> -->
                                                <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" />
                                            </form>
                                        </div><br>
                                        <!-- <div class="col-12">
                                            <button class="btn btn-bordered active btn-block mt-3" id="preview_btn" onclick="checkTerm();"><span class="text-white pr-3"><i class="fa fa-eye"></i></span>Preview</button>
                                            <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save" id="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Save</button>
                                        </div> -->
                                        <div class="col-lg-12">

                                            <button type="submit" name="save" class="btn btn-primary" id="save">Save</button>
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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var _URL = window.URL || window.webkitURL;
        // document.getElementById("logo").addEventListener("change", function(event) {
        //     var file;
        //     const fsize = this.files[0].size;
        //     if (fsize > 1048576) {
        //         alert("File size too big, please select a file less than 2MB");
        //         return false;
        //     }

        // });

        function changeLogo() {
            $("#logo").removeAttr('hidden');
            $("#logo_img").remove();
        }

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
        //     var orgnature = $("#org_nature").val();
        //     if (orgnature === "P") {
        //         document.getElementById("natr_lab").innerHTML = "Publisher";
        //     } else if (orgnature === "A") {
        //         document.getElementById("natr_lab").innerHTML = "Publisher & Distributer";
        //         $('#preview-tab').find('#nature_new').append("<td><label>Major Publishing House(s) which are distributed</label></td><td colspan='2'><label>" + $('#mjr_pub_val').val() + "</label></td>");
        //     }
        //     document.getElementById("head_nam_lab").innerHTML = $("#head_name").val();
        //     document.getElementById("head_addr_lab").innerHTML = $("#head_addr").val();
        //     document.getElementById("head_mob_lab").innerHTML = $("#head_mobile").val();
        //     document.getElementById("head_email_lab").innerHTML = $("#head_email").val();
        //     document.getElementById("head_site_lab").innerHTML = $("#head_site").val();
        //     document.getElementById("prsn_nam_lab").innerHTML = $("#prsn_name").val();
        //     document.getElementById("prsn_addr_lab").innerHTML = $("#prsn_addr").val();
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
        //     document.getElementById("logo_lab").innerHTML = $("#logo").val();
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
            printWindow.document.write('./assets/img/logo/header2.jpg');
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
            var org_nature = $("#org_nature").val();
            if (org_nature == 'P') {
                printWindow.document.write('Publisher');
            } else {
                printWindow.document.write('Publisher & Distributer</td></tr><tr><td>Major Publishing House(s) which are distributed  </td><td>');
                printWindow.document.write($("#mjr_pub_val").val());
            }
            printWindow.document.write('</td></tr><tr><th colspan="2">Head of the Publishing House / Organization</th></tr><tr><td>Name  </td><td>');
            printWindow.document.write($("#head_name").val());
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
            printWindow.document.write($("#prsn_addr").val());
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
            const [file] = logo.files
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