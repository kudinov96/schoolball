<!-- Section - map !-->


    <div    class="secondSection d-none d-md-block">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div  style="visibility: hidden;position: relative;top: -100px;"></div>
                    <div id="clubsloc"  style="visibility: hidden;position: relative;top: -100px;"></div>
                    <h3 class="title-desc">Футбольные клубы рядом с домом</h3>



                </div>




                <div class="map" id="map" style="
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
                <h3 class="mob-title-sec" style="    margin-bottom: 0px !important;     margin-top: 84px;">Футбольные клубы рядом с домом</h3>




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




                    @foreach ($clublist as $club)

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




                    @foreach ($clublist as $club)

                {
                    "type": "Feature",
                    "id":{{$club->id}},


                    "geometry":{
                        "type": "Point",
                        "coordinates":[{{ $club->coords }}],

                    },
                    "properties":{
                        "hintContent": '{{ $club->address }}',



                        "balloonContentHeader": '<div class="" > <h5 class="maper-header"   > <a target="_blank" href ="/club_{{ $club->slug }}"">{{ $club->address }}</a> </h5> <br> ' +
                            '<br> ',
                        // Зададим содержимое основной части балуна.
                        "balloonContentBody":

                            '<div class="maper-raiting-section-all" style=" ">  ' +

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
                            '<a target="_blank" class="btn btn-maper btn-orange" href ="/club_{{ $club->slug }}"> Смотреть клуб</a>' +
                            '<a target="_blank" class="btn btn-maper" href ="https://yandex.ru/maps/?rtext=~{{ $club->coords }}"> <img src="{{asset('assets/group-5@2x.png')}}" class="maper-geo-icon">  Как добраться</a> </div>',


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




