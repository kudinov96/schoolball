
@if(count($tariffs) > 0)

<div class="seventhSection d-none d-md-block"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">
        <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
            <h3 class="title-desc" style="margin-bottom: 48px !important;">Тарифы под ваши запросы</h3>
        </div>
        <form>


            <div id="tariff">





                <div class="w-100"></div>

                <div class="tab-content" id="pillsTariff-tabContent">

                    @foreach($cards_price as $card)
                        @foreach($group_age as $grage)
                            @if($grage->group_age_id == $card->group_id)
                                <div class="tab-pane fade @if ($loop->first) show active @endif  " id="pillsTariff-{{ $card->group_id}}" role="tabpanel" aria-labelledby="pillsTariff-{{ $card->group_id}}-tab">

                                    <div class="row">
                                        @foreach($tariffs as $value)

                                            @if($grage->group_age_id == $value->group_id)
                                                <div class="col-md-6">


                                                    @if($value->popular_badge)
                                                        <div class="tariff-card tariff-badge">
                                                            @else
                                                                <div class="tariff-card ">

                                                                    @endif

                                                                    <span class="tariff-title"> {{ $value->name }}  </span>    @if($value->discount)  <span class="tariff-title discount">(выгоднее на {{ $value->discount }}%)</span>   @endif
                                                                    <hr>
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-6">
                                                                            <span class="tariff-desc" @if($value->popular_badge) style="color:#000000;"@endif >Перенос занятий</span>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            @if($value->rescheduling_classes) {{ $value->rescheduling_classes }}@else Нет @endif
                                                                        </div>
                                                                    </div>



                                                                    @if($value->included_diary OR $value->included_form_discount)
                                                                        <div class="row mb-2">
                                                                            <div class="col-md-6">
                                                                                <span class="tariff-desc" @if($value->popular_badge) style="color:#000000;"@endif >Включено</span>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                @if($value->included_diary)• Дневник футболиста <br> @endif @if($value->included_form_discount)• Скидка на форму 50% @endif
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    <div class="row ">
                                                                        <div class="col-md-6">
                                                                            <span class="tariff-desc" @if($value->popular_badge) style="color:#000000;"@endif > Цена </span>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <span class="table-price-tariff" style="color: #000000;" >{{ $value->price }} ₽</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                        </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>

                </div>


            </div>


    </div>
</div>





<div class="seventhSection  d-sm-block d-md-none"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">


        <div class="row">

            <div class="col-md-12 text-center">
                <h3 class="title-desc" style="font-size: 28px !important;     margin-bottom: 32px !important;">Тарифы под ваши запросы</h3>

            </div>
        </div>


            <div id="tariff-mob">





                <div class="w-100"></div>

                <div class="tab-content" id="pillsTariff-tabContent">

                    @foreach($cards_price as $card)
                        @foreach($group_age as $grage)
                            @if($grage->group_age_id == $card->group_id)
                                <div class="tab-pane fade @if ($loop->first) show active @endif  " id="pillsTariff-{{ $card->group_id}}" role="tabpanel" aria-labelledby="pillsTariff-{{ $card->group_id}}-tab">

                                    <div class="row">
                                        @foreach($tariffs as $value)
                                            @if($value->group_id ==  0)
                                                выберите отделение
                                            @endif
                                            @if($grage->group_age_id == $value->group_id)
                                                <div class="col-md-6">


                                                    @if($value->popular_badge)
                                                        <div class="tariff-card tariff-badge">
                                                            @else
                                                                <div class="tariff-card ">

                                                                    @endif

                                                                    <span class="tariff-title"> {{ $value->name }}  </span>    @if($value->discount) <br> <span class="tariff-title discount mt-2">(выгоднее на {{ $value->discount }}%)</span>   @endif
                                                                    <hr>
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-6 mt-2">
                                                                            <span class="tariff-desc" @if($value->popular_badge) style="color:#000000;"@endif >Перенос занятий</span>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            @if($value->rescheduling_classes) {{ $value->rescheduling_classes }}@else Нет @endif
                                                                        </div>
                                                                    </div>



                                                                    @if($value->included_diary OR $value->included_form_discount)
                                                                        <div class="row mb-2">
                                                                            <div class="col-md-6 mt-2">
                                                                                <span class="tariff-desc" @if($value->popular_badge) style="color:#000000;"@endif >Включено</span>
                                                                            </div>
                                                                            <div class="col-md-6 mt-2">
                                                                                @if($value->included_diary)• Дневник футболиста <br> @endif @if($value->included_form_discount)• Скидка на форму 50% @endif
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    <div class="row ">
                                                                        <div class="col-md-6 mt-2">
                                                                            <span class="tariff-desc" @if($value->popular_badge) style="color:#000000;"@endif > Цена </span>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span class="table-price-tariff" style="color: #000000;" >{{ $value->price }} ₽</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                        </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>

                </div>

            </div>


    </div>
</div>
@endif
