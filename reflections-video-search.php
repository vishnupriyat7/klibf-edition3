<?php
include "config.php";

// Get the search term and page number
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Videos per page
$videosPerPage = 8;

// Calculate the starting index
$startIndex = ($currentPage - 1) * $videosPerPage;

// Base query
$query = "SELECT video_ctgry, video_dtls, video_link, video_date FROM video_dtls_upload";

// Add search conditions
if (!empty($search)) {
    $query .= " WHERE video_ctgry LIKE '%" . mysqli_real_escape_string($conn, $search) . "%' 
                OR video_dtls LIKE '%" . mysqli_real_escape_string($conn, $search) . "%' 
                OR video_date LIKE '%" . mysqli_real_escape_string($conn, $search) . "%'";
}

// Total records query
$result = mysqli_query($conn, $query);
$totalVideos = mysqli_num_rows($result);

// Add pagination to query
$query .= " ORDER BY video_date DESC LIMIT $startIndex, $videosPerPage";
$result = mysqli_query($conn, $query);

// Prepare video data
$videosHTML = '';
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $video_dtls = ucwords(trim($row['video_dtls']));
        $originalVideoLink = $row['video_link'];
        $videoDate = date('d-m-Y', strtotime($row['video_date']));

        if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/|.*[?&]v=))([\w-]+)/', $originalVideoLink, $matches)) {
            $videoID = $matches[1];
            $embedLink = "https://www.youtube.com/embed/" . $videoID;
        } else {
            $embedLink = ''; // Fallback if the link is not valid
        }

        $videosHTML .= "
            <div class='col-md-3 icon-box'>
                <div class='youtube-thumbnail'>
                    <iframe class='img-fluid' src='$embedLink' allowfullscreen allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'></iframe>
                    <p style='text-align: center; font-weight: bold;'>$video_dtls - $videoDate</p>
                </div>
            </div>
        ";
    }
} else {
    $videosHTML = "<p class='text-center'>No videos found.</p>";
}

// Pagination
$totalPages = ceil($totalVideos / $videosPerPage);
$paginationHTML = '<ul class="pagination justify-content-center">';
if ($currentPage > 1) {
    $paginationHTML .= '<li class="page-item"><a class="page-link pagination-link" href="#" data-page="' . ($currentPage - 1) . '">Previous</a></li>';
}
for ($page = 1; $page <= $totalPages; $page++) {
    $activeClass = $page == $currentPage ? 'active' : '';
    $paginationHTML .= '<li class="page-item ' . $activeClass . '"><a class="page-link pagination-link" href="#" data-page="' . $page . '">' . $page . '</a></li>';
}
if ($currentPage < $totalPages) {
    $paginationHTML .= '<li class="page-item"><a class="page-link pagination-link" href="#" data-page="' . ($currentPage + 1) . '">Next</a></li>';
}
$paginationHTML .= '</ul>';

// Return JSON response
echo json_encode(['videosHTML' => $videosHTML, 'paginationHTML' => $paginationHTML]);
