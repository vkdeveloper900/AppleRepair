<footer>
    <div class="container">
        <div class="row g-4">

            {{-- Brand col --}}
            <div class="col-lg-4">
                <div class="footer-brand mb-1 d-flex align-items-center gap-2">
                    <i class="bi bi-apple"></i> iMasterTech
                </div>
                <p class="small mt-3" style="line-height:1.8; max-width:280px;">
                    New Delhi's most trusted Apple device repair &amp; training centre.
                    ACIT certified · Genuine parts · 12+ years of expertise.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="fs-5" style="color:rgba(255,255,255,.45);" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="fs-5" style="color:rgba(255,255,255,.45);" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="fs-5" style="color:rgba(255,255,255,.45);" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="fs-5" style="color:rgba(255,255,255,.45);" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            {{-- Quick links --}}
            <div class="col-6 col-lg-2">
                <h6>Company</h6>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('certifications') }}">Certifications</a>
                <a href="{{ route('gallery') }}">Gallery</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            {{-- Services --}}
            <div class="col-6 col-lg-2">
                <h6>Services</h6>
                <a href="{{ route('services') }}#iphone">iPhone Repair</a>
                <a href="{{ route('services') }}#macbook">MacBook Repair</a>
                <a href="{{ route('services') }}#ipad">iPad Repair</a>
                <a href="{{ route('services') }}#watch">Apple Watch</a>
                <a href="{{ route('services') }}#replacement">Replacement</a>
            </div>

            {{-- Training --}}
            <div class="col-6 col-lg-2">
                <h6>Training</h6>
                <a href="{{ route('training') }}">Offline Batch</a>
                <a href="{{ route('training') }}#online">Online Course</a>
                <a href="{{ route('testimonials') }}">Student Reviews</a>
                <a href="{{ route('contact') }}">Enroll Now</a>
            </div>

            {{-- Contact info --}}
            <div class="col-6 col-lg-2">
                <h6>Get In Touch</h6>
                <a href="tel:+919876543210"><i class="bi bi-telephone me-2"></i>+91 98765 43210</a>
                <a href="mailto:hello@imaster.in"><i class="bi bi-envelope me-2"></i>hello@imaster.in</a>
                <a href="https://wa.me/919876543210" target="_blank" rel="noopener"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
                <p class="small mt-2" style="color:rgba(255,255,255,.4); line-height:1.7;">
                    Shop 14, Nehru Place Market<br>New Delhi — 110019
                </p>
            </div>

        </div>

        <hr>

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
            <p class="small mb-0">© {{ date('Y') }} iMaster Tech. All rights reserved.</p>
            <p class="small mb-0">
                <a href="#" class="me-3">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </p>
        </div>
    </div>
</footer>
