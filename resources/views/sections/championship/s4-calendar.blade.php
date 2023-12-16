<div class="section2"  >
    <div class="container">
        <div class="col-md-8 offset-md-2 text-center">
            <h3 class="title-desc" >Календарь соревнований</h3>
            <h5 class="text-desc " style="font-size: 18px; ">
                Календарь составлен таким образом, чтобы ребенок не терял интерес к тренировкам и стремился стать чемпионом.            </h5>
        </div>

        <div class="row">
        <div class="col-auto center-block  text-center">
            <div class="toggler" style="margin-bottom: 40px; margin-top: 0px;">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-1-tab" data-toggle="pill" data-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Осень</button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2-tab"     data-toggle="pill" data-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Зима</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-3-tab" data-toggle="pill" data-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Весна</button>
                    </li>

                </ul>
            </div>
        </div>

        </div>



        <div class="tab-content" id="pills-tabContent">

            @foreach($grouped_champioship_calendar as $season => $calendar)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-{{$season}}" role="tabpanel" aria-labelledby="pills-{{$season}}-tab">
                    <div class="row justify-content-md-center" id="camp-list">
                        @foreach($calendar as $record)
                            <div class="col-md-4 card-c" style="margin-bottom: 32px;">
                                <div class="catalog-championship">
                                    <div class="card-championship-img">
                                        <a href="#"  data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">

                                            <img src="@if ($record->image == "") @else{{ asset('/storage/') }}/{{ str_replace("public/", "", $record->image) }}@endif" class="cat-img" alt="">
                                        </a>
                                    </div>
                                    <div class="catalog-championship-section">
                                        <h4 class="catalog-championship-sub">{{ $record->subname }}</h4>
                                        <h6 class="catalog-championship-title">{{ $record->name }}</h6>
                                        <h5 class="catalog-championship-date">{{ $record->date }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach


        </div>









        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <button class="btn btn-primary" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Участвовать в соревнованиях</button>
            </div>
        </div>


    </div>

</div>
