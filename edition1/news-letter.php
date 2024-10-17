<?php include "header.php"; ?>
<section class="section breadcrumb-area overlay-dark d-flex align-items-center">
    <div class="container mt">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center mt">
                    <h2 class="text-white text-uppercase mt-header">News Letter</h2>
                    <!-- <h2 class="text-white text-uppercase mb-3">About</h2> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section d-flex align-items-center ptb_50">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <!-- <a href="#tab1" data-toggle="tab">Tab 1</a> -->
                    <a class="nav-link active" href="#tab1" data-toggle="tab">2023 January 09</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab2" data-toggle="tab">2023 January 12</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab3" data-toggle="tab">2023 January 15</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <iframe src="news-letters/KLIBF23_newsletter_01.pdf" frameborder="0" style="width: 500%"></iframe>
                </div>
                <div class="tab-pane" id="tab2">
                    <iframe src="news-letters/KLIBF23_newsletter_02.pdf" frameborder="0" style="width: 500%"></iframe>
                </div>
                <div class="tab-pane" id="tab3">
                    <iframe src="news-letters/KLIBF23_newsletter_03.pdf" frameborder="0" style="width: 500%"></iframe>
                </div>
            </div>
            <!-- Grid column -->
            <!-- <div class="col-lg-4 col-md-6 mb-4"> -->



            <!-- </div> -->

        </div>
    </div>
</section>
<script type="text/javascript">
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        // function showtab() {
        // alert("chgfh");
        // e.preventDefault();
        var target = $(e.target).attr("href") // activated tab
        console.log(target);
    })
</script>

<?php include "footer.php"; ?>