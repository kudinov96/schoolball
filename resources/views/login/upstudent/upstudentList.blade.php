@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allupstudent as $upstudent)
        <div class="col-md-4 col-lg-3 col-12">
          <a href="/upstudent/{{ $upstudent->id }}/edit">
            <div class="card">
                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($upstudent->photo_up == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $upstudent->photo_up) }} @endif" alt="">
                <div class="card-body">
                    <h4 class="card-title mt-0">{{ $upstudent->surname }} {{ $upstudent->name }}</h4>
                    <p class="card-text text-muted font-13" style="margin-bottom: 1rem !important;">{{ $upstudent->club_up }}</p>
                    <a href="/upstudent/{{ $upstudent->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>
@endsection
