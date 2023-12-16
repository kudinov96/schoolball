@extends('layouts.account')

@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>



    <form id="sendform" method="POST" enctype="multipart/form-data" action="/wekeends/{{ $mainindex->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">

                <h4 class="mt-0 header-title">Место футбольных выходных</h4>


                @foreach(explode('|',$mainindex->images_traning ) as $row)
                <div class="image-container">
                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}"  alt="" style="width: 360px;">
                    <br>
                    <form method="post" action="{{ route('wekeendsEdit', $mainindex->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="delete_image" value="{{ $row }}">
                        <button type="submit" class="delete-image-btn btn btn-dark waves-effect waves-light">Удалить</button>
                    </form>
                </div>
            @endforeach

            <input type="file" class="form-control" name="images[]" multiple>



<hr>
                <h4 class="mt-0 header-title">Таймер</h4>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">{{ __('Дата начала смены') }}</label>
                    <div class="col-sm-10">
                        <input name="date" type="text" class="date-format form-control"  value="{{$mainindex->date}} " >


                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label text-right">{{ __('Свободных мест') }}</label>
                    <div class="col-sm-10">
                        <input   type="text" class="datepicker-here form-control" name="places" value="{{$mainindex->places}} ">
                    </div>
                </div>

                <hr>

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


    <script type="text/javascript">

        $('.date-format').datetimepicker({
            format: 'dd.mm.yyyy hh:ii',
            autoclose:true,
            language: 'ru',
            orientation: "top"
        });
    </script>




@endsection
