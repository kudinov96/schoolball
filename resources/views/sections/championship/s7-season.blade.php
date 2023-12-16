<style>
    .paging_simple_numbers{
        padding: 15px 0px 15px 0px;
        opacity: 0.9;
        border-radius: 8px;
        border: solid 1px #f3f3f4;
        background-color: #fff;
        margin-top: 45px;
        /* margin-right: -31px; */
        text-align: center!important;
        /* height: 68px; */
        border-radius: 8px;
        border: solid 2px #f3f3f4;
        background-color: #ffffff;
    }

    .paginate_button{
        border-radius: 0.25rem;
        cursor: pointer;
        width: 102px;
        height: 40px;
        font-size: 16px;
        font-weight: 500;
        font-family: 'IBMPlexSans-Medium' !important;
        border-radius: 4px;
        padding: 6px 10px 8px 10px;
        margin: 0px 6px 0 6px;
        /* padding: 6px 12px 10px; */
        opacity: 0.9;
        border-radius: 4px;
        background-color: #a52a2a00;
        border-color: #a52a2a00;
        color: #2a5dde;
    }
    .paginate_button:hover {
        background: #f3f3f4;
    }
    .current{
        color: #fff !important;
        background-color: #2a5dde;
    }

</style>

<div class="section2" >
    <div class="container">
        <div class="col-md-8 offset-md-2 text-center">
            <h3 class="title-desc" >Текущий рейтинг игроков</h3>
            <h5 class="text-desc " style="font-size: 18px; ">
                Игрок — чемпион будет определён после заключительного соревнования на апрельском кубке «Школы мяча».
            </h5>

        </div>



        <div class="row">
            <div class="col-auto center-block text-center">
                <div class="toggler" style="margin-bottom: 40px; margin-top: 0px;">
                    <ul class="nav nav-pills" id="players-custom-tab" role="tablist">
                        @foreach($group_age_championship as $age_championship)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($loop->first) active @endif" id="players-custom-{{$age_championship->group_age_id}}-tab" data-toggle="pill" data-target="#players-custom-{{$age_championship->group_age_id}}" type="button" role="tab" aria-controls="players-custom-{{$age_championship->group_age_id}}" aria-selected="{{$loop->first ? 'true' : 'false'}}">{{$age_championship->name}}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="players-custom-tabContent">
            @foreach($group_age_championship as $index => $age_championship)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="players-custom-{{$age_championship->group_age_id}}" role="tabpanel" aria-labelledby="players-custom-{{$age_championship->group_age_id}}-tab">
                    <div class="championship-table">
                        <table id="playerTable{{$age_championship->group_age_id}}">


                        <thead>
                            <tr>
                                <th style="width: 5%;">№</th>
                                <th style="width: 50%;">Игрок</th>
                                <th>Клуб</th>
                                <th>Баллы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($grouped_championship_player as $table)
                                @if($table->group_age_id == $age_championship->group_age_id)
                                    <tr>
                                        <td>{{$counter}}</td>
                                        <td>{{$table->player_name}}</td>
                                        <td>{{$table->team_name}}</td>
                                        <td>{{$table->points}}</td>
                                    </tr>
                                    @php
                                        $counter++;
                                    @endphp
                                @endif

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            @endforeach


        </div>
    </div>
</div>

<div class="section2"  >
    <div class="container">
        <div class="col-md-8 offset-md-2 text-center">
            <h3 class="title-desc" >Текущий рейтинг клубов</h3>
            <h5 class="text-desc " style="font-size: 18px; ">
                Команда — чемпион и лучшие игроки будут определены после заключительного соревнования на апрельском кубке «Школы мяча».
            </h5>

        </div>

        <div class="row">
            <div class="col-auto center-block text-center">
                <div class="toggler" style="margin-bottom: 40px; margin-top: 0px;">
                    <ul class="nav nav-pills" id="clubs-custom-tab" role="tablist">
                        @foreach($group_age_championship as $age_championship)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($loop->first) active @endif" id="clubs-custom-{{$age_championship->group_age_id}}-tab" data-toggle="pill" data-target="#clubs-custom-{{$age_championship->group_age_id}}" type="button" role="tab" aria-controls="clubs-custom-{{$age_championship->group_age_id}}" aria-selected="{{$loop->first ? 'true' : 'false'}}">{{$age_championship->name}}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="clubs-custom-tabContent">
            @foreach($group_age_championship as $index => $age_championship)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="clubs-custom-{{$age_championship->group_age_id}}" role="tabpanel" aria-labelledby="clubs-custom-{{$age_championship->group_age_id}}-tab">
                    <div class="championship-table">
                        <table id="teamTable{{$age_championship->group_age_id}}">
                            <thead>
                            <tr>
                                <th style="width: 5%;">№</th>
                                <th style="width: 50%;">Клуб</th>
                                <th>Баллы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($grouped_championship_season as $table)
                                @if($table->group_age_id == $age_championship->group_age_id)
                                    <tr>
                                        <td>{{$counter}}</td>
                                        <td>{{$table->team_name}}</td>
                                        <td>{{$table->points}}</td>
                                    </tr>
                                    @php
                                        $counter++;
                                    @endphp
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        @foreach($group_age_championship as $age_championship)
        $('#playerTable{{$age_championship->group_age_id}}').DataTable({
            dom: 'Btp',
            pageLength: 12,
            language: {
                "paginate": {
                    "previous": "< Назад",
                    "next": "Вперёд >"
                },
                "emptyTable": "Данные отсутствуют в таблице"
            },
            jQueryUI: true
        });
        @endforeach


        @foreach($group_age_championship as $age_championship)
        $('#teamTable{{$age_championship->group_age_id}}').DataTable({
            dom: 'Btp',
            pageLength: 12,
            language: {
                "paginate": {
                    "previous": "< Назад",
                    "next": "Вперёд >"
                },
                "emptyTable": "Данные отсутствуют в таблице"
            },
            jQueryUI: true
        });
        @endforeach

    });
</script>
