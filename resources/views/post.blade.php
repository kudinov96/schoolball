@extends('layouts.app')

@section('title')
    <title>{{ $post->name }} - новость Школа Мяча</title>
@endsection
@section('description')
    <meta name="description" content="{{ $post->name }} - новости и информация от Школы Мяча">
@endsection

@section('content')
<div class="topPartsGrayForAuth">
</div>

<div class="topOfPage">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center AuthH3" style="margin-bottom: 20px;">
        @php $arr = explode("-", $post->date); $date = $arr[2].'.'.$arr[1].'.'.$arr[0]; @endphp
        <h1>{{ $post->name }}</h1>
        <h5>{{ $date }}</h5>
      </div>
      <div class="col-10 mobNewsImage text-center">
        <img src="@if ($post->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $post->photo) }} @endif" alt="" style="border-radius: 40px; object-fit: cover; height: 450px; margin-top: 30px;">
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-top: 40px;">
  <div class="row">
    <div class="col-8 offset-2 text-center">
      <div class="newsBody text-center">
        {!! $post->content !!}
      </div>
    </div>
    <div class="w-100"></div>
    <div class="col-12 text-left lastNews">
      <h4>Последние новости</h4>
    </div>
    @foreach ($lastnews as $news)
    @php $arr = explode("-", $news->date); $date = $arr[2].'.'.$arr[1].'.'.$arr[0]; @endphp
    <div class="col-md-4">
      <a href="{{route('post', ['id' => $news->id]) }}">
        <div class="newsCard front-newsCard">
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
