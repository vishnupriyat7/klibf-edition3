<?php
ini_set('display_errors', 0);

include "../header.php";
include "sidebar.php";
// include $base_url . 'dashboard/publisher/sidebar.php';
// $user_id = $user['id'];
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
                        <h4 class="mb-sm-0">News Upload</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a class="dropdown-item" href="../logout.php"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Upload News</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%"> -->
                            <!-- <button onclick="exportTableToExcel('example', 'quiz_public_category_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button> -->
                            <?php


                            if (isset($_POST['save'])) {
                                $news_paper =
                                    mysqli_real_escape_string($con, $_POST['news_paper']);
                                $img_title =
                                    mysqli_real_escape_string($con, $_POST['img_title']);
                                $news_date =
                                    mysqli_real_escape_string($con, $_POST['news_date']);

                                $current_date = new DateTime();
                                $date = date_format($current_date, "Y-m-d H:i:s");
                                if (!empty($_FILES["img"]["name"])) {
                                    // Get the file name and type
                                    $fileName = basename($_FILES["img"]["name"]);
                                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                                    // Allow certain file formats 
                                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                                    if (in_array($fileType, $allowTypes)) {
                                        // Set the target directory where you want to save the imag
                                        $targetDir = "news_uploads/";
                                        // Generate a unique file name to avoid overwriting
                                        // $newFileName = uniqid() . '.' . $fileType;
                                        $newFileName =    $news_paper .  $news_date .  '-' . uniqid() . '.' . $fileType;
                                        // Set the target file path
                                        $targetFilePath = $targetDir . $newFileName;
                                        // Upload file to the target directory
                                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
                                            // File successfully uploaded, now save the file path into the database
                                            $filePathForDB = addslashes($targetFilePath); // Add slashes for safety in SQL

                                            // Your database code here, use $filePathForDB to save the file path to DB
                                            // Example: $sql = "INSERT INTO your_table_name (image_path) VALUES ('$filePathForDB')";

                                            // $msg = 'File uploaded and path saved successfully.';
                                            $status = "OK";
                                        } else {
                                            // If file upload failed
                                            $msg = 'Sorry, there was an error uploading your file.';
                                            $status = "NOTOK";
                                        }
                                    } else {
                                        $msg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                                        $status = "NOTOK";
                                    }
                                } else {
                                    if (!$img) {
                                        $msg = 'Please select an image file to upload.';
                                        $status = "NOTOK";
                                    }
                                }

                                // if (strlen($comp_name) < 3) {
                                //     $msg = $msg . "Organisation name must be more than 3 characters length.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($head_name) < 3) {
                                //     $msg = $msg . "Name must be more than 3 characters length.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($head_mobile) < 10) {
                                //     $msg = $msg . "Phone No. should be 10 digits.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($head_email) < 3) {
                                //     $msg = $msg . "Email must be more than 3 characters length.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($head_site) < 5) {
                                //     $msg = $msg . "Website address should be more than 5 characters length.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($prsn_name) < 3) {
                                //     $msg = $msg . "Contact person name must be more than 3 char length.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($prsn_mobile) < 10) {
                                //     $msg = $msg . "Contact person phone No. should 10 digits.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($prsn_email) < 3) {
                                //     $msg = $msg . "Contact person email must be more than 3 characters length.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($whatsapp) < 10) {
                                //     $msg = $msg . "WhatsApp No. should be 10 digits.<BR>";
                                //     $status = "NOTOK";
                                // }
                                // if (strlen($book_lang) < 3) {
                                //     $msg = $msg . "Please mention language(s) in which books are published.<BR>";
                                //     $status = "NOTOK";
                                // }
                                $errormsg = "";
                                if ($status == "NOTOK") {
                                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                        $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                                }

                                // else {
                                //     if ($user_id && $user_profile['id']) {
                                //         if ((!$newFileName) && $img) {
                                //             $query = "UPDATE users_profile SET org_name = '$comp_name', estb_year = '$estb_year', reg_no = '$reg_no', gst_no = '$gst_no', book_lang = '$book_lang', title_no = '$title_no', org_nature = '$org_nature', mgr_house_name = '$mgr_pub_hse', head_org_name = '$head_name', head_org_addr = '$head_addr', head_org_mobile = '$head_mobile', head_org_email = '$head_email', head_org_website = '$head_site', cntct_prsn_name = '$prsn_name', cntct_prsn_addr = '$prsn_addr', cntct_prsn_mobile = '$prsn_mobile', cntct_prsn_email = '$prsn_email', cntct_prsn_watsapp = '$whatsapp', status = 'E', updated_at = '$date', fascia = '$fascia', remarks = '$remark' WHERE user_id = '$user_id'";
                                //         } else {
                                //             $query = "UPDATE users_profile SET org_name = '$comp_name', estb_year = '$estb_year', reg_no = '$reg_no', gst_no = '$gst_no', book_lang = '$book_lang', title_no = '$title_no', org_nature = '$org_nature', mgr_house_name = '$mgr_pub_hse', head_org_name = '$head_name', head_org_addr = '$head_addr', head_org_mobile = '$head_mobile', head_org_email = '$head_email', head_org_website = '$head_site', cntct_prsn_name = '$prsn_name', cntct_prsn_addr = '$prsn_addr', cntct_prsn_mobile = '$prsn_mobile', cntct_prsn_email = '$prsn_email', cntct_prsn_watsapp = '$whatsapp', status = 'E', updated_at = '$date', fascia = '$fascia', remarks = '$remark', img = '$newFileName' WHERE user_id = '$user_id'";
                                //         }
                                //     } 

                                else {
                                    // $query = "INSERT INTO users_profile (org_name, estb_year, reg_no, gst_no, book_lang, title_no, org_nature, mgr_house_name, head_org_name, head_org_addr, head_org_mobile, head_org_email, head_org_website, cntct_prsn_name, cntct_prsn_addr, cntct_prsn_mobile, cntct_prsn_email, cntct_prsn_watsapp, status, updated_at, fascia, remarks, user_id, img) VALUES ('$comp_name', '$estb_year', '$reg_no', '$gst_no', '$book_lang', '$title_no', '$org_nature', '$mgr_pub_hse', '$head_name', '$head_addr', '$head_mobile', '$head_email', '$head_site', '$prsn_name', '$prsn_addr', '$prsn_mobile', '$prsn_email', '$whatsapp', 'E', '$date', '$fascia', '$remark', '$user_id', '$newFileName')";
                                    $query = "INSERT INTO newspaper_upload (news_paper, img_title, news_date, img, updated_date) VALUES ('  $news_paper', '$img_title', ' $news_date', '$newFileName', '$date')";
                                }
                                $result = mysqli_query($con, $query);
                                if ($result) {
                                    $errormsg = "
                              <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your Profile Details is Successfully Saved. Proceed with stall(s) booking.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                              
                               ";
                                    //     $sql1 = "SELECT * FROM users_profile WHERE user_id = ?;";
                                    //     $stmt1 = $con->prepare($sql1);
                                    //     $stmt1->bind_param("s", $user_id);
                                    //     $stmt1->execute();
                                    //     $result1 = $stmt1->get_result();
                                    //     $user_profile = $result1->fetch_assoc();
                                    //     $comp_name = $user_profile['org_name'];
                                    //     $estb_year = $user_profile['estb_year'];
                                    //     $reg_no = $user_profile['reg_no'];
                                    //     $gst_no = $user_profile['gst_no'];
                                    //     $book_lang = $user_profile['book_lang'];
                                    //     $title_no = $user_profile['title_no'];
                                    //     $org_nature = $user_profile['org_nature'];
                                    //     $mgr_pub_hse = $user_profile['mgr_house_name'];
                                    //     $head_name = $user_profile['head_org_name'];
                                    //     $head_addr = $user_profile['head_org_addr'];
                                    //     $head_mobile = $user_profile['head_org_mobile'];
                                    //     $head_email = $user_profile['head_org_email'];
                                    //     $head_site = $user_profile['head_org_website'];
                                    //     $prsn_name = $user_profile['cntct_prsn_name'];
                                    //     $prsn_addr = $user_profile['cntct_prsn_addr'];
                                    //     $prsn_mobile = $user_profile['cntct_prsn_mobile'];
                                    //     $prsn_email = $user_profile['cntct_prsn_email'];
                                    //     $whatsapp = $user_profile['cntct_prsn_watsapp'];
                                    //     $fascia = $user_profile['fascia'];
                                    //     $remark = $user_profile['remarks'];
                                    //     $img = $user_profile['img'];
                                    //     if ($org_nature == 'A') {
                                    //         $select0 = '';
                                    //         $selecta = 'selected';
                                    //         $selectp = '';
                                    //     } else if ($org_nature == 'P') {
                                    //         $select0 = '';
                                    //         $selecta = '';
                                    //         $selectp = 'selected';
                                    //     } else {
                                    //         $select0 = 'selected';
                                    //         $selecta = '';
                                    //         $selectp = '';
                                    //     }
                                    //     if (!$img) {
                                    //         $hide = "";
                                    //     } else {
                                    //         $hide = "hidden";
                                    //     }
                                    // } else {
                                    //     $errormsg = "
                                    //     <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                    //                Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                    //                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    //                </div>";
                                }
                            }
                            ?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row bg-grey">

                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *News Paper
                                                <input type="text" class="form-control" name="news_paper"
                                                    placeholder="*Name of News Paper" id="news_paper" value="<?= $comp_name; ?>"
                                                    <?= $edit; ?>>
                                            </div>


                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Image Title
                                                <input type="text" class="form-control" name="img_title"
                                                    placeholder="*Image Title" id="img_title" value="<?= $comp_name; ?>"
                                                    <?= $edit; ?>>
                                            </div>
                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Date
                                                <input type="date" class="form-control" name="news_date"
                                                    placeholder="*Date of News" id="news_date" value="<?= $comp_name; ?>"
                                                    <?= $edit; ?>>
                                            </div>

                                            <div class="form-group col-6">
                                                </br>
                                                <input type="file" class="form-control" name="img" id="img"
                                                    placeholder="*Upload Image" <?= $hide; ?> <?= $edit; ?>>
                                                <label id="img_lab">
                                                    <!-- <img src="<?= $base_url ?>/dashboard/publisher/uploads/publisher_img/<?= $img; ?>"
                                                        height="70vh" id="img_img" <?= $edit; ?>> -->
                                                    <label>*Please upload Image of News Paper Clippings<br>
                                                        (Only JPG, JPEG, PNG files are allowed for uploads.)</label><br>
                                                    <img src="<?= $base_url ?>/dashboard/media_committee/news_uploads/<?= $img; ?>"
                                                        height="70vh" id="img_img" <?= $edit; ?>>
                                                </label>


                                                <!-- <input type="file" class="form-control" name="img" id="img" placeholder="*Upload img"> -->
                                            </div>

                                            <!-- <div class="col-6">
                                                </br>
                                                <label>*Please upload img of Publishing House / Organization<br>
                                                    (Only JPG, JPEG, PNG files are allowed for uploads.)</label><br>
                                                <span id="changeimg" onclick="changeimg();" <?= $edit; ?> class="btn btn-info text-right"><u>Change
                                                        img</u></span>
                                            </div> -->


                                        </div><br>
                                        <!-- <div class="col-12">
                                            <button class="btn btn-bordered active btn-block mt-3" id="preview_btn" onclick="checkTerm();"><span class="text-white pr-3"><i class="fa fa-eye"></i></span>Preview</button>
                                            <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save" id="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Save</button>
                                        </div> -->
                                        <div class="col-lg-12">

                                            <button type="submit" name="save" class="btn btn-primary"
                                                id="save">Save</button>
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
                            <!-- <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                style="font-style:normal; font-size: 12px;">
                                <thead class="text-center">
                                    <tr>
                                        <th data-ordering="false" rowspan="2">Sl.No</th>
                                        <th data-ordering="false" rowspan="2">Reg.No</th>
                                        <th data-ordering="false" colspan="5">Participant1 Details</th>
                                        <th data-ordering="false" colspan="5">Participant2 Details</th>
                                        <th data-ordering="false" rowspan="2">Date Registered</th>
                                        <th data-ordering="false" rowspan="2">Action</th>
                                    </tr>
                                    <tr>
                                        <th data-ordering="false">Name</th>
                                        <th data-ordering="false">Gender</th>
                                        <th data-ordering="false">Address</th>
                                        <th data-ordering="false">Phone</th>
                                        <th data-ordering="false">Email</th>
                                        <th data-ordering="false">Name</th>
                                        <th data-ordering="false">Gender</th>
                                        <th data-ordering="false">Address</th>
                                        <th data-ordering="false">Phone</th>
                                        <th data-ordering="false">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $quiz_public_query = "SELECT * FROM reg_quiz where category_id=3";
                                    $quiz_public_registrations = mysqli_query($con, $quiz_public_query);
                                    $counter = 0;
                                    while ($quiz_public_reg = mysqli_fetch_array($quiz_public_registrations)) { ?>
                                        <tr>
                                            <td><?= ++$counter ?></td>
                                            <td>KLIBF03-Q<?= $quiz_public_reg['id'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_name'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_gndr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_addr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_cntct'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem1_email'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_name'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_gndr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_addr'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_cntct'] ?></td>
                                            <td><?= $quiz_public_reg['team1_mem2_email'] ?></td>
                                            <td><?= $quiz_public_reg['updated_date'] ?></td>
                                            <td> </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "../footer.php"; ?>

<script type="text/javascript">
    function exportTableToExcel(example, filename = '') {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(example);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';
        // Create download link element
        downloadLink = document.createElement("a");
        document.body.appendChild(downloadLink);
        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
            // Setting the file name
            downloadLink.download = filename;
            //triggering the function
            downloadLink.click();
        }
    }
</script>