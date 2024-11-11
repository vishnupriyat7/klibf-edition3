<!DOCTYPE html>
<html lang="en">

<?php include "head-style.php"; ?>

<style>
    ul.custom-bullet {
        list-style: none;
        /* Remove the default bullet */
        padding-left: 1;
        /* Align the list without extra padding */
    }

    ul.custom-bullet li {
        display: flex;
        /* Use flex to keep the star and content on the same line */
        align-items: flex-start;
        /* Optional: Adjust alignment for long text */
    }

    ul.custom-bullet li::before {
        content: "\2605";
        /* Unicode for a star character */
        color: #FFA500;
        /* Set star color (e.g., orange) */
        font-size: 1.2em;
        /* Adjust star size */
        margin-right: 0.5em;
        /* Space between star and text */
        display: inline-block;
        /* Ensures the star stays inline with content */
    }

    .malayalam-text {
        font-family: 'Meera', sans-serif;
        line-height: 2;
        font-size: 18px;
        font-weight: 500;
        font-style: normal;
    }

    /* Additional CSS for adjusting the card width */
    .card {
        max-width: 100vw;
        /* Allow the card to expand to its container's width */
    }

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

<body>

    <!-- ======= Header ======= -->
    <?php include "header-inner.php"; ?>
    <!-- End Header -->

    <main id="about-inner-main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Online Contests</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contests</li>
                        <li>Online Contests</li>

                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs Section -->
        <section id="contests" class="gallery">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <!--end col-->
                    <div class="col-xxl-12 col-xl-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="text-center">
                                <img class="mx-auto d-block img-fluid" src="assets/img/contests/Contest_Web.jpg" style="width: 100%;">
                            </div>
                            <div class="card-body"  style="margin-top: -10%;">
                                <div class="tab-content p-2">
                                    <!-- <div class="d-flex justify-content-end">
                                        <a href="apply_quiz.php" class="mr-2 btn btn-success horizontal-shake"><i class="fa fa-download"></i> Click Here to Apply</a>
                                    </div> -->
                                    <div class="align-items-center text-center malayalam-text">
                                        <h3><b>പൊതുമാർഗ്ഗനിർദ്ദേശങ്ങൾ</b></h3>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 malayalam-text mt-4 m-4">
                                        <div>
                                            <p>കേരള നിയമസഭാ അന്താരാഷ്ട്ര പുസ്തകോത്സവം മൂന്നാം പതിപ്പിന്റെ പ്രചാരണത്തിൻെറ ഭാഗമായി പുസ്തകാസ്വാദനം (വീഡിയോ), പദ്യപാരായണം (വീഡിയോ) , ഒരു കഥ പറയാം (വീഡിയോ) , കാർട്ടൂൺ മത്സരം (ചിത്രം) എന്നീ ഓൺലൈൻ മത്സരങ്ങൾ സംഘടിപ്പിക്കുന്നു.</p>

                                        </div>
                                        <div class="align-items-start">
                                            <h5><b>മത്സരങ്ങൾക്കുള്ള പൊതു മാനദണ്ഡങ്ങൾ താഴെ പറയുന്നവയാണ് : </b></h5>
                                        </div>

                                        <ul class="custom-bullet mt-3">
                                            <li>
                                                <p>മത്സരത്തിൽ പങ്കെടുക്കാൻ ആഗ്രഹിക്കുന്നവർ, <a href="https://klibf.niyamasabha.org/" target="_blank">www.klibf.niyamasabha.org</a> എന്ന വെബ്‌സൈറ്റിൽ, അതാത് മത്സരങ്ങൾക്ക് നേരെ ലഭ്യമാക്കിയിരിക്കുന്ന ഗൂഗിൾ ഫോമിൽ മുഖേന ആവശ്യപ്പെട്ടിരിക്കുന്ന വിവരങ്ങൾ രേഖപ്പെടുത്തി വീഡിയോ / ഇമേജ് ഫയൽ അപ്‌ലോഡ് ചെയ്യേണ്ടതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>മത്സരാർത്ഥിയുടെ പ്രായം കണക്കാക്കുന്നത് 01.11.2024 തീയതി പ്രാബല്യത്തിൽ ആയിരിക്കും.</p>
                                            </li>
                                            <li>
                                                <p>മത്സരത്തിനായി ഇംഗ്ലീഷ്, മലയാളം എന്നീ ഭാഷകളിൽ എൻട്രികൾ അപ്‌ലോഡ് ചെയ്യാവുന്നതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>ഓരോ മത്സര വിഭാഗത്തിലും ഒരാൾക്ക് ഒരു എൻട്രി മാത്രമേ അനുവദിക്കുകയുള്ളു.</p>
                                            </li>
                                            <li>
                                                <p>മത്സരത്തിനായി അപ്‌ലോഡ് ചെയ്യുന്ന വീഡിയോകൾക്ക് ആവശ്യത്തിന് ക്വാളിറ്റി ഉണ്ടെന്ന് ഉറപ്പ് വരുത്തേണ്ടതാണ്. (മൊബൈൽ ഫോണിന്റെ സെൽഫി ക്യാമറ ഉപയോഗിച്ചുള്ള ചിത്രീകരണം ഒഴിവാക്കുന്നതാണ് അഭികാമ്യം.)</p>
                                            </li>
                                            <li>
                                                <p>എഡിറ്റിംഗ് നടത്തിയതോ, ബാക്ക്ഗ്രൗണ്ട് മ്യൂസിക് ചേർത്തതോ ആയ വീഡിയോകൾ പരിഗണിക്കുന്നതല്ല.</p>
                                            </li>
                                            <li>
                                                <p>പ്രാഥമികമായി തെരെഞ്ഞെടുക്കപ്പെടുന്ന വീഡിയോകൾ KLIBF-ന്റെ ഔദ്യോഗിക യൂട്യൂബ് ചാനലിലും ഫേസ്ബുക്ക് പേജിലും അപ്‌ലോഡ് ചെയ്യുന്നതാണ്. ഗൂഗിൾ ഫോം മുഖേന ലഭ്യമാക്കിയിരിക്കുന്ന ഫേസ്ബുക്ക് പ്രൊഫൈൽ ഐ.ഡി.യുമായി collab ചെയ്യുന്നതുമാണ്.</p>
                                            </li>
                                            <li>
                                                <p>അപ്‌ലോഡ് ചെയ്യുന്ന വീഡിയോകളുടെ ലിങ്ക്, ലഭ്യമാക്കിയിരിക്കുന്ന വാട്സ്ആപ്പ് മൊബൈൽ നമ്പർ/ ഇമെയിൽ വിലാസത്തിൽ ലഭ്യമാക്കുന്നതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>പ്രസ്‌തുത വീഡിയോ ലിങ്കുകൾ, സോഷ്യൽ മീഡിയ പ്ലാറ്റുഫോമുകളിലൂടെ ഷെയർ ചെയ്യാവുന്നതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>2024 ഡിസംബർ 31 വരെ, വീഡിയോകൾക്ക് ലഭിക്കുന്ന viewsഉം likesഉം മാത്രം പരിഗണിച്ച് ഓരോ വിഭാഗത്തില്‍ നിന്നും 30 വീഡിയോകൾ ഷോർട്ട് ലിസ്റ്റ് ചെയ്യുന്നതും പ്രസ്‌തുത വീഡിയോകൾ ജൂറി പാനൽ വിലയിരുത്തുന്നതുമാണ് .</p>
                                            </li>
                                            <li>
                                                <p>2024 ഡിസംബർ 31 വരെ വീഡിയോകൾക്ക് ലഭിക്കുന്ന viewsഉം likesഉം , ജൂറി പാനൽ നൽകുന്ന മാർക്ക് എന്നിവ 1:1 അനുപാതത്തിൽ കണക്കാക്കിയാണ് അന്തിമ വിധി നിർണ്ണയിക്കുന്നത്.</p>
                                            </li>
                                            <li>
                                                <p>ഓരോ വിഭാഗത്തിലും ആദ്യ മൂന്ന് സ്ഥാനക്കാർക്ക് യഥാക്രമം, 2500 രൂപയുടെ ക്യാഷ് പ്രൈസും 2500 രൂപയുടെ പുസ്തക കൂപ്പണുകളും, 1500 രൂപയുടെ ക്യാഷ് പ്രൈസും 1500 രൂപയുടെ പുസ്തക കൂപ്പണുകളും, 1000 രൂപയുടെ ക്യാഷ് പ്രൈസും 1000 രൂപയുടെ പുസ്തകകൂപ്പണുകളും സർട്ടിഫിക്കറ്റുകളും നൽകുന്നതുമാണ്.</p>
                                            </li>
                                            <li>
                                                <p>അന്തിമ വിധി നിർണ്ണയത്തിന്, നിയമസഭാ സെക്രട്ടേറിയറ്റ് ആവശ്യപ്പെടുന്ന പക്ഷം പ്രായം തെളിയിക്കുന്ന തിരിച്ചറിയൽ രേഖ ലഭ്യമാക്കേണ്ടതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>വീഡിയോകൾക്ക് ലഭിക്കുന്ന likes, views എന്നിവയിൽ എന്തെങ്കിലും ക്രമക്കേടുകൾ ശ്രദ്ധയിൽപ്പെടുന്നപക്ഷം പ്രസ്തുത എന്‍ട്രികള്‍ അയോഗ്യമാക്കുന്നതായിരിക്കും.</p>
                                            </li>
                                            <li>
                                                <p>ഫലപ്രഖ്യാപനം സംബന്ധിച്ച അന്തിമ തീരുമാനം നിയമസഭാ സെക്രട്ടറിയേറ്റിൽ നിക്ഷിപ്തമായിരിക്കുന്നതാണ്.
                                            </li>
                                            <li>
                                                <p>KLIBF-ന്റെ ഔദ്യോഗിക യൂട്യൂബ് ചാനലിലും ഫേസ്ബുക്ക് പേജിലും അപ്‌ലോഡ് ചെയ്യുന്ന വീഡിയോകളുടെ കോപ്പിറൈറ്റ് (copyright) - കെ-ലാംപ്സ് (മീഡിയ) - സഭ ടി.വി.യിൽ നിക്ഷിപ്തമായിരിക്കും.</p>
                                            </li>
                                            <li>സാമൂഹ്യ മാധ്യമങ്ങളിൽ ഇതിനകം അപ്‌ലോഡ് ചെയ്ത വീഡിയോകൾ മത്സരത്തിന് ഉപയോഗിക്കാൻ പാടുള്ളതല്ല.
                                            </li>
                                            <li>
                                                <p>നിയമസഭാ സെക്രട്ടേറിയറ്റിലെ ജീവനക്കാർക്കും കുടുംബാംഗങ്ങൾക്കും (കരാര്‍ ജീവനക്കാര്‍/ദിവസവേതന ജീവനക്കാര്‍‍ ഉള്‍പ്പെടെ) മത്സരങ്ങളില്‍ പങ്കെടുക്കാന്‍ കഴിയുന്നതല്ല.</p>
                                            </li>
                                            <li>
                                                <p class="fw-bold">എൻട്രികൾ ലഭിക്കുന്നതിനുള്ള അവസാന തീയതി - 2024 നവംബർ 30.</p>
                                            </li>
                                        </ul>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"></h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe src="./contestsresult/contests-result.pdf" class="embed-responsive-item" width="100%" height="700px"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gallery-container text-center" data-aos="fade-up">

                                        <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                                                <div class="gallery-wrap">
                                                    <a href="https://forms.gle/vh6rzVSnjKe1XYga7" target="_blank">
                                                        <img src="assets/img/contests/book-review-new.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="gallery-links">
                                                       
                                                     <a href="assets/img/contests/pdf/book-review.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a> 

                                                        <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSfPrYWa1gRqVD4FG1wSSmDPAzw6n8I2_ybOT3XlvcOSulCtEA/viewform" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a> -->

                                                        <a href="contest-bookreview-registration.php"><i class="bx bx-link"></i><span>Apply</span></a>
                                                        <!-- <a href="https://www.youtube.com/watch?v=7evzxFxrxRU&list=PLWnK7DhsuZ9AaxYR2wbH2869cUtzr0sCk" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                                                         <!-- <a href="assets/img/contests/Guide Lines.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a> -->

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                                                <div class="gallery-wrap">
                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfPrYWa1gRqVD4FG1wSSmDPAzw6n8I2_ybOT3XlvcOSulCtEA/viewform" target="_blank">
                                                        <img src="assets/img/contests/poetry-rectn-new.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="gallery-links">
                                                        <a href="assets/img/contests/pdf/poetry-rec-rules.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                                                        <a href="contest-poetryrecitation.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a>
                                                        <!-- <a href="https://www.youtube.com/watch?v=7evzxFxrxRU&list=PLWnK7DhsuZ9AaxYR2wbH2869cUtzr0sCk" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-app">
                                                <div class="gallery-wrap">
                                                    <img src="assets/img/contests/story-telling-new.jpg" href="https://docs.google.com/forms/d/e/1FAIpQLSenjtwMpymnTi7mF88Iq38uGuackVdFhmM9hkbXjj_XRuX8Qw/viewform" target="_blank" class="img-fluid" alt="">
                                                    <div class="gallery-links">
                                                        <a href="assets/img/contests/pdf/story-telling.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                                                        <a href="contest-story-telling-registration.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a>
                                                        <!-- <a href="https://www.youtube.com/watch?v=Lg-BCS3p3sA&list=PLWnK7DhsuZ9CJlcJaV1VCbIRuy9tYURIc" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="co-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 gallery-item filter-web">
                                                <div class="gallery-wrap">
                                                    <img src="assets/img/contests/enne-swadheenicha-new.jpg" href="https://docs.google.com/forms/d/e/1FAIpQLSd0sQ8y6i5MIWK51x29rOHZMFpelMr5WJXxj18L8TStjJoVTg/viewform" target="_blank" class="img-fluid" alt="">
                                                    <div class="gallery-links">
                                                        <a href="assets/img/contests/pdf/cartoon-rules.pdf" data-gallery="galleryGallery" class="gallery-lightbox" title=""><i class="bx bx-plus"></i><span>Rules</span></a>
                                                        <a href="contest-cartoon-registration.php" title="More Details"><i class="bx bx-link"></i><span>Apply</span></a>
                                                        <!-- <a href="https://www.youtube.com/watch?v=SYhHiAijWSI&list=PLWnK7DhsuZ9AHgSDTDXzVEORnRROCUevX" target="_blank" title="More Details"><i class="bx bx-link"></i><span>Entries</span></a> -->

                                                    </div>
                                                </div>
                                            </div>
                                           

                                          
                                            

                                        </div>
                                        <div style="margin-left: 2rem; font-size: larger;">
                                                <b><span> <u>For more details, pls contact </u></b></span><br>
                                                <p>Telephone : 0471 - 2512263 (10.15 am -5.00 pm IST)<br>
                                                    Whatsapp : <a href=" https://wa.me/7356602286">7356602286</a> (pls text your queries. No Phone calls)<br>
                                                    QUIZ : klibf.quiz@gmail.com<br>
                                                    പുസ്തകാസ്വാദന മത്സരം : klibf.bookreview@gmail.com <br>
                                                    പദ്യപാരായണ മത്സരം : klibf.poetryrecitation@gmail.com <br>

                                                    ഒരു കഥ പറയാം മത്സരം : klibf.storytelling@gmail.com<br>

                                                    കാർട്ടൂൺ മത്സരം : klibf.cartoondrawing@gmail.com
                                                </p>
                                            </div>
                                        <!-- </div> -->
                                        <!--end tab-pane-->

                                        <!--end tab-pane-->

                                        <!--end tab-pane-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end col-->

                    </div>

                </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>

</body>

</html>