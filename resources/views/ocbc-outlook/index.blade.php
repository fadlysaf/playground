@extends('app')

@push('style')
    <!-- Tabler Icons (used for ti-arrow-up-right) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <style>
        .hero-min-h {
            min-height: calc(100dvh - var(--header-h, 0px));
        }

        :root {
            /* === OCBC Brand Colors === */
            --color-primary: #DA291C;
            /* Merah utama OCBC (logo, CTA, highlight) */
            --color-primary-hover: #B91F14;
            /* State hover / active untuk tombol merah */
            --color-primary-light: #FDECEA;
            /* Tint merah muda untuk background lembut / badge */
            --color-primary-soft: #F6B8B2;
            /* Aksen merah medium, untuk border/ring tipis */

            /* === Neutral / Dark (footer, teks gelap) === */
            --color-dark: #111827;
            /* Setara Tailwind gray-900, dipakai di footer */
            --color-dark-soft: #1F2937;
            /* Setara gray-800, border footer */
            --color-text-body: #111827;
            /* Teks utama */
            --color-text-muted: #6B7280;
            /* Teks sekunder / deskripsi */

            /* === Surface / Background === */
            --color-surface: #FFFFFF;
            --color-surface-alt: #F9FAFB;
            /* Setara gray-50, section alternate */
            --color-surface-card: #F3F4F6;
            /* Setara gray-100, card */

            /* === Border === */
            --color-border: #E5E7EB;
            /* Setara gray-100/200 */
        }
    </style>
@endpush

@section('content')
    <!-- ============================== -->
    <!-- HERO SECTION -->
    <!-- ============================== -->
    <section id="hero-section" class="bg-white overflow-hidden mt-[100px]">
        <div class="hero-min-h max-w-[100rem] mx-auto px-6 lg:px-5 flex flex-col items-center py-14 lg:py-8">

            <!-- Konten utama, dibuat flex-1 supaya mengisi ruang dan mendorong scroll indicator ke bawah -->
            <div class="flex-1 w-full flex items-center justify-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">

                    <div class="flex flex-col gap-6">

                        <!-- Highlight card -->
                        <div
                            class="bg-[var(--color-primary)] rounded-3xl px-6 md:px-8 py-6 md:py-8 min-h-[220px] sm:min-h-[260px] md:min-h-[320px] flex flex-col justify-between text-white">
                            <div class="flex flex-col gap-3">
                                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold leading-snug">
                                    OCBC <br> Outlook
                                </h2>
                                <p class="text-white/80 text-sm leading-snug max-w-md">
                                    Embark on the ultimate test of endurance and determination with
                                    marathons, where each stride is a journey of self-discovery.
                                </p>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="inline-flex items-center gap-2 bg-white text-gray-900 font-semibold text-sm px-5 py-2.5 rounded-full hover:bg-gray-100 transition-all duration-200">
                                    Register Here
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 sm:gap-6">

                            <!-- Article preview card -->
                            <div
                                class="bg-gray-100 rounded-3xl p-5 sm:p-6 flex flex-col justify-between shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                                <div class="mb-4">
                                    <h3 class="text-base sm:text-lg font-bold text-gray-900 leading-snug">
                                        Building Scalable Enterprise Solutions with Modern Architecture
                                    </h3>
                                    <p class="text-xs text-gray-500 mt-1 line-clamp-2">
                                        Membahas tuntas strategi migrasi sistem, integrasi database, hingga optimasi
                                        performa backend.
                                    </p>
                                </div>
                            </div>

                            <!-- Countdown card -->
                            <div
                                class="bg-gray-100 rounded-3xl p-5 sm:p-6 flex flex-col justify-between shadow-sm border border-gray-100 hover:shadow-md transition-shadow">

                                <div
                                    class="flex-1 grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-2 content-center place-items-center text-center">
                                    <div
                                        class="min-w-0 bg-white rounded-2xl px-3 py-2 sm:px-4 sm:py-3 shadow-sm border border-gray-100">
                                        <p class="text-lg sm:text-lg font-bold text-gray-900 truncate">267</p>
                                        <p class="text-[10px] uppercase text-gray-400 tracking-wide">Days</p>
                                    </div>
                                    <div
                                        class="min-w-0 bg-white rounded-2xl px-3 py-2 sm:px-4 sm:py-3 shadow-sm border border-gray-100">
                                        <p class="text-lg sm:text-lg font-bold text-gray-900 truncate">11</p>
                                        <p class="text-[10px] uppercase text-gray-400 tracking-wide">Hours</p>
                                    </div>
                                    <div
                                        class="min-w-0 bg-white rounded-2xl px-3 py-2 sm:px-4 sm:py-3 shadow-sm border border-gray-100">
                                        <p class="text-lg sm:text-lg font-bold text-gray-900 truncate">23</p>
                                        <p class="text-[10px] uppercase text-gray-400 tracking-wide">Mins</p>
                                    </div>
                                    <div
                                        class="min-w-0 bg-white rounded-2xl px-3 py-2 sm:px-4 sm:py-3 shadow-sm border border-gray-100">
                                        <p class="text-lg sm:text-lg font-bold text-gray-900 truncate">31</p>
                                        <p class="text-[10px] uppercase text-gray-400 tracking-wide">Secs</p>
                                    </div>
                                </div>

                                <div
                                    class="border-t border-gray-200/60 pt-3 text-[11px] sm:text-xs text-gray-500 leading-relaxed">
                                    October 27th, 2025 <br> At 8:45 AM
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Hero image -->
                    <div class="relative rounded-3xl overflow-hidden min-h-[300px] sm:min-h-[400px] lg:min-h-0">
                        <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Runner ready at start line" class="w-full h-full object-cover" />
                    </div>

                </div>
            </div>

            <!-- Scroll indicator: sekarang flex item biasa, bukan absolute -->
            <div class="flex flex-col items-center gap-2 text-gray-400 pt-6">
                <span class="text-xs uppercase tracking-widest">Scroll More</span>
                <a href="#event-highlights" class="animate-bounce">
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- ============================== -->
    <!-- Event Highlights SECTION -->
    <!-- ============================== -->
    <section id="event-highlights" class="bg-gray-50 relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">

            <!-- Header -->
            <div class="flex flex-col items-center text-center gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                        Event Highlights
                    </h2>
                    <p class="text-gray-500 max-w-2xl">
                        Jelajahi momen-momen terbaik yang menjadikan acara ini penuh inspirasi,
                        kolaborasi, dan pengalaman berharga bagi seluruh peserta.
                    </p>
                </div>
            </div>

            <!-- Highlight Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Highlight 1 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1200&auto=format&fit=crop"
                        alt="Opening Ceremony" class="w-full h-[250px] object-cover" />

                    <div class="p-5 sm:p-6">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Opening Ceremony
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Grand Opening Session
                        </p>

                        <p class="text-xs text-gray-400 mt-2 line-clamp-3">
                            Acara dibuka dengan sambutan inspiratif dan penampilan pembuka yang
                            membangun semangat seluruh peserta sejak awal kegiatan.
                        </p>

                        <a href="#"
                            class="inline-flex items-center gap-2 text-sm font-medium text-[var(--color-primary)] mt-5">
                            View Gallery
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Highlight 2 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1200&auto=format&fit=crop"
                        alt="Keynote Session" class="w-full h-[250px] object-cover" />

                    <div class="p-5 sm:p-6">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Keynote Session
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Insightful Presentation
                        </p>

                        <p class="text-xs text-gray-400 mt-2 line-clamp-3">
                            Para pembicara membagikan wawasan terbaru mengenai tren industri,
                            inovasi, dan strategi menghadapi tantangan masa depan.
                        </p>

                        <a href="#"
                            class="inline-flex items-center gap-2 text-sm font-medium text-[var(--color-primary)] mt-5">
                            View Gallery
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Highlight 3 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?q=80&w=1200&auto=format&fit=crop"
                        alt="Networking Session" class="w-full h-[250px] object-cover" />

                    <div class="p-5 sm:p-6">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Networking Session
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Collaboration & Discussion
                        </p>

                        <p class="text-xs text-gray-400 mt-2 line-clamp-3">
                            Peserta saling bertukar pengalaman, membangun koneksi baru, dan
                            berdiskusi langsung dengan para profesional dari berbagai bidang.
                        </p>

                        <a href="#"
                            class="inline-flex items-center gap-2 text-sm font-medium text-[var(--color-primary)] mt-5">
                            View Gallery
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ============================== -->
    <!-- AGENDA SECTION -->
    <!-- ============================== -->
    <section id="agenda-section" class="bg-white relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">

            <!-- Header -->
            <div
                class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10 border-b border-gray-100 pb-4">
                <div class="flex flex-col gap-3">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                        Agenda Overview
                    </h2>
                </div>

                <!-- City tabs -->
                <div class="flex bg-gray-100 p-1 rounded-xl w-full md:w-auto self-start md:self-auto">
                    <button type="button" data-city-tab="sf"
                        class="city-tab-btn flex-1 md:flex-none text-[12px] font-semibold text-center px-4 py-2 rounded-lg bg-white text-[var(--color-primary)] shadow-sm transition-all duration-200 cursor-pointer focus:outline-none">
                        San Francisco
                    </button>
                    <button type="button" data-city-tab="nyc"
                        class="city-tab-btn flex-1 md:flex-none text-[12px] font-semibold text-center px-4 py-2 rounded-lg text-gray-500 hover:text-gray-900 transition-all duration-200 cursor-pointer focus:outline-none">
                        New York
                    </button>
                    <button type="button" data-city-tab="london"
                        class="city-tab-btn flex-1 md:flex-none text-[12px] font-semibold text-center px-4 py-2 rounded-lg text-gray-500 hover:text-gray-900 transition-all duration-200 cursor-pointer focus:outline-none">
                        London
                    </button>
                    <button type="button" data-city-tab="tokyo"
                        class="city-tab-btn flex-1 md:flex-none text-[12px] font-semibold text-center px-4 py-2 rounded-lg text-gray-500 hover:text-gray-900 transition-all duration-200 cursor-pointer focus:outline-none">
                        Tokyo
                    </button>
                </div>
            </div>

            <!-- Two-column layout: agenda list + sticky venue card -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- LEFT: Agenda list -->
                <div class="order-2 lg:order-1 lg:col-span-2 flex flex-col gap-4">

                    <!-- SAN FRANCISCO agenda -->
                    <div data-city-agenda="sf"
                        class="city-agenda bg-white overflow-hidden shadow-sm border border-gray-100 divide-y divide-gray-100 transition-all duration-300">
                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">08:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">08:30 – 09:00</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Lobby Foyer</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Registration &amp; Morning
                                    Coffee</h3>
                            </div>
                        </div>

                        <!-- Keynote (highlighted) -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-[#DA291C]/5 hover:bg-[#DA291C]/10 transition-colors relative">
                            <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-[var(--color-primary)]"></div>
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:00</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Keynote</span>
                                        <span class="text-[11px] text-gray-400">09:00 – 09:50</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Main Auditorium</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Opening Keynote: The Future of
                                    Distributed Systems</h3>
                                <p class="text-xs sm:text-sm text-[var(--color-primary)] font-medium mt-0.5">Sarah Chen —
                                    CTO, Vercel
                                </p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    An exploration of how distributed architectures are reshaping the foundations of modern
                                    software.
                                </p>
                            </div>
                        </div>

                        <!-- Talk -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:50</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-900 text-white">Talk</span>
                                        <span class="text-[11px] text-gray-400">09:50 – 10:25</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Main Auditorium</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Rethinking Infrastructure at
                                    Scale</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Marcus Webb — VP Engineering, Linear</p>
                            </div>
                        </div>

                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">10:25</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">10:25 – 10:45</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Grand Atrium</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Networking Break</h3>
                            </div>
                        </div>

                        <!-- Workshop -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">10:45</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Workshop</span>
                                        <span class="text-[11px] text-gray-400">10:45 – 11:30</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Studio B</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Building Real-Time
                                    Collaborative Tools</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Priya Nair — Staff Engineer, Figma</p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    Hands-on session exploring operational transforms and CRDT approaches for real-time
                                    sync.
                                </p>
                            </div>
                        </div>

                        <!-- Panel -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">11:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-emerald-800 text-white">Panel</span>
                                        <span class="text-[11px] text-gray-400">11:30 – 12:15</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Main Auditorium</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Panel: AI-Augmented Developer
                                    Workflows</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Chen · Webb · Nair · Liu</p>
                            </div>
                        </div>
                    </div>

                    <!-- NEW YORK agenda -->
                    <div data-city-agenda="nyc"
                        class="city-agenda hidden bg-white overflow-hidden shadow-sm border border-gray-100 divide-y divide-gray-100 transition-all duration-300">
                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">08:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">08:30 – 09:00</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Manhattan
                                        Lounge</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Registration &amp; Networking
                                    Breakfast</h3>
                            </div>
                        </div>

                        <!-- Keynote (highlighted) -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-[#DA291C]/5 hover:bg-[#DA291C]/10 transition-colors relative">
                            <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-[var(--color-primary)]"></div>
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:00</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Keynote</span>
                                        <span class="text-[11px] text-gray-400">09:00 – 09:50</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Grand Ballroom</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Keynote: High-Frequency
                                    Systems &amp; FinTech Architecture</h3>
                                <p class="text-xs sm:text-sm text-[var(--color-primary)] font-medium mt-0.5">Alexander
                                    Wright —
                                    Managing Director, Goldman Sachs</p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    An in-depth study of low latency patterns, dynamic scaling, and reliability practices
                                    inside high-volume financial hubs.
                                </p>
                            </div>
                        </div>

                        <!-- Talk -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:50</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-900 text-white">Talk</span>
                                        <span class="text-[11px] text-gray-400">09:50 – 10:25</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Grand Ballroom</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Building Resilient Multi-Cloud
                                    Banking Platforms</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Devorah Goldstein — Principal Architect,
                                    MongoDB</p>
                            </div>
                        </div>

                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">10:25</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">10:25 – 10:45</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Skyline Terrace</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Coffee &amp; Networking</h3>
                            </div>
                        </div>

                        <!-- Workshop -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">10:45</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Workshop</span>
                                        <span class="text-[11px] text-gray-400">10:45 – 11:30</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Hall A</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Securing Real-Time Enterprise
                                    Pipelines</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Liam O'Connor — Head of DevSecOps, Snyk
                                </p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    Interactive workshop covering threat modeling, vulnerability detection, and security
                                    automation for CI/CD flow.
                                </p>
                            </div>
                        </div>

                        <!-- Panel -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">11:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-emerald-800 text-white">Panel</span>
                                        <span class="text-[11px] text-gray-400">11:30 – 12:15</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Grand Ballroom</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Panel: The Next Decade of
                                    Fintech Infrastructure</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Wright · Goldstein · O'Connor · Martinez
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- LONDON agenda -->
                    <div data-city-agenda="london"
                        class="city-agenda hidden bg-white overflow-hidden shadow-sm border border-gray-100 divide-y divide-gray-100 transition-all duration-300">
                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">08:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">08:30 – 09:00</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Southbank Foyer</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Registration &amp; Morning
                                    Pastries</h3>
                            </div>
                        </div>

                        <!-- Keynote (highlighted) -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-[#DA291C]/5 hover:bg-[#DA291C]/10 transition-colors relative">
                            <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-[var(--color-primary)]"></div>
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:00</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Keynote</span>
                                        <span class="text-[11px] text-gray-400">09:00 – 09:50</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Thames Suite</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Keynote: Decentralized Web
                                    &amp; Sovereign Data</h3>
                                <p class="text-xs sm:text-sm text-[var(--color-primary)] font-medium mt-0.5">Dr. Emily
                                    Watson —
                                    Professor, Oxford &amp; W3C Lead</p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    Exploring decentralized identity, privacy architectures, and next-generation W3C
                                    standards for user data control.
                                </p>
                            </div>
                        </div>

                        <!-- Talk -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:50</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-900 text-white">Talk</span>
                                        <span class="text-[11px] text-gray-400">09:50 – 10:25</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Thames Suite</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Scale &amp; Performance with
                                    Modern Edge Networks</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Alistair Vance — Director of Edge,
                                    Cloudflare</p>
                            </div>
                        </div>

                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">10:25</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">10:25 – 10:45</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Riverside Deck</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Morning Tea Break</h3>
                            </div>
                        </div>

                        <!-- Workshop -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">10:45</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Workshop</span>
                                        <span class="text-[11px] text-gray-400">10:45 – 11:30</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Studio C</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Designing Offline-First Web
                                    Applications</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Katherine Brooks — Core Maintainer, Yjs
                                </p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    Hands-on session using CRDTs and IndexedDB for local-first storage and smooth peer
                                    synchronizations.
                                </p>
                            </div>
                        </div>

                        <!-- Panel -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">11:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-emerald-800 text-white">Panel</span>
                                        <span class="text-[11px] text-gray-400">11:30 – 12:15</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Thames Suite</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Panel: Privacy, Regulations
                                    &amp; The Future of Data</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Watson · Vance · Brooks · Henderson</p>
                            </div>
                        </div>
                    </div>

                    <!-- TOKYO agenda -->
                    <div data-city-agenda="tokyo"
                        class="city-agenda hidden bg-white overflow-hidden shadow-sm border border-gray-100 divide-y divide-gray-100 transition-all duration-300">
                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">08:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">08:30 – 09:00</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Shibuya Lobby</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Registration &amp; Green Tea
                                    Reception</h3>
                            </div>
                        </div>

                        <!-- Keynote (highlighted) -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-[#DA291C]/5 hover:bg-[#DA291C]/10 transition-colors relative">
                            <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-[var(--color-primary)]"></div>
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:00</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Keynote</span>
                                        <span class="text-[11px] text-gray-400">09:00 – 09:50</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Sakura Hall</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Keynote: Humanoid Robotics
                                    &amp; Edge AI Integration</h3>
                                <p class="text-xs sm:text-sm text-[var(--color-primary)] font-medium mt-0.5">Kenji Sato —
                                    Lead
                                    Researcher, Sony Robotics</p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    Bridging the gap between embedded real-time software, visual-spatial models, and
                                    interactive robotics platforms.
                                </p>
                            </div>
                        </div>

                        <!-- Talk -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">09:50</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-900 text-white">Talk</span>
                                        <span class="text-[11px] text-gray-400">09:50 – 10:25</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Sakura Hall</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Designing Developer Experience
                                    at Scale</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Yoko Takahashi — Engineering Lead,
                                    Mercari</p>
                            </div>
                        </div>

                        <!-- Break -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500">10:25</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-gray-100 text-gray-500">Break</span>
                                        <span class="text-[11px] text-gray-400">10:25 – 10:45</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Zen Garden</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Interactive Demo &amp; Break
                                </h3>
                            </div>
                        </div>

                        <!-- Workshop -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">10:45</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-[var(--color-primary)] text-white">Workshop</span>
                                        <span class="text-[11px] text-gray-400">10:45 – 11:30</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Room 402</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">WebAssembly: Bringing Native
                                    Performance to Web</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Hiroto Tanaka — Core Engineer, Fastly
                                </p>
                                <p class="text-xs sm:text-sm text-gray-500 mt-1.5 line-clamp-2">
                                    Deploying Rust and C++ modules directly to Edge runtime and browser instances via WASI.
                                </p>
                            </div>
                        </div>

                        <!-- Panel -->
                        <div
                            class="flex gap-4 sm:gap-6 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                            <div class="w-16 sm:w-20 shrink-0">
                                <p class="text-xs sm:text-sm font-semibold text-gray-900">11:30</p>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-3 mb-1">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded bg-emerald-800 text-white">Panel</span>
                                        <span class="text-[11px] text-gray-400">11:30 – 12:15</span>
                                    </div>
                                    <span class="text-[11px] text-gray-400 shrink-0 hidden sm:block">Sakura Hall</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Panel: AI &amp; Automation in
                                    East Asian Tech Hubs</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Sato · Takahashi · Tanaka · Nakamura</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /LEFT -->

                <!-- RIGHT: Sticky venue card -->
                <div class="order-1 lg:order-2 lg:col-span-1">
                    <div class="lg:sticky lg:top-24 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">

                        <!-- SAN FRANCISCO panel -->
                        <div data-city-panel="sf" class="city-panel transition-all duration-300">
                            <div class="relative h-48 w-full">
                                <img src="https://images.unsplash.com/photo-1521747116042-5a810fda9664?q=80&w=1200&auto=format&fit=crop"
                                    alt="San Francisco venue" class="absolute inset-0 w-full h-full object-cover">
                                <span
                                    class="absolute top-3 right-3 flex items-center gap-1 bg-white/90 backdrop-blur text-[11px] font-semibold px-2 py-1 rounded-full text-gray-700 shadow-sm border border-gray-100/50">
                                    SF, CA
                                </span>
                            </div>
                            <div class="p-5">
                                <p
                                    class="text-[11px] font-bold tracking-widest text-[var(--color-primary)] uppercase mb-1">
                                    Venue</p>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">The Grand Pavilion</h3>
                                <p class="text-sm text-gray-500 mb-4 flex items-center gap-1.5">
                                    <i class="ti ti-map-pin text-gray-400 text-base shrink-0"></i>
                                    <span>1 Harbor View Drive, San Francisco, CA 94105</span>
                                </p>

                                <div class="grid grid-cols-1 gap-3 mb-5">
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Keynote</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">Sarah Johnson</p>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Speaker</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">Michael Chen</p>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Speaker</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">Emily Carter</p>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Speaker</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">David Wilson</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="#"
                                        class="flex-1 text-center bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] transition-colors text-white text-sm font-semibold rounded-lg py-2.5">
                                        View Venue →
                                    </a>
                                    <a href="#"
                                        class="text-center border border-gray-200 hover:bg-gray-50 transition-colors text-gray-700 text-sm font-semibold rounded-lg py-2.5 px-4">
                                        Directions
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- NEW YORK panel -->
                        <div data-city-panel="nyc" class="city-panel hidden transition-all duration-300">
                            <div class="relative h-48 w-full">
                                <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?q=80&w=1200&auto=format&fit=crop"
                                    alt="New York venue" class="absolute inset-0 w-full h-full object-cover">
                                <span
                                    class="absolute top-3 right-3 flex items-center gap-1 bg-white/90 backdrop-blur text-[11px] font-semibold px-2 py-1 rounded-full text-gray-700 shadow-sm border border-gray-100/50">
                                    NY, NY
                                </span>
                            </div>
                            <div class="p-5">
                                <p
                                    class="text-[11px] font-bold tracking-widest text-[var(--color-primary)] uppercase mb-1">
                                    Venue</p>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">The Meridian Hall</h3>
                                <p class="text-sm text-gray-500 mb-4 flex items-center gap-1.5">
                                    <i class="ti ti-map-pin text-gray-400 text-base shrink-0"></i>
                                    <span>225 Liberty Street, New York, NY 10281</span>
                                </p>

                                <div class="grid grid-cols-2 gap-3 mb-5">
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-users text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Capacity</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">950</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-layout-grid text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Spaces</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">8 rooms</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-train text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">To
                                                Subway</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">3 min</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-parking text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Parking</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">120 spots</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="#"
                                        class="flex-1 text-center bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] transition-colors text-white text-sm font-semibold rounded-lg py-2.5">
                                        View Venue →
                                    </a>
                                    <a href="#"
                                        class="text-center border border-gray-200 hover:bg-gray-50 transition-colors text-gray-700 text-sm font-semibold rounded-lg py-2.5 px-4">
                                        Directions
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- LONDON panel -->
                        <div data-city-panel="london" class="city-panel hidden transition-all duration-300">
                            <div class="relative h-48 w-full">
                                <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?q=80&w=1200&auto=format&fit=crop"
                                    alt="London venue" class="absolute inset-0 w-full h-full object-cover">
                                <span
                                    class="absolute top-3 right-3 flex items-center gap-1 bg-white/90 backdrop-blur text-[11px] font-semibold px-2 py-1 rounded-full text-gray-700 shadow-sm border border-gray-100/50">
                                    London, UK
                                </span>
                            </div>
                            <div class="p-5">
                                <p
                                    class="text-[11px] font-bold tracking-widest text-[var(--color-primary)] uppercase mb-1">
                                    Venue</p>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">The Riverside Hall</h3>
                                <p class="text-sm text-gray-500 mb-4 flex items-center gap-1.5">
                                    <i class="ti ti-map-pin text-gray-400 text-base shrink-0"></i>
                                    <span>1 Southbank Way, London SE1 9PX</span>
                                </p>

                                <div class="grid grid-cols-2 gap-3 mb-5">
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-users text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Capacity</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">700</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-layout-grid text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Spaces</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">5 rooms</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-train text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">To
                                                Tube</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">4 min</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-parking text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Parking</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">80 spots</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="#"
                                        class="flex-1 text-center bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] transition-colors text-white text-sm font-semibold rounded-lg py-2.5">
                                        View Venue →
                                    </a>
                                    <a href="#"
                                        class="text-center border border-gray-200 hover:bg-gray-50 transition-colors text-gray-700 text-sm font-semibold rounded-lg py-2.5 px-4">
                                        Directions
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- TOKYO panel -->
                        <div data-city-panel="tokyo" class="city-panel hidden transition-all duration-300">
                            <div class="relative h-48 w-full">
                                <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?q=80&w=1200&auto=format&fit=crop"
                                    alt="Tokyo venue" class="absolute inset-0 w-full h-full object-cover">
                                <span
                                    class="absolute top-3 right-3 flex items-center gap-1 bg-white/90 backdrop-blur text-[11px] font-semibold px-2 py-1 rounded-full text-gray-700 shadow-sm border border-gray-100/50">
                                    Tokyo, JP
                                </span>
                            </div>
                            <div class="p-5">
                                <p
                                    class="text-[11px] font-bold tracking-widest text-[var(--color-primary)] uppercase mb-1">
                                    Venue</p>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Shibuya Sky Hall</h3>
                                <p class="text-sm text-gray-500 mb-4 flex items-center gap-1.5">
                                    <i class="ti ti-map-pin text-gray-400 text-base shrink-0"></i>
                                    <span>2-24-12 Shibuya, Shibuya City, Tokyo 150-0002</span>
                                </p>

                                <div class="grid grid-cols-2 gap-3 mb-5">
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-users text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Capacity</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">600</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-layout-grid text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Spaces</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">4 rooms</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-train text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">To
                                                Station</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">2 min</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-50/60 rounded-xl p-3 flex items-center gap-3 border border-gray-100/50">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[var(--color-primary-light)] flex items-center justify-center text-[var(--color-primary)] shrink-0">
                                            <i class="ti ti-parking text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] uppercase text-gray-400 font-semibold tracking-wider">
                                                Parking</p>
                                            <p class="text-sm font-bold text-gray-800 leading-tight">50 spots</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="#"
                                        class="flex-1 text-center bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] transition-colors text-white text-sm font-semibold rounded-lg py-2.5">
                                        View Venue →
                                    </a>
                                    <a href="#"
                                        class="text-center border border-gray-200 hover:bg-gray-50 transition-colors text-gray-700 text-sm font-semibold rounded-lg py-2.5 px-4">
                                        Directions
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /RIGHT -->

            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- SPEAKERS SECTION -->
    <!-- ============================== -->
    <section id="speakers" class="bg-white relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">

            <!-- Header -->
            <div class="flex flex-col items-center text-center gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <span
                        class="inline-flex items-center justify-center text-center gap-2 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        <span class="w-1.5 h-1.5 rounded-full bg-[var(--color-primary)]"></span>
                        Our Speakers
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-400">
                        Main Speakers
                    </h2>
                </div>
            </div>

            <!-- Speaker Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="John Doe" class="w-full h-[320px] object-cover" />
                    <div class="p-5 sm:p-6">
                        <h3 class="text-lg font-semibold text-gray-900">John Doe</h3>
                        <p class="text-sm text-gray-500 mt-1">CEO, ABC Company</p>
                        <p class="text-xs text-gray-400 mt-2 line-clamp-3">
                            John memiliki pengalaman lebih dari 15 tahun di bidang teknologi dan transformasi digital.
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Jane Smith" class="w-full h-[320px] object-cover" />
                    <div class="p-5 sm:p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Jane Smith</h3>
                        <p class="text-sm text-gray-500 mt-1">Product Manager</p>
                        <p class="text-xs text-gray-400 mt-2 line-clamp-3">
                            Jane berfokus pada pengembangan produk digital dan pengalaman pengguna.
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Michael Lee" class="w-full h-[320px] object-cover" />
                    <div class="p-5 sm:p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Michael Lee</h3>
                        <p class="text-sm text-gray-500 mt-1">UI/UX Designer</p>
                        <p class="text-xs text-gray-400 mt-2 line-clamp-3">
                            Michael telah menangani berbagai proyek desain antarmuka untuk perusahaan startup maupun
                            enterprise.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- SHARE FEEDBACK SECTION (CP VERSION) -->
    <!-- ============================== -->
    <section id="feedback" class="bg-gray-50 relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <!-- LEFT: Intro copy -->
                <div class="flex flex-col gap-5 lg:sticky lg:top-24">
                    <span
                        class="inline-flex w-fit items-center gap-2 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        <span class="w-1.5 h-1.5 rounded-full bg-[var(--color-primary)]"></span>
                        Suara Anda
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                        Bagaimana pengalaman Anda di OCBC Outlook?
                    </h2>
                    <p class="text-sm sm:text-base text-gray-500 leading-relaxed max-w-md">
                        Cerita dan masukan dari Anda membantu kami menghadirkan sesi, pembicara,
                        dan pengalaman yang lebih baik di penyelenggaraan berikutnya.
                    </p>
                    <div class="flex flex-col gap-3 mt-2 text-sm text-gray-600">
                        <div class="flex items-center gap-2.5">
                            <i class="ti ti-circle-check text-[var(--color-primary)] text-lg shrink-0"></i>
                            Langsung terhubung, tanpa isi formulir
                        </div>
                        <div class="flex items-center gap-2.5">
                            <i class="ti ti-circle-check text-[var(--color-primary)] text-lg shrink-0"></i>
                            Identitas Anda tetap rahasia
                        </div>
                        <div class="flex items-center gap-2.5">
                            <i class="ti ti-circle-check text-[var(--color-primary)] text-lg shrink-0"></i>
                            Masukan dibaca langsung oleh tim penyelenggara
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Contact Person Cards -->
                <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-6 sm:p-8">
                    <label class="text-sm font-semibold text-gray-900 mb-4 block">
                        Hubungi Tim Kami Langsung
                    </label>

                    <div class="flex flex-col gap-4">
                        <!-- CP Card 1 -->
                        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memberikan%20feedback%20tentang%20OCBC%20Outlook"
                            target="_blank" rel="noopener"
                            class="group flex items-center gap-4 rounded-2xl border border-gray-200 p-4 hover:border-[var(--color-primary)] hover:shadow-md transition-all">
                            <div
                                class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center shrink-0 group-hover:bg-green-100 transition-colors">
                                <i class="ti ti-brand-whatsapp text-2xl text-green-600"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-gray-900">Andi Pratama</p>
                                <p class="text-xs text-gray-500">Event Coordinator · +62 812-3456-7890</p>
                            </div>
                            <i
                                class="ti ti-chevron-right text-gray-300 group-hover:text-[var(--color-primary)] group-hover:translate-x-0.5 transition-all"></i>
                        </a>

                        <!-- CP Card 2 -->
                        <a href="https://wa.me/6289876543210?text=Halo%2C%20saya%20ingin%20memberikan%20feedback%20tentang%20OCBC%20Outlook"
                            target="_blank" rel="noopener"
                            class="group flex items-center gap-4 rounded-2xl border border-gray-200 p-4 hover:border-[var(--color-primary)] hover:shadow-md transition-all">
                            <div
                                class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center shrink-0 group-hover:bg-green-100 transition-colors">
                                <i class="ti ti-brand-whatsapp text-2xl text-green-600"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-gray-900">Sarah Wijaya</p>
                                <p class="text-xs text-gray-500">Guest Relations · +62 898-7654-3210</p>
                            </div>
                            <i
                                class="ti ti-chevron-right text-gray-300 group-hover:text-[var(--color-primary)] group-hover:translate-x-0.5 transition-all"></i>
                        </a>

                        <!-- Email option -->
                        <a href="mailto:feedback@ocbcoutlook.id?subject=Feedback%20OCBC%20Outlook"
                            class="group flex items-center gap-4 rounded-2xl border border-dashed border-gray-200 p-4 hover:border-[var(--color-primary)] hover:bg-gray-50 transition-all">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center shrink-0 group-hover:bg-blue-100 transition-colors">
                                <i class="ti ti-mail text-2xl text-blue-500"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-gray-900">Kirim via Email</p>
                                <p class="text-xs text-gray-500">feedback@ocbcoutlook.id</p>
                            </div>
                            <i
                                class="ti ti-chevron-right text-gray-300 group-hover:text-[var(--color-primary)] group-hover:translate-x-0.5 transition-all"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- CTA SECTION (BOOK CONSULTATION) -->
    <!-- ============================== -->
    {{-- <section id="private-consultation" class="bg-gray-50 py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">
            <div class="grid lg:grid-cols-2 gap-10 items-center"> --}}

    {{-- Left: Text content --}}
    {{-- <div class="flex flex-col gap-5"> --}}

    {{-- <span
                        class="inline-flex w-fit items-center gap-2 bg-[#DA291C]/10 text-[var(--color-primary)] text-xs font-semibold px-4 py-1.5 rounded-full">
                        Eksklusif untuk Nasabah OCBC
                    </span> --}}

    {{-- <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Konsultasi privat, solusi finansial yang lebih personal.
                    </h2> --}}

    {{-- <p class="text-sm sm:text-base text-gray-500 leading-relaxed max-w-md">
                        Sesi empat mata bersama ahli OCBC untuk membahas kebutuhan keuangan,
                        bisnis, maupun rencana masa depan Anda — rahasia, personal, dan fleksibel.
                    </p> --}}

    {{-- <div class="flex flex-wrap gap-3 mt-2">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-gray-900 hover:bg-black text-white text-sm font-semibold px-6 py-3 rounded-full transition-colors">
                            Jadwalkan Konsultasi
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-2 border border-gray-300 hover:border-gray-900 text-gray-900 text-sm font-semibold px-6 py-3 rounded-full transition-colors">
                            Chat via WhatsApp
                        </a>
                    </div> --}}

    {{-- Benefit list (simple, no icons) --}}
    {{-- <div class="flex flex-wrap gap-x-6 gap-y-2 mt-4 text-xs text-gray-500">
                        <span>✔ Rahasia & Aman</span>
                        <span>✔ Solusi Personal</span>
                        <span>✔ Jadwal Fleksibel</span>
                    </div>

                </div> --}}

    {{-- Right: Image --}}
    {{-- <div class="w-full h-full rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1170&auto=format&fit=crop"
                        alt="OCBC Private Consultation" class="w-full h-full object-cover rounded-3xl" />
                </div>

            </div>
        </div>
    </section> --}}

    <section id="sponsored" class="bg-white relative overflow-hidden py-12 lg:py-15">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">

            <!-- Header -->
            <div class="flex flex-col items-center text-center gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <span
                        class="inline-flex items-center justify-center text-center gap-2 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        <span class="w-1.5 h-1.5 rounded-full bg-[var(--color-primary)]"></span>
                        Our Partners & Sponsors
                    </span>
                </div>
            </div>

            <div class="flex flex-col items-center text-center gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-400">
                        Sponsored By
                    </h2>
                </div>
            </div>

            <!-- Sponsor Logos -->
            <div class="flex flex-wrap justify-center gap-4 sm:gap-6">

                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-1.png" alt="Sponsor 1"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>

                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-2.png" alt="Sponsor 2"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>

                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-3.png" alt="Sponsor 3"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>

                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-4.png" alt="Sponsor 4"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>
                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-5.png" alt="Sponsor 5"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>
                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-5.png" alt="Sponsor 5"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>
                <div
                    class="flex items-center justify-center bg-gray-100 rounded-2xl h-24 sm:h-28 border border-gray-100 hover:border-gray-200 transition-colors
                    w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-1rem)] lg:w-[calc(20%-1.2rem)]">
                    <img src="assets/images/sponsors/sponsor-5.png" alt="Sponsor 5"
                        class="max-h-8 sm:max-h-10 w-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-200" />
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="bg-white relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">
            <!-- Header -->
            <div class="flex flex-col items-center text-center gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-400">
                        Gallery
                    </h2>
                </div>
            </div>

            <!-- Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        function setHeaderHeight() {
            const header = document.querySelector('header');
            if (header) {
                document.documentElement.style.setProperty('--header-h', `${header.offsetHeight}px`);
            }
        }
        setHeaderHeight();
        window.addEventListener('resize', setHeaderHeight);

        // City tab switching logic
        document.querySelectorAll('.city-tab-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var target = btn.getAttribute('data-city-tab');

                document.querySelectorAll('.city-tab-btn').forEach(function(b) {
                    b.classList.remove('bg-white', 'text-[var(--color-primary)]', 'shadow-sm');
                    b.classList.add('text-gray-500', 'hover:text-gray-900');
                });
                btn.classList.remove('text-gray-500', 'hover:text-gray-900');
                btn.classList.add('bg-white', 'text-[var(--color-primary)]', 'shadow-sm');

                // Switch venue card panels
                document.querySelectorAll('.city-panel').forEach(function(panel) {
                    panel.classList.toggle('hidden', panel.getAttribute('data-city-panel') !==
                        target);
                });

                // Switch agenda list panels
                document.querySelectorAll('.city-agenda').forEach(function(agenda) {
                    agenda.classList.toggle('hidden', agenda.getAttribute('data-city-agenda') !==
                        target);
                });
            });
        });
    </script>
@endpush
