@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/catcampNew">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>


            <hr>

            <div class="form-group row">
                <label for="name" class="col-form-label">{{ __('Наименование') }}</label>
                <div class="col-sm-6">
                    <input id="name" name="name" class="form-control" type="text" value="" required autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="date_from" class="col-form-label">{{ __('Дата начала') }}</label>
                <div class="col-sm-6">
                    <input id="date_from" name="date_from" class="form-control" type="date" value="" required autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_to" class="col-form-label">{{ __('Дата окончания') }}</label>
                <div class="col-sm-6">
                    <input id="date_to" name="date_to" class="form-control" type="date" value="" required autocomplete="off">
                </div>
            </div>




            <div class="form-group row">
                <label for="topic" class="col-form-label">{{ __('Тема') }}</label>
                <div class="col-sm-6">
                    <textarea name="topic" class="form-control" rows="3"> </textarea>
                </div>
            </div>


            <div class="form-group row">
                <label for="location" class="col-form-label">{{ __('Место проведения') }}</label>
                <div class="col-sm-6">
                    <input id="location" name="location" class="form-control" type="text" value="" required autocomplete="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="free_places" class="col-form-label">{{ __('Свободных мест') }}</label>
                <div class="col-sm-6">
                    <input id="free_places" name="free_places" class="form-control" type="number" value="" required autocomplete="off" min="0">
                </div>
            </div>

            <div class="form-group row">
                <label for="link" class="col-form-label">{{ __('Ссылка') }}</label>
                <div class="col-sm-6">
                    <input id="url" name="url" class="form-control" type="url" value="" required autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-form-label">{{ __('Изображение') }}</label>
                <div class="col-lg-6">
                    <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="" />
                </div>
            </div>

            <div class="form-group row">
                <label for="type" class="col-form-label">{{ __('Тип лагеря') }}</label>
                <div class="col-sm-6">
                    <select id="type" name="type" class="form-control" required>
                        <option value="">--Выберите тип лагеря--</option>
                        <option value="выездной">Выездной</option>
                        <option value="дневной">Дневной</option>
                        <option value="выходные">Футбольные выходные</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6  ">
                    <div class="form-check">
                        <input id="all_summer" name="all_summer" class="form-check-input" type="checkbox">
                        <label class="form-check-label" for="all_summer">{{ __('Все лето') }}</label>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <label for="display-front" class=" ">{{ __('Отображать') }}</label>
                <div class="col-sm-6">
                    <input id="display-front" type="checkbox" class="form-control-new" name="display-front" >
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
