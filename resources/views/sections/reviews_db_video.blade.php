


<div class="secondSection  " >

    <div class="container">
        <div id="reviewsmob"  style="visibility: hidden;position: relative;top: -100px;"></div>

                <div id="reviews" style="visibility: hidden;position: relative;top: -100px;"></div>

            <div class="col-md-12 text-center d-none d-md-block"   >
                <div class="d-sm-block d-md-none row d-flex justify-content-center">
                    <img src="{{asset('assets/new-message-3@2x.png')}}" class="reviews-img" style=" " alt="">


                </div>
                <h3 class="title-desc" style="margin-top: 55px !important;margin-bottom: 30px !important;">Отзывы родителей</h3>
                <h5 class="text-desc " style="font-size: 20px;margin-bottom: 45px !important;">
                    В "Летний лагерь" мы вложили наш лучший опыт проведения детских лагерей и массовых мероприятий.
                </h5>
            </div>

        <div class="col text-left mobFontSize d-sm-block d-md-none" style="">

            <h3 class="mob-title-sec" style="  margin-left: 16px;    margin-top: 80px;">Отзывы родителей</h3>


        </div>

        <style>
            .video-container {
                position: relative;
                width: 250px;
                height: 400px;
                border-radius: 15px;
                overflow: hidden;
                cursor: pointer;
            }
            .video-container img {
                display: block;
                width: 250px;

                height: 400px;
                object-fit: cover;
            }

            .Rectangle {
                position: absolute;
                bottom: 20px; /* задаем отступ от нижней границы контейнера для видео */
                left: 50%; /* устанавливаем блок в середину контейнера */
                transform: translateX(-50%); /* центрируем блок относительно его собственной ширины */
                z-index: 1;
                width: 164px;
                text-align: center;
                height: auto;
                padding: 12px 24px;
                border-radius: 24px;
                background-color: #fff;
            }

            .slide {
                width: auto;
                height: 200px;
                background-color: #ccc;
                text-align: center;
                line-height: 200px;
                font-size: 48px;
            }

            .slider_video {
                margin: 0 auto;
                width: 960px;
            }

            .modal-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
            }

            .modal-overlay.active {
                opacity: 1;
                visibility: visible;
            }

            .modal-container {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }

            .modal-close {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 24px;
                cursor: pointer;
            }
            .slick-slide {
                margin-right: 20px;
            }

            .modal-content {
                /* Add any content you want to display in the modal window here */
            }

        </style>

<div class="d-none d-md-block">
        <div class="row">
            <div class="slider_video">
                @foreach ($videos as $video)
                    <div class="col-4 slide{{$loop->iteration}} video-modal-trigger" data-video="{{ $video->video }}">
                        <div class="video-container">
                            <img class="reviews__media reviews__media--img"
                                 src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $video->img) }}"
                                 alt="{{ $video->name }}">
                            <div class="Rectangle">{{ $video->name }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

</div>



        <section class="">




            <div class="mobile-coachs-slider slider d-sm-block d-md-none">
                @foreach ($videos as $video)

                <div class=" ">
                        <div class="video-card-mob video-modal-trigger"  data-video="{{ $video->video }}" >

                            <div class="videoCard-mob">

                                    <?php /*
                                             <img src="{{ asset('/assets/trainer-screen.png') }}" alt="">


                                    <img src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $coach->photo) }}"
                                         alt="">
 */ ?>
                                        <img class="reviews__media reviews__media--img" style="height: 440px; border-radius: 15px;"

                                             src="{{ asset('/storage/') }}/{{ str_replace("public/", "", $video->img) }}">

                                        <div class="RectangleMob">{{ $video->name }}</div>


                            </div>

                        </div>
                    </div>

                @endforeach
            </div>




        </section>



        <div class="modal-overlay">
            <div class="modal-container">
                <div class="modal-close">&times;</div>
                <div class="modal-video">
                    <iframe width="430" height="764" src="" title="Отзыв о Футбольных выходных в Школе мяча" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <script>
            const videoModalTriggers = document.querySelectorAll('.video-modal-trigger');
            const modalOverlay = document.querySelector('.modal-overlay');
            const modalVideo = document.querySelector('.modal-video iframe');
            const modalClose = document.querySelector('.modal-close');

            videoModalTriggers.forEach(trigger => {
                trigger.addEventListener('click', () => {
                    const videoUrl = trigger.dataset.video.replace('watch?v=', 'embed/').concat('?rel=0&autoplay=1');
                    modalVideo.setAttribute('src', videoUrl);
                    modalOverlay.classList.add('active');
                });
            });

            modalClose.addEventListener('click', () => {
                modalOverlay.classList.remove('active');
                modalVideo.removeAttribute('src');
            });
        </script>
        <script>
            $(document).ready(function(){
                $('.slider_video').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,

                });
            });

            // Open the modal window and load the video when a video container is clicked
            $('.video-modal-trigger').click(function() {
                var videoUrl = $(this).data('video');
                $('.modal-video iframe').attr('src', videoUrl);
                $('.modal-overlay').addClass('active');
            });

            // Close the modal window and stop the video when the close button or overlay is clicked
            $('.modal-close, .modal-overlay').click(function() {
                $('.modal-video iframe').attr('src', '');
                $('.modal-overlay').removeClass('active');
            });
        </script>

        <script>
            var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
            var iframe = document.querySelector('.modal-video iframe');

            if (isMobile) {
                iframe.width = 215;
                iframe.height = 382;
            }
        </script>


    </div>
    </div>






