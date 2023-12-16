@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allblog as $blog)

        <div class="col-md-4 col-lg-3 col-12">
          <a href="/blog/{{ $blog->id }}/edit">
            <div class="card">
                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($blog->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $blog->photo) }} @endif" alt="">
                <div class="card-body">
                    <h4 class="card-title mt-0">{{ $blog->name }}</h4>

                    <a href="/blog/{{ $blog->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>
@endsection
