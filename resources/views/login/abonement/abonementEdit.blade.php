@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="/abonement/{{ $abonement->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>

            <div class="row">
                <div class="col-lg-6">


                    <div class="form-group row">
                        <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                        <div class="col-sm-10">
                            <select name="club_id" class="custom-select">
                                <option value="0">Не выбрано</option>
                                @foreach ($clublist as $club)
                                    <option value="{{ $club->id }}" @if ($club->id == $abonement->club_id) selected @endif>{{ $club->name }} {{ $club->address }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Тариф') }}</label>
                        <div class="col-sm-10">
                            <select name="tariff_id" class="custom-select">
                                <option value="0">Не выбрано</option>

                                @foreach ($tarifflist as $tariff)
                                    <option value="{{ $tariff->id }}" @if ($tariff->id == $abonement->tariff_id) selected @endif>{{ $tariff->name }} </option>
                                @endforeach

                            </select>
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
    <form id="deleteform" method="POST" action="/abonement/{{ $abonement->id }}/delete">
        @csrf
    </form>


@endsection
