@extends('layouts.app')

@section('content')
<div class="topPartsGrayForAuth">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 text-center AuthH3">
           <h3>Регистрация</h3>
        </div>
        <div class="col-8 mobAuthImg text-center">
          <img src="{{ asset('assets/authentication_flatline.png') }}" alt="" style="height: 300px;padding-top: 50px;">
        </div>
        <div class="col-md-8">
            <div class="card-new">
                <!-- <div class="card-header-new text-center" >{{ __('Регистрация') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 15px;">
                            <label for="name" class="col-md-4 col-form-label-new text-md-right">{{ __('Имя') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control-new @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top: 15px;">
                            <label for="surname" class="col-md-4 col-form-label-new text-md-right">{{ __('Фамилия') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control-new @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top: 15px;">
                            <label for="secondname" class="col-md-4 col-form-label-new text-md-right">{{ __('Отчество') }}</label>

                            <div class="col-md-6">
                                <input id="secondname" type="text" class="form-control-new @error('secondname') is-invalid @enderror" name="secondname" value="{{ old('secondname') }}" required autocomplete="secondname" autofocus>

                                @error('secondname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label-new text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control-new @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label-new text-md-right">{{ __('Телефон') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="phone_number" class="form-control-new phone" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label-new text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control-new @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label-new text-md-right">{{ __('Повторите пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control-new" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="margin-top: 35px;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary-new">
                                    {{ __('Зарегистрироваться') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function(){

  $('.phone').mask('+0 (000) 000 00 00', {placeholder: "+ (__) _  __"});

  });
</script>
@endsection
