
@if(!empty($tariffs))

    <div class="col-auto center-block  text-center d-sm-block d-md-none">
        <div class="row d-flex justify-content-center">

            <div class="col-md-4">

                <div class="card" style="display: none;">


                    <div class="text-center mt-3">
    <div class="toggler-tariffs tabbable">
        <ul class="nav nav-pills mb-3 mob-tab  nav nav-tabs " id="pillsTariffMob-tab" role="tablist">

            @foreach($cards as $card)

                <li class="nav-item mob-tab-t" role="presentation">

                    @foreach($group_age as $grage)
                        @if($grage->group_age_id == $card->group_id)
                            <button class="nav-link  @if ($loop->first) active @endif " id="pillsTariffMob-{{$grage->group_age_id}}-tab"
                                    data-toggle="pill" data-target="#pillsTariffMob-{{$grage->group_age_id}}"
                                    type="button" role="tab" aria-controls="pillsTariffMob-{{$grage->group_age_id}}"
                                    aria-selected="false">

                                {{$grage->name  }}
                                @endif
                                @endforeach
                            </button>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100"></div>

    <div class="">
    <div class="tab-content" id="pillsTariffMob-tabContent">

        @foreach($cards as $card)
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


        <div class="card-body">
            <div class="text-center">
                @foreach($clubs as $club)
                    @if($value->club_id ==  $club->id)
                        <a href="club_{{$club->slug}}#schedulemob" class="btn btn-schedulle" >Смотреть расписание</a>
                    @endif
                @endforeach
                <button type="button" class="btn-callback-tariff  waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Оставить заявку
                </button>
            </div>
        </div>


@endif
