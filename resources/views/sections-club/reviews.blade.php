<div id="">
    <style>
        @media screen and (min-width: 480px){
        .bg-reviews {
            background-repeat: no-repeat;
            background-position: bottom 55px right -18px;
            /* background-position: right 3em bottom 10px; */
            /* background-position: bottom 10px right; */
            background-position: top 0px right -61px;
            background-image: url(/assets/new-message-3@2x.png);
            background-size: 27% auto;
            /* height: auto; */

            /* width: 336px; */
            /* height: 184px; */
            /* margin: 53px 1px 209px 26px; */
            object-fit: contain;
        }

            .coaches{
                margin-top: 50px;
            }
        }
    </style>

    <div class="secondSection    ">


        <div class="container">

            <div class="d-sm-block d-md-none row d-flex justify-content-center">
                <img src="{{asset('assets/new-message-3@2x.png')}}" class="reviews-img" style=" " alt="">


            </div>


            <div class="row">

                <div class="col-md-8 offset-md-2 text-center">

                    <h3 class="title-desc" style="margin-bottom: 38px !important;">Отзывы родителей учеников, занимающиеся в клубе</h3>

                </div>
            </div>

            <div class="row  bg-reviews">


                <div class="col-md-12 text-center ">
                    <div id="reviews"  style="visibility: hidden;position: relative;top: -100px;"></div>

                    <div class="d-none d-md-block">
                        <div class="row d-flex justify-content-center " style="margin-bottom: 56px;">

                            <div class="col-md-7  ">

                                <div class="rew-card">

                                    <div class="text-center mt-3">

                                        <span class="reviews_count"> 4.7 </span>
                                        <span class=""><img src="{{ asset('assets/Group 19.png') }}"
                                                            class="reviews_img_star" alt=""></span>
                                        <span class="reviews_text_star"> 576 отзывов на Яндекс </span>

                                    </div>

                                </div>


                                <div class="rew-card">
                                    <div class="text-center mt-3">

                                        <span class="reviews__text"> <span style="color: #fec311;">4,8</span> тренерский состав </span>
                                        <span class="reviews__text"> <span style="color: #fec311;">4,6</span> стадионы </span>
                                        <span class="reviews__text"> <span style="color: #fec311;">4,6</span> менеджеры </span>

                                        <?php /*
                                        <select class="custom-select custom-select-lg mb-3 reviews-select">
                                            <option selected="">все отделения</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
 */ ?>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>




                    <!-- mob -->

                    <div class="d-sm-block d-md-none">



                        <div class="row d-flex     d-sm-block d-md-none" style="margin-bottom: 32px;">

                            <div class="col-md-7       ">

                                <div class="rew-card">

                                    <div class=" mt-3   text-left">

                                        <span class="reviews_count"> 4.7 </span>
                                        <span class="text-left"><img src="{{ asset('assets/Group 19.png') }}"
                                                                     class="reviews_img_star" alt=""></span> <br>
                                        <span class="reviews_text_star text-left" style="margin: 0 0 0 0px;"> 576 отзывов на Яндекс </span>

                                    </div>


                                </div>


                                <div class="rew-card">
                                    <div class="mt-3  text-left">

                                        <div style="margin-bottom: 8px"><span class="reviews__text"> <span
                                                    style="color: #fec311;">4,8</span> тренерский состав </span> <br>
                                        </div>
                                        <div style="margin-bottom: 8px"><span class="reviews__text"> <span
                                                    style="color: #fec311;">4,6</span> стадионы </span> <br></div>
                                        <div style="margin-bottom: 8px"><span class="reviews__text"> <span
                                                    style="color: #fec311;">4,6</span> менеджеры </span> <br></div>
                                        <?php /*
                                        <select class="custom-select custom-select-lg mb-3 reviews-select">
                                            <option selected>все отделения</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

 */

                                        ?>
                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>
                    <!-- mob -->


                </div>


                <div class="col-sm-12 col-md-7 thirdSectionDescription">
                    <div class="d-none d-md-block">
                        <div style="    width: 651px;
    margin-right: 0px;
    height: 773px; overflow:hidden;position:relative;"><iframe style="width: 651px; height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/1747362784?comments"></iframe>

                        </div>

                    </div>
                    <?php /*
                    <ul class="news">
                  <li><div class="row mb-48">

                          <div class="col-md-2">
                              <div class=" d-none d-md-block">

                                  <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                       class="rounded-circle reviews-avatar">

                              </div>
                          </div>
                          <div class="col-md-10">

                              <div class="d-sm-block d-md-none">
                                  <div class="card p-3 py-4">

                                      <div class="text-center">

                                          <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                               class="rounded-circle reviews-avatar">

                                      </div>
                                  </div>


                              </div>

                              <h4 class="reviews-author">Татьяна Самарцева</h4>
                              <span class="reviews-author-club">Ребёнок тренируется <u>в клубе «Волна»</u></span>
                              <br>
                              <div class="raiting-space">
                                  <span class="reviews-author-raiting">5,0  </span> <img
                                      src="{{ asset('assets/Group 19.png')  }}" alt=""
                                      style="    width: 80px; margin-top: -3px; ">
                                  <span class="raiting-place">тренерский состав</span> <br>
                                  <span class="reviews-author-raiting">4,6  </span> <img
                                      src="{{ asset('assets/Group 19.png')  }}" alt=""
                                      style="    width: 80px; margin-top: -3px; ">
                                  <span class="raiting-place">стадион</span> <br>
                                  <span class="reviews-author-raiting">5,0  </span> <img
                                      src="{{ asset('assets/Group 19.png')  }}" alt=""
                                      style="    width: 80px; margin-top: -3px; ">
                                  <span class="raiting-place">менеджер</span> <br>


                              </div>

                              <span class="raiting-text"
                              >
                                  Ребенок ходит на занятия с удовольствием. Тренерский состав это дружные отзывчивые ребята с пониманием своего дела. Мы отходили не так много занятий, чтобы сделать полноценный вывод. Спасибо за Вашу работу!

                              </span>


                          </div>


                      </div></li>
                  <li>    <div class="row mb-48">
                        <div class="col-md-2">
                            <div class=" d-none d-md-block">

                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                     class="rounded-circle reviews-avatar">

                            </div>
                        </div>
                        <div class="col-md-10">

                            <div class="d-sm-block d-md-none">
                                <div class="card p-3 py-4">

                                    <div class="text-center">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>


                            </div>

                            <h4 class="reviews-author">Мария Марсел</h4>
                            <span class="reviews-author-club">Ребёнок тренируется в <u>клубе «Флагман»</u></span>                            <br>
                            <div class="raiting-space">
                                <span class="reviews-author-raiting">5,0  </span> <img
                                    src="{{ asset('assets/Group 19.png')  }}" alt=""
                                    style="    width: 80px; margin-top: -3px; ">
                                <span class="raiting-place">тренерский состав</span> <br>
                                <span class="reviews-author-raiting">4,6  </span> <img
                                    src="{{ asset('assets/Group 19.png')  }}" alt=""
                                    style="    width: 80px; margin-top: -3px; ">
                                <span class="raiting-place">стадион</span> <br>
                                <span class="reviews-author-raiting">5,0  </span> <img
                                    src="{{ asset('assets/Group 19.png')  }}" alt=""
                                    style="    width: 80px; margin-top: -3px; ">
                                <span class="raiting-place">менеджер</span> <br>


                            </div>

                            <span class="raiting-text"
                            >
                             Очень нравиться тренер и как проходят тренировки, но очень неудобное для нас время. В выходные посередине дня это очень не удобно. Было бы утром в выходные или в какие-то дни в будни, то было бы супер.

                              </span>


                        </div>


                    </div> </li>
                        <li class="hidden"><div class="row mb-48">

                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Татьяна Самарцева</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется <u>в клубе «Волна»</u></span>
                                    <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                                  Ребенок ходит на занятия с удовольствием. Тренерский состав это дружные отзывчивые ребята с пониманием своего дела. Мы отходили не так много занятий, чтобы сделать полноценный вывод. Спасибо за Вашу работу!

                              </span>


                                </div>


                            </div></li>
                        <li class="hidden"> <div class="row mb-48">
                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Мария Марсел</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется в <u>клубе «Флагман»</u></span>                            <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                             Очень нравиться тренер и как проходят тренировки, но очень неудобное для нас время. В выходные посередине дня это очень не удобно. Было бы утром в выходные или в какие-то дни в будни, то было бы супер.

                              </span>


                                </div>


                            </div></li>
                        <li class="hidden"><div class="row mb-48">

                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Татьяна Самарцева</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется <u>в клубе «Волна»</u></span>
                                    <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                                  Ребенок ходит на занятия с удовольствием. Тренерский состав это дружные отзывчивые ребята с пониманием своего дела. Мы отходили не так много занятий, чтобы сделать полноценный вывод. Спасибо за Вашу работу!

                              </span>


                                </div>


                            </div></li>
                        <li class="hidden"> <div class="row mb-48">
                                <div class="col-md-2">
                                    <div class=" d-none d-md-block">

                                        <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                             class="rounded-circle reviews-avatar">

                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="d-sm-block d-md-none">
                                        <div class="card p-3 py-4">

                                            <div class="text-center">

                                                <img src="{{ asset('assets/group-15@2x.png') }}" width="100"
                                                     class="rounded-circle reviews-avatar">

                                            </div>
                                        </div>


                                    </div>

                                    <h4 class="reviews-author">Мария Марсел</h4>
                                    <span class="reviews-author-club">Ребёнок тренируется в <u>клубе «Флагман»</u></span>                            <br>
                                    <div class="raiting-space">
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">тренерский состав</span> <br>
                                        <span class="reviews-author-raiting">4,6  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">стадион</span> <br>
                                        <span class="reviews-author-raiting">5,0  </span> <img
                                            src="{{ asset('assets/Group 19.png')  }}" alt=""
                                            style="    width: 80px; margin-top: -3px; ">
                                        <span class="raiting-place">менеджер</span> <br>


                                    </div>

                                    <span class="raiting-text"
                                    >
                             Очень нравиться тренер и как проходят тренировки, но очень неудобное для нас время. В выходные посередине дня это очень не удобно. Было бы утром в выходные или в какие-то дни в будни, то было бы супер.

                              </span>


                                </div>


                            </div></li>
                    </ul>
*/ ?>



                        <!-- MOB -->
                    <div class="d-sm-block d-md-none">

                        <div class="reviews-mob" style="">
                            <iframe class="reviews-mob-sec" style="" src="https://yandex.ru/maps-reviews-widget/1747362784?comments"></iframe>

                        </div>
                        <?php /*
                        <div class="">
                            <button type="button"  name="button" class="reviews_button"  onclick="showMore()"
                                    data-animation="bounce" data-target=".bs-example-modal-lg">Еще отзыв
                            </button>
                        </div>
  */ ?>
                    </div>
                    <?php /*
                    <div class=" d-none d-md-block">

                        <div class="col-md-10 offset-2" style="margin-left: 95px;">
                            <button type="button" name="button" class="reviews_button" onclick="showMore()" data-target=".bs-example-modal-lg">Еще отзыв
                            </button>
                        </div>
                    </div>
 */ ?>

                </div>

                <!-- mob consultation -->

                <div class="d-sm-block d-md-none">




                        <div class="container form-block mt-5">



                            <div id="callback-catalog-front2">

                                <div class="row">

                                    <div class="col-md-12 text-center">
                                        <h3 class="title-desc" style="height: auto!important;    margin-top: 0px !important; margin-bottom: 32px !important;">Запишите ребёнка на пробную тренировку</h3>
                                        <h5 class="text-desc " style="height: auto!important;  font-size: 18px;margin-bottom: 0px !important;  line-height: 1.54; ">
                                            Оставьте заявку и мы перезвоним в течение 30 минут.
                                        </h5>


                                    </div>

                                </div>
                                <form id="send_form_catalog2" method="post" class="needs-validation" novalidate>
                                    @csrf

                                    <div class="row" style="margin-top: 40px; ">

                                        <div class="col-md-4 col-xl-4 ">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control phone" id="phone" name="phone"   required>
                                                <label for="phone">Мобильный телефон</label>
                                                <div class="invalid-feedback">
                                                    Поле обязательно для заполнения
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 offset-md-4 text-center">
                                            <button class="btn btn-primary" type="submit" onclick="sendFormCatalog2(event)">Отправить</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h5 class="text-desc " style="font-size: 16px; margin-bottom: 0px !important;  line-height: 1.54; margin-top: 12px;">
                                                Нажимая на кнопку, я даю согласие на обработку своих <a href="{{ asset('assets/doc/sogl-ooo_sm.pdf')}}" target='_blank'>персональных данных</a>
                                            </h5>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="callback-catalog-done2" class="d-none">

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





                </div>

                <!-- mob consultation -->




                <div class=" d-none d-md-block col-md-5   ">


                    <div class="reviewsApplication" style="z-index: 99999 !important;">

                        <div class="row" style="">


                            <div class="">
                                <h3>Запишите ребёнка на пробную тренировку</h3>

                                <div id="callback-2-front">

                                    <form id="sendform2" method="post">

                                        <div class="input-group mb-3">
                                            @csrf
                                            <input type="text" style="    border: 0px solid #d6d6df !important;"  name="phone" class="phone form-control" placeholder="+7 495 800-22-40" aria-describedby="basic-addon2">

                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary"  onclick="sendForm2()"  type="button">Отправить</button>
                                            </div>

                                        </div>
                                    </form>

                                    <p> Оставьте заявку, и мы перезвоним
                                        в течение 30 минут.</p>

                                    <p> Заказывая звонок, вы даёте согласие на обработку персональных данных.</p>

                                </div>

                                <div id="callback-2-done" class="d-none">
                                    <p>Ваша заявка успешно отправлена! <br> В ближайшее время с вами свяжется менеджер!</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>
