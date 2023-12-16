@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/abonementNew">
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
                                <option value="{{ $club->id }}">{{ $club->name }} {{ $club->address }}</option>
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
                                <option value="{{ $tariff->id }}">{{ $tariff->name }} ()</option>
                            @endforeach
                        </select>
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
