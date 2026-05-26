@extends('website.layouts.app')

@section('title', 'Online Apple Repair Course India — iPhone & MacBook Training | iMaster Tech')
@section('meta_desc', 'Join India\'s best online Apple repair course. 40+ HD video lessons on iPhone, MacBook & iPad repair. ACIT certified instructor. Certificate included. Enroll for ₹2,999. Limited early-bird seats.')
@section('meta_keywords', 'online Apple repair course India, iPhone repair course online, MacBook repair training online, Apple technician certification online, learn iPhone repair from home India, iMaster Tech online course')
@section('og_title',  'Online Apple Repair Course — iPhone & MacBook Training | iMaster Tech')
@section('og_type',   'product')
@section('canonical', url('/online-course'))

@push('schema')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Course",
    "name": "Online Apple Device Repair Course",
    "description": "India's most comprehensive online course for learning iPhone, MacBook and iPad repair. 40+ HD video lessons, live Q&A, certificate included. Taught by ACIT certified technician Rajan Mehta.",
    "url": "https://www.imaster.in/online-course",
    "image": "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&q=85",
    "provider": {
        "@type": "Organization",
        "name": "iMaster Tech",
        "url": "https://www.imaster.in",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "New Delhi",
            "addressCountry": "IN"
        }
    },
    "instructor": {
        "@type": "Person",
        "name": "Rajan Mehta",
        "jobTitle": "Apple Certified Independent Technician (ACIT)",
        "description": "12+ years experience, 12,000+ repairs, 650+ students trained"
    },
    "courseMode": "online",
    "educationalLevel": "Beginner to Advanced",
    "inLanguage": "hi-IN",
    "teaches": ["iPhone repair","MacBook repair","iPad repair","Logic board soldering","Apple device diagnostics"],
    "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "online",
        "offers": {
            "@type": "Offer",
            "price": "2999",
            "priceCurrency": "INR",
            "availability": "https://schema.org/LimitedAvailability",
            "priceValidUntil": "2025-12-31",
            "url": "https://www.imaster.in/online-course"
        }
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "212",
        "bestRating": "5"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Do I need any prior experience to join the online Apple repair course?",
            "acceptedAnswer": { "@type": "Answer", "text": "No experience needed. The course starts from absolute basics — tools, safety, Apple ecosystem — and builds up to advanced logic board repair." }
        },
        {
            "@type": "Question",
            "name": "Will I receive a certificate after completing the online course?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes. On passing the final assessment you receive an iMaster Tech completion certificate, recognised by repair shops and AASPs across India." }
        },
        {
            "@type": "Question",
            "name": "How long do I have access to the course after enrolling?",
            "acceptedAnswer": { "@type": "Answer", "text": "Lifetime access. Course videos, downloadable resources and community access never expire. Free updates included." }
        },
        {
            "@type": "Question",
            "name": "Is there a refund policy?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes — 7-day full refund guarantee, no questions asked, if you are not satisfied after watching the first module." }
        }
    ]
}
</script>
@endverbatim
@endpush

@push('top_bar')
<div class="announce-bar" role="alert">
    <i class="bi bi-lightning-charge-fill me-2"></i>
    <strong>Early Bird Offer:</strong> Enroll today at
    <span class="seats-left">₹2,999</span> — was <s>₹4,999</s>.
    Only <strong>23 seats</strong> left at this price.
    <a href="#enroll" class="ms-2">Grab yours →</a>
</div>
@endpush

@section('content')

{{-- ═══════════════════════════════════════
     COURSE HERO
═══════════════════════════════════════ --}}
<section class="course-hero py-5">
    <div class="container py-4">
        <div class="row align-items-start g-5">

            {{-- Left: Course info --}}
            <div class="col-lg-7" data-aos="fade-right">

                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb" style="background:transparent; padding:0;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,.45); font-size:.8rem;">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('training') }}" style="color:rgba(255,255,255,.45); font-size:.8rem;">Training</a></li>
                        <li class="breadcrumb-item active" style="color:rgba(255,255,255,.6); font-size:.8rem;" aria-current="page">Online Course</li>
                    </ol>
                </nav>

                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge-soon">Online · Self-Paced</span>
                    <span style="display:inline-block; background:rgba(255,59,48,.15); color:#ff7066; border:1px solid rgba(255,59,48,.25); padding:5px 14px; border-radius:980px; font-size:.72rem; font-weight:700;">🔥 Hot — 1,200+ Waitlist</span>
                </div>

                <h1 class="text-white mb-4" style="font-size:clamp(2rem, 4.5vw, 3.4rem); font-weight:800; letter-spacing:-0.04em; line-height:1.1;">
                    Master Apple Device Repair.<br>
                    <span class="hero-gradient-text">Learn Online. Earn from Day 1.</span>
                </h1>

                <p class="mb-4" style="color:rgba(255,255,255,.68); font-size:1.1rem; line-height:1.75; max-width:580px;">
                    India's most comprehensive online Apple repair course — taught by Rajan Mehta, one of fewer than 200
                    <strong style="color:#fff;">ACIT certified</strong> technicians in the country. Learn iPhone, MacBook &amp; iPad
                    repair from your home. Start earning within weeks of enrolling.
                </p>

                {{-- Social proof row --}}
                <div class="d-flex flex-wrap align-items-center gap-3 mb-5">
                    <div class="d-flex align-items-center gap-1">
                        <span style="color:var(--apple-yellow); font-size:1rem;">★★★★★</span>
                        <span style="color:#fff; font-weight:700; margin-left:4px;">4.9</span>
                        <span style="color:rgba(255,255,255,.45); font-size:.82rem;">(212 ratings)</span>
                    </div>
                    <div style="width:1px; height:16px; background:rgba(255,255,255,.18);"></div>
                    <span style="color:rgba(255,255,255,.55); font-size:.85rem;"><i class="bi bi-people me-1"></i>1,200+ enrolled</span>
                    <div style="width:1px; height:16px; background:rgba(255,255,255,.18);"></div>
                    <span style="color:rgba(255,255,255,.55); font-size:.85rem;"><i class="bi bi-patch-check me-1"></i>Certificate included</span>
                    <div style="width:1px; height:16px; background:rgba(255,255,255,.18);"></div>
                    <span style="color:rgba(255,255,255,.55); font-size:.85rem;"><i class="bi bi-translate me-1"></i>Hindi + English</span>
                </div>

                {{-- Quick feature pills --}}
                <div class="d-flex flex-wrap gap-2">
                    @php
                    $pills = ['40+ HD Video Lessons','Live Q&A Sessions','Lifetime Access','Downloadable Resources','Private Community','iMaster Certificate'];
                    @endphp
                    @foreach($pills as $p)
                    <span style="background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.15); color:rgba(255,255,255,.75); padding:5px 14px; border-radius:980px; font-size:.78rem; font-weight:500;">
                        <i class="bi bi-check-lg me-1" style="color:var(--apple-green);"></i>{{ $p }}
                    </span>
                    @endforeach
                </div>

            </div>

            {{-- Right: Price card --}}
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                <div class="price-card">

                    {{-- Course preview thumbnail --}}
                    <div class="rounded-3 overflow-h mb-4 position-relative">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22731c9c4c?w=600&q=85&fit=crop"
                             alt="Preview — iMaster Tech Online Apple Repair Course"
                             style="width:100%; height:200px; object-fit:cover; display:block;">
                        <div style="position:absolute;inset:0;background:rgba(0,0,0,.45);display:flex;align-items:center;justify-content:center;">
                            <div style="width:58px;height:58px;background:rgba(255,255,255,.9);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <i class="bi bi-play-fill text-ap-d" style="font-size:1.4rem;margin-left:4px;"></i>
                            </div>
                        </div>
                        <span style="position:absolute;top:10px;left:10px;" class="badge-soon">Free Preview</span>
                    </div>

                    {{-- Pricing --}}
                    <div class="d-flex align-items-baseline gap-3 mb-2">
                        <span class="price-main">₹2,999</span>
                        <span class="price-old">₹4,999</span>
                        <span class="price-save">Save 40%</span>
                    </div>

                    {{-- Timer --}}
                    <div class="price-timer mb-4">
                        <i class="bi bi-clock me-2" style="color:var(--apple-red);"></i>
                        <span style="color:var(--apple-red); font-weight:700; font-size:.85rem;">Early Bird price ends in 3 days</span>
                    </div>

                    <a href="#enroll" class="btn-ap w-100 justify-content-center mb-3" style="padding:16px; font-size:1.05rem;">
                        Enroll Now — ₹2,999 <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <p class="text-center text-ap-g mb-4" style="font-size:.8rem;">
                        <i class="bi bi-shield-check me-1 text-ap-b"></i>7-day money-back guarantee
                    </p>

                    {{-- What's included --}}
                    <div>
                        @php
                        $includes = [
                            ['bi-play-circle',    '40+ HD video lessons'],
                            ['bi-camera-video',   '4 live Q&A sessions / month'],
                            ['bi-download',       'All schematics & guides'],
                            ['bi-infinity',       'Lifetime access + free updates'],
                            ['bi-people',         'Private community (650+ members)'],
                            ['bi-patch-check',    'iMaster Tech certificate'],
                            ['bi-phone',          'Hindi + English dual language'],
                        ];
                        @endphp
                        @foreach($includes as $inc)
                        <div class="include-row">
                            <div class="check-circle"><i class="bi bi-check-lg"></i></div>
                            <span class="small" style="color:var(--apple-dark);">{{ $inc[1] }}</span>
                            <i class="bi {{ $inc[0] }} text-ap-g ms-auto" style="font-size:.85rem;"></i>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     COURSE STATS STRIP
═══════════════════════════════════════ --}}
<div class="stats-strip">
    <div class="container">
        <div class="row justify-content-center text-center gy-4">
            <div class="col-6 col-md-3">
                <div class="stat-num">40+</div>
                <div class="stat-lbl">HD Video Lessons</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="1200" data-suffix="+">0+</div>
                <div class="stat-lbl">Students Enrolled</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
            <div class="col-6 col-md-3">
                <div class="stat-num">4.9★</div>
                <div class="stat-lbl">Average Rating</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
            <div class="col-6 col-md-3">
                <div class="stat-num">7-Day</div>
                <div class="stat-lbl">Money-Back Guarantee</div>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════
     WHAT YOU WILL GET
═══════════════════════════════════════ --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Everything Included</span>
            <h2 class="sec-title mt-2">A Complete Apple Repair Education</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:560px;">
                This isn't a YouTube playlist. It's a structured, outcome-driven course designed to take you
                from zero to job-ready Apple technician.
            </p>
        </div>
        @php
        $features = [
            ['bi-play-circle-fill','40+ HD Video Lessons','Professionally shot, crystal-clear lessons covering every major repair on iPhone, MacBook and iPad. Watch at your own pace on any device.'],
            ['bi-camera-video-fill','Live Monthly Q&A','4 live sessions per month with Rajan. Ask anything — component identification, difficult cases, business advice. Recordings provided.'],
            ['bi-file-earmark-pdf-fill','Schematics & Board Views','Download the same professional schematics Rajan uses in his workshop. Available for iPhone 6 through 16 Pro Max.'],
            ['bi-infinity','Lifetime Access + Updates','Pay once, learn forever. Every new lesson, update and resource added to the course is yours at no extra cost.'],
            ['bi-people-fill','Private Student Community','650+ working technicians in our private group. Share cases, get help, find jobs, buy/sell parts — 24/7 active community.'],
            ['bi-patch-check-fill','Recognised Certificate','iMaster Tech completion certificate. Accepted at repair shops, AASPs and service centres across India as proof of training.'],
            ['bi-translate','Hindi + English','All lessons delivered in clear Hindi with English technical terms. Subtitles available for both languages.'],
            ['bi-tools','Tool &amp; Parts Guide','Curated list of tools and trusted parts suppliers. Know exactly what to buy before your first repair — no wasted money.'],
        ];
        @endphp
        <div class="row g-4">
            @foreach($features as $i => $f)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 55 }}">
                <div class="svc-card text-center h-100">
                    <div class="svc-icon mx-auto mb-3"><i class="bi {{ $f[0] }}"></i></div>
                    <h6 class="mb-2">{!! $f[1] !!}</h6>
                    <p class="text-ap-g small mb-0">{{ $f[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     CURRICULUM
═══════════════════════════════════════ --}}
<section class="section-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="eyebrow">Course Curriculum</span>
                    <h2 class="sec-title mt-2">40 Lessons Across 6 Modules</h2>
                    <p class="lead-sub mx-auto mt-3" style="max-width:500px;">
                        Structured from the ground up — tools &amp; safety in Week 1, advanced board repair by Week 10.
                    </p>
                </div>

                @php
                $modules = [
                    ['Module 1 — Foundation (4 Lessons)', 'Weeks 1–2', [
                        ['The Apple Ecosystem & Product Lines', true],
                        ['Tools Every Technician Must Own', true],
                        ['ESD Safety & Workspace Setup', false],
                        ['Reading Schematics & Board Views', false],
                    ]],
                    ['Module 2 — iPhone Repair (12 Lessons)', 'Weeks 3–5', [
                        ['Screen Assembly — All Models (6 to 16 Pro Max)', false],
                        ['Battery Replacement & Calibration', false],
                        ['Camera, Flash & Microphone Repair', false],
                        ['Face ID & Touch ID Diagnosis & Repair', false],
                        ['Water Damage Recovery Procedure', false],
                        ['iPhone Logic Board — Component Identification', false],
                        ['Soldering & Micro-Soldering on iPhone PCBs', false],
                    ]],
                    ['Module 3 — MacBook Repair (10 Lessons)', 'Weeks 6–7', [
                        ['Screen & LCD Replacement (Air & Pro)', false],
                        ['Keyboard & Trackpad Replacement', false],
                        ['Battery & SMC / NVRAM Reset', false],
                        ['SSD Upgrade & Data Cloning', false],
                        ['Liquid Damage Recovery — Step by Step', false],
                        ['MacBook Motherboard Voltage Testing', false],
                    ]],
                    ['Module 4 — iPad & Accessories (6 Lessons)', 'Weeks 8–9', [
                        ['iPad Screen Digitizer Replacement', false],
                        ['iPad Pro USB-C & Smart Connector', false],
                        ['Apple Watch Screen & Battery', false],
                        ['AirPods Pro — Mic, Driver & Charging Case', false],
                    ]],
                    ['Module 5 — Diagnostics & Software (4 Lessons)', 'Week 10', [
                        ['Using Apple Service Toolkit 2 (AST2)', false],
                        ['3uTools, iMazing & iTunes Restore', false],
                        ['DFU Mode, Recovery & Bypass Techniques', false],
                        ['Building Your Fault Diagnosis Framework', false],
                    ]],
                    ['Module 6 — Business & Career (4 Lessons)', 'Week 11', [
                        ['Setting Up Your Repair Business', false],
                        ['Pricing, Invoicing & GST Basics', false],
                        ['Sourcing Genuine & Quality Parts in India', false],
                        ['Final Assessment + Certificate', false],
                    ]],
                ];
                @endphp

                <div class="accordion curriculum-accordion" id="curriculumAccordion">
                    @foreach($modules as $mi => $mod)
                    <div class="accordion-item border rounded-3 mb-2 overflow-h" data-aos="fade-up" data-aos-delay="{{ $mi * 60 }}">
                        <h3 class="accordion-header">
                            <button class="accordion-button {{ $mi > 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mod{{ $mi }}">
                                <div class="d-flex justify-content-between w-100 me-3">
                                    <span>{{ $mod[0] }}</span>
                                    <span class="text-ap-g small fw-500 me-2">{{ $mod[1] }}</span>
                                </div>
                            </button>
                        </h3>
                        <div id="mod{{ $mi }}" class="accordion-collapse collapse {{ $mi === 0 ? 'show' : '' }}" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body pt-0">
                                @foreach($mod[2] as $li => $lesson)
                                <div class="curriculum-lesson">
                                    <div class="lesson-num">{{ $li + 1 }}</div>
                                    <i class="bi bi-play-circle text-ap-g flex-shrink-0"></i>
                                    <span>{{ $lesson[0] }}</span>
                                    @if($lesson[1])
                                    <span class="lesson-free">Free Preview</span>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     INSTRUCTOR
═══════════════════════════════════════ --}}
<section class="section-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 text-center" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=85&fit=crop&crop=face"
                     alt="Rajan Mehta — ACIT Certified Apple Technician & Course Instructor"
                     class="rounded-ap mx-auto"
                     style="max-width:300px; width:100%; aspect-ratio:1; object-fit:cover;">
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <span class="eyebrow">Your Instructor</span>
                <h2 class="sec-title mt-2 mb-1">Rajan Mehta</h2>
                <p class="text-ap-b fw-600 mb-3">Apple Certified Independent Technician (ACIT) · 12+ Years</p>
                <p class="lead-sub mb-4">
                    Rajan is one of fewer than 200 ACIT certified technicians in all of India.
                    He has personally repaired over 12,000 Apple devices, trained 650+ technicians across
                    18 states, and attended global tech events in India and China.
                    In this course, you get everything he knows — structured, clear, and actionable.
                </p>
                <div class="row g-3">
                    @php
                    $credList = [
                        ['bi-award',       '4 Apple Certifications', 'ACIT, ACMT, ACSP, ACiT'],
                        ['bi-tools',       '12,000+ Repairs',        'Every Apple product line'],
                        ['bi-mortarboard', '650+ Students',          'Across 18 Indian states'],
                        ['bi-globe2',      'International Speaker',  'India & China tech events'],
                    ];
                    @endphp
                    @foreach($credList as $c)
                    <div class="col-sm-6">
                        <div class="feat-item">
                            <div class="feat-icon"><i class="bi {{ $c[0] }}"></i></div>
                            <div>
                                <div class="fw-semibold small">{{ $c[1] }}</div>
                                <div class="text-ap-g" style="font-size:.76rem;">{{ $c[2] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     WHO IS THIS COURSE FOR
═══════════════════════════════════════ --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Is This Course for You?</span>
            <h2 class="sec-title mt-2">Perfect for These Three Profiles</h2>
        </div>
        @php
        $personas = [
            ['bi-person-plus', 'Complete Beginner', "Never opened a phone before? Perfect. We start with zero assumptions. You'll be doing your first screen replacement by Lesson 6.",
             ['No prior experience needed', 'Tools guide included', 'Start earning within weeks']],
            ['bi-shop', 'Aspiring Entrepreneur', "Want to open your own Apple repair shop or a side income from home? This course gives you the technical skills and the business blueprint to do it.",
             ['Business setup module included', 'Pricing & GST guidance', 'Parts sourcing support']],
            ['bi-arrow-up-circle', 'Existing Technician', "Already doing basic repairs but stuck on logic boards or MacBooks? Level up your skills with professional micro-soldering and advanced diagnostics.",
             ['Advanced board repair modules', 'Schematics library included', 'Direct access to Rajan in Q&A']],
        ];
        @endphp
        <div class="row g-4">
            @foreach($personas as $i => $p)
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="persona-card h-100">
                    <i class="bi {{ $p[0] }} fs-1 text-ap-b mb-3 d-block"></i>
                    <h5 class="mb-3">{{ $p[1] }}</h5>
                    <p class="text-ap-g small mb-4">{{ $p[2] }}</p>
                    <ul class="list-unstyled mb-0">
                        @foreach($p[3] as $item)
                        <li class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-ap-b" style="font-size:.8rem; flex-shrink:0;"></i>
                            <span class="small fw-500">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     STUDENT REVIEWS
═══════════════════════════════════════ --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Student Feedback</span>
            <h2 class="sec-title mt-2">What Early Students Are Saying</h2>
        </div>
        @php
        $courseReviews = [
            ['Pooja Iyer',     'Engineer, Chennai',    5, 'I had zero knowledge of phone repair. After Module 2 I fixed my own iPhone screen. By Module 4 I was charging friends for repairs. This course pays for itself fast.'],
            ['Saurabh Gupta',  'Unemployed → Techie', 5, 'Lost my job in 2024. Found this course, enrolled, completed in 8 weeks. Now running repairs from home earning ₹45K/month. Best ₹2,999 I ever spent.'],
            ['Anita Sharma',   'Homemaker, Delhi',     5, 'Hindi explanations made everything so clear. Rajan explains WHY, not just HOW. Live Q&A is gold — he answered every question I had in the sessions.'],
            ['Manish Tomar',   'Engineering Student',  5, 'Already knew basics but the logic board modules are next level. Rajan\'s board view explanations are better than anything I found on YouTube. Genuinely world-class.'],
            ['Reshma Nair',    'Salon Owner, Kochi',   5, 'Started as a side business fixing neighbours\' phones. Now I have a dedicated repair corner in my shop. The course content is practical, not theoretical fluff.'],
            ['Deepak Jaiswal', 'Shop Owner, Varanasi', 5, 'Was doing only screen replacements before. After this course I\'m doing water damage, battery and charging port — tripled my monthly revenue.'],
        ];
        @endphp
        <div class="row g-4">
            @foreach($courseReviews as $i => $r)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 70 }}">
                <div class="testi-card">
                    <div class="stars mb-3">{{ str_repeat('★', $r[2]) }}</div>
                    <p class="text-ap-g mb-4" style="font-size:.9rem; line-height:1.75;">"{{ $r[3] }}"</p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,#0071e3,#38bdf8);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;flex-shrink:0;">
                            {{ substr($r[0], 0, 1) }}
                        </div>
                        <div>
                            <div class="fw-semibold" style="font-size:.88rem;">{{ $r[0] }}</div>
                            <div class="text-ap-g" style="font-size:.76rem;">{{ $r[1] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     ENROLL / PRICING SECTION
═══════════════════════════════════════ --}}
<section id="enroll" class="section-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">

                <div class="text-center mb-5">
                    <span class="eyebrow">Enroll Today</span>
                    <h2 class="sec-title mt-2">One Payment. Lifetime Access.</h2>
                    <p class="lead-sub mx-auto mt-3" style="max-width:480px;">No subscription, no hidden fees. Pay once and keep the course forever.</p>
                </div>

                <div class="rounded-ap p-4 p-md-5 mb-4" style="background:var(--apple-dark); position:relative; overflow:hidden;">
                    <div style="position:absolute;width:300px;height:300px;background:radial-gradient(circle,rgba(0,113,227,.2) 0%,transparent 65%);top:-80px;right:-80px;pointer-events:none;"></div>
                    <div class="row align-items-center g-4">
                        <div class="col-md-7">
                            <div class="d-flex align-items-baseline gap-3 mb-2">
                                <span class="price-main" style="color:#fff;">₹2,999</span>
                                <span class="price-old">₹4,999</span>
                                <span class="price-save">40% off</span>
                            </div>
                            <p class="mb-4" style="color:rgba(255,255,255,.55);">Early Bird — valid for limited time only</p>
                            <div class="row g-2 mb-4">
                                @foreach($includes as $inc)
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2" style="color:rgba(255,255,255,.7);">
                                        <i class="bi bi-check-lg" style="color:var(--apple-green); flex-shrink:0;"></i>
                                        <span style="font-size:.82rem;">{{ $inc[1] }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-5">
                            <a href="#" class="btn-ap w-100 justify-content-center mb-3" style="padding:16px; font-size:1.05rem;">
                                Enroll Now — ₹2,999 <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="https://wa.me/919876543210?text=I%20want%20to%20join%20the%20online%20Apple%20repair%20course" target="_blank" rel="noopener" class="btn-ap-ghost w-100 justify-content-center mb-3" style="padding:14px;">
                                <i class="bi bi-whatsapp me-2"></i>Ask on WhatsApp
                            </a>
                            <p class="text-center mb-0" style="color:rgba(255,255,255,.4); font-size:.78rem;">
                                <i class="bi bi-shield-check me-1"></i>7-day money-back · Secure UPI / Card payment
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Guarantee --}}
                <div class="guarantee-badge" data-aos="fade-up">
                    <i class="bi bi-shield-check fs-1 text-ap-b mb-2 d-block"></i>
                    <h5 class="mb-2">7-Day Money-Back Guarantee</h5>
                    <p class="text-ap-g small mb-0" style="max-width:440px; margin:0 auto;">
                        Watch Module 1 in full. If you're not impressed, email us within 7 days
                        for a complete, no-questions-asked refund. Zero risk. Your trust matters more than the sale.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     FAQ
═══════════════════════════════════════ --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">FAQ</span>
            <h2 class="sec-title mt-2">Frequently Asked Questions</h2>
        </div>
        @php
        $faqs = [
            ['Do I need any prior experience?',                   'No experience required at all. The course starts with absolute basics — tools, safety, Apple product overview — and progressively builds to advanced logic board repair.'],
            ['What equipment or tools do I need?',               'We recommend a basic toolkit (₹1,500–₹2,500). Our tools guide lists exactly what to buy and where. You can start the first 2 modules without any tools.'],
            ['Is the course in Hindi or English?',               'Both. Lessons are delivered in clear Hindi with technical terms in English. Hindi and English subtitles are available on every lesson.'],
            ['How long does the course take to complete?',       'At 1–2 hours per day, most students complete the course in 8–10 weeks. Lifetime access means you can go at whatever pace works for you.'],
            ['Will I get a certificate?',                        'Yes. After passing the final assessment you receive an iMaster Tech Digital Certificate. This is recognised by repair shops and AASPs across India.'],
            ['How is the online course different from offline?', 'The offline batch is 3 months of in-person hands-on training in Delhi. The online course is self-paced video learning you can do from anywhere. Both lead to the iMaster certificate.'],
            ['Is there a refund policy?',                        '7-day full refund, no questions asked, if you watch Module 1 and are not satisfied. After 7 days, no refunds — but you keep lifetime access.'],
            ['Can I access the course on my phone?',             'Yes — the course platform works on any device: smartphone, tablet, laptop, or desktop. Download lessons for offline viewing on mobile.'],
        ];
        @endphp
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-2 overflow-h" data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 50 }}">
                        <h3 class="accordion-header">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-600" style="font-size:.93rem;" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="faq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-ap-g small" style="line-height:1.85;">{{ $faq[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     FINAL CTA
═══════════════════════════════════════ --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <span class="badge-soon mb-4 d-inline-block">🔥 23 Seats Left at Early Bird Price</span>
            <h2 class="sec-title text-white mb-3">
                Your Apple Repair Career<br>Starts Today.
            </h2>
            <p class="mb-5" style="color:rgba(255,255,255,.58); max-width:500px; margin:0 auto; font-size:1.1rem;">
                Join 1,200+ students who are already learning, earning, and building careers
                in Apple repair. One payment. Lifetime access. 7-day refund guarantee.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                <a href="#enroll" class="btn-ap" style="padding:16px 40px; font-size:1.05rem;">
                    Enroll Now — ₹2,999 <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="https://wa.me/919876543210?text=I%20want%20to%20join%20the%20online%20Apple%20repair%20course" target="_blank" rel="noopener" class="btn-ap-ghost" style="padding:16px 32px; font-size:1rem;">
                    <i class="bi bi-whatsapp me-2"></i>Ask on WhatsApp
                </a>
            </div>
            <p style="color:rgba(255,255,255,.35); font-size:.82rem;">
                <i class="bi bi-shield-check me-2"></i>7-day money-back guarantee &nbsp;·&nbsp;
                <i class="bi bi-lock me-2"></i>Secure payment via UPI / Card / Net Banking
            </p>
        </div>
    </div>
</section>

@endsection
