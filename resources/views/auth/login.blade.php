@extends('layouts.app')

@section('content')
<div class="topPartsGrayForAuth">
</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-8 text-center AuthH3">
         <h3>Вход в личный кабинет</h3>
      </div>
      <div class="col-8 mobAuthImg text-center">
        <img src="{{ asset('assets/authentication_flatline.png') }}" alt="" style="height: 300px;padding-top: 50px;">
      </div>
        <div class="col-md-8">
            <div class="card-new">
                <!-- <div class="card-header-new text-center">{{ __('Авторизация') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 15px;">
                            <label for="email" class="col-md-4 col-form-label-new text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control-new @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top">
                            <label for="password" class="col-md-4 col-form-label-new text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control-new @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary-new">
                                    {{ __('Войти') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a> -->
                                @endif
                            </div>
                            <div class="col-6 offset-3 text-center" style="margin-top: 25px;">
                              Ещё не с нами?
                              <a href="/register">Зарегистрироваться</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
