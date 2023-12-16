@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/upstudentNew" >
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
                          <input id="surname" name="surname" class="form-control" type="text" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Имя') }}</label>
                      <div class="col-sm-10">
                          <input id="name" name="name" class="form-control" type="text" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="club_up" class="col-sm-2 col-form-label text-right">{{ __('Новый клуб') }}</label>
                      <div class="col-sm-10">
                          <input id="club_up" name="club_up" class="form-control" type="text" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на главной странице') }}</label>
                    <div class="col-sm-6">
                      <input id="display-front" type="checkbox" class="form-control-new" name="display-front" >
                    </div>
                  </div>
              </div>
              <div class="col-lg-6">
                <label for="photo_sb">{{ __('Фото из "Школы мяча"') }}</label>
                <input type="file" id="input-file-now-custom-1" name="photo_sb" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" required/>
                <label for="photo_up">{{ __('Фото из нового клуба') }}</label>
                <input type="file" id="input-file-now-custom-1" name="photo_up" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" required/>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script src="{{ asset('assets/pages/jquery.form-editor.init.js') }}"></script>

@endsection
