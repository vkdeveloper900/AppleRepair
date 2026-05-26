@extends('website.layouts.app')

@section('title', 'Apple Repair Training Course New Delhi + Online — iPhone MacBook iPad | iMaster Tech')
@section('meta_desc', 'India\'s best Apple repair training. Offline 3-month batch in New Delhi + online course (40+ lessons). ACIT certified instructor. Certificate. 650+ trained. Enroll today.')
@section('meta_keywords', 'Apple repair training New Delhi, iPhone repair course India, MacBook repair training, Apple technician course, online Apple repair course, iMaster Tech training')
@section('og_title', 'Apple Repair Training — Offline & Online Courses | iMaster Tech New Delhi')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">Training & Courses</span>
            <h1 class="sec-title mt-2">Learn Apple Repair from the Best</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:540px;">
                650+ technicians trained. Hands-on curriculum. Certificate included.
                Taught by India's ACIT certified Apple specialist.
            </p>
        </div>
    </div>
</div>

{{-- OFFLINE COURSE --}}
<section class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=620&q=85&fit=crop"
                     alt="iMaster Tech offline training batch"
                     class="rounded-ap w-100" style="max-height:460px; object-fit:cover;">
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <span class="eyebrow">Offline Batch · New Delhi</span>
                <h2 class="sec-title mt-2 mb-3">3-Month Intensive Course</h2>
                <p class="lead-sub mb-4">
                    A fully hands-on, lab-based programme covering iPhone, MacBook, and iPad repair
                    from beginner to advanced level. Every student works on real devices from Day 1.
                </p>

                <div class="row g-3 mb-4">
                    @php
                    $details = [
                        ['bi-calendar3',    'Duration',     '3 Months (12 Weeks)'],
                        ['bi-clock',        'Schedule',     'Mon–Sat · 10 AM – 2 PM'],
                        ['bi-people',       'Batch Size',   'Max 12 students per batch'],
                        ['bi-geo-alt',      'Location',     'Nehru Place, New Delhi'],
                        ['bi-currency-rupee','Course Fee',  '₹25,000 (incl. tools kit)'],
                        ['bi-patch-check',  'Certificate',  'iMaster Tech Certified'],
                    ];
                    @endphp
                    @foreach($details as $d)
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2 p-3 rounded-3" style="background:var(--apple-bg);">
                            <i class="bi {{ $d[0] }} text-ap-b fs-5 flex-shrink-0"></i>
                            <div>
                                <div style="font-size:.72rem; color:var(--apple-gray); font-weight:600; text-transform:uppercase; letter-spacing:.05em;">{{ $d[1] }}</div>
                                <div class="fw-600 small">{{ $d[2] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('contact') }}" class="btn-ap" style="padding:14px 32px;">
                    Enroll in Offline Batch &nbsp;<i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- CURRICULUM --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Curriculum</span>
            <h2 class="sec-title mt-2">What You Will Learn</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:500px;">
                A structured curriculum covering theory, tools, and intensive hands-on lab sessions.
            </p>
        </div>

        @php
        $modules = [
            ['Module 1 — Weeks 1–2',  'Foundation', [
                'Apple product ecosystem overview',
                'Required tools & ESD safety',
                'Understanding iOS and macOS',
                'Reading schematics & board views',
            ]],
            ['Module 2 — Weeks 3–6',  'iPhone Repair', [
                'Screen assembly replacement (all models)',
                'Battery replacement & calibration',
                'Camera, Face ID & Touch ID repair',
                'Water damage cleaning & recovery',
                'Logic board component-level soldering',
            ]],
            ['Module 3 — Weeks 7–9',  'MacBook Repair', [
                'Screen, keyboard & trackpad',
                'Battery replacement & SMC reset',
                'SSD and RAM upgrades',
                'Liquid damage recovery procedure',
                'Motherboard voltage testing & reballing',
            ]],
            ['Module 4 — Weeks 10–11','iPad & Accessories', [
                'iPad screen digitizer replacement',
                'Apple Watch display & battery',
                'AirPods repair & charging case',
                'iPad charging port & speaker',
            ]],
            ['Module 5 — Week 12',    'Business & Certification', [
                'Running a repair business',
                'Pricing, invoicing & GST',
                'Sourcing genuine & quality parts',
                'Final exam & certificate',
            ]],
        ];
        @endphp

        <div class="row g-4">
            @foreach($modules as $i => $m)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $i * 70 }}">
                <div class="svc-card h-100">
                    <span class="eyebrow mb-2 d-block">{{ $m[0] }}</span>
                    <h5 class="mb-3">{{ $m[1] }}</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach($m[2] as $item)
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-ap-b flex-shrink-0 mt-1" style="font-size:.8rem;"></i>
                            <span class="small text-ap-g">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Why Choose iMaster Training</span>
            <h2 class="sec-title mt-2">Everything You Need to Succeed</h2>
        </div>
        @php
        $benefits = [
            ['bi-tools',          'Tools Kit Included',      'Receive a professional-grade toolkit worth ₹4,500 on Day 1.'],
            ['bi-phone',          'Real Devices Practice',   'Train on actual iPhones, MacBooks and iPads — not simulators.'],
            ['bi-mortarboard',    'Certificate on Completion','iMaster Tech certificate recognised by repair shops across India.'],
            ['bi-person-workspace','Small Batch Guarantee',   'Max 12 students per batch for personal attention from Rajan.'],
            ['bi-building',       'Job Placement Support',   'We connect graduates with repair shops and franchises in their city.'],
            ['bi-whatsapp',       'Lifetime Community Access','Join our private WhatsApp group of 650+ working technicians.'],
            ['bi-camera-video',   'Recorded Sessions',       'Session recordings for revision, available for 12 months post-batch.'],
            ['bi-patch-check',    'Expert Instructor',       'Taught directly by Rajan Mehta — ACIT certified, 12 years experience.'],
        ];
        @endphp
        <div class="row g-4">
            @foreach($benefits as $i => $b)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 55 }}">
                <div class="text-center p-4 rounded-4" style="background:var(--apple-bg);">
                    <i class="bi {{ $b[0] }} fs-1 text-ap-b mb-3 d-block"></i>
                    <h6 class="mb-2">{{ $b[1] }}</h6>
                    <p class="text-ap-g small mb-0">{{ $b[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ONLINE COURSE — LIVE NOW --}}
<section id="online" class="course-promo-band">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6" data-aos="fade-right">
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge-soon">🟢 Now Live · Online Course</span>
                    <span style="display:inline-block;background:rgba(255,59,48,.18);color:#ff7066;border:1px solid rgba(255,59,48,.28);padding:4px 14px;border-radius:980px;font-size:.7rem;font-weight:800;">🔥 Early Bird — 40% Off</span>
                </div>
                <h2 class="sec-title text-white mb-3" style="line-height:1.1;">
                    Can't Come to Delhi?<br>
                    <span class="hero-gradient-text">Learn Apple Repair Online.</span>
                </h2>
                <p class="mb-4" style="color:rgba(255,255,255,.62); line-height:1.8;">
                    The same expertise Rajan teaches in Delhi is now available online — 40+ HD lessons,
                    live Q&amp;A, schematics library, and a community of 650+ working technicians.
                    Learn at your own pace, from anywhere in India.
                </p>

                {{-- Features grid --}}
                <div class="row g-3 mb-4">
                    @php
                    $onlineFeats = [
                        ['bi-play-circle-fill', '40+ HD Video Lessons',    'iPhone, MacBook &amp; iPad repair'],
                        ['bi-camera-video-fill','Live Q&amp;A (4×/month)', 'Ask Rajan anything directly'],
                        ['bi-download',         'Schematics Library',      'All Apple models covered'],
                        ['bi-patch-check-fill', 'iMaster Certificate',     'Recognised across India'],
                        ['bi-infinity',         'Lifetime Access',          'Free updates included always'],
                        ['bi-people-fill',      'Private Community',       '650+ active technicians'],
                    ];
                    @endphp
                    @foreach($onlineFeats as $of)
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-2" style="color:rgba(255,255,255,.72);">
                            <i class="bi {{ $of[0] }} text-ap-b flex-shrink-0 mt-1"></i>
                            <div>
                                <div class="fw-600 small">{!! $of[1] !!}</div>
                                <div style="font-size:.75rem; color:rgba(255,255,255,.45);">{!! $of[2] !!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Price + CTA --}}
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="{{ route('online-course') }}" class="btn-ap" style="padding:14px 32px; font-size:1rem;">
                        Enroll Now — ₹2,999 <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <div>
                        <span style="color:rgba(255,255,255,.4); text-decoration:line-through; font-size:.95rem;">₹4,999</span>
                        <span class="price-save ms-2">Save ₹2,000</span>
                    </div>
                </div>
                <p class="mt-3 mb-0" style="color:rgba(255,255,255,.35); font-size:.8rem;">
                    <i class="bi bi-shield-check me-1"></i>7-day money-back guarantee · 1,200+ students enrolled
                </p>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                {{-- Course preview card --}}
                <div class="rounded-ap overflow-h" style="box-shadow:0 32px 80px rgba(0,0,0,.55);">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22731c9c4c?w=600&q=85&fit=crop"
                         alt="iMaster Tech online Apple repair course preview"
                         style="width:100%; height:300px; object-fit:cover; display:block;">
                    <div style="background:rgba(0,0,0,.6); position:relative;">
                        <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) translateY(-150px);">
                            <div style="width:64px;height:64px;background:rgba(255,255,255,.9);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <i class="bi bi-play-fill text-ap-d" style="font-size:1.5rem;margin-left:4px;"></i>
                            </div>
                        </div>
                    </div>
                    <div style="background:var(--apple-dark); padding:1.25rem 1.5rem;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-white fw-700 small">Free Preview: Lesson 1</div>
                                <div style="color:rgba(255,255,255,.45); font-size:.75rem;">Introduction to Apple Repair — Tools & Safety</div>
                            </div>
                            <a href="{{ route('online-course') }}" class="btn-ap btn-sm-ap">Watch Free</a>
                        </div>
                    </div>
                </div>
                {{-- Social proof below card --}}
                <div class="d-flex justify-content-center gap-4 mt-3">
                    <div class="text-center">
                        <div style="color:#fff; font-weight:800; font-size:1.3rem;">★ 4.9</div>
                        <div style="color:rgba(255,255,255,.4); font-size:.72rem;">212 ratings</div>
                    </div>
                    <div style="width:1px; background:rgba(255,255,255,.15);"></div>
                    <div class="text-center">
                        <div style="color:#fff; font-weight:800; font-size:1.3rem;">1,200+</div>
                        <div style="color:rgba(255,255,255,.4); font-size:.72rem;">Students</div>
                    </div>
                    <div style="width:1px; background:rgba(255,255,255,.15);"></div>
                    <div class="text-center">
                        <div style="color:#fff; font-weight:800; font-size:1.3rem;">7-Day</div>
                        <div style="color:rgba(255,255,255,.4); font-size:.72rem;">Refund Policy</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- STUDENT TESTIMONIALS --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Student Success</span>
            <h2 class="sec-title mt-2">Our Alumni Are Thriving</h2>
        </div>
        <div class="row g-4">
            @php
            $alumni = [
                ['Neha Singh',     'Noida',      'bi-shop',        'Opened iRepair Noida — 3 staff, 150+ repairs/month within 6 months of graduating.'],
                ['Arjun Tiwari',   'Lucknow',    'bi-mortarboard', 'Started a repair service at home. Now earning ₹60K+/month. Batch of March 2023.'],
                ['Pooja Verma',    'Jaipur',     'bi-star',        'Completed the training and joined the largest Apple AASP in Rajasthan as senior technician.'],
            ];
            @endphp
            @foreach($alumni as $i => $a)
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="testi-card">
                    <i class="bi {{ $a[2] }} fs-2 text-ap-b mb-3 d-block"></i>
                    <p class="text-ap-g mb-4" style="line-height:1.75; font-size:.93rem;">"{{ $a[3] }}"</p>
                    <div class="fw-semibold">{{ $a[0] }}</div>
                    <div class="text-ap-g small">{{ $a[1] }}</div>
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
            <h2 class="sec-title text-white mb-3">Start Your Apple Repair Career Today</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.55); max-width:460px; margin:0 auto; font-size:1.05rem;">
                Limited seats in each batch. Next batch starts soon — secure your place now.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn-ap" style="padding:14px 32px;">Enroll Now</a>
                <a href="https://wa.me/919876543210?text=I%20want%20to%20enroll%20in%20the%20Apple%20repair%20training" target="_blank" rel="noopener" class="btn-ap-ghost" style="padding:14px 32px;">
                    <i class="bi bi-whatsapp me-2"></i>Ask on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
