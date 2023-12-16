@foreach($catalog as $product)

    <div class="col-md-4"  style="margin-bottom: 32px;" >
        <div class="catalog_card_shop">
            <div class="shop-card-img">
                <a href="{{ route('viewShop', ['id' => $product->id]) }}" >
                    <div class="catalog_card_shop_img">


                        @if($product->images)
                            <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $product->images) }}" class="img-fluid centered-image" alt="">

                        @else
                            <img src="{{asset('assets/sb-ui/images/shop.svg')}}" alt="" class="img-fluid centered-image">

                        @endif

                    </div>
                </a>
            </div>
            <div class="catalog-shop-section">
                <p class="shop_card_title mb-2" >{{ $product->name }} </p>
                <p class="shop_price" ><b>{{ $product->price }} ₽  </b> </p>

                <button onclick="location.href='{{ route('viewShop', ['id' => $product->id]) }}'" type="button" name="button" class="mainHeaderButtonFix button_shop" style="position: absolute; bottom: 0;  ">Заказать</button>
            </div>


        </div>
    </div>

@endforeach
