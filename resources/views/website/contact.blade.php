@extends('website.layouts.app')

@section('title', 'Contact iMaster Tech — Apple Repair New Delhi, Nehru Place | +91 98765 43210')
@section('meta_desc', 'Visit iMaster Tech at Shop 14, Nehru Place Market, New Delhi. Call or WhatsApp +91 98765 43210 for iPhone, MacBook & iPad repair. Free diagnosis. Open 7 days.')
@section('meta_keywords', 'iMaster Tech contact, Apple repair shop Nehru Place, iPhone repair near me New Delhi, MacBook repair contact Delhi, Apple repair address Delhi 110019')
@section('og_title', 'Contact iMaster Tech — Apple Repair & Training, Nehru Place New Delhi')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">Get In Touch</span>
            <h1 class="sec-title mt-2">We're Here to Help</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:500px;">
                Walk in, call, or WhatsApp — we're available 7 days a week.
                Free diagnosis before every repair.
            </p>
        </div>
    </div>
</div>

{{-- CONTACT INFO CARDS --}}
<section class="section-white">
    <div class="container">
        <div class="row g-4 mb-5">
            @php
            $info = [
                ['bi-geo-alt-fill',    'Visit Us',          'Shop 14, Level 2, Nehru Place Market<br>New Delhi — 110019',       'Get Directions', '#map'],
                ['bi-telephone-fill',  'Call Us',           '+91 98765 43210<br>Mon–Sat · 10 AM – 7 PM',                        'Call Now',       'tel:+919876543210'],
                ['bi-whatsapp',        'WhatsApp',          'Fastest response channel<br>Available 24 / 7',                     'Open WhatsApp',  'https://wa.me/919876543210'],
                ['bi-envelope-fill',   'Email Us',          'hello@imaster.in<br>Response within 4 hours',                     'Send Email',     'mailto:hello@imaster.in'],
            ];
            @endphp
            @foreach($info as $i => $c)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 70 }}">
                <div class="contact-info-card h-100 flex-column align-items-start">
                    <div class="contact-info-icon mb-3 flex-shrink-0">
                        <i class="bi {{ $c[0] }}"></i>
                    </div>
                    <div class="fw-700 mb-1">{{ $c[1] }}</div>
                    <p class="text-ap-g small mb-3 flex-grow-1" style="line-height:1.7;">{!! $c[2] !!}</p>
                    <a href="{{ $c[4] }}" target="{{ str_starts_with($c[4], 'http') ? '_blank' : '_self' }}" rel="noopener" class="text-ap-b small fw-600">
                        {{ $c[3] }} <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CONTACT FORM + MAP --}}
<section class="section-light">
    <div class="container">
        <div class="row g-5 align-items-start">

            {{-- FORM --}}
            <div class="col-lg-6" data-aos="fade-right">
                <span class="eyebrow">Send a Message</span>
                <h2 class="sec-title mt-2 mb-4">Tell Us What You Need</h2>

                <form id="contactForm" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-lbl">Your Name</label>
                            <input type="text" class="form-ap" placeholder="Priya Sharma" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-lbl">Phone Number</label>
                            <input type="tel" class="form-ap" placeholder="+91 98765 43210" required>
                        </div>
                        <div class="col-12">
                            <label class="form-lbl">Email Address</label>
                            <input type="email" class="form-ap" placeholder="you@email.com">
                        </div>
                        <div class="col-12">
                            <label class="form-lbl">Service Required</label>
                            <select class="form-ap" required>
                                <option value="" disabled selected>Select a service…</option>
                                <option>iPhone Repair</option>
                                <option>MacBook Repair</option>
                                <option>iPad Repair</option>
                                <option>Apple Watch / AirPods</option>
                                <option>Device Replacement</option>
                                <option>Training Enquiry</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-lbl">Device Model</label>
                            <input type="text" class="form-ap" placeholder="e.g. iPhone 14 Pro, MacBook Pro M2…">
                        </div>
                        <div class="col-12">
                            <label class="form-lbl">Describe the Issue</label>
                            <textarea class="form-ap" rows="4" placeholder="Tell us what happened — screen cracked, won't turn on, spilled liquid…" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-ap w-100" style="padding:14px; font-size:1rem; justify-content:center; border:none;">
                                <i class="bi bi-send me-2"></i>Send Message
                            </button>
                        </div>
                        <div class="col-12">
                            <p class="text-ap-g small text-center mb-0">
                                Or WhatsApp directly for the fastest response:
                                <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="text-ap-b fw-600">+91 98765 43210</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>

            {{-- HOURS + MAP --}}
            <div class="col-lg-6" data-aos="fade-left">
                <span class="eyebrow">Find Us</span>
                <h2 class="sec-title mt-2 mb-4">Visit Our Workshop</h2>

                {{-- Map Placeholder --}}
                <div id="map" class="rounded-ap overflow-h mb-4" style="background:var(--apple-dark); height:280px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                    <i class="bi bi-geo-alt-fill text-ap-b" style="font-size:3rem; margin-bottom:1rem;"></i>
                    <p class="text-white fw-600 mb-1">iMaster Tech</p>
                    <p class="small mb-3" style="color:rgba(255,255,255,.5);">Shop 14, Nehru Place Market, New Delhi</p>
                    <a href="https://maps.google.com?q=Nehru+Place+Market+New+Delhi" target="_blank" rel="noopener" class="btn-ap btn-sm-ap">
                        Open in Google Maps
                    </a>
                </div>

                {{-- Business Hours --}}
                <div class="rounded-4 p-4" style="background:var(--apple-white); border:1px solid var(--apple-border);">
                    <h6 class="fw-700 mb-3">Business Hours</h6>
                    @php
                    $hours = [
                        ['Monday – Friday',  '10:00 AM – 7:00 PM', true],
                        ['Saturday',         '10:00 AM – 6:00 PM', true],
                        ['Sunday',           '11:00 AM – 4:00 PM', false],
                    ];
                    @endphp
                    @foreach($hours as $h)
                    <div class="d-flex justify-content-between align-items-center py-2" style="border-bottom: 1px solid var(--apple-border);">
                        <span class="small fw-500">{{ $h[0] }}</span>
                        <div class="d-flex align-items-center gap-2">
                            <span class="small text-ap-g">{{ $h[1] }}</span>
                            <span style="width:8px; height:8px; border-radius:50%; background: {{ $h[2] ? 'var(--apple-green)' : 'var(--apple-gray)' }};"></span>
                        </div>
                    </div>
                    @endforeach
                    <p class="small text-ap-g mt-3 mb-0">
                        <i class="bi bi-info-circle me-2 text-ap-b"></i>
                        Emergency repairs available outside hours via WhatsApp.
                    </p>
                </div>

                {{-- Transport --}}
                <div class="mt-4 p-4 rounded-4" style="background:var(--apple-bg);">
                    <h6 class="fw-700 mb-3">How to Reach Us</h6>
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <i class="bi bi-train-front text-ap-b flex-shrink-0 mt-1"></i>
                        <span class="small text-ap-g"><strong>Metro:</strong> Nehru Place Station (Violet Line) · 2 min walk</span>
                    </div>
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <i class="bi bi-bus-front text-ap-b flex-shrink-0 mt-1"></i>
                        <span class="small text-ap-g"><strong>Bus:</strong> Nehru Place Bus Stop — multiple DTC routes</span>
                    </div>
                    <div class="d-flex align-items-start gap-2">
                        <i class="bi bi-car-front text-ap-b flex-shrink-0 mt-1"></i>
                        <span class="small text-ap-g"><strong>Parking:</strong> Basement parking at Nehru Place Market</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- FAQ STRIP --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">FAQ</span>
            <h2 class="sec-title mt-2">Common Questions</h2>
        </div>

        @php
        $faqs = [
            ['Do I need an appointment?',          'No appointment needed for most iPhone and iPad repairs. MacBook diagnostics may require booking — WhatsApp us first.'],
            ['How long does a repair take?',       'Most iPhone screen and battery repairs: 45–90 minutes. MacBook repairs: same day to 2 days depending on the issue.'],
            ['Do you use genuine Apple parts?',    'Yes, always. We source 100% genuine Apple OEM components. We will never use third-party parts without your consent.'],
            ['What warranty do you offer?',        'All repairs come with a 90-day warranty on parts and labour. If the same issue reoccurs, we fix it at no charge.'],
            ['Can you recover my data?',           'Yes, in most water damage and software fault cases we recover data. We always attempt data recovery before any repair.'],
            ['What\'s the cost if you can\'t fix it?', 'Nothing. We offer a free diagnosis and follow a "No Fix, No Fee" policy for most repairs.'],
        ];
        @endphp

        <div class="row g-3 justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-2" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                        <h6 class="accordion-header">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-600" style="font-size:.93rem;" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}">
                                {{ $faq[0] }}
                            </button>
                        </h6>
                        <div id="faq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-ap-g small" style="line-height:1.8;">{{ $faq[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="sec-title text-white mb-3">Still Have Questions?</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.55); max-width:420px; margin:0 auto; font-size:1.05rem;">
                WhatsApp us right now — we reply within minutes.
            </p>
            <a href="https://wa.me/919876543210?text=Hi%2C%20I%20need%20help%20with%20my%20Apple%20device" target="_blank" rel="noopener" class="btn-ap-white" style="padding:14px 36px; font-size:1rem;">
                <i class="bi bi-whatsapp me-2" style="color:#25d366;"></i>Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
