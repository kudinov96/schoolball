@extends('layouts.app')
@section('title')
 <title>Страница не найдена! Футбольная школа в Москве для детей - секция занятий футболом</title>
@endsection
@section('description')
    <meta name="description" content="Детская футбольная школа в Москве для юных футболистов от 4 до 16 лет. В нашей академии опытные тренеры, современные методики, лучшие условия для занятия футболом">
@endsection


@section('content')



    <div class="topPartsGray no-radius d-none d-md-block" style="background: #ffffff;
    margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('assets/sb-ui/images/404.svg')}}">
                    <h1 class="title-desc" style="margin-top: 32px !important; margin-bottom: 32px !important;">Страница не найдена</h1>
                    <h5 class="text-desc " style="font-size: 20px;">
                        Ссылка, по которой вы перешли, устарела, либо такой страницы больше нет.
                    </h5>
                    <div class="text-center  " style="margin-bottom: 160px;">
                        <button type="button"  onclick="window.location.href='{{ route('home') }}'" class="btn-desc  waves-effect waves-light" >Перейти на главную
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- Section - schoolball info mob !-->


    <!-- Section - schoolball info mob !-->
    <div class="topPartsGray  no-radius d-sm-block d-md-none" style="background: #ffffff;
    margin-top: 40px;">
        <div class="container">
            <div class="col-md-12 text-center">

                <img src="{{asset('assets/sb-ui/images/404.svg')}}" style="max-width: 100%;">

                <h1 class="title-desc-mob" style="margin-bottom: 16px !important;">Страница не найдена
                </h1>


                <h5 class="mob-text-section" style="font-size: 16px !important;  margin-bottom: 0px !important; text-align: center !important;
">
                    Ссылка, по которой вы перешли, устарела, либо такой страницы больше нет.

                </h5>

                <div class="text-center  " style="margin-bottom: 128px;">
                    <button  style="margin-top: 32px !important; " onclick="window.location.href='{{ route('home') }}'" class="btn-desc waves-effect waves-light">Перейти на главную</button>

                </div>


            </div>
        </div>
    </div>


    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/welcomeVue.js') }}"></script>
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
      </script>

    <script>
        $("#clubs").change(function(){
            var id = $(this).val();
            var token = $("input[name='_token']").val();
            console.log(id);

            $.ajax({
                url: "{{ route('selecttariff') }}",
                method: 'POST',
                data: {id:id, _token:token},
                success: function(data) {
                    $("#tariff").html('');
                    $("#tariff").html(data.options);
                }
            });
        });
    </script>


    <script>
        $("#clubs-mob").change(function(){
            var id = $(this).val();
            var token = $("input[name='_token']").val();
            console.log(id);

            $.ajax({
                url: "{{ route('selecttariffmob') }}",
                method: 'POST',
                data: {id:id, _token:token},
                success: function(data) {
                    $("#tariff-mob").html('');
                    $("#tariff-mob").html(data.options);
                }
            });
        });
    </script>



    <script>



        function showMore() {
            var hidden = document.querySelectorAll('.news .hidden');
            for (let i = 0; i < 1 && i < hidden.length; i++) {
                hidden[i].classList.remove('hidden');
            }
        }

        function sendFormDownload() {
            $.ajax({
                type: "POST",
                url: "/sendbackcall/2",
                data: $("#sendform2").serialize(),
                success: function (result) {
                    $("#callback-2-front").addClass("d-none");
                    $("#callback-2-done").removeClass("d-none");
                    var linkreal = document.getElementById('download-link');
                    linkreal.setAttribute('href', 'https://schoolball.ru/' + result);
                    linkreal.setAttribute('download', 'program.pdf');
                    linkreal.click();
                }
            });
        }
    </script>


    <script>
        $(".owl-carousel").owlCarousel({
            navigation : true
        });



        $(document).ready(function() {

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,

                responsiveClass:true,
                items: 1,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:6,
                        nav:true,
                        loop:false
                    }
                }
            })
        })
    </script>


    <script>
        function sendForm2() {
            if ($("#sendform2")[0][1].value !== '' ) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('backCall2') }}",
                    data: $("#sendform2").serialize(),
                    success: function( result ) {
                        if (result == 'DONE!') {
                            $("#callback-2-front").addClass("d-none");
                            $("#callback-2-done").removeClass("d-none");
                        }
                    }
                });

            } else {
                alert('Не введены данные в поля обязательные для заполнения')
            }

        }
    </script>



@endsection
