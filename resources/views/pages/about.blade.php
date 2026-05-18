@extends('layouts.app')

@section('content')
<!-- Header Banner -->
<section class="relative pt-32 pb-20 bg-spa-olive-dark">
    <div class="absolute inset-0 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=60&w=1080&auto=format&fit=crop" alt="Spa Background" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mt-12">
        <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4 block">Our Story</span>
        <h1 class="text-4xl md:text-6xl font-heading font-medium text-white mb-6">The Heart of Bali Spa</h1>
    </div>
</section>

<!-- About Us Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative group">
                <div class="absolute -inset-4 bg-spa-beige rounded-3xl transform rotate-3 transition-transform duration-500 group-hover:rotate-6"></div>
                <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=60&w=1080&auto=format&fit=crop" alt="Spa Therapist" class="relative z-10 rounded-2xl shadow-xl w-full h-[500px] object-cover" loading="lazy">
                <!-- Floating badge -->
                <div class="absolute -bottom-8 -right-8 z-20 bg-white p-6 rounded-2xl shadow-2xl animate-bounce-slow flex items-center space-x-4 border border-spa-beige">
                    <div class="text-4xl text-spa-gold font-heading font-bold">15+</div>
                    <div class="text-sm text-gray-600 font-medium leading-tight">Years of<br>Excellence</div>
                </div>
            </div>
            
            <div class="space-y-6 lg:pl-8">
                <div class="flex items-center space-x-4">
                    <div class="h-[1px] w-12 bg-spa-gold"></div>
                    <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold">Philosophy</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-heading font-medium text-spa-olive-dark leading-tight text-balance">
                    A Sanctuary for Your Soul in the Heart of Bali
                </h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Nestled amidst the lush tropical beauty of Bali, our luxury spa is born from a profound respect for ancient wellness rituals. We believe that true beauty and health come from a harmonious balance of body, mind, and spirit.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Our professionally trained therapists use only the finest natural ingredients, blending pure essential oils, exotic herbs, and warm volcanic stones. Every touch is designed to melt away stress, ease tension, and restore your natural radiance.
                </p>
                
                <div class="pt-6 grid grid-cols-2 gap-8">
                    <div>
                        <div class="text-spa-olive-dark font-heading font-semibold text-xl mb-2">Natural Ingredients</div>
                        <p class="text-gray-500 text-sm">100% organic oils and local botanical extracts.</p>
                    </div>
                    <div>
                        <div class="text-spa-olive-dark font-heading font-semibold text-xl mb-2">Expert Therapists</div>
                        <p class="text-gray-500 text-sm">Certified professionals with years of experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-spa-olive-dark text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-spa-olive rounded-full mix-blend-multiply filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-spa-wood-dark rounded-full mix-blend-multiply filter blur-3xl opacity-50 transform -translate-x-1/2 translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-heading font-medium mb-6 text-spa-beige">Why Choose Our Sanctuary</h2>
            <p class="text-spa-leaf text-lg">We go beyond traditional treatments to offer a holistic journey of transformation.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Icon 1 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto bg-spa-olive/30 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-transform border border-spa-olive">
                    <svg class="w-10 h-10 text-spa-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-medium mb-3 text-spa-beige">Tranquil Ambience</h3>
                <p class="text-spa-leaf text-sm leading-relaxed text-balance">Immersive nature-inspired design with calming sounds and gentle aromatherapy.</p>
            </div>
            <!-- Icon 2 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto bg-spa-olive/30 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-transform border border-spa-olive">
                    <svg class="w-10 h-10 text-spa-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-medium mb-3 text-spa-beige">Premium Products</h3>
                <p class="text-spa-leaf text-sm leading-relaxed text-balance">We exclusively use high-end, cruelty-free, and organic massage oils.</p>
            </div>
            <!-- Icon 3 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto bg-spa-olive/30 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-transform border border-spa-olive">
                    <svg class="w-10 h-10 text-spa-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-medium mb-3 text-spa-beige">Award Winning</h3>
                <p class="text-spa-leaf text-sm leading-relaxed text-balance">Consistently rated 5 stars by international travelers on TripAdvisor.</p>
            </div>
            <!-- Icon 4 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto bg-spa-olive/30 rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-transform border border-spa-olive">
                    <svg class="w-10 h-10 text-spa-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-medium mb-3 text-spa-beige">Flexible Booking</h3>
                <p class="text-spa-leaf text-sm leading-relaxed text-balance">Easy reservations via WhatsApp with customized treatment timings.</p>
            </div>
        </div>
    </div>
</section>
@endsection
