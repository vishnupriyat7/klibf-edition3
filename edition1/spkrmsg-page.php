<style>
    .card-photo {
        width: 60%;
        height: 60%;
        position: relative;
        display: inline-block;
        margin: 50px;
    }

    .card-photo .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        /* z-index: 99; */
    }

    .card-photo:hover .img-top {
        display: inline;
        /* width: 60%; */
        transition: transform 0.40s;
        border-radius: 3px;
        /* box-shadow: 20px 20px 10px rgb(160, 80, 173); */
        /* box-shadow: 5.4px 10.7px 10.7px hsl(0deg 0% 0% / 0.33); */


        background-color: rgb(160, 80, 173);
        box-shadow: 5px 4px 10px #39004d;
        -moz-box-shadow: 5px 4px 10px #39004d;
        -webkit-box-shadow: 5px 4px 10px #39004d;
        transform: scale(1.1);
    }

    .shade {
        width: 100%;
        transition: transform 0.25s;
        border-radius: 3px;
        background-color: rgb(160, 80, 173);
        box-shadow: 5px 4px 10px #39004d;
        -moz-box-shadow: 5px 4px 10px #39004d;
        -webkit-box-shadow: 5px 4px 10px #39004d;
    }
</style>

<div class="section-msg text-center m-0">
 <!-- <marquee><p style="font-family: Impact; color: red; font-size: 22pt"></p></marquee> -->
    <!-- <marquee class="pt_0" style="padding-bottom:50px ;">
        <p class= "text-danger" style="font-family: Impact; font-size: 20pt; font-weight: bold;">"പതിനഞ്ചാം കേരള നിയമസഭയുടെ ഏഴാം സമ്മേളനം 2022 ഡിസംബര്‍ 5 മുതല്‍ ചേരുവാന്‍ മന്ത്രിസഭായോഗം തീരുമാനിച്ച സാഹചര്യത്തില്‍ കേരള നിയമസഭ അന്താരാഷ്ട്ര പുസ്തകോത്സവം 2023 ജനുവരി 9 മുതല്‍ 15 വരെയുള്ള തീയതികളിലേക്ക് മാറ്റിവയ്ക്കുവാന്‍ തീരുമാനിച്ചു."</p>
    </marquee> -->
    <h1>Messages</h1>
    <section class="section about-area pt_0">
        <div class="container container-sm container-md">
            <div class="row justify-content-between align-items-center msg">
                <div class="col-12 col-4 col-lg-4 col-sm-12 mt">
                    <div class="about-thumb text-center card-photo">
                        <a href="speaker-message.php">
                            <img src="./assets/img/message/Speaker_1.png" class="shade">
                            <img src="./assets/img/message/Speaker_1BW.png" class="img-top"></a>
                    </div>
                </div>
                <div class="col-12 col-4 col-lg-4 col-sm-12 mt">
                    <div class="about-thumb text-center card-photo">
                        <a href="dpyspkr-message.php">
                            <img src="./assets/img/message/D_Speaker2.png" class="shade">
                            <img src="./assets/img/message/D-spkr.png" class="img-top"> </a>
                    </div>
                </div>
                <div class="col-12 col-4 col-lg-4 col-sm-12 mt">
                    <div class="about-thumb text-center card-photo">
                        <a href="secretatry_message.php">
                            <img src="./assets/img/message/Secrat_1.png" class="shade">
                            <img src="./assets/img/message/Secrat_1bw.png" class="img-top"> </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<!-- ***** Speaker Message End ***** -->