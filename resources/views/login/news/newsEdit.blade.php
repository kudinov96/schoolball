@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/news/{{ $news->id }}/edit">
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
                          <input id="name" name="name" class="form-control" type="text" value="{{ $news->name }}"required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="date" class="col-sm-2 col-form-label text-right">{{ __('Дата') }}</label>
                      <div class="col-sm-10">
                          <input name="date" type="text" class="datepicker-here form-control" placeholder="__.__.____" value="{{ $date }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_club" class="col-sm-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                    <div class="col-sm-10">
                      <select name="id_club" class="custom-select">
                          <option value="0">Общая новость</option>
                          @foreach ($arrclub as $club)
                            <option value="{{ $club->id }}" @if ($news->id_club == $club->id) selected @endif>{{ $club->name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="tags" class="col-sm-2 col-form-label text-right">{{ __('Тэги') }}</label>
                      <div class="col-sm-10">
                        <input id="tags" name="tags" class="tags form-control" type="text" value="{{ $news->tags }}"required>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($news->photo == ''){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace('public/', '', $news->photo) }}@endif" />
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
                <textarea id="elm1" name="content">{{ $news->content }}</textarea>
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
<form id="deleteform" method="POST" action="/news/{{ $news->id }}/delete">
  @csrf
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
