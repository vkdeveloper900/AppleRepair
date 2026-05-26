<!DOCTYPE html>
<html lang="en-IN" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- ── Primary SEO Meta ─────────────────────── --}}
    <title>@yield('title', 'iMaster Tech — Apple Device Repair & Training New Delhi')</title>
    <meta name="description"  content="@yield('meta_desc',  'New Delhi\'s #1 Apple certified repair & training centre. iPhone, MacBook, iPad repair with genuine parts. 90-day warranty. ACIT certified. 12,000+ devices repaired.')">
    <meta name="keywords"     content="@yield('meta_keywords', 'Apple repair Delhi, iPhone repair Nehru Place, MacBook repair New Delhi, iPad repair Delhi, ACIT certified Apple technician India, Apple repair training course India, online Apple repair course')">
    <meta name="author"       content="iMaster Tech — Rajan Mehta">
    <meta name="robots"       content="@yield('robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">
    <meta name="theme-color"  content="#000000">
    <meta name="geo.region"   content="IN-DL">
    <meta name="geo.placename" content="New Delhi">
    <meta name="geo.position" content="28.5490;77.2500">
    <meta name="ICBM"         content="28.5490, 77.2500">

    {{-- ── Canonical ────────────────────────────── --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- ── Open Graph ───────────────────────────── --}}
    <meta property="og:type"        content="@yield('og_type', 'website')">
    <meta property="og:site_name"   content="iMaster Tech">
    <meta property="og:locale"      content="en_IN">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:title"       content="@yield('og_title', 'iMaster Tech — Apple Repair & Training New Delhi')">
    <meta property="og:description" content="@yield('meta_desc', 'New Delhi\'s #1 Apple certified repair & training centre.')">
    <meta property="og:image"       content="@yield('og_image', asset('website/img/og-imaster.jpg'))">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt"    content="iMaster Tech — Apple Device Repair & Training, New Delhi">

    {{-- ── Twitter Card ─────────────────────────── --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:site"        content="@imastertechdelhi">
    <meta name="twitter:creator"     content="@imastertechdelhi">
    <meta name="twitter:title"       content="@yield('og_title', 'iMaster Tech')">
    <meta name="twitter:description" content="@yield('meta_desc', 'New Delhi\'s most trusted Apple repair & training centre.')">
    <meta name="twitter:image"       content="@yield('og_image', asset('website/img/og-imaster.jpg'))">

    {{-- ── Global JSON-LD: LocalBusiness + Organization ─ --}}
    {{-- @verbatim prevents Blade parsing @context / @type / @id as directives --}}
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "LocalBusiness",
                "@id": "https://www.imaster.in/#business",
                "name": "iMaster Tech",
                "alternateName": "iMaster Tech — Apple Device Specialists",
                "description": "New Delhi's most trusted Apple device repair and training centre. ACIT certified technician, genuine parts, 90-day warranty.",
                "url": "https://www.imaster.in",
                "logo": "https://www.imaster.in/website/img/logo.png",
                "image": "https://www.imaster.in/website/img/og-imaster.jpg",
                "telephone": "+91-98765-43210",
                "email": "hello@imaster.in",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Shop 14, Level 2, Nehru Place Market",
                    "addressLocality": "New Delhi",
                    "addressRegion": "Delhi",
                    "postalCode": "110019",
                    "addressCountry": "IN"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 28.5490,
                    "longitude": 77.2500
                },
                "openingHoursSpecification": [
                    { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "10:00", "closes": "19:00" },
                    { "@type": "OpeningHoursSpecification", "dayOfWeek": "Saturday", "opens": "10:00", "closes": "18:00" },
                    { "@type": "OpeningHoursSpecification", "dayOfWeek": "Sunday",   "opens": "11:00", "closes": "16:00" }
                ],
                "priceRange": "₹₹",
                "currenciesAccepted": "INR",
                "paymentAccepted": "Cash, Credit Card, UPI, NEFT",
                "areaServed": ["New Delhi","Gurgaon","Noida","Faridabad","Ghaziabad","NCR"],
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "bestRating": "5",
                    "worstRating": "1",
                    "reviewCount": "500"
                },
                "sameAs": [
                    "https://www.instagram.com/imastertechdelhi",
                    "https://www.facebook.com/imastertechdelhi",
                    "https://www.youtube.com/@imastertechdelhi"
                ]
            },
            {
                "@type": "WebSite",
                "@id": "https://www.imaster.in/#website",
                "url": "https://www.imaster.in",
                "name": "iMaster Tech",
                "publisher": { "@id": "https://www.imaster.in/#business" },
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://www.imaster.in/services?q={search_term_string}",
                    "query-input": "required name=search_term_string"
                }
            }
        ]
    }
    </script>
    @endverbatim

    {{-- ── Page-level schema injected per view ──── --}}
    @stack('schema')

    {{-- ── Assets ───────────────────────────────── --}}
    <!-- Bootstrap 5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AOS – Animate on Scroll -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">

    @stack('styles')
</head>
<body>

    {{-- Top announcement bar (pushed from individual pages) --}}
    @stack('top_bar')

    @include('website.partials.header')

    <main id="main-content">
        @yield('content')
    </main>

    @include('website.partials.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919876543210?text=Hi%2C%20I%20need%20help%20with%20my%20Apple%20device"
       target="_blank" rel="noopener noreferrer"
       class="wa-float"
       aria-label="Chat with iMaster Tech on WhatsApp">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('website/js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>
