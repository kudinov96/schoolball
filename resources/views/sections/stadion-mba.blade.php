<div class="seventhSection"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">
        <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
            <h3 class="title-desc" style=" margin-bottom: 35px !important;">Удобное место расположения лагеря</h3>
            <h5 class="text-desc " style="font-size: 20px; ">
                Лагерь расположен на стадионе МВА <br>
                м. Кузьминки, ул. Академика Скрябина, 23, стр. 2

            </h5>
        </div>

        <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">
            <h3 class="mob-title-sec" style="  ">Удобное место расположения лагеря</h3>
            <h5 class="text-desc " style="font-size: 18px;    text-align: left !important; ">
                Лагерь расположен на стадионе МВА <br>
                м. Кузьминки, ул. Академика Скрябина, 23, стр. 2

        </h5>
        </div>
    </div>

</div>

<div class="container" style="max-width: 850px;">

    <div id="carousel" class="carousel slide2 slide-ext carousel-fade" data-ride="carousel">
        <!-- Индикаторы -->
        <ol class="carousel-indicators">

            @foreach(explode('|',$main->images_traning ) as $key => $row)
                @if ($loop->first)   <li data-target="#carousel" data-slide-to="0" class="active"></li> @endif
                <li data-target="#carousel" data-slide-to="{{ $key }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">

            @foreach(explode('|',$main->images_traning ) as $row)

                <div class="carousel-item  @if ($loop->first) active @endif">
                    <img class="img-fluid img-slider" src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}"  width="850"  height="" alt="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}">
                </div>
            @endforeach


        </div>
        <!-- Элементы управления -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>

</div>

