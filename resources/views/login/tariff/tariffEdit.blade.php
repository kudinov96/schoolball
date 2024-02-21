@extends('layouts.account')

@section('content')

    <form id="sendform" method="POST" enctype="multipart/form-data" action="/tariff/{{ $tariff->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация (ID: <b>{{ $tariff->id }}</b>)</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Наименование') }}</label>
                        <div class="col-sm-10">
                            <input id="name" name="name" class="form-control" type="text" value="{{$tariff->name}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="is_transfer" class="col-sm-2 col-form-label text-right">{{ __('Перенос занятий') }}</label>
                        <div class="col-sm-1">
                            <input style="width: 20px;" id="is_transfer" name="is_transfer" class="form-control form-control_checkbox" type="checkbox" @if($tariff->is_transfer) checked @endif>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="is_favorite" class="col-sm-2 col-form-label text-right">{{ __('Выделенное') }}</label>
                        <div class="col-sm-1">
                            <input style="width: 20px;"  id="is_favorite" name="is_favorite" class="form-control form-control_checkbox" type="checkbox" @if($tariff->is_favorite) checked @endif>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cost" class="col-sm-2 col-form-label text-right">{{ __('Стоимость') }}</label>
                        <div class="col-sm-2">
                            <input id="cost" name="cost" class="form-control" type="text" value="{{$tariff->cost}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cost_one_training" class="col-sm-2 col-form-label text-right">{{ __('Стоимость за тренировку') }}</label>
                        <div class="col-sm-2">
                            <input id="cost_one_training" name="cost_one_training" class="form-control" type="text" value="{{$tariff->cost_one_training}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="profit" class="col-sm-2 col-form-label text-right">{{ __('Выгоднее в %') }}</label>
                        <div class="col-sm-2">
                            <input id="profit" name="profit" class="form-control" type="text" value="{{$tariff->profit}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="included" class="col-sm-2 col-form-label text-right">{{ __('Включено') }}</label>
                        <div class="col-sm-5">
                            <textarea id="included" name="included" class="form-control">{{$tariff->included}}</textarea>
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
