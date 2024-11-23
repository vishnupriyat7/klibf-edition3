<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', 1);
include "head-style.php";
include "config.php"; ?>

<head>


    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Highlighted pagination */
        .pagination {
            /* background-color: #007bff; */
            background: rgba(111, 153, 32, 0.9);
            padding: 10px;
            /* border-radius: 5px; */
        }

        /* Pagination links style */
        .pagination .page-link {
            color: white;
            background-color: transparent;
            border: none;
            font-size: large;
        }

        /* Active page style */
        .pagination .page-item.active .page-link {
            /* background-color: #0056b3; */
            background: rgba(95, 45, 110, 0.9);
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include "header-inner.php"; ?>
    <!-- End Header -->

    <main id="about-inner-main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Reflections</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Reflections</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section id="reflections" class="reflections">
            <div class="container">
                <div class="row">
                    <?php

                    $query = "SELECT video_ctgry, video_dtls, video_link, video_date FROM video_dtls_upload ORDER BY video_date DESC";
                    $result = mysqli_query($conn, $query);

                    // Fetch all rows into an array
                    $videoDetails = [];
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $videoDetails[] = $row;
                        }
                    }
                    // var_dump($videoDetails);die;



                    // Number of images per page
                    $videosPerPage = 6;

                    // Current page number
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                    // Calculate the total number of pages
                    $totalPages = ceil(count($videoDetails) / $videosPerPage);

                    // Calculate the starting index of images for the current page
                    $startIndex = ($currentPage - 1) * $videosPerPage;

                    // Slice the image files for the current page
                    $videoDataOnPage = array_slice($videoDetails, $startIndex, $videosPerPage);

                    foreach ($videoDataOnPage as $index => $data) {
                        // $imagePath = "dashboard/media_committee/news_uploads/" . $data['img'];
                        // $newsPaper = $data['news_paper'];
                        $video_dtls = ucwords(trim($data['video_dtls']));
                        $video_link = $data['video_link'];
                        // var_dump($video_link);
                        

                        $videoDate = $data['video_date']; // Assuming 'news_date' is in 'yy-mm-dd' format
                        $newsDateFormatted = date('d-m-Y', strtotime($videoDate));
                    ?>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="youtube-thumbnail">
                                <iframe class="img-fluid" src="<?= $data['video_link'] ?>" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" data-video-src="<?= $data['video_link'] ?>" title="<b>Click to View</b>">
                                </iframe>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <!-- Pagination -->
                <div class="text-center mt-4">
                    <ul class="pagination justify-content-center">
                        <?php if ($currentPage > 1) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $currentPage - 1 ?>">Previous</a>
                            </li>
                        <?php endif; ?>

                        <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
                            <li class="page-item <?= ($page == $currentPage) ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $page ?>"><?= $page ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if ($currentPage < $totalPages) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $currentPage + 1 ?>">Next</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- End Pagination -->
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>


</body>

</html>