<nav x-data="{ scrolled: false, mobileMenuOpen: false }"
     @scroll.window="scrolled = (window.pageYOffset > 50)"
:class="{ 'bg-white/90 backdrop-blur-md shadow-md py-2': scrolled, 'bg-transparent py-3': !scrolled }"     class="fixed w-full top-0 z-40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex flex-col leading-none group py-1">
                    <span 
                        class="text-2xl md:text-3xl font-heading font-medium tracking-[0.15em] transition-colors duration-300"
                        :class="{ 'text-spa-wood-dark': scrolled, 'text-white': !scrolled }">
                        Binkey
                    </span>
                    <span 
                        class="text-[9px] md:text-[11px] uppercase tracking-[0.3em] mt-1.5 transition-colors duration-300 font-semibold"
                        :class="{ 'text-spa-gold': scrolled, 'text-spa-gold': !scrolled }">
                        Spa Massage Out Call
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ url('/about') }}" class="text-sm font-medium tracking-wider uppercase transition-colors"
                   :class="{ 'text-gray-800 hover:text-spa-gold': scrolled, 'text-white/90 hover:text-white': !scrolled }">Our Story</a>
                <a href="{{ url('/treatments') }}" class="text-sm font-medium tracking-wider uppercase transition-colors"
                   :class="{ 'text-gray-800 hover:text-spa-gold': scrolled, 'text-white/90 hover:text-white': !scrolled }">Treatments</a>
                <a href="{{ url('/gallery') }}" class="text-sm font-medium tracking-wider uppercase transition-colors"
                   :class="{ 'text-gray-800 hover:text-spa-gold': scrolled, 'text-white/90 hover:text-white': !scrolled }">Gallery</a>
                <a href="{{ url('/packages') }}" class="text-sm font-medium tracking-wider uppercase transition-colors"
                   :class="{ 'text-gray-800 hover:text-spa-gold': scrolled, 'text-white/90 hover:text-white': !scrolled }">Packages</a>
                <a href="{{ url('/contact') }}"
                   class="px-6 py-2.5 rounded-full text-sm font-medium tracking-wider uppercase transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg"
                   :class="{ 'bg-spa-gold text-white hover:bg-spa-gold-light hover:shadow-spa-gold/30': scrolled, 'bg-white/20 text-white backdrop-blur-sm border border-white/40 hover:bg-white hover:text-spa-wood-dark': !scrolled }">
                    Book Now
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none"
                        :class="{ 'text-gray-800': scrolled, 'text-white': !scrolled }">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display:none;" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-5"
         class="md:hidden absolute w-full bg-white shadow-xl border-b border-gray-100" style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="{{ url('/about') }}" @click="mobileMenuOpen = false" class="block px-3 py-3 text-base font-medium text-gray-800 hover:text-spa-gold hover:bg-spa-beige/30 rounded-md">Our Story</a>
            <a href="{{ url('/treatments') }}" @click="mobileMenuOpen = false" class="block px-3 py-3 text-base font-medium text-gray-800 hover:text-spa-gold hover:bg-spa-beige/30 rounded-md">Treatments</a>
            <a href="{{ url('/gallery') }}" @click="mobileMenuOpen = false" class="block px-3 py-3 text-base font-medium text-gray-800 hover:text-spa-gold hover:bg-spa-beige/30 rounded-md">Gallery</a>
            <a href="{{ url('/packages') }}" @click="mobileMenuOpen = false" class="block px-3 py-3 text-base font-medium text-gray-800 hover:text-spa-gold hover:bg-spa-beige/30 rounded-md">Packages</a>
            <a href="{{ url('/contact') }}" @click="mobileMenuOpen = false" class="block mt-4 px-3 py-3 text-base font-medium text-center text-white bg-spa-gold rounded-full hover:bg-spa-gold-light shadow-md">Book Now</a>
        </div>
    </div>
</nav>
