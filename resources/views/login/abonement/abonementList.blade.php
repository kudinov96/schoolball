@extends('layouts.account')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Таблицы абонементов</h4>
                    <div class="table-responsive">
                        <div id="jsGrid"></div>
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>

    <div class="align-item-center mt-2">
        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/abonementNew';">Создать новую запись</button>
    </div>

    <div class="card">
        <div class="card-body">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Клуб</th>

            <th scope="col">Наименование тарифа</th>




        </tr>
        </thead>
        <tbody>


        @foreach ($crmtable as $abonement)



    <tr>
        <th scope="row">{{ $abonement->id }}</th>


        <td>   @foreach ($clublist as $club)
                @if($club->id == $abonement->club_id)
                    {{ $club->name }}
                @endif
            @endforeach

        </td>


        <td><a href="/abonement/{{ $abonement->id }}/edit">
                @foreach ($tarifflist as $tariff)
                    @if($tariff->id == $abonement->tariff_id)
                        {{ $tariff->name }}
                    @endif
                @endforeach
            </a></td>




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
