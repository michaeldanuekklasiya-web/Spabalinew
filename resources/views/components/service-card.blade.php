@props(['image', 'title', 'duration', 'price', 'description'])

<div class="bg-white rounded-2xl overflow-hidden shadow-lg shadow-spa-olive/5 hover:shadow-xl hover:shadow-spa-olive/10 transition-all duration-500 group flex flex-col h-full border border-spa-beige">
    <div class="relative h-64 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    </div>
    <div class="p-8 flex flex-col flex-grow">
        <div class="flex justify-between items-start mb-4">
            <h3 class="text-2xl font-heading font-medium text-spa-olive-dark">{{ $title }}</h3>
            <span class="bg-spa-beige text-spa-olive-dark text-xs font-semibold px-3 py-1 rounded-full whitespace-nowrap">{{ $duration }}</span>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">{{ $description }}</p>
        <div class="flex justify-between items-center mt-auto pt-6 border-t border-gray-100">
            <span class="text-xl font-heading font-semibold text-spa-gold">{{ $price }}</span>
            <a href="https://wa.me/6281123456789?text={{ urlencode('Hello, I would like to book the '.$title.' treatment.') }}" target="_blank" class="text-spa-olive-dark font-medium text-sm hover:text-spa-gold transition-colors flex items-center group/btn">
                Book Now
                <svg class="w-4 h-4 ml-1 transform group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
