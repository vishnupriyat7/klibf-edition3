<?php include "head-style.php"; ?>
<!DOCTYPE html>
<html lang="en">
<style>
    /* body {
        width: 100vw;
        background-color: #1D1D1D;
        margin: 0;
        font-family: helvetica;
    } */

    .box {
        --border-size: 3px;
        --border-angle: 0turn;
        width: 30vmin;
        height: 70vmin;
        background-image: conic-gradient(from var(--border-angle), #213, #112 50%, #213), conic-gradient(from var(--border-angle), transparent 20%, #08f, #f03);
        background-size: calc(100% - (var(--border-size) * 2)) calc(100% - (var(--border-size) * 2)), cover;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-animation: bg-spin 3s linear infinite;
        animation: bg-spin 3s linear infinite;
    }

    @-webkit-keyframes bg-spin {
        to {
            --border-angle: 1turn;
        }
    }

    @keyframes bg-spin {
        to {
            --border-angle: 1turn;
        }
    }

    .box:hover {
        -webkit-animation-play-state: paused;
        animation-play-state: paused;
    }

    @property --border-angle {
        syntax: "<angle>";
        inherits: true;
        initial-value: 0turn;
    }

    .text {
        margin-left: 5%;
        color: antiquewhite;
    }
</style>

<body>
    <!-- ======= Header ======= -->
    <?php include "header-inner.php"; ?>
    <!-- End Header -->
    <main id="queue-inner-main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Lucky Draw</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Lucky Draw</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="box mt-5 mb-5 col-md-3">
                            <br>
                            <p class="text">DAY 1 - 07.01.2025
                                <br>
                                <br>ഷെറിൻ വർഗ്ഗീസ് (12247)
                                <br>ജയികൃഷ്ണൻ (15461)
                                <br>നന്ദു നാരായണൻ (4469)
                                <br>ഷിജി (7001)
                                <br>ഗൗരി മോഹൻ ജെ (3171)
                                <br>രാഹുൽ ആർ (12004)
                                <br>ഷീജ (12357)
                                <br>കൃഷ്ണകുമാർ (7715)
                                <br>ശ്രീഷ (2319)
                                <br>അനുശ്രീ (8482)
                                <br>മുരുകൻ എ (9502)
                                <br>അഖിൽജിത്ത് ആർ (4598)
                                <br>സതീഷ്‌കുമാർ (15012)
                                <br>ബിന്ദു പി വർഗ്ഗീസ് (4905)
                                <br>മധുര മീനാക്ഷി (6718)
                                <br>നാസർ (14553)
                                <br>ജോൺ (16188)
                                <br>സജിൻ തുമ്പശ്ശേരിയിൽ (14577)
                                <br>പ്രിയദർശിനി (1707)
                                <br>നിരഞ്ജന മോഹൻ (12703)
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box mt-5 mb-5 col-md-3">
                            <br>
                            <p class="text">DAY 2 - 08.01.2025
                                <br>
                                <br>സുധീർ എ (3094)
                                <br>ഫസീല (21513)
                                <br>ശിവരഞ്ജിനി (21075)
                                <br>കലേശൻ (4922)
                                <br>അബില എ എൽ (17812)
                                <br>സജികുമാർ എസ് എസ് (24205)
                                <br>അങ്കിത ജെ എസ് (20791)
                                <br>അമീൻ എസ് എം (26378)
                                <br>കെ സിനുനാഥ് (24611)
                                <br>കിരണൻ ഡി ആർ (20425)
                                <br>പി കെ കൃഷ്ണൻ (4925)
                                <br>ശ്രുതി (23076)
                                <br>രഞ്ജു എ എസ് (16759)
                                <br>മിനി (17164)
                                <br>ഋതുബാല എസ് (6454)
                                <br>എൻ വേലപ്പൻ നായർ (1153)
                                <br>ഇഷാൻ ആനന്ദ് (22715)
                                <br>ശ്യാംലൻ (16632)
                                <br>ഗംഗാ ഗോപകുമാർ (21166)
                                <br>നീതു ജോഷി (24357)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>
</body>

</html>

<script type="text/javascript">

</script>