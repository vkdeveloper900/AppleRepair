@extends('website.layouts.app')

@section('title', 'iMaster Tech | #1 Apple Device Repair & Training Centre New Delhi — ACIT Certified')
@section('meta_desc', 'New Delhi\'s #1 Apple certified repair & training centre. iPhone, MacBook, iPad repair with genuine parts. Same-day service. 90-day warranty. 12,000+ devices repaired. ACIT certified.')
@section('meta_keywords', 'Apple device repair New Delhi, iPhone repair Nehru Place Delhi, MacBook repair Delhi NCR, iPad repair New Delhi, ACIT certified Apple technician India, Apple repair training course India, online Apple repair course')
@section('og_title', 'iMaster Tech — New Delhi\'s #1 Apple Device Repair & Training Centre')

@section('content')

{{-- ═══════════════════════════════════════
     HERO
═══════════════════════════════════════ --}}
<section class="hero-wrap">
    <div class="container py-5">
        <div class="row align-items-center gy-5">

            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-badge">
                    <span class="dot"></span> ACIT Certified &nbsp;·&nbsp; New Delhi
                </div>
                <h1 class="display-hero text-white mb-4">
                    Your Apple Device.<br>
                    <span class="hero-gradient-text">Fixed Right.</span>
                </h1>
                <p class="lead-sub mb-5" style="color:rgba(255,255,255,.65);">
                    New Delhi's most trusted Apple device repair &amp; training centre.
                    12+ years · Genuine parts · 90-day warranty on every repair.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn-ap" style="font-size:1rem; padding:14px 32px;">
                        Book a Repair &nbsp;<i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ route('training') }}" class="btn-ap-ghost" style="font-size:1rem; padding:14px 32px;">
                        Explore Courses
                    </a>
                </div>
                <div class="d-flex flex-wrap align-items-center gap-4 mt-4">
                    <div>
                        <span class="text-white fw-700">★ 4.9</span>
                        <span style="color:rgba(255,255,255,.45); font-size:.85rem;"> / 5 &nbsp;(500+ reviews)</span>
                    </div>
                    <div style="width:1px;height:18px;background:rgba(255,255,255,.18);"></div>
                    <span style="color:rgba(255,255,255,.45); font-size:.85rem;">✓ Genuine Parts &nbsp; ✓ Same-Day Service</span>
                </div>
            </div>

            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="180">
                <img src="https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?w=640&q=85&fit=crop"
                     alt="iPhone repair at iMaster Tech"
                     class="rounded-ap w-100"
                     style="max-height:520px; object-fit:cover; box-shadow:0 40px 100px rgba(0,0,0,.6);">
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     STATS
═══════════════════════════════════════ --}}
<div class="stats-strip">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center gy-4">

            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="12000" data-suffix="+">0+</div>
                <div class="stat-lbl">Devices Repaired</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>

            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="650" data-suffix="+">0+</div>
                <div class="stat-lbl">Students Trained</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>

            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="12" data-suffix=" Yrs">0</div>
                <div class="stat-lbl">Experience</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>

            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="100" data-suffix="%">0</div>
                <div class="stat-lbl">Genuine Parts</div>
            </div>

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════
     SERVICES HIGHLIGHTS
═══════════════════════════════════════ --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">What We Do</span>
            <h2 class="sec-title mt-2">Expert Apple Services</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:540px;">
                From cracked screens to logic board micro-soldering — every repair done with Apple-grade precision.
            </p>
        </div>

        @php
        $services = [
            ['icon'=>'bi-phone',       'title'=>'iPhone Repair',  'desc'=>'Screen, battery, camera, Face ID, water damage, logic board & more.',  'price'=>'Starting ₹999',   'hash'=>'iphone'],
            ['icon'=>'bi-laptop',      'title'=>'MacBook Repair', 'desc'=>'Screen, keyboard, battery, SSD upgrade, motherboard, liquid damage.',   'price'=>'Starting ₹1,999', 'hash'=>'macbook'],
            ['icon'=>'bi-tablet',      'title'=>'iPad Repair',    'desc'=>'Screen digitizer, battery, charging port, speaker & more.',             'price'=>'Starting ₹1,499', 'hash'=>'ipad'],
            ['icon'=>'bi-mortarboard', 'title'=>'Training',       'desc'=>'Certified offline batch & upcoming online course for all skill levels.', 'price'=>'Enroll Now',      'hash'=>null],
        ];
        @endphp

        <div class="row g-4">
            @foreach($services as $i => $s)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <a href="{{ $s['hash'] ? route('services').'#'.$s['hash'] : route('training') }}" class="text-decoration-none d-block h-100">
                    <div class="svc-card">
                        <div class="svc-icon"><i class="bi {{ $s['icon'] }}"></i></div>
                        <h5 class="mb-2">{{ $s['title'] }}</h5>
                        <p class="text-ap-g small mb-3 flex-grow-1">{{ $s['desc'] }}</p>
                        <span class="text-ap-b small fw-semibold">{{ $s['price'] }} →</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     TECHNICIAN INTRO
═══════════════════════════════════════ --}}
<section class="section-light">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-5" data-aos="fade-right">
                <div style="position:relative;">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=560&q=85&fit=crop&crop=face"
                         alt="Rajan Mehta — Apple Certified Technician"
                         class="rounded-ap w-100"
                         style="max-height:500px; object-fit:cover; object-position:top;">
                    {{-- Floating badge --}}
                    <div class="glass" style="position:absolute;bottom:24px;left:24px;padding:1rem 1.25rem;">
                        <div class="d-flex align-items-center gap-3">
                            <div style="width:40px;height:40px;background:var(--apple-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.1rem;">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div>
                                <div class="fw-bold small text-ap-d">ACIT Certified</div>
                                <div class="text-ap-g" style="font-size:.75rem;">Apple Certified Independent Technician</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <span class="eyebrow">Meet the Expert</span>
                <h2 class="sec-title mt-2 mb-4">Rajan Mehta —<br>Apple's Trusted Craftsman</h2>
                <p class="lead-sub mb-4">
                    With over 12 years of hands-on experience, Rajan has repaired more than 12,000 Apple devices
                    and trained 650+ technicians across India. His journey from a curious tinkerer to a
                    certified Apple specialist has taken him to international tech events in China and across India.
                </p>

                <div class="row g-3 mb-4">
                    @php
                    $feats = [
                        ['icon'=>'bi-award',               'title'=>'ACIT Certified',         'sub'=>"Apple's highest technician certification"],
                        ['icon'=>'bi-globe-asia-australia', 'title'=>'International Events',    'sub'=>'India Mobile Congress & China Import Expo'],
                        ['icon'=>'bi-people',               'title'=>'Global Network',          'sub'=>'Connected with 200+ top technicians'],
                        ['icon'=>'bi-gem',                  'title'=>'Genuine Parts Only',      'sub'=>'100% original Apple components always'],
                    ];
                    @endphp
                    @foreach($feats as $f)
                    <div class="col-sm-6">
                        <div class="feat-item">
                            <div class="feat-icon"><i class="bi {{ $f['icon'] }}"></i></div>
                            <div>
                                <div class="fw-semibold small">{{ $f['title'] }}</div>
                                <div class="text-ap-g" style="font-size:.78rem;">{{ $f['sub'] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-ap-dark">
                    Full Story &nbsp;<i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     ONLINE COURSE PROMO BAND
═══════════════════════════════════════ --}}
<section class="course-promo-band">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-7" data-aos="fade-right">
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge-soon">Online Course · Now Live</span>
                    <span style="display:inline-block;background:rgba(255,59,48,.18);color:#ff7066;border:1px solid rgba(255,59,48,.28);padding:4px 14px;border-radius:980px;font-size:.7rem;font-weight:800;">🔥 40% Early Bird Off</span>
                </div>
                <h2 class="sec-title text-white mb-3" style="line-height:1.1;">
                    Learn Apple Repair Online.<br>
                    <span class="hero-gradient-text">From India's Best Technician.</span>
                </h2>
                <p class="mb-4" style="color:rgba(255,255,255,.62); font-size:1.05rem; line-height:1.75; max-width:520px;">
                    Can't come to Delhi? Our online Apple repair course brings Rajan's 12 years of expertise directly to your screen.
                    40+ HD lessons, live Q&amp;A, certificate included. Start earning within weeks.
                </p>
                <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                    <div class="d-flex align-items-center gap-1">
                        <span style="color:var(--apple-yellow);">★★★★★</span>
                        <span class="text-white fw-700 ms-1">4.9</span>
                        <span style="color:rgba(255,255,255,.45);font-size:.82rem;">(212 ratings)</span>
                    </div>
                    <div style="width:1px;height:16px;background:rgba(255,255,255,.2);"></div>
                    <span style="color:rgba(255,255,255,.5);font-size:.85rem;"><i class="bi bi-people me-1"></i>1,200+ enrolled</span>
                    <div style="width:1px;height:16px;background:rgba(255,255,255,.2);"></div>
                    <span style="color:rgba(255,255,255,.5);font-size:.85rem;"><i class="bi bi-patch-check me-1"></i>Certificate included</span>
                </div>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="{{ route('online-course') }}" class="btn-ap" style="padding:14px 32px;font-size:1rem;">
                        Enroll Now — ₹2,999 <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <div>
                        <span class="price-old" style="color:rgba(255,255,255,.4);font-size:1rem;">₹4,999</span>
                        <span class="price-save ms-2">Save ₹2,000</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                <div class="rounded-ap overflow-h position-relative" style="box-shadow:0 32px 80px rgba(0,0,0,.6);">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=580&q=85&fit=crop"
                         alt="iMaster Tech Online Apple Repair Course preview"
                         style="width:100%;height:340px;object-fit:cover;display:block;">
                    <div style="position:absolute;inset:0;background:rgba(0,0,0,.35);display:flex;align-items:center;justify-content:center;">
                        <a href="{{ route('online-course') }}" style="width:64px;height:64px;background:rgba(255,255,255,.9);border-radius:50%;display:flex;align-items:center;justify-content:center;transition:transform .3s ease;" onmouseenter="this.style.transform='scale(1.1)'" onmouseleave="this.style.transform='scale(1)'">
                            <i class="bi bi-play-fill text-ap-d" style="font-size:1.5rem;margin-left:4px;"></i>
                        </a>
                    </div>
                    <div style="position:absolute;bottom:0;left:0;right:0;background:linear-gradient(to top,rgba(0,0,0,.7) 0%,transparent 100%);padding:1.25rem 1.5rem;">
                        <div class="text-white fw-600 small">40+ HD Lessons · Hindi + English</div>
                        <div style="color:rgba(255,255,255,.55);font-size:.75rem;">Lifetime access · Start anytime</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-4 mt-3">
                    @foreach(['40+ Lessons','Live Q&A','Certificate','7-Day Refund'] as $pill)
                    <span style="color:rgba(255,255,255,.45);font-size:.75rem;font-weight:500;">✓ {{ $pill }}</span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     WHY CHOOSE US
═══════════════════════════════════════ --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">The iMaster Advantage</span>
            <h2 class="sec-title mt-2">Why 12,000+ Customers Trust Us</h2>
        </div>

        @php
        $why = [
            ['icon'=>'bi-shield-check',   'title'=>'90-Day Warranty',      'text'=>'Every repair is backed by a 90-day guarantee on parts and labour.'],
            ['icon'=>'bi-lightning-charge','title'=>'Same-Day Repairs',     'text'=>'Most iPhone & iPad repairs completed within 60–90 minutes.'],
            ['icon'=>'bi-gem',            'title'=>'Genuine Apple Parts',   'text'=>'We source only original Apple components — never cheap alternatives.'],
            ['icon'=>'bi-patch-check',    'title'=>'ACIT Certified',        'text'=>"India's Apple Certified Independent Technician since 2013."],
            ['icon'=>'bi-currency-rupee', 'title'=>'Transparent Pricing',   'text'=>'Free diagnosis before any repair. No hidden costs, ever.'],
            ['icon'=>'bi-headset',        'title'=>'24 / 7 Support',        'text'=>'WhatsApp us anytime — day or night — for urgent device queries.'],
        ];
        @endphp

        <div class="row g-3">
            @foreach($why as $i => $w)
            <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $i * 55 }}">
                <div class="feat-item h-100">
                    <div class="feat-icon"><i class="bi {{ $w['icon'] }}"></i></div>
                    <div>
                        <div class="fw-semibold mb-1">{{ $w['title'] }}</div>
                        <div class="text-ap-g small">{{ $w['text'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     TESTIMONIALS SLIDER
═══════════════════════════════════════ --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Customer Reviews</span>
            <h2 class="sec-title mt-2">Loved by 500+ Customers</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:480px;">
                Real feedback from real customers across Delhi, NCR and beyond.
            </p>
        </div>

        @php
        $testimonials = [
            ['name'=>'Priya Sharma',  'loc'=>'New Delhi',  'job'=>'Marketing Manager', 'stars'=>5, 'text'=>'Fixed my iPhone 14 Pro Max screen in under an hour. Looks factory new. Genuinely impressed by the professionalism and cleanliness of the work.'],
            ['name'=>'Amit Verma',   'loc'=>'Gurgaon',    'job'=>'Software Engineer',  'stars'=>5, 'text'=>'My MacBook Pro survived a coffee spill thanks to Rajan. Complete water damage recovery — data intact, runs perfectly. Absolute life saver.'],
            ['name'=>'Neha Singh',   'loc'=>'Noida',      'job'=>'iRepair Shop Owner', 'stars'=>5, 'text'=>'Completed the 3-month offline training. I now run my own Apple repair shop in Noida. Best investment I have ever made in my career.'],
            ['name'=>'Rahul Gupta',  'loc'=>'Faridabad',  'job'=>'Business Owner',     'stars'=>5, 'text'=>"Three devices repaired over two years — always genuine parts, always great service. Won't trust any other technician in Delhi NCR."],
            ['name'=>'Sonia Kapoor', 'loc'=>'New Delhi',  'job'=>'Teacher',            'stars'=>5, 'text'=>'iPad Pro screen replacement done beautifully. They were transparent about the pricing upfront. Zero surprises. Highly recommend.'],
            ['name'=>'Vikram Joshi', 'loc'=>'Mumbai',     'job'=>'Technician Trainee', 'stars'=>5, 'text'=>'Travelled from Mumbai for the offline batch. Hands-on training quality is unmatched anywhere in India. Worth every rupee.'],
        ];
        @endphp

        <div class="swiper sw-testi pb-5" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach($testimonials as $t)
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="stars mb-3">{{ str_repeat('★', $t['stars']) }}</div>
                        <p class="text-ap-g mb-4" style="font-size:.94rem; line-height:1.75;">"{{ $t['text'] }}"</p>
                        <div class="d-flex align-items-center gap-3 mt-auto">
                            <div style="width:42px;height:42px;border-radius:50%;background:var(--apple-blue);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;flex-shrink:0;">
                                {{ substr($t['name'], 0, 1) }}
                            </div>
                            <div>
                                <div class="fw-semibold" style="font-size:.9rem;">{{ $t['name'] }}</div>
                                <div class="text-ap-g" style="font-size:.78rem;">{{ $t['job'] }} · {{ $t['loc'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination mt-3"></div>
        </div>

        <div class="text-center mt-2" data-aos="fade-up">
            <a href="{{ route('testimonials') }}" class="btn-ap-outline">Read All Reviews</a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     CTA
═══════════════════════════════════════ --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <span class="badge-soon mb-4 d-inline-block">Same-Day Service Available</span>
            <h2 class="sec-title text-white mb-3">Ready to Fix Your Apple Device?</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.58); font-size:1.1rem; max-width:480px; margin:0 auto;">
                Walk in, call, or WhatsApp. Free diagnosis before every repair.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn-ap" style="font-size:1rem; padding:14px 32px;">
                    Book a Repair
                </a>
                <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn-ap-white" style="font-size:1rem; padding:14px 32px;">
                    <i class="bi bi-whatsapp me-2"></i>WhatsApp Us
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
