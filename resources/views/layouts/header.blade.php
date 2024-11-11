<header class="sticky top-0 transition-all duration-300 z-[999999]"
    :class="{ 'bg-white shadow-md': isScrolled || mobileMenuOpen, 'bg-transparent': !isScrolled && !mobileMenuOpen }">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center transition-all duration-300 py-3">
            <!-- Logo Section with Two Logos -->
            <a href="/" class="text-2xl font-bold text-navy-600 relative">
                <img src="{{ asset('assets/images/logo.png') }}" class="h-16 md:h-20 transition-opacity duration-300"
                    alt="Wide Logo">
            </a>

            <div class="flex items-center gap-x-10">
                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-8">
                    {{-- <a href="{{ route('services') }}"
                        class="text-navy-800 hover:text-orange-600 font-medium {{ Route::is('services') ? 'border-b-2 border-orange-600' : '' }}">
                        SERVICES
                    </a>
                    <a href="{{ route('about') }}"
                        class="text-navy-800 hover:text-orange-600 font-medium {{ request()->is('about') ? 'border-b-2 border-orange-600' : '' }}">
                        ABOUT
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-navy-800 hover:text-orange-600 font-medium {{ Route::is('contact') ? 'border-b-2 border-orange-600' : '' }}">
                        CONTACT
                    </a> --}}
                </nav>

                <!-- Call to Action Button -->
                {{-- <a href="{{ route('start-a-project') }}"
                    class="hidden md:block bg-orange-600 hover:bg-blue-950 text-white font-semibold py-2 px-4 rounded">
                    GET STARTED
                </a> --}}
            </div>


            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-navy-800">
                <!-- Menu Icon (bars) -->
                <i x-show="!mobileMenuOpen" class="fas fa-bars text-3xl"></i>
                <!-- Close Icon (times) -->
                <i x-show="mobileMenuOpen" class="fas fa-xmark text-3xl"></i>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" class="md:hidden bg-white py-4">
        <ul class="container mx-auto px-4 flex flex-col space-y-4">
            <li>
                {{-- <a href="{{ route('services') }}"
                    class="text-navy-800 hover:text-orange-600 font-medium {{ Route::is('services') ? 'border-b-2 border-orange-600' : '' }}">
                    SERVICES
                </a> --}}
            </li>
            <li>
                {{-- <a href="{{ route('about') }}"
                    class="text-navy-800 hover:text-orange-600 font-medium {{ request()->is('about') ? 'border-b-2 border-orange-600' : '' }}">
                    ABOUT
                </a> --}}
            </li>
            <li>
                {{-- <a href="{{ route('contact') }}"
                    class="text-navy-800 hover:text-orange-600 font-medium {{ Route::is('contact') ? 'border-b-2 border-orange-600' : '' }}">
                    CONTACT
                </a> --}}
            </li>
            <li>
                {{-- <a href="{{ route('start-a-project') }}"
                    class="bg-orange-600 hover:bg-blue-950 text-white text-center font-semibold py-2 px-4 rounded w-full">
                    GET STARTED
                </a> --}}
            </li>
        </ul>
    </div>
</header>
