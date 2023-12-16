@extends('layouts.championship')
@section('title')
    <title>Соревнования «Школы мяча»</title>
@endsection
@section('description')
    <meta property="og:description" content="Опытные тренеры, интересные занятия и командный дух помогут вашему ребенку развиться как футболисту и личности. Присоединяйтесь к нам и станьте частью нашей команды!">

    <meta name="description" content="Опытные тренеры, интересные занятия и командный дух помогут вашему ребенку развиться как футболисту и личности. Присоединяйтесь к нам и станьте частью нашей команды!">
@endsection


@section('content')
      <div class="topPartsGray d-none d-md-block" style="     padding-top: 204px !important;">
        <div class="container">
          <div class="firstSection">
            <div class="row">
              <div class="col-md-7 firstSectionDescription">
                <h3>Соревнования «Школы мяча»</h3>
                <h4 style="font-size: 20px !important;">На полях "Школы мяча" сердце вашего ребёнка бьётся быстрее! Переживая каждую победу и поражение, он растёт, учится и становится сильнее. Подарите ему этот мир эмоций, моменты гордости и страсть к футболу!
                </h4>

                  <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Оставить заявку на участие</button>


               </div>
              <div class="col-md-4">
                <img src="{{ asset('assets/images/championship/img-2@2x.png') }}" alt="" style="    width: 120%;
    margin-top: -45px;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="topPartsGray d-sm-block d-md-none" style="     padding-top: 104px !important;">
        <div class="container">
          <div class="firstSection">
            <div class="row">
              <div class="col-10 offset-1  text-center">
                <img src="{{ asset('assets/images/championship/img-2@2x.png') }}" alt="" style="width: 90%;">
              </div>
              <div class="col-12 firstSectionDescription text-center">
                <h3>Соревнования <br> «Школы мяча»</h3>
                <h4>На полях "Школы мяча" сердце вашего ребёнка бьётся быстрее! Переживая каждую победу и поражение, он растёт, учится и становится сильнее. Подарите ему этот мир эмоций, моменты гордости и страсть к футболу!
                </h4>

                  <button style="margin-top:10px;"  type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Оставить заявку на участие</button>

              </div>

            </div>
          </div>
        </div>
      </div>


      <!-- Помогите вашему ребенку научиться достигать целей и стать лидером -->

      @include('sections.championship.s1-about')

      <!-- Лучшие моменты в фото и видео -->

      @include('sections.championship.s2-photo-slider')



      <!-- Посмотрите видео с прошлых смен !-->

      @include('sections.video-championship')


      <!-- Призы всем участникам соревнований-->
      @include('sections.championship.s3')

      <!-- Календарь соревнований -->

      @include('sections.championship.s4-calendar')


      <!-- Участниками соревнований могут быть дети разных возрастов -->

      @include('sections.championship.s5')


      <!-- Комплект формы -->

      @include('sections.championship.s6')

      <!-- Текущая таблица сезона -->

   <?php //   @include('sections.championship.s7-season') ?>
   



      <!-- Сборная Школы Мяча -->

      @include('sections.championship.s8')

      <!-- Поможем в выборе -->

      @include('sections.championship.s9-callback')






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

      <script>
      $("#campVideoBoul").click(function() {
        $("#campVideoBoulLightbox").toggleClass("d-none");
      });
      $("#campVideoBoulButton").click(function() {
        $("#campVideoBoulLightbox").toggleClass("d-none");
      });
      $("#campVideoEdu").click(function() {
        $("#campVideoEduLightbox").toggleClass("d-none");
      });
      $("#campVideoEduButton").click(function() {
        $("#campVideoEduLightbox").toggleClass("d-none");
      });
      $("#campVideoFifa").click(function() {
        $("#campVideoFifaLightbox").toggleClass("d-none");
      });
      $("#campVideoFifaButton").click(function() {
        $("#campVideoFifaLightbox").toggleClass("d-none");
      });
      </script>

@endsection
