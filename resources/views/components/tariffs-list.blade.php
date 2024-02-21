@props(["abonements"])

<div class="row">
    @foreach($abonements as $value)
        <div class="col-md-6">
            <div class="tariff-card @if($value->is_favorite) tariff-badge @endif">
                <span class="tariff-title"> {{ $value->name }}  </span>    @if($value->profit)  <span class="tariff-title discount">(выгоднее на {{ $value->profit }}%)</span>   @endif
                <hr>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <span class="tariff-desc" @if($value->is_favorite) style="color:#000000;"@endif >Перенос занятий</span>
                    </div>
                    <div class="col-md-6">
                        @if($value->is_transfer) Да@else Нет @endif
                    </div>
                </div>

                @if($value->included)
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <span class="tariff-desc" @if($value->is_favorite) style="color:#000000;"@endif >Включено</span>
                        </div>
                        <div class="col-md-6">
                            @if($value->included)
                                {!! nl2br($value->included) !!}
                            @endif
                        </div>
                    </div>
                @endif

                @if($value->cost_one_training)
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <span class="tariff-desc" @if($value->is_favorite) style="color:#000000;"@endif > Стоимость одной тренировки </span>
                        </div>
                        <div class="col-md-6">
                            <span class="table-price-tariff" style="color: #000000;" >{{ $value->cost_one_training }} ₽</span>
                        </div>
                    </div>
                @endif

                @if($value->cost)
                    <div class="row">
                        <div class="col-md-6">
                            <span class="tariff-desc" @if($value->is_favorite) style="color:#000000;"@endif > Стоимость </span>
                        </div>
                        <div class="col-md-6">
                            <span class="table-price-tariff" style="color: #000000;" >{{ $value->cost }} ₽</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
