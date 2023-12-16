@extends('layouts.account')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Товары магазина</h4>
                    <div class="table-responsive">
                        <div id="jsGrid"></div>
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>

    <div class="align-item-center mt-2">
        <button class="btn btn-dark waves-effect waves-light" onclick="document.location.href = '/productNew';">Добавить новый товар</button>
    </div>

    <div class="card">
        <div class="card-body">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Категория</th>

            <th scope="col">Наименование</th>


        </tr>
        </thead>
        <tbody>

        @foreach ($crmtable as $product)

    <tr>
        <th scope="row"><a href="/shop/products/{{ $product->id }}/edit">{{ $product->id }}</a></th>
        <td>  </td>

        <td><a href="/shop/products/{{ $product->id }}/edit">
                {{ $product->name }}

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



@endsection
