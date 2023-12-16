<style>
    section.parallax {
        padding: 45px 0
    }

    section.parallax .page-center {
        position: relative
    }

    section.parallax .mob-video {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }

    section.parallax .page-center h3 {
        color: #21174b;
        font-weight: 400!important;
        max-width: 380px;
        font: normal normal normal 31px/40px Helvetica Now Display
    }

    section.parallax .points {
        position: sticky;
        left: 0;
        top: 40vh;
        margin: 40vh 0;
        width: 5px;
        height: 0;
        z-index: 333
    }

    section.parallax .points p {
        margin-bottom: 0;
        line-height: 1
    }

    section.parallax .points p a {
        color: #21174b;
        opacity: .5;
        font-family: Inter,sans-serif!important;
        font-size: 25px
    }

    section.parallax .points p.active a {
        opacity: 1
    }

    section.parallax .items {
        display: flex;
        justify-content: space-around;
        margin-top: -80vh
    }

    section.parallax .items .item {
        width: 45%
    }

    section.parallax .items .item .col {
        height: calc(100vh - 390px);
        display: flex;
        flex-flow: column;
        justify-content: center;
        position: relative;
    }

    section.parallax .page-center .items .item p {
        font-size: 18px;
        letter-spacing: 0;
        color: #414141;
        max-width: 450px
    }

    section.parallax .page-center .items .item p a {
        color: #8693ff
    }

    section.parallax .items .video {
        transition: all .5s ease;
        position: sticky;
        top: 25vh;
        margin-bottom: 18vh
    }

    section.parallax .items .item.videos {
        position: relative
    }

    section.parallax .items .video .fullscreen-bg__video {
        width: 140%;
        margin-left: -7vw
    }

    @media (max-width: 1000px) {
        section.parallax .items .video .fullscreen-bg__video {
            width:140%;
            margin-left: -8vw
        }
    }


    .sec-images .my-videos {
        position: fixed;
        top: 155px;
        left: 31%;
        transform: translateX(-50%);
    }
    .my-points {
        position: fixed;
        top: 50px; /* change this value to adjust the vertical position */
        left: 0;
    }

    .my-videos {
        position: fixed !important;
        top: 50px; /* change this value to adjust the vertical position */
        right: 0;
        height: 100%;
        overflow: auto;
        padding: 0 20px; /* add some padding to the videos container */
    }

</style>




<div class="secondSection sec-images  " style=" ">
    <div class="container">
        <div class="row">


            <div class="col-md-12 text-center d-none d-md-block">
                <h3 class="title-desc" style="margin-top: 55px !important;">Гарантия безопасности</h3>
            </div>



            <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">

                <h3 class="mob-title-sec" style=" margin-left: 16px;    margin-top: 42px;">Гарантия безопасности</h3>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="advantage text-center" style="width: 100% !important; padding-left: 0!important; box-shadow: none!important;">
                    <img src="<?php echo e(asset('assets/images/camp/ico_1.svg')); ?>" style="margin-top: 15px;">
                    <b><h3 style="height: 24px; font-style: bold; font-size: 20px;font-weight: normal;font-stretch: normal;line-height: 1.33;letter-spacing: normal;color: black;font-weight: 800; ">Здоровье</h3></b>
                    <b><h4 style="height: 24px;font-size: 16px;color: #303337;">Наш медицинский персонал будет следить за состоянием здоровья детей во время их пребывания в лагере</h4></b>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="advantage text-center" style="width: 100% !important; padding-left: 0!important; box-shadow: none!important;">
                    <img src="<?php echo e(asset('assets/images/camp/ico_2.svg')); ?>" style="margin-top: 15px;">
                    <b><h3 style="height: 24px;font-style: bold; font-size: 20px;font-weight: normal;font-stretch: normal;line-height: 1.33;letter-spacing: normal;color: black;font-weight: 800;">Охрана</h3></b>
                    <b><h4 style="height: 24px;font-size: 16px;color: #303337;">Соблюдение порядка на территории футбольного лагеря обеспечивает частная охранная организация. А потому вы можете быть спокойны за активный отдых своего ребенка.</h4></b>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="advantage text-center" style="width: 100% !important; padding-left: 0!important; box-shadow: none!important;">
                    <img src="<?php echo e(asset('assets/images/camp/ico_3.svg')); ?>" style="margin-top: 15px;">
                    <b><h3 style="height: 24px;font-style: bold; font-size: 20px;font-weight: normal;font-stretch: normal;line-height: 1.33;letter-spacing: normal;color: black;font-weight: 800; ">Ежедневная уборка</h3></b>
                    <b><h4 style="height: 24px;font-size: 16px;color: #303337;">Наш клининговый персонал ежедневно выполняет уборку территории лагеря и дезинфекцию помещений, чтобы вы были спокойны за здоровье ребенка во время его пребывания в лагере.</h4></b>
                </div>
            </div>

            <?php /*
            <section class="parallax my-section" style="background: rgba(255, 255, 255, 1);">
                <div class="page-center">
                    <div class="points my-points">

                        <p class=""><a href="#id1">
                                •</a></p>

                        <p class=""><a href="#id2">
                                •</a></p>

                        <p class=""><a href="#id3">
                                •</a></p>

                        <p class=""><a href="#id4">
                                •</a></p>

                        <p class=""><a href="#id5">
                                •</a></p>
                    </div>
                    <div class="items">
                        <div class="item videos my-videos" >

                            <div id="vid1" class="video" style="display: none;">
                                <img src="<?php echo e(asset('assets/images/wekeends/img_1@1x.svg')); ?>" >

                            </div>

                            <div id="vid2" class="video" style="display: none;">
                                <img src="<?php echo e(asset('assets/images/wekeends/img_2@1x.svg')); ?>" >
                            </div>

                            <div id="vid3" class="video" style="display: none;">
                                <img src="<?php echo e(asset('assets/images/wekeends/img_3@1x.svg')); ?>" >
                            </div>

                            <div id="vid4" class="video" style="display: none;">
                                <img src="<?php echo e(asset('assets/images/wekeends/img_4@1x.svg')); ?>" >
                            </div>

                            <div id="vid5" class="video" style="display: none;">
                                <img src="<?php echo e(asset('assets/images/wekeends/img_5@1x.svg')); ?>" >
                            </div>

                        </div>
                        <div class="item text">

                            <div id="id1" class="chapter col">

                                <h4 class="gaTitle2">Здоровье под контролем врача</h4>
                                <h4 class="mob-text-section" >Медицинский работник спортивной базы ежедневно будет следить за состоянием здоровья детей во время их пребывания
                                    в футбольных выходных.</h4>
                            </div>


                            <div id="id2" class="chapter col">
                                <h4 class="gaTitle2">Контроль со стороны тренерского состава
                                    и воспитателя</h4>
                                <h4 class="mob-text-section" >Ваши дети будут находиться под присмотром четырех профессиональных тренеров и воспитателя, которые имеют педагогическое образование и должный опыт. Они помогут ребенку в любых вопросах и будут рядом, если ему потребуется помощь.</h4>
                            </div>


                            <div id="id3" class="chapter col">
                                <h4 class="gaTitle2">Персональный менеджер 24 часа онлайн</h4>
                                <h4 class="mob-text-section" >Ответит на все вопросы по организационным моментам
                                    и помогает с индивидуальными вопросами/пожеланиями.</h4>
                            </div>


                            <div id="id4" class="chapter col">
                                <h4 class="gaTitle2">Круглосуточная охрана спортивной базы</h4>
                                <h4 class="mob-text-section" >Соблюдение порядка на территории футбольного лагеря обеспечивает частная охранная организация. А потому вы можете быть спокойны за активный отдых своего ребенка.</h4>
                            </div>

                            <div id="id5" class="chapter col">
                                <h4 class="gaTitle2">Фото и видео отчёт в WhatsApp онлайн</h4>
                                <h4 class="mob-text-section" >На протяжение выходных вы будете наблюдать
                                    как проводит время в лагере ваш ребенок.</h4>
                            </div>

                        </div>


                    </div>
                </div>
            </section>
*/ ?>



            <div class="col-12 d-sm-block d-md-none">

                <div class=" ">
                    <div class="gaImg"  >
                        <img src="<?php echo e(asset('assets/images/wekeends/img_1@1x.svg')); ?>" style="width: 70%;" >
                    </div>
                    <h4 class="gaTitle">Здоровье под контролем врача</h4>
                    <h4 class="mob-text-section "  style="
    margin-bottom: 32px;
">Медицинский работник спортивной базы ежедневно будет следить за состоянием здоровья детей во время их пребывания
                        в футбольных выходных.</h4>

                </div>


                <div class=" ">
                    <div  class="gaImg" >
                        <img src="<?php echo e(asset('assets/images/wekeends/img_2@1x.svg')); ?>"style="    width: 71%;">
                    </div>
                    <h4 class="gaTitle">Контроль со стороны тренерского состава и воспитателя</h4>
                    <h4 class="mob-text-section "  style="
    margin-bottom: 32px;
">Ваши дети будут находиться под присмотром четырех профессиональных тренеров и воспитателя, которые имеют педагогическое образование и должный опыт. Они помогут ребенку в любых вопросах и будут рядом, если ему потребуется помощь.</h4>

                </div>


                <div class=" ">
                    <div  class="gaImg" >
                        <img src="<?php echo e(asset('assets/images/wekeends/img_3@1x.svg')); ?>" style="
    width: 85%;
">
                    </div>
                    <h4 class="gaTitle">Персональный менеджер 24 часа онлайн</h4>
                    <h4 class="mob-text-section " style="
    margin-bottom: 32px;
" >Ответит на все вопросы
                        по организационным моментам и помогает
                        с индивидуальными вопросами пожеланиями.</h4>

                </div>


                <div class=" ">
                    <div  class="gaImg"  >
                        <img src="<?php echo e(asset('assets/images/wekeends/img_4@1x.svg')); ?>"  style="    width: 51%;">
                    </div>
                    <h4 class="gaTitle">Круглосуточная охрана спортивной базы</h4>
                    <h4 class="mob-text-section "  style="
    margin-bottom: 32px;
">Соблюдение порядка на территории футбольного лагеря обеспечивает частная охранная организация. А потому вы можете быть спокойны за активный отдых своего ребенка.</h4>

                </div>


                <div class=" ">
                    <div  class="gaImg" >
                        <img src="<?php echo e(asset('assets/images/wekeends/img_5@1x.svg')); ?>" style="width: 55%;" >
                    </div>
                    <h4 class="gaTitle">Фото и видео отчёт в WhatsApp онлайн</h4>
                    <h4 class="mob-text-section " >На протяжение выходных вы будете наблюдать как проводит время в лагере ваш ребенок.</h4>

                </div>
            </div>

        </div>
    </div>

    <div class="col-12  text-center">

        <div class="friends_button" style="text-align: center;">
            <button type="button" style=" width: 380px;" class="btn btn-primary" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Получить консультацию</button>
        </div>
    </div>
</div>
</div>
</div>
