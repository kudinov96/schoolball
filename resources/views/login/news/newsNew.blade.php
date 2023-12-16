@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/newsNew" >
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
              <div class="col-lg-6">
                  <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Название') }}</label>
                      <div class="col-sm-10">
                          <input id="name" name="name" class="form-control" type="text" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="date" class="col-sm-2 col-form-label text-right">{{ __('Дата') }}</label>
                      <div class="col-sm-10">
                        <input name="date" type="text" class="datepicker-here form-control" placeholder="__.__.____" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_club" class="col-sm-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                    <div class="col-sm-10">
                      <select name="id_club" class="custom-select">
                          <option value="0">Общая новость</option>
                          @foreach ($arrclub as $club)
                            <option value="{{ $club->id }}" >{{ $club->name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="tags" class="col-sm-2 col-form-label text-right">{{ __('Тэги') }}</label>
                      <div class="col-sm-10">
                          <input id="tags" name="tags" class="tags form-control" type="text" required>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" />
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group row">
                <textarea id="elm1" name="content"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.form-editor.init.js') }}"></script>
<script src="{{ asset('js/datepicker.min.js') }}"></script>
<script type="text/javascript">
  $(function() {
    $('#tags').tagsInput({width:'auto'});
  });
</script>
@endsection
