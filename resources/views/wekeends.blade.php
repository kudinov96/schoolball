@extends('layouts.wekeends')
@section('title')
    <title>Футбольные выходные от футбольной школы “Школа мяча”</title>
@endsection
@section('description')
    <meta property="og:description" content="Футбольные выходные в Подмосковье для вашего ребенка - футбольная школа “Школа мяча”">
    <meta name="description" content="Футбольные выходные в Подмосковье для вашего ребенка - футбольная школа “Школа мяча”">
@endsection
@section('content')

    <style>
        .mob-title-sec {
            text-align: left !important;
            font-family: IBMPlexSans-Bold !important;
            font-size: 28px !important;
            font-weight: bold !important;
            font-stretch: normal!important;
            font-style: normal!important;
            line-height: 1.14!important;
            letter-spacing: normal!important;
            color: #303337!important;
            margin-top: 56px;
            margin-bottom: 32px;
            text-align: center !important;
        }
    </style>
    <div class="topPartsGray no-radius d-none d-md-block">
        <div class="container">
            <div class="firstSection">
                <div class="row">
                    <div class="col-md-7 firstSectionDescription">


                        <h3>Подарите своему ребенку активный отдых в Подмосковье</h3>

                      <h4>    <pre style="font-family: 'IBMPlexSans', sans-serif;
                          font-size: 19px; ">{{ $main->subname_page }} </pre> </h4>
                        <button type="button" name="button" data-toggle="modal" data-animation="bounce"
                                data-target=".bs-example-modal-lg">Оставить заявку
                        </button>

                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/images/wekeends/photo_2@2x.png') }}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="topPartsGray  no-radius d-sm-block d-md-none">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 class="title-desc-mob" style="margin-bottom: 5px !important;">
                    Подарите своему ребенку активный отдых в Подмосковье
                </h3>

                <h4>    <pre style="font-family: 'IBMPlexSans', sans-serif;
                          font-size: 19px; ">{{ $main->subname_page }} </pre> </h4>
            </div>

            <div class="firstSection">
                <div class="row">
                    <div class="col-10 offset-1">
                        <img src="{{ asset('assets/images/wekeends/photo_2@2x.png') }}" alt="" style="width: 100%; margin-bottom: 10px;">
                    </div>
                    <div class="col-12 firstSectionDescription text-center">

                        <button type="button" name="button" data-toggle="modal" data-animation="bounce"
                                data-target=".bs-example-modal-lg">Оставить заявку
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Section - block Футбольные выходные — это не только про спорт! !-->

    @include('sections-wekeends.block9')

    <!-- Section - block Футбольные выходные — это не только про спорт! !-->


    <!-- Section - block Видео !-->

    @include('sections-wekeends.video')

    <!-- Section - block ФВидео !-->

    <!-- Section - schoolball info !-->

<?php /*
    <!-- Section - Кому это подходит?  !-->
    <div class="thirdSection d-none d-md-block" id="lightbox">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center  d-none d-md-block">
                    <h3 class="title-desc">Кому это подходит</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/icons_advantages/ico_1@1x.svg')  }}" alt="">
                         <h4>Для новичков, которые хотят попробовать себя в футболе</h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/icons_advantages/ico_2@1x.svg')  }}" alt="">
                        <h4>Для тех, кто уже занимается футболом и хочет улучшить свои навыки</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/icons_advantages/ico_3@1x.svg')  }}" alt="">

                        <h4>Для воспитанников нашей футбольной школы</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/icons_advantages/ico_4@1x.svg')  }}" alt="">

                        <h4>Для игроков профессиональных академий и ДЮСШ</h4>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Section - Кому это подходит? mob  !-->

    <div class="thirdSection d-sm-block d-md-none">

        <div class="container">

            <div class="w-100"></div>
            <div class="col text-left mobFontSize" style=" ">
                <h3 class="mob-title-sec" style=" ">Кому это подходит</h3>
            </div>
            <div class="col-12 d-sm-block d-md-none" style="">
                <div class="row mobile-advantage-slider">

                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/icons_advantages/ico_1@1x.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <p>
                                        Для новичков, которые хотят попробовать себя в футболе
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/icons_advantages/ico_2@1x.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <p>
                                        Для тех, кто уже занимается футболом и хочет улучшить свои навыки
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/icons_advantages/ico_3@1x.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <p>
                                        Для воспитанников нашей футбольной школы
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/icons_advantages/ico_4@1x.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <p>
                                        Для игроков профессиональных академий и ДЮСШ                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Section - О лагере !-->

    <div class="secondSection d-none d-md-block">
        <div id="about" style="visibility: hidden;position: relative;top: -100px;"></div>

        <div class="container">
            <div class="row">
                 <div class="col-md-12 text-center">
                    <h3 class="title-desc" style="margin-top: 0px !important;margin-bottom: 80px !important;">О футбольных выходных</h3>
                </div>

                <div class="col-sm-12 col-md-6 thirdSectionDescription" style="
    margin-right: 93px;">
                    <h4 class="d-none d-md-block">
                        В прошлом году мы поставили себе задачу: сделать продукт для развития физических качеств и футбольных навыков ребёнка, но и ярким, интересным событием с активной досуговый программой в течение выходных.<br><br>
                        За 3 дня дети как без опыта тренировок в футбольных школах (нулевой уровень подготовки), так и ученики из детско-юношеских спортивных школ (ДЮСШ) получат полный набор впечатлений.<br><br>
                        Каждая категория детей занимается в отдельной группе, со своим тренером и по индивидуальной программе.


                    </h4></div>

                <div class=" d-none d-md-block col-md-5 thirdSectionImg"><img src="{{ asset('assets/home2/img@2x.png') }}"
                                                                              alt="" style="width: 68%;"></div>



                <div id="campVideoEdu1" class="col-md-12 text-center" style="margin-top: 80px;">
                    <img src="{{ asset('assets/images/camp/playvideo.svg')}}" alt="" style="width: 20%;">
                </div>


             </div>
        </div>
    </div>

    <!-- Section -  О лагере mob !-->

    <div class="fourthSection d-sm-block d-md-none" style="margin-top: 87px !important; ">
        <div class="container">
            <div id="aboutmob" style="visibility: hidden;position: relative;top: -100px;"></div>
            <div class=" col-auto center-block  text-center">
                <img src="{{ asset('assets/home2/img@2x.png') }}" style="height: 220px;" alt="">
            </div>


            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
                <h3 class="mob-title-sec" style="     margin-top: 42px;">О футбольных выходных</h3>
            </div>

            <h5 class="mob-text-section">
                В прошлом году мы поставили себе задачу: сделать продукт для развития физических качеств и футбольных навыков ребёнка, но и ярким, интересным событием с активной досуговый программой в течение выходных.<br><br>
                За 3 дня дети как без опыта тренировок в футбольных школах (нулевой уровень подготовки), так и ученики из детско-юношеских спортивных школ (ДЮСШ) получат полный набор впечатлений.<br><br>
                Каждая категория детей занимается в отдельной группе, со своим тренером и по индивидуальной программе.


            </h5>

            <div id="campVideoEdu2" class="col-md-12 text-center" style="margin-top: 25px;">
                <img src="{{ asset('assets/images/camp/playvideo.svg')}}" alt="" style="width: 50%;">
            </div>
        </div>
    </div>



    <div id="campVideoEdu1Lightbox" class="d-none">
        <div class="lightboxBack" >
             <button type="button" name="button" id="campVideoEdu1Button" class="close" data-dismiss="modal" aria-hidden="true" style="    color: #fec311;
    width: unset;
    height: unset;
    background: unset;
    border: unset;
    font-size: 2.5rem;
    line-height: 1;

    opacity: 1;">×</button>
        </div>
        <div class="iframe">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/9mZhDZ9nEsg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
*/ ?>


    <!-- Section - О лагере !-->

    <!-- Section - Укрепляем тело  !-->

    @include('sections-wekeends.block2')

    <!-- Section - Укрепляем тело  !-->


    <!-- Section - Что ждет вашего ребенка  !-->
    @include('sections-wekeends.block3')

    <!-- Section - Что ждет вашего ребенка   !-->



    <!-- Section - Продуктивный распорядок дня   !-->
    @include('sections-wekeends.block4')

    <!-- Section - Продуктивный распорядок дня   !-->


    <!-- Section - Гарантия безопасности   !-->
    @include('sections-wekeends.block5')

    <!-- Section - Гарантия безопасности   !-->


    <!-- Section - Квалифицированный педагогический состав   !-->
    @include('sections-wekeends.block6')

    <!-- Section - Квалифицированный педагогический состав   !-->


    <!-- Section - Место проведения лагеря   !-->
    @include('sections-wekeends.block7')

    <!-- Section - Место проведения лагеря   !-->


    <!-- Section - Отзывы родителей о нашей школе   !-->

    @include('sections-wekeends.reviews_db_video')

  <?php //  @include('sections-wekeends.reviews_db') ?>
    <!-- Section - Отзывы родителей о нашей школе   !-->


    <!-- Section - Стоимость   !-->

    @include('sections-wekeends.block8')

    <!-- Section - Стоимость   !-->





    <div id="timer" class="d-none d-md-block">
        <div class="row text-center" style="
    margin-top: 6px;
">
            <div class="col-md-2" style="margin-top: 1px;">
                До начала смены:
            </div>

            <div class="col-md-4">
                <div class="row" style="font-size: 13PX;margin-top: 4px;">
                    <div class="col-3">   <span id="days"></span>   <span id="days-word">дней</span> </div>
                    <div class="col-2"> <span id="hours"></span> ч </div>
                    <div class="col-3"> <span id="minutes"></span> мин </div>
                    <div class="col-2"> <span id="seconds"></span> с </div>

                    <!-- Force next columns to break to new line -->

                </div>

            </div>
            <div class="col-md-3" style="margin-top: 2px;">

                Свободных мест: <b>{{ $main->places }} </b>

            </div>
            <div class="col-md-3">
                <button type="button" style="margin-top: -9px;" name="button" class="mainHeaderButtonFix" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Забронировать</button>

            </div>
        </div>
    </div>
    <div id="timer2" class="d-sm-block d-md-none">
        <div class="text-center" style="font-size: 14px; margin-bottom: 9px;">
            До начала смены:  <span id="days2"></span>
            <b><span id="hours2"></span></b> ч <b><span id="minutes2"></span></b> мин
        </div>
        <div class="text-center">
            <button type="button" style="margin-top: -5px;" name="button" class="mainHeaderButtonFix2"
                    data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">
                Забронировать
            </button>
        </div>
        <div class="text-center" style="font-size: 14px;">
            Свободных мест: <b>{{ $main->places }}</b><br>


        </div>
    </div>




    <form id="home" action="{{ route('home') }}" method="GET" style="display: none;">
    </form>
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/welcomeVue.js') }}"></script>
    <script type="text/javascript">
        $('.card-flip').click(function () {
            $(this).toggleClass('flipped');
        });
    </script>

    <script>
        $("#clubs").change(function(){
            var id = $(this).val();
            var token = $("input[name='_token']").val();
            console.log(id);

            $.ajax({
                url: "{{ route('selecttariff') }}",
                method: 'POST',
                data: {id:id, _token:token},
                success: function(data) {
                    $("#tariff").html('');
                    $("#tariff").html(data.options);
                }
            });
        });
    </script>


    <script>
        $("#clubs-mob").change(function(){
            var id = $(this).val();
            var token = $("input[name='_token']").val();
            console.log(id);

            $.ajax({
                url: "{{ route('selecttariffmob') }}",
                method: 'POST',
                data: {id:id, _token:token},
                success: function(data) {
                    $("#tariff-mob").html('');
                    $("#tariff-mob").html(data.options);
                }
            });
        });
    </script>



    <script>

        // Задайте дату начала смены
        var startDate = new Date('{{ $main->date }}');

        // Функция обновления таймера
        function updateTimer() {
            var now = new Date();
            var timeDiff = startDate.getTime() - now.getTime();

            // Вычисляем количество дней, часов, минут и секунд до начала смены
            var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeDiff / (1000 * 60 * 60)) % 24);
            var minutes = Math.floor((timeDiff / 1000 / 60) % 60);
            var seconds = Math.floor((timeDiff / 1000) % 60);

            // Обновляем текст таймера
            document.getElementById('days').innerHTML = days;
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;
        }

        // Обновляем таймер каждую секунду
        setInterval(updateTimer, 1000);


        var startDate2 = new Date('{{ $main->date }}');

        // Функция обновления таймера
        function updateTimer2() {
            var now2 = new Date();
            var timeDiff2 = startDate2.getTime() - now2.getTime();

            // Вычисляем количество дней, часов, минут и секунд до начала смены
            var days2 = Math.floor(timeDiff2 / (1000 * 60 * 60 * 24));
            var hours2 = Math.floor((timeDiff2 / (1000 * 60 * 60)) % 24);
            var minutes2 = Math.floor((timeDiff2 / 1000 / 60) % 60);
            var seconds2 = Math.floor((timeDiff2 / 1000) % 60);

            // Функция для правильного склонения слова "день"
            function declension(num, words) {
                return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
            }

            // Обновляем текст таймера
            document.getElementById('days2').innerHTML = '<b>' + days2 + '</b> ' + declension(days2, ['день', 'дня', 'дней']);
            document.getElementById('hours2').innerHTML = hours2;
            document.getElementById('minutes2').innerHTML = minutes2;
        }

        // Обновляем таймер каждую секунду
        setInterval(updateTimer2, 1000);


        function showMore() {
            var hidden = document.querySelectorAll('.news .hidden');
            for (let i = 0; i < 1 && i < hidden.length; i++) {
                hidden[i].classList.remove('hidden');
            }
        }

        function sendFormDownload() {
            $.ajax({
                type: "POST",
                url: "/sendbackcall/2",
                data: $("#sendform2").serialize(),
                success: function (result) {
                    $("#callback-2-front").addClass("d-none");
                    $("#callback-2-done").removeClass("d-none");
                    var linkreal = document.getElementById('download-link');
                    linkreal.setAttribute('href', 'https://schoolball.ru/' + result);
                    linkreal.setAttribute('download', 'program.pdf');
                    linkreal.click();
                }
            });
        }
    </script>


    <script>
        $(".owl-carousel").owlCarousel({
            navigation : true
        });



        $(document).ready(function() {

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,

                responsiveClass:true,
                items: 1,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:6,
                        nav:true,
                        loop:false
                    }
                }
            })
        })
    </script>


    <script>
        function sendForm2() {
            if ($("#sendform2")[0][1].value !== '' ) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('backCall2') }}",
                    data: $("#sendform2").serialize(),
                    success: function( result ) {
                        if (result == 'DONE!') {
                            $("#callback-2-front").addClass("d-none");
                            $("#callback-2-done").removeClass("d-none");
                        }
                    }
                });

            } else {
                alert('Не введены данные в поля обязательные для заполнения')
            }

        }
    </script>

    <script>
        $("#campVideoBoul").click(function() {
            $("#campVideoBoulLightbox").toggleClass("d-none");
        });
        $("#campVideoBoulButton").click(function() {
            $("#campVideoBoulLightbox").toggleClass("d-none");
        });
        $("#campVideoEdu").click(function() {
            $("#campVideoEduLightbox").toggleClass("d-none");
        });
        $("#campVideoEduButton").click(function() {
            $("#campVideoEduLightbox").toggleClass("d-none");
        });
        $("#campVideoEdu1").click(function() {
            $("#campVideoEdu1Lightbox").toggleClass("d-none");
        });
        $("#campVideoEdu2").click(function() {
            $("#campVideoEdu1Lightbox").toggleClass("d-none");
        });
        $("#campVideoEdu1Button").click(function() {
            $("#campVideoEdu1Lightbox").toggleClass("d-none");
        });
        $("#campVideoFifa").click(function() {
            $("#campVideoFifaLightbox").toggleClass("d-none");
        });
        $("#campVideoFifaButton").click(function() {
            $("#campVideoFifaLightbox").toggleClass("d-none");
        });
    </script>



    <script>
        var module_70796695858=function(){var __hs_messages={};if(i18n_getmessage=function(){return hs_i18n_getMessage(__hs_messages,hsVars.language,arguments)},i18n_getlanguage=function(){return hsVars.language},$(window).width()>768){$(".video .fullscreen-bg__video").preload="auto",$(document).ready((function(){return $("section.parallax .points p a[href*=#]").bind("click",(function(e){var anchor=$(this);$("html, body").stop().animate({scrollTop:$(anchor.attr("href")).offset().top-50},1e3),event.preventDefault()})),!1}));var lastId,topMenu=$("section.parallax .points"),menuItems=topMenu.find("a"),scrollItems=menuItems.map((function(){var item=$($(this).attr("href"));if(item.length)return item}));menuItems.click((function(e){var href=$(this).attr("href"),offsetTop="#"===href?0:$(href).offset().top-400;$("html, body").stop().animate({scrollTop:offsetTop},1e3),event.preventDefault()})),$(window).scroll((function(){var fromTop=$(this).scrollTop()+400,cur=scrollItems.map((function(){if($(this).offset().top<fromTop)return this})),id=(cur=cur[cur.length-1])&&cur.length?cur[0].id:"";lastId!==id&&(lastId=id,menuItems.parent().removeClass("active").end().filter("[href='#"+id+"']").parent().addClass("active"),$("section.parallax").offset().top<fromTop&&$("section.parallax .items .video").hide(),$("#v"+id).show())}))}}();
    </script>


@endsection
