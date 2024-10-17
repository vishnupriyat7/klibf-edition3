<link rel="stylesheet" href="./assets/css/countdown.css">

<section class="section ptb_100">
    <!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <!-- Section Heading -->
            <div class="section-heading text-center m-0">
                <!-- <h2 id="headline">KLIFB - 2022</h2> -->
                <!-- <div id="countdown">
                        <ul>
                            <li><span id="days"></span>days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div> -->
                <div class="countdown">
                    <div class="box">
                        <span class="num" id="days">00</span>
                        <span class="text">Days to Go</span>
                    </div>
                    <!-- <div class="box">
                        <span class="num" id="hours">00</span>
                        <span class="text">Hours</span>
                    </div>
                    <div class="box">
                        <span class="num" id="minutes">00</span>
                        <span class="text">Minutes</span>
                    </div>
                    <div class="box">
                        <span class="num" id="seconds">00</span>
                        <span class="text">Seconds</span>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->
</section>

<script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "11/28/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    document.getElementById("headline").innerText = "It's my birthday!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());
</script>

<!-- ***** Speaker Message End ***** -->