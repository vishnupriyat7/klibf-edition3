<section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2><?php print $port_title ?></h2>
                    <p class="d-none d-sm-block mt-4"><?php print $port_text ?></p>
                </div>
            </div>
        </div>
        <!-- Portfolio Items -->
        <div class="row items portfolio-items">

            <?php
            $q = "SELECT * FROM  portfolio ORDER BY id DESC LIMIT 6";


            $r123 = mysqli_query($con, $q);

            while ($ro = mysqli_fetch_array($r123)) {

                $id = "$ro[id]";
                $port_title = "$ro[port_title]";
                $port_desc = "$ro[port_desc]";
                $ufile = "$ro[ufile]";

                print "
<div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['marketing','development']'>
<!-- Single Case Studies -->
<div class='single-case-studies'>
    <!-- Case Studies Thumb -->
    <a href='portdetail.php?id=$id'>
        <img src='dashboard/uploads/portfolio/$ufile' alt=''>
    </a>
    <!-- Case Studies Overlay -->
    <a href='portdetail.php?id=$id' class='case-studies-overlay'>
        <!-- Overlay Text -->
        <span class='overlay-text text-center p-3'>
            <h3 class='text-white mb-3'>$port_title</h3>
            <p class='text-white'>$port_desc.</p>
        </span>
    </a>
</div>
</div>
";
            }
            ?>

        </div>
        <div class="row justify-content-center">
            <a href="portfolio.php" class="btn btn-bordered mt-4">View More</a>
        </div>
    </div>
</section>