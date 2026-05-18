@extends('layouts.app')

@section('content')
<!-- Header Banner -->
<section class="relative pt-32 pb-20 bg-spa-olive-dark">
    <div class="absolute inset-0 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=60&w=1080&auto=format&fit=crop" alt="Spa Background" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mt-12">
        <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4 block">Our Environment</span>
        <h1 class="text-4xl md:text-6xl font-heading font-medium text-white mb-6">Gallery</h1>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-4xl md:text-5xl font-heading font-medium text-spa-olive-dark">Glimpse of Paradise</h2>
            <p class="text-gray-600 mt-4 text-lg">Take a visual tour of our luxurious facilities, designed specifically for your ultimate relaxation.</p>
        </div>
        
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
            <div class="relative group overflow-hidden rounded-2xl break-inside-avoid">
                <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=60&w=1080&auto=format&fit=crop" alt="Spa Interior" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-heading font-medium tracking-wide">Serene Rooms</span>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-2xl break-inside-avoid">
                <img src="https://images.unsplash.com/photo-1552693673-1bf958298935?q=60&w=1080&auto=format&fit=crop" alt="Flower Bath" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-heading font-medium tracking-wide">Floral Baths</span>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-2xl break-inside-avoid">
                <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=60&w=1080&auto=format&fit=crop" alt="Massage Details" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-heading font-medium tracking-wide">Expert Touch</span>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-2xl break-inside-avoid">
                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=60&w=1080&auto=format&fit=crop" alt="Aromatherapy Products" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-heading font-medium tracking-wide">Organic Oils</span>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-2xl break-inside-avoid">
                <img src="https://images.unsplash.com/photo-1583416750470-965b2707b355?q=60&w=1080&auto=format&fit=crop" alt="Relaxation Area" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-heading font-medium tracking-wide">Lounge Area</span>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-2xl break-inside-avoid">
                <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=60&w=1080&auto=format&fit=crop" alt="Hot Stones" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-heading font-medium tracking-wide">Volcanic Stones</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
