@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/schedule/{{ $schedule->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">Основная информация</h4>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                  <label for="group_age_id" class="col-sm-2 col-form-label text-right">{{ __('Группа') }}</label>
                  <div class="col-sm-10">
                      <select name="group_age_id" class="custom-select">
                          <option value="0">Не выбрано</option>

                          @foreach ($groupage as $age)
                              <option value="{{ $age->group_age_id }}" @if ($age->group_age_id == $schedule->group_age_id) selected @endif>{{ $age->name }} </option>
                          @endforeach
                      </select>
                  </div>
              </div>

                <div class="form-group row">
                    <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                    <div class="col-sm-10">

                    <select name="club_id" class="custom-select">
                        <option value="0">Не выбрано</option>
                        @foreach ($clublist as $club)

                            <option value="{{ $club->id }}" @if ($club->id == $schedule->club_id) selected @endif>{{ $club->name }} ({{ $club->address }}) </option>

                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="group_section_id" class="col-sm-2 col-form-label text-right">{{ __('Уровень подготовки') }}</label>
                    <div class="col-sm-10">
                        <select name="group_section_id" class="custom-select">
                            <option value="0">Не выбрано</option>
                            @foreach ($grouplist as $group)
                                <option value="{{ $group->group_section_id }}" @if ($group->group_section_id == $schedule->group_section_id) selected @endif>{{ $group->name }}  </option>

                             @endforeach
                        </select>
                    </div>
                </div>
            </div>
          </div>
            <h4>Расписание</h4>
            <hr>
            <div class="row">

                <div class="col-lg-4">
            <h4>Понедельник</h4>

                <div class="form-group row">
                     <div class="col-sm-4">
                         <label for="monday_start" class="form-label text-right">{{ __('Начало') }}</label>

                         <input type="text" class="form-control time" name="monday_start" value="{{ $schedule->monday_start }}">

                     </div>
                    <div class="col-sm-4">
                        <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>

                        <input type="text" class="form-control time" name="monday_end" value="{{ $schedule->monday_end }}">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <h4>Вторник</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="tuesday_start" value="{{ $schedule->tuesday_start }}">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="tuesday_end" value="{{ $schedule->tuesday_end }}">

                         </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4>Среда</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="wednesday_start" value="{{ $schedule->wednesday_start }}">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="wednesday_end" value="{{ $schedule->wednesday_end }}">

                         </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <h4>Четверг</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="thursday_start" value="{{ $schedule->thursday_start }}">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="thursday_end" value="{{ $schedule->thursday_end }}">

                         </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4>Пятница</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="friday_start" value="{{ $schedule->friday_start }}">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="friday_end" value="{{ $schedule->friday_end }}">

                         </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4>Суббота</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="saturday_start" value="{{ $schedule->saturday_start }}">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="saturday_end" value="{{ $schedule->saturday_end }}">

                         </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <h4>Воскресение</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="sunday_start" value="{{ $schedule->sunday_start }}">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="sunday_end" value="{{ $schedule->sunday_end }}">

                         </div>
                    </div>
                </div>

            </div>

          </div>

          <div class="col-12">
              <div class="col-md-10 offset-md-1 mainHeaderButton">
                  <button type="submit"  class="btn btn-dark waves-effect waves-light" name="">Сохранить и выйти</button>
                  <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Удалить</button>

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
    <form id="deleteform" method="POST" action="/schedule/{{ $schedule->id }}/delete">
        @csrf
    </form>

    <script type="text/javascript">
        jQuery(document).ready(function(){

            $('.time').mask('00:00', {placeholder: "__:__"});

        });
    </script>


@endsection
