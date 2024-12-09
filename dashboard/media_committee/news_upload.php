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

                            <?php
                            $status = "OK";
                            $msg = "";
                            $newFileName = ""; // Initialize to avoid undefined variable error
                            $query = ""; // Initialize to avoid undefined variable error
                            $errormsg = ""; // Initialize to avoid undefined variable error


                            if (isset($_POST['news_save'])) {
                                // var_dump("jkbkjb");die;
                                $news_paper =
                                    mysqli_real_escape_string($con, $_POST['news_paper']);
                                // var_dump($news_paper);die;
                                $img_title =
                                    mysqli_real_escape_string($con, $_POST['img_title']);
                                $news_date =
                                    mysqli_real_escape_string($con, $_POST['news_date']);

                                $current_date = new DateTime();
                                $date = date_format($current_date, "Y-m-d");

                                $checkQuery = "SELECT * FROM newspaper_upload WHERE news_paper = '$news_paper' AND news_date = '$news_date'";
                                $checkResult = mysqli_query($con, $checkQuery);

                                if (mysqli_num_rows($checkResult) > 0) {
                                    // Duplicate entry found
                                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                                    Duplicate entry found. The record already exists.
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                 </div>";
                                } else {
                                    if (!empty($_FILES["img"]["name"])) {
                                        // Get the file name and type
                                        $fileName = basename($_FILES["img"]["name"]);
                                        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                                        // Allow certain file formats 
                                        $allowTypes = array('jpg', 'png', 'jpeg');
                                        if (in_array($fileType, $allowTypes)) {
                                            // Set the target directory where you want to save the imag
                                            $targetDir = "news_uploads/";
                                            // Generate a unique file name to avoid overwriting
                                            // $newFileName = uniqid() . '.' . $fileType;
                                            $newFileName =    $news_paper .  $news_date .  '-' . uniqid() . '.' . $fileType;
                                            // var_dump($newFileName);die;
                                            // Set the target file path
                                            $targetFilePath = $targetDir . $newFileName;
                                            // var_dump($targetFilePath);
                                            // die;
                                            // Upload file to the target directory
                                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {

                                                // File successfully uploaded, now save the file path into the database
                                                $filePathForDB = addslashes($targetFilePath); // Add slashes for safety in SQL
                                                // var_dump($filePathForDB);die;

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
                                            $msg = 'Sorry, only JPG, JPEG, PNG,files are allowed to upload.';
                                            $status = "NOTOK";
                                        }
                                    } else {

                                        $msg = 'Please select an image file to upload.';
                                        $status = "NOTOK";
                                    }

                                    if ($status == "NOTOK") {
                                        $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                            $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                                    } else {

                                        $query = "INSERT INTO newspaper_upload (news_paper, img_title, news_date, img, updated_date) VALUES ('$news_paper', '$img_title', '$news_date', '$newFileName', '$date')";
                                        // var_dump($query);
                                        // die;
                                    }
                                    if (!empty($query)) {
                                        $result = mysqli_query($con, $query);
                                        if ($result) {
                                            $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your Image is Successfully Uploaded.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>";
                                        }
                                    }
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
                                                    placeholder="*Name of News Paper" id="news_paper" required>
                                            </div>
                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Image Title
                                                <input type="text" class="form-control" name="img_title"
                                                    placeholder="*Image Title" id="img_title" required>
                                            </div>
                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Date
                                                <input type="date" class="form-control" name="news_date"
                                                    placeholder="*Date of News" id="news_date" required>
                                            </div>
                                            <div class="form-group col-6">
                                                </br>
                                                <input type="file" class="form-control" name="img" id="img"
                                                    placeholder="*Upload Image">
                                                <label id="img_lab">
                                                    <!-- <img src="<?= $base_url ?>/dashboard/publisher/uploads/publisher_img/<?= $img; ?>"
                                                        height="70vh" id="img_img" <?= $edit; ?>> -->
                                                    <label>*Please upload Image of News Paper Clippings<br>
                                                        (Only JPG, JPEG, PNG files are allowed for uploads.)</label><br>
                                                    <img src="<?= $base_url ?>/dashboard/media_committee/news_uploads/<?= $img; ?>"
                                                        height="70vh" id="img_img">
                                                </label>
                                            </div>
                                        </div><br>
                                        <div class="col-lg-12">
                                            <button type="submit" name="news_save" class="btn btn-primary"
                                                id="news_save">Save</button>
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
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "../footer.php"; ?>