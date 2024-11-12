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
                    <h2>Quiz Registration</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contest</li>
                        <li>Quiz</li>
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
                                <img class="mx-auto d-block img-fluid" src="assets/img/contests/Quiz_Web3.jpg" style="width: 100%;">
                            </div>
                            <div class="card-body" style="margin-top: -10%;">
                                <div class="tab-content mt-2">
                                    <div class="d-flex justify-content-end">
                                        <a href="apply_quiz.php" class="mr-2 btn btn-success horizontal-shake fw-bold fs-10"><i class="fa fa-download"></i> Click Here to Apply</a>
                                    </div>
                                    <div class="align-items-center text-center">
                                        <h3><b>ക്വിസ് മത്സരം - പൊതുമാർഗ്ഗനിർദ്ദേശങ്ങൾ</b></h3>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 mt-4">

                                        <!-- <h5> -->
                                        <ul class="custom-bullet">

                                            <li>
                                                <p>കേരള നിയമസഭാ അന്താരാഷ്‌ട്ര പുസ്തകോത്സവം മൂന്നാം പതിപ്പിൻെറ ഭാഗമായി സ്‌കൂൾ, കോളേജ് വിദ്യാർത്ഥികൾക്കായി ക്വിസ് മത്സരം സംഘടിപ്പിക്കുന്നു.</p>
                                            </li>

                                            <li>
                                                <p>മത്സരത്തിൽ ഒരു സ്‌കൂളിൽ (ഹൈസ്‌കൂൾ-ഹയർസെക്കണ്ടറി) / ഒരു കോളേജിൽ (ബിരുദ-ബിരുദാനന്തര വിദ്യാർഥികൾ) നിന്നും പരമാവധി രണ്ട് ടീമുകൾക്ക് (ഒരു ടീമിൽ രണ്ട് മത്സരാർത്ഥികൾ) പങ്കെടുക്കാവുന്നതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>രജിസ്‌ട്രേഷൻ സ്‌കൂൾ/ കോളേജ് മുഖേന നടത്തേണ്ടതാണ് .
                                                </p>
                                            </li>
                                            <li>
                                                <p> സ്കൂൾ കോളേജ് വിദ്യാര്‍ത്ഥികൾക്കായുള്ള പ്രാഥമിക മത്സരങ്ങൾ 5 മേഖലാ അടിസ്ഥാനത്തിലും സെമി ഫൈനല്‍, ഫെെനൽ മത്സരങ്ങൾ നിയമസഭാ മന്ദിരത്തിൽ വച്ചും സംഘടിപ്പിക്കുന്നതാണ്.
                                                </p>
                                            </li>
                                            <li>
                                                <p> രജിസ്‌ട്രേഷൻ നടപടികൾ <a href="https://klibf.niyamasabha.org/" target="_blank">www.klibf.niyamasabha.org</a> മുഖേന പൂർത്തിയാക്കേണ്ടതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>മേഖലാതല മത്സരങ്ങള്‍ക്ക് സ്പോട്ട് രജിസ്‌ട്രേഷൻ ഉണ്ടായിരിക്കുന്നതല്ല.</p>
                                            </li>
                                            <li>
                                                <p>മേഖലാ അടിസ്ഥാനത്തില്‍ നടത്തുന്ന പ്രാഥമിക മത്സരത്തിന്റെ ഒന്നാം റൗണ്ട് എഴുത്തു പരീക്ഷയിൽ നിന്നും തെരഞ്ഞെടുക്കുന്ന 6 ടീമുകൾക്കായി രണ്ടാം റൗണ്ട് മത്സരങ്ങൾ സംഘടിപ്പിക്കുന്നതും ആയതിൽ ആദ്യ സ്ഥാനങ്ങളിൽ എത്തുന്ന 3 ടീമുകൾ സെമിഫൈനലിലേക്ക് തെരഞ്ഞെടുക്കപ്പെടുന്നതുമാണ്.</p>
                                            </li>
                                            <li>
                                                <p> മേഖലാതല പ്രാഥമിക മത്സരങ്ങളിൽ <span class="fw-bold">സ്‌കൂൾ വിദ്യാർത്ഥികൾ രാവിലെ 10 മണിക്ക്</span> മുൻപും <span class="fw-bold">കോളേജ് വിദ്യാർത്ഥികൾ ഉച്ചയ്ക്ക് 1.30</span> മണിക്ക് മുൻപും റിപ്പോർട്ട് ചെയ്യേണ്ടതാണ്. റിപ്പോർട്ടിംഗ് സമയത്തിന് ശേഷം എത്തുന്ന ടീമുകളെ മത്സരത്തിൽ പങ്കെടുക്കുവാൻ അനുവദിക്കുന്നതല്ല.</p>
                                            </li>
                                            <li>
                                                <p> ക്വിസ് മത്സരങ്ങൾ പൊതുവിജ്ഞാനത്തെ ആസ്പദമാക്കിയുള്ളവയായിരിക്കും.</p>
                                            </li>
                                            <li>
                                                <p> ക്വിസ് മത്സരങ്ങളുടെ മീഡിയം മലയാളമായിരിക്കും.
                                                </p>
                                            </li>
                                            <li>
                                                <p> അഞ്ച് മേഖലകളിലായി, സ്‌കൂൾ തലത്തിൽ നിന്നും കോളേജ് തലത്തിൽ നിന്നും തെരഞ്ഞെടുക്കുന്ന 15 വീതം (ഓരോ മേഖലയിൽ നിന്നും ആദ്യ സ്ഥാനങ്ങളിൽ എത്തുന്ന 3 ടീമുകൾ വീതം) ടീമുകൾക്കുള്ള സെമിഫൈനൽ, ഫൈനൽ മത്സരങ്ങൾ യഥാക്രമം <span class="fw-bold">2025 ജനുവരി 9, 10</span> തീയതികളിൽ നിയമസഭാ മന്ദിരത്തിൽ വച്ച് നടത്തുന്നതാണ്. സെമിഫൈനലിലേക്ക് തെരഞ്ഞെടുക്കപ്പെടുന്ന മത്സരാർത്ഥികൾ അതത് ദിവസം <span class="fw-bold">രാവിലെ 10 മണിക്ക്</span> മുൻപ് നിയമസഭാ മന്ദിരത്തിൽ റിപ്പോർട്ട് ചെയ്യേണ്ടതാണ്.</p>
                                            </li>
                                            <li>
                                                <p> ഓരോ വിഭാഗത്തിലും ഫൈനൽ മത്സരത്തിൽ ഒന്ന്, രണ്ട്, മൂന്ന് സ്ഥാനങ്ങൾ നേടുന്ന ടീമുകൾക്ക് ചുവടെ പറയും പ്രകാരം സമ്മാനങ്ങൾ നൽകുന്നതാണ് .</p>
                                            </li>
                                        </ul>
                                        <div class="text-center align-items-center d-flex justify-content-center">
                                            <table class="table table-bordered bg-gradient" style="width: 70%;">
                                                <thead>
                                                    <tr style="font-size: 16px;">
                                                        <th class="fw-bold">സ്ഥാനം</th>
                                                        <th class="fw-bold">ക്യാഷ് പ്രൈസ്</th>
                                                        <th class="fw-bold">പുസ്തക കൂപ്പൺ(രൂപ )</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="font-size: 16px;">
                                                        <td>ഒന്നാം സ്ഥാനം</td>
                                                        <td><span>&#8377;</span>5000</td>
                                                        <td><span>&#8377;</span>2500</td>
                                                    </tr>
                                                    <tr style="font-size: 16px;">
                                                        <td>രണ്ടാ സ്ഥാനം</td>
                                                        <td><span>&#8377;</span>3000</td>
                                                        <td><span>&#8377;</span>2000</td>
                                                    </tr>
                                                    <tr style="font-size: 16px;">
                                                        <td>മൂന്നാം സ്ഥാനം</td>
                                                        <td><span>&#8377;</span>2000</td>
                                                        <td><span>&#8377;</span>1000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="custom-bullet">
                                            <li>
                                                <p> മത്സരാർത്ഥികൾ സ്‌കൂൾ/ കോളേജ് ഐ.ഡി കാർഡ് അല്ലെങ്കിൽ സ്‌കൂൾ/കോളേജ് അധികാരികൾ നൽകുന്ന സാക്ഷ്യപത്രം ഹാജരാക്കേണ്ടതാണ്.
                                                </p>
                                            </li>
                                            <li>
                                                <p>നിയമസഭാ ജീവനക്കാരോ നിയമസഭാ ജീവനക്കാരുടെ കുടുംബാംഗങ്ങളോ ക്വിസ് മത്സരങ്ങളിൽ പങ്കെടുക്കുവാൻ പാടുള്ളതല്ല.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    പൊതുജനങ്ങൾക്കായി 2025 ജനുവരി 11-ന് നിയമസഭാ മന്ദിരത്തിൽ വച്ച് എഴുത്തുപരീക്ഷ നടത്തുന്നതും ആയതിൽ ആദ്യ 6 സ്ഥാനങ്ങളിൽ എത്തുന്ന ടീമുകൾക്കായി ഫൈനൽ മത്സരം നടത്തുന്നതുമാണ് . മത്സരാർത്ഥികൾ അന്നേ ദിവസം രാവിലെ 10 മണിക്ക് മുൻപ് നിയമസഭാ മന്ദിരത്തിൽ റിപ്പോർട്ട് ചെയ്യേണ്ടതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    നടത്തിപ്പുമായി ബന്ധപ്പെട്ട കാര്യങ്ങളിൽ അന്തിമ തീരുമാനം നിയമസഭാ സെക്രട്ടേറിയറ്റിന്റേതായിരിക്കും.</p>
                                            </li>
                                        </ul>

                                        <div style="margin-left: 2rem;">
                                            <h5> <b><span> <u>മേഖലാ തല പ്രാഥമിക മത്സരങ്ങൾ</u></b></span></h5>

                                            <p> <span class="fw-bold">സ്‌കൂൾ തലം : രാവിലെ 10.30മുതൽ</span> (റിപ്പോർട്ടിംഗ് സമയം രാവിലെ 10 മണി വരെ മാത്രം)</p>

                                            <p><span class="fw-bold">കോളേജ് തലം : ഉച്ചയ്ക്ക് ശേഷം 2.30മുതൽ</span> (റിപ്പോർട്ടിംഗ് സമയം ഉച്ചയ്ക്ക് ശേഷം 1.30 മണി വരെ മാത്രം)</p>

                                        </div>

                                        <div class="text-center align-items-center d-flex justify-content-center">
                                            <div class="table-responsive" style="width: 70%;">
                                                <table class="table table-bordered bg-gradient overflow" style="width: 70%;">
                                                    <thead>
                                                        <tr style="font-size: 20px;">
                                                        <tr>
                                                            <th class="fw-bold">മേഖല</th>
                                                            <th class="fw-bold">ജില്ലകള്‍</th>
                                                            <th class="fw-bold">
                                                                മേഖല</th>
                                                            <th class="fw-bold">ഓൺലൈൻ രജിസ്ട്രേഷനുള്ള അവസാന തീയതി</th>
                                                            <th class="fw-bold">പ്രാഥമിക മത്സര തീയതി</th>
                                                            <th class="fw-bold">വേദി</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 18px;">
                                                            <td>I</td>
                                                            <td style="text-align: left;">
                                                                <ul>
                                                                    <li>കണ്ണൂര്‍</li>
                                                                    <li>കാസര്‍ഗോഡ്</li>
                                                                </ul>

                                                            </td>
                                                            <td>കണ്ണൂര്‍</td>
                                                            <td>22.11.2024</td>
                                                            <td>29.11.2024</td>
                                                            <td>ശിക്ഷക് സദൻ , കണ്ണൂർ</td>
                                                        </tr>
                                                        <tr style="font-size: 18px;">
                                                            <td>II</td>
                                                            <td style="text-align: left;">
                                                                <ul>
                                                                    <li>വയനാട്</li>
                                                                    <li>കോഴിക്കോട്</li>
                                                                    <li>മലപ്പുറം</li>
                                                                </ul>

                                                            </td>
                                                            <td>കോഴിക്കോട്</td>
                                                            <td>26.11.2024</td>
                                                            <td>3.12.2024</td>
                                                            <td>കാരപറമ്പ ഗവ.ഹയർസെക്കന്ററി സ്‌കൂൾ, കോഴിക്കോട്</td>
                                                        </tr>
                                                        <tr style="font-size: 18px;">
                                                            <td>III</td>
                                                            <td style="text-align: left;">
                                                                <ul>
                                                                    <li>പാലക്കാട്</li>
                                                                    <li>തൃശൂര്‍</li>
                                                                    <li>എറണാകുളം</li>
                                                                </ul>

                                                            </td>
                                                            <td>എറണാകുളം</td>
                                                            <td>28.11.2024</td>
                                                            <td>5.12.2024</td>
                                                            <td>കൊച്ചിൻ യൂണിവേഴ്‌സിറ്റി ഓഫ് സയൻസ് ആന്റ് ടെക്‌നോളജി (CUSAT), എറണാകുളം</td>
                                                        </tr>
                                                        <tr style="font-size: 18px;">
                                                            <td>IV</td>
                                                            <td style="text-align: left;">
                                                                <ul>
                                                                    <li>കോട്ടയം</li>
                                                                    <li>ഇടുക്കി</li>
                                                                    <li>പത്തനംതിട്ട</li>
                                                                </ul>

                                                            </td>
                                                            <td>കോട്ടയം</td>
                                                            <td>30.11.2024</td>
                                                            <td>7.12.2024</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr style="font-size: 18px;">
                                                            <td>V</td>
                                                            <td style="text-align: left;">
                                                                <ul>
                                                                    <li>ആലപ്പുഴ</li>
                                                                    <li>കൊല്ലം</li>
                                                                    <li>തിരുവനന്തപുരം</li>
                                                                </ul>

                                                            </td>
                                                            <td>തിരുവനന്തപുരം</td>
                                                            <td>31.12.2024</td>
                                                            <td>8.1.2025</td>
                                                            <td>നിയമസഭാ സമുച്ചയം, തിരുവനന്തപുരം</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <ul class="custom-bullet">
                                            <li>
                                                <p>അഞ്ച് മേഖലകളിലായി, സ്‌കൂൾ തലത്തിൽ നിന്നും കോളേജ് തലത്തിൽ നിന്നും തെരഞ്ഞെടുക്കുന്ന 15 വീതം (ഓരോ മേഖലയിൽ നിന്നും ആദ്യ സ്ഥാനങ്ങളിൽ എത്തുന്ന 3 ടീമുകൾ വീതം) ടീമുകൾക്കുള്ള സെമിഫൈനൽ, ഫൈനൽ മത്സരങ്ങൾ യഥാക്രമം 2025 ജനുവരി 9, 10 തീയതികളിൽ നിയമസഭാ മന്ദിരത്തിൽ വച്ച് നടത്തുന്നതാണ്.</p>
                                            </li>
                                            <li>
                                                <p>സെമിഫൈനലിലേക്ക് തെരഞ്ഞെടുക്കപ്പെടുന്ന മത്സരാർത്ഥികൾ അന്നേ ദിവസം <span class="fw-bold">രാവിലെ 10 മണിക്ക്</span>മുൻപ് നിയമസഭാ മന്ദിരത്തിൽ റിപ്പോർട്ട് ചെയ്യേണ്ടതാണ്.</p>
                                            </li>
                                        </ul>

                                        <div style="margin-left: 2rem; font-size: large;">
                                            <b><span> <u>For more details, pls contact </u></b></span><br>
                                            <p>Telephone : 0471 - 2512263 (10.15 am -5.00 pm IST)<br>
                                                Whatsapp : 7356602286 (pls text your queries. No Phone calls)<br>
                                                Email : klibf.quiz@gmail.com
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