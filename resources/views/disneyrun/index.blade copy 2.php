@extends('app')

@section('header')
    @include('disneyrun.header')
@endsection

@section('footer')
    @include('disneyrun.footer')
@endsection

@section('content')
    {{--
        ============================================================
        ROUTE BACKGROUND ORNAMENT — ribbon rute sebagai layer background
        untuk mengisi whitespace di tiap section (bukan blob blur biasa).
        Semua style ditaruh inline di file ini, tidak menyentuh style.css.
        Class diprefix `rt-bg-` supaya tidak bentrok dengan `.route-*`
        yang sudah ada di style.css.
        ============================================================
    --}}
    <style>
        .rt-bg-host {
            --rt-red: #db212a;
            --rt-gold: #cdad5b;
            --rt-teal: #00b6c0;
            --rt-navy: #153150;
        }

        .rt-bg-layer {
            position: absolute;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .rt-bg-layer svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .rt-bg-path {
            fill: none;
            stroke-width: 3;
            stroke-linecap: round;
            opacity: .45;
        }

        .rt-bg-path-dots {
            fill: none;
            stroke: var(--rt-navy);
            stroke-width: 6;
            stroke-linecap: round;
            stroke-dasharray: .5 14;
            opacity: .15;
        }

        .rt-pin {
            position: absolute;
            width: 28px;
            height: 28px;
            border-radius: 999px;
            background: #fff;
            border: 2.5px solid var(--rt-red);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: var(--rt-red);
            box-shadow: 0 6px 14px rgba(21, 49, 80, .12);
            z-index: 1;
        }

        .rt-pin.is-gold {
            border-color: var(--rt-gold);
            color: var(--rt-gold);
        }

        .rt-pin.is-teal {
            border-color: var(--rt-teal);
            color: var(--rt-teal);
        }

        .rt-pin-ring {
            position: absolute;
            inset: -6px;
            border-radius: 999px;
            border: 1.5px solid currentColor;
            opacity: .5;
            animation: rt-ring-pulse 2.4s ease-out infinite;
        }

        @keyframes rt-ring-pulse {
            0% {
                transform: scale(.8);
                opacity: .5;
            }

            100% {
                transform: scale(1.7);
                opacity: 0;
            }
        }

        .rt-print {
            position: absolute;
            color: var(--rt-navy);
            opacity: .12;
            font-size: 15px;
            z-index: 1;
        }

        .rt-spark {
            position: absolute;
            color: var(--rt-gold);
            opacity: .45;
            animation: rt-twinkle 2.8s ease-in-out infinite;
            z-index: 1;
        }

        .rt-spark.d2 {
            animation-delay: .9s;
        }

        .rt-spark.d3 {
            animation-delay: 1.7s;
        }

        @keyframes rt-twinkle {

            0%,
            100% {
                opacity: .15;
                transform: scale(.85);
            }

            50% {
                opacity: .55;
                transform: scale(1.1);
            }
        }

        @media (max-width: 768px) {

            .rt-pin,
            .rt-print,
            .rt-spark {
                display: none;
            }

            .rt-bg-path,
            .rt-bg-path-dots {
                opacity: .3;
            }
        }
    </style>

    <div class="relative z-10 min-h-screen flex flex-col pt-16 md:pt-20">

        <section id="hero2" class="w-full flex flex-col items-center relative">
            <picture class="w-full">
                <source media="(min-width: 500px)"
                    srcset="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/new_main_kv_4ccac64805.jpg">
                <img src="https://www.ocbc.id/asset/media/Feature/Banner/Banner%20Nyala/disney-run-mobile.jpeg"
                    loading="eager" fetchpriority="high" decoding="async" alt="Disney Run 2026"
                    class="w-full h-auto block object-cover">
            </picture>

            <div class="absolute bottom-6 md:bottom-10 left-0 w-full flex justify-center px-4 z-10">
                <a href="#kategori" class="primary-btn">
                    Beli tiket di sini
                </a>
            </div>
        </section>

        {{--
            ============================================================
            ROUTE BACKGROUND — garis pendek per section, TIDAK saling
            terhubung satu sama lain. Tiap section punya svg + path-nya
            sendiri, diletakkan sebagai layer paling belakang (z-0) di
            balik card/konten section tersebut.
            ============================================================
        --}}

        <section id="category" class="rt-bg-host pt-8 px-4 md:px-8 border-t border-pink-50 relative z-10 overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 500" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradCategory" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#db212a" />
                            <stop offset="50%" stop-color="#cdad5b" />
                            <stop offset="100%" stop-color="#00b6c0" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 60,70 C 280,10 400,210 640,150 C 860,95 940,270 1180,210" />
                    <path class="rt-bg-path" stroke="url(#rtGradCategory)"
                        d="M 60,70 C 280,10 400,210 640,150 C 860,95 940,270 1180,210" />
                </svg>
            </div>
            <div class="rt-pin" style="top:6%; left:30%;">
                <div class="rt-pin-ring" style="color:var(--rt-red)"></div>
                <i class="fa-solid fa-flag"></i>
            </div>
            <i class="fa-solid fa-shoe-prints rt-print" style="top:14%; right:9%; transform:rotate(-8deg);"></i>

            <div class="max-w-6xl mx-auto relative">
                <div class="text-center max-w-3xl mx-auto mb-4">
                    <h2 class="text-black text-xl md:text-2xl font-bold general-red-text mb-4 reveal-element reveal-up">
                        Race category options
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-12 max-w-3xl mx-auto">
                    <div class="reveal-element reveal-up delay-100">
                        <div class="overflow-hidden rounded-2xl shadow-md border-2 border-pink-50 group">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/kategori_1k_eng_87e0a83105.jpg"
                                alt="1K"
                                class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                    <div class="reveal-element reveal-up delay-200">
                        <div class="overflow-hidden rounded-2xl shadow-md border-2 border-pink-50 group">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/kategori_5k_eng_c162912193.jpg"
                                alt="5K"
                                class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                    <div class="reveal-element reveal-up delay-300">
                        <div class="overflow-hidden rounded-2xl shadow-md border-2 border-pink-50 group">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/kategori_10k_eng_7fbea126d8.jpg"
                                alt="10K"
                                class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="kategori" class="rt-bg-host pb-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 580" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradKategori" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#00b6c0" />
                            <stop offset="50%" stop-color="#cdad5b" />
                            <stop offset="100%" stop-color="#db212a" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots"
                        d="M 1360,120 C 1180,25 1030,250 760,178 C 550,118 430,310 220,230 C 120,190 70,150 30,120" />
                    <path class="rt-bg-path" stroke="url(#rtGradKategori)"
                        d="M 1360,120 C 1180,25 1030,250 760,178 C 550,118 430,310 220,230 C 120,190 70,150 30,120" />
                    <path class="rt-bg-path-dots"
                        d="M 30,520 C 180,560 360,420 570,470 C 820,530 970,310 1230,360 C 1290,372 1340,420 1360,460" />
                    <path class="rt-bg-path" stroke="url(#rtGradKategori)"
                        d="M 30,520 C 180,560 360,420 570,470 C 820,530 970,310 1230,360 C 1290,372 1340,420 1360,460" />
                </svg>
            </div>
            <div class="rt-pin is-gold" style="top:12%; right:18%;">
                <div class="rt-pin-ring" style="color:var(--rt-gold)"></div>
                <i class="fa-solid fa-tag"></i>
            </div>
            <i class="fa-solid fa-shoe-prints rt-print" style="bottom:16%; left:7%; transform:rotate(10deg);"></i>

            <div class="max-w-6xl mx-auto relative z-10">
                <div class="text-center mb-10 reveal-element reveal-up">
                    <h2 class="text-black text-xl md:text-2xl font-bold general-red-text mb-3">
                        Disney Run Jakarta 2026 Ticket Price / Category
                    </h2>
                </div>

                <div class="disney-table-wrapper overflow-x-auto reveal-element reveal-up delay-200">
                    <table class="disney-table">
                        <thead>
                            <tr>
                                <th style="background-color: gray;">Category</th>
                                <th>Pre-sale<br><span class="text-sm">Ticket price* exclusive for OCBC
                                        customers,<br>transaction using Credit / Debit Card</span></th>
                                <th style="background-color: gray;">General Sale<br><small>Ticket price* for
                                        public,<br>transact with all payment method</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1K (Child / Adult)</td>
                                <td>Rp349.000</td>
                                <td class="general-red-text font-bold">Rp449.000</td>
                            </tr>
                            <tr>
                                <td>1K Family package: (1 Child + 1 Adult)</td>
                                <td>Rp649.000</td>
                                <td class="general-red-text font-bold">Rp749.000</td>
                            </tr>
                            <tr>
                                <td>5K</td>
                                <td>Rp449.000</td>
                                <td class="general-red-text font-bold">Rp549.000</td>
                            </tr>
                            <tr>
                                <td>10K</td>
                                <td>Rp499.000</td>
                                <td class="general-red-text font-bold">Rp599.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="pt-4 italic"><small>*the listed base price does not include additional charges such as taxes,
                        service fees, or transaction administration fees</small></p>

                <img loading="lazy" decoding="async"
                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/timeline_eng_072534c8cb.jpg"
                    class="w-full h-auto mt-8 rounded-2xl shadow-md" alt="Timeline">
            </div>
        </section>

        <section id="early-access" class="rt-bg-host pt-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 420" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradEarly" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#cdad5b" />
                            <stop offset="100%" stop-color="#db212a" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 120,50 C 380,120 620,-10 900,60 C 1080,105 1180,20 1300,55" />
                    <path class="rt-bg-path" stroke="url(#rtGradEarly)"
                        d="M 120,50 C 380,120 620,-10 900,60 C 1080,105 1180,20 1300,55" />
                </svg>
            </div>
            <i class="fa-solid fa-sparkles rt-spark" style="top:10%; right:10%; font-size:13px;"></i>
            <i class="fa-solid fa-star rt-spark d2" style="bottom:14%; left:8%; font-size:10px;"></i>
            {{-- Background blur blobs --}}
            <!-- <div class="pointer-events-none absolute inset-0 z-0">
                                                                                        <div class="blob blob-1" style="top: 3%; left: 2%;"></div>
                                                                                        <div class="blob blob-2" style="bottom: 3%; right: 2%;"></div>
                                                                                        <div class="blob blob-3" style="top: 25%; right: 15%;"></div>
                                                                                        <div class="blob blob-4" style="bottom: 15%; left: 10%;"></div>
                                                                                    </div> -->
            {{-- <div class="ornament-layer" aria-hidden="true">
                <svg class="deco deco-mobile-hide" style="top:8%; left:0; width:100%; height:120px; --op:.14;"
                    viewBox="0 0 1000 120" preserveAspectRatio="none" fill="none">
                    <path class="deco-dash" d="M0,70 C120,10 220,110 340,55 C440,10 520,90 620,50 C700,18 760,60 830,40"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
                </svg>
                <i class="fa-solid fa-shoe-prints deco deco-mobile-hide"
                    style="top:18%; left:4%; font-size:15px; --op:.16; --rot:-10deg;"></i>
                <i class="fa-solid fa-shoe-prints deco deco-mobile-hide"
                    style="top:24%; left:9%; font-size:15px; --op:.16; --rot:8deg;"></i>
                <i class="fa-solid fa-star deco deco-twinkle"
                    style="top:20%; right:22%; font-size:11px; --op:.3; --dur:3.1s;"></i>
                <i class="fa-solid fa-star deco deco-twinkle deco-gold"
                    style="top:12%; right:14%; font-size:16px; --op:.32; --dur:2.4s; --delay:.4s;"></i>
                <i class="fa-solid fa-wand-magic-sparkles deco deco-bob deco-gold"
                    style="top:16%; right:6%; font-size:22px; --op:.22; --dur:5s;"></i>
                <i class="fa-solid fa-star deco deco-twinkle deco-mobile-hide"
                    style="top:6%; right:9%; font-size:8px; --op:.28; --dur:2.8s; --delay:.9s;"></i>
                <i class="fa-solid fa-star deco deco-twinkle deco-mobile-hide"
                    style="top:2%; right:3%; font-size:10px; --op:.22; --dur:3.6s; --delay:.2s;"></i>
                <svg class="deco deco-mobile-hide" style="bottom:4%; left:14%; width:120px; --op:.1;"
                    viewBox="0 0 140 40" fill="none">
                    <path d="M0,20 Q35,0 70,20 T140,20" stroke="currentColor" stroke-width="2" stroke-dasharray="1 8"
                        stroke-linecap="round" />
                </svg>
            </div> --}}
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-12">
                    <h2 class="disney-font text-3xl md:text-4xl font-bold general-red-text mb-4 reveal-element reveal-up">
                        Get Early Access & secure your ticket!
                    </h2>
                    <p class="text-lg text-slate-600 font-medium reveal-element reveal-up delay-100">
                        Quota limited! For every new product open, Customers will secure Disney Run Jakarta 2026 ticket
                        with available category.
                    </p>
                    <br>
                    <p class="text-xl text-black md:text-2xl font-bold reveal-element reveal-up delay-100">Choose your
                        desire product & rewards:</p>
                </div>
            </div>
        </section>

        <section id="nyala-promo" class="rt-bg-host pb-8 px-4 md:px-8 mt-10 relative z-10 overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 460" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradNyala" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#db212a" />
                            <stop offset="100%" stop-color="#00b6c0" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 40,340 C 260,260 480,400 720,320 C 940,250 1100,370 1300,300" />
                    <path class="rt-bg-path" stroke="url(#rtGradNyala)"
                        d="M 40,340 C 260,260 480,400 720,320 C 940,250 1100,370 1300,300" />
                </svg>
            </div>
            <i class="fa-solid fa-shoe-prints rt-print" style="top:10%; left:5%; transform:rotate(-8deg);"></i>
            {{-- Background blur blobs (section level background) --}}
            {{-- <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-2" style="top: 5%; left: 2%;"></div>
                <div class="blob blob-5" style="bottom: 5%; right: 2%;"></div>
            </div> --}}
            <div class="max-w-6xl mx-auto relative z-10">
                <div class="bg-gradient-to-br from-red-50/80 via-pink-50/50 to-white/70 backdrop-blur-md rounded-3xl p-10 max-w-5xl mx-auto shadow-xl border border-red-100/60 relative"
                    style="margin-top: -20px;">
                    <div class="ornament-layer" aria-hidden="true">
                        <i class="fa-solid fa-star deco deco-twinkle deco-gold"
                            style="top:10px; right:14px; font-size:13px; --op:.3; --dur:2.9s;"></i>
                        <i class="fa-solid fa-star deco deco-twinkle deco-mobile-hide"
                            style="top:16px; right:34px; font-size:8px; --op:.25; --dur:3.5s; --delay:.5s;"></i>
                        <i class="fa-solid fa-wand-magic-sparkles deco deco-bob deco-mobile-hide"
                            style="bottom:12px; left:14px; font-size:16px; --op:.14; --dur:6s; --rot:-15deg;"></i>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center relative">

                        <div class="text-left reveal-element reveal-up">
                            <h2 class="text-3xl md:text-5xl font-bold general-red-text mb-3 leading-tight">
                                1. Discount 50%
                            </h2>
                            <h3 class="text-black text-2xl md:text-4xl font-semibold mb-4">
                                Apply OCBC Star Wars / 90&deg;N Credit Card
                            </h3>
                            <h3 class="text-black text-lg md:text-xl font-semibold mb-4">
                                Promo Code: <span class="general-red-text font-bold"><b>OCBCDISNEYRUNJKT</b></span>
                            </h3>

                            <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center mb-6">
                                <a href="https://www.ocbc.id/en/promo/2026/07/24/disney-run-promo-cc" target="_blank"
                                    class="primary-btn w-full sm:w-auto">
                                    <i class="fa-solid fa-circle-info mr-2"></i>
                                    More info
                                </a>
                                <a href="https://onboarding.ocbc.id/product/kartu-kredit-monoline?utm_source=OCBCDISNEYRUNJKT&utm_medium=&utm_campaignid=&utm_campaign=WEBSITE_DISNEYRUNJKT26_20260724&utm_content=&promo_referal=OCBCDISNEYRUNJKT&force=&promo_code=&sk=%25%25subskey%25%25"
                                    target="_blank" class="secondary-btn w-full sm:w-auto">
                                    Apply now
                                </a>
                            </div>

                            <p class="text-slate-600 text-base md:text-sm leading-relaxed">
                                * This program only applied for the new Credit Card OCBC customers. The discount will be
                                applied only if the credit card application is approved.</p>
                        </div>

                        <div class="reveal-element reveal-up delay-200 flex justify-center">
                            <div class="relative overflow-hidden w-full">
                                <img loading="lazy" decoding="async"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/credit_card_81c16916a0.png"
                                    alt="Kartu Kredit"
                                    class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="kategori2" class="rt-bg-host py-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 500" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradKategori2" x1="0" y1="0" x2="1"
                            y2="0">
                            <stop offset="0%" stop-color="#00b6c0" />
                            <stop offset="100%" stop-color="#cdad5b" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 60,420 C 300,340 550,470 850,380 C 1050,320 1200,420 1340,360" />
                    <path class="rt-bg-path" stroke="url(#rtGradKategori2)"
                        d="M 60,420 C 300,340 550,470 850,380 C 1050,320 1200,420 1340,360" />
                </svg>
            </div>
            {{-- <div class="rt-pin is-teal" style="bottom:10%; left:9%;">
                <div class="rt-pin-ring" style="color:var(--rt-teal)"></div>
                <i class="fa-solid fa-flag-checkered"></i>
            </div> --}}
            {{-- Background blur blobs --}}
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-5" style="top: 3%; left: 2%;"></div>
                <div class="blob blob-2" style="bottom: 3%; right: 2%;"></div>
            </div>
            <div class="ornament-layer" aria-hidden="true">
                <svg class="deco deco-dash-slow deco-mobile-hide" style="top:4px; left:6%; width:180px; --op:.14;"
                    viewBox="0 0 220 50" fill="none">
                    <path d="M0,30 Q55,0 110,25 T220,15" stroke="currentColor" stroke-width="2" stroke-dasharray="1 8"
                        stroke-linecap="round" />
                </svg>
                <i class="fa-solid fa-star deco deco-twinkle"
                    style="top:6px; right:6%; font-size:10px; --op:.3; --dur:3.2s;"></i>
                <i class="fa-solid fa-medal deco deco-mobile-hide deco-gold"
                    style="bottom:8px; left:3%; font-size:18px; --op:.1; --rot:-12deg;"></i>
            </div>
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-10 reveal-element reveal-up">
                    <h2 class="text-xl text-black md:text-2xl font-bold mb-3">
                        Ticket price you can get if your credit card successfully approved
                    </h2>
                </div>

                <div class="disney-table-wrapper overflow-x-auto reveal-element reveal-up delay-200">
                    <table class="disney-table">
                        <thead>
                            <tr>
                                <th style="background-color: gray;">Category</th>
                                <th>Early Access Credit Card<br><small>Ticket price* exclusive for new customers who
                                        applied OCBC Star Wars / 90&deg;N Credit Card & get approved</small></th>
                                <th style="background-color: gray;">Pre-sale<br><small>Ticket price* exclusive for OCBC
                                        customers, transaction using Credit / Debit Card</small></th>
                                <th style="background-color: gray;">General Sale<br><small>Ticket price* for public,
                                        transact with all payment method</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1K (Child / Adult)</td>
                                <td class="pink-bg">Rp174.500</td>
                                <td>Rp349.000</td>
                                <td class="general-red-text font-bold">Rp449.000</td>
                            </tr>
                            <tr>
                                <td>1K Family package: (1 Child + 1 Adult)</td>
                                <td class="pink-bg">Rp324.500</td>
                                <td>Rp649.000</td>
                                <td class="general-red-text font-bold">Rp749.000</td>
                            </tr>
                            <tr>
                                <td>5K</td>
                                <td class="pink-bg">Rp224.500</td>
                                <td>Rp449.000</td>
                                <td class="general-red-text font-bold">Rp549.000</td>
                            </tr>
                            <tr>
                                <td>10K</td>
                                <td class="pink-bg">Rp249.500</td>
                                <td>Rp499.000</td>
                                <td class="general-red-text font-bold">Rp599.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="pt-4 italic"><small>*the listed base price does not include additional charges such as taxes,
                        service fees, or transaction administration fees</small></p>
            </div>
        </section>

        <section id="apply-cc" class="rt-bg-host py-10 px-4 md:px-8 relative z-10 max-w-5xl mx-auto overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 520" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradApplyCC" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#cdad5b" />
                            <stop offset="100%" stop-color="#db212a" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 120,180 C 300,50 520,290 770,200 C 980,130 1110,20 1290,200" />
                    <path class="rt-bg-path" stroke="url(#rtGradApplyCC)"
                        d="M 120,180 C 300,50 520,290 770,200 C 980,130 1110,20 1290,200" />
                </svg>
            </div>
            <i class="fa-solid fa-shoe-prints rt-print" style="bottom:8%; right:6%; transform:rotate(6deg);"></i>
            {{-- Background blur blobs (section level background) --}}
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-1" style="top: 5%; right: 2%;"></div>
                <div class="blob blob-4" style="bottom: 5%; left: 2%;"></div>
            </div>
            <div class="max-w-6xl mx-auto relative z-10">
                <div
                    class="bg-gradient-to-br from-red-50/80 via-pink-50/50 to-white/70 backdrop-blur-md rounded-3xl p-6 md:p-12 shadow-xl border border-red-100/60 text-center relative">
                    <div class="ornament-layer" aria-hidden="true">
                        <i class="fa-solid fa-flag-checkered deco deco-mobile-hide"
                            style="top:14px; right:16px; font-size:22px; --op:.1; --rot:14deg;"></i>
                        <span class="deco deco-mobile-hide"
                            style="top:20px; left:10%; width:6px; height:6px; border-radius:2px; background:currentColor; --dc:#ea0a2a; --op:.3; --rot:20deg;"></span>
                        <span class="deco deco-mobile-hide"
                            style="top:34px; left:16%; width:5px; height:5px; border-radius:9999px; background:currentColor; --dc:#e0a83a; --op:.35;"></span>
                        <span class="deco"
                            style="bottom:16px; right:10%; width:6px; height:6px; border-radius:2px; background:currentColor; --dc:#e0a83a; --op:.3; --rot:-15deg;"></span>
                        <i class="fa-solid fa-star deco deco-twinkle deco-mobile-hide"
                            style="bottom:24px; left:6%; font-size:9px; --op:.28; --dur:3.4s;"></i>
                        <i class="fa-solid fa-stopwatch deco deco-mobile-hide"
                            style="top:18px; left:14%; font-size:14px; --op:.1; --rot:-10deg;"></i>
                        <div class="deco-route deco-mobile-hide"
                            style="bottom:36px; left:8%; width:110px; --op:.1; --rot:4deg;"></div>
                    </div>

                    <div class="max-w-3xl mx-auto mb-10 reveal-element reveal-up relative">
                        <h2 class="text-black text-xl md:text-3xl font-bold general-red-text mb-3 leading-tight">
                            2. Open product saving (TANDA HADIAH) in OCBC mobile and get:
                        </h2>
                    </div>

                    {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-4 max-w-3xl mx-auto">
                        <div class="overflow-hidden rounded-xl mb-4 bg-white/80 backdrop-blur-sm shadow-md">
                            <img loading="lazy" decoding="async" src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/cashback_175_eng_60118d16d6.jpg"
                                alt="Benefit Cashback"
                                class="w-full rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="overflow-hidden rounded-xl mb-4 bg-white/80 backdrop-blur-sm shadow-md">
                            <img loading="lazy" decoding="async" src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/tiket_440_eng_c655fc80f0.jpg"
                                alt="Cicilan 0 Persen"
                                class="w-full rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="overflow-hidden rounded-xl mb-4 bg-white/80 backdrop-blur-sm shadow-md">
                            <img loading="lazy" decoding="async" src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/gratis_tiket_eng_546fa4fa3c.jpg"
                                alt="Welcome Bonus"
                                class="w-full rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                    </div> --}}

                    <div class="max-w-4xl mx-auto mb-8 reveal-element reveal-up delay-200">
                        <p class="text-slate-500 text-lg">Every 1 placement of TANDA Hadiah, customers will get
                            e-voucher discount from pre-sale price & ticket secured based on the available category &
                            program scheme that customers choose.</p>
                    </div>

                    <div
                        class="flex flex-col sm:flex-row gap-4 justify-center items-center reveal-element reveal-scale delay-300">
                        <a href="https://www.ocbc.id/en/promo/2026/07/23/disney-run-tanda-hadiah" target="_blank"
                            class="primary-btn w-full sm:w-auto">
                            <i class="fa-solid fa-circle-info mr-2"></i>
                            More info
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- MEDAL SECTION -->
        <section class="rt-bg-host medal-section mesh-gradient-minimal bg-red-50 medal-wrap mt-0 mb-0 relative overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 560" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradMedal" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#db212a" />
                            <stop offset="100%" stop-color="#cdad5b" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 80,240 C 260,80 430,330 720,220 C 980,120 1150,40 1320,220" />
                    <path class="rt-bg-path" stroke="url(#rtGradMedal)"
                        d="M 80,240 C 260,80 430,330 720,220 C 980,120 1150,40 1320,220" />
                </svg>
            </div>
            <div class="rt-pin is-gold" style="top:5%; left:8%;">
                <div class="rt-pin-ring" style="color:var(--rt-gold)"></div>
                <i class="fa-solid fa-medal"></i>
            </div>
            {{-- <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-3" style="top: 3%; left: 2%;"></div>
                <div class="blob blob-2" style="bottom: 3%; right: 2%;"></div>
            </div> --}}

            <!-- 1. TEXT — always on top -->
            <div class="text-center max-w-2xl mx-auto mb-10 relative">
                <h2 class="text-3xl md:text-5xl font-extrabold text-black leading-tight">
                    A Medal to Celebrate your Magical Moment
                </h2>
            </div>

            <div class="medal-list-container mt-8">
                <div class="medal-list">

                    <div class="medal-item">
                        <div class="medal-img-wrapper">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/1_d948a2fec8.png"
                                alt="Medali 1K">
                        </div>
                        <div class="medal-details">
                            <span class="medal-name">1K Child / Adult & Family Package</span>
                        </div>
                    </div>

                    <div class="medal-item">
                        <div class="medal-img-wrapper">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/2_ef67896188.png"
                                alt="Medali 5K">
                        </div>
                        <div class="medal-details">
                            <span class="medal-name">5K Run</span>
                        </div>
                    </div>

                    <div class="medal-item">
                        <div class="medal-img-wrapper">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/3_882abd921e.png"
                                alt="Medali 10K">
                        </div>
                        <div class="medal-details">
                            <span class="medal-name">10K Run</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- 3. VIDEO — landscape on desktop, portrait on mobile -->
            <div class="video-wrap video-wrap--normal hidden sm:block">
                <iframe class="js-lazy-video" data-src="https://www.youtube.com/embed/VIDEO_ID_HERE" loading="lazy"
                    title="Disney Run Jakarta 2026"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <div class="video-wrap video-wrap--short block sm:hidden">
                <iframe class="js-lazy-video" data-src="https://www.youtube.com/embed/SHORT_VIDEO_ID_HERE" loading="lazy"
                    title="Disney Run Shorts"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section>

        <section id="promo-jersey" class="rt-bg-host max-w-6xl mx-auto my-0 relative overflow-hidden">
            <div class="rt-bg-layer" aria-hidden="true">
                <svg viewBox="0 0 1400 500" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="rtGradJersey" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#00b6c0" />
                            <stop offset="100%" stop-color="#db212a" />
                        </linearGradient>
                    </defs>
                    <path class="rt-bg-path-dots" d="M 60,210 C 260,40 500,290 800,180 C 1020,100 1180,220 1340,150" />
                    <path class="rt-bg-path" stroke="url(#rtGradJersey)"
                        d="M 60,210 C 260,40 500,290 800,180 C 1020,100 1180,220 1340,150" />
                </svg>
            </div>
            <i class="fa-solid fa-shoe-prints rt-print" style="top:8%; right:8%; transform:rotate(-6deg);"></i>
            <!-- Background blur blobs (section level background) -->
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-5" style="top: 5%; right: 5%;"></div>
                <div class="blob blob-3" style="bottom: 5%; left: 5%;"></div>
            </div>
            <div class="rounded-3xl border-2 p-8 md:p-12 flex flex-col md:flex-row items-start md:items-center justify-between gap-8 relative backdrop-blur-md"
                style="background: linear-gradient(135deg, #3885B9 0%,  #EE2034 50%,#BD3629 100%);">

                <div class="text-content flex-1 z-10 w-full">
                    <h2
                        class="text-3xl md:text-4xl font-extrabold text-white mb-4 md:mb-8 leading-tight text-left drop-shadow-sm">
                        Official Disney Run Jakarta 2026 Race Jersey
                    </h2>
                    <div class="text-left">
                        <p class="text-white/95 text-sm md:text-base leading-relaxed mb-2">
                            Every participant will receive an official race jersey & may select their preferred jersey
                            size (child/adult) starting on:
                        </p>
                        <ul class="list-disc list-inside text-white/95 text-sm md:text-base space-y-1 text-left">
                            <li>5th September for pre-sale</li>
                            <li>10th September for general sale</li>
                        </ul>
                    </div>
                </div>

                <div class="flex-1 flex justify-start md:justify-center items-start relative z-10 w-full">
                    <div
                        class="image-wrapper bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-0 border border-white/50 w-full max-w-md md:max-w-lg">
                        <div class="w-full">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/Jersey_Disney_Run_2026_251c277eeb.webp"
                                alt="Jersey Disney Run 2026 Front" class="w-full h-auto object-cover rounded-2xl">
                        </div>
                    </div>
                </div>

                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
            </div>
        </section>

        <!-- ============ MARK YOUR CALENDAR ============ -->
        <section id="mark-your-calendar" class="max-w-6xl mt-10 mx-auto my-0 px-4 relative overflow-hidden">
            <!-- Background blur blobs (section level background) -->
            <!-- <div class="pointer-events-none absolute inset-0 z-0">
                                                                                        <div class="blob blob-4" style="top: 5%; left: 2%;"></div>
                                                                                        <div class="blob blob-1" style="bottom: 5%; right: 2%;"></div>
                                                                                    </div> -->
            <div
                class="rt-bg-host relative rounded-3xl border-2 border-white p-8 md:p-14 shadow-[0_15px_40px_rgba(200,16,46,0.10)]">
                <i
                    class="fa-solid fa-flag-checkered absolute top-6 right-6 text-[#ea0a2a] opacity-10 text-5xl rotate-12"></i>
                {{-- Route background: menerus dari kartu "Race Pack Collection" ke "Race Day" --}}
                <div class="rt-bg-layer" aria-hidden="true">
                    <svg viewBox="0 0 1200 400" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="rtGradCalendar" x1="0" y1="0" x2="1"
                                y2="0">
                                <stop offset="0%" stop-color="#db212a" />
                                <stop offset="50%" stop-color="#cdad5b" />
                                <stop offset="100%" stop-color="#00b6c0" />
                            </linearGradient>
                        </defs>
                        <path class="rt-bg-path-dots"
                            d="M -30,60 C 160,10 240,140 420,90 C 620,40 700,180 900,120 C 1030,86 1120,150 1230,110" />
                        <path class="rt-bg-path" stroke="url(#rtGradCalendar)"
                            d="M -30,60 C 160,10 240,140 420,90 C 620,40 700,180 900,120 C 1030,86 1120,150 1230,110" />
                    </svg>
                </div>
                <i class="fa-solid fa-sparkles rt-spark" style="top:8%; left:6%; font-size:12px;"></i>
                <i class="fa-solid fa-star rt-spark d2" style="bottom:12%; right:8%; font-size:9px;"></i>

                <!-- heading -->
                <div class="relative z-10 text-center mb-10 md:mb-14">
                    <span
                        class="inline-block text-xs md:text-sm font-extrabold tracking-[0.25em] text-[#ea0a2a] uppercase mb-3">
                        Save the date
                    </span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                        Mark Your Calendar!</h2>
                </div>

                <!-- race route timeline: pack collection -> race day -->
                <div class="relative z-10 grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] gap-6 md:gap-0 items-center">

                    <!-- Race Pack Collection -->
                    <div
                        class="bg-white/70 backdrop-blur-sm rounded-2xl md:rounded-none md:bg-transparent md:backdrop-blur-0 p-6 md:p-0 md:pr-10 text-center md:text-right">
                        <div class="flex items-center justify-center md:justify-end gap-3 mb-5">
                            <h3 class="text-lg md:text-xl font-bold text-gray-900 order-2 md:order-1">Race Pack
                                Collection</h3>
                            <span
                                class="order-1 md:order-2 w-11 h-11 shrink-0 rounded-full bg-[#ea0a2a] text-white flex items-center justify-center shadow-[0_4px_10px_rgba(234,10,42,0.35)]">
                                <i class="fa-solid fa-box-open text-base"></i>
                            </span>
                        </div>
                        <ul class="space-y-3 text-gray-700 text-sm md:text-base">
                            <li class="flex items-center justify-center md:justify-end gap-3">
                                <span>The Breeze, BSD</span>
                                <i class="fa-solid fa-location-dot text-[#ea0a2a] w-4 order-first md:order-last"></i>
                            </li>
                            <li class="flex items-center justify-center md:justify-end gap-3">
                                <span>11 &ndash; 13 November 2026</span>
                                <i class="fa-regular fa-calendar text-[#ea0a2a] w-4 order-first md:order-last"></i>
                            </li>
                            <li class="flex items-center justify-center md:justify-end gap-3">
                                <span>10.00 &ndash; 20.00 WIB</span>
                                <i class="fa-regular fa-clock text-[#ea0a2a] w-4 order-first md:order-last"></i>
                            </li>
                        </ul>
                    </div>

                    <!-- Route divider: desktop vertical, mobile horizontal -->
                    <div class="hidden md:flex relative flex-col items-center self-stretch w-0 px-8">
                        <div class="w-0 grow border-l-2 border-dashed border-[#ea0a2a]/30"></div>
                        <span
                            class="absolute top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md border border-[#ea0a2a]/15 flex items-center justify-center">
                            <i class="fa-solid fa-caret-right text-[#ea0a2a]"></i>
                        </span>
                    </div>

                    <div class="md:hidden relative flex items-center justify-center py-2">
                        <div class="w-full border-t-2 border-dashed border-[#ea0a2a]/30"></div>
                        <span
                            class="absolute w-9 h-9 rounded-full bg-white shadow-md border border-[#ea0a2a]/15 flex items-center justify-center">
                            <i class="fa-solid fa-caret-down text-[#ea0a2a] text-sm"></i>
                        </span>
                    </div>

                    <!-- Race Day -->
                    <div
                        class="bg-white/70 backdrop-blur-sm rounded-2xl md:rounded-none md:bg-transparent md:backdrop-blur-0 p-6 md:p-0 md:pl-10 text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start gap-3 mb-5">
                            <span
                                class="w-11 h-11 shrink-0 rounded-full bg-[#ea0a2a] text-white flex items-center justify-center shadow-[0_4px_10px_rgba(234,10,42,0.35)]">
                                <i class="fa-solid fa-flag-checkered text-base"></i>
                            </span>
                            <h3 class="text-lg md:text-xl font-bold text-gray-900">Race Day</h3>
                        </div>
                        <ul class="space-y-3 text-gray-700 text-sm md:text-base">
                            <li class="flex items-center justify-center md:justify-start gap-3">
                                <i class="fa-solid fa-location-dot text-[#ea0a2a] w-4"></i>
                                <span>Parkir Timur ICE BSD</span>
                            </li>
                            <li class="flex items-center justify-center md:justify-start gap-3">
                                <i class="fa-regular fa-calendar text-[#ea0a2a] w-4"></i>
                                <span>14 November 2026</span>
                            </li>
                            <li class="flex items-center justify-center md:justify-start gap-3">
                                <i class="fa-regular fa-clock text-[#ea0a2a] w-4"></i>
                                <span>05.00 &ndash; 12.00 WIB</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section id="countdown" class="max-w-6xl mx-auto my-0 px-4 relative overflow-hidden">
            <!-- Background blur blobs (section level background) -->
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-5" style="top: 5%; right: 5%;"></div>
                <div class="blob blob-3" style="bottom: 5%; left: 5%;"></div>
            </div>
            <div class="rounded-3xl border-2 p-8 md:p-12 flex flex-col md:flex-row items-start md:items-center justify-between gap-8 relative backdrop-blur-md"
                style="background: linear-gradient(135deg, #3885B9 0%,  #EE2034 50%,#BD3629 100%);">

                <!-- Kolom kiri: logo, heading, deskripsi -->
                <div class="text-content flex-1 z-10 w-full">
                    <img loading="lazy" decoding="async"
                        src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                        alt="OCBC" class="h-8 md:h-9 mb-6 bg-white rounded-lg px-3 py-2 inline-block">

                    <h2
                        class="text-3xl md:text-4xl font-extrabold text-white mb-4 md:mb-8 leading-tight text-left drop-shadow-sm">
                        Bersiap untuk Pre-Sale Ticket
                    </h2>
                    <div class="text-left">
                        <p class="text-white/95 text-sm md:text-base leading-relaxed">
                            Siapkan Kartu Kredit / Debit OCBC kamu untuk pre-sale ticket
                            di tanggal <span class="whitespace-nowrap font-semibold">5 September 2026</span>
                        </p>
                    </div>
                </div>

                <!-- Kolom kanan: countdown card -->
                <div class="flex-1 flex justify-start md:justify-center items-start relative z-10 w-full">
                    <div
                        class="image-wrapper bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 md:p-8 border border-white/50 w-full max-w-md md:max-w-lg">
                        <div class="grid grid-cols-4 gap-2 md:gap-3">
                            <div class="bg-slate-100 rounded-2xl py-4">
                                <div id="cd-days" class="text-2xl md:text-3xl font-extrabold text-[#1E3A8A]">00</div>
                                <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">HARI
                                </div>
                            </div>
                            <div class="bg-slate-100 rounded-2xl py-4">
                                <div id="cd-hours" class="text-2xl md:text-3xl font-extrabold text-[#1E3A8A]">00</div>
                                <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">JAM
                                </div>
                            </div>
                            <div class="bg-slate-100 rounded-2xl py-4">
                                <div id="cd-minutes" class="text-2xl md:text-3xl font-extrabold text-[#1E3A8A]">00</div>
                                <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">MENIT
                                </div>
                            </div>
                            <div class="bg-slate-100 rounded-2xl py-4">
                                <div id="cd-seconds" class="text-2xl md:text-3xl font-extrabold text-[#ea0a2a]">00</div>
                                <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">DETIK
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
            </div>
        </section>

        <!-- ============ SECTION: INFORMASI LEBIH LANJUT ============ -->
        <section id="info-lanjut" class="py-12 px-4 md:px-8 relative overflow-hidden">
            <!-- Background blur blobs -->
            <!-- <div class="pointer-events-none absolute inset-0 z-0">
                                                                                        <div class="blob blob-4" style="top: 3%; left: 2%;"></div>
                                                                                        <div class="blob blob-1" style="bottom: 3%; right: 2%;"></div>
                                                                                    </div> -->
            {{-- <div class="ornament-layer" aria-hidden="true">
                <i class="fa-solid fa-star deco deco-twinkle deco-mobile-hide"
                    style="top:6px; right:8%; font-size:9px; --op:.25; --dur:3.2s;"></i>
                <i class="fa-solid fa-shoe-prints deco deco-mobile-hide"
                    style="bottom:10px; left:2%; font-size:14px; --op:.1; --rot:16deg;"></i>
            </div> --}}
            <div class="max-w-5xl mx-auto relative">

                <!-- Heading -->
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-black mb-2">
                        Informasi Lebih Lanjut
                    </h2>
                    <p class="text-slate-500 text-base md:text-lg">
                        Informasi lengkap seputar pendaftaran, syarat &amp; ketentuan, serta benefit Disney Run Jakarta
                        2026.
                    </p>
                </div>

                <!-- Tabs + Content -->
                <div class="grid grid-cols-1 md:grid-cols-[280px_1fr] gap-8 md:gap-12">

                    <!-- Tab list (kiri) -->
                    <div class="border-t border-slate-200" id="info-tab-list">
                        <button type="button" data-tab="persyaratan"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-[#ea0a2a] transition-colors">
                            Persyaratan
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                        <button type="button" data-tab="keuntungan-biaya"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-slate-700 hover:text-[#ea0a2a] transition-colors">
                            Keuntungan &amp; Biaya
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                        <button type="button" data-tab="fasilitas"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-slate-700 hover:text-[#ea0a2a] transition-colors">
                            Fasilitas
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                        <button type="button" data-tab="informasi-lainnya"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-slate-700 hover:text-[#ea0a2a] transition-colors">
                            Informasi Lainnya
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                        <button type="button" data-tab="ringkasan-produk"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-slate-700 hover:text-[#ea0a2a] transition-colors">
                            Ringkasan Informasi Produk
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                    </div>

                    <!-- Tab content (kanan) -->
                    <div id="info-tab-content">

                        <!-- Persyaratan -->
                        <div class="info-tab-panel" data-panel="persyaratan">
                            <div
                                class="space-y-4 text-slate-700 text-sm md:text-base leading-relaxed bg-white/70 backdrop-blur-sm p-6 rounded-2xl border border-slate-100 shadow-sm">
                                <h3 class="text-xl font-bold text-black mb-2">Syarat &amp; Ketentuan Peserta</h3>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>Pendaftaran terbuka untuk WNI maupun WNA yang memiliki kartu identitas resmi (KTP /
                                        SIM / Paspor).</li>
                                    <li>Kategori 1K Child diperuntukkan bagi anak usia 3–12 tahun yang wajib didampingi oleh
                                        1 peserta dewasa.</li>
                                    <li>Kategori 5K &amp; 10K diperuntukkan bagi peserta minimal berusia 13 tahun pada hari
                                        pelaksanaan acara.</li>
                                    <li>Peserta wajib dalam kondisi sehat jasmani dan rohani serta menyetujui pernyataan
                                        pelepasan tanggung jawab.</li>
                                    <li>E-voucher tiket presale / early access bersifat non-refundable dan tidak dapat
                                        dipindah tangankan secara komersial.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Keuntungan & Biaya -->
                        <div class="info-tab-panel hidden" data-panel="keuntungan-biaya">
                            <div
                                class="space-y-4 text-slate-700 text-sm md:text-base leading-relaxed bg-white/70 backdrop-blur-sm p-6 rounded-2xl border border-slate-100 shadow-sm">
                                <h3 class="text-xl font-bold text-black mb-2">Keuntungan &amp; Rincian Biaya</h3>
                                <p>Setiap tiket yang dibeli sudah mencakup paket peserta eksklusif Disney Run Jakarta 2026:
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-3">
                                    <div class="p-4 bg-red-50/60 rounded-xl border border-red-100">
                                        <h4 class="font-bold text-[#ea0a2a] mb-1"><i
                                                class="fa-solid fa-gift mr-2"></i>Race Pack Official</h4>
                                        <p class="text-xs text-slate-600">Jersey eksklusif Disney Run, Finisher Medal, BIB
                                            Number dengan Timing Chip, dan String Bag.</p>
                                    </div>
                                    <div class="p-4 bg-red-50/60 rounded-xl border border-red-100">
                                        <h4 class="font-bold text-[#ea0a2a] mb-1"><i
                                                class="fa-solid fa-tags mr-2"></i>Diskon Spesial OCBC</h4>
                                        <p class="text-xs text-slate-600">Diskon hingga 50% untuk pengajuan Kartu Kredit
                                            OCBC Star Wars / 90&deg;N &amp; Tanda Hadiah.</p>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-500 italic">*Biaya dasar belum termasuk pajak (VAT), biaya
                                    administrasi transaksi, dan biaya layanan platform.</p>
                            </div>
                        </div>

                        <!-- Fasilitas -->
                        <div class="info-tab-panel hidden" data-panel="fasilitas">
                            <div
                                class="space-y-4 text-slate-700 text-sm md:text-base leading-relaxed bg-white/70 backdrop-blur-sm p-6 rounded-2xl border border-slate-100 shadow-sm">
                                <h3 class="text-xl font-bold text-black mb-2">Fasilitas Event</h3>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl"><i
                                            class="fa-solid fa-bottle-water text-[#ea0a2a] mt-1"></i><span>Water Station
                                            setiap 1.5 KM</span></li>
                                    <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl"><i
                                            class="fa-solid fa-kit-medical text-[#ea0a2a] mt-1"></i><span>Layanan Medis
                                            &amp; Ambulans 24 Jam</span></li>
                                    <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl"><i
                                            class="fa-solid fa-shield-halved text-[#ea0a2a] mt-1"></i><span>Asuransi
                                            Perlindungan Diri</span></li>
                                    <li class="flex items-start gap-2 bg-slate-50 p-3 rounded-xl"><i
                                            class="fa-solid fa-camera text-[#ea0a2a] mt-1"></i><span>Disney Photo Booth
                                            &amp; Character Meet</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Informasi Lainnya -->
                        <div class="info-tab-panel hidden" data-panel="informasi-lainnya">
                            <div
                                class="space-y-4 text-slate-700 text-sm md:text-base leading-relaxed bg-white/70 backdrop-blur-sm p-6 rounded-2xl border border-slate-100 shadow-sm">
                                <h3 class="text-xl font-bold text-black mb-2">Informasi Pengambilan Race Pack</h3>
                                <p>Pengambilan Race Pack (RPC) wajib membawa konfirmasi e-voucher dan identitas diri asli.
                                    Apabila diwakilkan, penerima wajib membawa Surat Kuasa bermeterai Rp10.000 serta
                                    fotokopi identitas pendaftar.</p>
                                <p class="text-xs text-slate-500">Untuk bantuan lebih lanjut, hubungi layanan nasabah OCBC
                                    Call Center 1500999 atau kunjungi kantor cabang terdekat.</p>
                            </div>
                        </div>

                        <!-- Ringkasan Informasi Produk -->
                        <div class="info-tab-panel hidden" data-panel="ringkasan-produk">
                            <div
                                class="space-y-4 text-slate-700 text-sm md:text-base leading-relaxed bg-white/70 backdrop-blur-sm p-6 rounded-2xl border border-slate-100 shadow-sm">
                                <h3 class="text-xl font-bold text-black mb-2">Ringkasan Produk Kartu Kredit &amp; Tabungan
                                    OCBC</h3>
                                <p>Program Disney Run Jakarta 2026 didukung oleh produk unggulan OCBC:</p>
                                <ul class="list-disc list-inside space-y-2">
                                    <li><strong>Kartu Kredit OCBC Star Wars / 90&deg;N</strong>: Fasilitas cashback
                                        transaksi luar negeri, poin reward poinseru, dan akses lounge bandara.</li>
                                    <li><strong>Tabungan TANDA HADIAH</strong>: Rekening tabungan dengan skema hadiah
                                        langsung &amp; voucher eksklusif tanpa diundi.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="floating-footer"
            class="fixed bottom-0 left-0 w-full bg-white shadow-lg p-4 flex items-center justify-between transition-all duration-500 ease-in-out transform opacity-100">
            <div class="flex items-center space-x-2 gap-[5px]">
                <img loading="lazy" decoding="async"
                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/floating_img_4b1c36359c.png"
                    alt="Credit Card" class="hidden md:block w-24 h-10">
                <p class="font-bold text-black text-sm md:text-lg">
                    Apply Credit Card OCBC Star Wars Platinum / 90&deg;N now!
                </p>
            </div>
            <div class="flex space-x-2">
                <a href="https://onboarding.ocbc.id/product/kartu-kredit-monoline?utm_source=OCBCDISNEYRUNJKT&utm_medium=&utm_campaignid=&utm_campaign=WEBSITE_DISNEYRUNJKT26_20260724&utm_content=&promo_referal=OCBCDISNEYRUNJKT&force=&promo_code=&sk=%25%25subskey%25%25"
                    target="_blank">
                    <button class="bg-red text-white rounded-lg text-md px-4 py-2" id="btn-floating">
                        Apply Now
                    </button>
                </a>
            </div>
        </section>

        <!-- ============ POPUP COUNTDOWN PRE-SALE ============ -->
        <div id="presaleModal" class="hidden fixed inset-0 z-[1000] flex items-center justify-center p-4 bg-black/50">
            <div class="relative w-full max-w-md bg-white rounded-3xl shadow-2xl px-6 py-8 md:px-10 md:py-10 text-center">

                <!-- Close button -->
                <button onclick="document.getElementById('presaleModal').classList.add('hidden')" aria-label="Tutup popup"
                    class="absolute -top-3 -right-3 md:top-4 md:right-4 w-9 h-9 rounded-full bg-white shadow-md flex items-center justify-center text-slate-500 hover:text-[#ea0a2a] transition-colors">
                    <i class="fa-solid fa-xmark"></i>
                    &times;
                </button>

                <!-- Logo -->
                <img loading="lazy" decoding="async"
                    src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                    alt="OCBC" class="h-8 md:h-9 mx-auto mb-6">

                <!-- Heading -->
                <p class="text-slate-800 font-semibold text-base md:text-lg leading-snug mb-6">
                    Siapkan Kartu Kredit / Debit OCBC kamu untuk pre-sale ticket
                    di tanggal <span class="whitespace-nowrap">5 September 2026</span>
                </p>

                <!-- Countdown -->
                <div class="grid grid-cols-4 gap-2 md:gap-3 mb-8">
                    <div class="bg-slate-100 rounded-2xl py-4">
                        <div id="cd-days" class="text-2xl md:text-3xl font-extrabold text-[#1E3A8A]">00</div>
                        <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">HARI</div>
                    </div>
                    <div class="bg-slate-100 rounded-2xl py-4">
                        <div id="cd-hours" class="text-2xl md:text-3xl font-extrabold text-[#1E3A8A]">00</div>
                        <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">JAM</div>
                    </div>
                    <div class="bg-slate-100 rounded-2xl py-4">
                        <div id="cd-minutes" class="text-2xl md:text-3xl font-extrabold text-[#1E3A8A]">00</div>
                        <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">MENIT</div>
                    </div>
                    <div class="bg-slate-100 rounded-2xl py-4">
                        <div id="cd-seconds" class="text-2xl md:text-3xl font-extrabold text-[#ea0a2a]">00</div>
                        <div class="text-[10px] md:text-xs font-semibold text-slate-500 mt-1 tracking-wide">DETIK</div>
                    </div>
                </div>

                <!-- CTA -->
                <a href="#kategori" onclick="document.getElementById('presaleModal').classList.add('hidden')"
                    class="block w-full bg-[#ea0a2a] hover:bg-[#c00822] text-white font-bold text-base md:text-lg rounded-full py-3.5 transition-colors">
                    Beli tiket di sini
                </a>
            </div>
        </div>
    </div>
@endsection
