@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/scheduleNew">
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
                              <option value="{{ $age->group_age_id }}">{{ $age->name }}</option>
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
                            <option value="{{ $club->id }}">{{ $club->name }} {{ $club->address }}</option>
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
                                <option value="{{ $group->group_section_id }}">{{ $group->name }}</option>
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
                         <input type="text" class="form-control time" name="monday_start" value="">

                     </div>
                    <div class="col-sm-4">
                        <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                        <input type="text" class="form-control time" name="monday_end" value="">


                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <h4>Вторник</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="tuesday_start" value="">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="tuesday_end" value="">

                         </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4>Среда</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="wednesday_start" value="">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="wednesday_end" value="">

                         </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <h4>Четверг</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="thursday_start" value="">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="thursday_end" value="">

                         </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4>Пятница</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="friday_start" value="">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="friday_end" value="">

                         </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4>Суббота</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="saturday_start" value="">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="saturday_end" value="">

                         </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <h4>Воскресение</h4>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Начало') }}</label>
                            <input type="text" class="form-control time" name="sunday_start" value="">

                         </div>
                        <div class="col-sm-4">
                            <label for="group_section_id" class="form-label text-right">{{ __('Окончание') }}</label>
                            <input type="text" class="form-control time" name="sunday_end" value="">

                         </div>
                    </div>
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
<script type="text/javascript">
    jQuery(document).ready(function(){

        $('.time').mask('00:00', {placeholder: "__:__"});

    });
</script>



@endsection
