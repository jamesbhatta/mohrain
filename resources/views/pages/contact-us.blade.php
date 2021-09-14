<x-app-layout>
    <style>
        .contact-page-header {
            background: url('{{ asset('images/world-bg.jpg') }}');
        }

    </style>
    <div class="contact-page-header h-64 flex items-center justify-center">
        <h1 class="text-2xl md:text-3xl xl:text-4xl font-rubik font-extrabold tracking-wider">Contact Us</h1>
    </div>

    <div class="container py-16 lg:px-16 xl:px-24">
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-6">
                <div class="bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 text-white p-5 md:p-12 rounded-2xl" style="box-shadow: 18px 18px 40px 0px rgb(2 156 236 / 30%);">
                    <div class="ot-heading left-align">
                        <h6 class="text-sm uppercase font-rubik font-bold tracking-wider">Contact Details</h6>
                        <h2 class="text-xl md:text-2xl font-rubik font-bold tracking-wider my-2">Our Contacts</h2>
                    </div>
                    <p class="py-6 tracking-wide leading-relaxed">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                    <div class="my-5">
                        <div class="">
                            <h6 class="uppercase font-rubik text-sm">Our Address:</h6>
                            <p class="text-lg font-bold">Kailalipool, Dhangadhi, Kailali Nepal</p>
                        </div>
                    </div>
                    <div class="my-5">
                        <div class="info-text">
                            <h6 class="uppercase font-rubik text-sm">Our mailbox:</h6>
                            <p class="text-lg font-bold"><a href="mailto:info@mohrain.com">info@mohrain.com</a></p>
                        </div>
                    </div>
                    <div class="my-5">
                        <div class="info-text">
                            <h6 class="uppercase font-rubik text-sm">Our phones:</h6>
                            <p class="text-lg font-bold"><a href="tel:9858427288">+977 9858427288</a></p>
                            <p class="text-lg font-bold"><a href="tel:091524243">+977 091-524243</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">

                <form class="md:pl-16 py-5 md:py-12">
                    <div class="text-gray-500 uppercase font-rubik font-bold tracking-wider"><div class="inline-block h-2 w-2 bg-gray-500 rounded-full mr-2"></div>Get In Touch</div>
                    <h2 class="text-xl md:text-3xl font-rubik font-bold tracking-wider my-3">Ready to get started?</h2>

                    <div class="my-5">
                        <input type="text" class="w-full py-3 px-5 border-gray-200 rounded-full" placeholder="Your Full Name *">
                    </div>
                    <div class="my-5">
                        <input type="text" class="w-full py-3 px-5 border-gray-200 rounded-full" placeholder="Your Email *">
                    </div>
                    <div class="my-5">
                        <textarea class="w-full py-3 px-5 border-gray-200 rounded-2xl" rows="5" placeholder="Message *"></textarea>
                    </div>
                    <div class="my-5">
                        <button class="bg-blue-500 text-gray-50 py-3 px-6 rounded-full font-rubik font-bold tracking-wide">Send Message</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
