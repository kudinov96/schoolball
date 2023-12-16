@extends('layouts.account')

@section('content')
<form id="sendform" method="POST" enctype="multipart/form-data" action="/productNew">
  @csrf
  <div class="row">
    <div class="col-lg-12">


        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Основное</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label-new text-md-right">{{ __('Наименование') }}</label>
                            <div class="col-sm-8">
                                <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cloth_size" class="col-md-4 col-form-label-new text-md-right" >{{ __('Категория') }}</label>
                            <div class="col-sm-8">
                                <select name="category_id" class="custom-select">
                                    <option value="0">Не выбрано</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label-new text-md-right">{{ __('Стоимость базовая') }}</label>
                            <div class="col-sm-10">
                                <input id="price" type="text" class="form-control" name="price" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price_discount" class="col-sm-2 col-form-label-new text-md-right">{{ __('Стоимость скидочная') }}</label>
                            <div class="col-sm-10">
                                <input id="price_discount" type="text" class="form-control" name="price_discount" value="">
                            </div>
                        </div>

                    </div>


                    <div class="col-12">
                        <div class="form-group row">
                            <label for="colors" class="col-sm-2 col-form-label-new text-md-right">Цвет</label>
                            <div class="col-sm-10">
                                <select multiple class="form-control" id="colors" name="colors[]">
                                    <option value="#FFFFFF">Белый</option>
                                    <option value="#F5F5DC">Бежевый</option>
                                    <option value="#FFFF00">Желтый</option>
                                    <option value="#FFD700">Золотой</option>
                                    <option value="#FFA500">Оранжевый</option>
                                    <option value="#008000">Зеленый</option>
                                    <option value="#00008B">Темно-синий</option>
                                    <option value="#FFC0CB">Розовый</option>
                                    <option value="#FF0000">Красный</option>
                                    <option value="#808080">Серый</option>
                                    <option value="#A52A2A">Коричневый</option>
                                    <option value="#000000">Черный</option>
                                    <option value="#40E0D0">Бирюзовый</option>
                                    <option value="#0000FF">Синий</option>
                                    <option value="#8A2BE2">Фиолетовый</option>
                                    <option value="#F0E68C">Хаки</option>
                                    <option value="black_red">Черно-красный</option>
                                    <option value="#B22222">Бордовый</option>
                                    <option value="#ADD8E6">Голубой</option>
                                    <option value="#696969">Темно-серый</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="col-12">
                    <div class="form-group row">
                        <label for="price_discount" class="col-sm-2 col-form-label-new text-md-right">Размер</label>
                        <div class="col-sm-10">
                            <select multiple class="form-control" id="sizes" name="sizes[]">
                                <option value="XS"  >XS</option>

                                <option value="S"  >S</option>
                                <option value="M"  >M</option>
                                <option value="L"  >L</option>
                                <option value="XL"  >XL</option>
                                <option value="XXS"  >XXS</option>


                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label-new text-md-right">{{ __('Описание') }}</label>
                            <div class="col-md-10">
                                <textarea id="description" rows="5" type="text" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group row">
                            <label for="composition" class="col-md-2 col-form-label-new text-md-right">{{ __('Состав') }}</label>
                            <div class="col-md-10">
                                <textarea id="composition" rows="5" type="text" class="form-control" name="composition"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-group row">
                            <label for="care" class="col-md-2 col-form-label-new text-md-right">{{ __('Уход') }}</label>
                            <div class="col-md-10">
                                <textarea id="care" rows="5" type="text" class="form-control" name="care"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group row">
                            <label for="care" class="col-md-2 col-form-label-new text-md-right">{{ __('Изображение') }}</label>
                            <div class="col-md-10">
                                <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="" />
                            </div>
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



@endsection
