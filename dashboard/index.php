<?php
ini_set('display_errors', '0');
include "header.php";

$username = $_SESSION['SESSION_EMAIL'];

switch ($user['user_type']) {
    case 'S':
        include "sidebar.php";
        break;
    case 'P':
        include "publisher/sidebar.php";
        break;
    case 'PC':
        include "sidebar_pgmcmtee.php";
        break;
    case 'FC':
        include "sidebar_finance.php";
        break;
    case 'CC':
        include "sidebar_cultural.php";
        break;
    case 'RC':
        include "sidebar_reception.php";
        break;
    case 'SD':
        include "sidebar_sdf.php";
        break;
}
// if ($user['user_type'] == 'S') {
//     include "sidebar.php";
// } elseif ($user['user_type'] == 'P') {
//     include "sidebar_publisher.php";
// } elseif ($user['user_type'] == 'PC') {
//     include "sidebar_pgmcmtee.php";
// } elseif ($user['user_type'] == 'FC') {
//     include "finance_sidebar.php";
// } elseif ($user['user_type'] == 'CC') {
//     include "cultural_sidebar.php";
// } elseif ($user['user_type'] == 'RC') {
//     include "reception_sidebar.php";
// } elseif ($user['user_type'] == 'SD') {
//     include "sdf_sidebar.php";
// }
?>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <?php if ($user['user_type'] == 'S') {
                include "dashboard.php";
            } elseif ($user['user_type'] == 'P') {
                include "publisher_dashboard.php";
            } elseif ($user['user_type'] == 'PC') {
                include "pgmcmtee_dashboard.php";
            } elseif ($user['user_type'] == 'FC') {
                include "finance_dashboard.php";
            } elseif ($user['user_type'] == 'CC') {
                include "cultural_dashboard.php";
            } elseif ($user['user_type'] == 'RC') {
                include "receptioncmtee_dashboard.php";
            } elseif ($user['user_type'] == 'SD') {
                include "sdf_dashboard.php";
            } ?>

        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "footer.php"; ?>