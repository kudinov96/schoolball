@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="/tariff/{{ $tariff->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label for="group_age_id" class="col-sm-2 col-form-label text-right">{{ __('Наименование') }}</label>
                        <div class="col-sm-10">
                            <input id="name" name="name" class="form-control" type="text" value="{{$tariff->name}}" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="classes" class="col-sm-2 col-form-label text-right">{{ __('Занятий') }}</label>
                        <div class="col-sm-5">
                            <input id="classes" name="classes" class="form-control" type="text" value="{{$tariff->classes}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="freezing" class="col-sm-2 col-form-label text-right">{{ __('Заморозки') }}</label>
                        <div class="col-sm-5">
                            <input id="freezing" name="freezing" class="form-control" type="text" value="{{$tariff->freezing}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="training" class="col-sm-2 col-form-label text-right">{{ __('Тренировка') }}</label>
                        <div class="col-sm-5">
                            <input id="training" name="training" class="form-control" type="text" value="{{$tariff->training}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="per_month" class="col-sm-2 col-form-label text-right">{{ __('За месяц') }}</label>
                        <div class="col-sm-5">
                            <input id="classes" name="per_month" class="form-control" type="text" value="{{$tariff->per_month}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cost" class="col-sm-2 col-form-label text-right">{{ __('Стоимость') }}</label>
                        <div class="col-sm-5">
                            <input id="cost" name="cost" class="form-control" type="text" value="{{$tariff->cost}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gift" class="col-sm-2 col-form-label text-right">{{ __('Подарок') }}</label>
                        <div class="col-sm-12">
                            <input id="gift" name="gift" class="form-control" type="text" value="{{$tariff->gift}}" >
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
    <form id="deleteform" method="POST" action="/tariff/{{ $tariff->id }}/delete">
        @csrf
    </form>


@endsection
