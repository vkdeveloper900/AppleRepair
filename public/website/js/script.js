/* =====================================================
   iMaster Tech — Custom JavaScript
   ===================================================== */

document.addEventListener('DOMContentLoaded', () => {

    /* ── Navbar: transparent → solid on scroll ─────── */
    const nav = document.getElementById('mainNav');
    if (nav) {
        const tick = () => nav.classList.toggle('scrolled', window.scrollY > 24);
        window.addEventListener('scroll', tick, { passive: true });
        tick();
    }

    /* ── Active nav link ────────────────────────────── */
    const path = window.location.pathname.replace(/\/$/, '') || '/';
    document.querySelectorAll('.navbar-nav .nav-link').forEach(el => {
        const href = el.getAttribute('href')?.replace(/\/$/, '') || '';
        if (href === path || (href.length > 1 && path.startsWith(href))) {
            el.classList.add('active');
        }
    });

    /* ── AOS (Animate On Scroll) ────────────────────── */
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 680, easing: 'ease-out-cubic', once: true, offset: 70 });
    }

    /* ── Swiper: Testimonials slider ────────────────── */
    if (document.querySelector('.sw-testi')) {
        new Swiper('.sw-testi', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: { delay: 4800, disableOnInteraction: false },
            pagination: { el: '.sw-testi .swiper-pagination', clickable: true },
            navigation: {
                nextEl: '.sw-testi .swiper-button-next',
                prevEl: '.sw-testi .swiper-button-prev',
            },
            breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
        });
    }

    /* ── Animated counters ──────────────────────────── */
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length) {
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el     = e.target;
                const target = +el.dataset.count;
                const suffix = el.dataset.suffix || '';
                const dur    = 1800;
                const step   = target / (dur / 16);
                let cur = 0;
                const id = setInterval(() => {
                    cur += step;
                    if (cur >= target) { cur = target; clearInterval(id); }
                    el.textContent = Math.floor(cur).toLocaleString('en-IN') + suffix;
                }, 16);
                io.unobserve(el);
            });
        }, { threshold: .55 });
        counters.forEach(c => io.observe(c));
    }

    /* ── Gallery filter ─────────────────────────────── */
    const filterBtns  = document.querySelectorAll('.gal-btn[data-filter]');
    const galItems    = document.querySelectorAll('[data-cat]');
    if (filterBtns.length) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const f = btn.dataset.filter;
                galItems.forEach(item => {
                    const show = f === 'all' || item.dataset.cat === f;
                    item.style.transition = 'opacity .28s ease';
                    item.style.opacity = show ? '1' : '0';
                    setTimeout(() => { item.style.display = show ? '' : 'none'; }, show ? 0 : 280);
                    if (show) { item.style.display = ''; setTimeout(() => { item.style.opacity = '1'; }, 10); }
                });
            });
        });
    }

    /* ── Mobile menu: close on link click ───────────── */
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const c = document.querySelector('#navMenu');
            if (c?.classList.contains('show')) bootstrap.Collapse.getInstance(c)?.hide();
        });
    });

    /* ── Contact form (UI only) ─────────────────────── */
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();
            const btn = form.querySelector('[type=submit]');
            const orig = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check-lg me-2"></i>Message Sent!';
            btn.style.background = '#34c759';
            btn.disabled = true;
            setTimeout(() => {
                btn.innerHTML = orig;
                btn.style.background = '';
                btn.disabled = false;
                form.reset();
            }, 3200);
        });
    }

    /* ── Smooth hash scrolling ──────────────────────── */
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const target = document.querySelector(a.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const top = target.getBoundingClientRect().top + window.scrollY - 80;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

});
