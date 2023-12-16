<div id="grafikSmen" class="secondSection"  style="background-image: url(../assets/images/camp/background-camp.png); padding-bottom: 35px;">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <div id="schedule" style="visibility: hidden;position: relative;top: -100px;"></div>

                <div id="schedulemob"  style="visibility: hidden;position: relative;top: -100px;"></div>


                <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
                    <h3 class="title-desc" style=" margin-bottom: 35px !important;">Распорядок дня с полным пансионом</h3>

                </div>

                <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">
                    <h3 class="mob-title-sec" style=" margin-top:45px;     margin-bottom: 0px;
}">Распорядок дня с полным пансионом</h3>

                </div>



            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/camp/camp-img-2.svg') }}" style="margin-top: 15px;">
            </div>
            <div class="col-md-8">
                <div class="camp-table">
                    <table>
                        @foreach($daily_schedule as $daily)
                            <tr style="border-bottom: 1px solid lightgray;">
                                <td width="150" class="text-center">{{$daily->time}}</td>
                                <td>{{$daily->title}}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
