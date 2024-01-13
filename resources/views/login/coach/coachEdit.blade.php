@extends('layouts.account')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <form id="sendform" method="POST" enctype="multipart/form-data" action="/coach/{{ $coach->id }}/edit">
      @csrf
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Имя') }}</label>
                <div class="col-sm-10">
                  <input id="name" name="name" class="form-control" type="text" value="{{ $coach->name }}" required autocomplete="name">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Фамилия') }}</label>
                <div class="col-sm-10">
                  <input id="surname" name="surname" class="form-control" type="text" value="{{ $coach->surname }}" required autocomplete="surname">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Отчество') }}</label>
                <div class="col-sm-10">
                  <input id="secondname" name="secondname" class="form-control" type="text" value="{{ $coach->secondname }}" required autocomplete="secondname">
                </div>
              </div>
              <div class="form-group row">
                <label for="sex" class="col-sm-2 col-form-label text-right">{{ __('Пол') }}</label>
                <div class="col-sm-10">
                  <select name="sex" class="custom-select">
                    <option value="" @if (strval($coach->sex) == "") selected="selected" @endif>Не выбрано</option>
                    <option value="1" @if (strval($coach->sex) == "1") selected="selected" @endif> Мужской </option>
                    <option value="0" @if (strval($coach->sex) == "0") selected="selected" @endif> Женский </option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="date-birth" class="col-sm-2 col-form-label text-right">{{ __('Дата рождения') }}</label>
                <div class="col-sm-10">
                  <input id="date-birth" type="text" class="datepicker-here form-control" name="date-birth" value="{{ $date }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="display-front" class="col-md-4 col-form-label-new text-md-right" >{{ __('Отображать на главной') }}</label>
                <div class="col-md-8">
                  <input id="display-front" type="checkbox" class="form-control-new" name="display-front" @if ($coach->display_front == 1) checked="checked" @endif>
                </div>
              </div>

                <div class="form-group row">
                    <label for="display-front-camp" class="col-md-4 col-form-label-new text-md-right" >{{ __('Отображать на главной зимнего лагеря') }}</label>
                    <div class="col-md-8">
                        <input id="display-front-camp" type="checkbox" class="form-control-new" name="display-front-camp" @if ($coach->display_front_camp == 1) checked="checked" @endif>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pages" class="col-md-4 control-label">Страницы</label>

                    <div class="col-md-6">
                        <select multiple class="form-control" id="pages" name="pages[]">
                            <option value="Выходные" {{ in_array('Выходные', explode(',', $coach->pages)) ? 'selected' : '' }}>Футбольные выходные</option>

                            <option value="Киевская" {{ in_array('Киевская', explode(',', $coach->pages)) ? 'selected' : '' }}>Киевская</option>
                            <option value="Кузьминки" {{ in_array('Кузьминки', explode(',', $coach->pages)) ? 'selected' : '' }}>Кузьминки</option>
                            <option value="Горизонт" {{ in_array('Горизонт', explode(',', $coach->pages)) ? 'selected' : '' }}>Горизонт</option>
                            <option value="Дмитров" {{ in_array('Дмитров', explode(',', $coach->pages)) ? 'selected' : '' }}>Дмитров</option>
                            <option value="Хотьково" {{ in_array('Хотьково', explode(',', $coach->pages)) ? 'selected' : '' }}>Хотьково</option>

                        </select>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                    <div class="col-sm-10">
                        <select name="club_ids[]" class="custom-select" multiple>
                            @foreach ($clublist as $club)
                                @php $selected = $coachNorm->clubs->where("id", $club->id)->first(); @endphp
                                <option value="{{ $club->id }}" @if($selected) selected @endif>{{ $club->name }} {{ $club->address }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
              <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($coach->photo == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}@endif" />
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Контактная информация</h4>
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                  <label for="location" class="col-sm-1 col-form-label text-right">{{ __('Адрес') }}</label>
                  <div class="col-sm-11">
                      <input id="location" name="location" class="form-control" type="text" value="{{ $coach->location }}" required autocomplete="name">
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label text-right">{{ __('E-Mail') }}</label>
                <div class="col-sm-10">
                    <input id="email" name="email" class="form-control" type="email" value="{{ $coach->email }}">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group row">
                <label for="phone_number" class="col-sm-2 col-form-label text-right">{{ __('Телефон') }}</label>
                <div class="col-sm-10">
                    <input id="phone_number" name="phone_number" class="phone form-control" type="phone_number" value="{{ $coach->phone_number }}" required>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Страницы в социальных сетях</h4>
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="form-group row">
                <div class="col-12">
                  <div class="input-group">
                      <span class="input-group-prepend">
                        <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i></button>
                      </span>
                      <input type="text" id="social-fb" name="social-fb" class="form-control" value="{{ Auth::user()->social_fb }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="form-group row">
                <div class="col-12">
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <button type="button" class="btn btn-primary"><i class="fab fa-vk"></i></button>
                    </span>
                    <input type="text" id="social-vk" name="social-vk" class="form-control" value="{{ Auth::user()->social_vk }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="form-group row">
                <div class="col-12">
                  <div class="input-group">
                    <span class="input-group-prepend">
                      <button type="button" class="btn btn-primary"><i class="fab fa-instagram"></i></button>
                    </span>
                    <input type="text" id="social-inst" name="social-inst" class="form-control" value="{{ Auth::user()->social_vk }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Карточка тренера</h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label for="education" class="col-sm-4 col-form-label-new text-md-right">{{ __('Образование') }}</label>
                <div class="col-sm-8">
                  <input id="education" type="text" class="form-control" name="education" value="{{ $coach->education}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="cloth_size" class="col-md-4 col-form-label-new text-md-right" >{{ __('Размер одежды') }}</label>
                <div class="col-sm-8">
                   <select name="cloth_size" class="custom-select">
                      <option value="" @if ($coach->cloth_size == "") selected="selected" @endif>Не выбрано</option>
                      <option value="0" @if ($coach->cloth_size == "0") selected="selected" @endif> XS </option>
                      <option value="1" @if ($coach->cloth_size == "1") selected="selected" @endif> S </option>
                      <option value="2" @if ($coach->cloth_size == "2") selected="selected" @endif> M </option>
                      <option value="3" @if ($coach->cloth_size == "3") selected="selected" @endif> L </option>
                      <option value="4" @if ($coach->cloth_size == "4") selected="selected" @endif> XL </option>
                      <option value="5" @if ($coach->cloth_size == "5") selected="selected" @endif> XXL </option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="marital-st" class="col-sm-4 col-form-label-new text-md-right">{{ __('Семейное положение') }}</label>
                <div class="col-sm-8">
                  <select name="marital-st" class="custom-select">
                    <option value="" @if ($coach->marital_status == "") selected="selected" @endif>Не выбрано</option>
                    <option value="0" @if ($coach->marital_status == "0") selected="selected" @endif> Женат/Замужем </option>
                    <option value="1" @if ($coach->marital_status == "1") selected="selected" @endif> Холост/Не замужем </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label for="license" class="col-sm-2 col-form-label-new text-md-right">{{ __('Лицензия') }}</label>
                <div class="col-sm-10">
                  <input id="license" type="text" class="form-control" name="license" value="{{ $coach->license}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="seniority" class="col-sm-2 col-form-label-new text-md-right">{{ __('Стаж') }}</label>
                <div class="col-sm-10">
                  <input id="seniority" type="text" class="form-control" name="seniority" value="{{ $coach->seniority}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="kids" class="col-sm-2 col-form-label-new text-md-right">{{ __('Дети') }}</label>
                <div class="col-sm-10">
                  <select name="kids" class="custom-select">
                    <option value="" @if ($coach->kids == "") selected="selected" @endif>Не выбрано</option>
                    <option value="0" @if ($coach->kids == "0") selected="selected" @endif> Есть </option>
                    <option value="1" @if ($coach->kids == "1") selected="selected" @endif> Нет </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Карьера') }}</label>
                <div class="col-md-10">
                  <textarea id="career" rows="5" type="text" class="form-control" name="career">{{ $coach->career }}</textarea>
                </div>
              </div>
            </div>

              <div class="col-12">
                  <div class="form-group row">
                      <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Карьера футболиста') }}</label>
                      <div class="col-md-10">
                          <textarea id="career" rows="5" type="text" class="form-control" name="career_football">{{ $coach->career_football }}</textarea>
                      </div>
                  </div>
              </div>

              <div class="col-12">
                  <div class="form-group row">
                      <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Карьера тренера') }}</label>
                      <div class="col-md-10">
                          <textarea id="career" rows="5" type="text" class="form-control" name="career_trainer">{{ $coach->career_trainer }}</textarea>
                      </div>
                  </div>
              </div>

              <div class="col-12">
                  <div class="form-group row">
                      <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Достижения') }}</label>
                      <div class="col-md-10">
                          <textarea id="career" rows="5" type="text" class="form-control" name="achievements">{{ $coach->achievements }}</textarea>
                      </div>
                  </div>
              </div>

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Доступные дни недели</h4>
          <div class="row">
            <div class="group-info" style="width: 100%; background-color: #EEE; margin: 20px; padding: 20px; border-radius: 15px; font-weight: 800;">
              <span class="col" style="margin: auto;"><input type="checkbox" name="d1" @if ($arrday[0] == 1) checked="checked" @endif> Понедельник</span>
              <span class="col" style="margin: auto;"><input type="checkbox" name="d2" @if ($arrday[1] == 1) checked="checked" @endif> Вторник </span>
              <span class="col" style="margin: auto;"><input type="checkbox" name="d3" @if ($arrday[2] == 1) checked="checked" @endif> Среда</span>
              <span class="col" style="margin: auto;"><input type="checkbox" name="d4" @if ($arrday[3] == 1) checked="checked" @endif> Четверг</span>
              <span class="col" style="margin: auto;"><input type="checkbox" name="d5" @if ($arrday[4] == 1) checked="checked" @endif> Пятница</span>
              <span class="col" style="margin: auto;"><input type="checkbox" name="d6" @if ($arrday[5] == 1) checked="checked" @endif> Суббота</span>
              <span class="col" style="margin: auto;"><input type="checkbox" name="d7" @if ($arrday[6] == 1) checked="checked" @endif> Воскресенье</span>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
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
<form id="deleteform" method="POST" action="/coach/{{ $coach->id }}/delete">
  @csrf
</form>
<script type="text/javascript">
  jQuery(document).ready(function(){

    $('.phone').mask('+0 (000) 000 00 00', {placeholder: "+ (__) _  __"});

  });
</script>

@endsection
