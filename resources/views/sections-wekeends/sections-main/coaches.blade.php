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

                <h3 class="title-desc">Тренерский состав</h3>
                <h4 class="main_desc">
                    Преподаватели школы — профессиональные футболисты с педагогическим образованием
                    и тренерскими лицензиями категорий С и D. Они легко находят общий язык с учениками, формируют
                    доверительные отношения с ними, поддерживают их на поле и за его пределами. </h4>
            </div>
        </div>






        <div class="row d-flex justify-content-center" style="margin-bottom: 130px;">

            <div class="col-md-4">

                <div class="card">

                    <div class="text-center mt-3">
                        <div class="select-area">

                            <select  name="choose" id="choose" class="custom-select custom-select-lg mb-3 coach-select mobl">
                                <option value="opt1" selected>Все отделения</option>

                                @foreach ($clublist as $club)

                                    <option value="opt{{ $club->id }}">{{ $club->address }}</option>

                                @endforeach


                            </select>
                        </div>

                    </div>

                </div>

            </div>
        </div>



        <div class="main-content">

            <section class="jqueryOptions opt1" style="display: block;">
                <div class="slider  owl-carousel owl-theme d-none d-md-block">
                    @foreach ($allcoachs as $coach)


                        <div class="item">
                            <div class="coach-card  ">
                                <div class=" ">
                                    <div class="coachCard">

                                        <div class="coachImg">

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
                            </div>
                        </div>




                    @endforeach
                </div>


            </section>


            <!-- получаем тренеров по клубам -->

            @foreach ($clublist as $club)

                <section class="jqueryOptions opt{{ $club->id }}">




                    <div class="slider  owl-carousel owl-theme d-none d-md-block">
                        @foreach ($allcoachs as $coach)
                            @if($coach->club_id == $club->id)

                                <div class="item">
                                    <div class="coach-card  ">
                                        <div class=" ">
                                            <div class="coachCard">

                                                <div class="coachImg">

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
                                    </div>
                                </div>

                            @endif


                        @endforeach
                    </div>




                </section>
            @endforeach


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




        @foreach ($clublist as $club)

            <section class="jqueryOptions opt{{ $club->id }}">




                <div class="  owl-carousel owl-theme  slider d-sm-block d-md-none">
                    @foreach ($allcoachs as $coach)
                        @if($coach->club_id == $club->id)
                            <div class="item">
                                <div class="coach-card-mob">

                                    <div class="coachCard-mob">
                                        <div class="coachImg-mob">
                                            <?php /*
                                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}"
                                         alt="">
 */ ?>

                                            <img src="{{ asset('/assets/trainer-screen.png') }}" alt="">

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


                                            <!-- social !-->
                                            <div class="socialLinks-coach-section">
                                                <div class="row" style="    margin-left: 15px;
    margin-top: 25px;">
                                                    @if ($coach->social_vk)
                                                        <div class="col-md-1 col-2 socialLinks-coach">
                                                            <!-- <img src="http://127.0.0.1:8000/assets/vk 2.png" alt=""> -->
                                                            <a href="https://vk.com/{{$coach->social_vk}}"><img src="{{ 'assets/footer_icons/vk-2.svg' }}" alt=""></a>
                                                        </div>
                                                    @endif

                                                    @if ($coach->social_fb)
                                                        <div class="col-md-1 col-2 socialLinks-coach">
                                                            <!-- <img src="http://127.0.0.1:8000/assets/vk 2.png" alt=""> -->
                                                            <a href="https://vk.com/{{$coach->social_fb}}"><img src="{{ 'assets/footer_icons/facebook-2.svg' }}" alt=""></a>
                                                        </div>
                                                    @endif

                                                    @if ($coach->social_inst)
                                                        <div class="col-md-1 col-2 socialLinks-coach">
                                                            <!-- <img src="http://127.0.0.1:8000/assets/vk 2.png" alt=""> -->
                                                            <a href="https://vk.com/{{$coach->social_inst}}"><img src="{{ 'assets/footer_icons/instagram-2.svg' }}" alt=""></a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>


                        @endif


                    @endforeach
                </div>




            </section>
        @endforeach





        <!-- <div class="col becomeCoach text-center">
              <h4>Стать тренером →</h4>
            </div> -->
    </div>
</div>
