@extends('layouts.app')
@section('title')
    <title>Блог детской футбольной школы “Школа мяча”</title>
@endsection
@section('description')
    <meta name="description" content="Полезная информация в блоге футбольной школы “Школа мяча”">
@endsection
@section('content')
<div class="topPartsGrayForAuth">
</div>

<style>
    .h1-title {
        font-family: "IBMPlexSans-Bold", sans-serif;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: 0.4px;
        margin: 0 0 16px;
        font-size: 56px;
        line-height: 1.14;
        color: #303337;
    }


    .h1-title-mob {
        font-family: "IBMPlexSans-Bold", sans-serif;

        font-weight: bold;
        font-stretch: normal;
        font-style: normal;


        /* font-family: IBMPlexSans; */



        line-height: 1.14;
        letter-spacing: 0.4px;
        color: #303337;
        font-size: 38px;
        margin-top: 5px;
        margin-bottom: 5px;
    }

</style>




<div class="topPartsGray no-radius d-none d-md-block" style="background: #ffffff;
    margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="title-desc" style="margin-bottom: 32px !important;">Блог</h1>
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
            <h1 class="title-desc-mob" style="margin-bottom: 0px !important;">Блог
            </h1>
         </div>
    </div>
</div>


<div class="container " style="margin-top: 40px; margin-bottom: 10px;">
  <div class="row">
    @foreach ($arrblog as $blog)
          @if ($blog->display_front == 1)
     <div class="col-md-4 col-sm-12">
      <a href="blog/{{ $blog->id }}">
        <div class="newsCard front-newsCard">
          <img src="@if ($blog->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $blog->photo) }} @endif" alt="">
          <h4 class="text-center">{{ $blog->name }}</h4>

        </div>
      </a>
    </div>
          @endif
    @endforeach
  </div>
</div>

@endsection
