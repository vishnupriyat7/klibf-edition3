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
                        <h4 class="mb-sm-0">Special Event Proposal</h4>
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

                        <div class="card-body p-4">
                            <div class="tab-content">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row d-flex bg-grey">

                                        <div class="form-group col-6">
                                            <label>Name of Event</label>
                                            <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Name of Event">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Dignitaries / Celebrities / Guests</label>
                                            <textarea class="form-control" name="dignitaries" id="dignitaries" placeholder="Dignitaries / Celebrities / Guests"></textarea>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Brief Description</label>
                                            <textarea class="form-control" name="brf_descrptn" id="brf_descrptn" placeholder="Description"></textarea>
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Contact Person Name</label>
                                            <input type="text" class="form-control" name="prsn_cntct" id="prsn_cntct" placeholder="Contact Person Name">
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Contact No.</label>
                                            <input type="text" class="form-control" name="spcl_mobile" id="spcl_mobile" placeholder="Contact No.">
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Email Id</label>
                                            <input type="email" class="form-control" name="spcl_email" id="spcl_email" placeholder="Email Id">
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Remarks / Other information</label>
                                            <input class="form-control" name="spcl_remark" id="spcl_remark" placeholder="Remarks / Other information">
                                        </div>
                                    </div><br>

                                    <div class="col-lg-12">

                                        <button type="submit" name="spcl_save" class="btn btn-primary" id="spcl_save">Save</button>
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
            $("#prsn_name").val($("#event_name").val());
            $("#dignitaries").val($("#head_addr").val());
            $("#prsn_mobile").val($("#head_mobile").val());
            $("#prsn_email").val($("#head_email").val());
        } else {
            $("#prsn_name").val("");
            $("#dignitaries").val("");
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
    //     document.getElementById("head_nam_lab").innerHTML = $("#event_name").val();
    //     document.getElementById("head_addr_lab").innerHTML = $("#head_addr").val();
    //     document.getElementById("head_mob_lab").innerHTML = $("#head_mobile").val();
    //     document.getElementById("head_email_lab").innerHTML = $("#head_email").val();
    //     document.getElementById("head_site_lab").innerHTML = $("#head_site").val();
    //     document.getElementById("prsn_nam_lab").innerHTML = $("#prsn_name").val();
    //     document.getElementById("dignitaries_lab").innerHTML = $("#dignitaries").val();
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
        var org_nature = $("#org_nature").val();
        if (org_nature == 'P') {
            printWindow.document.write('Publisher');
        } else {
            printWindow.document.write('Publisher & Distributer</td></tr><tr><td>Major Publishing House(s) which are distributed  </td><td>');
            printWindow.document.write($("#mjr_pub_val").val());
        }
        printWindow.document.write('</td></tr><tr><th colspan="2">Head of the Publishing House / Organization</th></tr><tr><td>Name  </td><td>');
        printWindow.document.write($("#event_name").val());
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
        printWindow.document.write($("#dignitaries").val());
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