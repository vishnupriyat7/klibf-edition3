<style>
    .card {
        background: linear-gradient(to bottom, #ccffff 0%, #ffffff 100%);
        box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
            0 5px 15px 0 rgba(37, 44, 97, 0.15);
        border-radius: 15px;
        border: 1px solid #dd2476;
        color: rgba(250, 250, 250, 0.8);
        margin-bottom: 2rem;
        width: 320px;
        height: 300px;
        transition: all 0.5s ease;
        cursor: pointer;

    }

    .card:hover {
        background: linear-gradient(to top left, #66ccff 0%, #ffccff 100%);
        color: #fff;
        transform: scale(1.1);
        z-index: 9;
    }

    .btn {
        border: 2px solid;
        border-image-slice: 1;
        background: var(--gradient) !important;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: #636fa4 !important;
        border-image-source: var(--gradient) !important;
        text-decoration: none;
        transition: all .4s ease;
    }

    .btn:hover,
    .btn:focus {
        background: var(--gradient) !important;
        -webkit-background-clip: none !important;
        -webkit-text-fill-color: #19118c !important;
        border: 1px solid #000066 !important;
        box-shadow: #cc33ff 1px 0 10px;
        text-decoration: underline;
    }

    body {
        background: #e8cbc0;
        background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
        background: linear-gradient(to right, #e8cbc0, #636fa4);
        min-height: 100vh;

    }
</style>
<?php include "header.php"; ?>
<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area overlay-dark d-flex align-items-center">
    <div class="container mt">
        <!-- <div class="row"> -->
        <div class="col-12">
            <!-- Breamcrumb Content -->
            <div class="breadcrumb-content d-flex flex-column align-items-center text-center mt">
                <h2 class="text-white text-uppercase mb-3 mt-header">Publishers</h2>
                <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>

                        <li class="breadcrumb-item text-white active">About</li>
                    </ol> -->
            </div>
            <!-- </div> -->
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->
<section class="section about-area ptb_10">
    <!-- <div class="col-md-12 text-right mt-5">
        <a href="#"><button type=" button" class="btn btn-primary center" id="download"><i class="fa fa-download"></i>  Publisher's List</button></a>
        <a href="publishers-pdf/publishers.pdf" class="btn btn-success wow shake mr-2"><i class="fa fa-download"></i> Publisher's List</a>
    </div> -->
    <div class="container mt-4">
        <!-- <div class="col-sm-4 mb-4">
            <input type="text" id="myFilter" class="form-control" onkeyup="onSearch()" placeholder="Search for Publisher...">
        </div> -->
        <!-- <form class="d-flex">
            <input class="form-control col-sm-4 mb-4 me-2" id="myInput" type="search" placeholder="Search" aria-label="Search" onkeyup="search()">

        </form> -->
        <div class="row text-left ptb_50" id="myProducts">


            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/ACK-Media.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">ACK Media</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <!-- <a href="publishers-pdf/APPLE BOOKS CATALoge original-1.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/apple-books.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Apple Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <a href="publishers-pdf/APPLE BOOKS CATALoge original-1.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/atlantic_logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Atlantic Pulishers &Distributors(P)Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <!-- <a href="publishers-pdf/APPLE BOOKS CATALoge original-1.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/5417Authentic books logo.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm"><br>
                    <h5 class="mb-0 card-title">Authentic Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br><br>
                    <br> <a href="publishers-pdf/Authentic Books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/1536BARTER PUBLISHING LOGO with WEB.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Barter Publishing</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <br> <a href="publishers-pdf/Barter-Publishing.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/BLOOMSBURY.png" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm"><br>
                    <h5 class="mb-0 card-title">Bloomsbury</h5><br>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <!-- <br> <a href="publishers-pdf/കാറ്റലോഗ് 2022 - Barter Publishing.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/bodhi-books.jpeg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Bodhi Tree Books And Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/TES_Catalogue_AW.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/BOOKER-media- LOGO.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Booker Media Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Booker-Media-CATALOGUE-A.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Cambridge-logo.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                   <br><br> <h5 class="mb-0 card-title">Cambridge</h5>
                    <!-- <br> <a href="publishers-pdf/" class="btn btn-primacary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->

                </div>
            </div>
            <!-- End -->

            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/5734Chintha_logo.svg.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Chintha Publishers</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <a href="publishers-pdf/CHINTHA PUBLISHERS.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/current-kottayam.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Current Books, Kottayam</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Current Books Thrissur.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/1731CBT logo.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Current Books, Thrissur</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Current Books Thrissur.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/3462LOGO.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br><br>
                    <h5 class="mb-0 card-title">DC Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <br> <a href="publishers-pdf/DC-Books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div>

            <!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/3537logo.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Department of Publications, Kerala University</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <br> <a href="publishers-pdf/Department of Publications(Kerala University).pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Donbooks-Logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Don Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                   
                    <a href="publishers-pdf/Don-Books-Catalogue.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/eye-books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Eye Books Kerala</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <br>
                    <a href="publishers-pdf/eye-books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Logo-Fabian.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Fabian Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <br>
                    <a href="publishers-pdf/Fabian-Books-List.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/4886grace logo png.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Grace Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <a href="publishers-pdf/grace_cataloque2022-1.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/Green-Logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br>
                    <h5 class="mb-0 card-title">Green Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <a href="publishers-pdf/Green-Books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/greenline-logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Green Line Publications LLP</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <a href="publishers-pdf/GREENLINE-cat.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/GV-books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">GV Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <a href="publishers-pdf/G-V-Books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/7064H&C Logo-01.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">H&C Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/H&C Book.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/HACHETTE.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Hachette</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/H&C Book.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/haritham-books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Haritham Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br>
                    <a href="publishers-pdf/haritham.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/HARPER COLLINS.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Harper Collins</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br>
                    <!-- <a href="publishers-pdf/H&C Book.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Insight-Publica.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Insight Publica</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Insight-Publica-Book.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Islami-publishing.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br>
                    <h5 class="mb-0 card-title">Islamic Publishing Bureau</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/H&C Book.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/JAINCO-logo.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br><br>
                    <h5 class="mb-0 card-title">Jainco</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/H&C Book.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Jeevan-Logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Jeevan Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/jeevan-books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Janeswari-logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Janeswari Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Jnaneswari.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/2918Kairali-Logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br><br>
                    <h5 class="mb-0 card-title">Kairali Books Pvt.Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br>
                    <a href="publishers-pdf/kairali-books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/kchr.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Kerala Council for Historical Research</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Kerala-media-academy.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Kerala Media Academy</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br>
                    <a href="publishers-pdf/Media-Academy-.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/KSA-Logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Kerala Sahitya Academy</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br>
                    <!-- <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Kerala-shastrasahithya-parishad_225x225.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Kerala Shastrasahithya Parishad</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br>
                    <a href="publishers-pdf/Sasthra-Sahithya-Parishad-catalogue.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/KERALA-STATE-CHALACHITRA-.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Kerala State Chalachithra Academy</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Chalachitra-Academy.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Kerala-State-Institute-Children's-Literature.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br>
                    <h5 class="mb-0 card-title">Kerala State Institute of Children's Literature</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Balasahithya-Institute.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/KURUKSHETHRA-PRAKASAN.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Kurukshethra Prakasan Pvt Ltd.</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/kurukshethra.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->


            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card shadow-sm py-5 px-4"><img src="logo-upload/5416Lipi logo colour copy jpeg.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Lipi Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <a href="publishers-pdf/LIPI PUBLICATION CATALOGUE -2023.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Logos-Books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br>
                    <h5 class="mb-0 card-title">Logos Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Logos-books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Macbeth-Publications.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br>
                    <h5 class="mb-0 card-title">Macbeth Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/MADHYAMAM-BOOKS_.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Madhyamam Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->

            <!-- Team item -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/6991MALU.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Maluben Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/MALUBEN BOOKS.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->

            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/MANGO-BOOKS.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br><br><br>
                    <h5 class="mb-0 card-title">Mango Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Manorama-books.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Manorama Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Manorama Books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/MODERN-BOOK-CENTRE.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Modern Book Centre</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Mythri-Emblem-Org.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Mythri Books</h5>
                    <br> <a href="publishers-pdf/Mythri.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>

                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/NATIONAL-BOOK-TRUST.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">National Book Trust India</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/National Book Trust.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/OLIVE-PUBLICATIONS.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Olive Publications Pvt Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Olive-Catalogue.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/OM-Books.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">OM Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/PAN-MACMILLAN.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">PAN MACMILLAN</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Pappathi-Pusthakangal.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Pappathi Pusthakangal</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/PENGUIN-RANDOM-HOUSE_.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Penguin Random House India Pvt Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Prabatham-Printing.jpeg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Prabatham Printing and Publishing Co Pvt Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/prabath-catalogue.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Prakash-books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Prakash Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/PRANATHA-BOOKS.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Pranatha Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Pranatha-booklist.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Premiere-Books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Premiere Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->


            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/5954Prism Logo.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Prism Books Pvt. Ltd.</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <br> <a href="publishers-pdf/Prism Books List.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Publications-Division-GovtIn_.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Publications Division Govt.Of India</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Quivive-Text.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Quivive Text</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/6rachana books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Rachana Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Rachana Books Catalogue 2023.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/ROLI-BOOKS.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Roli Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Romanson-Printing-Publishing.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Romanson Printing & Publishing House Pvt Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Romanson-cat.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/RUPA-publications_.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Rupa Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/sagaram.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Sagaram Books Pravasi Samskrithy</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/SAHITHYA-PRAVARTHAKA-CO-OPERATIVE_225x225.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Sahithya Pravarthaka Co-Operative Soceity Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/saikatham.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Saikatham Book LLP</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/saikatham-catlog.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/9321saindhava logo.jpeg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Saindhava Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/saindhava books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/1284LOGO of Samatha.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Samatha-A Collective For Gender Justice</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Catalogue of Samatha books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Samooh.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Samooh</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/SAMOOH-BOOK.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/samrat.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Samrat books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <a href="publishers-pdf/SAMRAT PUBLISHERS - Pusthakavartha new 2023.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/1557satbhavana_trust_logo.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Satbhavana Trust</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br>
                    <br> <a href="publishers-pdf/SATBHAVANA TRUST.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/SCHOLASTIC.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Scholastic</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/SIGN-BOOKS.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Sign Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/sign-books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/SIMON-AND-SCHUSTER.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Simon And Schuster</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Southern-Book-Star.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Southern Book Star</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/southern-book-star.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/Sreshta-Publications.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Sreshta Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Sreshta-Books.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/1335images.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">State Institute Of Languages</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/stateinstituteoflanguages.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/taxman.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <br>
                    <h5 class="mb-0 card-title">Taxmann Allied Services Pvt Ltd</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/taxman-cat.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/5393tbs.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">TBS Publishers Distributors</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/TBS PUBLISHERS DISTRIBUTORS.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/mathrubhumi-books.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Mathrubhumi Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/THG-Publishing.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">THG Publishing Private Limited (The Hindu Group)</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/THGHindu-Group - LIST.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/TRAVANCORE-DEVASWOM-BOARD.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Travancore Devaswom Board</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <!-- <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div><!-- End -->
            <!-- <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/VCThomas-Editions.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">V C Thomas Editions</h5>
                    <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span>

                    <br> <a href="publishers-pdf/Catalogue of KCHR Publications .pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div> -->
            <!-- End  V C Thomas Cancelled-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/VAYANAPPURA-PUBLICATIONS_225x225.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Vayanappura Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/vayanappura-cat.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/westland_225x225.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Westland Publications</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->

                    <br> <a href="publishers-pdf/Westland-cat.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/8892IMG-20221106-WA0014.jpg" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">YES Press Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <br> <a href="publishers-pdf/Yes Press Books Catalouge 07.12.2022_compressed.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card rounded shadow-sm py-5 px-4"><img src="logo-upload/youvatha.png" alt="" width="100" height="500" class="img-thumbnail mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0 card-title">Yuvatha Books</h5>
                    <!-- <span class="small text-uppercase text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</span> -->
                    <br><br>
                    <!-- <br> <a href="publishers-pdf/Yes Press Books Catalouge 07.12.2022_compressed.pdf" class="btn btn-primary mr-2"><i class="fa fa-download"></i> Catalogue</a> -->
                </div>
            </div>
        </div>
    </div>
</section>


<br>
<br>
<!-- ***** About Area End ***** -->
<script>
    // function onSearch() {
    //     var input, filter, cards, cardContainer, title, i, a;
    //     input = document.getElementById("myFilter");
    //     filter = input.value.toUpperCase();
    //     cardContainer = document.getElementById("myProducts");
    //     cards = cardContainer.getElementsByClassName("card");
    //     for (i = 0; i < cards.length; i++) {

    //         title = cards[i].querySelector(".card-title");
    //         if (title.innerText.toUpperCase().indexOf(filter) > -1) {
    //             cards[i].style.display = "";
    //         } else {
    //             cards[i].style.display = "none";
    //         }
    //     }
    // }




    function search() {
        // Declare variables
        var input, filter;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        cards = document.getElementsByClassName("card")
        titles = document.getElementsByClassName("card-title");

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < cards.length; i++) {
            a = titles[i];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                cards[i].style.display = "";
            } else {
                cards[i].style.display = "none";
            }
        }
    }
</script>

< <!--======Call To Action Area Start======-->

    <?php include "attention.php"; ?>
    <!--====== Call To Action Area End ====== -->
    <?php include "footer.php"; ?>