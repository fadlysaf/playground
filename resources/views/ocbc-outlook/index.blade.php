@extends('app')

@section('content')
    <section id="hero-section" class="bg-gray-900 relative overflow-hidden">
        {{-- Background glowing effect for premium feel --}}
        <div
            class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-yellow-500/10 rounded-full blur-[120px] pointer-events-none">
        </div>

        <div
            class="max-w-4xl mx-auto px-6 lg:px-8 pt-32 pb-24 lg:pt-40 lg:pb-32 flex flex-col items-center justify-center text-center gap-16 relative z-10">
            {{-- Main Banner --}}
            <div class="flex flex-col gap-6 items-center justify-center max-w-3xl">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-gray-100">
                    Nikmati Beragam Promo <span class="text-yellow-500">Bayar Tagihan</span> di <span
                        class="text-yellow-500">OCBC mobile</span>
                </h1>
                <p class="text-base md:text-lg text-gray-400 leading-relaxed max-w-2xl">
                    Bayar tagihan jadi lebih hemat dengan berbagai promo menarik. Mulai dari listrik, air, internet, hingga
                    tagihan lainnya, semuanya lebih praktis dalam satu aplikasi.
                </p>
                <div class="mt-2">
                    <a href="#"
                        class="inline-block bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-semibold px-8 py-3 rounded-full transition-all duration-200 hover:scale-105 shadow-lg shadow-yellow-500/20">
                        Download OCBC mobile
                    </a>
                </div>
            </div>
        </div>
        {{-- About the Event & Theme Section --}}
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8 pt-12 px-6 md:px-12 pb-12 border-t border-gray-800/60">
            {{-- About the Event --}}
            <div
                class="md:-translate-x-8 bg-gray-800/40 backdrop-blur-md border border-gray-700/40 rounded-2xl p-6 text-left hover:border-yellow-500/30 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-4">
                    <div
                        class="p-2.5 rounded-lg bg-yellow-500/10 text-yellow-500 group-hover:bg-yellow-500 group-hover:text-gray-900 transition-colors duration-300">
                        <i class="fa-solid fa-calendar-check text-lg"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-100">About the Event</h2>
                </div>
                <p class="text-sm md:text-base text-gray-400 leading-relaxed">
                    Bergabunglah dalam event finansial terbesar kami untuk mempelajari tren keuangan terkini, strategi
                    investasi, dan optimalisasi digital banking bersama para pakar industri.
                </p>
            </div>

            {{-- Theme --}}
            <div
                class="bg-gray-800/40 backdrop-blur-md border border-gray-700/40 rounded-2xl p-6 text-left hover:border-yellow-500/30 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-4">
                    <div
                        class="p-2.5 rounded-lg bg-yellow-500/10 text-yellow-500 group-hover:bg-yellow-500 group-hover:text-gray-900 transition-colors duration-300">
                        <i class="fa-solid fa-lightbulb text-lg"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-100">Event Theme</h2>
                </div>
                <p class="text-sm md:text-base text-gray-400 leading-relaxed">
                    <strong>"Empowering Your Digital Future"</strong> — Mengakselerasi pertumbuhan finansial individu
                    dan bisnis melalui ekosistem digital inovatif yang aman, terintegrasi, dan inklusif.
                </p>
            </div>
        </div>
    </section>
    <section>
        {{-- event schedule --}}
    </section>
@endsection
