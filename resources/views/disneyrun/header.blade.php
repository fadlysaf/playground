@push('style')
    <!-- Page-specific styles -->
    <link rel="stylesheet" href="{{ asset('assets/disneyrun/style.css') }}">

    <style>
        :root {
            --tropical-teal: #29B6C0;
            --steel-blue: #3885B9;
            --soft-fawn: #CFB47D;
            --punch-red: #EE2034;
            --metallic-gold: #CDAD5B;
            --primary-scarlet: #db212a;
            --parchment: #fbf7f1;
            --pacific-blue: #26a8be;
            --deep-space-blue: #153150;
            --baltic-blue: #3e6b98;
            --pale-oak: #cdb7a4;
            --golden-bronze: #cea94d;
            --lobster-pink: #d2716c;
            --white: #fdfdfc;
            --soft-linen: #e9eee5;
            --bright-marine: #0069ad;
            --tuscan-sun: #fbc656;
            --racing-red: #ed1c2a;
            --tropical-teal: #00b6c0;
            --silver: #c6c7c9;
            --gunmetal: #393d3f;
            --frozen-water: #25696A;
            --strawberry-red: #ee2f3c;
            --charcoal: #BFBACA;
        }

        .ornament-layer {
            position: absolute;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .deco {
            position: absolute;
            opacity: var(--op, .16);
            color: var(--dc, #ea0a2a);
            transform: rotate(var(--rot, 0deg)) scale(var(--scale, 1));
        }

        .deco-gold {
            color: var(--dc, #e0a83a);
        }

        .deco-twinkle {
            animation: deco-twinkle var(--dur, 3s) ease-in-out infinite;
            animation-delay: var(--delay, 0s);
        }

        .deco-bob {
            animation: deco-bob var(--dur, 5s) ease-in-out infinite;
            animation-delay: var(--delay, 0s);
        }

        .mesh-gradient-bg {
            background-color: var(--white);
            background-image:
                radial-gradient(at 20% 15%, color-mix(in srgb, var(--pacific-blue) 35%, transparent) 0px, transparent 50%),
                radial-gradient(at 80% 20%, color-mix(in srgb, var(--metallic-gold) 30%, transparent) 0px, transparent 50%),
                radial-gradient(at 75% 80%, color-mix(in srgb, var(--tropical-teal) 28%, transparent) 0px, transparent 50%),
                radial-gradient(at 20% 85%, color-mix(in srgb, var(--golden-bronze) 22%, transparent) 0px, transparent 50%),
                radial-gradient(at 50% 50%, color-mix(in srgb, var(--punch-red) 10%, transparent) 0px, transparent 60%);
        }

        .mesh-gradient-minimal {
            background-color: #fafafa;
            background-image:
                radial-gradient(at 15% 20%, color-mix(in srgb, var(--silver) 35%, transparent) 0px, transparent 55%),
                radial-gradient(at 85% 15%, color-mix(in srgb, var(--bright-marine) 18%, transparent) 0px, transparent 50%),
                radial-gradient(at 75% 80%, color-mix(in srgb, var(--tropical-teal) 15%, transparent) 0px, transparent 50%),
                radial-gradient(at 20% 85%, color-mix(in srgb, var(--tuscan-sun) 16%, transparent) 0px, transparent 50%),
                radial-gradient(at 50% 50%, color-mix(in srgb, var(--racing-red) 10%, transparent) 0px, transparent 60%);
        }

        .mesh-gradient-medal {
            background-color: var(--parchment);
            background-image:
                radial-gradient(at 12% 15%, color-mix(in srgb, var(--metallic-gold) 30%, transparent) 0px, transparent 55%),
                radial-gradient(at 88% 10%, color-mix(in srgb, var(--golden-bronze) 25%, transparent) 0px, transparent 50%),
                radial-gradient(at 90% 80%, color-mix(in srgb, var(--soft-fawn) 22%, transparent) 0px, transparent 55%),
                radial-gradient(at 10% 85%, color-mix(in srgb, var(--pale-oak) 20%, transparent) 0px, transparent 50%),
                radial-gradient(at 50% 45%, color-mix(in srgb, var(--baltic-blue) 8%, transparent) 0px, transparent 60%),
                radial-gradient(at 60% 90%, color-mix(in srgb, var(--tuscan-sun) 14%, transparent) 0px, transparent 45%);
        }

        .mesh-gradient-apply-cc {
            background-color: var(--parchment);
            background-image:
                radial-gradient(at 12% 15%, color-mix(in srgb, var(--steel-blue) 25%, transparent) 0px, transparent 55%),
                radial-gradient(at 88% 10%, color-mix(in srgb, var(--silver) 22%, transparent) 0px, transparent 50%),
                radial-gradient(at 90% 80%, color-mix(in srgb, var(--tropical-teal) 18%, transparent) 0px, transparent 55%),
                radial-gradient(at 10% 85%, color-mix(in srgb, var(--baltic-blue) 15%, transparent) 0px, transparent 50%),
                radial-gradient(at 50% 45%, color-mix(in srgb, var(--deep-space-blue) 8%, transparent) 0px, transparent 60%),
                radial-gradient(at 60% 90%, color-mix(in srgb, var(--lobster-pink) 10%, transparent) 0px, transparent 45%);
        }

        .mesh-gradient-card {
            position: relative;
            overflow: hidden;
            border-radius: 1.5rem;
            isolation: isolate;
            background-color: var(--white);
            background-image:
                radial-gradient(at 10% 20%, color-mix(in srgb, var(--baltic-blue) 10%, transparent) 0px, transparent 50%),
                radial-gradient(at 90% 15%, color-mix(in srgb, var(--punch-red) 14%, transparent) 0px, transparent 55%),
                radial-gradient(at 60% 90%, color-mix(in srgb, var(--deep-space-blue) 6%, transparent) 0px, transparent 60%);
        }

        .mesh-gradient-jersey {
            background-color: var(--strawberry-red);
            background-image:
                radial-gradient(at 50% 20%, color-mix(in srgb, var(--bright-marine) 55%, transparent) 0px, transparent 55%),
                radial-gradient(at 20% 80%, color-mix(in srgb, var(--tuscan-sun) 50%, transparent) 0px, transparent 55%),
                radial-gradient(at 80% 80%, color-mix(in srgb, var(--tropical-teal) 80%, transparent) 0px, transparent 60%);
        }

        .mesh-gradient-mark-your-calendar-alt {
            background-color: var(--gunmetal);
            background-image:
                radial-gradient(at 15% 20%, color-mix(in srgb, var(--racing-red) 70%, transparent) 0px, transparent 55%),
                radial-gradient(at 80% 10%, color-mix(in srgb, var(--punch-red) 65%, transparent) 0px, transparent 55%),
                radial-gradient(at 85% 75%, color-mix(in srgb, var(--tuscan-sun) 55%, transparent) 0px, transparent 55%),
                radial-gradient(at 20% 80%, color-mix(in srgb, var(--golden-bronze) 50%, transparent) 0px, transparent 55%),
                radial-gradient(at 50% 50%, color-mix(in srgb, var(--gunmetal) 40%, transparent) 0px, transparent 65%);
        }

        .deco-route {
            position: absolute;
            height: 0;
            border-top: 2px dashed currentColor;
            color: var(--dc, #ea0a2a);
            opacity: var(--op, .15);
            transform: rotate(var(--rot, 0deg));
        }

        .deco-route::after {
            content: "";
            position: absolute;
            top: -5px;
            right: -2px;
            width: 10px;
            height: 10px;
            border-radius: 9999px;
            background: currentColor;
        }

        /* Keep only simple icon ornaments; hide complex path/radar ornaments */
        .deco-dash,
        .deco-dash-slow,
        .deco-spin-slow,
        .deco-ping,
        .ornament-layer svg,
        .ornament-layer .fa-shoe-prints,
        .ornament-layer .fa-flag-checkered,
        .ornament-layer .fa-medal,
        .ornament-layer span.deco {
            display: none !important;
        }

        @keyframes deco-twinkle {

            0%,
            100% {
                opacity: calc(var(--op, .16) * .7);
            }

            50% {
                opacity: calc(var(--op, .16) * 1.25);
            }
        }

        @keyframes deco-bob {

            0%,
            100% {
                transform: rotate(var(--rot, 0deg)) translateY(0);
            }

            50% {
                transform: rotate(var(--rot, 0deg)) translateY(-6px);
            }
        }

        .blob {
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 9999px;
            filter: blur(35px);
            opacity: 0.65;
            will-change: transform;
            animation: blob-float 16s ease-in-out infinite;
            pointer-events: none;
        }

        .blob-1 {
            background: radial-gradient(circle, var(--punch-red) 0%, color-mix(in srgb, var(--punch-red) 65%, transparent) 35%, transparent 65%);
        }

        .blob-2 {
            background: radial-gradient(circle, var(--tropical-teal) 0%, color-mix(in srgb, var(--tropical-teal) 65%, transparent) 35%, transparent 65%);
            animation-delay: .8s;
        }

        .blob-3 {
            background: radial-gradient(circle, var(--metallic-gold) 0%, color-mix(in srgb, var(--metallic-gold) 65%, transparent) 35%, transparent 65%);
            animation-delay: 1.6s;
            animation-duration: 18s;
        }

        .blob-4 {
            background: radial-gradient(circle, var(--steel-blue) 0%, color-mix(in srgb, var(--steel-blue) 65%, transparent) 35%, transparent 65%);
            animation-delay: 2.4s;
            animation-duration: 14s;
        }

        .blob-5 {
            background: radial-gradient(circle, var(--soft-fawn) 0%, color-mix(in srgb, var(--soft-fawn) 65%, transparent) 35%, transparent 65%);
            animation-delay: 1.2s;
            animation-duration: 20s;
        }

        @keyframes blob-float {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(10px, -8px);
            }
        }

        @media (max-width: 768px) {
            .deco {
                opacity: calc(var(--op, .16) * .65) !important;
                transform: rotate(var(--rot, 0deg)) scale(.85) !important;
            }

            .deco-mobile-hide {
                display: none !important;
            }

            .blob {
                width: 220px !important;
                height: 220px !important;
                filter: blur(25px) !important;
                opacity: .55 !important;
            }
        }
    </style>
@endpush

<!-- ============ HEADER ============ -->
{{-- <header class="site-header">
    <div class="site-header__inner">
        <a href="https://www.ocbc.id/en" class="site-header__logo">
            <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                alt="OCBC Logo">
        </a>

        <nav class="site-header__nav">
            <a href="#kategori">Pre-Sale</a>
            <a href="#early-access">Early Access</a>
            <a href="#medal">Medal</a>
            <a href="#mark-your-calendar">Timeline</a>
            <a href="#info-lanjut">Informasi</a>
        </nav>

        <div style="display:flex; align-items:center; gap:14px;">
            <button onclick="openPresaleModal()" class="site-header__cta" style="cursor:pointer; border:none; display:inline-flex; align-items:center; gap:6px;">
                <i class="fa-solid fa-clock"></i> Pre-Sale Countdown
            </button>
            <button class="site-header__burger" id="mobileNavToggle" aria-label="Open menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header> --}}

<!-- Mobile nav drawer -->
{{-- <div class="mobile-nav" id="mobileNav">
    <div class="mobile-nav__panel">
        <button class="mobile-nav__close" id="mobileNavClose" aria-label="Close menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div style="clear:both; margin-top:40px;">
            <a href="#kategori">Pre-Sale</a>
            <a href="#early-access">Early Access</a>
            <a href="#medal">Medal</a>
            <a href="#mark-your-calendar">Timeline</a>
            <a href="#info-lanjut">Informasi</a>
            <button onclick="openPresaleModal(); document.getElementById('mobileNav').classList.remove('open');" class="primary-btn"
                style="width:100%; margin-top:16px; border:none; cursor:pointer;">
                <i class="fa-solid fa-clock mr-2"></i> Pre-Sale Countdown
            </button>
        </div>
    </div>
</div> --}}
