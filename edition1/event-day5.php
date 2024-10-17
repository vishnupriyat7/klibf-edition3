<style>
    .row {
        margin-right: -15px !important;
        margin-left: -10px !important;
    }

    .thumb {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .col-lg-3 {
            width: 100% !important;
        }
    }
</style>

<section class="section d-flex align-items-center ptb_50">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#day5-event1" data-toggle="tab">Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day5-event2" data-toggle="tab">Panel Discussion</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#day5-event3" data-toggle="tab">Panel Discussion & Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day5-event4" data-toggle="tab">Book Discussion</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#day5-event5" data-toggle="tab">Book Signing</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#day5-event6" data-toggle="tab">Quiz Programme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day5-event7" data-toggle="tab">Vision Talk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day5-event8" data-toggle="tab">Varayarang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day5-event9" data-toggle="tab">Mega Show</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="day5-event1">
                    <br>
                    <h5>Venue 2 - 10.00 am - കത്തുന്ന തലയണ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-kathunna-thalayana/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 10.30 am -പഴമൊഴി ചെപ്പ് </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-pazhzmozhi/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 11.05 am -പതികാലം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-pathikaalam/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 12.10 pm - 1. പ്രസംഗ കലയുടെ രസതന്ത്രം & 2. മിഖായേൽ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-prsangakala-mikhayel/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 12.45 pm - പറക്കാൻ കൊതിക്കുന്ന പക്ഷികൾ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-parakkan-kothikunna-pakshikal/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h5>Venue 2 - 2.00 pm -ഗാന്ധിജിയുടെ ഖാദിയാത്ര & ലോകസിനിമയുടെ കഥ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/gandhi-lokacinima/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>Venue 2 - 2.30 pm - മഹാകവി കുമാരനാശാന്റെ ചണ്ടാലഭിക്ഷുകി </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/brrls-mahakavi-kumarana/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>Venue 2 - 3.00 pm - ജീവിതനാടകം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-jeevitha-nadakam/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>Venue 2 - 4.00 pm - നീതിയുടെ പ്രതിസ്പന്ദനം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-neethi-prathispa/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 4.30 pm - സൗപർണികാമൃതം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-release/bkrls-sowparnikamrutham/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="day5-event2">
                    <h5>Members' Lounge - 11.30 am - National Education Policy and the Future of Higher Education</h5>
                    <br>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/paneldiscussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day5-event3">
                    <br>
                    <h5>Members' Lounge - 3.00 pm - ജനാധിപത്യവും ഫെഡറലിസവും & Book Release - ആരാണ് മഗ്സസേ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/paneldiscussion-bookrelease/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day5-event4">
                    <br>
                    <h5>Venue 2 - 3.30 pm - ഒരു ഗ്രാമം നൂറു ഓർമ്മകൾ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/book-discussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane" id="day5-event5">
                    <iframe src="news-letters/KLIBF23_newsletter_03.pdf" frameborder="0" style="width: 500%"></iframe>
                </div> -->
                <div class="tab-pane" id="day5-event6">
                    <!-- <iframe src="news-letters/KLIBF23_newsletter_03.pdf" frameborder="0" style="width: 500%"></iframe> -->
                    <br>
                    <h5>Members' Lounge - 1.00 pm -Quiz Programme </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/quiz-pgm/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day5-event7">
                    <br>
                    <h5>Venue 2 - 5.00 pm - വ്യക്തി ജീവിതത്തിലും പ്രൊഫഷണൽ ജീവിതത്തിലും വ്യക്തി സ്വാതന്ത്ര്യത്തിന്റെ പ്രാധാന്യം, ശ്രീധന്യ സുരേഷ് ,ഐ എ എസ് </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/visiontalk/vsn-sreedhanya/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 6.00 pm - Indian Space Programme, Dr. S. Unnikrishnan Nair, VSSC Director </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/visiontalk/vsn-indian-space-pgm/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane" id="day5-event8">
                    <br>
                    <h5>Venue 2 - 6.50 pm -വരയരങ് </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/varayarang/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="day5-event9">
                    <br>
                    <h5>Members' Lounge - 7.00 pm - Mega Show </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-5/mega-show/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day5">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="image-gallery-day5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-day5-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-day5-image" class="img-responsive col-md-12" src="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    // let modalId = $('#image-gallery-day5');

    $(document)
        .ready(function() {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image')
                    .click(function() {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-day5-title')
                        .text($sel.data('title'));
                    $('#image-gallery-day5-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function() {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function() {
                        updateGallery($(this));
                    });
            }
        });

    // build key actions
    $(document)
        .keydown(function(e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
</script>