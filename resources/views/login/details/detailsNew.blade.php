@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="{{ route('detailsNew', $main) }}">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-body">

              <h4>Информация</h4>
              <hr>


              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Наименование кнопки') }}</label>
                  <div class="col-sm-6">

                      <input id="price" name="title_tab" class="form-control" type="text"  required autocomplete="time">

                  </div>
              </div>


              <div class="form-group row">
                  <label for="name" class="col-form-label">{{ __('Наименование') }}</label>
                  <div class="col-sm-6">

                      <input id="title" name="title" class="form-control" type="text"  required autocomplete="title">

                  </div>
              </div>



              <div class="form-group row">
                  <label for="desc_back" class="col-form-label">{{ __('Описание') }}</label>
                  <div class="col-sm-6">

                      <textarea id="elm1" name="desc"></textarea>

                  </div>
              </div>


              <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Изображение') }}</label>
                  <div class="col-sm-6">
                  <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" />
                  </div>
              </div>

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

    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.form-editor.init.js') }}"></script>
    <script src="{{ asset('assets/plugins/custombox/custombox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/custombox/custombox.legacy.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.modal-animation.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('#tags').tagsInput({width:'auto'});
        });
    </script>

@endsection
