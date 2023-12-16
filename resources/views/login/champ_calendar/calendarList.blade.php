@extends('layouts.account')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Календарь соревнований </h4>
                    <div class="table-responsive">
                        <div id="jsGrid"></div>
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>

    <div class="align-item-center mt-2">
        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/calendarNew';">Создать новую запись</button>
    </div>

    <div class="card">
        <div class="card-body">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Сезон</th>
            <th scope="col">Наименование</th>
            <th scope="col">Дата проведения</th>
        </tr>
        </thead>
        <tbody>


        @foreach ($crmtable as $calendar)



    <tr>
        <th scope="row">{{ $calendar->id }}</th>

        <td>


        @if($calendar->season == 1)
            Осень
        @endif

        @if($calendar->season == 2)
            Зима
        @endif

        @if($calendar->season == 3)
            Весна
        @endif

        </td>

        <td><a href="/calendar/{{ $calendar->id }}/edit">
                {{ $calendar->name }}
            </a></td>
        <td>
                {{ $calendar->date }}
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
