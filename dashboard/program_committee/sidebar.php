<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="<?= $base_url ?>/dashboard/index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?= $base_url; ?>/assets/img/Logo_KLIBF03_BG.png" alt="" height="100">
            </span>
            <span class="logo-lg">
                <img src="<?= $base_url; ?>/assets/img/Logo_KLIBF03_BG.png" alt="" height="100">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="<?= $base_url ?>/dashboard/index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?= $base_url; ?>/assets/img/Logo_KLIBF03_BG.png" alt="" width="50%" height="100">
            </span>
            <span class="logo-lg">
                <img src="<?= $base_url; ?>/assets/img/Logo_KLIBF03_BG.png" alt="" width="100%" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a href="<?= $base_url ?>/dashboard/index.php" class="nav-link" data-key="t-analytics">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards"> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-controls="sidebarLanding"
                        href="<?= $base_url ?>/dashboard/program_committee/stall_rules_regulation.php" class="nav-link" data-key="t-one-page">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Terms and Conditions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-controls="sidebarLanding"
                        href="<?= $base_url ?>/dashboard/program_committee/stall_allot_list.php" class="nav-link" data-key="t-one-page">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Stall Allotment</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarX" data-bs-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="sidebarLanding">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Report</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarX">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/program_committee/publisher_register_report.php"
                                    class="nav-link" data-key="t-nft-landing">Publisher Registered </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/program_committee/publisher_profile_report.php"
                                    class="nav-link" data-key="t-nft-landing">Profile Created </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/program_committee/stall_booking_report.php" class="nav-link" data-key="t-nft-landing">Stall Booking </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/program_committee/publisher_noprofile_report.php" class="nav-link" data-key="t-nft-landing">No Profile Created Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/program_committee/publisher_nostall_report.php" class="nav-link" data-key="t-nft-landing">No Stall Booked Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/program_committee/stall_payment_report.php" class="nav-link" data-key="t-nft-landing">Chellan Payment Report </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="pgmcmtee-evnt-bkrls-report.php" class="nav-link" data-key="t-nft-landing">Event
                                    Proposal Book Release Report </a>
                            </li>
                            <li class="nav-item">
                                <a href="pgmcmtee-evnt-bkdscn-report.php" class="nav-link"
                                    data-key="t-nft-landing">Event Proposal Book Discussion Report </a>
                            </li>
                            <li class="nav-item">
                                <a href="pgmcmtee-spcl-evnt-prpsl-report.php" class="nav-link"
                                    data-key="t-nft-landing">Special Event Proposal Report </a>
                            </li> -->
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>