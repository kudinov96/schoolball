<div class="fourthSection d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="margin: 65px 0;">Мы продумали каждую деталь и предлагаем самую насыщенную в Москве программу:</h3>
            </div>
            <div id="program" style="visibility: hidden;position: relative;top: -100px;"></div>
            <div class="col-auto center-block  text-center">
                <div class="toggler" style="width: auto !important;">
                    <ul class="row nav nav-tabs nav-tabs-info nav-justified" style="border-bottom: none;">

                @foreach($camp_details as $key => $detail)
                            <li class="col nav-item" style="padding: 0px {{ $loop->last ? '33px' : '8px' }} 0px {{ $key == 0 ? '33px' : '8px' }}  ">
                                <a class="nav-link  {{ $key == 0 ? 'active' : '' }} groupTogler" data-toggle="tab" href="#tab-{{$detail->id}}" style="width: 122px !important;">
                                    <h4 style="width: 78px !important;">{{$detail->title_tab}}</h4>
                                </a>
                            </li>
            @endforeach
                    </ul>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="tab-content">

                @foreach($camp_details as $key => $detail)

                <div id="tab-{{$detail->id}}" class="kidsSkills tab-pane {{ $key == 0 ? 'active' : '' }}" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>{{$detail->title}}</h3>
                            <p>
                                {!! $detail->desc  !!}
                            </p>
                        </div>

                        @if( $key == 5)
                            <div id="campVideoBoul" class="col-md-5" style="cursor:pointer">
                                <video width="100%" autoplay="autoplay" loop="loop">
                                    <source src="{{ asset('assets/video/camp/sl-boul.mp4') }}">
                                    Тег video не поддерживается вашим браузером.
                                </video>
                                <!-- <img src="{{ asset('assets/images/camp/sl-boul.png') }}" style="width: 100%; height: auto !important;"> -->
                            </div>
                            <div id="campVideoBoulLightbox" class="d-none">
                                <div class="lightboxBack" >
                                    <button type="button" name="button" id="campVideoBoulButton">X</button>
                                </div>
                                <div class="iframe">
                                    <div class="row justify-content-center">
                                        <div class="col text-center">
                                            <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/N7V6GiqB73s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else

                            @if( $key == 6)
                                <div id="campVideoFifa" class="col-md-5" style="cursor:pointer">
                                    <video width="100%" autoplay="autoplay" loop="loop">
                                        <source src="{{ asset('assets/video/camp/sl-fifa.mp4') }}">
                                        Тег video не поддерживается вашим браузером.
                                    </video>
                                    <!-- <img src="{{ asset('assets/images/camp/sl-fifa.png') }}" style="width: 100%; height: auto !important;"> -->
                                </div>
                                <div id="campVideoFifaLightbox" class="d-none">
                                    <div class="lightboxBack" >
                                        <button type="button" name="button" id="campVideoFifaButton">X</button>
                                    </div>
                                    <div class="iframe">
                                        <div class="row justify-content-center">
                                            <div class="col text-center">
                                                <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/awcoPDAcqNI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else

                        <div class="col-md-5"  >
                            <img src="@if ($detail->img == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $detail->img) }} @endif" style="  border-radius: 10px;
width: 100%; height: auto !important;">
                         </div>

                        @endif
                        @endif

                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                @endforeach
            </div>




            <?php /*
            <div class="col-auto center-block  text-center">
                <div class="toggler" style="width: auto !important;">
                    <ul class="row nav nav-tabs nav-tabs-info nav-justified" style="border-bottom: none;">
                        <li class="col nav-item" style="    padding: 0px 8px 0px 33px;">
                            <a class="nav-link active groupTogler" data-toggle="tab" href="#tab-1" style="width: 126px !important;">
                                <h4 style="width: 88px !important;">Обучение</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-2" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">Питание</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-3" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">Экипировка</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-4" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">Бассейн</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-5" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">Кинотеатр</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-6" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">Боулинг</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-7" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">FIFA</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding:0 8px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-8" style="width: 115px !important;">
                                <h4 style="width: 88px !important;">Детали</h4>
                            </a>
                        </li>
                        <li class="col nav-item" style="padding: 0 32px 0 0;">
                            <a class="nav-link groupTogler" data-toggle="tab" href="#tab-9" style="width: 150px  !important;">
                                <h4 style="width: 88px !important;">Результаты</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

*/ ?>



<?php /*
            <div class="tab-content">


                <div id="tab-1" class="kidsSkills tab-pane active" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Научим</h3>
                            <p>
                                В копилке «Школы мяча» собрано более 850 тренировочных программ, разработанных на основе опыта лучших академий планеты и наших собственных наработок. По итогам прохождения смены участник улучшит свои технические и физические качества.
                            </p>
                        </div>
                        <div id="campVideoEdu" class="col-md-5" style="cursor:pointer">
                            <img src="{{ asset('assets/images/camp/IMG_7324.jpg') }}" style="  border-radius: 10px;
width: 100%; height: auto !important;">
                            <!-- <img src="{{ asset('assets/images/camp/sl-boul.png') }}" style="width: 100%; height: auto !important;"> -->
                        </div>
                        <div id="campVideoEduLightbox" class="d-none">
                            <div class="lightboxBack" >
                                <button type="button" name="button" id="campVideoEduButton">X</button>
                            </div>
                            <div class="iframe">
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/d29yOjB_9-E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-2" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Накормим</h3>
                            <p>
                                Чтобы добиться высоких спортивных результатов, важно правильно дозировать нагрузки и обеспечивать восстановление после них. На время проведения лагеря наши специалисты подготовили меню полноценного спортивного питания. Двухразовое питание.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-meal.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-3" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Оденем</h3>
                            <p>
                                Качество и внешний вид спортивной формы показывают лицо команды и футбольной школы, стиль игры и даже настрой игроков. Футбольная экипировка, предназначенная для детей, должна быть высочайшего качества.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-form.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-4" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Поплаваем</h3>
                            <p>
                                ✓	25 метров <br>
                                ✓	Современный уровень комфорта <br>
                                ✓	За детьми следят несколько тренеров <br>
                                ✓	Важный элемент физического развития
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-water.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-5" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Посмотрим</h3>
                            <p>
                                ✓	ТЦ "Европейский" <br>
                                ✓	За детьми следят несколько тренеров <br>
                                ✓	Фильмы соответствуют возрастной категории
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-cinema.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-6" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Побросаем</h3>
                            <p>
                                ✓	ТЦ "Европейский" <br>
                                ✓	4-5 человек на одну дорожку <br>
                                ✓	1 час игры
                            </p>
                        </div>
                        <div id="campVideoBoul" class="col-md-5" style="cursor:pointer">
                            <video width="100%" autoplay="autoplay" loop="loop">
                                <source src="{{ asset('assets/video/camp/sl-boul.mp4') }}">
                                Тег video не поддерживается вашим браузером.
                            </video>
                            <!-- <img src="{{ asset('assets/images/camp/sl-boul.png') }}" style="width: 100%; height: auto !important;"> -->
                        </div>
                        <div id="campVideoBoulLightbox" class="d-none">
                            <div class="lightboxBack" >
                                <button type="button" name="button" id="campVideoBoulButton">X</button>
                            </div>
                            <div class="iframe">
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/N7V6GiqB73s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-7" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Покричим</h3>
                            <p>
                                ✓	Две Playstation <br>
                                ✓	8 джойстиков <br>
                                ✓	Футбольные пуфики <br>
                                ✓	Не больше часа игры в день
                            </p>
                        </div>
                        <div id="campVideoFifa" class="col-md-5" style="cursor:pointer">
                            <video width="100%" autoplay="autoplay" loop="loop">
                                <source src="{{ asset('assets/video/camp/sl-fifa.mp4') }}">
                                Тег video не поддерживается вашим браузером.
                            </video>
                            <!-- <img src="{{ asset('assets/images/camp/sl-fifa.png') }}" style="width: 100%; height: auto !important;"> -->
                        </div>
                        <div id="campVideoFifaLightbox" class="d-none">
                            <div class="lightboxBack" >
                                <button type="button" name="button" id="campVideoFifaButton">X</button>
                            </div>
                            <div class="iframe">
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/awcoPDAcqNI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-8" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Позаботимся</h3>
                            <p>
                                ✓	Неограниченный запас бутилированной воды <br>
                                ✓	Свежие фрукты в любое время <br>
                                ✓	Настольный теннис <br>
                                ✓	Игровая площадка <br>
                                ✓	Ассортимент настольных игр
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-atmo.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <div id="tab-9" class="kidsSkills tab-pane" style="height: auto !important; padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3>Участник получит:</h3>
                            <p>
                                ✓	Сертификат «Школы мяча» <br>
                                ✓	Продвинутые навыки работы с мячом <br>
                                ✓	Заряд здоровья, энергии и ярких эмоций <br>
                                ✓	Живое общение на всё лето
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/some-tab-9-min.png') }}" style="margin-top: 25px;width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
*/

?>
        </div>
    </div>
</div>
<div class="fourthSection d-sm-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 campLocation text-center">
                <div id="programamob"  style="visibility: hidden;position: relative;top: -100px;"></div>

                <h3 style="">Мы продумали каждую деталь и предлагаем самую насыщенную в Москве программу:</h3>
            </div>
        </div>
        <div class="row mobile-advantage-slider">

            @foreach($camp_details as $key => $detail)
                <div>
                    <div id="tab-{{$detail->id}}" class="kidsSkills tab-pane {{ $key == 0 ? 'active' : '' }} " style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">



                        <div class="row">
                            <div class="col-md-6 kidsSkillsText">
                                <h3 style="font-size:22px">{{$detail->title_tab}}</h3>
                                <p style="font-size: 12px;">
 {!! $detail->desc !!}
                                 </p>
                            </div>
                            <div class="col-md-5">
                                <img src="@if ($detail->img == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $detail->img) }} @endif"
                                     style=" margin-top:10px; border-radius: 10px;
width: 100%; height: auto !important;">
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

<?php /*

            <div>
                <div id="tab-1" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Обучение</h3>
                            <p style="font-size: 12px;">
                                В копилке «Школы мяча» собрано более 850 тренировочных программ, разработанных на основе опыта лучших академий планеты и наших собственных наработок. По итогам прохождения смены участник улучшит свои технические и физические качества.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/IMG_7324.jpg') }}" style=" margin-top:10px; border-radius: 10px;
width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div id="tab-2" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Питание</h3>
                            <p style="font-size: 12px;">
                                Чтобы добиться высоких спортивных результатов, важно правильно дозировать нагрузки и обеспечивать восстановление после них. На время проведения лагеря наши специалисты подготовили меню полноценного спортивного питания. Двухразовое питание.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-meal.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-3" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Экипировка</h3>
                            <p style="font-size: 12px;">
                                Качество и внешний вид спортивной формы показывают лицо команды и футбольной школы, стиль игры и даже настрой игроков. Футбольная экипировка, предназначенная для детей, должна быть высочайшего качества.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-form.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-4" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Бассейн</h3>
                            <p style="font-size: 12px;">
                                ✓	25 метров <br>
                                ✓	Современный уровень комфорта <br>
                                ✓	За детьми следят несколько тренеров <br>
                                ✓	Важный элемент физического развития
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-water.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-5" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Кинотеатр</h3>
                            <p style="font-size: 12px;">
                                ✓	ТЦ "Европейский" <br>
                                ✓	За детьми следят несколько тренеров <br>
                                ✓	Фильмы соответствуют возрастной категории
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-cinema.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-6" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Боулинг</h3>
                            <p style="font-size: 12px;">
                                ✓	ТЦ "Европейский" <br>
                                ✓	4-5 человек на одну дорожку <br>
                                ✓	1 час игры
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-boul.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-7" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">FIFA</h3>
                            <p style="font-size: 12px;">
                                ✓	Две Playstation <br>
                                ✓	8 джойстиков <br>
                                ✓	Футбольные пуфики <br>
                                ✓	Не больше часа игры в день
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-fifa.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-8" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Атмосфера</h3>
                            <p style="font-size: 12px;">
                                ✓	Неограниченный запас бутилированной воды <br>
                                ✓	Свежие фрукты в любое время <br>
                                ✓	Настольный теннис <br>
                                ✓	Игровая площадка <br>
                                ✓	Ассортимент настольных игр
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/sl-atmo.png') }}" style="width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="tab-9" class="kidsSkills tab-pane active" style="padding-top: 10px;width: 100%;margin: 25px 14% 0 2%;height: auto !important;padding-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6 kidsSkillsText">
                            <h3 style="font-size:22px">Участник получит:</h3>
                            <p style="font-size: 12px;">
                                ✓	Сертификат «Школы мяча» <br>
                                ✓	Продвинутые навыки работы с мячом <br>
                                ✓	Заряд здоровья, энергии и ярких эмоций <br>
                                ✓	Живое общение на всё лето
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/camp/some-tab-9-min.png') }}" style="margin-top: 25px;width: 100%; height: auto !important;">
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
            </div>
*/
?>


        </div>
    </div>
</div>
