<?php
ini_set('display_errors', '1');
include "header.php";
$base_url = '/klibf-edition3';
// $base_url = '';

$username = $_SESSION['SESSION_EMAIL'];

switch ($user['user_type']) {
    case 'S':
        include "super_admin/sidebar.php";
        break;
    case 'P':
        include "publisher/sidebar.php";
        break;
    case 'PC':
        include "program_committee/sidebar.php";
        break;
    case 'MC':
        include "media_committee/sidebar.php";
        break;
    case 'CC':
        include "cultural_committee/sidebar.php";
        break;
    case 'FC':
        include "finance_committee/sidebar.php";
        break;
    case 'SD':
        include "sdf_committee/sidebar.php";
        break;
    case 'RC':
        include "reception_committee/sidebar.php";
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
                    include "super_admin/dashboard.php";
                    break;
                case 'P':
                    include "publisher/dashboard.php";
                    break;
                case 'PC':
                    include "program_committee/dashboard.php";
                    break;
                case 'MC':
                    include "media_committee/dashboard.php";
                    break;
                case 'CC':
                    include "cultural_committee/dashboard.php";
                    break;
                case 'FC':
                    include "finance_committee/dashboard.php";
                    break;
                case 'SD':
                    include "sdf_committee/dashboard.php";
                    break;
                case 'RC':
                    include "reception_committee/dashboard.php";
                    break;
            }
            ?>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "footer.php"; ?>