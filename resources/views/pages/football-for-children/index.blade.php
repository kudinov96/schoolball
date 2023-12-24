@extends('layouts.app')
@section('title')
    <title>{{ $title }}</title>
@endsection
@section('description')
    <meta name="description" content="{{ $description }}">
@endsection


@section('content')



    <div class="topPartsGray no-radius d-none d-md-block">
        <div class="container">
            <div class="firstSection">
                <div class="row">
                    <div class="col-md-7 firstSectionDescription">
                        <h1 style="font-size: 1px !important; color: #f7f7f9!important;">{{ $h1 }}</h1>

                        <h3>УЧИМ ИГРАТЬ В ФУТБОЛ И ПОМОГАЕМ ВЗРОСЛЕТЬ </h3>

                        <h4>Приглашаем юных спортсменов от {{ $ageText }} лет на пробное занятие в клубы Школы мяча.</h4>
                        <button type="button" name="button" data-toggle="modal" data-animation="bounce"
                                data-target=".bs-example-modal-lg">Записаться на пробную тренировку
                        </button>

                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/Group 29.png') }}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="seventhSection d-none d-md-block" id="" style="margin-top: 50px; margin-bottom: 48px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="features-img" src="{{ asset('assets/home2/ico-1.svg') }}">
                        </div>
                        <div class="col-md-10">
                            <div class="features-text">10+ лет опыта работы </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="features-img" src="{{ asset('assets/home2/ico-2.svg') }}">
                        </div>
                        <div class="col-md-10">
                            <div class="features-text">80% приходят снова </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="features-img" src="{{ asset('assets/home2/ico-3.svg') }}">
                        </div>
                        <div class="col-md-10">
                            <div class="features-text">5+ лет стаж тренеров </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>






    <div class="topPartsGray  no-radius d-sm-block d-md-none">

        <div class="container">
            <div class="col-md-12 text-center">
                <h1 style="font-size: 1px !important; color: #f7f7f9!important;">{{ $h1 }}</h1>
                <h3 class="title-desc-mob" style="margin-bottom: 0px !important;">УЧИМ ИГРАТЬ В ФУТБОЛ И ПОМОГАЕМ
                    ВЗРОСЛЕТЬ
                </h3>

                <h4 style=" font-size: 18px; margin-top: 12px !important; margin-bottom: 32px !important;">Приглашаем
                    юных спортсменов от 3 до 16 лет на пробное занятие в клубы Школы мяча.</h4>
            </div>

            <div class="firstSection">
                <div class="row">
                    <div class="col-10 offset-1">
                        <img src="{{ asset('assets/Group 29.png') }}" alt="" style="width: 100%; margin-bottom: 10px;">
                    </div>
                    <div class="col-12 firstSectionDescription text-center">

                        <button type="button" name="button" data-toggle="modal" data-animation="bounce"
                                data-target=".bs-example-modal-lg">Записаться на пробную тренировку
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="row text-center d-sm-block d-md-none" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('assets/home2/ico-1.svg') }}" class="features-img-mob" >
                    <h5 class="mob-title-col">10+ лет опыта работы</h5>

                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/home2/ico-2.svg') }}" class="features-img-mob">
                    <h5 class="mob-title-col">80% приходят снова </h5>

                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/home2/ico-2.svg') }}" class="features-img-mob">
                    <h5 class="mob-title-col">5+ лет стаж тренеров </h5>

                </div>
            </div>


        </div>


    </div>


    <!-- Section - schoolball info !-->







    <div class="secondSection d-none d-md-block">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc">Школа мяча — это...</h3>
                </div>




                <div class="col-md-4">
                    <div class="rectangle">
                        <img src="{{ asset('assets/section_icons/1.svg') }}" alt="">
                        <h3>24 спортивных клуба</h3>
                        <h4>В 9 округах Москвы и ближнем Подмосковье.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <img src="{{ asset('assets/training.png') }}" alt="">
                        <h3>Профессиональные стадионы</h3>
                        <h4>Поля с искусственным газоном, тёплые футбольные манежи.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <img src="{{ asset('assets/section_icons/3.svg') }}" alt="">
                        <h3>Индивидуальное расписание</h3>
                        <h4>Тренировки 1-3 раза в неделю утром, днём или вечером.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <img src="{{ asset('assets/player.png') }}" alt="">
                        <h3>Гибкие абонементы</h3>
                        <h4>Свободный график трениворок, возможность «заморозки».</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <img src="{{ asset('assets/section_icons/5.svg') }}" alt="">
                        <h3>Опытные тренеры</h3>
                        <h4>Чемпионы России с тренерскими лицензиями категорий С и D.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <img src="{{ asset('assets/section_icons/6.svg') }}" alt="">
                        <h3>Партнер ЦСКА</h3>
                        <h4>Отбор юных талантов для обучения в школе ПФК ЦСКА.</h4>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Section - schoolball info mob !-->


    <!-- Section - schoolball info mob !-->
    <div class="secondSection d-sm-block d-md-none">

        <div class="container">

            <div class="w-100"></div>
            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
                <h3 class="mob-title-sec" style=" ">Школа мяча — это...</h3>
            </div>
            <div class="col-12 d-sm-block d-md-none" style="">
                <div class="row mobile-advantage-slider">

                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets//section_icons/1.svg') }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>24 спортивных клуба</h3>
                                    <p>
                                        В 9 округах Москвы и ближнем Подмосковье.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/training.png') }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Профессиональные стадионы
                                    </h3>
                                    <p>
                                        Поля с искусственным газоном, тёплые футбольные манежи.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/player.png') }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Гибкие абонементы
                                    </h3>
                                    <p>
                                        Свободный график трениворок, возможность «заморозки».

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/section_icons/5.svg') }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Опытные тренеры</h3>
                                    <p>
                                        Чемпионы России с тренерскими лицензиями категорий С и D.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets//section_icons/6.svg') }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Партнер ЦСКА</h3>
                                    <p>
                                        Отбор юных талантов для обучения в школе ПФК ЦСКА.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <!-- Section - schoolball info !-->



    <!-- Section - map info !-->
    @include('sections-index.map')

    <!-- Section - map info !-->


    <div class="section-preims">
        <div class="container">
            <div class="section-preims__img">
                <img src="{{ asset("assets/football.png") }}" alt="">
            </div>
            <div class="section-preims__block">
                <div class="section-preims__title">«Школа мяча» с вами рядом, когда нужно:</div>
                <ul class="ul-success">
                    <li>Развить уверенность в ребенке через достижения в спорте;</li>
                    <li>Обеспечить безопасность и заботу о здоровье ребенка;</li>
                    <li>Предоставить социальное развитие;</li>
                    <li>Заинтересовать ребенка спортом для поддержания здорового образа жизни;</li>
                    <li>Развлечь ребенка в свободное время.</li>
                </ul>
                <div class="section-preims__btn">
                    <button type="button" class="btn-desc waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">
                        Попробовать бесплатно
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Section -Укрепляем тело, развиваем личность !-->

    <div class="thirdSection d-none d-md-block" id="lightbox">
        <div class="container">


            <div class="row">

                <div class="col-md-12 text-center  d-none d-md-block">
                    <h3 class="title-desc">Укрепляем тело, развиваем личность</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/home2/ico-4.svg')  }}" alt="">
                        <h3>Уверенность в себе</h3>
                        <h4>Наши тренеры учат не только побеждать, но и с честью признать поражение, расти на своих ошибках и <b>верить в свои силы.</b></h4>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/home2/ico-5.svg')  }}" alt="">
                        <h3>Новые друзья</h3>
                        <h4>Дети учатся <b>договариваться</b>
                            с другими участниками команды
                            и заводить новых друзей.</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/home2/ico-6.svg')  }}" alt="">
                        <h3>Крепкое здоровье</h3>
                        <h4>Футбол — больше чем игра. Это <b>здоровый</b> стиль жизни, развитие <b>личностных</b> качеств
                            и <b>коммуникативных</b> навыков.</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rectangleHome2">
                        <img src="{{ asset('assets/home2/ico-7.svg')  }}" alt="">
                        <h3>Лидерские качества</h3>
                        <h4>На тренировках юные футболисты знакомятся с игровым <b>мышлением</b>, развивают <b>воображение</b> и <b>лидерские качества</b>.</h4>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="thirdSection d-sm-block d-md-none">

        <div class="container">

            <div class="w-100"></div>
            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
                <h3 class="mob-title-sec" style=" ">Укрепляем тело, развиваем личность</h3>
            </div>
            <div class="col-12 d-sm-block d-md-none" style="">
                <div class="row mobile-advantage-slider">

                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/home2/ico-4.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Уверенность в себе</h3>
                                    <p>
                                        Наши тренеры учат не только побеждать, но и с честью признать поражение, расти на своих ошибках и <b>верить в свои силы.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/home2/ico-5.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Новые друзья
                                    </h3>
                                    <p>
                                        Дети учатся <b>договариваться</b>
                                        с другими участниками команды
                                        и заводить новых друзей.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/home2/ico-6.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Крепкое здоровье
                                    </h3>
                                    <p>
                                        Футбол — больше чем игра. Это <b>здоровый</b> стиль жизни, развитие <b>личностных</b> качеств
                                        и <b>коммуникативных</b> навыков.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area">
                        <div class="advantageCard">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{ asset('assets/home2/ico-7.svg')  }}" style=" ">
                                </div>
                                <div class="col-md-10 text-left">
                                    <h3>Лидерские качества</h3>
                                    <p>
                                        На тренировках юные футболисты знакомятся с игровым <b>мышлением</b>, развивают <b>воображение</b> и <b>лидерские качества</b>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>

        </div>
    </div>




    <!-- Section -Укрепляем тело, развиваем личность!-->

    <div class="d-sm-block d-md-none">

        <div class="mob-application">
            <h3 class="text-left">Рекомендации по развитию личности от нашего психолога</h3>

            <p>Получите бесплатные профессиональные советы по развитию личности от нашего психолога.</p>
            <div class="card-body">
                <div class="text-center">


                    <button type="button" style="margin-top: 65px;"  class="btn-desc  waves-effect waves-light mt-5" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2">
                        Получить рекомендации
                    </button>
                </div>
            </div><!--end card-body-->
        </div>
    </div>
    <!-- Section -Консультация психолога !-->
    <div class="secondSection d-none d-md-block" style="margin-top:40px;">

        <div class="container">
            <div class="row">


                <div class="col-sm-12 col-md-7 thirdSectionDescription">

                    <h3 class="title-desc mb-16" style=" margin-top: 10px !important; font-size: 40px !important; ">Рекомендации по развитию личности от нашего психолога</h3>

                    <p style="
    font-size: 26px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.54;
    letter-spacing: normal;
    color: #303337;
    text-align: left;
    margin-bottom: 40px;">
                        Получите бесплатные профессиональные советы по развитию личности от нашего психолога.
                    </p>

                    <button type="button" style="margin-top: 65px;"  class="btn-desc  waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2">
                        Получить рекомендации
                    </button>



                </div>

                <div class=" d-none d-md-block col-md-5 thirdSectionImg">
                    <img src="{{ asset('assets/psyhology.png')  }}" alt="" style="width: 80%;  margin-left: 60px;">
                </div>


            </div>
        </div>
    </div>


    <!-- Section -Консультация психолога !-->

    <!-- Section -> Методика подготовки футболистов!-->

    <div class="fourthSection d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div id="methods"  style="visibility: hidden;position: relative;top: -100px;"></div>

                    <h3 class="title-desc">Адаптивная программа для всех возрастов</h3>
                    <h4 class="main_desc">
                        Мы ориентируемся на европейскую технику обучения футболу, при которой спортсмены как можно
                        больше контактируют с мячом и быстро осваивают приёмы владения и управления мячом уже на
                        начальных этапах. Особое место занимает психологическая подготовка детей: развитие командного
                        духа, целеустремлённости и уверенности в себе.
                    </h4>


                </div>

                {{--<div class="col-auto center-block  text-center">
                    <div class="toggler">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">3–4 года</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-1-tab" data-toggle="pill" data-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="false">5–7 лет</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-2-tab" data-toggle="pill" data-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">8–10 лет</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-3-tab" data-toggle="pill" data-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">11–12 лет</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-4-tab" data-toggle="pill" data-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">13–16 лет</button>
                            </li>
                        </ul>
                    </div>
                </div>--}}

                <div class="w-100"></div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade @if($slug === '3-let') show active @endif" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="kidsSkills">
                            <div class="row" style="">


                                <div class="col-md-6 d-none d-md-block text-center"><img
                                        src="{{ asset('assets/3-4 copy@2x.png') }}" alt=""
                                        style="   height: 435px; width: 380px;"></div>
                                <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">





                                    <h3 class="text-left"  >Ожидаемые результаты</h3>

                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Техника футбольных передвижений без мяча </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Повышенная быстрота и скорость реакций </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Ведение мяча, приём и жонглирование с рук </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Улучшенная координация движения ног и рук </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Правильная осанка, укрепленные суставы и связки </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Знания о строении тела и экипировке футболиста </span> <br>



                                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>
                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Техника
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 0%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Физика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 60%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Теория
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 10%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Психология
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16  ">
                                        <div class="col-sm-3">
                                            Тактика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 10%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Мышление
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar6" role="progressbar" style="width: 60%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>







                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade @if($slug === '4-5-let') show active @endif" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                        <div class="kidsSkills">
                            <div class="row" style="">


                                <div class="col-md-6 d-none d-md-block text-center"><img
                                        src="{{ asset('assets/images/5-7@2x.png') }}" alt=""
                                        style="   height: 435px; width: 380px;"></div>
                                <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">

                                    <h3 class="text-left"  >Ожидаемые результаты</h3>



                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c"> Выполнение сложных упражнений на координацию </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Навыки приёма, передачи и контроля мяча </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Умение предугадывать направление мяча в воздухе </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Улучшение скорости и техники бега </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Знание футбольной терминологии </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Умение играть в команде </span> <br>


                                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>

                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Техника
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 0%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>





                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Физика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 0%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Теория
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 0%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Психология
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar4"  role="progressbar" style="width: 0%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16  ">
                                        <div class="col-sm-3">
                                            Тактика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 0%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Мышление
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar6" role="progressbar" style="width: 0%"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>





                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade @if($slug === '6-9-let') show active @endif" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                        <div class="kidsSkills">
                            <div class="row" style="">


                                <div class="col-md-6 d-none d-md-block text-center"><img
                                        src="{{ asset('assets/images/8-10@2x.png') }}" alt=""
                                        style="   height: 435px; width: 380px;"></div>
                                <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">


                                    <h3 class="text-left"  >Ожидаемые результаты</h3>



                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c"> Улучшенные навыки владения и управления мячом </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Знакомство с приёмами дриблинга и отбора </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Опыт игры на разных позициях на поле </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Знакомство с футбольными правилами, сигналами и жестами судьи </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Адекватный анализ своих сильных и слабых сторон </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Постановка правильной техники при единоборствах и работе с мячом </span> <br>



                                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>

                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Техника
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar1" role="progressbar" style="width: 100%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Физика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar2-2" role="progressbar" style="width: 90%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Теория
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey  animate-bar3-3" role="progressbar" style="width: 40%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Психология
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey  animate-bar4" role="progressbar" style="width: 50%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16  ">
                                        <div class="col-sm-3">
                                            Тактика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey  animate-bar5" role="progressbar" style="width: 40%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Мышление
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar6" role="progressbar" style="width: 60%"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>





                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade @if($slug === '10-14-let') show active @endif" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">

                        <div class="kidsSkills">
                            <div class="row" style="">


                                <div class="col-md-6 d-none d-md-block text-center"><img
                                        src="{{ asset('assets/images/11-12@2x.png') }}" alt=""
                                        style="   height: 435px; width: 380px;"></div>
                                <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">


                                    <h3 class="text-left" >Ожидаемые результаты</h3>


                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Умение быстро реагировать и выполнять технические приёмы </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Улучшенные навыки владения и управления мячом </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Опыт командной игры при атаке и обороне </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Знакомство с приёмами удара и игры головой, ведение единоборств </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Умение ставить игровые цели и оценивать результат </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Знакомство с историей футбола </span> <br>


                                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Техника
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar1" role="progressbar" style="width: 100%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Физика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar2" role="progressbar" style="width: 80%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Теория
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar3" role="progressbar" style="width: 70%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Психология
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar4" role="progressbar" style="width: 60%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16  ">
                                        <div class="col-sm-3">
                                            Тактика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar  animate-bar5" role="progressbar" style="width: 70%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Мышление
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey  animate-bar6" role="progressbar" style="width: 30%"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>






                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                        <div class="kidsSkills">
                            <div class="row" style="">


                                <div class="col-md-6 d-none d-md-block text-center"><img
                                        src="{{ asset('assets/images/13-16@2x.png') }}" alt=""
                                        style="   height: 435px; width: 380px;"></div>
                                <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">


                                    <h3 class="text-left" >Ожидаемые результаты</h3>



                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Развитый навык самоконтроля и самодисциплины </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Умение реализовывать различные тактические схемы на игровом поле </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Улучшенные навыки единоборств, дриблинга, удара и игры головой </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Формирование адекватной самооценки </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Высокий уровень выносливости </span> <br>
                                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                        class="list-c">Умение распределять свои силы и быстро восстанавливать энергию </span> <br>




                                    <h3 class="text-left"  style="margin-top:35px;">Приоритеты развития</h3>



                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Техника
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar1" role="progressbar" style="width: 60%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Физика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 70%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Теория
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar3" role="progressbar" style="width: 50%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Психология
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16  ">
                                        <div class="col-sm-3">
                                            Тактика
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar animate-bar5" role="progressbar" style="width: 90%"
                                                ></div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mb-16">
                                        <div class="col-sm-3">
                                            Мышление
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress">
                                                <div class="progress-bar-grey animate-bar6" role="progressbar" style="width: 20%"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>




                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Section -> Методика подготовки футболистов!-->


    <!-- Section -> Методика подготовки футболистов! mob-->


    <div class="secondSection d-sm-block d-md-none">

        <div class="container">

            <div class="w-100"></div>
            <div class="col text-left mobFontSize-section3" style="
    margin-left: -16px;">
                <div id="methodsmob"  style="visibility: hidden;position: relative;top: -100px;"></div>

                <h3 class="mob-title-sec" style="     margin-top: 84px;">Адаптивная программа для всех возрастов</h3>
            </div>

            <h5 class="mob-text-section">
                Тренировочные программы разработаны специалистами европейского уровня, для каждой возрастной группы
                подбираются уникальные упражнения, исходя
                из физических и психологических особенностей детей

            </h5>

            <!-- toogle --> {{--<div class="section_main">
                <div class="tabbable" id="nav-tab" role="tablist">
                    <ul class="nav nav-pills mb-3 mob-tab  nav nav-tabs" id="pills-tab" role="tablist">


                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab-mob" data-toggle="pill" data-target="#pills-home-mob" type="button" role="tab" aria-controls="pills-home-mob" aria-selected="true">3–4 года</button>

                        </li>


                        <li class="nav-item mob-tab-t" role="presentation">
                            <button class="nav-link" id="pills-1-tab-mob" data-toggle="pill" data-target="#pills-1-mob" type="button" role="tab" aria-controls="pills-1-mob" aria-selected="false">5–7 лет</button>
                        </li>


                        <li class="nav-item mob-tab-t" role="presentation">
                            <button class="nav-link" id="pills-2-tab-mob" data-toggle="pill" data-target="#pills-2-mob" type="button" role="tab" aria-controls="pills-2-mob" aria-selected="false">8–10 лет</button>
                        </li>

                        <li class="nav-item mob-tab-t" role="presentation">
                            <button class="nav-link" id="pills-3-tab-mob" data-toggle="pill" data-target="#pills-3-mob" type="button" role="tab" aria-controls="pills-3-mob" aria-selected="false">11–12 лет</button>
                        </li>


                        <li class="nav-item mob-tab-t" role="presentation">
                            <button class="nav-link" id="pills-4-tab-mob" data-toggle="pill" data-target="#pills-4-mob" type="button" role="tab" aria-controls="pills-4-mob" aria-selected="false">13–16 лет</button>
                        </li>
                    </ul>
                </div>

            </div>--}}

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade @if($slug === '3-let') show active @endif" id="pills-home-mob" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="kidsSkillsMob">


                        <h3 class="text-left" >Ожидаемые результаты</h3>

                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Техника футбольных передвижений без мяча </span>
                        <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Повышенная быстрота и скорость реакций </span>
                        <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Ведение мяча, приём и жонглирование с рук </span>
                        <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенная координация движения ног и рук </span>
                        <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Правильная осанка, укрепленные суставы и связки </span>
                        <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знания о строении тела и экипировке футболиста </span>
                        <br>


                        <h3 class="text-left"  style="margin-top:35px;">Приоритеты развития</h3>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Техника
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 20%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Физика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar2" role="progressbar" style="width: 60%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Теория
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 10%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>



                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Психология
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16  ">
                            <div class="col-sm-3">
                                Тактика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 10%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Мышление
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar6" role="progressbar" style="width: 60%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>









                    </div>
                </div>
                <div class="tab-pane fade @if($slug === '4-5-let') show active @endif" id="pills-1-mob" role="tabpanel" aria-labelledby="pills-1-tab-mob">
                    <div class="kidsSkillsMob">


                        <h3 class="text-left"  >Ожидаемые результаты</h3>


                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Выполнение сложных упражнений на координацию</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Навыки приёма, передачи и контроля мяча</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение предугадывать направление мяча в воздухе</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшение скорости и техники бега</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знание футбольной терминологии</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение играть в команде </span><br>




                        <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>





                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Техника
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 40%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Физика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar2" role="progressbar" style="width: 80%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Теория
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 20%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>



                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Психология
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16  ">
                            <div class="col-sm-3">
                                Тактика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 20%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Мышление
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar6" role="progressbar" style="width: 80%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                <div class="tab-pane fade @if($slug === '6-9-let') show active @endif" id="pills-2-mob" role="tabpanel" aria-labelledby="pills-2-tab-mob">
                    <div class="kidsSkillsMob">



                        <h3 class="text-left">Ожидаемые результаты</h3>

                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенные навыки владения и управления мячом </span> <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с приёмами дриблинга и отбора</span> <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Опыт игры на разных позициях на поле</span> <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с футбольными правилами, сигналами и жестами судьи</span> <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Адекватный анализ своих сильных и слабых сторон</span> <br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Постановка правильной техники при единоборствах и работе с мячом</span> <br>





                        <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>



                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Техника
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar1"  role="progressbar" style="width: 100%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Физика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar2" role="progressbar" style="width: 90%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Теория
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 40%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>



                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Психология
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar4" role="progressbar" style="width: 50%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16  ">
                            <div class="col-sm-3">
                                Тактика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 40%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Мышление
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar6" role="progressbar" style="width: 60%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>
                <div class="tab-pane fade @if($slug === '10-14-let') show active @endif" id="pills-3-mob" role="tabpanel" aria-labelledby="pills-3-tab-mob">
                    <div class="kidsSkillsMob">


                        <h3 class="text-left" >Ожидаемые результаты</h3>

                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение быстро реагировать и выполнять технические приёмы  </span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенные навыки владения и управления мячом</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Опыт командной игры при атаке и обороне</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с приёмами удара и игры головой, ведение единоборств</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение ставить игровые цели и оценивать результат</span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с историей футбола</span><br>





                        <h3 class="text-left"  style="margin-top:35px;">Приоритеты развития</h3>

                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Техника
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar1" role="progressbar" style="width: 100%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Физика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar2" role="progressbar" style="width: 80%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Теория
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar3" role="progressbar" style="width: 70%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>



                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Психология
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar4" role="progressbar" style="width: 60%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16  ">
                            <div class="col-sm-3">
                                Тактика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar5" role="progressbar" style="width: 70%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Мышление
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar6" role="progressbar" style="width: 30%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>
                <div class="tab-pane fade" id="pills-4-mob" role="tabpanel" aria-labelledby="pills-4-tab-mob">
                    <div class="kidsSkillsMob">


                        <h3 class="text-left" >Ожидаемые результаты</h3>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Развитый навык самоконтроля и самодисциплины </span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение реализовывать различные тактические схемы на игровом поле </span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенные навыки единоборств, дриблинга, удара и игры головой </span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Формирование адекватной самооценки </span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Высокий уровень выносливости </span><br>
                        <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение распределять свои силы и быстро восстанавливать энергию </span><br>




                        <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>





                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Техника
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar1" role="progressbar" style="width: 60%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Физика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar2" role="progressbar" style="width: 70%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Теория
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar3" role="progressbar" style="width: 50%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>



                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Психология
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16  ">
                            <div class="col-sm-3">
                                Тактика
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar animate-bar5" role="progressbar" style="width: 90%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row mb-16">
                            <div class="col-sm-3">
                                Мышление
                            </div>
                            <div class="col-sm-9">
                                <div class="progress">
                                    <div class="progress-bar-grey animate-bar6" role="progressbar" style="width: 20%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>






                    </div>

                </div>
            </div>


        </div>

    </div>




    <!-- Section -> Методика подготовки футболистов! mob -->






    <!-- Section -> пробная тренировка   -->

    <div class="fourthSection d-none d-md-block" style="margin-top: 112px !important; ">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <img  src="{{ asset('assets/home2/img@2x.png') }}" style="     width: 423px;
    height: 536px;" alt="">

                </div>
                <div class="col-md-7">
                    <h3 class="title-section text-left">Пробная тренировка бесплатно</h3>

                    <h4 class=" desc-section text-left">
                        Оставьте заявку на пробную тренировку, наш менеджер подберёт подходящую по возрасту
                        и расписанию группу в клубе в вашем районе.<br> <br>

                        Присутствуя на занятии, вы увидите, как проходит тренировка, и сможете задать вопросы тренеру после её окончания. </h4>
                    <button type="button" class="btn-desc  waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">
                        Записаться
                    </button>
                </div>



            </div>
        </div>
    </div>
    <!-- Section -> пробная тренировка   -->


    <!-- Section -> пробная тренировка mob -->

    <div class="fourthSection d-sm-block d-md-none" style="margin-top: 41px !important; ">
        <div class="container">

            <div class=" col-auto center-block  text-center">
                <img  class="traning-image" src="{{ asset('assets/group-60.png') }}" style="height: 220px;" alt="">
            </div>


            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
                <h3 class="mob-title-sec" style="     margin-top: 42px;">Пробная тренировка бесплатно</h3>
            </div>

            <h5 class="mob-text-section">
                Оставьте заявку на пробную тренировку, и наш менеджер подберёт подходящую по возрасту
                и расписанию группу в клубе в вашем районе. Присутствуя на занятии, вы увидите, как проходит тренировка,
                и сможете задать вопросы тренеру после её окончания. В случае присоединения
                к клубу первая тренировка включается в абонемент.
            </h5>

            <!-- <button type="button" name="button" onclick="event.preventDefault();document.getElementById('home').submit();">Оставить заявку</button> -->
            <div class="card-body">
                <div class="text-center">
                    <button type="button" class="btn-desc  waves-effect waves-light" data-toggle="modal"
                            data-animation="bounce" data-target=".bs-example-modal-lg">Оставить заявку
                    </button>
                </div>
            </div><!--end card-body-->

        </div>
    </div>



    <!-- Section -> пробная тренировка mob -->



    <!-- Coaches -->

    <?php
    /*
        @include('sections-main.coaches')
    */
    ?>
    @include('sections-main.coaches-old')

    <!-- Section Coaches end -->

    @if($seoBlock)
        {!! $seoBlock !!}
    @endif

    <!-- Section - championship !-->

    <div class="secondSection d-none d-md-block">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc">Кубок Школы мяча</h3>
                </div>

                <div class="col-sm-12 col-md-7 thirdSectionDescription">
                    <h4 class="d-none d-md-block">
                        Наши ученики занимаются в клубах Школы, разбросанных
                        по всей столице, но ежегодно встречаются вместе на Чемпионате Школы, чтобы проверить свои силы в
                        настоящем матче. <br><br>
                        Чемпионат Школы мяча — это семейный праздник и важное событие для юных спортсменов. Он помогает
                        ребятам осознать истинную цену победы и мотивирует их на развитие в спорте.
                    </h4></div>

                <div class=" d-none d-md-block col-md-5 thirdSectionImg"><img src="{{ asset('assets/group-70.png') }}"
                                                                              alt="" style="width: 100%;"></div>


            </div>
        </div>
    </div>

    <!-- Section - championship mob !-->



    <div class="fourthSection d-sm-block d-md-none" style="margin-top: 87px !important; ">
        <div class="container">

            <div class=" col-auto center-block  text-center">
                <img src="{{ asset('assets//3-4 copy@2x.png') }}" style="height: 220px;" alt="">
            </div>


            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
                <h3 class="mob-title-sec" style="     margin-top: 42px;">Кубок Школы мяча</h3>
            </div>

            <h5 class="mob-text-section">
                Наши ученики занимаются в клубах Школы, разбросанных по всей столице, но ежегодно встречаются вместе на
                Чемпионате Школы, чтобы проверить свои силы в настоящем матче. <br> <br>
                Чемпионат Школы мяча — это семейный праздник и важное событие для юных спортсменов. Он помогает ребятам
                осознать истинную цену победы и мотивирует их
                на развитие в спорте.
            </h5>


        </div>
    </div>



    <!-- Section - championship  mob !-->


    <!-- Section - championship !-->



    <!-- Section - reviews !-->

    <div id="">
        <div class="secondSection    ">


            <div class="container">

                <div class="d-sm-block d-md-none row d-flex justify-content-center">
                    <img src="{{asset('assets/new-message-3@2x.png')}}" class="reviews-img" style=" " alt="">


                </div>


                <div class="col text-left mobFontSize-section4  d-sm-block d-md-none" style="
    margin-left: -16px;">
                    <div id="reviewsmob"  style="visibility: hidden;position: relative;top: -100px;"></div>

                    <h3 class="mob-title-sec" style="margin-top: 42px; margin-bottom: 0px;">Мнение родителей</h3>
                </div>


                <div class="row  bg-reviews">


                    <div class="col-md-12 text-center ">
                        <div id="reviews"  style="visibility: hidden;position: relative;top: -100px;"></div>

                        <h3 class="title-desc d-none d-md-block" style="margin-bottom: 42px !important;">Мнение
                            родителей</h3>
                        <div class="d-none d-md-block">
                            <div class="row d-flex justify-content-center " style="margin-bottom: 56px;">

                                <div class="col-md-7  ">

                                    <div class="card">

                                        <div class="text-center mt-3">

                                            <span class="reviews_count"> 4.7 </span>
                                            <span class=""><img src="{{ asset('assets/Group 19.png') }}"
                                                                class="reviews_img_star" alt=""></span>
                                            <span class="reviews_text_star"> 576 отзывов на Яндекс </span>

                                        </div>

                                    </div>


                                    <div class="card">
                                        <div class="text-center mt-3">

                                            <span class="reviews__text"> <span style="color: #fec311;">4,8</span> тренерский состав </span>
                                            <span class="reviews__text"> <span style="color: #fec311;">4,6</span> стадионы </span>
                                            <span class="reviews__text"> <span style="color: #fec311;">4,6</span> менеджеры </span>

                                            <?php /*
                                        <select class="custom-select custom-select-lg mb-3 reviews-select">
                                            <option selected="">все отделения</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
 */ ?>

                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>




                        <!-- mob -->

                        <div class="d-sm-block d-md-none">



                            <div class="row d-flex     d-sm-block d-md-none" style="margin-bottom: 32px;">

                                <div class="col-md-7       ">

                                    <div class="card">

                                        <div class=" mt-3   text-left">

                                            <span class="reviews_count"> 4.7 </span>
                                            <span class="text-left"><img src="{{ asset('assets/Group 19.png') }}"
                                                                         class="reviews_img_star" alt=""></span> <br>
                                            <span class="reviews_text_star text-left" style="margin: 0 0 0 0px;"> 576 отзывов на Яндекс </span>

                                        </div>


                                    </div>


                                    <div class="card">
                                        <div class="mt-3  text-left">

                                            <div style="margin-bottom: 8px"><span class="reviews__text"> <span
                                                        style="color: #fec311;">4,8</span> тренерский состав </span> <br>
                                            </div>
                                            <div style="margin-bottom: 8px"><span class="reviews__text"> <span
                                                        style="color: #fec311;">4,6</span> стадионы </span> <br></div>
                                            <div style="margin-bottom: 8px"><span class="reviews__text"> <span
                                                        style="color: #fec311;">4,6</span> менеджеры </span> <br></div>
                                            <?php /*
                                        <select class="custom-select custom-select-lg mb-3 reviews-select">
                                            <option selected>все отделения</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

 */

                                            ?>
                                        </div>

                                    </div>


                                </div>


                            </div>
                        </div>
                        <!-- mob -->


                    </div>


                    <div class="col-sm-12 col-md-7 thirdSectionDescription">
                        <div class="d-none d-md-block">
                            <div style="    width: 651px;
    margin-right: 0px;
    height: 773px; overflow:hidden;position:relative;"><iframe style="width: 651px; height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/1747362784?comments"></iframe>

                            </div>

                        </div>
                        <?php /*
                    <ul class="news">
                  <li><div class="row mb-48">

                          <div class="col-md-2">
                              <div class=" d-none d-md-block">

                                  <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                       class="rounded-circle reviews-avatar">

                              </div>
                          </div>
                          <div class="col-md-10">

                              <div class="d-sm-block d-md-none">
                                  <div class="card p-3 py-4">

                                      <div class="text-center">

                                          <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                               class="rounded-circle reviews-avatar">

                                      </div>
                                  </div>


                              </div>

                              <h4 class="reviews-author">Татьяна Самарцева</h4>
                              <span class="reviews-author-club">Ребёнок тренируется <u>в клубе «Волна»</u></span>
                              <br>
                              <div class="raiting-space">
                                  <span class="reviews-author-raiting">5,0  </span> <img
                                      src="{{ asset('assets/Group 19.png')  }}" alt=""
                                      style="    width: 80px; margin-top: -3px; ">
                                  <span class="raiting-place">тренерский состав</span> <br>
                                  <span class="reviews-author-raiting">4,6  </span> <img
                                      src="{{ asset('assets/Group 19.png')  }}" alt=""
                                      style="    width: 80px; margin-top: -3px; ">
                                  <span class="raiting-place">стадион</span> <br>
                                  <span class="reviews-author-raiting">5,0  </span> <img
                                      src="{{ asset('assets/Group 19.png')  }}" alt=""
                                      style="    width: 80px; margin-top: -3px; ">
                                  <span class="raiting-place">менеджер</span> <br>


                              </div>

                              <span class="raiting-text"
                              >
                                  Ребенок ходит на занятия с удовольствием. Тренерский состав это дружные отзывчивые ребята с пониманием своего дела. Мы отходили не так много занятий, чтобы сделать полноценный вывод. Спасибо за Вашу работу!

                              </span>


                          </div>


                      </div></li>
                  <li>    <div class="row mb-48">
                        <div class="col-md-2">
                            <div class=" d-none d-md-block">

                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                     class="rounded-circle reviews-avatar">

                            </div>
                        </div>
                        <div class="col-md-10">

                            <div class="d-sm-block d-md-none">
                                <div class="card p-3 py-4">

                                    <div class="text-center">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>


                            </div>

                            <h4 class="reviews-author">Мария Марсел</h4>
                            <span class="reviews-author-club">Ребёнок тренируется в <u>клубе «Флагман»</u></span>                            <br>
                            <div class="raiting-space">
                                <span class="reviews-author-raiting">5,0  </span> <img
                                    src="{{ asset('assets/Group 19.png')  }}" alt=""
                                    style="    width: 80px; margin-top: -3px; ">
                                <span class="raiting-place">тренерский состав</span> <br>
                                <span class="reviews-author-raiting">4,6  </span> <img
                                    src="{{ asset('assets/Group 19.png')  }}" alt=""
                                    style="    width: 80px; margin-top: -3px; ">
                                <span class="raiting-place">стадион</span> <br>
                                <span class="reviews-author-raiting">5,0  </span> <img
                                    src="{{ asset('assets/Group 19.png')  }}" alt=""
                                    style="    width: 80px; margin-top: -3px; ">
                                <span class="raiting-place">менеджер</span> <br>


                            </div>

                            <span class="raiting-text"
                            >
                             Очень нравиться тренер и как проходят тренировки, но очень неудобное для нас время. В выходные посередине дня это очень не удобно. Было бы утром в выходные или в какие-то дни в будни, то было бы супер.

                              </span>


                        </div>


                    </div> </li>
                        <li class="hidden"><div class="row mb-48">

                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Татьяна Самарцева</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется <u>в клубе «Волна»</u></span>
                                    <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                                  Ребенок ходит на занятия с удовольствием. Тренерский состав это дружные отзывчивые ребята с пониманием своего дела. Мы отходили не так много занятий, чтобы сделать полноценный вывод. Спасибо за Вашу работу!

                              </span>


                                </div>


                            </div></li>
                        <li class="hidden"> <div class="row mb-48">
                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Мария Марсел</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется в <u>клубе «Флагман»</u></span>                            <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                             Очень нравиться тренер и как проходят тренировки, но очень неудобное для нас время. В выходные посередине дня это очень не удобно. Было бы утром в выходные или в какие-то дни в будни, то было бы супер.

                              </span>


                                </div>


                            </div></li>
                        <li class="hidden"><div class="row mb-48">

                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Татьяна Самарцева</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется <u>в клубе «Волна»</u></span>
                                    <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                                  Ребенок ходит на занятия с удовольствием. Тренерский состав это дружные отзывчивые ребята с пониманием своего дела. Мы отходили не так много занятий, чтобы сделать полноценный вывод. Спасибо за Вашу работу!

                              </span>


                                </div>


                            </div></li>
                        <li class="hidden"> <div class="row mb-48">
                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Мария Марсел</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется в <u>клубе «Флагман»</u></span>                            <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                             Очень нравиться тренер и как проходят тренировки, но очень неудобное для нас время. В выходные посередине дня это очень не удобно. Было бы утром в выходные или в какие-то дни в будни, то было бы супер.

                              </span>


                                </div>


                            </div></li>
                    </ul>
*/ ?>



                            <!-- MOB -->
                        <div class="d-sm-block d-md-none">

                            <div class="reviews-mob" style="">
                                <iframe class="reviews-mob-sec" style="" src="https://yandex.ru/maps-reviews-widget/1747362784?comments"></iframe>

                            </div>
                            <?php /*
                        <div class="">
                            <button type="button"  name="button" class="reviews_button"  onclick="showMore()"
                                    data-animation="bounce" data-target=".bs-example-modal-lg">Еще отзыв
                            </button>
                        </div>
  */ ?>
                        </div>
                        <?php /*
                    <div class=" d-none d-md-block">

                        <div class="col-md-10 offset-2" style="margin-left: 95px;">
                            <button type="button" name="button" class="reviews_button" onclick="showMore()" data-target=".bs-example-modal-lg">Еще отзыв
                            </button>
                        </div>
                    </div>
 */ ?>

                    </div>

                    <!-- mob consultation -->

                    <div class="d-sm-block d-md-none">

                        <div class="mob-application">
                            <h3 class="text-left">Запишите ребёнка на пробную тренировку</h3>

                            <p> Оставьте заявку, и мы перезвоним в течение 30 мин.</p>
                            <div class="card-body">
                                <div class="text-center">
                                    <button type="button" class="btn-desc  waves-effect waves-light" data-toggle="modal"
                                            data-animation="bounce" data-target=".bs-example-modal-lg">Оставить заявку
                                    </button>
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </div>

                    <!-- mob consultation -->




                    <div class=" d-none d-md-block col-md-5   ">


                        <div class="reviewsApplication" style="z-index: 99999 !important;">

                            <div class="row" style="">


                                <div class="">
                                    <h3>Запишите ребёнка на пробную тренировку</h3>

                                    <div id="callback-2-front">

                                        <form id="sendform2" method="post">

                                            <div class="input-group mb-3">
                                                @csrf
                                                <input type="text"  style="    border: 0px solid #d6d6df !important;" name="phone" class="phone form-control" placeholder="+7 495 800-22-40" aria-describedby="basic-addon2">

                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary"  onclick="sendForm2()"  type="button">Отправить</button>
                                                </div>

                                            </div>
                                        </form>


                                        <p> Оставьте заявку, и мы перезвоним
                                            в течение 30 минут.</p>

                                        <p> Заказывая звонок, вы даёте согласие на обработку персональных данных.</p>

                                    </div>

                                    <div id="callback-2-done" class="d-none">
                                        <p>Ваша заявка успешно отправлена! <br> В ближайшее время с вами свяжется менеджер!</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <!-- Section - reviews !-->




    <!-- New section !-->


    @include('sections-index.slider')



    @include('sections-index.tariffs')




    <!-- Section - Partners !-->

    <div class="secondSection d-none d-md-block ">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc" style="
    margin-top: 112px !important;
">Наши партнёры</h3>
                </div>


                <div class="row">


                    <img class="partner-img" src="{{ asset('assets/partners/logo-p-1-2-x@2x.png') }}" alt="">

                    <img class="partner-img" src="{{ asset('assets/partners/logo-p-2-2-x@2x.png') }}" alt="">

                    <img class="partner-img" src="{{ asset('assets/partners/logo-p-3-2-x@2x.png') }}" alt="">

                    <img class="partner-img" style="  width: 195px;"
                         src="{{ asset('assets/partners/logo-p-4-2-x@2x.png') }}" alt="">

                    <img class="partner-img" src="{{ asset('assets/partners/logo-p-5-2-x@2x.png') }}" alt="">

                    <img class="partner-img" src="{{ asset('assets/partners/logo-p-6-2-x@2x.png') }}" alt="">

                    <img class="partner-img" style=" width: 58px;"
                         src="{{ asset('assets/partners/logo-p-7-2-x@2x.png') }}" alt="">

                    <img class="partner-img" src="{{ asset('assets/partners/logo-p-8-2-x@2x.png') }}" alt="">

                    <img class="partner-img" style=" width: 259px;"
                         src="{{ asset('assets/partners/logo-p-9-2-x@2x.png') }}" alt="">

                </div>


            </div>
        </div>
    </div>

    <!-- Section - Partners mob !-->

    <div class="theLastSection d-sm-block d-md-none" style="margin-top: 64px !important; margin-bottom: 72px !important;">
        <div class="container">
            <div class="col text-left mobFontSize" style="
    margin-left: -16px;">
                <h3 class="mob-title-sec" style="  ">Наши партнёры</h3>
            </div>

            <div class="col-12 d-sm-block d-md-none" style="">
                <div class="slider  owl-carousel owl-theme ">
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-1-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-2-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-3-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-4-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-5-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-6-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-7-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-8-2-x@2x.png') }}"></div>
                    <div class="item"> <img class="mob-partner-image"  src="{{ asset('assets/partners/logo-p-9-2-x@2x.png') }}"></div>

                </div>

            </div>


        </div>
    </div>


    <!-- Section - Partners mob !-->


    <!-- Section - Partners !-->




    <div class="theLastSection d-none d-md-block" style="
    margin-bottom: 112px;
    margin-top: 112px;
">
        <div class="container" id="text">
            <div class="accordion" id="accordionExample-faq" style="margin: 30px 0;">
                <div class="card shadow-none  mb-1">
                    <div class="card-header" id="headingOne">
                        <h5 class="my-0">
                            <a class="btn-faq btn-link sub-a" data-toggle="collapse" data-target="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Наши преимущества
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample-faq">
                        <div class="card-body">
                            <ul>
                                <li>филиалы в разных районах Москвы;</li>
                                <li>просторные площадки с современным покрытием;</li>
                                <li>профессиональные тренеры;</li>
                                <li>уникальная методика обучения;</li>
                                <li>ежемесячные турниры;</li>
                                <li>возможность научиться играть на профессиональном и любительском уровне;</li>
                                <li>формирование у ребенка командного духа и мотивации;</li>
                                <li>набор в детскую секцию футбола онлайн;</li>
                                <li>группы для детей разного возраста.</li>
                            </ul>
                            Занимаясь в "Школе мяча", ваш ребенок станет более организованным, выносливым,
                            скоординированным, целеустремленным. Мы занимаемся не только отработкой упражнений, но и
                            формируем в детях личностные качества, необходимые успешному человеку. Индивидуальный подход
                            к каждому воспитаннику позволяет раскрыть его таланты, способствует гармоничному развитию.
                        </div>
                    </div>
                </div>
                <div class="card shadow-none  mb-1">
                    <div class="card-header" id="headingTwo">
                        <h5 class="my-0">
                            <a class="btn-faq btn-link sub-a" data-toggle="collapse" data-target="#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                Кому подойдет наша детская футбольная школа
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionExample-faq">
                        <div class="card-body">
                            Мы набираем детей с различным уровнем подготовки. Для получения высоких результатов мы
                            формируем группы в соответствии с возрастом и навыками юных спортсменов. Это позволяет
                            сделать занятия футболом максимально продуктивными и увлекательными. У нас есть любительские
                            группы, тренировки на базе ДЮСШ, а также индивидуальные занятия, позволяющие добиться успеха
                            в профессиональном спорте. Если ваш ребенок не планирует делать спортивную карьеру, он может
                            заниматься в любительской группе, повышать выносливость, укреплять мышцы и получить
                            положительные эмоции от игры.
                            Наша спортивная школа по футболу подходит всем, кто увлечен этой динамичной, азартной игрой.
                            Вы можете записаться на пробную тренировку, ближе познакомиться с нашими тренерами и
                            методикой обучения. Мы уверены, что вашему ребенку понравится занятие, и он захочет
                            регулярно посещать тренировки.
                        </div>
                    </div>
                </div>
                <div class="card shadow-none  mb-1">
                    <div class="card-header" id="headingThree">
                        <h5 class="my-0">
                            <a class="btn-faq btn-link sub-a " type="button" data-toggle="collapse"
                               data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Где можно записаться на футбол в Москве
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample-faq">
                        <div class="card-body">
                            Если вы хотите записать ребенка на тренировки по футболу, вы можете лично подъехать в один
                            из наших филиалов. Но для удобства и экономии времени мы реализовали возможность покупки
                            абонемента онлайн. На сайте вы можете ознакомиться с расписанием занятий и записаться на
                            бесплатную пробную тренировку. Также вы можете связаться с тренерами и получить
                            профессиональную консультацию.
                            Футбол для детей — это лучше проведение досуга, гармоничное физическое и психическое
                            развитие, возможность добиться результатов в большом спорте. Мы делаем тренировки по футболу
                            в Москве доступными каждому.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php /*
    <div class="fixed-image" data-toggle="tooltip" data-placement="right" data-html="true" title="
  <span class='fixed-image-span'>Лагерь дневного пребывания:</span> <br>  <a class='fixed-image-span-location'  href='{{ URL::to('camp/cao') }}'><i class='fa fa-location-dot'></i> Киевская</a>  <a class='fixed-image-span-location'  href='{{ URL::to('camp/uvao') }}'><i class='fa fa-location-dot'></i> Кузьминки</a> " data-delay='{"show": 200, "hide": 5000}'>
        <img  src="{{ asset('assets/images/camp/logo.png')}}"></div>


<?php /*
 <a href="{{ URL::to('/weekend') }}"><img  src="{{ asset('assets/images/logo@4x.png')}}" class="fixed-image"></a>

   <a href="{{ URL::to('/weekend') }}"><img  src="{{ asset('assets/images/logo@4x.png')}}" class="fixed-image"></a>


     <div class="fixed-image" data-toggle="tooltip" data-placement="right" data-html="true" title="
  <span class='fixed-image-span'>Лагерь дневного пребывания:</span> <br>  <a class='fixed-image-span-location'  href='{{ URL::to('camp/cao') }}'><i class='fa fa-location-dot'></i> Киевская</a>  <a class='fixed-image-span-location'  href='{{ URL::to('camp/uvao') }}'><i class='fa fa-location-dot'></i> Кузьминки</a> " data-delay='{"show": 200, "hide": 5000}'>
        <img  src="{{ asset('assets/images/camp/logo.png')}}"></div>

*/
    ?>



    <div class="modal fade bs-example-modal-lgik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel" style="font-family: 'IBMPlexSans-Bold';">Скачать
                        тренировочную программу на год</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                            style="color: #343a40;width: unset;height: unset;background: unset;border: unset;font-size: 1.5rem;line-height: 1;">
                        ×
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <svg width="200px" height="200px" viewBox="0 0 80 56" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <rect id="path-1" x="0" y="0" width="1216" height="72" rx="8"></rect>
                                    <filter x="-3.0%" y="-51.4%" width="106.1%" height="202.8%"
                                            filterUnits="objectBoundingBox" id="filter-2">
                                        <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                      result="shadowSpreadOuter1"></feMorphology>
                                        <feOffset dx="0" dy="0" in="shadowSpreadOuter1"
                                                  result="shadowOffsetOuter1"></feOffset>
                                        <feGaussianBlur stdDeviation="12" in="shadowOffsetOuter1"
                                                        result="shadowBlurOuter1"></feGaussianBlur>
                                        <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out"
                                                     result="shadowBlurOuter1"></feComposite>
                                        <feColorMatrix
                                            values="0 0 0 0 0.323977461   0 0 0 0 0.381127872   0 0 0 0 0.466853487  0 0 0 0.15 0"
                                            type="matrix" in="shadowBlurOuter1"></feColorMatrix>
                                    </filter>
                                </defs>
                                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Menu" transform="translate(-32.000000, -56.000000)">
                                        <g id="Group-76">
                                            <g id="Group-45" transform="translate(0.000000, 48.000000)">
                                                <g id="Rectangle" opacity="0.600000024">
                                                    <use fill="black" fill-opacity="1" filter="url(#filter-2)"
                                                         xlink:href="#path-1"></use>
                                                    <rect stroke="#FFFFFF" stroke-width="1" fill="#FFFFFF"
                                                          fill-rule="evenodd" x="-0.5" y="-0.5" width="1217" height="73"
                                                          rx="8"></rect>
                                                </g>
                                                <g id="SchoolBall_Logo_Rus-3"
                                                   transform="translate(32.000000, 8.000000)">
                                                    <g id="SchoolBall_Logo_Rus-2">
                                                        <g id="SchoolBall_Logo_Rus">
                                                            <path
                                                                d="M76.9129961,28.8800676 L3.06957198,28.8800676 C1.44607004,28.8800676 0.124980545,30.2190197 0.124980545,31.8651042 L0.124980545,44.6633915 C0.124980545,46.3086873 1.44607004,47.6477972 3.06957198,47.6477972 L76.9129961,47.6477972 C78.5368093,47.6477972 79.8578988,46.3086873 79.8578988,44.6633915 L79.8578988,31.8651042 C79.8578988,30.2190197 78.5368093,28.8800676 76.9129961,28.8800676"
                                                                id="Fill-3" fill="#FFFFFE"></path>
                                                            <path
                                                                d="M39.991284,0.0900732394 C24.7950195,0.0900732394 12.4322179,12.6203493 12.4322179,28.0225577 C12.4322179,43.4238197 24.7950195,55.9540958 39.991284,55.9540958 C55.1875486,55.9540958 67.5506615,43.4238197 67.5506615,28.0225577 C67.5506615,12.6203493 55.1875486,0.0900732394 39.991284,0.0900732394"
                                                                id="Fill-4" fill="#FFFFFE"></path>
                                                            <path
                                                                d="M25.4898054,13.8178028 C25.5634241,13.7376676 25.6406226,13.6594254 25.7184436,13.5807099 C28.6759533,10.5832113 32.4,8.62242254 36.4992996,7.89931268 L36.9148638,7.82580282 L36.6375097,8.14823662 C36.2084047,8.6484507 35.8720623,9.07468169 35.6381323,9.41494085 C35.5382101,9.56196056 35.4014008,9.76292958 35.3047471,9.97983099 L35.2729961,10.0516056 L35.1971984,10.0662761 C35.15393,10.0752676 30.8289494,10.9584901 26.9277821,14.281262 L26.8731518,14.3274817 L25.3067704,14.0173521 L25.4898054,13.8178028 Z M40.8779767,13.9766535 L40.9582879,14.0340732 L39.52607,20.9575662 L39.4552529,20.9891155 C35.5094163,22.7276394 33.0269261,24.3243493 32.1427237,24.9300958 L32.065214,24.9835718 L26.5909728,21.7887324 L26.5985992,21.6928225 C26.6641245,20.8805859 27.0138521,16.7534648 27.5021012,15.245093 L27.5150195,15.2053408 L27.5466148,15.1780507 C31.174786,11.9851042 35.6610117,11.1113465 35.7056809,11.1025127 L35.8387549,11.0952563 L35.8983658,11.1201803 C36.4037354,11.3626366 38.9827237,12.6198761 40.8779767,13.9766535 Z M42.0936965,14.1526986 C43.498677,13.629138 47.1842802,13.2753127 49.1402335,13.1486423 L49.1878599,13.1454873 L49.2284825,13.1710423 C52.8908949,15.4660958 54.8018677,18.817893 54.820856,18.8511775 L54.8470039,18.8980282 L54.8387549,18.9500845 C54.6731518,19.9968901 54.0747082,23.5651155 53.3077043,25.5514592 L53.2792218,25.6254423 L46.5797665,27.2590648 L40.5696498,21.168 L42.0158755,14.1809352 L42.0936965,14.1526986 Z M49.1047471,9.79021972 C51.0017121,10.7616225 52.7322957,12.0324282 54.2485603,13.5693521 C55.7802335,15.1211042 57.0459144,16.8962254 58.010428,18.8451831 L58.1794553,19.1867042 L55.7273152,18.2798197 L55.7000778,18.2336 C55.6790661,18.1979493 53.5637354,14.6451831 49.8311284,12.2783549 L49.789572,12.2523268 L48.7523735,9.60991549 L49.1047471,9.79021972 Z M20.5070817,33.2906592 C19.8263035,30.6968338 19.6544747,27.9804394 20.0152529,25.2739831 L20.0761089,24.821093 L21.0810895,26.6597859 L21.0761089,26.7078986 C20.825214,29.0188845 21.0954086,31.4554366 21.4205447,33.2906592 L22.5055253,33.2906592 C22.1715175,31.4715268 21.8835798,29.0272451 22.140856,26.7556958 L22.1598444,26.6970141 C22.8719066,25.455707 24.5634241,23.0145803 25.8692607,22.6612282 L25.9290272,22.6452958 L31.6233463,25.9668056 L33.1310506,33.2906592 L44.0555642,33.2906592 L46.7670039,28.3218028 L53.4561868,26.6924394 L53.5153307,26.7717859 C54.56,28.1758873 56.3905058,30.8705127 56.6205447,32.064969 L56.627393,32.099831 L56.6245914,32.1105577 C56.6227237,32.2326535 56.6040467,32.6416901 56.4490272,33.2906592 L57.5431907,33.2906592 C57.6038911,33.0007211 57.6396887,32.7588958 57.6602335,32.5711775 L57.6706615,32.4744789 L57.7612451,32.4435606 C58.2239689,32.2872338 58.9228016,31.9446085 59.6270817,31.2030423 L59.9596887,30.8533183 L59.8824903,31.3322366 C59.7758755,31.9955606 59.6347082,32.6481577 59.4672374,33.2906592 L60.5662257,33.2906592 C60.9433463,31.7643042 61.1626459,30.1882592 61.2032685,28.5819268 C61.2062257,28.5066817 61.2079377,28.4320676 61.2079377,28.3561915 C61.2521401,25.4850479 60.7453696,22.6855211 59.700856,20.0330141 L59.629572,19.8505014 C58.5657588,17.2115606 57.0084047,14.841893 55.0009339,12.8071211 C52.9953307,10.7747155 50.6578988,9.19677746 48.0521401,8.11747606 L47.9038132,8.05579718 C45.3845914,7.03454648 42.7256031,6.51587606 40.0015564,6.51587606 C39.4555642,6.51587606 38.9031907,6.53780282 38.3592218,6.58055211 L38.3511284,6.5811831 C38.3494163,6.5811831 38.3478599,6.5811831 38.3461479,6.5811831 L38.3142412,6.58402254 L38.3101946,6.58228732 C38.2518288,6.58528451 38.1943969,6.59049014 38.1397665,6.59711549 C33.1702724,7.03454648 28.4975875,9.23936901 24.9772763,12.8071211 C24.6073152,13.181769 24.2476265,13.5740845 23.9086381,13.9717634 C23.8775097,14.0086761 23.8627237,14.0257127 23.8488716,14.043538 C21.6714397,16.6212732 20.1157977,19.7254085 19.3450584,23.0257803 C19.3270039,23.095031 19.311751,23.1608113 19.2964981,23.2284845 L19.2930739,23.2504113 C18.5508171,26.5791775 18.6163424,30.0294085 19.4225681,33.2906592 L20.5070817,33.2906592 L20.5070817,33.2906592 Z"
                                                                id="Fill-5" fill="#1A1919"></path>
                                                            <path
                                                                d="M39.991284,1.15233803 C25.3729183,1.15233803 13.4801556,13.206062 13.4801556,28.0225577 C13.4801556,42.8382648 25.3729183,54.8921465 39.991284,54.8921465 C54.6096498,54.8921465 66.5025681,42.8382648 66.5025681,28.0225577 C66.5025681,13.206062 54.6096498,1.15233803 39.991284,1.15233803 Z M39.991284,2.21444507 C54.0541634,2.21444507 65.4546304,13.7684282 65.4546304,28.0225577 C65.4546304,42.2751099 54.0541634,53.8297239 39.991284,53.8297239 C25.9284047,53.8297239 14.528249,42.2751099 14.528249,28.0225577 C14.528249,13.7684282 25.9284047,2.21444507 39.991284,2.21444507 L39.991284,2.21444507 Z"
                                                                id="Fill-6" fill="#1A1919"></path>
                                                            <path
                                                                d="M3.06957198,46.0544 C2.31268482,46.0544 1.69696498,45.4301972 1.69696498,44.6633915 L1.69696498,31.8651042 C1.69696498,31.0975099 2.31268482,30.4734648 3.06957198,30.4734648 L76.9129961,30.4734648 C77.6700389,30.4734648 78.2859144,31.0975099 78.2859144,31.8651042 L78.2859144,44.6633915 C78.2859144,45.4301972 77.6700389,46.0544 76.9129961,46.0544 L3.06957198,46.0544"
                                                                id="Fill-7" fill="#F0A936"></path>
                                                            <path
                                                                d="M76.9129961,29.9423324 L3.06957198,29.9423324 C2.02381323,29.9423324 1.17291829,30.8047324 1.17291829,31.8651042 L1.17291829,44.6633915 C1.17291829,45.7231324 2.02381323,46.5855324 3.06957198,46.5855324 L76.9129961,46.5855324 C77.9590661,46.5855324 78.8099611,45.7231324 78.8099611,44.6633915 L78.8099611,31.8651042 C78.8099611,30.8047324 77.9590661,29.9423324 76.9129961,29.9423324 Z M76.9129961,31.0044394 C77.3800778,31.0044394 77.7618677,31.3915493 77.7618677,31.8651042 L77.7618677,44.6633915 C77.7618677,45.1363155 77.3800778,45.5234254 76.9129961,45.5234254 L3.06957198,45.5234254 C2.60280156,45.5234254 2.22101167,45.1363155 2.22101167,44.6633915 L2.22101167,31.8651042 C2.22101167,31.3915493 2.60280156,31.0044394 3.06957198,31.0044394 L76.9129961,31.0044394 L76.9129961,31.0044394 Z"
                                                                id="Fill-8" fill="#1A1919"></path>
                                                            <polyline id="Fill-9" fill="#1A1919"
                                                                      points="6.14303502 41.5573634 6.14303502 34.9709746 7.86038911 34.9709746 7.86038911 40.005138 9.53182879 40.005138 9.53182879 34.9709746 11.248716 34.9709746 11.248716 40.005138 12.9203113 40.005138 12.9203113 34.9709746 14.637821 34.9709746 14.637821 41.5573634 6.14303502 41.5573634"></polyline>
                                                            <polyline id="Fill-10" fill="#1A1919"
                                                                      points="15.8607004 41.5573634 15.8607004 34.9709746 17.5780545 34.9709746 17.5780545 37.464631 18.3953307 37.464631 19.8711284 34.9709746 21.7743191 34.9709746 19.7321401 38.1787493 21.867393 41.5573634 19.9642023 41.5573634 18.3856809 39.0170141 17.5780545 39.0170141 17.5780545 41.5573634 15.8607004 41.5573634"></polyline>
                                                            <path
                                                                d="M25.2449805,36.4291831 C24.1218677,36.4291831 23.5277821,37.2103437 23.5277821,38.2640901 C23.5277821,39.3175211 24.1218677,40.0986817 25.2449805,40.0986817 C26.368249,40.0986817 26.9623346,39.3175211 26.9623346,38.2640901 C26.9623346,37.2103437 26.368249,36.4291831 25.2449805,36.4291831 Z M25.2449805,34.8293183 C27.5662257,34.8293183 28.72607,36.4291831 28.72607,38.2640901 C28.72607,40.0986817 27.5662257,41.6985465 25.2449805,41.6985465 C22.9242023,41.6985465 21.7638911,40.0986817 21.7638911,38.2640901 C21.7638911,36.4291831 22.9242023,34.8293183 25.2449805,34.8293183 L25.2449805,34.8293183 Z"
                                                                id="Fill-11" fill="#1A1919"></path>
                                                            <path
                                                                d="M35.2700389,34.9709746 L35.2700389,41.5573634 L33.5520623,41.5573634 L33.5520623,36.5233577 L32.1505058,36.5233577 C31.9461479,39.2238197 31.621323,41.6327662 29.7554864,41.6420732 C29.51393,41.6420732 29.2445136,41.6042141 28.9565759,41.5105127 L28.9565759,39.9955155 C29.0776654,40.0329014 29.2261479,40.051831 29.402179,40.0329014 C30.4513619,39.9202704 30.4329961,36.9655211 30.5814786,34.9709746 L35.2700389,34.9709746"
                                                                id="Fill-12" fill="#1A1919"></path>
                                                            <path
                                                                d="M38.5357198,39.1107155 L40.2066926,39.1107155 L39.538677,37.2103437 C39.4828016,37.050231 39.4269261,36.8901183 39.3716732,36.5422873 C39.3154864,36.8901183 39.2596109,37.050231 39.204358,37.2103437 L38.5357198,39.1107155 Z M35.8896498,41.5573634 L38.4429572,34.9709746 L40.2997665,34.9709746 L42.8530739,41.5573634 L41.0893385,41.5573634 L40.7175097,40.5219155 L38.025214,40.5219155 L37.6540078,41.5573634 L35.8896498,41.5573634 L35.8896498,41.5573634 Z"
                                                                id="Fill-13" fill="#1A1919"></path>
                                                            <polyline id="Fill-14" fill="#1A1919"
                                                                      points="53.2258366 34.9709746 53.2258366 41.5573634 51.5083268 41.5573634 51.5083268 38.0568113 50.1159533 40.2207775 49.1319844 40.2207775 47.7392996 38.0471887 47.7392996 41.5573634 46.0214786 41.5573634 46.0214786 34.9709746 47.6462257 34.9709746 49.6238132 38.0568113 51.6014008 34.9709746 53.2258366 34.9709746"></polyline>
                                                            <path
                                                                d="M57.0113619,38.0004958 L58.0141634,38.0004958 L58.0141634,36.4758761 L57.0113619,36.4758761 C56.4264591,36.4758761 56.092607,36.7303211 56.092607,37.238107 C56.092607,37.7466817 56.4264591,38.0004958 57.0113619,38.0004958 Z M53.9203113,41.5573634 L55.6740856,39.1764958 C54.894786,38.8848225 54.3288716,38.2737127 54.3288716,37.238107 C54.3288716,35.5915493 55.5819455,34.9709746 56.9926848,34.9709746 L59.7321401,34.9709746 L59.7321401,41.5573634 L58.0141634,41.5573634 L58.0141634,39.4116958 L57.4107393,39.4116958 L55.8787549,41.5573634 L53.9203113,41.5573634 L53.9203113,41.5573634 Z"
                                                                id="Fill-15" fill="#1A1919"></path>
                                                            <path
                                                                d="M64.5388327,41.5573634 L64.5388327,39.3175211 C64.0096498,39.478107 63.4994553,39.5623437 63.0351751,39.5623437 C61.6238132,39.5623437 60.6675486,38.828507 60.6675486,37.2849577 L60.6675486,34.9709746 L62.3849027,34.9709746 L62.3849027,37.1914141 C62.3849027,37.7277521 62.8585214,37.991031 63.4715953,37.991031 C63.8054475,37.991031 64.1774319,37.9162592 64.5388327,37.765769 L64.5388327,34.9709746 L66.256965,34.9709746 L66.256965,41.5573634 L64.5388327,41.5573634"
                                                                id="Fill-16" fill="#1A1919"></path>
                                                            <path
                                                                d="M69.5232685,39.1107155 L71.1940856,39.1107155 L70.5256031,37.2103437 C70.4701946,37.050231 70.4138521,36.8901183 70.3584436,36.5422873 C70.3021012,36.8901183 70.2466926,37.050231 70.1911284,37.2103437 L69.5232685,39.1107155 Z M66.8770428,41.5573634 L69.4297276,34.9709746 L71.286537,34.9709746 L73.8398444,41.5573634 L72.0759533,41.5573634 L71.7045914,40.5219155 L69.0119844,40.5219155 L68.6414008,41.5573634 L66.8770428,41.5573634 L66.8770428,41.5573634 Z"
                                                                id="Fill-17" fill="#1A1919"></path>
                                                            <polyline id="Fill-18" fill="#1A1919"
                                                                      points="39.7543969 3.96353803 39.7094163 4.05077183 39.6155642 4.06733521 39.0719066 4.15030986 39.4681712 4.54735775 39.5336965 4.61376901 39.5171984 4.70936338 39.4272374 5.26873239 39.9056809 5.00734648 39.9915953 4.96238873 40.0771984 5.00734648 40.555642 5.26873239 40.4655253 4.70936338 40.4494942 4.61376901 40.5147082 4.54735775 40.9111284 4.15030986 40.3673152 4.06733521 40.273463 4.05077183 40.2284825 3.96353803 39.9915953 3.46206197 39.7543969 3.96353803"></polyline>
                                                            <polyline id="Fill-19" fill="#1A1919"
                                                                      points="28.8933852 6.75328451 28.8929183 6.8520338 28.8168093 6.91008451 28.3718288 7.23661972 28.9033463 7.4055662 28.9915953 7.43396056 29.0203891 7.52655775 29.193463 8.06526197 29.5005447 7.61063662 29.5559533 7.53065915 29.6530739 7.53113239 30.1964202 7.54075493 29.863035 7.08549859 29.8057588 7.00851831 29.8333074 6.91891831 30.0057588 6.38131831 29.4852918 6.56036056 29.3945525 6.58938592 29.3151751 6.53307042 28.8776654 6.19754366 28.8933852 6.75328451"></polyline>
                                                            <polyline id="Fill-20" fill="#1A1919"
                                                                      points="20.5050584 14.281262 20.5492607 14.368969 20.5080156 14.4562028 20.2597665 14.9534197 20.8088716 14.8562479 20.9000778 14.8407887 20.9676265 14.9092507 21.3651362 15.3078761 21.4323735 14.7612845 21.4457588 14.6641127 21.5316732 14.6197859 22.0188327 14.3754366 21.5168872 14.1258817 21.4308171 14.0837634 21.4150973 13.9913239 21.3252918 13.4335324 20.9433463 13.8348394 20.8761089 13.9031437 20.7796109 13.8894197 20.2392218 13.7950873 20.5050584 14.281262"></polyline>
                                                            <polyline id="Fill-21" fill="#1A1919"
                                                                      points="16.4572763 24.8703099 16.5361868 24.9277296 16.5388327 25.0237972 16.5431907 25.5815887 16.9870817 25.2395944 17.061323 25.1834366 17.1523735 25.2129352 17.6859144 25.3823549 17.4985214 24.8655775 17.4663035 24.773138 17.5224903 24.6936338 17.8449805 24.2500507 17.2859144 24.2615662 17.1906615 24.2645634 17.134786 24.1899493 16.8026459 23.7357972 16.6446693 24.2699268 16.6157198 24.3615775 16.5238911 24.3943887 16.0007782 24.5614423 16.4572763 24.8703099"></polyline>
                                                            <polyline id="Fill-22" fill="#1A1919"
                                                                      points="51.1055253 6.19754366 50.6680156 6.53307042 50.5884825 6.58938592 50.4978988 6.56036056 49.9768093 6.38131831 50.1492607 6.91891831 50.1774319 7.00851831 50.12 7.08549859 49.7867704 7.54075493 50.3299611 7.53113239 50.4264591 7.53065915 50.4828016 7.61063662 50.7897276 8.06526197 50.9623346 7.52655775 50.9914397 7.43396056 51.0792218 7.4055662 51.6113619 7.23661972 51.1657588 6.91008451 51.0896498 6.8520338 51.0891829 6.75328451 51.1055253 6.19754366"></polyline>
                                                            <polyline id="Fill-23" fill="#1A1919"
                                                                      points="59.7436576 13.7950873 59.2032685 13.8894197 59.1067704 13.9031437 59.0393774 13.8348394 58.6575875 13.4335324 58.5677821 13.9913239 58.5519066 14.0837634 58.4661479 14.1258817 57.9640467 14.3754366 58.4512062 14.6197859 58.5371206 14.6641127 58.5506615 14.7612845 58.6177432 15.3078761 59.0152529 14.9092507 59.0826459 14.8407887 59.1738521 14.8562479 59.7231128 14.9534197 59.4748638 14.4562028 59.4336187 14.368969 59.477821 14.281262 59.7436576 13.7950873"></polyline>
                                                            <polyline id="Fill-24" fill="#1A1919"
                                                                      points="63.9821012 24.5614423 63.4589883 24.3943887 63.3671595 24.3615775 63.3380545 24.2699268 63.1803891 23.7357972 62.8480934 24.1899493 62.7922179 24.2645634 62.696965 24.2615662 62.1377432 24.2500507 62.4603891 24.6936338 62.5165759 24.773138 62.484358 24.8655775 62.296965 25.3823549 62.8306615 25.2129352 62.9215564 25.1834366 62.9957977 25.2395944 63.4396887 25.5815887 63.4440467 25.0237972 63.4466926 24.9277296 63.5256031 24.8703099 63.9821012 24.5614423"></polyline>
                                                            <path
                                                                d="M33.7590661,50.1988732 C34.1280934,49.8556169 34.3410117,49.5669408 34.3410117,49.1086873 C34.3410117,48.4792789 33.8994553,48.0886986 33.1877043,48.0886986 C32.8578988,48.0886986 32.5262257,48.1656789 32.2789105,48.2991324 L32.2099611,48.3363606 L32.4456031,48.9552 L32.5344747,48.9037746 C32.6941634,48.8111775 32.913463,48.754231 33.1067704,48.754231 C33.3316732,48.754231 33.5993774,48.8141746 33.5993774,49.1004845 C33.5993774,49.3304789 33.5064591,49.4987944 33.2319066,49.7666479 C32.8871595,50.0998085 32.5856809,50.3515718 32.3101946,50.5378704 L32.2708171,50.5645296 L32.2708171,51.0623775 L34.3878599,51.0623775 L34.3878599,50.4050479 L33.5123735,50.4050479 C33.5929961,50.3444732 33.6754864,50.2771155 33.7590661,50.1988732"
                                                                id="Fill-25" fill="#1A1919"></path>
                                                            <path
                                                                d="M37.6916732,50.444169 C37.2287938,50.444169 36.892607,50.0890817 36.892607,49.5995944 C36.892607,49.1099493 37.2287938,48.754231 37.6916732,48.754231 C38.1547082,48.754231 38.4902724,49.1099493 38.4902724,49.5995944 C38.4902724,50.0890817 38.1547082,50.444169 37.6916732,50.444169 Z M37.6916732,48.0886986 C36.8136965,48.0886986 36.1511284,48.7382986 36.1511284,49.5995944 C36.1511284,50.4602592 36.8136965,51.1098592 37.6916732,51.1098592 C38.5699611,51.1098592 39.2323735,50.4602592 39.2323735,49.5995944 C39.2323735,48.7382986 38.5699611,48.0886986 37.6916732,48.0886986 L37.6916732,48.0886986 Z"
                                                                id="Fill-26" fill="#1A1919"></path>
                                                            <path
                                                                d="M42.4210117,50.444169 C41.9582879,50.444169 41.6224125,50.0890817 41.6224125,49.5995944 C41.6224125,49.1099493 41.9582879,48.754231 42.4210117,48.754231 C42.8837354,48.754231 43.2199222,49.1099493 43.2199222,49.5995944 C43.2199222,50.0890817 42.8837354,50.444169 42.4210117,50.444169 Z M42.4210117,48.0886986 C41.5424125,48.0886986 40.8804669,48.7382986 40.8804669,49.5995944 C40.8804669,50.4602592 41.5424125,51.1098592 42.4210117,51.1098592 C43.298677,51.1098592 43.9612451,50.4602592 43.9612451,49.5995944 C43.9612451,48.7382986 43.298677,48.0886986 42.4210117,48.0886986 L42.4210117,48.0886986 Z"
                                                                id="Fill-27" fill="#1A1919"></path>
                                                            <polyline id="Fill-28" fill="#1A1919"
                                                                      points="45.6678599 48.1360225 45.6678599 48.7933521 46.9361868 48.7933521 45.9906615 51.0623775 46.7833463 51.0623775 47.76607 48.620462 47.772607 48.1360225 45.6678599 48.1360225"></polyline>
                                                            <path
                                                                d="M74.8412451,32.6517859 C74.1543969,32.6517859 73.4592996,33.1103549 73.4592996,33.9869521 C73.4592996,34.863707 74.1543969,35.3222761 74.8412451,35.3222761 C75.5262257,35.3222761 76.2194553,34.863707 76.2194553,33.9869521 C76.2194553,33.1103549 75.5262257,32.6517859 74.8412451,32.6517859 Z M74.8412451,35.637769 C73.9998444,35.637769 73.1480156,35.0706704 73.1480156,33.9869521 C73.1480156,32.9033915 73.9998444,32.336293 74.8412451,32.336293 C75.6807782,32.336293 76.5307393,32.9033915 76.5307393,33.9869521 C76.5307393,35.0706704 75.6807782,35.637769 74.8412451,35.637769 L74.8412451,35.637769 Z"
                                                                id="Fill-29" fill="#1A1919"></path>
                                                            <path
                                                                d="M74.9263813,33.925431 L74.5985992,33.925431 L74.5985992,33.5357972 L74.9263813,33.5357972 C75.0396887,33.5357972 75.193463,33.556462 75.193463,33.7326648 C75.193463,33.9050817 75.0396887,33.925431 74.9263813,33.925431 Z M75.2703502,34.2043268 C75.4566537,34.1470648 75.6063813,33.9869521 75.6063813,33.7162592 C75.6063813,33.3143211 75.2703502,33.1666704 74.9749416,33.1666704 L74.2101167,33.1666704 L74.2101167,34.7704789 L74.5985992,34.7704789 L74.5985992,34.2454986 L74.8333074,34.2454986 C74.8454475,34.2454986 74.8575875,34.2454986 74.8697276,34.2454986 L75.2582101,34.7704789 L75.6992996,34.7704789 L75.2703502,34.2043268 L75.2703502,34.2043268 Z"
                                                                id="Fill-30" fill="#1A1919"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="callback-2-front">
                            <form id="sendform2" method="post">
                                @csrf
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label-new text-md-right">Ваше
                                        имя:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" value="" class="form-control-new">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="phone"
                                           class="col-md-4 col-form-label-new text-md-right">Телефон:</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" value="" class="form-control-new">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="age" class="col-md-4 col-form-label-new text-md-right">Возрастная
                                        группа:</label>
                                    <div class="col-md-6">
                                        <select class="form-control-new" name="age" style="margin-bottom: .5rem;">
                                            <option value="3-4 года">3-4 года</option>
                                            <option value="5-7 лет">5-7 лет</option>
                                            <option value="8-12 лет">8-12 лет</option>
                                            <option value="11-12 лет">11-12 лет</option>
                                            <option value="13-16 лет">13-16 лет</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                        style="margin: 0 auto; color: #54420a; background-color: #fede11; border: solid 1px #fede11; box-shadow: none;"
                                        onclick="sendFormDownload()">Скачать
                                </button>
                            </div>
                        </div>
                        <div id="callback-2-done" class="d-none">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Если загрузка не произошла автоматически, вы можете кликнуть по <a
                                            id="download-link" href="">ссылке</a>. <br> Для получения дополнительных
                                        сведений о работе школы, в ближайшее время с вами свяжется менеджер!</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->





    <form id="home" action="{{ route('home') }}" method="GET" style="display: none;">
    </form>
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/welcomeVue.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
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
