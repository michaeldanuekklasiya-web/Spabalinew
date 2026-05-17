@extends('layouts.app')

@section('content')
<!-- Header Banner -->
<section class="relative pt-32 pb-20 bg-spa-olive-dark">
    <div class="absolute inset-0 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=2070&auto=format&fit=crop" alt="Spa Packages" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mt-12">
        <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4 block">Curated Experiences</span>
        <h1 class="text-4xl md:text-6xl font-heading font-medium text-white mb-6">Exclusive Packages</h1>
    </div>
</section>

<!-- Packages Section -->
<section class="py-24 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Package 1 -->
            <div class="bg-white rounded-3xl p-8 border border-spa-beige shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                <h3 class="text-2xl font-heading font-medium text-spa-olive-dark mb-2">The Quick Escape</h3>
                <p class="text-gray-500 text-sm mb-6">Perfect for a quick reset.</p>
                <div class="text-3xl font-heading font-semibold text-spa-gold mb-6">IDR 1.2M <span class="text-sm text-gray-400 font-normal">/ 120 mins</span></div>
                
                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">Foot Ritual</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">60-min Balinese Massage</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">Express Facial</span>
                    </li>
                </ul>
                <a href="https://wa.me/6287859632289?text={{ urlencode('Hello, I want to book The Quick Escape package.') }}" target="_blank" class="w-full block text-center py-3 px-6 rounded-full border border-spa-olive text-spa-olive-dark font-medium hover:bg-spa-olive hover:text-white transition-colors">Select Package</a>
            </div>

            <!-- Package 2 (Most Popular) -->
            <div class="bg-spa-olive-dark rounded-3xl p-8 shadow-2xl relative flex flex-col transform md:-translate-y-4">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <span class="bg-spa-gold text-spa-olive-dark text-xs font-bold uppercase tracking-wider py-1.5 px-4 rounded-full shadow-lg">Most Popular</span>
                </div>
                <h3 class="text-2xl font-heading font-medium text-white mb-2 mt-4">Royal Balinese Journey</h3>
                <p class="text-spa-leaf text-sm mb-6">Our signature full immersion.</p>
                <div class="text-3xl font-heading font-semibold text-spa-gold mb-6">IDR 2.8M <span class="text-sm text-spa-leaf font-normal">/ 210 mins</span></div>
                
                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-300 text-sm">Aromatic Foot Cleansing</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-300 text-sm">90-min Hot Stone Massage</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-300 text-sm">Traditional Lulur Body Scrub</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-300 text-sm">Exotic Flower Petal Bath</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-300 text-sm">Complimentary Healthy Meal</span>
                    </li>
                </ul>
                <a href="https://wa.me/6287859632289?text={{ urlencode('Hello, I want to book the Royal Balinese Journey package.') }}" target="_blank" class="w-full block text-center py-3 px-6 rounded-full bg-spa-gold text-spa-olive-dark font-medium hover:bg-spa-gold-light transition-colors shadow-lg hover:shadow-spa-gold/30">Select Package</a>
            </div>

            <!-- Package 3 -->
            <div class="bg-white rounded-3xl p-8 border border-spa-beige shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                <h3 class="text-2xl font-heading font-medium text-spa-olive-dark mb-2">Couples Romance</h3>
                <p class="text-gray-500 text-sm mb-6">Designed for shared memories.</p>
                <div class="text-3xl font-heading font-semibold text-spa-gold mb-6">IDR 3.5M <span class="text-sm text-gray-400 font-normal">/ 180 mins</span></div>
                
                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">Side-by-side Balinese Massage</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">Radiance Facial for Two</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">Private Milk & Rose Bath</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-spa-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-600 text-sm">Sparkling Wine & Strawberries</span>
                    </li>
                </ul>
                <a href="https://wa.me/6287859632289?text={{ urlencode('Hello, I want to book the Couples Romance package.') }}" target="_blank" class="w-full block text-center py-3 px-6 rounded-full border border-spa-olive text-spa-olive-dark font-medium hover:bg-spa-olive hover:text-white transition-colors">Select Package</a>
            </div>
        </div>
    </div>
</section>
@endsection
