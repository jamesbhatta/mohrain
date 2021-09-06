<section class="container py-10">
    <div class="swiper-container image-slider overflow-x-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide d-flex justify-content-center">
                <img class="max-h-16 align-self-center filter brightness-0 transition-all duration-500 hover:filter-none" src="https://seeklogo.com/images/M/marg-the-business-backbone-logo-129A374381-seeklogo.com.png">
            </div>
            <div class="swiper-slide d-flex justify-content-center">
                <img class="max-h-16 align-self-center filter brightness-0 transition-all duration-500 hover:filter-none" src="https://iamtharu.com/img/iamtharu-logo-sm.png">
            </div>
            <div class="swiper-slide d-flex justify-content-center">
                <img class="max-h-16 align-self-center filter brightness-0 transition-all duration-500 hover:filter-none" src="https://tharunk.com/wp-content/uploads/2020/01/cropped-logo-tharunk.png">
            </div>
        </div>
        <!-- If we need navigation buttons -->
        {{-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> --}}
    </div>
</section>

<footer>
    <div class="container py-16 text-gray-50 font-rubik">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 md:col-span-4">
                <img class="h-20" src="{{ asset('images/mohrain-logo.png') }}" alt="">
                <p>We're creative Web Design & Development Company in Dhangadhi, Kailali, Nepal. We build amazing websites and robust software applications.</p>
            </div>
            <div class="col-span-12 md:col-span-4">
                <h5 class="text-xl font-semibold tracking-wide mb-4">Contact</h5>
                <ul class="space-y-2">
                    <li><strong class="font-normal text-blue-200 pr-1">Address:</strong> Kailalipool, Dhangadhi, Kailali Nepal</li>
                    <li><strong class="font-normal text-blue-200 pr-1">Email:</strong> info@mohrain.com</li>
                    <li><strong class="font-normal text-blue-200 pr-1">Phone:</strong> +977 9858427288</li>
                    <li><strong class="font-normal text-blue-200 pr-1">Open:</strong> Sun to Fri 10:00 AM – 06:00 PM</li>
                </ul>
            </div>
        </div>
    </div>
    @push('scripts')
    <style>
        footer {
            background-color: #0049b1;
            background-image: url(https://onum-wp.s3.amazonaws.com/images/bg-footer-home5.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <script>
        // Image Slider -Swipper
        var imageSlider = new Swiper('.image-slider', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            loop: true,
            spaceBetween: 30,
            slidesPerView: 5,
            breakpoints: {
                // when window is <= 580px
                580: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window is <= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window is <= 992px
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                // when window is <= 1200px
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
    
            }
        });
</script>
    @endpush
</footer>
