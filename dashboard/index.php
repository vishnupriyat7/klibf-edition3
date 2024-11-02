<?php
ini_set('display_errors', '1');
include "header.php";
$base_url = '/klibf-edition3';

$username = $_SESSION['SESSION_EMAIL'];

switch ($user['user_type']) {
    case 'S':
        include "sidebar.php";
        break;
    case 'P':
        include "publisher/sidebar.php";
        break;
    case 'PC':
        include "program_committee/sidebar.php";
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
?>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <?php
            switch ($user['user_type']) {
                case 'S':
                    include "sidebar.php";
                    break;
                case 'P':
                    include "publisher/dashboard.php";
                    break;
                case 'PC':
                    include "program_committee/dashboard.php";
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
            ?>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "footer.php"; ?>