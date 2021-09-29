<section class="container py-10">
    <x-client-slider></x-client-slider>
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
                    <li><strong class="font-normal text-blue-200 pr-1">Open:</strong> Sun to Fri 09:00 AM – 06:00 PM</li>
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
    @endpush
</footer>
