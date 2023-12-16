@extends('layouts.account')

@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>



    <form id="sendform" method="POST"  action="/wekeends/{{ $mainindex->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">


                <h4 class="mt-0 header-title">Таймер</h4>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">{{ __('Дата начала смены') }}</label>
                    <div class="col-sm-10">
                        <input name="date" type="text" class="date-format form-control"  value="{{$mainindex->date}} " >


                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label text-right">{{ __('Свободных мест') }}</label>
                    <div class="col-sm-10">
                        <input   type="text" class="datepicker-here form-control" name="places" value="{{$mainindex->places}} ">
                    </div>
                </div>

            </div>
          </div>
             <hr>

          </div>


          @if( $mainindex->id == 5 or  $mainindex->id == 8)


              <h4 class="mt-0 header-title">Адрес</h4>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Наименование') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="address_text" value="{{$mainindex->address_text}} ">
                  </div>
              </div>

              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Ссылка') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="address_url" value="{{$mainindex->address_url}} ">
                  </div>
              </div>

          @endif

          @if( $mainindex->id == 1 OR $mainindex->id == 5 OR $mainindex->id == 8)


              <h4 class="mt-0 header-title">Стоимость участия</h4>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Цена') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="price" value="{{$mainindex->price}} ">
                  </div>
              </div>

              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Цена (зачеркнутая)') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="price_discount" value="{{$mainindex->price_discount}} ">
                  </div>
              </div>

          @endif
              @if( $mainindex->id == 1)

              <h4 class="mt-0 header-title">Главный блок</h4>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Подзаголовок') }}</label>
                  <div class="col-sm-6">
                      <textarea rows="4" class="datepicker-here form-control" name="subname_page"  >{{$mainindex->subname_page}}</textarea>
                  </div>
              </div>

              <h4 class="mt-0 header-title">Блок Футбольные выходные — это не только про спорт!</h4>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Тема') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="block2_theme" value="{{$mainindex->block2_theme}} ">
                  </div>
              </div>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Урок') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="block2_lesson" value="{{$mainindex->block2_lesson}} ">
                  </div>
              </div>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Навык 1') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="block2_skill1" value="{{$mainindex->block2_skill1}} ">
                  </div>
              </div>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Навык 2') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="block2_skill2" value="{{$mainindex->block2_skill2}} ">
                  </div>
              </div>
              <div class="form-group row">
                  <label  class="col-sm-2 col-form-label text-right">{{ __('Навык 3') }}</label>
                  <div class="col-sm-10">
                      <input   type="text" class="datepicker-here form-control" name="block2_skill3" value="{{$mainindex->block2_skill3}} ">
                  </div>
              </div>

          @endif

          <h4 class="mt-0 header-title">Блок Все лето</h4>
          <div class="form-group row">
              <label  class="col-sm-2 col-form-label text-right">{{ __('Секция 1 ') }}</label>
              <div class="col-sm-6">
                  <textarea rows="4" class="datepicker-here form-control" name="sec1"  >{{$mainindex->sec1}}</textarea>
              </div>
          </div>

          <div class="form-group row">
              <label  class="col-sm-2 col-form-label text-right">{{ __('Секция 2 ') }}</label>
              <div class="col-sm-6">
                  <textarea rows="4" class="datepicker-here form-control" name="sec2"  >{{$mainindex->sec2}}</textarea>
              </div>
          </div>

          <div class="form-group row">
              <label  class="col-sm-2 col-form-label text-right">{{ __('Секция 3') }}</label>
              <div class="col-sm-6">
                  <textarea rows="4" class="datepicker-here form-control" name="sec3"  >{{$mainindex->sec3}}</textarea>
              </div>
          </div>

          <div class="form-group row">
              <label  class="col-sm-2 col-form-label text-right">{{ __('Секция 4 ') }}</label>
              <div class="col-sm-6">
                  <textarea rows="4" class="datepicker-here form-control" name="sec4"  >{{$mainindex->sec4}}</textarea>
              </div>
          </div>



      @if( $mainindex->id == 2 OR  $mainindex->id == 3   OR  $mainindex->id == 4  OR  $mainindex->id == 5  OR  $mainindex->id == 8)


              <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/index_campschedule/{{$mainindex->id}}"  class="">График смен</a> </h4>
              <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/index_dailyschedule/{{$mainindex->id}}"  class="">Распорядок дня</a> </h4>

          @if( $mainindex->id == 2 OR  $mainindex->id == 5 )
                   <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/index_details/{{$mainindex->id}}"  class="">Табы с информацией</a> </h4>

              @endif
              @if( $mainindex->id == 2 )

                  <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/index_price/{{$mainindex->id}}"  class="">Стоимость участия</a> </h4>
              @endif
          @endif
          <h4 class="card-title ml-5 mt-0 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/editPhoto/{{$mainindex->id}}"  class="">Редактирование фото</a> </h4>

          <div class="col-12">
              <div class="col-md-10 offset-md-1 mainHeaderButton">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>

              </div>
          </div>
        </div>
      </div>

    </div>

</form>


    <script type="text/javascript">

        $('.date-format').datetimepicker({
            format: 'dd.mm.yyyy hh:ii',
            autoclose:true,
            language: 'ru',
            orientation: "top"
        });
    </script>




@endsection
