<div class="secondSection  ">

    <div class="container">
        <div class="row">



            <div id="schedule" style="visibility: hidden;position: relative;top: -100px;"></div>

            <div class="col-md-12   d-none d-md-block">
                <h3 class="title-desc text-center" style="margin-top: -55px !important; margin-bottom: 65px !important;">Продуктивный распорядок дня</h3>
            </div>



            <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">
                <div id="schedulemob" style="visibility: hidden;position: relative;top: -100px;"></div>

                <h3 class="mob-title-sec" style="  margin-left: 16px;    margin-top: 42px;">Продуктивный распорядок дня</h3>
            </div>

        </div>
        <div class="w-100"></div>

        <div class="d-none d-md-block">


        <div class="row ">

            <div class="col-md-4">
                <div class="camp-table">
                    <h4 class="text-center" style="margin-top: 30px;">Пятница</h4>
                    <div class="" style="padding: 15px;margin-bottom: 25px;">
                        <table class="table-hover">
                            <tbody>
                            @foreach($schedule as $activity)
                                @if($activity->day == 'Пятница')
                                    <tr style="border-bottom: 1px solid lightgray;">
                                        <td width="150">{{ $activity->time }}</td>
                                        <td style="text-align: left;">{{ $activity->activity }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="camp-table">
                    <h4 class="text-center"  style="margin-top: 30px;">Суббота</h4>
                    <div class="" style="padding: 15px;margin-bottom: 25px;">
                        <table class="table-hover">
                            <tbody>
                            @foreach($schedule as $activity)
                                @if($activity->day == 'Суббота')
                                    <tr style="border-bottom: 1px solid lightgray;">
                                        <td width="150">{{ $activity->time }}</td>
                                        <td style="text-align: left;">{{ $activity->activity }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="camp-table  ">
                    <h4 class="text-center"  style="margin-top: 30px;">Воскресение</h4>
                    <div class="" style="padding: 15px;margin-bottom: 25px;">
                        <table class="table-hover">
                            <tbody>
                            @foreach($schedule as $activity)
                                @if($activity->day == 'Воскресение')
                                    <tr style="border-bottom: 1px solid lightgray;">
                                        <td width="150">{{ $activity->time }}</td>
                                        <td style="text-align: left;">{{ $activity->activity }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


                    </div>

    </div>


        <div class="col-12 d-sm-block d-md-none">

            <div class="row mobile-advantage-slider" style=" ">
                <div class="col-12">
                    <div class="advantage  " style="width: 100% !important; height:auto !important;  padding-left: 0 !important;">
                         <b><h4 style="height: 48px;font-size: 16px;font-weight: normal;font-stretch: normal;font-style: normal;line-height: 1.33;letter-spacing: normal;color: #303337;font-weight: 800; padding-top: 20px !important;">Пятница</h4></b>
                        <div class="" style="padding: 15px;margin-bottom: 25px;">
                            <table class="table-hover">
                                <tbody>

                                @foreach($schedule as $activity)
                                    @if($activity->day == 'Пятница')
                                        <tr style="border-bottom: 1px solid lightgray;">
                                            <td width="150">{{ $activity->time }}</td>
                                            <td style="text-align: left;">{{ $activity->activity }}</td>
                                        </tr>
                                    @endif
                                @endforeach


                                </tbody></table>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="advantage  " style="width: 100% !important; height:auto !important;  padding-left: 0 !important;">
                        <b><h4 style="height: 48px;font-size: 16px;font-weight: normal;font-stretch: normal;font-style: normal;line-height: 1.33;letter-spacing: normal;color: #303337;font-weight: 800; padding-top: 20px !important;">Суббота</h4></b>
                        <div class="" style="padding: 15px;margin-bottom: 25px;">
                            <table class="table-hover">
                                <tbody>
                                @foreach($schedule as $activity)
                                    @if($activity->day == 'Суббота')
                                        <tr style="border-bottom: 1px solid lightgray;">
                                            <td width="150">{{ $activity->time }}</td>
                                            <td style="text-align: left;">{{ $activity->activity }}</td>
                                        </tr>
                                    @endif
                                @endforeach


                                </tbody></table>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="advantage  " style="width: 100% !important; height:auto !important;  padding-left: 0 !important;">
                        <b><h4 style="height: 48px;font-size: 16px;font-weight: normal;font-stretch: normal;font-style: normal;line-height: 1.33;letter-spacing: normal;color: #303337;font-weight: 800; padding-top: 20px !important;">Воскресение</h4></b>
                        <div class="" style="padding: 15px;margin-bottom: 25px;">
                            <table class="table-hover">
                                <tbody>

                                @foreach($schedule as $activity)
                                    @if($activity->day == 'Воскресение')
                                        <tr style="border-bottom: 1px solid lightgray;">
                                            <td width="150">{{ $activity->time }}</td>
                                            <td style="text-align: left;">{{ $activity->activity }}</td>
                                        </tr>
                                    @endif
                                @endforeach


                                </tbody></table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
