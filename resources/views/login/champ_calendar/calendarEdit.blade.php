@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="/calendar/{{ $calendar->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>

            <div class="row">
                <div class="col-lg-6">



                    <div class="form-group row">
                        <label for="season" class="col-md-2 col-form-label-new text-md-right">{{ __('Сезон') }}</label>
                        <div class="col-sm-10">
                            <select name="season" class="custom-select">
                                <option value="" @if (strval($calendar->season) == "") selected="selected" @endif>Не выбрано</option>
                                <option value="1" @if (strval($calendar->season) == "1") selected="selected" @endif> Осень </option>
                                <option value="2" @if (strval($calendar->season) == "2") selected="selected" @endif> Зима </option>
                                <option value="3" @if (strval($calendar->season) == "3") selected="selected" @endif> Весна </option>

                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Наименование') }}</label>
                        <div class="col-sm-10">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $calendar->name }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="subname" class="col-sm-2 col-form-label text-right">{{ __('Подзагаловок') }}</label>
                        <div class="col-sm-10">
                            <input id="subname" type="text" class=" form-control" name="subname" value="{{ $calendar->subname }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="subname" class="col-sm-2 col-form-label text-right">{{ __('Дата проведения') }}</label>
                        <div class="col-sm-10">
                            <input id="date" type="text" class=" form-control" name="date" value="{{ $calendar->date }}">
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                        <input type="file" id="input-file-now-custom-1" name="image" class="dropify" data-default-file="@if ($calendar->image == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $calendar->image) }}@endif" />
                    </div>
                    </div>

                </div>
            </div>



          <div class="col-12">
              <div class="col-md-10 offset-md-1 mainHeaderButton">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>
                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>

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
    <form id="deleteform" method="POST" action="/calendar/{{ $calendar->id }}/delete">
        @csrf
    </form>


@endsection
