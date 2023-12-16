<div class="seventhSection " id="" style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">




        <!-- Coaches mob -->

        <div class="row">

            <div class="col-md-8 offset-md-2 text-center">
                <div id="schedule"  style="visibility: hidden;position: relative;top: -100px;"></div>
                <h3 class="title-desc">Удобное расписание и комфортные условия по стоимости занятий</h3>

            </div>


            <div class="col-auto center-block  text-center  d-none d-md-block">
                <div class="toggler-club">
                    <ul class="nav nav-pills-club mb-3" id="schedule-tab" role="tablist">

                        @foreach($cards as $card)

                            <li class="nav-item" role="presentation">

                                    @foreach($group_age as $grage)
                                        @if($grage->group_age_id == $card->group_age_id)
                              <button class="nav-link-club @if ($loop->first) active @endif " id="schedule-{{$grage->group_age_id}}-tab"
                                      data-toggle="pill" data-target="#schedule-{{$grage->group_age_id}}"
                                      type="button" role="tab" aria-controls="schedule-{{$grage->group_age_id}}"
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

            <div class="w-100"></div>




        </div>
        <div class="scheduleSection d-none d-md-block">

            <div class="tab-content" id="schedule-tabContent">
                @foreach($cards as $card)
                    @foreach($group_age as $grage)
                        @if($grage->group_age_id == $card->group_age_id)
                <div class="tab-pane fade @if ($loop->first) show active @endif  " id="schedule-{{ $card->group_age_id}}" role="tabpanel" aria-labelledby="schedule-{{ $card->group_age_id}}-tab">


                    @foreach($schedule as $schedule_item)
                        @if($grage->group_age_id == $schedule_item->group_age_id)


                    <h5 class="schedule-group-section">
                        @foreach($section as $section_item)
                            @if($schedule_item->group_section_id == $section_item->group_section_id)
                                {{ $section_item->name }}
                            @endif
                        @endforeach

                    </h5>

                    <div class="row schedule-section">
                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">ПН</div>
                            @if($schedule_item->monday_start != 0)
                            <div class="schedule-day-traning">Тренировка</div>
                            <div class="schedule-day-traning-time">{{ $schedule_item->monday_start }} — {{$schedule_item->monday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>

                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">ВТ</div>
                            @if($schedule_item->tuesday_start != 0)
                                <div class="schedule-day-traning">Тренировка</div>
                                <div class="schedule-day-traning-time">{{ $schedule_item->tuesday_start }} — {{$schedule_item->tuesday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>

                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">СР</div>
                            @if($schedule_item->wednesday_start != 0)
                                <div class="schedule-day-traning">Тренировка</div>
                                <div class="schedule-day-traning-time">{{ $schedule_item->wednesday_start }} — {{$schedule_item->wednesday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>

                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">ЧТ</div>
                            @if($schedule_item->thursday_start != 0)
                                <div class="schedule-day-traning">Тренировка</div>
                                <div class="schedule-day-traning-time">{{ $schedule_item->thursday_start }} — {{$schedule_item->thursday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>

                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">ПТ</div>
                            @if($schedule_item->friday_start != 0)
                                <div class="schedule-day-traning">Тренировка</div>
                                <div class="schedule-day-traning-time">{{ $schedule_item->friday_start }} — {{$schedule_item->friday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>

                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">СБ</div>
                            @if($schedule_item->saturday_start != 0)
                                <div class="schedule-day-traning">Тренировка</div>
                                <div class="schedule-day-traning-time">{{ $schedule_item->saturday_start }} — {{$schedule_item->saturday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>

                        <div class="schedule-day col-1">
                            <div class="schedule-day-title">ВС</div>
                            @if($schedule_item->sunday_start != 0)
                                <div class="schedule-day-traning">Тренировка</div>
                                <div class="schedule-day-traning-time">{{ $schedule_item->sunday_start }} — {{$schedule_item->sunday_end}}</div>
                            @else
                                <div class="schedule-day-traning holiday">Выходной</div>

                            @endif
                        </div>


                    </div>

                        @endif

                    @endforeach



                </div>
                        @endif
                    @endforeach
                @endforeach



            </div>



    </div>


        <div class="section_main d-sm-block d-md-none">
            <div class="tabbable" id="nav-tab" role="tablist">
                <ul class="nav nav-pills mb-3 mob-tab  nav nav-tabs" id="schedule-tab" role="tablist">


                    @foreach($cards as $card)

                        <li class="nav-item" role="presentation">

                            @foreach($group_age as $grage)
                                @if($grage->group_age_id == $card->group_age_id)
                                    <button class="nav-link @if ($loop->first) active @endif " id="schedule-{{$grage->group_age_id}}-tab-mob"
                                            data-toggle="pill" data-target="#schedule-{{$grage->group_age_id}}-mob"
                                            type="button" role="tab" aria-controls="schedule-{{$grage->group_age_id}}-mob"
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

        <div class="scheduleSection d-sm-block d-md-none">
            <div class="container">

                <div class="tab-content" id="schedule-tabContent">
                    @foreach($cards as $card)
                        @foreach($group_age as $grage)
                            @if($grage->group_age_id == $card->group_age_id)
                                <div class="tab-pane fade @if ($loop->first) show active @endif  " id="schedule-{{ $card->group_age_id}}-mob" role="tabpanel" aria-labelledby="schedule-{{ $card->group_age_id}}-tab-mob">

                                    @foreach($schedule as $schedule_item)
                                        @if($grage->group_age_id == $schedule_item->group_age_id)


                                            <h5 class="schedule-group-section-mob">
                                                @foreach($section as $section_item)
                                                    @if($schedule_item->group_section_id == $section_item->group_section_id)
                                                        {{ $section_item->name }}
                                                    @endif
                                                @endforeach

                                            </h5>
                                            <div class="row schedule-section-mob" style="margin-bottom: 15px;">
                                            @if($schedule_item->monday_start != 0)
                                            <div class="schedule-day-mob col-5">
                                                <div class="schedule-day-title-mob">ПН</div>
                                                <div class="schedule-day-traning-mob">Тренировка</div>
                                                <div class="schedule-day-traning-time-mob">{{ $schedule_item->monday_start }} — {{$schedule_item->monday_end}}</div>

                                            </div>
                                            @endif

                                                @if($schedule_item->tuesday_start != 0)
                                                    <div class="schedule-day-mob col-5">
                                                        <div class="schedule-day-title-mob">ВТ</div>
                                                        <div class="schedule-day-traning-mob">Тренировка</div>
                                                        <div class="schedule-day-traning-time-mob">{{ $schedule_item->tuesday_start }} — {{$schedule_item->tuesday_end}}</div>

                                                    </div>
                                                @endif

                                                @if($schedule_item->wednesday_start != 0)
                                                    <div class="schedule-day-mob col-5">
                                                        <div class="schedule-day-title-mob">СР</div>
                                                        <div class="schedule-day-traning-mob">Тренировка</div>
                                                        <div class="schedule-day-traning-time-mob">{{ $schedule_item->wednesday_start }} — {{$schedule_item->wednesday_end}}</div>

                                                    </div>
                                                @endif

                                                @if($schedule_item->thursday_start != 0)
                                                    <div class="schedule-day-mob col-5">
                                                        <div class="schedule-day-title-mob">ЧТ</div>
                                                        <div class="schedule-day-traning-mob">Тренировка</div>
                                                        <div class="schedule-day-traning-time-mob">{{ $schedule_item->thursday_start }} — {{$schedule_item->thursday_end}}</div>

                                                    </div>
                                                @endif

                                                @if($schedule_item->friday_start != 0)
                                                    <div class="schedule-day-mob col-5">
                                                        <div class="schedule-day-title-mob">ПТ</div>
                                                        <div class="schedule-day-traning-mob">Тренировка</div>
                                                        <div class="schedule-day-traning-time-mob">{{ $schedule_item->friday_start }} — {{$schedule_item->friday_end}}</div>

                                                    </div>
                                                @endif

                                                @if($schedule_item->saturday_start != 0)
                                                    <div class="schedule-day-mob col-5">
                                                        <div class="schedule-day-title-mob">СБ</div>
                                                        <div class="schedule-day-traning-mob">Тренировка</div>
                                                        <div class="schedule-day-traning-time-mob">{{ $schedule_item->saturday_start }} — {{$schedule_item->saturday_end}}</div>

                                                    </div>
                                                @endif

                                                @if($schedule_item->sunday_start != 0)
                                                    <div class="schedule-day-mob col-5">
                                                        <div class="schedule-day-title-mob">ВС</div>
                                                        <div class="schedule-day-traning-mob">Тренировка</div>
                                                        <div class="schedule-day-traning-time-mob">{{ $schedule_item->sunday_start }} — {{$schedule_item->sunday_end}}</div>

                                                    </div>
                                                @endif

                                            </div>


                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>




<!-- abonements mob-->



        </div>
        </div>
            <!-- abonements mob-->







    </div>
</div>




