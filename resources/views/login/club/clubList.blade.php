@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allclub as $club)
        <div class="col-md-4 col-lg-3 col-12">
          <a href="/club/{{ $club->id }}/edit">
            <div class="card">
                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($club->logo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $club->logo) }} @endif" alt="">
                <div class="card-body">
                    <h4 class="card-title mt-0">{{ $club->name }}</h4>
                    <a href="/club/{{ $club->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>
@endsection
