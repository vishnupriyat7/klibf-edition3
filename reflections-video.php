<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', 0);
include "head-style.php";
// include "config.php";
?>

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

                    <div id="search">
                        <form method="GET" action="" class="d-flex justify-content-center mb-4">
                            <input
                                type="text"
                                id="search-input"
                                class="form-control w-50"
                                placeholder="Search videos...">
                        </form>
                    </div>

                    <div id="video-results" class="row"></div>
                    <div id="pagination-links" class="text-center mt-4"></div>
                    <!-- <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="youtube-thumbnail">
                                <iframe class="img-fluid" src="<?= $embedLink ?>" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" data-video-src="<?= $embedLink ?>" title="<b>Click to View</b>">
                                </iframe>
                                <p style="text-align: center; font-weight: bold;"><?php echo $video_dtls . " - " .  $videoDate; ?></p>
                            </div>
                        </div> -->

                </div>


               
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>


</body>
<script>
 
// Fetch videos on page load
window.onload = function () {
    fetchVideos('', 1); // Default: no search query, page 1
};
// Function to fetch videos and pagination
function fetchVideos(searchQuery, page) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `reflections-video-search.php?search=${encodeURIComponent(searchQuery)}&page=${page}`, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            document.getElementById('video-results').innerHTML = response.videosHTML;
            document.getElementById('pagination-links').innerHTML = response.paginationHTML;
        }
    };
    xhr.send();
}

// Handle pagination click dynamically
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('pagination-link')) {
        e.preventDefault();
        const page = e.target.getAttribute('data-page');
        const searchQuery = document.getElementById('search-input').value;
        fetchVideos(searchQuery, page);
    }
});

// Fetch videos as the user types
document.getElementById('search-input').addEventListener('input', function () {
    const searchQuery = this.value;
    fetchVideos(searchQuery, 1); // Default to page 1 when typing
});

</script>

</html>