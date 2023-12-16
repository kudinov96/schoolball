<div class="section2"  >
    <div class="container">
        <div class="col-md-8 offset-md-2 text-center">
            <h3 class="title-desc" >Комплект формы</h3>
            <h5 class="text-desc " style="font-size: 18px; ">
                Чтобы ребенок чувствовал себя частью большого соревнования и ему было комфортно играть, мы рекомендуем приобрести фирменный комплект формы "Школы мяча".
            </h5>
        </div>





<div class="d-none d-md-block">
    <div class="row">
        @foreach(explode('|',$uniform_images->images ) as $row)
            <div class="col-12 offset-md-4 col-md-6">
                <div class="card-form" style="display: flex; justify-content: center;">
                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}" alt="Image 1" style="display: block; margin: auto;">
                </div>
            </div>
        @endforeach
    </div>
    <?php /*

        <div class="col-12 col-md">
            <div class="card-form">
                <img src=" {{ asset('assets/sb-ui/images/cloth-0.svg')  }}" alt="Image 1">
            </div>
        </div>
        <div class="col-12 col-md">
            <div class="card-form">
                <img src="{{ asset('assets/sb-ui/images/cloth-1.svg')  }}" alt="Image 2">
            </div>
        </div>
        <div class="col-12 col-md">
            <div class="card-form">
                <img src="{{ asset('assets/sb-ui/images/cloth-2.svg')  }}" alt="Image 3">
            </div>
        </div>
*/
    ?>



</div>


        <div class="col-12 d-sm-block d-md-none" style="">
            <div class="row mobile-advantage-slider">



                    @foreach(explode('|',$uniform_images->images ) as $row)

                    <div class="reviewCard-area">
                        <div class="advantageCard" style="width: auto;">
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $row) }}" style="      width: 70%;
    height: 100%;
    display: unset !important;">
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach

                <?php /*
                <div class="reviewCard-area">
                    <div class="advantageCard" style="width: auto;">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('assets/sb-ui/images/cloth-0.svg')  }}" style="      width: 70%;
    height: 100%;
    display: unset !important;">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="reviewCard-area">
                    <div class="advantageCard" style="width: auto;">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('assets/sb-ui/images/cloth-1.svg')  }}" style="      width: 70%;
    height: 100%;
    display: unset !important;">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="reviewCard-area">
                    <div class="advantageCard" style="width: auto;">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('assets/sb-ui/images/cloth-2.svg')  }}" style="      width: 70%;
    height: 100%;
    display: unset !important;">
                            </div>

                        </div>
                    </div>
                </div>
 */
                ?>



            </div>
        </div>


        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <button class="btn btn-primary" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" >Получить фирменную форму</button>
            </div>
        </div>


</div>
</div>
