@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/mainindex/{{ $mainindex->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">

                <h4 class="mt-0 header-title">Как проходят наши тренировки</h4>


                @foreach(explode('|',$mainindex->images_traning ) as $row)
                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}"  alt="" style="width: 360px;"> <br>
                @endforeach

                <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>



            </div>
          </div>
             <hr>

          </div>

          <div class="col-12">
              <div class="col-md-10 offset-md-1 mainHeaderButton">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>

              </div>
          </div>
        </div>
      </div>

    </div>

</form>






@endsection
