@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allnews as $news)
        @php $arr = explode("-", $news->date); $date = $arr[2].'.'.$arr[1].'.'.$arr[0]; @endphp

        <div class="col-md-4 col-lg-3 col-12">
          <a href="/news/{{ $news->id }}/edit">
            <div class="card">
                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($news->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $news->photo) }} @endif" alt="">
                <div class="card-body">
                    <h4 class="card-title mt-0">{{ $news->name }}</h4>
                    <p class="card-text text-muted font-13" style="margin-bottom: 1rem !important;">{{ $date }}</p>
                    <a href="/news/{{ $news->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>
@endsection
