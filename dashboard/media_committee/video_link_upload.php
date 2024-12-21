<?php
ini_set('display_errors', 1);

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
                        <h4 class="mb-sm-0">Video Upload</h4>
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
                            <h5 class="card-title mb-0">Upload Videos</h5>
                        </div>
                        <div class="card-body overflow-auto">

                            <?php
                            $status = "OK";
                            $msg = "";
                            $newFileName = ""; // Initialize to avoid undefined variable error
                            $query = ""; // Initialize to avoid undefined variable error
                            $errormsg = ""; // Initialize to avoid undefined variable error


                            if (isset($_POST['video_dtls_save'])) {
                                // var_dump("jkbkjb");die;
                                $video_ctgry =
                                    mysqli_real_escape_string($con, $_POST['video_ctgry']);
                                // var_dump($video_ctgry);die;
                                $video_dtls =
                                    mysqli_real_escape_string($con, $_POST['video_dtls']);
                                $video_link =
                                    mysqli_real_escape_string($con, $_POST['video_link']);
                                $video_date =
                                    mysqli_real_escape_string($con, $_POST['video_date']);

                                $current_date = new DateTime();
                                $date = date_format($current_date, "Y-m-d");

                                $checkQuery = "SELECT * FROM video_dtls_upload WHERE video_link = '$video_link'";
                                $checkResult = mysqli_query($con, $checkQuery);

                                if (mysqli_num_rows($checkResult) > 0) {
                                    // Duplicate entry found
                                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                                    Duplicate entry found. The record already exists.
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                 </div>";
                                } else {

                                    $query = "INSERT INTO video_dtls_upload (video_ctgry, video_dtls, video_link, video_date, updated_date) VALUES ('$video_ctgry', '$video_dtls', '$video_link','$video_date', '$date')";
                                    // var_dump($query);
                                    // die;
                                }
                                if (!empty($query)) {
                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Your Video is Successfully Uploaded.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>";
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
                                                *Video Category
                                                <input type="text" class="form-control" name="video_ctgry"
                                                    placeholder="*Video Category" id="video_ctgry" required>
                                            </div>
                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Video Details
                                                <input type="text" class="form-control" name="video_dtls"
                                                    placeholder="*Video Details" id="video_dtls" required>
                                            </div>
                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Video Link
                                                <input type="text" class="form-control" name="video_link"
                                                    placeholder="*Video Link" id="video_link" required>
                                            </div>
                                            <div class="form-group col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                                                *Date
                                                <input type="date" class="form-control" name="video_date"
                                                    placeholder="*Date" id="video_date" required>
                                            </div>


                                        </div><br>
                                        <div class="col-lg-12">
                                            <button type="submit" name="video_dtls_save" class="btn btn-primary"
                                                id="video_dtls_save">Save</button>
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