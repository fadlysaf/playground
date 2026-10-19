@extends('app')

@section('footer')
    @include('disneyrun.footer')
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/disneyrun/style.css') }}">
@endpush

@section('content')
    <div class="relative z-10 min-h-screen flex flex-col bg-cover on-element--stacked"
        style="background-image: url('https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/FA_Banner_Microsite_Disney_Run_73766ef43b.jpg');">
        <section id="hero2" class="w-full flex flex-col items-center relative">
            <picture class="w-full">
                <source media="(min-width: 500px)"
                    srcset="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/new_main_kv_4ccac64805.jpg">

                <img src="https://cdn1.ocbc.id/asset/media/Feature/Banner/Banner%20Nyala/disney-run-mobile.jpeg"
                    alt="Disney Run 2026 Jakarta" class="w-full h-auto block object-cover">
            </picture>
            <div class="w-full flex justify-center px-4 py-4 md:absolute md:bottom-5 md:py-0 z-10">
                <a href="https://ocbcdisneyrun2026.gofit.id/member/events/27/" class="primary-btn" target="blank">
                    Beli tiket di sini
                </a>
            </div>
        </section>
        <section id="save-the-date" class="flex py-4 px-6 md:px-8 relative z-10 justify-center overflow-hidden">
            <div class="max-w-6xl mx-auto">
                <img alt="Save The Date Disney Run 2026 Jakarta"
                    class="w-max-screen h-[20rem] mt-8 w-full h-auto rounded-2xl shadow-md block object-cover md:block"
                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/timeline_6ce09f10f4.jpg">
            </div>
        </section>
        <section id="mark-your-date" class="flex py-4 px-6 md:px-8 relative z-10 justify-center overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <img class="w-max-screen h-[20rem] mt-8 w-full h-auto rounded-2xl shadow-md block object-cover md:block"
                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/WEBSITE_BANNER_DISNEY_RUN_GLOBAL_DEBIT_CARD_RACE_PACK_and_RACE_DAY_RCP_DESKTOP_6ef33656a6.webp"
                    alt="Disney Run 2026 Jakarta" loading="lazy">
            </div>
        </section>
        <section id="category" class="rt-bg-host pt-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center max-w-3xl mx-auto mb-4">
                    <h2 class="text-black text-xl md:text-2xl font-medium mb-4 reveal-element reveal-up is-visible">
                        Pilihan kategori lari yang bisa kamu ikuti
                    </h2>
                </div>
                <div class="grid grid-cols-3 gap-6 md:gap-8 mb-12 max-w-3xl mx-auto">
                    <div class="reveal-element reveal-up delay-100 is-visible">
                        <div class="overflow-hidden rounded-2xl shadow-md border-2 border-pink-50 group">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/kategori_1k_eng_87e0a83105.jpg"
                                alt="Kategori 1K"
                                class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                    <div class="reveal-element reveal-up delay-200 is-visible">
                        <div class="overflow-hidden rounded-2xl shadow-md border-2 border-pink-50 group">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/kategori_5k_eng_c162912193.jpg"
                                alt="Kategori  5K"
                                class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                    <div class="reveal-element reveal-up delay-300 is-visible">
                        <div class="overflow-hidden rounded-2xl shadow-md border-2 border-pink-50 group">
                            <img loading="lazy" decoding="async"
                                src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/kategori_10k_eng_7fbea126d8.jpg"
                                alt="Kategori  10K"
                                class="w-full aspect-square object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="kategori" class="py-8 px-4 md:px-8 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-10 reveal-element reveal-up is-visible">
                    <h2 class="text-xl text-black md:text-2xl font-bold mb-3">
                        Kategori &amp; harga tiket Disney Run Jakarta 2026
                    </h2>
                </div>
                <div class="disney-table-wrapper overflow-x-auto reveal-element reveal-up delay-200 is-visible">
                    <table class="disney-table">
                        <thead>
                            <tr>
                                <th style="background-color: gray;">Kategori</th>
                                <th style="background-color: gray;">
                                    Early Access Credit Card
                                    Harga <br> * tiket khusus Nasabah Baru yang mengajukan &amp; approve Kartu Kredit OCBC
                                    Star Wars dan 90°N
                                </th>
                                <th style="background-color: gray;" class="font-bold">Pre-sale Harga tiket Pre-
                                    Sale khusus
                                    Nasabah OCBC</th>
                                <th><span class="font-bold">General Sale
                                        Harga* tiket untuk umum, dengan metode pembayaran yang tersedia</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1K (Child / Adult)</td>
                                <td>Rp174.500</td>
                                <td>Rp349.000</td>
                                <td class="pink-bg"><span class="font-bold text-xs lg:text-lg">Rp449.000</span></td>
                            </tr>
                            <tr>
                                <td>1K Family package: (1 Child + 1 Adult)</td>
                                <td>Rp324.500</td>
                                <td>Rp649.000</td>
                                <td class="general-red-text pink-bg"><span
                                        class="font-bold text-xs lg:text-lg">Rp749.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>5K</td>
                                <td>Rp224.500</td>
                                <td>Rp449.000</td>
                                <td class="general-red-text pink-bg"><span
                                        class="font-bold text-xs lg:text-lg">Rp549.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>10K</td>
                                <td>Rp249.500</td>
                                <td>Rp499.000</td>
                                <td class="general-red-text pink-bg"><span
                                        class="font-bold text-xs lg:text-lg">Rp599.000</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="pt-4 mb-5 italic"><small>
                        *Harga tertera belum termasuk pajak, biaya layanan, maupun biaya admin transaksi. <br></small>
                </p>

                <div class="max-w-6xl mx-auto mt-[2rem] relative z-10">
                    <div
                        class="bg-white rounded-3xl p-6 md:p-10 max-w-5xl mx-auto shadow-xl border border-red-100/60 text-center relative overflow-hidden">
                        <div class="max-w-3xl mx-auto mb-2 reveal-element reveal-up relative is-visible">
                            <h2 class="text-[#ea0a2a] text-xl md:text-2xl font-medium mb-3 leading-tight">
                                Dapatkan Cashback 30% untuk pembelian tiket Disney Run Jakarta 2026 yang sudah kamu
                                lakukan
                                🎁
                            </h2>
                        </div>
                        <div class="max-w-4xl mx-auto mb-2">
                            <p class="mt-2 text-slate-500 text-base font-medium">
                                10 September 2026 - 15 Oktober 2026
                            </p>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row gap-8 justify-center items-center reveal-element reveal-scale delay-300">
                            <a href="https://www.ocbc.id/id/promo/2026/09/09/cashback-30-persen-general-sale-disneyrunjkt26"
                                target="_blank" class="primary-btn">
                                <em class="fa-solid fa-circle-info mr-2"></em>
                                Info Lengkap
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="early-access" class="rt-bg-host py-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <div
                    class="bg-white rounded-3xl p-6 md:p-10 max-w-5xl mx-auto shadow-xl border border-red-100/60 text-center relative overflow-hidden">
                    <div class="max-w-3xl mx-auto mb-2 reveal-element reveal-up relative is-visible">
                        <h2 class="text-black text-xl md:text-2xl font-medium mb-3 leading-tight">
                            Khusus Nasabah yang telah mengikuti <span class="general-red-text">Early Access
                                program,</span>
                            <br>
                            segera tukarkan tiket kamu!
                        </h2>
                    </div>
                    <div class="max-w-4xl mx-auto mb-2">
                        <p class="mt-2 text-slate-500 text-base font-medium">
                            Periode: 1 September - 17 September | 23.59 WIB
                        </p>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row gap-3 md:gap-8 justify-center items-center reveal-element reveal-scale delay-300">
                        <a href="https://www.ocbc.id/id/promo/2026/08/28/early-access-disney-run" target="_blank"
                            class="primary-btn">
                            <em class="fa-solid fa-circle-info mr-2"></em>
                            Info lengkap
                        </a>
                        <a href="https://www.ocbc.id/asset/media/Feature/PDF/adhoc/2026/09/04/cdn1-flow-redemption-early-access"
                            target="_blank" class="primary-btn">
                            <em class="fa-solid fa-circle-info mr-2"></em>
                            Cara tukar e-voucher
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="medal"
            class="rt-bg-host medal-section py-12 px-4 md:px-8 mt-0 mb-0 relative z-10 overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <!-- Outer section container with soft gradient background -->
                <div
                    class="bg-white rounded-3xl p-2 md:p-10 max-w-5xl mx-auto shadow-xl border border-slate-200/80 relative">
                    <!-- 1. TEXT — top of section (outside white card) -->
                    <div class="text-center max-w-2xl mx-auto mb-8 pt-2 relative z-10">
                        <h2 class="text-xl md:text-2xl font-medium text-black leading-tight">
                            A Medal to Celebrate your Magical Moment
                        </h2>
                    </div>
                    <!-- 2. WHITE MEDAL CARD — container for the 3 medals -->
                    <div class="bg-white rounded-3xl p-6 md:p-10 mb-8 relative z-10">
                        <div class="medal-list-container !bg-transparent !p-0">
                            <div class="medal-list">
                                <div class="medal-item">
                                    <div class="medal-img-wrapper">
                                        <img loading="lazy" decoding="async"
                                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/1_d948a2fec8.png"
                                            alt="Kategori lari 1k Disney Run Jakarta 2026">
                                    </div>
                                    <div class="medal-details">
                                        <span class="medal-name">1K Child / Adult <br>
                                            Family Package</span>
                                    </div>
                                </div>
                                <div class="medal-item">
                                    <div class="medal-img-wrapper">
                                        <img loading="lazy" decoding="async"
                                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/2_ef67896188.png"
                                            alt="Kategori lari 5k Disney Run Jakarta 2026">
                                    </div>
                                    <div class="medal-details">
                                        <span class="medal-name">5K Run</span>
                                    </div>
                                </div>
                                <div class="medal-item">
                                    <div class="medal-img-wrapper">
                                        <img loading="lazy" decoding="async"
                                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/3_882abd921e.png"
                                            alt="Kategori lari 10k Disney Run Jakarta 2026">
                                    </div>
                                    <div class="medal-details">
                                        <span class="medal-name">10K Run</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3. VIDEO — landscape on desktop, portrait on mobile -->
                    <div class="video-wrap video-wrap--normal rounded-3xl overflow-hidden shadow-lg relative z-10">
                        <iframe class="js-lazy-video w-full aspect-video rounded-3xl"
                            data-src="https://www.youtube.com/embed/hA3FB-YAmhI?rel=0" loading="lazy"
                            title="Disney Run Jakarta 2026 Youtube"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="promo-jersey" class="rt-bg-host py-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <!-- Background blur blobs (section level background) -->
            <div class="max-w-6xl mx-auto relative z-10">
                <div
                    class="bg-white rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-start md:items-center justify-between gap-8 relative max-w-5xl mx-auto shadow-xl">
                    <div class="text-content flex-1 z-10 w-full">
                        <h2 class="text-3xl md:text-3xl font-medium black mb-4 md:mb-8 leading-tight text-left">
                            Official Disney Run Jakarta 2026 Race Jersey
                        </h2>
                        <div class="text-left">
                            <p class="black text-sm md:text-base leading-relaxed mb-2">
                                Setiap peserta akan mendapatkan jersey dengan size yang dapat dipilih untuk child/adult
                                saat
                                registrasi <br>
                                Size jersey tidak dapat ditukar. Lihat ukuran <a class="hover:text-[#ea0a2a]"
                                    href="https://www.ocbc.id/asset/media/Feature/PDF/adhoc/2026/09/01/20250831-jersey-disney-run"
                                    target="_blank" rel="noopener noreferrer">di sini</a>.
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 flex justify-start md:justify-center items-start relative z-10 w-full">
                        <div
                            class="image-wrapper bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-0 w-full max-w-md md:max-w-lg">
                            <div class="w-full">
                                <img loading="lazy" decoding="async"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/Jersey_Disney_Run_2026_251c277eeb.webp"
                                    alt="Jersey Disney Run Jakarta 2026" class="w-full h-auto object-cover rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="disney-run-card" class="flex py-4 px-6 md:px-8 relative z-10 justify-center overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <img class="w-max-screen h-[28rem] mt-8 rounded-2xl shadow-md block object-cover hidden md:block"
                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/WEBSITE_BANNER_DISNEY_RUN_GLOBAL_DEBIT_CARD_RACE_PACK_and_RACE_DAY_DEBIT_DISNEY_RUN_DESKTOP_d1130c8807.webp"
                    alt="Credit Card Edisi Disney Run 2026 Jakarta" loading="lazy">
                <img class="w-max-screen h-[34rem] mt-8 rounded-2xl shadow-md block bg-cover md:hidden"
                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/WEBSITE_BANNER_DISNEY_RUN_GLOBAL_DEBIT_CARD_RACE_PACK_and_RACE_DAY_DEBIT_DISNEY_RUN_MOBILE_10552efa06.webp"
                    alt="Credit Card Edisi Disney Run 2026 Jakarta" loading="lazy">
                <div class="absolute top-10 md:top-[3.5rem] left-[4.5rem] md:left-6 z-10">
                    <p
                        class="text-black text-base w-[14rem] sm:w-auto sm:text-base text-center sm:text-left md:text-lg bg-white/70 rounded-lg px-2 py-2">
                        Masukan kode promo berikut
                        melalui OCBC mobile
                        <span
                            class="text-white p-1 pl-2 pr-2 rounded font-medium leading-[1.5rem] bg-[#ea0a2a]">DEBITDISNEYRUN</span>
                    </p>
                </div>
                <div
                    class="w-full flex justify-end px-4 py-3 absolute bottom-2 right-0 z-10 md:bottom-3 md:left-[-15px] md:right-auto md:py-0">
                    <a href="http://web.ocbc.id/globaldebit" class="primary-btn-apply" target="_blank">
                        Info lengkap
                    </a>
                </div>
            </div>
        </section>
        <!-- ============================================================
                                                     VERSI 1: 3 peta ditampilkan sekaligus (1K, 5K, 10K)
                                                     Ganti src gambar & isi data bertanda TODO sesuai data resmi.
                                                     ============================================================ -->
        <section id="rute-lari" class="rt-bg-host py-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <div
                    class="bg-white rounded-3xl p-6 md:p-10 max-w-5xl mx-auto shadow-xl border border-red-100/60 relative overflow-hidden">

                    <!-- Heading -->
                    <div class="text-center max-w-3xl mx-auto mb-8">
                        <h2 class="text-black text-xl md:text-2xl font-medium mb-2 leading-tight">
                            Rute Lari Disney Run Jakarta 2026
                        </h2>
                        <p class="text-slate-500 text-base">
                            Kenali rute dan lokasi water station sebelum hari-H
                        </p>
                    </div>

                    <!-- Grid 3 kategori -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <!-- ========== 1K ========== -->
                        <article
                            class="flex flex-col rounded-2xl border border-slate-200 shadow-md overflow-hidden bg-white">
                            <div class="bg-slate-50">
                                <!-- TODO: ganti dengan gambar peta 1K -->
                                <img loading="lazy" decoding="async" src="https://placehold.co/800x600?text=Peta+Rute+1K"
                                    alt="Peta rute lari 1K Disney Run Jakarta 2026"
                                    class="w-full aspect-[4/3] object-cover">
                            </div>
                            <div class="p-5 flex flex-col gap-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-bold text-black">1K</h3>
                                    <span
                                        class="text-xs font-semibold text-[#ea0a2a] bg-red-50 rounded-full px-3 py-1">Child
                                        / Adult / Family</span>
                                </div>

                                <dl class="grid grid-cols-2 gap-3 text-sm">
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Waktu Start</dt>
                                        <dd class="font-semibold text-slate-800">06.30 WIB</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Cut Off</dt>
                                        <dd class="font-semibold text-slate-800">30 menit</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Start</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Start</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Finish</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Finish</dd> <!-- TODO -->
                                    </div>
                                </dl>

                                <div>
                                    <p class="text-sm font-semibold text-slate-800 mb-2">Fasilitas di rute</p>
                                    <ul class="space-y-2 text-sm text-slate-700">
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 text-xs">💧</span>
                                            Water station: Finish area <!-- TODO -->
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-100 text-[#ea0a2a] text-xs">✚</span>
                                            Medis: Start &amp; Finish <!-- TODO -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <!-- ========== 5K ========== -->
                        <article
                            class="flex flex-col rounded-2xl border border-slate-200 shadow-md overflow-hidden bg-white">
                            <div class="bg-slate-50">
                                <!-- TODO: ganti dengan gambar peta 5K -->
                                <img loading="lazy" decoding="async" src="https://placehold.co/800x600?text=Peta+Rute+5K"
                                    alt="Peta rute lari 5K Disney Run Jakarta 2026"
                                    class="w-full aspect-[4/3] object-cover">
                            </div>
                            <div class="p-5 flex flex-col gap-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-bold text-black">5K</h3>
                                    <span
                                        class="text-xs font-semibold text-[#ea0a2a] bg-red-50 rounded-full px-3 py-1">Run</span>
                                </div>

                                <dl class="grid grid-cols-2 gap-3 text-sm">
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Waktu Start</dt>
                                        <dd class="font-semibold text-slate-800">05.45 WIB</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Cut Off</dt>
                                        <dd class="font-semibold text-slate-800">1 jam 15 menit</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Start</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Start</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Finish</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Finish</dd> <!-- TODO -->
                                    </div>
                                </dl>

                                <div>
                                    <p class="text-sm font-semibold text-slate-800 mb-2">Fasilitas di rute</p>
                                    <ul class="space-y-2 text-sm text-slate-700">
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 text-xs">💧</span>
                                            Water station: KM 2,5 &amp; Finish <!-- TODO -->
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-100 text-[#ea0a2a] text-xs">✚</span>
                                            Medis: KM 2,5, Start &amp; Finish <!-- TODO -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <!-- ========== 10K ========== -->
                        <article
                            class="flex flex-col rounded-2xl border border-slate-200 shadow-md overflow-hidden bg-white">
                            <div class="bg-slate-50">
                                <!-- TODO: ganti dengan gambar peta 10K -->
                                <img loading="lazy" decoding="async"
                                    src="https://placehold.co/800x600?text=Peta+Rute+10K"
                                    alt="Peta rute lari 10K Disney Run Jakarta 2026"
                                    class="w-full aspect-[4/3] object-cover">
                            </div>
                            <div class="p-5 flex flex-col gap-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-bold text-black">10K</h3>
                                    <span
                                        class="text-xs font-semibold text-[#ea0a2a] bg-red-50 rounded-full px-3 py-1">Run</span>
                                </div>

                                <dl class="grid grid-cols-2 gap-3 text-sm">
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Waktu Start</dt>
                                        <dd class="font-semibold text-slate-800">05.15 WIB</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Cut Off</dt>
                                        <dd class="font-semibold text-slate-800">2 jam 30 menit</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Start</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Start</dd> <!-- TODO -->
                                    </div>
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Finish</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Finish</dd> <!-- TODO -->
                                    </div>
                                </dl>

                                <div>
                                    <p class="text-sm font-semibold text-slate-800 mb-2">Fasilitas di rute</p>
                                    <ul class="space-y-2 text-sm text-slate-700">
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 text-xs">💧</span>
                                            Water station: KM 2,5 · KM 5 · KM 7,5 · Finish <!-- TODO -->
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-100 text-[#ea0a2a] text-xs">✚</span>
                                            Medis: KM 5, Start &amp; Finish <!-- TODO -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Legenda & catatan umum -->
                    <div class="mt-8 rounded-2xl bg-slate-50 border border-slate-200 p-5 md:p-6">
                        <p class="text-sm font-semibold text-slate-800 mb-3">Keterangan &amp; catatan</p>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 text-sm text-slate-700 list-disc ml-5">
                            <li>💧 Water station menyediakan air minum &amp; minuman isotonik.</li> <!-- TODO -->
                            <li>✚ Tim medis &amp; ambulans siaga di sepanjang rute.</li>
                            <li>Peserta wajib mengikuti jalur yang sudah ditandai panitia.</li>
                            <li>Rute dapat berubah sewaktu-waktu sesuai kondisi lapangan &amp; arahan panitia.</li>
                            <li>Gunakan bib resmi dan tetap berada di sisi jalur lari.</li>
                            <li>Toilet tersedia di area Start/Finish.</li> <!-- TODO -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================
                                                 VERSI 2: Switch 1K / 5K / 10K, peta & keterangan berganti
                                                 Ganti src gambar & isi data bertanda TODO sesuai data resmi.
                                                 ============================================================ -->
        <section id="rute-lari" class="rt-bg-host py-8 px-4 md:px-8 relative z-10 overflow-hidden">
            <div class="max-w-6xl mx-auto relative z-10">
                <div
                    class="bg-white rounded-3xl p-6 md:p-10 max-w-5xl mx-auto shadow-xl border border-red-100/60 relative overflow-hidden">

                    <!-- Heading -->
                    <div class="text-center max-w-3xl mx-auto mb-6">
                        <h2 class="text-black text-xl md:text-2xl font-medium mb-2 leading-tight">
                            Rute Lari Disney Run Jakarta 2026
                        </h2>
                        <p class="text-slate-500 text-base">
                            Pilih kategori untuk melihat peta rute &amp; lokasi water station
                        </p>
                    </div>

                    <!-- Switch -->
                    <div class="flex justify-center mb-8">
                        <div id="route-switch" role="tablist" aria-label="Pilih kategori rute"
                            class="inline-flex rounded-full bg-slate-100 p-1 gap-1">
                            <button type="button" role="tab" data-route="1k" aria-selected="true"
                                class="route-btn rounded-full px-6 py-2 text-sm md:text-base font-semibold transition-all duration-300 bg-[#ea0a2a] text-white shadow">
                                1K
                            </button>
                            <button type="button" role="tab" data-route="5k" aria-selected="false"
                                class="route-btn rounded-full px-6 py-2 text-sm md:text-base font-semibold transition-all duration-300 text-slate-600 hover:text-[#ea0a2a]">
                                5K
                            </button>
                            <button type="button" role="tab" data-route="10k" aria-selected="false"
                                class="route-btn rounded-full px-6 py-2 text-sm md:text-base font-semibold transition-all duration-300 text-slate-600 hover:text-[#ea0a2a]">
                                10K
                            </button>
                        </div>
                    </div>

                    <!-- Panels -->
                    <div id="route-panels">

                        <!-- ========== 1K ========== -->
                        <div class="route-panel grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-6 lg:gap-8 items-start"
                            data-panel="1k">
                            <div
                                class="rounded-2xl overflow-hidden border border-slate-200 shadow-md bg-slate-50 group relative cursor-pointer">
                                <!-- TODO: ganti dengan gambar peta 1K -->
                                <img decoding="async"
                                    src="https://images.unsplash.com/photo-1486218119243-13883505764c?auto=format&fit=crop&w=1200&q=80"
                                    alt="Peta rute lari 1K Disney Run Jakarta 2026"
                                    class="w-full h-auto object-cover transition-transform duration-300 group-hover:scale-[1.03]">
                                <div
                                    class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center pointer-events-none">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-black/60 text-white text-xs font-medium backdrop-blur-xs shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                        </svg>
                                        Klik untuk memperbesar
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-5">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-2xl font-bold text-black">1K</h3>
                                    <span
                                        class="text-xs font-semibold text-[#ea0a2a] bg-red-50 rounded-full px-3 py-1">Child
                                        / Adult / Family</span>
                                </div>
                                <dl class="grid grid-cols-2 gap-3 text-sm">
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Waktu Start</dt>
                                        <dd class="font-semibold text-slate-800">06.30 WIB</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Cut Off</dt>
                                        <dd class="font-semibold text-slate-800">30 menit</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Start</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Start</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Finish</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Finish</dd>
                                    </div> <!-- TODO -->
                                </dl>
                                <div>
                                    <p class="text-sm font-semibold text-slate-800 mb-2">Titik fasilitas</p>
                                    <ul class="space-y-2 text-sm text-slate-700">
                                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 px-3 py-2">
                                            <span
                                                class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-sky-100 text-sm">💧</span>
                                            <span class="flex-1">Water station</span><span
                                                class="font-semibold">Finish</span> <!-- TODO -->
                                        </li>
                                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 px-3 py-2">
                                            <span
                                                class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-red-100 text-[#ea0a2a] text-sm">✚</span>
                                            <span class="flex-1">Medis</span><span class="font-semibold">Start &amp;
                                                Finish</span> <!-- TODO -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- ========== 5K ========== -->
                        <div class="route-panel hidden grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-6 lg:gap-8 items-start"
                            data-panel="5k">
                            <div
                                class="rounded-2xl overflow-hidden border border-slate-200 shadow-md bg-slate-50 group relative cursor-pointer">
                                <!-- TODO: ganti dengan gambar peta 5K -->
                                <img decoding="async"
                                    src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?auto=format&fit=crop&w=1200&q=80"
                                    alt="Peta rute lari 5K Disney Run Jakarta 2026"
                                    class="w-full h-auto object-cover transition-transform duration-300 group-hover:scale-[1.03]">
                                <div
                                    class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center pointer-events-none">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-black/60 text-white text-xs font-medium backdrop-blur-xs shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                        </svg>
                                        Klik untuk memperbesar
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-5">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-2xl font-bold text-black">5K</h3>
                                    <span
                                        class="text-xs font-semibold text-[#ea0a2a] bg-red-50 rounded-full px-3 py-1">Run</span>
                                </div>
                                <dl class="grid grid-cols-2 gap-3 text-sm">
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Waktu Start</dt>
                                        <dd class="font-semibold text-slate-800">05.45 WIB</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Cut Off</dt>
                                        <dd class="font-semibold text-slate-800">1 jam 15 menit</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Start</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Start</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Finish</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Finish</dd>
                                    </div> <!-- TODO -->
                                </dl>
                                <div>
                                    <p class="text-sm font-semibold text-slate-800 mb-2">Titik fasilitas</p>
                                    <ul class="space-y-2 text-sm text-slate-700">
                                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 px-3 py-2">
                                            <span
                                                class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-sky-100 text-sm">💧</span>
                                            <span class="flex-1">Water station</span><span class="font-semibold">KM 2,5 ·
                                                Finish</span> <!-- TODO -->
                                        </li>
                                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 px-3 py-2">
                                            <span
                                                class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-red-100 text-[#ea0a2a] text-sm">✚</span>
                                            <span class="flex-1">Medis</span><span class="font-semibold">KM 2,5 · Start ·
                                                Finish</span> <!-- TODO -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- ========== 10K ========== -->
                        <div class="route-panel hidden grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-6 lg:gap-8 items-start"
                            data-panel="10k">
                            <div
                                class="rounded-2xl overflow-hidden border border-slate-200 shadow-md bg-slate-50 group relative cursor-pointer">
                                <!-- TODO: ganti dengan gambar peta 10K -->
                                <img decoding="async"
                                    src="https://images.unsplash.com/photo-1513593771513-7b58b6c4af38?auto=format&fit=crop&w=1200&q=80"
                                    alt="Peta rute lari 10K Disney Run Jakarta 2026"
                                    class="w-full h-auto object-cover transition-transform duration-300 group-hover:scale-[1.03]">
                                <div
                                    class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center pointer-events-none">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-black/60 text-white text-xs font-medium backdrop-blur-xs shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                        </svg>
                                        Klik untuk memperbesar
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-5">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-2xl font-bold text-black">10K</h3>
                                    <span
                                        class="text-xs font-semibold text-[#ea0a2a] bg-red-50 rounded-full px-3 py-1">Run</span>
                                </div>
                                <dl class="grid grid-cols-2 gap-3 text-sm">
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Waktu Start</dt>
                                        <dd class="font-semibold text-slate-800">05.15 WIB</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Cut Off</dt>
                                        <dd class="font-semibold text-slate-800">2 jam 30 menit</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Start</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Start</dd>
                                    </div> <!-- TODO -->
                                    <div class="rounded-xl bg-slate-50 p-3">
                                        <dt class="text-slate-500 text-xs">Finish</dt>
                                        <dd class="font-semibold text-slate-800">Lokasi Finish</dd>
                                    </div> <!-- TODO -->
                                </dl>
                                <div>
                                    <p class="text-sm font-semibold text-slate-800 mb-2">Titik fasilitas</p>
                                    <ul class="space-y-2 text-sm text-slate-700">
                                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 px-3 py-2">
                                            <span
                                                class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-sky-100 text-sm">💧</span>
                                            <span class="flex-1">Water station</span><span class="font-semibold">KM 2,5 ·
                                                5 · 7,5 · Finish</span> <!-- TODO -->
                                        </li>
                                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 px-3 py-2">
                                            <span
                                                class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-red-100 text-[#ea0a2a] text-sm">✚</span>
                                            <span class="flex-1">Medis</span><span class="font-semibold">KM 5 · Start ·
                                                Finish</span> <!-- TODO -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Catatan umum (tetap tampil untuk semua kategori) -->
                    <div class="mt-8 rounded-2xl bg-slate-50 border border-slate-200 p-5 md:p-6">
                        <p class="text-sm font-semibold text-slate-800 mb-3">Catatan penting</p>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 text-sm text-slate-700 list-disc ml-5">
                            <li>Water station menyediakan air minum &amp; minuman isotonik.</li> <!-- TODO -->
                            <li>Tim medis &amp; ambulans siaga di sepanjang rute.</li>
                            <li>Ikuti jalur yang sudah ditandai panitia.</li>
                            <li>Rute dapat berubah sesuai kondisi lapangan &amp; arahan panitia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="info-lanjut" class="py-4 px-4 md:px-8">
            <div class="p-6 md:p-12 medal-wrap mt-8 mb-8 relative z-10">
                <!-- Heading -->
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-2xl font-medium text-black mb-2">
                        Pertanyaan Umum
                    </h2>
                    <p class="text-slate-500 text-base md:text-base">
                        <!-- TODO: ganti subheading sesuai produk -->
                        Informasi terkait Disney Run Jakarta 2026
                    </p>
                </div>
                <!-- Tabs + Content -->
                <div class="grid grid-cols-1 md:grid-cols-[280px_1fr] gap-8 md:gap-12">
                    <!-- Tab list (kiri) -->
                    <div class="border-t border-slate-200" id="info-tab-list">
                        <button type="button" data-tab="faq"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-[#ea0a2a] transition-colors">
                            FAQ
                            <em class="fa-solid fa-chevron-right text-sm"></em>
                        </button>
                        <button type="button" data-tab="suratkuasa"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-slate-700 hover:text-[#ea0a2a] transition-colors">
                            Surat Kuasa Race Pack Collection
                            <em class="fa-solid fa-chevron-right text-sm"></em>
                        </button>
                        <button type="button" data-tab="contact-person"
                            class="info-tab-btn w-full flex items-center justify-between py-4 border-b border-slate-200 text-left font-semibold text-slate-700 hover:text-[#ea0a2a] transition-colors">
                            Kontak Resmi
                            <em class="fa-solid fa-chevron-right text-sm"></em>
                        </button>
                    </div>
                    <!-- Tab content (kanan) -->
                    <div id="info-tab-content">
                        <!-- Persyaratan -->
                        <div class="info-tab-panel active" data-panel="faq">
                            <!-- Container untuk link agar ada padding di sekitarnya jika diperlukan, atau bisa langsung menggunakan link sebagai block element -->
                            <div class="space-y-4">
                                <!-- Link Tombol Mudharabah Personal -->
                                <a href="https://cdn1.ocbc.id/asset/media/Feature/PDF/adhoc/2026/08/31/faq-ocbc-disney-run-jakarta-2026-id-version"
                                    target="_blank" rel="noopener"
                                    class="group flex items-center justify-between w-full p-4 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all duration-300 ease-in-out shadow-sm hover:shadow">
                                    <!-- Bagian Kiri: Ikon & Teks -->
                                    <div class="flex items-center space-x-3">
                                        <!-- Ikon File -->
                                        <div
                                            class="flex items-center justify-center w-8 h-8 rounded-md bg-slate-100 group-hover:bg-slate-200 transition-colors duration-300">
                                            <em class="far fa-file-pdf"></em>
                                        </div>
                                        <!-- Teks -->
                                        <span
                                            class="text-base font-medium text-slate-800 group-hover:text-slate-900 transition-colors">
                                            Pertanyaan Umum - Bahasa Indonesia
                                        </span>
                                    </div>
                                    <!-- Bagian Kanan: Ikon Panah -->
                                    <div class="text-slate-400 group-hover:text-slate-600 transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="info-tab-panel hidden" data-panel="suratkuasa">
                            <!-- Container untuk link agar ada padding di sekitarnya jika diperlukan, atau bisa langsung menggunakan link sebagai block element -->
                            <div class="space-y-4">
                                <!-- Link Tombol Mudharabah Personal -->
                                <a href="https://cdn1.ocbc.id/asset/media/Feature/PDF/adhoc/2026/08/31/ocbc-disney-run-jakarta-2026-authorization-letter-id"
                                    target="_blank" rel="noopener"
                                    class="group flex items-center justify-between w-full p-4 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all duration-300 ease-in-out shadow-sm hover:shadow">
                                    <!-- Bagian Kiri: Ikon & Teks -->
                                    <div class="flex items-center space-x-3">
                                        <!-- Ikon File -->
                                        <div
                                            class="flex items-center justify-center w-8 h-8 rounded-md bg-slate-100 group-hover:bg-slate-200 transition-colors duration-300">
                                            <em class="far fa-file-pdf"></em>
                                        </div>
                                        <!-- Teks -->
                                        <span
                                            class="text-base font-medium text-slate-800 group-hover:text-slate-900 transition-colors">
                                            Template Surat Kuasa - Bahasa Indonesia
                                        </span>
                                    </div>
                                    <!-- Bagian Kanan: Ikon Panah -->
                                    <div class="text-slate-400 group-hover:text-slate-600 transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="info-tab-panel hidden bg-white rounded-xl" data-panel="contact-person">
                            <!-- Container untuk link agar ada padding di sekitarnya jika diperlukan, atau bisa langsung menggunakan link sebagai block element -->
                            <div class="space-y-4">
                                <!-- Link Tombol Mudharabah Personal -->
                                <div
                                    class="flex flex-col mt-4 gap-2 px-5 py-5 mx-2 mb-[3rem] reveal-element reveal-up relative is-visible">
                                    <h2
                                        class="text-black text-3xl text-center sm:text-center md:text-2xl font-bold mb-3 leading-tight">
                                        Kontak Resmi Disney Run Jakarta
                                    </h2>
                                    <p
                                        class="text-base font-normal text-slate-800 group-hover:text-slate-900 transition-colors">
                                        Waspada akan penipuan yang mengatasnamakan OCBC dan Disney Run Jakarta 2026
                                        <br>
                                        Pastikan beberapa hal berikut ini:
                                    </p>
                                    <ul
                                        class="text-base font-normal ml-6 text-slate-800 group-hover:text-slate-900 transition-colors list-disc">
                                        <li>Pembelian tiket Disney Run Jakarta 2026 hanya melalui kanal resmi OCBC di
                                            ocbc.id/disneyrunjkt26
                                        </li>
                                        <li>Pembayaran dilakukan hanya melalui platform website cocbc.id/disneyrunjkt26
                                            tanpa harus
                                            melakukan transfer ke akun
                                            tertentu</li>
                                        <li>
                                            Hindari pembelian tiket melalui
                                            pihak atau
                                            kanal tidak resmi/calo/jastip untuk menghindari
                                            risiko penipuan.
                                        </li>
                                    </ul>
                                    <p></p>
                                    <p
                                        class="text-base font-normal text-slate-800 group-hover:text-slate-900 transition-colors">
                                        Untuk informasi lebih lanjut tentang OCBC Disney Run Jakarta,
                                        silakan
                                        hubungi kami melalui
                                        pilihan di bawah ini:
                                    </p>
                                    <p
                                        class="text-base font-medium text-slate-800 group-hover:text-slate-900 transition-colors">
                                        Tanya OCBC <br>
                                        <span class="general-red-text font-normal">Dalam negeri : 1500-999</span><br>
                                        <span class="general-red-text font-normal">Luar negeri : +62 21-26506-300</span>
                                    </p>
                                    <p
                                        class="text-base font-medium text-slate-800 group-hover:text-slate-900 transition-colors">
                                        WhatsApp Tanya OCBC <br>
                                        <span class="general-red-text font-normal">+62 812-1500-999</span>
                                    </p>
                                    <p
                                        class="text-base font-medium text-slate-800 group-hover:text-slate-900 transition-colors">
                                        Tanya Call &amp; Tanya Chat OCBC<br>
                                        <span class="general-red-text font-normal">Dapat diakses melalui OCBC
                                            mobile&ZeroWidthSpace;</span>
                                    </p>
                                    <p
                                        class="text-base font-medium text-slate-800 group-hover:text-slate-900 transition-colors">
                                        Email Tanya OCBC<br>
                                        <span class="general-red-text font-normal">tanya@ocbc.id&ZeroWidthSpace;</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="site-footer-section">
            <div class="site-footer-grid">
                <div class="site-footer-content">
                    <p>
                        PT Bank OCBC NISP Tbk berizin dan diawasi oleh Otoritas Jasa
                        Keuangan &amp; Bank Indonesia, serta merupakan peserta penjaminan
                        LPS.
                    </p>
                </div>
            </div>
        </section>
        <section id="floating-footer"
            class="fixed bottom-0 left-0 w-full bg-white shadow-lg p-4 flex items-center justify-between transition-all duration-500 ease-in-out transform opacity-100">
            <div class="flex items-center space-x-2 gap-[5px]">
                <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/floating_img_4b1c36359c.png"
                    alt="Apply Credit Card Star Wars Platinum90N" class="hidden md:block w-24 h-10">
                <p class="font-bold text-black text-sm md:text-lg">
                    Apply Kartu Kredit OCBC Star Wars Platinum/90°N sekarang!
                </p>
            </div>
            <div class="flex space-x-2">
                <a href="https://onboarding.ocbc.id/product/kartu-kredit-monoline?utm_source=OCBCDISNEYRUNJKT&amp;utm_medium=&amp;utm_campaignid=&amp;utm_campaign=WEBSITE_DISNEYRUNJKT26_20260724&amp;utm_content=&amp;promo_referal=OCBCDISNEYRUNJKT&amp;force=&amp;promo_code=&amp;sk=%25%25subskey%25%25"
                    target="_blank">
                    <button class="bg-red text-white rounded-lg text-md px-4 py-2" id="btn-floating">
                        Apply Now
                    </button>
                </a>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <!-- Modal Popup Peta Rute dengan Animasi Tailwind -->

    <!-- Route Map Modal -->
    <div id="route-map-modal" class="fixed inset-0 z-[100] hidden items-center justify-center overflow-y-auto p-3 sm:p-4"
        role="dialog" aria-modal="true" aria-labelledby="route-map-modal-title-desktop">
        <!-- Backdrop -->
        <div id="route-map-modal-backdrop"
            class="fixed inset-0 bg-black/75 backdrop-blur-sm opacity-0 transition-opacity duration-300 ease-out"
            aria-hidden="true"></div>

        <!-- ========================= -->
        <!-- DESKTOP MODAL             -->
        <!-- ========================= -->
        <div id="route-map-modal-desktop"
            class="relative z-10 hidden w-[min(92vw,80rem)] max-h-[calc(100dvh-2rem)] overflow-hidden rounded-2xl bg-white p-5 shadow-2xl ring-1 ring-black/5 opacity-0 scale-95 translate-y-4 transition-all duration-300 ease-out md:block lg:p-6">
            <!-- Close Button -->
            <button type="button" id="route-map-modal-close-desktop"
                class="absolute right-4 top-4 z-20 inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-slate-500 shadow-sm transition-all duration-200 hover:bg-red-50 hover:text-[#ea0a2a] hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-[#ea0a2a]/40 cursor-pointer"
                aria-label="Tutup peta rute">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Desktop Title -->
            <div class="mb-4 pr-12">
                <span class="mb-1 inline-block rounded-full bg-red-50 px-2.5 py-0.5 text-xs font-semibold text-[#ea0a2a]">
                    Peta Interaktif
                </span>

                <h2 id="route-map-modal-title-desktop" class="text-xl font-bold leading-7 text-slate-900"></h2>
            </div>

            <!-- Desktop Map -->
            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 bg-slate-50">
                <div id="route-map-image-scroll-desktop" class="max-h-[72dvh] overflow-auto">
                    <img id="route-map-modal-image-desktop" src="" alt=""
                        class="mx-auto block max-h-[72dvh] w-full rounded-xl object-contain">
                </div>
            </div>
        </div>

        <!-- ========================= -->
        <!-- MOBILE MODAL              -->
        <!-- ========================= -->
        <div id="route-map-modal-mobile"
            class="relative z-10 block w-full max-w-md max-h-[calc(100dvh-1rem)] overflow-hidden rounded-2xl bg-white p-4 shadow-2xl ring-1 ring-black/5 opacity-0 scale-95 translate-y-4 transition-all duration-300 ease-out md:hidden">
            <!-- Close Button -->
            <button type="button" id="route-map-modal-close-mobile"
                class="absolute right-3 top-3 z-20 inline-flex h-9 w-9 items-center justify-center rounded-full bg-slate-100 text-slate-500 shadow-sm transition-all duration-200 hover:bg-red-50 hover:text-[#ea0a2a] hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-[#ea0a2a]/40 cursor-pointer"
                aria-label="Tutup peta rute">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Mobile Title -->
            <div class="mb-3 pr-10">
                <span class="mb-1 inline-block rounded-full bg-red-50 px-2.5 py-0.5 text-xs font-semibold text-[#ea0a2a]">
                    Peta Interaktif
                </span>

                <h2 id="route-map-modal-title-mobile" class="text-base font-bold leading-6 text-slate-900"></h2>
            </div>

            <!-- Mobile Map -->
            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 bg-slate-50">
                <div class="pointer-events-none absolute inset-x-0 bottom-2 z-10 text-center">
                    <span class="rounded-full bg-white/90 px-3 py-1 text-[11px] font-medium text-slate-600 shadow-sm">
                        Geser untuk melihat peta &middot; cubit untuk memperbesar
                    </span>
                </div>

                <!-- Touch-enabled map viewport -->
                <div id="route-map-image-scroll-mobile"
                    class="flex h-[calc(100dvh-9rem)] max-h-[calc(100dvh-9rem)] items-center justify-center overflow-hidden overscroll-contain bg-slate-50 touch-none">
                    <img id="route-map-modal-image-mobile" src="" alt=""
                        class="block w-full max-w-none select-none rounded-xl object-contain"
                        draggable="false">
                </div>
            </div>
        </div>
    </div>



    <script>
        // ==========================================
        // ROUTE SWITCH
        // ==========================================
        (function() {
            var root = document.getElementById('route-switch');
            if (!root) return;

            var btns = root.querySelectorAll('.route-btn');
            var panels = document.querySelectorAll('#route-panels .route-panel');

            var ON = ['bg-[#ea0a2a]', 'text-white', 'shadow'];
            var OFF = ['text-slate-600', 'hover:text-[#ea0a2a]'];

            function show(key) {
                btns.forEach(function(b) {
                    var active = b.dataset.route === key;

                    b.setAttribute('aria-selected', String(active));

                    ON.forEach(function(c) {
                        b.classList.toggle(c, active);
                    });

                    OFF.forEach(function(c) {
                        b.classList.toggle(c, !active);
                    });
                });

                panels.forEach(function(p) {
                    p.classList.toggle('hidden', p.dataset.panel !== key);
                });
            }

            btns.forEach(function(b) {
                b.addEventListener('click', function() {
                    show(b.dataset.route);
                });
            });
        })();


        // ==========================================
        // ROUTE MAP MODAL
        // ==========================================
        (function() {
            // --------------------------------------
            // SHARED ELEMENTS
            // --------------------------------------
            var modal = document.getElementById('route-map-modal');
            var backdrop = document.getElementById('route-map-modal-backdrop');

            if (!modal || !backdrop) return;

            // --------------------------------------
            // DESKTOP ELEMENTS
            // --------------------------------------
            var desktopDialog = document.getElementById(
                'route-map-modal-desktop'
            );

            var desktopImage = document.getElementById(
                'route-map-modal-image-desktop'
            );

            var desktopTitle = document.getElementById(
                'route-map-modal-title-desktop'
            );

            var desktopCloseButton = document.getElementById(
                'route-map-modal-close-desktop'
            );

            var desktopImageScroll = document.getElementById(
                'route-map-image-scroll-desktop'
            );

            // --------------------------------------
            // MOBILE ELEMENTS
            // --------------------------------------
            var mobileDialog = document.getElementById(
                'route-map-modal-mobile'
            );

            var mobileImage = document.getElementById(
                'route-map-modal-image-mobile'
            );

            var mobileTitle = document.getElementById(
                'route-map-modal-title-mobile'
            );

            var mobileCloseButton = document.getElementById(
                'route-map-modal-close-mobile'
            );

            var mobileImageScroll = document.getElementById(
                'route-map-image-scroll-mobile'
            );

            // --------------------------------------
            // SOURCE MAP IMAGES
            // --------------------------------------
            var mapImages = document.querySelectorAll(
                'img[alt*="Peta rute"]'
            );

            // Pastikan semua elemen modal tersedia.
            if (
                !desktopDialog ||
                !desktopImage ||
                !desktopTitle ||
                !desktopCloseButton ||
                !desktopImageScroll ||
                !mobileDialog ||
                !mobileImage ||
                !mobileTitle ||
                !mobileCloseButton ||
                !mobileImageScroll ||
                !mapImages.length
            ) {
                return;
            }

            // --------------------------------------
            // STATE
            // --------------------------------------
            var isTransitioning = false;
            var closeTimer = null;
            var zoom = 1;
            var panX = 0;
            var panY = 0;
            var pointers = {};
            var dragStart = null;
            var pinchStart = null;
            var minZoom = 1;
            var maxZoom = 4;

            var desktopMedia = window.matchMedia(
                '(min-width: 768px)'
            );

            // --------------------------------------
            // RESPONSIVE HELPERS
            // --------------------------------------
            function isDesktop() {
                return desktopMedia.matches;
            }

            function getActiveDialog() {
                return isDesktop() ? desktopDialog : mobileDialog;
            }

            function getActiveCloseButton() {
                return isDesktop() ?
                    desktopCloseButton :
                    mobileCloseButton;
            }

            // --------------------------------------
            // TOUCH GESTURES
            // Drag satu jari dan pinch dua jari hanya
            // digunakan pada peta versi mobile.
            // --------------------------------------
            function distance(first, second) {
                return Math.hypot(
                    first.clientX - second.clientX,
                    first.clientY - second.clientY
                );
            }

            function clampPan() {
                var maxX = Math.max(
                    0,
                    (mobileImage.offsetWidth * zoom -
                        mobileImageScroll.clientWidth) / 2
                );
                var maxY = Math.max(
                    0,
                    (mobileImage.offsetHeight * zoom -
                        mobileImageScroll.clientHeight) / 2
                );

                panX = Math.min(maxX, Math.max(-maxX, panX));
                panY = Math.min(maxY, Math.max(-maxY, panY));
            }

            function updateTouchTransform() {
                clampPan();
                mobileImage.style.transform =
                    'translate3d(' + panX + 'px, ' + panY + 'px, 0) scale(' +
                    zoom + ')';
            }

            function resetZoom() {
                zoom = 1;
                panX = 0;
                panY = 0;
                pointers = {};
                dragStart = null;
                pinchStart = null;
                updateTouchTransform();
            }

            mobileImage.addEventListener('pointerdown', function(event) {
                event.preventDefault();
                mobileImage.setPointerCapture(event.pointerId);
                pointers[event.pointerId] = {
                    clientX: event.clientX,
                    clientY: event.clientY
                };

                var pointerIds = Object.keys(pointers);
                if (pointerIds.length === 1) {
                    dragStart = {
                        clientX: event.clientX,
                        clientY: event.clientY,
                        panX: panX,
                        panY: panY
                    };
                } else if (pointerIds.length === 2) {
                    var first = pointers[pointerIds[0]];
                    var second = pointers[pointerIds[1]];
                    pinchStart = {
                        distance: distance(first, second),
                        zoom: zoom,
                        panX: panX,
                        panY: panY
                    };
                    dragStart = null;
                }
            });

            mobileImage.addEventListener('pointermove', function(event) {
                if (!pointers[event.pointerId]) {
                    return;
                }

                event.preventDefault();
                pointers[event.pointerId].clientX = event.clientX;
                pointers[event.pointerId].clientY = event.clientY;

                var pointerIds = Object.keys(pointers);
                if (pointerIds.length === 2 && pinchStart) {
                    var first = pointers[pointerIds[0]];
                    var second = pointers[pointerIds[1]];
                    var currentDistance = distance(first, second);

                    zoom = Math.min(
                        maxZoom,
                        Math.max(minZoom, pinchStart.zoom *
                            currentDistance / pinchStart.distance)
                    );
                    panX = pinchStart.panX;
                    panY = pinchStart.panY;
                } else if (pointerIds.length === 1 && dragStart) {
                    panX = dragStart.panX + event.clientX - dragStart.clientX;
                    panY = dragStart.panY + event.clientY - dragStart.clientY;
                }

                updateTouchTransform();
            });

            function endPointer(event) {
                delete pointers[event.pointerId];
                dragStart = null;
                pinchStart = null;

                var remainingIds = Object.keys(pointers);
                if (remainingIds.length === 1) {
                    var remaining = pointers[remainingIds[0]];
                    dragStart = {
                        clientX: remaining.clientX,
                        clientY: remaining.clientY,
                        panX: panX,
                        panY: panY
                    };
                }
            }

            mobileImage.addEventListener('pointerup', endPointer);
            mobileImage.addEventListener('pointercancel', endPointer);
            mobileImage.addEventListener('lostpointercapture', endPointer);

            function fitMobileImage() {
                if (
                    !mobileImage.naturalWidth ||
                    !mobileImage.naturalHeight ||
                    !mobileImage.offsetWidth ||
                    !mobileImage.offsetHeight ||
                    !mobileImageScroll.clientWidth ||
                    !mobileImageScroll.clientHeight
                ) {
                    return;
                }

                var widthScale =
                    mobileImageScroll.clientWidth / mobileImage.offsetWidth;
                var heightScale =
                    mobileImageScroll.clientHeight / mobileImage.offsetHeight;

                minZoom = Math.max(widthScale, heightScale);
                maxZoom = minZoom * 4;
                zoom = minZoom;
                panX = 0;
                panY = 0;
                updateTouchTransform();
            }

            mobileImage.addEventListener('load', fitMobileImage);
            window.addEventListener('resize', function() {
                if (!modal.classList.contains('hidden')) {
                    fitMobileImage();
                }
            });

            // --------------------------------------
            // ANIMATION HELPERS
            // --------------------------------------
            function animateIn(dialog) {
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');

                dialog.classList.remove(
                    'opacity-0',
                    'scale-95',
                    'translate-y-4'
                );

                dialog.classList.add(
                    'opacity-100',
                    'scale-100',
                    'translate-y-0'
                );
            }

            function animateOut(dialog) {
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');

                dialog.classList.remove(
                    'opacity-100',
                    'scale-100',
                    'translate-y-0'
                );

                dialog.classList.add(
                    'opacity-0',
                    'scale-95',
                    'translate-y-4'
                );
            }

            function resetDialogAnimation(dialog) {
                dialog.classList.remove(
                    'opacity-100',
                    'scale-100',
                    'translate-y-0'
                );

                dialog.classList.add(
                    'opacity-0',
                    'scale-95',
                    'translate-y-4'
                );
            }

            // --------------------------------------
            // OPEN MODAL
            // --------------------------------------
            function openModal(image) {
                if (closeTimer) {
                    clearTimeout(closeTimer);
                    closeTimer = null;
                }

                isTransitioning = false;

                // Ambil informasi rute dari alt gambar.
                var routeName = image.alt.match(/\b(1K|5K|10K)\b/);
                var route = routeName ? routeName[1] : 'rute';

                var title =
                    'Peta Rute Disney Run Jakarta 2026 - ' + route;

                var imageSrc =
                    image.dataset.fullSrc ||
                    image.currentSrc ||
                    image.src;

                var imageAlt =
                    image.alt ||
                    ('Peta rute lari ' + route + ' Disney Run Jakarta 2026');

                // Sinkronisasi judul desktop dan mobile.
                desktopTitle.textContent = title;
                mobileTitle.textContent = title;

                // Sinkronisasi gambar desktop dan mobile.
                desktopImage.src = imageSrc;
                mobileImage.src = imageSrc;

                desktopImage.alt = imageAlt;
                mobileImage.alt = imageAlt;

                // Reset posisi gambar.
                desktopImageScroll.scrollTop = 0;
                desktopImageScroll.scrollLeft = 0;

                resetZoom();

                // Reset animasi kedua dialog.
                resetDialogAnimation(desktopDialog);
                resetDialogAnimation(mobileDialog);

                // Tampilkan parent modal.
                modal.classList.remove('hidden');
                modal.classList.add('flex');

                // Kunci scrolling halaman.
                document.body.classList.add('overflow-hidden');

                // Paksa browser membaca perubahan layout.
                modal.offsetHeight;

                // Jalankan animasi pada dialog aktif.
                requestAnimationFrame(function() {
                    fitMobileImage();
                    animateIn(getActiveDialog());
                    getActiveCloseButton().focus();
                });
            }

            // --------------------------------------
            // CLOSE MODAL
            // --------------------------------------
            function closeModal() {
                if (
                    modal.classList.contains('hidden') ||
                    isTransitioning
                ) {
                    return;
                }

                isTransitioning = true;

                // Animasikan backdrop dan kedua dialog.
                // Ini juga mencegah dialog lama tertinggal
                // jika ukuran viewport berubah.
                animateOut(desktopDialog);
                animateOut(mobileDialog);

                closeTimer = setTimeout(function() {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');

                    document.body.classList.remove('overflow-hidden');

                    isTransitioning = false;
                    closeTimer = null;
                }, 300);
            }

            // --------------------------------------
            // CLOSE BUTTONS
            // --------------------------------------
            desktopCloseButton.addEventListener(
                'click',
                closeModal
            );

            mobileCloseButton.addEventListener(
                'click',
                closeModal
            );

            backdrop.addEventListener('click', closeModal);

            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });

            // --------------------------------------
            // KEYBOARD EVENTS
            // --------------------------------------
            document.addEventListener('keydown', function(event) {
                if (modal.classList.contains('hidden')) {
                    return;
                }

                if (event.key === 'Escape') {
                    closeModal();
                }
            });

            // --------------------------------------
            // RESPONSIVE CHANGE
            // --------------------------------------
            function handleViewportChange() {
                if (modal.classList.contains('hidden')) {
                    return;
                }

                // Sembunyikan status animasi kedua dialog.
                resetDialogAnimation(desktopDialog);
                resetDialogAnimation(mobileDialog);

                // Jalankan animasi pada versi yang aktif.
                requestAnimationFrame(function() {
                    animateIn(getActiveDialog());
                });
            }

            if (desktopMedia.addEventListener) {
                desktopMedia.addEventListener(
                    'change',
                    handleViewportChange
                );
            } else {
                // Fallback untuk browser lama.
                desktopMedia.addListener(handleViewportChange);
            }

            // --------------------------------------
            // MAP IMAGE CLICK EVENTS
            // --------------------------------------
            mapImages.forEach(function(image) {
                image.classList.add('cursor-zoom-in');

                image.setAttribute('tabindex', '0');
                image.setAttribute('role', 'button');

                if (!image.hasAttribute('aria-label')) {
                    image.setAttribute(
                        'aria-label',
                        'Buka peta rute ' + image.alt
                    );
                }

                // Pertahankan mekanisme klik card lama.
                var panel = image.closest('.route-panel');

                var card = panel ?
                    panel.querySelector('.rounded-2xl') :
                    null;

                if (card) {
                    card.addEventListener('click', function(event) {
                        // Hindari membuka modal dua kali saat
                        // gambar memiliki handler keyboard sendiri.
                        if (event.target === image) {
                            openModal(image);
                        } else {
                            openModal(image);
                        }
                    });
                } else {
                    image.addEventListener('click', function() {
                        openModal(image);
                    });
                }

                // Dukungan keyboard untuk gambar peta.
                image.addEventListener('keydown', function(event) {
                    if (
                        event.key === 'Enter' ||
                        event.key === ' '
                    ) {
                        event.preventDefault();
                        openModal(image);
                    }
                });
            });

            // --------------------------------------
            // INITIAL STATE
            // --------------------------------------
            resetZoom();

            // Opsional: memungkinkan modal dibuka
            // dari tombol atau script lain.
            window.openRouteMap = openModal;
            window.closeRouteMap = closeModal;
        })();
    </script>
@endpush
