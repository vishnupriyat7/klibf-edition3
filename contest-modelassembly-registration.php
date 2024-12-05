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
                    <h2>Model Assembly</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contest</li>
                        <li>Model Assembly</li>
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
                            <div class="text-center">
                                <img class="mx-auto d-block img-fluid" src="assets/img/contests/Model_Parliament_Web.jpg" style="width: 100%;">
                            </div>
                            <div class="card-body" style="margin-top: -10%;">
                                <div class="tab-content mt-2">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="apply_quiz.php" class="mr-2 btn btn-success horizontal-shake fw-bold fs-10"><i class="fa fa-download"></i> Click Here to Apply</a> -->
                                        <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSdF5Vsl1E-ZEDNW4yBr6E6IZVNAvozMkHEiPn6VUt70BEtgDw/viewform" target="_blank" title="More Details"><button class="btn btn-success horizontal-shake" style="font-size: 16px;">Click Here to Apply</button></a> -->
                                    </div>
                                    <div class="align-items-center text-center">
                                        <h3><b>മാതൃക നിയമസഭ - പൊതുമാർഗ്ഗനിർദ്ദേശങ്ങൾ</b></h3>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 mt-4">

                                        <!-- <h5> -->
                                        <ul class="custom-bullet">

                                            <li>
                                                <p>2025 ജനുവരി 07 മുതൽ 13 വരെ, കേരള നിയമസഭ സംഘടിപ്പിക്കുന്ന കേരള നിയമസഭ അന്താരാഷ്ട്ര പുസ്തകോത്സവം മൂന്നാം പതിപ്പിന്റെ പ്രചാരണത്തിൻെറ ഭാഗമായി, തിരുവനന്തപുരം ജില്ലയിലെ സർക്കാർ , എയ്ഡഡ് , സ്വകാര്യ കോളേജുകളിൽ നിന്നുള്ള ബിരുദ - ബിരുദാനന്തര ബിരുദ വിദ്യാർത്ഥിനികളെ പങ്കെടുപ്പിച്ചു കൊണ്ട് <span class="fw-bold">മാതൃക നിയമസഭ ( Model Assembly) സംഘടിപ്പിക്കുന്നു.</span> </p>
                                            </li>

                                            <li>
                                                <p>ഒരു കോളേജിൽ നിന്നും 5 വിദ്യാർത്ഥിനികളെ വീതം നാമനിർദ്ദേശം ചെയ്യാവുന്നതാണ്.
                                                    പങ്കെടുക്കാൻ ആഗ്രഹിക്കുന്നവർ ലഭ്യമാക്കിയിരിക്കുന്ന ഗൂഗിൾ ഫോമിൽ വിശദാംശങ്ങൾ അപ്‌ലോഡ് ചെയ്യേണ്ടതാണ്.

                                                </p>
                                            </li>
                                            <li>
                                                <p>തെരഞ്ഞെടുക്കപ്പെടുന്ന വിദ്യാര്‍ത്ഥിനികള്‍ നിയമസഭാ സെക്രട്ടേറിയറ്റ് നല്‍കുന്ന നിര്‍ദ്ദേശങ്ങള്‍ക്ക് അനുസൃതമായി ട്രെയിനിംഗിലും തുടര്‍ന്ന് 2024 ഡിസംബർ 10-ാം തീയതി സംഘടിപ്പിക്കുന്ന മാതൃകാ നിയമസഭയിലും പങ്കെടുക്കേണ്ടതാണ്.
                                                </p>
                                            </li>
                                            <li>
                                                <p> പങ്കെടുക്കുന്നവര്‍ക്ക് യാത്രാബത്ത / മറ്റ് ആനുകൂല്യങ്ങള്‍ എന്നിവയ്ക്ക് അര്‍ഹതയുണ്ടായിരിക്കുന്നതല്ല.
                                                </p>
                                            </li>
                                            <li>
                                                <p> ഗവണ്‍മെന്റ് സെക്രട്ടേറിയറ്റിലെ പഴയ നിയമസഭാ മന്ദിരത്തിലാണ് മാതൃകാ നിയമസഭ സംഘടിപ്പിക്കുന്നത്.</p>
                                            </li>
                                            <li>
                                                <p>പങ്കെടുക്കുന്നവര്‍ക്ക് സര്‍ട്ടിഫിക്കറ്റ് നല്‍കുന്നതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    രജിസ്റ്റര്‍ ചെയ്യേണ്ട അവസാന തീയതി <span class="fw-bold">30.11.2024</span> </p>
                                            </li>
                                            <li>
                                                <p> മാതൃക നിയമസഭ ( Model Assembly) യുമായി ബന്ധപ്പെട്ട് നിയമസഭാ സെക്രട്ടേറിയറ്റിന്റെ തീരുമാനങ്ങള്‍ അന്തിമമായിരിക്കും.</p>
                                            </li>

                                        </ul>




                                        <div style="margin-left: 2rem; font-size: larger;">
                                            <b><span> <u>For more details, pls contact </u></b></span><br>
                                            <p>Telephone : 0471 - 2512263 (10.15 am -5.00 pm IST)<br>
                                                Whatsapp : <a href=" https://wa.me/7356602286">7356602286</a> (pls text your queries. No Phone calls)<br>
                                                <!-- QUIZ : klibf.quiz@gmail.com<br> -->
                                                <!-- പുസ്തകാസ്വാദന മത്സരം : klibf.bookreview@gmail.com <br>
                                                പദ്യപാരായണ മത്സരം : klibf.poetryrecitation@gmail.com <br>

                                                ഒരു കഥ പറയാം മത്സരം : klibf.storytelling@gmail.com<br> -->

                                                Email : klibf.modelparliament@gmail.com
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