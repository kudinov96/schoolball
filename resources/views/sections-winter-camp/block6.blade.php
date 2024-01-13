<div class="seventhSection" id="" style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">


        <!-- Coaches mob -->
        <div class="col text-left mobFontSize d-sm-block d-md-none" style="
    margin-left: -16px;">
            <div id="coachesmob"  style="visibility: hidden;position: relative;top: -100px;"></div>

            <h3 class="mob-title-sec" style="margin-top: 42px;">Тренерский состав</h3>
        </div>

        <h5 class="mob-text-section d-sm-block d-md-none">
            Преподаватели школы — профессиональные футболисты
            с педагогическим образованием
            и тренерскими лицензиями категорий С и D. Они легко находят общий язык с учениками, формируют
            доверительные отношения с ними, поддерживают их на поле и за его пределами.
        </h5>
        <!-- Coaches mob -->

        <div class="row">


            <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
                <div id="coaches"  style="visibility: hidden;position: relative;top: -100px;"></div>

                <h3 class="title-desc" style="margin-bottom: 25px !important;">Тренерский состав</h3>
                <h4 class="main_desc" style=" margin-bottom: 155px;">
                    Преподаватели школы — профессиональные футболисты с педагогическим образованием
                    и тренерскими лицензиями категорий С и D. Они легко находят общий язык с учениками, формируют
                    доверительные отношения с ними, поддерживают их на поле и за его пределами. </h4>
            </div>
        </div>


        <style>
            .mob-selector{
                margin-bottom: 130px;

            }
            @media (min-width:0px) and (max-width: 767px) {
                .mob-selector{
                    margin-bottom: 52px !important;

                }
            }

        </style>




        <div class="main-content">




            <!-- получаем тренеров по клубам -->



            <section class=" ">


                <div class="coachs-slider slider d-none d-md-block ">
                    @foreach ($allcoachs as $coach)


                        <div class=" ">
                            <div class="coach-card  ">
                                <div class=" ">
                                    <div class="coachCard">

                                        <div class="coachImg">

                                            <?php // <img src="{{ asset('/assets/trainer-screen.png') }}" alt=""> <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}" alt="">
                                            ?>
                                            <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}" alt="">

                                        </div>
                                        <div class="coachInfo">
                                            <h3>{{ $coach->surname}} {{ $coach->name}}</h3>
                                            <h4>Тренерский опыт более {{ $coach->seniority}}@if ($coach->seniority == 1)
                                                    года
                                                @else
                                                    лет
                                                @endif</h4>


                                            <div class="tukoidsa">
                                                <h3>Образование </h3>
                                                <h4 style="word-break: break-word;"> {{ $coach->education }}</h4>
                                                <h3>Карьера</h3>
                                                <h4 style="word-break: break-word;">{{ $coach->career }}</h4>
                                                @if($coach->career_football)
                                                    <h3>Карьера футболиста</h3>
                                                    <h4 style="word-break: break-word;">{{ $coach->career_football }}</h4>
                                                @endif
                                                @if($coach->career_football)
                                                    <h3>Карьера тренера</h3>
                                                    <h4 style="word-break: break-word;">{{ $coach->career_trainer }}</h4>
                                                @endif
                                                @if($coach->career_football)
                                                    <h3>Достижения</h3>
                                                    <h4 style="word-break: break-word;">{{ $coach->achievements }}</h4>
                                                @endif
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    @endforeach
                </div>




            </section>



            <!-- подгружаем в зависимости от выбр клуба   -->

        </div>


        <?php /*
            <div class="coachs-slider slider d-none d-md-block">
                @foreach ($allcoachs as $coach)
                    <div class="coach-card  ">
                        <div class=" ">
                            <div class="coachCard">

                                <div class="coachImg ">

                                    <?php //<img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}" alt="">
                                    ?>
                                    <img src="{{ asset('/assets/trainer-screen.png') }}" alt="">
                                </div>
                                <div class="coachInfo">
                                    <h3>{{ $coach->surname}} {{ $coach->name}}</h3>
                                    <h4>Тренерский опыт более {{ $coach->seniority}}@if ($coach->seniority == 1)
                                            года
                                        @else
                                            лет
                                        @endif</h4>


                                    <div class="tukoidsa">
                                        <h3>Образование </h3>
                                        <h4> {{ $coach->education }}</h4>
                                        <h3>Карьера</h3>
                                        <h4>{{ $coach->career }}</h4>
                                        <h3>Достижения</h3>
                                        <h4>{{ $coach->career }}</h4>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach

                <!-- front content -->
            </div>
 */ ?>






        <section class="">




            <div class="mobile-coachs-slider slider d-sm-block d-md-none">
                @foreach ($allcoachs as $coach)

                    <div class=" ">
                        <div class="coach-card-mob">

                            <div class="coachCard-mob">
                                <div class="coachImg-mob">
                                    <?php /*
                                             <img src="{{ asset('/assets/trainer-screen.png') }}" alt="">


                                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}"
                                         alt="">
 */ ?>
                                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}"
                                         alt="">


                                </div>
                                <div class="coachInfo-mob">
                                    <h3>{{ $coach->surname}} {{ $coach->name}}</h3>
                                    <h4>Тренерский опыт более {{ $coach->seniority}}@if ($coach->seniority == 1)
                                            года
                                        @else
                                            лет
                                        @endif</h4>
                                    <h3>Образование </h3>
                                    <h4> {{ $coach->education }}</h4>
                                    <h3>Карьера</h3>
                                    <h4>{{ $coach->career }}</h4>
                                    @if($coach->career_football)
                                        <h3>Карьера футболиста</h3>
                                        <h4>{{ $coach->career_football }}</h4>
                                    @endif
                                    @if($coach->career_football)
                                        <h3>Карьера тренера</h3>
                                        <h4>{{ $coach->career_trainer }}</h4>
                                    @endif
                                    @if($coach->career_football)
                                        <h3>Достижения</h3>
                                        <h4>{{ $coach->achievements }}</h4>
                                    @endif




                                </div>
                            </div>


                        </div>
                    </div>





                @endforeach
            </div>




        </section>






        <!-- <div class="col becomeCoach text-center">
              <h4>Стать тренером →</h4>
            </div> -->
    </div>
</div>
