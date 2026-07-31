@extends('app')

@section('content')
    <section id="hero-section" class="bg-gray-900 relative overflow-hidden">
        {{-- Background glowing effect for premium feel --}}
        <div
            class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-yellow-500/10 rounded-full blur-[120px] pointer-events-none">
        </div>

        <div
            class="max-w-[100rem] mx-auto px-6 lg:px-5 flex items-center justify-center flex-col gap-8 min-h-dvh py-24 lg:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">
                <div class="flex flex-col gap-6">
                    <div
                        class="bg-indigo-600 rounded-3xl px-6 md:px-8 py-6 md:py-8 min-h-[220px] sm:min-h-[260px] md:min-h-[320px] flex flex-col justify-between text-white">
                        <div class="flex flex-col gap-3">
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold leading-snug">
                                Dublin Best <br> Marathon 2025
                            </h2>
                            <p class="text-indigo-100 text-sm leading-snug max-w-md">
                                Embark on the ultimate test of endurance and determination with
                                marathons, where each stride is a journey of self-discovery.
                            </p>
                        </div>
                        <div class="mt-6">
                            <div>
                                <a href="#"
                                    class="inline-flex items-center gap-2 bg-white text-gray-900 font-semibold text-sm px-5 py-2.5 rounded-full hover:bg-gray-100 transition-all duration-200">
                                    Register Here
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Baris bawah kolom kiri: 2 sub-card berdampingan --}}
                    <div class="grid grid-cols-2 gap-4 sm:gap-6">
                        {{-- Card 2: Thumbnail foto pelari --}}
                        <div
                            class="bg-white rounded-3xl p-3 sm:p-5 flex flex-col justify-between shadow-sm border border-gray-100">
                            @php
                                $units = [
                                    ['value' => '267', 'label' => 'Days'],
                                    ['value' => '11', 'label' => 'Hours'],
                                    ['value' => '23', 'label' => 'Mins'],
                                    ['value' => '31', 'label' => 'Secs'],
                                ];
                            @endphp
                            <div class="grid grid-cols-4 gap-1 sm:gap-2 text-center mb-3">
                                @foreach ($units as $unit)
                                    <div class="min-w-0">
                                        <p class="text-sm sm:text-lg font-bold text-gray-900 truncate">{{ $unit['value'] }}
                                        </p>
                                        <p class="text-[8px] sm:text-[10px] uppercase text-gray-400 tracking-wide">
                                            {{ $unit['label'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="border-t border-gray-100 pt-3 text-[11px] sm:text-xs text-gray-500 leading-relaxed">
                                October 27th, 2025 <br> At 8:45 AM
                            </div>
                        </div>

                        {{-- Card 3: Countdown timer --}}
                        <div
                            class="bg-white rounded-3xl p-3 sm:p-5 flex flex-col justify-between shadow-sm border border-gray-100">
                            @php
                                $units = [
                                    ['value' => '267', 'label' => 'Days'],
                                    ['value' => '11', 'label' => 'Hours'],
                                    ['value' => '23', 'label' => 'Mins'],
                                    ['value' => '31', 'label' => 'Secs'],
                                ];
                            @endphp
                            <div class="grid grid-cols-4 gap-1 sm:gap-2 text-center mb-3">
                                @foreach ($units as $unit)
                                    <div class="min-w-0">
                                        <p class="text-sm sm:text-lg font-bold text-gray-900 truncate">{{ $unit['value'] }}
                                        </p>
                                        <p class="text-[8px] sm:text-[10px] uppercase text-gray-400 tracking-wide">
                                            {{ $unit['label'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="border-t border-gray-100 pt-3 text-[11px] sm:text-xs text-gray-500 leading-relaxed">
                                October 27th, 2025 <br> At 8:45 AM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-3xl overflow-hidden min-h-[300px] sm:min-h-[400px] lg:min-h-0">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Runner ready at start line" class="w-full h-full object-cover" />
                </div>
            </div>
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/70">
                <span class="text uppercase tracking-widest">Scroll More</span>
                <a href="#agenda-section" class="animate-bounce">
                    <i class="fa-solid fa-arrow-down"></i>
                </a>

            </div>
        </div>
    </section>
    <section id="agenda-section" class="bg-gray-900 relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">

            {{-- Header --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <span
                        class="inline-flex items-center gap-2 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-900"></span>
                        Our Agenda
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-400">
                        Agenda Overview
                    </h2>
                </div>

                <a href="#full-schedule"
                    class="inline-flex items-center gap-2 bg-gray-900 text-lime-300 font-semibold text-sm px-5 py-3 rounded-full hover:bg-gray-800 transition-all duration-200 w-fit">
                    View Full Schedule
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 divide-y divide-gray-100">
                <div
                    class="flex items-center gap-4 sm:gap-8 px-5 sm:px-8 py-5 sm:py-6 bg-white hover:bg-gray-50 transition-colors">
                    <div class="w-20 sm:w-24 shrink-0">
                        <p class="text-sm font-semibold text-gray-900">09:00AM</p>
                        <span class="text-[10px] uppercase tracking-wide text-gray-400">Keynote</span>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-900">The AI Design Revolution</h3>
                        <p class="text-xs sm:text-sm text-gray-500 mt-1 line-clamp-2">
                            How generative intelligence is reshaping the creative workflow from wireframes.
                        </p>
                    </div>

                    <div class="shrink-0 flex items-center gap-2">
                        <div class="text-right hidden sm:block">
                            <p class="text-[10px] uppercase text-gray-400">Speaker</p>
                            <p class="text-xs font-semibold text-gray-900">Sarah Chen</p>
                        </div>
                        <button
                            class="w-6 h-6 rounded-full bg-lime-300 text-gray-900 flex items-center justify-center text-xs font-bold">
                            +
                        </button>
                    </div>
                </div>

            </div>

            {{-- CTA --}}
            <div class="flex justify-center mt-10">
                <a href="#register"
                    class="inline-flex items-center gap-2 bg-gray-900 text-lime-300 font-semibold text-sm px-6 py-3 rounded-full hover:bg-gray-800 transition-all duration-200">
                    Register for Devesign
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>
            </div>

        </div>
    </section>
    <section id="speakers" class="bg-gray-900 relative overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">

            {{-- Header --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 mb-10">
                <div class="flex flex-col gap-3">
                    <span
                        class="inline-flex items-center gap-2 text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-900"></span>
                        Our Speakers
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-400">
                        Meet the Experts
                    </h2>
                </div>

                <a href="#full-speakers"
                    class="inline-flex items-center gap-2 bg-gray-900 text-lime-300 font-semibold text-sm px-5 py-3 rounded-full hover:bg-gray-800 transition-all duration-200 w-fit">
                    View All Speakers
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>
            </div>

            {{-- Speaker Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                    <img src="assets/images/speaker-1.jpg" alt="John Doe" class="w-full h-[220px] object-cover" />
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
                    <img src="assets/images/speaker-2.jpg" alt="Jane Smith" class="w-full h-[220px] object-cover" />
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
                    <img src="assets/images/speaker-3.jpg" alt="Michael Lee" class="w-full h-[220px] object-cover" />
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
@endsection
