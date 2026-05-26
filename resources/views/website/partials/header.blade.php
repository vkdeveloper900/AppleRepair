<nav class="navbar navbar-expand-lg fixed-top" id="mainNav" aria-label="Main navigation">
    <div class="container">

        {{-- Brand --}}
        <a class="navbar-brand nav-brand d-flex align-items-center gap-2" href="{{ route('home') }}" aria-label="iMaster Tech Home">
            <i class="bi bi-apple fs-5" aria-hidden="true"></i>
            iMaster<span>Tech</span>
        </a>

        {{-- Mobile toggle --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Links --}}
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('training') }}">Training</a></li>
                <li class="nav-item">
                    {{-- Online Course: highlighted with gradient + badge --}}
                    <a class="nav-link nav-course-link" href="{{ route('online-course') }}">
                        Online Course <span class="nav-badge-new" aria-label="New">New</span>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('testimonials') }}">Reviews</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('certifications') }}">Certs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('online-course') }}" class="btn-course-nav d-none d-lg-inline-flex">
                    <i class="bi bi-play-circle me-1" aria-hidden="true"></i> Enroll Now
                </a>
                <a href="{{ route('contact') }}" class="btn-ap btn-sm-ap">
                    Book Repair
                </a>
            </div>
        </div>

    </div>
</nav>
