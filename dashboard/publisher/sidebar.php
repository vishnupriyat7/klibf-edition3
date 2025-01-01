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
                    <a href="<?= $base_url ?>/dashboard/index.php" class="nav-link" data-key="t-analytics"> <i
                            class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards"> Dashboard </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-controls="sidebarLanding"
                        href="<?= $base_url ?>/dashboard/publisher/stall_rules_regulation.php" class="nav-link"
                        data-key="t-one-page">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Terms and Conditions</span>
                    </a>
                </li>
                <li class="nav-item" id="profile-menu">
                    <a class="nav-link menu-link" role="button" aria-controls="sidebarLanding"
                        href="<?= $base_url ?>/dashboard/publisher/profile_add_edit.php" class="nav-link"
                        data-key="t-one-page">
                        <i class="ri-account-box-line"></i> <span data-key="t-landing">Profile</span>
                    </a>
                </li>
                <?php if (!in_array($user['id'], [203, 199, 99, 185, 174, 53])) { ?>
                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" aria-controls="sidebarLanding"
                            href="<?= $base_url ?>/dashboard/publisher/stall_booking.php">
                            <i class="ri-checkbox-multiple-line"></i> <span data-key="t-landing">Stall Booking</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" aria-expanded="true" aria-controls="sidebarLanding"
                            href="<?= $base_url ?>/dashboard/publisher/chellan_upload.php">
                            <i class="ri-checkbox-multiple-line"></i> <span data-key="t-landing">Stall Payment
                                Details</span>
                        </a>
                    </li>


                    <!--  -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" href="#sidebarEvent" data-bs-toggle="collapse"
                            data-bs-target="#sidebarEvent">
                            <i class="mdi mdi-calendar-text-outline"></i> <span data-key="t-landing">Book Release/Discussion Proposals</span>
                        </a>
                        <div class="menu-dropdown collapse" id="sidebarEvent">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/event_rules_regulation.php"
                                        class="nav-link" data-key="t-one-page"> Terms and Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/book_release_proposal.php"
                                        class="nav-link" data-key="t-one-page"> Book Release Proposal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/book_discussion_proposal.php" class="nav-link"
                                        data-key="t-nft-landing"> Book Discussion Proposal </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" aria-expanded="true" aria-controls="sidebarLanding"
                            href="<?= $base_url ?>/dashboard/publisher/catalog_upload.php">
                            <i class="ri-file-upload-line"></i> <span data-key="t-landing">Catalogue Upload</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" aria-expanded="true" aria-controls="sidebarLanding"
                            href="<?= $base_url ?>/dashboard/publisher/sdf.php">
                            <i class="mdi mdi-calendar-text-outline"></i> <span data-key="t-landing">SDF</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link menu-link" role="button" aria-expanded="true" aria-controls="sidebarLanding"
                            href="<?= $base_url ?>/dashboard/publisher/coupon_old.php">
                            <i class="mdi mdi-cash-multiple"></i>
                            <span data-key="t-landing">Coupon Entry Old</span>
                        </a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" href="#sidebarCoupon" data-bs-toggle="collapse"
                            data-bs-target="#sidebarCoupon">
                            <i class="mdi mdi-cash-multiple"></i> <span data-key="t-landing">Coupon</span>
                        </a>
                        <div class="menu-dropdown collapse" id="sidebarCoupon">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/coupon.php"
                                        class="nav-link" data-key="t-one-page"> Coupon Entry
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/bank_dtls.php"
                                        class="nav-link" data-key="t-one-page"> Bank Details
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" role="button" data-bs-toggle="collapse"
                            data-bs-target="#sidebarReport">
                            <i class="mdi mdi-file-chart-outline"></i> <span data-key="t-landing">Report</span>
                        </a>
                        <div class="menu-dropdown collapse" id="sidebarReport">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/report.php" class="nav-link"
                                        data-key="t-one-page"> Profile Report
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/book_release_report.php" class="nav-link"
                                        data-key="t-nft-landing">
                                        Book Release Proposal Report </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $base_url ?>/dashboard/publisher/book_discussion_report.php" class="nav-link"
                                        data-key="t-nft-landing"> Book Discussion Proposal Report </a>
                                </li>


                                <!-- 
                            <li class="nav-item">
                                <a href="<?= $base_url ?>/dashboard/publisher/coupon_list_report.php" class="nav-link"
                                    data-key="t-nft-landing">Coupon List Report</a>
                            </li> -->
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>