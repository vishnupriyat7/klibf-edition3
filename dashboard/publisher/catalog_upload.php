<?php
ini_set('display_errors', '0');
include "../header.php";
include "sidebar.php";
$user_id = $user['id'];
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Chellan Upload</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $status = "OK";
            $msg = "";
            $errormsg = "";

            if (isset($_POST['save_catalogue'])) {
                $current_date = new DateTime();
                $date = date_format($current_date, "Y-m-d H:i:s");

                // Check if user has already uploaded a catalogue
                $query_check = "SELECT id FROM publisher_catalogue WHERE user_id = ?";
                $stmt_check = $con->prepare($query_check);
                $stmt_check->bind_param("i", $user_id);
                $stmt_check->execute();
                $stmt_check->store_result();

                if ($stmt_check->num_rows > 0) {
                    $msg = 'You have already uploaded a Catalogue.';
                    $status = "NOTOK";
                } else {
                    if (!empty($_FILES['catalogue']['name'])) {
                        $idir = "uploads/catalogue/";
                        $randomd = rand(0000000, 9999999);
                        $domain = "http://" . $_SERVER['HTTP_HOST'];
                        $file_ext = strrchr($_FILES['catalogue']['name'], '.');
                        $destination = $randomd . $file_ext;

                        if ($file_ext == '.pdf') {
                            $fileupload = move_uploaded_file($_FILES['catalogue']['tmp_name'], "$idir" . $destination);
                            $pdf = $domain . "uploads/catalogue/" . $destination;
                            if ($fileupload) {
                                $query = "INSERT INTO publisher_catalogue (user_id, filename, updated_date) VALUES (?, ?, ?)";
                                $stmt_insert = $con->prepare($query);
                                $stmt_insert->bind_param("iss", $user_id, $destination, $date);
                                $stmt_insert->execute();

                                if ($stmt_insert) {
                                    $msg = "Your Catalogue is Successfully Saved.";
                                }
                            } else {
                                $msg = 'File upload failed. Please try again.';
                                $status = "NOTOK";
                            }
                        } else {
                            $msg = 'File type not supported. Kindly upload a PDF file.';
                            $status = "NOTOK";
                        }
                    } else {
                        $msg = 'Please select a file to upload.';
                        $status = "NOTOK";
                    }
                }

                if ($status == "NOTOK") {
                    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                        $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                } else {
                    $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>" .
                        $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                }
            }
            ?>
            <br><br>
            <div class="row">
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    } ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row bg-grey">
                                            <?php
                                            // Check if user already has a catalogue uploaded
                                            $query_cat = "SELECT filename FROM publisher_catalogue WHERE user_id = ?";
                                            $stmt_cat = $con->prepare($query_cat);
                                            $stmt_cat->bind_param("i", $user_id);
                                            $stmt_cat->execute();
                                            $res_cat = $stmt_cat->get_result();
                                            $user_cat = $res_cat->fetch_assoc();

                                            if ($user_cat) { ?>
                                                <br>
                                                <label><b>You have already uploaded a Catalogue</b></label>
                                                <iframe src="uploads/catalogue/<?= $user_cat['filename'] ?>" height="600vh"></iframe>
                                            <?php } else { ?>
                                                <div class="form-group col-12">
                                                    <br>
                                                    <label><b>Upload Your Catalogue</b></label>
                                                </div>
                                                <div class="form-group col-12 col-md-6">
                                                    <br>*Upload PDF File
                                                    <input type="file" class="form-control" name="catalogue" id="catalogue" placeholder="*Upload PDF File">
                                                </div>
                                                <div class="col-lg-12">
                                                    <br><button type="submit" name="save_catalogue" class="btn btn-primary" id="save_catalogue">Save</button>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../footer.php"; ?>
</div>
