<style>
    .card-photo {
        width: 100%;
        height: 100%;
        position: relative;
        display: inline-block;
        margin: 50px;
    }

    .shade {
        width: 100%;
        /* background: #39004d; */
        /* transition: transform 0.25s; */
        border-radius: 6px;
        background-color: rgb(160, 80, 173);
        box-shadow: 0 8px 8px -4px #39004d, 0 2.8px 2.2px #39004d, 0 6.7px 5.3px #39004d, 0 12.5px 10px #39004d, 0 22.3px 17.9px #39004d, 0 41.8px 33.4px #39004d;
        -moz-box-shadow: 0 8px 8px -4px #39004d;
        -webkit-box-shadow: 0 8px 8px -4px #39004d;
    }
</style>
<?php include "header.php"; ?>
<section class="section breadcrumb-area overlay-dark d-flex align-items-center">
    <div class="container mt">
        <!-- <div class="row"> -->
        <div class="col-12">
            <!-- Breamcrumb Content -->
            <div class="breadcrumb-content text-center mt">
                <h2 class="text-white text-uppercase mb-3 mt-header">Gallery</h2>
            </div>
            <!-- </div> -->
        </div>
    </div>
</section>
<br>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Gallery Area Start ***** -->
<div class="container ">
    <!-- <div class="row justify-content-center"> -->
    <div class="col-12 col-lg-12 col-md-12">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner card-photo">
                <div class="carousel-item active embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/1.JPG" class="d-block img-fluid shade" alt="...">
                </div>
                <div class="carousel-item embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/2.JPG" class="d-block img-fluid shade" alt="...">
                </div>
                <div class="carousel-item embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/3.JPG" class="d-block img-fluid shade" alt="...">
                </div>
                <div class="carousel-item embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/4.JPG" class="d-block img-fluid shade" alt="...">
                </div>
                <div class="carousel-item embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/6.JPG" class="d-block img-fluid shade" alt="...">
                </div>
                <div class="carousel-item embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/10.JPG" class="d-block img-fluid shade" alt="...">
                </div>
                <div class="carousel-item embed-responsive-16by9">
                    <img src="assets/img/gallery/public_membrshp/11.JPG" class="d-block img-fluid shade" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<br>
<!-- ***** Gallery Area End ***** -->

<!--====== Call To Action Area Start ======-->
<section class="section cta-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <!-- Section Heading -->
                <div class="section-heading text-center m-0">
                    <h2 class="text-white"><?php print $enquiry_title; ?></h2>
                    <p class="text-white d-none d-sm-block mt-4"><?php print $enquiry_text; ?></p>
                    <a href="contact" class="btn btn-bordered-white mt-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Call To Action Area End ======-->

<?php include "footer.php"; ?>