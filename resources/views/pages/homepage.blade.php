<x-app-layout>
    <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 md:col-span-5 py-16 flex items-center">
                <div>
                    <div class="uppercase text-primary font-rubik font-bold tracking-wider">&bull; Mohrain build lasting relationship</div>
                    <h3 class="text-xl md:text-3xl xl:text-4xl font-rubik font-bold tracking-wide leading-8 my-2">We'll build you custom website and manage it too!</h3>
                    <p class="leading-7 my-3">
                        We're creative Web Design & Development Company in Dhangadhi, Kailali, Nepal. We build amazing websites and robust software applications.
                    </p>
                </div>
            </div>
            <div class="col-span-12 md:col-span-7 py-10 md:pl-20 flex items-center justify-center">
                <img src="{{ asset('images/real-time-sync.svg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-12 gap-5 md:gap-8">
            <div class="col-span-12 md:col-span-5 py-10 flex items-center justify-center">
                <div>
                    <img class="" src="{{ asset('images/software-development.png') }}" alt="">
                </div>
            </div>
            <div class="col-span-12 md:col-span-7 py-16 px-4">
                <div class="uppercase text-primary font-rubik font-extrabold tracking-wider">&bull; About Us</div>
                <h3 class="text-xl md:text-3xl xl:text-4xl font-rubik font-bold tracking-wide leading-8 my-2">Web Design Company</h3>
                <h3 class="text-xl md:text-3xl xl:text-4xl font-bold tracking-wide leading-8 my-2">The Story Behind Mohrain</h3>
                <p class="leading-8 my-3 font-rubik">
                    Mohrain WebSoft (P). Ltd. is powered by a team specialized in design, app development, search engine optimization.
                </p>
                <p class="leading-7 my-3 text-light">
                    We also help you create, manage and promote your business - at the fractal of cost you'd expect to pay. We want to grow together. We help to raise ROI. We believe design should have a purpose. Because the right website or right software can increase a business revenue. We do not compromise on quality or services. We make us different from our competitors in the fact that we have a perfect blend of computer geeks and business men - after all, a website is much about business and design. Our team is yound but highely experienced. we pride ourselves in providing 24/7 days support.
                </p>
            </div>
        </div>
    </div>

    <!-- Our services -->
    <div id="our-services" class="container mx-auto py-5" style="background-image: url(https://onum-wp.s3.amazonaws.com/images/bg-shape1-home5.png);
    background-position: bottom right;
    background-repeat: no-repeat;">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
            <?php foreach ($services as $service) : ?>
                <div class="service-card custom-shadow rounded-xs pt-5">
                    <div class="p-5">
                        <span class="icon-lg icon-bg-circle {{ $service->color }} mb-3"> <i class="{{ $service->icon }}"></i></span>
                        <h4 class="mt-4 mb-3 text-xl trackingw-wide">{{ $service->title }}</h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</x-app-layout>