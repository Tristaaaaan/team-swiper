<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
    <section class="bg-white">
        <div class="max-w-screen-xl mx-auto">
            <div>
                {{-- Swiper --}}
                <div class="swiper mySwiper">
                    {{-- <div class="swiper-button-next hidden"></div>
                    <div class="swiper-button-prev hidden"></div>
                    <div class="swiper-pagination"></div> --}}
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_evil-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_evil-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_revival-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_revival-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_rsg-sg-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_rsg-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_slate-esports-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_slate-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_smg-sg-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_smg-sg-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_stellark-sg-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_stellark-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_team-flash-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_team-flash-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                        <div class="swiper-slide text-center">
                            <figure class="hidden sm:flex">
                                <img src="{{asset('assets/cover_w1800_h600_zion-1.jpg.jfif')}}" alt="">
                            </figure>
                            <figure class="sm:hidden px-5">
                                <img src="{{asset('assets/cover_w700_h396_zion-mobile-1.jpg.jfif')}}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper(".mySwiper", {
                        spaceBetween: 0,
                        effect: "fade",
                        centeredSlides: true,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
            </div>
        </div>
    </section>
</body>

</html>
