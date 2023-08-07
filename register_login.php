<?php
include_once("dashboard/z_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
  $status = "OK"; //initial status
  $msg = "";
  $username = mysqli_real_escape_string($con, $_POST['username']); //fetching details through post method
  $password = mysqli_real_escape_string($con, $_POST['password']);
  if ($status == "OK") {
    // Retrieve username and password from database according to user's input, preventing sql injection
    $query = "SELECT * FROM admin WHERE (username = '" . mysqli_real_escape_string($con, $_POST['username']) . "') AND (password = '" . mysqli_real_escape_string($con, $_POST['password']) . "')";
    if ($stmt = mysqli_prepare($con, $query)) {
      /* execute query */
      mysqli_stmt_execute($stmt);
      /* store result */
      mysqli_stmt_store_result($stmt);
      $num = mysqli_stmt_num_rows($stmt);
      /* close statement */
      mysqli_stmt_close($stmt);
      //mysqli_close($con);
      // Check username and password match
      if ($num == 1) {
        session_start();
        // Set username session variable
        $_SESSION['username'] = $username;
        $username = $_SESSION['username'];
        print "
       <script language='javascript'>
         window.location = 'dashboard/index.php';
       </script>";
      } else {
        $errormsg = "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Username And/Or Password Does Not Match.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>"; //printing error if found in validation
      }
    }
  } else {
    $errormsg = "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                " . $msg . "
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>"; //printing error if found in validation
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head-style.php"; ?>

<body>
  <!-- ======= Header ======= -->
  <?php include "header-inner.php"; ?>
  <!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Welcome to KLIBF II</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Login</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->
    <section class="inner-page">
      <div class="container col-md-4">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="true">Register</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Login</a>
          </li>
        </ul>
        <!-- Pills navs -->
        <!-- Pills content -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <?php include "forms/register-form.php"; ?>
          </div>
          <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg != "")) {
              print $errormsg;
            } ?>
            <?php include "forms/login.php"; ?>
          </div>

        </div>
        <!-- Pills content -->
      </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include "footer.php" ?>
  <script src="dashboard/assets/js/pages/password-addon.init.js"></script>
</body>

</html>