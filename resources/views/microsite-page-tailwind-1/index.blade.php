@extends('app')

@section('content')
    <!-- HERO -->
    <section class="relative overflow-hidden">
        <!-- signature coffee-ring accents -->
        <div class="ring-stain w-72 h-72 -top-16 -right-16"></div>
        <div class="ring-stain w-40 h-40 top-40 -right-4 hidden md:block"></div>

        <div class="max-w-6xl mx-auto px-6 pt-16 pb-20 md:pt-24 md:pb-28 grid md:grid-cols-2 gap-12 items-center relative">
            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-[var(--sage)] font-medium mb-4">
                    Diseduh setiap pagi, sejak jam 5
                </p>
                <h1 class="font-display text-5xl md:text-6xl font-semibold leading-[1.05] mb-6">
                    Kopi yang bikin
                    <span class="italic text-[var(--amber)]">pagimu</span>
                    layak ditunggu.
                </h1>
                <p class="text-base md:text-lg text-[var(--espresso)]/70 max-w-md mb-8">
                    Biji kopi lokal dari petani Gayo dan Toraja, disangrai kecil-kecil setiap minggu supaya rasanya selalu
                    segar sampai ke cangkirmu.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#promo"
                        class="bg-[var(--espresso)] text-[var(--cream)] px-7 py-3 rounded-full font-medium hover:bg-[var(--amber)] transition-colors">
                        Lihat Promo Hari Ini
                    </a>
                    <a href="#menu"
                        class="border border-[var(--espresso)]/30 px-7 py-3 rounded-full font-medium hover:border-[var(--espresso)] transition-colors">
                        Lihat Menu
                    </a>
                </div>
            </div>

            <div class="relative">
                <div
                    class="aspect-square rounded-[2.5rem] bg-[var(--espresso)] flex items-center justify-center overflow-hidden shadow-xl">
                    <span class="font-display text-[var(--cream)]/20 text-9xl select-none">A</span>
                </div>
                <div
                    class="absolute -bottom-6 -left-6 bg-[var(--cream)] border border-[var(--line)] rounded-2xl px-5 py-4 shadow-lg">
                    <p class="font-display text-2xl font-semibold">4.9<span class="text-[var(--amber)]">/5</span></p>
                    <p class="text-xs text-[var(--espresso)]/60">dari 1.200+ pelanggan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROMO -->
    <section id="promo" class="bg-[var(--espresso)] text-[var(--cream)]">
        <div class="max-w-6xl mx-auto px-6 py-16 md:py-20">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-[var(--amber)] font-medium mb-3">Promo Bulan Ini</p>
                    <h2 class="font-display text-3xl md:text-4xl font-semibold">Nikmati kopi favoritmu, lebih hemat.</h2>
                </div>
                <p class="text-[var(--cream)]/60 max-w-sm text-sm">Berlaku untuk pemesanan dine-in maupun take away di
                    seluruh cabang Arunika.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div
                    class="bg-[var(--cream)]/5 border border-[var(--cream)]/15 rounded-2xl p-8 hover:bg-[var(--cream)]/10 transition-colors">
                    <p class="font-display text-4xl font-semibold text-[var(--amber)] mb-2">20%</p>
                    <h3 class="font-medium mb-2">Beli 1 Gratis Kopi Susu</h3>
                    <p class="text-sm text-[var(--cream)]/60">Setiap pembelian 2 gelas kopi susu gula aren, diskon 20%
                        berlaku otomatis di kasir.</p>
                </div>
                <div
                    class="bg-[var(--cream)]/5 border border-[var(--cream)]/15 rounded-2xl p-8 hover:bg-[var(--cream)]/10 transition-colors">
                    <p class="font-display text-4xl font-semibold text-[var(--amber)] mb-2">15rb</p>
                    <h3 class="font-medium mb-2">Harga Spesial Jam Kerja</h3>
                    <p class="text-sm text-[var(--cream)]/60">Kopi hitam & americano cukup Rp15.000 setiap pukul
                        08.00–11.00.</p>
                </div>
                <div
                    class="bg-[var(--cream)]/5 border border-[var(--cream)]/15 rounded-2xl p-8 hover:bg-[var(--cream)]/10 transition-colors">
                    <p class="font-display text-4xl font-semibold text-[var(--amber)] mb-2">Gratis</p>
                    <h3 class="font-medium mb-2">Isi Ulang Kopi Hitam</h3>
                    <p class="text-sm text-[var(--cream)]/60">Bawa tumbler sendiri, isi ulang kopi hitam kedua tanpa biaya
                        tambahan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="promo" class="bg-[var(--espresso)] text-[var(--cream)]">
        <div class="max-w-6xl mx-auto px-6 py-16 md:py-20">
            <div class="flex flex-row items-center justify-between gap-6 mb-12">
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-[var(--amber)] font-medium mb-3">Promo Bulan Ini</p>
                    <h2 class="font-display text-3xl md:text-4xl font-semibold">Nikmati kopi favoritmu, lebih hemat.</h2>
                </div>
                <p class="text-[var(--cream)]/60 max-w-sm text-sm">Berlaku untuk pemesanan dine-in maupun take away di
                    seluruh cabang Arunika.</p>
            </div>

            <div class="flex flex-col gap-6">
                <div
                    class="w-full max-w-md mr-auto bg-#fbf7f0/5 border border-#fbf7f0/15 rounded-2xl p-8 hover:bg-[var(--cream)]/10 transition-colors">
                    <p class="font-display text-4xl font-semibold text-[var(--amber)] mb-2">20%</p>
                    <h3 class="font-medium mb-2">Beli 1 Gratis Kopi Susu</h3>
                    <p class="text-sm text-[var(--cream)]/60">Setiap pembelian 2 gelas kopi susu gula aren, diskon 20%
                        berlaku otomatis di kasir.</p>
                </div>
                <div
                    class="w-full max-w-md mx-auto flex-1 bg-[var(--cream)]/5 border border-[var(--cream)]/15 rounded-2xl p-8 hover:bg-[var(--cream)]/10 transition-colors">
                    <p class="font-display text-4xl font-semibold text-[var(--amber)] mb-2">15rb</p>
                    <h3 class="font-medium mb-2">Harga Spesial Jam Kerja</h3>
                    <p class="text-sm text-[var(--cream)]/60">Kopi hitam & americano cukup Rp15.000 setiap pukul
                        08.00–11.00.</p>
                </div>
                <div
                    class="w-full max-w-md ml-auto flex-1 bg-[var(--cream)]/5 border border-[var(--cream)]/15 rounded-2xl p-8 hover:bg-[var(--cream)]/10 transition-colors">
                    <p class="font-display text-4xl font-semibold text-[var(--amber)] mb-2">Gratis</p>
                    <h3 class="font-medium mb-2">Isi Ulang Kopi Hitam</h3>
                    <p class="text-sm text-[var(--cream)]/60">Bawa tumbler sendiri, isi ulang kopi hitam kedua tanpa biaya
                        tambahan.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
