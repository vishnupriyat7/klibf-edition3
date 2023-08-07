<?php
include "header.php";

$username = $_SESSION['SESSION_EMAIL'];

$sql1 = "SELECT user_type FROM users WHERE email = ?;";
$stmt1 = $con->prepare($sql1);
$stmt1->bind_param("s", $username);
$stmt1->execute();
$result1 = $stmt1->get_result();
$user_type = $result1->fetch_assoc();

// var_dump($user_type);die;
if ($user_type['user_type'] == 'S') {
    include "sidebar.php";
} elseif ($user_type['user_type'] == 'P') {
    include "sidebar_publisher.php";
} ?>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <?php if ($user_type['user_type'] == 'S') {
                include "dashboard.php";
            } elseif ($user_type['user_type'] == 'P') {
                include "dashboard_publisher.php";
            } ?>

        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "footer.php"; ?>