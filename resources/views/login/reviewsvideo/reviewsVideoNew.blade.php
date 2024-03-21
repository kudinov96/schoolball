@extends('layouts.account')

@section('content')
    <form id="sendform" method="POST" enctype="multipart/form-data" action="/reviewsVideoNew">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Основная информация</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Превью видео отзыва (изображение)') }}</label>

                                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="{{ asset('assets/no_photo.jpg') }}" />

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Имя') }}</label>
                                    <div class="col-sm-10">
                                        <input id="name" name="name" class="form-control" type="text" value=" " required autocomplete="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Видео (ссылка на ютуб)') }}</label>
                                    <div class="col-sm-10">
                                        <input id="video" name="video" class="form-control" type="text" value=" " required autocomplete="video">
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
                                        <option value="Хотьково">Хотьково</option>

                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label for="display-front" class="col-md-6 col-form-label-new text-md-right">{{ __('Отображать') }}</label>
                                    <div class="col-sm-6">
                                        <input id="display-front" type="checkbox" class="form-control-new" name="display-front" >
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Отправить</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>



@endsection
