@extends('layouts.app')

@section('content')
<!-- Header Banner -->
<section class="relative pt-32 pb-20 bg-spa-olive-dark">
    <div class="absolute inset-0 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2070&auto=format&fit=crop" alt="Spa Treatments" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mt-12">
        <span class="text-spa-gold tracking-[0.2em] uppercase text-sm font-semibold mb-4 block">Spa Menu</span>
        <h1 class="text-4xl md:text-6xl font-heading font-medium text-white mb-6">Our Treatments</h1>
        <p class="text-lg text-spa-beige max-w-2xl mx-auto">Experience our professional massage services delivered with traditional healing techniques.</p>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12">
            <h2 class="text-3xl font-heading font-medium text-spa-olive-dark mb-2 border-b-2 border-spa-gold inline-block pb-2">Massage Therapies</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            <x-service-card 
                image="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop"
                title="Balinese Massage"
                duration="60 mins / 90 mins"
                price="Rp 250k / Rp 350k"
                description="Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=80&w=2070&auto=format&fit=crop"
                title="Deep Tissue"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="Sport Massage To Relax Tight Muscles Uses Slow and Strong Pressure."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop"
                title="Aromatherapy Massage"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="Balinese Massage with Aromatherapy."
            />

            <x-service-card 
                image="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=2070&auto=format&fit=crop"
                title="Traditional Massage"
                duration="60 mins / 90 mins"
                price="Rp 230k / Rp 330k"
                description="Use palms and thumbs to press on the sore area of the body and relax the muscles."
            />

            <x-service-card 
                image="https://images.unsplash.com/photo-1552693673-1bf958298935?q=80&w=2073&auto=format&fit=crop"
                title="Thai Massage"
                duration="60 mins / 90 mins"
                price="Rp 350k / Rp 450k"
                description="Strong Stretching Massage Without Oil To Release Muscular Tension Improve Joint Pain And Promote Mental Clarity."
            />

            <x-service-card 
                image="https://images.unsplash.com/photo-1583416750470-965b2707b355?q=80&w=2070&auto=format&fit=crop"
                title="Lomi-Lomi Massage"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="It is done with gentle and repetitive movements using oil to relax the body."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1620610141673-c15bc5e0da05?q=80&w=1974&auto=format&fit=crop"
                title="Hot Stone"
                duration="60 mins / 90 mins"
                price="Rp 350k / Rp 500k"
                description="Using basalt stones soaked in hot water to apply to specific areas to relieve pain, stress, and tension."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2070&auto=format&fit=crop"
                title="Lymphatic Drainage"
                duration="60 mins / 90 mins"
                price="Rp 400k / Rp 550k"
                description="A gentle massage performed to help the body's lymphatic system drain excess lymph fluid from the tissues, thereby reducing swelling."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop"
                title="Shiatsu Massage"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="Relieve Tension And Pain Points Using Fingers Pressure."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1537039017646-0b18f0967399?q=80&w=2070&auto=format&fit=crop"
                title="Massage & Body Scrub"
                duration="60 mins / 90 mins"
                price="Rp 350k / Rp 450k"
                description="Two treatments at once: a massage to relax muscles, reduce tension, improve blood circulation, and relax the body as a whole, as well as a scrub using 100% natural ingredients to remove dead skin cells, cleanse dirt, and smooth the skin."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop"
                title="Four Hand Massage"
                duration="60 mins / 90 mins"
                price="Rp 500k / Rp 950k"
                description="Balinese Massage By Two Staffs."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=2070&auto=format&fit=crop"
                title="Foot Massage"
                duration="60 mins / 90 mins"
                price="Rp 230k / Rp 300k"
                description="Foot massage techniques to relax muscles, improve blood circulation, and reduce body tension, often using certain reflexology points to stimulate other parts of the body."
            />

            <x-service-card 
                image="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?q=80&w=2070&auto=format&fit=crop"
                title="Facial Acupressure"
                duration="60 mins / 90 mins"
                price="Rp 300k / Rp 450k"
                description="Facial acupressure is a facial massage technique that involves applying gentle pressure to certain points."
            />
        </div>

        <div class="mb-12">
            <h2 class="text-3xl font-heading font-medium text-spa-olive-dark mb-2 border-b-2 border-spa-gold inline-block pb-2">Beauty Services</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-service-card 
                image="https://images.unsplash.com/photo-1522337660859-02fbefca4702?q=80&w=2069&auto=format&fit=crop"
                title="Mani Pedi Cure"
                duration="Full Treatment"
                price="Rp 450k"
                description="Complete nail care treatment for hands and feet."
            />

            <x-service-card 
                image="https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=1974&auto=format&fit=crop"
                title="Waxing"
                duration="Regular / Brazilian"
                price="Rp 600k / Rp 800k"
                description="A method of removing hair from the root by applying a sticky substance such as wax or caramelized sugar to the skin, then pulling it quickly in the opposite direction to hair growth, so that the hair is removed down to the follicle."
            />
            
            <x-service-card 
                image="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=2069&auto=format&fit=crop"
                title="Creambath"
                duration="60 mins / 90 mins"
                price="Rp 250k / Rp 300k"
                description="Hair treatment with cream to nourish and strengthen hair."
            />
        </div>

    </div>
</section>
@endsection
