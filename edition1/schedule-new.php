<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<?php include "header.php"; ?>
<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area overlay-dark d-flex align-items-center">
    <div class="container mt">
        <!-- <div class="row"> -->
        <div class="col-12">
            <!-- Breamcrumb Content -->
            <div class="breadcrumb-content d-flex flex-column align-items-center text-center mt">
                <h2 class="text-white text-uppercase mb-3 mt-header">Event Schedule</h2>
                <p class="lead">
                    09 - 15 January 2023.
                </p>

            </div>
            <!-- </div> -->
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->



<div id="schedule" class="ptb_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mr-auto ml-auto text-center">
                <!-- <div class="center-title mb60">

                    <h1>Event Schedule</h1>
                    <p class="lead">
                        09 - 15 January 2023.
                    </p>
                </div> -->
                <a href="assets/broucher/full.pdf" class="mr-2 pull-right btn btn-success" target="_blank"><i class="fa fa-download"></i> Event Broucher</a>
            </div>
        </div>
        <div class="row margin-b-30">
            <div class="col-md-10 mr-auto ml-auto">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav tabs-schedule nav-tabs list-inline" role="tablist">
                        <li role="presentation" class="nav-item"><a class="nav-link active show" href="" aria-controls="01" role="tab" data-toggle="tab" aria-selected="true" onclick="showday1();">Day 1 <span>09 January 2023</span></a></li>
                        <li role="presentation" class="nav-item"><a class="nav-link" href="#02" aria-controls="02" role="tab" data-toggle="tab" aria-selected="false" onclick="showday2();">Day 2 <span>10 January 2023</span></a></li>
                        <li role="presentation" class="nav-item"><a class="nav-link" href="#03" aria-controls="03" role="tab" data-toggle="tab" aria-selected="false" onclick="showday3();">Day 3 <span>11 January 2023</span></a></li>
                        <li role="presentation" class="nav-item"><a class="nav-link" href="#03" aria-controls="04" role="tab" data-toggle="tab" aria-selected="false" onclick="showday4();">Day 4 <span>12 January 2023</span></a></li>
                        <li role="presentation" class="nav-item"><a class="nav-link" href="#03" aria-controls="05" role="tab" data-toggle="tab" aria-selected="false" onclick="showday5();">Day 5 <span>13 January 2023</span></a></li>
                        <li role="presentation" class="nav-item"><a class="nav-link" href="#03" aria-controls="03" role="tab" data-toggle="tab" aria-selected="false" onclick="showday6();">Day 6 <span>14 January 2023</span></a></li>
                        <li role="presentation" class="nav-item"><a class="nav-link" href="#03" aria-controls="03" role="tab" data-toggle="tab" aria-selected="false" onclick="showday7();">Day 7 <span>15 January 2023</span></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <!-- <div class="col-md-12 text-right">
                        <a href="#" class="mr-2 pull-right"><i class="fa fa-download"></i>Broucher</a>
                    </div> -->
                    <div class="tab-content" id="show-schedule">

                        <?php include "day1.php" ?>
                        <!-- <a href="#" class="mr-2 pull-right btn btn-success"><i class="fa fa-download"></i> Broucher</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>

<script type="text/javascript">
    function showday1() {
        $.ajax({
            url: 'day1.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }

    function showday2() {
        $.ajax({
            url: 'day2.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }

    function showday3() {
        $.ajax({
            url: 'day3.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }

    function showday4() {
        $.ajax({
            url: 'day4.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }

    function showday5() {
        $.ajax({
            url: 'day5.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }
    function showday6() {
        $.ajax({
            url: 'day6.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }
    function showday7() {
        $.ajax({
            url: 'day7.php',
            dataType: 'html',
            success: function(response) {
                $('#show-schedule').html(response);
            }
        });
    }
</script>