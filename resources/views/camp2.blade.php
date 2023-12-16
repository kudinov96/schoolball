@extends('layouts.camp2')

@section('content')

    <div class="topPartsGray no-radius d-none d-md-block">
        <div class="container">
            <div class="firstSection">
                <div class="row">
                    <div class="col-md-7 firstSectionDescription">


                        <h3>ЗИМНИЕ ФУТБОЛЬНЫЕ КАНИКУЛЫ </h3>

                        <h4>Для детей от 3 до 14 лет <br> Период сборов 02.01.2023 - 09.01.2023 <br> Скидка 10% на раннее бронирование</h4>
                        <button type="button" name="button" data-toggle="modal" data-animation="bounce"
                                data-target=".bs-example-modal-lg">Оставить заявку
                        </button>

                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/Group 29.png') }}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="topPartsGray  no-radius d-sm-block d-md-none">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 class="title-desc-mob" style="margin-bottom: 0px !important;">
                    ЗИМНИЕ ФУТБОЛЬНЫЕ КАНИКУЛЫ
                </h3>

                <h4 style=" font-size: 18px; margin-top: 12px !important; margin-bottom: 32px !important;">Для детей от 3 до 14 лет <br> Период сборов 02.01.2023 - 09.01.2023 <br> Скидка 10% на раннее бронирование</h4>
            </div>

            <div class="firstSection">
                <div class="row">
                    <div class="col-10 offset-1">
                        <img src="{{ asset('assets/Group 29.png') }}" alt="" style="width: 100%; margin-bottom: 10px;">
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


    <!-- Section - schoolball info !-->


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
            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
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
                    <h3 class="title-desc" style="margin-top: 0px !important;margin-bottom: 80px !important;">О лагере</h3>
                </div>

                <div class="col-sm-12 col-md-6 thirdSectionDescription" style="
    margin-right: 93px;">
                    <h4 class="d-none d-md-block">
                        В 2014 году мы поставили себе задачу:сделать детский спортивный лагерь не только полезным для развития физических качеств и футбольных навыков ребёнка, но и ярким, интересным событием с активной досуговый программой в течение дня.
                        <br><br>
                        В нашем лагере проводят время как ученики из детско-юношеских спортивных школ (ДЮСШ), так и дети без опыта тренировок в футбольных школах (нулевой уровень подготовки).
                        <br><br>
                        Каждая категория детей занимается в отдельной группе, со своим тренером и по индивидуальной программе.

                    </h4></div>

                <div class=" d-none d-md-block col-md-5 thirdSectionImg"><img src="{{ asset('assets/home2/img@2x.png') }}"
                                                                              alt="" style="width: 68%;"></div>


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
                <h3 class="mob-title-sec" style="     margin-top: 42px;">О лагере</h3>
            </div>

            <h5 class="mob-text-section">
                В 2014 году мы поставили себе задачу:сделать детский спортивный лагерь не только полезным для развития физических качеств и футбольных навыков ребёнка, но и ярким, интересным событием с активной досуговый программой в течение дня.
                <br><br>
                В нашем лагере проводят время как ученики из детско-юношеских спортивных школ (ДЮСШ), так и дети без опыта тренировок в футбольных школах (нулевой уровень подготовки).
                <br><br>
                Каждая категория детей занимается в отдельной группе, со своим тренером и по индивидуальной программе.

            </h5>


        </div>
    </div>

    <!-- Section - О лагере !-->

    <!-- Section - Укрепляем тело  !-->

    @include('sections-winter-camp.block2')

    <!-- Section - Укрепляем тело  !-->


    <!-- Section - Что ждет вашего ребенка  !-->
    @include('sections-winter-camp.block3')

    <!-- Section - Что ждет вашего ребенка   !-->



    <!-- Section - Продуктивный распорядок дня   !-->
    @include('sections-winter-camp.block4')

    <!-- Section - Продуктивный распорядок дня   !-->


    <!-- Section - Гарантия безопасности   !-->
    @include('sections-winter-camp.block5')

    <!-- Section - Гарантия безопасности   !-->


    <!-- Section - Квалифицированный педагогический состав   !-->
    @include('sections-winter-camp.block6')

    <!-- Section - Квалифицированный педагогический состав   !-->


    <!-- Section - Место проведения лагеря   !-->
    @include('sections-winter-camp.block7')

    <!-- Section - Место проведения лагеря   !-->


    <!-- Section - Отзывы родителей о нашей школе   !-->

    @include('sections-winter-camp.reviews')

    <!-- Section - Отзывы родителей о нашей школе   !-->


    <!-- Section - Стоимость   !-->

    @include('sections-winter-camp.block8')

    <!-- Section - Стоимость   !-->


    <!-- Section - Ответы на часто задаваемые вопросы
   !-->
    @include('sections-winter-camp.faq')

    <!-- Section - Ответы на часто задаваемые вопросы
   !-->













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



@endsection
