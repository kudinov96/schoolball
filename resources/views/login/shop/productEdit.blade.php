@extends('layouts.account')

@section('content')


    <form id="sendform" method="POST" enctype="multipart/form-data" action="/shop/products/{{ $product->id }}/edit">
  @csrf
  <div class="row">
    <div class="col-lg-12">
      <div class="card">

          <div class="card">
              <div class="card-body">
                  <h4 class="mt-0 header-title">Основное</h4>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                              <label for="name" class="col-sm-4 col-form-label-new text-md-right">{{ __('Наименование') }}</label>
                              <div class="col-sm-8">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" >
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="cloth_size" class="col-md-4 col-form-label-new text-md-right" >{{ __('Категория') }}</label>
                              <div class="col-sm-8">
                                  <select name="category_id" class="custom-select">
                                      <option value="0">Не выбрано</option>
                                      @foreach ($categories as $category)
                                          <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                      @endforeach

                                  </select>
                              </div>
                          </div>


                      </div>



                      <div class="col-md-6">
                          <div class="form-group row">
                              <label for="price" class="col-sm-2 col-form-label-new text-md-right">{{ __('Стоимость базовая') }}</label>
                              <div class="col-sm-10">
                                  <input id="price" type="text" class="form-control" name="price" value="{{ $product->price }}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="price_discount" class="col-sm-2 col-form-label-new text-md-right">{{ __('Стоимость скидочная') }}</label>
                              <div class="col-sm-10">
                                  <input id="price_discount" type="text" class="form-control" name="price_discount" value="{{ $product->price_discount }}">
                              </div>
                          </div>

                      </div>


                      <div class="col-12">
                          <div class="form-group row">
                              <label for="colors" class="col-sm-2 col-form-label-new text-md-right">Цвет</label>
                              <div class="col-sm-10">
                                  <?php $decoded_colors = json_decode($product->colors, true);
                                  if ($decoded_colors === null) {
                                      $decoded_colors = [];
                                  }
                                  ?>
                                  <select multiple class="form-control" id="colors" name="colors[]">
                                      <option value="#FFFFFF" {{ in_array('#FFFFFF', $decoded_colors) ? 'selected' : '' }}>Белый</option>
                                      <option value="#F5F5DC" {{ in_array('#F5F5DC', $decoded_colors) ? 'selected' : '' }}>Бежевый</option>
                                      <option value="#FFFF00" {{ in_array('#FFFF00', $decoded_colors) ? 'selected' : '' }}>Желтый</option>
                                      <option value="#FFD700" {{ in_array('#FFD700', $decoded_colors) ? 'selected' : '' }}>Золотой</option>
                                      <option value="#FFA500" {{ in_array('#FFA500', $decoded_colors) ? 'selected' : '' }}>Оранжевый</option>
                                      <option value="#008000" {{ in_array('#008000', $decoded_colors) ? 'selected' : '' }}>Зеленый</option>
                                      <option value="#00008B" {{ in_array('#00008B', $decoded_colors) ? 'selected' : '' }}>Темно-синий</option>
                                      <option value="#FFC0CB" {{ in_array('#FFC0CB', $decoded_colors) ? 'selected' : '' }}>Розовый</option>
                                      <option value="#FF0000" {{ in_array('#FF0000', $decoded_colors) ? 'selected' : '' }}>Красный</option>
                                      <option value="#808080" {{ in_array('#808080', $decoded_colors) ? 'selected' : '' }}>Серый</option>
                                      <option value="#A52A2A" {{ in_array('#A52A2A', $decoded_colors) ? 'selected' : '' }}>Коричневый</option>
                                      <option value="#000000" {{ in_array('#000000', $decoded_colors) ? 'selected' : '' }}>Черный</option>
                                      <option value="#40E0D0" {{ in_array('#40E0D0', $decoded_colors) ? 'selected' : '' }}>Бирюзовый</option>
                                      <option value="#0000FF" {{ in_array('#0000FF', $decoded_colors) ? 'selected' : '' }}>Синий</option>
                                      <option value="#8A2BE2" {{ in_array('#8A2BE2', $decoded_colors) ? 'selected' : '' }}>Фиолетовый</option>
                                      <option value="#F0E68C" {{ in_array('#F0E68C', $decoded_colors) ? 'selected' : '' }}>Хаки</option>
                                      <option value="black_red" {{ in_array('black_red', $decoded_colors) ? 'selected' : '' }}>Черно-красный</option>
                                      <option value="#B22222" {{ in_array('#B22222', $decoded_colors) ? 'selected' : '' }}>Бордовый</option>
                                      <option value="#ADD8E6" {{ in_array('#ADD8E6', $decoded_colors) ? 'selected' : '' }}>Голубой</option>
                                      <option value="#696969" {{ in_array('#696969', $decoded_colors) ? 'selected' : '' }}>Темно-серый</option>
                                  </select>
                              </div>

                          </div>
                      </div>



                      <div class="col-12">
                          <div class="form-group row">
                              <label for="price_discount" class="col-sm-2 col-form-label-new text-md-right">Размер</label>
                              <div class="col-sm-10">


                                  <?php $decoded_sizes = json_decode($product->sizes, true);
                                  if ($decoded_sizes === null) {
                                      $decoded_sizes = [];
                                  }
                                  ?>

                                  <select multiple class="form-control" id="sizes" name="sizes[]">
                                      <option value="XS" {{ in_array('XS', $decoded_sizes) ? 'selected' : '' }}>XS</option>
                                      <option value="S" {{ in_array('S', $decoded_sizes) ? 'selected' : '' }}>S</option>
                                      <option value="M" {{ in_array('M', $decoded_sizes) ? 'selected' : '' }}>M</option>
                                      <option value="L" {{ in_array('L', $decoded_sizes) ? 'selected' : '' }}>L</option>
                                      <option value="XL" {{ in_array('XL', $decoded_sizes) ? 'selected' : '' }}>XL</option>
                                      <option value="XXS" {{ in_array('XXS', $decoded_sizes) ? 'selected' : '' }}>XXS</option>
                                  </select>
                              </div>
                          </div>

                      </div>

                      <div class="col-12">
                          <div class="form-group row">
                              <label for="description" class="col-md-2 col-form-label-new text-md-right">{{ __('Описание') }}</label>
                              <div class="col-md-10">
                                  <textarea id="description" rows="5" type="text" class="form-control" name="description">{{ $product->description }}</textarea>
                              </div>
                          </div>
                      </div>

                      <div class="col-12">
                          <div class="form-group row">
                              <label for="composition" class="col-md-2 col-form-label-new text-md-right">{{ __('Состав') }}</label>
                              <div class="col-md-10">
                                  <textarea id="composition" rows="5" type="text" class="form-control" name="composition">{{ $product->composition }}</textarea>
                              </div>
                          </div>
                      </div>


                      <div class="col-12">
                          <div class="form-group row">
                              <label for="care" class="col-md-2 col-form-label-new text-md-right">{{ __('Уход') }}</label>
                              <div class="col-md-10">
                                  <textarea id="care" rows="5" type="text" class="form-control" name="care">{{ $product->care }}</textarea>
                              </div>
                          </div>
                      </div>

                      <div class="col-12">
                          <div class="form-group row">
                              <label for="care" class="col-md-2 col-form-label-new text-md-right">{{ __('Изображение') }}</label>
                              <div class="col-md-10">
                                  <input type="file" id="input-file-now-custom-1" name="img" class="dropify" data-default-file="@if ($product->images == ""){{ asset('assets/no_photo.jpg') }}@else{{ asset('/storage/') }}/{{ str_replace("public/", "", $product->images) }}@endif" />
                              </div>
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
                        Вы уверены, что хотите удалить объект из базы данных?
                        Если вы подтвердите данное действие восстановление объекта
                        будет не возможным.
                    </p>
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center" onclick="event.preventDefault(); document.getElementById('deleteform').submit();">Подтвердить удаление</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <form id="deleteform" method="POST" action="/shop/products/{{ $product->id }}/delete">
        @csrf
    </form>




@endsection
