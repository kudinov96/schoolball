@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="{{ route('dailyNew', $main) }}">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-body">

              <h4>Информация</h4>
              <hr>


              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Время') }}</label>
                  <div class="col-sm-6">

                      <input id="time" name="time" class="form-control" type="text"  required autocomplete="time">

                  </div>
              </div>


              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Занятие') }}</label>
                  <div class="col-sm-6">

                      <input id="title" name="title" class="form-control" type="text"  required autocomplete="title">

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
