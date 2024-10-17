        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2><?php print $service_title ?></h2>
                        <p class="d-none d-sm-block mt-4"><?php print $service_text ?></p>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                $qs = "SELECT * FROM  service ORDER BY id DESC LIMIT 6";


                $r1 = mysqli_query($con, $qs);

                while ($rod = mysqli_fetch_array($r1)) {
                    $id = "$rod[id]";
                    $serviceg = "$rod[service_title]";
                    $service_desc = "$rod[service_desc]";

                    print "
<div class='col-12 col-md-6 col-lg-4'>
<!-- Single Service -->
<div class='single-service p-4'  style='border: solid 1px #788282;'>
    <h3 class='my-3'>$serviceg</h3>
    <p>$service_desc</p>
    <a class='service-btn mt-3' href='servicedetail.php?id=$id'>Learn More</a>
</div>
</div>

";
                }
                ?>
            </div>
        </div>