 <!--====== Contact Area Start ======-->
 <section id="contact" class="contact-area ptb_100">
     <div class="container">
         <div class="row justify-content-between align-items-center">
             <div class="col-12 col-lg-5">
                 <!-- Section Heading -->
                 <div class="section-heading text-center mb-3">
                     <h2><?php print $contact_title ?></h2>
                     <p class="d-none d-sm-block mt-4"><?php print $contact_text ?></p>
                 </div>
                 <!-- Contact Us -->
                 <div class="contact-us">
                     <ul>
                         <!-- Contact Info -->
                         <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                             <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                             <h3 class="d-block my-2">9188380058</h3>
                             <h3 class="d-block my-2">0471-2512275</h3>
                         </li>
                         <!-- Contact Info -->
                         <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                             <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                             <h3 class="d-none d-sm-block my-2">klibf.kla@gmail.com</h3>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                 <!-- Contact Box -->
                 <div class="contact-box text-center">
                     <!-- Contact Form -->
                     <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (isset($_POST['save'])) {
                            $name = mysqli_real_escape_string($con, $_POST['name']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $phone = mysqli_real_escape_string($con, $_POST['phone']);
                            $message = mysqli_real_escape_string($con, $_POST['message']);
                            if (strlen($name) < 5) {
                                $msg = $msg . "Name Must Be More Than 5 Char Length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($email) < 9) {
                                $msg = $msg . "Email Must Be More Than 10 Char Length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($message) < 10) {
                                $msg = $msg . "Message Must Be More Than 10 Char Length.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($phone) < 8) {
                                $msg = $msg . "Phone Must Be More Than 8 Char Length.<BR>";
                                $status = "NOTOK";
                            }
                            if ($status == "OK") {

                                $recipient = "awolu_faith@live.com";

                                $formcontent = "NAME:$name \n EMAIL: $email  \n PHONE: $phone  \n MESSAGE: $message";

                                $subject = "New Enquiry from Vogue Website";
                                $mailheader = "From: noreply@vogue.com \r\n";
                                $result = mail($recipient, $subject, $formcontent);
                                if ($result) {
                                    $errormsg = "
  <div class='alert alert-success alert-dismissible alert-outline fade show'>
                   Enquiry Sent Successfully. We shall get back to you ASAP.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
   "; //printing error if found in validation
                                }
                            } elseif ($status !== "OK") {
                                $errormsg = "
  <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                       " . $msg . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation
                            } else {
                                $errormsg = "
        <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                   Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                   </div>"; //printing error if found in validation
                            }
                        }
                        ?>
                     <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            print $errormsg;
                        }
                        ?>
                     <!-- <form action="" method="post" enctype="multipart/form-data">
                         <div class="row">
                             <div class="col-12">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="form-group">
                                     <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Feed Back</button>
                             </div>
                         </div>
                     </form> -->
                     <p class="form-message"></p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--====== Contact Area End ======-->
