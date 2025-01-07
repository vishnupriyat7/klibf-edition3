<style>
    ul {
        list-style: none;

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: large;
        text-align: left;
        line-height: 100%;
        /* padding: 0px 40px 0px 0; */
        margin-left: 30px;
        margin-right: 10px;
    }

    .contests-only p {
        /* list-style: none; */

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: large;
        text-align: justify;
        /* line-height: 75%; */
        /* padding: 0px 30px 30px 0; */
        margin-left: 30px;
        margin-right: 10px;

    }

    /* .horizontal-shake {
        position: relative;
        animation: shake 0.8s infinite;
    } */

    .horizontal-shake {
        position: relative;
        animation: shake 0.8s infinite;
    }


    @keyframes shake {
        0% {
            transform: translateX(0);
        }

        20% {
            transform: translateX(-5px);
        }

        40% {
            transform: translateX(5px);
        }

        60% {
            transform: translateX(-5px);
        }

        80% {
            transform: translateX(5px);
        }

        100% {
            transform: translateX(0);
        }
    }
</style>
<section id="contests" class="gallery mt-5">
    <div class="container gallery">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Contests</h2>

            <!-- <div class="d-flex justify-content-center">
                <button class="btn btn-success horizontal-shake" data-bs-toggle="modal" data-bs-target="#myModal">Result</button>&emsp;
            </div> -->
            <div class="d-flex justify-content-center">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#contest_general_rule">General Rules</button>&emsp;
            </div>
            <br>

            <div class="modal" id="contest_general_rule">
                <div class="modal-dialog modal-dialog-centered modal-xxl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="assets/img/contests/pdf/general-rules.pdf" class="embed-responsive-item" width="100%" height="700px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gallery-container text-center" data-aos="fade-up">

                <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                    <div class="gallery-wrap">
                        <a href="https://forms.gle/vh6rzVSnjKe1XYga7" target="_blank">
                            <img src="assets/img/contests/bookreview.jpeg" class="img-fluid" alt="" width="100px" height="200px">
                        </a>
                        <div class="gallery-links">

                            <a href="assets/img/contests/pdf/book-review.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>

                            <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSfPrYWa1gRqVD4FG1wSSmDPAzw6n8I2_ybOT3XlvcOSulCtEA/viewform" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a> -->

                            <!-- <a href="contest-bookreview-registration.php"><i class="bx bx-link"></i><span>Apply</span></a> -->
                            <a href="contest-bookreview-registration.php"><i class="bx bx-link"></i><span>Results</span></a>
                            <!-- <a href="https://www.youtube.com/watch?v=7evzxFxrxRU&list=PLWnK7DhsuZ9AaxYR2wbH2869cUtzr0sCk" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                            <!-- <a href="assets/img/contests/Guide Lines.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a> -->

                        </div>
                    </div>
                </div>

                <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                    <div class="gallery-wrap">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfPrYWa1gRqVD4FG1wSSmDPAzw6n8I2_ybOT3XlvcOSulCtEA/viewform" target="_blank">
                            <img src="assets/img/contests/poetry-recitation.jpeg" class="img-fluid" alt="">
                        </a>
                        <div class="gallery-links">
                            <a href="assets/img/contests/pdf/poetry-rec-rules.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                            <!-- <a href="contest-poetryrecitation.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a> -->
                            <!-- <a href="https://www.youtube.com/watch?v=7evzxFxrxRU&list=PLWnK7DhsuZ9AaxYR2wbH2869cUtzr0sCk" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->
                            <a href="contest-poetryrecitation.php" title="More Details"><i class="bx bx-link"></i><span>Results</span></a>
                        </div>
                    </div>
                </div>

                <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-app">
                    <div class="gallery-wrap">
                        <img src="assets/img/contests/story-telling.jpeg" href="https://docs.google.com/forms/d/e/1FAIpQLSenjtwMpymnTi7mF88Iq38uGuackVdFhmM9hkbXjj_XRuX8Qw/viewform" target="_blank" class="img-fluid" alt="">
                        <div class="gallery-links">
                            <a href="assets/img/contests/pdf/story-telling.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                            <!-- <a href="contest-story-telling-registration.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a> -->
                            <a href="contest-story-telling-registration.php" title="More Details"><i class="bx bx-link"></i><span>Results</span></a>
                            <!-- <a href="https://www.youtube.com/watch?v=Lg-BCS3p3sA&list=PLWnK7DhsuZ9CJlcJaV1VCbIRuy9tYURIc" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->
                        </div>
                    </div>
                </div>

                <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                    <div class="gallery-wrap">
                        <img src="assets/img/contests/cartoon.jpeg" href="https://docs.google.com/forms/d/e/1FAIpQLSd0sQ8y6i5MIWK51x29rOHZMFpelMr5WJXxj18L8TStjJoVTg/viewform" target="_blank" class="img-fluid" alt="">
                        <div class="gallery-links">
                            <a href="assets/img/contests/pdf/cartoon-rules.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                            <!-- <a href="contest-cartoon-registration.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a> -->
                            <a href="contest-cartoon-registration.php" title="More Details"><i class="bx bx-link"></i><span>Results</span></a>
                            <!-- <a href="https://www.youtube.com/watch?v=SYhHiAijWSI&list=PLWnK7DhsuZ9AHgSDTDXzVEORnRROCUevX" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                        </div>
                    </div>
                </div>

                <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                    <div class="gallery-wrap">
                        <img src="assets/img/contests/quiz-poster.jpeg" href="https://docs.google.com/forms/d/e/1FAIpQLSd0sQ8y6i5MIWK51x29rOHZMFpelMr5WJXxj18L8TStjJoVTg/viewform" target="_blank" class="img-fluid" alt="">
                        <div class="gallery-links">
                            <a href="assets/img/contests/pdf/quiz-rules.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                            <a href="apply_quiz.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a>
                            <!-- <a href="https://www.youtube.com/watch?v=SYhHiAijWSI&list=PLWnK7DhsuZ9AHgSDTDXzVEORnRROCUevX" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                        </div>
                    </div>
                </div>

                <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                    <div class="gallery-wrap">
                        <img src="assets/img/contests/modelassembly-poster.jpeg" href="https://docs.google.com/forms/d/e/1FAIpQLSdF5Vsl1E-ZEDNW4yBr6E6IZVNAvozMkHEiPn6VUt70BEtgDw/viewform" target="_blank" class="img-fluid" alt="">
                        <div class="gallery-links">
                            <a href="assets/img/contests/pdf/modelassembly-rules.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                            <!-- <a href="contest-modelassembly-registration.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a> -->
                            <!-- <a href="https://www.youtube.com/watch?v=SYhHiAijWSI&list=PLWnK7DhsuZ9AHgSDTDXzVEORnRROCUevX" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>