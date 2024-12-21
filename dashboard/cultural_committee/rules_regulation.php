<style>
    .card {
        max-width: 100%;
    }

    .card ul {
        list-style: none;
        padding: 2%;
        font-size: large;
    }

    .card table {
        border: solid 2px;

    }

    .card .table-details {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card span {
        font-weight: bold;
        font-size: larger;
    }
</style>

<?php
include "../header.php";
include "sidebar.php";
$user_id = $user['id'];
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Terms & Conditions</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li> -->
                                <!-- <li class="breadcrumb-item active">Add</li> -->
                                <a class="dropdown-item" href="../logout.php"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xxl-12 mt-0">
                    <!-- Terms-Condition Start-->
                    <div class="card">
                        <ul>
                            <li class="contact-info color-1 bg-hover active hover-bottom p-2">
                                <h5>
                                    <ul>
                                        <li>
                                            <h5> <b><span>പുസ്തകപ്രകാശനത്തിനുള്ള നിബന്ധനകള്‍</b></span></h5>
                                        </li>
                                        <ul>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; പുസ്തകപ്രകാശനത്തിന് താല്‍പര്യപ്പെടുന്ന
                                                പ്രസാധകര്‍ അതിനായുള്ള നിര്‍ദേശം 2024 ഡിസംബര്‍ 10-ാാം തീയതിക്കകം
                                                KLIBF-ന്റെ വെബ്സൈറ്റിൽ upload ചെയ്യേണ്ടതാണ്.</li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; ഓരോ പുസ്തക പ്രകാശനവും ഇതിനായി
                                                രൂപീകരിച്ചിട്ടുള്ള സ്ക്രീനിംഗ് കമ്മിറ്റിയുടെ സൂക്ഷ്മപരിശോധനയ്ക്ക്
                                                ശേഷം മാത്രമായിരിക്കും അനുവദിക്കുക.</li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; ആയതിനാല്‍, പ്രകാശനം ചെയ്യാണ്
                                                ഉദ്ദേശിക്കുന്ന പുസ്തകം നേരിട്ടോ അല്ലെങ്കില്‍ പ്രസ്തുത പുസ്തകത്തിന്റെ
                                                ഉള്ളടക്കത്തെക്കുറിച്ചുള്ള ലഘുവിവരണം വെബ്‌സൈറ്റിലോ സ്ക്രീനിംഗ്
                                                കമ്മിറ്റിയുടെ പരിഗണനയ്ക്കായി സമര്‍പ്പിക്കേണ്ടതാണ്. </li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; ബുക്ക് റിലീസ് സംബന്ധിച്ച വിഷയങ്ങളില്‍
                                                സ്ക്രീനിംഗ് കമ്മിറ്റിയുടെ തീരുമാനം അന്തിമമായിരിക്കുന്നതും
                                                കമ്മിറ്റിയുടെ തീരുമാനത്തിന് വിധേയമായി പ്രസാധകര്‍
                                                നിര്‍ദേശിച്ച തീയതി, സമയം എന്നിവയില്‍ മാറ്റം വരുന്ന പക്ഷം പ്രസ്തുത
                                                വിവരം അറിയിക്കുന്നതുമാണ്.</li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; പ്രകാശനം ചെയ്യോനുദ്ദേശിക്കുന്ന പുസ്തകത്തിന്റെ
                                                കവര്‍ പേജ് KLIBF - ന്റെ വെബ്‌സൈറ്റില്‍ നിര്‍ബന്ധമായും അപ്ലാലോഡ്
                                                ചെയ്യേണ്ടതാണ്.</li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; പ്രകാശനത്തിനായി രജിസ്റ്റര്‍ ചെയ്യുന്ന പുസ്തകം
                                                മുന്‍പ് മറ്റൊരിടത്തും പ്രകാശനം ചെയ്തിട്ടില്ലെന്ന് ഉറപ്പുവരുത്തേണ്ടതും
                                                എന്നാല്‍ ഒരു പുസ്തകത്തിന്റെ കാലാനുസൃതമായി പരിഷ്കരിച്ച പതിപ്പിന്റെ
                                                പ്രകാശനമാണെങ്കില്‍ ആ വിവരം പ്രത്യേകം അറിയിച്ച് അനുമതി തേടേണ്ടതുമാണ്.
                                            </li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; നിർദ്ദിഷ്ട തീയതിക്കുള്ളില്‍ രജിസ്റ്റര്‍
                                                ചെയ്തവ അല്ലാതെയുള്ള പുസ്തകങ്ങൾ പുതുതായി പ്രകാശനം ചെയ്യുന്നതിനായി
                                                ഉൾപ്പെടുത്താന്‍ പാടുള്ളതല്ല.</li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; എന്നാല്‍ പ്രത്യേക സാഹചര്യത്തില്‍ രജിസ്റ്റര്‍
                                                ചെയ്ത പുസ്തകങ്ങളില്‍ ഏതെങ്കിലും മാറ്റം ഉള്ളപക്ഷം ആയത് മുന്‍കൂട്ടി
                                                അറിയിച്ച് അവ പ്രകാശനത്തിനായി ഉൾപ്പെടുത്തുന്നതിന് അനുവാദം തേടേണ്ടതും
                                                അങ്ങനെയുള്ള പുസ്തകങ്ങൾക്കുള്ള അനുമതിയും സ്‌ക്രീനിംഗിന്
                                                വിധേയമായിരിക്കുന്നതുമാണ്. </li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; പ്രകാശനത്തിന് അനുവദിച്ചിട്ടുള്ള തീയതിയിലോ
                                                സമയത്തിലോ എന്തെങ്കിലും മാറ്റം ആവശ്യമുള്ളപക്ഷം അതത് പബ്ലിഷര്‍ക്ക്
                                                അനുവച്ചിട്ടുള്ള Slot വ്യതിചലിക്കാത്ത രീതിയില്‍
                                                പുന:ക്രമീകരിയ്ക്കുാവുന്നതും ആയത് സംബന്ധിച്ച് മുന്‍കൂട്ടി അനുമതി
                                                തേടേണ്ടതുമാണ്.</li><br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; ഓരോ പുസ്തക പ്രകാശനത്തിനും അനുവദിക്കുന്ന
                                                സമയക്രമവും സമയപരിധിയും പ്രസാധകര്‍ നിര്‍ബന്ധമായും പാലിക്കേണ്ടതാണ്.</li>
                                            <br>
                                            <li>&emsp;<b>&emsp;*</b>&emsp; അത്യന്താപേക്ഷിതമായ സാഹചര്യത്തില്‍ ദൈനംദിന
                                                പരിപാടികൾക്കനുസൃതമായി ഇതു സംബന്ധിച്ച തീരുമാനങ്ങളില്‍ മാറ്റം
                                                വരുത്തുന്നതിന് കമ്മിറ്റിക്കു അധികാരമുണ്ടായിരിക്കുന്നതാണ്.</li>
                                        </ul>
                                    </ul>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Terms-Condition End-->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "../footer.php"; ?>