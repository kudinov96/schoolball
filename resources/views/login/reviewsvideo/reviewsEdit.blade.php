@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/reviews/{{ $review->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">


                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($review->image == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $review->image) }}@endif" />

                <hr>



                <div class="form-group row">
                <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на главной странице') }}</label>
                <div class="col-sm-6">
                  <input id="display-front" type="checkbox" class="form-control-new" name="display-front" @if ($review->display_front == True) checked @endif>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">Удаление объекта из базы данных</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                  Вы уверены что хотите удалить объект из базы данных?
                  Если вы подтвердите данное действие восстановление объекта
                  будет не возможным.
                </p>
                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center" onclick="event.preventDefault(); document.getElementById('deleteform').submit();">Подтвердить удаление</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    jQuery(document).ready(function(){

        $('.phone').mask('+0 (000) 000-00-00', {placeholder: "+ (__) _  __"});

    });
</script>



<form id="deleteform" method="POST" action="/reviews/{{ $review->id }}/delete">
  @csrf
</form>
<script src="{{ asset('assets/plugins/custombox/custombox.min.js') }}"></script>
<script src="{{ asset('assets/plugins/custombox/custombox.legacy.min.js') }}"></script>

<script src="{{ asset('assets/pages/jquery.modal-animation.js') }}"></script>

@endsection



