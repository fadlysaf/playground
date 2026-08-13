@extends('app')

@push('style')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        /* === Judul dengan gradient holografik bergerak === */
        .holo-text,
        .holo-text-offers {
            background: linear-gradient(90deg, #F2DFA0, #C9A8FF, #7DE8D8, #F5C9E8, #F2DFA0);
            background-size: 300% auto;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: holoTextShift 6s linear infinite;
        }

        @keyframes holoTextShift {
            to {
                background-position: 300% center;
            }
        }

        /* === Taburan bintang kecil berkedip (sentuhan fantasy) === */
        .sparkle-field,
        .sparkle-field-offers {
            position: absolute;
            inset: 0;
            background-repeat: no-repeat;
            opacity: 0.5;
            animation: sparkleTwinkle 3.5s ease-in-out infinite;
        }

        .sparkle-field {
            background-image:
                radial-gradient(1.5px 1.5px at 10% 20%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 80% 15%, #fff, transparent),
                radial-gradient(1px 1px at 25% 70%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 60% 80%, #fff, transparent),
                radial-gradient(1px 1px at 90% 60%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 45% 40%, #fff, transparent),
                radial-gradient(1px 1px at 70% 90%, #fff, transparent);
        }

        .sparkle-field-offers {
            background-image:
                radial-gradient(1.5px 1.5px at 8% 15%, #fff, transparent),
                radial-gradient(1px 1px at 22% 60%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 38% 30%, #fff, transparent),
                radial-gradient(1px 1px at 55% 75%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 68% 20%, #fff, transparent),
                radial-gradient(1px 1px at 80% 55%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 92% 35%, #fff, transparent),
                radial-gradient(1px 1px at 15% 85%, #fff, transparent),
                radial-gradient(1.5px 1.5px at 47% 90%, #fff, transparent),
                radial-gradient(1px 1px at 73% 88%, #fff, transparent);
        }

        @keyframes sparkleTwinkle {

            0%,
            100% {
                opacity: 0.25;
            }

            50% {
                opacity: 0.65;
            }
        }

        /* === Blob dasar (dipakai konsisten di semua section: hero, discover, offers, sponsored) === */
        .blob {
            position: absolute;
            border-radius: 9999px;
            filter: blur(90px);
            opacity: 0.35;
            will-change: transform;
        }

        .blob-1 {
            top: -20%;
            left: -8%;
            width: 420px;
            height: 420px;
            background: radial-gradient(circle, #C9A8FF, transparent 70%);
            animation: driftA 14s ease-in-out infinite;
        }

        .blob-2 {
            top: 0%;
            right: -10%;
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, #7DE8D8, transparent 70%);
            animation: driftB 18s ease-in-out infinite;
        }

        .blob-3 {
            bottom: 12%;
            left: 8%;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, #F5C9E8, transparent 70%);
            opacity: 0.25;
            animation: driftC 16s ease-in-out infinite;
        }

        .blob-4 {
            bottom: 5%;
            right: 20%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, #E8C468, transparent 70%);
            opacity: 0.2;
            animation: driftD 20s ease-in-out infinite;
        }

        /* Blob disembunyikan khusus mobile/tablet (<1024px) — breakpoint sama dgn
                                           titik ganti layout kartu hero (lg:hidden), sumber masalah tinggi section
                                           yang bikin blob kepotong di mobile. Desktop tetap tampil normal. */
        @media (max-width: 1023px) {
            .blob {
                display: none;
            }
        }

        @keyframes driftA {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(30px, 20px) scale(1.1);
            }
        }

        @keyframes driftB {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(-25px, 25px) scale(1.08);
            }
        }

        @keyframes driftC {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(20px, -20px) scale(1.12);
            }
        }

        @keyframes driftD {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(-15px, -15px) scale(1.05);
            }
        }

        /* === Glow di sekeliling gambar campaign === */
        .offer-image-glow {
            position: absolute;
            inset: -20px;
            border-radius: 2rem;
            background: radial-gradient(ellipse, rgba(201, 168, 255, 0.35), rgba(125, 232, 216, 0.2) 50%, transparent 75%);
            filter: blur(40px);
            opacity: 0.8;
            animation: imageGlowPulse 4s ease-in-out infinite;
        }

        @keyframes imageGlowPulse {

            0%,
            100% {
                opacity: 0.6;
                transform: scale(1);
            }

            50% {
                opacity: 0.9;
                transform: scale(1.03);
            }
        }

        /* === Kartu kaca (glassmorphism) dengan border gradient tipis === */
        .offer-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .offer-card:hover {
            transform: translateY(-4px);
            background: rgba(255, 255, 255, 0.06);
        }

        .offer-card-border {
            position: absolute;
            inset: 0;
            border-radius: 1rem;
            padding: 1px;
            background: linear-gradient(135deg, rgba(242, 223, 160, 0.5), rgba(201, 168, 255, 0.3), rgba(125, 232, 216, 0.4));
            -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        .font-fantasy {
            font-family: 'Cormorant Garamond', serif;
        }

        .card-glow {
            position: absolute;
            inset: -40px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(201, 168, 255, 0.55), rgba(125, 232, 216, 0.25) 45%, transparent 70%);
            filter: blur(30px);
            opacity: 1;
            transform: scale(1);
        }

        .card-img {
            position: relative;
            z-index: 2;
            transform: scale(1) translateY(0) rotate(0deg);
        }

        .card-shimmer {
            position: absolute;
            inset: 0;
            border-radius: 1.5rem;
            pointer-events: none;
            overflow: hidden;
        }

        @keyframes holoSpin {
            to {
                transform: rotate(360deg);
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .holo-text,
            .holo-text-offers,
            .sparkle-field,
            .sparkle-field-offers,
            .blob,
            .offer-image-glow,
            .card-holo-ring {
                animation: none !important;
            }

            .offer-card {
                transition: none !important;
            }
        }
    </style>
@endpush

@section('content')
    <div class="overflow-x-hidden">
        {{-- hero section --}}
        <section class="relative bg-[#0B0A14] px-6 pt-2 lg:px-8">

            <!-- Banner background - MOBILE -->
            <div class="pointer-events-none absolute inset-0 z-0 bg-cover bg-center bg-no-repeat lg:hidden"
                style="background-image: url('https://path-ke-gambar-mobile.jpg');"></div>

            <!-- Banner background - DESKTOP -->
            <div class="pointer-events-none absolute inset-0 z-0 hidden bg-cover bg-center bg-no-repeat lg:block"
                style="background-image: url('https://path-ke-gambar-desktop.jpg');"></div>

            <!-- Overlay gelap supaya teks tetap kontras -->
            <div class="pointer-events-none absolute inset-0 z-0 bg-[#0B0A14]/60"></div>

            <!-- Background blur blobs -->
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-1"></div>
                <div class="blob blob-2"></div>
                <div class="blob blob-3"></div>
                <div class="blob blob-4"></div>
            </div>

            <!-- Taburan bintang -->
            <div class="pointer-events-none sparkle-field z-0"></div>

            <div class="relative z-10 mx-auto max-w-6xl py-32 sm:py-48 lg:py-38">

                <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                    <!-- Kolom Kiri: Teks -->
                    <div class="relative z-10 text-left">
                        <h1
                            class="text-white text-6xl font-semibold tracking-tight max-w-xl text-balance sm:text-8xl sm:max-w-3xl">
                            Unlock double, The Magic one step</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">Aurelia bukan
                            Pertualan seru dimulai dari sini! Wujudukan lebih banyak momemen istimewa bersama nyala</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-5 py-2.5 text-sm font-semibold text-[#1B140A] shadow-xs hover:opacity-90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E8C468]">Ajukan
                                Undangan</a>
                        </div>
                    </div>
                    <div class="hidden lg:block"></div>
                </div>

            </div>
        </section>
        <section class="relative px-6 py-24 lg:px-8">

            <!-- Section background image -->
            <div class="pointer-events-none absolute inset-0 z-0"
                style="background-image: url('assets/email-pattern.png');"></div>

            <!-- Overlay gelap opsional, supaya teks & kartu tetap kontras -->
            <div class="pointer-events-none absolute inset-0 z-0 bg-[#0B0A14]/20"></div>

            <!-- Background blur blobs + sparkle, konsisten dengan hero -->
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-1"></div>
                <div class="blob blob-2"></div>
                <div class="blob blob-3"></div>
                <div class="blob blob-4"></div>
            </div>
            <div class="pointer-events-none sparkle-field z-0"></div>

            <div class="relative z-10 mx-auto max-w-6xl">

                <h2 class="font-fantasy holo-text text-center text-4xl font-semibold tracking-tight sm:text-6xl">
                    Discover Your Privileges
                </h2>

                <div class="mt-16 grid grid-cols-1 gap-14 lg:grid-cols-2 lg:gap-16">

                    <!-- Benefit Card 1: Debit -->
                    <div class="flex flex-col items-center text-center">
                        <p class="text-lg font-semibold text-white sm:text-xl">
                            Kartu Aurelia<br>Nyala Global Debit</p>

                        <div class="card-wrap relative mt-6">
                            <div class="card-glow"></div>
                            <div
                                class="card-img relative z-[2] flex h-56 w-[340px] flex-col justify-between rounded-3xl bg-gradient-to-br from-[#C9A8FF] via-[#7DE8D8] to-[#F5C9E8] p-6 shadow-2xl shadow-[#C9A8FF]/30">
                                <div class="flex items-start justify-between">
                                    <div class="h-8 w-11 rounded-md bg-gradient-to-br from-[#FCEFC7] to-[#C9A24A]"></div>
                                    <span class="text-xs font-semibold tracking-widest text-[#1B140A]/70">GLOBAL
                                        DEBIT</span>
                                </div>
                                <p class="text-base font-semibold tracking-[0.25em] text-[#1B140A]">•••• •••• •••• 4521</p>
                                <p class="text-xl font-semibold tracking-wide text-[#1B140A]">AURELIA</p>
                            </div>
                        </div>

                        <div
                            class="mt-8 w-full max-w-sm rounded-2xl border border-white/10 bg-white/[0.04] p-6 backdrop-blur-sm">
                            <p class="font-fantasy text-2xl font-semibold text-white">Bebas Konversi</p>
                            <p class="mt-2 text-sm text-gray-300">Belanja online, offline, dan tarik tunai di ATM luar
                                negeri, langsung debit dari 12 mata uang.</p>
                        </div>

                        <a href="#"
                            class="mt-6 rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-6 py-2.5 text-sm font-semibold text-[#1B140A] shadow-xs hover:opacity-90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E8C468]">
                            Buka Nyala Global Debit
                        </a>
                    </div>

                    <!-- Benefit Card 2: Credit -->
                    <div class="flex flex-col items-center text-center">
                        <p class="text-lg font-semibold text-white sm:text-xl">
                            Kartu Kredit Aurelia<br>Nyala Infinite</p>

                        <div class="card-wrap relative mt-6">
                            <div class="card-glow"></div>
                            <div
                                class="card-img relative z-[2] flex h-56 w-[340px] flex-col justify-between rounded-3xl bg-gradient-to-br from-[#1F1440] via-[#170F2B] to-[#0B0A14] p-6 shadow-2xl shadow-[#C9A8FF]/30">
                                <div class="flex items-start justify-between">
                                    <div class="h-8 w-11 rounded-md bg-gradient-to-br from-[#FCEFC7] to-[#C9A24A]"></div>
                                    <span class="text-xs font-semibold tracking-widest text-white/60">∞ INFINITE</span>
                                </div>
                                <p class="text-base font-semibold tracking-[0.25em] text-white">•••• •••• •••• 8841</p>
                                <p class="text-xl font-semibold tracking-wide text-white">AURELIA</p>
                            </div>
                        </div>

                        <div
                            class="mt-8 w-full max-w-sm rounded-2xl border border-white/10 bg-white/[0.04] p-6 backdrop-blur-sm">
                            <p class="font-fantasy text-2xl font-semibold text-white">Cashback hingga 10% + 10%</p>
                            <p class="mt-2 text-sm text-gray-300">Untuk online shopping & streaming favoritmu, setiap
                                bulan.</p>
                        </div>

                        <a href="#"
                            class="mt-6 rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-6 py-2.5 text-sm font-semibold text-[#1B140A] shadow-xs hover:opacity-90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E8C468]">
                            Apply Now
                        </a>
                    </div>

                </div>
            </div>
        </section>

        {{-- special promo --}}
        <section class="relative bg-[#0B0A14] px-6 py-24 lg:px-8">

            <!-- Taburan bintang / sparkle background -->
            <div class="pointer-events-none absolute inset-0 z-0 sparkle-field-offers"></div>

            <!-- Background blur blobs, konsisten dengan section lain -->
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-1"></div>
                <div class="blob blob-2"></div>
            </div>

            <div class="relative z-10 mx-auto max-w-5xl">

                <!-- Label kecil -->
                <p
                    class="mb-3 flex items-center justify-center gap-2 text-xs font-semibold tracking-[0.2em] text-[#7DE8D8] uppercase sm:justify-start">
                    <span class="text-[#F2DFA0]">✦</span>
                    Special Offers
                </p>

                <!-- Judul holografik -->
                <h2
                    class="font-fantasy holo-text-offers mb-10 text-center text-3xl font-semibold tracking-tight sm:text-left sm:text-4xl">
                    Double benefit for Disney Run Jakarta 2026
                </h2>

                <!-- Gambar campaign dengan glow ring -->
                <div class="offer-image-wrap relative mb-14">
                    <div class="offer-image-glow"></div>
                    <div class="relative overflow-hidden rounded-3xl ring-1 ring-white/10">
                        <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/new_main_kv_4ccac64805.jpg"
                            alt="Disney Run Jakarta 2026" width="1200" height="630" loading="lazy" decoding="async"
                            class="w-full object-cover" />
                    </div>
                </div>

                <!-- Dua kartu penawaran -->
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                    <!-- Kartu kiri: Potongan harga -->
                    <div class="offer-card group relative overflow-hidden rounded-2xl p-8">
                        <div class="offer-card-border"></div>

                        <h3 class="text-xl font-bold text-white">
                            Potongan harga s.d Rp440 Ribu
                        </h3>
                        <p class="mt-1 text-lg font-semibold text-[#F2DFA0]">
                            tiket Disney Run Jakarta 2026
                        </p>
                        <p class="mt-3 text-sm leading-relaxed text-gray-300">
                            dengan buka <span class="font-semibold text-white">TANDA</span> Hadiah di OCBC mobile,
                            nabung mulai Rp10 Juta
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="https://www.ocbc.id/id/digital-channel/ocbc-mobile"
                                class="rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-5 py-2.5 text-sm font-semibold text-[#1B140A] shadow-lg shadow-[#E8C468]/20 transition hover:opacity-90">
                                Buka TANDA Hadiah
                            </a>
                            <a href="https://www.ocbc.id/id/promo/2026/07/23/disney-run-tanda-hadiah"
                                class="rounded-full border border-white/20 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">
                                Syarat dan Ketentuan
                            </a>
                        </div>

                        <div class="mt-4 space-y-1 text-xs text-gray-500">
                            <a href="https://www.ocbc.id/id/digital-channel/ocbc-mobile"
                                class="block break-all hover:text-gray-300">
                                https://www.ocbc.id/id/digital-channel/ocbc-mobile
                            </a>
                            <a href="https://www.ocbc.id/id/promo/2026/07/23/disney-run-tanda-hadiah"
                                class="block break-all hover:text-gray-300">
                                https://www.ocbc.id/id/promo/2026/07/23/disney-run-tanda-hadiah
                            </a>
                        </div>
                    </div>

                    <!-- Kartu kanan: Diskon 50% -->
                    <div class="offer-card group relative overflow-hidden rounded-2xl p-8">
                        <div class="offer-card-border"></div>

                        <h3 class="text-xl font-bold text-white">
                            Diskon 50%
                        </h3>
                        <p class="mt-1 text-lg font-semibold text-[#F2DFA0]">
                            tiket Disney Run Jakarta 2026
                        </p>
                        <p class="mt-3 text-sm leading-relaxed text-gray-300">
                            dengan <span class="italic">apply</span> Kartu Kredit OCBC Mickey Nyala Platinum
                        </p>

                        <div class="mt-4 flex items-center gap-2">
                            <span class="text-sm font-semibold text-white">Kode promo:</span>
                            <span
                                class="rounded-md bg-white/10 px-3 py-1 text-sm font-mono text-[#7DE8D8] ring-1 ring-white/20">
                                OCBCDISNEYRUNJKT
                            </span>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="https://onboarding.ocbc.id/product/kartu-kredit-monoline?utm_source=OCBCDISNEYRUNJKT"
                                class="rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-5 py-2.5 text-sm font-semibold text-[#1B140A] shadow-lg shadow-[#E8C468]/20 transition hover:opacity-90">
                                Apply Now
                            </a>
                            <a href="https://www.ocbc.id/id/disneyrunjkt26"
                                class="rounded-full border border-white/20 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">
                                Info lengkap
                            </a>
                        </div>

                        <div class="mt-4 space-y-1 text-xs text-gray-500">
                            <a href="https://onboarding.ocbc.id/product/kartu-kredit-monoline?utm_source=OCBCDISNEYRUNJKT"
                                class="block break-all hover:text-gray-300">
                                https://onboarding.ocbc.id/product/kartu-kredit-monoline?utm_source=OCBCDISNEYRUNJKT
                            </a>
                            <a href="https://www.ocbc.id/id/disneyrunjkt26" class="block break-all hover:text-gray-300">
                                https://www.ocbc.id/id/disneyrunjkt26
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- sponsored --}}
        <section id="sponsored" class="relative bg-[#0B0A14] px-6 py-20 lg:px-8 lg:py-28">

            <!-- Background blur blobs + sparkle, konsisten dengan section lain -->
            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="blob blob-1"></div>
                <div class="blob blob-2"></div>
                <div class="blob blob-3"></div>
                <div class="blob blob-4"></div>
            </div>
            <div class="pointer-events-none sparkle-field z-0"></div>

            <div class="relative z-10 mx-auto max-w-6xl">

                <div class="mb-14 flex flex-col items-center gap-3 text-center">
                    <p class="font-utility text-xs font-semibold uppercase tracking-[0.25em] text-[#7DE8D8]">
                        Dipercaya Oleh
                    </p>
                    <h2 class="font-fantasy holo-text text-3xl font-semibold tracking-tight sm:text-5xl">
                        Sponsored By
                    </h2>
                </div>

                <!-- Sponsor Logos -->
                <div class="flex flex-wrap justify-center gap-4 sm:gap-6">

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#C9A8FF]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-1.png" alt="Sponsor 1" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#7DE8D8]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-2.png" alt="Sponsor 2" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#F5C9E8]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-3.png" alt="Sponsor 3" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#E8C468]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-4.png" alt="Sponsor 4" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#C9A8FF]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-5.png" alt="Sponsor 5" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#7DE8D8]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-6.png" alt="Sponsor 6" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                    <div
                        class="flex h-24 w-[calc(50%-0.5rem)] items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur-sm transition-colors duration-300 hover:border-[#F5C9E8]/40 sm:h-28 sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                        <img src="assets/images/sponsors/sponsor-7.png" alt="Sponsor 7" width="120" height="40"
                            loading="lazy" decoding="async"
                            class="max-h-8 w-auto opacity-50 grayscale brightness-0 invert transition-all duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 hover:invert-0 sm:max-h-10" />
                    </div>

                </div>

                <!-- Tombol CTA di tengah -->
                <div class="mt-12 flex justify-center">
                    <a href="#"
                        class="rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-7 py-2.5 text-sm font-semibold text-[#1B140A] shadow-xs transition-opacity hover:opacity-90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E8C468]">
                        Lihat Semua Mitra
                    </a>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" defer></script>
    <script>
        function runCardFloat(scope) {
            const img = scope.querySelector('.card-img');

            anime({
                targets: img,
                translateY: [{
                        value: -10,
                        duration: 1800,
                        easing: 'easeInOutSine'
                    },
                    {
                        value: 0,
                        duration: 1800,
                        easing: 'easeInOutSine'
                    },
                ],
                rotate: 0, // kartu tetap lurus, tidak miring
                loop: true,
            });
        }

        document.querySelectorAll('.card-wrap').forEach(runCardFloat);
    </script>
@endpush
