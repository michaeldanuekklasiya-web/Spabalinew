@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
    <!-- Cinematic Background -->
    <div class="absolute inset-0 w-full h-full">
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=60&w=1080&auto=format&fit=crop" alt="Bali Spa Resort" class="absolute inset-0 w-full h-full object-cover" loading="eager">
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
                image="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=60&w=1080&auto=format&fit=crop"
                title="Balinese Massage"
                duration="60 mins / 90 mins"
                price="Rp 250k / Rp 350k"
                description="Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=60&w=1080&auto=format&fit=crop"
                title="Deep Tissue"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="Sport Massage To Relax Tight Muscles Uses Slow and Strong Pressure."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=60&w=1080&auto=format&fit=crop"
                title="Aromatherapy Massage"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="Balinese Massage with Aromatherapy."
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

<!-- FAQ Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-2 block">Common Questions</span>
            <h2 class="text-4xl md:text-5xl font-heading font-medium text-spa-olive-dark">Frequently Asked Questions</h2>
        </div>
        
        <div class="max-w-3xl mx-auto divide-y divide-gray-200" x-data="{ selected: 1 }">
            <!-- FAQ 1 -->
            <div class="py-2">
                <button class="w-full text-left py-4 flex justify-between items-center focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
                    <span class="font-medium text-lg text-gray-900">What are your opening hours?</span>
                    <span class="ml-6 flex-shrink-0 text-spa-gold">
                        <svg class="h-6 w-6 transform transition-transform duration-200" :class="{'rotate-180': selected === 1}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all duration-300 max-h-0" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <p class="text-gray-600 pb-4 text-base leading-relaxed">We are open 24 hours daily. We provide continuous professional home and hotel massage services whenever you need.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="py-2">
                <button class="w-full text-left py-4 flex justify-between items-center focus:outline-none" @click="selected !== 2 ? selected = 2 : selected = null">
                    <span class="font-medium text-lg text-gray-900">Do you provide home service?</span>
                    <span class="ml-6 flex-shrink-0 text-spa-gold">
                        <svg class="h-6 w-6 transform transition-transform duration-200" :class="{'rotate-180': selected === 2}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all duration-300 max-h-0" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <p class="text-gray-600 pb-4 text-base leading-relaxed">Yes, we offer professional massage and spa services directly to your home, villa, or hotel anywhere in Bali including Seminyak, Kuta, Canggu, Ubud, and Nusa Dua.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="py-2">
                <button class="w-full text-left py-4 flex justify-between items-center focus:outline-none" @click="selected !== 3 ? selected = 3 : selected = null">
                    <span class="font-medium text-lg text-gray-900">Should I book in advance?</span>
                    <span class="ml-6 flex-shrink-0 text-spa-gold">
                        <svg class="h-6 w-6 transform transition-transform duration-200" :class="{'rotate-180': selected === 3}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all duration-300 max-h-0" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <p class="text-gray-600 pb-4 text-base leading-relaxed">While last-minute calls are welcome, we highly recommend booking in advance via WhatsApp to ensure your preferred therapist and time are available.</p>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="py-2">
                <button class="w-full text-left py-4 flex justify-between items-center focus:outline-none" @click="selected !== 4 ? selected = 4 : selected = null">
                    <span class="font-medium text-lg text-gray-900">Are your therapists certified?</span>
                    <span class="ml-6 flex-shrink-0 text-spa-gold">
                        <svg class="h-6 w-6 transform transition-transform duration-200" :class="{'rotate-180': selected === 4}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
                <div class="overflow-hidden transition-all duration-300 max-h-0" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <p class="text-gray-600 pb-4 text-base leading-relaxed">Absolutely. All of our therapists are professional, well-trained, and highly experienced in providing the best massage and spa treatments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Book Appointment Section -->
<section class="py-24 relative overflow-hidden" id="book">
    <!-- Decorative background -->
    <div class="absolute inset-0 bg-spa-beige z-0"></div>
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-spa-gold/20 blur-3xl z-0 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-spa-leaf/20 blur-3xl z-0 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-2 block">Reservation</span>
            <h2 class="text-4xl md:text-5xl font-heading font-medium text-spa-olive-dark">Book Your Wellness Journey</h2>
        </div>

        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row border border-white">
            
            <!-- Map & Contact Side -->
            <div class="lg:w-1/2 flex flex-col">
                <div class="h-64 lg:h-80 w-full relative">
                    <iframe 
                        src="https://maps.google.com/maps?q=Jl.+Ancak+Sari,+Pecatu,+Kec.+Kuta+Sel.,+Kabupaten+Badung,+Bali&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                        class="absolute inset-0 w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="p-8 lg:p-12 bg-gradient-to-br from-spa-olive-dark to-[#3b4c3b] text-white flex-grow flex flex-col justify-center">
                    <h4 class="text-2xl font-heading font-medium mb-6 text-spa-gold">Our Location & Contact</h4>
                    <div class="space-y-5">
                        <div class="flex items-start">
                            <div class="bg-spa-gold/20 p-2.5 rounded-xl mr-4">
                                <svg class="h-6 w-6 text-spa-gold flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <span class="text-base leading-relaxed pt-1 text-spa-beige">Jl. Ancak Sari, Pecatu, Kec. Kuta Sel.,<br>Kabupaten Badung, Bali</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-spa-gold/20 p-2.5 rounded-xl mr-4">
                                <svg class="h-6 w-6 text-spa-gold flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <span class="text-base text-spa-beige">+62 878 5963 2289 <span class="text-spa-gold text-sm ml-1 font-semibold">(24/7 WhatsApp)</span></span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-spa-gold/20 p-2.5 rounded-xl mr-4">
                                <svg class="h-6 w-6 text-spa-gold flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-base text-spa-beige">Home & Hotel Service Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div class="lg:w-1/2 p-8 lg:p-12 bg-white">
                <form action="#" method="POST" class="space-y-6">
                    <p class="text-spa-olive mb-6 text-base font-medium">Fill out the form below and we'll confirm your appointment instantly via WhatsApp.</p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-spa-olive uppercase tracking-wider mb-2">Full Name</label>
                            <input type="text" placeholder="John Doe" class="block w-full border-0 border-b-2 border-spa-beige bg-spa-beige/30 py-3 px-4 rounded-t-lg focus:border-spa-gold focus:ring-0 transition-colors sm:text-sm outline-none text-spa-olive-dark placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-spa-olive uppercase tracking-wider mb-2">Phone / WhatsApp</label>
                            <input type="text" placeholder="+62 812 3456 789" class="block w-full border-0 border-b-2 border-spa-beige bg-spa-beige/30 py-3 px-4 rounded-t-lg focus:border-spa-gold focus:ring-0 transition-colors sm:text-sm outline-none text-spa-olive-dark placeholder-gray-400">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-spa-olive uppercase tracking-wider mb-2">Select Treatment</label>
                        <select class="block w-full border-0 border-b-2 border-spa-beige bg-spa-beige/30 py-3 px-4 rounded-t-lg focus:border-spa-gold focus:ring-0 transition-colors sm:text-sm outline-none text-spa-olive-dark">
                            <option value="" disabled selected>Choose a service...</option>
                            <option>Balinese Massage</option>
                            <option>Deep Tissue Massage</option>
                            <option>Aromatherapy Massage</option>
                            <option>Hot Stone Therapy</option>
                            <option>Other Treatment</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-spa-olive uppercase tracking-wider mb-2">Date</label>
                            <input type="date" class="block w-full border-0 border-b-2 border-spa-beige bg-spa-beige/30 py-3 px-4 rounded-t-lg focus:border-spa-gold focus:ring-0 transition-colors sm:text-sm outline-none text-spa-olive-dark">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-spa-olive uppercase tracking-wider mb-2">Time</label>
                            <input type="time" class="block w-full border-0 border-b-2 border-spa-beige bg-spa-beige/30 py-3 px-4 rounded-t-lg focus:border-spa-gold focus:ring-0 transition-colors sm:text-sm outline-none text-spa-olive-dark">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-spa-olive uppercase tracking-wider mb-2">Location (Home/Hotel/Villa)</label>
                        <input type="text" placeholder="e.g. The Westin Resort, Room 102" class="block w-full border-0 border-b-2 border-spa-beige bg-spa-beige/30 py-3 px-4 rounded-t-lg focus:border-spa-gold focus:ring-0 transition-colors sm:text-sm outline-none text-spa-olive-dark placeholder-gray-400">
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-xl shadow-lg shadow-green-500/30 text-sm font-bold text-white bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 uppercase tracking-wide transition-all duration-300 transform hover:-translate-y-1">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Book via WhatsApp
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
