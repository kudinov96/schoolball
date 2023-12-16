
        @extends('layouts.account')

        @section('content')


            <form id="sendform" method="POST" enctype="multipart/form-data" action="{{ route('updatePrice', [$main->id]) }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4>Информация</h4>
                                <hr>
                                <input id="smena" name="page" hidden class="form-control" type="text" value="{{$main->page}}"   required autocomplete="name">

                                <div class="form-group row">
                                    <label for="name" class="col-form-label">{{ __('Стоимость') }}</label>
                                    <div class="col-sm-6">

                                        <input id="price" name="price" class="form-control" type="text" value="{{$main->price}}"   required autocomplete="time">

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="name" class="col-form-label">{{ __('Наименование') }}</label>
                                    <div class="col-sm-6">

                                        <input id="title" name="title" class="form-control" type="text"  value="{{$main->title}}"  required autocomplete="title">

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name" class="col-form-label">{{ __('Продолжительность') }}</label>
                                    <div class="col-sm-6">

                                        <input id="price" name="duration" class="form-control" type="text" value="{{$main->duration}}"   required autocomplete="time">

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="desc_front" class="col-form-label">{{ __('Описание') }}</label>
                                    <div class="col-sm-6">

                                         <textarea id="desc_front" name="desc_front" class="form-control" rows="4" >{{$main->desc_front}}</textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="desc_back" class="col-form-label">{{ __('В стоимость входит') }}</label>
                                    <div class="col-sm-6">
                                        <textarea id="elm1" name="desc_back">{{ $main->desc_back }}</textarea>

                                     </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Изображение 1') }}</label>
                                    <div class="col-sm-6">
                                        <input type="file" id="input-file-now-custom-1" name="img_front" class="dropify" data-default-file="@if ($main->img_front == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $main->img_front) }}@endif" />
                                    </div>  </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">{{ __('Изображение 2') }}</label>
                                    <div class="col-sm-6">
                                        <input type="file" id="input-file-now-custom-1" name="img_back" class="dropify" data-default-file="@if ($main->img_back == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $main->img_back) }}@endif" />
                                    </div>  </div>







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
            <form id="deleteform" method="POST" action="{{ route('deletePrice', ['id' => $main->id]) }}">
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

