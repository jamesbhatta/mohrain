<div {{ $attributes }}>
    <div x-data="{ open: false }" x-cloak>
        <button x-show="!open" @click="open = !open" class="p-2 hover:bg-gray-100 rounded-full focus:outline-none focus:shadow-outline">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <button x-show="open" @click="open = !open" class="p-2 bg-gray-100 rounded-full focus:outline-none">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div x-show="open" class="lg:hidden fixed top-0 left-0 h-screen max-w-md w-64 bg-primary z-20 shadow-lg transition" @click.away="open = false" x-cloak>
            <div class="flex flex-col h-full">
                @auth
                <div class="bg-indigo-500 text-white p-4">
                    <div class="flex flex-col items-center space-y-2 w-full">
                        <img class=" rounded-full h-10 w-10 mr-1" src="{{ Auth::user()->profile->profile_pic_url }}" alt="{{ Auth::user()->full_name }}">
                        <div class="text-lg font-semibold leading-7">{{ Auth::user()->name }}</div>
                    </div>
                </div>
                @endauth

                <div class="flex-grow">
                    <ul class="text-base font-semibold text-gray-50 p-2">
                        @auth
                        <li>
                            <a class="py-3 px-3 flex items-center space-x-2 hover:bg-white hover:text-primary" href="{{ route('dashboard') }}">
                                <span class="opacity-75">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                    </svg>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @endauth
                        <li>
                            <a class="flex items-center space-x-2 py-3 px-3 hover:bg-white hover:text-primary rounded" href="/our-team">
                                {{-- <span class="opacity-75">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </span> --}}
                                <span>{{ __('Our Team') }}</span>
                            </a>
                            <a class="flex items-center space-x-2 py-3 px-3 hover:bg-white hover:text-primary rounded" href="/about-us">
                                <span>{{ __('About Us') }}</span>
                            </a>
                            <a class="flex items-center space-x-2 py-3 px-3 hover:bg-white hover:text-primary rounded" href="/contact-us">
                                <span>{{ __('Contact Us') }}</span>
                            </a>
                        </li>
                        {{-- <div class="border-b border-indigo-100 rounded-full"></div> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
