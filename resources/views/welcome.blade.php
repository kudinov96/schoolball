@extends('layouts.app')

@section('content')
<script>document.location.href = '/home';</script>
      <div class="topPartsGray d-none d-md-block">
        <div class="container">
          <div class="firstSection">
            <div class="row">
              <div class="col-md-7 firstSectionDescription">
                <div class="row">
                  <div class="col-md-1">
                    <img src="{{ asset('assets/3+.png') }}" alt=""style="height: 40px;">
                  </div>
                  <div class="col-md-5">
                    <img src="{{ asset('assets/PFK_CSKA_2008.png') }}" alt="" style="height: 40px;">
                    <span style="font-family: IBMPlexSans-Bold; color:#303337;font-size: 18px; vertical-align: middle;margin-left: 10px;">ПАРТНЕР ЦСКА</span>
                  </div>

                </div>

                <h3>Детская <br> футбольная школа </h3>
                <h4>Обучаем мальчиков и девочек от 3 до 14 лет,<br> с любым уровнем подготовки</h4>
                <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Пробная тренировка</button>
                <p>К нам присоединилось уже 3050 детей</p>
              </div>
              <div class="col-md-5">
                <img src="{{ asset('assets/Group 29.png') }}" alt="" style="width: 100%;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="topPartsGray d-sm-block d-md-none">
        <div class="container">
          <div class="firstSection">
            <div class="row">
              <div class="col-10 offset-1">
                <img src="{{ asset('assets/Group 29.png') }}" alt="" style="width: 100%;">
              </div>
              <div class="col-12 firstSectionDescription text-center">
                <img src="{{ asset('assets/PFK_CSKA_2008.png') }}" alt="" style="height: 40px;">
                <span style="font-family: IBMPlexSans-Bold; color:#303337;font-size: 18px; vertical-align: middle;margin-left: 10px;">ПАРТНЕР ЦСКА</span>
                <h3>Детская <br> футбольная школа </h3>
                <h4>Обучаем мальчиков и девочек<br> от 3 до 14 лет,<br> с любым уровнем подготовки</h4>
                <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Пробная тренировка</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="secondSection d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/soccer-player.png') }}" alt="">
                <h3>Обучаем детей более 12 лет</h3>
                <h4>3050 учеников достигли высоких результатов</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/Combined Shape 3.png') }}" alt="">
                <h3>Профессиональные тренеры</h3>
                <h4>с опытом обучения детей более 5 лет</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/goal.png') }}" alt="">
                <h3>Футбольная инфраструктура</h3>
                <h4>с современными условиями на оборудованных площадках</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/player.png') }}" alt="">
                <h3>Персональный менеджер</h3>
                <h4>всегда поможет и ответит на интересующие вопросы</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/training.png') }}" alt="">
                <h3>Единая методика обучения</h3>
                <h4>программа составлена опытными тренерами европейского уровня</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/trophy (1).png') }}" alt="">
                <h3>Собственный Чемпионат</h3>
                <h4>яркое, семейное событие для клубов нашей школы</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/team.png') }}" alt="">
                <h3>Просмотры в Академиях</h3>
                <h4>возможность проявить свой талант в ПФК ЦСКА и других Академиях</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/football-field.png') }}" alt="">
                <h3>Более 15 детских клубов</h3>
                <h4>выберите ближайший к своему дому футбольных клуб</h4>
              </div>
            </div>
            <div class="col-md-4">
              <div class="advantage">
                <img src="{{ asset('assets/business.png') }}" alt="">
                <h3>Удобный личный кабинет</h3>
                <h4>вся полезная информация для родителей в одном месте</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="thirdSection" id="lightbox">
        <div class="container">
          <div class="row">
            <div class=" d-sm-block d-md-none col-12 thirdSectionImg">
              <img src="{{ asset('assets/Group 40.png') }}" alt="" @click="lightbox = !lightbox" style="width: 100%;">
            </div>
            <div class="col-sm-12 col-md-7 thirdSectionDescription">
              <h3>ШКОЛА МЯЧА ®</h3>
              <h4 class="d-none d-md-block">Приглашает всех, кто неравнодушен к футболу и увлечён этой динамичной и азартной игрой, или только обратил
                  на неё внимание. <br><br>
                  Запишитесь на бесплатную «пробную тренировку»
                  для знакомства  с нашими тренерами и принципами
                  в обучении.<br><br>
                  Подарите своему ребёнку новое увлечение, яркие эмоции и дух спортивного азарта! Мы относимся  к своему делу
                  с душой и учим этому наших юных спортсменов.
              </h4>
              <h4 class="d-sm-block d-md-none">
                  Подарите своему ребёнку новое увлечение, яркие эмоции и дух спортивного азарта! Мы относимся  к своему делу
                  с душой и учим этому наших юных спортсменов.
              </h4>
            </div>
            <div class=" d-none d-md-block col-md-5 thirdSectionImg">
              <img src="{{ asset('assets/Group 40.png') }}" alt="" @click="lightbox = !lightbox" style="width: 100%;">
              <p>
                Тренеры рассказывают, как проходят занятия,
                а дети делятся своими впечатлениями
              </p>
            </div>
          </div>
        </div>
        <div v-if="lightbox">
          <div class="lightboxBack" >
            <button type="button" name="button" @click="lightbox = !lightbox">X</button>
          </div>
          <div class="iframe">
            <div class="row justify-content-center">
              <div class="col text-center">
                <iframe opacity="1" width="100%" height="555" src="https://www.youtube.com/embed/I5gAalyf4Ts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="fourthSection d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3>Методика подготовки футболистов</h3>
              <h4>Тренировочные программы разработаны специалистами европейского уровня, для каждой возрастной группы подбираются уникальные упражнения, исходя из физических и психологических особенностей детей</h4>
            </div>
            <div class="col-auto center-block  text-center">
              <div class="toggler">
                <div class="row">
                  <div class="col" style="padding:0 8px 0 0;">
                    <div class=" groupTogler" onclick="document.location.href = 'https://schoolball.ru/methods/1';">
                      <h4>3–4 года</h4>
                    </div>
                  </div>
                  <div class="col" style="padding:0 8px 0 0;">
                    <div class="groupTogler" onclick="document.location.href = 'https://schoolball.ru/methods/2';">
                      <h4>5–7 лет</h4>
                    </div>
                  </div>
                  <div class="col" style="padding:0 8px 0 0;">
                    <div class="groupTogler" onclick="document.location.href = 'https://schoolball.ru/methods/3';">
                      <h4>8–10 лет</h4>
                    </div>
                  </div>
                  <div class="col" style="padding:0 8px 0 0;">
                    <div class="groupTogler" onclick="document.location.href = 'https://schoolball.ru/methods/4';">
                      <h4>11–12 лет</h4>
                    </div>
                  </div>
                  <div class="col" style="padding:0 8px 0 0;">
                    <div class="groupTogler" onclick="document.location.href = 'https://schoolball.ru/methods/5';">
                      <h4>13–16 лет</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="kidsSkills">
              <div class="row">
                <div class="col-md-7 kidsSkillsText">
                  <h3>Вам подходит наша школа если:</h3>
                  <p>
                    ✓  Ваш ребёнок хочет увлекаться спортом <br>
                    ✓  Хотите наполнить жизнь ребенка яркими событиями<br>
                    ✓  Устали тратить много времени на дорогу  <br>
                    ✓  Доверяте тренерской команде профессионалов <br>
                    ✓  Планируете инвестировать в будущее своего ребёнка <br>
                    ✓  Ищите современную тренировочную программу подготовки
                  </p>
                  <a data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lgik" style="border: none;background: none;height: 24px;font-family: IBMPlexSans;font-size: 22px;color: #2a5dde;text-align: left;margin-left: 60px;cursor: pointer;">Скачать тренировочную программу на год →</a>
                  <div class="moscow24Interview">
                    <div class="row">
                      <div class="col-md-5">
                        <img src="{{ asset('assets/moscow24.png') }}" alt="">
                      </div>
                      <div class="col-md-7">
                        <h3>Руководитель, Андрей Вершинин,<br> <a href="https://www.m24.ru/audios/Moskva-FM/27072018/137837" target="_blank" style="cursor: pointer; color: #2a5dde;">дал интервью на радио «Москва24»</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <img src="{{ asset('assets/brainstorming__flatline 2.png') }}" alt="">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fifthSection">
        <div class="container">
          <div class="row">
            <div class="fifthSectionImg col-auto center-block  text-center">
              <img src="{{ asset('assets/Group 60.png') }}" style="height: 450px;"alt="">
              <h2>Для будущих чемпионов</h2>
              <h3>Уже с первых занятий ученик погрузится в дружественную атмосферу и станет более дисциплинированным. Его ждут весёлые и интересные тренировки. Мы раскроем потенциал ребёнка, учитывая особенности характера и физические способности.</h3>
              <!-- <button type="button" name="button" onclick="event.preventDefault();document.getElementById('home').submit();">Оставить заявку</button> -->
                <div class="card-body">
                    <div class="text-center">
                        <button type="button" class="btn  waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Оставить заявку</button>
                    </div>
                </div><!--end card-body-->
            </div>
            <div class="w-100"></div>
            <div class="col text-center" style="margin-top: 15px; margin-bottom: 25px;">
              <span>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Shape 2</title>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="ШФ_Стартовая" transform="translate(-543.000000, -5073.000000)">
                          <g id="Group-38" transform="translate(240.000000, 4690.000000)">
                              <g id="Group-37" transform="translate(303.000000, 379.000000)">
                                  <g id="Shape-2" transform="translate(0.000000, 4.000000)">
                                      <polygon id="Path-13" fill="#FEC311" points="2.41348976 14.9554977 13.379088 14.9554977 13.379088 8 15.0044218 8 15.0044218 4.960927 0.86532545 4.960927 0.86532545 8 2.41348976 8"></polygon>
                                      <path d="M14.4,4 L13.4328,4 C13.5376,3.6712 13.6,3.2768 13.6,2.8 C13.6,1.256 12.344,0 10.8,0 C9.5024,0 8.636,1.1856 8.0768,2.468 C7.5256,1.256 6.6152,0 5.2,0 C3.656,0 2.4,1.256 2.4,2.8 C2.4,3.2768 2.4632,3.6712 2.5672,4 L1.6,4 C0.7176,4 0,4.7176 0,5.6 L0,7.2 C0,8.0824 0.7176,8.8 1.6,8.8 L1.6,14.4 C1.6,15.2824 2.3176,16 3.2,16 L7.2,16 L8.8,16 L12.8,16 C13.6824,16 14.4,15.2824 14.4,14.4 L14.4,8.8 C15.2824,8.8 16,8.0824 16,7.2 L16,5.6 C16,4.7176 15.2824,4 14.4,4 Z M10.8,1.6 C11.4616,1.6 12,2.1384 12,2.8 C12,4 11.4992,4 11.2,4 L9.2176,4 C9.6264,2.7392 10.22,1.6 10.8,1.6 Z M4,2.8 C4,2.1384 4.5384,1.6 5.2,1.6 C5.9104,1.6 6.5712,2.82 6.9584,4 L4.8,4 C4.5008,4 4,4 4,2.8 Z M1.6,5.6 L7.2,5.6 L7.2,7.2 L1.6,7.2 L1.6,5.6 Z M3.2,14.4 L3.2,8.8 L7.2,8.8 L7.2,14.4 L3.2,14.4 Z M12.8,14.4 L8.8,14.4 L8.8,8.8 L12.8,8.8 L12.8,14.4 Z M8.8,7.2 L8.8,5.668 C8.804,5.6456 8.8088,5.6224 8.8136,5.6 L14.4,5.6 L14.4008,7.2 L8.8,7.2 Z" id="Shape" fill="#303337" fill-rule="nonzero"></path>
                                  </g>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
              Первое занятие — бесплатно
            </span>
            </div>
          </div>
        </div>
      </div>
      <div class="sixthSection d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Варианты обучения</h3>
              <h4>Школа мяча приглашает детей с различным уровнем подготовки. Мы формируем группы в соответствии с возрастом и навыками юных спортсменов.</h4>

            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
              <div class="trainingVariants" style="" id="IMG_9905">
                  <h3 style="margin-bottom: auto !important;">Групповые тренировки (Любители)</h3>
                  <div class="row">
                    <div class="col-md-5 training_info_block" style="margin-top: 15px;height: 150px;">
                      <h5>Возраст</h5>
                      <h5>Периодичность</h5>
                      <h5>Группа</h5>
                      <h5>Стоимость</h5>
                    </div>
                    <div class="col-md-7 trainingInfo  training_info_block" style="margin-top: 15px;height: 150px;">
                      <h5>от 3 до 14 лет</h5>
                      <h5>до 3 раз в неделю</h5>
                      <h5>до 12 человек</h5>
                      <h4>от 590 ₽</h4>
                    </div>
                    <div class="col-md-6">
                      <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                    </div>
                    <div class="col-md-6 text-center">
                      <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="trainingVariants" id="IMG_9901">
                <h3 style="margin-bottom: auto !important;">Групповые тренировки (Учащиеся ДЮСШ)</h3>
                <div class="row">
                  <div class="col-md-5 training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-md-7 trainingInfo training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>от 5 до 14 лет</h5>
                    <h5>до 4 раз в неделю</h5>
                    <h5>до 8 человек</h5>
                    <h4>от 750 ₽</h4>
                  </div>
                  <div class="col-md-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="trainingVariants text-left" id="IMG_9903">
                <h3 style="margin-bottom: auto !important;">Групповые тренировки (Вратари)</h3>
                <div class="row">
                  <div class="col-md-5 training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-md-7 trainingInfo training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>от 5 до 14 лет</h5>
                    <h5>до 4 раз в неделю</h5>
                    <h5>до 4 человек</h5>
                    <h4>от 750 ₽</h4>
                  </div>
                  <div class="col-md-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="trainingVariants" id="IMG_9902">
                <h3 style="margin-bottom: auto !important;">Индивидуальные тренировки (Премиум)</h3>
                <div class="row">
                  <div class="col-md-5 training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-md-7 trainingInfo training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>от 5 до 14 лет</h5>
                    <h5>до 7 раз в неделю</h5>
                    <h5>1 на 1 с тренером</h5>
                    <h4>от 2490 ₽</h4>
                  </div>
                  <div class="col-md-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="trainingVariants" id="IMG_9904">
                <h3 style="margin-bottom: auto !important;">Футбольный лагерь <br>(Лето / Зима)</h3>
                <div class="row">
                  <div class="col-md-5 training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Формат</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-md-7 trainingInfo training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>до 5 раз в неделю</h5>
                    <h5>до 30 человек</h5>
                    <h5>2 недели</h5>
                    <h4> от 4500 ₽/день</h4>
                  </div>
                  <div class="col-md-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="trainingVariants" id="IMG_9906">
                <h3 style="margin-bottom: auto !important;">Чемпионат</h3>
                <div class="row">
                  <div class="col-md-5 training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Формат</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-md-7 trainingInfo training_info_block" style="margin-top: 15px;height: 150px;">
                    <h5>От 3 до 14</h5>
                    <h5>до 1 раза в месяц</h5>
                    <h5>Сутки</h5>
                    <h4> от 1500 ₽/тур</h4>
                  </div>
                  <div class="col-md-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sixthSection d-sm-block d-md-none">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Варианты обучения</h3>
            </div>
          </div>
          <div class="row mobile-advantage-slider">
            <div class="col-12">
              <div class="mobTrainingVariants" style="">
                  <h3 style="margin-bottom: auto !important;">Групповые тренировки (Любители)</h3>
                  <div class="row">
                    <div class="col-5" style="margin-top: 15px;height: 150px;">
                      <h5>Возраст</h5>
                      <h5>Периодичность</h5>
                      <h5>Группа</h5>
                      <h5>Стоимость</h5>
                    </div>
                    <div class="col-7 trainingInfo" style="margin-top: 15px;height: 150px;">
                      <h5>от 3 до 14 лет</h5>
                      <h5>до 3 раз в неделю</h5>
                      <h5>до 12 человек</h5>
                      <h4>от 590 ₽</h4>
                    </div>
                    <div class="col-6">
                      <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                    </div>
                    <div class="col-6 text-center">
                      <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mobTrainingVariants">
                <h3 style="margin-bottom: auto !important;">Групповые тренировки (Учащиеся ДЮСШ)</h3>
                <div class="row">
                  <div class="col-5" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-7 trainingInfo" style="margin-top: 15px;height: 150px;">
                    <h5>от 5 до 14 лет</h5>
                    <h5>до 4 раз в неделю</h5>
                    <h5>до 8 человек</h5>
                    <h4>от 750 ₽</h4>
                  </div>
                  <div class="col-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mobTrainingVariants text-left">
                <h3 style="margin-bottom: auto !important;">Групповые тренировки (Вратари)</h3>
                <div class="row">
                  <div class="col-5" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-7 trainingInfo" style="margin-top: 15px;height: 150px;">
                    <h5>от 5 до 14 лет</h5>
                    <h5>до 4 раз в неделю</h5>
                    <h5>до 4 человек</h5>
                    <h4>от 750 ₽</h4>
                  </div>
                  <div class="col-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mobTrainingVariants">
                <h3 style="margin-bottom: auto !important;">Индивидуальные тренировки (Премиум)</h3>
                <div class="row">
                  <div class="col-5" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-7 trainingInfo" style="margin-top: 15px;height: 150px;">
                    <h5>от 5 до 14 лет</h5>
                    <h5>до 7 раз в неделю</h5>
                    <h5>1 на 1 с тренером</h5>
                    <h4>от 2490 ₽</h4>
                  </div>
                  <div class="col-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mobTrainingVariants">
                <h3 style="margin-bottom: auto !important;">Футбольный лагерь <br>(Лето / Зима)</h3>
                <div class="row">
                  <div class="col-5" style="margin-top: 15px;height: 150px;">
                    <h5>Периодичность</h5>
                    <h5>Группа</h5>
                    <h5>Формат</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-7 trainingInfo" style="margin-top: 15px;height: 150px;">
                    <h5>до 5 раз в неделю</h5>
                    <h5>до 30 человек</h5>
                    <h5>2 недели</h5>
                    <h4> от 4500 ₽/день</h4>
                  </div>
                  <div class="col-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mobTrainingVariants">
                <h3 style="margin-bottom: auto !important;">Чемпионат</h3>
                <div class="row">
                  <div class="col-5" style="margin-top: 15px;height: 150px;">
                    <h5>Возраст</h5>
                    <h5>Периодичность</h5>
                    <h5>Формат</h5>
                    <h5>Стоимость</h5>
                  </div>
                  <div class="col-7 trainingInfo" style="margin-top: 15px;height: 150px;">
                    <h5>От 3 до 14</h5>
                    <h5>до 1 раза в месяц</h5>
                    <h5>Сутки</h5>
                    <h4> от 1500 ₽/тур</h4>
                  </div>
                  <div class="col-6">
                    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Записаться</button>
                  </div>
                  <div class="col-6 text-center">
                    <img src="{{ asset('assets/winner__flatline (1).png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="seventhSection" id="coaches">
        <div class="container">
          <div class="row">
            <div class="mobSeventhSection col-md-12 text-center">
              <h3>Тренерский состав</h3>
              <h4>Занятия проводят профессиональные тренеры, специализирующиеся на работе с детьми</h4>
            </div>
          </div>
          <div class="coachs-slider slider d-none d-md-block">
            @foreach ($allcoachs as $coach)
              <div class="coach-card-sl card-flip">
                <div class="front">
                  <div class="coachCard">
                    <div class="coachImg">
                      <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}" alt="">
                    </div>
                    <div class="coachInfo">
                      <h3>{{ $coach->surname}} {{ $coach->name}}</h3>
                      <h4>Тренерский опыт более {{ $coach->seniority}}@if ($coach->seniority == 1) года@else лет@endif</h4>
                      <div class="buttonYellow-mini text-center">
                        <button class="" onclick="document.querySelector('#flip-toggle').classList.toggle('hover');" class="sexyButton">Подробнее</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="back">
                  <div class="coachCard backside">
                    <div class="coachInfo backside">
                      <h3>{{ $coach->surname}} <br> {{ $coach->name}} {{ $coach->secondname}}</h3>
                      <hr>
                      <h4>Тренерский опыт</h4>
                      <p> более {{ $coach->seniority}}@if ($coach->seniority == 1) года@else лет@endif</p>
                      <h4>Образование</h4>
                      <p> {{ $coach->education }}</p>
                      <h4>Карьера</h4>
                      <p>{{ $coach->career }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

            			<!-- front content -->
          </div>
          <div class="mobile-coachs-slider slider d-sm-block d-md-none">
            @foreach ($allcoachs as $coach)
              <div class="coach-card-sl card-flip">
                <div class="front">
                  <div class="coachCard">
                    <div class="coachImg">
                      <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}" alt="">
                    </div>
                    <div class="coachInfo">
                      <h3>{{ $coach->surname}} {{ $coach->name}}</h3>
                      <h4>Тренерский опыт более {{ $coach->seniority}}@if ($coach->seniority == 1) года@else лет@endif</h4>
                      <div class="buttonYellow-mini text-center">
                        <button class="" onclick="document.querySelector('#flip-toggle').classList.toggle('hover');" class="sexyButton">Подробнее</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="back">
                  <div class="coachCard backside">
                    <div class="coachInfo backside">
                      <h3>{{ $coach->surname}} <br> {{ $coach->name}} {{ $coach->secondname}}</h3>
                      <hr>
                      <h4>Тренерский опыт</h4>
                      <p> более {{ $coach->seniority}}@if ($coach->seniority == 1) года@else лет@endif</p>
                      <h4>Образование</h4>
                      <p> {{ $coach->education }}</p>
                      <h4>Карьера</h4>
                      <p>{{ $coach->career }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

            			<!-- front content -->
          </div>

          <!-- <div class="col becomeCoach text-center">
            <h4>Стать тренером →</h4>
          </div> -->
        </div>
      </div>
      <div class="eighthSection">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Успехи наших учеников</h3>
            </div>
            <div class="w-100"></div>
          </div>
            <div class="apprentice-slider slider d-none d-md-block">
              @foreach ($arrupstudents as $upstudents)
                <div class="apprentice-card-sl" style="margin: 15px 0;">
                <div class="apprenticeCard">
                  <div class="front">
                    <div class="apprenticeImg">
                      <img src="@if ($upstudents->photo_sb == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $upstudents->photo_sb) }} @endif" alt="">
                    </div>
                    <div class="apprenticeInfo">
                      <h5>{{ $upstudents->surname }} {{ $upstudents->name }}</h5>
                      <h6><b>"Школа мяча"</b> → {{ $upstudents->club_up }}</h6>
                    </div>
                  </div>
                  <div class="back">
                    <div class="apprenticeImg">
                      <img src="@if ($upstudents->photo_up == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $upstudents->photo_up) }} @endif" alt="">
                    </div>
                    <div class="apprenticeInfo">
                      <h5>{{ $upstudents->surname }} {{ $upstudents->name }}</h5>
                      <h6>"Школа мяча" → <b>{{ $upstudents->club_up }}</b></h6>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>


            <div class="mobile-apprentice-slider slider d-sm-block d-md-none">
              @foreach ($arrupstudents as $upstudents)
                <div class="apprentice-card-sl" style="margin: 15px 0;">
                <div class="apprenticeCard">
                  <div class="front">
                    <div class="apprenticeImg">
                      <img src="@if ($upstudents->photo_sb == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $upstudents->photo_sb) }} @endif" alt="">
                    </div>
                    <div class="apprenticeInfo">
                      <h5>{{ $upstudents->surname }} {{ $upstudents->name }}</h5>
                      <h6><b>"Школа мяча"</b> → {{ $upstudents->club_up }}</h6>
                    </div>
                  </div>
                  <div class="back">
                    <div class="apprenticeImg">
                      <img src="@if ($upstudents->photo_up == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $upstudents->photo_up) }} @endif" alt="">
                    </div>
                    <div class="apprenticeInfo">
                      <h5>{{ $upstudents->surname }} {{ $upstudents->name }}</h5>
                      <h6>"Школа мяча" → <b>{{ $upstudents->club_up }}</b></h6>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            </div>
        </div>
      </div>
      <div class="ninethSection">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2>Отзывы родителей о "Школе мяча"</h2>

            </div>
            <div class="w-100"></div>
            <div class="col-md-8 offset-2 d-none d-md-block">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h3><span style="font-size: 22px;color:#fec311;">4.7 </span><img src="{{ asset('assets/Group 19.png') }}" alt="" style="margin-top: -5px; margin-right: 20px;"></h3>
                </div>
                <div class="col-md-4 text-center">
                  <h3><span style="font-size: 18px;color:#fec311;margin-right: 5px;">4.8 </span><span style="font-size: 18px;color:#303337;">тренеры </span></h3>
                </div>
                <div class="col-md-4 text-center">
                  <h3><span style="font-size: 18px;color:#fec311;margin-right: 5px;">4.6 </span><span style="font-size: 18px;color:#303337;">площадки</span></h3>
                </div>
                <div class="col-md-4 text-center">
                  <h3><span style="font-size: 18px;color:#fec311;margin-right: 5px;">4.6 </span><span style="font-size: 18px;color:#303337;">менеджеры </span></h3>
                </div>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="@auth col-md-6 @else col-md-12 @endauth d-none d-md-block" style="padding-top: 20px;">
              <div class="review-slider slider">
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/amishina.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Елена Мишина</h3>
                        <h4>Ребенок тренируется в клубе "Вершина"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.7 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.8 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Мой сын пошел на футбол первый раз в вашу секцию и влюбился в этот вид спорта! Огромное спасибо тренерскому составу - они настоящие волшебники)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/emakarova.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Екатерина Маркова</h3>
                        <h4>Ребенок тренируется в клубе "Флагман"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.6 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.9 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Огромное спасибо вашей организации за данную услугу) ребенок занимается с удовольствием и всегда ждет новой тренировки. Из пожеланий хотелось быы еще добавить тренировки по будням</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/yastepanov.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Ярослав Степанов</h3>
                        <h4>Ребенок тренируется в клубе "Молот"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.2 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.7 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Попробовали разные секции и школы, но в Школе мяча ребенку понравилось больше всего! Будем ходить системно, большое спасибо менеджерам и тренерам за любовь к своей работе))</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/avolosunova.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Анастасия Волосунова</h3>
                        <h4>Ребенок тренируется в клубе "Крылья"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.9 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.3 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Мой малыш ходит на занятия с удовольствием, считаю что это главный критерий оценки вашей работы) спасибо!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/itazina.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Ирина Тазина</h3>
                        <h4>Ребенок тренируется в клубе "Джокер"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.7 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.8 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.6 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Занимаемся на Молодежной, очень удобное время и дни тренировок! Ходим уже второй сезон и все очень нравится! Очень удобное расположение, 2 минуты от дома))</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @auth
              <div class="col-md-5 offset-1 d-none d-md-block">
                <div class="text-center">
                  <img src="{{ asset('assets/new_message 3.png') }}" alt="">
                </div>
                <div class="FreeTry">
                  <h4>Оставьте отзыв о школе!</h4>
                  <!-- <h5>Оставьте заявку, мы свяжемся с вами в течение 15 минут и договоримся о встрече</h5>
                  <div class="telephoneCall">
                  </div>
                  <h6>Только для звонка. Без спама.</h6> -->
                  <button type="button" name="button">Отправить отзыв</button>
                </div>
              </div>
            @endauth
            <div class="col-12 d-sm-block d-md-none" style="padding-top: 20px;">
              <div class="mobile-review-slider slider">
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/amishina.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Елена Мишина</h3>
                        <h4>Ребенок тренируется в клубе "Вершина"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.7 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.8 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Мой сын пошел на футбол первый раз в вашу секцию и влюбился в этот вид спорта! Огромное спасибо тренерскому составу - они настоящие волшебники)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/emakarova.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Екатерина Маркова</h3>
                        <h4>Ребенок тренируется в клубе "Флагман"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.6 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.9 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Огромное спасибо вашей организации за данную услугу) ребенок занимается с удовольствием и всегда ждет новой тренировки. Из пожеланий хотелось быы еще добавить тренировки по будням</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/yastepanov.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Ярослав Степанов</h3>
                        <h4>Ребенок тренируется в клубе "Молот"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.2 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.7 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Попробовали разные секции и школы, но в Школе мяча ребенку понравилось больше всего! Будем ходить системно, большое спасибо менеджерам и тренерам за любовь к своей работе))</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/avolosunova.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Анастасия Волосунова</h3>
                        <h4>Ребенок тренируется в клубе "Крылья"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">5.0 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.9 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.3 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Мой малыш ходит на занятия с удовольствием, считаю что это главный критерий оценки вашей работы) спасибо!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviewCard-area">
                  <div class="reviewCard">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/images/comment/itazina.jpg') }}" alt="">
                      </div>
                      <div class="col-md-10 text-left">
                        <h3>Ирина Тазина</h3>
                        <h4>Ребенок тренируется в клубе "Джокер"</h4>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.7 </span><span style="font-size: 15px;color:#303337;">тренеры </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.8 </span><span style="font-size: 15px;color:#303337;">площадки </span></h3>
                        <h5><span style="font-size: 15px;color:#fec311;margin-right: 5px;">4.6 </span><span style="font-size: 15px;color:#303337;">менеджеры</span></h3>
                        <p>Занимаемся на Молодежной, очень удобное время и дни тренировок! Ходим уже второй сезон и все очень нравится! Очень удобное расположение, 2 минуты от дома))</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div id="map" class="tenthSection">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>15 клубов нашей сети</h3>
            </div>
            <div class="w-100"></div>
            <div class="col text-center">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A04c78a19b0ff6891399f3098873636bd13645c6818ec74d95e696809fde82b0d&amp;source=constructor" width="900" height="500" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="eleventhSection d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Новости школы</h3>
            </div>
            <div class="w-100"></div>
            @foreach ($lastnews as $news)
            @php $arr = explode("-", $news->date); $date = $arr[2].'.'.$arr[1].'.'.$arr[0]; @endphp
            <div class="col-md-4">
              <a href="news/{{ $news->id }}">
                <div class="newsCard front-newsCard">
                  <img src="@if ($news->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $news->photo) }} @endif" alt="">
                  <h4>{{ $news->name }}</h4>
                  <h5>{{ $date }}</h5>
                </div>
              </a>
            </div>
            @endforeach
          </div>
          <div class="w-100"></div>
          <div class="col text-center">
            <button type="button" name="button" onclick="document.location.href = '{{ route('news') }}';">Все новости</button>
          </div>

        </div>
      </div>
      <div class="eleventhSection d-sm-block d-md-none">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Новости школы</h3>
            </div>
          </div>
          <div class="row mobile-advantage-slider">
            @foreach ($lastnews as $news)
            @php $arr = explode("-", $news->date); $date = $arr[2].'.'.$arr[1].'.'.$arr[0]; @endphp
            <div class="col-12">
              <a href="news/{{ $news->id }}">
                <div class="newsCard front-newsCard">
                  <img src="@if ($news->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $news->photo) }} @endif" alt="">
                  <h4>{{ $news->name }}</h4>
                  <h5>{{ $date }}</h5>
                </div>
              </a>
            </div>
            @endforeach
          </div>
          <div class="w-100"></div>
          <div class="col text-center">
            <button type="button" name="button" onclick="document.location.href = '{{ route('news') }}';">Все новости</button>
          </div>

        </div>
      </div>
      <div class="theLastSection">
        <div class="container" id="text">
          <div class="accordion" id="accordionExample-faq" style="margin: 30px 0;">
              <div class="card shadow-none border mb-1">
                  <div class="card-header" id="headingOne">
                  <h5 class="my-0">
                      <button class="btn btn-link ml-4" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Наши преимущества
                      </button>
                  </h5>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample-faq">
                  <div class="card-body">
                    <ul>
                      <li>филиалы в разных районах Москвы;</li>
                      <li>просторные площадки с современным покрытием;</li>
                      <li>профессиональные тренеры;</li>
                      <li>уникальная методика обучения;</li>
                      <li>ежемесячные турниры;</li>
                      <li>возможность научиться играть на профессиональном и любительском уровне;</li>
                      <li>формирование у ребенка командного духа и мотивации;</li>
                      <li>набор в детскую секцию футбола онлайн;</li>
                      <li>группы для детей разного возраста.</li>
                    </ul>
                    Занимаясь в "Школе мяча", ваш ребенок станет более организованным, выносливым, скоординированным, целеустремленным. Мы занимаемся не только отработкой упражнений, но и формируем в детях личностные качества, необходимые успешному человеку. Индивидуальный подход к каждому воспитаннику позволяет раскрыть его таланты, способствует гармоничному развитию.
                  </div>
                  </div>
              </div>
              <div class="card shadow-none border mb-1">
                  <div class="card-header" id="headingTwo">
                  <h5 class="my-0">
                      <button class="btn btn-link collapsed ml-4 align-self-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Кому подойдет наша детская футбольная школа
                      </button>
                  </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample-faq">
                  <div class="card-body">
                    Мы набираем детей с различным уровнем подготовки. Для получения высоких результатов мы формируем группы в соответствии с возрастом и навыками юных спортсменов. Это позволяет сделать занятия футболом максимально продуктивными и увлекательными. У нас есть любительские группы, тренировки на базе ДЮСШ, а также индивидуальные занятия, позволяющие добиться успеха в профессиональном спорте. Если ваш ребенок не планирует делать спортивную карьеру, он может заниматься в любительской    группе, повышать выносливость, укреплять мышцы и получить положительные эмоции от игры.
                    Наша спортивная школа по футболу подходит всем, кто увлечен этой динамичной, азартной игрой. Вы можете записаться на пробную тренировку, ближе познакомиться с нашими тренерами и методикой обучения. Мы уверены, что вашему ребенку понравится занятие, и он захочет регулярно посещать тренировки.
                  </div>
                  </div>
              </div>
              <div class="card shadow-none border mb-1">
                  <div class="card-header" id="headingThree">
                  <h5 class="my-0">
                      <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Где можно записаться на футбол в Москве
                      </button>
                  </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample-faq">
                  <div class="card-body">
                    Если вы хотите записать ребенка на тренировки по футболу, вы можете лично подъехать в один из наших филиалов. Но для удобства и экономии времени мы реализовали возможность покупки абонемента онлайн. На сайте вы можете ознакомиться с расписанием занятий и записаться на бесплатную пробную тренировку. Также вы можете связаться с тренерами и получить профессиональную консультацию.
                    Футбол для детей — это лучше проведение досуга, гармоничное физическое и психическое развитие, возможность добиться результатов в большом спорте. Мы делаем тренировки по футболу в Москве доступными каждому.
                  </div>
                  </div>
              </div>
          </div>

        </div>
      </div>


      <div class="modal fade bs-example-modal-lgik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0" id="myLargeModalLabel"style="font-family: 'IBMPlexSans-Bold';">Скачать тренировочную программу на год</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40;width: unset;height: unset;background: unset;border: unset;font-size: 1.5rem;line-height: 1;">×</button>
            </div>
            <div class="modal-body text-center">
              <div class="row">
                <div class="col-md-12">
                  <svg width="200px" height="200px" viewBox="0 0 80 56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <defs>
                          <rect id="path-1" x="0" y="0" width="1216" height="72" rx="8"></rect>
                          <filter x="-3.0%" y="-51.4%" width="106.1%" height="202.8%" filterUnits="objectBoundingBox" id="filter-2">
                              <feMorphology radius="1" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"></feMorphology>
                              <feOffset dx="0" dy="0" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
                              <feGaussianBlur stdDeviation="12" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                              <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"></feComposite>
                              <feColorMatrix values="0 0 0 0 0.323977461   0 0 0 0 0.381127872   0 0 0 0 0.466853487  0 0 0 0.15 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
                          </filter>
                      </defs>
                      <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Menu" transform="translate(-32.000000, -56.000000)">
                              <g id="Group-76">
                                  <g id="Group-45" transform="translate(0.000000, 48.000000)">
                                      <g id="Rectangle" opacity="0.600000024">
                                          <use fill="black" fill-opacity="1" filter="url(#filter-2)" xlink:href="#path-1"></use>
                                          <rect stroke="#FFFFFF" stroke-width="1" fill="#FFFFFF" fill-rule="evenodd" x="-0.5" y="-0.5" width="1217" height="73" rx="8"></rect>
                                      </g>
                                      <g id="SchoolBall_Logo_Rus-3" transform="translate(32.000000, 8.000000)">
                                          <g id="SchoolBall_Logo_Rus-2">
                                              <g id="SchoolBall_Logo_Rus">
                                                  <path d="M76.9129961,28.8800676 L3.06957198,28.8800676 C1.44607004,28.8800676 0.124980545,30.2190197 0.124980545,31.8651042 L0.124980545,44.6633915 C0.124980545,46.3086873 1.44607004,47.6477972 3.06957198,47.6477972 L76.9129961,47.6477972 C78.5368093,47.6477972 79.8578988,46.3086873 79.8578988,44.6633915 L79.8578988,31.8651042 C79.8578988,30.2190197 78.5368093,28.8800676 76.9129961,28.8800676" id="Fill-3" fill="#FFFFFE"></path>
                                                  <path d="M39.991284,0.0900732394 C24.7950195,0.0900732394 12.4322179,12.6203493 12.4322179,28.0225577 C12.4322179,43.4238197 24.7950195,55.9540958 39.991284,55.9540958 C55.1875486,55.9540958 67.5506615,43.4238197 67.5506615,28.0225577 C67.5506615,12.6203493 55.1875486,0.0900732394 39.991284,0.0900732394" id="Fill-4" fill="#FFFFFE"></path>
                                                  <path d="M25.4898054,13.8178028 C25.5634241,13.7376676 25.6406226,13.6594254 25.7184436,13.5807099 C28.6759533,10.5832113 32.4,8.62242254 36.4992996,7.89931268 L36.9148638,7.82580282 L36.6375097,8.14823662 C36.2084047,8.6484507 35.8720623,9.07468169 35.6381323,9.41494085 C35.5382101,9.56196056 35.4014008,9.76292958 35.3047471,9.97983099 L35.2729961,10.0516056 L35.1971984,10.0662761 C35.15393,10.0752676 30.8289494,10.9584901 26.9277821,14.281262 L26.8731518,14.3274817 L25.3067704,14.0173521 L25.4898054,13.8178028 Z M40.8779767,13.9766535 L40.9582879,14.0340732 L39.52607,20.9575662 L39.4552529,20.9891155 C35.5094163,22.7276394 33.0269261,24.3243493 32.1427237,24.9300958 L32.065214,24.9835718 L26.5909728,21.7887324 L26.5985992,21.6928225 C26.6641245,20.8805859 27.0138521,16.7534648 27.5021012,15.245093 L27.5150195,15.2053408 L27.5466148,15.1780507 C31.174786,11.9851042 35.6610117,11.1113465 35.7056809,11.1025127 L35.8387549,11.0952563 L35.8983658,11.1201803 C36.4037354,11.3626366 38.9827237,12.6198761 40.8779767,13.9766535 Z M42.0936965,14.1526986 C43.498677,13.629138 47.1842802,13.2753127 49.1402335,13.1486423 L49.1878599,13.1454873 L49.2284825,13.1710423 C52.8908949,15.4660958 54.8018677,18.817893 54.820856,18.8511775 L54.8470039,18.8980282 L54.8387549,18.9500845 C54.6731518,19.9968901 54.0747082,23.5651155 53.3077043,25.5514592 L53.2792218,25.6254423 L46.5797665,27.2590648 L40.5696498,21.168 L42.0158755,14.1809352 L42.0936965,14.1526986 Z M49.1047471,9.79021972 C51.0017121,10.7616225 52.7322957,12.0324282 54.2485603,13.5693521 C55.7802335,15.1211042 57.0459144,16.8962254 58.010428,18.8451831 L58.1794553,19.1867042 L55.7273152,18.2798197 L55.7000778,18.2336 C55.6790661,18.1979493 53.5637354,14.6451831 49.8311284,12.2783549 L49.789572,12.2523268 L48.7523735,9.60991549 L49.1047471,9.79021972 Z M20.5070817,33.2906592 C19.8263035,30.6968338 19.6544747,27.9804394 20.0152529,25.2739831 L20.0761089,24.821093 L21.0810895,26.6597859 L21.0761089,26.7078986 C20.825214,29.0188845 21.0954086,31.4554366 21.4205447,33.2906592 L22.5055253,33.2906592 C22.1715175,31.4715268 21.8835798,29.0272451 22.140856,26.7556958 L22.1598444,26.6970141 C22.8719066,25.455707 24.5634241,23.0145803 25.8692607,22.6612282 L25.9290272,22.6452958 L31.6233463,25.9668056 L33.1310506,33.2906592 L44.0555642,33.2906592 L46.7670039,28.3218028 L53.4561868,26.6924394 L53.5153307,26.7717859 C54.56,28.1758873 56.3905058,30.8705127 56.6205447,32.064969 L56.627393,32.099831 L56.6245914,32.1105577 C56.6227237,32.2326535 56.6040467,32.6416901 56.4490272,33.2906592 L57.5431907,33.2906592 C57.6038911,33.0007211 57.6396887,32.7588958 57.6602335,32.5711775 L57.6706615,32.4744789 L57.7612451,32.4435606 C58.2239689,32.2872338 58.9228016,31.9446085 59.6270817,31.2030423 L59.9596887,30.8533183 L59.8824903,31.3322366 C59.7758755,31.9955606 59.6347082,32.6481577 59.4672374,33.2906592 L60.5662257,33.2906592 C60.9433463,31.7643042 61.1626459,30.1882592 61.2032685,28.5819268 C61.2062257,28.5066817 61.2079377,28.4320676 61.2079377,28.3561915 C61.2521401,25.4850479 60.7453696,22.6855211 59.700856,20.0330141 L59.629572,19.8505014 C58.5657588,17.2115606 57.0084047,14.841893 55.0009339,12.8071211 C52.9953307,10.7747155 50.6578988,9.19677746 48.0521401,8.11747606 L47.9038132,8.05579718 C45.3845914,7.03454648 42.7256031,6.51587606 40.0015564,6.51587606 C39.4555642,6.51587606 38.9031907,6.53780282 38.3592218,6.58055211 L38.3511284,6.5811831 C38.3494163,6.5811831 38.3478599,6.5811831 38.3461479,6.5811831 L38.3142412,6.58402254 L38.3101946,6.58228732 C38.2518288,6.58528451 38.1943969,6.59049014 38.1397665,6.59711549 C33.1702724,7.03454648 28.4975875,9.23936901 24.9772763,12.8071211 C24.6073152,13.181769 24.2476265,13.5740845 23.9086381,13.9717634 C23.8775097,14.0086761 23.8627237,14.0257127 23.8488716,14.043538 C21.6714397,16.6212732 20.1157977,19.7254085 19.3450584,23.0257803 C19.3270039,23.095031 19.311751,23.1608113 19.2964981,23.2284845 L19.2930739,23.2504113 C18.5508171,26.5791775 18.6163424,30.0294085 19.4225681,33.2906592 L20.5070817,33.2906592 L20.5070817,33.2906592 Z" id="Fill-5" fill="#1A1919"></path>
                                                  <path d="M39.991284,1.15233803 C25.3729183,1.15233803 13.4801556,13.206062 13.4801556,28.0225577 C13.4801556,42.8382648 25.3729183,54.8921465 39.991284,54.8921465 C54.6096498,54.8921465 66.5025681,42.8382648 66.5025681,28.0225577 C66.5025681,13.206062 54.6096498,1.15233803 39.991284,1.15233803 Z M39.991284,2.21444507 C54.0541634,2.21444507 65.4546304,13.7684282 65.4546304,28.0225577 C65.4546304,42.2751099 54.0541634,53.8297239 39.991284,53.8297239 C25.9284047,53.8297239 14.528249,42.2751099 14.528249,28.0225577 C14.528249,13.7684282 25.9284047,2.21444507 39.991284,2.21444507 L39.991284,2.21444507 Z" id="Fill-6" fill="#1A1919"></path>
                                                  <path d="M3.06957198,46.0544 C2.31268482,46.0544 1.69696498,45.4301972 1.69696498,44.6633915 L1.69696498,31.8651042 C1.69696498,31.0975099 2.31268482,30.4734648 3.06957198,30.4734648 L76.9129961,30.4734648 C77.6700389,30.4734648 78.2859144,31.0975099 78.2859144,31.8651042 L78.2859144,44.6633915 C78.2859144,45.4301972 77.6700389,46.0544 76.9129961,46.0544 L3.06957198,46.0544" id="Fill-7" fill="#F0A936"></path>
                                                  <path d="M76.9129961,29.9423324 L3.06957198,29.9423324 C2.02381323,29.9423324 1.17291829,30.8047324 1.17291829,31.8651042 L1.17291829,44.6633915 C1.17291829,45.7231324 2.02381323,46.5855324 3.06957198,46.5855324 L76.9129961,46.5855324 C77.9590661,46.5855324 78.8099611,45.7231324 78.8099611,44.6633915 L78.8099611,31.8651042 C78.8099611,30.8047324 77.9590661,29.9423324 76.9129961,29.9423324 Z M76.9129961,31.0044394 C77.3800778,31.0044394 77.7618677,31.3915493 77.7618677,31.8651042 L77.7618677,44.6633915 C77.7618677,45.1363155 77.3800778,45.5234254 76.9129961,45.5234254 L3.06957198,45.5234254 C2.60280156,45.5234254 2.22101167,45.1363155 2.22101167,44.6633915 L2.22101167,31.8651042 C2.22101167,31.3915493 2.60280156,31.0044394 3.06957198,31.0044394 L76.9129961,31.0044394 L76.9129961,31.0044394 Z" id="Fill-8" fill="#1A1919"></path>
                                                  <polyline id="Fill-9" fill="#1A1919" points="6.14303502 41.5573634 6.14303502 34.9709746 7.86038911 34.9709746 7.86038911 40.005138 9.53182879 40.005138 9.53182879 34.9709746 11.248716 34.9709746 11.248716 40.005138 12.9203113 40.005138 12.9203113 34.9709746 14.637821 34.9709746 14.637821 41.5573634 6.14303502 41.5573634"></polyline>
                                                  <polyline id="Fill-10" fill="#1A1919" points="15.8607004 41.5573634 15.8607004 34.9709746 17.5780545 34.9709746 17.5780545 37.464631 18.3953307 37.464631 19.8711284 34.9709746 21.7743191 34.9709746 19.7321401 38.1787493 21.867393 41.5573634 19.9642023 41.5573634 18.3856809 39.0170141 17.5780545 39.0170141 17.5780545 41.5573634 15.8607004 41.5573634"></polyline>
                                                  <path d="M25.2449805,36.4291831 C24.1218677,36.4291831 23.5277821,37.2103437 23.5277821,38.2640901 C23.5277821,39.3175211 24.1218677,40.0986817 25.2449805,40.0986817 C26.368249,40.0986817 26.9623346,39.3175211 26.9623346,38.2640901 C26.9623346,37.2103437 26.368249,36.4291831 25.2449805,36.4291831 Z M25.2449805,34.8293183 C27.5662257,34.8293183 28.72607,36.4291831 28.72607,38.2640901 C28.72607,40.0986817 27.5662257,41.6985465 25.2449805,41.6985465 C22.9242023,41.6985465 21.7638911,40.0986817 21.7638911,38.2640901 C21.7638911,36.4291831 22.9242023,34.8293183 25.2449805,34.8293183 L25.2449805,34.8293183 Z" id="Fill-11" fill="#1A1919"></path>
                                                  <path d="M35.2700389,34.9709746 L35.2700389,41.5573634 L33.5520623,41.5573634 L33.5520623,36.5233577 L32.1505058,36.5233577 C31.9461479,39.2238197 31.621323,41.6327662 29.7554864,41.6420732 C29.51393,41.6420732 29.2445136,41.6042141 28.9565759,41.5105127 L28.9565759,39.9955155 C29.0776654,40.0329014 29.2261479,40.051831 29.402179,40.0329014 C30.4513619,39.9202704 30.4329961,36.9655211 30.5814786,34.9709746 L35.2700389,34.9709746" id="Fill-12" fill="#1A1919"></path>
                                                  <path d="M38.5357198,39.1107155 L40.2066926,39.1107155 L39.538677,37.2103437 C39.4828016,37.050231 39.4269261,36.8901183 39.3716732,36.5422873 C39.3154864,36.8901183 39.2596109,37.050231 39.204358,37.2103437 L38.5357198,39.1107155 Z M35.8896498,41.5573634 L38.4429572,34.9709746 L40.2997665,34.9709746 L42.8530739,41.5573634 L41.0893385,41.5573634 L40.7175097,40.5219155 L38.025214,40.5219155 L37.6540078,41.5573634 L35.8896498,41.5573634 L35.8896498,41.5573634 Z" id="Fill-13" fill="#1A1919"></path>
                                                  <polyline id="Fill-14" fill="#1A1919" points="53.2258366 34.9709746 53.2258366 41.5573634 51.5083268 41.5573634 51.5083268 38.0568113 50.1159533 40.2207775 49.1319844 40.2207775 47.7392996 38.0471887 47.7392996 41.5573634 46.0214786 41.5573634 46.0214786 34.9709746 47.6462257 34.9709746 49.6238132 38.0568113 51.6014008 34.9709746 53.2258366 34.9709746"></polyline>
                                                  <path d="M57.0113619,38.0004958 L58.0141634,38.0004958 L58.0141634,36.4758761 L57.0113619,36.4758761 C56.4264591,36.4758761 56.092607,36.7303211 56.092607,37.238107 C56.092607,37.7466817 56.4264591,38.0004958 57.0113619,38.0004958 Z M53.9203113,41.5573634 L55.6740856,39.1764958 C54.894786,38.8848225 54.3288716,38.2737127 54.3288716,37.238107 C54.3288716,35.5915493 55.5819455,34.9709746 56.9926848,34.9709746 L59.7321401,34.9709746 L59.7321401,41.5573634 L58.0141634,41.5573634 L58.0141634,39.4116958 L57.4107393,39.4116958 L55.8787549,41.5573634 L53.9203113,41.5573634 L53.9203113,41.5573634 Z" id="Fill-15" fill="#1A1919"></path>
                                                  <path d="M64.5388327,41.5573634 L64.5388327,39.3175211 C64.0096498,39.478107 63.4994553,39.5623437 63.0351751,39.5623437 C61.6238132,39.5623437 60.6675486,38.828507 60.6675486,37.2849577 L60.6675486,34.9709746 L62.3849027,34.9709746 L62.3849027,37.1914141 C62.3849027,37.7277521 62.8585214,37.991031 63.4715953,37.991031 C63.8054475,37.991031 64.1774319,37.9162592 64.5388327,37.765769 L64.5388327,34.9709746 L66.256965,34.9709746 L66.256965,41.5573634 L64.5388327,41.5573634" id="Fill-16" fill="#1A1919"></path>
                                                  <path d="M69.5232685,39.1107155 L71.1940856,39.1107155 L70.5256031,37.2103437 C70.4701946,37.050231 70.4138521,36.8901183 70.3584436,36.5422873 C70.3021012,36.8901183 70.2466926,37.050231 70.1911284,37.2103437 L69.5232685,39.1107155 Z M66.8770428,41.5573634 L69.4297276,34.9709746 L71.286537,34.9709746 L73.8398444,41.5573634 L72.0759533,41.5573634 L71.7045914,40.5219155 L69.0119844,40.5219155 L68.6414008,41.5573634 L66.8770428,41.5573634 L66.8770428,41.5573634 Z" id="Fill-17" fill="#1A1919"></path>
                                                  <polyline id="Fill-18" fill="#1A1919" points="39.7543969 3.96353803 39.7094163 4.05077183 39.6155642 4.06733521 39.0719066 4.15030986 39.4681712 4.54735775 39.5336965 4.61376901 39.5171984 4.70936338 39.4272374 5.26873239 39.9056809 5.00734648 39.9915953 4.96238873 40.0771984 5.00734648 40.555642 5.26873239 40.4655253 4.70936338 40.4494942 4.61376901 40.5147082 4.54735775 40.9111284 4.15030986 40.3673152 4.06733521 40.273463 4.05077183 40.2284825 3.96353803 39.9915953 3.46206197 39.7543969 3.96353803"></polyline>
                                                  <polyline id="Fill-19" fill="#1A1919" points="28.8933852 6.75328451 28.8929183 6.8520338 28.8168093 6.91008451 28.3718288 7.23661972 28.9033463 7.4055662 28.9915953 7.43396056 29.0203891 7.52655775 29.193463 8.06526197 29.5005447 7.61063662 29.5559533 7.53065915 29.6530739 7.53113239 30.1964202 7.54075493 29.863035 7.08549859 29.8057588 7.00851831 29.8333074 6.91891831 30.0057588 6.38131831 29.4852918 6.56036056 29.3945525 6.58938592 29.3151751 6.53307042 28.8776654 6.19754366 28.8933852 6.75328451"></polyline>
                                                  <polyline id="Fill-20" fill="#1A1919" points="20.5050584 14.281262 20.5492607 14.368969 20.5080156 14.4562028 20.2597665 14.9534197 20.8088716 14.8562479 20.9000778 14.8407887 20.9676265 14.9092507 21.3651362 15.3078761 21.4323735 14.7612845 21.4457588 14.6641127 21.5316732 14.6197859 22.0188327 14.3754366 21.5168872 14.1258817 21.4308171 14.0837634 21.4150973 13.9913239 21.3252918 13.4335324 20.9433463 13.8348394 20.8761089 13.9031437 20.7796109 13.8894197 20.2392218 13.7950873 20.5050584 14.281262"></polyline>
                                                  <polyline id="Fill-21" fill="#1A1919" points="16.4572763 24.8703099 16.5361868 24.9277296 16.5388327 25.0237972 16.5431907 25.5815887 16.9870817 25.2395944 17.061323 25.1834366 17.1523735 25.2129352 17.6859144 25.3823549 17.4985214 24.8655775 17.4663035 24.773138 17.5224903 24.6936338 17.8449805 24.2500507 17.2859144 24.2615662 17.1906615 24.2645634 17.134786 24.1899493 16.8026459 23.7357972 16.6446693 24.2699268 16.6157198 24.3615775 16.5238911 24.3943887 16.0007782 24.5614423 16.4572763 24.8703099"></polyline>
                                                  <polyline id="Fill-22" fill="#1A1919" points="51.1055253 6.19754366 50.6680156 6.53307042 50.5884825 6.58938592 50.4978988 6.56036056 49.9768093 6.38131831 50.1492607 6.91891831 50.1774319 7.00851831 50.12 7.08549859 49.7867704 7.54075493 50.3299611 7.53113239 50.4264591 7.53065915 50.4828016 7.61063662 50.7897276 8.06526197 50.9623346 7.52655775 50.9914397 7.43396056 51.0792218 7.4055662 51.6113619 7.23661972 51.1657588 6.91008451 51.0896498 6.8520338 51.0891829 6.75328451 51.1055253 6.19754366"></polyline>
                                                  <polyline id="Fill-23" fill="#1A1919" points="59.7436576 13.7950873 59.2032685 13.8894197 59.1067704 13.9031437 59.0393774 13.8348394 58.6575875 13.4335324 58.5677821 13.9913239 58.5519066 14.0837634 58.4661479 14.1258817 57.9640467 14.3754366 58.4512062 14.6197859 58.5371206 14.6641127 58.5506615 14.7612845 58.6177432 15.3078761 59.0152529 14.9092507 59.0826459 14.8407887 59.1738521 14.8562479 59.7231128 14.9534197 59.4748638 14.4562028 59.4336187 14.368969 59.477821 14.281262 59.7436576 13.7950873"></polyline>
                                                  <polyline id="Fill-24" fill="#1A1919" points="63.9821012 24.5614423 63.4589883 24.3943887 63.3671595 24.3615775 63.3380545 24.2699268 63.1803891 23.7357972 62.8480934 24.1899493 62.7922179 24.2645634 62.696965 24.2615662 62.1377432 24.2500507 62.4603891 24.6936338 62.5165759 24.773138 62.484358 24.8655775 62.296965 25.3823549 62.8306615 25.2129352 62.9215564 25.1834366 62.9957977 25.2395944 63.4396887 25.5815887 63.4440467 25.0237972 63.4466926 24.9277296 63.5256031 24.8703099 63.9821012 24.5614423"></polyline>
                                                  <path d="M33.7590661,50.1988732 C34.1280934,49.8556169 34.3410117,49.5669408 34.3410117,49.1086873 C34.3410117,48.4792789 33.8994553,48.0886986 33.1877043,48.0886986 C32.8578988,48.0886986 32.5262257,48.1656789 32.2789105,48.2991324 L32.2099611,48.3363606 L32.4456031,48.9552 L32.5344747,48.9037746 C32.6941634,48.8111775 32.913463,48.754231 33.1067704,48.754231 C33.3316732,48.754231 33.5993774,48.8141746 33.5993774,49.1004845 C33.5993774,49.3304789 33.5064591,49.4987944 33.2319066,49.7666479 C32.8871595,50.0998085 32.5856809,50.3515718 32.3101946,50.5378704 L32.2708171,50.5645296 L32.2708171,51.0623775 L34.3878599,51.0623775 L34.3878599,50.4050479 L33.5123735,50.4050479 C33.5929961,50.3444732 33.6754864,50.2771155 33.7590661,50.1988732" id="Fill-25" fill="#1A1919"></path>
                                                  <path d="M37.6916732,50.444169 C37.2287938,50.444169 36.892607,50.0890817 36.892607,49.5995944 C36.892607,49.1099493 37.2287938,48.754231 37.6916732,48.754231 C38.1547082,48.754231 38.4902724,49.1099493 38.4902724,49.5995944 C38.4902724,50.0890817 38.1547082,50.444169 37.6916732,50.444169 Z M37.6916732,48.0886986 C36.8136965,48.0886986 36.1511284,48.7382986 36.1511284,49.5995944 C36.1511284,50.4602592 36.8136965,51.1098592 37.6916732,51.1098592 C38.5699611,51.1098592 39.2323735,50.4602592 39.2323735,49.5995944 C39.2323735,48.7382986 38.5699611,48.0886986 37.6916732,48.0886986 L37.6916732,48.0886986 Z" id="Fill-26" fill="#1A1919"></path>
                                                  <path d="M42.4210117,50.444169 C41.9582879,50.444169 41.6224125,50.0890817 41.6224125,49.5995944 C41.6224125,49.1099493 41.9582879,48.754231 42.4210117,48.754231 C42.8837354,48.754231 43.2199222,49.1099493 43.2199222,49.5995944 C43.2199222,50.0890817 42.8837354,50.444169 42.4210117,50.444169 Z M42.4210117,48.0886986 C41.5424125,48.0886986 40.8804669,48.7382986 40.8804669,49.5995944 C40.8804669,50.4602592 41.5424125,51.1098592 42.4210117,51.1098592 C43.298677,51.1098592 43.9612451,50.4602592 43.9612451,49.5995944 C43.9612451,48.7382986 43.298677,48.0886986 42.4210117,48.0886986 L42.4210117,48.0886986 Z" id="Fill-27" fill="#1A1919"></path>
                                                  <polyline id="Fill-28" fill="#1A1919" points="45.6678599 48.1360225 45.6678599 48.7933521 46.9361868 48.7933521 45.9906615 51.0623775 46.7833463 51.0623775 47.76607 48.620462 47.772607 48.1360225 45.6678599 48.1360225"></polyline>
                                                  <path d="M74.8412451,32.6517859 C74.1543969,32.6517859 73.4592996,33.1103549 73.4592996,33.9869521 C73.4592996,34.863707 74.1543969,35.3222761 74.8412451,35.3222761 C75.5262257,35.3222761 76.2194553,34.863707 76.2194553,33.9869521 C76.2194553,33.1103549 75.5262257,32.6517859 74.8412451,32.6517859 Z M74.8412451,35.637769 C73.9998444,35.637769 73.1480156,35.0706704 73.1480156,33.9869521 C73.1480156,32.9033915 73.9998444,32.336293 74.8412451,32.336293 C75.6807782,32.336293 76.5307393,32.9033915 76.5307393,33.9869521 C76.5307393,35.0706704 75.6807782,35.637769 74.8412451,35.637769 L74.8412451,35.637769 Z" id="Fill-29" fill="#1A1919"></path>
                                                  <path d="M74.9263813,33.925431 L74.5985992,33.925431 L74.5985992,33.5357972 L74.9263813,33.5357972 C75.0396887,33.5357972 75.193463,33.556462 75.193463,33.7326648 C75.193463,33.9050817 75.0396887,33.925431 74.9263813,33.925431 Z M75.2703502,34.2043268 C75.4566537,34.1470648 75.6063813,33.9869521 75.6063813,33.7162592 C75.6063813,33.3143211 75.2703502,33.1666704 74.9749416,33.1666704 L74.2101167,33.1666704 L74.2101167,34.7704789 L74.5985992,34.7704789 L74.5985992,34.2454986 L74.8333074,34.2454986 C74.8454475,34.2454986 74.8575875,34.2454986 74.8697276,34.2454986 L75.2582101,34.7704789 L75.6992996,34.7704789 L75.2703502,34.2043268 L75.2703502,34.2043268 Z" id="Fill-30" fill="#1A1919"></path>
                                              </g>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </g>
                </div>
              </div>
              <div class="col-md-12">
                <div id="callback-2-front">
                  <form id="sendform2" method="post">
                    @csrf
                    <div class="row">
                      <label for="name" class="col-md-4 col-form-label-new text-md-right">Ваше имя:</label>
                      <div class="col-md-6">
                        <input type="text" name="name" value="" class="form-control-new">
                      </div>
                    </div>
                    <div class="row">
                      <label for="phone" class="col-md-4 col-form-label-new text-md-right">Телефон:</label>
                      <div class="col-md-6">
                        <input type="text" name="phone" value="" class="form-control-new">
                      </div>
                    </div>
                    <div class="row">
                      <label for="age" class="col-md-4 col-form-label-new text-md-right">Возрастная группа:</label>
                      <div class="col-md-6">
                        <select class="form-control-new" name="age" style="margin-bottom: .5rem;">
                          <option value="3-4 года">3-4 года</option>
                          <option value="5-7 лет">5-7 лет</option>
                          <option value="8-12 лет">8-12 лет</option>
                          <option value="11-12 лет">11-12 лет</option>
                          <option value="13-16 лет">13-16 лет</option>
                        </select>
                      </div>
                    </div>
                  </form>
                  <div class="modal-footer text-center" >
                    <button type="submit" class="btn btn-primary waves-effect waves-light" style="margin: 0 auto; color: #54420a; background-color: #fede11; border: solid 1px #fede11; box-shadow: none;" onclick="sendFormDownload()">Скачать</button>
                  </div>
                </div>
                <div id="callback-2-done" class="d-none">
                    <div class="row">
                      <div class="col-md-12">
                        <h4>Если загрузка не произошла автоматически, вы можете кликнуть по <a id="download-link" href="">ссылке</a>. <br> Для получения дополнительных сведений о работе школы, в ближайшее время с вами свяжется менеджер!</h4>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.modal-dialog -->





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
