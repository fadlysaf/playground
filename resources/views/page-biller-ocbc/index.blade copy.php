@extends('app')

@section('isOCBC', true)

@push('style')
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        /* Dynamic state styles */
        .btn-tab.active-tab {
            border-color: #ff0000;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-tab.active-tab .floating-label {
            background-color: #ff0000;
            color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .promo-panel {
            display: none;
        }

        .promo-panel.active-panel {
            display: block;
        }

        .step-item.active-step .step-number {
            background-color: #e11d2e;
        }

        .step-item.active-step .step-text {
            color: #1f2937;
            font-weight: 700;
        }
    </style>
@endpush

@section('content')
    <section id="hero-section" class="relative w-full min-h-screen flex flex-col md:flex-row items-stretch bg-[#f2f4f7] overflow-hidden">
        <div class="hero-content relative z-10 flex-none md:flex-[0_0_45%] flex flex-col items-center md:items-start justify-center text-center md:text-left gap-[15px] px-5 py-8 md:p-[60px] bg-white order-2 md:order-none">
            <div class="title-banner">
                <h1 class="text-[28px] md:text-[42px] font-bold m-0 tracking-[-1px] text-[#1a1a1a] leading-tight">Nikmati Beragam Promo <span class="higlight-banner text-[#ff0000]">Bayar Tagihan</span> di <span
                        class="higlight-banner text-[#ff0000]">OCBC mobile</span></h1>
            </div>

            <p class="desc-banner text-[#4a4a4a] text-base md:text-[1.1rem] leading-[1.5] max-w-full md:max-w-[520px] text-justify">
                Bayar tagihan jadi lebih hemat dengan berbagai promo menarik. Mulai dari listrik, air, internet, hingga
                tagihan lainnya, semuanya lebih praktis dalam satu aplikasi.
            </p>

            <a href="" class="cta-button inline-block px-5 py-2 md:px-7 md:py-2.5 text-[13px] md:text-sm font-bold text-center text-white bg-[#ff0000] rounded-[20px] shadow-[0_4px_10px_rgba(0,0,0,0.08)] transition-all duration-200 hover:-translate-y-1.5 hover:bg-[#ff0000]">
                Download OCBC mobile
            </a>
        </div>

        <div class="hero-image-panel flex-1 relative h-[260px] md:h-auto order-1 md:order-none">
            <img class="w-full h-full object-cover block" src="https://images.unsplash.com/photo-1586637383694-3ab1a6c70714?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="OCBC mobile app">
            <div class="absolute inset-0 bg-gradient-to-l from-black/5 to-black/25 pointer-events-none"></div>
        </div>
    </section>
    <section id="promo-section" class="relative w-full min-h-screen md:min-h-screen flex items-stretch bg-[#f9fafb] overflow-hidden py-10 md:py-0">
        <div class="container max-w-[1200px] mx-auto px-5 py-10 md:px-[30px] md:py-[75px]">
            <div class="promo-header text-center flex flex-col justify-center mt-3">
                <h1 class="text-[22px] md:text-[32px] font-bold text-[#111827]">Nikmati Promo Bayar Tagihan OCBC mobile</h1>
                <p class="promo-desc text-sm md:text-base text-[#4b5563] mt-2">Dapatkan promo menarik untuk persiapan liburan Anda dengan kartu OCBC.</p>
            </div>
            <div class="promo-tabs relative z-30 flex gap-3 md:gap-5 mt-5 md:mt-[30px] px-5 pb-2.5 md:p-0 overflow-x-auto md:overflow-x-visible justify-start md:justify-center no-scrollbar" role="tablist">
                <button class="btn-tab active-tab flex flex-col items-center justify-start shrink-0 w-[110px] sm:w-[130px] md:w-[210px] h-[140px] sm:h-[160px] md:h-[240px] p-2.5 sm:p-[10px] md:p-[15px] border-2 border-transparent rounded-2xl cursor-pointer bg-white text-[#111827] shadow-[0_8px_20px_rgba(0,0,0,0.1)] mb-5 md:mb-[35px] transition-all duration-300 hover:-translate-y-0.5" role="tab" aria-selected="true" data-target="panel-topup">
                    <div class="tab-icon-wrapper w-[75px] sm:w-[90px] md:w-[160px] h-[75px] sm:h-[90px] md:h-[160px] mx-auto">
                        <img class="w-full h-full rounded-lg object-cover" src="https://www.svgrepo.com/show/333812/credit-card.svg" alt="Global Kredit">
                    </div>
                    <span class="floating-label whitespace-nowrap text-[11px] md:text-[13px] font-bold text-[#4b5563] bg-[#f3f4f6] px-2.5 py-0.5 md:px-3 md:py-1 rounded-xl transition-all duration-300 mt-2 md:mt-3">Top Up</span>
                </button>
                <button class="btn-tab flex flex-col items-center justify-start shrink-0 w-[110px] sm:w-[130px] md:w-[210px] h-[140px] sm:h-[160px] md:h-[240px] p-2.5 sm:p-[10px] md:p-[15px] border-2 border-transparent rounded-2xl cursor-pointer bg-white text-[#111827] shadow-[0_8px_20px_rgba(0,0,0,0.1)] mb-5 md:mb-[35px] transition-all duration-300 hover:-translate-y-0.5" role="tab" aria-selected="false" data-target="panel-pulsa">
                    <div class="tab-icon-wrapper w-[75px] sm:w-[90px] md:w-[160px] h-[75px] sm:h-[90px] md:h-[160px] mx-auto">
                        <img class="w-full h-full rounded-lg object-cover" src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Pulsa & Internet">
                    </div>
                    <span class="floating-label whitespace-nowrap text-[11px] md:text-[13px] font-bold text-[#4b5563] bg-[#f3f4f6] px-2.5 py-0.5 md:px-3 md:py-1 rounded-xl transition-all duration-300 mt-2 md:mt-3">Pulsa & Internet</span>
                </button>
                <button class="btn-tab flex flex-col items-center justify-start shrink-0 w-[110px] sm:w-[130px] md:w-[210px] h-[140px] sm:h-[160px] md:h-[240px] p-2.5 sm:p-[10px] md:p-[15px] border-2 border-transparent rounded-2xl cursor-pointer bg-white text-[#111827] shadow-[0_8px_20px_rgba(0,0,0,0.1)] mb-5 md:mb-[35px] transition-all duration-300 hover:-translate-y-0.5" role="tab" aria-selected="false" data-target="panel-tagihan">
                    <div class="tab-icon-wrapper w-[75px] sm:w-[90px] md:w-[160px] h-[75px] sm:h-[90px] md:h-[160px] mx-auto">
                        <img class="w-full h-full rounded-lg object-cover" src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Tagihan Rumah">
                    </div>
                    <span class="floating-label whitespace-nowrap text-[11px] md:text-[13px] font-bold text-[#4b5563] bg-[#f3f4f6] px-2.5 py-0.5 md:px-3 md:py-1 rounded-xl transition-all duration-300 mt-2 md:mt-3">Tagihan Rumah</span>
                </button>
                <button class="btn-tab flex flex-col items-center justify-start shrink-0 w-[110px] sm:w-[130px] md:w-[210px] h-[140px] sm:h-[160px] md:h-[240px] p-2.5 sm:p-[10px] md:p-[15px] border-2 border-transparent rounded-2xl cursor-pointer bg-white text-[#111827] shadow-[0_8px_20px_rgba(0,0,0,0.1)] mb-5 md:mb-[35px] transition-all duration-300 hover:-translate-y-0.5" role="tab" aria-selected="false" data-target="panel-sosial">
                    <div class="tab-icon-wrapper w-[75px] sm:w-[90px] md:w-[160px] h-[75px] sm:h-[90px] md:h-[160px] mx-auto">
                        <img class="w-full h-full rounded-lg object-cover" src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Publik & Sosial">
                    </div>
                    <span class="floating-label whitespace-nowrap text-[11px] md:text-[13px] font-bold text-[#4b5563] bg-[#f3f4f6] px-2.5 py-0.5 md:px-3 md:py-1 rounded-xl transition-all duration-300 mt-2 md:mt-3">Publik & Sosial</span>
                </button>
                <button class="btn-tab flex flex-col items-center justify-start shrink-0 w-[110px] sm:w-[130px] md:w-[210px] h-[140px] sm:h-[160px] md:h-[240px] p-2.5 sm:p-[10px] md:p-[15px] border-2 border-transparent rounded-2xl cursor-pointer bg-white text-[#111827] shadow-[0_8px_20px_rgba(0,0,0,0.1)] mb-5 md:mb-[35px] transition-all duration-300 hover:-translate-y-0.5" role="tab" aria-selected="false" data-target="panel-lainnya">
                    <div class="tab-icon-wrapper w-[75px] sm:w-[90px] md:w-[160px] h-[75px] sm:h-[90px] md:h-[160px] mx-auto">
                        <img class="w-full h-full rounded-lg object-cover" src="https://www.svgrepo.com/show/250793/ecommerce.svg" alt="Lainnya">
                    </div>
                    <span class="floating-label whitespace-nowrap text-[11px] md:text-[13px] font-bold text-[#4b5563] bg-[#f3f4f6] px-2.5 py-0.5 md:px-3 md:py-1 rounded-xl transition-all duration-300 mt-2 md:mt-3">Lainnya</span>
                </button>
            </div>

            <div class="promo-panel active-panel" id="panel-topup" role="tabpanel">
                <div class="promo-content grid grid-cols-2 md:grid-cols-[repeat(auto-fill,minmax(270px,1fr))] gap-5 py-5 max-w-full md:max-w-[1250px] mx-auto justify-center items-stretch">
                    <div class="promo-card flex flex-col w-full h-full max-w-full md:max-w-[290px] bg-white rounded-xl overflow-hidden border border-[#e5e7eb] shadow-[0_4px_6px_rgba(0,0,0,0.05)] transition-all duration-300 hover:shadow-[0_8px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1">
                        <div class="promo-image relative w-full h-[200px] p-0">
                            <span class="promo-badge absolute top-[15px] right-0 bg-[#e11d2e] text-white px-3.5 py-1.5 text-[11px] font-bold uppercase rounded-l-[20px] z-10 shadow-[0_2px_6px_rgba(0,0,0,0.15)]">NEW PROMO</span>
                            <img class="w-full h-full object-cover block" src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body flex flex-col p-[18px_20px] gap-1.5">
                            <small class="promo-category text-xs font-bold text-[#e11d2e] uppercase tracking-[0.5px]">Promo 1</small>
                            <h3 class="promo-title flex items-center gap-2 text-base font-bold text-black m-0 leading-[1.4]">Promo 1</h3>
                            <p class="promo-date text-[13px] font-medium text-[#9ca3af]">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-pulsa" role="tabpanel">
                <div class="promo-content grid grid-cols-2 md:grid-cols-[repeat(auto-fill,minmax(270px,1fr))] gap-5 py-5 max-w-full md:max-w-[1250px] mx-auto justify-center items-stretch">
                    <div class="promo-card flex flex-col w-full h-full max-w-full md:max-w-[290px] bg-white rounded-xl overflow-hidden border border-[#e5e7eb] shadow-[0_4px_6px_rgba(0,0,0,0.05)] transition-all duration-300 hover:shadow-[0_8px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1">
                        <div class="promo-image relative w-full h-[200px] p-0">
                            <span class="promo-badge absolute top-[15px] right-0 bg-[#e11d2e] text-white px-3.5 py-1.5 text-[11px] font-bold uppercase rounded-l-[20px] z-10 shadow-[0_2px_6px_rgba(0,0,0,0.15)]">NEW PROMO</span>
                            <img class="w-full h-full object-cover block" src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body flex flex-col p-[18px_20px] gap-1.5">
                            <small class="promo-category text-xs font-bold text-[#e11d2e] uppercase tracking-[0.5px]">Promo 2</small>
                            <h3 class="promo-title flex items-center gap-2 text-base font-bold text-black m-0 leading-[1.4]">Promo 1</h3>
                            <p class="promo-date text-[13px] font-medium text-[#9ca3af]">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-tagihan" role="tabpanel">
                <div class="promo-content grid grid-cols-2 md:grid-cols-[repeat(auto-fill,minmax(270px,1fr))] gap-5 py-5 max-w-full md:max-w-[1250px] mx-auto justify-center items-stretch">
                    <div class="promo-card flex flex-col w-full h-full max-w-full md:max-w-[290px] bg-white rounded-xl overflow-hidden border border-[#e5e7eb] shadow-[0_4px_6px_rgba(0,0,0,0.05)] transition-all duration-300 hover:shadow-[0_8px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1">
                        <div class="promo-image relative w-full h-[200px] p-0">
                            <span class="promo-badge absolute top-[15px] right-0 bg-[#e11d2e] text-white px-3.5 py-1.5 text-[11px] font-bold uppercase rounded-l-[20px] z-10 shadow-[0_2px_6px_rgba(0,0,0,0.15)]">NEW PROMO</span>
                            <img class="w-full h-full object-cover block" src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body flex flex-col p-[18px_20px] gap-1.5">
                            <small class="promo-category text-xs font-bold text-[#e11d2e] uppercase tracking-[0.5px]">Promo 3</small>
                            <h3 class="promo-title flex items-center gap-2 text-base font-bold text-black m-0 leading-[1.4]">Promo 1</h3>
                            <p class="promo-date text-[13px] font-medium text-[#9ca3af]">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-sosial" role="tabpanel">
                <div class="promo-content grid grid-cols-2 md:grid-cols-[repeat(auto-fill,minmax(270px,1fr))] gap-5 py-5 max-w-full md:max-w-[1250px] mx-auto justify-center items-stretch">
                    <div class="promo-card flex flex-col w-full h-full max-w-full md:max-w-[290px] bg-white rounded-xl overflow-hidden border border-[#e5e7eb] shadow-[0_4px_6px_rgba(0,0,0,0.05)] transition-all duration-300 hover:shadow-[0_8px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1">
                        <div class="promo-image relative w-full h-[200px] p-0">
                            <span class="promo-badge absolute top-[15px] right-0 bg-[#e11d2e] text-white px-3.5 py-1.5 text-[11px] font-bold uppercase rounded-l-[20px] z-10 shadow-[0_2px_6px_rgba(0,0,0,0.15)]">NEW PROMO</span>
                            <img class="w-full h-full object-cover block" src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body flex flex-col p-[18px_20px] gap-1.5">
                            <small class="promo-category text-xs font-bold text-[#e11d2e] uppercase tracking-[0.5px]">Promo 4</small>
                            <h3 class="promo-title flex items-center gap-2 text-base font-bold text-black m-0 leading-[1.4]">Promo 1</h3>
                            <p class="promo-date text-[13px] font-medium text-[#9ca3af]">Shell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-lainnya" role="tabpanel">
                <div class="promo-content grid grid-cols-2 md:grid-cols-[repeat(auto-fill,minmax(270px,1fr))] gap-5 py-5 max-w-full md:max-w-[1250px] mx-auto justify-center items-stretch">
                    <div class="promo-card flex flex-col w-full h-full max-w-full md:max-w-[290px] bg-white rounded-xl overflow-hidden border border-[#e5e7eb] shadow-[0_4px_6px_rgba(0,0,0,0.05)] transition-all duration-300 hover:shadow-[0_8px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1">
                        <div class="promo-image relative w-full h-[200px] p-0">
                            <span class="promo-badge absolute top-[15px] right-0 bg-[#e11d2e] text-white px-3.5 py-1.5 text-[11px] font-bold uppercase rounded-l-[20px] z-10 shadow-[0_2px_6px_rgba(0,0,0,0.15)]">NEW PROMO</span>
                            <img class="w-full h-full object-cover block" src="https://plus.unsplash.com/premium_vector-1780758604115-896ef3fe9aac?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body flex flex-col p-[18px_20px] gap-1.5">
                            <small class="promo-category text-xs font-bold text-[#e11d2e] uppercase tracking-[0.5px]">Promo 5</small>
                            <h3 class="promo-title flex items-center gap-2 text-base font-bold text-black m-0 leading-[1.4]">Promo 1</h3>
                            <p class="promo-date text-[13px] font-medium text-[#9ca3af]">Shell</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="step-by-step" class="relative">
        <div class="step-container max-w-[1250px] mx-auto px-5 py-10 md:py-[60px]">
            <div class="section-title mb-2 text-sm font-bold text-[#e11d2e] tracking-[1px]">CARA MUDAH PEMBAYARAN</div>
            <div class="section-subtitle flex items-center gap-2 md:gap-3 mb-5 md:mb-[30px] pb-3 md:pb-4 text-lg md:text-2xl font-bold text-[#1f2937] border-b border-[#e5e7eb]">
                <span class="badge-red px-2.5 py-1 md:px-3.5 md:py-1.5 bg-[#e11d2e] text-white rounded-md text-base md:text-xl font-bold">Langkah Pembayaran</span> di OCBC mobile
            </div>
            <div class="step-layout grid grid-cols-1 md:grid-cols-[280px_1fr] gap-[30px] md:gap-[50px] items-center p-5 md:p-10 bg-[#f3f4f6] rounded-[20px] justify-items-center md:justify-items-stretch">

                <div class="carousel-box relative flex justify-center items-center w-full md:w-[280px] max-w-[280px] h-[320px] md:h-[380px] bg-[#e9eff4] rounded-2xl p-0">
                    <button class="carousel-btn prev-btn absolute top-1/2 -translate-y-1/2 flex justify-center items-center w-9 h-9 border-0 rounded-full bg-[#e11d2e] text-white cursor-pointer transition-colors duration-200 z-10 hover:bg-[#c81325] left-[-18px]" data-dir="-1" aria-label="Sebelumnya">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <div class="carousel-track-wrapper w-full h-full overflow-hidden rounded-xl">
                        <div class="carousel-track flex w-full h-full transition-transform duration-500 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] will-change-transform">
                            <img class="slide active-slide shrink-0 w-full h-full object-cover" data-slide="0"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 1">
                            <img class="slide shrink-0 w-full h-full object-cover" data-slide="1"
                                src="https://plus.unsplash.com/premium_vector-1775727731936-8920a9cf1921?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 2">
                            <img class="slide shrink-0 w-full h-full object-cover" data-slide="2"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 3">
                            <img class="slide shrink-0 w-full h-full object-cover" data-slide="3"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 4">
                            <img class="slide shrink-0 w-full h-full object-cover" data-slide="4"
                                src="https://images.unsplash.com/vector-1781926093117-5e273e8b8a7f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Step 5">
                        </div>
                    </div>

                    <button class="carousel-btn next-btn absolute top-1/2 -translate-y-1/2 flex justify-center items-center w-9 h-9 border-0 rounded-full bg-[#e11d2e] text-white cursor-pointer transition-colors duration-200 z-10 hover:bg-[#c81325] right-[-18px]" data-dir="1" aria-label="Selanjutnya">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

                <!-- STEP LIST -->
                <div class="step-list flex flex-col gap-6 w-full">
                    <div class="step-item active-step flex items-start gap-4 cursor-pointer" data-step="0">
                        <div class="step-number shrink-0 flex justify-center items-center w-7 h-7 rounded-full bg-[#d1d5db] text-white font-bold text-sm transition-all duration-300 mt-0.5">1</div>
                        <div class="step-text text-[#9ca3af] text-sm md:text-base leading-normal transition-all duration-300">Log in OCBC mobile, lalu pilih "Semua Menu"</div>
                    </div>
                    <div class="step-item flex items-start gap-4 cursor-pointer" data-step="1">
                        <div class="step-number shrink-0 flex justify-center items-center w-7 h-7 rounded-full bg-[#d1d5db] text-white font-bold text-sm transition-all duration-300 mt-0.5">2</div>
                        <div class="step-text text-[#9ca3af] text-sm md:text-base leading-normal transition-all duration-300">Klik menu "Tap Kartu Kredit" dan setujui syarat dan ketentuan aktivasi Tap Kartu Kredit</div>
                    </div>
                    <div class="step-item flex items-start gap-4 cursor-pointer" data-step="2">
                        <div class="step-number shrink-0 flex justify-center items-center w-7 h-7 rounded-full bg-[#d1d5db] text-white font-bold text-sm transition-all duration-300 mt-0.5">3</div>
                        <div class="step-text text-[#9ca3af] text-sm md:text-base leading-normal transition-all duration-300">Pilih Kartu Kredit OCBC sebagai sumber dana yang ingin Anda gunakan untuk transaksi dengan Tap Kartu Kredit</div>
                    </div>
                    <div class="step-item flex items-start gap-4 cursor-pointer" data-step="3">
                        <div class="step-number shrink-0 flex justify-center items-center w-7 h-7 rounded-full bg-[#d1d5db] text-white font-bold text-sm transition-all duration-300 mt-0.5">4</div>
                        <div class="step-text text-[#9ca3af] text-sm md:text-base leading-normal transition-all duration-300">Klik tombol "Aktifkan" dan pastikan fitur NFC telah diaktifkan pada pengaturan Smartphone dan OCBC mobile telah dijadikan sebagai aplikasi utama untuk pembayaran nirsentuh (contactless)</div>
                    </div>
                    <div class="step-item flex items-start gap-4 cursor-pointer" data-step="4">
                        <div class="step-number shrink-0 flex justify-center items-center w-7 h-7 rounded-full bg-[#d1d5db] text-white font-bold text-sm transition-all duration-300 mt-0.5">5</div>
                        <div class="step-text text-[#9ca3af] text-sm md:text-base leading-normal transition-all duration-300">Kartu berhasil diaktifkan dan sudah bisa digunakan untuk Tap Kartu Kredit</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('#promo-section .btn-tab');
            var panels = document.querySelectorAll('#promo-section .promo-panel');

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
            if (cards) {
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
            }

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.region-card')) {
                    if (cards) {
                        cards.forEach(function(c) {
                            c.classList.remove('is-flipped');
                        });
                    }
                }
            });

            function scrollByCard(dir) {
                if (!content) return;
                var card = content.querySelector('.region-card');
                if (!card) return;
                var gap = 20;
                var distance = (card.offsetWidth + gap) * dir;
                content.scrollBy({
                    left: distance,
                    behavior: 'smooth'
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    scrollByCard(-1);
                });
            }
            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    scrollByCard(1);
                });
            }
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scope = document.getElementById('step-by-step');
            if (!scope) return;

            const track = scope.querySelector('.carousel-track');
            const slides = scope.querySelectorAll('.slide');
            const steps = scope.querySelectorAll('.step-item');
            const prevBtn = scope.querySelector('.prev-btn');
            const nextBtn = scope.querySelector('.next-btn');

            const total = slides.length;
            let current = 0;

            function goToStep(index) {
                current = (index + total) % total;

                if (track) {
                    track.style.transform = `translateX(-${current * 100}%)`;
                }

                slides.forEach(slide => {
                    slide.classList.toggle('active-slide', Number(slide.dataset.slide) === current);
                });

                steps.forEach(step => {
                    step.classList.toggle('active-step', Number(step.dataset.step) === current);
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => goToStep(current + Number(prevBtn.dataset.dir)));
            }
            if (nextBtn) {
                nextBtn.addEventListener('click', () => goToStep(current + Number(nextBtn.dataset.dir)));
            }

            steps.forEach(step => {
                step.addEventListener('click', () => goToStep(Number(step.dataset.step)));
            });
        });
    </script>
@endpush
