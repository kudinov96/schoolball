<div class="secondSection  ">

    <div class="container">

                <div id="reviews" style="visibility: hidden;position: relative;top: -100px;"></div>

            <div class="col-md-12 text-center d-none d-md-block">
                <h3 class="title-desc" style="margin-top: 55px !important;margin-bottom: 30px !important;">Сотни довольных детей и родителей</h3>
                <h5 class="text-desc " style="font-size: 20px;margin-bottom: 45px !important;">
                    В "Футбольные выходные" мы вложили наш лучший опыт проведения детских лагерей и массовых мероприятий.
                </h5>
            </div>





            <div class="col text-left mobFontSize d-sm-block d-md-none" style=" ">
                <h3 class="mob-title-sec" style="  ">Сотни довольных детей и родителей</h3>
                <h5 class="text-desc " style="font-size: 18px;    text-align: left !important; ">
                    В "Футбольные выходные" мы вложили наш лучший опыт проведения детских лагерей и массовых мероприятий. </h5>
            </div>


        <div class="w-100"></div>

        <style>
        .reviewCard2 {
        background-color: #fff;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 0 5px #999;
        margin: 10px;
        }
        .slick-prev, .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 25%;
            display: block;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: transparent;
        }

        </style>
            <div class="col-md-12 d-none d-md-block" style="margin-top: 144px;">
                <div class="review-slider slider">

                    @foreach($reviews as $review_item)
                        <div class="reviewCard-area">
                            <div class="reviewCard2">
                                <div class="row" style="    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;">

                                    <img  src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $review_item->image) }}" alt="" style="max-width: 100%;
    height: auto;">


                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="d-sm-block d-md-none" style="padding-top: 20px;width:100%;">
                <div class="mobile-review-slider slider">



                    @foreach($reviews as $review_item)
                        <div class="reviewCard-area">
                            <div class="reviewCard2">
                                <div class="row">

                                    <img  src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $review_item->image) }}" alt="" style="max-width: 100%;
    height: auto;">


                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>






