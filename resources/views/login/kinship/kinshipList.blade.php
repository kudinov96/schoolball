@extends('layouts.app')

@section('content')
<div class="topPartsGrayForAuth">
</div>
<div class="container">
  <div class="mainCard">
    <div class="row">
      <div class="col-12 text-center AuthH3" style="margin-bottom: 20px;">
        <h3> Мои дети </h3>
      </div>
      @yield ('content-menu', View::make('content-menu'))
      <div class="col-9">
          <div class="card-new">
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <a href="/kinshipNew">
                      <div class="coachCardList" style="cursor: pointer">
                        <div class="row">
                          <div class="col-8 offset-2">
                            <div class="coachImgAdd" style="height: 220px;">
                              <img src="{{ asset('assets/plus.png') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="coachInfoList" style="padding-top:30px;">
                          <h3>Добавить ребенка</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  @foreach ($allkid as $kid)
                    <div class="col-4">
                      <a href="/kinship/{{ $kid->id }}/edit">
                        <div class="coachCardList">
                          <div class="coachImgList">
                            <img src="@if ($kid->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $kid->photo) }} @endif" alt="">
                          </div>
                          <div class="coachInfoList">
                            <h3>{{ $kid->surname }} {{ $kid->name }}</h3>
                          </div>
                        </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>



@endsection
