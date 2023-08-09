<!-- Code by Brave Coder - https://youtube.com/BraveCoder -->

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {

    // header("Location: welcome.php");
    header("Location: dashboard/index.php");

    die();
}

//Load Composer's autoloader
require 'assets/vendor/autoload.php';

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    // $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);
    $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
    $user_type = mysqli_real_escape_string($conn, $_POST['userType']);
    // $code = mysqli_real_escape_string($conn, md5(rand()));
    $code = "";

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
    } else {
        if ($password === $confirm_password) {

            $sql = "INSERT INTO users (name, email, password, code, contact_no, user_type) VALUES ('{$name}', '{$email}', '{$password}', '{$code}', '{$contactno}', '{$user_type}')";
            $result = mysqli_query($conn, $sql);



            if ($result) {
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'itsection@niyamasabha.in';                     //SMTP username
                    // $mail->Password   = 'akdamxborrvlmqjv';   
                    $mail->Password   = 'nxjynhzxvqigqpbn';                             //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('itsection@niyamasabha.in');
                    $mail->addAddress($email);

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'You have successfully registered in KLIBF Edition 2.<br>Here is the login credentials.<br>Usename: ' . $email . '<br>Password:' . $_POST['password'] . '</b>';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                $msg = "<div class='alert alert-info'>You have Successfully registered. Your Login Credentials sent to your Email. You can <b><a href='login.php'>Login</a></b> here</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">
<?php include "head-style.php"; ?>

<body>
    <?php include "header-inner.php"; ?>
    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="assets/img/images/image2.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Welcome to Kerala Legislature International Book Festival Edition II.</p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="publisher" value="P" name="userType" required>
                                <label class="form-check-label" for="publisher">Publisher</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inividual" value="I" name="userType" required>
                                <label class="form-check-label" for="inividual">Inividual</label>
                            </div>
                            <input type="text" class="name" name="name" placeholder="Enter Your Name" value="<?php if (isset($_POST['submit'])) {
                                                                                                                    echo $name;
                                                                                                                } ?>" required>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])) {
                                                                                                                        echo $email;
                                                                                                                    } ?>" required>
                            <input type="text" class="contactno" name="contactno" placeholder="Enter Your Contact No" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                    echo $contactno;
                                                                                                                                } ?>" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
                            <button name="submit" class="btn" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.main-mockup').fadeOut('slow', function(c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>
<?php include "footer.php" ?>

</html>