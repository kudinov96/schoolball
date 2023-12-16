@extends('layouts.account')

@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Основная информация</h4>
                    <div class="row">
                        <div class="col-lg-6">



                        <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/editPhoto/6"  class="">Редактирование фото</a> </h4>
                            <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/editPhotoUniform/1"  class="">Редактирование фото формы</a> </h4>

          <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/calendar/"  class="">Календарь соревнований</a> </h4>
          <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/season/"  class="">Текущая таблица сезона</a> </h4>
           <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/season-player/"  class="">Текущая таблица игроков</a> </h4>




      </div>
      </div>

    </div>


            </div>
        </div>

    </div>




    <script type="text/javascript">

        $('.date-format').datetimepicker({
            format: 'dd.mm.yyyy hh:ii',
            autoclose:true,
            language: 'ru',
            orientation: "top"
        });
    </script>




@endsection
