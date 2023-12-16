<!-- Section - map !-->

<div id=" ">
    <div    class="secondSection d-none d-md-block">

        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2 text-center">
                    <div id="clubs"  style="visibility: hidden;position: relative;top: -100px;"></div>
                    <h3 class="title-desc">Клуб расположен рядом с вашим домом:  {{ $clubArray->address }}</h3>
                    <h5 class="text-desc " style="font-size: 18px;     margin-top: 59px !important;    margin-bottom: 0px !important; ">
                        Сократите время в дороге, но не качество тренировок: ваш ребенок погружается в мир футбола в нашей школе, удобно расположенной в вашем районе!

                    </h5>
                </div>


                <div class="col-auto center-block  text-center">
                    <div class="toggler-club">
                        <ul class="nav nav-pills-club mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link-club active" id="pills-mapinfo2-tab" data-toggle="pill" data-target="#pills-mapinfo2" type="button" role="tab" aria-controls="pills-home" aria-selected="true">На карте</button>

                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link-club" id="pills-parkovka2-tab"     data-toggle="pill" data-target="#pills-parkovka2" type="button" role="tab" aria-controls="pills-1" aria-selected="false">Парковка и вход</button>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="container">

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-mapinfo2" role="tabpanel" aria-labelledby="pills-mapinfo2-tab">

              <div class="map" id="map" style="
                                          width: 100%;
  height: 500px;
  border-radius: 8px;
  border: solid 1px #e4e9ec;
  background-color: #fff;
                             ">


              </div>
                        </div>

                        <div class="tab-pane fade" id="pills-parkovka2" role="tabpanel" aria-labelledby="pills-parkovka2-tab">

                            <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->parking_image) }}"  alt="" style="width: 100%;">


                        </div>



                    </div>  </div>












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

    <div class=" section2  d-sm-block d-md-none">

        <div class="container">



            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc">Клуб расположен рядом с вашим домом:  {{ $clubArray->address }}</h3>
                    <h5 class="text-desc " style="font-size: 18px; margin-bottom: 0px  !important; ">
                        Сократите время в дороге, но не качество тренировок: ваш ребенок погружается в мир футбола в нашей школе, удобно расположенной в вашем районе!
                    </h5>
                </div>
            </div>
            <div class="col   mobFontSize-map" >





                <div class="section_main d-sm-block d-md-none">
                    <div class="tabbable" id="nav-tab" role="tablist">
                        <ul class="nav nav-pills mb-3 mob-tab  nav nav-tabs mob-map" id="pills-map" role="tablist">



                            <li class="nav-item nav-mob-item" role="presentation">

                                <button class="  nav-mob-link active " id="pills-mapinfo-tab" data-toggle="pill" data-target="#pills-mapinfo" type="button" role="tab" aria-controls="pills-mapinfo" aria-selected="false">

                                    На карте


                                </button>
                            </li>


                            <li class="nav-item nav-mob-item" role="presentation">

                                <button class=" nav-mob-link" id="pills-parkovka-tab" data-toggle="pill" data-target="#pills-parkovka" type="button" role="tab" aria-controls="pills-parkovka" aria-selected="false">

                                    Парковка и вход


                                </button>
                            </li>


                        </ul>
                    </div>

                </div>

            </div>

        </div>




        <div class="container">

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-mapinfo" role="tabpanel" aria-labelledby="pills-mapinfo-tab">
                    <div class="map" id="map2" style="
                               width: auto;
  height: 408px;
                             "></div>
                </div>
                <div class="tab-pane fade" id="pills-parkovka" role="tabpanel" aria-labelledby="pills-parkovka-tab">

                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->parking_image) }}"  alt="" style="width: 100%;">


                </div>


            </div>


        </div>
        </div>


            <div class="text-center">
                <button type="button" class="btn-desc  waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Вступить в клуб
                </button>
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

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'Собственный значок метки',
                balloonContent: 'Это красивая метка'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: 'images/myIcon.gif',
                // Размеры метки.
                iconImageSize: [30, 42],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -38]
            }),

            myPlacemarkWithContent = new ymaps.Placemark([{{ $club->coords }}], {
                hintContent: '{{ $club->address }}',
                "balloonContentHeader": '<h5 class="maper-header"> <a target="_blank" href ="/club_{{ $club->slug }}">{{ $club->address }}</a> </h5> <br> ' +
                    '<br> ',
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

                "balloonContentFooter":  '<a target="_blank" class="btn btn-maper" href ="https://yandex.ru/maps/?rtext=~{{ $club->coords }}"> <img src="{{asset('assets/group-5@2x.png')}}" class="maper-geo-icon">  Как добраться</a>',



            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: ' {{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico ) }}',
                // Размеры метки.
                iconImageSize: [48, 48],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-24, -24],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [15, 15],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });

        myMap.geoObjects
            .add(myPlacemark)
            .add(myPlacemarkWithContent);
    });

</script>

<script>

    ymaps.ready(function () {
        var myMap = new ymaps.Map('map2', {
                center: [55.751574, 37.573856],
                zoom: 9
            }, {
                searchControlProvider: 'yandex#search'
            }),

            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'Собственный значок метки',
                balloonContent: 'Это красивая метка'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: 'images/myIcon.gif',
                // Размеры метки.
                iconImageSize: [30, 42],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -38]
            }),

            myPlacemarkWithContent = new ymaps.Placemark([{{ $club->coords }}], {
                hintContent: '{{ $club->address }}',
                "balloonContentHeader": '<h5 class="maper-header"> <a target="_blank" href ="/club_{{ $club->slug }}">{{ $club->address }}</a> </h5> <br> ' +
                    '<br> ',
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

                "balloonContentFooter":  '<a target="_blank" class="btn btn-maper" href ="https://yandex.ru/maps/?rtext=~{{ $club->coords }}"> <img src="{{asset('assets/group-5@2x.png')}}" class="maper-geo-icon">  Как добраться</a>',



            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: ' {{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico ) }}',
                // Размеры метки.
                iconImageSize: [48, 48],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-24, -24],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [15, 15],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });

        myMap.geoObjects
            .add(myPlacemark)
            .add(myPlacemarkWithContent);
    });

</script>

