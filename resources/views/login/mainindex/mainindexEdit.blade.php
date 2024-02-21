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

                <input type="file" class="form-control" name="images[]" placeholder="address" multiple>



            </div>
          </div>
            <hr>

            <div class="abonements-edit">
                <h3>Абонементы</h3>
                <select name="index_abonements[]" multiple="multiple" class="form-control select2" style="min-height: 250px">
                    <option value="">Не выбрано</option>
                    @foreach ($abonements as $abonement)
                        <option value="{{ $abonement->id }}" @if(in_array($abonement->id, $index_abonements)) selected @endif>{{ $abonement->id }}: {{ $abonement->name }}</option>
                    @endforeach
                </select>
            </div>

          </div>

          <div class="col-12">
              <div class="col-md-10 mainHeaderButton mb-4">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>

              </div>
          </div>
        </div>
      </div>

    </div>

</form>






@endsection
