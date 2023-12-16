@extends('layouts.app')

@section('content')
<div class="topPartsGrayForAuth">
</div>
<div class="container">
  <div class="row">
    <div class="col-12 text-center AuthH3" style="margin-bottom: 20px;">
      <h3>Создание записи площадки</h3>
    </div>
    @yield ('content-menu', View::make('content-menu'))
    <div class="col-9">
      <div class="row cards-new">
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data" action="/kinship/{{ $kid->id }}/edit">
            @csrf
            <div class="row">
              <h3 style="height: 32px; width: 100%; font-family: IBMPlexSans-Bold; font-size: 22px; font-weight: bold; font-stretch: normal; font-style: normal; line-height: 1.45; letter-spacing: normal; color: #303337; margin-top: 15px; margin-left: 20px; text-align: center;"> Основная информация </h3>
              <div class="col-8">
                <div class="form-group row" style="margin-top: 15px;"> <!-- Name -->
                  <label for="name" class="col-md-4 col-form-label-new text-md-right">{{ __('Имя') }}</label>
                  <div class="col-md-7">
                    <input id="name" type="text" class="form-control-new" name="name" required autocomplete="name" value="{{ $kid->name }}">
                  </div>
                </div>
                <div class="form-group row" style="margin-top: 15px;"> <!-- Surname -->
                  <label for="surname" class="col-md-4 col-form-label-new text-md-right">{{ __('Фамилия') }}</label>
                  <div class="col-md-7">
                    <input id="surname" type="text" class="form-control-new" name="surname" required autocomplete="surname" value="{{ $kid->surname }}">
                  </div>
                </div>
                <div class="form-group row"> <!-- Sex -->
                  <label for="sex" class="col-md-4 col-form-label-new text-md-right">{{ __('Пол') }}</label>
                  <div class="col-md-7">
                    <select name="sex" class="form-control-new">
                      <option value="" @if (strval($kid->sex) == "") selected="selected" @endif>Не выбрано</option>
                      <option value="1" @if (strval($kid->sex) == "1") selected="selected" @endif> Мужской </option>
                      <option value="0" @if (strval($kid->sex) == "0") selected="selected" @endif> Женский </option>
                    </select>
                  </div>
                </div>
                <div class="form-group row"> <!-- DateBirth -->
                  <label for="date-birth" class="col-md-4 col-form-label-new text-md-right">{{ __('Дата рождения') }}</label>
                  <div class="col-md-7">
                    <input id="date-birth" type="text" class="datepicker-here form-control-new" name="date-birth" value="{{ $date }}">
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group row"> <!-- Image -->
                  <div style="margin: 0 auto;">
                    <img id="img-preview" src="@if ($kid->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $kid->photo) }} @endif" style="object-fit: cover; width: 200px; height: 200px; border-radius: 100px; border: solid 4px rgba(254, 195, 17, 0.5); background-color: #ffffff;"/>
                    <br/>
                    <a href="#" id="reset-img-preview">Удалить изображение</a>
                  </div>
                  <div class="file-input" style="margin: 0 auto;">
                    <input type="file" name="img" id="img" class="file-input__input"/>
                    <label class="file-input__label" for="img">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas"data-icon="upload"class="svg-inline--fa fa-upload fa-w-16"role="img"xmlns="http://www.w3.org/2000/svg"viewBox="0 0 512 512">
                      <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                    </svg>
                    <span>Загрузить фото</span></label>
                  </div>
                </div>
              </div>
              <div class="col-12 text-center">
                <div class="col-md-10 offset-md-1 mainHeaderButton text-center">
                  <button type="submit" name="button">Сохранить и выйти</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('#img').change(function () {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            if (input.files[0].type.match('image.*')) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                console.log('Файл не является изображением');
            }
        } else {
            console.log('Возникла проблема с загрузкой изображения.');
        }
    });

    $('#reset-img-preview').click(function() {
        $('#img').val('');
        $('#img-preview').attr('src', '/assets/no_photo.jpg');
    });

    $('#form').bind('reset', function () {
        $('#img-preview').attr('src', '/assets/no_photo.jpg');
    });
</script>
<script type="text/javascript">
  jQuery(document).ready(function(){

    $('.phone').mask('+0 (000) 000 00 00', {placeholder: "+ (__) _  __"});

  });
</script>
@endsection
