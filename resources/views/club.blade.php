@extends('layouts.app2')
@section('title')
    <title>Футбольная секция {{ $clubArray->name }} </title>
@endsection
@section('description')
    <meta name="description" content="Раскройте потенциал вашего ребенка в нашей футбольной школе: современная инфраструктура и незабываемые впечатления гарантированы! ">
@endsection
@section('content')

<style>

    .secondSection h3 {

        height: auto !important;

    }

</style>

<div class=" ">
</div>

    <div class="section2  d-none d-md-block" style="background: #f7f7f9; padding-bottom: 80px;">

        <div class="container  " style="">
      <div class="col-md-8 offset-md-2 text-center">
          <div class="row justify-content-center">
     <div class="" style="     margin-top: 130px;">
              <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico ) }}" alt="Icon" style="width: 64px; height: 64px;">
     </div>
          </div>

          <h3 class="title-desc">Футбольная секция  {{ $clubArray->name }} </h3>
          <h5 class="text-desc "  >
              Раскройте потенциал вашего ребенка в нашей футбольной школе: современная инфраструктура и незабываемые впечатления гарантированы!       </h5>
      </div>


            <div class="col text-center d-none d-md-block"  style="margin-bottom: 5px;" >
                <div id="carousel" class="carousel slide2 slide-ext carousel-fade" data-ride="carousel">
                    <!-- Индикаторы -->
                    <ol class="carousel-indicators">

                        @foreach(explode('|',$club->images ) as $key => $row)
                            @if ($loop->first)   <li data-target="#carousel" data-slide-to="0" class="active"></li> @endif
                            <li data-target="#carousel" data-slide-to="{{ $key }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                        @foreach(explode('|',$club->images  ) as $row)

                            <div class="carousel-item  @if ($loop->first) active @endif">
                                <img class="img-fluid img-slider" src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}"  width="850"  height="" alt="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}">
                            </div>
                        @endforeach


                    </div>
                    <!-- Элементы управления -->
                    <a class="carousel-control-prev" style="width: 30% !important;"  href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Предыдущий</span>
                    </a>
                    <a class="carousel-control-next" style="width: 30% !important;"  href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Следующий</span>
                    </a>
                </div>
            </div>


        </div>

    </div>
    <div class="section2 d-sm-block d-md-none" style="background: #f7f7f9; padding-bottom: 64px;">
        <div class="container">
            <div class=" ">
                <div class="row justify-content-center">
                    <div class="" style="margin-top: 120px; margin-bottom: 20px;">
                        <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico ) }}" alt="Icon" style="width: 64px; height: 64px;">
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 firstSectionDescription text-center">
                        <h3>Футбольная секция  {{ $clubArray->name }} </h3>
                        <h4>Раскройте потенциал вашего ребенка в нашей футбольной школе: современная инфраструктура и незабываемые впечатления гарантированы!
                        </h4>




                    </div>
                    <div id="carousel2" class="carousel slide2 slide-ext carousel-fade" style="margin-bottom: 5px;" data-ride="carousel">
                        <!-- Индикаторы -->
                        <ol class="carousel-indicators">
                            @foreach(explode('|',$club->images ) as $key => $row)
                                @if ($loop->first)
                                    <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                @else
                                    <li data-target="#carousel2" data-slide-to="{{ $key }}"></li>
                                @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner">

                            @foreach(explode('|',$club->images  ) as $row)

                                <div class="carousel-item  @if ($loop->first) active @endif">
                                    <img class="img-fluid img-slider" src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}"  width="850"  height="" alt="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}">
                                </div>
                            @endforeach


                        </div>
                        <!-- Элементы управления -->
                        <a class="carousel-control-prev"     href="#carousel2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Предыдущий</span>
                        </a>
                        <a class="carousel-control-next"     href="#carousel2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Следующий</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Укрепляем тело, развиваем личность !-->

    @include('sections.ukreplenie2')


    <!-- Section - schoolball info !-->
<!-- Section -> Методика подготовки футболистов!-->

<div class="fourthSection d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="methods"  style="visibility: hidden;position: relative;top: -100px;"></div>

                <h3 class="title-desc">Адаптивная программа для всех возрастов</h3>
                <h4 class="main_desc">
                    Мы ориентируемся на европейскую технику обучения футболу, при которой спортсмены как можно
                    больше контактируют с мячом и быстро осваивают приёмы владения и управления мячом уже на
                    начальных этапах. Особое место занимает психологическая подготовка детей: развитие командного
                    духа, целеустремлённости и уверенности в себе.
                </h4>


            </div>

            <div class="col-auto center-block  text-center">
                <div class="toggler">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">3–4 года</button>

                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-1-tab"     data-toggle="pill" data-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="false">5–7 лет</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-2-tab" data-toggle="pill" data-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">8–10 лет</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-3-tab" data-toggle="pill" data-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">11–12 лет</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-4-tab" data-toggle="pill" data-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">13–16 лет</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-100"></div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">                 <div class="kidsSkills">
                        <div class="row" style="">


                            <div class="col-md-6 d-none d-md-block text-center"><img
                                    src="{{ asset('assets/3-4 copy@2x.png') }}" alt=""
                                    style="   height: 435px; width: 380px;"></div>
                            <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">





                                <h3 class="text-left"  >Ожидаемые результаты</h3>

                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Техника футбольных передвижений без мяча </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Повышенная быстрота и скорость реакций </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Ведение мяча, приём и жонглирование с рук </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Улучшенная координация движения ног и рук </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Правильная осанка, укрепленные суставы и связки </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Знания о строении тела и экипировке футболиста </span> <br>



                                <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>
                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Техника
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 0%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>




                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Физика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar2" role="progressbar" style="width: 60%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Теория
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 10%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>



                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Психология
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16  ">
                                    <div class="col-sm-3">
                                        Тактика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 10%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Мышление
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar6" role="progressbar" style="width: 60%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>







                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="kidsSkills">
                        <div class="row" style="">


                            <div class="col-md-6 d-none d-md-block text-center"><img
                                    src="{{ asset('assets/images/5-7@2x.png') }}" alt=""
                                    style="   height: 435px; width: 380px;"></div>
                            <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">

                                <h3 class="text-left"  >Ожидаемые результаты</h3>



                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c"> Выполнение сложных упражнений на координацию </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Навыки приёма, передачи и контроля мяча </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Умение предугадывать направление мяча в воздухе </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Улучшение скорости и техники бега </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Знание футбольной терминологии </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Умение играть в команде </span> <br>


                                <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>

                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Техника
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 0%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>





                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Физика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar2" role="progressbar" style="width: 0%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Теория
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 0%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>




                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Психология
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar4"  role="progressbar" style="width: 0%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16  ">
                                    <div class="col-sm-3">
                                        Тактика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 0%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Мышление
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar6" role="progressbar" style="width: 0%"
                                            ></div>
                                        </div>
                                    </div>
                                </div>





                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <div class="kidsSkills">
                        <div class="row" style="">


                            <div class="col-md-6 d-none d-md-block text-center"><img
                                    src="{{ asset('assets/images/8-10@2x.png') }}" alt=""
                                    style="   height: 435px; width: 380px;"></div>
                            <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">


                                <h3 class="text-left"  >Ожидаемые результаты</h3>



                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c"> Улучшенные навыки владения и управления мячом </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Знакомство с приёмами дриблинга и отбора </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Опыт игры на разных позициях на поле </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Знакомство с футбольными правилами, сигналами и жестами судьи </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Адекватный анализ своих сильных и слабых сторон </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Постановка правильной техники при единоборствах и работе с мячом </span> <br>



                                <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>

                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Техника
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar1" role="progressbar" style="width: 100%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Физика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar2-2" role="progressbar" style="width: 90%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Теория
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey  animate-bar3-3" role="progressbar" style="width: 40%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>



                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Психология
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey  animate-bar4" role="progressbar" style="width: 50%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16  ">
                                    <div class="col-sm-3">
                                        Тактика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey  animate-bar5" role="progressbar" style="width: 40%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Мышление
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar6" role="progressbar" style="width: 60%"
                                            ></div>
                                        </div>
                                    </div>
                                </div>





                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">

                    <div class="kidsSkills">
                        <div class="row" style="">


                            <div class="col-md-6 d-none d-md-block text-center"><img
                                    src="{{ asset('assets/images/11-12@2x.png') }}" alt=""
                                    style="   height: 435px; width: 380px;"></div>
                            <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">


                                <h3 class="text-left" >Ожидаемые результаты</h3>


                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Умение быстро реагировать и выполнять технические приёмы </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Улучшенные навыки владения и управления мячом </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Опыт командной игры при атаке и обороне </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Знакомство с приёмами удара и игры головой, ведение единоборств </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Умение ставить игровые цели и оценивать результат </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Знакомство с историей футбола </span> <br>


                                <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Техника
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar1" role="progressbar" style="width: 100%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Физика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar2" role="progressbar" style="width: 80%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Теория
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar3" role="progressbar" style="width: 70%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>



                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Психология
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar4" role="progressbar" style="width: 60%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16  ">
                                    <div class="col-sm-3">
                                        Тактика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar  animate-bar5" role="progressbar" style="width: 70%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Мышление
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey  animate-bar6" role="progressbar" style="width: 30%"
                                            ></div>
                                        </div>
                                    </div>
                                </div>






                            </div>


                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                    <div class="kidsSkills">
                        <div class="row" style="">


                            <div class="col-md-6 d-none d-md-block text-center"><img
                                    src="{{ asset('assets/images/13-16@2x.png') }}" alt=""
                                    style="   height: 435px; width: 380px;"></div>
                            <div class="col-md-6 d-none d-md-block text-left headline pline fz-18">


                                <h3 class="text-left" >Ожидаемые результаты</h3>



                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Развитый навык самоконтроля и самодисциплины </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Умение реализовывать различные тактические схемы на игровом поле </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Улучшенные навыки единоборств, дриблинга, удара и игры головой </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Формирование адекватной самооценки </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Высокий уровень выносливости </span> <br>
                                <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span
                                    class="list-c">Умение распределять свои силы и быстро восстанавливать энергию </span> <br>




                                <h3 class="text-left"  style="margin-top:35px;">Приоритеты развития</h3>



                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Техника
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar1" role="progressbar" style="width: 60%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Физика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar2" role="progressbar" style="width: 70%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Теория
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar3" role="progressbar" style="width: 50%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>



                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Психология
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16  ">
                                    <div class="col-sm-3">
                                        Тактика
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar animate-bar5" role="progressbar" style="width: 90%"
                                            ></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-16">
                                    <div class="col-sm-3">
                                        Мышление
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress">
                                            <div class="progress-bar-grey animate-bar6" role="progressbar" style="width: 20%"
                                            ></div>
                                        </div>
                                    </div>
                                </div>




                            </div>


                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
<!-- Section -> Методика подготовки футболистов!-->


<!-- Section -> Методика подготовки футболистов! mob-->


<div class="secondSection d-sm-block d-md-none">

    <div class="container">

        <div class="w-100"></div>
        <div class="col text-left mobFontSize-section3" style="
    margin-left: -16px;">
            <div id="methodsmob"  style="visibility: hidden;position: relative;top: -100px;"></div>

            <h3 class="mob-title-sec" style="     margin-top: 84px;">Адаптивная программа для всех возрастов</h3>
        </div>

        <h5 class="mob-text-section">
            Тренировочные программы разработаны специалистами европейского уровня, для каждой возрастной группы
            подбираются уникальные упражнения, исходя
            из физических и психологических особенностей детей

        </h5>

        <!-- toogle --> <div class="section_main">
            <div class="tabbable" id="nav-tab" role="tablist">
                <ul class="nav nav-pills mb-3 mob-tab  nav nav-tabs" id="pills-tab" role="tablist">


                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab-mob" data-toggle="pill" data-target="#pills-home-mob" type="button" role="tab" aria-controls="pills-home-mob" aria-selected="true">3–4 года</button>

                    </li>


                    <li class="nav-item mob-tab-t" role="presentation">
                        <button class="nav-link" id="pills-1-tab-mob" data-toggle="pill" data-target="#pills-1-mob" type="button" role="tab" aria-controls="pills-1-mob" aria-selected="false">5–7 лет</button>
                    </li>


                    <li class="nav-item mob-tab-t" role="presentation">
                        <button class="nav-link" id="pills-2-tab-mob" data-toggle="pill" data-target="#pills-2-mob" type="button" role="tab" aria-controls="pills-2-mob" aria-selected="false">8–10 лет</button>
                    </li>

                    <li class="nav-item mob-tab-t" role="presentation">
                        <button class="nav-link" id="pills-3-tab-mob" data-toggle="pill" data-target="#pills-3-mob" type="button" role="tab" aria-controls="pills-3-mob" aria-selected="false">11–12 лет</button>
                    </li>


                    <li class="nav-item mob-tab-t" role="presentation">
                        <button class="nav-link" id="pills-4-tab-mob" data-toggle="pill" data-target="#pills-4-mob" type="button" role="tab" aria-controls="pills-4-mob" aria-selected="false">13–16 лет</button>
                    </li>
                </ul>
            </div>

        </div>





        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home-mob" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="kidsSkillsMob">


                    <h3 class="text-left" >Ожидаемые результаты</h3>

                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Техника футбольных передвижений без мяча </span>
                    <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Повышенная быстрота и скорость реакций </span>
                    <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Ведение мяча, приём и жонглирование с рук </span>
                    <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенная координация движения ног и рук </span>
                    <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Правильная осанка, укрепленные суставы и связки </span>
                    <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знания о строении тела и экипировке футболиста </span>
                    <br>


                    <h3 class="text-left"  style="margin-top:35px;">Приоритеты развития</h3>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Техника
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 20%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Физика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 60%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Теория
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 10%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>



                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Психология
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16  ">
                        <div class="col-sm-3">
                            Тактика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 10%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Мышление
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar6" role="progressbar" style="width: 60%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>









                </div>
            </div>
            <div class="tab-pane fade" id="pills-1-mob" role="tabpanel" aria-labelledby="pills-1-tab-mob">
                <div class="kidsSkillsMob">


                    <h3 class="text-left"  >Ожидаемые результаты</h3>


                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Выполнение сложных упражнений на координацию</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Навыки приёма, передачи и контроля мяча</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение предугадывать направление мяча в воздухе</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшение скорости и техники бега</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знание футбольной терминологии</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение играть в команде </span><br>




                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>





                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Техника
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar1" role="progressbar" style="width: 40%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Физика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 80%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Теория
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 20%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>



                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Психология
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16  ">
                        <div class="col-sm-3">
                            Тактика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 20%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Мышление
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar6" role="progressbar" style="width: 80%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>

            <div class="tab-pane fade" id="pills-2-mob" role="tabpanel" aria-labelledby="pills-2-tab-mob">
                <div class="kidsSkillsMob">



                    <h3 class="text-left">Ожидаемые результаты</h3>

                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенные навыки владения и управления мячом </span> <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с приёмами дриблинга и отбора</span> <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Опыт игры на разных позициях на поле</span> <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с футбольными правилами, сигналами и жестами судьи</span> <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Адекватный анализ своих сильных и слабых сторон</span> <br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Постановка правильной техники при единоборствах и работе с мячом</span> <br>





                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>



                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Техника
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar1"  role="progressbar" style="width: 100%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Физика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 90%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Теория
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar3" role="progressbar" style="width: 40%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>



                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Психология
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar4" role="progressbar" style="width: 50%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16  ">
                        <div class="col-sm-3">
                            Тактика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar5" role="progressbar" style="width: 40%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Мышление
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar6" role="progressbar" style="width: 60%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>





                </div>

            </div>

            <div class="tab-pane fade" id="pills-3-mob" role="tabpanel" aria-labelledby="pills-3-tab-mob">
                <div class="kidsSkillsMob">


                    <h3 class="text-left" >Ожидаемые результаты</h3>

                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение быстро реагировать и выполнять технические приёмы  </span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенные навыки владения и управления мячом</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Опыт командной игры при атаке и обороне</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с приёмами удара и игры головой, ведение единоборств</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение ставить игровые цели и оценивать результат</span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Знакомство с историей футбола</span><br>





                    <h3 class="text-left"  style="margin-top:35px;">Приоритеты развития</h3>

                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Техника
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar1" role="progressbar" style="width: 100%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Физика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 80%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Теория
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar3" role="progressbar" style="width: 70%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>



                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Психология
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar4" role="progressbar" style="width: 60%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16  ">
                        <div class="col-sm-3">
                            Тактика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar5" role="progressbar" style="width: 70%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Мышление
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar6" role="progressbar" style="width: 30%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>





                </div>

            </div>

            <div class="tab-pane fade" id="pills-4-mob" role="tabpanel" aria-labelledby="pills-4-tab-mob">
                <div class="kidsSkillsMob">


                    <h3 class="text-left" >Ожидаемые результаты</h3>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Развитый навык самоконтроля и самодисциплины </span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение реализовывать различные тактические схемы на игровом поле </span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Улучшенные навыки единоборств, дриблинга, удара и игры головой </span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Формирование адекватной самооценки </span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Высокий уровень выносливости </span><br>
                    <img class="img-checked" src="{{ asset('assets/bx-check-1-copy-5@2x.png')  }}"> <span class="list-c">Умение распределять свои силы и быстро восстанавливать энергию </span><br>




                    <h3 class="text-left" style="margin-top:35px;">Приоритеты развития</h3>





                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Техника
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar1" role="progressbar" style="width: 60%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Физика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar2" role="progressbar" style="width: 70%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Теория
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar3" role="progressbar" style="width: 50%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>



                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Психология
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar4" role="progressbar" style="width: 70%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16  ">
                        <div class="col-sm-3">
                            Тактика
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar animate-bar5" role="progressbar" style="width: 90%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-16">
                        <div class="col-sm-3">
                            Мышление
                        </div>
                        <div class="col-sm-9">
                            <div class="progress">
                                <div class="progress-bar-grey animate-bar6" role="progressbar" style="width: 20%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>






                </div>

            </div>

        </div>


    </div>

</div>

<style>
    @media screen and (max-width: 480px){


        .advantages-sec{
            margin-top: 60px !important;
        }


    }</style>


<!-- Section -> Методика подготовки футболистов! mob -->

    <div class="section2 advantages-sec">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc">Преимущества, которые чувствуешь:</h3>
                    <h5 class="text-desc " style="font-size: 18px; ">
                        Безопасность, удобство и развитие — ваш ребенок заслуживает лучшего!    </h5>
                </div>
            </div>

                <div class="row">

                    <div class="col-md-4 auto">

                        <div class="card-adv-body " >
                            <div class=" text-center">
                                <div class="row justify-content-center">
                                    <div class=" ">
                                        <img src="{{ asset('assets/club_ico/ico-1@1x.svg') }}" alt="Icon" class="card-adv-img">
                                    </div>
                                </div>

                                <p class="card-adv-head-text text-center">Качественное покрытие</p>
                                <p class="card-adv-text text-center">Покрытие гарантирует безопасность и эффективность на каждой тренировке</p></div>

                        </div>

                        </div>


                    <div class="col-md-4 auto">

                        <div class="card-adv-body " >
                            <div class=" text-center">
                                <div class="row justify-content-center">
                                    <div class=" ">
                                        <img src="{{ asset('assets/sb-ui/icons/abonement-1.svg') }}" alt="Icon" class="card-adv-img">
                                    </div>
                                </div>

                                <p class="card-adv-head-text text-center">Гибкие абонементы</p>
                                <p class="card-adv-text text-center">Выбирайте гибкие абонементы, которые подстраиваются под ваше расписание</p></div>

                        </div>

                    </div>


                    <div class="col-md-4 auto">

                        <div class="card-adv-body " >
                            <div class=" text-center">
                                <div class="row justify-content-center">
                                    <div class=" ">
                                        <img src="{{ asset('assets/club_ico/ico-3@1x.svg') }}"  alt="Icon" class="card-adv-img">
                                    </div>
                                </div>

                                <p class="card-adv-head-text text-center">Парковка для авто</p>
                                <p class="card-adv-text text-center">Никаких проблем с парковкой - больше времени для важных вещей</p></div>

                        </div>

                    </div>
                    </div>

            <div class="row">

                <div class="col-md-4 auto">

                    <div class="card-adv-body " >
                        <div class=" text-center">
                            <div class="row justify-content-center">
                                <div class=" ">
                                    <img src="{{ asset('assets/club_ico/ico-4@1x.svg') }}" alt="Icon" class="card-adv-img">
                                </div>
                            </div>

                            <p class="card-adv-head-text text-center">Удобное расписание</p>
                            <p class="card-adv-text text-center">Ваше удобство - наш приоритет: мы предлагаем гибкое расписание</p></div>

                    </div>

                </div>


                <div class="col-md-4 auto">

                    <div class="card-adv-body " >
                        <div class=" text-center">
                            <div class="row justify-content-center">
                                <div class=" ">
                                    <img src="{{ asset('assets/club_ico/ico-5@1x.svg') }}" alt="Icon" class="card-adv-img">
                                </div>
                            </div>

                            <p class="card-adv-head-text text-center">Опытные тренеры</p>
                            <p class="card-adv-text text-center">Тренеры-наставники, которые помогают растить не просто футболистов, но и лидеров</p></div>

                    </div>

                </div>


                <div class="col-md-4 auto">

                    <div class="card-adv-body " >
                        <div class=" text-center">
                            <div class="row justify-content-center">
                                <div class=" ">
                                    <img src="{{ asset('assets/club_ico/ico-6@1x.svg') }}"  alt="Icon" class="card-adv-img">
                                </div>
                            </div>

                            <p class="card-adv-head-text text-center">Комфортная раздевалка</p>
                            <p class="card-adv-text text-center">Наши комфортные раздевалки сделают подготовку к тренировке максимально удобной</p></div>

                    </div>

                </div>
            </div>



                </div>









            </div>



    <!-- Section - map info !-->
    @include('sections-club.map')

    <!-- Section - map info !-->

    <!-- Section - Coaches  !-->

    @include('sections-club.coaches')

    <!-- Section - Coaches  !-->


    <!-- Section - Reviews  !-->

    @include('sections-club.reviews')

    <!-- Section - Reviews  !-->


@include('sections-index.slider-clubs')

    <!-- Section - Reviews  !-->

    @include('sections-club.schedule')

    <!-- Section - Reviews  !-->


    <!-- Section - Price  !-->

    @include('sections-club.tariffs')

    <!-- Section - Price  !-->



    <!-- Section - callback !-->

    @include('sections-club.callback-form')

    <!-- Section - callback  !-->


    <script type="text/javascript">
  $('.card-flip').click(function(){
    $(this).toggleClass('flipped');
  });
</script>
@endsection
