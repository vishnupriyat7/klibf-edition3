<link rel='stylesheet' href='assets/bootstrap-3.3.4/dist/css/bootstrap.min.css'>
<style>
    #main {
        margin: 1.5rem 0rem 1.5rem;
    }

    img {
        width: 100%;
        max-width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .container {
        width: 100%;
        max-width: var(--container-width);
        margin: 0px auto;
        padding: 0rem 1rem;
    }

    .grid {
        display: grid;
    }

    .flex {
        display: flex;
    }

    /* FRONT PAGE */
    #title {
        text-align: center;
        padding: 1rem 0rem;
    }

    .contain-images {
        grid-template-columns: repeat(auto-fill, minmax(42rem, 1fr));
        gap: 3rem
    }

    .figure {
        width: 100%;
        position: relative;
        box-shadow: 0rem 0.6rem 2rem rgba(0, 0, 0, 0.5);
    }

    .figcap {
        width: 100%;
        padding: 1rem 0rem;
        font-size: 1.6rem;
        font-weight: 900;
        color: var(--light);
        background: rgba(0, 0, 0, 0.3);
        text-align: center;
        position: absolute;
        bottom: 0;
    }

    #signature {
        padding: 1rem 0rem;
        text-align: center;
        font-size: 2rem;
        font-weight: 600;
    }
</style>
<section class="section d-flex align-items-center ptb_50">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">

                <li class="nav-item">
                    <a class="nav-link active" href="#day3-event1" data-toggle="tab">Book Release</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#day3-event2" data-toggle="tab">Book Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day3-event3" data-toggle="tab">Panel Discussion & Book Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day3-event4" data-toggle="tab">Panel Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day3-event5" data-toggle="tab">Meet the Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day3-event6" data-toggle="tab">Kaviyarang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day3-event7" data-toggle="tab">Vision Talk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#day3-event9" data-toggle="tab">Quiz Final</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day3-event8" data-toggle="tab">Cultural Programme</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#day3-event10" data-toggle="tab">Cultural Programme</a>
                </li> -->


            </ul>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="day3-event1">
                    <br>
                    <h5>Venue 2 - 10.00 am - 1. ചിത്രദർശനഘട്ടം & 2. കൂടൊഴിയുമ്പോൾ </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/book-release/chithradarshanakhattam-koodozhiyumbol/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
                    <h5>Venue 2 - 11.30 am - 1. പഠനത്തിന്റെ ചരണങ്ങൾ ,2. ദി ലാസ്റ്റ് ഫ്രണ്ട് & 3. ഒരുവട്ടം കൂടിയെൻ ഓർമ്മകൾ

                    </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/book-release/bokrls-padanathintecharanangal-lastfrnd-oruvattam/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
                    <h5>Venue 2 - 12.05 pm - A Contemporary Encyclopedia of Literature of the Americas

                    </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/book-release/bkrls-contempory-encyclopda/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
                    <h5>Venue 2 - 02.45 pm - കറുപ്പും വെളുപ്പും മായാവർണ്ണങ്ങളും </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/book-release/karuppumveluppum-mayaavarnangalum/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="day3-event2">
                    <br>
                    <h5>Venue 2 - 10.30 pm - 1. ബേത്തിമാരൻ &
                        2. കൊളുന്ത് </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/book-discussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
                    <h5>Venue 2 - 12.55 pm - ചെഗുവേര ജീവിതം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/book-discussion/bkdiscsn-cheguverajeevitham/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="day3-event3">
                    <br>
                    <h5>Member's Longue - 11.00 pm - മലയാളനാടക പ്രസ്ഥാനം & പുസ്തക പ്രകാശനം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/paneldiscussion-bookrelease/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day3-event4">
                    <br>
                    <h5>Member's Longue - 3.00 pm - അന്ധവിശ്വാസത്തിനെതിരെ അടിസ്ഥാന ശാസ്ത്രം വീട് / സ്കൂൾ / സമൂഹം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/paneldiscussion/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
                    <h5>Venue 2 - 2.00 pm - മലയാള പുസ്തക പ്രസാധക രംഗം </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/paneldiscussion/malayalapusthaka-prasadaka-rangam/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day3-event5">
                    <br>
                    <h5>Member's Longue - 4.00 pm - Booker Prize Winner Shehan Karunatilaka in Conversation with Sunitha Balakrishnan</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/meet-author/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day3-event6">
                    <br>
                    <h5>Venue 2 - 04.15 pm - Kaviyarang </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/kaviyarang/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day3-event7">
                    <br>
                    <h5>Venue 2 - 05.00 pm - Athijeevanam - Tiffani Brar </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/visiontalk/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
                    <h5>Venue 2 - 06.15 pm - കൈയ്യൊപ്പിട്ട വഴികൾ , ദിവ്യ എസ് അയ്യർ, ഐ. എ. എസ് . </h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/visiontalk/kayyoppitta-vazhikal/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="day3-event8">
                    <br>
                    <h5>Member's Longue - 6.15 pm</h5>
                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/cultural-programme-nadacharitham/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <h5>Member's Longue - 7.00 pm</h5>

                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/cultural-programme/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
                                                <img class="img-thumbnail" src="<?= $image; ?>" alt="Another alt text">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="day3-event9">

                    <div class="container pt-4">
                        <?php
                        $images = glob("assets/img/gallery/day-3/quiz-final/*.{jpg,png,gif}", GLOB_BRACE);
                        ?>

                        <div class="row">

                            <div class="row">
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= $image; ?>" data-target="#image-gallery-day-3">
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
<div class="modal fade" id="image-gallery-day-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-day-3-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-day-3-image" class="img-responsive col-md-12" src="">
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
    // let modalId = $('#image-gallery-day-3');

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
                    $('#image-gallery-day-3-title')
                        .text($sel.data('title'));
                    $('#image-gallery-day-3-image')
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