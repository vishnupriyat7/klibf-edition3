<style>
  #header img{
    width: 100% !important;
    height: 85px !important;
  }
 </style>

<?php include "header.php"; ?>
<section class="section breadcrumb-area overlay-dark d-flex align-items-center" style="margin-top: -92px;">
  <div class="container mt">
    <!-- <div class="row"> -->
    <div class="col-12">
      <!-- Breamcrumb Content -->
      <div class="breadcrumb-content text-center mt">
        <h2 class="text-white text-uppercase mb-3 mt-header">Gallery</h2>
      </div>
      <!-- </div> -->
    </div>
  </div>
</section>

</br>
<section class="align-items-center ptb_50">
  <div class="container">
    <div class="row">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#day1" data-toggle="tab">Day 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#day2" data-toggle="tab">Day 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#day3" data-toggle="tab">Day 3</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="#day4" data-toggle="tab">Day 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#day5" data-toggle="tab">Day 5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#day6" data-toggle="tab">Day 6</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#day7" data-toggle="tab">Day 7</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="tab-content">
        <div class="tab-pane active" id="day1">
          <div>
            <?php include 'event-day1-gal.php' ?>
          </div>

        </div>
        <div class="tab-pane" id="day2">
          <div>
            <?php include 'event-day2-gal.php' ?>
          </div>

        </div>
        <div class="tab-pane" id="day3">
          <div>
            <?php include 'event-day3.php' ?>
          </div>

        </div>
        <div class="tab-pane" id="day4">
          <div>
            <?php include 'event-day4.php' ?>
          </div>

        </div>
        <div class="tab-pane" id="day5">
          <div>
            <?php include 'event-day5.php' ?>
          </div>

        </div>
        <div class="tab-pane" id="day6">
          <div>
            <?php include 'event-day6.php' ?>
          </div>

        </div>
        <div class="tab-pane" id="day7">
          <div>
            <?php include 'event-day7-gal.php' ?>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>





<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script> -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script> -->

<script src="assets/js/jquery/jquery.touchSwipe-1.6.4.min.js"></script>
<script src="assets/js/jquery/jquery-2.1.3.min.js"></script>
<script src="assets/js/prefixfree1.0.7.min.js"></script>
<script src='assets/bootstrap-3.3.4/dist/js/bootstrap.min.js'></script>
<?php include "footer.php"; ?>