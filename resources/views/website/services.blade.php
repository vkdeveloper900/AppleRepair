@extends('website.layouts.app')

@section('title', 'Apple Repair Services Delhi — iPhone MacBook iPad Repair | iMaster Tech')
@section('meta_desc', 'Expert iPhone, MacBook & iPad repair in New Delhi by ACIT certified technicians. Genuine parts, same-day service, 90-day warranty. Free diagnosis. Starting ₹999.')
@section('meta_keywords', 'iPhone repair New Delhi, iPhone screen repair cost Delhi, MacBook repair Nehru Place, iPad repair Delhi NCR, Apple Watch repair Delhi, AirPods repair India, same day iPhone repair Delhi')
@section('og_title', 'Apple Device Repair Services — iPhone MacBook iPad | iMaster Tech New Delhi')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">What We Offer</span>
            <h1 class="sec-title mt-2">Premium Apple Repair Services</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:520px;">
                Every repair performed by an ACIT certified technician using genuine Apple parts.
                Free diagnosis · Same-day service · 90-day warranty.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="#iphone"  class="btn-ap-outline btn-sm-ap">iPhone</a>
                <a href="#macbook" class="btn-ap-outline btn-sm-ap">MacBook</a>
                <a href="#ipad"    class="btn-ap-outline btn-sm-ap">iPad</a>
                <a href="#watch"   class="btn-ap-outline btn-sm-ap">Apple Watch & AirPods</a>
                <a href="#replacement" class="btn-ap-outline btn-sm-ap">Replacement</a>
            </div>
        </div>
    </div>
</div>

{{-- IPHONE REPAIR --}}
<section id="iphone" class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1512941937938-a037c84a3a3e?w=600&q=85&fit=crop"
                     alt="iPhone Repair"
                     class="rounded-ap w-100" style="max-height:440px; object-fit:cover;">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="eyebrow">iPhone Repair</span>
                <h2 class="sec-title mt-2 mb-3">Every iPhone. Every Problem.</h2>
                <p class="lead-sub mb-4">
                    From iPhone 6 to iPhone 16 Pro Max — we repair every model with Apple-standard tools and genuine components.
                </p>
                @php
                $iphone = [
                    ['Screen Replacement',    '₹999 – ₹8,999',   'bi-display'],
                    ['Battery Replacement',   '₹799 – ₹2,499',   'bi-battery-charging'],
                    ['Camera Repair',         '₹1,499 – ₹5,999', 'bi-camera'],
                    ['Face ID / Touch ID',    '₹2,499 – ₹6,999', 'bi-fingerprint'],
                    ['Water Damage Recovery', '₹1,999 – ₹8,999', 'bi-droplet'],
                    ['Logic Board Repair',    '₹3,999+',          'bi-cpu'],
                    ['Charging Port',         '₹699 – ₹1,999',   'bi-plug'],
                    ['Speaker / Mic',         '₹599 – ₹2,499',   'bi-mic'],
                ];
                @endphp
                <div class="row g-2">
                    @foreach($iphone as $r)
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-between p-3 rounded-3" style="background:var(--apple-bg);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi {{ $r[2] }} text-ap-b"></i>
                                <span class="small fw-500">{{ $r[0] }}</span>
                            </div>
                            <span class="small fw-600 text-ap-b">{{ $r[1] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="btn-ap mt-4">
                    Book iPhone Repair &nbsp;<i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- MACBOOK REPAIR --}}
<section id="macbook" class="section-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1611186871525-a7f6673d5c50?w=600&q=85&fit=crop"
                     alt="MacBook Repair"
                     class="rounded-ap w-100" style="max-height:440px; object-fit:cover;">
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <span class="eyebrow">MacBook Repair</span>
                <h2 class="sec-title mt-2 mb-3">MacBook Pro & Air Specialists</h2>
                <p class="lead-sub mb-4">
                    Logic board micro-soldering, liquid damage, thermal paste replacement, SSD upgrades — we handle what others won't.
                </p>
                @php
                $mac = [
                    ['Screen / Display',       '₹3,999 – ₹18,999', 'bi-display'],
                    ['Battery Replacement',    '₹2,499 – ₹6,999',  'bi-battery'],
                    ['Keyboard Replacement',   '₹2,999 – ₹8,999',  'bi-keyboard'],
                    ['SSD Upgrade',            '₹3,499 – ₹12,999', 'bi-device-hdd'],
                    ['Liquid Damage Recovery', '₹2,999 – ₹9,999',  'bi-droplet'],
                    ['Motherboard Repair',     '₹4,999+',           'bi-cpu'],
                    ['Charging Board / MagSafe','₹1,499 – ₹3,999', 'bi-plug'],
                    ['Fan / Thermal Paste',    '₹999 – ₹2,499',    'bi-wind'],
                ];
                @endphp
                <div class="row g-2">
                    @foreach($mac as $r)
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-between p-3 rounded-3" style="background:var(--apple-white);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi {{ $r[2] }} text-ap-b"></i>
                                <span class="small fw-500">{{ $r[0] }}</span>
                            </div>
                            <span class="small fw-600 text-ap-b">{{ $r[1] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="btn-ap mt-4">
                    Book MacBook Repair &nbsp;<i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- IPAD REPAIR --}}
<section id="ipad" class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=600&q=85&fit=crop"
                     alt="iPad Repair"
                     class="rounded-ap w-100" style="max-height:440px; object-fit:cover;">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="eyebrow">iPad Repair</span>
                <h2 class="sec-title mt-2 mb-3">iPad & iPad Pro Experts</h2>
                <p class="lead-sub mb-4">
                    All iPad models — including mini, Air, Pro with Liquid Retina — repaired with OEM parts and precision tools.
                </p>
                @php
                $ipad = [
                    ['Screen / Digitizer',   '₹1,499 – ₹12,999', 'bi-tablet'],
                    ['Battery Replacement',  '₹1,299 – ₹3,999',  'bi-battery'],
                    ['Charging Port',        '₹799 – ₹2,499',    'bi-plug'],
                    ['Home Button',          '₹699 – ₹1,999',    'bi-circle'],
                    ['Speaker Repair',       '₹799 – ₹2,999',    'bi-volume-up'],
                    ['Back Glass',           '₹1,999 – ₹5,999',  'bi-phone-flip'],
                    ['Camera Replacement',   '₹1,499 – ₹4,999',  'bi-camera'],
                    ['Motherboard Repair',   '₹3,999+',           'bi-cpu'],
                ];
                @endphp
                <div class="row g-2">
                    @foreach($ipad as $r)
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-between p-3 rounded-3" style="background:var(--apple-bg);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi {{ $r[2] }} text-ap-b"></i>
                                <span class="small fw-500">{{ $r[0] }}</span>
                            </div>
                            <span class="small fw-600 text-ap-b">{{ $r[1] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="btn-ap mt-4">
                    Book iPad Repair &nbsp;<i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- APPLE WATCH & AIRPODS --}}
<section id="watch" class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Accessories</span>
            <h2 class="sec-title mt-2">Apple Watch & AirPods</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:480px;">
                We repair the complete Apple ecosystem — not just phones and laptops.
            </p>
        </div>
        <div class="row g-4">
            @php
            $acc = [
                ['icon'=>'bi-smartwatch',  'title'=>'Apple Watch Screen', 'desc'=>'Series 4–9 & Ultra screen replacements. OLED and Sapphire glass.', 'price'=>'₹2,499 – ₹8,999'],
                ['icon'=>'bi-battery',     'title'=>'Apple Watch Battery', 'desc'=>'Genuine replacement cells for Series 3 to Ultra 2.', 'price'=>'₹1,499 – ₹3,999'],
                ['icon'=>'bi-headphones',  'title'=>'AirPods Repair',     'desc'=>'AirPods 1/2/3, AirPods Pro — driver, mic, charging case.', 'price'=>'₹699 – ₹3,499'],
                ['icon'=>'bi-phone-vibrate','title'=>'HomePod / TV',       'desc'=>'HomePod mini repairs and Apple TV remote replacements.', 'price'=>'Get a Quote'],
            ];
            @endphp
            @foreach($acc as $i => $a)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 70 }}">
                <div class="svc-card text-center">
                    <div class="svc-icon mx-auto"><i class="bi {{ $a['icon'] }}"></i></div>
                    <h5 class="mb-2">{{ $a['title'] }}</h5>
                    <p class="text-ap-g small mb-3">{{ $a['desc'] }}</p>
                    <span class="text-ap-b small fw-semibold">{{ $a['price'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- REPLACEMENT SERVICES --}}
<section id="replacement" class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="eyebrow">Replacement Services</span>
                <h2 class="sec-title mt-2 mb-4">Device Replacement &amp; Upgrades</h2>
                <p class="lead-sub mb-4">
                    When repair isn't the right option, we help you upgrade or replace your device with a certified refurbished Apple product.
                </p>
                @php
                $rep = [
                    ['bi-arrow-repeat',    'Certified Refurbished iPhones',   'Grade A refurbished devices with 6-month warranty.'],
                    ['bi-laptop',          'Refurbished MacBooks',             'Tested, cleaned, and warranty-backed MacBooks.'],
                    ['bi-tablet',          'Refurbished iPads',                'All models available — iPad, Air, Pro & mini.'],
                    ['bi-box-arrow-up',    'Device Trade-In',                  'Trade in your old Apple device for upgrade credit.'],
                    ['bi-shield-check',    'Data Transfer',                    'Complete data migration to new device — zero data loss.'],
                    ['bi-receipt',         'Extended Warranty Plans',          'Post-repair extended protection plans available.'],
                ];
                @endphp
                <div class="d-flex flex-column gap-3">
                    @foreach($rep as $r)
                    <div class="d-flex align-items-start gap-3">
                        <div class="feat-icon flex-shrink-0"><i class="bi {{ $r[0] }}"></i></div>
                        <div>
                            <div class="fw-semibold small">{{ $r[1] }}</div>
                            <div class="text-ap-g" style="font-size:.8rem;">{{ $r[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1581092921461-39b9d08a9b21?w=600&q=85&fit=crop"
                     alt="Device replacement"
                     class="rounded-ap w-100" style="max-height:460px; object-fit:cover;">
            </div>
        </div>
    </div>
</section>

{{-- PROCESS --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">How It Works</span>
            <h2 class="sec-title mt-2">Simple. Fast. Transparent.</h2>
        </div>
        <div class="row g-4">
            @php
            $steps = [
                ['1', 'bi-calendar-check',  'Book an Appointment',   'Call, WhatsApp, or walk in. No prior appointment needed for most repairs.'],
                ['2', 'bi-search',          'Free Diagnosis',        'Our technician diagnoses your device at no cost and provides a clear quote.'],
                ['3', 'bi-tools',           'Expert Repair',         'ACIT certified repair using genuine Apple parts and professional tools.'],
                ['4', 'bi-patch-check',     'Quality Check',         'Multi-point inspection before handover. 90-day warranty issued.'],
            ];
            @endphp
            @foreach($steps as $i => $s)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="step-wrap">
                    <div class="step-num">{{ $s[0] }}</div>
                    <i class="bi {{ $s[1] }} fs-2 text-ap-b mb-3 d-block"></i>
                    <h5 class="mb-2">{{ $s[2] }}</h5>
                    <p class="text-ap-g small mb-0">{{ $s[3] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="sec-title text-white mb-3">Walk In or Call Us Right Now</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.58); max-width:440px; margin:0 auto; font-size:1.05rem;">
                Free diagnosis · No fix, no fee · Genuine parts · 90-day warranty
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn-ap" style="padding:14px 32px;">Get Free Diagnosis</a>
                <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn-ap-white" style="padding:14px 32px;">
                    <i class="bi bi-whatsapp me-2"></i>WhatsApp Now
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
