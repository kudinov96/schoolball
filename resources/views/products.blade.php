@foreach($catalog as $product)

    <div class="col-md-4"  style="margin-bottom: 32px;" >
        <div class="catalog_card_shop">
            <div class="catalog_card_shop_img">
                <a >
                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $product->images) }}" alt="">
                </a>
            </div>
            <div class="catalog-shop-section">
                <p class="shop_card_title mb-2" >{{ $product->name }} </p>
                <p class="shop_price" >{{ $product->price }} ₽ </p>

                <button onclick="location.href='{{ route('viewShop', ['id' => $product->id]) }}'" type="button" name="button" class="mainHeaderButtonFix button_shop" style="position: absolute; bottom: 0; width: 100%;">Заказать</button>
            </div>


        </div>
    </div>

@endforeach
