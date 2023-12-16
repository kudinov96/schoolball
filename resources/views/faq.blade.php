@extends('layouts.app')

<div class="topPartsGrayForAuth">
</div>

<div class="topOfPage">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center AuthH3" style="margin-bottom: 20px;">
        <h3>FAQ</h3>
      </div>
      <div class="col-10 text-center">
        <img src="{{ asset('assets/marketing__flatline.png') }}" alt="" style="height: 250px;padding-top: 50px;">
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-top: 40px;">
  <div class="row">
    <div class="col-12">
      <div class="">
          <div class="card-body">
              <h4 class="mt-0 header-title" style="text-align: center;font-family: IBMPlexSans-Bold;margin-bottom: 30px;">Ответы на часто задаваемые вопросы</h4>
              <div class="accordion" id="accordionExample-faq">
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingOne">
                      <h5 class="my-0">
                          <button class="btn btn-link ml-4" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            С какого возраста можно отдавать ребёнка в вашу школу? 
                          </button>
                      </h5>
                      </div>

                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Мы начинаем обучать детей от 3-х лет.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwo">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4 align-self-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Нужно ли проходить просмотр, чтобы попасть в вашу школу? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample-faq">
                      <div class="card-body">
                          Нет. Мы обучаем детей различных уровней подготовки. После первого (пробного) занятия, тренер выявляет текущий уровень навыков ребенка и определяет его в соответствующую группу.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThree">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Как проходит первая (пробная) тренировка? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        На первом (пробном) занятии тренер знакомит нового ученика с группой и уделяет ему повышенное внимание. После окончания занятия, тренер общается с родителями и консультирует их по текущему уровню развития ребёнка (даёт рекомендации).
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFour">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Как делятся дети в группе? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        В рамках каждого отделения дети поделены на группы по возрасту и уровню подготовки. Каждую группу ведёт отдельный тренер. Если в группу приходит новый ребёнок без начальных навыков игры в футбол, то в эту группу вызывается тренер-помощник и уделяет повышенное внимание данному ученику, объясняет основы обращения с мячом и перемещений.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFive">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Какие навыки получит мой ребенок, занимаясь в "Школе мяча"? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Наши тренеры, помимо обучения футбольным приёмам, развивают в учениках такие качества как: уважение к старшим и партнерам по команде, честность, доброту, ответственность, дисциплину, креативность и память. Занимаясь в футбольной секции, ребёнок всегда будет иметь преимущества перед другими детьми, за счёт уверенности в себе и умению быстро принимать решения.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingSix">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Могут ли родители присутствовать на занятиях? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Родители могут присутствовать на всех занятиях во всех отделениях нашей школы. После окончания тренировки, родители могут задать интересующие вопросы тренерскому составу.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingSeven">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              В какой одежде и обуви ребенку будет удобно заниматься? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Необходимо подбирать спортивную одежду в зависимости от места проведения (зал или улица). При занятиях в зале, наиболее удобной формой будет футболка и шорты. Обувь должна быть с эластичной подошвой и хорошо сгибаться у пальцев. Шнурки или липучки должны максимально плотно фиксировать стопу.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingEight">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              Нужно ли приносить с собой мяч? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Нет. Мы предоставляем ученикам все необходимые аксессуары и элементы инвентаря (мячи и прочее), которые позволяют качественно проводить тренировочные занятия.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingNine">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              Какого размера тренировочные площадки? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Каждое отделение "Школы мяча" отвечает всем стандартам качества и позволяет проводить эффективные групповые занятия по футболу. Мы открываем площадки, размер которых не менее чем 30м х 25м. Для нас важно, чтобы ученики могли в комфортных условиях обучаться всем элементам игры. Все площадки позволяют параллельно тренировать 2-3 группы.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              Есть ли раздевалки на площадках? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Во всех тренировочных отделениях «Школы мяча» есть комфортабельные раздевалки и туалеты.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingEleven">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              Когда начинают проявляться первые результаты от занятий в секции? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Каждый ученик имеет свои уникальные особенности и возможности, позволяющие ему воспринимать информацию и обучаться. Многое зависит от наследственности ребёнка и его предрасположенности к спорту (генетический фактор). В среднем, при систематических посещениях занятий, заметный скачок мастерства происходит через 4 месяца.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingEleven2">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseEleven2" aria-expanded="false" aria-controls="collapseEleven2">
                              В какие дни можно прийти на первое (пробное) занятие? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseEleven2" class="collapse" aria-labelledby="headingEleven2" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        На пробное занятие можно прийти в установленный день. Расписание работы всех отделений можно посмотреть на сайте в разделе ОТДЕЛЕНИЯ. Предварительно необходимо связаться с менеджером, чтобы он предупредил тренерский состав.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwelve">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                              Какая продолжительность занятий? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Все зависит от вида тренировки. Продолжительность стандартной групповой тренировки - 60 минут.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirteen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                              Можно ли пропускать занятия и есть ли переносы (заморозки) тренировок? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да, можно переносить (замораживать) тренировочные занятия. Для этого необходимо приобретать абонементы с опцией «заморозки». В случае, если ребёнок пропустил занятие в рамках абонемента, он может посетить пропущенные занятия в выходной день в центральном отделении школы (на Киевской). Подробности необходимо проговаривать с персональным менеджером.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourteen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                              Как оплачивать занятия? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Оплаты всех абонементов и других услуг производятся в Личном кабинете безналичным способом. "Школа мяча" не работает с наличными денежными средствами.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFifteen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                              Сколько человек занимается в группе? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        В среднем в группе занимаются от 6 до 10 человек.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingSixteen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                              Можно ли начать занятия в середине года? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Тренировочный годовой цикл построен так, что все футбольные элементы отрабатываются повторно. Поэтому, новый ученик сможет изучить все темы.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingSeventeen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                              Опасны ли занятия для ребёнка? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Нет. Все тренировочные конспекты разработаны с учётом покрытия площадки, пространства и определенного количества детей. Каждое упражнение выполняется под чутким руководством специалистов "Школы мяча", что позволяет избегать опасных столкновений и травм учеников.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingEighteen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                              Какой уровень подготовки у детей, занимающихся в группах? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Мы работаем с детьми двух уровней подготовки: 1. Дети любители. Это дошкольники и школьники, которые занимаются в наших тренировочных отделениях несколько раз в неделю; 2. Дети, занимающиеся в различных ДЮСШ. Они стремятся стать профессиональными футболистами и дополнительно развивают у нас техническое мастерство.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingNineteen">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                              По какой программе занимаются дети? И есть ли методика? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Для каждой возрастной группы разработана уникальная система подготовки, с учётом возрастных особенностей детей и задач. Наша методика основана на лучшем опыте мировых футбольных академий и собственных многолетних наработках. Все отделения работают по единым стандартам качества. Подробнее о принципах обучения можно узнать на сайте в разделе МЕТОДИКА.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwenty">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                              Сколько тренеров ведёт одну группу? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        У каждой группы учеников есть основной тренер. Если в группу записываются более 10 учеников, то добавляется второй специалист для качественного проведения занятий и внимания к каждому участнику группы.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentyone">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">
                              Чем индивидуальные тренировки отличаются от групповых и что лучше подойдёт для моего ребёнка? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentyone" class="collapse" aria-labelledby="headingTwentyone" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Если ребёнок никогда не занимался в спортивной секции, то ему рекомендуется начинать занятия в группе. В группе ребенок чувствует себя частью команды и учится взаимодействовать с партнерами. На групповых занятиях ребёнок развивается комплексно, изучая в течение года все футбольные приемы и элементы. Индивидуальные тренировки полезны тем детям, которые играют в ДЮСШ и хотят дополнительно развивать конкретные приемы.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentytwo">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                              Какая стоимость тренировок? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentytwo" class="collapse" aria-labelledby="headingTwentytwo" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Мы проводим различные виды тренировок, которые отличаются по цене. Стоимость всех услуг "Школы мяча" можно узнать в Личном кабинете после регистрации или у персонального менеджера.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentythree">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">
                              Какие есть виды абонементов? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentythree" class="collapse" aria-labelledby="headingTwentythree" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Стандартный (рекомендуемый) абонемент рассчитан на 3 месяца и включает в себя 36 занятий (3 раза в неделю). Все варианты абонементов можно посмотреть в Личном кабинете после регистрации.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentyfour">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour">
                              Как сказывается на тренировочном процессе малое количество учеников в группе? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentyfour" class="collapse" aria-labelledby="headingTwentyfour" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Положительно. Если в группе мало детей, то занятие становится более индивидуальным и тренер может уделить больше внимания каждому ученику.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentyfive">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentyfive" aria-expanded="false" aria-controls="collapseTwentyfive">
                              По какому расписанию проходят тренировки? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentyfive" class="collapse" aria-labelledby="headingTwentyfive" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Каждое отделение школы работает по своему графику. Расписание занятий в отделениях можно прочитать на сайте в разделе ОТДЕЛЕНИЯ или узнать у менеджера.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentysix">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentysix" aria-expanded="false" aria-controls="collapseTwentysix">
                              Где проходят занятия летом? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentysix" class="collapse" aria-labelledby="headingTwentysix" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Практически все отделения "Школы мяча" имеют зал и площадку на улице. Поэтому, в тёплую погоду мы переходим из зала на улицу. В летний период организовываются тренировочные лагеря в Москве и других городах.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentyseven">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">
                              Можно ли заниматься девочкам? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentyseven" class="collapse" aria-labelledby="headingTwentyseven" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. На первых этапах обучения (до 8 лет) девочки и мальчики занимаются в одной группе. Также мы отдельно тренируем женские группы.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentyeight">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentyeight" aria-expanded="false" aria-controls="collapseTwentyeight">
                              Помогут ли моему ребенку попасть в детско-юношескую спортивную школу? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentyeight" class="collapse" aria-labelledby="headingTwentyeight" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Если ученик активно проявляет себя в группе и прогрессирует, то при желании родителей, мы помогаем попробовать свои силы в футбольных академиях.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingTwentynine">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">
                              Предоставляются ли скидки, если занимаются двое или более детей? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseTwentynine" class="collapse" aria-labelledby="headingTwentynine" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Для многодетных семей предоставляются скидки. Подробнее можно узнать у менеджера.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirty">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
                              Какие тренеры работают с детьми? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirty" class="collapse" aria-labelledby="headingThirty" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Все тренеры "Школы мяча" имеют профессиональную квалификацию, которая позволяет обучать детей. Подробнее о каждом специалисте можно прочитать в разделе ТРЕНЕРЫ на сайте.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtyone">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtyone" aria-expanded="false" aria-controls="collapseThirtyone">
                              Как влияет на качество тренировочного процесса, то что тренер молодой? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtyone" class="collapse" aria-labelledby="headingThirtyone" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Во-первых, даже самый молодой специалист «Школы мяча» имеет все необходимые знания и навыки для проведения качественного тренировочного процесса. Во-вторых, возраст тренера не имеет значения при футбольной подготовке детей, особенно младшей возрастной группы (3-7 лет). Наоборот, молодые и энергичные тренеры способны активно участвовать в упражнениях на протяжении всего занятия. Молодые тренеры передают свой позитив и энергетику ученикам, что благоприятно сказывается на мотивации и прогрессе детей.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtytwo">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtytwo" aria-expanded="false" aria-controls="collapseThirtytwo">
                              Что такое Чемпионат "Школы мяча" и по какому принципу на него вызываются дети? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtytwo" class="collapse" aria-labelledby="headingThirtytwo" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Чемпионат проводится ежемесячно (или 1 раз в 2 месяца) в большом футбольном манеже в центре города. Тренерский состав отбирает самых активных детей и приглашает на игровой тур. Подробнее о чемпионате можно узнать на сайте в разделе ЧЕМПИОНАТ.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtythree">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtythree" aria-expanded="false" aria-controls="collapseThirtythree">
                              Как можно получить форму "Школы мяча"? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtythree" class="collapse" aria-labelledby="headingThirtythree" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Несколько раз в году мы проводим акцию и дарим форму бесплатно при покупке абонемента. Для покупки необходимо связаться с менеджером. Форма дарится в подарок при покупке абонемента на 3 месяца. А также форму можно купить отдельно.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtyfour">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtyfour" aria-expanded="false" aria-controls="collapseThirtyfour">
                              Что такое "Дневник футболиста"? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtyfour" class="collapse" aria-labelledby="headingThirtyfour" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Это дневник, в который проставляются оценки за каждое занятие, а также вклеиваются тематические бонусные наклейки. Дневник отлично мотивирует детей продолжать занятия и активно проявлять себя в упражнениях, чтобы получать призы. Для родителей это средство контроля развития ребёнка во всех компонентах игры. Дневник предназначен для учеников от 3-х до 8 лет.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtyfive">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtyfive" aria-expanded="false" aria-controls="collapseThirtyfive">
                              Нужно ли предоставлять медицинские справки?
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtyfive" class="collapse" aria-labelledby="headingThirtyfive" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Перед началом занятий, необходимо пройти медицинский осмотр и получить допуск к занятиям в футбольной секции. Обо всех заболеваниях и недомоганиях ребёнка необходимо сообщать тренерскому составу.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtysix">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtysix" aria-expanded="false" aria-controls="collapseThirtysix">
                              Можно ли начинать заниматься футболом с 10-12 лет? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtysix" class="collapse" aria-labelledby="headingThirtysix" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Мы обучаем детей разных возрастов и уровней подготовки. Если ребёнок никогда не занимался футболом, он может начать формировать фундамент навыков в группе новичков. Подобрать группу по уровню ребёнка вам поможет менеджер.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtyseven">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtyseven" aria-expanded="false" aria-controls="collapseThirtyseven">
                              Получают ли дети оценки и домашние задания после занятий? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtyseven" class="collapse" aria-labelledby="headingThirtyseven" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. После каждой тренировки дети получают две оценки: за дисциплину и исполнение приемов. А также тренеры консультируют родителей и дают персональные домашние задания.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtyeight">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtyeight" aria-expanded="false" aria-controls="collapseThirtyeight">
                              Можно ли совмещать занятия в "Школе мяча" с другими секциями? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtyeight" class="collapse" aria-labelledby="headingThirtyeight" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Для того чтобы ребёнок полностью раскрыл свой футбольный потенциал, рекомендуется разностороннее развитие. Например, параллельно со "Школой мяча" посещать плавание, карате или акробатику - все эти секции отлично можно совмещать с футболом.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingThirtynine">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThirtynine" aria-expanded="false" aria-controls="collapseThirtynine">
                              Какие документы нужно предоставить для того, чтобы начать заниматься в группе? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseThirtynine" class="collapse" aria-labelledby="headingThirtynine" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Самое главное - это пройти медицинский осмотр и получить разрешение (справку) заниматься футболом. Больше никаких документов не требуется. Для некоторых площадок необходимо оформить пропуск на родителя и ребёнка. Этот вопрос уточняется у менеджера.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourty">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourty" aria-expanded="false" aria-controls="collapseFourty">
                              Часто ли меняются тренеры и как это сказывается на качестве занятий? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourty" class="collapse" aria-labelledby="headingFourty" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        В течение тренировочного сезона (года) с группой могут работать различные тренеры. Смена ведущих тренеров необходима для поддержания концентрации и дисциплины детей на занятиях. Порой дети привыкают к одному тренеру и снижают требования к себе. Получение опыта работы с разными специалистами положительно влияет на формирование личности ребёнка, а также стимулирует учеников проявлять свои лучшие качества перед новым наставником. При смене ведущего тренера программа обучения не нарушается, а продолжается в рамках годового плана.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourtyone">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourtyone" aria-expanded="false" aria-controls="collapseFourtyone">
                              Есть ли у «Школы мяча» собственная детско-юношеская спортивная школа? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourtyone" class="collapse" aria-labelledby="headingFourtyone" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Мы сотрудничаем с ведущими футбольными академиями Москвы и организовываем просмотры для тех учеников, которые прогрессируют и хотят повышать свой уровень.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourtytwo">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourtytwo" aria-expanded="false" aria-controls="collapseFourtytwo">
                              Можно ли у вас заниматься взрослым игрокам? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourtytwo" class="collapse" aria-labelledby="headingFourtytwo" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да. Мы проводим групповые тренировки для взрослых игроков. И ещё мы обслуживаем профессиональных футболистов и помогаем им отрабатывать сложные технические приёмы.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourtythree">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourtythree" aria-expanded="false" aria-controls="collapseFourtythree">
                              Есть ли в вашей школе система соревнований или матчей? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourtythree" class="collapse" aria-labelledby="headingFourtythree" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да, в нашей школе создан формат внутренних турниров, а также проводится масштабный чемпионат. Он проводится каждый месяц и в нем могут принять участие все ученики из всех отделений. На каждом игровом туре чемпионата дети получают ценные призы и зарабатывают себе индивидуальный рейтинг. Чемпионат позволяет детям применять наработанные приемы в официальных матчах.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourtyfour">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourtyfour" aria-expanded="false" aria-controls="collapseFourtyfour">
                              Каких успехов добились ученики, которые занимаются(лись) в вашей школе? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourtyfour" class="collapse" aria-labelledby="headingFourtyfour" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Практически каждый ученик, который системно посещает тренировки в «Школе мяча» прибавляет в своем мастерстве и переходит на новый уровень игры. О некоторых учениках можно прочитать на нашем официальном сайте.
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourtyfive">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourtyfive" aria-expanded="false" aria-controls="collapseFourtyfive">
                              Получают ли ученики какие-нибудь дипломы или сертификаты, после прохождения обучения в вашей школе? 
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourtyfive" class="collapse" aria-labelledby="headingFourtyfive" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Да, наши воспитанники получают официальные сертификаты о прохождении различных этапов обучения. Также ученики получают сертификаты после прохождения тренировочного лагеря «Школы мяча».
                      </div>
                      </div>
                  </div>
                  <div class="card shadow-none border mb-1">
                      <div class="card-header" id="headingFourtyseven">
                      <h5 class="my-0">
                          <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseFourtyseven" aria-expanded="false" aria-controls="collapseFourtyseven">
                              Достаточно ли ученику в возрасте 8-13 лет заниматься 60 минут? Не мало ли это?
                          </button>
                      </h5>
                      </div>
                      <div id="collapseFourtyseven" class="collapse" aria-labelledby="headingFourtyseven" data-parent="#accordionExample-faq">
                      <div class="card-body">
                        Этого достаточно, так как органайзер тренировки сформирован из высоко интенсивных упражнений, позволяющих в течение занятия получить необходимый уровень физической нагрузки, а также выполнить должное количество техническим приемов с мячом. Для развития игровых взаимодействий и получения практики игр/соревнований мы организовываем ежемесячные турниры, на которых ученики получают не менее 90 минут игрового времени.
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
