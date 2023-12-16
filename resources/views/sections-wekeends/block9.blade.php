<div class="thirdSection d-none d-md-block" id="lightbox">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center  d-none d-md-block">
                <div class="col-10 offset-1">
                    <img src="{{ asset('assets/images/wekeends/photo_4@2x.png') }}" alt="" style="width: 450px; margin-bottom: 10px;">
                </div>
                <h3 class="title-desc" style="margin-bottom: 32px !important;"> Футбольные выходные — это не только про спорт! </h3>
                <h4 class="main_desc" style="  line-height: 1.54; margin-bottom: 32px;">
                    Всего за пару дней ваш ребенок получит интересные навыки,
                    которые сразу сможет применить в повседневной жизни. </h4>

                <div class="col-10 offset-1 row text-center row text-center" style="font-size: 24px !important; font-family: 'IBMPlexSans-Bold';">
                    <div class="col"><span style="font-family: 'IBMPlexSans';"><b style="  font-family: 'IBMPlexSans-Bold';">Тема:</b> {{ $main->block2_theme }}</span></div>
                    <div class="col"><span style="font-family: 'IBMPlexSans';"><b style="  font-family: 'IBMPlexSans-Bold';">Урок:</b> {{ $main->block2_lesson }}</span></div>
                </div>
                <h3 class="title-desc" style="margin-top: 64px;   font-size: 28px !important; "> Навыки </h3>

                <div class="row text-center" style="margin-bottom: 48px !important;" >

                    <div class="col">
                        <img src="{{ asset('assets/images/wekeends/check.svg') }}" alt="Нестандартное мышление">
                        <h4 style="font-size: 18px; margin-top:16px;"> {{ $main->block2_skill1 }}</h4>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/wekeends/check.svg') }}" alt="Наблюдательность">
                        <h4  style="font-size: 18px; margin-top:16px;">{{ $main->block2_skill2 }}</h4>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/wekeends/check.svg') }}" alt="Индивидуальность">
                        <h4  style="font-size: 18px; margin-top:16px;">{{ $main->block2_skill3 }}</h4>
                    </div>
                </div>
            </div>

        </div>
        </div>

    </div>




<div class="fourthSection d-sm-block d-md-none" style="margin-top: 32px !important;  ">
    <div class="container">
        <div id="aboutmob" style="visibility: hidden;position: relative;top: -100px;"></div>
        <div class=" col-auto center-block  text-center">
            <img src="{{ asset('assets/images/wekeends/photo_4@2x.png') }}" style="height: 220px;" alt="">
        </div>


        <div class="col text-left mobFontSize" style="
     ">
            <h3 class="mob-title-sec" style="     margin-top: 42px;">Футбольные выходные — это не только про спорт!</h3>
        </div>

        <h5 class="mob-text-section" style="font-size: 16px !important;   text-align: center !important;
">
            Всего за пару дней ваш ребенок получит интересные навыки,
            которые сразу сможет применить
            в повседневной жизни.
        </h5>

        <h5 class="subtitle"><span style="font-family: 'IBMPlexSans';"><b style="  font-family: 'IBMPlexSans-Bold';">Тема:</b> {{ $main->block2_theme }}</span></h5>
        <h5 class="subtitle"><span style="font-family: 'IBMPlexSans';"><b style="  font-family: 'IBMPlexSans-Bold';">Урок:</b>  {{ $main->block2_lesson }}</span> </h5>

        <h5 class="skills-title">Навыки</h5>

        <div class="skills-list">
            <div class="skill">
              <div class="centered-image">
                <img class="skills-image" src="{{ asset('assets/images/wekeends/check.svg') }}" alt="Нестандартное мышление">
              </div>
              <h4 class="skills-subtitle">{{ $main->block2_skill1 }}</h4>
            </div>

            <div class="skill">
              <div class="centered-image">
                <img class="skills-image" src="{{ asset('assets/images/wekeends/check.svg') }}" alt="Наблюдательность">
              </div>
              <h4 class="skills-subtitle">{{ $main->block2_skill2 }}</h4>
            </div>

            <div class="skill">
              <div class="centered-image">
                <img class="skills-image" src="{{ asset('assets/images/wekeends/check.svg') }}" alt="Индивидуальность">
              </div>
              <h4 class="skills-subtitle">{{ $main->block2_skill3 }}</h4>
            </div>
          </div>



    </div>
</div>
