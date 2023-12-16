@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/calendarNew">
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
                            <option value="1">Осень</option>
                            <option value="2">Зима</option>
                            <option value="3">Весна</option>

                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Наименование') }}</label>
                    <div class="col-sm-10">
                        <input id="name" name="name" class="form-control" type="text" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="subname" class="col-sm-2 col-form-label text-right">{{ __('Подзагаловок') }}</label>
                    <div class="col-sm-10">
                        <input id="subname" name="subname" class="form-control" type="text" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label text-right">{{ __('Дата проведения') }}</label>
                    <div class="col-sm-10">
                        <input id="date" name="date" class="form-control" type="text" required>
                    </div>
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
