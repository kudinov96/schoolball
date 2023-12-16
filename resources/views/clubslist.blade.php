@extends('layouts.app')
@section('title')
    <title>Наши футбольные клубы</title>
@endsection
@section('description')
    <meta name="description" content="Наши футбольные клубы">
@endsection
@section('content')


    <style>
        .toggler {
            /* padding: 6px 20px 6px 20px; */
            /* padding: 8px 20px 8px 8px; */
            /* margin: 48px 312px 56px; */
            padding: 8px 5px 5px 5px;
            opacity: 0.9;
            border-radius: 8px;
            border: solid 4px #f3f3f4;
            background-color: #fff;
            margin-top: 45px;
            width: 250px;
            height: 60px;
            border-radius: 8px;
            border: solid 4px #f3f3f4;
            background-color: #ffffff;
        }

        @media (min-width: 0px) and (max-width: 767px) {
            .nav-pills {
                overflow-x: auto;
                overflow-y: hidden;
                flex-wrap: nowrap;
                margin: 0px 0 0px;
                padding: 0px 0;
                border-radius: 4px;
            }
        }

    </style>
<div class="topPartsGrayForAuth">
</div>


<div class="topPartsGray no-radius d-none d-md-block" style="background: #ffffff;
    margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="title-desc" style="margin-bottom: 32px !important;">Наши футбольные клубы</h1>
                <div class=" text-center">
                    <img src="{{ asset('assets/methods.png') }}" alt="" style="height: 300px;padding-top: 50px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section - schoolball info mob !-->


<!-- Section - schoolball info mob !-->
<div class="topPartsGray  no-radius d-sm-block d-md-none" style="background: #ffffff;
    margin-top: 40px;">
    <div class="container">
        <div class="col-md-12 text-center">
            <h1 class="title-desc-mob" style="margin-bottom: 0px !important;">Наши футбольные клубы
            </h1>
            <div class="col-md-8 col-sm-12 text-center">
                <img src="{{ asset('assets/methods.png') }}" alt="" style="width: 250px; height: 250px;padding-top: 50px;">
            </div>
        </div>
    </div>
</div>





<div class="row">
    <div class="col-auto center-block  text-center">
        <div class="toggler mt-5" style="margin-bottom: 40px; margin-top: 0px;">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-1-tab" data-toggle="pill" data-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">На карте</button>

                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-2-tab"     data-toggle="pill" data-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Список</button>
                </li>


            </ul>
        </div>
    </div>

</div>


<div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active " id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
        <div    class="secondSection d-none d-md-block">

            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <div  style="visibility: hidden;position: relative;top: -100px;"></div>
                        <div id="clubsloc"  style="visibility: hidden;position: relative;top: -100px;"></div>



                    </div>




                    <div class="map mb-5" id="map" style="
                               width: 100%;
  height: 500px;
  border-radius: 8px;
  border: solid 1px #e4e9ec;
  background-color: #fff;
                             "></div>









                </div>
            </div>

            <!-- Section - map mob !-->

            <div class="card-body d-sm-block d-md-none">
                <div class="text-center">
                    <button type="button" class="btn-desc  waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Вступить в клуб
                    </button>
                </div>
            </div>



        </div>

        <div class="secondSection  d-sm-block d-md-none">

            <div class="container">

                <div class="w-100"></div>
                <div class="col text-left mobFontSize-map" style="
    margin-left: -16px;">
                    <div id="сlubslocmob"  style="visibility: hidden;position: relative;top: -100px;"></div>




                </div>


                <div class="map" id="map2" style="margin-top: 45px;
                                              width: auto;
  height: 408px;
  border-radius: 8px;
  border: solid 1px #e4e9ec;
  background-color: #fff;
                             "></div>


            </div>



        </div>
    </div>

    <div class="tab-pane" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
        <div class="footballClubs">
            <div class="container">
                <div class="row">
                    @foreach ($clubs as $club)
                        <div class="col-md-4 col-sm-10 mb-3">

                            <div class="clubInClublist text-sm-center">
                                @if ($club->logo)    <a href="/club_{{ $club->slug }}"><img src="@if ($club->logo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $club->logo) }} @endif" alt="" style="height: 80px;margin-bottom: 25px;"> </a>@endif
                                <h3> <a href="/club_{{ $club->slug }}">{{ $club->name }}</a></h3>
                                <span style="margin-bottom: 10px;"><img src="{{ asset('assets/Group 19.png') }}" alt="" style="height: 12px;"></span>
                                <h4>{{ $club->phone }}</h4>
                                <p style="text-align: center;">{{ $club->time }}</p>
                                <h5>{{ $club->address }}</h5>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    </div>






<section>


        <div class="container form-block mb-5">



            <div id="callback-catalog-front">

                <div class="row">

                    <div class="col-md-12 text-center">
                        <h3 class="title-desc" style="    margin-top: 0px !important; margin-bottom: 32px !important;">Поможем в выборе!</h3>
                        <h5 class="text-desc " style="font-size: 26px;   line-height: 1.54; ">
                            Если у вас есть вопросы о формате или вы не знаете, что выбрать, оставьте свой номер — мы позвоним, чтобы ответить на все ваши вопросы.

                        </h5>
                    </div>




                </div>
                <form id="send_form_catalog" method="post" class="needs-validation" novalidate>
                    @csrf

                    <div class="row" style="margin-top: 40px; ">
                        <div class="col-md-4 col-xl-4  ">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com" required>
                                <label for="name">Имя</label>
                                <div class="invalid-feedback">
                                    Поле обязательно для заполнения
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 ">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control phone" id="phone" name="phone" placeholder="name@example.com" required>
                                <label for="phone">Моб. телефон</label>
                                <div class="invalid-feedback">
                                    Поле обязательно для заполнения
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 ">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="email">Электронная почта</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-md-4 text-center">
                            <button class="btn btn-primary" type="submit" onclick="sendFormCatalog(event)">Отправить</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5 class="text-desc " style="font-size: 16px;   line-height: 1.54; margin-top: 12px;">
                                Нажимая на кнопку, я даю согласие на обработку своих <a href="{{ asset('assets/doc/sogl-ooo_sm.pdf')}}" target='_blank'>персональных данных</a>
                            </h5>
                        </div>
                    </div>
                </form>
            </div>

            <div id="callback-catalog-done" class="d-none">

                <div class="row">

                    <div class="col-md-12 text-center">
                        <h3 style="font-size: 48px;">  🥳    </h3>
                        <h3 class="title-desc" style="    margin-top: 0px !important; margin-bottom: 32px !important;">Спасибо за заявку!</h3>
                        <h5 class="text-desc " style="font-size: 26px;   line-height: 1.54; ">
                            Менеджер позвонит в течение 15 минут на Ваш номер
                            и ответит на все ваши вопросы.

                        </h5>
                    </div>




                </div>


            </div>
        </div>


</section>




<!-- Section - map mob !-->

<script src="https://api-maps.yandex.ru/2.1/?apikey=4fbb171a-07ac-442d-89a8-a60320b2fe75&lang=ru_RU" type="text/javascript"> </script>
<script>

    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [55.751574, 37.573856],
                zoom: 9
            }, {
                searchControlProvider: 'yandex#search'
            }),


            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),

            objectManager = new ymaps.ObjectManager();

        var myMap2 = new ymaps.Map('map2', {
                center: [55.751574, 37.573856],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            }),
            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),


            objectManager2 = new ymaps.ObjectManager();


        myMap.geoObjects.add(objectManager);
        myMap2.geoObjects.add(objectManager2);

        objectManager.add({
            "type": "FeatureCollection",


            "features": [




                    @foreach ($clubs as $club)

                {
                    "type": "Feature",
                    "id":{{$club->id}},


                    "geometry":{
                        "type": "Point",
                        "coordinates":[{{ $club->coords }}],

                    },
                    "properties":{
                        "hintContent": '{{ $club->address }}',



                        "balloonContentHeader": '<h5 class="maper-header"> <a target="_blank" href ="/club_{{ $club->slug }}"">{{ $club->address }}</a> </h5> <br> ' +
                            '<br> ',
                        // Зададим содержимое основной части балуна.
                        "balloonContentBody":

                            '<div class="maper-raiting-section-all">' +

                            ' <div class ="maper-raiting-section"><span class="maper-raiting"> {{ $club->raiting_coach }} </span> <img src="{{ asset('assets/Group 19.png') }}" class="maper-reviews_img_star" alt=""></span> <span class="maper-span">тренерский состав</span> </div>  <br>' +
                            ' <div class ="maper-raiting-section"><span class="maper-raiting"> {{ $club->raiting_stadion }} </span> <img src="{{ asset('assets/Group 19.png') }}" class="maper-reviews_img_star" alt=""></span> <span class="maper-span">стадион</span> </div>  <br>' +
                            ' <div class ="maper-raiting-section"><span class="maper-raiting"> {{ $club->raiting_manager }} </span> <img src="{{ asset('assets/Group 19.png') }}" class="maper-reviews_img_star" alt=""></span> <span class="maper-span">менеджер</span> </div>  <br>' +

                            '</div>'+

                            ' <a class="maper-phone" href="tel:{{ $club->phone }}"> {{ $club->phone }} </a> <br>' +
                            '<h5 class="maper-time">{{ $club->time }} </h5>' +


                            '  ' +
                            ' ' +

                            ' <br/>',

                        "balloonContentFooter":  '' +
                            '<a target="_blank" class="btn btn-maper btn-orange" href ="/club_{{ $club->slug }}"> Смотреть клуб </a>' +
                            '<a target="_blank" class="btn btn-maper" href ="https://yandex.ru/maps/?rtext=~{{ $club->coords }}"> <img src="{{asset('assets/group-5@2x.png')}}" class="maper-geo-icon">  Как добраться</a>',


                    },



                    "options":{
                        @if($club->ico)

                        "iconLayout": 'default#image',
                        // Своё изображение иконки метки.

                        // Размеры метки.
                        "iconImageSize": [43, 43],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).


                        "iconImageHref": '  {{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico ) }}',
                        @else
                        preset: 'islands#blueIcon'
                        @endif
                    },
                },



                @endforeach




            ]
        });
        objectManager2.add({
            "type": "FeatureCollection",


            "features": [




                    @foreach ($clubs as $club)

                {
                    "type": "Feature",
                    "id":{{$club->id}},


                    "geometry":{
                        "type": "Point",
                        "coordinates":[{{ $club->coords }}],

                    },
                    "properties":{
                        "hintContent": '{{ $club->address }}',



                        "balloonContentHeader": '<h5 class="maper-header"> <a target="_blank" href ="/club_{{ $club->slug }}"">{{ $club->address }}</a> </h5> <br> ' +
                            '<br> ',
                        // Зададим содержимое основной части балуна.
                        "balloonContentBody":

                            '<div class="maper-raiting-section-all">' +

                            ' <div class ="maper-raiting-section"><span class="maper-raiting"> {{ $club->raiting_coach }} </span> <img src="{{ asset('assets/Group 19.png') }}" class="maper-reviews_img_star" alt=""></span> <span class="maper-span">тренерский состав</span> </div>  <br>' +
                            ' <div class ="maper-raiting-section"><span class="maper-raiting"> {{ $club->raiting_stadion }} </span> <img src="{{ asset('assets/Group 19.png') }}" class="maper-reviews_img_star" alt=""></span> <span class="maper-span">стадион</span> </div>  <br>' +
                            ' <div class ="maper-raiting-section"><span class="maper-raiting"> {{ $club->raiting_manager }} </span> <img src="{{ asset('assets/Group 19.png') }}" class="maper-reviews_img_star" alt=""></span> <span class="maper-span">менеджер</span> </div>  <br>' +

                            '</div>'+

                            ' <a class="maper-phone" href="tel:{{ $club->phone }}"> {{ $club->phone }} </a> <br>' +
                            '<h5 class="maper-time">{{ $club->time }} </h5>' +


                            '  ' +
                            ' ' +

                            ' <br/>',

                        "balloonContentFooter":
                            '<a target="_blank" class="btn btn-maper btn-orange" href ="/club_{{ $club->slug }}"> Смотреть клуб </a>' +
                            '<a target="_blank" class="btn btn-maper" href ="https://yandex.ru/maps/?rtext=~{{ $club->coords }}"> <img src="{{asset('assets/group-5@2x.png')}}" class="maper-geo-icon">  Как добраться</a>',


                    },



                    "options":{
                        @if($club->ico)

                        "iconLayout": 'default#image',
                        // Своё изображение иконки метки.

                        // Размеры метки.
                        "iconImageSize": [43, 43],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).


                        "iconImageHref": '  {{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico ) }}',
                        @else
                        preset: 'islands#blueIcon'
                        @endif
                    },
                },



                @endforeach




            ]
        });

    });

</script>





@endsection
