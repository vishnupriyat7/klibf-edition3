<?php
include "../header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_query = "DELETE FROM video_dtls_upload WHERE id = $id";

    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Video deleted successfully!'); window.location.href = 'video_upload_report.php';</script>";
    } else {
        echo "<script>alert('Error deleting video!'); window.location.href = 'video_upload_report.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href = 'video_upload_report.php';</script>";
}
