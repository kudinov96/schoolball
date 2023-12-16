@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/catcamp/{{ $camp->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>

            <hr>

            <div class="form-group row">
                <label for="name" class="col-form-label">{{ __('Наименование') }}</label>
                <div class="col-sm-6">
                    <input id="name" name="name" class="form-control" type="text" value="{{ $camp->name }}" required autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="date_from" class="col-form-label">{{ __('Дата начала') }}</label>
                <div class="col-sm-6">
                    <input id="date_from" name="date_from" class="form-control" type="date" value="{{ $camp->date_from }}" required autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_to" class="col-form-label">{{ __('Дата окончания') }}</label>
                <div class="col-sm-6">
                    <input id="date_to" name="date_to" class="form-control" type="date" value="{{ $camp->date_to }}" required autocomplete="off">
                </div>
            </div>


            <div class="form-group row">
                <label for="topic" class="col-form-label">{{ __('Тема') }}</label>
                <div class="col-sm-6">
                    <textarea name="topic" class="form-control" rows="3">{{ $camp->topic }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-form-label">{{ __('Место проведения') }}</label>
                <div class="col-sm-6">
                    <input id="location" name="location" class="form-control" type="text" value="{{ $camp->location }}" required autocomplete="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="free_places" class="col-form-label">{{ __('Свободных мест') }}</label>
                <div class="col-sm-6">
                    <input id="free_places" name="free_places" class="form-control" type="number" value="{{ $camp->free_places }}" required autocomplete="off" min="0">
                </div>
            </div>

            <div class="form-group row">
                <label for="link" class="col-form-label">{{ __('Ссылка') }}</label>
                <div class="col-sm-6">
                    <input id="url" name="url" class="form-control" type="url" value="{{ $camp->url }}" required autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-form-label">{{ __('Изображение') }}</label>
                <div class="col-lg-6">
                    <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($camp->img == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $camp->img) }}@endif" />
                </div>
            </div>

            <div class="form-group row">
                <label for="type" class="col-form-label">{{ __('Тип лагеря') }}</label>
                <div class="col-sm-6">
                    <select id="type" name="type" class="form-control" required>
                        <option value="">--Выберите тип лагеря--</option>
                        <option value="выездной" {{ $camp->type === 'выездной' ? 'selected' : '' }}>Выездной</option>
                        <option value="дневной" {{ $camp->type === 'дневной' ? 'selected' : '' }}>Дневной</option>
                        <option value="выходные" {{ $camp->type === 'выходные' ? 'selected' : '' }}>Футбольные выходные</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6  ">
                    <div class="form-check">
                        <input id="is_summer" name="is_summer" class="form-check-input" type="checkbox" {{ $camp->is_summer ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_summer">{{ __('Все лето') }}</label>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <label for="display-front" class=" ">{{ __('Отображать') }}</label>
                <div class="col-sm-6">
                    <input id="display-front" type="checkbox" class="form-control-new" name="display-front" @if ($camp->display_front == True) checked @endif>
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
    <form id="deleteform" method="POST" action="/catcamp/{{ $camp->id }}/delete">
        @csrf
    </form>




@endsection
