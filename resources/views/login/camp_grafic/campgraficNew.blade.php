@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="{{ route('campgraficNew', $main) }}">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-body">

              <h4>Информация</h4>
              <hr>


              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Номер смены') }}</label>
                  <div class="col-sm-6">

                      <input id="smena" name="smena" class="form-control" type="text"  required autocomplete="name">

                  </div>
              </div>


              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Дата  (будние дни)') }}</label>
                  <div class="col-sm-6">

                      <input id="date" name="date" class="form-control" type="text"  required autocomplete="name">

                  </div>
              </div>

              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Мест') }}</label>
                  <div class="col-sm-6">

                      <input id="places" name="places" class="form-control" type="text"  required autocomplete="name">

                  </div>
              </div>


              <div class="form-group row">
                  <label for="free_places" class="col-form-label">{{ __('Свободных мест') }}</label>
                  <div class="col-sm-6">

                      <input id="free_places" name="free_places" class="form-control" type="text"  required autocomplete="name">

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
