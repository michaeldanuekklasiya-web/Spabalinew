@extends('layouts.app')

@section('content')
<!-- Header Banner -->
<section class="relative pt-32 pb-20 bg-spa-olive-dark">
    <div class="absolute inset-0 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop" alt="Spa Background" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mt-12">
        <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4 block">Get In Touch</span>
        <h1 class="text-4xl md:text-6xl font-heading font-medium text-white mb-6">Book an Appointment</h1>
    </div>
</section>

<!-- Booking & Contact Section -->
<section id="booking" class="py-24 bg-spa-beige relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-spa-beige-dark">
            <!-- Form Side -->
            <div class="w-full lg:w-1/2 p-10 md:p-16">
                <div class="mb-8">
                    <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-2 block">Reserve Your Spot</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-medium text-spa-olive-dark">Book Your Treatment</h2>
                </div>
                
                <form id="bookingForm" class="space-y-6" onsubmit="submitBooking(event)">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" required class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent placeholder-gray-400 text-gray-800" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-2">WhatsApp Number</label>
                            <input type="tel" id="whatsapp" required class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent placeholder-gray-400 text-gray-800" placeholder="+62 878...">
                        </div>
                    </div>
                    
                    <div>
                        <label for="treatment" class="block text-sm font-medium text-gray-700 mb-2">Select Treatment / Package</label>
                        <select id="treatment" required class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent text-gray-800">
                            <option value="" disabled selected>Choose a treatment...</option>
                            <optgroup label="Massages & Therapies">
                                <option value="Balinese Massage">Balinese Massage</option>
                                <option value="Deep Tissue">Deep Tissue</option>
                                <option value="Aromatherapy Massage">Aromatherapy Massage</option>
                                <option value="Traditional Massage">Traditional Massage</option>
                                <option value="Thai Massage">Thai Massage</option>
                                <option value="Lomi-Lomi Massage">Lomi-Lomi Massage</option>
                                <option value="Hot Stone">Hot Stone</option>
                                <option value="Lymphatic Drainage">Lymphatic Drainage</option>
                                <option value="Shiatsu Massage">Shiatsu Massage</option>
                                <option value="Massage & Body Scrub">Massage & Body Scrub</option>
                                <option value="Four Hand Massage">Four Hand Massage</option>
                                <option value="Foot Massage">Foot Massage</option>
                            </optgroup>
                            <optgroup label="Beauty Services">
                                <option value="Facial Acupressure">Facial Acupressure</option>
                                <option value="Mani Pedi Cure">Mani Pedi Cure</option>
                                <option value="Waxing">Waxing</option>
                                <option value="Creambath">Creambath</option>
                            </optgroup>
                            <optgroup label="Packages">
                                <option value="The Quick Escape">The Quick Escape Package</option>
                                <option value="Royal Balinese Journey">Royal Balinese Journey Package</option>
                                <option value="Couples Romance">Couples Romance Package</option>
                            </optgroup>
                        </select>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input type="date" id="date" required class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent text-gray-800">
                        </div>
                        <div>
                            <label for="time" class="block text-sm font-medium text-gray-700 mb-2">Time</label>
                            <input type="time" id="time" required class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent text-gray-800">
                        </div>
                        <div>
                            <label for="pax" class="block text-sm font-medium text-gray-700 mb-2">Guests</label>
                            <select id="pax" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent text-gray-800">
                                <option value="1">1 Person</option>
                                <option value="2">2 Persons</option>
                                <option value="3">3 Persons</option>
                                <option value="4+">4+ Persons</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Special Requests</label>
                        <textarea id="notes" rows="2" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-spa-gold transition-colors bg-transparent placeholder-gray-400 text-gray-800 resize-none" placeholder="Any allergies, injuries, or preferences..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-spa-gold hover:bg-spa-gold-light text-spa-olive-dark font-semibold py-4 rounded-full transition-colors flex justify-center items-center group shadow-md shadow-spa-gold/30">
                        Confirm via WhatsApp
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </button>
                </form>
            </div>
            
            <!-- Map Side -->
            <div class="w-full lg:w-1/2 bg-gray-200 relative min-h-[400px]">
                <iframe src="https://www.google.com/maps?q=Jl.+Ancak+Sari,+Pecatu,+Kec.+Kuta+Sel.,+Kabupaten+Badung,+Bali&output=embed" 
                        class="absolute inset-0 w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                
                <!-- Overlay Info Box -->
                <div class="absolute bottom-8 left-8 right-8 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-xl">
                    <h4 class="font-heading font-semibold text-spa-olive-dark mb-2">Bali Spa Sanctuary</h4>
                    <p class="text-sm text-gray-600 mb-4">Jl. Ancak Sari, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali</p>
                    <div class="flex items-center text-sm text-spa-olive font-medium">
                        <svg class="w-4 h-4 mr-2 text-spa-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Open Daily: 09:00 - 22:00
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-heading font-medium text-spa-olive-dark mb-4">Frequently Asked Questions</h2>
            <p class="text-gray-600">Everything you need to know to prepare for your sanctuary experience.</p>
        </div>

        <div class="space-y-4" x-data="{ active: null }">
            <!-- FAQ 1 -->
            <div class="border border-spa-beige rounded-2xl overflow-hidden transition-all duration-300" :class="active === 1 ? 'bg-spa-beige shadow-md' : 'bg-white'">
                <button @click="active = active === 1 ? null : 1" class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none">
                    <span class="font-medium text-spa-olive-dark">Do I need to make a reservation in advance?</span>
                    <svg class="w-5 h-5 text-spa-gold transform transition-transform duration-300" :class="active === 1 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="active === 1" x-collapse style="display: none;">
                    <div class="px-6 pb-5 text-sm text-gray-600 leading-relaxed">
                        Yes, we highly recommend booking at least 24 hours in advance to secure your preferred time slot and therapist. Walk-ins are welcome but subject to availability. You can easily book via WhatsApp.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="border border-spa-beige rounded-2xl overflow-hidden transition-all duration-300" :class="active === 2 ? 'bg-spa-beige shadow-md' : 'bg-white'">
                <button @click="active = active === 2 ? null : 2" class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none">
                    <span class="font-medium text-spa-olive-dark">What time should I arrive for my treatment?</span>
                    <svg class="w-5 h-5 text-spa-gold transform transition-transform duration-300" :class="active === 2 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="active === 2" x-collapse style="display: none;">
                    <div class="px-6 pb-5 text-sm text-gray-600 leading-relaxed">
                        Please arrive 15 minutes prior to your scheduled appointment. This allows time for a brief consultation, selecting your massage oils, and enjoying our complimentary welcome ginger tea.
                    </div>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="border border-spa-beige rounded-2xl overflow-hidden transition-all duration-300" :class="active === 3 ? 'bg-spa-beige shadow-md' : 'bg-white'">
                <button @click="active = active === 3 ? null : 3" class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none">
                    <span class="font-medium text-spa-olive-dark">Do you offer couple treatments?</span>
                    <svg class="w-5 h-5 text-spa-gold transform transition-transform duration-300" :class="active === 3 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="active === 3" x-collapse style="display: none;">
                    <div class="px-6 pb-5 text-sm text-gray-600 leading-relaxed">
                        Yes, we have beautifully designed private couple suites. You can choose our specific 'Couples Romance' package or request any two individual treatments to be performed side-by-side.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    function submitBooking(event) {
        event.preventDefault();
        
        const name = document.getElementById('name').value;
        const treatment = document.getElementById('treatment').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const pax = document.getElementById('pax').value;
        const notes = document.getElementById('notes').value;
        
        let message = `Hello Bali Spa! I would like to make a reservation:%0A%0A`;
        message += `*Name:* ${name}%0A`;
        message += `*Treatment:* ${treatment}%0A`;
        message += `*Date:* ${date}%0A`;
        message += `*Time:* ${time}%0A`;
        message += `*Guests:* ${pax}%0A`;
        
        if (notes) {
            message += `*Notes:* ${notes}%0A`;
        }
        
        message += `%0APlease confirm availability. Thank you!`;
        
        // Open WhatsApp
        window.open(`https://wa.me/6287859632289?text=${message}`, '_blank');
    }
</script>
@endpush
