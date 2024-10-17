 <?php include "header.php"; ?>
 <link rel="stylesheet" href="./assets/css/style.css">
 <section class="section breadcrumb-area-rule overlay-dark d-flex align-items-center">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <!-- Breamcrumb Content -->
                 <div class="breadcrumb-content text-center">
                     <!-- <ol class="breadcrumb d-flex justify-content-center">

                     </ol> -->
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="contact" class="contact-area ptb_50">
     <div class="container">
         <div class="row justify-content-between align-items-center">
             <div class="col-12">
                 <div class=" section-heading text-center mb-3">
                     <h2>Apply Now!</h2>
                 </div>
                 <!-- Register Box -->
                 <div class="contact-box text-center">
                     <!-- <p> Read the <a href="terms&condition.php" target="_blank"><span style="color:blue"> &nbsp;Rules & Regulations</span> </a> before submitting.
                     </p> -->
                     <!-- Register Form -->
                     <?php
                        $status = "OK";
                        $msg = "";
                        if (isset($_POST['save-quiz'])) {
                            $category =
                                mysqli_real_escape_string($con, $_POST['category']);
                            $inst_name =
                                mysqli_real_escape_string($con, $_POST['inst_name']);
                            $addr_inst =
                                mysqli_real_escape_string($con, $_POST['addr_inst']);
                            $part1_name =
                                mysqli_real_escape_string($con, $_POST['part1_name']);
                            $part1_dob =
                                mysqli_real_escape_string($con, $_POST['part1_dob']);
                            $part1_addr =
                                mysqli_real_escape_string($con, $_POST['part1_addr']);
                            $part1_mail =
                                mysqli_real_escape_string($con, $_POST['part1_mail']);
                            $part1_mob =
                                mysqli_real_escape_string($con, $_POST['part1_mob']);
                            $part2_name =
                                mysqli_real_escape_string($con, $_POST['part2_name']);
                            $part2_dob =
                                mysqli_real_escape_string($con, $_POST['part2_dob']);
                            $part2_addr =
                                mysqli_real_escape_string($con, $_POST['part2_addr']);
                            $part2_mail =
                                mysqli_real_escape_string($con, $_POST['part2_mail']);
                            $part2_mob =
                                mysqli_real_escape_string($con, $_POST['part2_mob']);
                            $part1_gndr =
                                mysqli_real_escape_string($con, $_POST['gender_part1']);
                            $part2_gndr =
                                mysqli_real_escape_string($con, $_POST['gender_part2']);
                            $current_date = (new \DateTime())->format('Y-m-d H:i:s');
                            $selectquery = "SELECT * from book_stall where (head_org_email = '$head_email' and head_org_mobile = '$head_mobile')";
                            $selectresult = mysqli_query($con, $selectquery);
                            if ($selectresult->num_rows > 0) {
                                $msg = $msg . "You have already registered with same email Id and contact number. Please use another email Id and contact number to register.<BR>";
                                $status = "NOTOK";
                            }
                            $errormsg = "";
                            if ($status == "NOTOK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
                                    $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>"; //printing error if found in validation
                            } else {
                                $query = "INSERT INTO reg_quiz (category, institute_name, institute_addr, first_part_name, first_part_addr, first_part_dob, first_part_email, first_part_phone, second_part_name, second_part_addr, second_part_dob, secon_part_email, second_part_phone, reg_date, first_part_gndr, second_part_gndr) VALUES ('$category', '$inst_name', '$addr_inst', '$part1_name', '$part1_addr', '$part1_dob', '$part1_mail', '$part1_mob', '$part2_name', '$part2_addr', '$part2_dob', '$part2_mail', '$part2_mob', '$current_date', '$part1_gndr', '$part2_gndr')";
                                $result = mysqli_query($con, $query);
                                if ($result) {
                                    $errormsg = "
                              <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                                Registered Successfully. We shall get back to you ASAP.
                                                <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
                                                </div>
                               ";
                                } else {
                                    $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                               Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                               </div>";
                                }
                            }
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                print $errormsg;
                            }
                        }
                        ?>
                     <form action="" method="post" enctype="multipart/form-data">
                         <div class="row bg-grey">
                             <div class="form-group col-12"></div>
                             <div class="form-group col-12">
                                 <label><b></b></label>
                             </div>
                             <div class="form-group col-4">
                                 <select class="form-control form-group" name="category" id="category" style="height:35px;" require="required" onchange="showInstitution();">
                                     <option value="0">Select Category</option>
                                     <option value="S">School</option>
                                     <option value="C">College</option>
                                     <option value="P">Public</option>
                                 </select>
                             </div>
                             <div class="form-group col-8">
                                 <input type="text" class="form-control" name="inst_name" placeholder="*Name of Institution" id="inst_name" hidden>
                             </div>
                             <div class="col-4"></div>
                             <div class="form-group col-8">
                                 <input type="text" class="form-control" name="addr_inst" id="addr_inst" placeholder="* Address of Institution" hidden>
                             </div>
                             <div class="form-group col-6">
                                 <div class="form-group col-12">
                                     <input type="text" class="form-control" name="part1_name" placeholder="*Name of first participant" id="part1_name">
                                 </div>
                                 <div class="form-group col-12">
                                     <label for="part1_dob">Date of Birth</label>
                                     <input type="date" id="part1_dob" name="part1_dob" placeholder="Date of Birth">
                                 </div>
                                 <div class="form-group col-12">
                                     <label class="radio-inline"> <input type="radio" name="gender_part1" class="part1_gender" value="M" checked> Male </label>
                                     <label class="radio-inline"> <input type="radio" name="gender_part1" class="part1_gender" value="F"> Female </label>
                                     <!-- <label class="radio-inline part1_gender"> <input type="radio" name="gender_part1" value="T"> Trans-Person </label> -->
                                 </div>
                                 <div class="form-group col-12">
                                     <textarea class="form-control" name="part1_addr" id="part1_addr" placeholder="* Address"></textarea>
                                 </div>
                                 <div class="form-group col-12">
                                     <input type="number" class="form-control" name="part1_mob" placeholder="*Contact Number" id="part1_mob">
                                 </div>
                                 <div class="form-group col-12">
                                     <input type="email" class="form-control" name="part1_mail" placeholder="* E-mail" id="part1_mail">
                                 </div>
                             </div>
                             <div class="form-group col-6">
                                 <div class="form-group col-12">
                                     <input type="text" class="form-control" name="part2_name" placeholder="* Name of second participant" id="part2_name">
                                 </div>
                                 <div class="form-group col-12">
                                     <label for="vayana_dob">Date of Birth</label>
                                     <input type="date" id="part2_dob" name="part2_dob" placeholder="Date of Birth">
                                 </div>
                                 <div class="form-group col-12">
                                     <label class="radio-inline"> <input type="radio" name="gender_part2" class="part2_gender" value="M" checked> Male </label>
                                     <label class="radio-inline"> <input type="radio" name="gender_part2" class="part2_gender" value="F"> Female </label>
                                     <!-- <label class="radio-inline part2_gender"> <input type="radio" name="gender_part2" value="T"> Trans-Person </label> -->
                                 </div>
                                 <div class="form-group col-12">
                                     <textarea class="form-control" name="part2_addr" id="part2_addr" placeholder="* Address"></textarea>
                                 </div>
                                 <div class="form-group col-12">
                                     <input type="number" class="form-control" name="part2_mob" placeholder="*Contact Number" id="part2_mob">
                                 </div>
                                 <div class="form-group col-12">
                                     <input type="email" class="form-control" name="part2_mail" placeholder="* E-mail" id="part2_mail">
                                 </div>
                             </div>
                             <div class="col-12">
                                 <button class="btn btn-bordered active btn-block mt-3" id="preview_quiz_btn" onclick="checkTerm();"><span class="text-white pr-3"><i class="fa fa-eye"></i></span>Preview</button>
                                 <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save-quiz" id="register-quiz" hidden><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Register</button>
                             </div>
                     </form>
                     <p class="form-message"></p>
                 </div>
             </div>
         </div>
 </section>

 <?php include "attention.php" ?>
 <!--====== Call To Action Area End ======-->

 <?php include "footer.php"; ?>

 <div id="preview-quiz-modal" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title float-left">Preview</h4>
                 <button type="button" class="close" data-dismiss="modal"><span style="font-size:48px;color:red">&times;</span></button>&nbsp;
             </div>
             <div class="modal-body">
                 <?php include "quiz_preview.php"; ?>
             </div>
             <div class="modal-footer">
                 <!-- <button type="button" class="btn btn-default float-left" id="download">Print</button> -->
                 <button type=" button" class="btn btn-default" data-dismiss="modal">Edit</button>
                 <button type="button" class="btn btn-success" onclick="previewok();" id="quiz-previewok">Register</button>
             </div>
         </div>

     </div>
 </div>

 <script type="text/javascript">
     function showInstitution() {
         var catgry = $("#category").val();
         if (catgry !== 'P') {
             $("#inst_name").removeAttr('hidden');
             $("#addr_inst").removeAttr('hidden');
             $("#addr_inst").show();
             $("#inst_name").show();
         } else {
             $("#inst_name").hide();
             $("#addr_inst").hide();
         }
     }

     document.getElementById("preview_quiz_btn").addEventListener("click", function(event) {
         event.preventDefault()
         var catgry = $("#category").val();
         if (catgry === 'C') {
             var cat_text = 'College';
         } else if (catgry === 'S') {
             var cat_text = 'School';
         } else if (catgry === 'P') {
             var cat_text = 'Public';
         } else {
             var cat_text = 'Category not selected';
         }
         document.getElementById("category_lab").innerHTML = cat_text;
         document.getElementById("inst_name_lab").innerHTML = $("#inst_name").val();
         document.getElementById("addr_inst_lab").innerHTML = $("#addr_inst").val();
         document.getElementById("part1_nme_lab").innerHTML = $("#part1_name").val();
         document.getElementById("part1_dob_lab").innerHTML = $("#part1_dob").val();
         document.getElementById("part1_gndr_lab").innerHTML = document.querySelector('input[name = gender_part1]:checked').value;
         document.getElementById("part1_addr_lab").innerHTML = $("#part1_addr").val();
         document.getElementById("part1_cntct_lab").innerHTML = $("#part1_mob").val();
         document.getElementById("part1_email_lab").innerHTML = $("#part1_mail").val();
         document.getElementById("part2_nme_lab").innerHTML = $("#part2_name").val();
         document.getElementById("part2_dob_lab").innerHTML = $("#part2_dob").val();
         document.getElementById("part2_gndr_lab").innerHTML = document.querySelector('input[name = gender_part2]:checked').value;
         document.getElementById("part2_addr_lab").innerHTML = $("#part2_addr").val();
         document.getElementById("part2_cntct_lab").innerHTML = $("#part2_mob").val();
         document.getElementById("part2_email_lab").innerHTML = $("#part2_mail").val();
         $("#preview-quiz-modal").modal({
             show: true,
             backdrop: 'static',
             keyboard: false
         });
     });

     document.getElementById("quiz-previewok").addEventListener("click", function(event) {
         event.preventDefault()
         $("#preview-quiz-modal").modal('hide');
         $("#register-quiz").click();

     });
 </script>