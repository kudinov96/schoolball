
@if($clubModel->abonements()->count() > 0)

<div class="seventhSection d-none d-md-block"  style="margin-top: 50px; margin-bottom: 48px;">
    <div class="container">
        <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
            <h3 class="title-desc" style="margin-bottom: 48px !important;">Тарифы под ваши запросы</h3>
        </div>
        <div id="tariff">
            <div class="w-100"></div>

            <x-tariffs-list :abonements="$clubModel->abonements"></x-tariffs-list>
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

                <x-tariffs-list :abonements="$clubModel->abonements"></x-tariffs-list>
            </div>
    </div>
</div>
@endif
