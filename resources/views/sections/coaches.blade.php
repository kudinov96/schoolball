
      <div class="seventhSection" id="coaches" style="margin-top:80px;">
        <div class="container">
          <div class="row">
            <div class="mobSeventhSection col-md-12 text-center">
                <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
                    <h3 class="title-desc" style=" margin-bottom: 35px !important;">Тренерский состав</h3>
                    <h4 style="margin-bottom:110px;">В нашем кэмпе работают настоящие профи своего дела, которые умеют создавать праздничное настроение и готовы помочь ребенку в любой ситуации</h4>

                </div>

                <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">
                    <h3 class="mob-title-sec" style="  ">Тренерский состав</h3>
                    <h4 style="">В нашем кэмпе работают настоящие профи своего дела, которые умеют создавать праздничное настроение и готовы помочь ребенку в любой ситуации</h4>

                </div>



            </div>
          </div>
          <div class="coachs-slider slider d-none d-md-block" style="height: 440px;">
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
          <div class="mobile-coachs-slider slider d-sm-block d-md-none" style="height: 440px;">
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
