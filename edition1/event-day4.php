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
                    <a class="nav-link active" href="#day4-event1" data-toggle="tab">Meet the Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event2" data-toggle="tab">Book Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event3" data-toggle="tab">Panel Discussion & Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event4" data-toggle="tab">Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event5" data-toggle="tab">Quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event6" data-toggle="tab">Vision Talk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event7" data-toggle="tab">Martial Art Show</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day4-event8" data-toggle="tab">Mega Show</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="day4-event1">
                    <br>
                    <h5>Venue 2 - 10.15am - Importance of Secular writings and contemporary Challenges Teests Setalvad and Revati Laul in conversation with Venkitesh Ramakrishnan</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/meet-the-author/venue2_10-15/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event2">
                    </br>
                    <h5>Venue 2 - 11.20am - യുദ്ധവും മൃത്യുഞ്ജയവും</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-discussion/venue2_11-20/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 2.30pm - ഡൽഹിയിലെ പെൺകുട്ടി & ഭൂമിയിൽ നടക്കുന്നു </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-discussion/venue2_2-30/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event3">
                    <br>
                    <h5>Members' Longue - 11.30am<br><br>
                        Discussion - സിനിമയും എഴുത്തും <br></h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/panel-discussion/longue_11-30am/discussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Book Release - ചിരിച്ചും ചിരിപ്പിച്ചും </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/panel-discussion/longue_11-30am/book/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Members' Longue - 3.00pm - മലയാളത്തിലെ മഴവിൽ അനുഭവങ്ങൾ</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/panel-discussion/longue_3/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event4">
                    </br>
                    <h5>Members' Longue - 10.00am - കോമ്രേഡ്‌ കോടിയേരി ബാലകൃഷ്ണൻ ഓർമ്മപുസ്തകം</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-release/longue_10/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 12.20pm - സംഗീത് ബഹാർ & രാഗ ബഹാർ</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-release/venue2_12-20/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 1.50pm - എന്റെയും നിങ്ങളുടെയും മഴകൾ</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-release/venue2_1-50/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 3.30pm - In the Shadow Of The Weeping Willows</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-release/venue2_3-30/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 4.30pm - ലേഡീസ് കംപാർട്മെന്റ്</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-release/venue2_4-30/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 5.50pm - അരങ്ങിലെ ശോണബിംബം 'നിങ്ങളെന്നെ കമ്മ്യൂണിസ്റ്റാക്കി'</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/book-release/venue2_5-50/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event5">
                </br>
                    <h5>Members' Longue - 1.00pm - College Students</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/quiz/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event6">
                </br>
                    <h5>Venue 2 - 5.00pm - Era of Machine Learning</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/vision-talk/venue_2-5/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event7">
                </br>
                    <h5>Members' Longue - 6.15pm - ആയോധന കേരളീയം</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/martial_art_show/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day4-event8">
                </br>
                    <h5>Members' Longue - 7.00pm - സീ കേരളം പ്രതിഭാ സംഗമം 2023</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-4/mega_show/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day4">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>h
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="image-gallery-day4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-day4-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-day4-image" class="img-responsive col-md-12" src="">
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
    // let modalId = $('#image-gallery-day4');

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
                    $('#image-gallery-day4-title')
                        .text($sel.data('title'));
                    $('#image-gallery-day4-image')
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
