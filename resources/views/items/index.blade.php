@section('title', 'Объекты недвижимости - сканер')

<x-app-layout>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Объекты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('items.search') }}" method="GET">
                    <div class="mt-4 mb-2">
                        <label for="region" class="block font-medium text-gray-700">Region:</label>
                        <select id="region" name="region" class="form-select">
                            <option value="">Выберите регион</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}" @if(request()->get('region') == $region->id) selected="selected" @endif>{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4 mb-2">
                        <label for="city" class="block font-medium text-gray-700">City:</label>
                        <select id="city" name="city" class="form-select">
                            <option value="">Выберите город</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}" @if(request()->get('city') == $city->id) selected="selected" @endif>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- добавленная кнопка "Поиск" -->
                    <div class="mt-4 mb-2">
                        <a href="{{ route('items') }}" class="ml-4 text-sm text-gray-700 underline">Сбросить поиск</a>

                        <button type="submit" class="btn btn-primary">
                            Поиск
                        </button>
                    </div>
                </form>

                <div>
                    @foreach ($items as $item)


                        @php
                            $images = explode(',', $item->images);
                            $firstImage = trim($images[0]); // Get the first image URL and remove any leading/trailing whitespace
                        @endphp
                        <div class="card mb-5 align-items-lg-center flex-lg-row d-flex aos-init aos-animate" data-aos="fade-up">
                            <div class="col-lg-2">
                                <a href="#!" class="d-block overflow-hidden open-photos-modal" data-id="{{ $item->id }}">
                                    <img src="{{ $firstImage }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="photos-modal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="photos-modal-label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="photos-modal-label">Photos</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="photos-container">
                                                <div class="col-lg-2">
                                                    <div class="slider-for">
                                                        <!-- Photos will be loaded here dynamically using AJAX -->
                                                    </div>
                                                    <div class="slider-nav">
                                                        <!-- Thumbnails will be loaded here dynamically using AJAX -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Other card content here -->

                            <div class="card-body overflow-hidden p-4 px-lg-5 flex-grow-1">
                              <div class="col-12 ">
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <a href="#!" class="text-dark d-block mb-0">
                                            <h4> 1-к квартира    </h4>
                                        </a>
                                    </div>

                                </div>

                                <div class="row mb-3 mb-lg-4">


                                    <div class="col-4" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Площадь">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-area fs-5 me-2"></i>
                                            <strong class="small">36 м<sup>2</sup></strong>
                                        </div>


                                    </div>


                                    <div class="col-4" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Площадь">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-area fs-5 me-2"></i>
                                            <strong class="small">36 м<sup>2</sup></strong>
                                        </div>


                                    </div>
                                    <div class="col-4" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Этаж">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-buildings fs-5 me-2"></i>
                                            <strong class="small">3 / 5 </strong>
                                        </div>
                                    </div>

                                </div>
                                <a class="favorite pull-right" href="/favorite_toggle?object=2" title="Избранное" data-icon-on="fa-heart" data-icon-off="fa-heart-o">
                                    <i class="fa fa-fw fa-heart-o"></i></a>


                                <p class="mb-4 mb-lg-5 ">
                                    {{ $item->description }}
                                </p>
                                <div class="row justify-content-between justify-content-lg-start">

                                    <div class="col-6">
                                        <!--Price-->
                                        <h4> {{ $item->price }} </h4>
                                    </div>
                                    <div class="col-6">
                                        <!--Agent-->
                                        <div class="d-flex align-items-center justify-content-end justify-content-lg-start flex-shrink-0">

                                        <span class="small">
                                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill="red" fill-rule="evenodd" d="M11.154 4L8 9.53 4.845 4 1.1 13.466H0v1.428h5.657v-1.428H4.81l.824-2.36L8 15l2.365-3.893.824 2.36h-.85v1.427H16v-1.428h-1.1z"></path></svg> Горьковская
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            </div>

                            <div class="col-lg-2">
                                <button type="button" id="realty_object_actual_form_btn" class="btn btn-md btn-outline-info btn-block mb-2" >Добавить в CRM</button>
                                <button type="button" id="realty_object_actual_form_btn" class="btn btn-outline-danger btn-block" >Добавить в ЧС</button>
                                <button type="button" id="realty_object_actual_form_btn" class="btn btn-outline-info btn-block" >Избранное</button>
                                <button type="button" id="realty_object_actual_form_btn" class="btn btn-outline-info btn-block" >Недозвон</button>
                                <button type="button" id="realty_object_actual_form_btn" class="btn btn-outline-warning btn-block" >Просмотрено</button>

                            </div>


                        </div>



                    @endforeach
                </div>




      {{ $items->appends(request()->only(['region', 'city']))->links('vendor.pagination.default') }}






            </div>
        </div>
    </div>



    <script>

        $(function() {
            $('.open-photos-modal').click(function(e) {
                e.preventDefault();
                $('#photos-modal').modal('show');
            });
        });
    </script>





    <!-- скрипт для инициализации select2 -->
    <script>

        $(document).ready(function() {
            $('#region').select2();
            $('#city').select2();
            $('#region').change(function() {
                var regionId = $(this).val();
                if(regionId) {
                    $.ajax({
                        url: '/cities/' + regionId,
                        type: 'GET',
                        dataType: 'json',
                        success:function(data) {
                            $('#city').empty();
                            $('#city').append('<option value="">Выберите город</option>');
                            $.each(data, function(key, value) {
                                $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#city').empty();
                    $('#city').append('<option value="">Выберите город</option>');
                }
            });
        });
    </script>
</x-app-layout>

