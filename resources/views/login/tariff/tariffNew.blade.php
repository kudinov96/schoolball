@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/tariffNew">
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
                      <input id="name" name="name" class="form-control" type="text" value="" required>

                  </div>
              </div>
                <div class="form-group row">
                    <label for="classes" class="col-sm-2 col-form-label text-right">{{ __('Занятий') }}</label>
                    <div class="col-sm-5">
                        <input id="classes" name="classes" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="freezing" class="col-sm-2 col-form-label text-right">{{ __('Заморозки') }}</label>
                    <div class="col-sm-5">
                        <input id="freezing" name="freezing" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="training" class="col-sm-2 col-form-label text-right">{{ __('Тренировка') }}</label>
                    <div class="col-sm-5">
                        <input id="training" name="training" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="per_month" class="col-sm-2 col-form-label text-right">{{ __('За месяц') }}</label>
                    <div class="col-sm-5">
                        <input id="classes" name="per_month" class="form-control" type="text" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cost" class="col-sm-2 col-form-label text-right">{{ __('Стоимость') }}</label>
                    <div class="col-sm-5">
                        <input id="cost" name="cost" class="form-control" type="text" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gift" class="col-sm-2 col-form-label text-right">{{ __('Подарок') }}</label>
                    <div class="col-sm-12">
                        <input id="gift" name="gift" class="form-control" type="text" value="" >
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
