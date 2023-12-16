@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/areaNew">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
              <div class="col-lg-6">
                  <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Название') }}</label>
                      <div class="col-sm-10">
                          <input id="name" name="name" class="form-control" type="text" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="adress" class="col-sm-2 col-form-label text-right">{{ __('Адрес') }}</label>
                      <div class="col-sm-10">
                          <input id="adress" name="adress" class="form-control" type="text" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="description" class="col-sm-2 col-form-label text-right">{{ __('Описание') }}</label>
                      <div class="col-sm-10">
                          <textarea id="message" name="description" class="form-control" rows="4" value=""></textarea>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" />
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Параметры площадки</h4>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label text-right">{{ __('Размер') }}</label>
                <div class="col-sm-9">
                    <input id="size" name="size" class="form-control" type="text" required autocomplete="size">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label text-right">{{ __('Покрытие') }}</label>
                <div class="col-sm-9">
                    <input id="cover" name="cover" class="form-control" type="text" required autocomplete="cover">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label text-right">{{ __('Вместимость') }}</label>
                <div class="col-sm-9">
                    <input id="capacity" name="capacity" class="form-control" type="text" required autocomplete="capacity">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label text-right">{{ __('Стоимость аренды') }}</label>
                <div class="col-sm-9">
                    <input id="rent" name="rent" class="form-control" type="text" required autocomplete="rent">
                </div>
              </div>
              <div class="form-group row">
                <label for="id_manager" class="col-md-3 col-form-label-new text-md-right">{{ __('Менеджер') }}</label>
                <div class="col-md-9">
                  <select name="id_manager" class="custom-select">
                      <option value="">Не выбрано</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Менеджер площадки</h4>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group row">
                <label for="name_admin" class="col-sm-3 col-form-label text-right">{{ __('Адмистратор') }}</label>
                <div class="col-sm-9">
                    <input id="name_admin" name="name_admin" class="form-control" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label for="email_admin" class="col-sm-3 col-form-label text-right">{{ __('E-mail') }}</label>
                <div class="col-sm-9">
                    <input id="email_admin" name="email_admin" class="form-control" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label for="phone_admin" class="col-sm-3 col-form-label text-right">{{ __('Телефон') }}</label>
                <div class="col-sm-9">
                    <input id="phone_admin" name="phone_admin" class="phone form-control" type="text">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Доступные опции</h4>
          <div class="row">
            <div class="col-lg-12">
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o1"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Просторный футбольный зал</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o2"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Личный шкафчик в раздевалке</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o3"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Удобная парковка по пропускам</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o4"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Удобное расписание</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o5"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Шаговая доступность от метро</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o6"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Уникальная форма </p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o7"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Вход по пропускам</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o8"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Зона ожидания для родителей</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="o9"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;"> Рядом с вашим домом*</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Доступные дни недели</h4>
          <div class="row">
            <div class="col-lg-12">
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d1"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Понедельник</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d2"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Вторник</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d3"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Среда</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d4"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Четверг</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d5"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Пятница</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d6"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Суббота</p>
              </div>
              <div style="display: flex; margin: 15px 0;">
                <input type="checkbox" name="d7"><p style="margin: auto 0 auto 10px; font-weight: 800; font-size: 1rem;">Воскресенье</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Код миникарты из Яндекс.Карт</h4>
          <div class="form-group row">
              <div class="col-12">
                  <textarea id="message" name="geo_mark" class="form-control" rows="6"></textarea>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
  jQuery(document).ready(function(){

    $('.phone').mask('+0 (000) 000 00 00', {placeholder: "+ (__) _  __"});

  });
</script>
@endsection
