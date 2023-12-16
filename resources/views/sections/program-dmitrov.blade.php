


    <div class="topPartsGray no-radius d-none d-md-block" style="background: #ffffff;
    margin-top: 40px;">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc" style="margin-bottom: 32px !important;">Выездной кэмп «Школы мяча» - это не только про спорт!
                    </h3>
                    <h5 class="text-desc " style="font-size: 26px; ">
                        Программа кэмпа, помимо спортивной направленности и отсутствия гаджетов наполнена тематическими и развивающими мастер-классами.

                    </h5>
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
                <h3 class="title-desc-mob" style="margin-bottom: 0px !important;">Выездной кэмп «Школы мяча» - это не только про спорт!
                </h3>

                <h4 style=" font-size: 18px; margin-top: 12px !important; margin-bottom: 32px !important;">Программа кэмпа, помимо спортивной направленности и отсутствия гаджетов наполнена тематическими и развивающими мастер-классами.
                </h4>
            </div>


        </div>
    </div>

    <!-- Section - schoolball info !-->


    <section class="catalog mt-5">

        <div class="secondSection ">

            <div class="container">

        <div class="row"  >

            @foreach($programs as $program)
                <div class="col-md-12">
                    <div class="catalog-card" style="width: auto;
    height: auto;">
                        <div class="cardImg">
                            <img style="width: 100%;
    object-fit: cover;
    height: 100%;" src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $program->img) }}" alt="">
                        </div>
                        <div class="catalog-card-section grid-container">
                            <div class="content">

                            <h5 class="catalog-sub-title">Тема смены</h5>
                            <h6 class="catalog-text">{{ $program->topic }}</h6>
                            @if($program->skills)
                            <h5 class="catalog-sub-title">{{ $program->skills_count }} Навыков</h5>
                            <h6 class="catalog-text">{{ $program->skills }}</h6>
                            @endif
                            @if($program->knowledge)
                            <h5 class="catalog-sub-title">{{ $program->knowledge_count }} Знаний</h5>
                            <h6 class="catalog-text">{{ $program->knowledge }}</h6>
                            @endif
                            @if($program->emotions)

                            <h5 class="catalog-sub-title">{{ $program->emotions_count }} Эмоций</h5>
                            <h6 class="catalog-text">{{ $program->emotions }}</h6>
                            @endif

                            @if($program->smena1)

                            <h5 class="catalog-sub-title">Дата проведения:</h5>

                            <table style="width: 287px;">
                                @if($program->smena1)
                                <tr class="highlight-price">
                                    <td class="tariff-desc">
                                        <span class="table-price-tariff">Смена № 1</span>
                                    </td>
                                    <td class="places">
                                        <span class="table-price-tariff">{{ $program->smena1 }}</span>
                                    </td>
                                </tr>
                                @endif
                                @if($program->smena2)
                                    <tr class="highlight-price">
                                        <td class="tariff-desc">
                                            <span class="table-price-tariff">Смена № 2</span>
                                        </td>
                                        <td class="places">
                                            <span class="table-price-tariff">{{ $program->smena2 }}</span>
                                        </td>
                                    </tr>
                                @endif
                                @if($program->smena3)
                                    <tr class="highlight-price">
                                        <td class="tariff-desc">
                                            <span class="table-price-tariff">Смена № 3</span>
                                        </td>
                                        <td class="places">
                                            <span class="table-price-tariff">{{ $program->smena3 }}</span>
                                        </td>
                                    </tr>
                                @endif
                                @if($program->smena4)
                                    <tr class="highlight-price">
                                        <td class="tariff-desc">
                                            <span class="table-price-tariff">Смена № 4</span>
                                        </td>
                                        <td class="places">
                                            <span class="table-price-tariff">{{ $program->smena4 }}</span>
                                        </td>
                                    </tr>
                                    @endif
                                    </tbody>
                            </table>
                            @endif


                            </div>

                            <a href="#" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg3" onclick="setProgramId({{ $program->id }})" style="width: 100%;" class="btn btn_blue program-btn">Получить подробную программу</a>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
            </div>
        </div>
    </section>

    <?php /*
    <div class="fixed-image" data-toggle="tooltip" data-placement="right" data-html="true" title="
  <span class='fixed-image-span'>Лагерь дневного пребывания:</span> <br>  <a class='fixed-image-span-location'  href='{{ URL::to('camp/cao') }}'><i class='fa fa-location-dot'></i> Киевская</a>  <a class='fixed-image-span-location'  href='{{ URL::to('camp/uvao') }}'><i class='fa fa-location-dot'></i> Кузьминки</a> " data-delay='{"show": 200, "hide": 5000}'>
        <img  src="{{ asset('assets/images/camp/logo.png')}}"></div>


<?php /*
   <a href="{{ URL::to('/weekend') }}"><img  src="{{ asset('assets/images/logo@4x.png')}}" class="fixed-image"></a>
*/
 ?>


    <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40;width: unset;height: unset;background: unset;border: unset;font-size: 1.5rem;line-height: 1;">×</button>
                </div>
                <div id="sendprogram-1-front">
                    <div class="modal-body text-left">
                        <h5 class="modal-title2 mt-0" id="myLargeModalLabel">Заявка на получение подробной программы</h5>
                        <div class="">
                            <div class="col-md-12"></div>
                            <form id="sendprogram" method="post" class="needs-validation" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com" required>
                                            <label for="name">Имя</label>
                                            <div class="invalid-feedback">
                                                Поле обязательно для заполнения
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control phone" id="phone" name="phone" placeholder="name@example.com" required>
                                            <label for="phone">Мобильный телефон</label>
                                            <div class="invalid-feedback">
                                                Поле обязательно для заполнения
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                            <label for="email">Электронная почта</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xl-6">
                                        <button class="btn btn-primary" style="margin-top: 24px !important;" type="submit" onclick="sendProgram(event)">Отправить заявку</button>
                                    </div>
                                </div>
                            </form>
                            <div class="sogl text-left" style="margin-top: 16px; margin-bottom: 56px;">
                                <label id="sogl-1" for="sogl">Нажимая на кнопку, вы даёте согласие на <a href="{{ asset('assets/doc/sogl-ooo_sm.pdf')}}" target='_blank'>обработку персональных данных.</a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sendprogram-1-done" class="d-none">
                    <div class="modal-body text-center" style="margin: 32px;">
                        <div>
                            <div class="col-md-12">
                                <h3 style="font-size: 48px;">🥳</h3>
                            </div>
                            <div class="col-md-12">
                                <h4><b>Спасибо за заявку</b></h4>
                                <p class="psy-about">На вашу электронную почту отправлено письмо с программой смены. Если вы не нашли письмо во входящих, то проверьте, пожалуйста, спам.</p>

                                <p class="psy-about">В течение всей смены наши тренеры и воспитатели найдут подход к каждому ребёнку и объяснят сложное простыми словами.</p><br>
                                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-primary" style="margin-top: 0px !important; margin-bottom: 56px !important; width: 100% !important;">Закрыть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">

                <div id="sendprogram-1-front" class="psyfront">
                    <div class="modal-header text-left">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #343a40;width: unset;height: unset;background: unset;border: unset;font-size: 1.5rem;line-height: 1;">×</button>
                    </div>

                    <h5 class="modal-title2 mt-0"  id="myLargeModalLabel">Заявка на получение подробной программы</h5>

                    <div class="modal-body text-center">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                            <form id="sendprogram" method="post">
                                @csrf




                                <div class="row">
                                    <input type="text" placeholder="Мобильный телефон" name="phone" value="" required class="phone form-control-new2" >
                                </div>
                                <div class="row">
                                    <label for="phone" class="  col-form-label-new text-md-right">Электронная почта:</label>
                                </div>
                                <div class="row">
                                    <input type="text"  placeholder="Электронная почта"   name="email" value="" required class="email form-control-new2" >
                                </div>


                            </form>
                            <div class="row">
                                <button id="sogl-btn text-center" type="submit" class="btn btn-primary-modal  waves-effect waves-light  mt-4" style="

     font-family: 'IBMPlexSans-Medium';
    font-size: 18px;
    font-weight: 500;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.33;
    letter-spacing: normal;
    width: 255px;
    width: 360px;
    color: #54420a;" onclick="sendProgram()" >Получить программу</button>
                            </div>

                            <div class="row">
                                <div class="sogl2 text-left">
                                    <label id="sogl-1"for="sogl">

                                        Нажимая на кнопку, вы даёте согласие
                                        на <a href="{{ asset('assets/doc/sogl-ooo_sm.pdf')}}" target='_blank'>обработку персональных данных</a>.

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="sendprogram-1-done" class="d-none">
                    <div class="modal-body text-center" style="margin: 47px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="font-size: 48px;">  🥳    </h3>                   </div>
                            <div class="col-md-12">
                                <h4> <b> Готово!  </b> </h4>
                                <br>
                                <p class="psy-about">На вашу электронную почту отправлено письмо с программой смены. Если вы не нашли письмо во входящих, то проверьте, пожалуйста, спам. </p> <br><br>
                                <p class="psy-about">В течение всей смены наши тренеры
                                    и воспитатели найдут подход к каждому ребёнку и объяснят сложное простыми словами. </p><br>

                                <button type="button" class="btn btn-modal text-center mt-3" data-dismiss="modal" aria-hidden="true">
                                    Закрыть</button>

                            </div>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->

        </div>
    </div>




    <form id="home" action="{{ route('home') }}" method="GET" style="display: none;">
    </form>
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/welcomeVue.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/catalog.js') }}"></script>






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
        (function($) {
            function setChecked(target) {
                var checked = $(target).find("input[type='checkbox']:checked").length;
                if (checked) {
                    $(target).find('select option:first').html('Выбрано: ' + checked);
                } else {
                    $(target).find('select option:first').html('Выберите из списка');
                }
            }

            $.fn.checkselect = function() {
                this.wrapInner('<div class="checkselect-popup"></div>');
                this.prepend(
                    '<div class="checkselect-control">' +
                    '<select class="form-control"><option></option></select>' +
                    '<div class="checkselect-over"></div>' +
                    '</div>'
                );

                this.each(function(){
                    setChecked(this);
                });
                this.find('input[type="checkbox"]').click(function(){
                    setChecked($(this).parents('.checkselect'));
                });

                this.parent().find('.checkselect-control').on('click', function(){
                    $popup = $(this).next();
                    $('.checkselect-popup').not($popup).css('display', 'none');
                    if ($popup.is(':hidden')) {
                        $popup.css('display', 'block');
                        $(this).find('select').focus();
                    } else {
                        $popup.css('display', 'none');
                    }
                });

                $('html, body').on('click', function(e){
                    if ($(e.target).closest('.checkselect').length == 0){
                        $('.checkselect-popup').css('display', 'none');
                    }
                });
            };
        })(jQuery);

        $('.checkselect').checkselect();
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


