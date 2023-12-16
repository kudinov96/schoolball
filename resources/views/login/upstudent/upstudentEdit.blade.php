@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/upstudent/{{ $upstudent->id }}/edit" >
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
              <div class="col-lg-6">
                  <div class="form-group row">
                      <label for="surname" class="col-sm-2 col-form-label text-right">{{ __('Фамилия') }}</label>
                      <div class="col-sm-10">
                          <input id="surname" name="surname" class="form-control" type="text"  value="{{ $upstudent->surname }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Имя') }}</label>
                      <div class="col-sm-10">
                          <input id="name" name="name" class="form-control" type="text"  value="{{ $upstudent->name }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="club_up" class="col-sm-2 col-form-label text-right">{{ __('Новый клуб') }}</label>
                      <div class="col-sm-10">
                          <input id="club_up" name="club_up" class="form-control" type="text"  value="{{ $upstudent->club_up }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на главной странице') }}</label>
                    <div class="col-sm-6">
                      <input id="display-front" type="checkbox" class="form-control-new" name="display-front" @if ($upstudent->display_front == True) checked @endif>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6">
                <label for="photo_sb">{{ __('Фото из "Школы мяча"') }}</label>
                <input type="file" id="input-file-now-custom-1" name="photo_sb" class="dropify" data-default-file="@if ($upstudent->photo_sb == ''){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace('public/', '', $upstudent->photo_sb) }}@endif" required/>
                <label for="photo_up">{{ __('Фото из нового клуба') }}</label>
                <input type="file" id="input-file-now-custom-1" name="photo_up" class="dropify" data-default-file="@if ($upstudent->photo_up == ''){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace('public/', '', $upstudent->photo_up) }}@endif" required/>
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
<form id="deleteform" method="POST" action="/upstudent/{{ $upstudent->id }}/delete">
  @csrf
</form>
<script src="{{ asset('assets/pages/jquery.form-editor.init.js') }}"></script>
<script src="{{ asset('assets/plugins/custombox/custombox.min.js') }}"></script>
<script src="{{ asset('assets/plugins/custombox/custombox.legacy.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.modal-animation.js') }}"></script>

@endsection
