<div class="seventhSection"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container" >
        <div class="row">

            <div class="col-md-8 offset-md-2 text-center">
                <h3 class="title-desc">Как проходят наши тренировки</h3>

                <h4 class="main_desc">
                    Мы помогаем родителям раскрыть потенциал их ребенка и сформировать готовых к будущему детей, которые уверенно заводят друзей, тренируются на площадке и высоко поднимают руку в классе.
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="container" style="max-width: 800px;">

<div id="carousel" class="carousel slide slide-ext carousel-fade" data-ride="carousel">
    <!-- Индикаторы -->
    <ol class="carousel-indicators">
        @foreach(explode('|',$main->images_traning ) as $key => $row)
            <li data-target="#carousel" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
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
    <a class="carousel-control-prev" style="width: 30%!important;" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
    </a>
    <a class="carousel-control-next" style="width: 30%!important;" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Следующий</span>
    </a>
</div>

</div>

