@extends('layouts.app')
@section('title')
    <title>Магазин товаров Школы Мяча</title>
@endsection
@section('description')
    <meta name="description" content="Детская футбольная школа в Москве для юных футболистов от 4 до 16 лет. В нашей академии опытные тренеры, современные методики, лучшие условия для занятия футболом">
@endsection


@section('content')

    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">



    <section class="position-relative bg-white" style="margin-top: 154px;">
        <div class="container pt-7 pt-lg-9 pb-9 pb-lg-11 position-relative">



                    <div class="breadcrumb-shop" ><a class="breadcrumb-shop-href" href="{{ route('shop') }}">Магазин</a> • {{$category->name}} </div>





            <div class="row justify-content-between">

                <div class="col-xl-6 col-lg-6 col-md-8 mx-auto mx-lg-0 mb-5 mb-lg-0">

                    <div class="row g-1 justify-content-center">


                        <div class="col-12">

                            <!--Thumbnails main slider-->

                            <div class="swiper-container overflow-hidden position-relative swiper-thumbnails-main swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="shop-card-img">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper" id="swiper-wrapper-4d15ccc2d10ecb368" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                        <!-- Slides -->
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: auto;">

                                            @if($product->images)
                                                <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $product->images) }}" class="img-fluid centered-image" alt="">

                                            @else
                                                <img src="{{asset('assets/sb-ui/images/shop.svg')}}" alt="" class="img-fluid centered-image">

                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Navigation buttons (Remove it if you have to) -->
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-md-8 mx-auto col-lg-6 ms-xl-auto">
                    <!--Breadcrumbs-->
                  <div class="shop-card">
                    <!-- Product Description -->
                    <div class="mb-2 pb-2 ">
                        <div class="mb-3">
                            <h2 class="mb-3 display-4 shop-card-title">{{$product->name}} </h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="fs-5 mb-0 shop-card-price">{{$product->price}} ₽</p>
                                </div>

                            </div>
                        </div>

                    </div>




                      @php
                          $colorNames = [
                              "#FFFFFF" => "white", "#F5F5DC" => "beige", "#FFFF00" => "yellow",
                              "#FFD700" => "gold", "#FFA500" => "orange", "#008000" => "green",
                              "#00008B" => "darkblue", "#FFC0CB" => "pink", "#FF0000" => "red",
                              "#808080" => "gray", "#A52A2A" => "brown", "#000000" => "black",
                              "#40E0D0" => "turquoise", "#0000FF" => "blue", "#8A2BE2" => "violet",
                              "#F0E68C" => "khaki", "black_red" => "black_red", "#B22222" => "firebrick",
                              "#ADD8E6" => "lightblue", "#696969" => "darkergray" // добавьте или измените необходимые цвета
                          ];
                      @endphp

                      <div class="mb-3 pb-3  ">
                          <h6 class="mb-3" style="text-align: left!important;">Цвет</h6>
                          <div class="d-flex" role="group" aria-label="Basic radio toggle button group">
                              @if (!empty($product->colors))
                                  @php $colors = json_decode($product->colors); @endphp
                                  @foreach ($colors as $index => $color)
                                      @if (isset($colorNames[$color]))
                                          @php $colorName = $colorNames[$color]; @endphp
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio{{ $colorName }}" {{ $index === 0 ? 'checked' : '' }}>
                                          <label class="shop-product-color btn border-0 p-0 me-2 width-3x height-3x flex-center text-white product-{{ $colorName }}" data-color="{{ $color }}" data-color-name="{{ $colorName }}" style="background-color: {{ $color }};" for="btnradio{{ $colorName }}"></label>
                                      @endif
                                  @endforeach
                              @endif
                          </div>
                          <!--Radio buttons for product colors-->
                      </div>

                      <!--/.colors-->



                      <div class="mb-2 pb-2  ">

                          <select name="size" class="form-control custom-select custom-select-lg mb-3 card-select mobl">
                              <option value="">Размер</option>

                          @if (!empty($product->sizes))
                                  @php $sizes = json_decode($product->sizes); @endphp
                                  @foreach ($sizes as $size)
                                      <option value="{{ $size }}">{{ $size }}</option>
                                  @endforeach
                              @endif
                          </select>
                          <!--Radio buttons for product colors-->
                      </div>

                      <div class="mb-3  ">
                          <a href="javascript:void(0)" class="dash-href" onclick="showSizeTable()">Таблица размеров</a>
                      </div>

                      <style>

                          .championship-table {
                              width: 100%;
                              border-radius: 8px;
                              /* box-shadow: 0 0 24px 0 rgba(83, 97, 119, 0.15); */
                              /* border: solid 1px #ffffff; */
                              border: 1px solid #E1E5E9;
                              /* background-color: #ffffff; */
                          }
                          .championship-table thead {
                              font-family: "IBMPlexSansBold", sans-serif;
                              font-size: 18px;
                              padding: 16px !important;
                              font-weight: 500;
                              font-stretch: normal;
                              font-style: normal;
                              line-height: 1.33;
                              letter-spacing: normal;
                              padding: 16px !important;
                              color: #303337;
                              border-bottom: 1px solid #E1E5E9;
                          }
                          .championship-table td {
                              font-family: "IBMPlexSans", sans-serif;
                              font-size: 18px;
                              font-weight: normal;
                              font-stretch: normal;
                              font-style: normal;
                              line-height: 1.33;
                              padding: 16px !important;
                              letter-spacing: normal;
                              color: #222222;
                          }
                          .championship-table table {
                              width: 100%;
                              padding: 16px !important;
                          }
                          .championship-table th, .championship-table td {
                              font-weight: 400;
                              font-size: 12px;
                              line-height: 16px;
                              padding: 12px !important;
                              color: #303337;
                          }
                          .dash-href{
                              border-bottom: 1px dashed;
                          }

                          .dash-href:hover {

                             text-decoration: none;
                          }
                      </style>

                      <div id="sizeTable" style="display: none;"  class="championship-table mb-3 table-striped  ">
                          <table>
                              <thead>
                              <tr>
                                  <th>Обхват шеи</th>
                                  <th>Обхват груди</th>
                                  <th>Обхват талии</th>
                                  <th>Рост</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>40-45</td>
                                  <td>74-78</td>
                                  <td>42</td>
                                  <td>150-154</td>
                              </tr>
                              <tr>
                                  <td>45-50</td>
                                  <td>79-83</td>
                                  <td>44</td>
                                  <td>155-159</td>
                              </tr>
                              <tr>
                                  <td>50-55</td>
                                  <td>84-88</td>
                                  <td>46</td>
                                  <td>160-164</td>
                              </tr>
                              <tr>
                                  <td>55-60</td>
                                  <td>88-92</td>
                                  <td>48</td>
                                  <td>165-169</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>



                      <script>
                          function showSizeTable() {
                              var sizeTable = document.getElementById("sizeTable");
                              if (sizeTable.style.display === "none") {
                                  sizeTable.style.display = "block";
                              } else {
                                  sizeTable.style.display = "none";
                              }
                          }
                      </script>


                      <div class="row">
                          <div class="col-md-6">
                              <div class="d-grid">
                                  <a href="#" data-toggle="modal" data-animation="bounce" data-target=".bs-shop-modal-lg" class="btn btn-primary hover-lift" style="margin-top: 0px;">
                                      Оформить заказ
                                  </a>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <p class="price-shop">
                                  <img src="{{ asset('assets/sb-ui/icons/coin-hand.svg') }}" class="mr-2" style="width: 24px; height: 24px;     margin-top: -8px;"> Оплата после примерки
                              </p>
                          </div>
                      </div>



                      <!--/.cart-action-->
                   </div>
                    <div class="modal fade bs-shop-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header text-left">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40;width: unset;height: unset;background: unset;border: unset;font-size: 1.5rem;line-height: 1;">×</button>
                                </div>
                                <div id="callback-1-front">
                                    <div class="modal-body text-left">
                                        <h5 class="modal-title2 mt-0"  id="myLargeModalLabel">Заполните форму, чтобы заказать товар
                                        </h5>

                                        <p style="
    text-align: left;
    margin: 16px 3px 24px 7px;
    height: AUTO;
">
                                        </p>

                                        <div class="">
                                            <div class="col-md-12">
                                            </div>
                                            <form id="sendformProduct" method="post" class="needs-validation" novalidate>
                                                @csrf
                                                <input type="hidden" id="hiddenProductName" name="product_name" value="{{$product->name}}">
                                                <input type="hidden" id="hiddenProductColor" name="product_color" value="">
                                                <input type="hidden" id="hiddenProductSize" name="product_size" value="">

                                                <div class="row">
                                                    <div class="col-md-12 col-xl-12  ">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com" required>
                                                            <label for="name">Имя</label>
                                                            <div class="invalid-feedback">
                                                                Поле обязательно для заполнения
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-xl-12  ">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com"  >
                                                            <label for="name">Email</label>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control phone" id="phone" name="phone"  required>
                                                            <label for="phone">Моб. телефон</label>
                                                            <div class="invalid-feedback">
                                                                Поле обязательно для заполнения
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 col-xl-6">
                                                        <button class="btn btn-primary" style="margin-top: 24px !important;" type="submit" onclick="sendFormProduct(event)">Отправить заявку</button>
                                                    </div>
                                                </div>

                                            </form>

                                            <div class="sogl text-left" style="
    margin-top: 16px;
    margin-bottom: 56px;
">
                                                <label id="sogl-1"for="sogl">Нажимая на кнопку, вы даёте согласие на <a href="{{ asset('assets/doc/sogl-ooo_sm.pdf')}}" target='_blank'>обработку персональных данных.</a></label>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div id="callback-1-done" class="d-none">
                                    <div class="modal-body text-center" style="margin: 32px;">
                                        <div  >
                                            <div class="col-md-12">
                                                <h3 style="font-size: 48px;">  🥳    </h3>                   </div>
                                            <div class="col-md-12">
                                                <h4> <b> Спасибо за заявку </b> </h4>

                                                <p class="psy-about">Наш менеджер свяжется с вами в ближайшее время. А пока почитайте наш блог по воспитанию настоящих лидеров и чемпионов! </p><br>

                                                <a href="{{ route('blog') }}" class="btn btn-primary" style="    margin-top: 0px !important;
    margin-bottom: 56px !important;
    width: 100% !important;">Читать блог</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->

                    </div>

                </div>
                <!--/.col-->
            </div>




            <div class="row justify-content-between" style="margin-top: 48px; margin-bottom: 64px;">

                <div class="col-xl-6 col-lg-6 col-md-8 mx-auto mx-lg-0 mb-5 mb-lg-0">

                    <div class="row justify-content-center">
                        <div class="col-12 auto">
                        <div class="card-tabs">
                        <div class="col-12">
                            <nav class="nav nav-tabs mt-2 mb-2" role="tablist">
                                <a href="#description" class="nav-link active" data-bs-toggle="tab" aria-haspopup="false" aria-expanded="true" aria-selected="true" role="tab">
                                    Описание
                                </a>
                                <a href="#composition" class="nav-link" data-bs-toggle="tab" aria-haspopup="false" aria-expanded="false" aria-selected="false" tabindex="-1" role="tab">
                                    Состав
                                </a>
                                <a href="#care" class="nav-link" data-bs-toggle="tab" aria-haspopup="false" aria-expanded="false" aria-selected="false" tabindex="-1" role="tab">
                                    Уход
                                </a>

                            </nav>
                        </div>

                        <!--/.col-->
                        <div class="col-12">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="description" role="tabpanel">
                                    {{ $product->description }}
                                </div>
                                <!--Tab-pane-->
                                <div class="tab-pane fade" id="composition" role="tabpanel">
                                    {{ $product->composition }}
                                </div>
                                <!--Tab-pane-->
                                <div class="tab-pane fade" id="care" role="tabpanel">
                                    {{ $product->care }}
                                </div>

                            </div>
                            <!--Tab-pane-->
                        </div>
                        </div>
                        </div>
                    </div>

                </div>
                <!--/.col-->
                <div class="col-md-8 mx-auto col-lg-6 ms-xl-auto">
                    <!--Breadcrumbs-->

                    <div class="row">
                        <div class="col-md-6 auto">

                            <div class="card-adv-body " >
                                <div class=" text-center">
                                    <div class="row justify-content-center">
                                        <div class=" ">
                                            <img src="{{ asset('assets/home2/ico-6.svg')  }}" alt="Icon" class="card-adv-img">
                                        </div>
                                    </div>

                                    <p class="card-adv-head-text text-center">Крепкое здоровье</p>
                                    <p class="card-adv-text text-center">Футбол — больше чем игра. Это <b>здоровый</b> стиль жизни, развитие <b>личностных</b> качеств
                                        и <b>коммуникативных</b> навыков.</p></div>

                            </div>

                        </div>


                        <div class="col-md-6 auto">

                            <div class="card-adv-body " >
                                <div class=" text-center">
                                    <div class="row justify-content-center">
                                        <div class=" ">
                                            <img src="{{ asset('assets/home2/ico-7.svg')  }}" alt="Icon" class="card-adv-img">
                                        </div>
                                    </div>

                                    <p class="card-adv-head-text text-center">Лидерские качества</p>
                                    <p class="card-adv-text text-center">На тренировках юные футболисты знакомятся с игровым <b>мышлением</b>, развивают <b>воображение</b> и <b>лидерские качества</b>.</p></div>

                            </div>

                        </div>

                    </div>





                </div>
                <!--/.col-->
            </div>
        </div>
    </section>


    <!-- Section - schoolball info mob !-->





        <div class="container form-block">



            <div id="callback-catalog-front">

                <div class="row">

                    <div class="col-md-8 offset-md-2 text-center">
                        <h3 class="title-desc" style="    margin-top: 0px !important; margin-bottom: 32px !important;">Поможем в выборе!</h3>
                        <h5 class="title-main "  >
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


        <script>
            function sendFormProduct(event) {
                event.preventDefault();

                // Добавляем подмену первой цифры в номере телефона
                if ($('#phone').val().charAt(0) === '8') {
                    $('#phone').val('9' + $('#phone').val().substring(1));
                }

                var selectedColorHEXCode = $('input[name="btnradio"]:checked').siblings("label").data("color"); // получение цвета из атрибута "data-color"

                 $('#hiddenProductColor').val(selectedColorHEXCode); // использование полученного цвета
                var selectedSize = $('select[name="size"]').val();
                $('#hiddenProductSize').val(selectedSize);

                var form = $("#sendformProduct")[0];
                if (form.checkValidity()) {
                    var currentPage = window.location.pathname.split('/').pop();
                    $("#sendformProduct").append('<input type="hidden" name="path" value="'+currentPage+'">');
                    $.ajax({
                        type: "POST",
                        url: "{{ route('backCallProduct') }}",
                        data: $("#sendformProduct").serialize(),
                        success: function( result ) {
                            if (result == 'DONE!') {
                                $("#callback-1-front").addClass("d-none");
                                $("#callback-1-done").removeClass("d-none");
                            }
                        }
                    });
                }
                form.classList.add('was-validated');
            }
        </script>



@endsection
