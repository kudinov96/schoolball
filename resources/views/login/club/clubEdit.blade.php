@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/club/{{ $club->id }}/edit">
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
                      <input id="name" name="name" class="form-control" type="text" value="{{ $club->name }}" required>
                  </div>
              </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Метро') }}</label>
                    <div class="col-sm-10">
                        <input id="metro" name="metro" class="form-control" type="text" value="{{ $club->metro }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="coords" class="col-sm-2 col-form-label text-right">{{ __('Координаты') }}</label>
                    <div class="col-sm-10">
                        <input id="name" name="coords" class="form-control" type="text" value="{{ $club->coords }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slug" class="col-sm-2 col-form-label text-right">{{ __('URL адрес клуба') }}</label>
                    <div class="col-sm-10">
                        <input id="slug" name="slug" class="form-control" type="text" value="{{ $club->slug }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_splead" class="col-sm-2 col-form-label text-right">{{ __('ID клуба sportLead') }}</label>
                    <div class="col-sm-10">
                        <input id="id_splead" name="id_splead" class="form-control" type="text" value="{{ $club->id_splead }}"  >
                    </div>
                </div>




                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label text-right">{{ __('Адрес') }}</label>
                    <div class="col-sm-10">
                        <input id="name" name="address" class="form-control" type="text" value="{{ $club->address }}" required>
                    </div>
                </div>

              <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label text-right">{{ __('Описание') }}</label>
                  <div class="col-sm-10">
                      <textarea id="description" name="description" class="form-control" rows="4" value="">{{ $club->description }}</textarea>
                  </div>
              </div>
              <div class="form-group row">
                <label for="id_manager" class="col-md-2 col-form-label-new text-md-right">{{ __('Менеджер') }}</label>
                <div class="col-sm-10">
                  <select name="id_manager" class="custom-select">
                    <option value="">Не выбрано</option>
                    @foreach ($arrmanagers as $manager)
                      <option value="{{ $manager->id }}" @if ($club->id_manager == $manager->id) selected @endif>{{ $manager->surname }} {{ $manager->name }}</option>
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
                      <option value="{{ $area->id }}" @if ($club->id_area == $area->id) selected @endif>{{ $area->name }} {{ $area->adress }}</option>
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
                            <option value="{{ $coach->id }}" @if($clubModel->coaches->contains("id", $coach->id)) selected @endif>{{ $coach->id }}: {{ $coach->user->name }} {{ $coach->user->surname }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
                <hr>
                <h3>Рейтинг клуба</h3>

                <div class="form-group row">
                    <label for="raiting_coach" class="col-sm-3 col-form-label text-right">{{ __('Тренерский состав') }}</label>
                    <div class="col-sm-2">
                        <input id="name" name="raiting_coach" class="form-control" type="text" value="{{ $club->raiting_coach }}" required>
                    </div>

                    <label for="raiting_stadion" class="col-sm-3 col-form-label text-right">{{ __('Стадион') }}</label>
                    <div class="col-sm-2">
                        <input id="name" name="raiting_stadion" class="form-control" type="text" value="{{ $club->raiting_stadion }}" required>
                    </div>

                    <label for="raiting_manager" class="col-sm-3 col-form-label text-right">{{ __('Менеджер') }}</label>
                    <div class="col-sm-2">
                        <input id="name" name="raiting_manager" class="form-control" type="text" value="{{ $club->raiting_manager }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label text-right">{{ __('Номер телефона') }}</label>
                    <div class="col-sm-6">
                        <input id="phone_number" name="phone" class="phone form-control" type="text" value="{{ $club->phone }}" required>
                    </div>


                </div>

                <div class="form-group row">
                    <label for="time" class="col-sm-3 col-form-label text-right">{{ __('Время работы') }}</label>
                    <div class="col-sm-6">
                        <input id="name" name="time" class="form-control" type="text" value="{{ $club->time }}" required>
                    </div>


                </div>

              <div class="form-group row">
                <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на главной странице') }}</label>
                <div class="col-sm-6">
                  <input id="display-front" type="checkbox" class="form-control-new" name="display-front" @if ($club->display_front == True) checked @endif>
                </div>
              </div>

                <hr>

                <div class="abonements-edit">
                    <h3>Абонементы клуба</h3>
                    <select name="abonements[]" multiple="multiple" class="form-control select2" style="min-height: 250px">
                        <option value="">Не выбрано</option>
                        @foreach ($abonements as $abonement)
                            <option value="{{ $abonement->id }}" @if($clubModel->abonements->contains("id", $abonement->id)) selected @endif>{{ $abonement->id }}: {{ $abonement->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
              <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($area->photo == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->logo) }}@endif" />

                <hr>

                <h3>Иконка клуба на карте</h3>



                <input type="file" id="input-file-now-custom-2" name="ico" class="dropify" data-default-file="@if ($club->ico == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->ico) }}@endif" />

                <hr>

                <h3>Парковка и вход</h3>


                <input type="file" id="input-file-now-custom-2" name="parking_img" class="dropify" data-default-file="@if ($club->parking_image == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $club->parking_image) }}@endif" />


                <h4 class="card-title  mt-3 mb-3">  <i class="mdi mdi-calendar-multiple-check"></i> <a href="/editPhotoClub/{{$club->id}}"  class="">Редактирование фото </a> </h4>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">Удаление объекта из базы данных</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                  Вы уверены что хотите удалить объект из базы данных?
                  Если вы подтвердите данное действие восстановление объекта
                  будет не возможным.
                </p>
                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center" onclick="event.preventDefault(); document.getElementById('deleteform').submit();">Подтвердить удаление</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    jQuery(document).ready(function(){

        $('.phone').mask('+0 (000) 000-00-00', {placeholder: "+ (__) _  __"});

    });
</script>



<form id="deleteform" method="POST" action="/club/{{ $club->id }}/delete">
  @csrf
</form>
<script src="{{ asset('assets/plugins/custombox/custombox.min.js') }}"></script>
<script src="{{ asset('assets/plugins/custombox/custombox.legacy.min.js') }}"></script>

<script src="{{ asset('assets/pages/jquery.modal-animation.js') }}"></script>

@endsection



