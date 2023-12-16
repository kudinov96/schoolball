@extends('layouts.account')


@section('content')
<div class="topPartsGrayForAuth">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 text-center AuthH3">
           <h3>Добро пожаловать, {{ Auth::user()->name }}!</h3>
        </div>
    </div>
</div>
<div class="container">
  <div class="mainCard">
    <div class="row">
      <div class="col-9">
          <div class="card-new">
              <div class="card-body">

                <div class="row">
                  <div class="col-6 text-center">
                    <h3>Новости</h3>
                    <div class="row">
                      <div class="col-6 profileNews">
                        <img src="{{ asset('assets/news1.png') }}" alt="">
                        <h4>Тема</h4>
                        <h5>Дата</h5>
                      </div>
                      <div class="col-6 profileNews">
                        <img src="{{ asset('assets/news1.png') }}" alt="">
                        <h4>Тема</h4>
                        <h5>Дата</h5>
                      </div>
                      <div class="col-6 profileNews">
                        <img src="{{ asset('assets/news1.png') }}" alt="">
                        <h4>Тема</h4>
                        <h5>Дата</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 text-center profileCalendar">
                    <h3>Календарь</h3>
                  </div>
                  <div class="col-6 text-center">
                    <h3>Мои покупки</h3>
                    <div class="row">
                      <div class="col-6">
                        <div class=" profileBoughtSmth text-center">
                          <h3>6</h3>
                          <h4>тренеровок</h4>
                          <h5>01.11.1111</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class=" profileBoughtSmth text-center">
                          <h3>6</h3>
                          <h4>тренеровок</h4>
                          <h5>01.11.1111</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class=" profileBoughtSmth text-center">
                          <h3>6</h3>
                          <h4>тренеровок</h4>
                          <h5>01.11.1111</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                  <!-- <h4>{{ __('Вы авторизированы в системе:') }}</h4>
                  <h4>ФИО: {{ Auth::user()->name }}  {{ Auth::user()->surname }}  {{ Auth::user()->secondname }}</h4>
                  <h4>Телефон: {{ Auth::user()->phone_number }}</h4>
                  <h4>E-mail: {{ Auth::user()->email }}</h4>
                  <a class="dropdown-item-new text-center" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Выход') }}
                  </a> -->
                  <form id="coachList" action="{{ route('coachList') }}" method="GET" style="display: none;">
                  </form>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </div>
      </div>
    </div>

  </div>
</div>
@endsection
