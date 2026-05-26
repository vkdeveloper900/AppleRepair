@extends('website.layouts.app')

@section('title', 'Repair Gallery — Before & After Apple Repairs | iMaster Tech New Delhi')
@section('meta_desc', 'Browse iMaster Tech\'s gallery of iPhone screen repairs, MacBook liquid damage recoveries, iPad restorations & before/after transformations. Nehru Place, New Delhi.')
@section('meta_keywords', 'Apple repair gallery Delhi, iPhone repair before after, MacBook repair photos, iPad repair workshop Delhi, Apple technician workshop images')
@section('og_title', 'Apple Repair Work Gallery — Before & After | iMaster Tech')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">Work Showcase</span>
            <h1 class="sec-title mt-2">Our Work Speaks for Itself</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:500px;">
                Real repairs. Real results. Browse our repair gallery and workshop images.
            </p>
        </div>
    </div>
</div>

{{-- FILTER + GRID --}}
<section class="section-white">
    <div class="container">

        {{-- Filter Buttons --}}
        <div class="gal-filter" data-aos="fade-up">
            <button class="gal-btn active" data-filter="all">All Work</button>
            <button class="gal-btn" data-filter="iphone">iPhone</button>
            <button class="gal-btn" data-filter="macbook">MacBook</button>
            <button class="gal-btn" data-filter="ipad">iPad</button>
            <button class="gal-btn" data-filter="workshop">Workshop</button>
        </div>

        @php
        $gallery = [
            ['https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?w=600&q=80&fit=crop', 'iphone',  'iPhone 14 Pro Screen Repair',    'Screen replacement with OEM display'],
            ['https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&q=80&fit=crop', 'macbook', 'MacBook Pro Keyboard Replacement','Butterfly to Magic Keyboard upgrade'],
            ['https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=600&q=80&fit=crop', 'ipad',    'iPad Pro Screen Restoration',     'Liquid Retina 12.9" display replaced'],
            ['https://images.unsplash.com/photo-1581092921461-39b9d08a9b21?w=600&q=80&fit=crop', 'workshop','Professional Repair Workshop',   'Lab-grade ESD-safe workstations'],
            ['https://images.unsplash.com/photo-1512941937938-a037c84a3a3e?w=600&q=80&fit=crop', 'iphone',  'iPhone Water Damage Recovery',   'Liquid damage cleaned at board level'],
            ['https://images.unsplash.com/photo-1611186871525-a7f6673d5c50?w=600&q=80&fit=crop', 'macbook', 'MacBook Air M2 Battery Swap',    'Genuine Apple battery with calibration'],
            ['https://images.unsplash.com/photo-1603921326210-6edd2d60ca68?w=600&q=80&fit=crop', 'iphone',  'iPhone 15 Pro Camera Module',    'Periscope telephoto module replaced'],
            ['https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80&fit=crop', 'workshop','Training Session in Progress',   '12-student offline batch, Nehru Place'],
            ['https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80&fit=crop', 'workshop','iMaster Tech — Rajan Mehta',     'ACIT certified specialist at work'],
            ['https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=600&q=80&fit=crop', 'ipad',    'iPad mini Charging Port Repair', 'USB-C port replaced with genuine part'],
            ['https://images.unsplash.com/photo-1603732551681-2e91159b9dc2?w=600&q=80&fit=crop', 'iphone',  'iPhone 13 Logic Board Repair',   'Component-level micro-soldering'],
            ['https://images.unsplash.com/photo-1547394765-185e1e68f34e?w=600&q=80&fit=crop', 'macbook', 'MacBook Liquid Damage Recovery', 'Coffee spill — full board restoration'],
        ];
        @endphp

        <div class="row g-3">
            @foreach($gallery as $i => $g)
            <div class="col-sm-6 col-lg-4" data-cat="{{ $g[1] }}" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 70 }}">
                <div class="gal-item">
                    <img src="{{ $g[0] }}" alt="{{ $g[2] }}" loading="lazy">
                    <div class="gal-overlay">
                        <div>
                            <div class="text-white fw-600 small">{{ $g[2] }}</div>
                            <div style="color:rgba(255,255,255,.6); font-size:.78rem;">{{ $g[3] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- BEFORE / AFTER --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Transformations</span>
            <h2 class="sec-title mt-2">Before &amp; After</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:460px;">
                See the dramatic difference a certified repair makes.
            </p>
        </div>

        @php
        $ba = [
            [
                'before' => 'https://images.unsplash.com/photo-1512941937938-a037c84a3a3e?w=500&q=80',
                'after'  => 'https://images.unsplash.com/photo-1603921326210-6edd2d60ca68?w=500&q=80',
                'title'  => 'iPhone 14 Pro — Shattered Screen',
                'sub'    => 'Screen replaced in 45 minutes with OEM display',
            ],
            [
                'before' => 'https://images.unsplash.com/photo-1547394765-185e1e68f34e?w=500&q=80',
                'after'  => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&q=80',
                'title'  => 'MacBook Pro — Coffee Spill Damage',
                'sub'    => 'Full board cleaning, replaced 3 components',
            ],
            [
                'before' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=500&q=80',
                'after'  => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=500&q=80',
                'title'  => 'iPad Pro — Cracked Digitizer',
                'sub'    => 'Liquid Retina screen replaced, Touch ID preserved',
            ],
        ];
        @endphp

        <div class="row g-4">
            @foreach($ba as $i => $item)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="mb-3">
                    <h6 class="fw-700 mb-1">{{ $item['title'] }}</h6>
                    <p class="text-ap-g small mb-3">{{ $item['sub'] }}</p>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="ba-wrap">
                                <img src="{{ $item['before'] }}" alt="Before repair">
                                <span class="ba-badge ba-before">Before</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="ba-wrap">
                                <img src="{{ $item['after'] }}" alt="After repair">
                                <span class="ba-badge ba-after">After</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- INSTAGRAM STRIP --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <span class="eyebrow">Instagram</span>
            <h2 class="sec-title mt-2">Follow Our Work Daily</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:440px;">
                We post daily repair tips, behind-the-scenes, and student success stories.
            </p>
            <a href="https://instagram.com" target="_blank" rel="noopener" class="btn-ap-dark mt-4" style="display:inline-flex;">
                <i class="bi bi-instagram me-2"></i>@imastertechdelhi
            </a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="sec-title text-white mb-3">Your Device Could Be Next</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.55); max-width:420px; margin:0 auto; font-size:1.05rem;">
                Join 12,000+ happy customers. Same-day service available.
            </p>
            <a href="{{ route('contact') }}" class="btn-ap" style="padding:14px 32px;">Book a Repair</a>
        </div>
    </div>
</section>

@endsection
