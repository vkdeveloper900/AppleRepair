@extends('website.layouts.app')

@section('title', '500+ Apple Repair Reviews New Delhi — 4.9 Stars | iMaster Tech')
@section('meta_desc', 'Read 500+ verified customer reviews of iMaster Tech. 4.9-star rated Apple repair & training centre in New Delhi. Trusted by customers across Delhi, NCR and India.')
@section('meta_keywords', 'iMaster Tech reviews, Apple repair reviews Delhi, iPhone repair reviews New Delhi, MacBook repair customer feedback, best Apple repair shop Delhi reviews')
@section('og_title', '500+ Customer Reviews — 4.9 Star Apple Repair | iMaster Tech New Delhi')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">Customer Reviews</span>
            <h1 class="sec-title mt-2">500+ Happy Customers &amp; Counting</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:500px;">
                Real customers, real repairs, real results. Read what Delhi NCR says about iMaster Tech.
            </p>
        </div>
    </div>
</div>

{{-- RATING OVERVIEW --}}
<section class="section-white">
    <div class="container">
        <div class="row justify-content-center g-4 text-center mb-5">
            @php
            $ratings = [
                ['4.9', '★', 'Overall Rating',     'Based on 500+ reviews'],
                ['98%', '',  'Would Recommend',    'To family and friends'],
                ['97%', '',  'Same-Day Satisfied', 'Repaired in under 2 hours'],
                ['100%','',  'Genuine Parts',      'Verified by customers'],
            ];
            @endphp
            @foreach($ratings as $i => $r)
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="{{ $i * 70 }}">
                <div class="p-4 rounded-4" style="background:var(--apple-bg);">
                    <div style="font-size:2.8rem; font-weight:800; letter-spacing:-0.04em; color:var(--apple-dark);">
                        {{ $r[0] }}<span style="color:var(--apple-yellow);">{{ $r[1] }}</span>
                    </div>
                    <div class="fw-700 small mt-1">{{ $r[2] }}</div>
                    <div class="text-ap-g" style="font-size:.78rem;">{{ $r[3] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- TESTIMONIALS GRID --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">What People Say</span>
            <h2 class="sec-title mt-2">Verified Customer Feedback</h2>
        </div>

        @php
        $reviews = [
            ['Priya Sharma',     'Marketing Manager',      'New Delhi',   5, 'Fixed my iPhone 14 Pro Max screen in under an hour. Looks absolutely factory new. The professionalism and cleanliness of the workshop is second to none. I will never go anywhere else.',   'iPhone 14 Pro Max Screen'],
            ['Amit Verma',       'Software Engineer',      'Gurgaon',     5, 'My MacBook Pro survived a full coffee spill thanks to Rajan. Complete water damage recovery — all my data intact, the machine runs perfectly. An absolute lifesaver for my work.',         'MacBook Pro Liquid Damage'],
            ['Neha Singh',       'iRepair Shop Owner',     'Noida',       5, 'Completed the 3-month offline training and now run my own Apple repair shop in Noida with 3 staff. Best investment I have ever made in my professional life. 100% recommend.',             'Training Batch Alumni'],
            ['Rahul Gupta',      'Business Owner',         'Faridabad',   5, "Three devices repaired over two years — iPhone 12, MacBook Air, and iPad Pro. Always genuine parts, always transparent pricing. I have recommended iMaster to at least 20 people.",         'Multiple Repairs'],
            ['Sonia Kapoor',     'School Teacher',         'New Delhi',   5, 'iPad Pro screen replacement done beautifully. They gave me a full cost breakdown before starting — zero surprises. The screen feels better than when I bought it. Highly recommend!',       'iPad Pro Screen'],
            ['Vikram Joshi',     'Technician (Alumni)',    'Mumbai',      5, 'Travelled from Mumbai for the offline training batch. The hands-on quality is unmatched anywhere in India. Rajan is patient, knowledgeable, and genuinely passionate about teaching.',       'Training Batch'],
            ['Ananya Bose',      'Graphic Designer',       'Delhi',       5, 'iPhone 13 camera replacement — done in 40 minutes. The photos are sharp again and the repair is seamless. Priced fairly and honestly. My go-to Apple repair spot in Delhi.',                 'iPhone 13 Camera'],
            ['Ravi Khanna',      'CA',                     'Noida',       5, 'Had an urgent MacBook battery issue before a big presentation. They fixed it same morning in 90 minutes. Unbelievable service. The 90-day warranty gave me complete peace of mind.',         'MacBook Battery Repair'],
            ['Meera Iyer',       'IT Professional',        'Bengaluru',   5, 'Sent my MacBook from Bangalore — they received it, fixed the keyboard, and couriered it back. Communication was excellent throughout. Trustworthy and highly professional.',                  'MacBook Keyboard (Remote)'],
            ['Karan Malhotra',   'Freelancer',             'Gurgaon',     5, 'AirPods Pro mic repaired — something Apple Store said was "beyond repair." Rajan fixed it in 2 days. I was speechless. Clearly knows Apple hardware at a microscopic level.',              'AirPods Pro Mic'],
            ['Divya Reddy',      'HR Manager',             'Hyderabad',   5, 'iPhone 12 water damage — Rajan saved all my 3 years of photos that I thought were gone forever. Free diagnosis, no surprise charges. Couldn\'t be more grateful.',                          'iPhone Water Damage'],
            ['Suresh Patel',     'Shop Owner (Alumni)',    'Ahmedabad',   5, 'Batch of June 2023. I\'m now running a successful repair shop in Ahmedabad. The business module in the last week alone was worth the entire course fee.',                                    'Training Alumni'],
        ];
        @endphp

        <div class="row g-4">
            @foreach($reviews as $i => $r)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 70 }}">
                <div class="testi-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="stars">{{ str_repeat('★', $r[3]) }}</div>
                        <span class="badge-soon" style="font-size:.7rem; background:rgba(0,113,227,.08); color:var(--apple-blue);">
                            {{ $r[5] }}
                        </span>
                    </div>
                    <p class="text-ap-g mb-4" style="font-size:.9rem; line-height:1.75;">"{{ $r[4] }}"</p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <div style="width:40px;height:40px;border-radius:50%;background:var(--apple-blue);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:.9rem;flex-shrink:0;">
                            {{ substr($r[0], 0, 1) }}
                        </div>
                        <div>
                            <div class="fw-semibold" style="font-size:.88rem;">{{ $r[0] }}</div>
                            <div class="text-ap-g" style="font-size:.76rem;">{{ $r[1] }} · {{ $r[2] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- VIDEO TESTIMONIAL PLACEHOLDER --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Video Reviews</span>
            <h2 class="sec-title mt-2">Watch Their Stories</h2>
        </div>
        <div class="row g-4 justify-content-center">
            @php
            $vids = [
                ['Neha Singh — Shop Owner Story', 'She turned a 3-month training course into a ₹1.5L/month business.'],
                ['Amit Verma — MacBook Liquid Damage', 'His MacBook came back from the dead — with all 4 years of work intact.'],
                ['Rajan Demo — Logic Board Repair', 'Watch Rajan perform component-level iPhone motherboard repair live.'],
            ];
            @endphp
            @foreach($vids as $i => $v)
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="rounded-ap overflow-h" style="background:var(--apple-dark); aspect-ratio:16/9; display:flex; flex-direction:column; align-items:center; justify-content:center; cursor:pointer; position:relative;">
                    <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center; margin-bottom:1rem;">
                        <i class="bi bi-play-fill text-white fs-3"></i>
                    </div>
                    <div class="text-white fw-600 text-center px-3 small">{{ $v[0] }}</div>
                    <div class="text-center px-3 mt-1" style="color:rgba(255,255,255,.5); font-size:.76rem;">{{ $v[1] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- LEAVE REVIEW --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="sec-title text-white mb-3">Happy With Your Repair?</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.55); max-width:440px; margin:0 auto; font-size:1.05rem;">
                Leave us a Google review and help other Apple users find reliable service.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="btn-ap" style="padding:14px 32px;">Leave a Google Review</a>
                <a href="{{ route('contact') }}" class="btn-ap-ghost" style="padding:14px 32px;">Book Your Repair</a>
            </div>
        </div>
    </div>
</section>

@endsection
