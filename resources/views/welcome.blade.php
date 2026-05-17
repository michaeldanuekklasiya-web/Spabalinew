@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
    <!-- Cinematic Background -->
    <div class="absolute inset-0 w-full h-full">
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop" alt="Bali Spa Resort" class="absolute inset-0 w-full h-full object-cover" loading="eager">
        <div class="absolute inset-0 bg-gradient-to-r from-spa-olive-dark/90 via-spa-olive-dark/70 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-left">
        <div class="max-w-3xl" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
            <span x-show="show" x-transition:enter="transition ease-out duration-1000 transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="block text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4">Discover True Serenity</span>
            
            <h1 x-show="show" x-transition:enter="transition ease-out duration-1000 delay-300 transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="text-5xl md:text-7xl font-heading font-medium text-white mb-6 leading-tight text-balance">
                Awaken Your Senses in a <span class="italic font-light text-spa-gold">Balinese</span> Paradise
            </h1>
            
            <p x-show="show" x-transition:enter="transition ease-out duration-1000 delay-500 transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="text-lg md:text-xl text-spa-beige mb-10 max-w-xl leading-relaxed text-balance">
                Experience world-class wellness treatments inspired by ancient Balinese healing traditions. Reconnect with your inner peace in our luxury sanctuary.
            </p>
            
            <div x-show="show" x-transition:enter="transition ease-out duration-1000 delay-700 transform" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ url('/contact') }}" class="px-8 py-4 bg-spa-gold hover:bg-spa-gold-light text-spa-olive-dark rounded-full font-bold tracking-wide uppercase transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-spa-gold/30 text-center flex items-center justify-center">
                    Book Treatment
                </a>
                <a href="https://wa.me/6287859632289" target="_blank" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white rounded-full font-medium tracking-wide uppercase transition-all duration-300 text-center flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 text-spa-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Mini About Us Section -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
        <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4 block">Welcome to Paradise</span>
        <h2 class="text-4xl md:text-5xl font-heading font-medium text-spa-olive-dark leading-tight mb-8">
            Experience the Art of Balinese Relaxation
        </h2>
        <p class="text-gray-600 leading-relaxed text-lg mb-8">
            Our luxury spa is born from a profound respect for ancient wellness rituals. We believe that true beauty and health come from a harmonious balance of body, mind, and spirit. Let our expert therapists guide you on a journey of pure tranquility.
        </p>
        <a href="{{ url('/about') }}" class="inline-flex items-center text-spa-gold font-medium hover:text-spa-olive-dark transition-colors border-b-2 border-spa-gold hover:border-spa-olive-dark pb-1">
            Read Our Story
            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
        </a>
    </div>
</section>

<!-- Featured Services Section -->
<section class="py-24 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16">
            <div class="max-w-2xl">
                <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-2 block">Signature Treatments</span>
                <h2 class="text-4xl md:text-5xl font-heading font-medium text-spa-olive-dark">Featured Therapies</h2>
            </div>
            <a href="{{ url('/treatments') }}" class="hidden md:inline-flex items-center text-spa-gold hover:text-spa-olive-dark font-medium transition-colors border-b-2 border-transparent hover:border-spa-olive-dark pb-1">
                View All Treatments
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <x-service-card 
                image="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop"
                title="Balinese Massage"
                duration="90 mins"
                price="IDR 850K"
                description="Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=80&w=2070&auto=format&fit=crop"
                title="Deep Tissue"
                duration="90 mins"
                price="IDR 950K"
                description="Sport Massage To Relax Tight Muscles. Uses Slow and Strong Pressure."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop"
                title="Aromatherapy Massage"
                duration="60 mins"
                price="IDR 700K"
                description="Balinese Massage enhanced with the therapeutic scents of essential oils."
            />
        </div>
        
        <div class="mt-10 text-center md:hidden">
            <a href="{{ url('/treatments') }}" class="inline-flex items-center text-spa-gold hover:text-spa-olive-dark font-medium transition-colors border-b-2 border-spa-gold pb-1">
                View All Treatments
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-spa-olive-dark overflow-hidden relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-spa-olive rounded-full mix-blend-multiply filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-2 block">Guest Experiences</span>
            <h2 class="text-4xl md:text-5xl font-heading font-medium text-white">Stories of Serenity</h2>
        </div>

        <div class="flex flex-wrap md:flex-nowrap gap-8 justify-center">
            <!-- Review 1 -->
            <div class="bg-spa-olive p-8 rounded-2xl w-full md:w-1/3 border border-spa-olive-light shadow-xl">
                <div class="flex text-spa-gold mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </div>
                <p class="text-gray-300 mb-6 italic text-sm leading-relaxed">"An absolute dream. The Royal Balinese Journey was the highlight of our trip to Bali. The therapists are incredibly skilled, and the environment is just breathtakingly peaceful. We left feeling completely reborn."</p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Williams&background=FFB000&color=1A202C" alt="Sarah" class="w-10 h-10 rounded-full mr-4 border border-spa-gold">
                    <div>
                        <h4 class="font-heading font-medium text-white">Sarah Williams</h4>
                        <span class="text-xs text-gray-400">Sydney, Australia</span>
                    </div>
                </div>
            </div>
            
            <!-- Review 2 -->
            <div class="bg-spa-olive p-8 rounded-2xl w-full md:w-1/3 border border-spa-olive-light shadow-xl">
                <div class="flex text-spa-gold mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </div>
                <p class="text-gray-300 mb-6 italic text-sm leading-relaxed">"I have visited many spas around the world, but the attention to detail and genuine care here is unmatched. The Hot Stone Therapy completely relieved my chronic back pain. I will definitely be returning."</p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=FFB000&color=1A202C" alt="Michael" class="w-10 h-10 rounded-full mr-4 border border-spa-gold">
                    <div>
                        <h4 class="font-heading font-medium text-white">Michael Chen</h4>
                        <span class="text-xs text-gray-400">Singapore</span>
                    </div>
                </div>
            </div>
            
            <!-- Review 3 -->
            <div class="bg-spa-olive p-8 rounded-2xl w-full md:w-1/3 border border-spa-olive-light shadow-xl">
                <div class="flex text-spa-gold mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </div>
                <p class="text-gray-300 mb-6 italic text-sm leading-relaxed">"The ambiance is so calming, from the moment you step in. The Javanese Lulur scrub left my skin feeling incredible. A truly 5-star premium experience."</p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Emma+Johnson&background=FFB000&color=1A202C" alt="Emma" class="w-10 h-10 rounded-full mr-4 border border-spa-gold">
                    <div>
                        <h4 class="font-heading font-medium text-white">Emma Johnson</h4>
                        <span class="text-xs text-gray-400">London, UK</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-spa-beige relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-4xl font-heading font-medium text-spa-olive-dark mb-6">Ready to Rejuvenate?</h2>
        <p class="text-gray-600 text-lg mb-10">Book your appointment today and let us pamper you with our luxurious treatments.</p>
        <a href="{{ url('/contact') }}" class="px-10 py-4 bg-spa-olive-dark hover:bg-spa-olive text-white rounded-full font-bold tracking-wide uppercase transition-all duration-300 shadow-xl inline-block">
            Book an Appointment
        </a>
    </div>
</section>
@endsection
