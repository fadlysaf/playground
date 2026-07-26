@extends('app')

@section('isOCBC', true)

@section('content')
    <section id="hero-section">
        <div class="hero-content">
            <div class="title-banner">
                <h1>Nikmati Beragam Promo <span class="higlight-banner">Bayar Tagihan</span> di <span
                        class="higlight-banner">OCBC mobile</span></h1>
            </div>

            <p class="desc-banner">
                Bayar tagihan jadi lebih hemat dengan berbagai promo menarik. Mulai dari listrik, air, internet, hingga
                tagihan lainnya, semuanya lebih praktis dalam satu aplikasi.
            </p>

            <a href="" class="cta-button">
                Download OCBC mobile
            </a>
        </div>

        <div class="hero-image-panel hero-bg-image">
            <img src="https://images.unsplash.com/photo-1586637383694-3ab1a6c70714?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="OCBC mobile app">
        </div>
    </section>
    <section id="promo-section">
        <div class="container">
            <div class="promo-header">
                <h1>Nikmati Promo Bayar Tagihan OCBC mobile</h1>
                <p class="promo-desc">Dapatkan promo menarik untuk persiapan liburan Anda dengan kartu OCBC.</p>
            </div>
            <div class="promo-tabs" role="tablist">
                <button class="btn-tab active-tab" role="tab" aria-selected="true" data-target="panel-topup">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/333812/credit-card.svg" alt="Global Kredit">
                    </div>
                    <span class="floating-label">Top Up</span>
                </button>
                <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-pulsa">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Kartu Kredit 90°N">
                    </div>
                    <span class="floating-label">Pulsa & Internet</span>
                </button>
                <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-tagihan">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Kartu Kredit 90°N">
                    </div>
                    <span class="floating-label">Tagihan Rumah</span>
                </button>
                <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-sosial">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Kartu Kredit 90°N">
                    </div>
                    <span class="floating-label">Publik & Sosial</span>
                </button>
                <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-lainnya">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Kartu Kredit 90°N">
                    </div>
                    <span class="floating-label">Lainnya</span>
                </button>
            </div>

            <div class="promo-panel active-panel" id="panel-topup" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <span class="promo-badge">NEW PROMO</span>
                            <img src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <small class="promo-category">Promo 1</small>
                            <h3 class="promo-title">Promo 1</h3>
                            <p class="promo-date">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-pulsa" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <span class="promo-badge">NEW PROMO</span>
                            <img src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <small class="promo-category">Promo 2</small>
                            <h3 class="promo-title">Promo 1</h3>
                            <p class="promo-date">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-tagihan" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <span class="promo-badge">NEW PROMO</span>
                            <img src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <small class="promo-category">Promo 3</small>
                            <h3 class="promo-title">Promo 1</h3>
                            <p class="promo-date">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-sosial" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <span class="promo-badge">NEW PROMO</span>
                            <img src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <small class="promo-category">Promo 4</small>
                            <h3 class="promo-title">Promo 1</h3>
                            <p class="promo-date">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-lainnya" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <span class="promo-badge">NEW PROMO</span>
                            <img src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <small class="promo-category">Promo 5</small>
                            <h3 class="promo-title">Promo 1</h3>
                            <p class="promo-date">Shell</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="step-by-step">
        <div class="step-container">
            <div class="section-title">CARA MUDAH PEMBAYARAN</div>
            <div class="section-subtitle">
                <span class="badge-red">Langkah Pembayaran</span> di OCBC mobile
            </div>
            <div class="step-layout">

                <div class="carousel-box">
                    <button class="carousel-btn prev-btn" data-dir="-1" aria-label="Sebelumnya">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <div class="carousel-track-wrapper">
                        <div class="carousel-track">
                            <img class="slide active-slide" data-slide="0"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 1">
                            <img class="slide" data-slide="1"
                                src="https://plus.unsplash.com/premium_vector-1775727731936-8920a9cf1921?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 2">
                            <img class="slide" data-slide="2"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 3">
                            <img class="slide" data-slide="3"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 4">
                            <img class="slide" data-slide="4"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 5">
                        </div>
                    </div>

                    <button class="carousel-btn next-btn" data-dir="1" aria-label="Selanjutnya">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

                <!-- STEP LIST -->
                <div class="step-list">
                    <div class="step-item active-step" data-step="0">
                        <div class="step-number">1</div>
                        <div class="step-text">Log in OCBC mobile, lalu pilih "Semua Menu"</div>
                    </div>
                    <div class="step-item" data-step="1">
                        <div class="step-number">2</div>
                        <div class="step-text">Klik menu "Tap Kartu Kredit" dan setujui syarat dan ketentuan aktivasi Tap
                            Kartu
                            Kredit</div>
                    </div>
                    <div class="step-item" data-step="2">
                        <div class="step-number">3</div>
                        <div class="step-text">Pilih Kartu Kredit OCBC sebagai sumber dana yang ingin Anda gunakan untuk
                            transaksi dengan Tap Kartu Kredit</div>
                    </div>
                    <div class="step-item" data-step="3">
                        <div class="step-number">4</div>
                        <div class="step-text">Klik tombol "Aktifkan" dan pastikan fitur NFC telah diaktifkan pada
                            pengaturan
                            Smartphone dan OCBC mobile telah dijadikan sebagai aplikasi utama untuk pembayaran nirsentuh
                            (contactless)</div>
                    </div>
                    <div class="step-item" data-step="4">
                        <div class="step-number">5</div>
                        <div class="step-text">Kartu berhasil diaktifkan dan sudah bisa digunakan untuk Tap Kartu Kredit
                        </div>
                    </div>
                </div>

                        </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('#promo-section .btn-tab');
            var panels = document.querySelectorAll('#promo-section .promo-panel');

            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    tabs.forEach(function(t) {
                        t.classList.remove('active-tab');
                        t.setAttribute('aria-selected', 'false');
                    });
                    panels.forEach(function(p) {
                        p.classList.remove('active-panel');
                    });

                    tab.classList.add('active-tab');
                    tab.setAttribute('aria-selected', 'true');
                    document.getElementById(tab.dataset.target).classList.add('active-panel');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var content = document.getElementById('region-content');
            var cards = document.querySelectorAll('.region-card');
            var prevBtn = document.querySelector('.region-arrow.prev');
            var nextBtn = document.querySelector('.region-arrow.next');
            cards.forEach(function(card) {
                card.addEventListener('click', function(e) {
                    if (e.target.closest('.region-btn')) return;
                    e.stopPropagation();
                    var flipped = card.classList.contains('is-flipped');
                    cards.forEach(function(c) {
                        c.classList.remove('is-flipped');
                    });
                    if (!flipped) card.classList.add('is-flipped');
                });
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.region-card')) {
                    cards.forEach(function(c) {
                        c.classList.remove('is-flipped');
                    });
                }
            });

            function scrollByCard(dir) {
                var card = content.querySelector('.region-card');
                var gap = 20;
                var distance = (card.offsetWidth + gap) * dir;
                content.scrollBy({
                    left: distance,
                    behavior: 'smooth'
                });
            }

            prevBtn.addEventListener('click', function() {
                scrollByCard(-1);
            });
            nextBtn.addEventListener('click', function() {
                scrollByCard(1);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var accordionHeaders = document.querySelectorAll('[data-accordion-target]');

            accordionHeaders.forEach(function(button) {
                button.addEventListener('click', function() {
                    var targetId = button.getAttribute('data-accordion-target');
                    var target = document.querySelector(targetId);
                    var icon = button.querySelector('[data-accordion-icon]');

                    var isExpanded = button.getAttribute('aria-expanded') === 'true';

                    // Collapse all other items in this accordion if data-accordion="collapse" is set
                    var accordionContainer = button.closest('[data-accordion]');
                    if (accordionContainer) {
                        var siblings = accordionContainer.querySelectorAll(
                            '[data-accordion-target]');
                        siblings.forEach(function(sibButton) {
                            if (sibButton !== button) {
                                sibButton.setAttribute('aria-expanded', 'false');
                                var sibTarget = document.querySelector(sibButton
                                    .getAttribute('data-accordion-target'));
                                if (sibTarget) sibTarget.classList.add('hidden');
                                var sibIcon = sibButton.querySelector(
                                    '[data-accordion-icon]');
                                if (sibIcon) sibIcon.classList.remove('rotate-180');
                            }
                        });
                    }

                    // Toggle current
                    if (isExpanded) {
                        button.setAttribute('aria-expanded', 'false');
                        if (target) target.classList.add('hidden');
                        if (icon) icon.classList.remove('rotate-180');
                    } else {
                        button.setAttribute('aria-expanded', 'true');
                        if (target) target.classList.remove('hidden');
                        if (icon) icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scope = document.getElementById('step-by-step');
            if (!scope) return;

            const track = scope.querySelector('.carousel-track');
            const slides = scope.querySelectorAll('.slide');
            const steps = scope.querySelectorAll('.step-item');
            const prevBtn = scope.querySelector('.prev-btn');
            const nextBtn = scope.querySelector('.next-btn');

            const total = slides.length;
            let current = 0;

            function goToStep(index) {
                current = (index + total) % total;

                if (track) {
                    track.style.transform = `translateX(-${current * 100}%)`;
                }

                slides.forEach(slide => {
                    slide.classList.toggle('active-slide', Number(slide.dataset.slide) === current);
                });

                steps.forEach(step => {
                    step.classList.toggle('active-step', Number(step.dataset.step) === current);
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => goToStep(current + Number(prevBtn.dataset.dir)));
            }
            if (nextBtn) {
                nextBtn.addEventListener('click', () => goToStep(current + Number(nextBtn.dataset.dir)));
            }

            steps.forEach(step => {
                step.addEventListener('click', () => goToStep(Number(step.dataset.step)));
            });
        });
    </script>
@endpush
