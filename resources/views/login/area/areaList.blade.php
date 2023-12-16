@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allarea as $area)
        <div class="col-md-4 col-lg-3 col-12">
          <a href="/area/{{ $area->id }}/edit">
            <div class="card">
                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($area->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $area->photo) }} @endif" alt="">
                <div class="card-body">
                    <h4 class="card-title mt-0">{{ $area->name }}</h4>
                    <p class="card-text text-muted font-13" style="margin-bottom: 1rem !important;">{{ $area->adress }}</p>
                    <a href="/area/{{ $area->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>
@endsection
