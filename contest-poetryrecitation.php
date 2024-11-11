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
        font-size: 16px;
        font-weight: 500;
        font-style: normal;
    }

    /* Additional CSS for adjusting the card width */
    .card {
        max-width: 100vw;
        /* Allow the card to expand to its container's width */

    }

    .card ul,
    p {
        list-style: none;
        padding-left: 2%;
        padding-right: 4%;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: large;
    }

    .card li {
        text-align: justify;
        padding-left: 2%;
        padding-right: 4%;
    }

    .horizontal-shake {
        position: relative;
        animation: shake 0.8s infinite;
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
                    <h2>Poetry Recitation Registration</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contests_online.php">Online Contests</a></li>
                        <li>Poetry Recitation</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs Section -->

        <!-- <section class="contest-bkrvw-reg"> -->
        <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card overflow-auto">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScKw20kdrJw7rUjexrK_vo8HU4-mIN3M1NT7wAXfSbFYrph9w/viewform?embedded=true" width="640" height="1815" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                     </div> 

                </div>
            </div> -->
        <!-- <div class="container d-flex justify-content-center align-items-center min-vh-100"> -->
        <!-- Section to hold your Google Sheets link -->
        <section>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <!--end col-->
                    <div class="col-xxl-12 col-xl-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card mt-6">

                            <div class="text-center">
                                <img class="mx-auto d-block img-fluid" src="./assets/img/contests/Padyam_Web.jpg" style="width: 100%;">
                            </div>

                            <div class="card-body"  style="margin-top: -10%;">
                                <div class="tab-content malayalam-text">
                                    <!-- <div class="d-flex justify-content-end">
                                        <button class="btn btn-success horizontal-shake" data-bs-toggle="modal" data-bs-target="#myModal">Result</button>&emsp;
                                        <a href="https://www.youtube.com/watch?v=tIrV4JzbRF4&list=PLWnK7DhsuZ9CnwyahQsrezv_GYZbDlvQ8" class="mr-2 btn btn-success" target="_blank"><i class="fa fa-download"></i> Entries</a>
                                    </div> -->
                                    <div class="d-flex justify-content-end">

                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="font-size: 16px;">General Rules</button>&emsp;

                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTgmE0GOjrOu21K7B4uK9psaPSp1wntsFxL5gRZuIl8XQ2Pw/viewform" target="_blank" title="More Details"><button class="btn btn-success horizontal-shake" style="font-size: 16px;">Apply</button></a>
                                        &emsp;
                                    </div>

                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"></h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe src="assets/img/contests/general_rules.pdf" class="embed-responsive-item" width="100%" height="700px"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="align-items-center text-center mt-2">
                                        <h3><b>പദ്യപാരായണ മത്സരം </b></h3>

                                    </div>

                                    <!-- <div class="tab-pane active" id="personalDetails" role="tabpanel"> -->

                                    <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScKw20kdrJw7rUjexrK_vo8HU4-mIN3M1NT7wAXfSbFYrph9w/viewform?embedded=true" width="1000" height="1815" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
                                    <ul class="custom-bullet">
                                        <li>
                                            <!-- <h3>Rules & Regulations</h3> -->

                                            <p>പദ്യപാരായണ മത്സരത്തിൽ പങ്കെടുക്കാൻ ആഗ്രഹിക്കുന്നവർ, തങ്ങൾക്കിഷ്ടപെട്ട   കവിത  (5 മിനുറ്റിൽ  കവിയാത്ത) വീഡിയോ രൂപത്തിൽ ചിത്രീകരിച്ച്, <a href="https://klibf.niyamasabha.org/" target="_blank">www.klibf.niyamasabha.org</a> എന്ന വെബ്‌സൈറ്റിൽ ലഭ്യമാക്കിയിരിക്കുന്ന ഗൂഗിൾ ഫോമിൽ അപ്‌ലോഡ് ചെയ്യേണ്ടതാണ്. അതോടൊപ്പം മത്സരാർത്ഥിയുടെ പേര്, ഫോട്ടോ, ജനനതീയതി,  വാട്സ്ആപ്പ്   മൊബൈൽ നമ്പർ, ഇ-മെയിൽ വിലാസം, ഫേസ്ബുക്ക് പ്രൊഫൈലിന്റെ ഐ.ഡി., കവിതയുടെ പേര്, രചയിതാവ് എന്നിവയും ഗൂഗിൾ ഫോമിൽ അപ്‌ലോഡ് ചെയ്യേണ്ടതാണ്.</p>

                                        <li>
                                            <p class="fw-bold">ജൂനിയേഴ്സ് (18വയസ്സു വരെ), സീനിയേഴ്സ് (18 മുതൽ 40 വയസ്സ് വരെ), മാസ്റ്റേഴ്സ് (40 വയസ്സിനു മുകളിൽ) എന്നീ മൂന്ന് വിഭാഗങ്ങളിലാണ് പദ്യപാരായണ മത്സരം സംഘടിപ്പിക്കുന്നത്.

                                            </p>
                                        </li>
                                        <li>
                                            <p>വീഡിയോ അപ്‌ലോഡ് ചെയ്യുന്നതിന് മുൻപായി, പൊതു നിർദ്ദേശങ്ങളും പാലിക്കേണ്ടതാണ്.</p>

                                        </li>
                                        <li>
                                            <p class="fw-bold">എൻട്രികൾ ലഭിക്കുന്നതിനുള്ള അവസാന തീയതി -2024 നവംബർ 30</p>
                                        </li>
                                        <!-- <div style="margin-left: 2rem;">
                                            <p>വീഡിയോ അപ്‌ലോഡ് ചെയ്യുന്നതിന് മുൻപായി, പൊതു നിർദ്ദേശങ്ങളും പാലിക്കേണ്ടതാണ്.</p>

                                            <p>എൻട്രികൾ ലഭിക്കുന്നതിനുള്ള അവസാന തീയതി -2024 നവംബർ 30</p>



                                        </div> -->

                                    </ul>
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