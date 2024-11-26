<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', 1);
include "head-style.php";
include "config.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Meera&display=swap" rel="stylesheet">


<style>
    ul.custom-bullet {
        list-style: none;
        /* Remove the default bullet */
        padding-left: 1;
        /* Align the list without extra padding */
    }

    ul.custom-bullet li {
        display: flex;
        /* Use flex to keep the star and content on the same line */
        align-items: flex-start;
        /* Optional: Adjust alignment for long text */
    }

    ul.custom-bullet li::before {
        content: "\2605";
        /* Unicode for a star character */
        color: #FFA500;
        /* Set star color (e.g., orange) */
        font-size: 1.2em;
        /* Adjust star size */
        margin-right: 0.5em;
        /* Space between star and text */
        display: inline-block;
        /* Ensures the star stays inline with content */
    }

    .malayalam-text {
        font-family: 'Meera', sans-serif;
        line-height: 2;
        font-size: large;
    }

    /* Additional CSS for adjusting the card width */
    .card {
        max-width: 100vw;
        /* Allow the card to expand to its container's width */
    }

    .horizontal-shake {
        position: relative;
        animation: shake 0.8s infinite;
    }

    @keyframes shake {
        0% {
            transform: translateX(0);
        }

        20% {
            transform: translateX(-5px);
        }

        40% {
            transform: translateX(5px);
        }

        60% {
            transform: translateX(-5px);
        }

        80% {
            transform: translateX(5px);
        }

        100% {
            transform: translateX(0);
        }
    }

    /* Base styles */
    .table-responsive table {
        width: 100%;
        table-layout: fixed;
    }

    /* Mobile styles */
    /* Mobile styles */
    /* Mobile styles */
    @media (max-width: 768px) {
        .table-responsive thead {
            display: none;
            /* Hide table headers on mobile */
        }

        .table-responsive tbody,
        .table-responsive tr,
        .table-responsive td {
            display: block;
            width: 100%;
            box-sizing: border-box;
            /* Ensures padding is contained within td */
        }

        .table-responsive tr {
            margin-bottom: 1rem;
            border-bottom: 1px solid #ddd;
            /* Line under each row */
        }

        .table-responsive td {
            display: flex;
            flex-direction: column;
            /* Makes each cell a full-width block */
            padding: 0.5rem;
            position: relative;
            word-wrap: break-word;
            /* Allow data to wrap */
            white-space: normal;
            /* Allow data to wrap in small screens */
            border-bottom: 1px solid #ddd;
            /* Horizontal line for each td */
            text-align: left;
            /* Aligns text for readability */
        }

        .table-responsive td::before {
            content: attr(data-label);
            font-weight: bold;
            margin-bottom: 0.3rem;
            /* Space between label and content */
            white-space: normal;
            /* Allow wrapping */
            word-wrap: break-word;
            /* Ensure label wraps if too long */
            color: #000;
            /* Adjust color for label readability */
        }

        .scroll-text {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .scroll-text span {
            display: inline-block;
            position: absolute;
            animation: scroll-left 10s linear infinite;
            white-space: nowrap;
        }

        @keyframes scroll-left {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .text-danger {
            color: red;
        }

        .fs-24 {
            font-size: 24px;
        }
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <?php include "header-inner.php"; ?>
    <!-- End Header -->

    <main id="about-inner-main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Quiz Registration</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contest</li>
                        <li>Quiz</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs Section -->
        <section>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <!--end col-->
                    <div class="col-xxl-12 col-xl-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card malayalam-text">
                            <div class="text-center">
                                <img class="mx-auto d-block img-fluid" src="assets/img/contests/Quiz_Web3.jpg" style="width: 100%;">
                            </div>
                            <div class="card-body" style="margin-top: -10%;">
                                <div class="tab-content mt-2">

                                    <!-- <div class="d-flex justify-content-end">
                                        <a href="contest_quiz_reg_details.php" class="mr-2 btn btn-success fw-bold fs-10"><i class="fa fa-download"></i> Click Here to View Registration Details</a>
                                        <a href="apply_quiz.php" class="mr-2 btn btn-success horizontal-shake fw-bold fs-10"><i class="fa fa-download"></i> Click Here to Apply</a>
                                    </div> -->

                                   
                                    <div class="align-items-center text-center">
                                        <h3><b>Quiz Registration Details</b></h3>
                                        <!-- <p class="text-danger"><b>കണ്ണൂർ മേഖലാതല ക്വിസ് രജിസ്‌ട്രേഷൻ 26-11-2024 വരെ ദീർഘിപ്പിച്ചിരിക്കുന്നു.</b></p> -->
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row bg-grey">
                                                <div class="card">
                                                    <!-- <div class="card-header">
                                                        <div class="section-heading text-center mb-3">
                                                            <h2>Apply Now!</h2>
                                                        </div>
                                                        <p class="text-primary" id="message">Registration for <b>Schools</b> and <b>Colleges</b> should be handled through <b>Institutional Heads</b>.</p>
                                                    </div> -->
                                                    <div class="card-body">
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12">
                                                            <div class="form-group ">
                                                                <input type="text" class="form-control" name="phone_no"
                                                                    placeholder="*Enter Phone Number of Team Member" id="phone_no">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 mt-3">
                                                            <button type="submit" class="btn btn-bordered btn-success" onclick="viewRegDetails()"
                                                                name="save-quiz" id="register-quiz">
                                                                <span class="text-white">
                                                                    <i class="fas fa-paper-plane"></i>
                                                                </span>View</button>
                                                        </div>

                                                        <div id="quiz-details" class="mt-3"></div>

                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </section><br><br><br>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>

</body>
<script>
    function viewRegDetails() {
        // Prevent the form from submitting the traditional way
        event.preventDefault();

        // Get the entered contact number
        const phone_no = document.getElementById('phone_no').value;
        alert(phone_no);

        if (!phone_no) {
            alert('Please enter a phone number.');
            return;
        }

        // AJAX request
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "contest_fetch_quiz_reg_details.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (this.status === 200) {
                // Display the fetched data in the required area
                document.getElementById("quiz-details").innerHTML = this.responseText;
            } else {
                alert("Error: Unable to fetch data.");
            }
        };

        // Send data
        xhr.send("phone_no=" + encodeURIComponent(phone_no));
    }
</script>

</html>