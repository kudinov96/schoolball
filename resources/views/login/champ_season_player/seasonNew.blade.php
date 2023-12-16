@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/seasonPlayerNew">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">


                <div class="form-group row">
                    <label for="season" class="col-md-2 col-form-label-new text-md-right">{{ __('Группа') }}</label>
                    <div class="col-sm-10">
                        <select name="group_age_id" class="custom-select">
                            <option value="">Не выбрано</option>
                            @foreach ($groupage as $age)
                                <option value="{{ $age->group_age_id }}">{{ $age->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="player_name" class="col-sm-2 col-form-label text-right">{{ __('Игрок') }}</label>
                    <div class="col-sm-10">
                        <input id="player_name" name="player_name" class="form-control" type="text" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Команда') }}</label>
                    <div class="col-sm-10">
                        <input id="team_name" name="team_name" class="form-control" type="text" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="points" class="col-sm-2 col-form-label text-right">{{ __('Очки') }}</label>
                    <div class="col-sm-10">
                        <input id="points" name="points" class="form-control" type="text" required>
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
