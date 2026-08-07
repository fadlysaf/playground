@extends('app')

@section('content')
    <section class="relative overflow-hidden bg-[#0B0A14] px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-6xl py-32 sm:py-48 lg:py-32">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">

                <!-- Kolom Kiri: Teks -->
                <div class="relative z-10 text-left">
                    <p class="mb-4 text-xs font-semibold tracking-[0.2em] text-[#7DE8D8] uppercase">
                        Kartu Aurelia · Khusus Undangan</p>
                    <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">
                        Kartu yang ditempa dari cahaya aurora.</h1>
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">Aurelia bukan
                        sekadar kartu kredit — ia portal menuju dunia yang bergerak lebih cepat dari waktu.
                        Ditempa dari lapisan holografik, setiap transaksi terasa seperti mantra.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-full bg-gradient-to-r from-[#F2DFA0] to-[#E8C468] px-5 py-2.5 text-sm font-semibold text-[#1B140A] shadow-xs hover:opacity-90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E8C468]">Ajukan
                            Undangan</a>
                        <a href="#" class="text-sm/6 font-semibold text-white">Jelajahi Keistimewaan <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>

                <!-- Kolom Kanan: spacer (desktop, kartu di render absolute full-bleed) -->
                <div class="hidden lg:block"></div>

            </div>

            <!-- Kartu produk versi MOBILE: tampil di alur normal, di bawah teks -->
            <div class="mt-12 flex justify-center lg:hidden">
                <div
                    class="flex h-52 w-full max-w-sm rotate-2 flex-col justify-between rounded-2xl bg-gradient-to-br from-[#C9A8FF] via-[#7DE8D8] to-[#F5C9E8] p-5 shadow-2xl shadow-[#C9A8FF]/30">
                    <div class="flex items-start justify-between">
                        <div class="h-7 w-9 rounded-md bg-gradient-to-br from-[#FCEFC7] to-[#C9A24A]"></div>
                        <span class="text-[10px] font-semibold tracking-widest text-[#1B140A]/70">∞ INFINITE</span>
                    </div>
                    <p class="text-sm font-semibold tracking-[0.25em] text-[#1B140A]">•••• •••• •••• 8841</p>
                    <div class="flex items-end justify-between">
                        <div>
                            <p class="text-[9px] uppercase tracking-widest text-[#1B140A]/70">Pemegang Utama</p>
                            <p class="text-xs font-semibold text-[#1B140A]">A. WICAKSONO</p>
                        </div>
                        <p class="text-lg font-semibold tracking-wide text-[#1B140A]">AURELIA</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu produk versi DESKTOP: full-bleed di sisi kanan -->
        <div class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 items-center justify-center lg:flex">
            <div
                class="flex h-72 w-[420px] rotate-6 flex-col justify-between rounded-3xl bg-gradient-to-br from-[#C9A8FF] via-[#7DE8D8] to-[#F5C9E8] p-7 shadow-2xl shadow-[#C9A8FF]/30">
                <div class="flex items-start justify-between">
                    <div class="h-9 w-12 rounded-md bg-gradient-to-br from-[#FCEFC7] to-[#C9A24A]"></div>
                    <span class="text-xs font-semibold tracking-widest text-[#1B140A]/70">∞ INFINITE</span>
                </div>
                <p class="text-lg font-semibold tracking-[0.3em] text-[#1B140A]">•••• •••• •••• 8841</p>
                <div class="flex items-end justify-between">
                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-[#1B140A]/70">Pemegang Utama</p>
                        <p class="text-sm font-semibold text-[#1B140A]">A. WICAKSONO</p>
                    </div>
                    <p class="text-2xl font-semibold tracking-wide text-[#1B140A]">AURELIA</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-slate-50 px-6 py-16">
        <div class="mx-auto max-w-5xl">

            <!-- Heading & Paragraph -->
            <div class="mb-10 max-w-2xl">
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">
                    Produk Pilihan Kami
                </h2>
                <p class="mt-3 text-slate-600 leading-relaxed">
                    Temukan koleksi produk terbaik yang kami rekomendasikan khusus untuk Anda, dengan kualitas terjamin dan
                    harga terbaik.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                <!-- Card 1 -->
                <div
                    class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x400" alt="Nama Produk 1"
                            class="h-56 w-full object-cover" />
                        <span
                            class="absolute left-3 top-3 rounded-full bg-emerald-500 px-3 py-1 text-xs font-semibold text-white">
                            Terlaris
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-slate-900">Nama Produk 1</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Deskripsi singkat mengenai produk ini, menjelaskan keunggulan dan fitur utamanya.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x400" alt="Nama Produk 2"
                            class="h-56 w-full object-cover" />
                        <span
                            class="absolute left-3 top-3 rounded-full bg-orange-500 px-3 py-1 text-xs font-semibold text-white">
                            Baru
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-slate-900">Nama Produk 2</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            Deskripsi singkat mengenai produk ini, menjelaskan keunggulan dan fitur utamanya.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
