@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/tarifflist/{{ $tariff->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                  <label for="group_age_id" class="col-sm-2 col-form-label text-right">{{ __('Группа') }}</label>
                  <div class="col-sm-10">
                      <select name="group_id" class="custom-select">
                          <option value="0">Не выбрано</option>

                          @foreach ($groupage as $age)
                              <option value="{{ $age->group_age_id }}" @if ($age->group_age_id == $tariff->group_id) selected @endif>{{ $age->name }} </option>
                          @endforeach
                      </select>
                  </div>
              </div>

                <div class="form-group row">
                    <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                    <div class="col-sm-10">

                    <select name="club_id" class="custom-select">
                        <option value="0">Не выбрано</option>
                        @foreach ($clublist as $club)

                            <option value="{{ $club->id }}" @if ($club->id == $tariff->club_id) selected @endif>{{ $club->name }} ({{ $club->address }}) </option>

                        @endforeach
                    </select>
                    </div>
                </div>

            </div>
          </div>
            <h4>Информация</h4>
            <hr>



                <div class="form-group row">
                    <label for="name" class="col-form-label">{{ __('Наименование') }}</label>
                    <div class="col-sm-6">

                        <input id="name" name="name" class="form-control" type="text" value="{{$tariff->name}}" required autocomplete="name">

                    </div>
                </div>


            <div class="form-group row">
                <label for="rescheduling_classes" class="col-form-label">{{ __('Перенос занятий') }}</label>
                <div class="col-sm-6">

                    <input id="rescheduling_classes" name="rescheduling_classes" class="form-control" type="text" value="{{$tariff->rescheduling_classes}}"   autocomplete="name">

                </div>
            </div>


            <div class="form-group row">
                <label for="price" class="col-form-label">{{ __('Стоимость') }}</label>
                <div class="col-sm-6">

                    <input id="price" name="price" class="form-control" type="text" value="{{$tariff->price}}" required autocomplete="price">

                </div>
            </div>





            <div class="form-group row">
                <label for="discount" class="col-form-label">{{ __('Скидка (выгоднее на %)') }}</label>
                <div class="col-sm-6">

                    <input id="discount" name="discount" class="form-control" type="text" value="{{$tariff->discount}}"   autocomplete="discount">

                </div>
            </div>
            <h4>Включено</h4>
            <hr>
            <div class="form-group row">


                    <input id="included_diary" type="checkbox" class="form-control-new mr-3" name="included_diary"  @if ($tariff->included_diary == 'on') checked="checked" @endif>


                <label for="included_diary" class="col-form-label">{{ __('Дневник футболиста') }}</label>

            </div>

            <div class="form-group row">


                <input id="included_form_discount" type="checkbox" class="form-control-new mr-3" name="included_form_discount"  @if ($tariff->included_form_discount == 'on') checked="checked" @endif>


                <label for="included_form_discount" class="col-form-label">{{ __('Скидка на форму 50%') }}</label>

            </div>


            <hr>

            <div class="form-group row">
                    <label for="classes" class="col-form-label">{{ __('Занятий в неделю') }}</label>
                    <div class="col-sm-6">

                        <input id="classes" name="classes" class="form-control" type="text" value="{{$tariff->classes}}"  required autocomplete="name">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="select_date" class="col-form-label">{{ __('Выбор даты') }}</label>
                    <div class="col-sm-6">

                        <input id="select_date" name="select_date" class="form-control" type="text" value="{{$tariff->select_date}}" required autocomplete="select_date">

                    </div>
                </div>


                <div class="form-group row">
                    <label for="freezing" class="col-form-label">{{ __('Заморозок') }}</label>
                    <div class="col-sm-6">

                        <input id="freezing" name="freezing" class="form-control" type="text" value="{{$tariff->freezing}}"  required autocomplete="freezing">

                    </div>
                </div>


            <div class="form-group row">
                <label for="popular_badge" class="col-form-label">{{ __('Популярный') }}</label>
                <div class="col-sm-6">
                    <input id="popular_badge" type="checkbox" class="form-control-new" name="popular_badge" @if ($tariff->popular_badge == 'on') checked="checked" @endif>
                </div>
            </div>


            <div class="form-group row">
                <label for="gift" class="col-form-label">{{ __('Подарок') }}</label>
                <div class="col-sm-6">
                    <select name="gift" class="custom-select">
                        <option value="" @if (strval($tariff->gift) == "") selected="selected" @endif>Не выбрано</option>
                         <option value="0" @if (strval($tariff->gift) == "0") selected="selected" @endif> Нет </option>
                        <option value="1" @if (strval($tariff->gift) == "1") selected="selected" @endif> Да </option>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="default_public" class="col-form-label">{{ __('Отображать на главной по умолчанию') }}</label>
                <div class="col-sm-6">

                    <input id="default_public" type="checkbox" class="form-control-new" name="default_public"  @if ($tariff->default_public == 'on') checked="checked" @endif>

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
    <form id="deleteform" method="POST" action="/tarifflist/{{ $tariff->id }}/delete">
        @csrf
    </form>




@endsection
