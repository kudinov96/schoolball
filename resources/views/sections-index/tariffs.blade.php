<div class="seventhSection d-none d-md-block"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">
        <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
            <h3 class="title-desc" style="margin-bottom: 30px !important;">Тарифы под ваши запросы</h3>
        </div>
        <form>
            @csrf

            <div id="tariff">
                {{--<div class="col-auto center-block  text-center  d-none d-md-block" style="display: none;">
                    <div class="row d-flex justify-content-center" >

                        <div class="col-md-4">

                            <div class="card"  style="display: none;">


                                <div class="text-center mt-3">
                                    <div class="toggler-tariffs">
                                        <ul class="nav nav-pills-club mb-3" id="pillsTariff-tab" role="tablist">

                                            @foreach($cards as $card)

                                                <li class="nav-item" role="presentation">

                                                    @foreach($group_age as $grage)
                                                        @if($grage->group_age_id == $card->group_id)
                                                            <button class="nav-link-club @if ($loop->first) active @endif " id="pillsTariff-{{$grage->group_age_id}}-tab"
                                                                    data-toggle="pill" data-target="#pillsTariff-{{$grage->group_age_id}}"
                                                                    type="button" role="tab" aria-controls="pillsTariff-{{$grage->group_age_id}}"
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
                <div class="w-100"></div>--}}

                <x-tariffs-list :abonements="$abonements"></x-tariffs-list>
            </div>

        </form>
    </div>
</div>





<div class="seventhSection  d-sm-block d-md-none"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">


        <div class="row">

            <div class="col-md-12 text-center">
                <h3 class="title-desc" style="font-size: 28px !important;     margin-bottom: 32px !important;">Тарифы под ваши запросы</h3>

            </div>
        </div>

        <form>
            @csrf

            <div id="tariff-mob">
                {{--<div class="col-auto center-block  text-center   ">
                    <div class="row d-flex justify-content-center">

                        <div class="col-md-4">

                            <div class="card" style="display: none;">


                                <div class="text-center mt-3">
                                    <div class="toggler-tariffs tabbable">
                                        <ul class="nav nav-pills mb-4 mob-tab  nav nav-tabs " id="pillsTariffMob-tab" role="tablist">

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



                <div class="w-100"></div>--}}

                <x-tariffs-list :abonements="$abonements"></x-tariffs-list>

            </div>

        </form>
    </div>
</div>
