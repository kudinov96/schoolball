<section>

    <div class="section2">

    <div class="container form-block mb-5">



        <div id="callback-catalog-front">

            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 class="title-desc" style="    margin-top: 0px !important; margin-bottom: 32px !important;">Пробное занятие в подарок!</h3>
                    <h5 class="text-desc " style="font-size: 18px;margin-bottom: 0px !important;  line-height: 1.54; ">
                        Запишитесь на пробное занятие и после него определитесь с выбором абонемента.
                    </h5>
                </div>




            </div>
            <form id="send_form_catalog" method="post" class="needs-validation" novalidate>
                @csrf

                <div class="row" style="margin-top: 40px; ">
                    <div class="col-md-4 col-xl-4  ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com" required>
                            <label for="name">Имя</label>
                            <div class="invalid-feedback">
                                Поле обязательно для заполнения
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4 ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control phone" id="phone" name="phone" placeholder="name@example.com" required>
                            <label for="phone">Мобильный телефон</label>
                            <div class="invalid-feedback">
                                Поле обязательно для заполнения
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4 ">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Электронная почта</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 offset-md-4 text-center">
                        <button class="btn btn-primary" type="submit" onclick="sendFormCatalog(event)">Хочу посетить пробное занятие</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="text-desc " style="font-size: 16px;   line-height: 1.54; margin-top: 12px;">
                            Нажимая на кнопку, я даю согласие на обработку своих <a href="{{ asset('assets/doc/sogl-ooo_sm.pdf')}}" target='_blank'>персональных данных</a>
                        </h5>
                    </div>
                </div>
            </form>
        </div>

        <div id="callback-catalog-done" class="d-none">

            <div class="row">

                <div class="col-md-12 text-center">
                    <h3 style="font-size: 48px;">  🥳    </h3>
                    <h3 class="title-desc" style="    margin-top: 0px !important; margin-bottom: 32px !important;">Спасибо за заявку!</h3>
                    <h5 class="text-desc " style="font-size: 26px;   line-height: 1.54; ">
                        Менеджер позвонит в течение 15 минут на Ваш номер
                        и ответит на все ваши вопросы.

                    </h5>
                </div>




            </div>


        </div>
    </div>
    </div>

</section>
