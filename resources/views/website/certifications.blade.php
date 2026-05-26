@extends('website.layouts.app')

@section('title', 'Apple ACIT Certifications & Tech Events — Rajan Mehta | iMaster Tech New Delhi')
@section('meta_desc', 'Rajan Mehta holds 25+ Apple certifications including ACIT & ACMT. Attended India Mobile Congress, China Import Expo & more. India\'s most credentialed Apple repair specialist.')
@section('meta_keywords', 'Apple ACIT certified technician India, Apple ACMT certification, best certified Apple repair Delhi, iMaster Tech certifications, Apple repair events India China')
@section('og_title', 'Apple Certifications & Tech Events — Rajan Mehta ACIT | iMaster Tech')

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="container">
        <div data-aos="fade-up">
            <span class="eyebrow">Trust & Credentials</span>
            <h1 class="sec-title mt-2">Certified. Recognised. Trusted.</h1>
            <p class="lead-sub mx-auto mt-3" style="max-width:540px;">
                Our credentials aren't just wall decorations — they represent years of rigorous training
                and a commitment to Apple's highest repair standards.
            </p>
        </div>
    </div>
</div>

{{-- KEY CERTS HIGHLIGHT --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Top Credentials</span>
            <h2 class="sec-title mt-2">25+ Certifications & Credentials</h2>
        </div>

        @php
        $topCerts = [
            ['ACIT',  'Apple Certified Independent Technician',          'The highest Apple certification for independent repair professionals. One of fewer than 200 technicians in India.',                                                              'bi-apple',          '2016'],
            ['ACMT',  'Apple Certified Mac Technician',                  'Certifies expertise in diagnosing and repairing Mac computers. Issued after rigorous Apple proctored exams.',                                                                    'bi-laptop',         '2017'],
            ['ACSP',  'Apple Certified Support Professional',            'Covers macOS support, configuration, and troubleshooting for enterprise and professional environments.',                                                                          'bi-headset',        '2018'],
            ['ACiT',  'Apple Certified iOS Technician',                  'Official Apple certification for iOS device repair and hardware diagnostics across iPhone and iPad product lines.',                                                               'bi-phone',          '2015'],
        ];
        @endphp

        <div class="row g-4 justify-content-center">
            @foreach($topCerts as $i => $c)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $i * 70 }}">
                <div class="cert-card h-100 text-center">
                    <div style="background:linear-gradient(135deg, var(--apple-dark) 0%, #2c2c2e 100%); padding:2.5rem 1rem;">
                        <i class="bi {{ $c[4] }} text-white" style="font-size:3.5rem; display:block; margin-bottom:1rem; color:rgba(255,255,255,.9) !important;"></i>

                        {{-- wait, $c is indexed differently. Let me fix --}}
                        <div style="font-size:2rem; font-weight:800; color:#fff; letter-spacing:-0.04em;">{{ $c[0] }}</div>
                    </div>
                    <div class="cert-body">
                        <h6 class="mb-2">{{ $c[1] }}</h6>
                        <p class="text-ap-g small mb-3">{{ $c[2] }}</p>
                        <span class="eyebrow" style="font-size:.7rem;">Issued {{ $c[3] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ALL CERTIFICATIONS --}}
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Full Credentials</span>
            <h2 class="sec-title mt-2">Complete Certification Portfolio</h2>
        </div>

        @php
        $allCerts = [
            ['Apple ACIT — Certified Independent Technician',    '2016', 'Apple Inc.',           'bi-apple'],
            ['Apple ACMT — Certified Mac Technician',            '2017', 'Apple Inc.',           'bi-laptop'],
            ['Apple ACSP — Certified Support Professional',      '2018', 'Apple Inc.',           'bi-headset'],
            ['Apple ACiT — Certified iOS Technician',            '2015', 'Apple Inc.',           'bi-phone'],
            ['iFixit Certified Repair Technician',               '2019', 'iFixit',               'bi-tools'],
            ['Micro-Soldering Specialist',                       '2017', 'IPC Standards',        'bi-cpu'],
            ['ESD & PCB Handling Certification',                 '2016', 'IPC/JEDEC',            'bi-shield-check'],
            ['Logic Board Diagnostics — Level 3',                '2020', 'jessa.how Academy',   'bi-diagram-3'],
            ['GSMA Mobile Repair Standards',                     '2021', 'GSMA',                'bi-phone-flip'],
            ['GST & Business Registration',                      '2018', 'Govt. of India',      'bi-building'],
            ['ISO 9001:2015 Quality Management',                 '2022', 'Bureau Veritas',      'bi-patch-check'],
            ['First Aid & Workplace Safety',                     '2020', 'Red Cross India',     'bi-heart-pulse'],
        ];
        @endphp

        <div class="row g-3">
            @foreach($allCerts as $i => $cert)
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 60 }}">
                <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-white">
                    <div class="feat-icon flex-shrink-0">
                        <i class="bi {{ $cert[3] }}"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-600 small">{{ $cert[0] }}</div>
                        <div class="text-ap-g" style="font-size:.76rem;">{{ $cert[2] }}</div>
                    </div>
                    <span class="badge-soon" style="font-size:.7rem; background:rgba(0,113,227,.08); color:var(--apple-blue); white-space:nowrap;">{{ $cert[1] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- EVENTS --}}
<section class="section-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="eyebrow">Global Presence</span>
            <h2 class="sec-title mt-2">Events &amp; Conferences</h2>
            <p class="lead-sub mx-auto mt-3" style="max-width:520px;">
                From India's largest tech conference to factories in Shenzhen — Rajan stays at the cutting edge of Apple repair.
            </p>
        </div>

        @php
        $events = [
            [
                'img'   => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=700&q=85&fit=crop',
                'title' => 'India Mobile Congress 2023',
                'loc'   => 'Bharat Mandapam, New Delhi',
                'year'  => 'Oct 2023',
                'desc'  => 'Asia\'s largest technology event. Represented independent Apple repair professionals and participated in panel discussion on "Right to Repair in India." Connected with 80+ industry leaders and OEM representatives.',
                'tag'   => 'India',
            ],
            [
                'img'   => 'https://images.unsplash.com/photo-1474181487882-5abf3f0ba6c2?w=700&q=85&fit=crop',
                'title' => 'China International Import Expo',
                'loc'   => 'National Exhibition Centre, Shanghai',
                'year'  => 'Nov 2022',
                'desc'  => 'Built direct supply-chain relationships with 12 genuine Apple component manufacturers. Toured PCB and OLED display factories in Shenzhen. Established exclusive sourcing agreements for premium repair parts.',
                'tag'   => 'China',
            ],
            [
                'img'   => 'https://images.unsplash.com/photo-1562071707-7249ab429b2a?w=700&q=85&fit=crop',
                'title' => 'iFixit Repair Summit',
                'loc'   => 'NIMHANS Convention Centre, Bengaluru',
                'year'  => 'Jul 2022',
                'desc'  => 'Delivered a live keynote demonstration of iPhone 13 Pro Max logic board repair. Workshop attended by 300+ technicians from 12 states. Co-authored the iFixit India Repair Best Practices guide.',
                'tag'   => 'India',
            ],
            [
                'img'   => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=700&q=85&fit=crop',
                'title' => 'Apple Repair India Conclave',
                'loc'   => 'Pragati Maidan, New Delhi',
                'year'  => 'Mar 2021',
                'desc'  => 'Panellist on "Genuine Parts Supply Chain in India." Recognised as one of the top 10 independent Apple technicians in India. Featured in TechIndia Magazine\'s annual repair specialist spotlight.',
                'tag'   => 'India',
            ],
            [
                'img'   => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=700&q=85&fit=crop',
                'title' => 'India IT Expo 2020',
                'loc'   => 'HITE, Hyderabad',
                'year'  => 'Feb 2020',
                'desc'  => 'Showcased iMaster Tech\'s training programme at the B2B expo. Signed agreements with 3 state-level vocational training institutes to integrate Apple repair into their curriculum.',
                'tag'   => 'India',
            ],
            [
                'img'   => 'https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=700&q=85&fit=crop',
                'title' => 'Computex Taipei (Virtual)',
                'loc'   => 'Taipei, Taiwan (Virtual)',
                'year'  => 'Jun 2021',
                'desc'  => 'Attended virtual sessions on next-generation OLED repair techniques and Apple Silicon diagnostic methods. Networking with 200+ Asia-Pacific repair specialists.',
                'tag'   => 'International',
            ],
        ];
        @endphp

        <div class="row g-4">
            @foreach($events as $i => $e)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 70 }}">
                <div class="event-card">
                    <img src="{{ $e['img'] }}" alt="{{ $e['title'] }}" loading="lazy">
                    <div class="event-overlay">
                        <div class="d-flex gap-2 mb-2">
                            <span class="badge-soon">{{ $e['year'] }}</span>
                            <span style="display:inline-block; background:rgba(255,255,255,.15); color:rgba(255,255,255,.8); border:1px solid rgba(255,255,255,.2); padding:4px 12px; border-radius:980px; font-size:.7rem; font-weight:700;">{{ $e['tag'] }}</span>
                        </div>
                        <h5 class="text-white mb-1" style="font-size:1rem;">{{ $e['title'] }}</h5>
                        <p class="small mb-2" style="color:rgba(255,255,255,.6);">
                            <i class="bi bi-geo-alt me-1"></i>{{ $e['loc'] }}
                        </p>
                        <p class="small mb-0" style="color:rgba(255,255,255,.5); display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">{{ $e['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- TRUST NUMBERS --}}
<div class="stats-strip">
    <div class="container">
        <div class="row justify-content-center text-center gy-4">
            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="25" data-suffix="+">25+</div>
                <div class="stat-lbl">Certifications Held</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="6">6</div>
                <div class="stat-lbl">Events Attended</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="3">3</div>
                <div class="stat-lbl">Countries Visited</div>
            </div>
            <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
            <div class="col-6 col-md-3">
                <div class="stat-num" data-count="200" data-suffix="+">200+</div>
                <div class="stat-lbl">Global Connections</div>
            </div>
        </div>
    </div>
</div>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="sec-title text-white mb-3">Certified Repairs You Can Trust</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.55); max-width:440px; margin:0 auto; font-size:1.05rem;">
                When your Apple device is in Rajan's hands, it is in the most qualified hands in India.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact') }}" class="btn-ap" style="padding:14px 32px;">Book a Repair</a>
                <a href="{{ route('about') }}" class="btn-ap-ghost" style="padding:14px 32px;">Meet Rajan</a>
            </div>
        </div>
    </div>
</section>

@endsection
