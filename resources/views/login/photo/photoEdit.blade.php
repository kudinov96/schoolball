
        @extends('layouts.account')

        @section('content')



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Информация</h4>
                                <hr>
                                <h4 class="mt-0 header-title">Место футбольных выходных</h4>
{{ $mainindex->images_traning  }}
                                <div id="sortable" class="image-container">
                                    @if (!empty($mainindex->images_traning))
                                        @foreach(explode('|', $mainindex->images_traning) as $index => $row)
                                            <div class="image-item" data-index="{{ $index }}">
                                                <img src="{{ asset('storage/'.str_replace("public/", "", $row)) }}" alt="" style="width: 360px;">
                                                <br>
                                                <form method="post" action="{{ route('deletePhoto', [$mainindex->id]) }}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="delete_image" value="{{ $row }}">
                                                    <button type="submit" class="delete-image-btn btn btn-dark waves-effect waves-light">Удалить</button>
                                                </form>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Нет доступных фотографий.</p>
                                    @endif
                                </div>



                            </div>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Загрузка файлов</h4>
                                <hr>
                <form id="sendform" method="POST" enctype="multipart/form-data" action="{{ route('updatePhoto', [$mainindex->id]) }}">
                    @csrf
                    <input type="file" class="form-control" name="images[]" multiple>
                    <div class="col-12">
                        <div class="mainHeaderButton">
                            <button type="submit" class="btn btn-dark waves-effect waves-light" name="">Загрузить</button>
                        </div>
                    </div>
                </form>
                            </div>
                        </div>
                    </div>




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

