@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/scheduleweekendNew">
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

                      <input id="name" name="day" class="form-control" type="text"  required autocomplete="name">

                  </div>
              </div>

              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Время') }}</label>
                  <div class="col-sm-6">

                      <input id="activity" name="time" class="form-control" type="text"  required autocomplete="name">

                  </div>
              </div>

              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Расписание') }}</label>
                  <div class="col-sm-6">

                      <input id="activity" name="activity" class="form-control" type="text"   required autocomplete="name">

                  </div>
              </div>




          </div>

          <div class="col-12">
              <div class="col-md-10 offset-md-1 mainHeaderButton">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>
              </div>
          </div>
        </div>
      </div>

    </div>

</form>



@endsection
