<!DOCTYPE html>
<html lang="en">

<?php include "head-style.php"; ?>
<link href="https://fonts.googleapis.com/css2?family=Meera&display=swap" rel="stylesheet">


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
        font-size: large;
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

    /* Base styles */
    .table-responsive table {
        width: 100%;
        table-layout: fixed;
    }

    /* Mobile styles */
    /* Mobile styles */
    /* Mobile styles */
    @media (max-width: 768px) {
        .table-responsive thead {
            display: none;
            /* Hide table headers on mobile */
        }

        .table-responsive tbody,
        .table-responsive tr,
        .table-responsive td {
            display: block;
            width: 100%;
            box-sizing: border-box;
            /* Ensures padding is contained within td */
        }

        .table-responsive tr {
            margin-bottom: 1rem;
            border-bottom: 1px solid #ddd;
            /* Line under each row */
        }

        .table-responsive td {
            display: flex;
            flex-direction: column;
            /* Makes each cell a full-width block */
            padding: 0.5rem;
            position: relative;
            word-wrap: break-word;
            /* Allow data to wrap */
            white-space: normal;
            /* Allow data to wrap in small screens */
            border-bottom: 1px solid #ddd;
            /* Horizontal line for each td */
            text-align: left;
            /* Aligns text for readability */
        }

        .table-responsive td::before {
            content: attr(data-label);
            font-weight: bold;
            margin-bottom: 0.3rem;
            /* Space between label and content */
            white-space: normal;
            /* Allow wrapping */
            word-wrap: break-word;
            /* Ensure label wraps if too long */
            color: #000;
            /* Adjust color for label readability */
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
                    <h2>Student's Corner</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <!-- <li>Contest</li> -->
                        <li>Student's Corner</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs Section -->
        <section>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <!--end col-->
                    <div class="col-xxl-12 col-xl-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card malayalam-text">
                            <!-- <div class="text-center">
                                <img class="mx-auto d-block img-fluid" src="assets/img/contests/Model_Parliament_Web.jpg" style="width: 100%;">
                            </div> -->
                            <div class="card-body" style="margin-top: 0%;">
                                <div class="tab-content mt-2">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="apply_quiz.php" class="mr-2 btn btn-success horizontal-shake fw-bold fs-10"><i class="fa fa-download"></i> Click Here to Apply</a> -->
                                        <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSdF5Vsl1E-ZEDNW4yBr6E6IZVNAvozMkHEiPn6VUt70BEtgDw/viewform" target="_blank" title="More Details"><button class="btn btn-success horizontal-shake" style="font-size: 16px;">Click Here to Apply</button></a> -->
                                    </div>
                                    <div class="align-items-center text-center">
                                        <h3><b>പുസ്തകോത്സവത്തിലെ സ്റ്റുഡന്റ്റ്സ് കോർണറിലേക്ക് സ്വാഗതം!</b></h3>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 mt-4">

                                        <!-- <h5> -->
                                        <ul class="custom-bullet">

                                            <li>
                                                <p>പുസ്തകോത്സവത്തിൻ്റെ ഭാഗമായി വിദ്യാർഥികൾക്ക് മാത്രമായി 'സ്റ്റുഡന്റ്റ്സ് കോർണർ' എന്ന പേരിൽ ഒരു പ്രത്യേക വേദി രൂപകൽപ്പന ചെയ്തിട്ടുണ്ട്. വിദ്യാഭ്യാസവുമായി വിനോദത്തെ സമന്വയിപ്പിക്കുന്ന ഈ വേദിയിൽ,</span> </p>
                                            </li>
                                            <ul>
                                                <li>
                                                    <b>വൈവിധ്യമാർന്ന വിഷയങ്ങളുടെ രസകരമായ അവതരണം</b>
                                                </li>
                                                <li>
                                                    <b>മാജിക് ഷോ, പപ്പറ്റ് ഷോ</b>
                                                </li>
                                                <li><b>ക്വിസുകൾ, ഒറിഗാമി, ആകർഷകമായ ഗെയിമുകൾ</b> , തുടങ്ങി വിവിധ പരിപാടികൾ സംഘടിപ്പിക്കുന്നു. </li><br>
                                            </ul>
                                            <li>
                                                <p>കൂടാതെ, വിദ്യാർഥികൾക്ക് അവരുടെ കലാപരമായ കഴിവുകൾ പ്രകടിപ്പിക്കുന്നതിന് പ്രോഗ്രാമുകൾക്കിടയിൽ അവസരം നൽകും. KLIBF വെബ്സൈറ്റിലെ 'വെർച്വൽ ക്യൂ' വഴി രജിസ്റ്റർ ചെയ്യുന്ന വിദ്യാർഥികൾക്ക് ഇതിലേക്ക് അവസരം ലഭിക്കുന്നതാണ്.
                                                </p>
                                            </li>


                                        </ul>




                                        <div style="margin-left: 2rem; font-size: larger;">
                                            <b><span> <u>For more details, pls contact </u></b></span><br>
                                            <p>Telephone : 9446094476, 9447657056, 9946124732, 8301867235<br>
                                                <!-- Whatsapp : <a href=" https://wa.me/7356602286">7356602286</a> (pls text your queries. No Phone calls)<br> -->
                                                <!-- QUIZ : klibf.quiz@gmail.com<br> -->
                                                <!-- പുസ്തകാസ്വാദന മത്സരം : klibf.bookreview@gmail.com <br>
                                                പദ്യപാരായണ മത്സരം : klibf.poetryrecitation@gmail.com <br>

                                                ഒരു കഥ പറയാം മത്സരം : klibf.storytelling@gmail.com<br> -->

                                                Email : klibf.reception@gmail.com
                                            </p>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </section><br><br><br>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>

</body>

</html>