<!-- <section class="section promo-area ptb_100">
    <div class="container">
        <div class="row">
            <?php
            $q = "SELECT * FROM  why_us ORDER BY id DESC LIMIT 3";
            $r123 = mysqli_query($con, $q);
            while ($ro = mysqli_fetch_array($r123)) {
                $title = "$ro[title]";
                $detail = "$ro[detail]";
                print "
<div class='col-12 col-md-6 col-lg-4 res-margin'>
<!-- Single Promo -->
<div class='single-promo color-1 bg-hover hover-bottom text-center p-5'>
    <h3 class='mb-3'>$title</h3>
    <p>$detail</p>
</div>
</div>
";
            }
            ?>
        </div>
    </div>
</section> -->