<section class="align-items-center ptb_50">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#day7-event1" data-toggle="tab">കവിയും കുട്ടികളും</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event2" data-toggle="tab">Book Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event3" data-toggle="tab">Meet the Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event4" data-toggle="tab">Panel Discussion & Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event5" data-toggle="tab">Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event6" data-toggle="tab">Panel Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event7" data-toggle="tab">Closing Ceremony</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day7-event8" data-toggle="tab">Mega Show</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="day7-event1">
                    <br>
                    <h5>Members' Lounge - 10.00am - പ്രൊഫ. മധുസൂദനൻ നായർ & നാരായണ ഭട്ടതിരി</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/kavi/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event2">
                <br>
                    <h5>Venue 2 - 11.00am - കഥ ചരിത്രം സൃഷ്ടിക്കുമ്പോൾ & ഗരിസപ്പ അരുവി അഥവാ ഒരു ജലയാത്ര  </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/book-discussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event3">
                <br>
                    <h5>Members' Lounge - 11.15am - Ambedkar: A Life എന്ന പുസ്തകത്തെ കുറിച്ച് സംസാരിക്കുന്നു</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/meet-the-author/lounge_11-15/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 3.00pm - Sharankumar Limbale in Conversation with S Kunjikrishnan</h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/meet-the-author/venue2_3/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event4">
                <br>
                    <h5>Venue 2 - 11.30am<br><br>
                Discussion - Constitutional and Electoral Experiments of Travancore and Cochin<br><br>
            Book Release - History of School Education in Kerala Since Independence</h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/panel-discussion-book/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event5">
                <br>
                    <h5>Venue 2 - 12.20am - വേഗവർത്തമാനം</h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/book-release/venue2_12-20/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 2.00pm - മേരീസ് മ്യുസിങ്‌സ് </h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/book-release/venue2_2/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 2.30pm - സ്വച്ഛഭവനം </h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/book-release/venue2_2-30/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Venue 2 - 3.50pm - വാട്ടർബോഡി</h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/book-release/venue2_3-50/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event6">
                <br>
                    <h5>Venue 2 - 12.20am - എഴുത്തിലെ സ്‌ത്രീസഞ്ചാരങ്ങൾ</h5>
            <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/panel-discussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>
                        <div class="row">
                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event7">
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/closing-ceremony/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day7-event8">
                <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-7/mega-show/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day7">
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
<div class="modal fade" id="image-gallery-day7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-day7-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-day7-image" class="img-responsive col-md-12" src="">
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
    // let modalId = $('#image-gallery-day7');

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
                    $('#image-gallery-day7-title')
                        .text($sel.data('title'));
                    $('#image-gallery-day7-image')
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