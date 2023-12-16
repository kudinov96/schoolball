@extends('layouts.account')

@section('content')

<div class="row">
    <div class="col-lg-12">
      <form id="sendform" action="/edit" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Основная информация</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Имя') }}</label>
                                <div class="col-sm-10">
                                    <input id="name" name="name" class="form-control" type="text" value="{{ Auth::user()->name }}" required autocomplete="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Фамилия') }}</label>
                                <div class="col-sm-10">
                                    <input id="surname" name="surname" class="form-control" type="text" value="{{ Auth::user()->surname }}" required autocomplete="surname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Отчество') }}</label>
                                <div class="col-sm-10">
                                    <input id="secondname" name="secondname" class="form-control" type="text" value="{{ Auth::user()->secondname }}" required autocomplete="secondname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sex" class="col-sm-2 col-form-label text-right">{{ __('Пол') }}</label>
                                <div class="col-sm-10">
                                    <select name="sex" class="custom-select">
                                      <option value="" @if (strval(Auth::user()->sex) == "") selected="selected" @endif>Не выбрано</option>
                                      <option value="1" @if (strval(Auth::user()->sex) == "1") selected="selected" @endif> Мужской </option>
                                      <option value="0" @if (strval(Auth::user()->sex) == "0") selected="selected" @endif> Женский </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row"> <!-- DateBirth -->
                              <label for="date-birth" class="col-sm-2 col-form-label text-right">{{ __('Дата рождения') }}</label>
                              <div class="col-sm-10">
                                <input id="date-birth" type="text" class="datepicker-here form-control" name="date-birth" value="{{ $date }}">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if (Auth::user()->photo == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", Auth::user()->photo) }}@endif" />
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
            <div class="card">
              <div class="card-body">
                <h4 class="mt-0 header-title">Контактная информация</h4>

                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                        <label for="location" class="col-sm-1 col-form-label text-right">{{ __('Адрес') }}</label>
                        <div class="col-sm-11">
                            <input id="location" name="location" class="form-control" type="text" value="{{ Auth::user()->location }}" required autocomplete="name">
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-12">
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label text-right">{{ __('E-Mail') }}</label>
                      <div class="col-sm-10">
                          <input id="email" name="email" class="form-control" type="email" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group row">
                      <label for="phone_number" class="col-sm-2 col-form-label text-right">{{ __('Телефон') }}</label>
                      <div class="col-sm-10">
                          <input id="phone_number" name="phone_number" class="phone form-control" type="phone_number" value="{{ Auth::user()->phone_number }}" required>
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
      </form>
    </div><!--end col-->
</div><!--end row-->

<script type="text/javascript">
  jQuery(document).ready(function(){
    $('.phone').mask('+0 (000) 000 00 00', {placeholder: "+ (__) _  __"});
  });
</script>
<!-- jQuery  -->
<script src="{{ asset('js/datepicker.min.js') }}"></script>

@endsection
