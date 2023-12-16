@extends('layouts.account')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Таблица сезона </h4>
                    <div class="table-responsive">
                        <div id="jsGrid"></div>
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>

    <div class="align-item-center mt-2">
        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/seasonNew';">Создать новую запись</button>
    </div>

    <div class="card">
        <div class="card-body">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Группа</th>
            <th scope="col">Команда</th>
            <th scope="col">Очки</th>
        </tr>
        </thead>
        <tbody>


        @foreach ($crmtable as $season)

    <tr>
        <th scope="row">{{ $season->id }}</th>


        <td>
            @foreach ($groupage as $age)
                @if($age->group_age_id == $season->group_age_id)
                    {{ $age->name }}
                @endif
            @endforeach

        </td>
        <td><a href="/season/{{ $season->id }}/edit">
                {{ $season->team_name }}
            </a></td>
        <td>
                {{ $season->points }}
        </td>



    </tr>
    @endforeach


    </tbody>
</table>
    </div>
</div>

<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.ru.js') }}"></script>
<script src="{{ asset('assets/plugins/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('js/datepicker.min.js') }}"></script>





@endsection
