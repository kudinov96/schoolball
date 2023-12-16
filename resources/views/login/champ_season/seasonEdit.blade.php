@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="/season/{{ $season->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>

            <div class="row">
                <div class="col-lg-6">






                    <div class="form-group row">
                        <label for="group_age_id" class="col-sm-2 col-form-label text-right">{{ __('Группа') }}</label>
                        <div class="col-sm-10">
                            <select name="group_age_id" class="custom-select">
                                <option value="0">Не выбрано</option>

                                @foreach ($groupage as $age)
                                    <option value="{{ $age->group_age_id }}" @if ($age->group_age_id == $season->group_age_id) selected @endif>{{ $age->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="team_name" class="col-sm-2 col-form-label text-right">{{ __('Наименование') }}</label>
                        <div class="col-sm-10">
                            <input id="team_name" type="text" class="form-control" name="team_name" value="{{ $season->team_name }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="points" class="col-sm-2 col-form-label text-right">{{ __('Очки') }}</label>
                        <div class="col-sm-10">
                            <input id="points" type="text" class=" form-control" name="points" value="{{ $season->points }}">
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
    <form id="deleteform" method="POST" action="/season/{{ $season->id }}/delete">
        @csrf
    </form>


@endsection
