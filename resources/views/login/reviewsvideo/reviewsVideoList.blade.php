@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allreviews as $review)
        <div class="col-md-4 col-lg-3 col-12">
          <a href="/reviewsvideo/{{ $review->id }}/edit">
            <div class="card">
                <h3  class="btn btn-primary">{{ $review->name }}</h3>

                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($review->img == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $review->img) }} @endif" alt="">
                <div class="card-body">

                    <a href="/reviewsvideo/{{ $review->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>
@endsection
