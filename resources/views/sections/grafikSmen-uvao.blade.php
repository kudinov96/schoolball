<div id="grafikSmen" class="secondSection"  style="background-image: url(../assets/images/camp/background-camp.png); padding-bottom: 35px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div id="grafikSmen" style="visibility: hidden;position: relative;top: -100px;"></div>

                <div class="mobSeventhSection col-md-12 text-center d-none d-md-block">
                    <h3 class="title-desc" style=" margin-bottom: 35px !important;">График смен</h3>

                </div>

                <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">
                    <h3 class="mob-title-sec" style=" margin-top:45px; ">График смен</h3>

                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/camp/camp-img-1.svg') }}" style="margin-top: 15px;">
            </div>
            <div class="col-md-8">
                <div class="camp-table text-center">
                    <table>
                        <thead>
                        <th>Номер смены</th>
                        <th>Дата (будние дни)</th>
                        <th>Мест</th>
                        <th class="d-none d-md-block">Свободных</th>
                        </thead>
                        <tbody>

                        @foreach($schedule as $item)
                            <tr style="border-bottom: 1px solid lightgray;">
                            <tr style="border-bottom: 1px solid lightgray;">
                                <td>{{$item->smena}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->places}}</td>
                                <td class="d-none d-md-block">{{$item->free_places}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <p style="font-size: 18px; margin: 20px 0 50px; text-align: left;">* возможен индивидуальный график, когда вы сами выбираете дату начала и завершения своей персональной смены</p>
            </div>
            <div class="col-md-12 text-center">
                <button type="button" name="button" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" style="width: 280px;height: 56px;border-radius: 8px;border: solid 1px #fec311;background-color: #fec311;margin-top: 40px;font-size: 18px;font-weight: 500;font-stretch: normal;font-style: normal;line-height: 1.11;letter-spacing: normal;text-align: center;color: #54420a;transition: 1s;">Забронировать место</button>
            </div>




        </div>
    </div>
</div>
