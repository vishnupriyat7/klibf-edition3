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
                    <a class="nav-link menu-link" href="#sidebarX" data-bs-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="sidebarLanding">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Quiz Register Report</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarX">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/media_committee/quiz_zone_report.php"
                                    class="nav-link" data-key="t-nft-landing">Zone Wise Report </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/media_committee/quiz_public_report.php"
                                    class="nav-link" data-key="t-nft-landing">Public Category Report </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/media_committee/quiz_report.php"
                                    class="nav-link" data-key="t-nft-landing">Total Registration Report </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url ?>/dashboard/media_committee/quiz_mark_team.php" class="nav-link" data-key="t-analytics">
                        <i class="mdi mdi-account-check"></i>
                        <span data-key="t-landing"> Mark Attendance </span>
                    </a>
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