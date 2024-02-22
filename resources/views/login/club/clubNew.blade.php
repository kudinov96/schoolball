@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/clubNew">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Название') }}</label>
                  <div class="col-sm-10">
                      <input id="name" name="name" class="form-control" type="text" value="" required>
                  </div>
              </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Метро') }}</label>
                    <div class="col-sm-10">
                        <input id="metro" name="metro" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="slug" class="col-sm-2 col-form-label text-right">{{ __('URL адрес клуба') }}</label>
                    <div class="col-sm-10">
                        <input id="slug" name="slug" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_splead" class="col-sm-2 col-form-label text-right">{{ __('ID клуба sportLead') }}</label>
                    <div class="col-sm-10">
                        <input id="id_splead" name="id_splead" class="form-control" type="text" value=""  >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="coords" class="col-sm-2 col-form-label text-right">{{ __('Координаты') }}</label>
                    <div class="col-sm-10">
                        <input id="name" name="coords" class="form-control" type="text" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label text-right">{{ __('Адрес') }}</label>
                    <div class="col-sm-10">
                        <input id="name" name="address" class="form-control" type="text" value="" required>
                    </div>
                </div>


              <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label text-right">{{ __('Описание') }}</label>
                  <div class="col-sm-10">
                      <textarea id="description" name="description" class="form-control" rows="4" value=""></textarea>
                  </div>
              </div>
              <div class="form-group row">
                <label for="id_manager" class="col-md-2 col-form-label-new text-md-right">{{ __('Менеджер') }}</label>
                <div class="col-sm-10">
                  <select name="id_manager" class="custom-select">
                    <option value="">Не выбрано</option>
                    @foreach ($arrmanagers as $manager)
                      <option value="{{ $manager->id }}" >{{ $manager->surname }} {{ $manager->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Площадка') }}</label>
                <div class="col-sm-10">
                  <select name="id_area" class="custom-select">
                    <option value="0">Не выбрано</option>
                    @foreach ($arrarea as $area)
                      <option value="{{ $area->id }}" >{{ $area->name }} {{ $area->adress }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="id_coachs" class="col-md-2 col-form-label-new text-md-right">{{ __('Тренеры клуба') }}</label>
                <div class="col-sm-10">
                    <select name="coaches[]" multiple="multiple" class="form-control select2" style="min-height: 250px">
                        <option value="">Не выбрано</option>
                        @foreach ($coaches as $coach)
                            <option value="{{ $coach->id }}">{{ $coach->id }}: {{ $coach->user->name }} {{ $coach->user->surname }}</option>
                        @endforeach
                    </select>
                </div>
              </div>


                <hr>
                <h3>Рейтинг клуба</h3>

                <div class="form-group row">
                    <label for="raiting_coach" class="col-sm-3 col-form-label text-right">{{ __('Тренерский состав') }}</label>
                    <div class="col-sm-2">
                        <input id="name" name="raiting_coach" class="form-control" type="text" value="" required>
                    </div>

                    <label for="raiting_stadion" class="col-sm-3 col-form-label text-right">{{ __('Стадион') }}</label>
                    <div class="col-sm-2">
                        <input id="name" name="raiting_stadion" class="form-control" type="text" value="" required>
                    </div>

                    <label for="raiting_manager" class="col-sm-3 col-form-label text-right">{{ __('Менеджер') }}</label>
                    <div class="col-sm-2">
                        <input id="name" name="raiting_manager" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label text-right">{{ __('Номер телефона') }}</label>
                    <div class="col-sm-6">
                        <input id="phone_number" name="phone" class="phone form-control" type="text" value="" required>
                    </div>


                </div>


                <div class="form-group row">
                    <label for="time" class="col-sm-3 col-form-label text-right">{{ __('Время работы') }}</label>
                    <div class="col-sm-6">
                        <input id="name" name="time" class="form-control" type="text" value="" required>
                    </div>


                </div>




                <div class="form-group row">
                    <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на главной странице') }}</label>
                    <div class="col-sm-6">
                      <input id="display-front" type="checkbox" class="form-control-new" name="display-front" >
                    </div>
                </div>

                <hr>

                <div class="abonements-edit">
                    <h3>Абонементы клуба</h3>
                    <select name="abonements[]" multiple="multiple" class="form-control select2" style="min-height: 250px">
                        <option value="">Не выбрано</option>
                        @foreach ($abonements as $abonement)
                            <option value="{{ $abonement->id }}">{{ $abonement->id }}: {{ $abonement->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
              <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<script type="text/javascript">
    jQuery(document).ready(function(){

        $('.phone').mask('+0 (000) 000-00-00', {placeholder: "+ (__) _  __"});

    });
</script>


@endsection
