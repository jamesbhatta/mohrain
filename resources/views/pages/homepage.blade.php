<x-app-layout>
    <div class="container">
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

    <section x-data="{ show: false }" x-init="() => setTimeout(() => show = true, 2000)" x-cloak>
        <div x-show="show" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-black bg-opacity-10 z-50" x-transition:enter-start="opacity-0 scale-90" 
        x-transition:enter="transition duration-200 transform ease"
        x-transition:leave="transition duration-200 transform ease"
        x-transition:leave-end="opacity-0 scale-90"  @click.self="show = false">
            <div class="p-5 overflow-hidden relative">
                <img class="rounded" src="/images/dashain-offer-2078-min.png" alt="Dashain offer 2078">
                <div class="absolute top-0 right-2">
                    <button class="text-black bg-white rounded-full hover:bg-opacity-70" @click="show = false">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <style>
        * {
            /* border: 1px solid red; */
        }
    </style>

</x-app-layout>