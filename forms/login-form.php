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
if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg != "")) {
  print $errormsg;
} ?>