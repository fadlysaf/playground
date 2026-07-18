@extends('app')

@section('isOCBC', true)

@section('content')
    <section id="hero-section">
        <div class="hero-bg-image">
            <img src="https://images.unsplash.com/photo-1718427778421-ad719f965738?q=80&w=1511&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <div class="badge-banner-layout">
            <div class="badge-banner-promo badge-pos-top-left">
                <div class="card-badge-promo">
                    <span class="badge-icon">🔥</span>
                    <p>Promo Spesial #KartuWajibLiburan</p>
                </div>
            </div>
            <div class="badge-banner-promo badge-pos-top-right">
                <div class="card-badge-promo">
                    <span class="badge-icon">🔥</span>
                    <p>Promo Spesial #KartuWajibLiburan</p>
                </div>
            </div>

            <div class="badge-banner-promo badge-pos-bottom-left">
                <div class="card-badge-promo">
                    <span class="badge-icon">✈️</span>
                    <p>Diskon Tiket hingga 50%</p>
                </div>
            </div>

            <div class="badge-banner-promo badge-pos-bottom-right">
                <div class="card-badge-promo">
                    <span class="badge-icon">🏨</span>
                    <p>Cashback Hotel Hingga Rp500 Ribu</p>
                </div>
            </div>
        </div>
        <div class="hero-content">
            <div class="title-banner">
                <h1>OCBC <span class="higlight-banner">#KartuWajibLiburan</span></h1>
            </div>
            <p class="desc-banner">
                Nikmati berbagai promo eksklusif di destinasi favorit dunia.
                Bayar dengan OCBC Nyala Global Debit atau Kartu Kredit 90°N
                untuk pengalaman liburan yang lebih nyaman dan menguntungkan.
            </p>
        </div>
    </section>

    <section id="campaign-section">
        <div class="container">
            <div class="campaign-header">
                <h2>Liburan bebas kemana aja,
                    pakai <span class="higlight">#KartuWajibLiburan</span>
                    transaksi beres liburan berasa bebasnya</h2>
            </div>

            <div class="box-product">
                <div class="product-content">
                    <div class="product-header">
                        <h3 class="product-title"><span class="highlight-text">Nyala Global</span> Debit</h3>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/Nyala_da93cfa5b4.svg"
                                alt="content image">
                        </div>
                        <div class="product-body">
                            <div class="highlight-card">
                                <h3>Transaksi bebas biaya konversi</h3>
                                <p>Tinggal Tap #KartuWajibLiburan OCBC Nyala Global Debit langsung siap
                                    transaksi dalam
                                    berbagai mata uang.</p>
                            </div>

                            <div id="accordion-collapse" data-accordion="collapse"
                                class="rounded-lg border border-gray-200 overflow-hidden shadow-sm w-full">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-lg border border-t-0 border-x-0 border-b-gray-200 hover:text-gray-900 hover:bg-gray-50 gap-3"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span>What is Flowbite?</span>
                                        <svg data-accordion-icon
                                            class="w-5 h-5 rotate-180 shrink-0 transition-transform duration-200"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m5 15 7-7 7 7" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1"
                                    class="border border-s-0 border-e-0 border-t-0 border-b-gray-200"
                                    aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-4 md:p-5">
                                        <p class="mb-2 text-gray-500">Flowbite is an open-source library of interactive
                                            components built on top of Tailwind CSS including buttons, dropdowns, modals,
                                            navbars, and more.</p>
                                        <p class="text-gray-500">Check out this guide to learn how to <a
                                                href="/docs/getting-started/introduction/"
                                                class="text-red-600 hover:underline">get started</a> and start developing
                                            websites even faster with components on top of Tailwind CSS.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-x-0 border-b-gray-200 border-t-0 hover:text-gray-900 hover:bg-gray-50 gap-3"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-2">
                                        <span>Is there a Figma file available?</span>
                                        <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-200"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m5 15 7-7 7 7" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2"
                                    class="hidden border border-s-0 border-e-0 border-t-0 border-b-gray-200"
                                    aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-4 md:p-5">
                                        <p class="mb-2 text-gray-500">Flowbite is first conceptualized and designed using
                                            the
                                            Figma software so everything you see in the library has a design equivalent in
                                            our Figma file.</p>
                                        <p class="text-gray-500">Check out the <a href="https://flowbite.com/figma/"
                                                class="text-red-600 hover:underline">Figma design system</a> based on the
                                            utility classes from Tailwind CSS and components from Flowbite.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 hover:text-gray-900 hover:bg-gray-50 gap-3"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-3">
                                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                                        <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-200"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m5 15 7-7 7 7" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-4 md:p-5 border border-t-gray-200 border-b-0 border-x-0">
                                        <p class="mb-2 text-gray-500">The main difference is that the core components from
                                            Flowbite are open source under the MIT license, whereas Tailwind UI is a paid
                                            product. Another difference is that Flowbite relies on smaller and standalone
                                            components, whereas Tailwind UI offers sections of pages.</p>
                                        <p class="mb-2 text-gray-500">However, we actually recommend using both Flowbite,
                                            Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                                            from using the best of two worlds.</p>
                                        <p class="mb-2 text-gray-500">Learn more about these technologies:</p>
                                        <ul class="ps-5 text-gray-500 list-disc">
                                            <li><a href="https://flowbite.com/pro/"
                                                    class="text-red-600 hover:underline">Flowbite Pro</a></li>
                                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                                    class="text-red-600 hover:underline">Tailwind UI</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="btn-cta-layout">
                                <a href="#" class="btn-product-cta bg-primary">Info Lengkap</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta-content">
                <p>Cek beragam promo untuk persiapan traveling di sini!</p>
                <a href="" class="cta-button">Learn More</a>
            </div>
        </div>
    </section>

    <section id="region-section">
        <div class="region-header">
            <h2>Beda negara, beda lifestyle</h2>
            <p class="region-desc">Temukan lokasi kantor cabang OCBC terdekat di kota Anda.</p>
        </div>
        <div class="region-carousel">
            <button class="region-arrow prev" type="button" aria-label="Previous">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="region-arrow next" type="button" aria-label="Next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <div class="region-content" id="region-content">

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="region-card" data-country="england">
                    <div class="region-card-inner">
                        <div class="region-card-front">
                            <div class="region-image">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                            </div>
                            <p class="region-title">Inggris</p>
                        </div>
                        <div class="region-card-back">
                            <div class="region-information">
                                <img alt="Inggris"
                                    src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/insight_en_0566940490.png" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="region-card" data-country="swiss">
                    <div class="region-image">
                        <img alt="Swiss"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/swiss_159558bb0e.png" />
                    </div>
                    <p class="region-title">Swiss</p>
                </div>
                <div class="region-card" data-country="jp">
                    <div class="region-image">
                        <img alt="Jepang"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/jp_42227e3f2a.png" />
                    </div>
                    <p class="region-title">Jepang</p>
                </div>
                <div class="region-card" data-country="cn">
                    <div class="region-image">
                        <img alt="China"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/cn_e3bf55a879.png" />
                    </div>
                    <p class="region-title">China</p>
                </div>
                <div class="region-card" data-country="canada">
                    <div class="region-image">
                        <img alt="Kanada"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/canada_c2382d0b5f.png" />
                    </div>
                    <p class="region-title">Kanada</p>
                </div>
                <div class="region-card" data-country="sg">
                    <div class="region-image">
                        <img alt="Singapura"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/sg_2dc0e9566c.png" />
                    </div>
                    <p class="region-title">Singapura</p>
                </div>
                <div class="region-card" data-country="aus">
                    <div class="region-image">
                        <img alt="Australia"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/aus_0bbfc19f4a.png" />
                    </div>
                    <p class="region-title">Australia</p>
                </div>
                <div class="region-card" data-country="nz">
                    <div class="region-image">
                        <img alt="New Zealand"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/nz_8d40801ff4.png" />
                    </div>
                    <p class="region-title">New Zealand</p>
                </div>
                <div class="region-card" data-country="eu">
                    <div class="region-image">
                        <img alt="Eropa"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/eu_4d8a51bbf2.png" />
                    </div>
                    <p class="region-title">Eropa</p>
                </div>
                <div class="region-card" data-country="hk">
                    <div class="region-image">
                        <img alt="Hong Kong"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/hk_93c2754f22.png" />
                    </div>
                    <p class="region-title">Hong Kong</p>
                </div>
                <div class="region-card" data-country="us">
                    <div class="region-image">
                        <img alt="Amerika Serikat"
                            src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/us_f30f16e065.png" />
                    </div>
                    <p class="region-title">Amerika Serikat</p>
                </div> --}}
            </div>
        </div>
    </section>
    <section id="promo">
        <div class="container">
            <div class="promo-header">
                <h2>Promo menarik untuk persiapan liburan</h2>
                <p class="promo-desc">Dapatkan promo menarik untuk persiapan liburan Anda dengan kartu OCBC.</p>
                <div class="promo-tabs" role="tablist">
                    <button class="btn-tab active-tab" role="tab" aria-selected="true"
                        data-target="panel-global">Global Kredit</button>
                    <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-90n">Kartu Kredit
                        90°N</button>
                </div>
            </div>

            <div class="promo-panel active-panel" id="panel-global" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_shell_973ba6d548.jpg"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback hingga Rp200 Ribu</h3>
                            <p class="brand-text">Shell</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_tokopedia_d8e3098080.jpg"
                                alt="Hemat Tokopedia">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp100 Ribu</h3>
                            <p class="brand-text">Tokopedia</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_shopee_c76750f262.jpg"
                                alt="Hemat Shopee">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp100 Ribu</h3>
                            <p class="brand-text">Shopee</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_oh_some_013a8be0d9.jpg"
                                alt="Cashback OH!SOME">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback hingga Rp50 Ribu</h3>
                            <p class="brand-text">OH!SOME</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_astro_05568555a6.jpg"
                                alt="Hemat Astro">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp25 Ribu</h3>
                            <p class="brand-text">Astro</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/sociolla_logo_e787b71854.jpg"
                                alt="Cashback Sociolla">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback 12% di Website & Aplikasi Sociolla</h3>
                            <p class="brand-text">Sociolla</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/superindo_logo_00df94c3be.jpg"
                                alt="Cashback Super Indo">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback 20% hingga Rp40 Ribu</h3>
                            <p class="brand-text">Super Indo</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_traveloka_9032184f23.jpg"
                                alt="Hemat Traveloka">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp450 Ribu</h3>
                            <p class="brand-text">Traveloka</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_qatar_airways_1be2e5bc0a.jpg"
                                alt="Hemat Qatar Airways">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 10% untuk pembelian tiket pesawat Qatar Airways</h3>
                            <p class="brand-text">Qatar Airways</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_takashimaya_06cb3a291e.jpg"
                                alt="Hemat Takashimaya">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 15% di Takashimaya SC Singapore</h3>
                            <p class="brand-text">Takashimaya</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-90n" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/wyndham_logo_32e953a0c8.webp"
                                alt="Hemat Club Wyndham Asia">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 65% untuk liburan ke Bali, Bangkok, dan Phuket</h3>
                            <p class="brand-text">Club Wyndham Asia</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/the_legian_logo_0342d4540d.webp"
                                alt="Hemat The Legian Bali">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 40%</h3>
                            <p class="brand-text">The Legian Bali</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/anatara_logo_4ae10deb75.webp"
                                alt="Menginap Anantara Vacation Club">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Menginap 4D3N di Bali/Thailand hanya Rp2,8 Juta</h3>
                            <p class="brand-text">Anantara Vacation Club</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/millenium_logo_8954211579.webp"
                                alt="Bonus Millennium Hotels and Resorts">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Bonus menginap 1 malam</h3>
                            <p class="brand-text">Millennium Hotels and Resorts</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/ascot_logo_35fc3e4393.webp"
                                alt="Hemat Ascott">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 20% | Stay 3 Pay 2 Nights</h3>
                            <p class="brand-text">Ascott</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/the_westin_logo_045e4275fe.webp"
                                alt="Hemat The Westin Resort Nusa Dua Bali">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 20%</h3>
                            <p class="brand-text">The Westin Resort Nusa Dua Bali</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/intercon_logo_8f5a97d9f8.webp"
                                alt="Hemat Intercontinental Bali Sanur Resort">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Intercontinental Bali Sanur Resort</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/swissbel_logo_269b93cc6a.webp"
                                alt="Hemat Swiss-belhotel International">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Swiss-belhotel International</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/le_meridien_logo_ec0d1f9bc5.webp"
                                alt="Hemat Le Meridien Bali jimbaran">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Le Meridien Bali jimbaran</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/mo_logo_b8435165ba.webp"
                                alt="Hemat Mandarin Oriental Jakarta">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 15% | Harga Spesial</h3>
                            <p class="brand-text">Mandarin Oriental Jakarta</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/klook_logo_dfbd0feeca.webp"
                                alt="Hemat Klook">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp185 Ribu</h3>
                            <p class="brand-text">Klook</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/twg_logo_93001ff77f.webp"
                                alt="Hemat TWG Tea">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">TWG Tea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="app-banner">
        <div class="app-container">
            <div class="app-layout">
                <div class="app-content-wrapper">
                    <h1 class="app-title">Buka Nyala Dapatkan Cashback hingga Rp1 Juta & Jadi #FinanciallyFIT!</h1>
                    <a href="#" class="app-link-info">Klik untuk info lengkap cashback</a>
                    <div class="app-download-buttons">
                        <a href="#" class="app-btn-store">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                alt="Get it on Google Play">
                        </a>
                        <a href="#" class="app-btn-store">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                alt="Download on the App Store">
                        </a>
                    </div>
                </div>
                <div class="app-image-wrapper">
                    <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/hp_b80c308612.png"
                        alt="Mockup Aplikasi Nyala" class="app-mockup">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('#promo .btn-tab');
            var panels = document.querySelectorAll('#promo .promo-panel');

            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    tabs.forEach(function(t) {
                        t.classList.remove('active-tab');
                        t.setAttribute('aria-selected', 'false');
                    });
                    panels.forEach(function(p) {
                        p.classList.remove('active-panel');
                    });

                    tab.classList.add('active-tab');
                    tab.setAttribute('aria-selected', 'true');
                    document.getElementById(tab.dataset.target).classList.add('active-panel');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var content = document.getElementById('region-content');
            var cards = document.querySelectorAll('.region-card');
            var prevBtn = document.querySelector('.region-arrow.prev');
            var nextBtn = document.querySelector('.region-arrow.next');
            cards.forEach(function(card) {
                card.addEventListener('click', function(e) {
                    if (e.target.closest('.region-btn')) return;
                    e.stopPropagation();
                    var flipped = card.classList.contains('is-flipped');
                    cards.forEach(function(c) {
                        c.classList.remove('is-flipped');
                    });
                    if (!flipped) card.classList.add('is-flipped');
                });
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.region-card')) {
                    cards.forEach(function(c) {
                        c.classList.remove('is-flipped');
                    });
                }
            });

            function scrollByCard(dir) {
                var card = content.querySelector('.region-card');
                var gap = 20;
                var distance = (card.offsetWidth + gap) * dir;
                content.scrollBy({
                    left: distance,
                    behavior: 'smooth'
                });
            }

            prevBtn.addEventListener('click', function() {
                scrollByCard(-1);
            });
            nextBtn.addEventListener('click', function() {
                scrollByCard(1);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var accordionHeaders = document.querySelectorAll('[data-accordion-target]');

            accordionHeaders.forEach(function(button) {
                button.addEventListener('click', function() {
                    var targetId = button.getAttribute('data-accordion-target');
                    var target = document.querySelector(targetId);
                    var icon = button.querySelector('[data-accordion-icon]');

                    var isExpanded = button.getAttribute('aria-expanded') === 'true';

                    // Collapse all other items in this accordion if data-accordion="collapse" is set
                    var accordionContainer = button.closest('[data-accordion]');
                    if (accordionContainer) {
                        var siblings = accordionContainer.querySelectorAll(
                            '[data-accordion-target]');
                        siblings.forEach(function(sibButton) {
                            if (sibButton !== button) {
                                sibButton.setAttribute('aria-expanded', 'false');
                                var sibTarget = document.querySelector(sibButton
                                    .getAttribute('data-accordion-target'));
                                if (sibTarget) sibTarget.classList.add('hidden');
                                var sibIcon = sibButton.querySelector(
                                    '[data-accordion-icon]');
                                if (sibIcon) sibIcon.classList.remove('rotate-180');
                            }
                        });
                    }

                    // Toggle current
                    if (isExpanded) {
                        button.setAttribute('aria-expanded', 'false');
                        if (target) target.classList.add('hidden');
                        if (icon) icon.classList.remove('rotate-180');
                    } else {
                        button.setAttribute('aria-expanded', 'true');
                        if (target) target.classList.remove('hidden');
                        if (icon) icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>
@endpush
