@extends('layouts.app')
@section('title')
    <title>Магазин товаров Школы Мяча</title>
@endsection
@section('description')
    <meta name="description" content="Детская футбольная школа в Москве для юных футболистов от 4 до 16 лет. В нашей академии опытные тренеры, современные методики, лучшие условия для занятия футболом">
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">

<style>
    .img-fluid {
        max-width: 265px;
        height: auto;
    }
</style>



    <div class="topPartsGray no-radius d-none d-md-block" style="background: #ffffff;
    margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('assets/sb-ui/images/shop.svg')}}" class="shop_img">

                    <h3 class="shop_title mb-4 mt-2">Магазин товаров Школы мяча</h3>


                    <h4 class="shop_desc">
                        Обогатите спортивный стиль вашего будущего чемпиона с нашей эксклюзивной коллекцией формы и одежды! Современный дизайн, высококачественные материалы и комфорт для непрерывного развития. Ваш ребёнок будет выглядеть и чувствовать себя настоящим профессионалом, шагая к успеху вместе с нашей футбольной школой!                            </h4>

                </div>


            </div>
        </div>
    </div>


    <div class="topPartsGray  no-radius d-sm-block d-md-none" style="background: #ffffff;
    margin-top: 40px;">
        <div class="container">
            <div class="col-md-12 text-center">

                <img src="{{asset('assets/sb-ui/images/shop.svg')}}" style="max-width: 100%;">

                <h1 class="title-desc-mob" style="margin-bottom: 16px !important;">Магазин товаров Школы мяча
                </h1>


                <h5 class="mob-text-section" style="line-height: 24px; /* 150% */ font-size: 16px !important;  margin-bottom: 0px !important; text-align: center !important;
">
                    Обогатите спортивный стиль вашего будущего чемпиона с нашей эксклюзивной коллекцией формы и одежды! Современный дизайн, высококачественные материалы и комфорт для непрерывного развития. Ваш ребёнок будет выглядеть и чувствовать себя настоящим профессионалом, шагая к успеху вместе с нашей футбольной школой!                            </h4>

                </h5>



            </div>
        </div>
    </div>







    <section class="catalog mt-5 mb-5">
        <div class="container">

            <form id="search-form">
                <div class="row  ">
                    <div class="col-md-3">

                        <select name="sort" class="form-control custom-select custom-select-lg mb-3 card-select mobl">
                            <option value="desc">Новинки сверху</option>
                            <option value="price_desc">По убыванию цены</option>
                        </select>

                    </div>
                    <div class="col-md-9">
                        <div class="camp-type-tabs">
                            <div>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button name="type" value="" class="nav-link-catalog active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Все</button>
                                    </li>
                                    @foreach ($categories as $category)
                                        @if ($category->product_count > 0)
                                            <li class="nav-item" role="presentation">
                                                <button name="type" value="{{ $category->id }}" class="nav-link-catalog" data-toggle="pill" data-target="#pills-{{ $category->id }}" type="button" role="tab" aria-controls="pills-{{ $category->id }}" aria-selected="false">{{ $category->name }}</button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>


            </form>
        </div>
        <div class="secondSection ">

            <div class="container">

                <div class="row" id="camp-list">

                    @foreach($catalog as $product)

                        <div class="col-md-4"  style="margin-bottom: 32px;" >
                            <div class="catalog_card_shop">
                                <div class="shop-card-img">
                                    <a href="{{ route('viewShop', ['id' => $product->id]) }}" >
                                <div class="catalog_card_shop_img">


                                        @if($product->images)
                                            <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $product->images) }}" class="img-fluid centered-image" alt="">

                                        @else
                                            <img src="{{asset('assets/sb-ui/images/shop.svg')}}" alt="" class="img-fluid centered-image">

                                        @endif

                                </div>
                                    </a>
                                </div>
                                <div class="catalog-shop-section">
                                    <p class="shop_card_title mb-2" >{{ $product->name }} </p>
                                    <p class="shop_price" ><b>{{ $product->price }} ₽  </b> </p>

                                    <button onclick="location.href='{{ route('viewShop', ['id' => $product->id]) }}'" type="button" name="button" class="mainHeaderButtonFix button_shop order_button">Заказать</button>
                                </div>


                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>



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

    <script type="text/javascript" src="{{ asset('js/shop.js') }}"></script>

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
