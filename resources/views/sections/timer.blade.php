<div id="timer" class="d-none d-md-block">
    <div class="row text-center" style="
    margin-top: 6px;
">
        <div class="col-md-2 offset-1" style="margin-top: 1px;">
            До начала смены:
        </div>

        <div class="col-md-3">
            <div class="row" style="font-size: 13PX;margin-top: 4px;">
                <div class="col-3">   <span id="days"></span>   <span id="days-word">дней</span> </div>
                <div class="col-3"> <span id="hours"></span> ч </div>
                <div class="col-3"> <span id="minutes"></span> мин </div>
                <div class="col-3"> <span id="seconds"></span> с </div>

                <!-- Force next columns to break to new line -->

            </div>

        </div>
        <div class="col-md-3" style="margin-top: 2px;">

            Свободных мест: <b>{{ $main->places }} </b>
           <span style="font-size: 12px; "><i>{{ $price_timer }} </i> </span>
        </div>
        <div class="col-md-3">
            <button type="button" style="margin-top: -9px;" name="button" class="mainHeaderButtonFix" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Забронировать</button>

        </div>
    </div>
</div>
<div id="timer2" class="d-sm-block d-md-none">
    <div class="text-center" style="font-size: 14px; margin-bottom: 9px;">
        До начала смены:  <span id="days2"></span>
        <b><span id="hours2"></span></b> ч <b><span id="minutes2"></span></b> мин
    </div>
    <div class="text-center">
        <button type="button" style="margin-top: -5px;" name="button" class="mainHeaderButtonFix2"
                data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">
            Забронировать
        </button>
    </div>
    <div class="text-center" style="font-size: 14px;">
        Свободных мест: <b>{{ $main->places }}</b><br>
        <span style="font-size: 12px; "><i> {{ $price_timer }} </i> </span>

    </div>
</div>

