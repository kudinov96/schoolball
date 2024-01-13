@extends('layouts.account')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form id="sendform" method="POST" enctype="multipart/form-data" action="/coachNew">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Основная информация</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Имя') }}</label>
                                    <div class="col-sm-10">
                                        <input id="name" name="name" class="form-control" type="text" value=" " required autocomplete="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Фамилия') }}</label>
                                    <div class="col-sm-10">
                                        <input id="surname" name="surname" class="form-control" type="text" value=" " required autocomplete="surname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Отчество') }}</label>
                                    <div class="col-sm-10">
                                        <input id="secondname" name="secondname" class="form-control" type="text" value=" " required autocomplete="secondname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sex" class="col-sm-2 col-form-label text-right">{{ __('Пол') }}</label>
                                    <div class="col-sm-10">
                                        <select name="sex" class="custom-select">
                                            <option value="">Не выбрано</option>
                                            <option value="1"> Мужской </option>
                                            <option value="0"> Женский </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="date-birth" class="col-sm-2 col-form-label text-right">{{ __('Дата рождения') }}</label>
                                    <div class="col-sm-10">
                                        <input id="date-birth" type="text" class="datepicker-here form-control" name="date-birth" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="display-front" class="col-md-4 col-form-label-new text-md-right" >{{ __('Отображать на главной') }}</label>
                                    <div class="col-md-8">
                                        <input id="display-front" type="checkbox" class="form-control-new" name="display-front">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="display-front-camp" class="col-md-4 col-form-label-new text-md-right" >{{ __('Отображать на главной зимнего лагеря') }}</label>
                                    <div class="col-md-8">
                                        <input id="display-front-camp" type="checkbox" class="form-control-new" name="display-front-camp">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать на странице') }}</label>
                                    <select multiple class="form-control" id="pages" name="pages[]">
                                        <option value="Выходные">Выходные</option>

                                        <option value="Киевская">Киевская</option>
                                        <option value="Кузьминки">Кузьминки</option>
                                        <option value="Горизонт">Горизонт</option>
                                        <option value="Дмитров">Дмитров</option>

                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label for="id_area" class="col-md-2 col-form-label-new text-md-right">{{ __('Клуб') }}</label>
                                    <div class="col-sm-10">
                                        <select name="club_ids[]" class="custom-select" multiple>
                                            @foreach ($clublist as $club)
                                                <option value="{{ $club->id }}">{{ $club->name }} {{ $club->address }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Контактная информация</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="location" class="col-sm-1 col-form-label text-right">{{ __('Адрес') }}</label>
                                    <div class="col-sm-11">
                                        <input id="location" name="location" class="form-control" type="text" value=" " required autocomplete="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label text-right">{{ __('E-Mail') }}</label>
                                    <div class="col-sm-10">
                                        <input id="email" name="email" class="form-control" type="email" value=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group row">
                                    <label for="phone_number" class="col-sm-2 col-form-label text-right">{{ __('Телефон') }}</label>
                                    <div class="col-sm-10">
                                        <input id="phone_number" name="phone_number" class="phone form-control" type="phone_number" value=" " required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Страницы в социальных сетях</h4>
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="input-group">
                      <span class="input-group-prepend">
                        <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i></button>
                      </span>
                                            <input type="text" id="social-fb" name="social-fb" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="input-group">
                    <span class="input-group-prepend">
                      <button type="button" class="btn btn-primary"><i class="fab fa-vk"></i></button>
                    </span>
                                            <input type="text" id="social-vk" name="social-vk" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="input-group">
                    <span class="input-group-prepend">
                      <button type="button" class="btn btn-primary"><i class="fab fa-instagram"></i></button>
                    </span>
                                            <input type="text" id="social-inst" name="social-inst" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Карточка тренера</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="education" class="col-sm-4 col-form-label-new text-md-right">{{ __('Образование') }}</label>
                                    <div class="col-sm-8">
                                        <input id="education" type="text" class="form-control" name="education" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cloth_size" class="col-md-4 col-form-label-new text-md-right" >{{ __('Размер одежды') }}</label>
                                    <div class="col-sm-8">
                                        <select name="cloth_size" class="custom-select">
                                            <option value="">Не выбрано</option>
                                            <option value="0"> XS </option>
                                            <option value="1"> S </option>
                                            <option value="2"> M </option>
                                            <option value="3"> L </option>
                                            <option value="4"> XL </option>
                                            <option value="5"> XXL </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="marital-st" class="col-sm-4 col-form-label-new text-md-right">{{ __('Семейное положение') }}</label>
                                    <div class="col-sm-8">
                                        <select name="marital-st" class="custom-select">
                                            <option value="">Не выбрано</option>
                                            <option value="0"> Женат/Замужем </option>
                                            <option value="1"> Холост/Не замужем </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="license" class="col-sm-2 col-form-label-new text-md-right">{{ __('Лицензия') }}</label>
                                    <div class="col-sm-10">
                                        <input id="license" type="text" class="form-control" name="license" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="seniority" class="col-sm-2 col-form-label-new text-md-right">{{ __('Стаж') }}</label>
                                    <div class="col-sm-10">
                                        <input id="seniority" type="text" class="form-control" name="seniority" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kids" class="col-sm-2 col-form-label-new text-md-right">{{ __('Дети') }}</label>
                                    <div class="col-sm-10">
                                        <select name="kids" class="custom-select">
                                            <option value="" >Не выбрано</option>
                                            <option value="0" > Есть </option>
                                            <option value="1" > Нет </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Карьера') }}</label>
                                    <div class="col-md-10">
                                        <textarea id="career" rows="5" type="text" class="form-control" name="career"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Карьера футболиста') }}</label>
                                    <div class="col-md-10">
                                        <textarea id="career" rows="5" type="text" class="form-control" name="career_football"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Карьера тренера') }}</label>
                                    <div class="col-md-10">
                                        <textarea id="career" rows="5" type="text" class="form-control" name="career_trainer"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="career" class="col-md-2 col-form-label-new text-md-right">{{ __('Достижения') }}</label>
                                    <div class="col-md-10">
                                        <textarea id="career" rows="5" type="text" class="form-control" name="achievements"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Доступные дни недели</h4>
                        <div class="row">
                            <div class="group-info" style="width: 100%; background-color: #EEE; margin: 20px; padding: 20px; border-radius: 15px; font-weight: 800;">
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d1"> Понедельник</span>
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d2"> Вторник </span>
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d3"> Среда</span>
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d4"> Четверг</span>
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d5"> Пятница</span>
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d6"> Суббота</span>
                                <span class="col" style="margin: auto;"><input type="checkbox" name="d7"> Воскресенье</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function(){

            $('.phone').mask('+0 (000) 000 00 00', {placeholder: "+ (__) _  __"});

        });
    </script>

@endsection
