@extends('layouts.app')

@section('content')
    <div class="topPartsGray" style="background-color: #ffffff;">
        <div class="container" style="    max-width: 874px;">
    <div class="firstSection ">


            <div class="row">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class=" p-3 py-4">

                            <div class="text-center">
                                <img src="{{asset('assets/images/referal/illustration.svg')}}" class="img-referal" width="300" >
                            </div>

                            <div class="text-center mt-5">
                                <h3 class="mt-2 mb-0 referal-header">Пригласите друзей <br>
                                    и получите 1000 баллов на бонусный счёт </h3>



                            </div>

                        </div>

                    </div>

                    <div class="px-4 mt-1">
                        <p class="referal-description">
                            Отправь друзьям ссылку — после первой оплаты друга вы получите 1000 бонусных баллов, которые можно будет списать при следующей покупке абонемента, а ваш друг получит скидку 1000 ₽.

                        </p>

                    </div>

                </div>


            </div>
        </div>

            <div class="d-none d-md-block">
            <div class="text-center row " style="    margin-top: 48px;">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/referal/ico-1.svg')}}" width="43" height="48">
                <h5 class="referal-title-col">55% учеников</h5>

                <p class="referal-text-col">Школы мяча приглашают друзей</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/referal/ico-2.svg')}}" width="43" height="48">
                    <h5 class="referal-title-col">4000 баллов</h5>

                    <p class="referal-text-col">Получил Иван Ф. за счёт приглашений</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/referal/ico-3.svg')}}" width="43" height="48">
                    <h5 class="referal-title-col">3 друзей</h5>

                    <p class="referal-text-col">В среднем приводит каждый ученик</p>
                </div>

            </div>
            </div>

            <div class="row text-center d-sm-block d-md-none" style="margin-top: 75px;">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('assets/images/referal/ico-1.svg')}}" width="43" height="48">
                            <h5 class="referal-title-col">55% учеников</h5>
                            <p class="referal-text-col">Школы мяча приглашают друзей</p>

                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/referal/ico-2.svg')}}" width="43" height="48">
                            <h5 class="referal-title-col">4000 баллов</h5>

                            <p class="referal-text-col">Получил Иван Ф. за счёт приглашений</p>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-12" style="max-width: 70%;margin-top: 10px;margin-right: 14%;padding: 43px;">
                            <img src="{{asset('assets/images/referal/ico-3.svg')}}" width="43" height="48">
                            <h5 class="referal-title-col">3 друзей</h5>

                            <p class="referal-text-col">В среднем приводит каждый ученик</p>
                        </div>

                    </div>
                </div>


            </div>



            <div class="text-center card referal-card">
                <div class="referal-card-title">Скопируйте ссылку и поделитесь с другом!</div>
                <div class="referal-card-url">https://school-ball.com/</div>

                <div class="d-flex justify-content-center">
                    <button class="btn-desc  waves-effect waves-light">Скопировать ссылку</button>



                </div>
                <div class="row d-flex justify-content-center">
                <div class="text-center referal-social-icons">

                    <a href="https://www.instagram.com/schoolball_industry/"> <img class="referal-social-icon" src="{{asset('assets/images/referal/wp@1x.svg')}}" alt=""></a>
                    <a href="https://www.instagram.com/schoolball_industry/"> <img class="referal-social-icon" src="{{asset('assets/images/referal/tel@1x.svg')}}" alt=""></a>


                    <a href="https://www.instagram.com/schoolball_industry/"> <img class="referal-social-icon" src="{{asset('assets/images/referal/insta@1x.svg')}}" alt=""></a>

                    <a href="https://vk.com/school_ball_industry"><img class="referal-social-icon"  src="{{asset('assets/images/referal/vk.svg')}}" alt=""></a>

                    <a href="https://www.facebook.com/schoolballindustry"><img class="referal-social-icon"  src="{{asset('assets/images/referal/fb.svg')}}" alt=""></a>


                 </div>
                </div>

                <hr class="referal-line">

                <div class="d-none d-md-block">

                <div class="text-center row  " style="margin-bottom: 48px;">
                    <div class="col-md-4">
                        <div class="referal-rectangle">1</div>

                        <p class="referal-text-col">Вы делитесь своей ссылкой любым удобным способом</p>
                    </div>
                    <div class="col-md-4">
                        <div class="referal-rectangle">2</div>


                        <p class="referal-text-col">Друзья по ссылке записываются на вводный урок</p>
                    </div>
                    <div class="col-md-4">
                        <div class="referal-rectangle">3</div>

                        <p class="referal-text-col">Друг оплачивает занятия и вы оба получаете по 2 доп. урока</p>
                    </div>

                </div>
                </div>

                <ul class="list-group list-group-flush d-sm-block d-md-none">
                    <li class="list-group-item-mob">
                        <div class="row">
                            <div class="col-2">
                                <div class="referal-rectangle-mob">1</div>

                            </div>
                            <div class="col-10">


                                <p class="referal-text-mob">Вы делитесь своей ссылкой любым удобным способом</p>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item-mob">
                        <div class="row">
                            <div class="col-2">
                                <div class="referal-rectangle-mob">2</div>

                            </div>
                            <div class="col-10">


                                <p class="referal-text-mob">Друзья по ссылке записываются на вводный урок</p>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item-mob">
                        <div class="row">
                            <div class="col-2">
                                <div class="referal-rectangle-mob">3</div>

                            </div>
                            <div class="col-10">


                                <p class="referal-text-mob">Друг оплачивает занятия и вы оба получаете по 2 доп. урока</p>
                            </div>
                        </div>

                    </li>


                </ul>


            </div>


            <div class="row d-flex justify-content-center ref-history">
                <div class="col-md-10">
                    <div class=" p-3 py-4">
                        <div class="text-center mt-5">
                            <h5 class="mt-2 mb-3 referal-title-history">История приглашений друзей
                               </h5>

                            <span class="ref-count-mob referal-count-history">2</span> <span class="ref-count-mob referal-count-text-history">приглашено</span>
                            <span class="ref-count-mob referal-count-history count-2">2</span> <span class="ref-count-mob referal-count-text-history">начали учиться</span>
                            <span class="ref-count-mob referal-count-history count-3">1000</span> <span class="ref-count-mob referal-count-text-history">заработано баллов</span>




                        </div>

                    </div>

                </div>

    </div>


            <div class="row d-none d-md-block ">

                <table class="table referal-table">
                    <tr>
                        <th scope="col" class="referal-table-col">Константин</th>
                        <th scope="col" class="referal-table-col-2">1000 баллов начислено</th>
                        <th scope="col" class="referal-table-col-3">8 сентября 2022</th>
                    </tr>

                    <tr>
                        <th scope="col" class="referal-table-col">Тома</th>
                        <th scope="col" class="referal-table-col-2">1000 баллов начислено</th>
                        <th scope="col" class="referal-table-col-3">8 сентября 2022</th>
                    </tr>

                    <tr>
                        <th scope="col" class="referal-table-col">Михаил</th>
                        <th scope="col" class="referal-table-col-2">1000 баллов начислено</th>
                        <th scope="col" class="referal-table-col-3">8 сентября 2022</th>
                    </tr>

                    <tr>
                        <th scope="col" class="referal-table-col">Александр</th>
                        <th scope="col" class="referal-table-col-2">1000 баллов начислено</th>
                        <th scope="col" class="referal-table-col-3">8 сентября 2022</th>
                    </tr>

                    <tr>
                        <th scope="col" class="referal-table-col">Ольга</th>
                        <th scope="col" class="referal-table-col-2">1000 баллов начислено</th>
                        <th scope="col" class="referal-table-col-3">8 сентября 2022</th>
                    </tr>

                    <tr>
                        <th scope="col" class="referal-table-col">Артем</th>
                        <th scope="col" class="referal-table-col-2">1000 баллов начислено</th>
                        <th scope="col" class="referal-table-col-3">8 сентября 2022</th>
                    </tr>

                </table>
            </div>


            <div class="  d-sm-block d-md-none " style="margin-bottom: 80px;">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item group-mobile-item">
                        <h3 class="referal-head-table "> Константин</h3>
                        <span class="referal-span">1000 баллов начислено</span> <br>
                        <span class="referal-span">8 сентября 2022</span> <br>

                    </li>
                    <li class="list-group-item group-mobile-item">
                        <h3 class="referal-head-table "> Тома</h3>
                        <span class="referal-span">1000 баллов начислено</span> <br>
                        <span class="referal-span">8 сентября 2022</span> <br>

                    </li>
                    <li class="list-group-item group-mobile-item">
                        <h3 class="referal-head-table "> Михаил</h3>
                        <span class="referal-span">1000 баллов начислено</span> <br>
                        <span class="referal-span">8 сентября 2022</span> <br>

                    </li>
                    <li class="list-group-item group-mobile-item">
                        <h3 class="referal-head-table "> Александр</h3>
                        <span class="referal-span">1000 баллов начислено</span> <br>
                        <span class="referal-span">8 сентября 2022</span> <br>

                    </li>
                    <li class="list-group-item group-mobile-item">
                        <h3 class="referal-head-table "> Ольга</h3>
                        <span class="referal-span">1000 баллов начислено</span> <br>
                        <span class="referal-span">8 сентября 2022</span> <br>

                    </li>
                    <li class="list-group-item group-mobile-item">
                        <h3 class="referal-head-table "> Артем</h3>
                        <span class="referal-span">1000 баллов начислено</span> <br>
                        <span class="referal-span">8 сентября 2022</span> <br>

                    </li>
                </ul>





            </div>





            <form id="home" action="{{ route('home') }}" method="GET" style="display: none;">
      </form>
      <script src="{{ asset('js/vue.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/welcomeVue.js') }}">    </script>
      <script type="text/javascript">
        $('.card-flip').click(function(){
          $(this).toggleClass('flipped');
        });
      </script>
      <script>
        function sendFormDownload() {
          $.ajax({
              type: "POST",
              url: "/sendbackcall/2",
              data: $("#sendform2").serialize(),
              success: function( result ) {
                $("#callback-2-front").addClass("d-none");
                $("#callback-2-done").removeClass("d-none");
                var linkreal = document.getElementById('download-link');
                linkreal.setAttribute('href','https://schoolball.ru/' + result);
                linkreal.setAttribute('download','program.pdf');
                linkreal.click();
              }
          });
        }
      </script>

@endsection
