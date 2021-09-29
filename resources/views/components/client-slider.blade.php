    <div class="swiper-container client-slider overflow-x-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($clients as $client)
            <div class="swiper-slide d-flex justify-content-center">
                <img class="max-h-16 align-self-center" src="{{ $client->logourl() }}">
            </div>
            @endforeach
        </div>
        <!-- If we need navigation buttons -->
        {{-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> --}}
    </div>
    @push('scripts')
    <script>
        // Image Slider -Swipper
        var clientSlider = new Swiper('.client-slider', {
            autoplay: {
                delay: 3000
                , disableOnInteraction: false
            }
            , loop: true
            , spaceBetween: 30
            , slidesPerView: 5
            , breakpoints: {
                // when window is <= 580px
                580: {
                    slidesPerView: 1
                    , spaceBetween: 10
                },
                // when window is <= 768px
                768: {
                    slidesPerView: 2
                    , spaceBetween: 20
                },
                // when window is <= 992px
                992: {
                    slidesPerView: 3
                    , spaceBetween: 20
                },
                // when window is <= 1200px
                1200: {
                    slidesPerView: 4
                    , spaceBetween: 20
                },

            }
        });

    </script>

    @endpush
