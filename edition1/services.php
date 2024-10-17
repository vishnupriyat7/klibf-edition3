 <?php include "header.php"; ?>
 <section class="section breadcrumb-area overlay-dark d-flex align-items-center ptb_100">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <!-- Breamcrumb Content -->
                 <div class="breadcrumb-content text-center">
                     <h2 class="text-white text-uppercase mb-3">What we offer</h2>
                     <ol class="breadcrumb d-flex justify-content-center">
                         <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>

                         <li class="breadcrumb-item text-white active">Our Services</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Breadcrumb Area End ***** -->

 <!-- ***** Service Area Start ***** -->
 <section id="service" class="section service-area bg-grey ptb_150">
     <?php include "service-page.php"; ?>
 </section>

 <!-- ***** Service Area End ***** -->


 <!--====== Call To Action Area Start ======-->
 <section class="section cta-area bg-overlay ptb_100">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-12 col-lg-10">
                 <!-- Section Heading -->
                 <div class="section-heading text-center m-0">
                     <h2 class="text-white"><?php print $enquiry_title; ?></h2>
                     <p class="text-white d-none d-sm-block mt-4"><?php print $enquiry_text; ?></p>
                     <a href="contact.php" class="btn btn-bordered-white mt-4">Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--====== Call To Action Area End ======-->

 <?php include "footer.php"; ?>