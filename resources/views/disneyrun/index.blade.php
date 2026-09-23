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
                    <div
                        class="video-wrap video-wrap--normal rounded-3xl overflow-hidden shadow-lg relative z-10">
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
