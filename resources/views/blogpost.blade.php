@extends('layouts.app')
@section('title')
    <title>{{ $post->name }} - блог Школа Мяча</title>
@endsection
@section('description')
    <meta name="description" content="{{ $post->name }} - статья из блога Школа Мяча ">
@endsection

@section('content')
    <style>
        .AuthH3 h1 {
            padding-top: 180px;
            font-family: "IBMPlexSans", sans-serif;
            font-size: 48px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.17;
            letter-spacing: normal;
            text-align: center;
            color: #303337;
        }
    </style>
<div class="topPartsGrayForAuth">
</div>

<div class="topOfPage">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center AuthH3" style="margin-bottom: 20px;">
         <h1>{{ $post->name }}</h1>

      </div>

        @if ($post->photo == "") @else
            <div class="col-10 mobNewsImage text-center">
            <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $post->photo) }}" alt="" style="border-radius: 40px; object-fit: cover; height: 450px; margin-top: 30px;">
            </div>
        @endif

    </div>
  </div>
</div>
<div class="container" style=" ">
  <div class="row">
    <div class="col-12 text-left">
      <div class="newsBody text-left" style="    text-align: left !important;">
        {!! $post->content !!}
      </div>
    </div>
    <div class="w-100"></div>



  </div>
</div>

<div class="col-12 firstSectionDescription text-center" style="margin-bottom: 50px;">

    <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Остались вопросы?
    </button>
</div>


@endsection
