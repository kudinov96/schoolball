@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/program/{{ $program->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>

            <hr>

            <div class="form-group row">
                <label for="topic" class="col-form-label">{{ __('Тема') }}</label>
                <div class="col-sm-6">
                    <input id="topic" name="topic" class="form-control" type="text" value="{{ $program->topic }}" required autocomplete="name">
                </div>
            </div>



            <div class="form-group row">
                <label for="skills" class="col-form-label">{{ __('Навыки') }}</label>
                <div class="col-sm-6">
                    <input id="skills" name="skills" class="form-control" type="text" value="{{ $program->skills }}"  autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="skills_count" class="col-form-label">{{ __('Кол-во навыков') }}</label>
                <div class="col-sm-6">
                    <input id="skills_count" name="skills_count" class="form-control" type="text" value="{{ $program->skills_count }}"  autocomplete="name">
                </div>
            </div>



            <div class="form-group row">
                <label for="knowledge" class="col-form-label">{{ __('Знания') }}</label>
                <div class="col-sm-6">
                    <input id="knowledge" name="knowledge" class="form-control" type="text" value="{{ $program->knowledge }}"  autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="knowledge_count" class="col-form-label">{{ __('Кол-во знаний') }}</label>
                <div class="col-sm-6">
                    <input id="knowledge_count" name="knowledge_count" class="form-control" type="text" value="{{ $program->knowledge_count }}"   autocomplete="name">
                </div>
            </div>



            <div class="form-group row">
                <label for="emotions" class="col-form-label">{{ __('Эмоции') }}</label>
                <div class="col-sm-6">
                    <input id="emotions" name="emotions" class="form-control" type="text" value="{{ $program->emotions }}"  autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="emotions_count" class="col-form-label">{{ __('Кол-во эмоций') }}</label>
                <div class="col-sm-6">
                    <input id="emotions_count" name="emotions_count" class="form-control" type="text" value="{{ $program->emotions_count }}"   autocomplete="name">
                </div>
            </div>

            <hr>
            <div class="form-group row">
                <label for="smena1" class="col-form-label">{{ __('Смена №1') }}</label>
                <div class="col-sm-6">
                    <input id="smena1" name="smena1" class="form-control" type="text" value="{{ $program->smena1 }}"   autocomplete="smena1">
                </div>
            </div>

            <div class="form-group row">
                <label for="smena2" class="col-form-label">{{ __('Смена №2') }}</label>
                <div class="col-sm-6">
                    <input id="smena2" name="smena2" class="form-control" type="text" value="{{ $program->smena2 }}"   autocomplete="smena2">
                </div>
            </div>

            <div class="form-group row">
                <label for="smena3" class="col-form-label">{{ __('Смена №3') }}</label>
                <div class="col-sm-6">
                    <input id="smena3" name="smena3" class="form-control" type="text" value="{{ $program->smena3 }}"   autocomplete="smena3">
                </div>
            </div>

            <div class="form-group row">
                <label for="smena4" class="col-form-label">{{ __('Смена №4') }}</label>
                <div class="col-sm-6">
                    <input id="smena4" name="smena4" class="form-control" type="text" value="{{ $program->smena4 }}"   autocomplete="smena4">
                </div>
            </div>


            <div class="form-group row">
                <label for="image" class="col-form-label">{{ __('Изображение') }}</label>
                <div class="col-lg-6">
                    <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($program->img == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $program->img) }}@endif" />
                </div>
            </div>

            <div class="form-group row">
                <label for="program" class="col-form-label">{{ __('Программа') }}</label>
                <div class="col-lg-6">
                    <input type="file" id="input-file-now-custom-1" name="program" class="dropify" data-default-file="@if ($program->program == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $program->program) }}@endif" />
                </div>
            </div>



            <div class="form-group row">
                <label for="display-front" class=" ">{{ __('Отображать') }}</label>
                <div class="col-sm-6">
                    <input id="display-front" type="checkbox" class="form-control-new" name="display-front" @if ($program->display_front == True) checked @endif>
                </div>
            </div>



            <div class="form-group row">
                <label for="type" class="col-form-label">{{ __('Страница') }}</label>
                <div class="col-sm-6">
                    <select id="page" name="page" class="form-control" required>
                        <option value="">--Выберите страницу лагеря--</option>
                        <option value="cao" {{ $program->page === 'cao' ? 'selected' : '' }}>ЦАО</option>
                        <option value="uvao" {{ $program->page === 'uvao' ? 'selected' : '' }}>УВАО</option>
                        <option value="gorizont" {{ $program->page === 'gorizont' ? 'selected' : '' }}>Горизонт</option>
                        <option value="dmitrov" {{ $program->page === 'dmitrov' ? 'selected' : '' }}>Дмитров</option>

                    </select>
                </div>
            </div>





        </div>

          <div class="col-12">
              <div class="col-md-10 offset-md-1 mainHeaderButton">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>
                  <button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".duplicate-program-modal">Дублировать программу</button>
                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>

              </div>
          </div>
        </div>
      </div>

    </div>

</form>


    <!-- Duplicate Program Modal -->
    <div class="modal fade duplicate-program-modal" tabindex="-1" role="dialog" aria-labelledby="duplicateProgramModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="duplicateProgramModalLabel">Дублировать программу</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Вы уверены, что хотите дублировать эту программу?</p>
                    <form id="duplicateform" method="POST" action="/program/{{ $program->id }}/duplicate">
                        @csrf
                    <button type="button" class="btn btn-dark waves-effect waves-light" data-dismiss="modal" onclick="event.preventDefault(); document.getElementById('duplicateform').submit();">Подтвердить дублирование</button>

                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



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
    <form id="deleteform" method="POST" action="/program/{{ $program->id }}/delete">
        @csrf
    </form>




@endsection
