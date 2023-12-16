@extends('layouts.app')
@section('title')
    <title>Наши новости - Школа мяча</title>
@endsection
@section('description')
    <meta name="description" content="Новости и информация от Школы Мяча">
@endsection
@section('content')
<div class="topPartsGrayForAuth">
</div>



<div class="topPartsGray no-radius d-none d-md-block" style="background: #ffffff;
    margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="title-desc" style="margin-bottom: 32px !important;">Новости Школы мяча</h1>
                <div class=" text-center">
                    <img src="{{ asset('assets/fast_working_flatline.png') }}" alt="" style="height: 300px;padding-top: 50px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section - schoolball info mob !-->


<!-- Section - schoolball info mob !-->
<div class="topPartsGray  no-radius d-sm-block d-md-none" style="background: #ffffff;
    margin-top: 40px;">
    <div class="container">
        <div class="col-md-12 text-center">
            <h1 class="title-desc-mob" style="margin-bottom: 0px !important;">Новости Школы мяча
            </h1>
            <div class="col-md-8 col-sm-12 text-center">
                <img src="{{ asset('assets/fast_working_flatline.png') }}" alt="" style="width: 250px; height: 250px;padding-top: 50px;">
            </div>
        </div>
    </div>
</div>



<div class="container" style="margin-top: 40px;">
  <div class="row">
    @foreach ($arrnews as $news)
    @php $arr = explode("-", $news->date); $date = $arr[2].'.'.$arr[1].'.'.$arr[0]; @endphp
    <div class="col-md-4 col-sm-12">
      <a href="news/{{ $news->id }}">
        <div class="newsCard front-newsCard mb-5">
          <img src="@if ($news->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $news->photo) }} @endif" alt="">
          <h4>{{ $news->name }}</h4>
          <h5>{{ $date }}</h5>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

@endsection
