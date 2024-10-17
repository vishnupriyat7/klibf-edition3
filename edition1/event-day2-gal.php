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

<section class="align-items-center ptb_50">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#day2-event1" data-toggle="tab">Book Release</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#day2-event2" data-toggle="tab">Panel Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day2-event3" data-toggle="tab">Audio Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day2-event4" data-toggle="tab">Meet the Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day2-event5" data-toggle="tab">Kaviyarang</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#day2-event6" data-toggle="tab">Vision Talk</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#day2-event7" data-toggle="tab">Mega Show</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="day2-event1">
                    <br>
                    <h5>Venue 2 - 10.00 am -സഖാവ് കോടിയേരി </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/book-release/sakhav-kodiyeeri/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <h5>Venue 2 - 11.20 am -പൊയ്ക </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/book-release/poyka/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 10.00 am -ശക്തി സീത </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/book-release/bkrls-sakthi-seetha/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day2-event2">
                    <br>
                    <h5>Members' Lounge - 10.30 am - ഇ എം എസ് രാഷ്ട്രീയവും എഴുത്തു ജീവിതവും </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/panel-discussion/ems-politics-ezhuthu/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <h5>Members' Lounge -02.45 pm - സമകാലീന നോവലിന്റെ സഞ്ചാര വഴികൾ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/panel-discussion/samakaaleena-novel-sanchara/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day2-event3">
                    <br>
                    <h5>Venue 2 - 10.35 pm- 1. നൂറു നൂറു യാത്രകൾ , 2. പ്രധാന പ്രണയങ്ങളിലെ താപനില , 3. വെയിലിൽ നനഞ്ഞും മഴയിൽ പൊള്ളിയും </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/audio-book-release/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="day2-event4">
                    <br>
                    <h5>Venue 2 - 2.45 pm - എഴുത്തിന്റെയും വായനയുടെയും ജീവിതം - കെ. ആർ മീരയുമായി എൻ. ഇ സുധീർ സംസാരിക്കുന്നു.</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/meet-the-author/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day2-event5">
                    <br>
                    <h5>Venue 4.20 pm - കവിയരങ്ങ് </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/kaviyarangu/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day2-event7">
                <br>
                    <h5>Venue 7.00 pm Sruthilaya Sandhya </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-2/sruthilaya/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day2">
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
<div class="modal fade" id="image-gallery-day2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-day2-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-day2-image" class="img-responsive col-md-12" src="">
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
    // let modalId = $('#image-gallery-day2');

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
                    $('#image-gallery-day2-title')
                        .text($sel.data('title'));
                    $('#image-gallery-day2-image')
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