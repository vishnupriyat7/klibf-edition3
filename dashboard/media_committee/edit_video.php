<?php
include "../header.php";
include "sidebar.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM video_dtls_upload WHERE id = $id";
    $result = mysqli_query($con, $query);
    $video = mysqli_fetch_assoc($result);

    if (!$video) {
        echo "<script>alert('Video not found!'); window.location.href = 'video_upload_report.php';</script>";
        exit;
    }
}

if (isset($_POST['update_video'])) {
    $video_category = $_POST['video_category'];
    $video_details = $_POST['video_details'];
    $video_link = $_POST['video_link'];
    $video_date = $_POST['video_date'];

    $current_date = new DateTime();
    $date = date_format($current_date, "Y-m-d");

    $update_query = "UPDATE video_dtls_upload 
                     SET video_ctgry = '$video_category', 
                         video_dtls = '$video_details', 
                         video_link = '$video_link', 
                         video_date = '$video_date', 
                         updated_date = '$date'
                     WHERE id = $id";

    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('Video details updated successfully!'); window.location.href = 'video_upload_report.php';</script>";
    } else {
        echo "<script>alert('Error updating video details!');</script>";
    }
}
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Video Details</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label>Video Category</label>
                                    <input type="text" name="video_category" class="form-control" value="<?= $video['video_ctgry']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Video Details</label>
                                    <textarea name="video_details" class="form-control" required><?= $video['video_dtls']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Video Link</label>
                                    <input type="url" name="video_link" class="form-control" value="<?= $video['video_link']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="video_date" class="form-control" value="<?= $video['video_date']; ?>" required>
                                </div>
                                <br>
                                <button type="submit" name="update_video" class="btn btn-success">Update</button>
                                <a href="video_upload_report.php" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>