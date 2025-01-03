<?php

ini_set('display_errors', 1);
include "../header.php";
include "sidebar.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM newspaper_upload WHERE id = $id";
    $result = mysqli_query($con, $query);
    $news = mysqli_fetch_assoc($result);


    if (!$news) {
        echo "<script>alert('News not found!'); window.location.href = 'news_upload_report.php';</script>";
        exit;
    }
}

if (isset($_POST['update_news'])) {
    $news_paper = $_POST['news_paper'];
    // var_dump($news_paper);
    $news_title = $_POST['news_title'];
    // var_dump($news_title);
    $news_img = $_POST['news_img'];
    // var_dump($news_img);
    $news_date = $_POST['news_date'];
    // var_dump($news_date);


    // Image Upload Logic
    $image_name = $news['img']; // Default to current image
    if (isset($_FILES['news_img']) && $_FILES['news_img']['error'] == 0) {
        $target_dir = "news_uploads/";
        $image_name = basename($_FILES["news_img"]["name"]);
        $target_file = $target_dir . $image_name;

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $target_file)) {
            echo "<script>alert('Image uploaded successfully!'); window.location.href = 'news_upload_report.php';</script>";
        } else {
            echo "<script>alert('Error uploading image.');</script>";
        }
    }

    $current_date = new DateTime();
    $date = date_format($current_date, "Y-m-d");
    // var_dump($news_paper, $news_title, $image_name, $news_date, $id);
    $update_query = "UPDATE newspaper_upload 
                     SET news_paper = '$news_paper', 
                         img_title = '$news_title', 
                         img = '$image_name', 
                         news_date = '$news_date', 
                         updated_date = '$date'
                     WHERE id = $id";
    mysqli_query($con, $update_query);

    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('News details updated successfully!'); window.location.href = 'news_upload_report.php';</script>";
    } else {
        echo "<script>alert('Error updating news details!');</script>";
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
                            <h5 class="card-title mb-0">Edit News Details</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>News Paper</label>
                                    <input type="text" name="news_paper" class="form-control" value="<?= $news['news_paper']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>News Title</label>
                                    <textarea name="news_title" class="form-control" required><?= $news['img_title']; ?></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <label>News Image</label>
                                    <input type="url" name="news_img" class="form-control" value="<?= $news['news_img']; ?>" required>
                                </div> -->
                                <div class="form-group d-flex align-items-center">
                                    <div class="me-3">
                                        <label>Current News Image</label><br>
                                        <img src="<?= $base_url ?>/dashboard/media_committee/news_uploads/<?= $news['img']; ?>"
                                            alt="Current Image"
                                            height="100">
                                    </div>
                                    <div>
                                        <label>Upload New Image (optional)</label>
                                        <input type="file" name="news_img" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="news_date" class="form-control" value="<?= $news['news_date']; ?>" required>
                                </div>
                                <br>
                                <button type="submit" name="update_news" class="btn btn-success">Update</button>
                                <a href="news_upload_report.php" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>