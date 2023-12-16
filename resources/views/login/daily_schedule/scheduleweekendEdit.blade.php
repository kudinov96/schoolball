@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/scheduleweekend/{{ $schedule->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

            <h4>Информация</h4>
            <hr>



                <div class="form-group row">
                    <label for="name" class="col-form-label">{{ __('День') }}</label>
                    <div class="col-sm-6">

                        <input id="name" name="day" class="form-control" type="text" value="{{$schedule->day}}" required autocomplete="name">

                    </div>
                </div>

            <div class="form-group row">
                <label for="name" class="col-form-label">{{ __('Время') }}</label>
                <div class="col-sm-6">

                    <input id="activity" name="time" class="form-control" type="text" value="{{$schedule->time}}" required autocomplete="name">

                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-form-label">{{ __('Расписание') }}</label>
                <div class="col-sm-6">

                    <input id="activity" name="activity" class="form-control" type="text" value="{{$schedule->activity}}" required autocomplete="name">

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
    <form id="deleteform" method="POST" action="/scheduleweekend/{{ $schedule->id }}/delete">
        @csrf
    </form>




@endsection
