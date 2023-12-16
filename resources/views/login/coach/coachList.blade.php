@extends('layouts.account')

@section('content')
    <div class="row">
      @foreach ($allcoachs as $coach)
        <div class="col-md-4 col-lg-3 col-12">
          <a href="/coach/{{ $coach->id }}/edit">
            <div class="card">
                <img style="object-fit: cover; height: 300px;"class="card-img-top img-fluid" src="@if ($coach->photo == "") {{ asset('assets/no_photo.jpg') }} @else {{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }} @endif" alt="">
                <div class="card-body">
                    <h4 class="card-title mt-0">{{ $coach->surname }} {{ $coach->name }}</h4>
                    <p class="card-text text-muted font-13" style="margin-bottom: 1rem !important;">Тренерский опыт более {{ $coach->seniority }} лет</p>
                    <a href="/coach/{{ $coach->id }}/edit" class="btn btn-primary">Редактировать</a>
                </div><!--end card -body-->
            </div><!--end card-->
          </a>
        </div><!--end col-->
      @endforeach
    </div>

    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalLabel">Создание нового тренера по номеру телефона</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form method="POST" enctype="multipart/form-data" id="create-coach" action="{{ route('coachNew')}}">
                    @csrf
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group row" style="margin-top: 15px;"> <!-- Search -->
                          <label for="phone" class="col-md-4 col-form-label-new text-md-right">{{ __('Поиск по номеру телефона') }}</label>
                          <div class="col-md-8">
                            <input id="phone" type="text" class="form-control phone" name="phone" required>
                          </div>
                          <label id="findCoach" class="col-12 col-form-label-new text-md-right"></label>
                        </div>
                      </div>
                    </div>
                  </form>
                  <button id="btn-create" type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center" onclick="event.preventDefault(); document.getElementById('create-coach').submit();" disabled>Создать тренера</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript">
      $("#phone").focusout(function(event){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var phone = $("input#phone").val();
        $.ajax({
            type: "POST",
            url: "/findCoachOnPhone",
            data: {_token: CSRF_TOKEN, phone},
            success: function( result ) {
                if (result != 'False') {
                  document.getElementById("findCoach").innerHTML = result;
                  document.getElementById("btn-create").disabled = false;
                } else if (result == 'False') {
                  document.getElementById("findCoach").innerHTML = "Пользователь не найден";
                  document.getElementById("btn-create").disabled = true;
                }
              }
            });
        }
      );
      function sendForm() {
        $.ajax({
            type: "POST",
            url: "/coachNew",
            data: $("#sendform").serialize(),
            success: function( result ) {
              if (result == 'DONE') {
                window.location.replace("/coachList");
              }
            }
        });
      }
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function(){

        $('.phone').mask('+7 (000) 000 00 00', {placeholder: "+ (__) _  __"});

      });
    </script>
@endsection
