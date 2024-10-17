<style>
  #speakers {
    padding: 60px 0 30px 0;
  }

  #speakers .speaker {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
  }

  #speakers .speaker .details {
    background: rgba(6, 12, 34, 0.76);
    position: absolute;
    left: 0;
    bottom: -40px;
    right: 0;
    text-align: center;
    padding-top: 10px;
    transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
  }

  #speakers .speaker .details h4 {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
  }

  #speakers .speaker .details p {
    color: #fff;
    font-size: 15px;
    margin-bottom: 10px;
    font-style: italic;
  }

  #speakers .speaker .details .social {
    height: 40px;
  }

  #speakers .speaker .details .social i {
    line-height: 0;
    margin: 0 2px;
  }

  #speakers .speaker .details a {
    color: #fff;
  }

  #speakers .speaker .details a:hover {
    color: #f82249;
  }

  #speakers .speaker:hover .details {
    bottom: 0;
  }

  #speakers-details {
    padding: 60px 0;
  }

  #speakers-details .details h2 {
    color: #112363;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
  }

  #speakers-details .details .social {
    margin-bottom: 15px;
  }

  #speakers-details .details .social a {
    background: #e9edfb;
    color: #112363;
    line-height: 1;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  #speakers-details .details .social a:hover {
    background: #f82249;
    color: #fff;
  }

  #speakers-details .details .social a i {
    font-size: 16px;
    line-height: 0;
  }

  #speakers-details .details p {
    color: #112363;
    font-size: 15px;
    margin-bottom: 10px;
  }

  .section-with-bg {
    background-color: antiquewhite;
  }
  /* img{
    object-fit: contain;
    max-width: 100%;
  } */
</style>
<?php include "header.php"; ?>
<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area overlay-dark d-flex align-items-center">
  <div class="container mt">
    <!-- <div class="row"> -->
    <div class="col-12">
      <!-- Breamcrumb Content -->
      <div class="breadcrumb-content d-flex flex-column align-items-center text-center mt">
        <h2 class="text-white text-uppercase mb-3 mt-header">Speakers</h2>

      </div>
      <!-- </div> -->
    </div>
  </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->
<section id="speakers" class="section about-area ptb_10">
  <div class="container" data-aos="fade-up">
<!--    
    <div class="section-heading text-center wow fadeInDown slow">
      <h1>Speakers</h1>
    </div> -->

    <div class="row">
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <!-- <img src="assets/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid fill"> -->
          <img src="assets/img/gallery/event-speakers/1-Padmanabhan.png" alt=""  class="img-fluid fill">
          

          <div class="details">
            <h4><a href="speaker-details.html">Sri.T.Padmanabhan</a></h4>
            <!-- <p>Quas alias incidunt</p> -->
            <!-- <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <!-- <img src="assets/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid fill"> -->
          <img src="assets/img/gallery/event-speakers/2-Shashi_Tharoor.png" alt="" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Dr.Shashi Tharoor</a></h4>
            <!-- <p>Consequuntur odio aut</p> -->
            <!-- <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <!-- <img src="assets/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid fill"> -->
          <img src="assets/img/gallery/event-speakers/3-Shehan_Karunatilaka.png" alt="" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Sri.Shehan Karunatilaka</a></h4>
            <!-- <p>Fugiat laborum et</p> -->
            <!-- <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <!-- <img src="assets/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid fill"> -->
          <img src="assets/img/gallery/event-speakers/4-Sharankumar_Limbale.png" alt="" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Sri.Sharankumar Limbale</a></h4>
            <!-- <p>Debitis iure vero</p> -->
            <!-- <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/gallery/event-speakers/Gopinath Muthukad.png" alt="Speaker 5" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Gopinath Muthukad</a></h4>
            <!-- <p>Qui molestiae natus</p> -->
            <!-- <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Divya S Iyer.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Divya S Iyer</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Achuth Sankar.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Achuth Sankar</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Murali Thumarukudi.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Murali Thumarukudi</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Shoukath.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Shoukath</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Sreedhanya.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Sreedhanya</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Tiffani Brar.png-1.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">Tiffani Brar</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/gallery/event-speakers/Vssc Director.png" alt="Speaker 6" class="img-fluid fill">
          <div class="details">
            <h4><a href="speaker-details.html">S. Unnikrishnan Nair</a></h4>
            <!-- <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Team item -->

</section>


<br>
<br>
<!-- ***** About Area End ***** -->

<!--====== Call To Action Area End ====== -->
<?php include "footer.php"; ?>


