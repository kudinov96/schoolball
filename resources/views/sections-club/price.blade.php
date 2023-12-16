<div class="tariffs  d-none d-md-block">

    <h3 class="title-desc" style="    margin-top: 140px !important; margin-bottom: 48px!important;">Выберите абонемент на ваших условиях: гибкость для вашего спокойствия и развития юного футболиста</h3>

    <div class="table-responsive">
        <table class="table table-borderless">
            <thead class="table-border-down">
            <tr>
                <th scope="col">Занятия </th>
                <th scope="col">Заморозки</th>
                <th scope="col">За тренировку</th>

                <th scope="col">Стоимость</th>

            </tr>
            </thead>
            <tbody class="table-body">

            @foreach($abonements as  $abonement)

                <tr>
                    @foreach($tariffs as $tariff)
                        @if($tariff->id == $abonement->tariff_id)
                            <td>{{ $tariff->classes }} </td>
                            <td>{{ $tariff->freezing  }}</td>
                            <td>{{ $tariff->training  }} ₽</td>

                            <td class="price-table">{{ $tariff->cost  }} ₽</td>

                        @endif

                    @endforeach

                </tr>

            @endforeach



            </tbody>
        </table>
    </div>
    <div class="tariffs-note">
        <img src="{{asset('assets/gift1.svg')}}" style="width:20px;" class="gift-img"> При покупке большого абонемента, игровая форма в подарок
    </div>


</div>


<div class="tariffs-mob  d-sm-block d-md-none">

    <h5 class="schedule-group-section-mob">Абонементы</h5>

    <div class="table table-responsive-mob">
        <table class="table">
            <thead class="">
            <tr>

                <th class="text-left"  scope="col">Занятия</th>
                <th scope="col">Заморозки</th>
                <th scope="col">За тренировку</th>

                <th scope="col">Стоимость</th>
            </tr>
            </thead>
            <tbody class="table-body">


            @foreach($abonements as  $abonement)

                <tr>
                    @foreach($tariffs as $tariff)
                        @if($tariff->id == $abonement->tariff_id)
                            <th class="text-left"> {{ $tariff->classes }} </th>
                            <td>{{ $tariff->freezing  }}</td>

                            <td>{{ $tariff->training  }}  ₽</td>

                            <td class="price-table-mob">{{ $tariff->cost  }} ₽</td>

                        @endif

                    @endforeach

                </tr>

            @endforeach



            </tbody>
        </table>
    </div>


</div>
<!-- gifts -->
<img src="{{asset('assets/gift1.svg')}}" style="width:20px;" class="gift-img-mob">
<div class="tariffs-note-mob">
    При покупке большого абонемента, игровая форма в подарок
</div>
