<div class="ninethSection">

    <div class="container">

        <div class="row">

            <div id="price" style="visibility: hidden;position: relative;top: -100px;"></div>


            <div class="col-md-12 text-center d-none d-md-block">
                <h3 class="title-desc" style=" margin-bottom: 35px !important;">Стоимость участия</h3>
                <h5 class="text-desc " style="font-size: 20px;margin-bottom: 35px !important;">
                    Забронируйте место сейчас и получите скидку
                </h5>
            </div>

            <style>
                .old-price {
                    position: relative;
                    color: #212529;
                    margin-left: 5px;
                    font-weight: normal;
                }
                .old-price:before {
                    border-bottom: 27px solid #fc5252;
                    position: absolute;
                    content: "";
                    width: 198px;
                    height: 74%;
                    opacity: 0.5;
                    transform: rotate(359deg);
                    margin-left: 0px;
                }

                .old-price-mob {
                    position: relative;
                    color: #212529;
                    margin-left: 5px;
                    font-weight: normal;
                }
                .old-price-mob:before {
                    border-bottom: 9px solid #fc5252;
                    position: absolute;
                    content: "";
                    width: 113px;
                    height: 77%;
                    opacity: 0.5;
                    transform: rotate(359deg);
                    margin-left: 0px;
                    margin-top: 19px;
                }

            </style>
            <div id="pricemob" style="visibility: hidden;position: relative;top: -100px;"></div>

            <div class="col-md-12 text-center d-none d-md-block">

                <p class="title-desc" style="margin-top: 10px !important;
    margin-bottom: 35px !important;
    text-align: center;"><span class="old-price" style="    margin-right: 40px;
    font-family: IBMPlexSans, sans-serif !important;">{{ $main->price_discount }} ₽</span>  {{ $main->price }} ₽ </p>


            </div>

            <h5 class="col-md-12 text-center d-none d-md-block" style="font-family: IBMPlexSans-Bold;font-size: 28px;margin-top: 50px; margin-bottom: 45px !important;">
                Всё включено:

            </h5>

            <div class="d-none d-md-block">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3"><div class="rectangleHome5" style="height: 220px !important;      width: 253px  !important;  ">
                            <img src="{{asset('assets/icons_club/ico-1@1x.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">7 тренировочных дней (14 футбольных занятий по 90 минут) </h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="rectangleHome5" style="height: 220px !important;     width: 253px  !important; ">
                            <img src="{{asset('assets/icons_club/ico-2@1x.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">3-х разовое питание в формате шведский стол </h3>
                        </div>
                    </div>

                    <div class="col-md-3"><div class="rectangleHome5" style="height: 220px !important;      width: 253px !important; "><img src="{{asset('assets/icons_club/ico-3@1x.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">Проживание в комфортных номерах</h3></div>
                    </div>
                    <div class="col-md-3"><div class="rectangleHome5" style="height: 220px !important;      width: 253px !important; "><img src="{{asset('assets/icons_club/pull.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;"> Бассейн и хамам</h3></div>
                    </div>



                    <div class="col-md-3"><div class="rectangleHome5" style="height: 220px !important;      width: 253px  !important;  ">
                            <img src="{{asset('assets/icons_club/ico-5@1x.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">Конкурс по фристайлу</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="rectangleHome5" style="height: 220px !important;     width: 253px  !important; ">
                            <img src="{{asset('assets/icons_club/ico-6@1x.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">Живое общение и минимум гаджетов </h3>
                        </div>
                    </div>

                    <div class="col-md-3"><div class="rectangleHome5" style="height: 220px !important;      width: 253px !important; "><img src="{{asset('assets/icons_club/ico-7@1x.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">Церемония награждения с ценными призами</h3></div>
                    </div>
                    <div class="col-md-3"><div class="rectangleHome5" style="height: 220px !important;      width: 253px !important; "><img src="{{asset('assets/images/wekeends/bus.svg')}}" alt="">
                            <h3 style="  font-size: 18px !important;">Трансфер на автобусе
                                туда-обратно</h3></div>
                    </div>
                </div>

            </div>


            <div class="col text-left mobFontSize d-sm-block d-md-none" style="">

                <h3 class="mob-title-sec" style="  margin-left: 16px;    margin-top: 42px;">Стоимость участия</h3>

                <h5 class="mob-text-section" style="font-size: 16px !important;   text-align: center !important;
">
                    Забронируйте место сейчас
                    и получите скидку.
                </h5>



            </div>

            <div class="col-md-12 text-center d-sm-block d-md-none">
                <p class="title-desc" style="
    margin-top: 10px !important;
    margin-bottom: 35px !important;
    font-family: IBMPlexSans, sans-serif !important;
    ">
                    <span class="old-price-mob" style="   font-size: 28px;">{{ $main->price_discount }} ₽</span>
                </p>

                <span style="
    font-size: 28px;
    font-family: IBMPlexSans-Bold, sans-serif !important;
">{{ $main->price }} ₽</span>
            </div>

            <style>
                @media screen and (min-width: 365px){
                    .reviewCard-area {
                        /* width: 155px !important; */
                        /* height: 300px !important; */
                        /* padding-bottom: 15px; */
                    }

                    .advantageCard {
                        /* margin: 0px !important; */
                        /* height: 100%; */
                    }
                }


            </style>
            <div class="col-12 d-sm-block d-md-none" style="    text-align: center !important;
 margin-top: 15px; margin-bottom: 0px;">

                       <span style="
    font-size: 18px;
    font-family: IBMPlexSans-Bold;
">В стоимость входит:</span>
                <div class="row mobile-advantage-slider" style="
    margin-top: 32px;
">

                    <div class="reviewCard-area2">
                        <div class="advantageCard2" style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/ico-1@1x.svg')}}" style="   display: block;
  margin: 0 auto;">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        7 тренировочных дней (14 футбольных занятий по 90 минут)
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewCard-area2">
                        <div class="advantageCard2" style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/ico-2@1x.svg')}}" style="   display: block;
  margin: 0 auto;">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        3-х разовое питание в формате шведский стол
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area2" >
                        <div class="advantageCard2"  style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/ico-3@1x.svg')}}" style="  display: block;
  margin: 0 auto; ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        Проживание в комфортных номерах
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area2" >
                        <div class="advantageCard2"  style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/pull.svg')}}" style="  display: block;
  margin: 0 auto; ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        Бассейн и хамам
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area2" >
                        <div class="advantageCard2"  style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/ico-5@1x.svg')}}" style="  display: block;
  margin: 0 auto; ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        Конкурс по фристайлу
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewCard-area2" >
                        <div class="advantageCard2"  style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/ico-6@1x.svg')}}" style="  display: block;
  margin: 0 auto; ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        Живое общение и минимум гаджетов
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="reviewCard-area2" >
                        <div class="advantageCard2"  style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/icons_club/ico-7@1x.svg')}}" style="  display: block;
  margin: 0 auto; ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        Церемония награждения с ценными призами
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewCard-area2" >
                        <div class="advantageCard2"  style=" padding: 32px 24px;">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <img src="{{asset('assets/images/wekeends/bus.svg')}}" style="  display: block;
  margin: 0 auto; ">
                                </div>
                                <div class="col-md-10 text-left">

                                    <h3 style="    text-align: center !important; font-size: 18px !important;">
                                        Трансфер на автобусе
                                        туда-обратно
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="col-12  text-center" style="margin-bottom: 40px;">

                <div class="friends_button" style="text-align: center;">
                    <button type="button" style=" width: 380px;" class="btn btn-primary" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Получить консультацию</button>
                </div>
            </div>

        </div>

    </div>
</div>
