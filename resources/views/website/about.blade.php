@extends('website.layouts.app')

@section('title', 'About Rajan Mehta — ACIT Certified Apple Technician New Delhi | iMaster Tech')
@section('meta_desc', 'Meet Rajan Mehta — one of India\'s 200 ACIT certified Apple technicians. 12+ years, 12,000+ devices repaired, 650+ students trained. Events in India & China. New Delhi.')
@section('meta_keywords', 'ACIT certified Apple technician India, best Apple repair technician New Delhi, Rajan Mehta iMaster Tech, Apple repair specialist Delhi, Apple technician training India')
@section('og_title', 'Rajan Mehta — India\'s ACIT Certified Apple Technician | iMaster Tech')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">Our Story</span>
            <h1 class="sec-title mt-2">The Man Behind iMaster Tech</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:560px;">
                From dismantling broken phones at age 16 to training hundreds of technicians across India — this is Rajan's journey.
            </p>
        </div>
    </div>
</div>

{{-- STORY --}}
<section class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-5" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1581092160607-ee22731c9c4c?w=580&q=85&fit=crop"
                     alt="Rajan Mehta at work"
                     class="rounded-ap w-100" style="max-height:500px; object-fit:cover;">
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <span class="eyebrow">The Origin Story</span>
                <h2 class="sec-title mt-2 mb-4">12 Years. 12,000 Devices.<br>One Passion.</h2>
                <p class="lead-sub mb-3">
                    Rajan Mehta's obsession with Apple products began in 2012 when he repaired his first iPhone 4S
                    from a YouTube tutorial and a ₹200 toolkit. What started as a hobby quickly became a calling.
                </p>
                <p class="text-ap-g mb-4" style="line-height:1.8;">
                    By 2015, Rajan had opened his first workshop in Nehru Place — New Delhi's iconic electronics hub.
                    He pursued Apple's ACIT (Apple Certified Independent Technician) certification, one of fewer than
                    200 technicians in India to hold it. His reputation for microscopic logic board repair spread fast,
                    attracting customers from Bangalore, Mumbai, and even abroad.
                </p>
                <p class="text-ap-g" style="line-height:1.8;">
                    Today, iMaster Tech is more than a repair shop — it is a training academy shaping the next generation
                    of Apple specialists across India. Rajan has personally trained over 650 students, many of whom now
                    run successful repair businesses of their own.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- EXPERIENCE TIMELINE --}}
<section class="section-light">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-5" data-aos="fade-right">
                <span class="eyebrow">Journey</span>
                <h2 class="sec-title mt-2 mb-4">A Decade of Growth</h2>
                <p class="lead-sub">
                    Every milestone shaped iMaster Tech into what it is today — India's most trusted independent Apple repair brand.
                </p>
                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&q=85&fit=crop"
                     alt="MacBook repair workshop"
                     class="rounded-ap w-100 mt-4" style="max-height:300px; object-fit:cover;">
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="timeline mt-2">
                    @php
                    $timeline = [
                        ['year'=>'2012', 'title'=>'The First Repair',          'desc'=>'Repaired an iPhone 4S screen in a bedroom workshop. The spark that started it all.'],
                        ['year'=>'2014', 'title'=>'First Professional Workshop','desc'=>'Opened iMaster Tech at Nehru Place, New Delhi. The city\'s first dedicated Apple repair studio.'],
                        ['year'=>'2016', 'title'=>'ACIT Certification',         'desc'=>'Earned the Apple Certified Independent Technician credential — fewer than 200 in India.'],
                        ['year'=>'2018', 'title'=>'Training Academy Launched',  'desc'=>'Launched the first offline Apple repair training batch. 12 students in the inaugural cohort.'],
                        ['year'=>'2020', 'title'=>'India Mobile Congress',      'desc'=>'Represented independent Apple repair technicians at India Mobile Congress, New Delhi.'],
                        ['year'=>'2022', 'title'=>'China Import Expo, Shanghai','desc'=>'Attended the China International Import Expo — building supply chain relationships for genuine parts.'],
                        ['year'=>'2024', 'title'=>'650+ Trained · 12K Repaired','desc'=>'iMaster Tech is now India\'s most trusted independent Apple specialist, with an online course coming soon.'],
                    ];
                    @endphp
                    @foreach($timeline as $item)
                    <div class="tl-item">
                        <div class="eyebrow mb-1">{{ $item['year'] }}</div>
                        <h6 class="mb-1">{{ $item['title'] }}</h6>
                        <p class="text-ap-g small mb-0">{{ $item['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ACHIEVEMENTS --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Achievements</span>
            <h2 class="sec-title mt-2">Recognition & Milestones</h2>
        </div>

        @php
        $achievements = [
            ['icon'=>'bi-award',       'num'=>'ACIT',   'label'=>'Apple Certified',        'sub'=>'One of <200 in India'],
            ['icon'=>'bi-tools',       'num'=>'12K+',   'label'=>'Devices Repaired',       'sub'=>'Across all Apple product lines'],
            ['icon'=>'bi-mortarboard', 'num'=>'650+',   'label'=>'Technicians Trained',    'sub'=>'From 18 states across India'],
            ['icon'=>'bi-globe2',      'num'=>'4',      'label'=>'International Events',   'sub'=>'India & China tech conferences'],
            ['icon'=>'bi-star',        'num'=>'4.9★',   'label'=>'Customer Rating',        'sub'=>'Based on 500+ reviews'],
            ['icon'=>'bi-patch-check', 'num'=>'25+',    'label'=>'Certifications',         'sub'=>'Apple & third-party credentials'],
        ];
        @endphp

        <div class="row g-4">
            @foreach($achievements as $i => $a)
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                <div class="text-center p-3">
                    <i class="bi {{ $a['icon'] }} fs-2 text-ap-b mb-2 d-block"></i>
                    <div class="fw-800 fs-3" style="letter-spacing:-0.04em; color:var(--apple-dark);">{{ $a['num'] }}</div>
                    <div class="fw-600 small mt-1">{{ $a['label'] }}</div>
                    <div class="text-ap-g" style="font-size:.76rem;">{{ $a['sub'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- EVENTS --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Global Presence</span>
            <h2 class="sec-title mt-2">Events in India & China</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:540px;">
                Rajan has represented independent Apple repair on international stages, learning from the best and building a global network.
            </p>
        </div>

        @php
        $events = [
            ['img'=>'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=700&q=85&fit=crop', 'title'=>'India Mobile Congress 2023', 'loc'=>'Bharat Mandapam, New Delhi', 'year'=>'2023', 'desc'=>'Represented independent Apple repair at Asia\'s largest tech event. Connected with 50+ industry leaders.'],
            ['img'=>'https://images.unsplash.com/photo-1474181487882-5abf3f0ba6c2?w=700&q=85&fit=crop', 'title'=>'China Import Expo, Shanghai', 'loc'=>'CIIE, Shanghai, China', 'year'=>'2022', 'desc'=>'Built supply-chain partnerships for genuine Apple parts. Toured component factories in Shenzhen.'],
            ['img'=>'https://images.unsplash.com/photo-1562071707-7249ab429b2a?w=700&q=85&fit=crop', 'title'=>'iFixit Summit, Bangalore', 'loc'=>'NIMHANS Convention Centre, Bangalore', 'year'=>'2022', 'desc'=>'Keynote workshop on iPhone logic board repair techniques. Attended by 300+ technicians.'],
            ['img'=>'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=700&q=85&fit=crop', 'title'=>'Apple Repair India Conclave', 'loc'=>'Pragati Maidan, New Delhi', 'year'=>'2021', 'desc'=>'Panellist on genuine parts vs third-party supply chain. Featured in TechIndia magazine.'],
        ];
        @endphp

        <div class="row g-4">
            @foreach($events as $i => $e)
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="event-card">
                    <img src="{{ $e['img'] }}" alt="{{ $e['title'] }}">
                    <div class="event-overlay">
                        <span class="badge-soon mb-2">{{ $e['year'] }}</span>
                        <h5 class="text-white mb-1">{{ $e['title'] }}</h5>
                        <p class="small mb-2" style="color:rgba(255,255,255,.65);">
                            <i class="bi bi-geo-alt me-1"></i>{{ $e['loc'] }}
                        </p>
                        <p class="small mb-0" style="color:rgba(255,255,255,.55);">{{ $e['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- NETWORK --}}
<section class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="eyebrow">Professional Network</span>
                <h2 class="sec-title mt-2 mb-4">Connected With the Best</h2>
                <p class="lead-sub mb-4">
                    Over 12 years, Rajan has built a network of 200+ top Apple technicians, trainers, and
                    component suppliers across India, China, and the UAE.
                </p>
                <div class="row g-3">
                    @php
                    $network = [
                        ['icon'=>'bi-people-fill', 'title'=>'200+ Technicians',  'sub'=>'Active professional network'],
                        ['icon'=>'bi-building',    'title'=>'50+ Suppliers',     'sub'=>'Genuine parts sourced globally'],
                        ['icon'=>'bi-chat-dots',   'title'=>'18 States Covered', 'sub'=>'Students across India'],
                        ['icon'=>'bi-globe2',      'title'=>'3 Countries',       'sub'=>'India, China, UAE connections'],
                    ];
                    @endphp
                    @foreach($network as $n)
                    <div class="col-6">
                        <div class="feat-item h-100">
                            <div class="feat-icon"><i class="bi {{ $n['icon'] }}"></i></div>
                            <div>
                                <div class="fw-semibold small">{{ $n['title'] }}</div>
                                <div class="text-ap-g" style="font-size:.75rem;">{{ $n['sub'] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=85&fit=crop"
                     alt="iMaster Tech training session"
                     class="rounded-ap w-100" style="max-height:420px; object-fit:cover;">
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="sec-title text-white mb-3">Work With the Best</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.58); max-width:460px; margin:0 auto; font-size:1.1rem;">
                Whether it's a repair or learning the craft — Rajan is here for you.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn-ap" style="padding:14px 32px;">Book a Repair</a>
                <a href="{{ route('training') }}" class="btn-ap-ghost" style="padding:14px 32px;">Join Training</a>
            </div>
        </div>
    </div>
</section>

@endsection
