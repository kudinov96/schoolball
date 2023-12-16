@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/programNew">
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
                    <input id="topic" name="topic" class="form-control" type="text" value="" required autocomplete="name">
                </div>
            </div>



            <div class="form-group row">
                <label for="skills" class="col-form-label">{{ __('Навыки') }}</label>
                <div class="col-sm-6">
                    <input id="skills" name="skills" class="form-control" type="text" value=""  autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="skills_count" class="col-form-label">{{ __('Кол-во навыков') }}</label>
                <div class="col-sm-6">
                    <input id="skills_count" name="skills_count" class="form-control" type="text" value=""  autocomplete="name">
                </div>
            </div>



            <div class="form-group row">
                <label for="knowledge" class="col-form-label">{{ __('Знания') }}</label>
                <div class="col-sm-6">
                    <input id="knowledge" name="knowledge" class="form-control" type="text" value=""  autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="knowledge_count" class="col-form-label">{{ __('Кол-во знаний') }}</label>
                <div class="col-sm-6">
                    <input id="knowledge_count" name="knowledge_count" class="form-control" type="text" value=""   autocomplete="name">
                </div>
            </div>



            <div class="form-group row">
                <label for="emotions" class="col-form-label">{{ __('Эмоции') }}</label>
                <div class="col-sm-6">
                    <input id="emotions" name="emotions" class="form-control" type="text" value=""  autocomplete="name">
                </div>
            </div>


            <div class="form-group row">
                <label for="emotions_count" class="col-form-label">{{ __('Кол-во эмоций') }}</label>
                <div class="col-sm-6">
                    <input id="emotions_count" name="emotions_count" class="form-control" type="text" value=""   autocomplete="name">
                </div>
            </div>

            <hr>
            <div class="form-group row">
                <label for="smena1" class="col-form-label">{{ __('Смена №1') }}</label>
                <div class="col-sm-6">
                    <input id="smena1" name="smena1" class="form-control" type="text" value=""   autocomplete="smena1">
                </div>
            </div>


            <div class="form-group row">
                <label for="smena2" class="col-form-label">{{ __('Смена №2') }}</label>
                <div class="col-sm-6">
                    <input id="smena2" name="smena2" class="form-control" type="text" value=""   autocomplete="smena2">
                </div>
            </div>


            <div class="form-group row">
                <label for="smena3" class="col-form-label">{{ __('Смена №3') }}</label>
                <div class="col-sm-6">
                    <input id="smena3" name="smena3" class="form-control" type="text" value=""   autocomplete="smena3">
                </div>
            </div>


            <div class="form-group row">
                <label for="smena4" class="col-form-label">{{ __('Смена №4') }}</label>
                <div class="col-sm-6">
                    <input id="smena4" name="smena4" class="form-control" type="text" value=""   autocomplete="smena4">
                </div>
            </div>


            <hr>


            <div class="form-group row">
                <label for="image" class="col-form-label">{{ __('Изображение') }}</label>
                <div class="col-lg-6">
                    <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="" />
                </div>
            </div>

            <div class="form-group row">
                <label for="program" class="col-form-label">{{ __('Программа') }}</label>
                <div class="col-lg-6">
                    <input type="file" id="input-file-now-custom-1" name="program" class="dropify" data-default-file="" />
                </div>
            </div>


            <div class="form-group row">
                <label for="display-front" class=" ">{{ __('Отображать') }}</label>
                <div class="col-sm-6">
                    <input id="display-front" type="checkbox" class="form-control-new" name="display-front" >
                </div>
            </div>




            <div class="form-group row">
                <label for="page" class="col-form-label">{{ __('Страница') }}</label>
                <div class="col-sm-6">
                    <select id="page" name="page" class="form-control" required>
                        <option value="">--Выберите страницу лагеря--</option>
                        <option value="cao">ЦАО</option>
                        <option value="uvao" >УВАО</option>
                        <option value="gorizont" >Горизонт</option>
                        <option value="dmitrov" >Дмитров</option>

                    </select>
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



@endsection
