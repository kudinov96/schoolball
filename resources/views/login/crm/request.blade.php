@extends('layouts.account')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Таблицы заявок с сайта</h4>
                    <div class="table-responsive">
                        <div id="jsGrid"></div>
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Создание новой записи</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40;width: unset;height: unset;background: unset;border: unset;font-size: 1.5rem;line-height: 1;">×</button>
                </div>
                <div id="callback-1-front">
                    <div class="modal-body text-center" style="margin: 15px;">
                        <form id="sendform" method="post" action="{{ route('insertNewData_camp')}}">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <label for="name" class="text-md-right">ФИО клиента</label>
                                        <div class="col-12">
                                            <input type="text" name="name" value="" class="form-control" placeholder="Петров Пётр" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="phone" class="text-md-right">Контактный телефон</label>
                                        <div class="col-12">
                                            <input type="text" name="phone" value="" class="phone form-control" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label for="name_kid" class="text-md-right">ФИ ребенка </label>
                                        <div class="col-12">
                                            <input type="text" name="name_kid" value="" class="form-control" placeholder="Иванов Иван" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="date-birth-kid" class="text-md-right">Дата рождения:</label>
                                        <div class="col-12">
                                            <input id="date-birth" name="date-birth-kid" type="text" class="datepicker-here form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <label for="location" class="text-md-right">Локация:</label>
                                        <div class="col-12">
                                            <select class="form-control" name="location" style="margin-bottom: .5rem;">
                                                <option value="1">м. Киевская (ЦАО)</option>
                                                <option value="2">м. Кузьминки (ЮВАО)</option>
                                                <option value="3">Подмосковье (Хотьково)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="time" class="text-md-right">Смена:</label>
                                        <div class="col-12">
                                            <select class="form-control" name="time" style="margin-bottom: .5rem;">
                                                <option value="1">1 смена</option>
                                                <option value="2">2 смена</option>
                                                <option value="3">3 смена</option>
                                                <option value="4">4 смена</option>
                                                <option value="5">5 смена</option>
                                                <option value="6">6 смена</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label for="comment" class="text-md-right">Комментарий</label>
                                        <div class="col-12">
                                            <textarea name="comment" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="status" class="text-md-right">Статус</label>
                                        <div class="col-12">
                                            <select class="form-control" name="status" style="margin-bottom: .5rem;" required>
                                                <option value="2">Привлечение</option>
                                                <option value="1">Первая покупка</option>
                                                <option value="3">Экскурсия</option>
                                                <option value="4">Участник</option>
                                                <option value="6">Пауза</option>
                                                <option value="7">Отскок</option>
                                                <option value="8">Дубликат записи</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="datetime-nextcall" class="text-md-right">Дата следующего звонка:</label>
                                        <div class="col-12">
                                            <input name="datetime-nextcall" type="text" class="date-format form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-warning">Создать запись</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="client-form" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Редактирование записи клиента</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40; width: unset; height: unset; background: unset; border: unset; font-size: 1.5rem;line-height: 1;">×</button>
                </div>
                <div id="callback-1-front">
                    <div class="modal-body text-center" style="margin: 15px;">
                        <form id="sendform-1">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <label for="name" class="text-md-right">ФИО клиента</label>
                                        <div class="col-12">
                                            <input id="clientname" type="text" name="name" value="" class="form-control" placeholder="Петров Пётр" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="phone" class="text-md-right">Контактный телефон</label>
                                        <div class="col-12">
                                            <input id="clientphone" type="text" name="phone" value="" class="phone form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer text-center">
                                <button id="sendbutton-1" type="button" class="btn btn-warning" onclick="" data-dismiss="modal" aria-hidden="true">Редактировать запись</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="kid-form" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Редактирование записи клиента</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40; width: unset; height: unset; background: unset; border: unset; font-size: 1.5rem;line-height: 1;">×</button>
                </div>
                <div class="text-left">
                    <h5 id="kidform-client-info" style="margin: 20px 20px 0;"></h5>
                </div>
                <div class="modal-body text-center" style="margin: 15px;">
                    <form id="sendform-2">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label for="name" class="text-md-right">ФИО клиента</label>
                                    <div class="col-12">
                                        <input id="kidname" type="text" name="name" value="" class="form-control" placeholder="Петров Пётр" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="date-birth-kid" class="text-md-right">Дата рождения:</label>
                                    <div class="col-12">
                                        <input id="kiddatebirth" name="date-birth-kid" type="text" class="datepicker-here form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer text-center">
                            <button id="sendbutton-2" type="button" class="btn btn-warning" onclick="" data-dismiss="modal" aria-hidden="true">Редактировать запись</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">E-mail</th>
            <th scope="col">Информация</th>
            <th scope="col">Страница</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($crmtable as $client)

        <tr>
            <th scope="row">{{ $client->id }}</th>
            <td>{{ $client->created_at  }}</td>

            <td>{{ $client->name  }}</td>
            <td>{{ $client->phone  }}</td>
            <td>{{ $client->email  }}</td>
            <td>{{ $client->text  }}</td>
            <td>
                @if ($client->path == 'weekend')
                    Футбольные выходные
                @elseif ($client->path == 'home')
                    Школа Мяча
                @elseif ($client->path == 'camp/cao')
                    Летний лагерь ЦАО
                @elseif ($client->path == 'camp/uvao')
                    Летний лагерь ЮВАО
                @elseif ($client->path == 'dmitrov')
                    Летний лагерь Дмитров
                @elseif ($client->path == 'gorizont')
                    Летний лагерь Горизонт
                @elseif ($client->path == 'catalog')
                    Каталог лагерей
                    @elseif ($client->path == 'cao')
                        Летний лагерь ЦАО
                    @elseif ($client->path == 'uvao')
                        Летний лагерь ЮВАО
                    @else
                    Не указано {{  $client->path  }}
                @endif
            </td>


        </tr>
        @endforeach


        </tbody>
    </table>


    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.ru.js') }}"></script>
    <script src="{{ asset('assets/plugins/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>

    <script>

        function InitGridCustomFields () {
            var jsGridCustomDateTimeField = function (config) {
                jsGrid.Field.call(this, config);
            };

            jsGridCustomDateTimeField.prototype = new jsGrid.Field({

                sorter: function (date1, date2) {
                    console.log('on sorting fild ' + date1 + ' ' + date2);
                    return new Date(date1) - new Date(date2);
                },

                editTemplate: function (value) {
                    this._editPicker = $('<input>').datetimepicker({
                        format: 'dd.mm.yyyy hh:ii',
                        autoclose: true,
                        language: 'ru',
                    });
                    return this._editPicker;
                },

            });

            jsGrid.fields.customDateTimeField = jsGridCustomDateTimeField;

        };


        $(function() {

            InitGridCustomFields();

            var db = {

                loadData: function(filter) {
                    return $.grep(this.clients, function(client) {
                        return (!filter.Date || client.Date.indexOf(filter.Date) > -1)
                            && (!filter.EntryPoint || client.EntryPoint === filter.EntryPoint)
                            && (!filter.Client || client.Client.indexOf(filter.Client) > -1)
                            && (!filter.Student || client.Student.indexOf(filter.Student) > -1)
                            && (!filter.Club || client.Club === filter.Club)
                            && (!filter.CallTime || client.CallTime.indexOf(filter.CallTime) > -1)
                            && (!filter.Comment || client.Comment.indexOf(filter.Comment) > -1)
                            && (!filter.Status || client.Status === filter.Status)
                            && (!filter.Manager || client.Manager === filter.Manager)
                            && (!filter.Height || client.Height.indexOf(filter.Height) > -1)
                    });
                },

                updateItem: function(item) {
                    return $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: "{{ route('updateitem_camp')}}",
                        data: {
                            id:item.id,
                            comment:item.Comment,
                            club:item.Club,
                            calltime:item.CallTime,
                            status:item.Status,
                            height:item.Height,
                        }
                    });
                },
            };

            window.db = db;


            db.clubs = [
                { name: "Не выбрано", id: 0 },
                { name: "ЦАО 1 смена", id: 11 },
                { name: "ЦАО 2 смена", id: 12 },
                { name: "ЦАО 3 смена", id: 13 },
                { name: "ЦАО 4 смена", id: 14 },
                { name: "ЦАО 5 смена", id: 15 },
                { name: "ЦАО 6 смена", id: 16 },
                { name: "ЦАО 7 смена", id: 17 },
                { name: "ЮВАО 1 смена", id: 21 },
                { name: "ЮВАО 2 смена", id: 22 },
                { name: "ЮВАО 3 смена", id: 23 },
                { name: "ЮВАО 4 смена", id: 24 },
                { name: "ЮВАО 5 смена", id: 25 },
                { name: "ЮВАО 6 смена", id: 25 },
                { name: "Подмосковье 1 смена", id: 31 },
                { name: "Подмосковье 2 смена", id: 32 },

            ];





            db.status = [
                { name: "", id: 0 },
                { name: "Первая покупка", id: 1 },
                { name: "Привлечение", id: 2 },
                { name: "Экскурсия", id: 3 },
                { name: "Участник", id: 4 },
                { name: "Пауза", id: 6 },
                { name: "Отскок", id: 7 },
                { name: "Дубликат записи", id: 8}
            ];

            db.managers = [
                { name: "", id: 0 },
                { name: "Хольнов Дмитрий", id: 1 },
                { name: "Вершинин Андрей", id: 2 },
            ];

            db.entrypoint = [
                { name: "", id: 0 },
                { name: "Заявка на сайте", id: 1 },
                { name: "Общение с менеджером", id: 2 },
            ];

            db.clients = [
                    @foreach ($crmtable as $client)
                {
                    "id": {{ $client->id }},
                    "Date": function () {
                        var date = new Date("{{ $client->created_at }}");
                        return ("0" + date.getDate()).slice(-2) + "." + ("0" + (date.getMonth() + 1)).slice(-2) + "." + date.getFullYear();
                    },
                    "EntryPoint": {{ $client->entry_point }},
                    "Client": "<div id='poster-{{ $client->id }}' class='poster'><button id='client-button-{{ $client->id }}' type='button' class='btn btn-secondary waves-effect mo-mb-2' data-toggle='modal' data-animation='bounce' data-target='#client-form' onclick='clientdataload({{ $client->id }})'> {{ $client->name }} </button><div class='descr' id='poster-info-{{ $client->id }}'><div class='row'><div class='col-12'><h4 class='text-light text-center' style='margin: auto;' id='client-name-{{ $client->id }}'>{{ $client->name }} </h4><hr><p id='client-phone-{{ $client->id }}'>Телефон: {{ $client->phone }}</p></div></div></div></div>",
                    @php $born = new DateTime($client->kid_datebirth); $age = $born->diff(new DateTime)->format('%y'); @endphp
                        @if (($age >= 0) && ($age <= 4))
                        @php $group = '3-4 года'; @endphp
                        @elseif (($age >= 5) && ($age <= 7))
                        @php $group = '5-7 лет'; @endphp
                        @elseif (($age >= 8) && ($age <= 12))
                        @php $group = '8-12 лет'; @endphp
                        @elseif ($age >= 13)
                        @php $group = '13+ лет'; @endphp
                        @endif
                    "Student": "<div id='poster-kid-{{ $client->id }}' class='poster'><button id='kid-button-{{ $client->id }}' type='button' class='btn btn-secondary waves-effect mo-mb-2'  data-toggle='modal' data-animation='bounce' data-target='#kid-form' onclick='kiddataload({{ $client->id }})'> {{ $client->kid_name }} </button><div class='descr' id='poster-kid-info-{{ $client->id }}'><div class='row'><div class='col-12'><h4 class='text-light text-center' style='margin: auto;' id='kid-name-{{ $client->id }}'>{{ $client->kid_name}}</h4><hr><p id='kid-datebirth-{{ $client->id }}'>Возраст: {{ $age }}@if($age <= 4) года @else лет @endif@php $d = date('d.m.Y', strtotime($client->kid_datebirth)) @endphp ({{ $d }})</p><p>Возрастная группа: {{ $group }}</p></div></div></div></div>",
                    "Club": {{ $client->location }},
                    "Comment": "{{ $client->comment }}",
                    "CallTime": "@php $d = date('d.m.Y H:i', strtotime($client->datetime_nextcall)) @endphp {{ $d }}",
                    "Status": {{ $client->status }},
                    "Manager": 1,
                    "Height": "{{ $client->height }}",

                },
                @endforeach
            ]

        }());

    </script>
    <script>

        $("#jsGrid").jsGrid({
            height: "70%",
            width: "100%",
            filtering: true,
            editing: true,
            inserting: false,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 1000,
            pageButtonCount: 5,
            altRows: false,

            noDataContent: "Данные не найдены",
            deleteConfirm: "Вы действительно хотите удалить запись?",
            controller: db,

            rowClass: function (item, itemIndex) {
                if (item.Status == 1) { return "table-danger"; }
                if (item.Status == 2) { return "table-warning"; }
                if (item.Status == 3) { return "table-info"; }
                if (item.Status == 4) { return "table-success"; }
            },

            fields: [
                { name: "id", type: "text", visible: false },
                { name: "Date", type: "text", width: 65, title: "Дата создания", editing: false},
                { name: "EntryPoint", items: db.entrypoint, valueField: "id", textField: "name", title: "Точка входа", type: "select", editing: false },
                { name: "Client", type: "text", title: "Клиент", editing: false},
                { name: "Student", type: "text", title: "Ученик", editing: false },
                { name: "Club", align: "center", items: db.clubs, valueField: "id", textField: "name", title: "Локация/Смена", type: "select", insertcss: "custom-select"},
                { name: "Comment", type: "textarea", title: "Комментарий", insertcss: "form-contol", width: 140 },
                { name: "CallTime", type: "textarea", title: "Дата следующего звонка"},
                { name: "Status", align: "center", items: db.status, valueField: "id", textField: "name", title: "Статус", type: "select", insertcss: "custom-select"},
                { name: "Manager", align: "center", items: db.managers, valueField: "id", textField: "name", title: "Менеджер", type: "select", editing: false },
                { name: "Height", align: "center", title: "Рост", type: "text" },
                { type: "control", deleteButton: false,  }
            ]
        });

        @foreach ($crmtable as $client)
        document.getElementById('poster-{{ $client->id }}').addEventListener('mousemove', function(e){
            document.getElementById('poster-info-{{ $client->id }}').style.top = $('#poster-{{ $client->id }}').offset().top-350+'px';
            document.getElementById('poster-info-{{ $client->id }}').style.left = e.clientX-350+'px';
        });
        document.getElementById('poster-kid-{{ $client->id }}').addEventListener('mousemove', function(e){
            document.getElementById('poster-kid-info-{{ $client->id }}').style.top = $('#poster-kid-{{ $client->id }}').offset().top-350+'px';
            document.getElementById('poster-kid-info-{{ $client->id }}').style.left = e.clientX-350+'px';
        });
        @endforeach


    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('.phone').mask('+7 (000) 000 00 00', {placeholder: "+ (__) _  __"});
        });
        $('.date-format').datetimepicker({
            format: 'dd.mm.yyyy hh:ii',
            autoclose:true,
            language: 'ru',
            orientation: "top"
        });
    </script>
    <script type="text/javascript">
        function clientdataload(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('getUsersData') }}",
                data: {
                    id:id,
                },
                success: function( result ) {
                    document.getElementById('sendbutton-1').setAttribute('onclick','clientdatasend(' + result[0] + ')');
                    document.getElementById('clientname').value = result[1] + " " + result[2];
                    document.getElementById('clientphone').value = result[3];
                    document.getElementById('client-addphone').value = result[5];
                    document.getElementById('clientinfo').value = result[4];
                }
            });
        }
        function clientdatasend(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "https://schoolball.ru/camp/changeUsersData/" + id,
                data: $("#sendform-1").serialize(),
                success: function( result ) {
                    document.getElementById('client-button-' + result[0]).innerHTML = result[1] + " " + result[2];
                    document.getElementById('client-name-' + result[0]).innerHTML = result[1] + " " + result[2];
                    document.getElementById('client-phone-' + result[0]).innerHTML = "Телефон: " + result[3];
                }
            });
        }
    </script>
    <script type="text/javascript">
        function kiddataload(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('getKidData') }}",
                data: {
                    id:id,
                },
                success: function( result ) {
                    document.getElementById('kidform-client-info').innerHTML = 'Клиент: ' + result['surname'] + ' ' + result['name'] +  ", " + result['phone_number'];
                    document.getElementById('sendbutton-2').setAttribute('onclick','kiddatasend(' + result['id_kid'] + ')');
                    document.getElementById('kidname').value = result['surname_kid'] + " " + result['name_kid'];
                    var date = new Date(result['date_birth_kid']);
                    document.getElementById('kiddatebirth').value = ("0" + date.getDate()).slice(-2) + "." + ("0" + (date.getMonth() + 1)).slice(-2) + "." + date.getFullYear();
                }
            });
        }
        function kiddatasend(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "https://schoolball.ru/camp/changeKidData/" + id,
                data: $("#sendform-2").serialize(),
                success: function(result) {
                    document.getElementById('kid-button-' + result['id_kid']).innerHTML = result['surname_kid'] + " " + result['name_kid'];
                    document.getElementById('kid-name-' + result['id_kid']).innerHTML = result['surname_kid'] + " " + result['name_kid'];
                    var date = new Date(result['date_birth_kid']);
                    document.getElementById('kid-datebirth-' + result['id_kid']).innerHTML = "Дата рождения: " + ("0" + date.getDate()).slice(-2) + "." + ("0" + (date.getMonth() + 1)).slice(-2) + "." + date.getFullYear();
                }
            });
        }
    </script>
@endsection
