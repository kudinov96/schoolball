@foreach($catalog as $camp)

    <div class="col-md-4" style="margin-bottom: 32px;" >
        <div class="catalog-card">
            <div class="cardImg">
                <a href="{{ $camp->url }}">
                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $camp->img) }}" alt="">
                </a>
            </div>
            <div class="catalog-card-section">
                <a style="font-family: IBMPlexSans-Medium;
    font-size: 16px;" href="{{ $camp->url }}" >{{ $camp->name }} </a>
                <h6 class="catalog-text">@if ($camp->is_summer == 1)
                        Все лето
                    @else
                        с {{ \Carbon\Carbon::parse($camp->date_from)->locale('ru')->isoFormat('D MMMM') }} по {{ \Carbon\Carbon::parse($camp->date_to)->locale('ru')->isoFormat('D MMMM') }}
                    @endif</h6>
                <h5 class="catalog-sub-title">Тема</h5>
                <pre class="catalog-text">{{ $camp->topic }}</pre>
                <h5 class="catalog-sub-title">Место проведения</h5>
                <h6 class="catalog-text">{{ $camp->location }}</h6>
            </div>
            <div class="table-wrapper">
                <table class="table-div">
                    <tbody>
                    <tr class="highlight-price" style="border-top: 1px solid #e1e0ea;">
                        <td class="tariff-desc">
                            <span class="table-price-tariff">Свободных мест</span>
                        </td>
                        <td class="places">
                            <span class="table-price-tariff">{{ $camp->free_places }}</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endforeach
