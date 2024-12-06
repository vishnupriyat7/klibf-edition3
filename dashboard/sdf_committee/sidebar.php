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
                    <a href="<?= $base_url ?>/dashboard/sdf_committee/coupon_denomination.php" class="nav-link" data-key="t-analytics">
                    <i class="ri-file-list-3-line"></i>
                        <span data-key="t-dashboards"> Coupon Denomination </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url ?>/dashboard/sdf_committee/coupon_sponsers_details.php" class="nav-link"
                        data-key="t-one-page">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span data-key="t-dashboards">Coupon Sponsers</span>
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