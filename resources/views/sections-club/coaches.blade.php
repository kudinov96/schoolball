<div class="section2"  >

    <style>        @media screen and (max-width: 480px){


            .coaches{
                margin-top: 50px;
            }
        }</style>
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2 text-center coaches">

                <h3 class="title-desc">Тренерский состав</h3>
                <h5 class="text-desc " style="font-size: 18px; ">
                    Преподаватели школы — профессиональные футболисты
                    с педагогическим образованием
                    и тренерскими лицензиями категорий С и D. Они легко находят общий язык с учениками, формируют
                    доверительные отношения с ними, поддерживают их на поле и за его пределами. </h5>
            </div>
        </div>

        <!-- Coaches mob -->

        <!-- Coaches mob -->





        <style>
            .mob-selector{
                margin-bottom: 130px;

            }
            .main-content{
                margin-top: 130px;
            }
            @media (min-width:0px) and (max-width: 767px) {
                .mob-selector{
                    margin-bottom: -85px !important;

                }
                .main-content{
                    margin-top: 46px;
                }



            }

        </style>






        <div class="main-content" >

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
                                    <h4 style="word-break: break-word;"> {{ $coach->education }}</h4>
                                    <h3>Карьера</h3>
                                    <h4 style="word-break: break-word;">{{ $coach->career }}</h4>





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
