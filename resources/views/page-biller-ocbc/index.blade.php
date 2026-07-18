@extends('app')

@section('isOCBC', true)

@section('content')
    <section id="hero-section">
        <div class="hero-bg-image">
            <img src="https://images.unsplash.com/photo-1718427778421-ad719f965738?q=80&w=1511&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <div class="hero-content">
            <div class="title-banner">
                <h1>OCBC <span class="higlight-banner">#KartuWajibLiburan</span></h1>
            </div>
            <p class="desc-banner">
                Nikmati berbagai beragam promo bayar tagihan di OCBC mobile
            </p>
            <a href="" class="cta-button">
                Download OCBC mobile
            </a>
        </div>
    </section>
    <section id="promo">
        <div class="container">
            <div class="promo-header">
                <h1>Nikmati Promo Bayar Tagihan OCBC mobile</h1>
                <p class="promo-desc">Dapatkan promo menarik untuk persiapan liburan Anda dengan kartu OCBC.</p>
            </div>
            <div class="promo-tabs" role="tablist">
                <button class="btn-tab active-tab" role="tab" aria-selected="true" data-target="panel-global">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/333812/credit-card.svg" alt="Global Kredit">
                    </div>
                    <span class="floating-label">Global Kredit</span>
                </button>
                <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-90n">
                    <div class="tab-icon-wrapper">
                        <img src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Kartu Kredit 90°N">
                    </div>
                    <span class="floating-label">Kartu Kredit 90°N</span>
                </button>
            </div>

            <div class="promo-panel active-panel" id="panel-global" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_shell_973ba6d548.jpg"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback hingga Rp200 Ribu</h3>
                            <p class="brand-text">Shell</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_tokopedia_d8e3098080.jpg"
                                alt="Hemat Tokopedia">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp100 Ribu</h3>
                            <p class="brand-text">Tokopedia</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_shopee_c76750f262.jpg"
                                alt="Hemat Shopee">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp100 Ribu</h3>
                            <p class="brand-text">Shopee</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_oh_some_013a8be0d9.jpg"
                                alt="Cashback OH!SOME">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback hingga Rp50 Ribu</h3>
                            <p class="brand-text">OH!SOME</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_astro_05568555a6.jpg"
                                alt="Hemat Astro">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp25 Ribu</h3>
                            <p class="brand-text">Astro</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/sociolla_logo_e787b71854.jpg"
                                alt="Cashback Sociolla">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback 12% di Website & Aplikasi Sociolla</h3>
                            <p class="brand-text">Sociolla</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/superindo_logo_00df94c3be.jpg"
                                alt="Cashback Super Indo">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback 20% hingga Rp40 Ribu</h3>
                            <p class="brand-text">Super Indo</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_traveloka_9032184f23.jpg"
                                alt="Hemat Traveloka">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp450 Ribu</h3>
                            <p class="brand-text">Traveloka</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_qatar_airways_1be2e5bc0a.jpg"
                                alt="Hemat Qatar Airways">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 10% untuk pembelian tiket pesawat Qatar Airways</h3>
                            <p class="brand-text">Qatar Airways</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_takashimaya_06cb3a291e.jpg"
                                alt="Hemat Takashimaya">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 15% di Takashimaya SC Singapore</h3>
                            <p class="brand-text">Takashimaya</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-90n" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/wyndham_logo_32e953a0c8.webp"
                                alt="Hemat Club Wyndham Asia">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 65% untuk liburan ke Bali, Bangkok, dan Phuket</h3>
                            <p class="brand-text">Club Wyndham Asia</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/the_legian_logo_0342d4540d.webp"
                                alt="Hemat The Legian Bali">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 40%</h3>
                            <p class="brand-text">The Legian Bali</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/anatara_logo_4ae10deb75.webp"
                                alt="Menginap Anantara Vacation Club">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Menginap 4D3N di Bali/Thailand hanya Rp2,8 Juta</h3>
                            <p class="brand-text">Anantara Vacation Club</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/millenium_logo_8954211579.webp"
                                alt="Bonus Millennium Hotels and Resorts">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Bonus menginap 1 malam</h3>
                            <p class="brand-text">Millennium Hotels and Resorts</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/ascot_logo_35fc3e4393.webp"
                                alt="Hemat Ascott">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 20% | Stay 3 Pay 2 Nights</h3>
                            <p class="brand-text">Ascott</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/the_westin_logo_045e4275fe.webp"
                                alt="Hemat The Westin Resort Nusa Dua Bali">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 20%</h3>
                            <p class="brand-text">The Westin Resort Nusa Dua Bali</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/intercon_logo_8f5a97d9f8.webp"
                                alt="Hemat Intercontinental Bali Sanur Resort">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Intercontinental Bali Sanur Resort</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/swissbel_logo_269b93cc6a.webp"
                                alt="Hemat Swiss-belhotel International">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Swiss-belhotel International</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/le_meridien_logo_ec0d1f9bc5.webp"
                                alt="Hemat Le Meridien Bali jimbaran">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Le Meridien Bali jimbaran</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/mo_logo_b8435165ba.webp"
                                alt="Hemat Mandarin Oriental Jakarta">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 15% | Harga Spesial</h3>
                            <p class="brand-text">Mandarin Oriental Jakarta</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/klook_logo_dfbd0feeca.webp"
                                alt="Hemat Klook">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp185 Ribu</h3>
                            <p class="brand-text">Klook</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/twg_logo_93001ff77f.webp"
                                alt="Hemat TWG Tea">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">TWG Tea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="app-banner">
        <div class="app-container">
            <div class="app-layout">
                <div class="app-content-wrapper">
                    <h1 class="app-title">Buka Nyala Dapatkan Cashback hingga Rp1 Juta & Jadi #FinanciallyFIT!</h1>
                    <a href="#" class="app-link-info">Klik untuk info lengkap cashback</a>
                    <div class="app-download-buttons">
                        <a href="#" class="app-btn-store">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                alt="Get it on Google Play">
                        </a>
                        <a href="#" class="app-btn-store">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                alt="Download on the App Store">
                        </a>
                    </div>
                </div>
                <div class="app-image-wrapper">
                    <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/hp_b80c308612.png"
                        alt="Mockup Aplikasi Nyala" class="app-mockup">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('#promo .btn-tab');
            var panels = document.querySelectorAll('#promo .promo-panel');

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
@endpush
