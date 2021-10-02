<nav {{ $attributes }}>
    <ul class="flex space-x-3 lg:space-x-5 items-center justify-around uppercase font-rubik tracking-wide">
        <li>
            <a href="{{ url('/') }}/#our-services" class="hover:text-primary transition-colors">Our Services</a>
        </li>
        {{-- <li>
            <a href="/" class="hover:text-primary transition-colors">Our Work</a>
        </li> --}}
        <li>
            <a href="/our-team" class="hover:text-primary transition-colors">Our Team</a>
        </li>
        <li>
            <a href="/about-us" class="hover:text-primary transition-colors">About Us</a>
        </li>
        {{-- <li>
            <a href="/" class="hover:text-primary transition-colors">Contact Us</a>
        </li> --}}
        <li>
            <a href="/contact-us" class="bg-primary py-3 px-4 text-gray-50 rounded-full shadow-lg hover:opacity-90 transition-colors">Contact Us</a>
        </li>
    </ul>
</nav>